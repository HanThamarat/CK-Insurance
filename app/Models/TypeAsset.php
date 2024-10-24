<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAsset extends Model
{
    use HasFactory;

    // ชื่อ table ในฐานข้อมูล
    protected $table = 'TB_TypeAssets';

    // คอลัมน์ที่สามารถกรอกได้
    protected $fillable = [
        'Flag_TypeAsset',
        'CodeId_TypeAsset',
        'Code_TypeAsset',
        'Kind_TypeAsset',
        'Name_TypeAsset',
        'created_at',
        'updated_at',
    ];

    // ถ้าใช้ timestamp ให้ตั้งค่าดังนี้
    public $timestamps = true; // หรือ false ถ้าไม่ใช้ timestamps
}
