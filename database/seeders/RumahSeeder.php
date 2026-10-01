<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rumah;
use App\Models\Komplek;

class RumahSeeder extends Seeder
{
    public function run(): void
    {
        $e1 = Komplek::where('nama_komplek', 'E1')->first();
        $e2 = Komplek::where('nama_komplek', 'E2')->first();
        $e3 = Komplek::where('nama_komplek', 'E3')->first();

    }
}
