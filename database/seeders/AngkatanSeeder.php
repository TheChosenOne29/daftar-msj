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
            'bulantahun' => 20230401,
        ]);

        Angkatan::create([
            'nomor' => 2,
            'bulantahun' => 20230401,
        ]);

        Angkatan::create([
            'nomor' => 1,
            'bulantahun' => 20230401,
        ]);
    }
}
