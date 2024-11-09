<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // // ฟังก์ชันสำหรับแสดงข้อมูลผู้ใช้


    public function index(Request $request)
    {
        // รับจำนวน rows per page จาก request หรือใช้ค่าเริ่มต้นเป็น 10
        $rowsPerPage = $request->input('rowsPerPage', 10);

        // ดึงข้อมูลผู้ใช้ทั้งหมดพร้อม pagination
        $users = User::paginate($rowsPerPage);

        return view('UserManagement.index', compact('users'));
    }


    // ฟังก์ชันสำหรับสร้างผู้ใช้ใหม่
    public function store(Request $request)
    {
        // ตรวจสอบความถูกต้องของข้อมูล
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        // สร้างผู้ใช้ใหม่
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json(['success' => 'User created successfully.']);
    }

    // ฟังก์ชันสำหรับแก้ไขข้อมูลผู้ใช้
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    // ฟังก์ชันสำหรับอัปเดตข้อมูลผู้ใช้
    // public function update(Request $request, $id)
    // {
    //     // ตรวจสอบความถูกต้องของข้อมูล
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'username' => 'required|string|max:255|unique:users,username,' . $id,
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $id,
    //         'phone' => 'required|string|max:15',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()]);
    //     }

    //     // อัปเดตข้อมูลผู้ใช้
    //     $user = User::find($id);
    //     $user->update($request->all());

    //     return response()->json(['success' => 'User updated successfully.']);
    // }


    // public function update(Request $request, $id)
    // {
    //     // ตรวจสอบความถูกต้องของข้อมูล
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'username' => 'required|string|max:255|unique:users,username,' . $id,
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $id,
    //         'phone' => 'required|string|max:15',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()]);
    //     }

    //     // อัปเดตข้อมูลผู้ใช้
    //     $user = User::find($id);
    //     $user->update($request->all());

    //     return response()->json(['success' => 'User updated successfully.']);
    // }


    // ฟังก์ชันสำหรับลบผู้ใช้
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['success' => 'User deleted successfully.']);
    }



















    // public function fetchData(Request $request)
    // {
    //     $rowsPerPage = $request->input('rowsPerPage', 10); // รับจำนวนแถวจาก request
    //     $users = User::paginate($rowsPerPage); // ดึงข้อมูลผู้ใช้ตามจำนวนแถว

    //     // เตรียมข้อมูลที่จำเป็นสำหรับการแสดงผลในหน้า
    //     $data = [
    //         'data' => $users->items(), // ข้อมูลผู้ใช้
    //         'links' => [
    //             'current_page' => $users->currentPage(),
    //             'last_page' => $users->lastPage(),
    //             'per_page' => $users->perPage(),
    //             'total' => $users->total(),
    //         ],
    //     ];

    //     return response()->json($data); // ส่งข้อมูลในรูปแบบ JSON
    // }



    // public function fetchUsers()
    // {
    //     // ดึงข้อมูลผู้ใช้ทั้งหมด
    //     $users = User::all();

    //     // ตรวจสอบว่ามีข้อมูลผู้ใช้หรือไม่
    //     if ($users->isEmpty()) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'No users found.'
    //         ]);
    //     }

    //     // ส่งข้อมูลกลับในรูปแบบ JSON
    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $users
    //     ]);
    // }

        // public function index()
    // {
    //     $users = User::all(); // ดึงข้อมูลผู้ใช้ทั้งหมด
    //     return view('UserManagement.index', compact('users')); // ส่งข้อมูลไปยัง view
    // }
}
