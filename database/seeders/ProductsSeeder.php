<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => '1',
                'name' => 'Nike',
                'slug' => 'nike',
                'description'=> 'chaussure rapide',
                'price' => '100',
                'stock' => '10',
                'image' => 'nike.jpg',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => '1',
                'name' => 'Adidas',
                'slug' => 'adidas',
                'description'=> 'chaussure confortable',
                'price' => '120',
                'stock' => '12',
                'image' => 'adidas.jpg',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => '2',
                'name' => 'Pant',
                'slug' => 'pant',
                'description'=> 'pant incroyable',
                'price' => '50',
                'stock' => '14',
                'image' => 'pant.jpg',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => '2',
                'name' => 'Shirt',
                'slug' => 'shirt',
                'description'=> 'shirt incroyable',
                'price' => '60',
                'stock' => '14',
                'image' => 'shirt.jpg',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => '3',
                'name' => 'Bracelet',
                'slug' => 'bracelet',
                'description'=> 'au poignet',
                'price' => '20',
                'stock' => '14',
                'image' => 'brecelet.jpg',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => '3',
                'name' => 'Collier',
                'slug' => 'collier',
                'description'=> 'collier boost productiviter',
                'price' => '1040',
                'stock' => '14',
                'image' => 'collier.jpg',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
