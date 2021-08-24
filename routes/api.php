<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;

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

Route::get('/coffees', [CoffeeController::class, 'index'])->name('coffees');

Route::get('/coffees/search/{slug}', [CoffeeController::class, 'search'])->name('coffee-search');

Route::get('/coffee/{id}', [CoffeeController::class, 'show'])->name('coffee');

Route::post('/coffee', [CoffeeController::class, 'store'])->name('coffee');

Route::put('/coffee/{id}', [CoffeeController::class, 'update'])->name('coffee');

Route::delete('/coffee/{id}', [CoffeeController::class, 'destroy'])->name('coffee');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
