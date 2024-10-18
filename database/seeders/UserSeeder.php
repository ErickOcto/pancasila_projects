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
        User::insert([
            [
                'name' => 'Admin Handsome',
                'email' => 'a@b.c',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Poor User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Rafi The One',
                'email' => 'rafiathallah70@gmial.com',
                'password' => bcrypt('password'),
            ]
        ]);
    }
}
