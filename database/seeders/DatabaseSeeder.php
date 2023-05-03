<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(YearsTableSeeder::class);
        $this->call(MakesTableSeeder::class);
        $this->call(ModelsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CarsTableSeeder::class);
    }
}
