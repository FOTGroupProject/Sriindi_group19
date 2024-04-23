<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\productController;
use App\Http\Controllers\suppliercontroller;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);
Route::get('/o', function () {
    return view('admin.orders2');
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
Route::get('/registers', function () {
    return view('admin/register');
});
//dashboard
Route::get('/index', [productController::class, 'viewdashboard'])->name('productcount');
Route::get('/category', [productController::class, 'categorysendtocategorypage'])->name('viewcategori');
Route::get('/addproductpage', [productController::class, 'categorysendtoproductpage'])->name('addtoblacklist');

//product section

Route::get('/orders', [productController::class, 'vieworders'])->name('orders');
Route::get('/updatecategory/{category_id }', [productController::class, 'updatecategory'])->name('upcategory');
Route::get('/blacklist', [productController::class, 'blacklist'])->name('blacklist');
Route::get('/ratings', [productController::class, 'ratingpageview'])->name('ratingview');
Route::get('/addblacklist', [productController::class, 'store'])->name('addtoblacklist');
Route::get('/addcategory', [productController::class, 'catstore'])->name('addcategories');
Route::get('/product', [productController::class, 'viewproduct'])->name('product');
Route::get('/deletecategory/{category_id}', [productController::class, 'deletecategory'])->name('delcategory');
Route::get('/addproduct', [productController::class, 'productstore'])->name('productstr');
Route::get('/updateproduct', function () {
    return view('admin.updateproduct');
});


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
