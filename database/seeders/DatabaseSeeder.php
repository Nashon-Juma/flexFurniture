<?php

namespace Database\Seeders;
// use App\Models\products;

use App\Models\User;
use App\Models\Category;
use App\Models\products;
use App\Models\DetailProduct;
// use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 20 categories
        Category::factory(5)->create();

        // // Create 20 products
        // products::factory(20)->create();

        // // Create 20 detail products
        DetailProduct::factory(10)->create();

        // // Call UserSeeder to create users
        // UserSeeder::class;
    }
}
