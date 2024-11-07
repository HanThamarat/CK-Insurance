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


// Profile ผู้ใช้งานระบบ
Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
});



// CUSTOMER ROUTE (ข้อมูลของลูกค้า)
Route::get('/customer/profile/{id}', [CustomerController::class, 'showProfile'])->name('customers.profile'); // ดึง ID ของลูกค้า
Route::get('/customers/profile', [CustomerController::class, 'profile'])->name('customers.profile'); //แสดงข้อมูลลูกค้า
Route::get('/api/customers/{id}', [CustomerController::class, 'showCustomerData']); //แสดงข้อมูลลูกค้าตาม ID
Route::PUT('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update'); //อัปเดทข้อมูลลูกตาม ID
// routes/web.php (ดึงข้อมูลลูกค้า)
// Route::get('/customer/{id}', [CustomerController::class, 'getCustomerData']);

Route::resource('customers', CustomerController::class); //Function ทั่วไปมาใช้ ของลูกค้า


// ASSET ROUTE (ข้อมูลสินทรัพย์)
Route::resource('data_assets', DataAssetController::class);
Route::get('/assets/customer', [DataAssetController::class, 'getAssetsByCustomerId']); //ดึงข้อมูล ลูกค้า ที่เชื่อมกับสินทรัพย์
Route::post('/check-vehicle-chassis', [DataAssetController::class, 'checkVehicleChassis']); // เช็คเลขถังไม่ให้ซ้ำกัน


// CAREER ROUTE (ข้อมูลอาชีพ)
Route::resource('customers/career', DataCusCareerController::class);

// ADDRESS ROUTE (ข้อมูลที่อยู่)
Route::resource('customers/address', DataCusAddressController::class);


// RESET PASSWORD สำหรับผู้ใช้งานระบบที่ต้องการ รีเซ็ทรหัสผ่าน
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('reset.password');


// ดึงอาณาข้อมูลภูมิประเทศไทย
Route::get('/zones', [ProvinceController::class, 'getZones']);
Route::get('/getDataByZone', [ProvinceController::class, 'getDataByZone']);
Route::get('/getDistrictsByProvince', [ProvinceController::class, 'getDistrictsByProvince']);
Route::get('/getTambonsByDistrict', [ProvinceController::class, 'getTambonsByDistrict']);
Route::get('/getPostcodesByTambon', [ProvinceController::class, 'getPostcodesByTambon']);



// ใน routes/web.php/ดึงอาชีพ
Route::get('/get-careers', [DataCusCareerController::class, 'getCareerOptions']);
Route::post('/career/update/{id}', [DataCusCareerController::class, 'update']);





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
Route::get('/addresses/{id}/edit', [DataCusAddressController::class, 'editAddress'])->name('edit-address');
Route::post('/update-address', [DataCusAddressController::class, 'updateAddress'])->name('update-address');


// DATA ASSET FETCH (ดึงข้อมูลรถตามลำดับ)
Route::get('/asset-types', [DataAssetController::class, 'getDataAsset']);
Route::get('/api/ratetype-options', [DataAssetController::class, 'getRatetypeOptions']);
Route::get('/api/vehicle-names', [DataAssetController::class, 'getVehicleNames']);
Route::get('/api/brand-options', [DataAssetController::class, 'getBrandOptions']);
Route::get('/api/group-car-options', [DataAssetController::class, 'getGroupCarOptions']);
Route::get('/api/year-options', [DataAssetController::class, 'getYearOptions']);
Route::get('/api/model-car-options', [DataAssetController::class, 'getModelOptions']);


// DATA ASSET อัปเดท
Route::get('/api/getAssetData', [DataAssetController::class, 'getAssetData'])->name('asset.get');
Route::post('/api/updateAssetData', [DataAssetController::class, 'updateAssetData'])->name('asset.update');
// Route::post('/api/updateAssetData', [DataAssetController::class, 'updateAssetData'])->name('asset.update');















































// Route สำหรับแสดงฟอร์มแก้ไขสินทรัพย์ (GET)
// Route::get('/customer/profile/editAssetForm/{id}', [DataAssetController::class, 'edit'])->name('customer.profile.editAssetForm');

// // Route สำหรับบันทึกการแก้ไขสินทรัพย์ (POST)
// Route::post('/customer/profile/editAssetForm', [DataAssetController::class, 'update'])->name('customer.profile.updateAssetForm');


// ดึงข้อมูลการ์ดลูกค้าที่เชื่อมกับสินทรัพย์
// Route::get('/assets/customer', [DataAssetController::class, 'getAssetsByCustomerId']);




// Route::post('/career/update', [DataCusCareerController::class, 'update']);

// Route::get('/get-career-options', [CustomerController::class, 'getCareerOptions']);

// Route::post('/update-career', [DataCusCareerController::class, 'update'])->name('career.update');
// Route::post('/update-career', [DataCusCareerController::class, 'update']);


// Route::post('/update-address', [DataCusAddressController::class, 'updateAddress']);
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
