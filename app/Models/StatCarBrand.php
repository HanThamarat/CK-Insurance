<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

// class StatCarBrand extends Model
// {
//     use HasFactory, SoftDeletes;

//     protected $table = 'Stat_CarBrand';

//     protected $fillable = [
//         'Brand_car',
//         'User_id',
//         'UserZone',
//         'UserBranch',
//         'UserInsert',
//         'created_at',
//         'updated_at',
//         'deleted_at',
//     ];

//     protected $dates = ['deleted_at']; // เพื่อให้ Laravel จัดการกับ Soft Deletes
// }




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatCarBrand extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Stat_CarBrand';

    // กำหนดให้มีการใช้งาน id เป็นคีย์หลัก
    protected $primaryKey = 'id';

    // กำหนดให้มีการใช้งานการเพิ่มค่า id แบบอัตโนมัติ
    public $incrementing = true;

    // กำหนดให้ id เป็นชนิดข้อมูล int
    protected $keyType = 'int';

    protected $fillable = [
        'Brand_car',
        'User_id',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = ['deleted_at']; // เพื่อให้ Laravel จัดการกับ Soft Deletes
}

