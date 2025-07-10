<?php

use Illuminate\Support\Facades\Route;

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