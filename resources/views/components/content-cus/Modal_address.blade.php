@include('components.content-cus.component_js')
{{-- @include('components.content-cus.check_data_zone') --}}


<div id="modalAddress" class="fixed inset-0 flex items-center justify-center z-50 hidden mt-[-30]" style="height: 110%">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- ปุ่มปิด modal -->
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_address"
                    class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/home.gif') }}" alt="career icon" class="avatar-sm"
                        style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">เพิ่มที่อยู่ลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Add Customer Address)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>
            <form id="addressForm">
                <!-- เพิ่มเนื้อหาของ Modal ที่นี่ -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pt-2">
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ADR-0001"
                                        name="Type_Adds" id="adds-0">
                                    <label class="form-check-label text-base text-gray-700" for="adds-0">
                                        ที่อยู่ปัจจุบัน
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ADR-0002"
                                        name="Type_Adds" id="adds-1">
                                    <label class="form-check-label text-base text-gray-700" for="adds-1">
                                        ที่อยู่ส่งเอกสาร
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ADR-0003"
                                        name="Type_Adds" id="adds-2">
                                    <label class="form-check-label text-base text-gray-700" for="adds-2">
                                        ที่อยู่ตามสำเนา
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ asset('img/home2.jpg') }}" alt="theme image" class="avatar-sm">
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-4 mt-2">
                        <div class="relative">
                            <input type="text" id="Registration_number" name="Registration_number"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder="----- -----" required onfocus="moveLabel('Registration_number')"
                                onblur="checkInput('Registration_number')"
                                oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                oninput="this.setCustomValidity('')">
                            <label for="Registration_number"
                                class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                เลขทะเบียนบ้าน
                            </label>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('#Registration_number').mask('00000000000'); // กำหนดรูปแบบเป็น 11 หลัก
                            });
                        </script>




                        <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                            <div class="relative">
                                <input type="text" id="houseNumber_Adds" name="houseNumber_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('houseNumber_Adds')"
                                    onblur="checkInput('houseNumber_Adds')">
                                <label for="houseNumber_Adds"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    บ้านเลขที่
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="houseGroup_Adds" name="houseGroup_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('houseGroup_Adds')"
                                    onblur="checkInput('houseGroup_Adds')">
                                <label for="houseGroup_Adds"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หมู่
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="building_Adds" name="building_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('building_Adds')"
                                    onblur="checkInput('building_Adds')">
                                <label for="building_Adds"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    อาคาร
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="village_Adds" name="village_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('village_Adds')"
                                    onblur="checkInput('village_Adds')">
                                <label for="village_Adds"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หมู่บ้าน
                                </label>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                            <div class="relative">
                                <input type="text" id="roomNumber_Adds" name="roomNumber_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('roomNumber_Adds')"
                                    onblur="checkInput('roomNumber_Adds')">
                                <label for="roomNumber_Adds"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    เลขที่ห้อง
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="Floor_Adds" name="Floor_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('Floor_Adds')"
                                    onblur="checkInput('Floor_Adds')">
                                <label for="Floor_Adds"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ชั้นที่
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="alley_Adds" name="alley_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('alley_Adds')"
                                    onblur="checkInput('alley_Adds')">
                                <label for="alley_Adds"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ซอย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="road_Adds" name="road_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('road_Adds')"
                                    onblur="checkInput('road_Adds')">
                                <label for="road_Adds"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ถนน
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="relative">
                                <select id="houseZone_Adds" name="houseZone_Adds"
                                    onfocus="moveLabel('houseZone_Adds')" onblur="checkInput('houseZone_Adds')"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">ภูมิภาค</option>
                                </select>

                                <label for="houseZone_Adds"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ภูมิภาค
                                </label>
                            </div>


                            <div class="relative">
                                <select id="houseProvince_Adds" name="houseProvince_Adds"
                                    onfocus="moveLabel('houseProvince_Adds')"
                                    onblur="checkInput('houseProvince_Adds')"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    required oninvalid="this.setCustomValidity('กรุณาเลือกจังหวัด')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">จังหวัด</option>
                                </select>

                                <label for="houseProvince_Adds"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    จังหวัด
                                </label>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="relative">
                                <select id="houseDistrict_Adds" name="houseDistrict_Adds"
                                    onfocus="moveLabel('houseDistrict_Adds')"
                                    onblur="checkInput('houseDistrict_Adds')"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">อำเภอ</option>
                                </select>

                                <label for="houseDistrict_Adds"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    อำเภอ
                                </label>
                            </div>

                            <div class="relative">
                                <select id="houseTambon_Adds" name="houseTambon_Adds"
                                    onfocus="moveLabel('houseTambon_Adds')" onblur="checkInput('houseTambon_Adds')"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">ตำบล</option>
                                </select>

                                <label for="houseTambon_Adds"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ตำบล
                                </label>
                            </div>
                        </div>


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="relative">
                                {{-- <input type="text" id="Postal_Adds" name="Postal_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('Postal_Adds')"
                                onblur="checkInput('Postal_Adds')"> --}}
                                <div class="relative">
                                    <select id="Postal_Adds" name="Postal_Adds" onfocus="moveLabel('Postal_Adds')"
                                        onblur="checkInput('Postal_Adds')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                        required oninvalid="this.setCustomValidity('กรุณาเลือกรหัสไปรษณีย์')"
                                        oninput="this.setCustomValidity('')">
                                        <option value="">รหัสไปรษณีย์</option>
                                    </select>

                                    <label for="Postal_Adds"
                                        class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        รหัสไปรษณีย์
                                    </label>
                                </div>


                                {{-- <label for="Postal_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                รหัสไปรณีย์
                            </label> --}}
                            </div>

                            <div class="relative">
                                <input type="text" id="Coordinates_Adds" name="Coordinates_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('Coordinates_Adds')"
                                    onblur="checkInput('Coordinates_Adds')">

                                <label for="Coordinates_Adds"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    พิกัด
                                </label>
                            </div>
                        </div>

                        <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                            <textarea id="Detail_Adds" name="Detail_Adds" rows="1"
                                class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('Detail_Adds')" onblur="checkInput('Detail_Adds')"></textarea>
                            <label for="Detail_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                รายละเอียด
                            </label>
                        </div>

                        <div class="flex justify-end space-x-2">
                            <!-- ปุ่ม บันทึก -->
                            <button type="submit" id="submitBtnAddress"
                                class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-500 flex items-center space-x-2 transition duration-300">
                                <i class="fas fa-save"></i> <!-- ไอคอน "บันทึก" ของ Font Awesome -->
                                <span>สร้างทรัพย์ใหม่</span>
                            </button>

                            <!-- ปุ่ม ยกเลิก -->
                            <button type="button" id="closeModal_address_button"
                                class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-400 flex items-center space-x-2 transition duration-300">
                                <i class="fas fa-times"></i> <!-- ไอคอน "ยกเลิก" ของ Font Awesome -->
                                <span>ยกเลิก</span>
                            </button>
                        </div>
            </form>

        </div>
    </div>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    /* เปลี่ยน cursor เป็นเครื่องหมายห้าม สำหรับ input, select และ textarea ที่ถูก disabled */
    input[disabled],
    select[disabled],
    textarea[disabled] {
        cursor: not-allowed;
    }

    /* เปลี่ยน cursor เป็นเครื่องหมายห้าม สำหรับ label ที่เกี่ยวข้องกับ input, select และ textarea ที่ถูก disabled */
    input[disabled]+label,
    select[disabled]+label,
    textarea[disabled]+label {
        cursor: not-allowed;
        /* เปลี่ยน cursor เป็นเครื่องหมายห้าม */
    }

    .scrollbar-hidden::-webkit-scrollbar {
        display: none;
    }
</style>


{{-- <script>
    $(document).ready(function() {
        $.ajax({
            url: '/zones',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // เพิ่มตัวเลือกใน select
                data.forEach(function(zone) {
                    $('#houseZone_Adds').append(
                        $('<option>', {
                            value: zone.Zone_pro,
                            text: zone.Zone_pro
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching zones:', error);
            }
        });

        $.ajax({
            url: '/provinces', // URL สำหรับดึงข้อมูล
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // ตรวจสอบว่าข้อมูลที่ได้รับคืออะไร
                console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ

                // เพิ่มตัวเลือกใน select
                data.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province.Province_pro,
                            text: province.Province_pro
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching provinces:', error);
            }
        });

        // ดึงข้อมูล Districts
        $.ajax({
            url: '/districts', // URL สำหรับดึงข้อมูล
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ
                data.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district.District_pro,
                            text: district.District_pro
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching districts:', error);
            }
        });

        // ดึงข้อมูล Tambons
        $.ajax({
            url: '/tambons', // URL สำหรับดึงข้อมูล
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ
                data.forEach(function(tambon) {
                    $('#houseTambon_Adds').append(
                        $('<option>', {
                            value: tambon.Tambon_pro,
                            text: tambon.Tambon_pro
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching tambons:', error);
            }
        });


        // ดึงข้อมูล Postcodes
        $.ajax({
            url: '/postcodes', // URL สำหรับดึงข้อมูล
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ
                // ลบตัวเลือกเก่าก่อนเพิ่มใหม่
                $('#Postal_Adds').empty().append('<option value="">รหัสไปรษณีย์</option>');

                data.forEach(function(postcode) {
                    $('#Postal_Adds').append(
                        $('<option>', {
                            value: postcode.Postcode_pro,
                            text: postcode.Postcode_pro
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching postcodes:', error);
            }
        });

    });
</script> --}}











<script>
    $(document).ready(function() {
        // Disable the input fields, selects, and textarea initially
        $('#addressForm input:not([name="Type_Adds"]), #addressForm select, #addressForm textarea').prop(
            'disabled', true);

        // Enable fields when a radio button is checked
        $('input[name="Type_Adds"]').change(function() {
            if ($(this).is(':checked')) {
                $('#addressForm input:not([name="Type_Adds"]), #addressForm select, #addressForm textarea')
                    .prop('disabled', false);
            }
        });

        // Optional: If you want to disable again if both radio buttons are unchecked
        $('input[name="Type_Adds"]').on('change', function() {
            if (!$('input[name="Type_Adds"]:checked').length) {
                $('#addressForm input:not([name="Type_Adds"]), #addressForm select, #addressForm textarea')
                    .prop('disabled', true);
            }
        });
    });
</script>



<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // ตรวจสอบการคลิกปุ่มบันทึก
        $('#submitBtnAddress').on('click', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มตามปกติ
            $('#addressForm').submit(); // ส่งฟอร์ม
        });

        $('#addressForm').on('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มตามปกติ

            // Clear previous errors
            $('.error').remove();

            var isValid = true;

            // เช็คฟิลด์บ้านเลขที่
            if ($('#houseNumber_Adds').val().trim() === '') {
                $('#houseNumber_Adds').addClass('border-red-500');
                $('#houseNumber_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกบ้านเลขที่</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์หมู่
            if ($('#houseGroup_Adds').val().trim() === '') {
                $('#houseGroup_Adds').addClass('border-red-500');
                $('#houseGroup_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกหมู่บ้าน</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์ภูมิภาค
            if ($('#houseZone_Adds').val().trim() === '') {
                $('#houseZone_Adds').addClass('border-red-500');
                $('#houseZone_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกภูมิภาค</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์จังหวัด
            if ($('#houseProvince_Adds').val().trim() === '') {
                $('#houseProvince_Adds').addClass('border-red-500');
                $('#houseProvince_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกจังหวัด</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์อำเภอ
            if ($('#houseDistrict_Adds').val().trim() === '') {
                $('#houseDistrict_Adds').addClass('border-red-500');
                $('#houseDistrict_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกอำเภอ</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์ตำบล
            if ($('#houseTambon_Adds').val().trim() === '') {
                $('#houseTambon_Adds').addClass('border-red-500');
                $('#houseTambon_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกตำบล</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์รหัสไปรษณีย์
            if ($('#Postal_Adds').val().trim() === '') {
                $('#Postal_Adds').addClass('border-red-500');
                $('#Postal_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกรหัสไปรษณีย์</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์พิกัด
            if ($('#Coordinates_Adds').val().trim() === '') {
                $('#Coordinates_Adds').addClass('border-red-500');
                $('#Coordinates_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกพิกัด</span>'
                );
                isValid = false;
            }

            // เช็คฟิลด์รายละเอียด
            if ($('#Detail_Adds').val().trim() === '') {
                $('#Detail_Adds').addClass('border-red-500');
                $('#Detail_Adds').after(
                    '<span class="error text-red-500 text-xs flex items-center mt-1"><i class="fas fa-exclamation-circle mr-2"></i>กรุณากรอกรายละเอียด</span>'
                );
                isValid = false;
            }


            // ถ้ามี error และไม่ผ่าน validation
            if (!isValid) {
                // ตั้งเวลาให้ข้อความ error แสดงเป็นเวลา 4 วินาที แล้วค่อย fade out หายไปอย่างช้า ๆ
                setTimeout(function() {
                    $('.error').fadeOut(1000, function() { // fade out ภายใน 3 วินาที
                        $(this).remove(); // ลบ element เมื่อ fade out เสร็จ
                    });
                }, 2000); // 4000 milliseconds = 4 seconds

                return; // หยุดการทำงานถ้าฟอร์มไม่ valid
            }


            var formData = $(this).serialize();

            $.ajax({
                url: '{{ route('address.store') }}', // URL ที่ถูกต้อง
                method: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: 'สำเร็จ!',
                        text: 'สร้างอาชีพลูกค้าสำเร็จแล้ว!',
                        icon: 'success',
                        confirmButtonText: 'ตกลง'
                    }).then(() => {
                        location.reload(); // รีเฟรชหน้าหลังจากแสดงข้อความสำเร็จ
                    });
                    $('#addressForm')[0].reset(); // รีเซ็ตฟอร์ม
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        $.each(errors, function(key, value) {
                            Swal.fire({
                                title: 'ข้อผิดพลาด!',
                                text: value[0],
                                icon: 'error',
                                confirmButtonText: 'ตกลง'
                            });
                        });
                    } else {
                        Swal.fire({
                            title: 'ข้อผิดพลาด!',
                            text: 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง.',
                            icon: 'error',
                            confirmButtonText: 'ตกลง'
                        });
                    }
                }
            });
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addAddressButton = document.getElementById('addAddressButton');
        const modalAddress = document.getElementById('modalAddress');
        const closeModalAddress = document.getElementById('closeModal_address');
        const closeModalAddressButton = document.getElementById('closeModal_address_button');

        // เปิด Modal
        addAddressButton.addEventListener('click', function() {
            modalAddress.classList.remove('hidden');
            modalAddress.classList.add('modal-enter');
            setTimeout(() => {
                modalAddress.classList.add('modal-enter-active');
                modalAddress.classList.remove('modal-enter');
                modalAddress.style.backgroundColor =
                    'rgba(0, 0, 0, 0.5)'; // เพิ่มพื้นหลังสีเทาอ่อน
            }, 10); // ช่วยให้ CSS transition ทำงาน
        });

        // ปิด Modal เมื่อคลิกที่ปุ่มปิด
        closeModalAddress.addEventListener('click', function() {
            modalAddress.classList.remove('modal-enter-active');
            modalAddress.classList.add('modal-leave-active');
            setTimeout(() => {
                modalAddress.classList.add('hidden');
                modalAddress.classList.remove('modal-leave-active');
            }, 300); // ใช้เวลาในการจาง
        });

        closeModalAddressButton.addEventListener('click', function() {
            modalAddress.classList.remove('modal-enter-active');
            modalAddress.classList.add('modal-leave-active');
            setTimeout(() => {
                modalAddress.classList.add('hidden');
                modalAddress.classList.remove('modal-leave-active');
            }, 300); // ใช้เวลาในการจาง
        });

        // ปิด modal เมื่อคลิกที่นอก modal
        window.addEventListener('click', function(event) {
            if (event.target === modalAddress) {
                closeModalAddress.click(); // เรียกใช้ปุ่มปิด
            }
        });
    });
</script>

<style>
    /* CSS สำหรับเอฟเฟกต์ slide-fade */
    .modal-enter {
        opacity: 0;
        transform: translateY(-20px);
        /* เลื่อนขึ้น */
    }

    .modal-enter-active {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.3s ease, transform 0.3s ease;
        /* ใช้ transition */
    }

    .modal-leave {
        opacity: 1;
        transform: translateY(0);
        /* อยู่ที่ตำแหน่งเดิม */
    }

    .modal-leave-active {
        opacity: 0;
        transform: translateY(20px);
        /* เลื่อนลง */
        transition: opacity 0.3s ease, transform 0.3s ease;
        /* ใช้ transition */
    }
</style>






<script>
    $(document).ready(function() {
        $.ajax({
            url: '/zones',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // เพิ่มตัวเลือกใน select
                data.forEach(function(zone) {
                    $('#houseZone_Adds').append(
                        $('<option>', {
                            value: zone.Zone_pro,
                            text: zone.Zone_pro
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching zones:', error);
            }
        });

        // เมื่อเลือกภูมิภาค
        $('#houseZone_Adds').on('change', function() {
            var selectedZone = $(this).val(); // ค่าโซนที่ถูกเลือก

            // ลบตัวเลือกเก่าใน select จังหวัด
            $('#houseProvince_Adds').empty().append('<option value="">จังหวัด</option>');

            // ตรวจสอบภูมิภาคที่เลือกและเพิ่มจังหวัดตามภูมิภาคนั้น ๆ
            if (selectedZone === 'ภาคเหนือ') {
                // จังหวัดในภาคเหนือ
                var northernProvinces = [
                    'เชียงราย', 'เชียงใหม่', 'แม่ฮ่องสอน',
                    'ลำปาง', 'ลำพูน', 'พะเยา',
                    'แพร่', 'น่าน', 'อุตรดิตถ์'
                ];
                northernProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคตะวันตก') {
                // จังหวัดในภาคตะวันตก
                var westernProvinces = [
                    'กาญจนบุรี', 'ตาก', 'ราชบุรี',
                    'เพชรบุรี', 'ประจวบคีรีขันธ์'
                ];
                westernProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคตะวันออก') {
                // จังหวัดในภาคตะวันออก
                var easternProvinces = [
                    'ชลบุรี', 'ระยอง', 'จันทบุรี',
                    'ตราด', 'ฉะเชิงเทรา'
                ];
                easternProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคตะวันออกเฉียงเหนือ') {
                // จังหวัดในภาคตะวันออกเฉียงเหนือ
                var northeasternProvinces = [
                    'อุบลราชธานี', 'ขอนแก่น', 'นครราชสีมา',
                    'เลย', 'มหาสารคาม', 'กาฬสินธุ์', 'สุรินทร์'
                ];
                northeasternProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคใต้') {
                // จังหวัดในภาคใต้
                var southernProvinces = [
                    'กระบี่', 'ชุมพร', 'ตรัง', 'นครศรีธรรมราช', 'นราธิวาส',
                    'ปัตตานี', 'พังงา', 'พัทลุง', 'ภูเก็ต', 'ยะลา',
                    'ระนอง', 'สงขลา', 'สตูล', 'สุราษฎร์ธานี'
                ];

                southernProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคกลาง') {
                // จังหวัดในภาคกลาง
                var centralProvinces = [
                    'กรุงเทพมหานคร', 'นนทบุรี', 'ปทุมธานี',
                    'สมุทรปราการ', 'สมุทรสาคร', 'พระนครศรีอยุธยา',
                    'ชัยนาท', 'ลพบุรี', 'นครปฐม',
                    'สุพรรณบุรี', 'สิงห์บุรี', 'อ่างทอง'
                ];

                centralProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else {

            }
        });


        $('#houseProvince_Adds').on('change', function() {
            var selectedProvince = $(this).val(); // ค่าจังหวัดที่ถูกเลือก

            // ลบตัวเลือกเก่าใน select เขต
            $('#houseDistrict_Adds').empty().append('<option value="">อำเภอ</option>');

            if (selectedProvince === 'เชียงราย') {
                // เขตในจังหวัดเชียงราย
                var chiangRaiDistricts = [
                    'เมืองเชียงราย', 'แม่สรวย', 'เชียงของ',
                    'เวียงแก่น', 'ป่าแดด', 'แม่จัน',
                    'ดอยหล่อ', 'พญาเม็งราย', 'แม่ฟ้าหลวง',
                    'ขุนตาล', 'บ้านดู่', 'จอมทอง'
                ];

                chiangRaiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'เชียงใหม่') {
                // เขตในจังหวัดเชียงใหม่
                var chiangMaiDistricts = [
                    'เมืองเชียงใหม่', 'แม่ริม', 'ดอยสะเก็ด',
                    'หางดง', 'สารภี', 'สันกำแพง',
                    'แม่แตง', 'ป่าแดด', 'แม่วาง'
                ];

                chiangMaiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'แม่ฮ่องสอน') {
                // เขตในจังหวัดแม่ฮ่องสอน
                var maeHongSonDistricts = [
                    'เมืองแม่ฮ่องสอน', 'ปาย', 'แม่ลาน้อย',
                    'แม่สะเรียง', 'ขุนยวม'
                ];

                maeHongSonDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ลำปาง') {
                // เขตในจังหวัดลำปาง
                var lampangDistricts = [
                    'เมืองลำปาง', 'แม่ทะ', 'เกาะคา',
                    'ลำปางหลวง', 'งาว', 'เสริมงาม'
                ];

                lampangDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ลำพูน') {
                // เขตในจังหวัดลำพูน
                var lamphunDistricts = [
                    'เมืองลำพูน', 'บ้านโฮ่ง', 'ลำพูน',
                    'ป่าซาง', 'แม่ทา', 'ดอยติ'
                ];

                lamphunDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พะเยา') {
                // เขตในจังหวัดพะเยา
                var phayaoDistricts = [
                    'เมืองพะเยา', 'เชียงคำ', 'ดอกคำใต้',
                    'ป่าแดด', 'แม่ใจ', 'ร้องกวาง'
                ];

                phayaoDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'แพร่') {
                // เขตในจังหวัดแพร่
                var phraeDistricts = [
                    'เมืองแพร่', 'ร้องกวาง', 'สูงเม่น',
                    'บ้านถิ่น', 'หนองม่วง'
                ];

                phraeDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'น่าน') {
                // เขตในจังหวัดน่าน
                var nanDistricts = [
                    'เมืองน่าน', 'ภูเพียง', 'นาน้อย',
                    'นาหมื่น', 'เชียงกลาง', 'ท่าวังผา'
                ];

                nanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'อุตรดิตถ์') {
                // เขตในจังหวัดอุตรดิตถ์
                var uttaraditDistricts = [
                    'เมืองอุตรดิตถ์', 'ตรอน', 'ลับแล',
                    'บ้านโคก', 'ทองแสนขัน'
                ];

                uttaraditDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กาญจนบุรี') {
                // เขตในจังหวัดกาญจนบุรี
                var kanchanaburiDistricts = [
                    'เมืองกาญจนบุรี', 'ไทรโยค', 'ด่านมะขามเตี้ย',
                    'บ่อพลอย', 'ศรีสวัสดิ์', 'เลาขวัญ',
                    'ทองผาภูมิ', 'สังขละบุรี', 'พนมทวน'
                ];

                kanchanaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ตาก') {
                // เขตในจังหวัดตาก
                var takDistricts = [
                    'เมืองตาก', 'บ้านตาก', 'สามเงา',
                    'แม่สอด', 'ตาก', 'ท่าสองยาง'
                ];

                takDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ราชบุรี') {
                // เขตในจังหวัดราชบุรี
                var ratchaburiDistricts = [
                    'เมืองราชบุรี', 'จอมบึง', 'ดำเนินสะดวก',
                    'โพธาราม', 'บางแพ', 'บ้านคา'
                ];

                ratchaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'เพชรบุรี') {
                // เขตในจังหวัดเพชรบุรี
                var phetchaburiDistricts = [
                    'เมืองเพชรบุรี', 'ชะอำ', 'บางสะพาน',
                    'บ้านแหลม', 'แก่งกระจาน'
                ];

                phetchaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ประจวบคีรีขันธ์') {
                // เขตในจังหวัดประจวบคีรีขันธ์
                var prachuapKhiriKhanDistricts = [
                    'เมืองประจวบคีรีขันธ์', 'หัวหิน', 'ปราณบุรี',
                    'บางสะพาน', 'ทับสะแก', 'บ่อนอก'
                ];

                prachuapKhiriKhanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ชลบุรี') {
                // เขตในจังหวัดชลบุรี
                var chonburiDistricts = [
                    'เมืองชลบุรี', 'พานทอง', 'ศรีราชา',
                    'บางละมุง', 'สัตหีบ', 'บ่อวิน',
                    'บ้านบึง', 'หนองใหญ่'
                ];

                chonburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ระยอง') {
                // เขตในจังหวัดระยอง
                var rayongDistricts = [
                    'เมืองระยอง', 'บ้านฉาง', 'แกลง',
                    'ปราณบุรี', 'ปลวกแดง', 'พัทยา'
                ];

                rayongDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'จันทบุรี') {
                // เขตในจังหวัดจันทบุรี
                var chanthaburiDistricts = [
                    'เมืองจันทบุรี', 'ขลุง', 'เขาคิชฌกูฏ',
                    'ท่าใหม่', 'สอยดาว'
                ];

                chanthaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ตราด') {
                // เขตในจังหวัดตราด
                var TratDistricts = [
                    'เมืองตราด', 'บ่อไร่', 'คลองใหญ่',
                    'เกาะกูด', 'เกาะช้าง'
                ];

                TratDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ฉะเชิงเทรา') {
                // เขตในจังหวัดฉะเชิงเทรา
                var chachoengsaoDistricts = [
                    'เมืองฉะเชิงเทรา', 'บางปะกง', 'พนมสารคาม',
                    'คลองเขื่อน', 'ฉะเชิงเทรา', 'สนามชัยเขต'
                ];

                chachoengsaoDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'อุบลราชธานี') {
                // เขตในจังหวัดอุบลราชธานี
                var ubontDistricts = [
                    'เมืองอุบลราชธานี', 'กันทรลักษ์', 'เดชอุดม',
                    'ตระการพืชผล', 'เขมราฐ', 'นาจะหลวย',
                    'วารินชำราบ', 'โพธิ์ไทร'
                ];

                ubontDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ขอนแก่น') {
                // เขตในจังหวัดขอนแก่น
                var khonKaenDistricts = [
                    'เมืองขอนแก่น', 'บ้านไผ่', 'ชุมแพ',
                    'เขาสวนกวาง', 'หนองเรือ', 'น้ำพอง',
                    'ท้องถิ่น', 'อำเภอขอนแก่น'
                ];

                khonKaenDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นครราชสีมา') {
                // เขตในจังหวัดนครราชสีมา
                var nakhonRatchasimaDistricts = [
                    'เมืองนครราชสีมา', 'ปากช่อง', 'ขามทะเลสอ',
                    'ด่านขุนทด', 'ชุมพวง', 'บัวใหญ่',
                    'โนนสูง', 'เสิงสาง'
                ];

                nakhonRatchasimaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'เลย') {
                // เขตในจังหวัดเลย
                var loeiDistricts = [
                    'เมืองเลย', 'เชียงคาน', 'ภูเรือ',
                    'ด่านซ้าย', 'นาแห้ว', 'เอราวัณ'
                ];

                loeiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'มหาสารคาม') {
                // เขตในจังหวัดมหาสารคาม
                var mahaSarakhamDistricts = [
                    'เมืองมหาสารคาม', 'แกดำ', 'นาดูน',
                    'พยัคฆภูมิ', 'โกสุมพิสัย'
                ];

                mahaSarakhamDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กาฬสินธุ์') {
                // เขตในจังหวัดกาฬสินธุ์
                var kalasinDistricts = [
                    'เมืองกาฬสินธุ์', 'ห้วยเม็ก', 'คำม่วง',
                    'สมเด็จ', 'หนองกุงศรี'
                ];

                kalasinDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สุรินทร์') {
                // เขตในจังหวัดสุรินทร์
                var surinDistricts = [
                    'เมืองสุรินทร์', 'ชุมพลบุรี', 'รัตนบุรี',
                    'สนม', 'สังขะ', 'พนมดงรัก'
                ];

                surinDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กระบี่') {
                // เขตในจังหวัดกระบี่
                var krabiDistricts = [
                    'เมืองกระบี่', 'อ่าวลึก', 'คลองท่อม',
                    'ลำทับ', 'เขาพนม', 'ปลายพระยา',
                    'เกาะลันตา', 'เหนือคลอง'
                ];

                krabiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ชุมพร') {
                // เขตในจังหวัดชุมพร
                var chumphonDistricts = [
                    'เมืองชุมพร', 'ปะทิว', 'ท่าแซะ',
                    'หลังสวน', 'สวี', 'ละแม',
                    'พะโต๊ะ'
                ];

                chumphonDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ตรัง') {
                // เขตในจังหวัดตรัง
                var trangDistricts = [
                    'เมืองตรัง', 'ย่านตาขาว', 'ห้วยยอด',
                    'นาโยง', 'ตรัง', 'สิเกา',
                    'กันตัง'
                ];

                trangDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นครศรีธรรมราช') {
                // เขตในจังหวัดนครศรีธรรมราช
                var nakhonSiDistricts = [
                    'เมืองนครศรีธรรมราช', 'ท่าศาลา', 'นาบอน',
                    'พิปูน', 'ช้างกลาง', 'ร่อนพิบูลย์',
                    'ลานสกา', 'พระพรหม'
                ];

                nakhonSiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นราธิวาส') {
                // เขตในจังหวัดนราธิวาส
                var narathiwatDistricts = [
                    'เมืองนราธิวาส', 'ระแงะ', 'บาเจาะ',
                    'สุไหงโกลก', 'จะแนะ', 'รือเสาะ',
                    'ตากใบ'
                ];

                narathiwatDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ปัตตานี') {
                // เขตในจังหวัดปัตตานี
                var pattaniDistricts = [
                    'เมืองปัตตานี', 'หนองจิก', 'ทุ่งยางแดง',
                    'มายอ', 'สะบ้าย้อย', 'ปะนาเระ',
                    'โคกโพธิ์'
                ];

                pattaniDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พังงา') {
                // เขตในจังหวัดพังงา
                var phangngaDistricts = [
                    'เมืองพังงา', 'คุระบุรี', 'ตะกั่วป่า',
                    'ท้ายเหมือง', 'เพลิง', 'เกาะยาว'
                ];

                phangngaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พัทลุง') {
                // เขตในจังหวัดพัทลุง
                var phatthalungDistricts = [
                    'เมืองพัทลุง', 'กงหรา', 'ควนขนุน',
                    'ป่าบอน', 'ศรีบรรพต', 'ทุ่งนางจา',
                    'ตะโหมด', 'ศรีนครินทร์', 'บางแก้ว',
                    'เขาชัยสน', 'หัวไทร'
                ];



                phatthalungDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ภูเก็ต') {
                // เขตในจังหวัดภูเก็ต
                var phuketDistricts = [
                    'เมืองภูเก็ต', 'กะทู้', 'ถลาง'
                ];

                phuketDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ยะลา') {
                // เขตในจังหวัดยะลา
                var yalaDistricts = [
                    'เมืองยะลา', 'เบตง', 'รามัน',
                    'กรงปินัง', 'บันนังสตา', 'ทุ่งยางแดง'
                ];

                yalaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ระนอง') {
                // เขตในจังหวัดระนอง
                var ranongDistricts = [
                    'เมืองระนอง', 'กระบุรี', 'ละอุ่น',
                    'หลังสวน'
                ];

                ranongDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สงขลา') {
                // เขตในจังหวัดสงขลา
                var songkhlaDistricts = [
                    'เมืองสงขลา', 'หาดใหญ่', 'ควนเนียง',
                    'นาทวี', 'สะบ้าย้อย', 'เทพา',
                    'จะนะ', 'สทิงพระ', 'บางกล่ำ'
                ];

                songkhlaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สตูล') {
                // เขตในจังหวัดสตูล
                var satunDistricts = [
                    'เมืองสตูล', 'ควนกาหลง', 'ละงู',
                    'ท่าแพ', 'จะนะ', 'โคกโพธิ์'
                ];

                satunDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สุราษฎร์ธานี') {
                // เขตในจังหวัดสุราษฎร์ธานี
                var suratThaniDistricts = [
                    'เมืองสุราษฎร์ธานี', 'พุนพิน', 'ดอนสัก',
                    'คีรีรัฐนิคม', 'ท่าฉาง', 'เกาะสมุย',
                    'เกาะพะงัน'
                ];

                suratThaniDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กรุงเทพมหานคร') {
                // เขตในกรุงเทพมหานคร
                var bangkokDistricts = [
                    'ดินแดง', 'ดุสิต', 'บางรัก',
                    'บางเขน', 'บางกอกน้อย', 'บางกอกใหญ่',
                    'บางพลัด', 'บางซื่อ', 'พญาไท',
                    'ราชเทวี', 'สะพานสูง', 'ห้วยขวาง',
                    'คลองสามวา', 'หนองจอก', 'ลาดพร้าว',
                    'วังทองหลาง', 'ประเวศ', 'วัฒนา',
                    'คลองเตย', 'ธนบุรี', 'คลองสาน',
                    'สัมพันธวงศ์', 'เขตพื้นที่ปกครองพิเศษ'
                ];

                bangkokDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นนทบุรี') {
                // เขตในนนทบุรี
                var nonthaburiDistricts = [
                    'เมืองนนทบุรี', 'บางกรวย', 'บางใหญ่',
                    'ปากเกร็ด', 'รัตนาธิเบศร์'
                ];

                nonthaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ปทุมธานี') {
                // เขตในปทุมธานี
                var pathumThaniDistricts = [
                    'เมืองปทุมธานี', 'คลองหลวง', 'ธัญบุรี',
                    'ลาดหลุมแก้ว', 'หนองเสือ', 'สามโคก'
                ];

                pathumThaniDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สมุทรปราการ') {
                // เขตในสมุทรปราการ
                var samutPrakanDistricts = [
                    'เมืองสมุทรปราการ', 'พระประแดง', 'พระสมุทรเจดีย์',
                    'บางพลี', 'บางบ่อ', 'คลองด่าน',
                    'สำโรงเหนือ', 'สำโรงใต้'
                ];

                samutPrakanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สมุทรสาคร') {
                // เขตในสมุทรสาคร
                var samutSakhonDistricts = [
                    'เมืองสมุทรสาคร', 'บ้านแพ้ว', 'นครชัยศรี'
                ];

                samutSakhonDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พระนครศรีอยุธยา') {
                // เขตในพระนครศรีอยุธยา
                var phraNakhonSiAyutthayaDistricts = [
                    'พระนครศรีอยุธยา', 'บางปะหัน', 'บางไทร',
                    'บางซ้าย', 'บางระกำ', 'นครหลวง',
                    'อุทัย', 'ผักไห่', 'ลาดบัวหลวง',
                    'ท่าเรือ', 'เฉลิมพระเกียรติ'
                ];

                phraNakhonSiAyutthayaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ชัยนาท') {
                // เขตในชัยนาท
                var chaisanDistricts = [
                    'เมืองชัยนาท', 'มโนรมย์', 'วัดสิงห์',
                    'สรรคบุรี', 'หนองมะโมง', 'บรรพตพิสัย'
                ];

                chaisanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ลพบุรี') {
                // เขตในลพบุรี
                var lopburiDistricts = [
                    'เมืองลพบุรี', 'โคกสำโรง', 'พัฒนานิคม',
                    'บ้านหมี่', 'ท่าวุ้ง', 'ลำสนธิ',
                    'หนองม่วง'
                ];

                lopburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นครปฐม') {
                // เขตในนครปฐม
                var nakhonPathomDistricts = [
                    'เมืองนครปฐม', 'นครชัยศรี', 'สามพราน',
                    'พุทธมณฑล'
                ];

                nakhonPathomDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สุพรรณบุรี') {
                // เขตในสุพรรณบุรี
                var suphanburiDistricts = [
                    'เมืองสุพรรณบุรี', 'เดิมบางนางบวช', 'ด่านช้าง',
                    'สามชุก', 'อู่ทอง', 'บางปลาม้า',
                    'ศรีประจันต์', 'คลองขลุง'
                ];

                suphanburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สิงห์บุรี') {
                // เขตในสิงห์บุรี
                var singburiDistricts = [
                    'เมืองสิงห์บุรี', 'บางแสนน', 'ค่ายบางระจัน',
                    'อินทร์บุรี', 'พรหมบุรี'
                ];

                singburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'อ่างทอง') {
                // เขตในอ่างทอง
                var angthongDistricts = [
                    'เมืองอ่างทอง', 'ไชโย', 'ป่าโมก',
                    'โพธิ์ทอง', 'แสวงหา', 'สามโก้'
                ];

                angthongDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            }
        });
    });




    $('#houseDistrict_Adds').on('change', function() {
        var selectedDistrict = $(this).val(); // ค่าเขตที่ถูกเลือก

        // ลบตัวเลือกเก่าใน select ตำบล
        $('#houseTambon_Adds').empty().append('<option value="">ตำบล</option>');

        // ตรวจสอบเขตที่เลือกและเพิ่มตำบลตามเขตนั้น ๆ
        if (selectedDistrict === 'เมืองเชียงราย') {
            // ตำบลในเมืองเชียงราย
            var tambonsInChiangRai = [
                'แม่สาย', 'เชียงของ', 'เมืองเชียงราย',
                'ป่าอ้อดอนชัย', 'บ้านดู่', 'สันทราย',
                'สันกลาง', 'ห้วยสัก', 'หนองป่าก่อ',
                'เกาะช้าง'
            ];
            tambonsInChiangRai.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่สรวย') {
            // ตำบลในแม่สรวย
            var tambonsMaeSruay = [
                'แม่สรวย', 'เชียงของ', 'เมืองเชียงราย',
                'ป่าอ้อดอนชัย', 'บ้านดู่', 'แม่ลาน้อย',
                'ทุ่งรวงทอง', 'ป่าแดด'
            ];
            tambonsMaeSruay.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เชียงของ') {
            // ตำบลในเชียงของ
            var tambonsChianKong = ['บ้านแซว', 'บ้านห้วย', 'บ้านโป่ง', 'บ้านยาง', 'บ้านแม่เงิน'];
            tambonsChianKong.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เวียงแก่น') {
            // ตำบลในเวียงแก่น
            var tambonsWiangGan = ['บ้านด้าย', 'บ้านป่า', 'บ้านไร่', 'บ้านใหม่', 'บ้านท่าข้าม'];
            tambonsWiangGan.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ป่าแดด') {
            // ตำบลในป่าแดด
            var tambonsPaDaed = ['บ้านใหม่', 'บ้านห้วย', 'บ้านตะเคียน', 'บ้านกาด', 'บ้านนาทราย'];
            tambonsPaDaed.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่จัน') {
            // ตำบลในแม่จัน
            var tambonsMaechan = ['บ้านด้าย', 'บ้านโป่ง', 'บ้านใหม่', 'บ้านห้วย', 'บ้านแม่จัน',
                'บ้านสันป่าหวาย', 'บ้านแม่พริก', 'บ้านแม่ลอย', 'บ้านห้วยน้ำขุ่น', 'บ้านสันทราย'
            ];
            tambonsMaechan.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ดอยหล่อ') {
            // ตำบลในดอยหล่อ
            var tambonsDoiLo = ['ดอยหล่อ', 'บ้านกาด', 'บ้านโป่ง', 'แม่ทา', 'สันทราย', 'สันป่าตอง', 'บ้านหนองแก',
                'บ้านแม่แฝก', 'บ้านหนองอีบ', 'บ้านหัวน้ำ'
            ];
            tambonsDoiLo.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'พญาเม็งราย') {
            var tambonsPhayaMengrai = ['บ้านหนองบัว', 'บ้านหัวฝาย', 'บ้านแม่ปืม', 'บ้านแม่เจดีย์', 'บ้านจันทร์',
                'บ้านโป่งน้ำร้อน', 'บ้านแม่สุก'
            ];
            tambonsPhayaMengrai.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่ฟ้าหลวง') {
            var tambonsMaeFaLuang = ['บ้านท่าตอน', 'บ้านแม่ฟ้าหลวง', 'บ้านแม่สะลอง', 'บ้านแม่จัน',
                'บ้านแม่ฟ้าหลวง', 'บ้านแม่สาย'
            ];
            tambonsMaeFaLuang.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ขุนตาล') {
            var tambonsKhunTan = ['บ้านหลวง', 'บ้านขุนตาล', 'บ้านแม่ทราย', 'บ้านป่าบง', 'บ้านหนองช้าง'];
            tambonsKhunTan.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'บ้านดู่') {
            var tambonsBanDu = ['บ้านดู่', 'บ้านท่าม่วง', 'บ้านแม่ขะ', 'บ้านแม่ทา'];
            tambonsBanDu.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'จอมทอง') {
            var tambonsJomThong = ['บ้านจอมทอง', 'บ้านบ่อ', 'บ้านขี้เหล็ก', 'บ้านแม่สวด'];
            tambonsJomThong.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เมืองเชียงใหม่') {
            // ตำบลในเมืองเชียงใหม่
            var tambonsMuangChiangMai = ['บ้านป่าตอง', 'บ้านขอนแก่น', 'บ้านสันทราย', 'บ้านแสนเมือง',
                'บ้านหนองหอย', 'บ้านน้อยหน่า', 'บ้านแม่แรม', 'บ้านท่าศาลา'
            ];
            tambonsMuangChiangMai.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่ริม') {
            // ตำบลในแม่ริม
            var tambonsMaeRim = ['บ้านแม่ริม', 'บ้านสันนาเม็ง', 'บ้านป่าบง', 'บ้านสันทราย', 'บ้านแม่แรม'];
            tambonsMaeRim.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ดอยสะเก็ด') {
            // ตำบลในดอยสะเก็ด
            var tambonsDoiSaket = ['บ้านดอยสะเก็ด', 'บ้านสันนา', 'บ้านหนองหอย', 'บ้านแม่เหียะ', 'บ้านสบเปิง'];
            tambonsDoiSaket.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'หางดง') {
            // ตำบลในหางดง
            var tambonsHangDong = ['บ้านหางดง', 'บ้านแม่หอ', 'บ้านสันผีเสื้อ', 'บ้านแช่แห้ง', 'บ้านสันกำแพง'];
            tambonsHangDong.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'สารภี') {
            // ตำบลในสารภี
            var tambonsSaraphi = ['บ้านสารภี', 'บ้านทุ่งฝาย', 'บ้านนาพูน', 'บ้านหนองจอก', 'บ้านหนองหอย'];
            tambonsSaraphi.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'สันกำแพง') {
            // ตำบลในสันกำแพง
            var tambonsSanKamphaeng = ['บ้านสันกำแพง', 'บ้านท่าศาลา', 'บ้านบ้านโป่ง', 'บ้านหนองวัว',
                'บ้านหนองผึ้ง'
            ];
            tambonsSanKamphaeng.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่แตง') {
            // ตำบลในแม่แตง
            var tambonsMaeTang = ['บ้านแม่แตง', 'บ้านป่าบง', 'บ้านแม่แซม', 'บ้านกือหลวง', 'บ้านไฮ'];
            tambonsMaeTang.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ป่าแดด') {
            // ตำบลในป่าแดด
            var tambonsPaDaed = ['บ้านใหม่', 'บ้านห้วย', 'บ้านตะเคียน', 'บ้านกาด', 'บ้านนาทราย'];
            tambonsPaDaed.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่วาง') {
            // ตำบลในแม่วาง
            var tambonsMaeWang = ['บ้านแม่วาง', 'บ้านแม่วางเหนือ', 'บ้านแม่วางใต้', 'บ้านบ่อแก้ว',
            'บ้านป่าตัน'];
            tambonsMaeWang.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เมื่องแม่ฮ่องสอน') {
            // ตำบลในแม่ฮ่องสอน
            var tambonsMaeHongSon = ['บ้านหลวง', 'บ้านแม่ทราย', 'บ้านป่าแป๋', 'บ้านแม่ลาน', 'บ้านแม่ฮ่องสอน'];
            tambonsMaeHongSon.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }
    });
</script>
























{{-- // $.ajax({
    //     url: '/provinces', // URL สำหรับดึงข้อมูล
    //     method: 'GET',
    //     dataType: 'json',
    //     success: function(data) {
    //         // ตรวจสอบว่าข้อมูลที่ได้รับคืออะไร
    //         console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ

    //         // เพิ่มตัวเลือกใน select
    //         data.forEach(function(province) {
    //             $('#houseProvince_Adds').append(
    //                 $('<option>', {
    //                     value: province.Province_pro,
    //                     text: province.Province_pro
    //                 })
    //             );
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error fetching provinces:', error);
    //     }
    // });

    // ดึงข้อมูล Districts
    // $.ajax({
    //     url: '/districts', // URL สำหรับดึงข้อมูล
    //     method: 'GET',
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ
    //         data.forEach(function(district) {
    //             $('#houseDistrict_Adds').append(
    //                 $('<option>', {
    //                     value: district.District_pro,
    //                     text: district.District_pro
    //                 })
    //             );
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error fetching districts:', error);
    //     }
    // });

    // // ดึงข้อมูล Tambons
    // $.ajax({
    //     url: '/tambons', // URL สำหรับดึงข้อมูล
    //     method: 'GET',
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ
    //         data.forEach(function(tambon) {
    //             $('#houseTambon_Adds').append(
    //                 $('<option>', {
    //                     value: tambon.Tambon_pro,
    //                     text: tambon.Tambon_pro
    //                 })
    //             );
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error fetching tambons:', error);
    //     }
    // });


    // // ดึงข้อมูล Postcodes
    // $.ajax({
    //     url: '/postcodes', // URL สำหรับดึงข้อมูล
    //     method: 'GET',
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data); // เพิ่มการตรวจสอบข้อมูลที่ได้รับ
    //         // ลบตัวเลือกเก่าก่อนเพิ่มใหม่
    //         $('#Postal_Adds').empty().append('<option value="">รหัสไปรษณีย์</option>');

    //         data.forEach(function(postcode) {
    //             $('#Postal_Adds').append(
    //                 $('<option>', {
    //                     value: postcode.Postcode_pro,
    //                     text: postcode.Postcode_pro
    //                 })
    //             );
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error fetching postcodes:', error);
    //     }
    // }); --}}




















{{--
    // กรณีที่เลือกภูมิภาคอื่น ๆ
    // $.ajax({
    //     url: '/provinces', // URL สำหรับดึงข้อมูลจังหวัดทั้งหมด
    //     method: 'GET',
    //     dataType: 'json',
    //     success: function(data) {
    //         // เพิ่มตัวเลือกใหม่
    //         data.forEach(function(province) {
    //             $('#houseProvince_Adds').append(
    //                 $('<option>', {
    //                     value: province.Province_pro,
    //                     text: province.Province_pro
    //                 })
    //             );
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error fetching provinces:', error);
    //     }
    // }); --}}
