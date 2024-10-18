<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function resetPassword(Request $request)
    {
        // ตรวจสอบ validation ของข้อมูลที่ส่งมา
        $request->validate([
            'password_old' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // รับ user ปัจจุบัน
        $user = auth()->user();

        // ตรวจสอบรหัสผ่านเก่าว่าถูกต้องหรือไม่
        if (!Hash::check($request->password_old, $user->password)) {
            return response()->json(['message' => 'รหัสผ่านเก่าไม่ถูกต้อง'], 422);
        }

        // อัปเดตรหัสผ่านใหม่
        $user->password = Hash::make($request->password);

        // บันทึกการเปลี่ยนแปลง
        $user->save();

        return response()->json(['message' => 'รหัสผ่านถูกตั้งค่าใหม่เรียบร้อยแล้ว']);
    }
}



