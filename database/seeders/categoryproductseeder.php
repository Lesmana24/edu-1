<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryproductseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_product')->insert([
            [
                'category_name' => 'Electronics',
            ],
            [
                'category_name' => 'Fashion',
            ],
            [
                'category_name' => 'Home & Kitchen',
            ],
        ]);
    }
}
