<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\FoodController::class, 'index'])->name('food.list');
Route::prefix('/food')->group(function () {
   Route::get('/add',[FoodController::class, 'add'])->name('food.add');

   Route::post('/add',[FoodController::class, 'store']);
});
