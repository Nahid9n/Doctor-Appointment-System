<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Admin",
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("admin@gmail.com"),
        ]);

        User::create([
            'name'=> 'Manager',
            'email'=> 'manager@gmail.com',
            'password'=> bcrypt('manager@gmail.com'),
        ]);
    }
}
