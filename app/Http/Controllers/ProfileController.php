<?php

namespace App\Http\Controllers;

use App\Models\TBZone;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\JsonResponse;
use Validator;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();

        // ค้นหา Zone_Name ตาม zone และ Zone_Code ของผู้ใช้
        $zone = TBZone::where('Zone_Code', $user->zone) // สมมติว่า zone ของผู้ใช้เป็น Zone_Code
                      ->first(['Zone_Name']);

        // ค้นหา Name_Branch ตาม branch, id_Contract ของผู้ใช้ และ Zone_Branch ที่ตรงกับ zone ของผู้ใช้
        $branch = Branch::where('id_Contract', $user->branch) // ตรวจสอบ id_Contract ตรงกับ branch ของผู้ใช้
                        ->where('Zone_Branch', $user->zone) // ตรวจสอบว่า Zone_Branch ตรงกับ zone ของผู้ใช้
                        ->first(['Name_Branch']); // เลือกแค่ Name_Branch

        // คืนค่าตามรูปแบบที่ผู้ใช้ต้องการ
        if ($request->wantsJson()) {
            return response()->json([
                'user' => $user,
                'Zone_Name' => $zone ? $zone->Zone_Name : null, // ส่ง Zone_Name หรือ null ถ้าไม่พบ
                'Name_Branch' => $branch ? $branch->Name_Branch : null, // ส่ง Name_Branch หรือ null ถ้าไม่พบ
            ]);
        }

        return view('profile.show', compact('user', 'zone', 'branch'));
    }


    public function update(UpdateProfileRequest $request, $id): JsonResponse
    {
        try {
            $user = User::findOrFail($id);

            // Ensure user can only update their own profile
            if ($user->id !== auth()->id()) {
                return response()->json([
                    'message' => 'Unauthorized action.'
                ], 403);
            }

            $user->update($request->validated());

            return response()->json([
                'message' => 'Profile updated successfully.',
                'user' => $user
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while updating the profile.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // public function update(Request $request, $id)
    // {
    //     // Validate incoming request
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'username' => 'required|string|max:255|unique:users,username,' . $id,
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $id,
    //         'phone' => 'required|string|max:15',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()]);
    //     }

    //     // Find the user and update the data
    //     $user = User::findOrFail($id);
    //     $user->update($request->all());

    //     return response()->json(['success' => 'User updated successfully.']);
    // }
}













































// namespace App\Http\Controllers;

// use App\Models\TBZone;
// use App\Models\Branch;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class ProfileController extends Controller
// {
//     public function show(Request $request)
//     {
//         $user = Auth::user();

//         // ค้นหา Zone_Name ตาม zone และ Zone_Code ของผู้ใช้
//         $zone = TBZone::where('Zone_Code', $user->zone) // สมมติว่า zone ของผู้ใช้เป็น Zone_Code
//                       ->first(['Zone_Name']);

//         // คืนค่าตามรูปแบบที่ผู้ใช้ต้องการ
//         if ($request->wantsJson()) {
//             return response()->json([
//                 'user' => $user,
//                 'Zone_Name' => $zone ? $zone->Zone_Name : null, // ส่ง Zone_Name หรือ null ถ้าไม่พบ
//             ]);
//         }

//         return view('profile.show', compact('user', 'zone'));
//     }
// }






// namespace App\Http\Controllers;

// use App\Models\TBZone;
// use App\Models\Branch;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class ProfileController extends Controller
// {
//     public function show(Request $request)
//     {
//         $user = Auth::user();

//         // ค้นหา Zone_Name ตาม zone และ Zone_Code ของผู้ใช้
//         $zone = TBZone::where('Zone_Code', $user->zone) // สมมติว่า zone ของผู้ใช้เป็น Zone_Code
//                       ->first(['Zone_Name']);

//         // ค้นหา Name_Branch ตาม branch และ id_Contract ของผู้ใช้
//         $branch = Branch::where('id_Contract', $user->branch) // สมมติว่า branch ของผู้ใช้ตรงกับ id_Contract
//                         ->first(['Name_Branch']);

//         // คืนค่าตามรูปแบบที่ผู้ใช้ต้องการ
//         if ($request->wantsJson()) {
//             return response()->json([
//                 'user' => $user,
//                 'Zone_Name' => $zone ? $zone->Zone_Name : null, // ส่ง Zone_Name หรือ null ถ้าไม่พบ
//                 'Name_Branch' => $branch ? $branch->Name_Branch : null, // ส่ง Name_Branch หรือ null ถ้าไม่พบ
//             ]);
//         }

//         return view('profile.show', compact('user', 'zone', 'branch'));
//     }
// }

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
