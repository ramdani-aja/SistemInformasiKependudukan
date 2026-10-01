<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class, 'login'])
    ->name('login');

Route::get('/dashboard', [UserController::class, 'dashboard'])
    ->name('dashboard');
