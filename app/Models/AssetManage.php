<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class AssetManage extends Model
// {
//     use HasFactory;

//     protected $table = 'asset_manage'; // ชื่อของตารางในฐานข้อมูล
//     public $timestamps = false; // ปิดการใช้งาน timestamps
//     protected $fillable = [
//         'Type_Asset',
//         'Vehicle_OldLicense_Text',
//         'Vehicle_OldLicense_Number',
//         'OldProvince',
//         'Vehicle_NewLicense_Text',
//         'Vehicle_NewLicense_Number',
//         'NewProvince',
//         'Vehicle_Chassis',
//         'Vehicle_New_Number',
//         'Vehicle_Engine',
//         'Vehicle_Color',
//         'Vehicle_CC',
//         'Vehicle_Type',
//         'Vehicle_Type_PLT',
//         'Vehicle_Brand',
//         'Vehicle_Group',
//         'Vehicle_Years',
//         'Vehicle_Models',
//         'Vehicle_Gear',
//         'Vehicle_InsuranceStatus',
//         'Vehicle_Class',
//         'Vehicle_Companies',
//         'Vehicle_PolicyNumber',
//         'Choose_Insurance',
//         'Choose_Act',
//         'Choose_Register',
//         'created_at',
//         'updated_at',
//     ];
// }






// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class AssetManage extends Model
// {
//     use HasFactory;

//     protected $table = 'asset_manage'; // ชื่อของตารางในฐานข้อมูล
//     public $timestamps = false; // ปิดการใช้งาน timestamps
//     protected $fillable = [
//         'Customer_id', // เพิ่ม Customer_id
//         'Type_Asset',
//         'Vehicle_OldLicense_Text',
//         'Vehicle_OldLicense_Number',
//         'OldProvince',
//         'Vehicle_NewLicense_Text',
//         'Vehicle_NewLicense_Number',
//         'NewProvince',
//         'Vehicle_Chassis',
//         'Vehicle_New_Number',
//         'Vehicle_Engine',
//         'Vehicle_Color',
//         'Vehicle_CC',
//         'Vehicle_Type',
//         'Vehicle_Type_PLT',
//         'Vehicle_Brand',
//         'Vehicle_Group',
//         'Vehicle_Years',
//         'Vehicle_Models',
//         'Vehicle_Gear',
//         'Vehicle_InsuranceStatus',
//         'Vehicle_Class',
//         'Vehicle_Companies',
//         'Vehicle_PolicyNumber',
//         'Choose_Insurance',
//         'Choose_Act',
//         'Choose_Register',
//         'Insurance_renewal_date', // เพิ่ม Insurance_renewal_date
//         'Insurance_end_date', // เพิ่ม Insurance_end_date
//         'act_renewal_date', // เพิ่ม act_renewal_date
//         'act_end_date', // เพิ่ม act_end_date
//         'register_renewal_date', // เพิ่ม register_renewal_date
//         'register_end_date', // เพิ่ม register_end_date
//     ];
// }




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AssetManage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'asset_manage'; // ชื่อของตารางในฐานข้อมูล
    protected $primaryKey = 'id';
    public $timestamps = true; // ปิดการใช้งาน timestamps
    protected $fillable = [
        'Type_Asset',
        'Vehicle_OldLicense_Text',
        'Vehicle_OldLicense_Number',
        'OldProvince',
        'Vehicle_NewLicense_Text',
        'Vehicle_NewLicense_Number',
        'NewProvince',
        'Vehicle_Chassis',
        'Vehicle_New_Number',
        'Vehicle_Engine',
        'Vehicle_Color',
        'Vehicle_CC',
        'Vehicle_Type',
        'Vehicle_Type_PLT',
        'Vehicle_Brand',
        'Vehicle_Group',
        'Vehicle_Years',
        'Vehicle_Models',
        'Vehicle_Gear',
        'Vehicle_InsuranceStatus',
        'Vehicle_Class',
        'Vehicle_Companies',
        'Vehicle_PolicyNumber',
        'Choose_Insurance',
        'Choose_Act',
        'Choose_Register',
        'created_at',
        'updated_at',
        'Insurance_renewal_date', // เพิ่มฟิลด์ใหม่
        'Insurance_end_date', // เพิ่มฟิลด์ใหม่
        'act_renewal_date', // เพิ่มฟิลด์ใหม่
        'act_end_date', // เพิ่มฟิลด์ใหม่
        'register_renewal_date', // เพิ่มฟิลด์ใหม่
        'register_end_date', // เพิ่มฟิลด์ใหม่
        'Customer_id', // เพิ่มฟิลด์ใหม่
    ];

    protected $dates = ['deleted_at'];

    public function carBrand()
    {
        return $this->belongsTo(StatCarBrand::class, 'Vehicle_Brand', 'id');
    }

    public function motoBrand()
    {
        return $this->belongsTo(StatMotoBrand::class, 'Vehicle_Brand', 'id');
    }

}














    // public function motoBrand()
    // {
    //     return $this->belongsTo(StatMotoBrand::class, 'Vehicle_Brand', 'id');
    // }

    // public function carBrand()
    // {
    //     return $this->belongsTo(StatCarBrand::class, 'Vehicle_Brand', 'id');
    // }

    // public function motoBrand()
    // {
    //     return $this->belongsTo(StatMotoBrand::class, 'id'); // เปลี่ยน 'moto_brand_id' เป็นฟิลด์ที่ใช้เชื่อม
    // }

    // public function carBrand()
    // {
    //     return $this->belongsTo(StatCarBrand::class, 'id'); // เปลี่ยน 'car_brand_id' เป็นฟิลด์ที่ใช้เชื่อม
    // }
