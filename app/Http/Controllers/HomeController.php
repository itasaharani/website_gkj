<?php

namespace App\Http\Controllers;
use App\Models\Pengumuman;
use Carbon\Carbon;
use Illuminate\Http\Request;    
use App\Models\jadwal;
use App\Models\Ketua;
use App\Models\RenunganMingguan;
use App\Models\Feedback;
use App\Models\Pendeta;
use App\Models\Gallery;


class HomeController extends Controller
{
    
    
    public function index()
    {
        // Ambil semua data jadwal dari database
        $today = Carbon::now()->toDateString();
        $jadwals = Jadwal::all();
        // Tentukan bulan dan tahun (misalnya bulan sekarang)
        $bulan = Carbon::now()->month;
        $tahun = Carbon::now()->year;

        // Dapatkan semua tanggal hari Minggu dalam bulan tersebut
    $minggu = [];
    $currentDate = Carbon::createFromDate($tahun, $bulan, 1);
    while ($currentDate->month == $bulan) {
        if ($currentDate->dayOfWeek == Carbon::SUNDAY) {
            $minggu[] = $currentDate->format('Y-m-d');
        }
        $currentDate->addDay();
    }

    // Pasangkan tanggal Minggu ke jadwal
    $filteredJadwals = [];
    foreach ($jadwals as $jadwal) {
        $weekNumber = $this->getWeekNumber($jadwal->week); // Konversi 'I', 'II', dst. ke angka
        if ($weekNumber <= count($minggu)) { // Hanya tambahkan jika minggu ke-n ada
            $jadwal->date = $minggu[$weekNumber - 1];
            $filteredJadwals[] = $jadwal; // Simpan jadwal valid
        }
    }
    // tampil gallery
    $photos = Gallery::all();

    // tampilkan pendeta 
    $pendetas = Pendeta::all();

        // Tampilkan pengumuman yang masih aktif (periode_hingga >= akhir hari ini)
        $pengumumans = Pengumuman::where('periode_hingga', '>=', $today)
        ->orderBy('tanggal', 'desc')
        ->get();
        
        return view('index', [
            'pengumumans' => $pengumumans,
            'pendetas' => $pendetas,
            'photos' => $photos,
            'jadwals' => collect($filteredJadwals)
        ]);
    }

    private function getWeekNumber($roman)
{
    $map = ['I' => 1, 'II' => 2, 'III' => 3, 'IV' => 4, 'V' => 5];
    return $map[$roman] ?? 0;
}

   
    
    public function struktur(){
        $ketua = Ketua::with(['bidang.komisi', 'sekretarisBendahara'])->get();

    // Return ke view struktur
    return view('struktur', compact('ketua'));

    }

    public function renungan(){
        $renungan = RenunganMingguan::latest()->take(5)->get(); // Ambil 5 renungan terbaru
        return view('renungan', compact('renungan'));
    }
    public function show($id)
    {
        $renungan = RenunganMingguan::findOrFail($id);
        return view('renunganDetail', compact('renungan'));
    }
}
