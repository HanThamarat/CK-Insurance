<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBTypeAsset extends Model
{
    use HasFactory;

    // ชื่อของตารางในฐานข้อมูล
    protected $table = 'TB_TypeAssets';

    // กำหนด primary key
    protected $primaryKey = 'id';

    // กำหนดว่า ID เป็นแบบ auto-increment หรือไม่
    public $incrementing = true;

    // กำหนดประเภทของ primary key
    protected $keyType = 'int';

    // กำหนดวันที่ที่ควรจะถูกจัดการอัตโนมัติ
    protected $dates = ['created_at', 'updated_at'];

    // กำหนดฟิลด์ที่สามารถกรอกข้อมูลได้
    protected $fillable = [
        'Flag_TypeAsset',
        'CodeId_TypeAsset',
        'Code_TypeAsset',
        'Kind_TypeAsset',
        'Name_TypeAsset',
    ];
}
