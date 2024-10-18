<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBTypeCusAddress extends Model
{
    use HasFactory;

    // ชื่อ table
    protected $table = 'TB_TypeCusAddress';

    // ชื่อ primary key
    protected $primaryKey = 'id';

    // กำหนดฟิลด์ที่สามารถถูกกรอกได้ (Mass Assignable)
    protected $fillable = [
        'Flag_Address',
        'Code_Address',
        'Date_Address',
        'Name_Address',
        'Memo_Address',
        'created_at',
        'updated_at',
    ];

    // ถ้าชื่อ primary key ไม่ใช่ 'id'
    public $incrementing = true;

    // ถ้าหาก primary key เป็น integer
    protected $keyType = 'int';

    // ถ้าต้องการใช้ timestamps โดยอัตโนมัติ
    public $timestamps = true;
}
