<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone',
                'description' => 'Latest model smartphone with advanced features.',
                'price' => 699.99,
                'image' => 'smartphone.jpg',
                'stock' => 50,
                'category_id' => 1, // Electronics
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Comfortable cotton t-shirt available in various sizes.',
                'price' => 19.99,
                'image' => 'tshirt.jpg',
                'stock' => 100,
                'category_id' => 2, // Fashion
            ],
            [
                'name' => 'Blender',
                'description' => 'High-speed blender for smoothies and soups.',
                'price' => 49.99,
                'image' => 'blender.jpg',
                'stock' => 30,
                'category_id' => 3, // Home & Kitchen
            ],
        ]);
    }
}
