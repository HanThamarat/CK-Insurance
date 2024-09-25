<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvinceDLT extends Model
{
    // กำหนดชื่อของตาราง
    protected $table = 'TB_ProvincesDLT';

    // กำหนดคีย์หลักของตาราง (ถ้าคีย์หลักไม่ใช่ 'id')
    protected $primaryKey = 'id';

    // กำหนดคอลัมน์ที่สามารถทำการ mass assignment ได้
    protected $fillable = [
        'Status_pro',
        'Province_pro',
        'created_at',
        'updated_at',
    ];

    // หากไม่ต้องการให้ Laravel จัดการ timestamps อัตโนมัติ
    public $timestamps = true; // หรือ false ถ้าไม่ต้องการ timestamps

    // กำหนดชนิดของคอลัมน์ 'created_at' และ 'updated_at'
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
