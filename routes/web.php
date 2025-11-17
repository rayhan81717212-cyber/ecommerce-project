<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Roles;
use App\Http\Controllers\RoleController;  
use App\Models\Brand;
use App\Http\Controllers\BrandController;
use App\Models\User;
use App\Http\Controllers\UsersController;

// product controller
use App\Http\Controllers\ProductController;  
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\CategoriesController; 
use App\Http\Controllers\OrderController; 
use App\Http\Controllers\PaymentController; 
use App\Http\Controllers\BannerController; 

Route::get('/', function () {
    return view('welcome');
});

include('font.web.php');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // route================

    // user Route
    Route::resource('user', UsersController::class);

    // Role Route
    Route::resource('role', RoleController::class);


    // Product Route
    Route::resource("product",(ProductController::class));
    Route::get('search', [ProductController::class, 'search'])->name('product.search');
    
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
    Route::get('/cancle-order', [OrderController::class, 'cancleOrder'])->name('cancle-order');
    Route::get('/pending-order', [OrderController::class, 'pendingOrder'])->name('pending-order');
    Route::get('/deliverd-order', [OrderController::class, 'deliveredOrder'])->name('deliverd-order');


    // Payment Router
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/payment/{id}', [PaymentController::class, 'printInvoice'])->name('invoice');


    // Reviews Router
    Route::get('/review', function () {
        return view('admin.pages.review.index');
    });

});

require __DIR__.'/auth.php';
