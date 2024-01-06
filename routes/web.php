<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Welcome route for the home page.
Route::get('/', function () {
    return view('index');
});


// Products related routes.
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::post('/products', 'store')->name('products.store');
    Route::get('/products/create', 'create')->name('products.create');
    Route::get('/products/{product}', 'show')->name('products.show');
    Route::get('/products/{product}/edit', 'edit')->name('products.edit');
    Route::put('/products/{product}', 'update')->name('products.update');
    Route::delete('/products/{product}', 'destroy')->name('products.destroy');
});
