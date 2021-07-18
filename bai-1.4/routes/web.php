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

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $dictionary = ['hello' => 'xin chào',
        'one' => 'một',
        'apple' => 'táo',
        'meat' => 'thịt'];
    $eng = $request->english;
    $flag = 0;
    foreach ($dictionary as $word => $descriptions) {
        if ($word == $eng) {
            echo "word $word mean $descriptions";
            $flag = 1;
        }
    }
    if ($flag = 0) {
        echo 'word not found';
    }
});
