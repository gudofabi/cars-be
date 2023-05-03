<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Model;

class TypesTableSeeder extends Seeder
{
    public function run()
    {
        $model = Model::where('model', 'Corolla')->first();

        $model->types()->create(['car_type' => 'Sedan']);
        $model->types()->create(['car_type' => 'Hatchback']);
        $model->types()->create(['car_type' => 'SUV']);
        $model->types()->create(['car_type' => 'Coupe']);
    }
}
