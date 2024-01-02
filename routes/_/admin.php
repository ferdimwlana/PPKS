<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SlideController;
use App\Http\Controllers\admin\DeskripsiController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\TentangController;
use App\Http\Controllers\admin\StrukturController;
use App\Http\Controllers\admin\DokumentasiController;
use App\Http\Controllers\admin\MateriController;
use App\Http\Controllers\admin\BeritaController;
use App\Http\Controllers\Admin\AlurController;
use App\Http\Controllers\Admin\LaporController;
use App\Http\Controllers\Admin\AdminController;



Route::group(['middleware' => 'auth:admin'], function () {
     Route::get('/', [HomeController::class, 'index']);



    Route::controller(SlideController::class)->group(function () {
        Route::get('slide', 'index');
        Route::get('slide/create', 'create');
        Route::post('slide/tambah', 'tambah');
        Route::get('slide/{slide}', 'show');
        Route::post('slide/edit/{slide}', 'edit');
        Route::put('slide/{slide}', 'update');
        Route::delete('slide/delete/{slide}', 'delete');
    });

    Route::controller(DeskripsiController::class)->group(function () {
        Route::get('deskripsi', 'index');
        Route::get('deskripsi/create', 'create');
        Route::post('deskripsi', 'deskripsi');
        Route::get('deskripsi/{deskripsi}','show');
        Route::get('deskripsi/edit/{deskripsi}', 'edit');
        Route::post('deskripsi/edit/{deskripsi}', 'update');
        Route::delete('deskripsi/delete/{deskripsi}' , 'delete');
    });
    Route::controller(VideoController::class)->group(function () {
        Route::get('video', 'index');
        Route::get('video/create', 'create');
        Route::post('video', 'video');
        Route::get('video/{video}', 'show');
    });
    Route::controller(TentangController::class)->group(function () {
        Route::get('tentang', 'index');
        Route::get('tentang/create', 'create');
        Route::post('tentang', 'tentang');
        Route::get('tentang/{tentang}', 'show');
        Route::get('tentang/edit/{tentang}', 'edit');
        Route::post('tentang/edit/{tentang}', 'update');
        Route::delete('tentang/delete/{tentang}' , 'delete');
    });

    Route::controller(StrukturController::class)->group(function () {
        Route::get('struktur', 'index');
        Route::get('struktur/create', 'create');
        Route::post('struktur/tambah', 'tambah');
        Route::get('struktur/{struktur}', 'show');
        Route::get('struktur/edit/{struktur}', 'edit');
        Route::post('struktur/edit/{struktur}', 'update');
        Route::delete('struktur/delete/{struktur}' , 'delete');
    });

    Route::controller(DokumentasiController::class)->group(function () {

        Route::get('dokumentasi', 'index');
        Route::get('dokumentasi/create', 'create');
        Route::post('dokumentasi', 'tambah');
        Route::get('dokumentasi/{dokumentasi}', 'show');
        Route::post('dokumentasi/edit/{dokumentasi}', 'edit');
        Route::put('dokumentasi/{dokumentasi}', 'update');
        Route::delete('dokumentasi/delete/{dokumentasi}' , 'delete');
    });

    Route::controller(MateriController::class)->group(function () {
        Route::get('materi', 'index');
        Route::get('materi/create', 'create');
        Route::post('materi', 'materi');
        Route::get('materi/{materi}', 'show');
        Route::get('materi/edit/{materi}', 'edit');
        Route::post('materi/edit/{materi}', 'update');
        Route::delete('materi/delete/{materi}' , 'delete');
    });
    Route::controller(BeritaController::class)->group(function () {
        Route::get('berita', 'index');
        Route::get('berita/create', 'create');
        Route::post('berita/tambah', 'tambah');
        Route::get('berita/{berita}', 'show');
        Route::post('berita/edit/{berita}', 'edit');
        Route::put('berita/edit/{berita}', 'update');
        Route::delete('berita/delete/{berita}' , 'delete');
    });
    Route::controller(AlurController::class)->group(function () {
        Route::get('alur', 'index');
        Route::get('alur/create', 'create');
        Route::post('alur/tambah', 'tambah');
        Route::get('alur/{alur}',  'show');
        Route::post('alur/edit/{alur}', 'edit');
        Route::put('alur/{alur}', 'update');
        Route::delete('alur/delete/{alur}' , 'delete');
    });

    Route::controller(LaporController::class)->group(function () {
        Route::get('lapor',  'index');
        Route::get('lapor/create', 'create');
        Route::post('lapor/tambah', 'tambah');
        Route::get('lapor/{lapor}','show');
        Route::get('lapor/edit/{lapor}', 'edit');
        Route::post('lapor/edit/{lapor}', 'update');
        Route::delete('lapor/delete/{lapor}' , 'delete');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('user',  'index');
        Route::get('user/create', 'create');
        Route::post('user', 'tambah');
        Route::get('user/{user}','show');
        Route::get('user/edit/{user}', 'edit');
        Route::post('user/edit/{user}', 'update');
        Route::delete('user/delete/{user}' , 'delete');
    });

});

