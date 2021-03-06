<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('create', [ProductController::class, 'store'])->prefix('products.create');
});

Route::prefix('users')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('showFormLogin');
    Route::post('/login', [HomeController::class, 'login']);
    Route::get('/{name}', [HomeController::class, 'showProfile'])->name('profile');
    Route::get('create', [HomeController::class, 'store'])->name('users.create');
});
Route::prefix('/')->group(function () {
    Route::prefix('customer')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customers.list');

        Route::get('/create', [CustomerController::class, 'create'])->name('customers.add');

        Route::post('/create', [CustomerController::class, 'store']);

        Route::get('/update/{id}', [CustomerController::class, 'edit'])->name('customers.edit');

        Route::post('/update', [CustomerController::class, 'update'])->name('customers.update');

        Route::get('/delete/{id}', [CustomerController::class, 'destroy'])->name('customers.delete');

        Route::get('/detail/{id}', [CustomerController::class, 'show'])->name('customers.detail');

        Route::post('/search', [CustomerController::class, 'search'])->name('customers.search');
    });
});

Route::get('/', [CustomerController::class, 'index'])->name('customers.list');
