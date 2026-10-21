<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    // Menampilkan semua data warga
    public function index()
    {
        $warga = Warga::latest()->get();

        return view('data-warga', compact('warga'));
    }

    // Menampilkan form tambah warga
    public function create()
    {
        return view('tambah-data-warga');
    }

    // Menyimpan data warga baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'max:16'],
            'no_kk' => ['nullable', 'string', 'max:16'],
            'komplek' => ['required', 'in:E1,E2,E3'],
            'nomor_rumah' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
        ]);

        Warga::create($data);

        return redirect()
            ->route('data-warga')
            ->with('success', 'Data warga berhasil ditambahkan.');
    }

    // Menampilkan detail warga
    public function show(string $id)
    {
        $warga = Warga::findOrFail($id);

        return view('detail-warga', compact('warga'));
    }

    // Menampilkan form edit warga
    public function edit(string $id)
    {
        $warga = Warga::findOrFail($id);

        return view('edit-data-warga', compact('warga'));
    }

    // Menyimpan perubahan data warga
    public function update(Request $request, string $id)
    {
        $warga = Warga::findOrFail($id);

        $data = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'max:16'],
            'no_kk' => ['nullable', 'string', 'max:16'],
            'komplek' => ['required', 'in:E1,E2,E3'],
            'nomor_rumah' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
        ]);

        $warga->update($data);

        return redirect()
            ->route('data-warga')
            ->with('success', 'Data warga berhasil diperbarui.');
    }

    // Menghapus data warga
    public function destroy(string $id)
    {
        $warga = Warga::findOrFail($id);
        $warga->delete();

        return redirect()
            ->route('data-warga')
            ->with('success', 'Data warga berhasil dihapus.');
    }
}
