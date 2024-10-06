<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;



Route::get('/customers',[CustomersController::class,'index'])->name('customers.index');
Route::post('/customer',[CustomersController::class,'store'])->name('customers.store');
Route::get("/customers/create",[CustomersController::class,'create'])->name('customers.create');
Route::get('/customers/{id}',[CustomersController::class,'show'])->name('customers.show');
Route::get('/customers/{id}/edit',[CustomersController::class,'edit'])->name('customers.edit');
Route::put('/customers/{id}',[CustomersController::class,'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomersController::class, 'destroy1'])->name('customers.destroy');

Route::get('/customers/list/{id}',[CustomersController::class,'list'])->name('customers.list');

// xem bẳng dữ liệu sqlite ở web: https://inloop.github.io/sqlite-viewer/