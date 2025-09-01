<?php

namespace Database\Seeders;

use App\Models\grootte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Grootte_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              //
              grootte::insert([
                'id' => 1,
                'name' => 'Klein',
                'pricefactor' => 0.80
            ]);
            grootte::insert([
                'id' => 2,
                'name' => 'Middel',
                'pricefactor' => 1.00
            ]);
            grootte::insert([
                'id' => 3,
                'name' => 'Groot',
                'pricefactor' => 1.20
            ]);
    }
}
