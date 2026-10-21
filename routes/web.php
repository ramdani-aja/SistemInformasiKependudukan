<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Halaman Login
Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.authenticate');

// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/dashboard', [UserController::class, 'dashboard'])->name('dashboard.store');

// Halaman Data Warga
Route::get('/data-warga', function () {
    return view('data-warga');
})->name('data-warga');
Route::post('/data-warga', [UserController::class, 'store'])->name('data-warga.store');

// Halaman Tambah Data Warga
Route::get('/tambah-data-warga', function () {
    return view('tambah-data-warga');
})->name('tambah-data-warga');
Route::post('/tambah-data-warga', [UserController::class, 'store'])->name('tambah-data-warga.store');
// Halaman Peta Komplek
Route::get('/peta-komplek', function(){
    return view('peta-komplek');
})->name('peta-komplek');
Route::post('/peta-komplek', [UserController::class, 'store'])->name('peta-komplek.store');
