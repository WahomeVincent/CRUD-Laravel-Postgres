<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all fruits
Route::get('/fruits', [FruitController::class, 'getFruit']);

//Get a specific fruit
Route::get('/fruit/{id}', [FruitController::class, 'getFruitById']);

// Add Fruit
Route::post('addFruit', [FruitController::class, 'addFruit']);

// Update Fruit
Route::put('updateFruit/{id}', [FruitController::class, 'updateFruit']);

// Delete Fruit
Route::delete('deleteFruit/{id}', [FruitController::class, 'deleteFruit']);