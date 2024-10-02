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
                'isAdmin' => true
            ],
            [
                'name' => 'Poor User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                'isAdmin' => false
            ]
        ]);
    }
}