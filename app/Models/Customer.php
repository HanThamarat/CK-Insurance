<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'status_cus',
        'prefix',
        'first_name',
        'last_name',
        'phone',
        'phone2',
        'id_card_number',
        'expiry_date',
        'dob',
        'age',
        'gender',
        'nationality',
        'religion',
        'driving_license',
        'facebook',
        'line_id',
        'marital_status',
        'spouse_name',
        'spouse_phone',
        'note',
        'birthday',
        'user_insert',
        'deleted_at',
    ];

    // สร้างความสัมพันธ์กับ DataCusAddress
    public function addresses()
    {
        return $this->hasMany(DataCusAddress::class, 'DataCus_id', 'id');
    }

    public function careers()
    {
        return $this->hasMany(DataCusCareer::class, 'DataCus_id', 'id');
    }

    public function assets()
    {
        return $this->hasMany(AssetManage::class, 'Customer_id', 'id');
    }

    // public function assets()
    // {
    //     return $this->hasMany(DataAsset::class, 'Customer_id', 'id');
    // }
}















// public function address()
// {
//     return $this->hasOne(DataCusAddress::class, 'DataCus_id', 'id');
// }

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Customer extends Model
// {
//     use HasFactory;

//     protected $table = 'customers';

//     protected $fillable = [
//         'status_cus',
//         'prefix',
//         'first_name',
//         'last_name',
//         'phone',
//         'phone2',
//         'id_card_number',
//         'expiry_date',
//         'dob',
//         'age',
//         'gender',
//         'nationality',
//         'religion',
//         'driving_license',
//         'facebook',
//         'line_id',
//         'marital_status',
//         'spouse_name',
//         'spouse_phone',
//         'note',
//         'birthday',
//         'user_insert',
//     ];

// }





// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Carbon\Carbon;

// class Customer extends Model
// {
//     use HasFactory;
//     protected $table = 'customers';
//     protected $primaryKey = 'Id';
//     protected $fillable = [
//         'Prefix', 'FirstName', 'LastName', 'Phone', 'Phone2', 'IDCardNumber', 'ExpiryDate',
//         'DOB', 'Gender', 'Nationality', 'Religion', 'DrivingLicense', 'Facebook',
//         'LineID', 'MaritalStatus', 'SpouseName', 'SpousePhone', 'Note'
//     ];
//     public function getAgeAttribute()
//     {
//         return Carbon::parse($this->DOB)->age;
//     }
// }
    // You can add any relationships, accessors, or mutators here if needed.
