<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\DataCusCareer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\DataCusAddress; // ใช้ DataCusAddress Model
use App\Helpers; // เพิ่มการนำเข้าฟังก์ชันจาก Helper

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 5); // ค่าเริ่มต้นคือ 5
        $customers = Customer::orderBy('id', 'desc')->paginate($perPage); // เรียงลำดับตาม ID ในลำดับที่ลดลง
        return response()->json($customers); // ส่งกลับเป็น JSON response
    }



    public function profile(Request $request)
    {
        $customer = Customer::find($request->id); // ค้นหาลูกค้าจาก ID

        if (!$customer) {
            return response()->json(['error' => 'Customer not found.'], 404);
        }

        return response()->json($customer);
    }

    public function showProfile($id)
    {
        $customer = Customer::find($id); // ใช้ find แทน findOrFail

        if (!$customer) {
            return response()->json(['error' => 'Customer not found.'], 404); // ส่งคืน JSON error response
        }

        // เช็คว่าต้องการแสดงในรูปแบบไหน
        if (request()->wantsJson()) {
            return response()->json($customer); // ส่งคืน JSON ของ customer
        }

        return view('components.content-cus.Profile-cus', compact('customer')); // ส่งคืน view
    }


    public function show($id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            return response()->json(['customer' => $customer]);
        }

        return response()->json(['customer' => null]);
    }




    public function create()
    {
        return view('components.content-cus.Cus');
    }



    public function store(Request $request)
    {
        // Validate incoming request data (optional)


        $data = [
            'status_cus' => $request->input('status_cus'), // รับค่าจากฟอร์ม
            'prefix' => $request->input('prefix'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'phone2' => $request->input('phone2'),
            'id_card_number' => $request->input('id_card_number'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'religion' => $request->input('religion'),
            'driving_license' => $request->input('driving_license'),
            'facebook' => $request->input('facebook'),
            'line_id' => $request->input('line_id'),
            'marital_status' => $request->input('marital_status'),
            'spouse_name' => $request->input('spouse_name'),
            'spouse_phone' => $request->input('spouse_phone'),
            'note' => $request->input('note'),
            'expiry_date' => formatDate($request->input('expiry_date')),
            'dob' => formatDate($request->input('dob')),
            'birthday' => formatDate($request->input('birthday')),
            'user_insert' => auth()->user()->name, // ได้จากผู้ใช้ที่ล็อกอินอยู่
        ];

        // Create the customer record
        $customer = Customer::create($data);

        // Return response in JSON format
        return response()->json([
            'success' => true,
            'message' => 'บันทึกข้อมูลลูกค้าสำเร็จ',
            'customer' => $customer,
        ]);
    }



    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }





    public function update(Request $request, $id)
    {
        // ตรวจสอบข้อมูลที่ได้รับ
        $request->validate([
            'status_cus' => 'required|string',
            'prefix' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'phone2' => 'nullable|string',
            'id_card_number' => 'required|string',
            'age' => 'nullable|integer',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'religion' => 'required|string',
            'driving_license' => 'nullable|string',
            'facebook' => 'nullable|string',
            'line_id' => 'nullable|string',
            'marital_status' => 'nullable|string',
            'spouse_name' => 'nullable|string',
            'spouse_phone' => 'nullable|string',
            'note' => 'nullable|string',
            'expiry_date' => 'nullable|date_format:d/m/Y',
            'dob' => 'nullable|date_format:d/m/Y',
            'birthday' => 'nullable|date_format:d/m/Y',
        ]);

        // ค้นหาลูกค้าตาม ID ที่ได้รับ
        $customer = Customer::findOrFail($id);

        // กำหนดข้อมูลที่จะอัปเดต
        $data = $request->only([
            'status_cus',
            'prefix',
            'first_name',
            'last_name',
            'phone',
            'phone2',
            'id_card_number',
            'age',
            'gender',
            'nationality',
            'religion',
            'driving_license',
            'facebook',
            'line_id',
            'marital_status',
            'spouse_name',
            'spouse_phone',
            'note',
            'expiry_date',
            'dob',
            'birthday',
        ]);

        // เพิ่ม user_insert
        $data['user_insert'] = auth()->user()->name;

        // ตรวจสอบและแปลงวันที่อย่างปลอดภัย
        try {
            $data['expiry_date'] = !empty($data['expiry_date']) ?
                Carbon::createFromFormat('d/m/Y', $data['expiry_date'])->format('Y-m-d') : null;

            $data['dob'] = !empty($data['dob']) ?
                Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d') : null;

            $data['birthday'] = !empty($data['birthday']) ?
                Carbon::createFromFormat('d/m/Y', $data['birthday'])->format('Y-m-d') : null;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid date format provided: ' . $e->getMessage()], 400);
        }

        // อัปเดตข้อมูลลูกค้า
        try {
            $customer->update($data);

            // ส่งข้อมูลลูกค้าที่อัปเดตกลับไป
            return response()->json([
                'success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!',
                'data' => $customer // ส่งข้อมูลลูกค้าที่อัปเดต
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'ไม่สามารถอัพเดตข้อมูลลูกค้าได้: ' . $e->getMessage()], 500);
        }
    }




    public function career_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'DataCus_id' => 'required|integer',
            'date_Cus' => 'required|date',
            'Code_Cus' => 'string|max:50',
            'Main_Career' => 'string|max:100',
            'Ordinal_Cus' => 'integer',
            'Status_Cus' => 'string|max:50',
            'Career_Cus' => 'string|max:100',
            'DetailCareer_Cus' => 'string|max:255',
            'Workplace_Cus' => 'string|max:100',
            'Income_Cus' => 'numeric',
            'BeforeIncome_Cus' => 'numeric',
            'AfterIncome_Cus' => 'numeric',
            'IncomeNote_Cus' => 'string|max:255',
            'Coordinates' => 'string|max:100',
            'UserZone' => 'string|max:50',
            'UserBranch' => 'string|max:50',
            'UserInsert' => 'integer',
            'UserUpdate' => 'integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // ตรวจสอบว่าค่า DataCus_id เป็น int หรือไม่
        if (!is_int($request->DataCus_id)) {
            return response()->json(['error' => 'DataCus_id must be an integer.'], 400);
        }

        $career = DataCusCareer::create($request->all());
        return response()->json($career, 201);
    }



    public function getCareerData($id)
    {
        // ดึงข้อมูลลูกค้าที่มี ID ตรงกัน พร้อมกับข้อมูลอาชีพ
        $customer = Customer::with('careers')->where('id', $id)->first();

        if ($customer) {
            return response()->json([
                'customer' => $customer,
                'careers' => $customer->careers // อาชีพทั้งหมดของลูกค้า
            ]);
        } else {
            return response()->json(['message' => 'No matching customer found'], 404);
        }
    }



}






















































































    // public function showCustomerData($id)
    // {
    //     if (is_null($id) || $id === 'null') {
    //         return response()->json(['error' => 'Invalid customer ID'], 400);
    //     }

    //     $customer = Customer::find($id);

    //     if (!$customer) {
    //         return response()->json(['error' => 'Customer not found'], 404);
    //     }

    //     return response()->json($customer, 200);
    // }


    // public function getCareerData()
    // {
    //     $careers = DataCusCareer::all();
    //     return response()->json($careers);
    // }

    // public function getCareerData($id)
    // {
    //     // ดึงข้อมูลที่อยู่ที่ DataCus_id ตรงกับ id ของ Customer
    //     $customer = Customer::with('careers')->where('id', $id)->first();

    //     if ($customer && $customer->careers) {
    //         // ถ้ามีข้อมูลลูกค้าและข้อมูลที่อยู่ตรงกัน
    //         return response()->json([
    //             'customer' => $customer,
    //             'careers' => $customer->careers // เปลี่ยนเป็น careers เพราะอาจมีหลายที่อยู่
    //         ]);
    //     } else {
    //         return response()->json(['message' => 'No matching careers found'], 404);
    //     }
    // }



    // public function showProfile($id) {
    //     $id = (int) $id; // แปลงเป็น int
    //     $customer = Customer::find($id);
    //     if (!$customer) {
    //         return response()->json(['error' => 'ไม่พบข้อมูลลูกค้า'], 404);
    //     }
    //     return response()->json($customer);
    // }


    // public function showProfile($id) {
    //     $customer = Customer::find($id); // ต้องแน่ใจว่า $id เป็น int
    //     if (!$customer) {
    //         return response()->json(['error' => 'ไม่พบข้อมูลลูกค้า'], 404);
    //     }
    //     return response()->json($customer);
    // }



    // public function update(Request $request, $id)
    // {
    //     // ตรวจสอบข้อมูลที่ได้รับ
    //     $request->validate([
    //         'status_cus' => 'required|string',
    //         'prefix' => 'required|string',
    //         'first_name' => 'required|string',
    //         'last_name' => 'required|string',
    //         'phone' => 'required|string',
    //         'phone2' => 'nullable|string',
    //         'id_card_number' => 'required|string',
    //         'age' => 'nullable|integer',
    //         'gender' => 'required|string',
    //         'nationality' => 'required|string',
    //         'religion' => 'required|string',
    //         'driving_license' => 'nullable|string',
    //         'facebook' => 'nullable|string',
    //         'line_id' => 'nullable|string',
    //         'marital_status' => 'nullable|string',
    //         'spouse_name' => 'nullable|string',
    //         'spouse_phone' => 'nullable|string',
    //         'note' => 'nullable|string',
    //         'expiry_date' => 'nullable|date_format:d/m/Y',
    //         'dob' => 'nullable|date_format:d/m/Y',
    //         'birthday' => 'nullable|date_format:d/m/Y',
    //     ]);

    //     // ค้นหาลูกค้าตาม ID ที่ได้รับ
    //     $customer = Customer::findOrFail($id);

    //     // กำหนดข้อมูลที่จะอัปเดต
    //     $data = $request->only([
    //         'status_cus', // เพิ่ม status_cus
    //         'prefix',
    //         'first_name',
    //         'last_name',
    //         'phone',
    //         'phone2',
    //         'id_card_number',
    //         'age',
    //         'gender',
    //         'nationality',
    //         'religion',
    //         'driving_license',
    //         'facebook',
    //         'line_id',
    //         'marital_status',
    //         'spouse_name',
    //         'spouse_phone',
    //         'note',
    //         'expiry_date',
    //         'dob',
    //         'birthday',
    //     ]);

    //     // ตรวจสอบและแปลงวันที่อย่างปลอดภัย
    //     try {
    //         // แปลง expiry_date
    //         $data['expiry_date'] = !empty($data['expiry_date']) ?
    //             Carbon::createFromFormat('d/m/Y', $data['expiry_date'])->format('Y-m-d') : null;

    //         // แปลง dob
    //         $data['dob'] = !empty($data['dob']) ?
    //             Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d') : null;

    //         // แปลง birthday
    //         $data['birthday'] = !empty($data['birthday']) ?
    //             Carbon::createFromFormat('d/m/Y', $data['birthday'])->format('Y-m-d') : null;
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Invalid date format provided: ' . $e->getMessage()], 400);
    //     }

    //     // อัปเดตข้อมูลลูกค้า
    //     try {
    //         $customer->update($data);
    //         return response()->json(['success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!']);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'ไม่สามารถอัพเดตข้อมูลลูกค้าได้: ' . $e->getMessage()], 500);
    //     }
    // }






// public function update(Request $request, $id)
// {
//     // ตรวจสอบข้อมูลที่ได้รับ
//     $request->validate([
//         'status_cus' => 'required|string',
//         'prefix' => 'required|string',
//         'first_name' => 'required|string',
//         'last_name' => 'required|string',
//         'phone' => 'required|string',
//         'phone2' => 'nullable|string',
//         'id_card_number' => 'required|string',
//         'age' => 'nullable|integer',
//         'gender' => 'required|string',
//         'nationality' => 'required|string',
//         'religion' => 'required|string',
//         'driving_license' => 'nullable|string',
//         'facebook' => 'nullable|string',
//         'line_id' => 'nullable|string',
//         'marital_status' => 'nullable|string',
//         'spouse_name' => 'nullable|string',
//         'spouse_phone' => 'nullable|string',
//         'note' => 'nullable|string',
//         'expiry_date' => 'nullable|date_format:d/m/Y',
//         'dob' => 'nullable|date_format:d/m/Y',
//         'birthday' => 'nullable|date_format:d/m/Y',
//     ]);

//     // ค้นหาลูกค้าตาม ID ที่ได้รับ
//     $customer = Customer::findOrFail($id);

//     // กำหนดข้อมูลที่จะอัปเดต
//     $data = $request->only([
//         'prefix', 'first_name', 'last_name', 'phone', 'phone2', 'id_card_number',
//         'age', 'gender', 'nationality', 'religion', 'driving_license', 'facebook',
//         'line_id', 'marital_status', 'spouse_name', 'spouse_phone', 'note',
//         'expiry_date', 'dob', 'birthday',
//     ]);

//     // ตรวจสอบและแปลงวันที่อย่างปลอดภัย
//     try {
//         // แปลง expiry_date
//         $data['expiry_date'] = !empty($data['expiry_date']) ?
//             Carbon::createFromFormat('d/m/Y', $data['expiry_date'])->format('Y-m-d') : null;

//         // แปลง dob
//         $data['dob'] = !empty($data['dob']) ?
//             Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d') : null;
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'Invalid date format provided: ' . $e->getMessage()], 400);
//     }

//     // อัปเดตข้อมูลลูกค้า
//     try {
//         $customer->update($data);
//         return response()->json(['success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!']);
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'ไม่สามารถอัพเดตข้อมูลลูกค้าได้: ' . $e->getMessage()], 500);
//     }
// }



// public function store(Request $request)
// {

//     // Prepare the data with formatted dates
//     $data = [
//         'status_cus' => $request->input('status_cus'),
//         'prefix' => $request->input('prefix'),
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'phone' => $request->input('phone'),
//         'phone2' => $request->input('phone2'),
//         'id_card_number' => $request->input('id_card_number'),
//         'age' => $request->input('age'),
//         'gender' => $request->input('gender'),
//         'nationality' => $request->input('nationality'),
//         'religion' => $request->input('religion'),
//         'driving_license' => $request->input('driving_license'),
//         'facebook' => $request->input('facebook'),
//         'line_id' => $request->input('line_id'),
//         'marital_status' => $request->input('marital_status'),
//         'spouse_name' => $request->input('spouse_name'),
//         'spouse_phone' => $request->input('spouse_phone'),
//         'note' => $request->input('note'),
//         'expiry_date' => formatDate($request->input('expiry_date')), // Format the expiry date
//         'dob' => formatDate($request->input('dob')), // Format the date of birth
//         'birthday' => formatDate($request->input('birthday')),
//     ];

//     // Create the customer record
//     $customer = Customer::create($data);

//     // Return response in JSON format
//     return response()->json([
//         'success' => true,
//         'message' => 'บันทึกข้อมูลลูกค้าสำเร็จ',
//         'customer' => $customer,
//     ]);
// }


// public function store(Request $request)
// {
//     $data = [
//         'status_cus' => $request->input('status_cus'),
//         'prefix' => $request->input('prefix'),
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'phone' => $request->input('phone'),
//         'phone2' => $request->input('phone2'),
//         'id_card_number' => $request->input('id_card_number'),
//         'age' => $request->input('age'),
//         'gender' => $request->input('gender'),
//         'nationality' => $request->input('nationality'),
//         'religion' => $request->input('religion'),
//         'driving_license' => $request->input('driving_license'),
//         'facebook' => $request->input('facebook'),
//         'line_id' => $request->input('line_id'),
//         'marital_status' => $request->input('marital_status'),
//         'spouse_name' => $request->input('spouse_name'),
//         'spouse_phone' => $request->input('spouse_phone'),
//         'note' => $request->input('note'),
//         'expiry_date' => formatDate($request->input('expiry_date')),
//         'dob' => formatDate($request->input('dob')),
//         'birthday' => formatDate($request->input('birthday')),
//         'user_insert' => auth()->user()->name,
//     ];

//     // Create the customer record
//     $customer = Customer::create($data);

//     // Return response in JSON format
//     return response()->json([
//         'success' => true,
//         'message' => 'บันทึกข้อมูลลูกค้าสำเร็จ',
//         'customer' => $customer,
//     ]);
// }





// public function update(Request $request, $id)
// {
//     // ค้นหาลูกค้าตาม ID ที่ได้รับ
//     $customer = Customer::findOrFail($id);

//     // กำหนดข้อมูลที่จะอัปเดต
//     $data = [
//         'prefix' => $request->input('prefix'),
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'phone' => $request->input('phone'),
//         'phone2' => $request->input('phone2'),
//         'id_card_number' => $request->input('id_card_number'),
//         'age' => $request->input('age'),
//         'gender' => $request->input('gender'),
//         'nationality' => $request->input('nationality'),
//         'religion' => $request->input('religion'),
//         'driving_license' => $request->input('driving_license'),
//         'facebook' => $request->input('facebook'),
//         'line_id' => $request->input('line_id'),
//         'marital_status' => $request->input('marital_status'),
//         'spouse_name' => $request->input('spouse_name'),
//         'spouse_phone' => $request->input('spouse_phone'),
//         'note' => $request->input('note'),
//         // กำหนดให้ nullable
//         'expiry_date' => $request->input('expiry_date'),
//         'dob' => $request->input('dob'),
//     ];

//     // ตรวจสอบและแปลงวันที่อย่างปลอดภัย
//     try {
//         // ตรวจสอบและแปลง expiry_date
//         if (!empty($data['expiry_date'])) {
//             $data['expiry_date'] = Carbon::createFromFormat('d/m/Y', $data['expiry_date'])->format('Y-m-d');
//         } else {
//             $data['expiry_date'] = null; // ถ้าเป็น null ให้ตั้งเป็น null
//         }

//         // ตรวจสอบและแปลง dob
//         if (!empty($data['dob'])) {
//             $data['dob'] = Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d');
//         } else {
//             $data['dob'] = null; // ถ้าเป็น null ให้ตั้งเป็น null
//         }
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'Invalid date format provided: ' . $e->getMessage()], 400);
//     }

//     // อัปเดตข้อมูลลูกค้า
//     try {
//         $customer->update($data);
//         return response()->json(['success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!']);
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'ไม่สามารถอัพเดตข้อมูลลูกค้าได้: ' . $e->getMessage()], 500);
//     }
// }




//     public function update(Request $request, $id)
// {
//     // ค้นหาลูกค้าตาม ID ที่ได้รับ
//     $customer = Customer::findOrFail($id);

//     // ตรวจสอบข้อมูลจาก request
//     $validatedData = $request->validate([
//         'prefix' => 'required|string|max:10',
//         'first_name' => 'required|string|max:50',
//         'last_name' => 'required|string|max:50',
//         'phone' => 'required|string|max:15',
//         'phone2' => 'nullable|string|max:15',
//         'id_card_number' => 'required|string|max:20',
//         'age' => 'required|integer|min:0',
//         'gender' => 'required|string|in:ชาย,หญิง',
//         'nationality' => 'required|string|max:50',
//         'religion' => 'nullable|string|max:50',
//         'driving_license' => 'required|string|in:Yes,No',
//         'facebook' => 'nullable|string|max:100',
//         'line_id' => 'nullable|string|max:100',
//         'marital_status' => 'required|string|in:โสด,แต่งงาน',
//         'spouse_name' => 'nullable|string|max:50',
//         'spouse_phone' => 'nullable|string|max:15',
//         'note' => 'nullable|string',
//         'expiry_date' => 'nullable|date_format:d/m/Y',
//         'dob' => 'nullable|date_format:d/m/Y',
//     ]);

//     // กำหนดข้อมูลที่จะอัปเดต
//     $data = [
//         'prefix' => $validatedData['prefix'],
//         'first_name' => $validatedData['first_name'],
//         'last_name' => $validatedData['last_name'],
//         'phone' => $validatedData['phone'],
//         'phone2' => $validatedData['phone2'],
//         'id_card_number' => $validatedData['id_card_number'],
//         'age' => $validatedData['age'],
//         'gender' => $validatedData['gender'],
//         'nationality' => $validatedData['nationality'],
//         'religion' => $validatedData['religion'],
//         'driving_license' => $validatedData['driving_license'],
//         'facebook' => $validatedData['facebook'],
//         'line_id' => $validatedData['line_id'],
//         'marital_status' => $validatedData['marital_status'],
//         'spouse_name' => $validatedData['spouse_name'],
//         'spouse_phone' => $validatedData['spouse_phone'],
//         'note' => $validatedData['note'],
//         // แปลงวันที่เป็น Y-m-d
//         'expiry_date' => $validatedData['expiry_date'] ? Carbon::createFromFormat('d/m/Y', $validatedData['expiry_date'])->format('Y-m-d') : null,
//         'dob' => $validatedData['dob'] ? Carbon::createFromFormat('d/m/Y', $validatedData['dob'])->format('Y-m-d') : null,
//     ];

//     // อัปเดตข้อมูลลูกค้า
//     try {
//         $customer->update($data);
//         return response()->json(['success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!']);
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'ไม่สามารถอัพเดตข้อมูลลูกค้าได้: ' . $e->getMessage()], 500);
//     }
// }



// public function showProfile($id)
// {
//     $customer = Customer::find($id); // ใช้ find แทน findOrFail

//     if (!$customer) {
//         return response()->json(['error' => 'Customer not found.'], 404); // ส่งคืน JSON error response
//     }

//     // ส่งคืน JSON ของ customer
//     return response()->json($customer);
// }



// public function show($id)
// {
//     // ดึงข้อมูลลูกค้าตาม ID
//     $customer = Customer::find($id);

//     // ตรวจสอบว่าพบข้อมูลลูกค้าหรือไม่
//     if (!$customer) {
//         return redirect()->route('customers.index')->with('error', 'Customer not found.');
//     }

//     // ส่งข้อมูลลูกค้าไปยัง view
//     return view('customers.profile', compact('customer'));
// }





// public function index_2()
// {
//     $customers = Customer::all();
//     return view('components.content-cus.Cus', compact('customers'));
// }


// public function DataCusAddressManage($id)
// {
//     // ค้นหาข้อมูลใน Customers ตาม id ที่ให้มา
//     $customer = Customer::find($id);

//     if (!$customer) {
//         return response()->json([
//             'message' => 'Customer not found',
//         ], 404);
//     }

//     // ค้นหาข้อมูลใน DataCusAddress ที่ตรงกับ DataCus_id
//     $dataCusAddress = DataCusAddress::where('DataCus_id', $customer->id)->get();

//     return response()->json([
//         'customer' => $customer,
//         'dataCusAddress' => $dataCusAddress,
//     ]);
// }

// public function DataCusAddressManage($id)
// {
//     // ตรวจสอบว่า $id เป็นตัวเลขหรือไม่
//     if (!is_numeric($id)) {
//         return response()->json(['error' => 'Invalid customer ID'], 400);
//     }

//     // ดึงข้อมูลจากฐานข้อมูล
//     $customerAddresses = DataCusAddress::where('DataCus_id', $id)->get();

//     return response()->json($customerAddresses);
// }

// public function DataCusAddressManage($id)
// {
//     // ตรวจสอบว่า $id เป็นตัวเลขหรือไม่
//     if (!is_numeric($id)) {
//         return response()->json(['error' => 'Invalid customer ID'], 400);
//     }

//     // ดึงข้อมูลจากฐานข้อมูล
//     $customerAddresses = DataCusAddress::where('DataCus_id', $id)->get();

//     // ตรวจสอบว่ามีข้อมูลหรือไม่
//     if ($customerAddresses->isEmpty()) {
//         return response()->json(['message' => 'No addresses found'], 404);
//     }

//     return response()->json($customerAddresses);
// }

// public function showProfile($id)
// {
//     $customer = Customer::find($id); // ใช้ find แทน findOrFail

//     if (!$customer) {
//         return response()->json(['error' => 'Customer not found.'], 404); // ส่งคืน JSON error response
//     }

//     return view('components.content-cus.Profile-cus', compact('customer'));

//     return response()->json($customer); // ส่งคืน JSON ของ customer
// }


// public function showProfile($id)
// {
//     $customer = Customer::find($id); // ใช้ find แทน findOrFail

//     if (!$customer) {
//         return response()->json(['error' => 'Customer not found.'], 404); // ส่งคืน JSON error response
//     }

//     return response()->json($customer); // ส่งคืน JSON ของ customer
// }



// public function update(Request $request, $id)
// {
//     // ค้นหาลูกค้าตาม ID ที่ได้รับ
//     $customer = Customer::findOrFail($id);

//     // กำหนดข้อมูลที่จะอัปเดต
//     $data = [
//         'prefix' => $request->input('prefix'),
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'phone' => $request->input('phone'),
//         'phone2' => $request->input('phone2'),
//         'id_card_number' => $request->input('id_card_number'),
//         'age' => $request->input('age'),
//         'gender' => $request->input('gender'),
//         'nationality' => $request->input('nationality'),
//         'religion' => $request->input('religion'),
//         'driving_license' => $request->input('driving_license'),
//         'facebook' => $request->input('facebook'),
//         'line_id' => $request->input('line_id'),
//         'marital_status' => $request->input('marital_status'),
//         'spouse_name' => $request->input('spouse_name'),
//         'spouse_phone' => $request->input('spouse_phone'),
//         'note' => $request->input('note'),
//     ];

//     // ตรวจสอบและแปลงวันที่อย่างปลอดภัย
//     try {
//         // ตรวจสอบและแปลง expiry_date
//         $expiry_date = $request->input('expiry_date');
//         if (!empty($expiry_date)) {
//             $data['expiry_date'] = Carbon::createFromFormat('d/m/Y', $expiry_date)->format('Y-m-d');
//         } else {
//             $data['expiry_date'] = null; // ถ้าเป็น null ให้ตั้งเป็น null
//         }

//         // ตรวจสอบและแปลง dob
//         $dob = $request->input('dob');
//         if (!empty($dob)) {
//             $data['dob'] = Carbon::createFromFormat('d/m/Y', $dob)->format('Y-m-d');
//         } else {
//             $data['dob'] = null; // ถ้าเป็น null ให้ตั้งเป็น null
//         }
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'Invalid date format provided: ' . $e->getMessage()], 400);
//     }

//     // อัปเดตข้อมูลลูกค้า
//     try {
//         $customer->update($data);
//         return response()->json(['success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!']);
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'ไม่สามารถอัพเดตข้อมูลลูกค้าได้: ' . $e->getMessage()], 500);
//     }
// }


// public function update(Request $request, $id)
// {
//     // ค้นหาลูกค้าตาม ID ที่ได้รับ
//     $customer = Customer::findOrFail($id);

//     // กำหนดข้อมูลที่จะอัปเดต
//     $data = [
//         'prefix' => $request->input('prefix'),
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'phone' => $request->input('phone'),
//         'phone2' => $request->input('phone2'),
//         'id_card_number' => $request->input('id_card_number'),
//         'age' => $request->input('age'),
//         'gender' => $request->input('gender'),
//         'nationality' => $request->input('nationality'),
//         'religion' => $request->input('religion'),
//         'driving_license' => $request->input('driving_license'),
//         'facebook' => $request->input('facebook'),
//         'line_id' => $request->input('line_id'),
//         'marital_status' => $request->input('marital_status'),
//         'spouse_name' => $request->input('spouse_name'),
//         'spouse_phone' => $request->input('spouse_phone'),
//         'note' => $request->input('note'),
//         // กำหนดให้ nullable
//         'expiry_date' => $request->input('expiry_date'),
//         'dob' => $request->input('dob'),
//     ];

//     // จัดการวันที่อย่างปลอดภัย
//     try {
//         // ตรวจสอบและแปลง expiry_date
//         if (isset($data['expiry_date']) && preg_match('/^\d{1,2}-\d{1,2}-\d{4}$/', $data['expiry_date'])) {
//             $data['expiry_date'] = Carbon::createFromFormat('d-m-Y', $data['expiry_date'])->format('Y-m-d');
//         }

//         // ตรวจสอบและแปลง dob
//         if (isset($data['dob']) && preg_match('/^\d{1,2}-\d{1,2}-\d{4}$/', $data['dob'])) {
//             $data['dob'] = Carbon::createFromFormat('d-m-Y', $data['dob'])->format('Y-m-d');
//         }
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'Invalid date format provided.'], 400);
//     }

//     // อัปเดตข้อมูลลูกค้า
//     $customer->update($data);

//     return response()->json(['success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!.']);
// }







// public function update(Request $request, $id)
// {
//     // ค้นหาลูกค้าตาม ID ที่ได้รับ
//     $customer = Customer::findOrFail($id);

//     // กำหนดข้อมูลที่จะอัปเดต
//     $data = [
//         'prefix' => $request->input('prefix'),
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'phone' => $request->input('phone'),
//         'phone2' => $request->input('phone2'),
//         'id_card_number' => $request->input('id_card_number'),
//         'age' => $request->input('age'),
//         'gender' => $request->input('gender'),
//         'nationality' => $request->input('nationality'),
//         'religion' => $request->input('religion'),
//         'driving_license' => $request->input('driving_license'),
//         'facebook' => $request->input('facebook'),
//         'line_id' => $request->input('line_id'),
//         'marital_status' => $request->input('marital_status'),
//         'spouse_name' => $request->input('spouse_name'),
//         'spouse_phone' => $request->input('spouse_phone'),
//         'note' => $request->input('note'),
//     ];

//     // ตรวจสอบและแปลงวันที่
//     try {
//         $expiry_date = $request->input('expiry_date');
//         $dob = $request->input('dob');

//         // ตรวจสอบ expiry_date
//         if ($expiry_date && preg_match('/^\d{1,2}-\d{1,2}-\d{4}$/', $expiry_date)) {
//             $data['expiry_date'] = Carbon::createFromFormat('d-m-Y', $expiry_date)->format('Y-m-d');
//         } else {
//             $data['expiry_date'] = null; // หรือค่าที่คุณต้องการ
//         }

//         // ตรวจสอบ dob
//         if ($dob && preg_match('/^\d{1,2}-\d{1,2}-\d{4}$/', $dob)) {
//             $data['dob'] = Carbon::createFromFormat('d-m-Y', $dob)->format('Y-m-d');
//         } else {
//             $data['dob'] = null; // หรือค่าที่คุณต้องการ
//         }
//     } catch (\Exception $e) {
//         return redirect()->back()->withErrors(['date_error' => 'Invalid date format provided.'])->withInput();
//     }

//     // อัปเดตข้อมูลลูกค้า
//     $customer->update($data);

//     return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
// }




// public function update(Request $request, $id)
// {
//     $customer = Customer::findOrFail($id);

//     $data = [
//         'prefix' => $request->input('prefix'),
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'phone' => $request->input('phone'),
//         'phone2' => $request->input('phone2'),
//         'id_card_number' => $request->input('id_card_number'),
//         'age' => $request->input('age'),
//         'gender' => $request->input('gender'),
//         'nationality' => $request->input('nationality'),
//         'religion' => $request->input('religion'),
//         'driving_license' => $request->input('driving_license'),
//         'facebook' => $request->input('facebook'),
//         'line_id' => $request->input('line_id'),
//         'marital_status' => $request->input('marital_status'),
//         'spouse_name' => $request->input('spouse_name'),
//         'spouse_phone' => $request->input('spouse_phone'),
//         'note' => $request->input('note'),
//         'expiry_date' => Carbon::createFromFormat('d-m-Y', $request->input('expiry_date')) ? Carbon::createFromFormat('d-m-Y', $request->input('expiry_date'))->format('Y-m-d') : null,
//         'dob' => Carbon::createFromFormat('d-m-Y', $request->input('dob')) ? Carbon::createFromFormat('d-m-Y', $request->input('dob'))->format('Y-m-d') : null,

//     ];


//     // Create the customer record
//     Customer::create($data);

//     return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
// }








// public function showProfile($id)
// {
//     $customer = Customer::find($id); // ใช้ find แทน findOrFail

//     if (!$customer) {
//         return response()->json(['error' => 'Customer not found.'], 404); // ส่งคืน JSON error response
//     }

//     // แสดงข้อมูลที่อยู่ของลูกค้ารายนี้
//     $addresses = DataCusAddress::where('DataCus_id', $id)->get();

//     return view('components.content-cus.Profile-cus', compact('customer', 'addresses'));
// }





// public function destroy($id)
// {
//     $customer = Customer::findOrFail($id);
//     $customer->delete();

//     return redirect()->route('customers.index')->with('success', 'ลูกค้าได้ถูกลบเรียบร้อยแล้ว');
// }



// public function showProfile($id)
// {
//     $customer = Customer::findOrFail($id);
//     return view('components.content-cus.Profile-cus', compact('customer'));
// }






// public function profile()
// {
//     return view('components.content-cus.Profile-cus');
// }



// public function show($id)
// {
//     $customer = Customer::findOrFail($id);
//     return view('customers.show', compact('customer'));
// }

// ตัวอย่าง Controller ที่ดึงข้อมูลลูกค้า
// public function show()
// {
//     // ดึงข้อมูลลูกค้าทั้งหมด
//     $customers = Customer::all();

//     // ส่งข้อมูลไปยัง view หลัก
//     return view('components.content-layout.index', compact('customers')); // เปลี่ยนเป็นชื่อ view ของคุณ
// }

// public function index(Request $request)
// {
//     $search = $request->input('search');

//     if ($search) {
//         $customers = Customer::where('first_name', 'LIKE', "%$search%")
//             ->orWhere('last_name', 'LIKE', "%$search%")
//             ->get();
//     } else {
//         $customers = Customer::all();
//     }

//     // ตรวจสอบข้อมูลที่ถูกดึงมา
//     dd($customers); // ใช้ dd() เพื่อดูว่ามีข้อมูลหรือไม่

//     // ส่งตัวแปร customers ไปยัง view topbar
//     return view('components.content-layout.topbar', compact('customers'));
// }



// public function index() {
//     $customers = Customer::all(); // ดึงข้อมูลลูกค้าทั้งหมด
//     return response()->json($customers); // ส่งกลับเป็น JSON response
// }

// public function search(Request $request)
// {
//     $search = $request->input('search');

//     if (!$search) {
//         return response()->json([], 400); // ส่งกลับเป็น JSON 400 Bad Request หากไม่มีคำค้น
//     }
//     dd($search);

//     try {
//         // ใช้ชื่อคอลัมน์ที่ถูกต้อง
//         $customers = Customer::where('first_name', 'LIKE', "%{$search}%")
//             ->orWhere('last_name', 'LIKE', "%{$search}%")
//             ->get();

//         return response()->json($customers);
//     } catch (\Exception $e) {
//         \Log::error('Error fetching customers: ' . $e->getMessage());
//         return response()->json(['error' => 'Error fetching data'], 500);
//     }
// }

// public function index()
// {
//     // return view('components.content-cus.Cus');
// }

// public function search(Request $request)
// {
//     $search = $request->input('search');

//     // ตรวจสอบว่ามีการส่งค่ามาหรือไม่
//     if (!$search) {
//         return response()->json([], 400); // ส่งกลับเป็น JSON 400 Bad Request หากไม่มีคำค้น
//     }

//     // ค้นหาลูกค้าในฐานข้อมูล
//     $customers = Customer::where('first_name', 'LIKE', "%{$search}%")
//         ->orWhere('last_name', 'LIKE', "%{$search}%")
//         ->get();

//     return response()->json($customers);
// }

// public function index()
// {
//     // ดึงข้อมูลลูกค้าทั้งหมด
//     $customers = Customer::all();
//     return view('components.content-cus.Profile-cus', compact('customers'));
// }

// public function index(Request $request)
// {
//     $search = $request->input('search');

//     // เปลี่ยนให้ตรงกับชื่อ column ของคุณ
//     $customers = Customer::where('first_name', 'LIKE', "%$search%")
//         ->orWhere('last_name', 'LIKE', "%$search%")
//         ->get();

//     return response()->json($customers);
// }




// app/Http/Controllers/CustomerController.php
// public function index(Request $request)
// {
//     $search = $request->query('search');

//     // ดึงข้อมูลลูกค้าตามการค้นหา
//     $customers = Customer::where('name', 'LIKE', "%{$search}%")
//                          ->orWhere('surname', 'LIKE', "%{$search}%")
//                          ->get();

//     return response()->json($customers);
// }





    // public function update(Request $request, $id)
    // {
    //     // ตรวจสอบข้อมูลที่ได้รับ
    //     $request->validate([
    //         'status_cus' => 'required|string',
    //         'prefix' => 'required|string',
    //         'first_name' => 'required|string',
    //         'last_name' => 'required|string',
    //         'phone' => 'required|string',
    //         'phone2' => 'nullable|string',
    //         'id_card_number' => 'required|string',
    //         'age' => 'nullable|integer',
    //         'gender' => 'required|string',
    //         'nationality' => 'required|string',
    //         'religion' => 'required|string',
    //         'driving_license' => 'nullable|string',
    //         'facebook' => 'nullable|string',
    //         'line_id' => 'nullable|string',
    //         'marital_status' => 'nullable|string',
    //         'spouse_name' => 'nullable|string',
    //         'spouse_phone' => 'nullable|string',
    //         'note' => 'nullable|string',
    //         'expiry_date' => 'nullable|date_format:d/m/Y',
    //         'dob' => 'nullable|date_format:d/m/Y',
    //         'birthday' => 'nullable|date_format:d/m/Y',
    //     ]);

    //     // ค้นหาลูกค้าตาม ID ที่ได้รับ
    //     $customer = Customer::findOrFail($id);

    //     // กำหนดข้อมูลที่จะอัปเดต
    //     $data = $request->only([
    //         'status_cus', // เพิ่ม status_cus
    //         'prefix',
    //         'first_name',
    //         'last_name',
    //         'phone',
    //         'phone2',
    //         'id_card_number',
    //         'age',
    //         'gender',
    //         'nationality',
    //         'religion',
    //         'driving_license',
    //         'facebook',
    //         'line_id',
    //         'marital_status',
    //         'spouse_name',
    //         'spouse_phone',
    //         'note',
    //         'expiry_date',
    //         'dob',
    //         'birthday',
    //     ]);

    //     // เพิ่ม user_insert
    //     $data['user_insert'] = auth()->user()->name; // รับชื่อผู้ใช้ที่ล็อกอินอยู่

    //     // ตรวจสอบและแปลงวันที่อย่างปลอดภัย
    //     try {
    //         // แปลง expiry_date
    //         $data['expiry_date'] = !empty($data['expiry_date']) ?
    //             Carbon::createFromFormat('d/m/Y', $data['expiry_date'])->format('Y-m-d') : null;

    //         // แปลง dob
    //         $data['dob'] = !empty($data['dob']) ?
    //             Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d') : null;

    //         // แปลง birthday
    //         $data['birthday'] = !empty($data['birthday']) ?
    //             Carbon::createFromFormat('d/m/Y', $data['birthday'])->format('Y-m-d') : null;
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Invalid date format provided: ' . $e->getMessage()], 400);
    //     }

    //     // อัปเดตข้อมูลลูกค้า
    //     try {
    //         $customer->update($data);
    //         return response()->json(['success' => 'อัพเดตข้อมูลลูกค้าสำเร็จ!']);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'ไม่สามารถอัพเดตข้อมูลลูกค้าได้: ' . $e->getMessage()], 500);
    //     }
    // }
