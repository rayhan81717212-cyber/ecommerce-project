<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CartController; 
use App\Http\Controllers\OrderController; 

Route::get('/', [ProductController::class, 'getAllProduct']);
Route::get('/product-details/{id}', [ProductController::class, 'getProductById'])->name('product-show'); 


// Add to cart Route
Route::get('cart', [CartController::class, 'cartPage'])->name('cart');
Route::post('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::post('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');

// checkOut Route
Route::get('/checkout', [OrderController::class, 'checkoutPage'])->name('checkout.page');
Route::post('/checkout', [OrderController::class, 'checkoutStore'])->name('checkout.store');