<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('categories', [App\Http\Controllers\ApiController::class, 'getAllCategories']);
Route::get('offers', [App\Http\Controllers\ApiController::class, 'getAllOffers']);
Route::get('promos', [App\Http\Controllers\ApiController::class, 'getAllPromos']);
Route::get('shops', [App\Http\Controllers\ApiController::class, 'getAllShops']);
Route::get('restaurants', [App\Http\Controllers\ApiController::class, 'getAllRestaurants']);
Route::get('restaurant/{id}', [App\Http\Controllers\ApiController::class, 'getRestaurantById']);

Route::get('/img', function(){
    return url('/media/of-1.jpg');
});
