<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SiswaSeeder; // Import SiswaSeeder

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(SiswaSeeder::class); // Memanggil SiswaSeeder
    }
}
 