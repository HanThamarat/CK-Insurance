<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatMotoModel extends Model
{
    use HasFactory, SoftDeletes;

    // ชื่อของตารางในฐานข้อมูล
    protected $table = 'Stat_MotoModel';

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
        'Ratetype_id',
        'Topcar',
        'Model_moto',
        'Tank_No',
        'Status_model',
        'UserZone',
        'UserBranch',
        'UserInsert',
    ];
}
