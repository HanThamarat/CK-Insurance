<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetManage extends Model
{
    use HasFactory;

    protected $table = 'asset_manage'; // ชื่อของตารางในฐานข้อมูล
    public $timestamps = false; // ปิดการใช้งาน timestamps
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
    ];
}
