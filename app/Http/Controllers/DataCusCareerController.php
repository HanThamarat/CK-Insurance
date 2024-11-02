<?php

namespace App\Http\Controllers;

use App\Models\DataCusCareer;
use App\Models\CareerCus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataCusCareerController extends Controller
{
    // แสดงข้อมูลทั้งหมด
    public function index()
    {
        $careers = DataCusCareer::all();
        return response()->json($careers);
    }

    // แสดงข้อมูลตาม ID
    public function show($id)
    {
        $career = DataCusCareer::find($id);

        if ($career) {
            return response()->json($career);
        }

        return response()->json(['message' => 'Career not found'], 404);
    }

    // สร้างข้อมูลใหม่
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'DataCus_id' => 'nullable|integer', // เปลี่ยนเป็น nullable
            'date_Cus' => 'nullable|date', // เปลี่ยนเป็น nullable
            'Code_Cus' => 'string|max:50|nullable',
            'Main_Career' => 'string|max:100|nullable',
            'Ordinal_Cus' => 'integer|nullable',
            'Status_Cus' => 'string|max:50|nullable',
            'Career_Cus' => 'string|max:100|nullable',
            'DetailCareer_Cus' => 'string|max:255|nullable',
            'Workplace_Cus' => 'string|max:100|nullable',
            'Income_Cus' => 'numeric|nullable',
            'BeforeIncome_Cus' => 'numeric|nullable',
            'AfterIncome_Cus' => 'numeric|nullable',
            'IncomeNote_Cus' => 'string|max:255|nullable',
            'Coordinates' => 'string|max:100|nullable',
            'UserZone' => 'string|max:50|nullable',
            'UserBranch' => 'string|max:50|nullable',
            'UserInsert' => 'integer|nullable',
            'UserUpdate' => 'integer|nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // สร้างอาชีพใหม่
        $career = DataCusCareer::create($request->all());
        return response()->json($career, 201);
    }



    public function update(Request $request, $id)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'DataCus_id' => 'nullable|integer',
            'date_Cus' => 'nullable|date',
            'Code_Cus' => 'nullable|string|max:50',
            'Main_Career' => 'nullable|string|max:100',
            'Ordinal_Cus' => 'nullable|integer',
            'Status_Cus' => 'nullable|string|max:50',
            'Career_Cus' => 'nullable|string|max:100',
            'DetailCareer_Cus' => 'nullable|string|max:255',
            'Workplace_Cus' => 'nullable|string|max:100',
            'Income_Cus' => 'nullable|numeric',
            'BeforeIncome_Cus' => 'nullable|numeric',
            'AfterIncome_Cus' => 'nullable|numeric',
            'IncomeNote_Cus' => 'nullable|string|max:255',
            'Coordinates' => 'nullable|string|max:100',
            'UserZone' => 'nullable|string|max:50',
            'UserBranch' => 'nullable|string|max:50',
            'UserInsert' => 'nullable|integer',
            'UserUpdate' => 'nullable|integer',
        ]);

        $career = DataCusCareer::find($id);

        if (!$career) {
            return response()->json(['message' => 'Career not found'], 404);
        }

        // Update the career model with validated data
        $career->fill($validatedData);
        $career->save();

        return response()->json($career, 200);
    }


    // ลบข้อมูล
    public function destroy($id)
    {
        $career = DataCusCareer::find($id);

        if (!$career) {
            return response()->json(['message' => 'Career not found'], 404);
        }

        $career->delete();
        return response()->json(['message' => 'Career deleted successfully']);
    }



    public function getCareerOptions(Request $request)
    {
        // ดึงข้อมูลจาก TB_CareerCus รวม Code_Career และ Name_Career
        $careers = CareerCus::select('Code_Career', 'Name_Career')->get();

        // ส่งข้อมูลกลับในรูปแบบ JSON
        return response()->json($careers);
    }

}



















    // อัปเดตข้อมูล
    // public function update(Request $request, $id)
    // {
    //     $career = DataCusCareer::find($id);

    //     if (!$career) {
    //         return response()->json(['message' => 'Career not found'], 404);
    //     }

    //     $career->update($request->all());
    //     return response()->json($career);
    // }


    // public function update(Request $request, $id)
    // {
    //     // Validate incoming data
    //     $validatedData = $request->validate([
    //         'Career_Cus' => 'required|string',
    //         'Income_Cus' => 'required|numeric',
    //         'BeforeIncome_Cus' => 'required|numeric',
    //         'AfterIncome_Cus' => 'required|numeric',
    //         'Workplace_Cus' => 'nullable|string',
    //         'Coordinates' => 'nullable|string',
    //         'IncomeNote_Cus' => 'nullable|string',
    //         'Status_Cus' => 'required|string',
    //     ]);

    //     $career = DataCusCareer::find($id);

    //     if (!$career) {
    //         return response()->json(['message' => 'Career not found'], 404);
    //     }

    //     // Update the career record with validated data
    //     $career->update($validatedData);
    //     return response()->json($career);
    // }




// public function update(Request $request, $id)
// {
//     $career = DataCusCareer::find($id);

//     if (!$career) {
//         return response()->json(['message' => 'Career not found'], 404);
//     }

//     // Validate incoming request data
//     $request->validate([
//         'DataCus_id' => 'required|integer',
//         'Status_Cus' => 'required|string',
//         'Career_Cus' => 'required|string',
//         'Income_Cus' => 'required|numeric',
//         'BeforeIncome_Cus' => 'required|numeric',
//         'AfterIncome_Cus' => 'required|numeric',
//         'Workplace_Cus' => 'required|string',
//         'Coordinates' => 'required|string',
//         'IncomeNote_Cus' => 'nullable|string',
//     ]);

//     $career->update($request->all());
//     return response()->json(['success' => true, 'data' => $career]);
// }




    // ฟังก์ชันเพื่อดึงข้อมูลอาชีพ
    // public function getCareerOptions(Request $request)
    // {
    //     // ดึงข้อมูลจาก TB_CareerCus
    //     $careers = CareerCus::select('Name_Career')->get();

    //     // ส่งข้อมูลกลับในรูปแบบ JSON
    //     return response()->json($careers);
    // }



    // public function update(Request $request)
    // {
    //     // ตรวจสอบและ validate ข้อมูล
    //     $request->validate([
    //         'id' => 'required|integer',
    //         'DataCus_id' => 'nullable|integer',
    //         'date_Cus' => 'nullable|date',
    //         'Code_Cus' => 'string|max:50|nullable',
    //         'Main_Career' => 'string|max:100|nullable',
    //         'Ordinal_Cus' => 'integer|nullable',
    //         'Status_Cus' => 'string|max:50|nullable',
    //         'Career_Cus' => 'string|max:100|nullable',
    //         'DetailCareer_Cus' => 'string|max:255|nullable',
    //         'Workplace_Cus' => 'string|max:100|nullable',
    //         'Income_Cus' => 'numeric|nullable',
    //         'BeforeIncome_Cus' => 'numeric|nullable',
    //         'AfterIncome_Cus' => 'numeric|nullable',
    //         'IncomeNote_Cus' => 'string|max:255|nullable',
    //         'Coordinates' => 'string|max:100|nullable',
    //         'UserZone' => 'string|max:50|nullable',
    //         'UserBranch' => 'string|max:50|nullable',
    //         'UserInsert' => 'integer|nullable',
    //         'UserUpdate' => 'integer|nullable',
    //     ]);

    //     // ค้นหาและอัปเดตข้อมูล
    //     $career = DataCusCareer::find($request->id);
    //     if ($career) {
    //         $career->update($request->all());
    //         return response()->json(['success' => true]);
    //     }

    //     return response()->json(['success' => false]);
    // }


    // public function update(Request $request)
    // {
    //     // ตรวจสอบและ validate ข้อมูล
    //     $request->validate([
    //         'id' => 'required|integer',
    //         'DataCus_id' => 'nullable|integer',
    //         'date_Cus' => 'nullable|date',
    //         'Code_Cus' => 'string|max:50|nullable',
    //         'Main_Career' => 'string|max:100|nullable',
    //         'Ordinal_Cus' => 'integer|nullable',
    //         'Status_Cus' => 'string|max:50|nullable',
    //         'Career_Cus' => 'string|max:100|nullable',
    //         'DetailCareer_Cus' => 'string|max:255|nullable',
    //         'Workplace_Cus' => 'string|max:100|nullable',
    //         'Income_Cus' => 'numeric|nullable',
    //         'BeforeIncome_Cus' => 'numeric|nullable',
    //         'AfterIncome_Cus' => 'numeric|nullable',
    //         'IncomeNote_Cus' => 'string|max:255|nullable',
    //         'Coordinates' => 'string|max:100|nullable',
    //         'UserZone' => 'string|max:50|nullable',
    //         'UserBranch' => 'string|max:50|nullable',
    //         'UserInsert' => 'integer|nullable',
    //         'UserUpdate' => 'integer|nullable',
    //     ]);

    //     // ค้นหาและอัปเดตข้อมูล
    //     $career = DataCusCareer::find($request->id);
    //     if ($career) {
    //         $career->update($request->only([
    //             'DataCus_id',
    //             'date_Cus',
    //             'Code_Cus',
    //             'Main_Career',
    //             'Ordinal_Cus',
    //             'Status_Cus',
    //             'Career_Cus',
    //             'DetailCareer_Cus',
    //             'Workplace_Cus',
    //             'Income_Cus',
    //             'BeforeIncome_Cus',
    //             'AfterIncome_Cus',
    //             'IncomeNote_Cus',
    //             'Coordinates',
    //             'UserZone',
    //             'UserBranch',
    //             'UserInsert',
    //             'UserUpdate'
    //         ]));
    //         return response()->json(['success' => true]);
    //     }

    //     return response()->json(['success' => false, 'message' => 'Data not found.']);
    // }





