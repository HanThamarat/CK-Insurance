<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatCarBrand extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Stat_CarBrand';

    protected $fillable = [
        'Brand_car',
        'User_id',
        'UserZone',
        'UserBranch',
        'UserInsert',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = ['deleted_at']; // เพื่อให้ Laravel จัดการกับ Soft Deletes
}
