<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Helpers; // เพิ่มการนำเข้าฟังก์ชันจาก Helper

class CustomerController extends Controller
{
    public function index()
    {
        // return view('components.content-cus.Cus');
    }

    public function profile()
    {
        return view('components.content-cus.Profile-cus');
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
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
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

        // public function destroy($id)
        // {
        //     $customer = Customer::findOrFail($id);
        //     $customer->delete();

        //     return redirect()->route('customers.index')->with('success', 'ลูกค้าได้ถูกลบเรียบร้อยแล้ว');
        // }
    }
}
