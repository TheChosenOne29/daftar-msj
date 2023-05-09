<?php

namespace Database\Seeders;

use App\Models\Terap;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TerapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Terap::create([
            'tanggal' => 20230411,
            'jam' => 190000,
            'judul' => 'Merenungkan & Membagikan Firman Tuhan'
        ]);
        Terap::create([
            'tanggal' => 20230413,
            'jam' => 190000,
            'judul' => 'Karunia & Talenta'
        ]);
        Terap::create([
            'tanggal' => 20230418,
            'jam' => 121000,
            'judul' => 'Etika Kepemimpinan'
        ]);
        Terap::create([
            'tanggal' => 20230421,
            'jam' => 154000,
            'judul' => 'Memimpin Orang Lain'
        ]);
        Terap::create([
            'tanggal' => 20230428,
            'jam' => 154000,
            'judul' => 'Bergerak Dalam Kesatuan'
        ]);
    }
}
