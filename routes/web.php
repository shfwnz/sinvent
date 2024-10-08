<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return view('hello');
});

Route::resource('/category', \App\Http\Controllers\CategoryController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);


