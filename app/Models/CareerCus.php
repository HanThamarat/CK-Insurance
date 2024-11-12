<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerCus extends Model
{
    use HasFactory;

    // ตั้งค่าชื่อ table
    protected $table = 'TB_CareerCus';

    // ตั้งค่าคอลัมน์ที่สามารถกรอกข้อมูลได้
    protected $fillable = [
        'Flag_Career',
        'Code_PTL',
        'Code_Empstatus',
        'Code_Occupation',
        'Code_Career',
        'Date_Career',
        'Name_Career',
        'Memo_Career',
        'group_smart',
        'created_at',
        'updated_at',
    ];

    // ตั้งค่าคอลัมน์ที่ต้องการให้เป็น timestamp (ถ้าจำเป็น)
    public $timestamps = true;

    // หากไม่ต้องการใช้ created_at และ updated_at ให้ตั้งค่าเป็น false
    // public $timestamps = false;
}
