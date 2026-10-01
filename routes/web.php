<?php

use Illuminate\Support\Facades\Route;
use App\Http\UserController;

Route::get('/', function () {
    return view('welcome');

Route::get('/login', [UserController::class, 'login'])
    ->name('login');

Route::post('/login', [UserController::class, 'loginProcess'])
    ->name('login.process');

Route::get('/dashboard', [UserController::class, 'dashboard'])
    ->middleware('admin')
    ->name('dashboard');

Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout');
});
