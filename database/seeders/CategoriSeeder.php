<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'slug' => 'baju',
                'name' => 'baju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'kaos',
                'name' => 'kaos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'sepatu',
                'name' => 'sepatu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'jam',
                'name' => 'jam',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}