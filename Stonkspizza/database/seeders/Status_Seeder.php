<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Status_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Status::insert([
            'id' => '1',
            'name' => 'Besteld',
        ]);
        Status::insert([
            'id' => '2',
            'name' => 'Wordt voorbereid',
        ]);
        Status::insert([
            'id' => '3',
            'name' => 'In de oven',
        ]);
        Status::insert([
            'id' => '4',
            'name' => 'Is onderweg',
        ]);
        Status::insert([
            'id' => '5',
            'name' => 'Bezorgd',
        ]);
        Status::insert([
            'id' => '6',
            'name' => 'Geannuleerd',
        ]);
    }
}

