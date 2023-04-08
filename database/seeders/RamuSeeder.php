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
            'tanggal' => 20230411,
            'jam' => 190000,
            'judul' => 'Keselamatan'
        ]);
        Ramu::create([
            'tanggal' => 20230411,
            'jam' => 190000,
            'judul' => 'Keselamatan'
        ]);
        Ramu::create([
            'tanggal' => 20230411,
            'jam' => 190000,
            'judul' => 'Keselamatan'
        ]);
    }
}
