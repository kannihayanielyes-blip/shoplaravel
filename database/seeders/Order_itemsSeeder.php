<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_itemsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => '1',
                'product_id' => '1',
                'name' => 'Électronique2',
                'slug' => 'electronique2',
                'description'=> 'la tele2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => '2',
                'product_id' => '2',
                'name' => 'Vêtements2',
                'slug' => 'vetements2',
                'description'=> 'ouhou2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => '3',
                'product_id' => '3',
                'name' => 'Maison2',
                'slug' => 'maison2',
                'description'=> 'ya mbapper, c moi wsh2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
