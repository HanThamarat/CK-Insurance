<!-- Car Modal -->
<div id="DataAssetsModal"
    class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50 modal "> <!--p-6-->
    <div class="relative bg-white rounded-lg w-full max-w-screen-lg  max-h-screen overflow-auto scrollbar-hidden mt-12 mb-12"
        style="height: 95%;">

        <!-- ส่วนหัว -->
        <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-6"
            style="background-color: white;">
            <button class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
                onclick="closeModal_data_asset('DataAssetsModal')">
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
        {{-- <form action="{{ route('data_assets.index') }}" method="POST"> เปลี่ยนการส่งค่า จาก form laravel เป็น ajax

        @csrf --}}

        <form id="DataAssetForm">

            <div class="flex flex-col space-y-4 p-6 mt-[-30px]"> <!--ml-[150px]-->

                {{-- Old License  Row --}}

                <div class="mt-0"></div> <!--0mt-6-->
                <div class="relative border border-gray-300 rounded-md p-4 text-gray-700 text-lg mt-12">
                    <span class="absolute -top-4 left-2 bg-white px-3 border-md ">ป้ายทะเบียนเก่า</span>

                    <input hidden class="" name="Type_Asset" type="text" id="Type_Asset" />

                    <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 mt-4">

                        <legend id="license-info"
                            class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md transform transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg cursor-pointer"
                            style="letter-spacing: 0.1rem;">
                            ป้ายทะเบียนเก่า
                        </legend>


                        <div class="w-full md:w-60 relative flex flex-col rounded-xl">
                            <input required=""
                                class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                                id="Vehicle_OldLicense_Text" name="Vehicle_OldLicense_Text" type="text"
                                placeholder=" " />
                            <label
                                class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none peer-valid:shadow-lg"
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
                                class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none peer-valid:shadow-lg"
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
                                    class="text-red-400 font-bold block w-full mt-0 py-2 pl-3 pr-8 h-9 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-white sm:text-sm">
                                    <option value="" class="red-option" selected>จังหวัด</option>
                                    @foreach ($provinces as $province)
                                        <option class="red-option" value="{{ $province->Province_pro }}"
                                            data-province="{{ $province->Province_pro }}">
                                            {{ $province->Province_pro }}
                                        </option>
                                    @endforeach
                                </select>

                                <label id="provinceLabel"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg peer-placeholder-shown:shadow-none">
                                    จังหวัด
                                </label>
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
                                class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-gray-600 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-gray-400 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-400 peer-valid:shadow-lg duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none"
                                for="Vehicle_NewLicense_Text">
                                อักษร/คำ</label>


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
                                class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-gray-600 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-gray-400 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-400 peer-valid:shadow-lg duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none"
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
                                        <option value="{{ $province->Province_pro }}">{{ $province->Province_pro }}
                                        </option>
                                    @endforeach
                                </select>

                                <label id="newProvinceLabel"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-gray-700 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg ">
                                    จังหวัด
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="w-full h-10 relative flex rounded-xl group">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                        id="Vehicle_Chassis" name="Vehicle_Chassis" type="text" />
                    {{-- <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                        for="Vehicle_Chassis">
                        เลขถัง
                    </label> --}}

                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 peer-valid:shadow-lg duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none"
                        for="Vehicle_Chassis">
                        เลขถัง</label>
                </div>



                <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 items-center">
                    <label class="flex items-center space-x-2">
                        <div class="checkbox-wrapper-19">
                            <input id="cbtest-19" name="new_number_stamping" type="checkbox"
                                class="form-checkbox border border-gray-400 rounded-sm">
                            <label class="check-box" for="cbtest-19"></label>
                        </div>
                        <span class="text-xs font-bold text-gray-700">มีกำหนดตอกตัวเลขใหม่</span>
                    </label>

                    <div class="flex-grow h-10 relative flex items-center rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_New_Number" name="Vehicle_New_Number" type="text" />
                        {{-- <label
                            class="absolute top-1/2 translate-y-[-50%] text-gray-600 bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                            for="Vehicle_Newlabel_Number" id="Vehicle_Newlabel_Number">
                            เลขตัวรถไหม่
                        </label> --}}

                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-gray-600 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 peer-valid:shadow-lg duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none"
                            for="Vehicle_Newlabel_Number">
                            เลขตัวรถไหม่</label>
                    </div>
                </div>


                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:border-gray-700 mt-1"
                            id="Vehicle_Engine" name="Vehicle_Engine" type="text" />
                        {{-- <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                            for="Vehicle_Engine">
                            เลขเครื่อง
                        </label> --}}

                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 peer-valid:shadow-lg duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none"
                            for="Vehicle_Engine">
                            เลขเครื่อง</label>
                    </div>


                    <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_Color" name="Vehicle_Color" type="text" />
                        {{-- <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                            for="Vehicle_Color">
                            สีรถ</label> --}}

                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 peer-valid:shadow-lg duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none"
                            for="Vehicle_Color">
                            สีรถ</label>
                    </div>

                    <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_CC" name="Vehicle_CC" type="text" />
                        {{-- <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 duration-150 rounded-md"
                            for="Vehicle_CC">
                            CC</label> --}}

                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 text-red-400 peer-focus:top-0 peer-focus:left-3 font-semibold text-xs peer-focus:text-red-300 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-red-300 peer-valid:shadow-lg duration-150 rounded-md peer-focus:shadow-md peer-placeholder-shown:shadow-none"
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
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Type') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Type') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ประเภทรถ 1
                                </label>

                                <select
                                    class="form-select block w-full border border-red-500 rounded-md shadow-sm
                                focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Type" name="Vehicle_Type" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">ประเภทรถ 1</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Ratetype_id') as $car)
                                        @if ($car->Ratetype_id)
                                            {{-- ตรวจสอบให้แน่ใจว่า Ratetype_id ไม่เป็น null --}}
                                            <option value="{{ $car->Ratetype_id }}" id="car_group"
                                                class="text-red-500">
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
                                            <option value="{{ $motogroup->Ratetype_id }}" id="moto_group"
                                                class="text-red-500">
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
                                    class="form-select block w-full border {{ $errors->has('Vehicle_Type_PLT') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Type_PLT" name="Vehicle_Type_PLT" required
                                    {{-- onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.classList.remove('border-red-300');
                                              this.classList.add('border-red-500');
                                              this.style.color = this.value ? 'red' : '';"
                                    onblur="if (!this.value) { this.classList.add('border-red-500'); } else { this.classList.remove('border-red-500'); }"> --}}
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">ประเภทรถ 2</option>
                                    @foreach ($typeVehicles as $vehicle)
                                        <option hidden value="{{ $vehicle->id }}" class="text-red-500">
                                            {{ $vehicle->Name_Vehicle }}</option>
                                    @endforeach
                                </select>
                            </div>




                            {{-- เช็คยี่ห้อรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Brand"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Brand') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Brand') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ยี่ห้อรถ
                                </label>
                                <select
                                    class="form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Brand') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Brand" name="Vehicle_Brand" required
                                    {{-- onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.classList.remove('border-red-300');
                                              this.classList.add('border-red-500');
                                              this.style.color = this.value ? 'red' : '';"
                                    onblur="if (!this.value) { this.classList.add('border-red-500'); } else { this.classList.remove('border-red-500'); }"> --}}
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">ยี่ห้อรถ</option>

                                    <!-- foreach for car brands -->
                                    @foreach ($carBrands->unique('Brand_car') as $car)
                                        <option class="car-option text-red-500" id="car_brand"
                                            value="{{ $car->Brand_car }}" data-id="{{ $car->id }}">
                                            {{ $car->vehicle_name ?? '' . $car->Brand_car }}
                                        </option>
                                    @endforeach

                                    <!-- foreach for motorcycle brands -->
                                    @foreach ($motoBrands->unique('Brand_moto') as $moto)
                                        <option class="moto-option text-red-500" id="moto_brand"
                                            value="{{ $moto->Brand_moto }}" data-id="{{ $moto->id }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Brand_moto }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            {{-- กลุ่มรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Group"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Group') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Group') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    กลุ่มรถ
                                </label>
                                <select
                                    class="text-red-500 form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Group') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                    id="Vehicle_Group" name="Vehicle_Group" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                              this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.classList.remove('border-gray-300');
                                              this.classList.add('border-red-500');"
                                    onblur="if (!this.value) { this.classList.add('border-gray-300'); } else { this.classList.remove('border-gray-300'); }">
                                    <option value="" class="text-red-500">กลุ่มรถ</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Group_car') as $car)
                                        <option id="car_group_{{ $car->id }}" value="{{ $car->Group_car }}"
                                            class="text-red-500">
                                            {{ $car->vehicle_name ?? '' . $car->Group_car }}
                                        </option>
                                    @endforeach

                                    @foreach ($motoGroups->unique('Group_moto') as $moto)
                                        <option id="moto_group_{{ $moto->id }}" value="{{ $moto->Group_moto }}"
                                            class="text-red-500">
                                            {{ $moto->vehicle_name ?? '' . $moto->Group_moto }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- ปีรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Years"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Years') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Years') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ปีรถ
                                </label>
                                <select
                                    class="text-red-500 form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Years') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                    id="Vehicle_Years" name="Vehicle_Years" required
                                    {{-- onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                              this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.classList.remove('border-red-300');
                                              this.classList.add('border-red-500');"
                                    onblur="if (!this.value) { this.classList.add('border-red-300'); } else { this.classList.remove('border-red-300'); }"> --}}
                                    {{-- onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');"> --}}
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                    this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                    this.classList.remove('border-gray-300');
                                    this.classList.add('border-red-500');"
                                    onblur="if (!this.value) { this.classList.add('border-gray-300'); } else { this.classList.remove('border-gray-300'); }">
                                    <option value="" class="text-red-500">ปีรถ</option>
                                    @foreach ($carYears->unique('Year_car')->sortBy('Year_car') as $car)
                                        <option hidden id="year_car_{{ $car->Year_car }}" value="{{ $car->Year_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Year_car }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            {{-- รุ่นรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Models"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Models') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Models') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    รุ่นรถ
                                </label>
                                <select
                                    class="text-red-500 form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Models') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                    id="Vehicle_Models" name="Vehicle_Models" required
                                    {{-- onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                              this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.classList.remove('border-red-300');
                                              this.classList.add('border-red-500');"
                                    onblur="if (!this.value) { this.classList.add('border-red-500'); } else { this.classList.remove('border-red-500'); }"> --}}
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">รุ่นรถ</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($carModels->unique('Model_car') as $car)
                                        <option hidden id="model_car_{{ $car->id }}"
                                            value="{{ $car->Model_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Model_car }}</option>
                                    @endforeach

                                    @foreach ($motoModels->unique('Model_moto') as $moto)
                                        <option hidden id="model_moto_{{ $moto->id }}"
                                            value="{{ $moto->Model_moto }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Model_moto }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- เกียร์ -->
                            <div class="relative mb-1">
                                <label for="Vehicle_Gear"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Gear') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Gear') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    เกียร์รถ
                                </label>
                                <select
                                    class="form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Gear') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Gear" name="Vehicle_Gear" required
                                    {{-- onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                              this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.classList.remove('border-red-300');
                                              this.classList.add('border-red-500');
                                              this.style.color = this.value ? 'red' : '';"
                                    onblur="if (!this.value) { this.classList.add('border-red-500'); } else { this.classList.remove('border-red-500'); }"> --}}
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">เกียร์รถ</option>
                                    <option hidden value="manual" class="text-red-500">Manual</option>
                                    <option hidden value="auto" class="text-red-500">Auto</option>
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

                    <div class="flex">

                        <div class="relative w-full">
                            <label for="date-stamp-insurance-1"
                                class="shadow-lg rounded-lg absolute left-2 top-2 transform transition-transform duration-200 ease-in-out text-gray-600 text-ms bg-white px-3 peer-focus:text-gray-500 peer-focus:-translate-y-4 peer-focus:left-1 peer-focus:text-sm"
                                style="font-size: 0.9rem;" id="label-date-insurance">วันที่ต่อประกัน</label>
                            <input type="datetime-local"
                                class="border rounded-l-lg w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                id="date-stamp-insurance-1" placeholder=" " name="Insurance_renewal_date"
                                style="border-color: rgba(156, 163, 175, 0.5);" onfocus="moveLabelDown()"
                                onblur="resetLabel()">
                        </div>

                        <div class="relative w-full mb-4">
                            <label for="date-stamp-insurance-2"
                                class="shadow-lg rounded-lg absolute left-2 top-2 transform transition-all duration-300 ease-in-out text-gray-600 text-ms bg-white px-3 bg-opacity-100"
                                style="font-size: 0.9rem;" id="label-date-insurance-2">วันประกันหมดอายุ</label>
                            <input type="datetime-local"
                                class="border rounded-none w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                id="date-stamp-insurance-2" placeholder=" " name="Insurance_end_date"
                                style="border-color: rgba(156, 163, 175, 0.5);"
                                onfocus="moveLabelDown2('label-date-insurance-2')"
                                onblur="resetLabel2('label-date-insurance-2')">
                        </div>



                        <div class="relative inline-block w-full">
                            <select id="select-input-insurance" name=""
                                class="block w-full p-1.5 text-sm text-gray-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                                <option value="" selected>เลือกตัวเลือกต่อประกัน</option>
                                <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                                <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                            </select>
                        </div>
                    </div>


                    <!---------------------------------------------------------------------------------------------------------------------------->

                    <div class="flex mt-[-15]">

                        <div class="relative w-full">
                            <label for="date-stamp-act-1"
                                class="shadow-lg rounded-lg absolute left-2 top-2 transform transition-transform duration-200 ease-in-out text-gray-600 text-ms bg-white px-3 peer-focus:text-gray-500 peer-focus:-translate-y-4 peer-focus:left-1 peer-focus:text-sm"
                                style="font-size: 0.9rem;" id="label-date-act">วันที่ต่อ พ.ร.บ</label>
                            <input type="datetime-local"
                                class="border rounded-l-lg w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                id="date-stamp-act-1" placeholder=" " name="act_renewal_date"
                                style="border-color: rgba(156, 163, 175, 0.5);" onfocus="moveLabelDown3()"
                                onblur="resetLabel3()">
                        </div>

                        <div class="relative w-full mb-4">
                            <label for="date-stamp-act-2"
                                class="shadow-lg rounded-lg absolute left-2 top-2 transform transition-all duration-300 ease-in-out text-gray-600 text-ms bg-white px-3 bg-opacity-100"
                                style="font-size: 0.9rem;" id="label-date-act-2">วัน พ.ร.บ หมดอายุ</label>
                            <input type="datetime-local"
                                class="border rounded-none w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                id="date-stamp-act-2" placeholder=" " name="act_end_date"
                                style="border-color: rgba(156, 163, 175, 0.5);" onfocus="moveLabelDown4()"
                                onblur="resetLabel4()">
                        </div>


                        <div class="relative inline-block w-full">
                            <select id="select-input-act" name=""
                                class="block w-full p-1.5 text-sm text-gray-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                                <option value="act_reset" selected>เลือกตัวเลือกต่อ พ.ร.บ</option>
                                <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                                <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                            </select>
                        </div>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------------------------->


                    <div class="flex mt-[-15]">

                        <div class="relative w-full">
                            <label for="date-stamp-register-1"
                                class="shadow-lg rounded-lg absolute left-2 top-2 transform transition-transform duration-200 ease-in-out text-gray-600 text-ms bg-white px-3 peer-focus:text-gray-500 peer-focus:-translate-y-4 peer-focus:left-1 peer-focus:text-sm"
                                style="font-size: 0.9rem;" id="label-date-register">วันที่ต่อทะเบียน</label>
                            <input type="datetime-local"
                                class="border rounded-l-lg w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                id="date-stamp-register-1" placeholder=" " name="register_renewal_date"
                                style="border-color: rgba(156, 163, 175, 0.5);" onfocus="moveLabelDown5()"
                                onblur="resetLabel5()">
                        </div>

                        <div class="relative w-full mb-4">
                            <label for="date-stamp-register-2"
                                class="shadow-lg rounded-lg absolute left-2 top-2 transform transition-all duration-300 ease-in-out text-gray-600 text-ms bg-white px-3 bg-opacity-100"
                                style="font-size: 0.9rem;" id="label-date-register-2">วันทะเบียนหมดอายุ</label>
                            <input type="datetime-local"
                                class="border rounded-none w-full p-2 h-9 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 peer"
                                id="date-stamp-register-2" placeholder=" " name="register_end_date"
                                style="border-color: rgba(156, 163, 175, 0.5);" onfocus="moveLabelDown6()"
                                onblur="resetLabel6()">
                        </div>


                        <div class="relative inline-block w-full">
                            <select id="select-input-register" name=""
                                class="block w-full p-1.5 text-sm text-gray-500 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                                <option value="register_reset" selected>เลือกตัวเลือกต่อทะเบียน</option>
                                <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                                <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                            </select>
                        </div>
                    </div>

                    <!-------------------------------------------------------------------------------------------------------------------------------->


                </div>


                <div class="space-y-2 p-4" id="errorAlert" hidden>
                    <div role="alert"
                        class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-red-200 dark:hover:bg-red-800 transform hover:scale-105">
                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                            class="h-5 w-5 flex-shrink-0 mr-2 text-red-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"
                                stroke-linejoin="round" stroke-linecap="round"></path>
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



<!--------------------------------------------------------Ajax API Sweet Alert Create and Store Value------------------------------------------------------------------------->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    /* CSS สำหรับทำให้ placeholder เป็นสีแดง */
    input::placeholder {
        color: red;
        /* สีแดง */
    }

    /* สำหรับ placeholder ที่อยู่ใน input ที่มี class .fade-placeholder */
    input.fade-placeholder::placeholder {
        color: red;
        /* สีแดง */
    }

    select::placeholder {
        color: red;
        /* สีแดง */
    }

    /* สำหรับ placeholder ที่อยู่ใน select ที่มี class .fade-placeholder */
    select.fade-placeholder::placeholder {
        color: red;
        /* สีแดง */
    }

    /* เพิ่ม transition เพื่อให้เกิดการ fade out */
    .fade-placeholder {
        transition: opacity 1s ease-in-out;
        opacity: 1;
    }

    .fade-out {
        opacity: 0;
        /* ลดความโปร่งใสไป 0 */
    }
</style>







<script>
    $(document).ready(function() {
        $('#submitBtn').click(function(e) {
            e.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ

            // ตรวจสอบว่าฟิลด์ที่จำเป็นทั้งหมดถูกกรอกครบหรือไม่
            let valid = true;
            let missingFields = [];


            // Function for setting placeholder
            function showPlaceholder(selector, message, labelSelector) {
                // ซ่อน label ก่อน
                $(labelSelector).hide();

                // เพิ่มข้อความ placeholder และทำให้เป็นสีแดง
                $(selector).attr('placeholder', message).addClass('fade-placeholder');

                // ทำให้ placeholder หายไปช้าๆ ใน 5 วินาที
                setTimeout(function() {
                    $(selector).addClass('fade-out');
                }, 4000); // เริ่ม fade out หลังจาก 4 วินาที

                // ลบ placeholder และแสดง label หลังจากครบ 5 วินาที
                setTimeout(function() {
                    $(selector).attr('placeholder', '').removeClass('fade-out');
                    $(labelSelector).show(); // แสดง label อีกครั้ง
                }, 5000);
            }


            function showPlaceholderSelect(selector, message, labelSelector) {
                // ซ่อน label ก่อน
                $(labelSelector).hide();

                // เพิ่มข้อความ placeholder และทำให้เป็นสีแดงใน option แรก
                $(selector).find('option:first').text(message).addClass('red-option fade-placeholder');

                // ทำให้ placeholder หายไปช้าๆ ใน 5 วินาที
                setTimeout(function() {
                    $(selector).find('option:first').addClass('fade-out');
                }, 4000); // เริ่ม fade out หลังจาก 4 วินาที

                // ลบ placeholder และแสดง label หลังจากครบ 5 วินาที
                setTimeout(function() {
                    $(selector).find('option:first').text('จังหวัด').removeClass('fade-out');
                    $(labelSelector).show(); // แสดง label อีกครั้ง
                }, 5000);
            }

            // ตรวจสอบฟิลด์ต่าง ๆ
            if ($('#Vehicle_OldLicense_Text').val().trim() === '') {
                valid = false;
                missingFields.push('อักษรป้ายทะเบียนเก่า');
                $('#Vehicle_OldLicense_Text').addClass('border-red-500');
                showPlaceholder('#Vehicle_OldLicense_Text', '*กรุณากรอกข้อมูลนี้*',
                    'label[for="Vehicle_OldLicense_Text"]');
            } else {
                $('#Vehicle_OldLicense_Text').removeClass('border-red-500');
            }

            if ($('#Vehicle_OldLicense_Number').val().trim() === '') {
                valid = false;
                missingFields.push('เลขป้ายทะเบียนเก่า');
                $('#Vehicle_OldLicense_Number').addClass('border-red-500');
                showPlaceholder('#Vehicle_OldLicense_Number', '*กรุณากรอกข้อมูลนี้*',
                    'label[for="Vehicle_OldLicense_Number"]');
            } else {
                $('#Vehicle_OldLicense_Number').removeClass('border-red-500');
            }

            if ($('#Vehicle_OldLicense_Province').val().trim() === '') {
                valid = false;
                missingFields.push('จังหวัดป้ายทะเบียนเก่า');
                $('#Vehicle_OldLicense_Province').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_OldLicense_Province', '*กรุณากรอกข้อมูลนี้*', '#provinceLabel');
            } else {
                $('#Vehicle_OldLicense_Province').removeClass('border-red-500');
            }

            if ($('#Vehicle_OldLicense_Province').val().trim() === '') {
                valid = false;
                missingFields.push('จังหวัดป้ายทะเบียนเก่า');
                $('#Vehicle_OldLicense_Province').addClass('border-red-500');
                showPlaceholder('#Vehicle_OldLicense_Province', '*กรุณากรอกข้อมูลนี้*',
                    'label[for="Vehicle_OldLicense_Province"]');
            } else {
                $('#Vehicle_OldLicense_Province').removeClass('border-red-500');
            }

            if ($('#Vehicle_Chassis').val().trim() === '') {
                valid = false;
                missingFields.push('หมายเลขตัวถังรถ');
                $('#Vehicle_Chassis').addClass('border-red-500');
                showPlaceholder('#Vehicle_Chassis', '*กรุณากรอกข้อมูลนี้*',
                    'label[for="Vehicle_Chassis"]');
            } else {
                $('#Vehicle_Chassis').removeClass('border-red-500');
            }

            if ($('#Vehicle_Engine').val().trim() === '') {
                valid = false;
                missingFields.push('หมายเลขเครื่องยนต์');
                $('#Vehicle_Engine').addClass('border-red-500');
                showPlaceholder('#Vehicle_Engine', '*กรุณากรอกข้อมูลนี้*',
                    'label[for="Vehicle_Engine"]');
            } else {
                $('#Vehicle_Engine').removeClass('border-red-500');
            }

            if ($('#Vehicle_Color').val().trim() === '') {
                valid = false;
                missingFields.push('สีรถ');
                $('#Vehicle_Color').addClass('border-red-500');
                showPlaceholder('#Vehicle_Color', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_Color"]');
            } else {
                $('#Vehicle_Color').removeClass('border-red-500');
            }

            if ($('#Vehicle_CC').val().trim() === '') {
                valid = false;
                missingFields.push('CC');
                $('#Vehicle_CC').addClass('border-red-500');
                showPlaceholder('#Vehicle_CC', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_CC"]');
            } else {
                $('#Vehicle_CC').removeClass('border-red-500');
            }

            if ($('#Vehicle_Type').val().trim() === '') {
                valid = false;
                missingFields.push('ประเภทรถ 1');
                $('#Vehicle_Type').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_Type', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_Type"]');
            } else {
                $('#Vehicle_Type').removeClass('border-red-500');
            }

            if ($('#Vehicle_Type_PLT').val().trim() === '') {
                valid = false;
                missingFields.push('ประเภทรถ 2');
                $('#Vehicle_Type_PLT').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_Type_PLT', '*กรุณากรอกข้อมูลนี้*',
                    'label[for="Vehicle_Type_PLT"]');
            } else {
                $('#Vehicle_Type_PLT').removeClass('border-red-500');
            }

            if ($('#Vehicle_Brand').val().trim() === '') {
                valid = false;
                missingFields.push('ยี่ห้อรถ');
                $('#Vehicle_Brand').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_Brand', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_Brand"]');
            } else {
                $('#Vehicle_Brand').removeClass('border-red-500');
            }

            if ($('#Vehicle_Group').val().trim() === '') {
                valid = false;
                missingFields.push('กลุ่มรถ');
                $('#Vehicle_Group').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_Group', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_Group"]');
            } else {
                $('#Vehicle_Group').removeClass('border-red-500');
            }


            if ($('#Vehicle_Models').val().trim() === '') {
                valid = false;
                missingFields.push('รุ่นรถ');
                $('#Vehicle_Models').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_Models', '*กรุณากรอกข้อมูลนี้*',
                    'label[for="Vehicle_Models"]');
            } else {
                $('#Vehicle_Models').removeClass('border-red-500');
            }

            if ($('#Vehicle_Years').val().trim() === '') {
                valid = false;
                missingFields.push('ปีรถ');
                $('#Vehicle_Years').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_Years', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_Years"]');
            } else {
                $('#Vehicle_Years').removeClass('border-red-500');
            }


            if ($('#Vehicle_Gear').val().trim() === '') {
                valid = false;
                missingFields.push('เกียร์รถ');
                $('#Vehicle_Gear').addClass('border-red-500');
                showPlaceholderSelect('#Vehicle_Gear', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_Gear"]');
            } else {
                $('#Vehicle_Gear').removeClass('border-red-500');
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
                    setTimeout(function() {
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
                    success: function(response) {
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
                    error: function(jqXHR) {
                        if (jqXHR.status === 409) {
                            // ตรวจสอบข้อผิดพลาดที่ส่งกลับจากเซิร์ฟเวอร์
                            let errorMessage = jqXHR.responseJSON.message_error_chassis ||
                                'เกิดข้อผิดพลาดในการส่งข้อมูล';
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด!',
                                text: errorMessage,
                                showConfirmButton: true
                            });
                        } else {
                            // ใช้ SweetAlert2 แสดง popup แจ้งเตือนข้อผิดพลาดทั่วไป
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด!',
                                text: 'ระบบมีปัญหากับคำขอของคุณ',
                                footer: jqXHR
                                    .responseText // แสดงข้อความตอบกลับจากเซิร์ฟเวอร์
                            });
                        }
                    }
                });
            }
        });
    });
</script>
