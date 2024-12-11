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



class AdminController extends Controller
{


    
    public function admin(){
        $totalPengumuman = Pengumuman::count();
        $totalFeedback = Feedback::count();
        $totalRenungan = RenunganMingguan::count();
       
    
        return view('admin', compact('totalPengumuman', 'totalFeedback', 'totalRenungan'));
    }
}
