<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

// class StatCarModel extends Model
// {
//     use HasFactory, SoftDeletes;

//     // กำหนดชื่อตาราง
//     protected $table = 'Stat_CarModel';

//     // กำหนดคีย์หลัก (ถ้าต่างจาก id)
//     protected $primaryKey = 'id';

//     // กำหนดฟิลด์ที่สามารถกรอกได้
//     protected $fillable = [
//         'Brand_id',
//         'Group_id',
//         'Ratetype_id',
//         'Model_car',
//         'Tank_No',
//         'Topcar',
//         'Status_model',
//         'UserZone',
//         'UserBranch',
//         'UserInsert',
//         'created_at',
//         'updated_at',
//         'deleted_at',
//     ];

//     // กำหนดให้ใช้ timestamps
//     public $timestamps = true;
// }





namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatCarModel extends Model
{
    use HasFactory, SoftDeletes;

    // กำหนดชื่อตาราง
    protected $table = 'Stat_CarModel';

    // กำหนดคีย์หลัก (ถ้าต่างจาก id)
    protected $primaryKey = 'id';

    // กำหนดฟิลด์ที่สามารถกรอกได้
    protected $fillable = [
        'Brand_id',
        'Group_id',
        'Ratetype_id',
        'Model_car',
        'Tank_No',
        'Topcar',
        'Status_model',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // กำหนดให้ใช้ timestamps
    public $timestamps = true;
}
