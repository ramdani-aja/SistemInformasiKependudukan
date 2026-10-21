<?php

namespace App\Http\Controllers;

use App\Models\Warga;

class DashboardController extends Controller
{
    public function index()
    {
        $totalWarga = Warga::count();

        $totalRumah = Warga::query()
            ->whereNotNull('nomor_rumah')
            ->distinct()
            ->count('nomor_rumah');

        $totalKK = Warga::query()
            ->whereNotNull('no_kk')
            ->distinct()
            ->count('no_kk');

        $totalKomplek = Warga::query()
            ->whereNotNull('komplek')
            ->distinct()
            ->count('komplek');

        return view('dashboard', compact(
            'totalWarga',
            'totalRumah',
            'totalKK',
            'totalKomplek'
        ));
    }
}
