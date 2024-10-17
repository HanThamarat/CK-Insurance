<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBZone extends Model
{
    use HasFactory;

    // กำหนดชื่อ table ที่จะใช้
    protected $table = 'TB_Zone';

    // กำหนด primary key
    protected $primaryKey = 'id';

    // กำหนดว่าตารางมีการใช้ timestamps หรือไม่
    public $timestamps = true;

    // กำหนด fields ที่สามารถ fill ได้
    protected $fillable = [
        'Zone_Name',
        'Zone_Code',
    ];
}
