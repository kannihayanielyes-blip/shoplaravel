<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => '1',
                'name' => 'Électronique3',
                'slug' => 'electronique3',
                'description'=> 'la tele3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '2',
                'name' => 'Vêtements3',
                'slug' => 'vetements3',
                'description'=> 'ouhou3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '3',
                'name' => 'Maison3',
                'slug' => 'maison3',
                'description'=> 'ya mbapper, c moi wsh3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
