<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Baju Pria',
        ]);

        Category::create([
            'name' => 'Celana Pria',
        ]);

        Category::create([
            'name' => 'Baju Wanita',
        ]);

        Category::create([
            'name' => 'Celana Wanita',
        ]);
    }
}
