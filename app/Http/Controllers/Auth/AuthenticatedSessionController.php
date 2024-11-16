<?php

// app/Http/Controllers/Auth/AuthenticatedSessionController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $this->validateLogin($request);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    protected function validateLogin(Request $request)
    {
        // ตรวจสอบว่า input คือ email หรือ username
        $input = $request->input('email');
        $user = filter_var($input, FILTER_VALIDATE_EMAIL)
            ? User::where('email', $input)->first() // ถ้าเป็น email
            : User::where('username', $input)->first(); // ถ้าเป็น username

        // ตรวจสอบรหัสผ่าน
        if ($user && Hash::check($request->password, $user->password)) {
            return ['email' => $user->email, 'password' => $request->password];
        }

        // ถ้าไม่พบผู้ใช้หรือรหัสผ่านไม่ตรง
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
}

