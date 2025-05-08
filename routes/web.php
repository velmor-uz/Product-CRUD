<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductsController::class, 'index']);
Route::resource('product', ProductsController::class);