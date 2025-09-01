<?php

namespace Database\Seeders;

use App\Models\units;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Eenheid_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        units::insert([
            'id' => 1,
            'name' => '100 gram',
        ]);
        units::insert([
            'id' => 2,
            'name' => '1 stuk',
        ]);
        units::insert([
            'id' => 3,
            'name' => '10 stuks',
        ]);
    }
}
