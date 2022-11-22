<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\TypeAPIController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Products CRUD
Route::get('/get-products', [APIController::class, 'index']);
Route::get('/get-products/{id}', [APIController::class, 'show']);
Route::post('/create-product', [APIController::class, 'store']);
Route::put('/update/{product}', [APIController::class, 'update']);
Route::delete('/delete/{product}', [APIController::class, 'destroy']);
Route::get('/get-products-by-type/{id}', [APIController::class, 'showByType']);


// Type CRUD
Route::get('/categories', [TypeAPIController::class, 'index']);
Route::get('/categories/{id}', [TypeAPIController::class, 'show']);
Route::post('/create-category', [TypeAPIController::class, 'store']);
Route::put('/update/{type}', [TypeAPIController::class, 'update']);
Route::delete('/delete/{type}', [TypeAPIController::class, 'destroy']);
