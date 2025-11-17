<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CartController; 
use App\Http\Controllers\OrderController; 
use App\Http\Controllers\ShopController; 

// font page route
Route::get('/', [ProductController::class, 'getAllProduct']);

// show page Route
Route::get('/product-details/{id}', [ProductController::class, 'getProductById'])->name('product-show');

// font page route
Route::get('/shop-page', [ShopController::class, 'getShopProduct']);
Route::get('/shop/category/{id}', [ShopController::class, 'getShopProductByCategory'])->name('shop.category');


 


// Add to cart Route
Route::get('cart', [CartController::class, 'cartPage'])->name('cart');
Route::post('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::post('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');

// checkOut Route
Route::get('/checkout', [OrderController::class, 'checkoutPage'])->name('checkout.page');
Route::post('/order-place', [OrderController::class, 'placeOrder'])->name('order.place');
Route::get('/order-success/{id}', [OrderController::class, 'success'])->name('order.success');

