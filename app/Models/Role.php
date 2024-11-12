<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // กำหนดชื่อของตาราง
    protected $table = 'roles';

    // กำหนดคีย์หลักของตาราง
    protected $primaryKey = 'id';

    // กำหนดให้ timestamps ตรงกับฟิลด์ในฐานข้อมูล
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // ระบุฟิลด์ที่สามารถบันทึกข้อมูลได้
    protected $fillable = [
        'code',
        'name',
        'name_en',
        'name_th',
        'guard_name',
        'created_at',
        'updated_at'
    ];
}
