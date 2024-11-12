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

                    <input hidden class="" name="Customer_id" type="text" id="Customer_id" value="{{ request('customer_id') }}" />

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

                            <div class="relative">
                                <select id="Ratetype_id" name="Vehicle_Type"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange1(this)">
                                    <option value="">ประเภทรถ 1</option>
                                </select>

                                <label id="label_Ratetype_id" for="Ratetype_id"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ประเภทรถ 1
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                function loadRatetypeOptions(vehicleType) {
                                    const selectElement = $('#Ratetype_id');
                                    selectElement.empty(); // Clear previous options

                                    // Add the default option
                                    selectElement.append('<option value="">ประเภทรถ 1</option>');

                                    // Hide select element before loading data
                                    selectElement.hide();

                                    $.ajax({
                                        url: '/api/ratetype-options', // URL ที่เรียกใช้ฟังก์ชัน getRatetypeOptions()
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            if (vehicleType === 'car' && data.carTypes && data.carTypes.length > 0) {
                                                data.carTypes.forEach(option => {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // กำหนดค่าให้กับ option
                                                        .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                                                    selectElement.append(opt);
                                                });
                                            } else if (vehicleType === 'motor' && data.motoTypes && data.motoTypes.length > 0) {
                                                data.motoTypes.forEach(option => {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // กำหนดค่าให้กับ option
                                                        .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                                                    selectElement.append(opt);
                                                });
                                            }

                                            // Show select element after data is loaded
                                            selectElement.show();
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Ratetype options:', error);
                                        }
                                    });
                                }

                                function closeModal_data_asset(modalId) {
                                    document.getElementById(modalId).classList.add('hidden'); // Hide the modal
                                }

                                function handleSelectChange1(selectElement) {
                                    const label = $('#label_Ratetype_id');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // Move label up
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // Move label down
                                    }
                                }

                                $(document).ready(function() {
                                    const selectElement = $('#Ratetype_id');
                                    // Hide select element before loading data
                                    selectElement.hide();

                                    // Initial load if needed
                                    $.ajax({
                                        url: '/api/ratetype-options', // URL to load options
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            // Show select element after data is loaded
                                            selectElement.show();
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Ratetype options:', error);
                                        }
                                    });
                                });
                            </script>



                            <div class="relative">
                                <select id="Name_Vehicle" name="Vehicle_Type_PLT"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange2(this)"> <!-- เพิ่ม onchange -->
                                    <option value="">ประเภทรถ 2</option>
                                </select>

                                <label id="label_Name_Vehicle" for="Name_Vehicle"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ประเภทรถ 2
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    // เมื่อมีการเปลี่ยนแปลงใน select ของประเภท
                                    $('#Ratetype_id').change(function() {
                                        const selectedType = $(this).val(); // ดึงค่า Ratetype_id ที่ถูกเลือก
                                        $.ajax({
                                            url: '/api/vehicle-names', // API endpoint ของคุณ
                                            method: 'GET',
                                            data: {
                                                ratetype_id: selectedType
                                            }, // ส่ง Ratetype_id
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Name_Vehicle');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ประเภทรถ 2"
                                                selectElement.append('<option value="">ประเภทรถ 2</option>');

                                                // เพิ่มตัวเลือกใหม่จากข้อมูลที่ดึงมา
                                                data.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.Name_Vehicle) // กำหนดค่าให้กับ option
                                                        .text(option.Name_Vehicle); // แสดงชื่อที่ต้องการ
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Vehicle names:', error);
                                            }
                                        });
                                    });
                                });

                                function handleSelectChange2(selectElement) {
                                    const label = $('#label_Name_Vehicle'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>


                            <div class="relative">
                                <select id="Brand_car" name="Vehicle_Brand"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange3(this)">
                                    <option value="">ยี่ห้อรถ</option>
                                </select>

                                <label id="label_Brand_car" for="Brand_car"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ยี่ห้อรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            {{-- <script>
                                $(document).ready(function() {
                                    $('#Ratetype_id').change(function() {
                                        const selectedType = $(this).val();
                                        // AJAX สำหรับดึงข้อมูล Brand Options
                                        $.ajax({
                                            url: '/api/brand-options',
                                            method: 'GET',
                                            data: {
                                                ratetype_id: selectedType,
                                                name_vehicle: $('#Name_Vehicle').val()
                                            },
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Brand_car');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ยี่ห้อรถ"
                                                selectElement.append('<option value="">ยี่ห้อรถ</option>');

                                                // เพิ่มตัวเลือกแบรนด์รถยนต์
                                                data.carBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_car);
                                                    selectElement.append(opt);
                                                });

                                                // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                                                data.motoBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_moto);
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Brand options:', error);
                                            }
                                        });
                                    });

                                    $('#Name_Vehicle').change(function() {
                                        const selectedVehicle = $(this).val();

                                        // ตรวจสอบว่าค่าที่เลือกคือ "ประเภทรถ 2"
                                        if (selectedVehicle === "ประเภทรถ 2") {
                                            // ซ่อนตัวเลือกแบรนด์ทั้งหมด
                                            $('#Brand_car').empty().append('<option value="">เลือกยี่ห้อรถ</option>');
                                            return; // ออกจากฟังก์ชัน
                                        }

                                        const selectedType = $('#Ratetype_id').val();

                                        // AJAX สำหรับดึงข้อมูล Brand Options
                                        $.ajax({
                                            url: '/api/brand-options',
                                            method: 'GET',
                                            data: {
                                                ratetype_id: selectedType,
                                                name_vehicle: selectedVehicle
                                            },
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Brand_car');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ยี่ห้อรถ"
                                                selectElement.append('<option value="">ยี่ห้อรถ</option>');

                                                // เพิ่มตัวเลือกแบรนด์รถยนต์
                                                data.carBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_car);
                                                    selectElement.append(opt);
                                                });

                                                // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                                                data.motoBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_moto);
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Brand options:', error);
                                            }
                                        });
                                    });
                                });

                                function handleSelectChange3(selectElement) {
                                    const label = $('#label_Brand_car');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400');
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400');
                                    }
                                }
                            </script> --}}

                            <script>
                                $(document).ready(function() {
                                    $('#Ratetype_id').change(function() {
                                        const selectedType = $(this).val();
                                        // AJAX สำหรับดึงข้อมูล Brand Options
                                        $.ajax({
                                            url: '/api/brand-options',
                                            method: 'GET',
                                            data: {
                                                ratetype_id: selectedType,
                                                name_vehicle: $('#Name_Vehicle').val()
                                            },
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Brand_car');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ยี่ห้อรถ"
                                                selectElement.append('<option value="">ยี่ห้อรถ</option>');

                                                // เพิ่มตัวเลือกแบรนด์รถยนต์
                                                data.carBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_car)
                                                        .data('brand_car', option.Brand_car); // เพิ่มข้อมูล Brand_car
                                                    selectElement.append(opt);
                                                });

                                                // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                                                data.motoBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_moto)
                                                        .data('brand_car', option.Brand_moto); // เพิ่มข้อมูล Brand_moto
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Brand options:', error);
                                            }
                                        });
                                    });

                                    $('#Name_Vehicle').change(function() {
                                        const selectedVehicle = $(this).val();

                                        // ตรวจสอบว่าค่าที่เลือกคือ "ประเภทรถ 2"
                                        if (selectedVehicle === "ประเภทรถ 2") {
                                            // ซ่อนตัวเลือกแบรนด์ทั้งหมด
                                            $('#Brand_car').empty().append('<option value="">เลือกยี่ห้อรถ</option>');
                                            return; // ออกจากฟังก์ชัน
                                        }

                                        const selectedType = $('#Ratetype_id').val();

                                        // AJAX สำหรับดึงข้อมูล Brand Options
                                        $.ajax({
                                            url: '/api/brand-options',
                                            method: 'GET',
                                            data: {
                                                ratetype_id: selectedType,
                                                name_vehicle: selectedVehicle
                                            },
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Brand_car');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ยี่ห้อรถ"
                                                selectElement.append('<option value="">ยี่ห้อรถ</option>');

                                                // เพิ่มตัวเลือกแบรนด์รถยนต์
                                                data.carBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_car)
                                                        .data('brand_moto', option.Brand_car); // เพิ่มข้อมูล Brand_car
                                                    selectElement.append(opt);
                                                });

                                                // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                                                data.motoBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id)
                                                        .text(option.Brand_moto)
                                                        .data('brand_moto', option.Brand_moto); // เพิ่มข้อมูล Brand_moto
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Brand options:', error);
                                            }
                                        });
                                    });
                                });

                                function handleSelectChange3(selectElement) {
                                    const label = $('#label_Brand_car');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400');
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400');
                                    }
                                }

                            </script>


                            <div class="relative">
                                <select id="Group_car_and_moto" name="Vehicle_Group"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChangeGroup(this)">
                                    <option value="">กลุ่มรถ</option>
                                </select>

                                <label id="label_Group_car" for="Group_car_and_moto"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    กลุ่มรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <script>
                                $(document).ready(function() {
                                    $('#Brand_car').change(function() {
                                        const selectedBrand = $(this).val();
                                        const ratetypeId = $('#Ratetype_id').val();
                                        const nameVehicle = $('#Name_Vehicle').val();

                                        if (!selectedBrand || !ratetypeId) {
                                            console.warn('Brand ID or RateType ID is missing.');
                                            return;
                                        }

                                        $.ajax({
                                            url: '/api/group-car-options',
                                            method: 'GET',
                                            dataType: 'json',
                                            data: {
                                                brand_id: selectedBrand,
                                                ratetype_id: ratetypeId,
                                                name_vehicle: nameVehicle
                                            },
                                            success: function(data) {
                                                const selectElement = $('#Group_car_and_moto');
                                                selectElement.empty();

                                                // เพิ่มตัวเลือก "กลุ่มรถ" เป็นตัวเลือกแรก
                                                selectElement.append('<option value="">กลุ่มรถ</option>');

                                                // Loop แสดงรายการสำหรับกลุ่มรถ
                                                if (data.carGroups && data.carGroups.length > 0) {
                                                    data.carGroups.forEach(function(option) {
                                                        selectElement.append($('<option></option>')
                                                            .val(option.Group_car) // ค่า value ของ option
                                                            .text(option.Group_car) // ข้อความที่แสดง
                                                            .attr('data-id', option.id)
                                                        ); // เพิ่ม data-id ของกลุ่มรถ
                                                    });
                                                }

                                                // Loop แสดงรายการสำหรับกลุ่มมอเตอร์ไซค์
                                                if (data.motoGroups && data.motoGroups.length > 0) {
                                                    data.motoGroups.forEach(function(option) {
                                                        selectElement.append($('<option></option>')
                                                            .val(option.Group_moto)
                                                            .text(option.Group_moto)
                                                            .attr('data-id', option.id)
                                                        ); // เพิ่ม data-id ของกลุ่มมอเตอร์ไซค์
                                                    });
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Group options:', error);
                                            }
                                        });
                                    });
                                });

                                // ฟังก์ชันจัดการการเปลี่ยนแปลงของ select
                                function handleSelectChangeGroup(selectElement) {
                                    const label = $('#label_Group_car');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400');
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400');
                                    }
                                }
                            </script>








                            <div class="relative">
                                <select id="Year_car_and_moto" name="Vehicle_Years"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange5(this)">
                                    <option value="">ปีรถ</option>
                                </select>

                                <label id="label_Year_car_and_moto" for="Year_car_and_moto"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ปีรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <script>
                                $(document).ready(function() {
                                    $('#Brand_car').change(function() {
                                        const selectedBrand = $(this).val();
                                        const ratetypeId = $('#Ratetype_id').val();
                                        const nameVehicle = $('#Name_Vehicle').val();

                                        if (!selectedBrand || !ratetypeId) {
                                            console.warn('Brand ID or RateType ID is missing.');
                                            return;
                                        }

                                        $.ajax({
                                            url: '/api/group-car-options',
                                            method: 'GET',
                                            dataType: 'json',
                                            data: {
                                                brand_id: selectedBrand,
                                                ratetype_id: ratetypeId,
                                                name_vehicle: nameVehicle
                                            },
                                            success: function(data) {
                                                const selectElement = $('#Group_car_and_moto');
                                                selectElement.empty();
                                                selectElement.append('<option value="">กลุ่มรถ</option>');

                                                // Loop แสดงรายการสำหรับกลุ่มรถ
                                                if (data.carGroups && data.carGroups.length > 0) {
                                                    data.carGroups.forEach(function(option) {
                                                        selectElement.append($('<option></option>')
                                                            .val(option.Group_car) // ค่า value ของ option
                                                            .text(option.Group_car) // ข้อความที่แสดง
                                                            .attr('data-id', option.id)
                                                        );
                                                    });
                                                }

                                                // Loop แสดงรายการสำหรับกลุ่มมอเตอร์ไซค์
                                                if (data.motoGroups && data.motoGroups.length > 0) {
                                                    data.motoGroups.forEach(function(option) {
                                                        selectElement.append($('<option></option>')
                                                            .val(option.Group_moto)
                                                            .text(option.Group_moto)
                                                            .attr('data-id', option.id)
                                                        );
                                                    });
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Group options:', error);
                                            }
                                        });
                                    });

                                    $('#Group_car_and_moto').change(function() {
                                        const selectedGroup = $(this).find('option:selected').data('id'); // ดึง ID ของกลุ่มรถ
                                        if (!selectedGroup) return; // ถ้าไม่มีการเลือก

                                        $.ajax({
                                            url: '/api/year-options',
                                            method: 'GET',
                                            dataType: 'json',
                                            data: {
                                                group_id: selectedGroup // ส่ง ID ของกลุ่มรถ
                                            },
                                            success: function(data) {
                                                const carSelectElement = $('#Year_car_and_moto');
                                                const motoSelectElement = $(
                                                    '#Year_moto_and_car'); // เพิ่มตัวแปรสำหรับมอเตอร์ไซค์
                                                carSelectElement.empty(); // เคลียร์ตัวเลือกปีรถยนต์
                                                motoSelectElement.empty(); // เคลียร์ตัวเลือกปีมอเตอร์ไซค์

                                                // ตัวเลือกเริ่มต้น
                                                carSelectElement.append('<option value="">ปีรถ</option>');
                                                motoSelectElement.append('<option value="">ปีมอเตอร์ไซค์</option>');

                                                // Loop แสดงปีรถยนต์ที่ตรงกับกลุ่มรถที่เลือก
                                                if (data.carYears && data.carYears.length > 0) {
                                                    data.carYears.forEach(function(option) {
                                                        carSelectElement.append($('<option></option>')
                                                            .val(option.Year_car)
                                                            .text(option.Year_car));
                                                    });
                                                }

                                                // Loop แสดงปีมอเตอร์ไซค์ที่ตรงกับกลุ่มรถที่เลือก
                                                if (data.motoYears && data.motoYears.length > 0) {
                                                    data.motoYears.forEach(function(option) {
                                                        motoSelectElement.append($('<option></option>')
                                                            .val(option.Year_moto)
                                                            .text(option.Year_moto));
                                                    });
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Year options:', error);
                                            }
                                        });
                                    });
                                });

                                // ฟังก์ชันจัดการการเปลี่ยนแปลงของ select
                                function handleSelectChangeGroup(selectElement) {
                                    const label = $('#label_Group_car');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400');
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400');
                                    }
                                }

                                function handleSelectChange5(selectElement) {
                                    const label = $('#label_Year_car_and_moto');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400');
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400');
                                    }
                                }
                            </script>




                            <div class="relative">
                                <select id="Model_car_and_moto" name="Vehicle_Models"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange6(this)">
                                    <option value="">รุ่นรถ</option>
                                </select>

                                <label id="label_Model_car_and_moto" for="Model_car_and_moto"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    รุ่นรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $('#Year_car_and_moto').change(function() {
                                    const selectedGroupId = $('#Group_car_and_moto').find('option:selected').data('id'); // ดึง Group_id
                                    const assetType = $('#Type_Asset').val(); // ดึงค่า asset type จาก input

                                    if (!selectedGroupId) {
                                        console.warn('Group ID is missing.');
                                        return;
                                    }

                                    // เรียกข้อมูลโมเดลรถยนต์และมอเตอร์ไซค์ตาม Group_id
                                    $.ajax({
                                        url: '/api/model-car-options',
                                        method: 'GET',
                                        dataType: 'json',
                                        data: {
                                            group_id: selectedGroupId // ส่ง Group_id
                                        },
                                        success: function(data) {
                                            const selectElement = $('#Model_car_and_moto');
                                            selectElement.empty(); // เคลียร์ตัวเลือกเก่า
                                            selectElement.append('<option value="">รุ่นรถ</option>'); // ตัวเลือกเริ่มต้น

                                            // เช็คประเภทของ asset เพื่อแสดงโมเดลที่ถูกต้อง
                                            if (assetType === 'รถยนต์' && data.carModels && data.carModels.length > 0) {
                                                const carOptGroup = $('<optgroup></optgroup>').attr('label', 'รถยนต์');
                                                data.carModels.forEach(function(option) {
                                                    const opt = $('<option></option>').val(option.Model_car).text(option
                                                        .Model_car);
                                                    carOptGroup.append(opt); // เพิ่ม <option> ลงใน <optgroup> รถยนต์
                                                });
                                                selectElement.append(carOptGroup); // เพิ่ม <optgroup> รถยนต์ ลงใน <select>
                                            } else if (assetType === 'มอเตอร์ไซค์' && data.motoModels && data.motoModels
                                                .length > 0) {
                                                const motoOptGroup = $('<optgroup></optgroup>').attr('label', 'มอเตอร์ไซค์');
                                                data.motoModels.forEach(function(option) {
                                                    const opt = $('<option></option>').val(option.Model_moto).text(
                                                        option.Model_moto);
                                                    motoOptGroup.append(
                                                    opt); // เพิ่ม <option> ลงใน <optgroup> มอเตอร์ไซค์
                                                });
                                                selectElement.append(
                                                motoOptGroup); // เพิ่ม <optgroup> มอเตอร์ไซค์ ลงใน <select>
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Model car and moto options:', error);
                                        }
                                    });
                                });


                                function handleSelectChange6(selectElement) {
                                    const label = $('#label_Model_car_and_moto'); // ใช้ ID ของ label ให้ตรงกับ select
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>






                            <div class="relative">
                                <select id="Vehicle_Gear" name="Vehicle_Gear"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange7(this)">
                                    <option value="">เกียร์รถ</option>
                                    <option hidden value="manual" class="text-gray-500">Manual</option>
                                    <option hidden value="auto" class="text-gray-500">Auto</option>
                                </select>

                                <label id="label_Vehicle_Gear" for="Vehicle_Gear"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    เกียร์รถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                function handleSelectChange7(selectElement) {
                                    const label = $('#label_Vehicle_Gear');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400');
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400');
                                    }
                                }

                                $('#Year_car_and_moto').change(function() {
                                    const selectedGroupId = $('#Group_car_and_moto').find('option:selected').data('id');
                                    const assetType = $('#Type_Asset').val();

                                    if (!selectedGroupId) {
                                        console.warn('Group ID is missing.');
                                        return;
                                    }

                                    $.ajax({
                                        url: '/api/model-car-options',
                                        method: 'GET',
                                        dataType: 'json',
                                        data: {
                                            group_id: selectedGroupId
                                        },
                                        success: function(data) {
                                            const selectElement = $('#Model_car_and_moto');
                                            selectElement.empty();
                                            selectElement.append('<option value="">รุ่นรถ</option>');

                                            if (assetType === 'รถยนต์' && data.carModels && data.carModels.length > 0) {
                                                const carOptGroup = $('<optgroup></optgroup>').attr('label', 'รถยนต์');
                                                data.carModels.forEach(function(option) {
                                                    const opt = $('<option></option>').val(option.Model_car).text(option.Model_car);
                                                    carOptGroup.append(opt);
                                                });
                                                selectElement.append(carOptGroup);
                                            } else if (assetType === 'มอเตอร์ไซค์' && data.motoModels && data.motoModels.length > 0) {
                                                const motoOptGroup = $('<optgroup></optgroup>').attr('label', 'มอเตอร์ไซค์');
                                                data.motoModels.forEach(function(option) {
                                                    const opt = $('<option></option>').val(option.Model_moto).text(option.Model_moto);
                                                    motoOptGroup.append(opt);
                                                });
                                                selectElement.append(motoOptGroup);
                                            }

                                            // แสดง `#Vehicle_Gear` options ที่ซ่อนอยู่
                                            $('#Vehicle_Gear option').removeAttr('hidden');
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Model car and moto options:', error);
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
                showPlaceholderSelect('#Vehicle_OldLicense_Province', '*กรุณากรอกข้อมูลนี้*',
                    '#provinceLabel');
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

            if ($('#Ratetype_id').val().trim() === '') {
                valid = false;
                missingFields.push('ประเภทรถ 1');
                $('#Ratetype_id').addClass('border-red-500');
                showPlaceholder('#Ratetype_id', '*กรุณากรอกข้อมูลนี้*', 'label[for="Ratetype_id"]');
            } else {
                $('#Ratetype_id').removeClass('border-red-500');
            }

            if ($('#Name_Vehicle').val().trim() === '') {
                valid = false;
                missingFields.push('ประเภทรถ 2');
                $('#Name_Vehicle').addClass('border-red-500');
                showPlaceholder('#Name_Vehicle', '*กรุณากรอกข้อมูลนี้*', 'label[for="Name_Vehicle"]');
            } else {
                $('#Name_Vehicle').removeClass('border-red-500');
            }

            if ($('#Brand_car').val().trim() === '') {
                valid = false;
                missingFields.push('ยี่ห้อรถ');
                $('#Brand_car').addClass('border-red-500');
                showPlaceholder('#Brand_car', '*กรุณากรอกข้อมูลนี้*', 'label[for="Brand_car"]');
            } else {
                $('#Brand_car').removeClass('border-red-500');
            }

            if ($('#Group_car_and_moto').val().trim() === '') {
                valid = false;
                missingFields.push('กลุ่มรถ');
                $('#Group_car_and_moto').addClass('border-red-500');
                showPlaceholder('#Group_car_and_moto', '*กรุณากรอกข้อมูลนี้*', 'label[for="Group_car_and_moto"]');
            } else {
                $('#Group_car_and_moto').removeClass('border-red-500');
            }

            if ($('#Year_car_and_moto').val().trim() === '') {
                valid = false;
                missingFields.push('ปีรถ');
                $('#Year_car_and_moto').addClass('border-red-500');
                showPlaceholder('#Year_car_and_moto', '*กรุณากรอกข้อมูลนี้*', 'label[for="Year_car_and_moto"]');
            } else {
                $('#Year_car_and_moto').removeClass('border-red-500');
            }

            if ($('#Model_car_and_moto').val().trim() === '') {
                valid = false;
                missingFields.push('รุ่นรถ');
                $('#Model_car_and_moto').addClass('border-red-500');
                showPlaceholder('#Model_car_and_moto', '*กรุณากรอกข้อมูลนี้*', 'label[for="Model_car_and_moto"]');
            } else {
                $('#Model_car_and_moto').removeClass('border-red-500');
            }

            if ($('#Vehicle_Gear').val().trim() === '') {
                valid = false;
                missingFields.push('รุ่นรถ');
                $('#Vehicle_Gear').addClass('border-red-500');
                showPlaceholder('#Vehicle_Gear', '*กรุณากรอกข้อมูลนี้*', 'label[for="Vehicle_Gear"]');
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

                // let customerId = $('#customer_id').val(); // หรือวิธีอื่นๆในการตั้งค่า

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
                            // window.location.href = "/data_assets";
                            var customerId = $('#Customer_id').val();

                            // ทำการ redirect ไปที่ customer/profile พร้อม customerId
                            window.location.href = "{{ url('customer/profile') }}/" + customerId;
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
