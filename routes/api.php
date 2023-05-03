<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/years', [CarController::class, 'indexYears']);
Route::get('/years/{year}/makes', [CarController::class, 'indexMakes']);
Route::get('/years/{year}/makes/{make}/models', [CarController::class, 'indexModels']);
Route::get('/years/{year}/makes/{make}/models/{model}/types', [CarController::class, 'indexTypes']);