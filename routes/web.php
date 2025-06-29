<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::resource(name: '/products', controller: ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
