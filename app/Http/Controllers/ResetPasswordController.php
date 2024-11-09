<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PasswordToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{
    public function resetPassword(Request $request)
    {
        try {
            // Validate request
            $validator = Validator::make($request->all(), [
                'password_old' => 'required|string|min:6',
                'password' => 'required|string|min:6',
                'password_token' => 'required|string|min:6|same:password'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => $validator->errors()->first()
                ], 422);
            }

            // Get current user
            $user = Auth::user();

            // Check if old password matches
            if (!Hash::check($request->password_old, $user->password)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'รหัสผ่านเดิมไม่ถูกต้อง'
                ], 422);
            }

            // Begin transaction
            \DB::beginTransaction();

            try {
                // Update user password
                $user->update([
                    'password' => Hash::make($request->password)
                ]);

                // Store password token
                PasswordToken::updateOrCreate(
                    ['user_id' => $user->id],
                    ['password_token' => Hash::make($request->password_token)]
                );

                \DB::commit();

                return response()->json([
                    'status' => 'success',
                    'message' => 'เปลี่ยนรหัสผ่านสำเร็จ'
                ]);

            } catch (\Exception $e) {
                \DB::rollBack();
                throw $e;
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง'
            ], 500);
        }
    }
}






// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Hash;

// class ResetPasswordController extends Controller
// {
//     public function resetPassword(Request $request)
//     {
//         // ตรวจสอบ validation ของข้อมูลที่ส่งมา
//         $request->validate([
//             'password_old' => ['required', 'string'],
//             'password' => ['required', 'string', 'min:8', 'confirmed'],
//         ]);

//         // รับ user ปัจจุบัน
//         $user = auth()->user();

//         // ตรวจสอบรหัสผ่านเก่าว่าถูกต้องหรือไม่
//         if (!Hash::check($request->password_old, $user->password)) {
//             return response()->json(['message' => 'รหัสผ่านเก่าไม่ถูกต้อง'], 422);
//         }

//         // อัปเดตรหัสผ่านใหม่
//         $user->password = Hash::make($request->password);

//         // บันทึกการเปลี่ยนแปลง
//         $user->save();

//         return response()->json(['message' => 'รหัสผ่านถูกตั้งค่าใหม่เรียบร้อยแล้ว']);
//     }
// }


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Hash;

// class ResetPasswordController extends Controller
// {
//     public function resetPassword(Request $request)
//     {
//         // ตรวจสอบ validation ของข้อมูลที่ส่งมา
//         $request->validate([
//             'password_old' => ['required', 'string'],
//             'password' => ['required', 'string', 'min:8', 'confirmed'], // ใช้ confirmed สำหรับ password_confirmation
//             'password_token' => ['required', 'string'], // ไม่ต้อง hash
//         ]);

//         // รับ user ปัจจุบัน
//         $user = auth()->user();

//         // ตรวจสอบรหัสผ่านเก่าว่าถูกต้องหรือไม่
//         if (!Hash::check($request->password_old, $user->password)) {
//             return response()->json(['message' => 'รหัสผ่านเก่าไม่ถูกต้อง'], 422);
//         }

//         // อัปเดตรหัสผ่านใหม่ (ทำการ hash)
//         $user->password = Hash::make($request->password);

//         // บันทึกการเปลี่ยนแปลง
//         $user->save();

//         // ส่งค่ารหัสผ่าน token ที่ไม่ต้องทำการ hash
//         $password_token = $request->password_token;

//         return response()->json(['message' => 'รหัสผ่านถูกตั้งค่าใหม่เรียบร้อยแล้ว', 'password_token' => $password_token]);
//     }
// }



