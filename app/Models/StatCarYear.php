<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatCarYear extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Stat_CarYear';

    protected $fillable = [
        'id', // เพิ่ม id เพื่อให้ตรงกับฐานข้อมูล
        'Brand_id',
        'Group_id',
        'Model_id',
        'Ratetype_id',
        'Year_car',
        'PriceAT_car',
        'PriceMT_car',
        'Status_year',
        'Link_car',
        'Profile_car',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'PriceAT_old',
        'PriceMT_old',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = ['deleted_at']; // เพื่อให้ Laravel จัดการกับ Soft Deletes
}
