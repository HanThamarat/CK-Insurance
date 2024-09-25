<!-- Car Modal -->
<div id="DataAssetsModal"
    class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50 modal "> <!--p-6-->
    <div class="relative bg-white rounded-lg w-full max-w-screen-lg  max-h-screen overflow-auto scrollbar-hidden mt-12 mb-12"
        style="height: 95%;">

        <!-- ส่วนหัว -->
        <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-6"
            style="background-color: white;">
            <button class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
                onclick="closeModal('DataAssetsModal')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="flex items-center space-x-3">
                <img src="https://ckl.co.th/assets/images/gif/suitcase.gif" alt="" class="w-12 h-12">

                <div class="flex-grow">
                    <h5 class="text-orange-400 font-semibold">สร้างทรัพย์ใหม่</h5>
                    <p class="text-muted font-semibold text-sm mt-1">Create New Asset</p>
                    <div class="border-b-2 border-primary mt-2 w-full"></div>
                </div>
            </div>

            <div class="w-full mt-3" id="car-detail" style="display: none;">
                <h5 class="text-orange-400 font-semibold border-b ทะ">รายละเอียดทรัพย์</h5>
                <p class="text-sm font-bold bg-orange-100 border-l-4 border-orange-300 pl-1 mt-1">
                    <i class="fas fa-car"></i> ข้อมูลรถยนต์
                </p>
            </div>

            <div class="w-full mt-3" id="motor-detail" style="display: none;">
                <h5 class="text-orange-400 font-semibold border-b">รายละเอียดทรัพย์</h5>
                <p class="text-sm font-bold bg-orange-100 border-l-4 border-orange-300 pl-1 mt-0">
                    <i class="fas fa-motorcycle"></i> ข้อมูลรถมอเตอร์ไซค์
                </p>
            </div>
        </div>


        {{-- <form action=""> --}}
        {{-- <form action="{{ route('data_assets.index') }}" method="POST">

        @csrf --}}

        <form  id="DataAssetForm">

        <div class="flex flex-col space-y-4 p-6 mt-[-30px]"> <!--ml-[150px]-->

            {{-- Old License  Row --}}

            <div class="mt-0"></div> <!--0mt-6-->
            <div class="relative border border-gray-300 rounded-md p-4 text-gray-700 text-lg mt-12">
                <span class="absolute -top-4 left-2 bg-white px-3 border-md ">ป้ายทะเบียนเก่า</span>

                <input hidden class="" name="Type_Asset" type="text" id="Type_Asset"/>

                <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 mt-4">

                    <legend id="license-info"
                        class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md transform transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg cursor-pointer"
                        style="letter-spacing: 0.1rem;">
                        ป้ายทะเบียนเก่า
                    </legend>



                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_OldLicense_Text" name="Vehicle_OldLicense_Text" type="text"/>
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                            for="Vehicle_OldLicense_Text">
                            อักษร/คำ
                        </label>


                        <!-- Tooltip -->
                        <div id="tooltip"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนเดิม
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px"
                                viewBox="0 0 255 255" xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_OldLicense_Number" name="Vehicle_OldLicense_Number" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                            for="Vehicle_OldLicense_Number">
                            ตัวเลข</label>

                        <!-- Tooltip -->
                        <div id="tooltip-number"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนเดิม
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px"
                                viewBox="0 0 255 255" xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>


                    {{-- <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_OldLicense_Province" name="OldProvince"
                                class="block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->Province_pro }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_OldLicense_Province" name="OldProvince"
                                class="block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->Province_pro }}" data-province="{{ $province->Province_pro }}">
                                        {{ $province->Province_pro }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            {{-- New License  Row --}}

            <div class="mt-6"></div>
            <div class="relative border border-gray-300 rounded-md p-4 text-gray-700 text-lg">
                <span class="absolute -top-4 left-2 bg-white px-3 border-md ">ป้ายทะเบียนใหม่ (เช่าซื้อ)</span>

                <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 mt-4">

                    <legend id="licenseNew-info"
                        class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md transform transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg cursor-pointer"
                        style="letter-spacing: 0.1rem;">
                        ป้ายทะเบียนใหม่
                    </legend>

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_NewLicense_Text" name="Vehicle_NewLicense_Text" type="text" />
                            <label
                            class="absolute top-1/2 translate-y-[-50%] text-gray-600 bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_NewLicense_Text">
                            อักษร/คำ
                        </label>


                        <!-- Tooltip for text input -->
                        <div id="tooltip-new-text"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนใหม่ (ถ้ามี)
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px"
                                viewBox="0 0 255 255" xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_NewLicense_Number" name="Vehicle_NewLicense_Number" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] text-gray-600  bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_NewLicense_Number">
                            ตัวเลข</label>

                        <!-- Tooltip for number input -->
                        <div id="tooltip-new-number"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนใหม่ (ถ้ามี)
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px"
                                viewBox="0 0 255 255" xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_NewLicense_Province" name="NewProvince"
                                class="block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->Province_pro }}">{{ $province->Province_pro }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            {{-- เลขถัง --}}

            {{-- <div class="w-full h-10 relative flex rounded-xl group">
                <input required=""
                    class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                    id="Vehicle_Chassis" name="Vehicle_Chassis" type="text" />
                <label
                    class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                    for="Vehicle_Chassis">
                    เลขถัง
                </label>

                <!-- Tooltip -->
                <div id="tooltip-chassis"
                    class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                    ระบุเลขถังอย่างน้อย 5 หลัก
                    <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px"
                        viewBox="0 0 255 255" xml:space="preserve">
                        <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                    </svg>
                </div>
            </div> --}}

            <div class="w-full h-10 relative flex rounded-xl group">
                <input required=""
                    class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                    id="Vehicle_Chassis" name="Vehicle_Chassis" type="text" />
                <label
                    class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                    for="Vehicle_Chassis">
                    เลขถัง
                </label>
            </div>



            <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                <label class="flex items-center space-x-2 flex-shrink-0">
                    <input type="checkbox" name="new_number_stamping"
                        class="form-checkbox border border-gray-400 rounded-sm">
                    <span class="text-sm">มีกำหนดตอกตัวเลขใหม่</span>
                </label>

                <div class="w-full h-10 relative flex flex-row items-center space-x-2 rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                        id="Vehicle_New_Number" name="Vehicle_New_Number" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] text-gray-600  bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                        for="Vehicle_Newlabel_Number" id="Vehicle_Newlabel_Number">
                        เลขตัวรถไหม่
                    </label>
                </div>
            </div>


            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:border-gray-700 mt-1"
                        id="Vehicle_Engine" name="Vehicle_Engine" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                        for="Vehicle_Engine">
                        เลขเครื่อง
                    </label>
                </div>


                <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                        id="Vehicle_Color" name="Vehicle_Color" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                        for="Vehicle_Color">
                        สีรถ</label>
                </div>

                <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                        id="Vehicle_CC" name="Vehicle_CC" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                        for="Vehicle_CC">
                        CC</label>
                </div>
            </div>



            <div class="mt-6"></div>
            <div class="border border-gray-300 rounded-md p-1">

                <legend class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md"
                    style="letter-spacing: 0.1rem;">
                    ประเภทรถ
                </legend>

                <div class="p-4 xl:p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- ประเภทรถ 1 -->

                            <div class="relative">
                                <select
                                    class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                    id="Vehicle_Type" name="Vehicle_Type" required>
                                    <option value="">-- ประเภทรถ 1 --</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Ratetype_id') as $car)
                                        <option value="{{ $car->Ratetype_id }}" id="car_group" hidden>
                                            @switch($car->Ratetype_id)
                                                @case('C01')
                                                    รถเก๋ง
                                                @break

                                                @case('C02')
                                                    กระบะตอนเดียว
                                                @break

                                                @case('C03')
                                                    กระบะแค็บ
                                                @break

                                                @case('C04')
                                                    กระบะ 4 ประตู
                                                @break

                                                @case('C05')
                                                    รถตู้
                                                @break

                                                @case('C06')
                                                    รถใหญ่
                                                @break

                                                @default
                                                    ประเภทรถ: {{ $car->Ratetype_id }}
                                            @endswitch
                                        </option>
                                    @endforeach

                                    {{-- ลูปรถมอเตอร์ไซค์ --}}
                                    @foreach ($motoGroups->unique('Ratetype_id') as $motogroup)
                                        <option value="{{ $motogroup->Ratetype_id }}" id="moto_group" hidden>
                                            @switch($motogroup->Ratetype_id)
                                                @case('M01')
                                                    เกียร์ธรรมดา
                                                @break

                                                @case('M02')
                                                    เกียร์ออโต้
                                                @break

                                                @case('M03')
                                                    BigBike
                                                @break

                                                @default
                                                    ประเภทรถ: {{ $motogroup->Ratetype_id }}
                                            @endswitch
                                        </option>
                                    @endforeach

                                </select>
                            </div>



                        <!-- ประเภทรถ 2 -->
                        <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Type_PLT" name="Vehicle_Type_PLT" required>
                                <option value="" selected>--- ประเภทรถ 2 ---</option>

                                @foreach ($typeVehicles as $vehicle)
                                    <option hidden value="{{ $vehicle->id }}">{{ $vehicle->Name_Vehicle }}</option>
                                @endforeach
                            </select>
                        </div>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>
                            $(document).ready(function() {
                                // เมื่อมีการเปลี่ยนแปลงที่ select ประเภทรถ 1
                                $('#Vehicle_Type').change(function() {
                                    // รับค่าที่เลือกจาก select ประเภทรถ 1
                                    var selectedValue = $(this).val();

                                    // ลบทุก option ใน select ประเภทรถ 2
                                    $('#Vehicle_Type_PLT').empty();

                                    // เช็คค่าที่เลือกและเพิ่ม option ตามที่ต้องการ
                                    if (selectedValue === 'C01') {
                                        $('#Vehicle_Type_PLT').append('<option value="2">{{ $typeVehicles->where("id", 2)->first()->Name_Vehicle }}</option>');
                                        $('#Vehicle_Type_PLT').append('<option value="3">{{ $typeVehicles->where("id", 3)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'C02') {
                                        $('#Vehicle_Type_PLT').append('<option value="4">{{ $typeVehicles->where("id", 4)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'C03') {
                                        $('#Vehicle_Type_PLT').append('<option value="4">{{ $typeVehicles->where("id", 4)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'C04') {
                                        $('#Vehicle_Type_PLT').append('<option value="4">{{ $typeVehicles->where("id", 4)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'C05') {
                                        $('#Vehicle_Type_PLT').append('<option value="7">{{ $typeVehicles->where("id", 7)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'C06') {
                                        $('#Vehicle_Type_PLT').append('<option value="5">{{ $typeVehicles->where("id", 5)->first()->Name_Vehicle }}</option>');
                                        $('#Vehicle_Type_PLT').append('<option value="6">{{ $typeVehicles->where("id", 6)->first()->Name_Vehicle }}</option>');
                                        $('#Vehicle_Type_PLT').append('<option value="7">{{ $typeVehicles->where("id", 7)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'M01') {
                                        $('#Vehicle_Type_PLT').append('<option value="1">{{ $typeVehicles->where("id", 1)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'M02') {
                                        $('#Vehicle_Type_PLT').append('<option value="1">{{ $typeVehicles->where("id", 1)->first()->Name_Vehicle }}</option>');
                                    } else if (selectedValue === 'M03') {
                                        $('#Vehicle_Type_PLT').append('<option value="1">{{ $typeVehicles->where("id", 1)->first()->Name_Vehicle }}</option>');
                                    } else {
                                        // แสดง option เริ่มต้นเมื่อไม่เลือก
                                        $('#Vehicle_Type_PLT').append('<option value="" selected>--- ประเภทรถ 2 ---</option>');
                                    }
                                });
                            });
                        </script>


                        {{-- ยี่ห้อรถ --}}
                        <div class="relative">
                            <div class="relative">
                                <select
                                    class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                    id="Vehicle_Brand" name="Vehicle_Brand" required>
                                    <option value="">-- ยี่ห้อรถ --</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($carBrands->unique('Brand_car') as $car)
                                        <option hidden id="car_brand" value="{{ $car->Brand_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Brand_car }}</option>
                                    @endforeach

                                    @foreach ($motoBrands->unique('Brand_moto') as $moto)
                                        <option hidden id="moto_brand" value="{{ $moto->Brand_moto }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Brand_moto }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        {{-- กลุ่มรถ --}}
                        @if (isset($cars) && !$cars->isEmpty())
                            <div class="relative">
                                <select
                                    class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                    id="Vehicle_Group" name="Vehicle_Group" required>
                                    <option value="">-- กลุ่มรถ --</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Group_car') as $car)
                                        <option id="car_group_2" value="{{ $car->Group_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Group_car }}</option>
                                    @endforeach

                                    @foreach ($motoGroups->unique('Group_moto') as $moto)
                                        <option id="moto_group_2" value="{{ $moto->Group_moto }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Group_moto }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <p>ไม่มีข้อมูลในตาราง TB_cars</p>
                        @endif



                        @if (isset($cars) && !$cars->isEmpty())
                            <div class="relative">
                                <select
                                    class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                    id="Vehicle_Years" name="Vehicle_Years" required>
                                    <option value="">-- ปีรถ --</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($carYears->unique('Year_car') as $car)
                                        <option id="year_car" value="{{ $car->Year_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Year_car }}</option>
                                    @endforeach

                                    @foreach ($motoYears->unique('Year_moto') as $moto)
                                        <option id="year_moto" value="{{ $moto->Year_moto }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Year_moto }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <p>ไม่มีข้อมูลในตาราง TB_cars</p>
                        @endif


                        @if (isset($cars) && !$cars->isEmpty())
                            <div class="relative">
                                <select
                                    class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                    id="Vehicle_Models" name="Vehicle_Models" required>
                                    <option value="">-- รุ่นรถ --</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($carModels->unique('Model_car') as $car)
                                        <option id="model_car" value="{{ $car->Model_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Model_car }}</option>
                                    @endforeach

                                    @foreach ($motoModels->unique('Model_moto') as $moto)
                                        <option id="model_moto" value="{{ $car->Model_moto }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Model_moto }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <p>ไม่มีข้อมูลในตาราง TB_cars</p>
                        @endif

                        <!-- เกียร์ -->
                        <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Gear" name="Vehicle_Gear" required>
                                <option value="" selected>--- เกียร์รถ ---</option>
                                <option value="manual">Manual</option>
                                <option value="auto">Auto</option>
                            </select>
                        </div>

                    </div>

                </div>
            </div>

            <div class="mt-6"></div>
            <div class="border border-gray-300 rounded-md p-4 flex flex-col gap-4">
                <legend class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md"
                    style="letter-spacing: 0.1rem;">
                    รายละเอียดครอบครอง
                </legend>


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex-1">
                        <select id="Vehicle_InsuranceStatus" name="Vehicle_InsuranceStatus"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 px-3">
                            <option value="" selected>เลือกสถานะประกัน</option>
                            <option value="buy">ซื้อประกัน</option>
                            <option value="existing">มีอยู่แล้ว</option>
                            <option value="none">ไม่มี</option>
                        </select>
                    </div>

                    <!-- รวม jQuery ก่อนปิด </body> -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <style>
                        /* กำหนดสีพื้นหลังให้กับ select ที่ถูก disabled */
                        .disabled-select {
                            background-color: #e5e7eb; /* สีเทาอ่อน */
                            color: #6b7280; /* สีเทาเข้มสำหรับข้อความ */
                        }

                        .disabled-input {
                            background-color: #e5e7eb; /* สีเทาอ่อน */
                            color: #6b7280; /* สีเทาเข้มสำหรับข้อความ */
                            cursor: not-allowed; /* เปลี่ยนเคอร์เซอร์เมื่อ hover */
                        }

                    </style>
                    <script>
                        $(document).ready(function() {
                            // เมื่อมีการเปลี่ยนแปลงใน select ของสถานะประกัน
                            $('#Vehicle_InsuranceStatus').change(function() {
                                // ตรวจสอบค่าที่เลือก
                                var selectedValue = $(this).val();
                                // หากเลือก "ซื้อประกัน" หรือ "มีอยู่แล้ว"
                                if (selectedValue === 'buy' || selectedValue === 'existing') {
                                    // แสดง select ที่ถูก disabled
                                    $('#Vehicle_Class').prop('disabled', false).removeClass('disabled-select');
                                    $('#Vehicle_Companies').prop('disabled', false).removeClass('disabled-select');
                                    $('#Vehicle_PolicyNumber').prop('disabled', false).removeClass('disabled-select');
                                } else {
                                    // ถ้าเลือกค่าอื่นๆ ให้ปิดการใช้งาน
                                    $('#Vehicle_Class').prop('disabled', true).val('').addClass('disabled-select');
                                    $('#Vehicle_Companies').prop('disabled', true).val('').addClass('disabled-select');
                                    $('#Vehicle_PolicyNumber').prop('disabled', true).val('').addClass('disabled-select');
                                }
                            });

                            // เริ่มต้นให้ disabled select มีสีเทา
                            $('#Vehicle_Class').addClass('disabled-select');
                            $('#Vehicle_Companies').addClass('disabled-select');
                            $('#Vehicle_PolicyNumber').addClass('disabled-select');
                        });
                    </script>

                    <script>
                        $(document).ready(function() {
                            // เริ่มต้นให้ input มีสีเทา
                            $('#Vehicle_PolicyNumber').addClass('disabled-input');

                            // เมื่อมีการเปลี่ยนแปลงใน select ของสถานะประกัน
                            $('#Vehicle_InsuranceStatus').change(function() {
                                var selectedValue = $(this).val();

                                // หากเลือก "ซื้อประกัน" หรือ "มีอยู่แล้ว"
                                if (selectedValue === 'buy' || selectedValue === 'existing') {
                                    // เปิดใช้งาน input และเปลี่ยนสีพื้นหลังเป็นปกติ
                                    $('#Vehicle_PolicyNumber').prop('disabled', false).removeClass('disabled-input').css('background-color', 'white');
                                } else {
                                    // ปิดการใช้งาน input และทำให้มีสีเทา
                                    $('#Vehicle_PolicyNumber').prop('disabled', true).val('').addClass('disabled-input').css('background-color', '#e5e7eb');
                                }
                            });
                        });
                    </script>




                    <div class="flex-1">
                        <select disabled id="Vehicle_Class" name="Vehicle_Class"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 px-3">
                            <option value="" selected>เลือกชั้นประกันภัย</option>
                            <option value="1">ชั้น 1</option>
                            <option value="2">ชั้น 2</option>
                            <option value="3">ชั้น 3</option>
                            <option value="2_plus">ชั้น 2+</option>
                            <option value="3_plus">ชั้น 3+</option>
                        </select>
                    </div>

                    <div class="flex-1">
                        <select disabled id="Vehicle_Companies" name="Vehicle_Companies"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 px-3">
                            <option value="" selected>เลือกบริษัทประกันภัย</option>
                            <option value="viriya">วิริยะประกันภัย</option>
                            <option value="allianz">อลิอันซ์ อยุธยา</option>
                        </select>
                    </div>


                    <div class="w-full h-10 relative flex flex-row items-center space-x-2 rounded-xl">
                        <input required="" disabled
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_PolicyNumber" name="Vehicle_PolicyNumber" type="text">
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-3 px-2 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_PolicyNumber">
                            เลขกรมธรรม์
                        </label>
                    </div>
                </div>


                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>


                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9"
                        id="date-stamp-insurance-1" placeholder="วันที่ต่อประกัน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9"
                        id="date-stamp-insurance-2" placeholder="วันประกันหมดอายุ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <div class="relative inline-block w-full">
                        <select id="select-input-insurance" name="Choose_Insurance"
                            class="block w-full p-1.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>


                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9"
                        id="date-stamp-act-1" placeholder="วันที่ต่อ พ.ร.บ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9" id="date-stamp-act-2"
                        placeholder="วัน พ.ร.บ หมดอายุ " name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <div class="relative inline-block w-full">
                        <select id="select-input-act" name="Choose_Act"
                            class="block w-full p-1.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>


                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>

                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9"
                        id="date-stamp-register-1" placeholder="วันที่ต่อทะเบียน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">

                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9"
                        id="date-stamp-register-2" placeholder="วันทะเบียนหมดอายุ" name="date2"
                        style="border-color: rgba(156, 163, 175, 0.5);">

                    <div class="relative inline-block w-full">
                        <select id="select-input-register" name="Choose_Register"
                            class="block w-full p-1.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

            </div>


            <div class="flex justify-end space-x-2">
                <!-- ปุ่ม บันทึก -->
                <button type="submit" id="submitBtn"
                    class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-500 flex items-center space-x-2 transition duration-300">
                    <i class="fas fa-save"></i> <!-- ไอคอน "บันทึก" ของ Font Awesome -->
                    <span>สร้างทรัพย์ใหม่</span>
                </button>

                <!-- ปุ่ม ยกเลิก -->
                <button type="button"
                    class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-400 flex items-center space-x-2 transition duration-300">
                    <i class="fas fa-times"></i> <!-- ไอคอน "ยกเลิก" ของ Font Awesome -->
                    <span>ยกเลิก</span>
                </button>

            </div>
            </form>
        </div>
    </div>
</div>



{{-- CSS Style --}}

<style>
    .scrollbar-hidden::-webkit-scrollbar {
        display: none;
    }
</style>




<!--------------------------------------------------------Ajax API Sweet Alert Create and Store------------------------------------------------------------------------->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function () {
        $('#submitBtn').click(function (e) {
            e.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ

            // ตรวจสอบว่าฟิลด์ที่จำเป็นทั้งหมดถูกกรอกครบหรือไม่
            let valid = true;
            let missingFields = [];

            // ตัวอย่างการตรวจสอบฟิลด์ (คุณสามารถปรับเปลี่ยนให้ตรงกับฟิลด์ของคุณ)
            if ($('#Vehicle_OldLicense_Text').val().trim() === '') {
                valid = false;
                missingFields.push('อักษรป้ายทะเบียนเก่า');
            }

            if ($('#Vehicle_OldLicense_Number').val().trim() === '') {
                valid = false;
                missingFields.push('เลขป้ายทะเบียนเก่า');
            }

            if ($('#Vehicle_OldLicense_Province').val().trim() === '') {
                valid = false;
                missingFields.push('จังหวัดป้ายทะเบียนเก่า');
            }

            if ($('#Vehicle_Chassis').val().trim() === '') {
                valid = false;
                missingFields.push('หมายเลขตัวถังรถ');
            }

            if ($('#Vehicle_Color').val().trim() === '') {
                valid = false;
                missingFields.push('สีรถ');
            }

            if ($('#Vehicle_CC').val().trim() === '') {
                valid = false;
                missingFields.push('CC');
            }

            if ($('#Vehicle_Type').val().trim() === '') {
                valid = false;
                missingFields.push('ประเภทรถ 1');
            }

            if ($('#Vehicle_Type_PLT').val().trim() === '') {
                valid = false;
                missingFields.push('ประเภทรถ 2');
            }

            if ($('#Vehicle_Brand').val().trim() === '') {
                valid = false;
                missingFields.push('ยี่ห้อรถ');
            }

            if ($('#Vehicle_Group').val().trim() === '') {
                valid = false;
                missingFields.push('กลุ่มรถ');
            }

            if ($('#Vehicle_Years').val().trim() === '') {
                valid = false;
                missingFields.push('ปีรถ');
            }

            if ($('#Vehicle_Gear').val().trim() === '') {
                valid = false;
                missingFields.push('เกียร์รถ');
            }

            // ถ้าข้อมูลไม่ครบให้แสดง SweetAlert แจ้งเตือนและไม่ส่งฟอร์ม
            if (!valid) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณากรอกข้อมูลให้ครบถ้วน!',
                    text: missingFields.join(', '),
                    showConfirmButton: true
                });
            } else {
                // ส่งฟอร์มหากข้อมูลครบ
                var formData = new FormData($('#DataAssetForm')[0]); // สร้าง FormData จากฟอร์ม

                $.ajax({
                    url: '/data_assets', // เส้นทางที่เรียกใช้ฟังก์ชัน store
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // เพิ่ม CSRF token
                    },
                    data: formData,
                    processData: false, // สำคัญ: ไม่แปลงข้อมูลเป็น string
                    contentType: false, // สำคัญ: ไม่ตั้งค่า content-type
                    success: function (response) {
                        // ใช้ SweetAlert2 แสดง popup แจ้งเตือนสำเร็จ
                        Swal.fire({
                            icon: 'success',
                            title: 'สำเร็จ!',
                            text: 'สร้างข้อมูลสินทรัพย์สำเร็จ',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            // ทำการ redirect หรือรีเฟรชหน้า
                            window.location.href = "/data_assets";
                        });
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        // ใช้ SweetAlert2 แสดง popup แจ้งเตือนข้อผิดพลาด
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด!',
                            text: 'ระบบมีปัญหากับคำขอของคุณ',
                            footer: errorThrown
                        });
                    }
                });
            }
        });
    });
</script>



<!--------------------------------------------------------jQuery Trick Design------------------------------------------------------------------------->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


    $(document).ready(function() {
        function updateLegend() {
            var textValue = $('#Vehicle_OldLicense_Text').val();
            var numberValue = $('#Vehicle_OldLicense_Number').val();
            var provinceValue = $('#Vehicle_OldLicense_Province').val();
            var provinceText = $('#Vehicle_OldLicense_Province option:selected').text(); // ข้อความของจังหวัดที่เลือก

            var legendText;
            if (textValue || numberValue || provinceValue) {
                // Remove "ป้ายทะเบียนเก่า:" when there is input
                legendText = '<div style="text-align: center;">' + textValue + ' ' + numberValue + '<br>' +
                    provinceText + '</div>'; // ใช้ provinceText แทน provinceValue
            } else {
                // Show "ป้ายทะเบียนเก่า:" when there is no input
                legendText = '<div style="text-align: center;">ป้ายทะเบียนเก่า</div>';
            }

            $('#license-info').html(legendText);
        }

        // Event listeners
        $('#Vehicle_OldLicense_Text, #Vehicle_OldLicense_Number, #Vehicle_OldLicense_Province').on(
            'input change',
            function() {
                updateLegend();
            });

        // Initial call to set the correct legend text
        updateLegend();
    });




    $(document).ready(function() {
        function updateLegendNew() {
            var textValueNew = $('#Vehicle_NewLicense_Text').val();
            var numberValueNew = $('#Vehicle_NewLicense_Number').val();
            var provinceValueNew = $('#Vehicle_NewLicense_Province').val();
            var provinceTextNew = $('#Vehicle_NewLicense_Province option:selected').text(); // ข้อความของจังหวัดที่เลือก

            var legendTextNew;
            if (textValueNew || numberValueNew || provinceValueNew) {
                // Remove "ป้ายทะเบียนเก่า:" when there is input
                legendTextNew = '<div style="text-align: center;">' + textValueNew + ' ' + numberValueNew + '<br>' +
                    provinceTextNew + '</div>'; // ใช้ provinceTextNew แทน provinceValueNew
            } else {
                // Show "ป้ายทะเบียนเก่า:" when there is no input
                legendTextNew = '<div style="text-align: center;">ป้ายทะเบียนใหม่</div>';
            }

            $('#licenseNew-info').html(legendTextNew);
        }

        // Event listeners
        $('#Vehicle_NewLicense_Text, #Vehicle_NewLicense_Number, #Vehicle_NewLicense_Province').on(
            'input change',
            function() {
                updateLegendNew();
            });

        // Initial call to set the correct legend text
        updateLegendNew();
    });




    $(document).ready(function() {
        // ตั้งค่าเริ่มต้นให้ input เป็น disabled
        $("#Vehicle_New_Number")
            .prop("disabled", true)
            .css("background-color", "#f0f0f0"); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน

        // เมื่อสถานะของ checkbox เปลี่ยนแปลง
        $('input[name="new_number_stamping"]').on("change", function() {
            if ($(this).is(":checked")) {
                // ถ้า checkbox ถูกเลือก
                $("#Vehicle_New_Number")
                    .prop("disabled", false)
                    .css("background-color", "#ffffff"); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน
            } else {
                // ถ้า checkbox ไม่ถูกเลือก
                $("#Vehicle_New_Number")
                    .prop("disabled", true)
                    .css("background-color", "#e0e0e0"); // เปลี่ยนสีพื้นหลังเป็นสีเทาเข้ม
            }
        });
    });




    $(document).ready(function() {
        // สำหรับ select-input-register
        $("#select-input-register").change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: "Asia/Bangkok",
                year: "numeric",
                month: "2-digit",
                day: "2-digit",
                hour: "2-digit",
                minute: "2-digit",
                hour12: false,
            };

            if (selectedValue === "") {
                $("#date-stamp-register-1").val(""); // ล้างค่า
                $("#date-stamp-register-2").val(""); // ล้างค่า
                return;
            }

            var currentDateTime = now
                .toLocaleString("th-TH", options)
                .replace(",", ""); // Format: DD/MM/YYYY HH:MM

            if (selectedValue === "7-days") {
                now.setDate(now.getDate() + 7);
            } else if (selectedValue === "1-year") {
                now.setFullYear(now.getFullYear() + 1);
            } else {
                return;
            }

            var futureDateTime = now
                .toLocaleString("th-TH", options)
                .replace(",", ""); // Format: DD/MM/YYYY HH:MM

            $("#date-stamp-register-1").val(currentDateTime);
            $("#date-stamp-register-2").val(futureDateTime);
        });

        // สำหรับ select-input-act
        $("#select-input-act").change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: "Asia/Bangkok",
                year: "numeric",
                month: "2-digit",
                day: "2-digit",
                hour: "2-digit",
                minute: "2-digit",
                hour12: false,
            };

            if (selectedValue === "") {
                $("#date-stamp-act-1").val(""); // ล้างค่า
                $("#date-stamp-act-2").val(""); // ล้างค่า
                return;
            }

            var currentDateTime = now
                .toLocaleString("th-TH", options)
                .replace(",", ""); // Format: DD/MM/YYYY HH:MM

            if (selectedValue === "7-days") {
                now.setDate(now.getDate() + 7);
            } else if (selectedValue === "1-year") {
                now.setFullYear(now.getFullYear() + 1);
            } else {
                return;
            }

            var futureDateTime = now
                .toLocaleString("th-TH", options)
                .replace(",", ""); // Format: DD/MM/YYYY HH:MM

            $("#date-stamp-act-1").val(currentDateTime);
            $("#date-stamp-act-2").val(futureDateTime);
        });

        // สำหรับ select-input-insurance
        $("#select-input-insurance").change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: "Asia/Bangkok",
                year: "numeric",
                month: "2-digit",
                day: "2-digit",
                hour: "2-digit",
                minute: "2-digit",
                hour12: false,
            };

            if (selectedValue === "") {
                $("#date-stamp-insurance-1").val(""); // ล้างค่า
                $("#date-stamp-insurance-2").val(""); // ล้างค่า
                return;
            }

            var currentDateTime = now
                .toLocaleString("th-TH", options)
                .replace(",", ""); // Format: DD/MM/YYYY HH:MM

            if (selectedValue === "7-days") {
                now.setDate(now.getDate() + 7);
            } else if (selectedValue === "1-year") {
                now.setFullYear(now.getFullYear() + 1);
            } else {
                return;
            }

            var futureDateTime = now
                .toLocaleString("th-TH", options)
                .replace(",", ""); // Format: DD/MM/YYYY HH:MM

            $("#date-stamp-insurance-1").val(currentDateTime);
            $("#date-stamp-insurance-2").val(futureDateTime);
        });
    });



    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_OldLicense_Text").hover(
            function() {
                $("#tooltip").show();
            },
            function() {
                $("#tooltip").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_OldLicense_Text").focus(function() {
            $("#tooltip").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_OldLicense_Text").blur(function() {
            $("#Vehicle_OldLicense_Text").hover(
                function() {
                    $("#tooltip").show();
                },
                function() {
                    $("#tooltip").hide();
                }
            );
        });
    });



    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip-number").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_OldLicense_Number").hover(
            function() {
                $("#tooltip-number").show();
            },
            function() {
                $("#tooltip-number").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_OldLicense_Number").focus(function() {
            $("#tooltip-number").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_OldLicense_Number").blur(function() {
            $("#Vehicle_OldLicense_Number").hover(
                function() {
                    $("#tooltip-number").show();
                },
                function() {
                    $("#tooltip-number").hide();
                }
            );
        });
    });



    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip-new-text, #tooltip-new-number").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_NewLicense_Text").hover(
            function() {
                $("#tooltip-new-text").show();
            },
            function() {
                $("#tooltip-new-text").hide();
            }
        );

        $("#Vehicle_NewLicense_Number").hover(
            function() {
                $("#tooltip-new-number").show();
            },
            function() {
                $("#tooltip-new-number").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_NewLicense_Text").focus(function() {
            $("#tooltip-new-text").hide();
        });

        $("#Vehicle_NewLicense_Number").focus(function() {
            $("#tooltip-new-number").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_NewLicense_Text").blur(function() {
            $("#Vehicle_NewLicense_Text").hover(
                function() {
                    $("#tooltip-new-text").show();
                },
                function() {
                    $("#tooltip-new-text").hide();
                }
            );
        });

        $("#Vehicle_NewLicense_Number").blur(function() {
            $("#Vehicle_NewLicense_Number").hover(
                function() {
                    $("#tooltip-new-number").show();
                },
                function() {
                    $("#tooltip-new-number").hide();
                }
            );
        });
    });




    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip-chassis").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_Chassis").hover(
            function() {
                $("#tooltip-chassis").show();
            },
            function() {
                $("#tooltip-chassis").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_Chassis").focus(function() {
            $("#tooltip-chassis").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_Chassis").blur(function() {
            $("#Vehicle_Chassis").hover(
                function() {
                    $("#tooltip-chassis").show();
                },
                function() {
                    $("#tooltip-chassis").hide();
                }
            );
        });
    });



    $(document).ready(function() {
        // เมื่อคลิกที่แท็ก <a>
        $('a[data-bs-toggle="modal"]').on("click", function(e) {
            e.preventDefault(); // ป้องกันการกระโดดไปที่ลิงก์

            // รับค่าจากชื่อของการ์ดที่ถูกคลิก
            const target = $(this).find("h5").text().trim(); // เพิ่ม .trim() เพื่อลบช่องว่าง

            // ซ่อนทุก <div> ที่มี id ที่ต้องการแสดงผล
            $("#car-detail, #motor-detail").hide();

            // แสดง <div> ที่ตรงกับชื่อการ์ด
            if (target === "รถยนต์") {
                $("#car-detail").show();
            } else if (target === "มอเตอร์ไซค์") {
                $("#motor-detail").show();
            }
        });
    });





    $(document).ready(function() {
        var selectedProvince = null;

        // Function to populate the dropdown list based on search input
        function populateOptions(search = "") {
            $("#optionsList li").each(function() {
                var optionText = $(this).text();
                $(this).toggle(
                    optionText.toLowerCase().includes(search.toLowerCase())
                );
            });

            var visibleOptions = $("#optionsList li:visible");
            if (visibleOptions.length > 0) {
                $("#noResultsMessage").hide();
            } else {
                $("#noResultsMessage").show();
            }
        }

        // Toggle dropdown visibility
        $("#dropdownInput").on("click", function() {
            $("#dropdownList").toggle();
            $("#searchInput").toggle().focus();
            populateOptions();
        });

        // Handle option selection
        $(document).on("click", "#optionsList li", function() {
            selectedProvince = $(this).data("key");
            $("#dropdownInput").val($(this).text()).removeClass("text-gray-500");
            $("#dropdownList").hide();
            $("#searchInput").hide();
        });

        // Filter options based on search input
        $("#searchInput").on("input", function() {
            var searchValue = $(this).val();
            populateOptions(searchValue);
        });

        // Close dropdown when clicking outside
        $(document).on("click", function(e) {
            if (!$(e.target).closest("#dropdownInput, #dropdownList").length) {
                $("#dropdownList").hide();
                $("#searchInput").hide();
            }
        });
    });




    $(document).ready(function() {
        var selectedProvince = null;

        // Function to populate the dropdown list based on search input
        function populateOptions(search = "") {
            $("#optionsListNew li").each(function() {
                var optionText = $(this).text();
                $(this).toggle(
                    optionText.toLowerCase().includes(search.toLowerCase())
                );
            });

            var visibleOptions = $("#optionsListNew li:visible");
            if (visibleOptions.length > 0) {
                $("#noResultsMessageNew").hide();
            } else {
                $("#noResultsMessageNew").show();
            }
        }

        // Toggle dropdown visibility
        $("#dropdownInputNew").on("click", function() {
            $("#dropdownListNew").toggle();
            $("#searchInputNew").toggle().focus();
            populateOptions();
        });

        // Handle option selection
        $(document).on("click", "#optionsListNew li", function() {
            selectedProvince = $(this).data("key");
            $("#dropdownInputNew").val($(this).text()).removeClass("text-gray-500");
            $("#dropdownListNew").hide();
            $("#searchInputNew").hide();
        });

        // Filter options based on search input
        $("#searchInputNew").on("input", function() {
            var searchValue = $(this).val();
            populateOptions(searchValue);
        });

        // Close dropdown when clicking outside
        $(document).on("click", function(e) {
            if (
                !$(e.target).closest("#dropdownInputNew, #dropdownListNew").length
            ) {
                $("#dropdownListNew").hide();
                $("#searchInputNew").hide();
            }
        });
    });
</script>

<!--------------------------------------------------------------------------------------------------------------------------------------------------->
