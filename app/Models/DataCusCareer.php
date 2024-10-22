<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCusCareer extends Model
{
    use HasFactory;

    // กำหนดชื่อตารางที่ใช้ในฐานข้อมูล
    protected $table = 'Data_CusCareers';

    // กำหนด primary key
    protected $primaryKey = 'id';

    // ถ้า primary key ไม่ใช่ auto-increment สามารถกำหนดให้ false
    public $incrementing = true;

    // กำหนดคอลัมน์ที่สามารถกรอกข้อมูลได้
    protected $fillable = [
        'DataCus_id',
        'date_Cus',
        'Code_Cus',
        'Main_Career',
        'Ordinal_Cus',
        'Status_Cus',
        'Career_Cus',
        'DetailCareer_Cus',
        'Workplace_Cus',
        'Income_Cus',
        'BeforeIncome_Cus',
        'AfterIncome_Cus',
        'IncomeNote_Cus',
        'Coordinates',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'UserUpdate',
        'created_at',
        'updated_at',
    ];

    // ถ้าคุณใช้ timestamps ให้เปิดใช้งาน โดย Laravel จะจัดการ created_at และ updated_at ให้โดยอัตโนมัติ
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'DataCus_id', 'id');
    }
}
