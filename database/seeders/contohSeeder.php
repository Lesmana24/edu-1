<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class contohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contoh')->insert([[
            'title' => 'Title 1',
            'description' => 'Ini adalah deskripsi contoh 1.',
            'email' => '' . uniqid() . '@example.com',
            ], [
            'title' => 'Title 2',
            'description' => 'Deskripsi kedua untuk contoh 2.',
            'email' => '' . uniqid() . '@example.com',
            ]
        ]);
    }
}
