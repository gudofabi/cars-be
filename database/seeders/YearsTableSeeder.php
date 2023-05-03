<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Year;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Year::create(['year' => '2022']);
        Year::create(['year' => '2021']);
        Year::create(['year' => '2020']);
    }
}
