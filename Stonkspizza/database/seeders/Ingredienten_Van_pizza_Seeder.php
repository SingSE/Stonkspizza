<?php

namespace Database\Seeders;

use App\Models\ingredientenpizza;
use App\Models\pizzas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ingredienten_van_pizza_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Pizza Margherita Ingredients
         pizzas::find(1)->ingredients()->attach([1, 3, 4]);

         // Pizza Bolognese Ingredients
         pizzas::find(2)->ingredients()->attach([2, 3]);

         // Pizza Funghi Ingredients
         pizzas::find(3)->ingredients()->attach([1, 3, 5]);

         // Pizza Pepperoni Ingredients
         pizzas::find(4)->ingredients()->attach([1, 3, 4, 6]);
    }
}
