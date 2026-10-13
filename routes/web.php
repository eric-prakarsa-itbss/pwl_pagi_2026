<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return Product::with('supplier')->get();
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product-new', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'edit']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);