<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::create([
            'baru' => 'https://google.com',
            'ulang' => 'https://gmail.com',
            'whatsapp' => 'https://web.whatsapp.com'
        ]);
        Link::create([
            'baru' => 'https://gms.church',
            'ulang' => 'https://www.instagram.com/gmslampung/',
            'whatsapp' => 'https://web.whatsapp.com'
        ]);
        Link::create([
            'baru' => 'https://itera.ac.id',
            'ulang' => 'https://if.itera.ac.id',
            'whatsapp' => 'https://web.whatsapp.com'
        ]);
    }
}
