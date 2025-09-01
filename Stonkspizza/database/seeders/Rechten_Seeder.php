<?php

namespace Database\Seeders;

use App\Models\rechten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rechten_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $rechtenData = [
            ['id' => 1, 'name' => 'klant'],
            ['id' => 2, 'name' => 'medewerker'],
            ['id' => 3, 'name' => 'manager'],
        ];

        foreach ($rechtenData as $rechten) {
            rechten::insert($rechten);
        }
    }
}
