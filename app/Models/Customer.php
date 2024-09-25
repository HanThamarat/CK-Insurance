<?php

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




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
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
    ];

    // You can add any relationships, accessors, or mutators here if needed.
}

