<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart']);

Route::get('/products', function () {
    return 'Route Produk';
});

// Route::get('/cart', function () {
//     return 'Route cart';
// });

Route::get('/checkout', function () {
    return 'Route checkout';
});

Route::get('/contoh', [ContohController::class, 'index']);
Route::get('/coba', [ContohController::class, 'coba']);

Route::resource('products-resource',ProductController::class);