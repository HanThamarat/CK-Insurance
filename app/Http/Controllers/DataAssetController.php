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
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;

class DataAssetController extends Controller
{

        public function index(Request $request)
        {
            // ดึงข้อมูลจากตาราง ProvinceDLT
            $provinces = ProvinceDLT::all();
            $typeAssets = TBTypeAsset::all();
            $cars = StatCarGroup::all();
            $typeVehicles = TypeVehicle::all();
            $carBrands = StatCarBrand::all();
            $carYears = StatCarYear::all();
            $carModels = StatCarModel::all();
            $motoBrands = StatMotoBrand::all();
            $motoGroups = StatMotoGroup::all();
            $motoModels = StatMotoModel::all();
            $motoYears = StatMotoYear::all();

            if ($request->ajax()) {
                return response()->json([
                    'provinces' => $provinces,
                    'typeAssets' => $typeAssets,
                    'cars' => $cars,
                    'typeVehicles' => $typeVehicles,
                    'carBrands' => $carBrands,
                    'carYears' => $carYears,
                    'carModels' => $carModels,
                    'motoBrands' => $motoBrands,
                    'motoGroups' => $motoGroups,
                    'motoModels' => $motoModels,
                    'motoYears' => $motoYears,
                ]);
            }

            // ถ้าคำขอไม่ใช่ AJAX ให้แสดงหน้าแรก
            return view('data_assets.index', compact(
                'provinces',
                'typeAssets',
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
                'created_at' => 'nullable|date',
                'updated_at' => 'nullable|date',
                'Insurance_renewal_date' => 'nullable|string',
                'Insurance_end_date' => 'nullable|string',
                'act_renewal_date' => 'nullable|string',
                'act_end_date' => 'nullable|string',
                'register_renewal_date' => 'nullable|string',
                'register_end_date' => 'nullable|string',
            ]);

            // Function for date conversion
            $convertDate = function ($dateString) {
                if (!$dateString) return null;

                try {
                    return Carbon::createFromFormat('d/m/Y', $dateString)->format('Y-m-d');
                } catch (InvalidFormatException $e) {
                    \Log::error("Invalid date format for: $dateString", ['error' => $e->getMessage()]);
                    return null;
                }
            };

            // Collect all request data
            $data = $request->all();

            // Overwrite date fields with converted values
            $data['Insurance_renewal_date'] = $convertDate($request->Insurance_renewal_date);
            $data['Insurance_end_date'] = $convertDate($request->Insurance_end_date);
            $data['act_renewal_date'] = $convertDate($request->act_renewal_date);
            $data['act_end_date'] = $convertDate($request->act_end_date);
            $data['register_renewal_date'] = $convertDate($request->register_renewal_date);
            $data['register_end_date'] = $convertDate($request->register_end_date);

            // Check for duplicate Vehicle_Chassis
            if (AssetManage::where('Vehicle_Chassis', $data['Vehicle_Chassis'])->exists()) {
                return response()->json(['message_error_chassis' => 'เลขตัวถังนี้มีอยู่ในระบบแล้ว'], 409); // Conflict
            }

            // Save the data to the database
            AssetManage::create($data);

            return response()->json(['message' => 'สร้างข้อมูลสินทรัพย์สำเร็จ'], 200);
        }




        //---------------------------------------------Data Assets Destroy---------------------------------------------------------//

        public function destroy($id)
        {
            AssetManage::find($id)->delete();
            return response()->json(['success'=>'ลบข้อมูลสินทรัพย์สำเร็จ']);
        }

}












































        // public function store(Request $request)
        // {


        //     $request->validate([
        //         'Type_Asset' => 'nullable|string|max:50',
        //         'Vehicle_OldLicense_Text' => 'nullable|string|max:255',
        //         'Vehicle_OldLicense_Number' => 'nullable|string|max:50',
        //         'OldProvince' => 'nullable|string|max:100',
        //         'Vehicle_NewLicense_Text' => 'nullable|string|max:255',
        //         'Vehicle_NewLicense_Number' => 'nullable|string|max:50',
        //         'NewProvince' => 'nullable|string|max:100',
        //         'Vehicle_Chassis' => 'nullable|string|max:50',
        //         'Vehicle_New_Number' => 'nullable|string|max:50',
        //         'Vehicle_Engine' => 'nullable|string|max:50',
        //         'Vehicle_Color' => 'nullable|string|max:50',
        //         'Vehicle_CC' => 'nullable|integer',
        //         'Vehicle_Type' => 'nullable|string|max:50',
        //         'Vehicle_Type_PLT' => 'nullable|string|max:50',
        //         'Vehicle_Brand' => 'nullable|string|max:100',
        //         'Vehicle_Group' => 'nullable|string|max:100',
        //         'Vehicle_Years' => 'nullable|integer',
        //         'Vehicle_Models' => 'nullable|string|max:100',
        //         'Vehicle_Gear' => 'nullable|string|max:50',
        //         'Vehicle_InsuranceStatus' => 'nullable|string|max:50',
        //         'Vehicle_Class' => 'nullable|string|max:50',
        //         'Vehicle_Companies' => 'nullable|string|max:100',
        //         'Vehicle_PolicyNumber' => 'nullable|string|max:50',
        //         'Choose_Insurance' => 'nullable|string|max:50',
        //         'Choose_Act' => 'nullable|string|max:50',
        //         'Choose_Register' => 'nullable|string|max:50',
        //         'created_at' => 'nullable|date',
        //         'updated_at' => 'nullable|date',
        //         // เพิ่มการตรวจสอบสำหรับฟิลด์ใหม่
        //         'Insurance_renewal_date' => 'nullable|string', // เปลี่ยนเป็น string เพื่อรองรับการตรวจสอบ
        //         'Insurance_end_date' => 'nullable|string',
        //         'act_renewal_date' => 'nullable|string',
        //         'act_end_date' => 'nullable|string',
        //         'register_renewal_date' => 'nullable|string',
        //         'register_end_date' => 'nullable|string',
        //     ]);

        //     $convertDate = function($dateString) {
        //         if (!$dateString) return null;

        //         try {
        //             return Carbon::createFromFormat('d/m/Y', $dateString)->format('Y-m-d');
        //         } catch (InvalidFormatException $e) {
        //             // จัดการข้อผิดพลาดที่เกิดขึ้น
        //             \Log::error("Invalid date format for: $dateString", ['error' => $e->getMessage()]);
        //             return null; // หรือสามารถส่งข้อความผิดพลาดกลับไปได้
        //         }
        //     };

        //     $data['Insurance_renewal_date'] = $convertDate($request->Insurance_renewal_date);
        //     $data['Insurance_end_date'] = $convertDate($request->Insurance_end_date);
        //     $data['act_renewal_date'] = $convertDate($request->act_renewal_date);
        //     $data['act_end_date'] = $convertDate($request->act_end_date);
        //     $data['register_renewal_date'] = $convertDate($request->register_renewal_date);
        //     $data['register_end_date'] = $convertDate($request->register_end_date);

        //     AssetManage::create($data);
        //     AssetManage::create($request->all());


        //     return response()->json(['message' => 'สร้างข้อมูลสินทรัพย์สำเร็จ'], 200);
        // }

        // public function store(Request $request)
        // {

        //     // Validate the incoming request
        //     // $request->validate([
        //     //     'Type_Asset' => 'nullable|string|max:50',
        //     //     'Vehicle_OldLicense_Text' => 'nullable|string|max:255',
        //     //     'Vehicle_OldLicense_Number' => 'nullable|string|max:50',
        //     //     'OldProvince' => 'nullable|string|max:100',
        //     //     'Vehicle_NewLicense_Text' => 'nullable|string|max:255',
        //     //     'Vehicle_NewLicense_Number' => 'nullable|string|max:50',
        //     //     'NewProvince' => 'nullable|string|max:100',
        //     //     'Vehicle_Chassis' => 'nullable|string|max:50',
        //     //     'Vehicle_New_Number' => 'nullable|string|max:50',
        //     //     'Vehicle_Engine' => 'nullable|string|max:50',
        //     //     'Vehicle_Color' => 'nullable|string|max:50',
        //     //     'Vehicle_CC' => 'nullable|integer',
        //     //     'Vehicle_Type' => 'nullable|string|max:50',
        //     //     'Vehicle_Type_PLT' => 'nullable|string|max:50',
        //     //     'Vehicle_Brand' => 'nullable|string|max:100',
        //     //     'Vehicle_Group' => 'nullable|string|max:100',
        //     //     'Vehicle_Years' => 'nullable|integer',
        //     //     'Vehicle_Models' => 'nullable|string|max:100',
        //     //     'Vehicle_Gear' => 'nullable|string|max:50',
        //     //     'Vehicle_InsuranceStatus' => 'nullable|string|max:50',
        //     //     'Vehicle_Class' => 'nullable|string|max:50',
        //     //     'Vehicle_Companies' => 'nullable|string|max:100',
        //     //     'Vehicle_PolicyNumber' => 'nullable|string|max:50',
        //     //     'Choose_Insurance' => 'nullable|string|max:50',
        //     //     'Choose_Act' => 'nullable|string|max:50',
        //     //     'Choose_Register' => 'nullable|string|max:50',
        //     //     'created_at' => 'nullable|date',  // Validation for created_at
        //     //     'updated_at' => 'nullable|date',  // Validation for updated_at
        //     // ]);

        //     $request->validate([
        //         'Type_Asset' => 'nullable|string|max:50',
        //         'Vehicle_OldLicense_Text' => 'nullable|string|max:255',
        //         'Vehicle_OldLicense_Number' => 'nullable|string|max:50',
        //         'OldProvince' => 'nullable|string|max:100',
        //         'Vehicle_NewLicense_Text' => 'nullable|string|max:255',
        //         'Vehicle_NewLicense_Number' => 'nullable|string|max:50',
        //         'NewProvince' => 'nullable|string|max:100',
        //         'Vehicle_Chassis' => 'nullable|string|max:50',
        //         'Vehicle_New_Number' => 'nullable|string|max:50',
        //         'Vehicle_Engine' => 'nullable|string|max:50',
        //         'Vehicle_Color' => 'nullable|string|max:50',
        //         'Vehicle_CC' => 'nullable|integer',
        //         'Vehicle_Type' => 'nullable|string|max:50',
        //         'Vehicle_Type_PLT' => 'nullable|string|max:50',
        //         'Vehicle_Brand' => 'nullable|string|max:100',
        //         'Vehicle_Group' => 'nullable|string|max:100',
        //         'Vehicle_Years' => 'nullable|integer',
        //         'Vehicle_Models' => 'nullable|string|max:100',
        //         'Vehicle_Gear' => 'nullable|string|max:50',
        //         'Vehicle_InsuranceStatus' => 'nullable|string|max:50',
        //         'Vehicle_Class' => 'nullable|string|max:50',
        //         'Vehicle_Companies' => 'nullable|string|max:100',
        //         'Vehicle_PolicyNumber' => 'nullable|string|max:50',
        //         'Choose_Insurance' => 'nullable|string|max:50',
        //         'Choose_Act' => 'nullable|string|max:50',
        //         'Choose_Register' => 'nullable|string|max:50',
        //         'created_at' => 'nullable|date',  // Validation for created_at
        //         'updated_at' => 'nullable|date',  // Validation for updated_at
        //         // เพิ่มการตรวจสอบสำหรับฟิลด์ใหม่
        //         'Customer_id' => 'nullable|integer', // ตรวจสอบว่า Customer_id มีอยู่ในตาราง customers หรือไม่
        //         'Insurance_renewal_date' => 'nullable|date',
        //         'Insurance_end_date' => 'nullable|date',
        //         'act_renewal_date' => 'nullable|date',
        //         'act_end_date' => 'nullable|date',
        //         'register_renewal_date' => 'nullable|date',
        //         'register_end_date' => 'nullable|date',
        //     ]);


        //     // ตรวจสอบว่ามีเลขตัวถังซ้ำในฐานข้อมูลหรือไม่
        //     // $exists = AssetManage::where('Vehicle_Chassis', $request->Vehicle_Chassis)->exists();
        //     // if ($exists) {
        //     //     return response()->json(['message' => 'เลขตัวถังรถนี้มีอยู่ในระบบแล้ว'], 409); // 409 Conflict
        //     // }

        //     AssetManage::create($request->all());

        //     return response()->json(['message' => 'สร้างข้อมูลสินทรัพย์สำเร็จ'], 200);
        // }
