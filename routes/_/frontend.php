<?php

use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\ProfilController;
use App\Http\Controllers\Frontend\LaporanController;
use App\Http\Controllers\Frontend\MateriController;
use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Frontend\BeritaSelengkapnyaController;


// use App\Http\Controllers\Frontend\BeritaController;

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('frontend.beranda');
});


// Route::get('frontend/berita_selengkapnya', function () {
//     return view('frontend.berita_selengkapnya');
// });

Route::get('frontend/hubungi_kami', function () {
    return view('frontend.hubungi_kami');
});

// Route::get('frontend/materi', function () {
//     return view('frontend.materi');
// });

Route::get('frontend/beranda', [BerandaController::class, 'beranda']);
// Route::get('frontend/deskripsi', [BerandaController::class, 'deskripsi']);

Route::get('frontend/tentang_satgas', [ProfilController::class, 'tentang_satgas']);
Route::get('frontend/struktur_organisasi', [ProfilController::class, 'struktur_organisasi']);
Route::get('frontend/dokumentasi', [ProfilController::class, 'dokumentasi']);

Route::get('frontend/berita', [BeritaController::class,'berita']);

Route::get('frontend/berita_selengkapnya', [BeritaSelengkapnyaController::class,'berita_selengkapnya']);

Route::get('frontend/materi', [MateriController::class,'materi']);

Route::get('frontend/alur_pelaporan', [LaporanController::class, 'alur_pelaporan']);
Route::get('frontend/lapor', [LaporanController::class, 'lapor']);
