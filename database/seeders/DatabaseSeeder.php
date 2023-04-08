<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RamuSeeder;
use Database\Seeders\AngkatanSeeder;
use Illuminate\Foundation\Auth\User;

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
            'password' => bcrypt('lampung')
        ]);

        $this->call([
            AngkatanSeeder::class,
            RamuSeeder::class
        ]);
    }
}
