<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create([
            'show_card' => true
        ]);
        Card::create([
            'show_card' => true
        ]);
        Card::create([
            'show_card' => true
        ]);
    }
}
