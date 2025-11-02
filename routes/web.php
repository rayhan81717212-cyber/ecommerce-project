<?php

use Illuminate\Support\Facades\Route;

use App\Models\Roles;
use App\Http\Controllers\RoleController;  
use App\Models\Brand;
use App\Http\Controllers\BrandController;

// product controller
use App\Http\Controllers\ProductController;  


Route::get('/', function () {
    return view('admin.pages.dashboard');
});

Route::get("/role", [RoleController::class, 'index']);
Route::get('/role-details/{id}', [RoleController::class, 'show'])->name('role-details');

// product router
Route::get('/product', [ProductController::class, 'store'])->name('product');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/{id}', [ProductController::class, 'destory'])->name('product.destory');

// Categories router
Route::get('/categories', function () {
    return view('admin.pages.productManagement.categories.index');
});

// Categories router
Route::get('/brand',  [BrandController::class, 'index']);
    

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
