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



    public function getAddressData($id)
    {
        // ดึงข้อมูลที่อยู่ที่ DataCus_id ตรงกับ id ของ Customer
        $customer = Customer::with('addresses')->where('id', $id)->first();

        if ($customer && $customer->addresses) {
            // ถ้ามีข้อมูลลูกค้าและข้อมูลที่อยู่ตรงกัน
            return response()->json([
                'customer' => $customer,
                'addresses' => $customer->addresses // เปลี่ยนเป็น addresses เพราะอาจมีหลายที่อยู่
            ]);
        } else {
            return response()->json(['message' => 'No matching address found'], 404);
        }
    }

    public function getAddress($id)
    {
        // สมมติว่าคุณมี Model ชื่อ Address
        $address = DataCusAddress::find($id);

        if ($address) {
            return response()->json($address); // ส่งข้อมูลกลับในรูปแบบ JSON
        } else {
            return response()->json(['error' => 'Address not found'], 404);
        }
    }

    public function editAddress($id)
    {
        // ค้นหาข้อมูลที่อยู่ที่ต้องการแก้ไข
        $address = DataCusAddress::find($id);

        if (!$address) {
            return response()->json(['message' => 'ไม่พบข้อมูลที่อยู่'], 404);
        }

        // ส่งคืนข้อมูลที่อยู่ในรูปแบบ JSON
        return response()->json(['address' => $address], 200);
    }


    public function updateAddress(Request $request)
    {
        // ตรวจสอบว่ามีการส่ง id มาหรือไม่
        if (!$request->has('id')) {
            return response()->json(['message' => 'กรุณาระบุ id'], 400);
        }

        // ตรวจสอบข้อมูลที่ส่งเข้ามา
        $request->validate([
            'id' => 'required|integer', // ตรวจสอบ id ให้แน่ใจว่าถูกส่งมา
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

        // ค้นหาโมเดลที่ต้องการอัปเดต โดยใช้ id ที่ส่งมา
        $address = DataCusAddress::find($request->id);

        if (!$address) {
            return response()->json(['message' => 'ไม่พบข้อมูล'], 404);
        }

        // อัปเดตข้อมูลที่ส่งมา
        $updated = $address->update($request->only([
            'DataCus_id',
            'Registration_number',
            'date_Adds',
            'Code_Adds',
            'Ordinal_Adds',
            'Status_Adds',
            'Type_Adds',
            'houseNumber_Adds',
            'houseGroup_Adds',
            'building_Adds',
            'village_Adds',
            'roomNumber_Adds',
            'Floor_Adds',
            'alley_Adds',
            'road_Adds',
            'houseZone_Adds',
            'houseProvince_Adds',
            'houseDistrict_Adds',
            'houseTambon_Adds',
            'Postal_Adds',
            'Detail_Adds',
            'Coordinates_Adds',
            'UserZone',
            'UserBranch',
            'UserInsert',
            'UserUpdate'
        ]));

        // ตรวจสอบว่ามีการอัปเดตหรือไม่
        if ($updated) {
            return response()->json(['message' => 'อัปเดตข้อมูลสำเร็จ'], 200);
        } else {
            return response()->json(['message' => 'ไม่มีการเปลี่ยนแปลงข้อมูล'], 200);
        }
    }

}










































    // อัปเดตข้อมูลที่อยู่
    // public function updateAddress(Request $request)
    // {
    //     // ตรวจสอบว่ามีการส่ง id มาหรือไม่
    //     if (!$request->has('id')) {
    //         return response()->json(['message' => 'กรุณาระบุ id'], 400);
    //     }

    //     // ตรวจสอบข้อมูลที่ส่งเข้ามา
    //     $request->validate([
    //         'id' => 'required|integer', // ตรวจสอบ id ให้แน่ใจว่าถูกส่งมา
    //         'DataCus_id' => 'nullable|integer',
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

    //     // ค้นหาโมเดลที่ต้องการอัปเดต โดยใช้ id ที่ส่งมา
    //     $address = DataCusAddress::find($request->id);

    //     if (!$address) {
    //         return response()->json(['message' => 'ไม่พบข้อมูล'], 404);
    //     }

    //     // อัปเดตข้อมูลที่ส่งมา
    //     $updated = $address->update($request->only([
    //         'DataCus_id',
    //         'Registration_number',
    //         'date_Adds',
    //         'Code_Adds',
    //         'Ordinal_Adds',
    //         'Status_Adds',
    //         'Type_Adds',
    //         'houseNumber_Adds',
    //         'houseGroup_Adds',
    //         'building_Adds',
    //         'village_Adds',
    //         'roomNumber_Adds',
    //         'Floor_Adds',
    //         'alley_Adds',
    //         'road_Adds',
    //         'houseZone_Adds',
    //         'houseProvince_Adds',
    //         'houseDistrict_Adds',
    //         'houseTambon_Adds',
    //         'Postal_Adds',
    //         'Detail_Adds',
    //         'Coordinates_Adds',
    //         'UserZone',
    //         'UserBranch',
    //         'UserInsert',
    //         'UserUpdate'
    //     ]));

    //     // ตรวจสอบว่ามีการอัปเดตหรือไม่
    //     if ($updated) {
    //         return response()->json(['message' => 'อัปเดตข้อมูลสำเร็จ'], 200);
    //     } else {
    //         return response()->json(['message' => 'ไม่มีการเปลี่ยนแปลงข้อมูล'], 200);
    //     }

    // }



    // public function updateAddress(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'DataCus_id' => 'nullable|integer',
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

    //     // ค้นหาโมเดลที่ต้องการอัปเดต
    //     $address = DataCusAddress::find($request->addressId); // ใช้ ID ที่ส่งมาจากฟอร์มเพื่อค้นหา

    //     if (!$address) {
    //         return response()->json(['message' => 'ไม่พบข้อมูล'], 404);
    //     }


    //     // อัปเดตข้อมูล
    //     $address->DataCus_id = $request->DataCus_id;
    //     $address->Registration_number = $request->Registration_number;
    //     $address->date_Adds = $request->date_Adds;
    //     $address->Code_Adds = $request->Code_Adds;
    //     $address->Ordinal_Adds = $request->Ordinal_Adds;
    //     $address->Status_Adds = $request->Status_Adds;
    //     $address->Type_Adds = $request->Type_Adds;
    //     $address->houseNumber_Adds = $request->houseNumber_Adds;
    //     $address->houseGroup_Adds = $request->houseGroup_Adds;
    //     $address->building_Adds = $request->building_Adds;
    //     $address->village_Adds = $request->village_Adds;
    //     $address->roomNumber_Adds = $request->roomNumber_Adds;
    //     $address->Floor_Adds = $request->Floor_Adds;
    //     $address->alley_Adds = $request->alley_Adds;
    //     $address->road_Adds = $request->road_Adds;
    //     $address->houseZone_Adds = $request->houseZone_Adds;
    //     $address->houseProvince_Adds = $request->houseProvince_Adds;
    //     $address->houseDistrict_Adds = $request->houseDistrict_Adds;
    //     $address->houseTambon_Adds = $request->houseTambon_Adds;
    //     $address->Postal_Adds = $request->Postal_Adds;
    //     $address->Detail_Adds = $request->Detail_Adds;
    //     $address->Coordinates_Adds = $request->Coordinates_Adds;
    //     $address->UserZone = $request->UserZone;
    //     $address->UserBranch = $request->UserBranch;
    //     $address->UserInsert = $request->UserInsert;
    //     $address->UserUpdate = $request->UserUpdate;

    //     // บันทึกการเปลี่ยนแปลง
    //     $address->save();

    //     return response()->json(['message' => 'อัปเดตข้อมูลสำเร็จ'], 200);
    // }




    // public function updateAddress(Request $request)
    // {
    //     // ตรวจสอบว่าข้อมูลที่จำเป็นถูกส่งมา
    //     $request->validate([
    //         'addressId' => 'required|integer',
    //         'houseNumber_Adds' => 'required|string',
    //         // ตรวจสอบข้อมูลอื่นๆ ตามต้องการ
    //     ]);

    //     // ดำเนินการอัปเดตข้อมูลในฐานข้อมูล
    //     $address = DataCusAddress::find($request->addressId);
    //     if ($address) {
    //         $address->houseNumber_Adds = $request->houseNumber_Adds;
    //         // อัปเดตข้อมูลอื่นๆ ตามที่คุณต้องการ
    //         $address->save();

    //         return response()->json(['success' => true, 'message' => 'อัปเดตข้อมูลสำเร็จ']);
    //     } else {
    //         return response()->json(['success' => false, 'message' => 'ไม่พบที่อยู่ที่ต้องการอัปเดต']);
    //     }
    // }


    // public function updateAddress(Request $request)
    // {
    //     $address = DataCusAddress::find($request->input('addressId'));
    //     if ($address) {
    //         $address->update($request->all()); // ทำการอัปเดตข้อมูลทั้งหมด
    //         return response()->json(['success' => true]);
    //     } else {
    //         return response()->json(['success' => false, 'message' => 'ไม่สามารถอัปเดตข้อมูลได้']);
    //     }
    // }



// public function getAddressData()
// {
//     $addresses = DataCusAddress::all();
//     return response()->json($addresses);
// }


// public function getAddressData(Request $request)
// {
//     // รับค่า id จาก request
//     $id = $request->input('id');

//     // ค้นหาข้อมูลที่มี id และ DataCus_id ตรงกัน
//     $addresses = DataCusAddress::where('id', $id)
//                                 ->where('DataCus_id', $id) // ให้ DataCus_id ตรงกับ id
//                                 ->get();

//     return response()->json($addresses);
// }



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
