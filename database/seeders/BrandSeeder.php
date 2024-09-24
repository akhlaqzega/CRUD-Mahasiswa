<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'slug' => 'rucas',
                'name' => 'rucas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'nike',
                'name' => 'nike',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'adidas',
                'name' => 'adidas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'alba',
                'name' => 'alba',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}