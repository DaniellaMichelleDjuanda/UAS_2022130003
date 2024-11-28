<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('products')->insert([
                'name' => 'Baju Pria ' . $i,
                'category_id' => 1,
                'price' => rand(100000, 500000), 
                'stock' => rand(1, 100), 
                'description' => 'Description for Baju Pria ' . $i,
                'image' => 'images/products/' . rand(1, 10) . '.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 31; $i <= 200; $i++) {
            DB::table('products')->insert([
                'name' => 'Celana Pria ' . $i,
                'category_id' => 2,
                'price' => rand(100000, 500000), 
                'stock' => rand(1, 100), 
                'description' => 'Description for Celana Pria ' . $i,
                'image' => 'images/products/' . rand(11, 20) . '.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 61; $i <= 300; $i++) {
            DB::table('products')->insert([
                'name' => 'Baju Wanita ' . $i,
                'category_id' => 3,
                'price' => rand(100000, 500000), 
                'stock' => rand(1, 100), 
                'description' => 'Description for Baju Wanita ' . $i,
                'image' => 'images/products/' . rand(21, 30) . '.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 91; $i <= 400; $i++) {
            DB::table('products')->insert([
                'name' => 'Celana Wanita ' . $i,
                'category_id' => 4,
                'price' => rand(100000, 500000), 
                'stock' => rand(1, 100),
                'description' => 'Description for Celana Wanita ' . $i,
                'image' => 'images/products/' . rand(31, 40) . '.png', 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
