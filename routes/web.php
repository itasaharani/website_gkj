<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\RenunganMingguanController;
use App\Http\Controllers\PendetaController;

Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/admin', [HomeController::class, 'admin']); 
Route::get('/struktur', function () {
    return view('struktur');
});

// Route::get('/renungan', function () {
//     return view('renungan');
// });

Route::get('/feedback-admin', [FeedbackController::class, 'index'])->name('feedback.admin');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');




// guest
Route::get('/', [HomeController::class, 'index']); 

// Route::get('/jadwal', function () {
//     return view('jadwal');
// });

Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/visiMisi', function () {
    return view('visiMisi');
});
// rute jadwal
Route::resource('jadwal', ScheduleController::class);
Route::get('/tambahJadwal', [ScheduleController::class, 'create'])->name('jadwal.create');

//rute pengumuman
Route::resource('pengumuman', PengumumanController::class);
Route::get('/tambahPengumuman', [PengumumanController::class, 'create'])->name('pengumuman.create');
Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman.show');

//rute struktur

Route::get('/struktur', [HomeController::class, 'struktur']); 
Route::get('/adminstruktur', [StrukturOrganisasiController::class, 'edit'])->name('admin.struktur.index');

// Update Ketua
Route::put('/updateKetua/{id}', [StrukturOrganisasiController::class, 'updateKetua'])->name('updateKetua');

// Update Sekretaris dan Bendahara
Route::put('/updateSekretarisBendahara/{id}', [StrukturOrganisasiController::class, 'updateSekretarisBendahara'])->name('updateSekretarisBendahara');

// Update Bidang
Route::put('/updateBidang/{id}', [StrukturOrganisasiController::class, 'updateBidang'])->name('updateBidang');

// Update Komisi
Route::put('/updateKomisi/{id}', [StrukturOrganisasiController::class, 'updateKomisi'])->name('updateKomisi');


// rute renungan
Route::get('/renunganMinggu', [HomeController::class, 'renungan'])->name('renungan');
Route::get('/renungan/{id}', [HomeController::class, 'show'])->name('renungan.detail');

// admin renungan
Route::get('/adminrenungan', [RenunganMingguanController::class, 'index'])->name('admin.renungan');

// Rute untuk form tambah renungan
Route::get('/renungancreate', [RenunganMingguanController::class, 'create']);
Route::resource('renungan', RenunganMingguanController::class);


// rute pendeta
Route::get('/pendeta', [PendetaController::class, 'index']);
Route::get('/pendetaTambah', [PendetaController::class, 'create']);
Route::resource('pendeta', PendetaController::class)->except(['show']);

//rute gallery
Route::resource('gallery', GalleryController::class);
Route::get('/galleryAdmin', [GalleryController::class, 'index']);