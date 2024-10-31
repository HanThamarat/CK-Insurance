<?php

namespace App\Http\Controllers;

use App\Models\TypeAsset; //ประเภทข้อมูลสินทรัพย์
use App\Models\Customer; // ใช้ Customer Model

use App\Models\AssetManage;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


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

        public function getDataAsset()
        {
            // ดึงข้อมูลประเภททรัพย์สินที่มี id เป็น 1 และ 2
            $assets = TBTypeAsset::whereIn('id', [1, 2])->get(['id', 'Name_TypeAsset']);

            return response()->json($assets);
        }


        public function getRatetypeOptions()
        {
            // ดึงข้อมูล Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
            $carTypes = DB::table('Stat_CarGroup')
                ->select('Ratetype_id')
                ->distinct()
                ->get();

            // ดึงข้อมูล Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
            $motoTypes = DB::table('Stat_MotoGroup')
                ->select('Ratetype_id')
                ->distinct()
                ->get();

            // สร้าง array สำหรับแมพ Ratetype_id กับชื่อประเภท
            $typeNames = [
                'C01' => 'รถเก๋ง',
                'C02' => 'กระบะตอนเดียว',
                'C03' => 'กระบะแค็บ',
                'C04' => 'กระบะ 4 ประตู',
                'C05' => 'รถตู้',
                'C06' => 'รถใหญ่',
                'M01' => 'รถเกียร์ธรรมดา',
                'M02' => 'รถเกียร์ออโต้',
                'M03' => 'รถ BigBike'
            ];

            // แมพค่า Ratetype_id กับชื่อประเภทสำหรับ carTypes
            $carTypesWithNames = $carTypes->map(function ($item) use ($typeNames) {
                return [
                    'id' => $item->Ratetype_id,
                    'name' => $typeNames[$item->Ratetype_id] ?? 'ไม่ระบุ'
                ];
            });

            // แมพค่า Ratetype_id กับชื่อประเภทสำหรับ motoTypes
            $motoTypesWithNames = $motoTypes->map(function ($item) use ($typeNames) {
                return [
                    'id' => $item->Ratetype_id,
                    'name' => $typeNames[$item->Ratetype_id] ?? 'ไม่ระบุ'
                ];
            });

            // ส่งค่า response ที่แยกเป็น carTypes และ motoTypes
            return response()->json([
                'carTypes' => $carTypesWithNames,
                'motoTypes' => $motoTypesWithNames
            ]);
        }




        public function getVehicleNames(Request $request)
        {
            // ตรวจสอบว่ามี Ratetype_id ถูกส่งเข้ามาหรือไม่
            $ratetypeId = $request->input('ratetype_id');

            // สร้างเงื่อนไขสำหรับการค้นหา Name_Vehicle ตาม Ratetype_id ที่เลือก
            switch ($ratetypeId) {
                case 'C01': // รถเก๋ง
                    $vehicleNames = DB::table('TB_TypeVehicle')
                        ->whereIn('Name_Vehicle', ['รถเก๋งส่วนบุคคล', 'รถเก๋งรับจ้าง'])
                        ->distinct()
                        ->get();
                    break;
                case 'C02': // กระบะตอนเดียว
                    $vehicleNames = DB::table('TB_TypeVehicle')
                        ->where('Name_Vehicle', 'รถกระบะ')
                        ->distinct()
                        ->get();
                    break;
                case 'C03': // กระบะแค็บ
                    $vehicleNames = DB::table('TB_TypeVehicle')
                        ->where('Name_Vehicle', 'รถกระบะ')
                        ->distinct()
                        ->get();
                    break;
                case 'C04': // กระบะ 4 ประตู
                    $vehicleNames = DB::table('TB_TypeVehicle')
                        ->where('Name_Vehicle', 'รถกระบะ')
                        ->distinct()
                        ->get();
                    break;
                case 'C05': // รถตู้
                    $vehicleNames = DB::table('TB_TypeVehicle')
                        ->where('Name_Vehicle', 'รถอื่น ๆ')
                        ->distinct()
                        ->get();
                    break;
                case 'C06': // รถใหญ่
                    $vehicleNames = DB::table('TB_TypeVehicle')
                        ->whereIn('Name_Vehicle', ['รถบรรทุก', 'รถเพื่อการเกษตร', 'รถอื่น ๆ'])
                        ->distinct()
                        ->get();
                    break;
                case 'M01': // รถจักรยานยนต์ (รวม M01, M02, M03)
                case 'M02':
                case 'M03':
                    $vehicleNames = DB::table('TB_TypeVehicle')
                        ->whereIn('Name_Vehicle', ['รถจักรยานยนต์', 'รถ BigBike'])
                        ->distinct()
                        ->get();
                    break;
                default:
                    // หาก Ratetype_id ไม่ตรงกับเงื่อนไขที่กำหนดให้ส่งค่าผลลัพธ์ว่าง
                    $vehicleNames = collect();
                    break;
            }

            return response()->json($vehicleNames);
        }



        public function getBrandOptions(Request $request)
        {
            // รับ ratetype_id และ Name_Vehicle จาก request
            $ratetypeId = $request->input('ratetype_id');
            $nameVehicle = $request->input('name_vehicle'); // เพิ่มเพื่อดึงค่า Name_Vehicle

            $brands = [
                'carBrands' => collect(),
                'motoBrands' => collect(),
            ];

            // กำหนดเงื่อนไขสำหรับกรณีที่ ratetype_id เป็น 'C01'
            if ($ratetypeId === 'C01') {
                $vehicleNames = DB::table('TB_TypeVehicle')
                    ->whereIn('Name_Vehicle', ['รถเก๋งส่วนบุคคล', 'รถเก๋งรับจ้าง'])
                    ->distinct()
                    ->exists();

                if ($vehicleNames) {
                    // ดึงข้อมูล Brand_car สำหรับ C01
                    $carBrands = DB::table('Stat_CarBrand')
                        ->select('Brand_car', 'id')
                        ->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 14, 20, 22, 23, 26, 27])
                        ->get();

                    $brands['carBrands'] = $carBrands;
                }
            }
            // เช็คเงื่อนไขสำหรับ C02
            else if ($ratetypeId === 'C02' && $nameVehicle === 'รถกระบะ') {
                $carBrands = DB::table('Stat_CarBrand')
                    ->select('Brand_car', 'id')
                    ->whereIn('id', [1, 4, 5, 6, 7, 8, 9, 17])
                    ->get();

                $brands['carBrands'] = $carBrands;
            }
            // เช็คเงื่อนไขสำหรับ C03
            else if ($ratetypeId === 'C03' && $nameVehicle === 'รถกระบะ') {
                $carBrands = DB::table('Stat_CarBrand')
                    ->select('Brand_car', 'id')
                    ->whereIn('id', [1, 3, 5, 6, 7, 8, 9, 14])
                    ->get();

                $brands['carBrands'] = $carBrands;
            }
            // เช็คเงื่อนไขสำหรับ C04
            else if ($ratetypeId === 'C04' && $nameVehicle === 'รถกระบะ') {
                $carBrands = DB::table('Stat_CarBrand')
                    ->select('Brand_car', 'id')
                    ->whereIn('id', [1, 3, 5, 6, 7, 8, 9, 14])
                    ->get();

                $brands['carBrands'] = $carBrands;
            }
            // เช็คเงื่อนไขสำหรับ C05
            else if ($ratetypeId === 'C05' && $nameVehicle === 'รถอื่น ๆ') {
                $carBrands = DB::table('Stat_CarBrand')
                    ->select('Brand_car', 'id')
                    ->whereIn('id', [5, 8, 15])
                    ->get();

                $brands['carBrands'] = $carBrands;
            }
            // เช็คเงื่อนไขสำหรับ C06
            else if ($ratetypeId === 'C06') {
                if ($nameVehicle === 'รถบรรทุก' || $nameVehicle === 'รถเพื่อการเกษตร' || $nameVehicle === 'รถอื่น ๆ') {
                    $carBrands = DB::table('Stat_CarBrand')
                        ->select('Brand_car', 'id')
                        ->whereIn('id', [1, 5, 9, 10, 11, 18, 21, 24, 25])
                        ->get();

                    $brands['carBrands'] = $carBrands;
                }
            }
            // เช็คเงื่อนไขสำหรับ M01, M02, M03
            else if ($ratetypeId === 'M01' && $nameVehicle === 'รถจักรยานยนต์') {
                $motoBrands = DB::table('Stat_MotoBrand')
                    ->select('Brand_moto', 'id')
                    ->whereIn('id', [1, 2, 3, 4, 5, 9, 11])
                    ->get();

                $brands['motoBrands'] = $motoBrands;
            } else if ($ratetypeId === 'M02' && $nameVehicle === 'รถจักรยานยนต์') {
                $motoBrands = DB::table('Stat_MotoBrand')
                    ->select('Brand_moto', 'id')
                    ->whereIn('id', [1, 2, 3, 4, 6, 7, 10])
                    ->get();

                $brands['motoBrands'] = $motoBrands;
            } else if ($ratetypeId === 'M03' && $nameVehicle === 'รถจักรยานยนต์') {
                $motoBrands = DB::table('Stat_MotoBrand')
                    ->select('Brand_moto', 'id')
                    ->whereIn('id', [1, 2])
                    ->get();

                $brands['motoBrands'] = $motoBrands;
            } else {
                // กรณี ratetype_id ไม่ใช่ C01, C02, C03, C04, C05 หรือ C06 จะดึงข้อมูลทั้งหมด
                $carBrands = DB::table('Stat_CarBrand')
                    ->select('Brand_car', 'id')
                    ->get();

                $motoBrands = DB::table('Stat_MotoBrand')
                    ->select('Brand_moto', 'id')
                    ->get();

                $brands['carBrands'] = $carBrands;
                $brands['motoBrands'] = $motoBrands;
            }

            return response()->json($brands);
        }







        public function getGroupCarOptions(Request $request)
        {
            // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
            $carGroupsQuery = DB::table('Stat_CarGroup')->select('id', 'Group_car', 'RateType_id', 'Brand_id');

            // กรองตาม Brand_id
            if ($request->has('brand_id')) {
                $brandId = $request->input('brand_id');
                $carGroupsQuery->where('Brand_id', $brandId);
            }

            // กรองตาม RateType_id
            if ($request->has('ratetype_id')) {
                $rateTypeId = $request->input('ratetype_id');
                $carGroupsQuery->where('RateType_id', $rateTypeId);
            }

            // ดึงข้อมูล Group_car
            $carGroups = $carGroupsQuery->get();

            // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
            $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('id', 'Group_moto', 'RateType_id', 'Brand_id');

            // กรองตาม Brand_id
            if ($request->has('brand_id')) {
                $brandId = $request->input('brand_id');
                $motoGroupsQuery->where('Brand_id', $brandId);
            }

            // กรองตาม RateType_id
            if ($request->has('ratetype_id')) {
                $rateTypeId = $request->input('ratetype_id');
                $motoGroupsQuery->where('RateType_id', $rateTypeId);
            }

            // ดึงข้อมูลมอเตอร์ไซค์เสมอ ไม่ต้องตรวจสอบ name_vehicle
            $motoGroups = $motoGroupsQuery->get();

            // ตรวจสอบว่า $motoGroups มีค่าเป็นคอลเลกชันว่างหรือไม่
            if ($motoGroups->isEmpty()) {
                $motoGroups = [];
            }

            if ($carGroups->isEmpty()) {
                $carGroups = [];
            }

            // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
            $brandsResponse = $this->getBrandOptions($request);

            // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
            $brandsData = json_decode($brandsResponse->getContent(), true);

            // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
            $carBrands = $brandsData['carBrands'] ?? [];
            $motoBrands = $brandsData['motoBrands'] ?? [];

            // ส่งข้อมูลกลับในรูปแบบ JSON โดยส่งค่าทีละตัว
            return response()->json([
                'carGroups' => $carGroups,
                'motoGroups' => $motoGroups,
                'carBrands' => $carBrands,
                'motoBrands' => $motoBrands,
            ]);
        }



        public function getYearOptions(Request $request)
        {
            $groupId = $request->input('group_id'); // ดึง Group_id จากคำขอ

            // ดึงข้อมูล Year_car ที่ตรงกับ Group_id จากตาราง Stat_CarYear
            $carYears = DB::table('Stat_CarYear')
                ->select('Year_car', 'Group_id')
                ->where('Group_id', $groupId) // กรองตาม Group_id
                ->distinct()
                ->get();

            // ดึงข้อมูล Year_moto ที่ตรงกับ Group_id จากตาราง Stat_MotoYear
            $motoYears = DB::table('Stat_MotoYear')
                ->select('Year_moto', 'Group_id')
                ->where('Group_id', $groupId) // กรองตาม Group_id
                ->distinct()
                ->get();

            // รวมข้อมูลปีของรถยนต์และมอเตอร์ไซค์
            $years = [
                'carYears' => $carYears,
                'motoYears' => $motoYears,
            ];

            return response()->json($years);
        }



        public function getModelOptions(Request $request)
        {
            $groupId = $request->input('group_id'); // ดึง Group_id จากคำขอ

            // ดึงข้อมูล Model_car ที่ไม่ซ้ำกันจากตาราง Stat_CarModel
            $carModels = DB::table('Stat_CarModel')
                ->select('Model_car', 'Group_id')
                ->where('Group_id', $groupId) // กรองตาม Group_id
                ->distinct()
                ->get();

            // ดึงข้อมูล Model_moto ที่ไม่ซ้ำกันจากตาราง Stat_MotoModel
            $motoModels = DB::table('Stat_MotoModel')
                ->select('Model_moto', 'Group_id')
                ->where('Group_id', $groupId) // กรองตาม Group_id
                ->distinct()
                ->get();

            // รวมข้อมูลโมเดลของรถยนต์และมอเตอร์ไซค์
            $models = [
                'carModels' => $carModels,
                'motoModels' => $motoModels,
            ];

            return response()->json($models);
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
                'customer_id' => 'nullable|integer', // เพิ่มการ validate customer_id
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


        public function getAssetsByCustomerId(Request $request)
        {
            $customerId = $request->input('customer_id');

            if (!$customerId) {
                return response()->json(['error' => 'Customer ID is required'], 400);
            }

            $assets = AssetManage::where('customer_id', $customerId)->get();

            // บันทึกทรัพย์สินเพื่อตรวจสอบสิ่งที่ถูกส่งคืน
            // \Log::info('Assets:', $assets->toArray());

            return response()->json($assets);
        }



        //---------------------------------------------Data Assets Destroy---------------------------------------------------------//

        public function destroy($id)
        {
            AssetManage::find($id)->delete();
            return response()->json(['success'=>'ลบข้อมูลสินทรัพย์สำเร็จ']);
        }

}























































































 // public function getAssetsByCustomerId(Request $request)
        // {
        //     $customerId = $request->input('customer_id');

        //     if (!$customerId) {
        //         return response()->json(['error' => 'Customer ID is required'], 400);
        //     }

        //     // Assuming you have a model called Asset to fetch the assets
        //     $assets = AssetManage::where('customer_id', $customerId)->get();

        //     return response()->json($assets);
        // }

        // public function getAssetsByCustomerId($id)
        // {
        //     // ดึงข้อมูลลูกค้าพร้อมกับสินทรัพย์ที่เกี่ยวข้อง
        //     $customer = Customer::with('assets')->where('id', $id)->first();

        //     // ตรวจสอบว่าลูกค้าและสินทรัพย์ที่ตรงกันหรือไม่
        //     if ($customer) {
        //         // กรองสินทรัพย์ที่ตรงกับ Customer_id
        //         $assets = $customer->assets->filter(function ($asset) use ($id) {
        //             return $asset->Customer_id === $id;
        //         });

        //         if ($assets->isNotEmpty()) {
        //             return response()->json([
        //                 'customer' => $customer,
        //                 'assets' => $assets // ส่งกลับเฉพาะสินทรัพย์ที่ตรงกัน
        //             ]);
        //         } else {
        //             return response()->json(['message' => 'No matching assets found'], 404);
        //         }
        //     } else {
        //         return response()->json(['message' => 'Customer not found'], 404);
        //     }
        // }



        // public function getAssetsByCustomerId($id)
        // {
        //     // ดึงข้อมูลลูกค้าพร้อมกับสินทรัพย์ที่เกี่ยวข้อง
        //     $customer = Customer::with('assets')->where('id', $id)->first();

        //     if ($customer && $customer->assets->isNotEmpty()) {
        //         // ถ้ามีข้อมูลลูกค้าและสินทรัพย์ตรงกัน
        //         return response()->json([
        //             'customer' => $customer,
        //             'assets' => $customer->assets // เปลี่ยนเป็น assets เพราะอาจมีหลายสินทรัพย์
        //         ]);
        //     } else {
        //         return response()->json(['message' => 'No matching assets found'], 404);
        //     }
        // }

        // public function getAssetsByCustomerId(Request $request)
        // {
        //     $customer_id = $request->input('customer_id');
        //     $assets = AssetManage::where('customer_id', $customer_id)->get();

        //     return response()->json($assets);
        // }





        // public function getAssetsByCustomerId(Request $request)
        // {
        //     $customer_id = $request->input('customer_id');
        //     $assets = AssetManage::where('customer_id', $customer_id)->get();

        //     return response()->json($assets);
        // }


        // public function getModelOptions(Request $request)
        // {
        //     $groupId = $request->input('group_id'); // ดึง Group_id จากคำขอ

        //     // ดึงข้อมูล Model_car ที่ตรงกับ Group_id จากตาราง Stat_CarModel
        //     $carModels = DB::table('Stat_CarModel')
        //         ->select('Model_car', 'Group_id')
        //         ->where('Group_id', $groupId) // กรองตาม Group_id
        //         ->distinct() // กรองข้อมูลที่ไม่ซ้ำกัน
        //         ->get();

        //     // ดึงข้อมูล Model_moto ที่ตรงกับ Group_id จากตาราง Stat_MotoModel
        //     $motoModels = DB::table('Stat_MotoModel')
        //         ->select('Model_moto', 'Group_id')
        //         ->where('Group_id', $groupId) // กรองตาม Group_id
        //         ->distinct() // กรองข้อมูลที่ไม่ซ้ำกัน
        //         ->get();

        //     // รวมข้อมูลโมเดลของรถยนต์และมอเตอร์ไซค์
        //     $models = [
        //         'carModels' => $carModels,
        //         'motoModels' => $motoModels,
        //     ];

        //     return response()->json($models);
        // }




        // public function getYearOptions()
        // {
        //     // ดึงข้อมูล Year_car, Brand_id, Group_id, Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_CarYear
        //     $carYears = DB::table('Stat_CarYear')
        //         ->select('Year_car', 'Group_id',)
        //         ->distinct()
        //         ->get();

        //     // ดึงข้อมูล Year_moto, Brand_id, Group_id, Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoYear
        //     $motoYears = DB::table('Stat_MotoYear')
        //         ->select('Year_moto', 'Group_id',)
        //         ->distinct()
        //         ->get();

        //     // รวมข้อมูลปีของรถยนต์และมอเตอร์ไซค์
        //     $years = [
        //         'carYears' => $carYears,
        //         'motoYears' => $motoYears,
        //     ];

        //     // dd($years);
        //     return response()->json($years);
        // }


// public function getYearOptions()
// {
//     // ดึงข้อมูล Year_car, Brand_id, Group_id, Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_CarYear
//     $carYears = DB::table('Stat_CarYear')
//         ->select('Year_car', 'Brand_id', 'Group_id', 'Ratetype_id')
//         ->distinct()
//         ->get();

//     // ดึงข้อมูล Year_moto, Brand_id, Group_id, Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoYear
//     $motoYears = DB::table('Stat_MotoYear')
//         ->select('Year_moto', 'Brand_id', 'Group_id', 'Ratetype_id')
//         ->distinct()
//         ->get();

//     // รวมข้อมูลปีของรถยนต์และมอเตอร์ไซค์
//     $years = [
//         'carYears' => $carYears,
//         'motoYears' => $motoYears,
//     ];

//     // dd($years);
//     return response()->json($years);
// }



 // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // กรองตาม Brand_id
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // กรองตาม RateType_id
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // กรองตาม Brand_id
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // กรองตาม RateType_id
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูลมอเตอร์ไซค์เสมอ ไม่ต้องตรวจสอบ name_vehicle
        //     $motoGroups = $motoGroupsQuery->get();

        //     // ตรวจสอบว่า $motoGroups มีค่าเป็นคอลเลกชันว่างหรือไม่
        //     if ($motoGroups->isEmpty()) {
        //         // สามารถตั้งค่าให้เป็น array ว่างหรือคืนค่าที่คุณต้องการ
        //         $motoGroups = [];
        //     }

        //     if ($carGroups->isEmpty()) {
        //         // สามารถตั้งค่าให้เป็น array ว่างหรือคืนค่าที่คุณต้องการ
        //         $carGroups = [];
        //     }

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // dd($motoGroups);

        //     // ส่งข้อมูลกลับในรูปแบบ JSON โดยส่งค่าทีละตัว
        //     return response()->json([
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ]);
        // }





        // public function getModelOptions(Request $request)
        // {
        //     // ตรวจสอบว่า group_id ถูกส่งเข้ามาหรือไม่
        //     $groupId = $request->input('group_id');

        //     // ดึงข้อมูล Model_car ที่ไม่ซ้ำกันจากตาราง Stat_CarModel โดยเชื่อมโยงกับ Stat_CarGroup
        //     $carModelsQuery = DB::table('Stat_CarModel')
        //         ->select('Model_car')
        //         ->where('Group_id', $groupId);

        //     // ดึงข้อมูล Model_moto ที่ไม่ซ้ำกันจากตาราง Stat_MotoModel
        //     $motoModels = DB::table('Stat_MotoModel')
        //         ->select('Model_moto')
        //         ->get();

        //     // รวมข้อมูลโมเดลของรถยนต์และมอเตอร์ไซค์
        //     $models = [
        //         'carModels' => $carModelsQuery->get(),
        //         'motoModels' => $motoModels,
        //     ];

        //     return response()->json($models);
        // }





// public function getYearOptions()
// {
//     // ดึงข้อมูล Year_car, Brand_id, Group_id, Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_CarYear
//     $carYears = DB::table('Stat_CarYear')
//         ->select('Year_car', 'Brand_id', 'Group_id', 'Ratetype_id')
//         ->distinct()
//         ->get();

//     // ดึงข้อมูล Year_moto, Brand_id, Group_id, Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoYear
//     $motoYears = DB::table('Stat_MotoYear')
//         ->select('Year_moto', 'Brand_id', 'Group_id', 'Ratetype_id')
//         ->distinct()
//         ->get();

//     // รวมข้อมูลปีของรถยนต์และมอเตอร์ไซค์
//     $years = [
//         'carYears' => $carYears,
//         'motoYears' => $motoYears,
//     ];

//     dd($years);
//     return response()->json($years);
// }



// public function getModelOptions(Request $request)
// {
//     // รับค่าจาก AJAX
//     $groupId = $request->input('group_id');

//     // ตรวจสอบว่าค่าที่ส่งเข้ามาถูกต้อง
//     if (empty($groupId)) {
//         return response()->json(['error' => 'Invalid Group ID'], 400);
//     }

//     // ดึงข้อมูลรุ่นรถยนต์ที่ตรงกับ Group_id
//     $carModels = StatCarModel::where('Group_id', $groupId)->get();

//     // ตรวจสอบข้อมูลที่ดึงมา
//     if ($carModels->isEmpty()) {
//         return response()->json(['error' => 'No models found for this Group ID'], 404);
//     }

//     return response()->json([
//         'carModels' => $carModels,
//         'motoModels' => [], // ถ้ามีข้อมูลสำหรับมอเตอร์ไซค์ ให้ใส่ที่นี่
//     ]);
// }

// public function getModelOptions(Request $request)
// {
//     $groupId = $request->input('group_id');

//     // ตรวจสอบว่าค่าที่ส่งเข้ามาถูกต้อง
//     if (empty($groupId)) {
//         return response()->json(['error' => 'Invalid Group ID'], 400);
//     }

//     // ดึงข้อมูลรุ่นรถยนต์ที่ตรงกับ Group_id
//     $carModels = StatCarModel::where('Group_id', $groupId)->get();

//     // ตรวจสอบข้อมูลที่ดึงมา
//     if ($carModels->isEmpty()) {
//         return response()->json(['error' => 'No models found for this Group ID'], 404);
//     }

//     return response()->json([
//         'carModels' => $carModels,
//         'motoModels' => [], // ถ้ามีข้อมูลสำหรับมอเตอร์ไซค์ ให้ใส่ที่นี่
//     ]);
// }





// public function getModelOptions(Request $request)
// {
//     $groupId = $request->input('group_id'); // รับค่า Group_id จาก AJAX

//     // ตรวจสอบ Group_id และดึงข้อมูล Model_car ที่มี Group_id ตรงกัน
//     $carModels = DB::table('Stat_CarModel')
//         ->where('Group_id', $groupId)
//         ->select('Model_car', 'Group_id')
//         ->get();

//     // ดึงข้อมูล Model_moto ที่มี Group_id ตรงกัน
//     $motoModels = DB::table('Stat_MotoModel')
//         ->where('Group_id', $groupId)
//         ->select('Model_moto', 'Group_id')
//         ->get();

//     return response()->json([
//         'carModels' => $carModels,
//         'motoModels' => $motoModels,
//     ]);
// }



// public function getModelOptions(Request $request)
// {
//     // ดึงข้อมูล Model_car และ Group_car ที่ Group_id ตรงกับ id ใน Stat_CarGroup
//     $carModels = DB::table('Stat_CarModel')
//         ->join('Stat_CarGroup', 'Stat_CarModel.Group_id', '=', 'Stat_CarGroup.id')
//         ->select('Stat_CarModel.Model_car', 'Stat_CarGroup.Group_car', 'Stat_CarModel.Group_id')
//         ->get();

//     // ดึงข้อมูล Model_moto ตามเงื่อนไขที่ต้องการ
//     $motoModels = DB::table('Stat_MotoModel')
//         ->select('Model_moto')
//         ->get();

//     // ตรวจสอบค่าที่ดึงมา
//     // dd($carModels, $motoModels);

//     return response()->json([
//         'carModels' => $carModels,
//         'motoModels' => $motoModels,
//     ]);
// }






        // public function getYearOptions(Request $request)
        // {
        //     // dd($request->all());
        //     // สร้าง query สำหรับปีรถยนต์และมอเตอร์ไซค์
        //     $carYearQuery = DB::table('Stat_CarYear')->select('id', 'Year_car')->distinct();
        //     $motoYearQuery = DB::table('Stat_MotoYear')->select('id', 'Year_moto')->distinct();

        //     // ข้อมูลเงื่อนไขการกรอง
        //     $filters = [
        //         'brand_id' => 'Brand_id',
        //         'group_id' => 'Group_id',
        //         'model_id' => 'Model_id',
        //         'ratetype_id' => 'RateType_id'
        //     ];

        //     // ใช้เงื่อนไขการกรองกับทั้ง carYearQuery และ motoYearQuery
        //     foreach ($filters as $requestKey => $column) {
        //         if ($request->has($requestKey)) {
        //             $value = $request->input($requestKey);
        //             $carYearQuery->where($column, $value);
        //             $motoYearQuery->where($column, $value);
        //         }
        //     }

        //     // ดึงข้อมูลปี
        //     $carYears = $carYearQuery->get();
        //     $motoYears = $motoYearQuery->get();

        //     // รวมข้อมูลปีของรถยนต์และมอเตอร์ไซค์
        //     return response()->json([
        //         'carYears' => $carYears,
        //         'motoYears' => $motoYears,
        //     ]);
        // }


        // public function getYearOptions(Request $request)
        // {
        //     // dd($request->all());

        //     // ดึงข้อมูล Year_car จากตาราง Stat_CarYear และกรองตาม Brand_id, Group_id, Model_id, และ RateType_id
        //     $carYearQuery = DB::table('Stat_CarYear')->select('id', 'Year_car')->distinct();
        //     $motoYearQuery = DB::table('Stat_MotoYear')->select('id', 'Year_moto')->distinct();

        //     // ข้อมูลเงื่อนไขการกรอง
        //     $filters = [
        //         'brand_id' => 'Brand_id',
        //         'group_id' => 'Group_id',
        //         'model_id' => 'Model_id',
        //         'ratetype_id' => 'RateType_id'
        //     ];

        //     // ใช้เงื่อนไขการกรองกับทั้ง carYearQuery และ motoYearQuery
        //     foreach ($filters as $requestKey => $column) {
        //         if ($request->has($requestKey)) {
        //             $carYearQuery->where($column, $request->input($requestKey));
        //             $motoYearQuery->where($column, $request->input($requestKey));
        //         }
        //     }

        //     $carYears = $carYearQuery->get();
        //     $motoYears = $motoYearQuery->get();

        //     // รวมข้อมูลปีของรถยนต์และมอเตอร์ไซค์
        //     $years = [
        //         'carYears' => $carYears,
        //         'motoYears' => $motoYears,
        //     ];

        //     return response()->json($years);
        // }

        // public function getYearOptions(Request $request)
        // {
        //     // สร้าง query สำหรับปีรถยนต์
        //     $carYearQuery = DB::table('Stat_CarYear')->select('id', 'Year_car')->distinct();

        //     // ข้อมูลเงื่อนไขการกรอง
        //     $filters = [
        //         'brand_id' => 'Brand_id',
        //         'group_id' => 'Group_id',
        //         'model_id' => 'Model_id',
        //         'ratetype_id' => 'RateType_id'
        //     ];

        //     // ใช้เงื่อนไขการกรองกับ carYearQuery
        //     foreach ($filters as $requestKey => $column) {
        //         if ($request->has($requestKey)) {
        //             $value = $request->input($requestKey);
        //             $carYearQuery->where($column, $value);
        //         }
        //     }

        //     // ดึงข้อมูลปี
        //     $carYears = $carYearQuery->get();

        //     // ส่งข้อมูลปีรถยนต์กลับในรูปแบบ JSON
        //     return response()->json([
        //         'carYears' => $carYears,
        //     ]);
        // }




            // แสดง log ของ motoGroups
            // \Log::info('Car Groups:', $carGroups->toArray()); // แปลงเป็น array ก่อนบันทึก log
            // \Log::info('Moto Groups:', $motoGroups->toArray()); // แปลงเป็น array ก่อนบันทึก log


            // \Log::info('Request Data:', $request->all());


  // public function getGroupCarOptions(Request $request)
        // {
        //     // ตรวจสอบค่าที่ส่งมาจาก AJAX
        //     \Log::info($request->all());

        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // กรองตาม Brand_id
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // กรองตาม RateType_id
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // กรองตาม Brand_id
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // กรองตาม RateType_id
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ตรวจสอบว่า name_vehicle เป็นรถจักรยานยนต์หรือไม่
        //     $motoGroups = collect(); // กำหนดให้เป็นคอลเลกชันว่างก่อน

        //     if ($request->has('name_vehicle') && $request->input('name_vehicle') === 'รถจักรยานยนต์') {
        //         // ดึงข้อมูลหากเป็นรถจักรยานยนต์
        //         $motoGroups = $motoGroupsQuery->get();
        //     }

        //     // ตรวจสอบว่า $motoGroups มีค่าเป็นคอลเลกชันว่างหรือไม่
        //     if ($motoGroups->isEmpty()) {
        //         // สามารถตั้งค่าให้เป็น array ว่างหรือคืนค่าที่คุณต้องการ
        //         $motoGroups = [];
        //     }

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     // ส่งข้อมูลกลับในรูปแบบ JSON
        //     return response()->json($groups);
        // }







        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // เช็คว่า name_vehicle เป็นรถจักรยานยนต์หรือไม่
        //     $motoGroups = collect(); // กำหนดให้เป็นคอลเลกชันว่างก่อน

        //     if ($request->has('name_vehicle') && $request->input('name_vehicle') === 'รถจักรยานยนต์') {
        //         // ดึงข้อมูลหากเป็นรถจักรยานยนต์
        //         $motoGroups = $motoGroupsQuery->get();
        //     }

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     // dd($carGroups);
        //     dd($motoGroups);

        //     return response()->json($groups);
        // }






 // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // เช็คว่า name_vehicle เป็นรถจักรยานยนต์หรือไม่
        //     $motoGroups = collect(); // กำหนดให้เป็นคอลเลกชันว่างก่อน

        //     if ($request->has('name_vehicle') && $request->input('name_vehicle') === 'รถจักรยานยนต์') {
        //         $motoGroups = $motoGroupsQuery->get(); // ดึงข้อมูลหากเป็นรถจักรยานยนต์
        //     }


        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     // dd($carGroups);
        //     // dd($motoGroups);

        //     return response()->json($groups);
        // }



        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // เช็คว่า name_vehicle เป็นรถจักรยานยนต์หรือไม่
        //     $motoGroups = collect(); // กำหนดให้เป็นคอลเลกชันว่างก่อน

        //     if ($request->has('name_vehicle') && $request->input('name_vehicle') === 'รถจักรยานยนต์') {
        //         $motoGroups = $motoGroupsQuery->get(); // ดึงข้อมูลหากเป็นรถจักรยานยนต์
        //     }

        //     // ดีบั๊กค่าที่ส่งเข้ามา
        //     // dd($request->all(), $motoGroups);

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     return response()->json($groups);
        // }



        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // เช็คว่า name_vehicle เป็นรถจักรยานยนต์หรือไม่
        //     if ($request->has('name_vehicle') && $request->input('name_vehicle') === 'รถจักรยานยนต์') {
        //         $motoGroups = $motoGroupsQuery->get();
        //     } else {
        //         $motoGroups = collect(); // หากไม่ตรงกับเงื่อนไขให้กลับเป็นคอลเลกชันว่าง
        //     }

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     // แสดงข้อมูลสำหรับการดีบั๊ก
        //     // dd($carGroups);
        //     // dd($motoGroups);

        //     return response()->json($groups);
        // }



        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_moto
        //     $motoGroups = $motoGroupsQuery->get();

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     // แสดงข้อมูลสำหรับการดีบั๊ก
        //     dd($carGroups);
        //     dd($motoGroups);

        //     return response()->json($groups);
        // }


        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_moto
        //     $motoGroups = $motoGroupsQuery->get();

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     dd($carGroups);
        //     dd($motoGroups);

        //     return response()->json($groups);
        // }


        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $brandId = $request->input('brand_id');
        //         $carGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $rateTypeId = $request->input('ratetype_id');
        //         $carGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_car
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroupsQuery = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id');

        //     // ตรวจสอบว่ามีการส่ง Brand_id หรือไม่
        //     if ($request->has('brand_id')) {
        //         $motoGroupsQuery->where('Brand_id', $brandId);
        //     }

        //     // ตรวจสอบว่ามีการส่ง RateType_id หรือไม่
        //     if ($request->has('ratetype_id')) {
        //         $motoGroupsQuery->where('RateType_id', $rateTypeId);
        //     }

        //     // ดึงข้อมูล Group_moto
        //     $motoGroups = $motoGroupsQuery->get();

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = $brandsData['carBrands'] ?? [];
        //     $motoBrands = $brandsData['motoBrands'] ?? [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     // dd($carGroups);
        //     // dd($motoGroups);

        //     return response()->json($groups);
        // }









        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroups = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id')->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id')->get();

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = isset($brandsData['carBrands']) ? $brandsData['carBrands'] : [];
        //     $motoBrands = isset($brandsData['motoBrands']) ? $brandsData['motoBrands'] : [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     dd($carGroups);
        //     dd($motoGroups);

        //     return response()->json($groups);
        // }


        // public function getGroupCarOptions()
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroups = DB::table('Stat_CarGroup')
        //         ->select('Group_car', 'RateType_id', 'Brand_id')
        //         ->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')
        //         ->select('Group_moto', 'RateType_id', 'Brand_id')
        //         ->get();

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //     ];

        //     dd($carGroups);
        //     dd($motoGroups);

        //     return response()->json($groups);
        // }




     // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroups = DB::table('Stat_CarGroup')
        //         ->select('Group_car', 'RateType_id', 'Brand_id')
        //         ->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')
        //         ->select('Group_moto', 'RateType_id', 'Brand_id')
        //         ->get();

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $brandsData['carBrands'],
        //         'motoBrands' => $brandsData['motoBrands'],
        //     ];

        //     // dd($carGroups);
        //     // dd($motoGroups);

        //     return response()->json($groups);
        // }



        // public function getGroupCarOptions(Request $request)
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroups = DB::table('Stat_CarGroup')->select('Group_car', 'RateType_id', 'Brand_id')->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')->select('Group_moto', 'RateType_id', 'Brand_id')->get();

        //     // เรียกใช้ getBrandOptions เพื่อดึงข้อมูลแบรนด์
        //     $brandsResponse = $this->getBrandOptions($request);

        //     // แปลงข้อมูล JSON ที่ได้จาก getBrandOptions
        //     $brandsData = json_decode($brandsResponse->getContent(), true);

        //     // ตรวจสอบว่า carBrands และ motoBrands มีค่าหรือไม่
        //     $carBrands = isset($brandsData['carBrands']) ? $brandsData['carBrands'] : [];
        //     $motoBrands = isset($brandsData['motoBrands']) ? $brandsData['motoBrands'] : [];

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     dd($carGroups);
        //     dd($motoGroups);

        //     return response()->json($groups);
        // }










        // public function getGroupCarOptions(Request $request)
        // {
        //     // รับ ratetype_id และ brand_ids จาก request
        //     $ratetypeId = $request->input('ratetype_id');
        //     $brandIds = $request->input('brand_ids'); // อาจจะส่งเป็น array ของ brand_id

        //     // แสดงค่าที่รับมา
        //     dd([
        //         'ratetypeId' => $ratetypeId,
        //         'brandIds' => $brandIds,
        //     ]);

        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')
        //         ->select('Group_car', 'RateType_id', 'Brand_id')
        //         ->where('RateType_id', $ratetypeId); // กรองด้วย ratetype_id

        //     // หาก brand_ids ถูกส่งมา จะใช้ whereIn เพื่อกรองด้วย Brand_id
        //     if ($brandIds) {
        //         $carGroupsQuery->whereIn('Brand_id', $brandIds);
        //     }

        //     // ดึงข้อมูลกลุ่มรถที่ตรงกับเงื่อนไข
        //     $carGroups = $carGroupsQuery->get();

        //     // แสดงข้อมูลกลุ่มรถ
        //     dd($carGroups);

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')
        //         ->select('Group_moto', 'RateType_id', 'Brand_id')
        //         ->where('RateType_id', $ratetypeId) // กรองด้วย ratetype_id
        //         ->get();

        //     // แสดงข้อมูลกลุ่มมอเตอร์ไซค์
        //     dd($motoGroups);

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //     ];

        //     return response()->json($groups);
        // }




        // public function getGroupCarOptions(Request $request)
        // {
        //     // รับ ratetype_id และ brand_ids จาก request
        //     $ratetypeId = $request->input('ratetype_id');
        //     $brandIds = $request->input('brand_ids'); // อาจจะส่งเป็น array ของ brand_id

        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroupsQuery = DB::table('Stat_CarGroup')
        //         ->select('Group_car', 'RateType_id', 'Brand_id')
        //         ->where('RateType_id', $ratetypeId); // กรองด้วย ratetype_id

        //     // หาก brand_ids ถูกส่งมา จะใช้ whereIn เพื่อกรองด้วย Brand_id
        //     if ($brandIds) {
        //         $carGroupsQuery->whereIn('Brand_id', $brandIds);
        //     }

        //     // ดึงข้อมูลกลุ่มรถที่ตรงกับเงื่อนไข
        //     $carGroups = $carGroupsQuery->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')
        //         ->select('Group_moto', 'RateType_id', 'Brand_id')
        //         ->where('RateType_id', $ratetypeId) // กรองด้วย ratetype_id
        //         ->get();

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //     ];

        //     return response()->json($groups);
        // }


        // public function getGroupCarOptions()
        // {
        //     // ดึงข้อมูล Group_car, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroups = DB::table('Stat_CarGroup')
        //         ->select('Group_car', 'RateType_id', 'Brand_id')
        //         ->distinct()
        //         ->get();

        //     // ดึงข้อมูล Group_moto, RateType_id, และ Brand_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')
        //         ->select('Group_moto', 'RateType_id', 'Brand_id')
        //         ->distinct()
        //         ->get();

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //     ];

        //     return response()->json($groups);
        // }



        // public function getGroupCarOptions()
        // {
        //     // ดึงข้อมูล Group_car ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carGroups = DB::table('Stat_CarGroup')
        //         ->select('Group_car')
        //         // ->distinct()
        //         ->get();

        //     // ดึงข้อมูล Group_moto ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoGroups = DB::table('Stat_MotoGroup')
        //         ->select('Group_moto')
        //         // ->distinct()
        //         ->get();

        //     // รวมข้อมูลกลุ่มรถและกลุ่มมอเตอร์ไซค์
        //     $groups = [
        //         'carGroups' => $carGroups,
        //         'motoGroups' => $motoGroups,
        //     ];

        //     return response()->json($groups);
        // }


 // public function getBrandOptions(Request $request)
        // {
        //     // รับ ratetype_id จาก request
        //     $ratetypeId = $request->input('ratetype_id');

        //     // กำหนดเงื่อนไขสำหรับกรณีที่ ratetype_id เป็น 'C01' และ Name_Vehicle เป็น 'รถเก๋งส่วนบุคคล' หรือ 'รถเก๋งรับจ้าง'
        //     if ($ratetypeId === 'C01') {
        //         $vehicleNames = DB::table('TB_TypeVehicle')
        //             ->whereIn('Name_Vehicle', ['รถเก๋งส่วนบุคคล', 'รถเก๋งรับจ้าง'])
        //             ->distinct()
        //             ->exists();

        //         if ($vehicleNames) {
        //             // ดึงข้อมูล Brand_car และ id ตาม id ที่ต้องการ
        //             $carBrands = DB::table('Stat_CarBrand')
        //                 ->select('Brand_car', 'id')
        //                 ->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 14, 20, 22, 23, 26, 27])
        //                 ->get();

        //             // ไม่ต้องดึงข้อมูล motoBrands ในกรณีนี้
        //             $brands = [
        //                 'carBrands' => $carBrands,
        //                 'motoBrands' => collect(),
        //             ];
        //         } else {
        //             // กรณีไม่มีข้อมูลที่ตรงเงื่อนไข
        //             $brands = [
        //                 'carBrands' => collect(),
        //                 'motoBrands' => collect(),
        //             ];
        //         }
        //     } else {
        //         // กรณี ratetype_id ไม่ใช่ 'C01' จะดึงข้อมูลทั้งหมด
        //         $carBrands = DB::table('Stat_CarBrand')
        //             ->select('Brand_car', 'id')
        //             ->get();

        //         $motoBrands = DB::table('Stat_MotoBrand')
        //             ->select('Brand_moto', 'id')
        //             ->get();

        //         $brands = [
        //             'carBrands' => $carBrands,
        //             'motoBrands' => $motoBrands,
        //         ];
        //     }

        //     return response()->json($brands);
        // }




        // public function getBrandOptions()
        // {
        //     // ดึงข้อมูล Brand_car ที่ไม่ซ้ำกันจากตาราง Stat_CarBrand
        //     $carBrands = DB::table('Stat_CarBrand')
        //         ->select('Brand_car', 'id') // เพิ่ม id
        //         ->get();

        //     // ดึงข้อมูล Brand_moto ที่ไม่ซ้ำกันจากตาราง Stat_MotoBrand
        //     $motoBrands = DB::table('Stat_MotoBrand')
        //         ->select('Brand_moto', 'id') // เพิ่ม id
        //         ->get();

        //     // รวมข้อมูลแบรนด์รถยนต์และมอเตอร์ไซค์
        //     $brands = [
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     return response()->json($brands);
        // }





        // public function getBrandOptions(Request $request)
        // {
        //     // ตรวจสอบว่ามี Ratetype_id ถูกส่งเข้ามาหรือไม่
        //     $ratetypeId = $request->input('ratetype_id');

        //     // ตรวจสอบค่า Name_Vehicle
        //     $vehicleNames = collect(); // สร้าง collection สำหรับ vehicle names

        //     if ($ratetypeId === 'C01') {
        //         $vehicleNames = DB::table('TB_TypeVehicle')
        //             ->whereIn('Name_Vehicle', ['รถเก๋งส่วนบุคคล', 'รถเก๋งรับจ้าง'])
        //             ->distinct()
        //             ->pluck('Name_Vehicle'); // ดึงค่า Name_Vehicle

        //         // เช็คว่ามี Name_Vehicle ที่ตรงกันหรือไม่
        //         if ($vehicleNames->isNotEmpty()) {
        //             // ดึงข้อมูล Brand_car ที่ id ตามที่ระบุ
        //             $carBrands = DB::table('Stat_CarBrand')
        //                 ->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 14, 20, 22, 23, 26, 27])
        //                 ->get();
        //         } else {
        //             // ถ้าไม่มี Name_Vehicle ที่ตรงกัน ส่งค่ากลับเป็น array ว่าง
        //             $carBrands = collect();
        //         }
        //     } else {
        //         // ดึงข้อมูล Brand_car ที่ไม่ซ้ำกันจากตาราง Stat_CarBrand
        //         $carBrands = DB::table('Stat_CarBrand')
        //             ->select('Brand_car', 'id') // เพิ่ม id
        //             ->get();
        //     }

        //     // ดึงข้อมูล Brand_moto ที่ไม่ซ้ำกันจากตาราง Stat_MotoBrand
        //     $motoBrands = DB::table('Stat_MotoBrand')
        //         ->select('Brand_moto', 'id') // เพิ่ม id
        //         ->get();

        //     // รวมข้อมูลแบรนด์รถยนต์และมอเตอร์ไซค์
        //     $brands = [
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     return response()->json($brands);
        // }



        // public function getBrandOptions()
        // {
        //     // ดึงข้อมูล Brand_car ที่ไม่ซ้ำกันจากตาราง Stat_CarBrand
        //     $carBrands = DB::table('Stat_CarBrand')
        //         ->select('Brand_car')
        //         // ->distinct()
        //         ->get();

        //     // ดึงข้อมูล Brand_moto ที่ไม่ซ้ำกันจากตาราง Stat_MotoBrand
        //     $motoBrands = DB::table('Stat_MotoBrand')
        //         ->select('Brand_moto')
        //         // ->distinct()
        //         ->get();

        //     // รวมข้อมูลแบรนด์รถยนต์และมอเตอร์ไซค์
        //     $brands = [
        //         'carBrands' => $carBrands,
        //         'motoBrands' => $motoBrands,
        //     ];

        //     return response()->json($brands);
        // }


        // public function getVehicleNames()
        // {
        //     // ดึงข้อมูล Name_Vehicle ที่ไม่ซ้ำกันจากตาราง TB_TypeVehicle
        //     $vehicleNames = DB::table('TB_TypeVehicle')
        //         ->select('Name_Vehicle')
        //         ->distinct()
        //         ->get();

        //     return response()->json($vehicleNames);
        // }


        // public function getRatetypeOptions()
        // {
        //     // ดึงข้อมูล Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carTypes = DB::table('Stat_CarGroup')
        //         ->select('Ratetype_id')
        //         ->distinct()
        //         ->get();

        //     // ดึงข้อมูล Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoTypes = DB::table('Stat_MotoGroup')
        //         ->select('Ratetype_id')
        //         ->distinct()
        //         ->get();

        //     // รวมข้อมูลทั้งสองตาราง
        //     $combinedOptions = $carTypes->merge($motoTypes)->unique('Ratetype_id')->values();

        //     // สร้าง array สำหรับแมพ Ratetype_id กับชื่อประเภท
        //     $typeNames = [
        //         'C01' => 'รถเก๋ง',
        //         'C02' => 'กระบะตอนเดียว',
        //         'C03' => 'กระบะแค็บ',
        //         'C04' => 'กระบะ 4 ประตู',
        //         'C05' => 'รถตู้',
        //         'C06' => 'รถใหญ่',
        //         'M01' => 'รถเกียร์ธรรมดา',
        //         'M02' => 'รถเกียร์ออโต้',
        //         'M03' => 'รถ BigBike'
        //     ];

        //     // แมพค่า Ratetype_id กับชื่อประเภท
        //     $optionsWithNames = $combinedOptions->map(function ($item) use ($typeNames) {
        //         return [
        //             'id' => $item->Ratetype_id,
        //             'name' => $typeNames[$item->Ratetype_id] ?? 'ไม่ระบุ'
        //         ];
        //     });

        //     return response()->json($optionsWithNames);
        // }




        // public function getYearOptions()
        // {
        //     // ดึงข้อมูล Year_car ที่ไม่ซ้ำกันจากตาราง Stat_CarYear
        //     $yearOptions = DB::table('Stat_CarYear')
        //         ->select('Year_car')
        //         ->distinct()
        //         ->get();

        //     return response()->json($yearOptions);
        // }




        // public function getModelCarOptions()
        // {
        //     // ดึงข้อมูล Model_car ที่ไม่ซ้ำกันจากตาราง Stat_CarModel
        //     $modelCarOptions = DB::table('Stat_CarModel')
        //         ->select('Model_car')
        //         ->distinct()
        //         ->get();

        //     return response()->json($modelCarOptions);
        // }



        // public function getGroupCarOptions()
        // {
        //     // ดึงข้อมูล Group_car ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $groupCarOptions = DB::table('Stat_CarGroup')
        //         ->select('Group_car')
        //         ->distinct()
        //         ->get();

        //     return response()->json($groupCarOptions);
        // }


        // public function getBrandOptions()
        // {
        //     // ดึงข้อมูล Brand_car ที่ไม่ซ้ำกันจากตาราง Stat_CarBrand
        //     $brandOptions = DB::table('Stat_CarBrand')
        //         ->select('Brand_car')
        //         ->distinct()
        //         ->get();

        //     return response()->json($brandOptions);
        // }


        // public function getRatetypeOptions()
        // {
        //     // ดึงข้อมูล Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $carTypes = DB::table('Stat_CarGroup')
        //         ->select('Ratetype_id')
        //         ->distinct()
        //         ->get();

        //     // ดึงข้อมูล Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_MotoGroup
        //     $motoTypes = DB::table('Stat_MotoGroup')
        //         ->select('Ratetype_id')
        //         ->distinct()
        //         ->get();

        //     // รวมข้อมูลทั้งสองตาราง
        //     $combinedOptions = $carTypes->merge($motoTypes)->unique('Ratetype_id')->values();

        //     return response()->json($combinedOptions);
        // }



        // public function getRatetypeOptions()
        // {
        //     // ดึงข้อมูล Ratetype_id ที่ไม่ซ้ำกันจากตาราง Stat_CarGroup
        //     $ratetypeOptions = DB::table('Stat_CarGroup')
        //         ->select('Ratetype_id')
        //         ->distinct()
        //         ->get();

        //     return response()->json($ratetypeOptions);
        // }



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
