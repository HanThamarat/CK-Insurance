<?php

namespace App\Http\Controllers;

use App\Models\DataCusAddress;
use App\Models\Customer; // ใช้ Customer Model
use App\Models\Province; // ใช้ Province Model
use App\Models\TBTypeCusAddress;
use Illuminate\Http\Request;

class DataCusAddressController extends Controller
{
    // แสดงข้อมูลทั้งหมด
    public function index()
    {
        $addresses = DataCusAddress::all();
        return response()->json($addresses);
    }

    // เพิ่มข้อมูลใหม่
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'DataCus_id' => 'nullable|integer',
            'Registration_number' => 'nullable|string|max:255',
            'date_Adds' => 'nullable|date',
            'Code_Adds' => 'nullable|string|max:255',
            'Ordinal_Adds' => 'nullable|integer',
            'Status_Adds' => 'nullable|string|max:255',
            'Type_Adds' => 'nullable|string|max:255',
            'houseNumber_Adds' => 'nullable|string|max:255',
            'houseGroup_Adds' => 'nullable|string|max:255',
            'building_Adds' => 'nullable|string|max:255',
            'village_Adds' => 'nullable|string|max:255',
            'roomNumber_Adds' => 'nullable|string|max:255',
            'Floor_Adds' => 'nullable|string|max:255',
            'alley_Adds' => 'nullable|string|max:255',
            'road_Adds' => 'nullable|string|max:255',
            'houseZone_Adds' => 'nullable|string|max:255',
            'houseProvince_Adds' => 'nullable|string|max:255',
            'houseDistrict_Adds' => 'nullable|string|max:255',
            'houseTambon_Adds' => 'nullable|string|max:255',
            'Postal_Adds' => 'nullable|string|max:255',
            'Detail_Adds' => 'nullable|string',
            'Coordinates_Adds' => 'nullable|string',
            'UserZone' => 'nullable|string|max:255',
            'UserBranch' => 'nullable|string|max:255',
            'UserInsert' => 'nullable|string|max:255',
            'UserUpdate' => 'nullable|string|max:255',
        ]);

        // สร้างข้อมูลใหม่
        $address = DataCusAddress::create($request->all());

        return response()->json($address, 201);
    }



    // อัปเดตข้อมูล
    public function update(Request $request, $id)
    {
        // ค้นหาข้อมูลที่ต้องการอัปเดต
        $address = DataCusAddress::findOrFail($id);

        // Validate input
        $request->validate([
            'Registration_number' => 'sometimes|string|max:255',
            // เพิ่มกฎ validation สำหรับฟิลด์อื่น ๆ ตามต้องการ
        ]);

        // อัปเดตข้อมูล
        $address->update($request->all());

        return response()->json($address);
    }

    // ลบข้อมูล
    public function destroy($id)
    {
        $address = DataCusAddress::findOrFail($id);
        $address->delete();

        return response()->json(null, 204);
    }


    public function getAddressData()
    {
        $addresses = DataCusAddress::all();
        return response()->json($addresses);
    }
}


































// public function store(Request $request)
// {
//     // Validate input
//     $request->validate([
//         'DataCus_id' => 'nullable|integer|exists:customers,id', // ตรวจสอบว่ามี DataCus_id ในตาราง customers
//         'Registration_number' => 'nullable|string|max:255',
//         'date_Adds' => 'nullable|date',
//         'Code_Adds' => 'nullable|string|max:255',
//         'Ordinal_Adds' => 'nullable|integer',
//         'Status_Adds' => 'nullable|string|max:255',
//         'Type_Adds' => 'nullable|string|max:255',
//         'houseNumber_Adds' => 'nullable|string|max:255',
//         'houseGroup_Adds' => 'nullable|string|max:255',
//         'building_Adds' => 'nullable|string|max:255',
//         'village_Adds' => 'nullable|string|max:255',
//         'roomNumber_Adds' => 'nullable|string|max:255',
//         'Floor_Adds' => 'nullable|string|max:255',
//         'alley_Adds' => 'nullable|string|max:255',
//         'road_Adds' => 'nullable|string|max:255',
//         'houseZone_Adds' => 'nullable|string|max:255',
//         'houseProvince_Adds' => 'nullable|string|max:255',
//         'houseDistrict_Adds' => 'nullable|string|max:255',
//         'houseTambon_Adds' => 'nullable|string|max:255',
//         'Postal_Adds' => 'nullable|string|max:255',
//         'Detail_Adds' => 'nullable|string',
//         'Coordinates_Adds' => 'nullable|string',
//         'UserZone' => 'nullable|string|max:255',
//         'UserBranch' => 'nullable|string|max:255',
//         'UserInsert' => 'nullable|string|max:255',
//         'UserUpdate' => 'nullable|string|max:255',
//     ]);

//     // ตรวจสอบว่ามี Customer อยู่หรือไม่
//     $customerExists = Customer::where('id', $request->DataCus_id)->exists();

//     if (!$customerExists) {
//         return response()->json(['error' => 'Customer not found.'], 404);
//     }

//     // สร้างข้อมูลใหม่
//     $address = DataCusAddress::create($request->all());

//     return response()->json($address, 201);
// }
