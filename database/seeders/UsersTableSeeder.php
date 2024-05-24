<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin', // Add the username field here
            'email' => 'admin@gmail.com',
            'password' => '$2y$12$XptV48ScS12sZ8ZdJ7smaOin5DGD7I/4PP6WdWS9WLJXzqjGHcUEC', // Pre-hashed password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
