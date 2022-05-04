<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alonso Bustamante',
            'email' => 'carlosaj.bustamante@gmail.com',
            'password' => \bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jose Apaza',
            'email' => 'jose.apaza.cueva@gmail.com',
            'password' => \bcrypt('12345678')
        ])->assignRole('Blogger');

        //User::factory(99)->create();
    }
}
