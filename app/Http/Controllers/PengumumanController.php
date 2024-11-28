<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    // Menampilkan daftar pengumuman di index
    public function index()
    {
        $pengumumans = Pengumuman::all(); // Mengambil semua pengumuman
        return view('pengumumanAdmin', compact('pengumumans'));  // Merujuk ke view dengan nama 'adminPengumuman'
    }

    // Menampilkan detail pengumuman
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id); // Mencari pengumuman berdasarkan ID
        return view('showPengumuman', compact('pengumuman'));  // Sesuaikan dengan nama file view
    }

    // Menampilkan form untuk membuat pengumuman baru
    public function create()
    {
        return view('createPengumuman');  // Sesuaikan dengan nama file view
    }

    // Menyimpan pengumuman baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'tanggal' => 'required|date',
            'periode_hingga' => 'required|date|after_or_equal:tanggal',
        ]);

        Pengumuman::create($request->all());

        return redirect()->route('pengumuman.index')
                         ->with('success', 'Pengumuman berhasil dibuat.');
    }


    // Mengupdate pengumuman
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'tanggal' => 'required|date',
            'periode_hingga' => 'required|date|after_or_equal:tanggal',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->update($request->all());

        return redirect()->route('pengumuman.index')
                         ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    // Menghapus pengumuman
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')
                         ->with('success', 'Pengumuman berhasil dihapus.');
    }
}
