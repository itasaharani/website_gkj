<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Gallery::all();
        return view('galleryAdmin', compact('photos'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            // Simpan gambar ke storage public/gallery
            $path = $request->file('photo')->store('gallery', 'public');
            // Simpan path gambar ke database
            Gallery::create(['photo' => $path]);
        }

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('photo')) {
            // Hapus foto lama
            Storage::disk('public')->delete($gallery->photo);

            // Simpan foto baru
            $path = $request->file('photo')->store('gallery', 'public');
            $gallery->photo = $path;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        // Hapus foto dari storage
        Storage::disk('public')->delete($gallery->photo);
        // Hapus data dari database
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil dihapus');
    }

}
