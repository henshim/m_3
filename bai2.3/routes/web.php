<?php

use App\Http\Controllers\ShowController;
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

Route::prefix('customer')->group(function(){
    Route::get('index',function(){
        Route::get('/',[ShowController::class,'index']);
    });

    Route::get('create',function(){
        //return view('modules.customer.create');
    });

    Route::post('store', function(){

    });

    Route::get('{id}/show', function(){
        return view('modules.customer.show');
    });

    Route::get('{id}/edit', function(){

    });

    Route::get('{id}/update', function(){

    });

    Route::get('{id}/', function (){
        //Route::get('{id}','ShowController@show');
    });
});
