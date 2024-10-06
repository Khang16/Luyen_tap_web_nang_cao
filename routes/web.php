<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

// Route::get('/',[CustomersController::class, 'index'])->name('customers.index');
// Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
// Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store');
// Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
// Route::get('/customers/{customer}', [CustomersController::class, 'show'])->name('customers.show');
// Route::get('/customers/{customer}/edit', [CustomersController::class, 'edit'])->name('customers.edit');
// Route::put('/customers/{customer}', [CustomersController::class, 'update'])->name('customers.update');
// Route::delete('/customers/{customer}', [CustomersController::class, 'destroy1'])->name('customers.destroy');

Route::get('/',action: [CustomersController::class, 'index'])->name('customers.index');



// xem bẳng dữ liệu sqlite ở web: https://inloop.github.io/sqlite-viewer/