<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Make;
use App\Models\Year;

class MakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $year2022 = Year::where('year', '2022')->first();
        $year2021 = Year::where('year', '2021')->first();
        $year2020 = Year::where('year', '2020')->first();

        Make::create(['year_id' => $year2022->id, 'make' => 'Toyota']);
        Make::create(['year_id' => $year2022->id, 'make' => 'Honda']);
        Make::create(['year_id' => $year2021->id, 'make' => 'Toyota']);
        Make::create(['year_id' => $year2021->id, 'make' => 'Ford']);
        Make::create(['year_id' => $year2020->id, 'make' => 'Chevrolet']);
        Make::create(['year_id' => $year2020->id, 'make' => 'Honda']);
    }
}
