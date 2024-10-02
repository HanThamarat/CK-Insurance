<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataAssetController;


Route::get('/', function () { return view('auth.login'); });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/home', [App\Http\Controllers\pageController::class, 'index']);

    // page router
    Route::resource('views', App\Http\Controllers\pageController::class);
});

// Customer Route
Route::get('/customers/profile', [CustomerController::class, 'profile'])->name('customers.profile');
Route::resource('customers', CustomerController::class);

// ASSET ROUTE
Route::resource('data_assets', DataAssetController::class);





















// use App\Http\Controllers\ProvinceController;
// use App\Http\Controllers\CarController;

// Route::get('/data-assets', [DataAssetController::class, 'showAll'])->name('data_assets.show_all');

// // routes/web.php
// Route::get('/data-assets', [DataAssetController::class, 'fetchData'])->name('data-assets.fetch');


// Route::get('/data-assets', [DataAssetController::class, 'fetchData']);

// ข้อมูลลูกค้า Data Aseets
// Route::get('/data_asset', [DataAssetController::class, 'index']);
// Route::get('data_assets', [DataAssetController::class, 'index'])->name('data_assets.index');
// Route::get('/fetch-data-assets', [DataAssetController::class, 'fetchData']);
// Route::post('/data-assets/update/{id}', [DataAssetController::class, 'update']);
// Route::post('/data-assets/create', [DataAssetController::class, 'create']);
// Route::delete('/data-assets/delete/{id}', [DataAssetController::class, 'destroy'])->name('data-assets.destroy');




// Route::resource('data_assets', DataAssetController::class);

// Route::get('data_assets', [DataAssetController::class, 'index_all'])->name('data_assets.index');
// Route::post('data_assets', [DataAssetController::class, 'data_assets_create'])->name('data_assets.index');



// Route::get('data_assets', [DataAssetController::class, 'getProvinces'])->name('data_assets.index');
// Route::get('data_assets', [DataAssetController::class, 'index_all'])->name('data_assets.index');
// Route::get('data_assets', [DataAssetController::class, 'index_all_response'])->name('data_assets.index');



// Route::get('data_assets', [DataAssetController::class, 'index_province'])->name('data_assets.index');
// Route::get('data_assets', [DataAssetController::class, 'index_car_group'])->name('data_assets.index');



// Route::resource('data_assets', DataAssetController::class);







// Route::get('data_assets', [DataAssetController::class, 'index_province'])->name('data_assets.index');

// Route::resource('data_assets', ProvinceController::class);
// Route::resource('data_assets', CarController::class);
// Route::get('data_assets/cars', [CarController::class, 'index'])->name('data_assets.index');
// Route::get('/data_assets/index', [ProvinceController::class, 'index_car']);




// Route::resource('data_assets', CarController::class);




// Route::resource('data_asset', DataAssetController::class);
// Route::get('/data_assets/modal_car', [ProvinceController::class, 'index']);
// Route::get('/data_assets/modal_car', [ProvinceController::class, 'index']);
// Route::get('/data_assets/modal_car', [ProvinceController::class, 'index']);
// Route::get('/data_asset', [DataAssetController::class, 'provinceDLT']);
// Route::get('/data_assets/modal_car', [DataAssetController::class, 'provinceDLT']);
// Route::get('/data_assets/modal_car', [DataAssetController::class, 'provinceDLT']);
// Route::get('/data_asset', [DataAssetController::class, 'showModalCar']);









// Test Show --------------------------------------------------------------------------------------------------------------------------

// Route::get('data_assets/show', function () {
//     return view('data_assets.show');
// })->name('data_assets.show');

// Route::get('data_assets/show', [DataAssetController::class, 'showall'])->name('data_assets.showall');

// routes/web.php
// Route::get('data_assets/show', [DataAssetController::class, 'showAll'])->name('data_assets.showall');


// Route::get('data_assets/test', function () {
//     return view('data_assets.test');
// })->name('data_assets.test');


//--------------------------------------------------------------------------------------------------------------------------------------






// Route::get('/data_assets/track', [DataAssetController::class, 'track'])->name('data_assets.track');
// Route::get('/data_assets/car', [DataAssetController::class, 'car'])->name('data_assets.car');
// Route::get('/data_assets/motor', [DataAssetController::class, 'motor'])->name('data_assets.motor');
// Route::get('/data_assets/land', [DataAssetController::class, 'land'])->name('data_assets.land');
// Route::get('/data_assets/certificate', [DataAssetController::class, 'certificate'])->name('data_assets.certificate');
