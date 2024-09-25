<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataAsset extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Data_Assets';

    // ระบุ primary key และค่า auto-increment
    protected $primaryKey = 'id';
    public $incrementing = true;
    // protected $keyType = 'bigint';

    // กำหนดว่าไม่ใช้ timestamps
    public $timestamps = true;

    // ระบุวันที่ในการลบข้อมูล (soft delete)
    protected $dates = ['deleted_at'];

    // กำหนดคอลัมน์ที่สามารถ fill ได้
    protected $fillable = [
        'assetold_id',
        'Flag_Asset',
        'Code_Asset',
        'Status_Asset',
        'TypeAsset_Code',
        'DataCus_Id',
        'Price_Asset',
        'CRCOST',
        'Vehicle_OldLicense',
        'Vehicle_OldLicense_Text',
        'Vehicle_OldLicense_Number',
        'Vehicle_OldLicense_Province',
        'Vehicle_NewLicense',
        'Vehicle_NewLicense_Text',
        'Vehicle_NewLicense_Number',
        'Vehicle_NewLicense_Province',
        'Vehicle_Chassis',
        'Vehicle_NewChassis',
        'Vehicle_Engine',
        'Vehicle_Color',
        'Vehicle_Miles',
        'Vehicle_CC',
        'Vehicle_Type',
        'Vehicle_Type_PLT',
        'Vehicle_Brand',
        'Vehicle_Group',
        'Vehicle_Model',
        'Vehicle_Year',
        'Vehicle_Gear',
        'Land_Type',
        'Land_Id',
        'Land_ParcelNumber',
        'Land_SheetNumber',
        'Land_TambonNumber',
        'Land_Book',
        'Land_BookPage',
        'Land_SizeRai',
        'Land_SizeNgan',
        'Land_SizeSquareWa',
        'Land_Zone',
        'Land_Province',
        'Land_District',
        'Land_Tambon',
        'Land_PostalCode',
        'Land_Coordinates',
        'Land_Detail',
        'Land_BuildingType',
        'Land_BuildingKind',
        'Land_BuildingStorey',
        'Land_BuildingSize',
        'contract_smart',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'UserUpdate',
        'dataTagCal_id'
    ];
}

