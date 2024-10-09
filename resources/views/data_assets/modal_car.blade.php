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
                                class="text-red-400 font-bold block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" class="red-option" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option class="red-option" value="{{ $province->Province_pro }}" data-province="{{ $province->Province_pro }}">
                                        {{ $province->Province_pro }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}


                    {{-- <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_OldLicense_Province" name="OldProvince"
                                class="text-red-400 font-bold block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option hidden value="" class="red-option" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option class="red-option" value="{{ $province->Province_pro }}" data-province="{{ $province->Province_pro }}">
                                        {{ $province->Province_pro }}
                                    </option>
                                @endforeach
                            </select>

                            <label id="provinceLabel"
                                class="absolute left-3 top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-xs duration-150 pointer-events-none">
                                จังหวัด
                            </label>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#Vehicle_OldLicense_Province').focus(function() {
                                $('#provinceLabel').removeClass('top-1/2 -translate-y-1/2 text-red-400')
                                    .addClass('top-[-8px] left-3 text-red-300 text-lg'); // ย้ายขึ้นเล็กน้อย
                            }).blur(function() {
                                if ($(this).val() === "") {
                                    $('#provinceLabel').addClass('top-1/2 -translate-y-1/2 text-red-400 text-xs')
                                        .removeClass('top-[-8px] left-3 text-red-300 text-lg');
                                }
                            });
                        });
                    </script> --}}

                    <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_OldLicense_Province" name="OldProvince"
                                class="text-red-400 font-bold block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-white sm:text-sm">
                                <option value="" class="red-option" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option class="red-option" value="{{ $province->Province_pro }}" data-province="{{ $province->Province_pro }}">
                                        {{ $province->Province_pro }}
                                    </option>
                                @endforeach
                            </select>

                            <label id="provinceLabel"
                                class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full p-1.5">
                                จังหวัด
                            </label>
                        </div>
                    </div>


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#Vehicle_OldLicense_Province').focus(function() {
                                $('#provinceLabel')
                                    .removeClass('top-1/2 translate-y-1/2 text-red-400 border-red-400') // ลบ border สีแดงเข้มออก
                                    .addClass('top-[-3px] left-3 text-red-300 text-lg border-red-300'); // เพิ่ม border สีแดงอ่อน
                            }).blur(function() {
                                if ($(this).val() === "") {
                                    $('#provinceLabel')
                                        .addClass('top-1/2 -translate-y-1/2 text-red-400 text-sm border-red-400') // เพิ่ม border สีแดงเข้ม
                                        .removeClass('top-[-3px] left-3 text-red-300 text-lg border-red-300'); // ลบ border สีแดงอ่อนออก
                                } else {
                                    $('#provinceLabel')
                                        .addClass('text-red-300 border-red-300'); // ถ้ามีค่าใน input ให้ border สีแดงอ่อน
                                }
                            });
                        });
                    </script>
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

                    {{-- <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_NewLicense_Province" name="NewProvince"
                                class="block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->Province_pro }}">{{ $province->Province_pro }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="flex-1 p-1">
                        <div class="relative">
                            <select id="Vehicle_NewLicense_Province" name="NewProvince"
                                class="block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" selected>จังหวัด</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->Province_pro }}">{{ $province->Province_pro }}</option>
                                @endforeach
                            </select>

                            <label id="newProvinceLabel"
                                class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-gray-700 font-semibold text-sm duration-150 pointer-events-none rounded-full p-1.5">
                                จังหวัด
                            </label>
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                         $(document).ready(function() {
                        // สำหรับ NewProvince
                            $('#Vehicle_NewLicense_Province').focus(function() {
                                $('#newProvinceLabel')
                                    .removeClass('top-1/2 translate-y-1/2 text-gray-400') // แก้ไขให้ตรงกับสีที่ต้องการ
                                    .addClass('top-[-2px] left-3 text-gray-300 text-lg'); // ปรับให้เลื่อนลงมากขึ้น
                            }).blur(function() {
                                if ($(this).val() === "") {
                                    $('#newProvinceLabel')
                                        .addClass('top-1/2 -translate-y-1/2 text-gray-400 text-sm')
                                        .removeClass('top-[-2px] left-3 text-gray-300 text-lg'); // เปลี่ยน text-gray-300 เป็น text-gray-400
                                } else {
                                    $('#newProvinceLabel').addClass('text-gray-300');
                                }
                            });
                        });
                    </script>

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
                        <div class="relative mb-1">
                            <label for="Vehicle_Type"
                                class="block text-gray-700 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Type') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Type') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                ประเภทรถ 1
                            </label>
                            <select
                                class="form-select block w-full border border-red-300 rounded-md shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                id="Vehicle_Type" name="Vehicle_Type" required
                                onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                           this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                           this.classList.add('text-red-500');
                                           this.style.color = this.value ? 'red' : '';"
                                onblur="this.classList.remove('text-red-500');">
                                <option value="" class="text-red-500">ประเภทรถ 1</option>

                                {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                @foreach ($cars->unique('Ratetype_id') as $car)
                                    @if ($car->Ratetype_id) {{-- ตรวจสอบให้แน่ใจว่า Ratetype_id ไม่เป็น null --}}
                                        <option value="{{ $car->Ratetype_id }}" id="car_group" class="text-red-500">
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
                                            @endswitch
                                        </option>
                                    @endif
                                @endforeach

                                {{-- ลูปรถมอเตอร์ไซค์ --}}
                                @foreach ($motoGroups->unique('Ratetype_id') as $motogroup)
                                    @if ($motogroup->Ratetype_id)
                                        <option value="{{ $motogroup->Ratetype_id }}" id="moto_group" class="text-red-500">
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
                                            @endswitch
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        {{-- เช็คประเภทรถ 2 --}}
                        <div class="relative mb-1">
                            <label for="Vehicle_Type_PLT"
                                class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Type_PLT') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Type_PLT') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                ประเภทรถ 2
                            </label>
                            <select
                                class="form-select block w-full border {{ $errors->has('Vehicle_Type_PLT') ? 'border-red-300' : 'border-red-300' }} rounded-md shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                id="Vehicle_Type_PLT" name="Vehicle_Type_PLT" required
                                onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                           this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                           this.classList.remove('border-red-300');
                                           this.classList.add('border-red-500');
                                           this.style.color = this.value ? 'red' : '';"

                                onblur="if (!this.value) { this.classList.add('border-red-300'); } else { this.classList.remove('border-red-300'); }">
                                <option value="" class="text-red-500">ประเภทรถ 2</option>

                                @foreach ($typeVehicles as $vehicle)
                                    <option hidden value="{{ $vehicle->id }}">{{ $vehicle->Name_Vehicle }}</option>
                                @endforeach
                            </select>
                        </div>



                        {{-- ยี่ห้อรถ --}}
                        {{-- <div class="relative">
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
                        </div> --}}


                        <div class="relative mb-1">
                            <label for="Vehicle_Brand"
                                class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Brand') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Brand') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                ยี่ห้อรถ
                            </label>
                            <select
                                class="form-select block w-full border border-red-300 {{ $errors->has('Vehicle_Brand') ? 'border-red-300' : 'border-red-300' }} rounded-md shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                id="Vehicle_Brand" name="Vehicle_Brand" required
                                onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.remove('border-red-300');
                                          this.classList.add('border-red-500');
                                          this.style.color = this.value ? 'red' : ''; "
                                onblur="if (!this.value) { this.classList.add('border-red-300'); } else { this.classList.remove('border-red-300'); }">
                                <option value="" class="text-red-500">ยี่ห้อรถ</option>

                                <!-- foreach for car brands -->
                                @foreach ($carBrands->unique('Brand_car') as $car)
                                    <option class="car-option text-red-500" id="car_brand" value="{{ $car->Brand_car }}" data-id="{{ $car->id }}">
                                        {{ $car->vehicle_name ?? '' . $car->Brand_car }}
                                    </option>
                                @endforeach

                                <!-- foreach for motorcycle brands -->
                                @foreach ($motoBrands->unique('Brand_moto') as $moto)
                                    <option class="moto-option text-red-500" id="moto_brand" value="{{ $moto->Brand_moto }}" data-id="{{ $moto->id }}">
                                        {{ $moto->vehicle_name ?? '' . $moto->Brand_moto }}
                                    </option>
                                @endforeach
                            </select>
                        </div>






                        {{-- กลุ่มรถ --}}
                        {{-- <select
                            class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                            id="Vehicle_Group" name="Vehicle_Group" required>
                            <option value="">-- กลุ่มรถ --</option>

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
                        </select> --}}

                        <div class="relative mb-1">
                            <label for="Vehicle_Group"
                                class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Group') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Group') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                กลุ่มรถ
                            </label>
                            <select
                                class="text-red-500 form-select block w-full border border-red-300 {{ $errors->has('Vehicle_Group') ? 'border-red-300' : 'border-gray-300' }} rounded-md shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                id="Vehicle_Group" name="Vehicle_Group" required
                                onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                           this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                           this.classList.remove('border-red-300');
                                           this.classList.add('border-red-500');"
                                onblur="if (!this.value) { this.classList.add('border-gray-300'); } else { this.classList.remove('border-gray-300'); }">
                                <option value="">กลุ่มรถ</option>

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
                        </div>



                        {{-- ปีรถ --}}
                        {{-- <div class="relative">
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
                        </div> --}}

                        <div class="relative mb-1">
                            <label for="Vehicle_Years"
                                class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Years') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Years') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                ปีรถ
                            </label>
                            <select
                                class="text-red-500 form-select block w-full border border-red-300 {{ $errors->has('Vehicle_Years') ? 'border-red-300' : 'border-gray-300' }} rounded-md shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                id="Vehicle_Years" name="Vehicle_Years" required
                                onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                           this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                           this.classList.remove('border-red-300');
                                           this.classList.add('border-red-500');"
                                onblur="if (!this.value) { this.classList.add('border-red-300'); } else { this.classList.remove('border-red-300'); }">
                                <option value="">ปีรถ</option>
                                @foreach ($carYears->unique('Year_car')->sortBy('Year_car') as $car)
                                    <option hidden id="year_car_{{ $car->Year_car }}" value="{{ $car->Year_car }}">
                                        {{ $car->vehicle_name ?? '' . $car->Year_car }}
                                    </option>
                                @endforeach
                            </select>
                        </div>




                        {{-- รุ่นรถ --}}
                        {{-- <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Models" name="Vehicle_Models" required>
                                <option value="">-- รุ่นรถ --</option>

                                @foreach ($carModels->unique('Model_car') as $car)
                                    <option hidden id="model_car" value="{{ $car->Model_car }}">
                                        {{ $car->vehicle_name ?? '' . $car->Model_car }}</option>
                                @endforeach

                                @foreach ($motoModels->unique('Model_moto') as $moto)
                                    <option hidden id="model_moto" value="{{ $car->Model_moto }}">
                                        {{ $moto->vehicle_name ?? '' . $moto->Model_moto }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="relative mb-1">
                            <label for="Vehicle_Models"
                                class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Models') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Models') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                รุ่นรถ
                            </label>
                            <select
                                class="text-red-500 form-select block w-full border border-red-300 {{ $errors->has('Vehicle_Models') ? 'border-red-300' : 'border-gray-300' }} rounded-md shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                id="Vehicle_Models" name="Vehicle_Models" required
                                onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                           this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                           this.classList.remove('border-red-300');
                                           this.classList.add('border-red-500');"
                                onblur="if (!this.value) { this.classList.add('border-red-300'); } else { this.classList.remove('border-red-300'); }">
                                <option value="">รุ่นรถ</option>

                                {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                @foreach ($carModels->unique('Model_car') as $car)
                                    <option hidden id="model_car_{{ $car->id }}" value="{{ $car->Model_car }}">
                                        {{ $car->vehicle_name ?? '' . $car->Model_car }}</option>
                                @endforeach

                                @foreach ($motoModels->unique('Model_moto') as $moto)
                                    <option hidden id="model_moto_{{ $moto->id }}" value="{{ $moto->Model_moto }}">
                                        {{ $moto->vehicle_name ?? '' . $moto->Model_moto }}</option>
                                @endforeach
                            </select>
                        </div>



                        <!-- เกียร์ -->
                        {{-- <div class="relative">
                            <select
                                class="text-red-500 form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2"
                                id="Vehicle_Gear" name="Vehicle_Gear" required>
                                <option value="" selected>-- เกียร์รถ --</option>
                                <option hidden value="manual">Manual</option>
                                <option hidden value="auto">Auto</option>
                            </select>
                        </div> --}}


                        <div class="relative mb-1">
                            <label for="Vehicle_Gear"
                                class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Gear') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Gear') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                เกียร์รถ
                            </label>
                            <select
                                class="form-select block w-full border border-red-300 {{ $errors->has('Vehicle_Gear') ? 'border-red-300' : 'border-red-300' }} rounded-md shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                id="Vehicle_Gear" name="Vehicle_Gear" required
                                onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                           this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                           this.classList.remove('border-red-300');
                                           this.classList.add('border-red-500');
                                           this.style.color = this.value ? 'red' : '';"
                                onblur="if (!this.value) { this.classList.add('border-red-300'); } else { this.classList.remove('border-red-300'); }">
                                <option value="" class="text-red-500">เกียร์รถ</option>
                                <option hidden value="manual" class="text-red-500">Manual</option>
                                <option hidden value="auto" class="text-red-500">Auto</option>
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

                <div class="flex">

                    {{-- <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9"
                        id="date-stamp-insurance-1" placeholder="วันที่ต่อประกัน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5); font-size: 0.9rem;"> --}}

                    <div class="relative w-full">
                        <label for="date-stamp-insurance-1" class="rounded-lg absolute left-2 top-2 transform transition-transform duration-200 ease-in-out text-gray-600 text-ms bg-white px-3 peer-focus:text-gray-500 peer-focus:-translate-y-4 peer-focus:left-1 peer-focus:text-sm" style="font-size: 0.9rem;" id="label-date-insurance">วันที่ต่อประกัน</label>
                        <input type="datetime-local"
                                class="border rounded-l-lg w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                id="date-stamp-insurance-1"
                                placeholder=" "
                                name="date"
                                style="border-color: rgba(156, 163, 175, 0.5);"
                                onfocus="moveLabelDown()" onblur="resetLabel()"
                                >
                    </div>


                    <script>
                       document.addEventListener('DOMContentLoaded', function () {
                            const options = {
                                locale: {
                                    // แปลเป็นภาษาไทย
                                    code: "th",
                                    weekdays: {
                                        shorthand: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส"],
                                        longhand: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์"],
                                    },
                                    months: {
                                        shorthand: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                                        longhand: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                                    },
                                    firstDayOfWeek: 1, // กำหนดวันแรกของสัปดาห์เป็นวันจันทร์
                                    rangeSeparator: " ถึง ", // ตัวคั่นสำหรับช่วงวันที่
                                    time_24hr: true // ใช้รูปแบบเวลา 24 ชั่วโมง
                                }
                            };

                            flatpickr("#date-stamp-insurance-1", options);
                            flatpickr("#date-stamp-insurance-2", options);
                            flatpickr("#date-stamp-act-1", options);
                            flatpickr("#date-stamp-act-2", options);
                            flatpickr("#date-stamp-register-1", options);
                            flatpickr("#date-stamp-register-2", options);
                        });


                        function moveLabelDown() {
                            const label = document.getElementById('label-date-insurance');
                            label.classList.add('translate-y-4', 'text-sm'); // ขยาย label ลงด้านล่าง
                        }

                        function resetLabel() {
                            const label = document.getElementById('label-date-insurance');
                            const input = document.getElementById('date-stamp-insurance-1');
                            if (input.value === '') {
                                label.classList.remove('translate-y-4', 'text-sm'); // คืนค่า label กลับสู่ตำแหน่งเดิม
                            }
                        }
                    </script>

                    <script>
                        function moveLabelDown2(labelId) {
                            const label = document.getElementById(labelId);
                            label.classList.add('translate-y-4', 'text-sm', 'bg-red-200'); // ขยาย label ลงด้านล่างและเปลี่ยน bg เป็นสีแดง
                        }

                        function resetLabel2(labelId) {
                            const label = document.getElementById(labelId);
                            const input = document.getElementById('date-stamp-insurance-2');
                            if (input.value === '') {
                                label.classList.remove('translate-y-4', 'text-sm', 'bg-red-200'); // คืนค่า label กลับสู่ตำแหน่งเดิม
                            }
                        }
                    </script>

                    <style>
                        .flatpickr-calendar {
                            /* ปรับตำแหน่งของปฏิทินทั้งหมด */
                            margin-left: auto; /* ขยับไปทางด้านขวา */
                            margin-right: 0; /* ขจัดระยะขอบทางด้านขวา */
                        }

                        .flatpickr-input {
                            text-align: center; /* ขยับข้อความในอินพุตไปทางด้านขวา */
                        }
                    </style>





                    {{-- <input type="datetime-local" class="border rounded-none w-full p-2 h-9"
                        id="date-stamp-insurance-2" placeholder="วันประกันหมดอายุ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5); font-size: 0.9rem;"> --}}

                        <div class="relative w-full mb-4">
                            <label for="date-stamp-insurance-2" class="rounded-lg absolute left-2 top-2 transform transition-all duration-300 ease-in-out text-gray-600 text-ms bg-white px-3 bg-opacity-100" style="font-size: 0.9rem;" id="label-date-insurance-2">วันประกันหมดอายุ</label>
                            <input type="datetime-local"
                                   class="border rounded-none w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                   id="date-stamp-insurance-2"
                                   placeholder=" "
                                   name="date"
                                   style="border-color: rgba(156, 163, 175, 0.5);"
                                   onfocus="moveLabelDown2('label-date-insurance-2')" onblur="resetLabel2('label-date-insurance-2')"
                            >
                        </div>



                    <div class="relative inline-block w-full">
                        <select id="select-input-insurance" name="Choose_Insurance"
                            class="block w-full p-1.5 text-sm text-gray-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>


                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9 "
                        id="date-stamp-act-1" placeholder="วันที่ต่อ พ.ร.บ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5); font-size: 0.9rem;">


                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9 " id="date-stamp-act-2"
                        placeholder="วัน พ.ร.บ หมดอายุ " name="date"
                        style="border-color: rgba(156, 163, 175, 0.5); font-size: 0.9rem;">


                    <div class="relative inline-block w-full">
                        <select id="select-input-act" name="Choose_Act"
                            class="block w-full p-1.5 text-sm text-gray-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>

                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9 "
                        id="date-stamp-register-1" placeholder="วันที่ต่อทะเบียน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5); font-size: 0.9rem;">

                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9 "
                        id="date-stamp-register-2" placeholder="วันทะเบียนหมดอายุ" name="date2"
                        style="border-color: rgba(156, 163, 175, 0.5); font-size: 0.9rem;">

                    <div class="relative inline-block w-full">
                        <select id="select-input-register" name="Choose_Register"
                            class="block w-full p-1.5 text-sm text-gray-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
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

{{-- <script>
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

                // เช็คค่า Vehicle_Chassis
                const vehicleChassis = $('#Vehicle_Chassis').val().trim();
                $.ajax({
                    url: '/check-vehicle-chassis', // เส้นทางที่ใช้ตรวจสอบเลขตัวถัง
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // เพิ่ม CSRF token
                    },
                    data: { Vehicle_Chassis: vehicleChassis },
                    success: function (response) {
                        if (response.exists) {
                            // แสดง SweetAlert หากเลขตัวถังซ้ำ
                            Swal.fire({
                                icon: 'warning',
                                title: 'เลขตัวถังนี้มีอยู่ในระบบแล้ว!',
                                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง.',
                                showConfirmButton: true
                            });
                        } else {
                            // ส่งฟอร์มหากไม่มีปัญหา
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
                    },
                    error: function () {
                        // แสดงข้อผิดพลาดถ้าการตรวจสอบล้มเหลว
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด!',
                            text: 'หมายเลขถังถูกใช้งานแล้ว',
                        });
                    }
                });
            }
        });
    });

</script> --}}


