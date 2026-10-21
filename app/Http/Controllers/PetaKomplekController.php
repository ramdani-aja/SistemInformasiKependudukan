<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class PetaKomplekController extends Controller
{
    public function index(Request $request)
    {
        $query = Warga::query()
            ->whereNotNull('latitude')
            ->whereNotNull('longitude');

        // Filter berdasarkan nama warga
        if ($request->filled('nama')) {
            $query->where(
                'nama',
                'like',
                '%' . $request->nama . '%'
            );
        }

        // Filter berdasarkan komplek
        if (
            $request->filled('komplek') &&
            $request->komplek !== 'Semua'
        ) {
            $query->where('komplek', $request->komplek);
        }

        $warga = $query->get([
            'id',
            'nama',
            'komplek',
            'nomor_rumah',
            'latitude',
            'longitude',
        ]);

        return view('peta-komplek', compact('warga'));
    }
}
