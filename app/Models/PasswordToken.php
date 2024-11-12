<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordToken extends Model
{
    protected $fillable = [
        'user_id',
        'password_token'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
