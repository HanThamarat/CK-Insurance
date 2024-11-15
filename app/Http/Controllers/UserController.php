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


    // ฟังก์ชันสำหรับลบผู้ใช้
    // public function destroy($id)
    // {
    //     User::destroy($id);
    //     return response()->json(['success' => 'User deleted successfully.']);
    // }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();  // Soft delete the user
            return response()->json(['success' => 'User deleted successfully.']);
        }

        return response()->json(['error' => 'User not found.'], 404);
    }























    // public function update(Request $request, $id)
    // {
    //     // ตรวจสอบความถูกต้องของข้อมูล
    //     $validator = Validator::make($request->all(), [
    //         'status' => 'required|string|max:255',
    //         'name' => 'required|string|max:255',
    //         'username' => 'required|string|max:255|unique:users,username,' . $id, // ตรวจสอบ unique โดยไม่ตรวจสอบตัวเอง
    //         'password' => 'nullable|string|min:6', // password ไม่จำเป็นต้องกรอกถ้าไม่ต้องการเปลี่ยน
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $id, // ตรวจสอบ unique โดยไม่ตรวจสอบตัวเอง
    //         'phone' => 'required|string|max:15',
    //         'zone' => 'required|string|max:15',
    //         'branch' => 'required|string|max:15',
    //         'status_user' => 'required|string|max:15',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()], 400);
    //     }

    //     // ค้นหาผู้ใช้ที่ต้องการอัปเดต
    //     $user = User::find($id);
    //     if (!$user) {
    //         return response()->json(['error' => 'User not found.'], 404);
    //     }

    //     // อัปเดตข้อมูลผู้ใช้
    //     $data = $request->all();

    //     // ถ้ามีการเปลี่ยนรหัสผ่าน ให้ทำการแฮชรหัสผ่าน
    //     if ($request->has('password') && $request->password) {
    //         $data['password'] = bcrypt($request->password);
    //     }

    //     // อัปเดตข้อมูลในฐานข้อมูล
    //     $user->update($data);

    //     // ส่งผลลัพธ์กลับ
    //     return response()->json(['success' => 'User updated successfully.']);
    // }



    // // ฟังก์ชันสำหรับอัปเดตข้อมูลผู้ใช้
    // public function update(Request $request, $id)
    // {
    //     // ตรวจสอบความถูกต้องของข้อมูล
    //     $validator = Validator::make($request->all(), [
    //         'status' => 'required|string|max:255',
    //         'name' => 'required|string|max:255',
    //         'username' => 'required|string|max:255|unique:users',
    //         'password' => 'required|string|min:6',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'phone' => 'required|string|max:15',
    //         'zone' => 'required|string|max:15',
    //         'branch' => 'required|string|max:15',
    //         'status_user' => 'required|string|max:15',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()]);
    //     }

    //     // อัปเดตข้อมูลผู้ใช้
    //     $user = User::find($id);
    //     $user->update($request->all());

    //     return response()->json(['success' => 'User updated successfully.']);
    // }




    // public function create(Request $request)
    // {
    //     if ($request->isMethod('post') && $request->wantsJson()) {
    //         // Validation
    //         $validatedData = $request->validate([
    //             'name' => 'required|string|max:255',
    //             'username' => 'required|string|max:255|unique:users',
    //             'password' => 'required|string|min:8',
    //             'email' => 'required|email|max:255|unique:users',
    //             'phone' => 'required|string|max:20',
    //             'status' => 'required|in:active,inactive',
    //             'zone' => 'required|exists:zones,Zone_Branch',
    //             'branch' => 'required|exists:branches,id',
    //             'status_user' => 'required|exists:roles,code',
    //         ]);

    //         // Create User
    //         $user = User::create([
    //             'status' => $validatedData['status'],
    //             'name' => $validatedData['name'],
    //             'username' => $validatedData['username'],
    //             'password' => bcrypt($validatedData['password']),
    //             'email' => $validatedData['email'],
    //             'phone' => $validatedData['phone'],
    //             'zone' => $validatedData['zone'],
    //             'branch' => $validatedData['branch'],
    //             'status_user' => $validatedData['status_user'],
    //         ]);

    //         return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    //     }

    //     return response()->json(['message' => 'Method Not Allowed'], 405);
    // }




    // public function create(Request $request)
    // {
    //     if ($request->isMethod('post') && $request->wantsJson()) {
    //         $validatedData = $request->validate([
    //             'status' => 'nullable|string|max:255',
    //             'name' => 'required|string|max:255',
    //             'username' => 'required|string|max:255|unique:users',
    //             'password' => 'required|string|min:8',
    //             'email' => 'required|email|max:255|unique:users',
    //             'phone' => 'nullable|string|max:20',
    //             'zone' => 'nullable|string|max:255',
    //             'branch' => 'nullable|string|max:255',
    //             'status_user' => 'nullable|string|max:255',
    //         ]);

    //         $user = User::create([
    //             'status' => $validatedData['status'],
    //             'name' => $validatedData['name'],
    //             'username' => $validatedData['username'],
    //             'password' => bcrypt($validatedData['password']),
    //             'email' => $validatedData['email'],
    //             'phone' => $validatedData['phone'],
    //             'zone' => $validatedData['zone'],
    //             'branch' => $validatedData['branch'],
    //             'status_user' => $validatedData['status_user'],
    //         ]);

    //         return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    //     }

    //     return response()->json(['message' => 'Method Not Allowed'], 405);
    // }



    // public function create(Request $request)
    // {
    //     // ตรวจสอบว่า request ต้องการ JSON หรือไม่
    //     if ($request->wantsJson()) {
    //         // ตรวจสอบข้อมูลจาก request
    //         $validatedData = $request->validate([
    //             'status' => 'required|string|max:255',
    //             'name' => 'required|string|max:255',
    //             'username' => 'required|string|max:255|unique:users',
    //             'password' => 'required|string|min:8',
    //             'email' => 'required|email|max:255|unique:users',
    //             'phone' => 'nullable|string|max:20',
    //             'zone' => 'nullable|string|max:255',
    //             'branch' => 'nullable|string|max:255',
    //             'status_user' => 'required|string|max:255',
    //         ]);

    //         // สร้างผู้ใช้ใหม่
    //         $user = User::create([
    //             'status' => $validatedData['status'],
    //             'name' => $validatedData['name'],
    //             'username' => $validatedData['username'],
    //             'password' => bcrypt($validatedData['password']),
    //             'email' => $validatedData['email'],
    //             'phone' => $validatedData['phone'],
    //             'zone' => $validatedData['zone'],
    //             'branch' => $validatedData['branch'],
    //             'status_user' => $validatedData['status_user'],
    //         ]);

    //         return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    //     }

    //     // ถ้าไม่ใช่ JSON ส่งกลับ view สำหรับฟอร์มสร้างผู้ใช้ใหม่
    //     return view('users.create');
    // }





    // public function index(Request $request)
    // {
    //     // เช็คว่า user login แล้วหรือไม่
    //     $user = Auth::user();

    //     // ตรวจสอบค่า status_user ของผู้ใช้
    //     if (!in_array($user->status_user, ['SAD', 'AD'])) {
    //         // ถ้าไม่ใช่ SAD หรือ AD ส่งกลับไปยังหน้าหลักพร้อมข้อความ
    //         return redirect('/home')->with('error', 'คุณไม่มีสิทธิ์เข้าสู่หน้านี้!');
    //     }

    //     // รับจำนวน rows per page จาก request หรือใช้ค่าเริ่มต้นเป็น 10
    //     $rowsPerPage = $request->input('rowsPerPage', 10);

    //     // ดึงข้อมูลผู้ใช้ทั้งหมดพร้อม pagination
    //     $users = User::paginate($rowsPerPage);

    //     // ตรวจสอบหาก request ต้องการ JSON
    //     if ($request->wantsJson()) {
    //         return response()->json($users);
    //     }

    //     // หากไม่ใช่ JSON, ส่งกลับเป็น view
    //     return view('UserManagement.index', compact('users'));
    // }

    // public function index(Request $request)
    // {
    //     // รับจำนวน rows per page จาก request หรือใช้ค่าเริ่มต้นเป็น 10
    //     $rowsPerPage = $request->input('rowsPerPage', 10);

    //     // ดึงข้อมูลผู้ใช้ทั้งหมดพร้อม pagination
    //     $users = User::paginate($rowsPerPage);

    //     // ตรวจสอบหาก request ต้องการ JSON
    //     if ($request->wantsJson()) {
    //         return response()->json($users);
    //     }

    //     // หากไม่ใช่ JSON, ส่งกลับเป็น view
    //     return view('UserManagement.index', compact('users'));
    // }


    // public function getUsers(Request $request)
    // {
    //     $rowsPerPage = $request->input('rowsPerPage', 10);
    //     $users = User::paginate($rowsPerPage);

    //     return response()->json($users);
    // }

    // Controller method


    // public function index(Request $request)
    // {
    //     // รับจำนวน rows per page จาก request หรือใช้ค่าเริ่มต้นเป็น 10
    //     $rowsPerPage = $request->input('rowsPerPage', 10);

    //     // ดึงข้อมูลผู้ใช้ทั้งหมดพร้อม pagination
    //     $users = User::paginate($rowsPerPage);

    //     // ตรวจสอบหาก request ต้องการ JSON
    //     if ($request->wantsJson()) {
    //         return response()->json($users);
    //     }

    //     // หากไม่ใช่ JSON, ส่งกลับเป็น view
    //     return view('UserManagement.index', compact('users'));
    // }



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

    // public function getUsers(Request $request)
    // {
    //     $rowsPerPage = $request->input('rowsPerPage', 10);
    //     $users = User::paginate($rowsPerPage);

    //     return response()->json($users);
    // }


    // public function getUsers(Request $request)
    // {
    //     try {
    //         // ดึงค่าพารามิเตอร์จาก request
    //         $rowsPerPage = $request->input('rowsPerPage', 10);
    //         $search = $request->input('search', '');
    //         $sortBy = $request->input('sortBy', 'id');
    //         $sortDir = $request->input('sortDir', 'asc');

    //         // สร้าง query
    //         $query = User::query();

    //         // เพิ่มเงื่อนไขการค้นหา
    //         if ($search) {
    //             $query->where(function ($q) use ($search) {
    //                 $q->where('name', 'LIKE', "%{$search}%")
    //                     ->orWhere('username', 'LIKE', "%{$search}%")
    //                     ->orWhere('email', 'LIKE', "%{$search}%")
    //                     ->orWhere('phone', 'LIKE', "%{$search}%");
    //             });
    //         }

    //         // จัดเรียงข้อมูล
    //         $query->orderBy($sortBy, $sortDir);

    //         // ทำ Pagination
    //         $users = $query->paginate($rowsPerPage);

    //         // เพิ่มข้อมูลเพิ่มเติมสำหรับ response
    //         $response = [
    //             'status' => 'success',
    //             'data' => $users->items(),
    //             'pagination' => [
    //                 'current_page' => $users->currentPage(),
    //                 'last_page' => $users->lastPage(),
    //                 'per_page' => $users->perPage(),
    //                 'total' => $users->total()
    //             ]
    //         ];

    //         return response()->json($response);

    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'เกิดข้อผิดพลาดในการดึงข้อมูล',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }

    // /**
    //  * Update user status
    //  *
    //  * @param Request $request
    //  * @param int $id
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function updateStatus(Request $request, $id)
    // {
    //     try {
    //         $user = User::findOrFail($id);
    //         $user->status = $request->input('status');
    //         $user->save();

    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'อัพเดทสถานะเรียบร้อยแล้ว',
    //             'data' => $user
    //         ]);

    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'เกิดข้อผิดพลาดในการอัพเดทสถานะ',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }

    // /**
    //  * Delete user
    //  *
    //  * @param int $id
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function deleteUser($id)
    // {
    //     try {
    //         $user = User::findOrFail($id);
    //         $user->delete();

    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'ลบข้อมูลผู้ใช้เรียบร้อยแล้ว'
    //         ]);

    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'เกิดข้อผิดพลาดในการลบข้อมูล',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }






    // public function index(Request $request)
    // {
    //     // รับจำนวน rows per page จาก request หรือใช้ค่าเริ่มต้นเป็น 10
    //     $rowsPerPage = $request->input('rowsPerPage', 10);

    //     // ดึงข้อมูลผู้ใช้ทั้งหมดพร้อม pagination
    //     $users = User::paginate($rowsPerPage);

    //     return view('UserManagement.index', compact('users'));
    // }



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
