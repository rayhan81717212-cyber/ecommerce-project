<?php

use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;  
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UsersController;

// product controller
use App\Http\Controllers\ProductController;  
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\CategoriesController; 
use App\Http\Controllers\OrderController; 
use App\Http\Controllers\PaymentController; 
use App\Http\Controllers\BannerController; 



// 
Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'admin']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // route================

    // user Route
    Route::resource('user', UsersController::class);
    Route::get('customer', [UsersController::class, 'customerDataGet'])->name('customer');

    // Role Route
    Route::resource('role', RoleController::class);


    // Product Route
    Route::resource("product",(ProductController::class));
    Route::get('product-pending', [ProductController::class, 'pendingProduct'])->name('product-pending');
    Route::get('search', [ProductController::class, 'search'])->name('product.search');
    Route::get('/product/approved/{id}', [ProductController::class, 'productApproved'])->name('product.approved');
    
    // Product Gallery
    Route::resource("productgallery",(ProductGalleryController::class));
    Route::get('/get-products/{brand_id}', [ProductController::class, 'getProducts']);

    // Categories router
    Route::resource('categories', (CategoriesController::class));

    // Categories router
    Route::resource('brand', (BrandController::class));

    // Categories router
    Route::resource('banner', (BannerController::class));
        

    // order Router
    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/cancelled-order', [OrderController::class, 'cancleOrder'])->name('cancelled-order');
    Route::get('/pending-order', [OrderController::class, 'pendingOrder'])->name('pending-order');
    Route::get('/delivered-order', [OrderController::class, 'deliveredOrder'])->name('delivered-order');
    Route::get('/confirmed-order', [OrderController::class, 'confirmedOrder'])->name('confirmed-order');
    Route::get('/processing-order', [OrderController::class, 'processingOrder'])->name('processing-order');
   Route::post('/order-status-update/{id}', [OrderController::class, 'updateOrderStatus'])->name('order.status.update');


    // Payment Router

    // email route
    Route::get('/email-form', [MailController::class, 'index'])->name('email-form');
    Route::post('/send-email', [MailController::class, 'sendMail'])->name('send.email');


});

require __DIR__.'/auth.php';
require __DIR__.'/siteroute.php';
require __DIR__.'/vendor.php';
