<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RamuSeeder;
use Database\Seeders\RakitSeeder;
use Database\Seeders\TerapSeeder;
use Database\Seeders\UlangSeeder;
use Database\Seeders\AngkatanSeeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'administrator@gms.church',
            'password' => Hash::make('lampung')
        ]);

        $this->call([
            AngkatanSeeder::class,
            RamuSeeder::class,
            RakitSeeder::class,
            TerapSeeder::class,
            UlangSeeder::class
        ]);
    }
}
