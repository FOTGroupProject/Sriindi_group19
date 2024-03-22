<?php

use App\Http\Controllers\ProfileController;
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
    return view('admin.orders');
});
Route::get('/product', function () {
    return view('admin/product');

});

Route::get('/pro', function () {
    return view('admin.profile');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/addblacklist', [product::class, 'store'])->name('addtoblacklist');
Route::get('/addcategory', [product::class, 'catstore'])->name('addcategories');
Route::get('/product', [product::class, 'viewcat'])->name('product');
Route::get('/delcategory', [product::class, 'delcat'])->name('delcategory');
Route::get('/index', [product::class, 'procount'])->name('productcount');





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('redirect');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
