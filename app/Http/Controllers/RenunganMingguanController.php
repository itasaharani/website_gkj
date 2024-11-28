<?php

namespace App\Http\Controllers;
use App\Models\RenunganMingguan;
use Illuminate\Http\Request;

class RenunganMingguanController extends Controller
{
   
    // Menampilkan semua renungan di halaman admin
    public function index()
    {
        $renungan = RenunganMingguan::all();
        return view('renunganAdmin', compact('renungan'));
    }

    // Menampilkan form untuk membuat renungan baru
    public function create()
    {
        return view('renunganTambah');
    }

    // Menyimpan renungan baru
    // Menyimpan data renungan baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'ayat' => 'required|string|max:255',
            'konten' => 'required',
            'oleh' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        RenunganMingguan::create($request->all());

        return redirect()->route('renungan.index')->with('success', 'Renungan berhasil ditambahkan!');
    }

    // Menampilkan halaman form edit renungan
    public function edit(RenunganMingguan $renungan)
    {
        return view('renunganEdit', compact('renungan')); // Form untuk edit renungan
    }

    // Memperbarui data renungan
    public function update(Request $request, RenunganMingguan $renungan)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'ayat' => 'required|string|max:255',
            'konten' => 'required',
            'oleh' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        $renungan->update($request->all());

        return redirect()->route('renungan.index')->with('success', 'Renungan berhasil diperbarui!');
    }

    // Menghapus renungan
    public function destroy(RenunganMingguan $renungan)
    {
        $renungan->delete();

        return redirect()->route('renungan.index')->with('success', 'Renungan berhasil dihapus!');
    }

    // Menampilkan renungan di halaman publik
   
}


