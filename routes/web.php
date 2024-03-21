<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/addblacklist', [product::class, 'store'])->name('addtoblacklist');


