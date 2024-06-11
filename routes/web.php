<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\productController;
use App\Http\Controllers\suppliercontroller;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\adminauthcontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminregister', function () {
    return view('admin.register');
});
Route::get('/adminlogin', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);
Route::get('/o', function () {
    return view('admin.orders2');
});

Route::get('/customer', function () {
    return view('admin.customers');
});
Route::get('/reset', function (){
    return view('admin.resetpassword');
})->name('resetpassword.admin');
Route::get('/message', function () {
    return view('admin.message');
});
Route::get('/pro', function () {
    return view('admin.profile');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/forgotpassword', function () {
    return view('admin/forgetpassword');
});


//admin auth
Route::get('/registeradmin', [adminauthcontroller::class, 'register'])->name('register.admin');
Route::post('/loginadmin', [adminauthcontroller::class, 'login'])->name('login.admin');
Route::get('/resetpassword', [adminauthcontroller::class, 'resetpassword'])->name('reset.admin');
Route::post('/forgetpassform', [adminauthcontroller::class, 'forgetpassword'])->name('forget.admin');
Route::get('/profilesetting', [adminauthcontroller::class, 'profile'])->name('profile.admin');
Route::get('/otp', [adminauthcontroller::class, 'otpcnfm'])->name('otpcnfm.admin');
Route::get('/profilesetting', [adminauthcontroller::class, 'profile'])->name('profile.admin');

//message section
Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
// Add other routes as needed

//dashboard
Route::get('/index', [productController::class, 'viewdashboard'])->name('productcount');
Route::get('/category', [productController::class, 'categorysendtocategorypage'])->name('viewcategori');
Route::get('/addproductpage', [productController::class, 'categorysendtoproductpage'])->name('addtoblacklist');

//product section
Route::post('/addproduct', [productController::class, 'addproduct'])->name('product.add');
Route::get('/addattributes', [productController::class, 'addattributes'])->name('attributes.add');
Route::get('/addquantity', [productController::class, 'addquantity'])->name('product.addquantity');
Route::get('/viewproducts', [productController::class, 'addquantity2'])->name('suplier.viewproducts');
Route::get('/orders', [productController::class, 'vieworders'])->name('orders');
Route::get('/category/{category_id}', [productController::class, 'updatecategory'])->name('upcategory');
Route::get('/updateproduct/{id}', [productController::class, 'updateproduct'])->name('updateproduct');
Route::get('/updateqty/{id}', [productController::class, 'updateqty'])->name('product.updateqty');
Route::get('/blacklist', [productController::class, 'blacklist'])->name('blacklist');
Route::get('/ratings', [productController::class, 'ratingpageview'])->name('ratingview');
Route::get('/addblacklist', [productController::class, 'store'])->name('addtoblacklist');
Route::get('/addcategory', [productController::class, 'catstore'])->name('addcategories');
Route::get('/product', [productController::class, 'viewproduct'])->name('product');
Route::get('/pands', [productController::class, 'pands'])->name('pands');
Route::get('/deletecategory/{category_id}', [productController::class, 'deletecategory'])->name('delcategory');
Route::get('/delattributes/{attributes}', [productController::class, 'delattributes'])->name('delattributes');
Route::get('/deleteproduct/{product_id}', [productController::class, 'deleteproduct'])->name('deleteproduct');
//order section

Route::get('/orderdetails/{id}', [productController::class, 'orderdetails'])->name('product.orderdetails');
Route::get('/updateproduct', function () {
    return view('admin.updateproduct');
});


//suplier section
Route::get('/viewsupplier', [suppliercontroller::class, 'viewsupplier'])->name('viewsupplier');
Route::get('/editsupplier', [suppliercontroller::class, 'editsupplier'])->name('supplier.edit');
Route::get('/updatesupplier/{id}', [suppliercontroller::class, 'updatesupplier'])->name('supplier.update');
Route::get('/destroysupplier/{id}', [suppliercontroller::class, 'deletesupplier'])->name('supplier.destroy');
Route::get('/addsupplier', [suppliercontroller::class, 'addsupplier'])->name('supplier.add');
Route::get('/addtoblacklist/{id}', [suppliercontroller::class, 'addtoblacklist'])->name('supplier.addblacklist');

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
