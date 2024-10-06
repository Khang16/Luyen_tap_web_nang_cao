<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

Route::get('/products',[ProductsController::class,'index'])->name('products.index');
Route::post('/products',[ProductsController::class,'store'])->name('products.store');
Route::get("/products/create",[ProductsController::class,'create'])->name('products.create');
Route::get('/products/{id}',[ProductsController::class,'show'])->name('products.show');
Route::get('/products/{id}/edit',[ProductsController::class,'edit'])->name('products.edit');
Route::put('/products/{id}',[ProductsController::class,'update'])->name('products.update');
Route::delete('/products/{customer}', [ProductsController::class, 'destroy1'])->name('products.destroy');

// xem bẳng dữ liệu sqlite ở web: https://inloop.github.io/sqlite-viewer/