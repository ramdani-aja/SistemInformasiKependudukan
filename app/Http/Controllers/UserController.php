<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('auth.login');
    }

    // Halaman Dashboard
    public function dashboard()
    {
        return view('dashboard');
    }
}
