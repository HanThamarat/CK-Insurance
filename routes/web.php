<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/home', [App\Http\Controllers\pageController::class, 'index']);
    // page router
    Route::resource('views', App\Http\Controllers\pageController::class);
});

// Route to display the customer profile (profile method)
Route::get('/customers/profile', [CustomerController::class, 'profile'])->name('customers.profile');

Route::resource('customers', CustomerController::class);
