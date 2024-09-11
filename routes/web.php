<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('auth.login'); });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/home', [App\Http\Controllers\pageController::class, 'index']);

    // page router
    Route::resource('views', App\Http\Controllers\pageController::class);
});
