<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TBZone;
use App\Models\Branch;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // // ฟังก์ชันสำหรับแสดงข้อมูลผู้ใช้
    public function index(Request $request)
    {
        $user = Auth::user();

        if (!in_array($user->status_user, ['SAD', 'AD'])) {
            return response()->json(['error' => 'คุณไม่มีสิทธิ์เข้าสู่หน้านี้!'], 403);
        }

        $rowsPerPage = $request->input('rowsPerPage', 10);
        $users = User::paginate($rowsPerPage);

        if ($request->wantsJson()) {
            return response()->json($users);
        }

        return view('UserManagement.index', compact('users'));
    }


    public function getUsers(Request $request)
    {
        $rowsPerPage = $request->input('rowsPerPage', 10);
        $search = $request->input('search', '');

        $users = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('username', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc') // เพิ่มการเรียงลำดับจากใหม่ไปเก่า
            ->paginate($rowsPerPage);

        return response()->json($users);
    }



    public function getZonesAndBranches(Request $request)
    {
        // ดึงข้อมูลโซน
        $zones = Branch::select('Zone_Branch')->distinct()->get();

        // รับค่า zone ที่ถูกเลือกจาก request
        $zone = $request->input('zone', null);

        // กรองข้อมูลตามค่า Zone_Branch ที่เลือก
        $allowedZones = ['10', '20', '30', '40', '50'];  // โซนที่อนุญาต
        if (in_array($zone, $allowedZones)) {
            $branches = Branch::where('Zone_Branch', $zone)
                ->select('id', 'Name_Branch')
                ->get();
        } else {
            // ถ้าไม่เลือก zone หรือไม่ตรงกับที่กำหนด จะดึงข้อมูลสาขาทั้งหมด
            $branches = Branch::select('id', 'Name_Branch', 'Zone_Branch')->get();
        }

        return response()->json([
            'zones' => $zones,
            'branches' => $branches
        ]);
    }


    public function getRoles()
    {
        // ดึงข้อมูลเฉพาะ id, code, name_th จากฐานข้อมูล
        $roles = Role::select('id', 'code', 'name_th')->get();

        // ส่งค่าผ่าน JSON
        return response()->json($roles);
    }



    // ฟังก์ชันสำหรับสร้างผู้ใช้ใหม่
    public function store(Request $request)
    {
        // ตรวจสอบความถูกต้องของข้อมูล
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'zone' => 'required|string|max:15',
            'branch' => 'required|string|max:15',
            'status_user' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        // สร้างผู้ใช้ใหม่
        User::create([
            'status' => $request->status,
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'zone' => $request->zone,
            'branch' => $request->branch,
            'status_user' => $request->status_user,
        ]);

        return response()->json(['success' => 'User created successfully.']);
    }

    // ฟังก์ชันสำหรับแก้ไขข้อมูลผู้ใช้
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        try {
            // Validation rules
            $rules = [
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($id)],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
                'zone' => ['required', 'string', 'max:15'],
                'branch' => ['required', 'string', 'max:15'],
                'status_user' => ['required', 'string', 'max:15'],
                'status' => ['required', 'string', 'in:active,inactive'],
            ];

            // Add password validation only if it's provided
            if ($request->filled('password')) {
                $rules['password'] = ['string', 'min:6'];
            }

            // Validate request
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'การตรวจสอบข้อมูลล้มเหลว',
                    'errors' => $validator->errors()
                ], 422);
            }

            // Find user
            $user = User::findOrFail($id);

            // Prepare data for update
            $updateData = $request->only([
                'name',
                'username',
                'email',
                'zone',
                'branch',
                'status_user',
                'status'
            ]);

            // Handle password update
            if ($request->filled('password')) {
                $updateData['password'] = Hash::make($request->password);
            }

            // Update user
            $user->update($updateData);

            return response()->json([
                'success' => true,
                'message' => 'อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว',
                'data' => $user
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
                'error' => $e->getMessage()
            ], 500);
        }
    }



    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();  // Soft delete the user
            return response()->json(['success' => 'User deleted successfully.']);
        }

        return response()->json(['error' => 'User not found.'], 404);
    }
}
