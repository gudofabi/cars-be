<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Make;
use App\Models\Model;
use App\Models\Type;

class CarController extends Controller
{
    public function indexYears()
    {
        $years = Year::all();

        return response()->json($years);
    }

    public function indexMakes(Request $request)
    {
        $validatedData = $request->validate([
            'year' => 'required|numeric',
        ]);

        $makes = Make::where('year_id', $request->year)->get();

        return response()->json($makes);
    }

    public function indexModels(Request $request)
    {
        
        $validatedData = $request->validate([
            'make' => 'required|string',
        ]);

        $make = Make::where('make', $request->make)
                    ->first();

        $models = Model::where('make_id', $make->id)
                        ->get();

        return response()->json($models);
    }

    public function indexTypes(Request $request)
    {   
        $validatedData = $request->validate([
            'model' => 'required|string',
        ]);

        $model = Model::where('model', $request->model)
                ->first();

        $types = Type::where('model_id', $model->id)
                      ->get();

        return response()->json($types);
    }
}
