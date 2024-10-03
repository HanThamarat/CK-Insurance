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





                    <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_OldLicense_Province" name="OldProvince"
                                class="text-red-400 font-bold block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" class="red-option" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option class="red-option" value="{{ $province->Province_pro }}" data-province="{{ $province->Province_pro }}">
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



            <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 items-center">
                <label class="flex items-center space-x-2">
                    <div class="checkbox-wrapper-19">
                        <input id="cbtest-19" name="new_number_stamping" type="checkbox" class="form-checkbox border border-gray-400 rounded-sm">
                        <label class="check-box" for="cbtest-19"></label>
                    </div>
                    <span class="text-xs font-bold text-gray-700">มีกำหนดตอกตัวเลขใหม่</span>
                </label>

                <div class="flex-grow h-10 relative flex items-center rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                        id="Vehicle_New_Number" name="Vehicle_New_Number" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] text-gray-600 bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
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
                                        @if ($car->Ratetype_id) {{-- ตรวจสอบให้แน่ใจว่า Ratetype_id ไม่เป็น null --}}
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

                                                    {{-- ไม่มี default --}}
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach

                                    {{-- ลูปรถมอเตอร์ไซค์ --}}
                                    @foreach ($motoGroups->unique('Ratetype_id') as $motogroup)
                                        @if ($motogroup->Ratetype_id) {{-- ตรวจสอบให้แน่ใจว่า Ratetype_id ไม่เป็น null --}}
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

                                                    {{-- ไม่มี default --}}
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>


                        <!-- ประเภทรถ 2 -->
                        <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Type_PLT" name="Vehicle_Type_PLT" required>
                                <option value="" selected>-- ประเภทรถ 2 --</option>

                                @foreach ($typeVehicles as $vehicle)
                                    <option hidden value="{{ $vehicle->id }}">{{ $vehicle->Name_Vehicle }}</option>
                                @endforeach
                            </select>
                        </div>



                        {{-- ยี่ห้อรถ --}}
                        <div class="relative">
                            <div class="relative">
                                <select
                                    class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                    id="Vehicle_Brand" name="Vehicle_Brand" required>
                                    <option value="">-- ยี่ห้อรถ --</option>
                                    @foreach ($carBrands->unique('Brand_car') as $car)
                                        <option hidden class="car-option" id="car_brand" value="{{ $car->Brand_car }}" data-id="{{ $car->id }}">{{ $car->vehicle_name ?? '' . $car->Brand_car }}</option>
                                    @endforeach

                                    @foreach ($motoBrands->unique('Brand_moto') as $moto)
                                        <option hidden class="moto-option" id="moto_brand" value="{{ $moto->Brand_moto }}" data-id="{{ $moto->id }}">{{ $moto->vehicle_name ?? '' . $moto->Brand_moto }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>



                        {{-- กลุ่มรถ --}}
                        <select
                            class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                            id="Vehicle_Group" name="Vehicle_Group" required>
                            <option value="">-- กลุ่มรถ --</option>

                            {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                            @foreach ($cars->unique('Group_car') as $car)
                                <option hidden id="car_group_{{ $car->id }}" value="{{ $car->Group_car }}">
                                    {{ $car->vehicle_name ?? '' . $car->Group_car }}
                                </option>
                            @endforeach

                            @foreach ($motoGroups->unique('Group_moto') as $moto)
                                <option hidden id="moto_group_{{ $moto->id }}" value="{{ $moto->Group_moto }}">
                                    {{ $moto->vehicle_name ?? '' . $moto->Group_moto }}
                                </option>
                            @endforeach
                        </select>



                        {{-- ปีรถ --}}
                        <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Years" name="Vehicle_Years" required>
                                <option value="">-- ปีรถ --</option>
                                @foreach ($carYears->unique('Year_car')->sortBy('Year_car') as $car)
                                    <option hidden id="year_car_{{ $car->Year_car }}" value="{{ $car->Year_car }}">
                                        {{ $car->vehicle_name ?? '' . $car->Year_car }}
                                    </option>
                                @endforeach
                            </select>
                        </div>



                        {{-- รุ่นรถ --}}
                        <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Models" name="Vehicle_Models" required>
                                <option value="">-- รุ่นรถ --</option>

                                {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                @foreach ($carModels->unique('Model_car') as $car)
                                    <option hidden id="model_car" value="{{ $car->Model_car }}">
                                        {{ $car->vehicle_name ?? '' . $car->Model_car }}</option>
                                @endforeach

                                @foreach ($motoModels->unique('Model_moto') as $moto)
                                    <option hidden id="model_moto" value="{{ $car->Model_moto }}">
                                        {{ $moto->vehicle_name ?? '' . $moto->Model_moto }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- เกียร์ -->
                        <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Gear" name="Vehicle_Gear" required>
                                <option value="" selected>-- เกียร์รถ --</option>
                                <option hidden value="manual">Manual</option>
                                <option hidden value="auto">Auto</option>
                            </select>
                        </div>

                        <!-- jQuery Script -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#Vehicle_Group').on('change', function() {
                                    // Check if a value is selected
                                    if ($(this).val()) {
                                        // Show hidden options in Vehicle_Gear
                                        $('#Vehicle_Gear option[hidden]').show();
                                        $('#Vehicle_Gear').val(''); // Reset Vehicle_Gear selection
                                    } else {
                                        // Hide options again if no value is selected
                                        $('#Vehicle_Gear option').hide().filter(':first').show(); // Show the first option only
                                    }
                                });
                            });
                        </script>

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

                    <script>

                        $(document).ready(function() {
                            // เริ่มต้นให้ disabled select และ input มีสีเทาและปิดการใช้งาน
                            $('#Vehicle_Class, #Vehicle_Companies, #Vehicle_PolicyNumber').prop('disabled', true).addClass('disabled-select');
                            $('#Vehicle_PolicyNumber').css('background-color', '#e5e7eb');
                            $('#date-stamp-insurance-1, #date-stamp-insurance-2, #select-input-insurance').prop('disabled', true).css('border-color', 'rgba(156, 163, 175, 0.5)');

                            // เมื่อมีการเปลี่ยนแปลงใน select ของสถานะประกัน
                            $('#Vehicle_InsuranceStatus').change(function() {
                                var selectedValue = $(this).val();

                                // หากเลือก "ซื้อประกัน" หรือ "มีอยู่แล้ว"
                                if (selectedValue === 'buy' || selectedValue === 'existing') {
                                    // เปิดใช้งาน select ต่างๆ และฟิลด์วันที่ พร้อมเปลี่ยนสีพื้นหลังและข้อความ
                                    $('#Vehicle_Class, #Vehicle_Companies, #Vehicle_PolicyNumber').prop('disabled', false).removeClass('disabled-select');
                                    $('#Vehicle_PolicyNumber').css('background-color', 'white');
                                    $('#date-stamp-insurance-1, #date-stamp-insurance-2').prop('disabled', false).css('border-color', '#d1d5db').css('color', 'red'); // border สีเทา
                                    $('#select-input-insurance').prop('disabled', false).css('color', 'red');

                                    // เปลี่ยน placeholder เป็นสีแดง
                                    $('#date-stamp-insurance-1, #date-stamp-insurance-2').addClass('red-placeholder');

                                } else {
                                    // ปิดการใช้งาน select และฟิลด์วันที่ พร้อมเปลี่ยนสีพื้นหลังและข้อความกลับเป็นค่าเริ่มต้น
                                    $('#Vehicle_Class, #Vehicle_Companies, #Vehicle_PolicyNumber').prop('disabled', true).val('').addClass('disabled-select');
                                    $('#Vehicle_PolicyNumber').css('background-color', '#e5e7eb');
                                    $('#date-stamp-insurance-1, #date-stamp-insurance-2').prop('disabled', true).val('').css('border-color', 'rgba(156, 163, 175, 0.5)').css('color', 'black');
                                    $('#select-input-insurance').prop('disabled', true).val('').css('color', 'black');

                                    // ลบคลาส placeholder สีแดง
                                    $('#date-stamp-insurance-1, #date-stamp-insurance-2').removeClass('red-placeholder');
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
                            class="absolute top-1/2 translate-y-[-50%] text-gray-600 bg-white left-3 px-2 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_PolicyNumber">
                            เลขกรมธรรม์
                        </label>
                    </div>
                </div>


                <div class="flex">
                    {{-- <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label> --}}

                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9" disabled
                        id="date-stamp-insurance-1" placeholder="วันที่ต่อประกัน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9" disabled
                        id="date-stamp-insurance-2" placeholder="วันประกันหมดอายุ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">



                    <div class="relative inline-block w-full">
                        <select id="select-input-insurance" name="Choose_Insurance" disabled
                            class="block w-full p-1.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>


                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9 text-red-500 placeholder-red-500"
                        id="date-stamp-act-1" placeholder="วันที่ต่อ พ.ร.บ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9 text-red-500 placeholder-red-500" id="date-stamp-act-2"
                        placeholder="วัน พ.ร.บ หมดอายุ " name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <div class="relative inline-block w-full">
                        <select id="select-input-act" name="Choose_Act"
                            class="block w-full p-1.5 text-sm text-red-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>


                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>

                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9 text-red-500 placeholder-red-500"
                        id="date-stamp-register-1" placeholder="วันที่ต่อทะเบียน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">

                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9 text-red-500 placeholder-red-500"
                        id="date-stamp-register-2" placeholder="วันทะเบียนหมดอายุ" name="date2"
                        style="border-color: rgba(156, 163, 175, 0.5);">

                    <div class="relative inline-block w-full">
                        <select id="select-input-register" name="Choose_Register"
                            class="block w-full p-1.5 text-sm text-red-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

            </div>


            <div class="space-y-2 p-4" id="errorAlert" hidden>
                <div
                  role="alert"
                  class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-red-200 dark:hover:bg-red-800 transform hover:scale-105"
                >
                  <svg
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    fill="none"
                    class="h-5 w-5 flex-shrink-0 mr-2 text-red-600"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                      stroke-width="2"
                      stroke-linejoin="round"
                      stroke-linecap="round"
                    ></path>
                  </svg>
                  <p class="text-xs font-semibold">เกิดข้อผิดพลาด - กรุณากรอกข้อมูลให้ครบถ้วน</p>
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

            // ตัวอย่างการตรวจสอบฟิลด์
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
                $('#errorAlert').show(); // แสดงกล่องข้อความ error
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณากรอกข้อมูลให้ครบถ้วน!',
                    text: missingFields.join(', '),
                    showConfirmButton: true
                }).then(() => {
                    // หายไปหลังจาก 3 วินาที
                    setTimeout(function () {
                        $('#errorAlert').fadeOut(5000); // หายไปช้า ๆ ใน 5 วินาที
                    }, 3000);
                });
            } else {
                $('#errorAlert').hide(); // ซ่อนกล่องข้อความ error หากข้อมูลครบ
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
