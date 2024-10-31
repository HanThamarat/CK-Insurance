<?php

namespace App\Http\Controllers;

use App\Models\TBZone;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();

        // ค้นหา Zone_Name ตาม zone และ Zone_Code ของผู้ใช้
        $zone = TBZone::where('Zone_Code', $user->zone) // สมมติว่า zone ของผู้ใช้เป็น Zone_Code
                      ->first(['Zone_Name']);

        // คืนค่าตามรูปแบบที่ผู้ใช้ต้องการ
        if ($request->wantsJson()) {
            return response()->json([
                'user' => $user,
                'Zone_Name' => $zone ? $zone->Zone_Name : null, // ส่ง Zone_Name หรือ null ถ้าไม่พบ
            ]);
        }

        return view('profile.show', compact('user', 'zone'));
    }
}













































// public function update(Request $request)
// {
//     $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|string|email|max:255',
//         'username' => 'required|string|username|max:255',
//         'password_token' => 'required|string|max:255',
//         // เพิ่มกฎการตรวจสอบอื่นๆ ที่คุณต้องการ
//     ]);

//     $user = Auth::user();
//     $user->name = $request->input('name');
//     $user->email = $request->input('email');
//     $user->username = $request->input('username');
//     $user->password_token = $request->input('password_token');
//     // อัปเดตฟิลด์อื่นๆ ตามต้องการ
//     $user->save();

//     // คืนค่าตามรูปแบบที่ผู้ใช้ต้องการ
//     if ($request->wantsJson()) {
//         return response()->json(['message' => 'Profile updated successfully.']);
//     }

//     return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
// }
