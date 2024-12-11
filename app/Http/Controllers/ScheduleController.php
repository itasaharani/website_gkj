<?php

namespace App\Http\Controllers;
use App\Models\jadwal;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function index()
    {
        $jadwals = jadwal::all();
        return view('jadwalAdmin', compact('jadwals'));
    }

    public function create() {
        return view('jadwalTambah');
    }
    
    public function store(Request $request)
{
    $request->validate([
        'location' => 'required|string|max:50',
        'week' => 'required|in:I,II,III,IV,V', // Validasi untuk enum minggu
        'pelayan_firman' => 'required|string|max:100', // Validasi untuk pelayan firman
        'imam' => 'required|string|max:50', // Validasi untuk imam
        'language' => 'required|string|max:20', // Validasi untuk bahasa
    ]);

    // Simpan data ke database
    Jadwal::create([
        'location' => $request->location,
        'week' => $request->week,
        'pelayan_firman' => $request->pelayan_firman,
        'imam' => $request->imam,
        'language' => $request->language,
    ]);

    return redirect()->to('/jadwal')->with('success', 'Jadwal berhasil ditambahkan.');
}

public function update(Request $request, $id)
{
    // Cari jadwal berdasarkan ID
    $jadwal = Jadwal::findOrFail($id);

    // Validasi input
    $request->validate([
        'location' => 'nullable|string|max:50',
        'week' => 'nullable|in:I,II,III,IV,V', // Validasi untuk enum minggu
        'pelayan_firman' => 'nullable|string|max:100', // Validasi untuk pelayan firman
        'imam' => 'nullable|string|max:50', // Validasi untuk imam
        'language' => 'nullable|string|max:20', // Validasi untuk bahasa
    ]);

    // Update hanya field yang diisi
    $jadwal->update([
        'location' => $request->input('location') ?? $jadwal->location,
        'week' => $request->input('week') ?? $jadwal->week,
        'pelayan_firman' => $request->input('pelayan_firman') ?? $jadwal->pelayan_firman,
        'imam' => $request->input('imam') ?? $jadwal->imam,
        'language' => $request->input('language') ?? $jadwal->language,
    ]);

    return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
}

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
