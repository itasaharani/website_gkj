<?php

namespace App\Http\Controllers;

use App\Models\Ketua;
use App\Models\Bidang;
use App\Models\Komisi;
use App\Models\SekretarisBendahara;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    // Menampilkan halaman edit struktur organisasi
    public function edit()
    {
        // Mengambil semua data Ketua beserta bidang dan komisinya
        $ketua = Ketua::all(); // Mengambil semua data Ketua
        $sekretarisBendahara = SekretarisBendahara::with('ketua')->get(); // Mengambil data Sekretaris & Bendahara dengan relasi ketua
        $bidang = Bidang::all(); // Mengambil semua data Bidang
        $komisi = Komisi::all(); // Mengambil semua data Komisi
        return view('struktur-edit', compact('ketua', 'sekretarisBendahara', 'bidang', 'komisi'));
    }

     // Update Ketua
     public function updateKetua(Request $request, $id)
     {
         $ketua = Ketua::findOrFail($id);
         $ketua->update([
             'nama' => $request->nama,
             'jabatan' => $request->jabatan
         ]);
 
         return redirect()->route('admin.struktur.index')->with('success', 'Ketua berhasil diperbarui!');
     }
 
     // Update Sekretaris dan Bendahara
     public function updateSekretarisBendahara(Request $request, $id)
     {
         $sekretarisBendahara = SekretarisBendahara::where('ketua_id', $id)->first();
         $sekretarisBendahara->update([
             'sekretaris' => $request->sekretaris,
             'bendahara' => $request->bendahara
         ]);
 
         return redirect()->route('admin.struktur.index')->with('success', 'Sekretaris dan Bendahara berhasil diperbarui!');
     }
 
     // Update Bidang
     public function updateBidang(Request $request, $id)
     {
         $bidang = Bidang::findOrFail($id);
         $bidang->update([
             'nama_bidang' => $request->nama_bidang
         ]);
 
         return redirect()->route('admin.struktur.index')->with('success', 'Bidang berhasil diperbarui!');
     }
 
     // Update Komisi
     public function updateKomisi(Request $request, $id)
     {
         $komisi = Komisi::findOrFail($id);
         $komisi->update([
             'nama_komisi' => $request->nama_komisi,
             'anggota' => implode(',', explode(',', $request->anggota))
         ]);
 
         return redirect()->route('admin.struktur.index')->with('success', 'Komisi berhasil diperbarui!');
     }
 
}
