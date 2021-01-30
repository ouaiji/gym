<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ouaiji Abdelaziz',
            'email' => 'hero@gmail.com',
            'password' => bcrypt('password')
        ]);

    }
}
