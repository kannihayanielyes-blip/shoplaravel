<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'dom',
                'email' => 'ouhou1@gmail.com',
                'password' => bcrypt('ouhou1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'domi',
                'email' => 'ouhou2@gmail.com',
                'password' => bcrypt('ouhou2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'dominique',
                'email' => 'ouhou3@gmail.com',
                'password' => bcrypt('ouhou3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
