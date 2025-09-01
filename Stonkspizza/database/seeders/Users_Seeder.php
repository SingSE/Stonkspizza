<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Users_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Manager Account
        DB::table('users')->insert([
            'name' => 'Manager1',
            'email' => 'manager1@gmail.com',
            'password' => Hash::make('Manager12345@'),
            'role_id' => '3',
        ]);

        // Medewerker Account
        DB::table('users')->insert([
            'name' => 'Medewerker1',
            'email' => 'medewerkeremail@gmail.com',
            'password' => Hash::make('Medewerker12345@'),
            'role_id' => '2',
        ]);

        // Klant Account
        DB::table('users')->insert([
            'name' => 'Klant1',
            'email' => 'klant1@gmail.com',
            'password' => Hash::make('Klant12345@'),
            'role_id' => '1',
        ]);
    
    }
}
