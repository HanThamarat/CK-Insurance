<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    // ชื่อตารางในฐานข้อมูล
    protected $table = 'TB_Provinces';

    // คอลัมน์ที่สามารถถูกกรอกข้อมูลได้
    protected $fillable = [
        'Postcode_pro',
        'Tambon_pro',
        'District_pro',
        'Province_pro',
        'Zone_pro',
        'created_at',
        'updated_at',
    ];

    // คอลัมน์ที่ไม่ต้องการให้ถูกกรอกข้อมูล
    protected $guarded = [];

    // กำหนด primary key
    protected $primaryKey = 'id';

    // กำหนดให้ primary key เป็นออโต้เพิ่ม
    public $incrementing = true;

    // กำหนดชนิดของ primary key
    protected $keyType = 'int';

    // กำหนดว่าโมเดลจะใช้ timestamps หรือไม่
    public $timestamps = true;
}
