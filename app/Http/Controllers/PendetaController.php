<?php

namespace App\Http\Controllers;
use App\Models\Pendeta;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class PendetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendetas = Pendeta::all();
        return view('pendetaAdmin', compact('pendetas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendetaTambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('pendeta', 'public');
        }

        Pendeta::create($validated);

        return redirect()->route('pendeta.index')->with('success', 'Pendeta berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendeta $pendeta)
    {
        return view('pendetaAdmin.edit', compact('pendeta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $pendeta = Pendeta::findOrFail($id);

    // Validasi data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi foto
    ]);

    // Update nama pendeta
    $pendeta->name = $validatedData['name'];

    // Jika ada foto yang diunggah
    if ($request->hasFile('photo')) {
        // Hapus foto lama
        if (file_exists(storage_path('app/public/' . $pendeta->photo))) {
            unlink(storage_path('app/public/' . $pendeta->photo)); // Hapus file lama
        }

        // Simpan foto baru
        $path = $request->file('photo')->store('pendeta_photos', 'public');
        $pendeta->photo = $path; // Update dengan path foto baru
    }

    // Simpan perubahan pendeta
    $pendeta->save();

    return redirect()->route('pendeta.index')->with('success', 'Pendeta berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $pendeta = Pendeta::findOrFail($id);
    
    // Hapus foto jika ada file yang diupload
    if ($pendeta->photo) {
        Storage::delete('public/' . $pendeta->photo);
    }

    $pendeta->delete();

    return redirect()->route('pendeta.index')->with('success', 'Pendeta berhasil dihapus');
}

}
