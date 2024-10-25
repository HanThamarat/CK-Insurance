<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataAssetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataCusCareerController;
use App\Http\Controllers\DataCusAddressController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserController;


Route::get('/', function () { return view('auth.login'); });


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\pageController::class, 'index'])->name('home');  // กำหนดชื่อเส้นทางเป็น 'home'

    // page router
    Route::resource('views', App\Http\Controllers\pageController::class);
});



Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
});



// CUSTOMER ROUTE
Route::get('/customer/profile/{id}', [CustomerController::class, 'showProfile'])->name('customers.profile');
Route::get('/customers/profile', [CustomerController::class, 'profile'])->name('customers.profile');
Route::PUT('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');



Route::resource('customers', CustomerController::class);

// ASSET ROUTE
Route::resource('data_assets', DataAssetController::class);
Route::post('/check-vehicle-chassis', [DataAssetController::class, 'checkVehicleChassis']); // ASSET ROUTE VEHICLE CHASSIE

// CAREER ROUTE
Route::resource('customers/career', DataCusCareerController::class);

// ADDRESS ROUTE
Route::resource('customers/address', DataCusAddressController::class);

// RESET PASSWORD
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('reset.password');




// ใน routes/web.php/ดึงอาณาจักร
Route::get('/zones', [ProvinceController::class, 'getZones']);
Route::get('/getDataByZone', [ProvinceController::class, 'getDataByZone']);
Route::get('/getDistrictsByProvince', [ProvinceController::class, 'getDistrictsByProvince']);
Route::get('/getTambonsByDistrict', [ProvinceController::class, 'getTambonsByDistrict']);
Route::get('/getPostcodesByTambon', [ProvinceController::class, 'getPostcodesByTambon']);



// ใน routes/web.php/ดึงอาชีพ
Route::get('/get-careers', [DataCusCareerController::class, 'getCareerOptions']);



Route::get('/customer/{id}/addresses', [CustomerController::class, 'DataCusAddressManage']);


// USER
Route::resource('users', UserController::class);
Route::get('/users/data', [UserController::class, 'fetchData'])->name('users.fetchData');




// ADRESS CUSTOIMER
Route::get('/get-address-data/{id}', [DataCusAddressController::class, 'getAddressData']);
// CAREER CUSTOIMER
Route::get('/get-career-data/{id}', [CustomerController::class, 'getCareerData']);




Route::get('/customer/{id}', [CustomerController::class, 'showProfile']);

// ดึงค่าจาก การ์ดมาแสดง
Route::get('/get-address/{id}', [DataCusAddressController::class, 'getAddress']);





// DATA ASSET FETCH DATA
Route::get('/asset-types', [DataAssetController::class, 'getDataAsset']);
Route::get('/api/ratetype-options', [DataAssetController::class, 'getRatetypeOptions']);
Route::get('/api/vehicle-names', [DataAssetController::class, 'getVehicleNames']);
Route::get('/api/brand-options', [DataAssetController::class, 'getBrandOptions']);
Route::get('/api/group-car-options', [DataAssetController::class, 'getGroupCarOptions']);
Route::get('/api/year-options', [DataAssetController::class, 'getYearOptions']);
Route::get('/api/model-car-options', [DataAssetController::class, 'getModelOptions']);
























// Route::get('/get-address-data', [DataCusAddressController::class, 'getAddressData']);


// Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
// Route::get('customers/{id}', [CustomerController::class, 'show']);
// Route::get('/customer/profile', [CustomerController::class, 'getCustomerProfile']);
// Route::post('/customers/update', [CustomerController::class, 'update'])->name('customers.update');


// Route::get('/users', [UserController::class, 'index'])->name('users.fetch');


// Route::resource('users', UserController::class);
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


// Route::get('data_assets/getVehicleTypes', [DataAssetController::class, 'getVehicleTypes']);



// Route::get('/data_assets', [DataAssetController::class, 'index'])->name('data_assets.index');




// Route::get('/getDistrictsByProvince', [ProvinceController::class, 'getDistrictsByProvince']);




// Route::get('/zones', [ProvinceController::class, 'getZones']);
// Route::get('/provinces', [ProvinceController::class, 'getProvince']);
// Route::get('/districts', [ProvinceController::class, 'getDistrict']);
// Route::get('/tambons', [ProvinceController::class, 'getTambon']);
// Route::get('/postcodes', [ProvinceController::class, 'getPostcode']);









// Route สำหรับดึงข้อมูลจังหวัด
// Route::get('/provinces', [ProvinceController::class, 'index']);

// // Route สำหรับสร้างจังหวัดใหม่
// Route::post('/provinces', [ProvinceController::class, 'store']);



// CAREER ROUTE
// Route::resource('customers', DataCusCareerController::class);



// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
//     Route::get('/home', [App\Http\Controllers\pageController::class, 'index']);

//     // page router
//     Route::resource('views', App\Http\Controllers\pageController::class);
// });


// Route::get('/customers/profile/{id}', [CustomerController::class, 'show'])->name('customers.profile');
// Route::get('/customers/profile/{id}', [CustomerController::class, 'show'])->name('customers.profile');

// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

// Show
// Route::get('/customers/profile', [CustomerController::class, 'show'])->name('customers.index');

// Route::get('/topbar', function () {
//     $customers = \App\Models\Customer::all();
//     return view('components.content-layout.modal_customer', compact('customers'));
// })->name('topbar.index');


// use App\Models\Customer;
// Route::get('/customers', function () {
//     $customers = Customer::all();
//     return view('components.content-layout.modal_customer', compact('customers'));
// })->name('customers.index');


// Route::get('/topbar', function () {
//     $customers = Customer::all(); // ดึงข้อมูลลูกค้าทั้งหมด
//     return view('components.content-layout.topbar', compact('customers')); // ส่งข้อมูลไปยัง view
// })->name('topbar.index');



// SEARCH ROUTE
// Route::get('/search', [SearchController::class, 'search'])->name('search');

// Route::get('/customers', [CustomerController::class, 'index']);


// Customer Route
// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

// Route::get('/topbar', [CustomerController::class, 'index'])->name('customers.index');
// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');


// Route::get('customers', [CustomerController::class, 'index']);

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
