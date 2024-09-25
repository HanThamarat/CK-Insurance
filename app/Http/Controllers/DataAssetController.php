<?php

namespace App\Http\Controllers;

use App\Models\AssetManage;
use App\Models\DataAsset; //Model หลักในการเก็บค่า

use App\Models\ProvinceDLT; //จังหวัด

use App\Models\TBTypeAsset; //ประเภทรถ

//Model Car
use App\Models\StatCarGroup;
use App\Models\TypeVehicle;
use App\Models\StatCarBrand;
use App\Models\StatCarYear;
use App\Models\StatCarModel;

//Model Motocycle
use App\Models\StatMotoBrand;
use App\Models\StatMotoGroup;
use App\Models\StatMotoModel;
use App\Models\StatMotoYear;

use Illuminate\Http\Request;

class DataAssetController extends Controller
{

        //---------------------------------------------All Data Index---------------------------------------------------------//

        public function index()
        {
            // ดึงข้อมูลจากตาราง ProvinceDLT
            $provinces = ProvinceDLT::all();

            // ดึงข้อมูลประเภทรถ
            $typeAssets = TBTypeAsset::all();

            // ดึงข้อมูล รถยนต์
            $cars = StatCarGroup::all();
            $typeVehicles = TypeVehicle::all();
            $carBrands = StatCarBrand::all();
            $carYears = StatCarYear::all();
            $carModels = StatCarModel::all();

            // ดึงข้อมูล มอเตอร์ไซค์
            $motoBrands = StatMotoBrand::all();
            $motoGroups = StatMotoGroup::all();
            $motoModels = StatMotoModel::all();
            $motoYears = StatMotoYear::all();

            // ตรวจสอบว่ามีข้อมูลหรือไม่
            if ($provinces->isEmpty() &&
                $typeAssets->isEmpty() &&  // ตรวจสอบข้อมูลประเภทรถ
                $cars->isEmpty() &&
                $typeVehicles->isEmpty() &&
                $carBrands->isEmpty() &&
                $carYears->isEmpty() &&
                $carModels->isEmpty() &&
                $motoBrands->isEmpty() &&
                $motoGroups->isEmpty() &&
                $motoModels->isEmpty() &&
                $motoYears->isEmpty())
            {
                return "ไม่มีข้อมูล";
            }

            // ส่งข้อมูลทั้งหมดไปที่ View เดียวกัน
            return view('data_assets.index', compact(
                'provinces',
                'typeAssets',  // เพิ่มการส่งข้อมูลประเภทรถ
                'cars',
                'typeVehicles',
                'carBrands',
                'carYears',
                'carModels',
                'motoBrands',
                'motoGroups',
                'motoModels',
                'motoYears'
            ));
        }



        //---------------------------------------------Data Assets Edit---------------------------------------------------------//

        public function edit($id)
        {
            $asset = AssetManage::find($id);
            return response()->json($asset);
        }

        //---------------------------------------------Data Assets Store---------------------------------------------------------//

        public function store(Request $request)
        {

            // Validate the incoming request
            $request->validate([
                'Type_Asset' => 'nullable|string|max:50',
                'Vehicle_OldLicense_Text' => 'nullable|string|max:255',
                'Vehicle_OldLicense_Number' => 'nullable|string|max:50',
                'OldProvince' => 'nullable|string|max:100',
                'Vehicle_NewLicense_Text' => 'nullable|string|max:255',
                'Vehicle_NewLicense_Number' => 'nullable|string|max:50',
                'NewProvince' => 'nullable|string|max:100',
                'Vehicle_Chassis' => 'nullable|string|max:50',
                'Vehicle_New_Number' => 'nullable|string|max:50',
                'Vehicle_Engine' => 'nullable|string|max:50',
                'Vehicle_Color' => 'nullable|string|max:50',
                'Vehicle_CC' => 'nullable|integer',
                'Vehicle_Type' => 'nullable|string|max:50',
                'Vehicle_Type_PLT' => 'nullable|string|max:50',
                'Vehicle_Brand' => 'nullable|string|max:100',
                'Vehicle_Group' => 'nullable|string|max:100',
                'Vehicle_Years' => 'nullable|integer',
                'Vehicle_Models' => 'nullable|string|max:100',
                'Vehicle_Gear' => 'nullable|string|max:50',
                'Vehicle_InsuranceStatus' => 'nullable|string|max:50',
                'Vehicle_Class' => 'nullable|string|max:50',
                'Vehicle_Companies' => 'nullable|string|max:100',
                'Vehicle_PolicyNumber' => 'nullable|string|max:50',
                'Choose_Insurance' => 'nullable|string|max:50',
                'Choose_Act' => 'nullable|string|max:50',
                'Choose_Register' => 'nullable|string|max:50',
                'created_at' => 'nullable|date',  // Validation for created_at
                'updated_at' => 'nullable|date',  // Validation for updated_at
            ]);

            AssetManage::create($request->all());

            return response()->json(['message' => 'สร้างข้อมูลสินทรัพย์สำเร็จ'], 200);
        }


        //---------------------------------------------Data Assets Destroy---------------------------------------------------------//

        public function destroy($id)
        {
            AssetManage::find($id)->delete();

            return response()->json(['success'=>'ลบข้อมูลสินทรัพย์สำเร็จ']);
        }

}
