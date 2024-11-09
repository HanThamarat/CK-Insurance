<?php
// app/Http/Requests/UpdateProfileRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $this->user()->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],
            'phone' => ['required', 'string', 'max:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'กรุณากรอกชื่อ-นามสกุล',
            'name.max' => 'ชื่อ-นามสกุลต้องไม่เกิน 255 ตัวอักษร',
            'username.required' => 'กรุณากรอก Username',
            'username.unique' => 'Username นี้ถูกใช้งานแล้ว',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
            'email.unique' => 'อีเมลนี้ถูกใช้งานแล้ว',
            'phone.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'phone.max' => 'เบอร์โทรศัพท์ต้องไม่เกิน 10 ตัวอักษร',
        ];
    }
}
