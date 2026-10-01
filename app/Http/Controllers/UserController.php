<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Warga;
use App\Models\Rumah;
use App\Models\Keluarga;
use App\Models\Komplek;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('auth.login');
    }

    // Proses Login
    public function loginProcess(Request $request)
    {
        $request->validate(['username' => 'required','password' => 'required',]);

        $admin = Admin::where('username',$request->username)->first();

        if ($admin && Hash::check($request->password,$admin->password)) {
            session(['admin_id' => $admin->id,'admin_nama' => $admin->nama,]);
            return redirect()->route('dashboard');
        }

        return back()->with('error','Username atau password salah.');
    }

    // Dashboard
    public function dashboard()
    {
        $totalWarga = Warga::count();
        $totalRumah = Rumah::count();
        $totalKK = Keluarga::count();
        $totalKomplek = Komplek::count();

        return view('dashboard', compact(
            'totalWarga',
            'totalRumah',
            'totalKK',
            'totalKomplek'
        ));
    }

    // Logout
    public function logout()
    {
        session()->flush();

        return redirect()->route('login');
    }
}
