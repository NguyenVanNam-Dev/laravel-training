<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerAddressController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutusController::class, 'index'])->name('about-us');

Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');

// Show form create new customer
Route::get('customers/create', [CustomersController::class, 'create'])->name('customers.create');

// Create new customer
Route::post('customers', [CustomersController::class, 'store'])->name('customers.store');

// Show form edit customer
Route::get('customers/{customer}/edit', [CustomersController::class, 'edit'])->name('customers.edit');

// Update customer info
Route::put('customers/{customer}', [CustomersController::class, 'update'])->name('customers.update');

// Customer delete
Route::delete('customers/{customer}', [CustomersController::class, 'destroy'])->name('customers.destroy');

Route::resource('customer-address', CustomerAddressController::class);
