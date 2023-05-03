<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Make;
use App\Models\Model;

class ModelsTableSeeder extends Seeder
{
    public function run()
    {
        $toyota = Make::where('make', 'Toyota')->first();
        $honda = Make::where('make', 'Honda')->first();
        $ford = Make::where('make', 'Ford')->first();
        $chevrolet = Make::where('make', 'Chevrolet')->first();

        Model::create(['make_id' => $toyota->id, 'model' => 'Camry']);
        Model::create(['make_id' => $toyota->id, 'model' => 'Corolla']);
        Model::create(['make_id' => $honda->id, 'model' => 'Accord']);
        Model::create(['make_id' => $honda->id, 'model' => 'Civic']);
        Model::create(['make_id' => $ford->id, 'model' => 'F-150']);
        Model::create(['make_id' => $ford->id, 'model' => 'Mustang']);
        Model::create(['make_id' => $chevrolet->id, 'model' => 'Silverado']);
        Model::create(['make_id' => $chevrolet->id, 'model' => 'Impala']);
    }
}
