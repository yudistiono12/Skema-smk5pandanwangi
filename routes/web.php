<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SuccesController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\PengaturanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index']);


// admin
Route::get('/dashboard', function() {   
    return view('dashboard.index', [
        'title' => 'Dashboard'
        ]);
});


// programs
Route::get('/dashboard/programs', [ProgramController::class, 'index']);
Route::get('/dashboard/programs/checkSlug', [ProgramController::class, 'checkSlug']);
Route::get('/dashboard/programs/create', [ProgramController::class, 'create']);
Route::post('/dashboard/programs/store', [ProgramController::class, 'store']);
Route::get('/dashboard/programs/{program}', [ProgramController::class, 'edit']);
Route::put('/dashboard/programs/edit/{program}', [ProgramController::class, 'update']);
Route::put('/dashboard/programs/status/{program}', [ProgramController::class, 'updateStatus']);
Route::delete('/dashboard/programs/delete/{program}', [ProgramController::class, 'destroy']);
// tutup programs

// sub
Route::get('/dashboard/sub/{program}', [ProgramController::class, 'subindex']);
// tutup sub

// sponsor
Route::get('/dashboard/sponsors', [SponsorController::class, 'index']);
Route::get('/dashboard/sponsors/create', [SponsorController::class, 'create']);
Route::post('/dashboard/sponsors/store', [SponsorController::class, 'store']);
Route::get('/dashboard/sponsors/{sponsor}', [SponsorController::class, 'edit']);
Route::put('/dashboard/sponsors/edit/{sponsor}', [SponsorController::class, 'update']);
Route::delete('/dashboard/sponsors/delete/{sponsor}', [SponsorController::class, 'destroy']);
Route::put('/dashboard/sponsors/status/{sponsor}', [SponsorController::class, 'updateStatus']);
// tutup sponsor

// aktivitas
Route::get('/dashboard/aktivitas', [AktivitasController::class, 'index']);
Route::get('/dashboard/aktivitas/create', [AktivitasController::class, 'create']);
Route::post('/dashboard/aktivitas/store', [AktivitasController::class, 'store']);
Route::get('/dashboard/aktivitas/{konten}', [AktivitasController::class, 'edit']);
Route::put('/dashboard/aktivitas/edit/{konten}', [AktivitasController::class, 'update']);
Route::delete('/dashboard/aktivitas/delete/{konten}', [AktivitasController::class, 'destroy']);
Route::put('/dashboard/aktivitas/status/{konten}', [AktivitasController::class, 'updateStatuse']);
Route::get('/dashboard/aktivitas/checkSlug', [AktivitasController::class, 'checkSlug']);
// tutp aktivitas

// success story
Route::get('/dashboard/success', [SuccesController::class, 'index']);
Route::get('/dashboard/success/create', [SuccesController::class, 'create']);
Route::post('/dashboard/success/store', [SuccesController::class, 'store']);
Route::get('/dashboard/success/{konten}', [SuccesController::class, 'edit']);
Route::put('/dashboard/success/edit/{konten}', [SuccesController::class, 'update']);
Route::delete('/dashboard/success/delete/{konten}', [SuccesController::class, 'destroy']);
Route::put('/dashboard/success/status/{konten}', [SuccesController::class, 'updateStatuse']);
Route::get('/dashboard/success/checkSlug', [SuccesController::class, 'checkSlug']);
// tutup success

// pengaturan
Route::get('/dashboard/pengaturan', [PengaturanController::class, 'index']);
Route::put('/dashboard/pengaturan/edit/{pengaturan}', [PengaturanController::class, 'update']);
// tutup pengaturan


// berita
Route::get('/dashboard/beritas', [BeritaController::class, 'index']);
// tutup berita

// kategori
Route::get('/dashboard/kategoris', [KategoriController::class, 'index']);
// tutup kategori

// tutup admin