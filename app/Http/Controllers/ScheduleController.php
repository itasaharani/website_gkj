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
            'time' => 'required|date_format:H:i', // format waktu HH:MM
            'language' => 'required|string|max:20',
        ]);
    
        // Simpan data ke database langsung karena formatnya sudah sesuai dengan MySQL
        Jadwal::create($request->all());
    
        return redirect()->to('/jadwal')->with('success', 'Jadwal berhasil ditambahkan.');
    }
    
    public function update(Request $request, $id)
    {
        // Cari jadwal berdasarkan ID
        $jadwal = Jadwal::findOrFail($id);
    
        // Validasi input, tetap pastikan format yang sesuai
        $request->validate([
            'location' => 'nullable|string|max:50',
            'week' => 'nullable|in:I,II,III,IV,V', // Validasi untuk enum minggu
            'time' => 'nullable|date_format:H:i',
            'language' => 'nullable|string|max:20',
        ]);
    
        // Hanya update field yang diisi, jika tidak diisi, tetap gunakan nilai yang lama
        $jadwal->update([
            'location' => $request->input('location') ?? $jadwal->location,
            'week' => $request->input('week') ?? $jadwal->week,
            'time' => $request->input('time') ?? $jadwal->time,
            'language' => $request->input('language') ?? $jadwal->language,
        ]);
    
        // Redirect setelah berhasil mengupdate
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }
    

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
