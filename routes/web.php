<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginproses']);
Route::get('logout', [LoginController::class, 'logout']);


Route::prefix('admin')->group(function(){
    include "_/admin.php";
});

Route::prefix('/')->group(function(){
    include "_/frontend.php";
});

