<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => '1',
                'name' => 'Chaussure',
                'slug' => 'chaussure',
                'description'=> 'les grosses godasses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'name' => 'Vêtement',
                'slug' => 'vetement',
                'description'=> 'jean skinny regular',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'name' => 'Acces',
                'slug' => 'acces',
                'description'=> 'jérome la caillé',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
