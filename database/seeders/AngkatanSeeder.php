<?php

namespace Database\Seeders;

use App\Models\Angkatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Angkatan::create([
            'nomor' => 2,
            'bulan' => 'April',
            'tahun' => 2023
        ]);

        Angkatan::create([
            'nomor' => 2,
            'bulan' => 'April',
            'tahun' => 2023
        ]);

        Angkatan::create([
            'nomor' => 1,
            'bulan' => 'Mei',
            'tahun' => 2023
        ]);
    }
}
