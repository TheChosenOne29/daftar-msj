<?php

namespace Database\Seeders;

use App\Models\Ramu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ramu::create([
            'tanggal' => 20230411,
            'jam' => 190000,
            'judul' => 'Keselamatan'
        ]);
        Ramu::create([
            'tanggal' => 20230413,
            'jam' => 190000,
            'judul' => 'Berjalan Bersama Tuhan'
        ]);
        Ramu::create([
            'tanggal' => 20230418,
            'jam' => 121000,
            'judul' => 'Membereskan Masalah di Masa Lalu'
        ]);
        Ramu::create([
            'tanggal' => 20230421,
            'jam' => 154000,
            'judul' => 'Baptisan Roh Kudus'
        ]);
    }
}
