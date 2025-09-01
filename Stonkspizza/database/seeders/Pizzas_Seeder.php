<?php

namespace Database\Seeders;

use App\Models\pizzas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pizzas_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pizzas::insert([
            'id' => 1,
            'name' => 'Pizza Margherita',
            'beschrijving' => 'Tomatensaus, Mozzarella, Olijfolie, Basilicumblaadjes.
            Een klassieke combinatie van smaken, perfect gebakken voor de liefhebbers van eenvoud en authenticiteit.',
            'prijs' => '8.50'
        ]);
        pizzas::insert([
            'id' => 2,
            'name' => 'Pizza Bolognese',
            'beschrijving' => 'Bolognesesaus, Mozzarella.
            Een hartige smaakexplosie met rijke Bolognesesaus en romige mozzarella, perfect voor liefhebbers van Italiaanse comfortfood',
            'prijs' => '9.75'
        ]);
        pizzas::insert([
            'id' => 3,
            'name' => 'Pizza Funghi',
            'beschrijving' => 'Tomatensaus, Mozzarella, Verse Champignons.
            Een heerlijke combinatie van tomatensaus, romige mozzarella en verse champignons, voor de liefhebbers van een smaakvolle en hartige pizza-ervaring',
            'prijs' => '9.00'
        ]);
        pizzas::insert([
            'id' => 4,
            'name' => 'Pizza Pepperoni',
            'beschrijving' => 'Tomatensaus, Mozzarella, Olijfolie, Basilicumblaadjes, Pepperoni.
            Ontdek onze Pepperoni Pizza met pittige pepperoni, smeuïge mozzarella, en verse basilicum op een heerlijke tomatensaus.
            Een smaakvolle ervaring die je zintuigen zal prikkelen',
            'prijs' => '10.25'
        ]);
    }
}
