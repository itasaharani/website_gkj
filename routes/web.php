<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\RenunganMingguanController;
use App\Http\Controllers\PendetaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Halaman utama
Route::get('/wel', function () {
    return view('welcome');
});

// Route untuk halaman yang tidak memerlukan login (guest)
Route::middleware('guest')->group(function () {
    // Halaman login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin']);

    // Halaman utama untuk guest
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/sejarah', function () {
        return view('sejarah');
    });
    Route::get('/visiMisi', function () {
        return view('visiMisi');
    });
    Route::get('/struktur', [HomeController::class, 'struktur']);
    Route::get('/renunganMinggu', [HomeController::class, 'renungan'])->name('renungan');
    Route::get('/renungan/{id}', [HomeController::class, 'show'])->name('renungan.detail');
    Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman.show');

});

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk halaman yang dilindungi oleh middleware auth
Route::middleware('auth')->group(function () {
    // Admin Dashboard
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

    // Pengumuman CRUD
    Route::resource('pengumuman', PengumumanController::class);
    Route::get('/tambahPengumuman', [PengumumanController::class, 'create'])->name('pengumuman.create');
   

    // Jadwal CRUD
    Route::resource('jadwal', ScheduleController::class);
    Route::get('/tambahJadwal', [ScheduleController::class, 'create'])->name('jadwal.create');

    // Feedback Admin
    Route::get('/feedback-admin', [FeedbackController::class, 'index'])->name('feedback.admin');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/feedback/export', [FeedbackController::class, 'exportPDF']);
    Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

    // Struktur Organisasi
    Route::get('/adminstruktur', [StrukturOrganisasiController::class, 'edit'])->name('admin.struktur.index');
    Route::put('/updateKetua/{id}', [StrukturOrganisasiController::class, 'updateKetua'])->name('updateKetua');
    Route::put('/updateSekretarisBendahara/{id}', [StrukturOrganisasiController::class, 'updateSekretarisBendahara'])->name('updateSekretarisBendahara');
    Route::put('/updateBidang/{id}', [StrukturOrganisasiController::class, 'updateBidang'])->name('updateBidang');
    Route::put('/updateKomisi/{id}', [StrukturOrganisasiController::class, 'updateKomisi'])->name('updateKomisi');

    // Renungan Mingguan CRUD
    Route::get('/adminrenungan', [RenunganMingguanController::class, 'index'])->name('admin.renungan');
    Route::resource('renungan', RenunganMingguanController::class);
    Route::get('/renungancreate', [RenunganMingguanController::class, 'create']);

    // Pendeta CRUD
    Route::get('/pendeta', [PendetaController::class, 'index']);
    Route::get('/pendetaTambah', [PendetaController::class, 'create']);
    Route::resource('pendeta', PendetaController::class)->except(['show']);

    // Gallery CRUD
    Route::resource('gallery', GalleryController::class);
    Route::get('/galleryAdmin', [GalleryController::class, 'index']);
});

// Rute untuk Struktur Organisasi

