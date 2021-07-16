<?php

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

Route::get('/calculate', function () {
    return view('product');
});

Route::post('/calculate', function (Illuminate\Http\Request $request) {
    $price = $request->price;
    $discount = $request->discount;
    $result = $price * $discount * 0.1;
    $discountPrice = $price - $result;
    return view('result', compact('discountPrice', 'result', 'price', 'discount'));
});

