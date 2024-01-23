<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SKMController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\HalamanProfilController;
use App\Http\Controllers\PPIDPelaksanaController;
use App\Http\Controllers\AgendaKegiatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman utama
Route::get('/', [HomeController::class, 'index']);

// Halaman profil
Route::get('/profil/{page}', [HalamanProfilController::class, 'index']);

// Bidang
Route::get('/bidang/{namaBidang}', [BidangController::class, 'index']);
Route::get('/bidang/download/{berkas}', BidangController::class)->name('download.tupoksi');

// Berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/kategori-berita', [BeritaController::class, 'kategori']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

// Agenda Kegiatan
Route::get('/agenda-kegiatan', [AgendaKegiatanController::class, 'index']);

// Infografis
Route::get('/e-library/infografis', [InfografisController::class, 'index']);

// Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index']);

// Galeri
Route::get('/e-library/galeri', [GaleriController::class, 'index']);

// Foto
Route::get('/e-library/galeri/{media_album:slug}', [FotoController::class, 'index']);

// PPID Pelaksana
Route::get('/ppid-pelaksana/{kategori:slug}', [PPIDPelaksanaController::class, 'index']);
Route::get('/ppid-pelaksana/download/{berkas}', PPIDPelaksanaController::class)->name('download.ppid-pelaksana');

// SKM
Route::get('/skm', [SKMController::class, 'index']);
Route::post('/skm', [SKMController::class, 'store']);

// Video
Route::get('/e-library/video', function() {
    return view('umum.e-library.video');
});

// Aplikasi Parit
Route::get('/program/aplikasi-parit', function() {
    return view('umum.program.aplikasi-parit');
});

// Video
Route::get('/program/uptd-jalan', function() {
    return view('umum.program.uptd-jalan');
});

// E-Panel (nanti)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Edit akun
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

