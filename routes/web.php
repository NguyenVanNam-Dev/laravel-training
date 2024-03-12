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

Route::get('/', [
        HomeController::class,
        'index'
    ]
)->name('home');

Route::get('/about-us', [
    AboutusController::class,
    'index'
])->name('about-us');

Route::get('/customers', [
    CustomersController::class,
    'index'
])->name('customers');

Route::resource('customer-address', CustomerAddressController::class);
