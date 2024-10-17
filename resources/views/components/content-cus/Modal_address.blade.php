@include('components.content-cus.component_js')


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

        // เมื่อมีการเปลี่ยนแปลงค่าใน houseZone_Adds
        $('#houseZone_Adds').change(function() {
            var selectedZone = $(this).val();

            if (selectedZone !== "") {
                // เรียก AJAX เพื่อดึงข้อมูลตาม Zone_pro ที่เลือก
                $.ajax({
                    url: '/getDataByZone',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        zone: selectedZone
                    },
                    success: function(data) {
                        // ลบตัวเลือกเก่าก่อนเพิ่มใหม่
                        $('#houseProvince_Adds').empty().append(
                            '<option value="">จังหวัด</option>');
                        $('#houseDistrict_Adds').empty().append(
                            '<option value="">อำเภอ</option>');
                        $('#houseTambon_Adds').empty().append(
                            '<option value="">ตำบล</option>');
                        $('#Postal_Adds').empty().append(
                            '<option value="">รหัสไปรษณีย์</option>');

                        // เพิ่มข้อมูลจังหวัด
                        data.provinces.forEach(function(province) {
                            $('#houseProvince_Adds').append(
                                $('<option>', {
                                    value: province.Province_pro,
                                    text: province.Province_pro
                                })
                            );
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            } else {
                // ถ้าไม่ได้เลือก Zone_pro ให้ลบข้อมูลใน select อื่น ๆ
                $('#houseProvince_Adds').empty().append('<option value="">จังหวัด</option>');
                $('#houseDistrict_Adds').empty().append('<option value="">อำเภอ</option>');
                $('#houseTambon_Adds').empty().append('<option value="">ตำบล</option>');
                $('#Postal_Adds').empty().append('<option value="">รหัสไปรษณีย์</option>');
            }
        });

        // เมื่อมีการเปลี่ยนแปลงค่าใน houseProvince_Adds
        $('#houseProvince_Adds').change(function() {
            var selectedProvince = $(this).val();

            if (selectedProvince !== "") {
                // เรียก AJAX เพื่อดึงข้อมูลอำเภอที่สัมพันธ์กับจังหวัดที่เลือก
                $.ajax({
                    url: '/getDistrictsByProvince',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        province: selectedProvince
                    },
                    success: function(districts) {
                        // ลบตัวเลือกเก่าก่อนเพิ่มใหม่
                        $('#houseDistrict_Adds').empty().append(
                            '<option value="">อำเภอ</option>');
                        $('#houseTambon_Adds').empty().append(
                            '<option value="">ตำบล</option>');
                        $('#Postal_Adds').empty().append(
                            '<option value="">รหัสไปรษณีย์</option>');

                        // เพิ่มข้อมูลอำเภอ
                        districts.forEach(function(district) {
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
            } else {
                // ถ้าไม่ได้เลือก Province_pro ให้ลบข้อมูลใน select อื่น ๆ
                $('#houseDistrict_Adds').empty().append('<option value="">อำเภอ</option>');
                $('#houseTambon_Adds').empty().append('<option value="">ตำบล</option>');
                $('#Postal_Adds').empty().append('<option value="">รหัสไปรษณีย์</option>');
            }
        });

        // เมื่อมีการเปลี่ยนแปลงค่าใน houseDistrict_Adds
        $('#houseDistrict_Adds').change(function() {
            var selectedDistrict = $(this).val();

            if (selectedDistrict !== "") {
                // เรียก AJAX เพื่อดึงข้อมูลตำบลที่สัมพันธ์กับอำเภอที่เลือก
                $.ajax({
                    url: '/getTambonsByDistrict',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        district: selectedDistrict
                    },
                    success: function(tambons) {
                        // ลบตัวเลือกเก่าก่อนเพิ่มใหม่
                        $('#houseTambon_Adds').empty().append(
                            '<option value="">ตำบล</option>');
                        $('#Postal_Adds').empty().append(
                            '<option value="">รหัสไปรษณีย์</option>');

                        // เพิ่มข้อมูลตำบล
                        tambons.forEach(function(tambon) {
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
            } else {
                // ถ้าไม่ได้เลือก District_pro ให้ลบข้อมูลใน select อื่น ๆ
                $('#houseTambon_Adds').empty().append('<option value="">ตำบล</option>');
                $('#Postal_Adds').empty().append('<option value="">รหัสไปรษณีย์</option>');
            }
        });

        // เมื่อมีการเปลี่ยนแปลงค่าใน houseTambon_Adds
        $('#houseTambon_Adds').change(function() {
            var selectedTambon = $(this).val();

            if (selectedTambon !== "") {
                // เรียก AJAX เพื่อดึงข้อมูลรหัสไปรษณีย์ที่สัมพันธ์กับตำบลที่เลือก
                $.ajax({
                    url: '/getPostcodesByTambon',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        tambon: selectedTambon
                    },
                    success: function(postcodes) {
                        // ลบตัวเลือกเก่าก่อนเพิ่มใหม่
                        $('#Postal_Adds').empty().append(
                            '<option value="">รหัสไปรษณีย์</option>');

                        // เพิ่มข้อมูลรหัสไปรษณีย์
                        postcodes.forEach(function(postcode) {
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
            } else {
                // ถ้าไม่ได้เลือก Tambon_pro ให้ลบข้อมูลใน select อื่น ๆ
                $('#Postal_Adds').empty().append('<option value="">รหัสไปรษณีย์</option>');
            }
        });
    });
</script>




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
                        text: 'สร้างข้อมูลที่อยู่ลูกค้าสำเร็จแล้ว!',
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



