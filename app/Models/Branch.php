<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    // กำหนดชื่อของตารางที่ใช้
    protected $table = 'TB_Branchs';

    // หากมี Primary Key ที่ไม่ได้เป็น 'id' สามารถกำหนดได้ที่นี่ (ไม่จำเป็นในกรณีนี้)
    protected $primaryKey = 'id';

    // ถ้าหาก Primary Key เป็น Auto Increment
    public $incrementing = true;

    // กำหนดให้ model นี้ใช้ timestamp หรือไม่
    public $timestamps = true;

    // กำหนด fillable attributes สำหรับ mass assignment
    protected $fillable = [
        'id_Contract',
        'Name_Branch',
        'NickName_Branch',
        'Zone_Branch',
        'Head_Office',
        'Branch_Active',
        'Traget_Branch',
        'province_Branch',
        'branch_name',
        'address',
        'lat',
        'lon',
        'open_time',
        'phoneNo',
        'line_id',
        'branch_smart',
        'created_at',
        'updated_at',
    ];
}
