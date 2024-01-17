<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanProfilController;
use App\Http\Controllers\ProfileController;
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
Route::post('/', [HomeController::class, 'submitAgendaForm'])->name('submitAgendaForm');
Route::get('/get-agenda', [HomeController::class, 'getAgenda'])->name('getAgenda');

// Halaman profil
Route::get('/profil/{page}', [HalamanProfilController::class, 'index']);

Route::get('/agenda-kegiatan', [AgendaKegiatanController::class, 'index']);


// E-Panel (nanti)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Edit akun
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
