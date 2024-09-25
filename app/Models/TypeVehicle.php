<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVehicle extends Model
{
    use HasFactory;

    // กำหนดชื่อตาราง
    protected $table = 'TB_TypeVehicle';

    // กำหนดคีย์หลัก (ถ้าต่างจาก id)
    protected $primaryKey = 'id';

    // กำหนดฟิลด์ที่สามารถกรอกได้
    protected $fillable = [
        'Flag_Vehicle',
        'Code_PLT',
        'Date_Vehicle',
        'Name_Vehicle',
        'Cond_Regex',
        'Memo_Vehicle',
        'created_at',
        'updated_at',
    ];

    // ถ้าคุณมี timestamps ในตาราง
    public $timestamps = true;
}
