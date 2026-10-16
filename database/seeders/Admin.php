<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WitOutModelEvent;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Pengurus RT 04/11',
            'email' => 'admin0411@gmail.com',
            'password' => Hash::make('admin0411'),
            'role' => 'admin',
        ]);
    }
}
