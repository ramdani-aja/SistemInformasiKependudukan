<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Halaman Login
Route::get('/', [UserController::class, 'login']);

// Halaman Dashboard
Route::get('/dashboard', function () {return view('dashboard');
})->name('dashboard');
Route::post('/dashboard', [UserController::Class, 'dashboard'])->name('dashboard.store');

// Halaman Data Warga
Route::get('/data-warga', function(){return view('data-warga');
})->name('data-warga');
Route::post('/data-warga', [UserController::Class, 'store'])
->name('data-warga.store');

//Halaman Tambah Data Warga
Route::get('/tambah-data-warga', function(){return view('tambah-data-warga');
})->name('tambah-data-warga');
Route::post('/tambah-data-warga', [UserController::Class, 'store'])
->name('tambah-data-warga.store');


