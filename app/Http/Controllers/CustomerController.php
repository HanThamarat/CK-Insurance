<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DataCusCareer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\DataCusAddress; // ใช้ DataCusAddress Model
use App\Helpers; // เพิ่มการนำเข้าฟังก์ชันจาก Helper

class CustomerController extends Controller
{

    public function index(Request $request) {
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

        return view('components.content-cus.Profile-cus', compact('customer'));
    }

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




    public function show($id)
    {
        // ดึงข้อมูลลูกค้าตาม ID
        $customer = Customer::find($id);

        // ตรวจสอบว่าพบข้อมูลลูกค้าหรือไม่
        if (!$customer) {
            return redirect()->route('customers.index')->with('error', 'Customer not found.');
        }

        // ส่งข้อมูลลูกค้าไปยัง view
        return view('customers.profile', compact('customer'));
    }

    public function index_2()
    {
        $customers = Customer::all();
        return view('components.content-cus.Cus', compact('customers'));
    }

    public function create()
    {
        return view('components.content-cus.Cus');
    }

    public function store(Request $request)
    {

        // Prepare the data with formatted dates
        $data = [
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
            'expiry_date' => formatDate($request->input('expiry_date')), // Format the expiry date
            'dob' => formatDate($request->input('dob')), // Format the date of birth
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
        $customer = Customer::findOrFail($id);

        $data = [
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
            'expiry_date' => Carbon::createFromFormat('d-m-Y', $request->input('expiry_date')) ? Carbon::createFromFormat('d-m-Y', $request->input('expiry_date'))->format('Y-m-d') : null,
            'dob' => Carbon::createFromFormat('d-m-Y', $request->input('dob')) ? Carbon::createFromFormat('d-m-Y', $request->input('dob'))->format('Y-m-d') : null,

        ];


        // Create the customer record
        Customer::create($data);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
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

}


























































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
