<?php

namespace App\Http\Controllers;


// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class ProfileController extends Controller
// {
//     public function show()
//     {
//         $user = Auth::user();
//         return view('profile.show', compact('user'));
//     }

//     public function update(Request $request)
//     {
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255',
//             'username' => 'required|string|username|max:255',
//             'password_token' => 'required|string|max:255',
//             // เพิ่มกฎการตรวจสอบอื่นๆ ที่คุณต้องการ
//         ]);

//         $user = Auth::user();
//         $user->name = $request->input('name');
//         $user->email = $request->input('email');
//         $user->username = $request->input('username');
//         $user->password_token = $request->input('password_token');
//         // อัปเดตฟิลด์อื่นๆ ตามต้องการ
//         $user->save();

//         return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
//     }
// }

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();

        // คืนค่าตามรูปแบบที่ผู้ใช้ต้องการ
        if ($request->wantsJson()) {
            return response()->json($user);
        }

        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'username' => 'required|string|username|max:255',
            'password_token' => 'required|string|max:255',
            // เพิ่มกฎการตรวจสอบอื่นๆ ที่คุณต้องการ
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password_token = $request->input('password_token');
        // อัปเดตฟิลด์อื่นๆ ตามต้องการ
        $user->save();

        // คืนค่าตามรูปแบบที่ผู้ใช้ต้องการ
        if ($request->wantsJson()) {
            return response()->json(['message' => 'Profile updated successfully.']);
        }

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}



