<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KritikSaranController;
use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserBookingController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

// USER
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Route::resource('login', UserController::class);

//BOOKING 
Route::resource('booking', BookingController::class);
Route::get('/paket/filter', [BookingController::class, 'filter']);
Route::get('userbooking', [BookingController::class, 'userBooking']);
Route::post('userpost', [BookingController::class, 'userPost']);
Route::post('/api/save-date', [BookingController::class, 'saveDate']);

// PAKET
Route::resource('paket', PaketController::class);

Route::resource('category', CategoryController::class);

Route::resource('dashboard', DashboardController::class);

Route::resource('home', HomeController::class);

Route::resource('kritiksaran', KritikSaranController::class);
Route::delete('/kritiksaran/{kritiksaran}', [KritikSaranController::class, 'destroy'])->name('kritiksaran.destroy');


// Route::resource('userbooking', UserBookingController::class);

// Route::get('/customers', [PageController::class, 'customers'])->name('customers');
