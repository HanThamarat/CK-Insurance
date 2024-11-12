<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DataCusAddress extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'Data_CusAddress';

    protected $fillable = [
        'DataCus_id',
        'Registration_number',
        'date_Adds',
        'Code_Adds',
        'Ordinal_Adds',
        'Status_Adds',
        'Type_Adds',
        'houseNumber_Adds',
        'houseGroup_Adds',
        'building_Adds',
        'village_Adds',
        'roomNumber_Adds',
        'Floor_Adds',
        'alley_Adds',
        'road_Adds',
        'houseZone_Adds',
        'houseProvince_Adds',
        'houseDistrict_Adds',
        'houseTambon_Adds',
        'Postal_Adds',
        'Detail_Adds',
        'Coordinates_Adds',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'UserUpdate',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;

    protected $dates = ['deleted_at'];

    // สร้างความสัมพันธ์กลับไปยัง Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'DataCus_id', 'id');
    }
}























// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class DataCusAddress extends Model
// {
//     use HasFactory;

//     protected $primaryKey = 'id';

//     // กำหนดชื่อของตารางในฐานข้อมูล
//     protected $table = 'Data_CusAddress';

//     // กำหนดฟิลด์ที่สามารถทำการ mass assignment ได้
//     protected $fillable = [
//         'DataCus_id',
//         'Registration_number',
//         'date_Adds',
//         'Code_Adds',
//         'Ordinal_Adds',
//         'Status_Adds',
//         'Type_Adds',
//         'houseNumber_Adds',
//         'houseGroup_Adds',
//         'building_Adds',
//         'village_Adds',
//         'roomNumber_Adds',
//         'Floor_Adds',
//         'alley_Adds',
//         'road_Adds',
//         'houseZone_Adds',
//         'houseProvince_Adds',
//         'houseDistrict_Adds',
//         'houseTambon_Adds',
//         'Postal_Adds',
//         'Detail_Adds',
//         'Coordinates_Adds',
//         'UserZone',
//         'UserBranch',
//         'UserInsert',
//         'UserUpdate',
//         'created_at',
//         'updated_at',
//     ];

//     public $timestamps = true;

// }





// ถ้าต้องการกำหนดค่าเวลา timestamps เป็นค่าอื่น
// const CREATED_AT = 'created_at';
// const UPDATED_AT = 'updated_at';
// กำหนดว่าไม่ต้องใช้ timestamps อัตโนมัติถ้าตารางไม่มีคอลัมน์ created_at, updated_at
