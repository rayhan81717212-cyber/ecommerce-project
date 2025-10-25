<?php

use Illuminate\Support\Facades\Route;

use App\Models\Roles;
use App\Http\Controllers\RoleController;  


Route::get('/', function () {
    return view('admin.pages.dashboard');
});

Route::get("/role", [RoleController::class, 'index']);
Route::get('/role-details/{id}', [RoleController::class, 'show'])->name('role-details');


