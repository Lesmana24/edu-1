<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return 'Route UTAMA';
});

Route::get('/products', function () {
    return 'Route Produk';
});

Route::get('/cart', function () {
    return 'Route cart';
});

Route::get('/checkout', function () {
    return 'Route checkout';
});

Route::get('/contoh', [ContohController::class, 'index']);

Route::resource('products-resource',ProductController::class);