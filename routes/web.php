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


Route::get('/', function () {
    return view('welcome');
});

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
        

    // order Router
    Route::get('/order', function () {
        return view('admin.pages.orderManagement.allOrder');
    });
    Route::get('/pending-order', function () {
        return view('admin.pages.orderManagement.pendingOrder');
    });
    Route::get('/deliverd-order', function () {
        return view('admin.pages.orderManagement.deliveredOrder');
    });
    Route::get('/cancle-order', function () {
        return view('admin.pages.orderManagement.cancleOrder');
    });

    // Payment Router
    Route::get('/payment', function () {
        return view('admin.pages.paymentMethod.index');
    });

    // Reviews Router
    Route::get('/review', function () {
        return view('admin.pages.review.index');
    });

});

require __DIR__.'/auth.php';
