<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.index');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/product', function () {
    return view('admin/product');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/addblacklist', [product::class, 'store'])->name('addtoblacklist');
Route::get('/addcategory', [product::class, 'catstore'])->name('addcategories');
Route::get('/product', [product::class, 'viewcat'])->name('product');
Route::get('/delcategory', [product::class, 'delcat'])->name('delcategory');
Route::get('/index', [product::class, 'procount'])->name('productcount');





