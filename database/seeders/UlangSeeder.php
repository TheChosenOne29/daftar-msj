<?php

namespace Database\Seeders;

use App\Models\Ulang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UlangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ulang::create([
            'link' => 'https://google.com',
        ]);
        Ulang::create([
            'link' => 'https://gms.church',
        ]);
        Ulang::create([
            'link' => 'https://itera.ac.id',
        ]);
    }
}
