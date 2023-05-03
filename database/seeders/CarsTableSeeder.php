<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Year;
use App\Models\Make;
use App\Models\Model;
use App\Models\Type;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $year = Year::where('year', '2021')->first();
        $make = Make::where('make', 'Toyota')->first();
        $model = Model::where('model', 'Corolla')->first();
        $type = Type::where('car_type', 'Sedan')->first();

        Car::create([
            'year' => $year->id,
            'make' => $make->id,
            'model' => $model->id,
            'car_type' => $type->id,
            'vin' => '12345678901234567',
        ]);

        Car::create([
            'year' => $year->id,
            'make' => $make->id,
            'model' => $model->id,
            'car_type' => $type->id,
            'vin' => '12345987654234567',
        ]);
    }
}
