<?php

use Illuminate\Support\Facades\Route;

use App\Models\Roles;
use App\Http\Controllers\RoleController;  
use App\Models\Brand;
use App\Http\Controllers\BrandController;

// product controller
use App\Http\Controllers\ProductController;  
use App\Http\Controllers\CategoriesController;  


Route::get('/', function () {
    return view('admin.pages.dashboard');
});

Route::get("/role", [RoleController::class, 'index']);
Route::get('/role-details/{id}', [RoleController::class, 'show'])->name('role-details');

// product router
// Route::get('/product', [ProductController::class, 'index'])->name('product');
// Route::get('/product-details/{id}', [ProductController::class, 'show'])->name('product-show');
// Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
// Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
// Route::get('/product/{id}', [ProductController::class, 'destory'])->name('product.destory');

// Product Route
Route::resource("product",(ProductController::class));

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
