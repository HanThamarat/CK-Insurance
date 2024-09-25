<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatMotoYear extends Model
{
    use HasFactory, SoftDeletes;

    // ชื่อของตารางในฐานข้อมูล
    protected $table = 'Stat_MotoYear';

    // กำหนด primary key
    protected $primaryKey = 'id';

    // กำหนดว่า ID เป็นแบบ auto-increment หรือไม่
    public $incrementing = true;

    // กำหนดประเภทของ primary key
    protected $keyType = 'int';

    // กำหนดวันที่ที่ควรจะถูกจัดการอัตโนมัติ
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // กำหนดฟิลด์ที่สามารถกรอกข้อมูลได้
    protected $fillable = [
        'Brand_id',
        'Group_id',
        'Model_id',
        'Ratetype_id',
        'Year_moto',
        'PriceAT_moto',
        'PriceMT_moto',
        'Status_year',
        'Link_moto',
        'Profile_moto',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'PriceAT_old',
        'PriceMT_old',
    ];
}
