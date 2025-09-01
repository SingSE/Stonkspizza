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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([Eenheid_Seeder::class]);
        $this->call([Ingredienten_Seeder::class]);
        $this->call([Pizzas_Seeder::class]);
        $this->call([Rechten_Seeder::class]);
        $this->call([Status_Seeder::class]);
        $this->call([Ingredienten_van_pizza_seeder::class]);
        $this->call([Grootte_Seeder::class]);
        $this->call([Users_Seeder::class]);
    }
}
