<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productController;
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
//dashboard
Route::get('/index', [productController::class, 'viewdashboard'])->name('productcount');

//product section
Route::get('/addblacklist', [productController::class, 'store'])->name('addtoblacklist');
Route::get('/addcategory', [productController::class, 'catstore'])->name('addcategories');
Route::get('/product', [productController::class, 'viewproduct'])->name('product');
Route::get('/deletecategory/{category_id}', [productController::class, 'deletecategory'])->name('delcategory');
Route::get('/addproduct', [productController::class, 'productstore'])->name('productstr');

//suplier section
Route::get('/viewsupplier', [suppliercontroller::class, 'viewsupplier'])->name('viewsupplier');
Route::get('/editsupplier', [suppliercontroller::class, 'editsupplier'])->name('supplier.edit');
Route::get('/updatesupplier', [suppliercontroller::class, ''])->name('supplier.update');
Route::get('/destroysupplier/{id}', [suppliercontroller::class, 'deletesupplier'])->name('supplier.destroy');
Route::get('/addsupplier', [suppliercontroller::class, 'addsupplier'])->name('supplier.add');

//auth section
Route::get('/dashboard', function () {
    return view('redirect');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
