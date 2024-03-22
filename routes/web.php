<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\product;
use App\Http\Controllers\suppliercontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/o', function () {
    return view('admin.orders2');
});
Route::get('/orders', function () {
    return view('admin.orders');
});
Route::get('/customer', function () {
    return view('admin.customers');
});

Route::get('/pro', function () {
    return view('admin.profile');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/addblacklist', [product::class, 'store'])->name('addtoblacklist');
Route::get('/addcategory', [product::class, 'catstore'])->name('addcategories');
Route::get('/product', [product::class, 'viewproduct'])->name('product');
Route::get('/delcategory', [product::class, 'delcat'])->name('delcategory');
Route::get('/index', [product::class, 'viewdashboard'])->name('productcount');
Route::get('/addproduct', [product::class, 'productstore'])->name('productstr');
Route::get('/viewsupplier', [suppliercontroller::class, 'viewsupplier'])->name('viewsupplier');

//suplier section
Route::get('/updatesupplier', [suppliercontroller::class, ''])->name('supplier.update');

Route::get('/destroysupplier/{id}', [suppliercontroller::class, 'deletesupplier'])->name('supplier.destroy');
Route::get('/addsupplier', [suppliercontroller::class, 'addsupplier'])->name('supplier.add');




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
