<?php

namespace Database\Seeders;

use App\Models\Rakit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rakit::create([
            'tanggal' => 20230411,
            'jam' => 190000,
            'judul' => 'Pemulihan Gambar Diri'
        ]);
        Rakit::create([
            'tanggal' => 20230413,
            'jam' => 190000,
            'judul' => 'Memimpin Diri Sendiri'
        ]);
        Rakit::create([
            'tanggal' => 20230418,
            'jam' => 190000,
            'judul' => 'Menjadi Murid Kristus'
        ]);
        Rakit::create([
            'tanggal' => 20230421,
            'jam' => 190000,
            'judul' => 'Prinsip Pelayanan Bersama'
        ]);
    }
}
