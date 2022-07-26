<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class dispenserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Dispenser',
            'email' => 'dispenser@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user->attachRole('dispenser');
    }
}
