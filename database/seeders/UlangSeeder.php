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
            'link_baru' => 'https://gmail.com',
        ]);
        Ulang::create([
            'link' => 'https://gms.church',
            'link_baru' => 'https://www.instagram.com/gmslampung/',
        ]);
        Ulang::create([
            'link' => 'https://itera.ac.id',
            'link_baru' => 'https://if.itera.ac.id',
        ]);
    }
}
