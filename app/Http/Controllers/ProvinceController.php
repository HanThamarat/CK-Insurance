<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\ProvinceDLT;
use App\Models\StatCarGroup;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    // ฟังก์ชันสำหรับส่งข้อมูลจังหวัดในรูปแบบ JSON
    public function index()
    {
        $provinces = Province::all(); // ดึงข้อมูลทั้งหมดจากตาราง TB_Provinces
        return response()->json($provinces); // ส่งข้อมูลเป็น JSON
    }

    // ฟังก์ชันสำหรับเก็บข้อมูลจังหวัดใหม่
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Postcode_pro' => 'nullable|string|max:10',
            'Tambon_pro' => 'nullable|string|max:255',
            'District_pro' => 'nullable|string|max:255',
            'Province_pro' => 'nullable|string|max:255',
            'Zone_pro' => 'nullable|string|max:255',
        ]);

        $province = Province::create($validatedData); // สร้างข้อมูลใหม่
        return response()->json($province, 201); // ส่งข้อมูลที่สร้างใหม่เป็น JSON พร้อมรหัสสถานะ 201
    }

    // ฟังก์ชันสำหรับดึงข้อมูล Zone_pro
    public function getZones()
    {
        $zones = Province::select('Zone_pro')->distinct()->get();
        return response()->json($zones);
    }


    public function getProvince()
    {
        $provinces = Province::select('Province_pro')->distinct()->get();
        return response()->json($provinces);
    }

    public function getDistrict()
    {
        $districts = Province::select('District_pro')->distinct()->get();
        return response()->json($districts);
    }

    public function getTambon()
    {
        $tambons = Province::select('Tambon_pro')->distinct()->get();
        return response()->json($tambons);
    }

    public function getPostcode()
    {
        $postcodes = Province::select('Postcode_pro')->distinct()->get();
        return response()->json($postcodes);
    }

}
























// public function index_ajax()
// {
//     $provinces = Province::all();
//     return response()->json($provinces);
// }

// public function index()
// {
//     // ดึงข้อมูลจากฐานข้อมูล
//     $provinces = ProvinceDLT::all();

//     // ตรวจสอบว่าข้อมูลถูกดึงหรือไม่
//     if ($provinces->isEmpty()) {
//         return "ไม่มีข้อมูลในตาราง TB_Provinces";
//     }

//     // ส่งข้อมูลไปที่ View modal_car.blade.php
//     return view('data_assets.index', compact('provinces'));
// }



// public function showProvinces()
// {
//     try {
//         $provinces = ProvinceDLT::all();
//         return view('data_assets.modal_car', compact('provinces'));
//     } catch (\Exception $e) {
//         // ล็อกข้อผิดพลาด
//         \Log::error($e->getMessage());
//         return response()->view('errors.custom', [], 500);
//     }
// }


// /**
//  * แสดงข้อมูลจังหวัดตาม id
//  */
// public function show($id)
// {
//     $province = Province::findOrFail($id);
//     return response()->json($province);
// }

// /**
//  * บันทึกข้อมูลจังหวัดใหม่
//  */
// public function store(Request $request)
// {
//     $validatedData = $request->validate([
//         'Postcode_pro' => 'required|string|max:10',
//         'Tambon_pro' => 'required|string|max:255',
//         'District_pro' => 'required|string|max:255',
//         'Province_pro' => 'required|string|max:255',
//         'Zone_pro' => 'nullable|string|max:255',
//     ]);

//     $province = Province::create($validatedData);

//     return response()->json([
//         'message' => 'Province created successfully!',
//         'province' => $province
//     ], 201);
// }

// /**
//  * อัปเดตข้อมูลจังหวัดตาม id
//  */
// public function update(Request $request, $id)
// {
//     $province = Province::findOrFail($id);

//     $validatedData = $request->validate([
//         'Postcode_pro' => 'sometimes|string|max:10',
//         'Tambon_pro' => 'sometimes|string|max:255',
//         'District_pro' => 'sometimes|string|max:255',
//         'Province_pro' => 'sometimes|string|max:255',
//         'Zone_pro' => 'nullable|string|max:255',
//     ]);

//     $province->update($validatedData);

//     return response()->json([
//         'message' => 'Province updated successfully!',
//         'province' => $province
//     ]);
// }

// /**
//  * ลบข้อมูลจังหวัดตาม id
//  */
// public function destroy($id)
// {
//     $province = Province::findOrFail($id);
//     $province->delete();

//     return response()->json([
//         'message' => 'Province deleted successfully!'
//     ]);
// }
