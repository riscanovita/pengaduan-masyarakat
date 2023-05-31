<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Petugas::create([
            'nama_petugas' => 'Adminstrator',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '089687797970',
            'level' => 'admin'
        ]);
    }
}
