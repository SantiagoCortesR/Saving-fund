<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Santiago Cortes',
            'username' => 'Santiago',
            'email' => 'santicortes1409@gmail.com',
            'identification' => '1031540344',
            'amount_saved' => '50000',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(99)->create();
    }
}
