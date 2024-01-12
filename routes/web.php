<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanProfilController;
use App\Http\Controllers\ProfileController;


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
// Route::get('/profil/profil-kepala-dinas', [HalamanProfilController::class, 'profilKepalaDinas']);
// Route::get('/profil/sejarah-kota-samarinda', [HalamanProfilController::class, 'sejarahKotaSamarinda']);
// Route::get('/profil/sejarah-dpupr-kota-samarinda', [HalamanProfilController::class, 'sejarahDpuprKotaSmarinda']);
// Route::get('/profil/struktur-organisasi', [HalamanProfilController::class, 'strukturOrganisasi']);
// Route::get('/profil/tupoksi', [HalamanProfilController::class, 'tupoksi']);
// Route::get('/profil/visi-misi', [HalamanProfilController::class, 'visiMisi']);
Route::get('/profil/visi-misi', [HalamanProfilController::class, 'index']);

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

