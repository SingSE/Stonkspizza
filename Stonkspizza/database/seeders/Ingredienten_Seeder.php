<?php

namespace Database\Seeders;

use App\Models\ingredienten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ingredienten_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //100 gram id => 1
        //1 stuk id => 2
        // 10 stuks id => 3


        ingredienten::insert([
            'id' => 1,
            'name' => 'Tomaten Saus',
            'price' => 0.70,
            'eenheid_id' => 1,
        ]);
        ingredienten::insert([
            'id' => 2,
            'name' => 'Bolognese Saus',
            'price' => 0.90,
            'eenheid_id' => 1,
        ]);

        //Ingredienten op de pizza
        ingredienten::insert([
            'id' => 3,
            'name' => 'Mozzarella',
            'price' => 0.90,
            'eenheid_id' => 2,
        ]);
        ingredienten::insert([
            'id' => 4,
            'name' => 'Basilicum Blaadjes',
            'price' => 0.50,
            'eenheid_id' => 3,
        ]);
        ingredienten::insert([
            'id' => 5,
            'name' => 'Verse Champignons',
            'price' => 1.50,
            'eenheid_id' => 1,
        ]);
        ingredienten::insert([
            'id' => 6,
            'name' => 'Pepperoni',
            'price' => 2.99,
            'eenheid_id' => 3,
        ]);
    }
}
