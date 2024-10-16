<?php

namespace App\Http\Controllers;

use App\Models\DataCusCareer;
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


    // อัปเดตข้อมูล
    public function update(Request $request, $id)
    {
        $career = DataCusCareer::find($id);

        if (!$career) {
            return response()->json(['message' => 'Career not found'], 404);
        }

        $career->update($request->all());
        return response()->json($career);
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
}
