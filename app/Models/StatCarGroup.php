<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatCarGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Stat_CarGroup'; // ชื่อตารางในฐานข้อมูล
    protected $primaryKey = 'id'; // ฟิลด์ที่เป็น primary key
    public $timestamps = true; // ใช้ timestamps (created_at, updated_at)

    protected $fillable = [
        'Brand_id',
        'Ratetype_id',
        'Group_car',
        'Status_group',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = ['deleted_at']; // สำหรับ SoftDeletes
}
