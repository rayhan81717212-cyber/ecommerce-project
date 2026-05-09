<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\vendor\VendorProductController;
use Illuminate\Support\Facades\Route;

Route::get('/vendor/dashboard', function () {
    return view('admin.vendor.vendorDashboard');
})->middleware(['auth', 'vendor']);

