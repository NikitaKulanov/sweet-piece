<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products');
});

Route::resource('products', ProductController::class);

//Route::get('/product', function () {
//    return view('product');
//});
