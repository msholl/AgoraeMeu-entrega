<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
        \App\Models\Cliente::factory(15)->create();
        \App\Models\Pedido::factory(30)->create();

         \App\Models\User::factory()->create([
             'name' => 'matheus',
             'email' => 'matheus@example.com',
             'password' => bcrypt('mat931216'),
         ]);


    }
}
