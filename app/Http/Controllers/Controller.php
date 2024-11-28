<?php

namespace App\Http\Controllers;
use App\Models\Pengumuman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\RenunganMingguan;
use App\Models\Feedback;

abstract class Controller
{
    public function admin(){
        $totalPengumuman = Pengumuman::count();
        $totalFeedbacks = Feedback::count();
        $totalRenungan = RenunganMingguan::count();
       
    
        return view('admin', compact('totalPengumuman', 'totalFeedbacks', 'totalRenungan'));
    }
    
}
