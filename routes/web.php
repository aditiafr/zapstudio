<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaketController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');


Route::resource('booking', BookingController::class);

Route::resource('paket', PaketController::class);

Route::resource('category', CategoryController::class);

// Route::get('/customers', [PageController::class, 'customers'])->name('customers');
