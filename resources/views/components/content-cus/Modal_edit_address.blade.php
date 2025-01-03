<div id="modal_edit_address_customer" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- Header -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('img/map.gif') }}" alt="career icon" class="avatar-sm" style="width:50px;height:50px">

                <div class="flex-grow">
                    <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลที่อยู่ลูกค้า</h5>
                    <p class="text-muted font-semibold text-sm mt-1">(Edit Customers Address)</p>
                    <div class="border-b-2 border-primary mt-2 w-full"></div>
                </div>

                <button class="text-gray-400 hover:text-gray-600" onclick="hideModal_edit_address()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <form id="editAddressForm" method="POST" action="{{ route('update-address') }}">
                @csrf

                <input type="hidden" id="addressId" name="id" value="{{ old('id', $address->id ?? '') }}">
                <!-- รหัสที่อยู่ที่ต้องการอัปเดต -->
                <input type="hidden" id="dataCusIdField" name="DataCus_id" value="{{ $customer->id }}">



                <!-- เพิ่มเนื้อหาของ Modal ที่นี่ -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Left Column -->
                    <div class="space-y-4">


                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pt-2">
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ปัจจุบัน"
                                        name="Type_Adds" id="Type_Adds_current">
                                    <label class="form-check-label text-base text-gray-700" for="Type_Adds_current">
                                        ที่อยู่ปัจจุบัน
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ส่งเอกสาร"
                                        name="Type_Adds" id="Type_Adds_document">
                                    <label class="form-check-label text-base text-gray-700" for="Type_Adds_document">
                                        ที่อยู่ส่งเอกสาร
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ตามสำเนา"
                                        name="Type_Adds" id="Type_Adds_copy">
                                    <label class="form-check-label text-base text-gray-700" for="Type_Adds_copy">
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

                        {{-- <input type="hidden" id="addressId" name="addressId" value="{{ $address->id }}"> --}}



                        <div class="relative">
                            <input type="text" id="Registration_number_edit" name="Registration_number"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder="----- -----" oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                oninput="this.setCustomValidity('')">
                            <label for="Registration_number_edit"
                                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                เลขทะเบียนบ้าน
                            </label>
                        </div>


                        <script>
                            $(document).ready(function() {
                                $('#Registration_number_edit').mask('00000000000'); // กำหนดรูปแบบเป็น 11 หลัก
                            });
                        </script>




                        <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                            <div class="relative">
                                <input type="text" id="houseNumber_Adds_edit" name="houseNumber_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " required>
                                <label for="houseNumber_Adds_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    บ้านเลขที่
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="houseGroup_Adds_edit" name="houseGroup_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="houseGroup_Adds_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หมู่
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="building_Adds_edit" name="building_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="building_Adds_edit"
                                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    อาคาร
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="village_Adds_edit" name="village_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="village_Adds_edit"
                                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หมู่บ้าน
                                </label>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                            <div class="relative">
                                <input type="text" id="roomNumber_Adds_edit" name="roomNumber_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="roomNumber_Adds_edit"
                                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    เลขที่ห้อง
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="Floor_Adds_edit" name="Floor_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Floor_Adds_edit"
                                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ชั้นที่
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="alley_Adds_edit" name="alley_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="alley_Adds_edit"
                                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ซอย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="road_Adds_edit" name="road_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="road_Adds_edit"
                                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ถนน
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="relative">
                                <select id="houseZone_Adds_edit" name="houseZone_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">ภูมิภาค</option>
                                </select>

                                <label for="houseZone_Adds_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ภูมิภาค
                                </label>
                            </div>


                            <div class="relative">
                                <select id="houseProvince_Adds_edit" name="houseProvince_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    oninvalid="this.setCustomValidity('กรุณาเลือกจังหวัด')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">จังหวัด</option>
                                </select>

                                <label for="houseProvince_Adds_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    จังหวัด
                                </label>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="relative">
                                <select id="houseDistrict_Adds_edit" name="houseDistrict_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">อำเภอ</option>
                                </select>

                                <label for="houseDistrict_Adds_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    อำเภอ
                                </label>
                            </div>

                            <div class="relative">
                                <select id="houseTambon_Adds_edit" name="houseTambon_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="">ตำบล</option>
                                </select>

                                <label for="houseTambon_Adds_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    ตำบล
                                </label>
                            </div>
                        </div>


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="relative">
                                <div class="relative">
                                    <select id="Postal_Adds_edit" name="Postal_Adds"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                        oninvalid="this.setCustomValidity('กรุณาเลือกรหัสไปรษณีย์')"
                                        oninput="this.setCustomValidity('')">
                                        <option value="">รหัสไปรษณีย์</option>
                                    </select>

                                    <label for="Postal_Adds_edit"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        รหัสไปรษณีย์
                                    </label>
                                </div>
                            </div>

                            <div class="relative">
                                <input type="text" id="Coordinates_Adds_edit" name="Coordinates_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">

                                <label for="Coordinates_Adds_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    พิกัด
                                </label>
                            </div>
                        </div>

                        <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                            <textarea id="Detail_Adds_edit" name="Detail_Adds" rows="1"
                                class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" "></textarea>
                            <label for="Detail_Adds_edit"
                                class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                รายละเอียด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-2 mt-4">
                    <!-- ปุ่ม บันทึก .... id="submitEditBtnAddress" onclick="updateAddress()" -->
                    <button type="submit" id="updateAddressButton"
                        class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-500 flex items-center space-x-2 transition duration-300">
                        <i class="fas fa-save"></i> <!-- ไอคอน "บันทึก" ของ Font Awesome -->
                        <span>อัปเดทข้อมูล</span>
                    </button>

                    <!-- ปุ่ม ยกเลิก -->
                    <button type="button" id="" onclick="hideModalEditAddress_customer()"
                        class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-400 flex items-center space-x-2 transition duration-300">
                        <i class="fas fa-times"></i> <!-- ไอคอน "ยกเลิก" ของ Font Awesome -->
                        <span>ยกเลิก</span>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function openModal_Edit_address_customer(button) {
        const addressId = $(button).data('id');

        $.ajax({
            url: '/get-address/' + addressId,
            type: 'GET',
            success: function(response) {
                // เติมข้อมูลในฟิลด์ต่างๆ
                $('#addressId').val(response.id);
                $('#addressIdCus').val(response.DataCus_id);
                $('input[name="Type_Adds"][value="' + response.Type_Adds + '"]').prop('checked', true);
                $('#Registration_number_edit').val(response.Registration_number);
                $('#houseNumber_Adds_edit').val(response.houseNumber_Adds);
                $('#road_Adds_edit').val(response.road_Adds);
                $('#village_Adds_edit').val(response.village_Adds);
                $('#houseGroup_Adds_edit').val(response.houseGroup_Adds);
                $('#building_Adds_edit').val(response.building_Adds);
                $('#roomNumber_Adds_edit').val(response.roomNumber_Adds);
                $('#Floor_Adds_edit').val(response.Floor_Adds);
                $('#alley_Adds_edit').val(response.alley_Adds);
                $('#Detail_Adds_edit').val(response.Detail_Adds);
                $('#Coordinates_Adds_edit').val(response.Coordinates_Adds);

                // ดึงข้อมูลภูมิภาค
                $.ajax({
                    url: '/zones',
                    type: 'GET',
                    success: function(zones) {
                        $('#houseZone_Adds_edit').empty().append('<option value="">ภูมิภาค</option>');
                        zones.forEach(zone => {
                            $('#houseZone_Adds_edit').append(
                                `<option value="${zone.Zone_pro}" ${zone.Zone_pro === response.houseZone_Adds ? 'selected' : ''}>${zone.Zone_pro}</option>`
                            );
                        });

                        // หลังจากเลือกภูมิภาค ให้ดึงข้อมูลจังหวัด
                        if (response.houseZone_Adds) {
                            $.ajax({
                                url: '/getDataByZone',
                                type: 'GET',
                                data: { zone: response.houseZone_Adds },
                                success: function(data) {
                                    $('#houseProvince_Adds_edit').empty().append('<option value="">จังหวัด</option>');
                                    data.provinces.forEach(province => {
                                        $('#houseProvince_Adds_edit').append(
                                            `<option value="${province.Province_pro}" ${province.Province_pro === response.houseProvince_Adds ? 'selected' : ''}>${province.Province_pro}</option>`
                                        );
                                    });

                                    // หลังจากเลือกจังหวัด ให้ดึงข้อมูลอำเภอ
                                    if (response.houseProvince_Adds) {
                                        $.ajax({
                                            url: '/getDistrictsByProvince',
                                            type: 'GET',
                                            data: { province: response.houseProvince_Adds },
                                            success: function(districts) {
                                                $('#houseDistrict_Adds_edit').empty().append('<option value="">อำเภอ</option>');
                                                districts.forEach(district => {
                                                    $('#houseDistrict_Adds_edit').append(
                                                        `<option value="${district.District_pro}" ${district.District_pro === response.houseDistrict_Adds ? 'selected' : ''}>${district.District_pro}</option>`
                                                    );
                                                });

                                                // หลังจากเลือกอำเภอ ให้ดึงข้อมูลตำบล
                                                if (response.houseDistrict_Adds) {
                                                    $.ajax({
                                                        url: '/getTambonsByDistrict',
                                                        type: 'GET',
                                                        data: { district: response.houseDistrict_Adds },
                                                        success: function(tambons) {
                                                            $('#houseTambon_Adds_edit').empty().append('<option value="">ตำบล</option>');
                                                            tambons.forEach(tambon => {
                                                                $('#houseTambon_Adds_edit').append(
                                                                    `<option value="${tambon.Tambon_pro}" ${tambon.Tambon_pro === response.houseTambon_Adds ? 'selected' : ''}>${tambon.Tambon_pro}</option>`
                                                                );
                                                            });

                                                            // หลังจากเลือกตำบล ให้ดึงข้อมูลรหัสไปรษณีย์
                                                            if (response.houseTambon_Adds) {
                                                                $.ajax({
                                                                    url: '/getPostcodesByTambon',
                                                                    type: 'GET',
                                                                    data: { tambon: response.houseTambon_Adds },
                                                                    success: function(postcodes) {
                                                                        $('#Postal_Adds_edit').empty().append('<option value="">รหัสไปรษณีย์</option>');
                                                                        postcodes.forEach(postcode => {
                                                                            $('#Postal_Adds_edit').append(
                                                                                `<option value="${postcode.Postcode_pro}" ${postcode.Postcode_pro === response.Postal_Adds ? 'selected' : ''}>${postcode.Postcode_pro}</option>`
                                                                            );
                                                                        });
                                                                    }
                                                                });
                                                            }
                                                        }
                                                    });
                                                }
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    }
                });

                // Event handlers สำหรับการเปลี่ยนแปลงค่าในแต่ละ dropdown
                $('#houseZone_Adds_edit').on('change', function() {
                    $.ajax({
                        url: '/getDataByZone',
                        type: 'GET',
                        data: { zone: $(this).val() },
                        success: function(data) {
                            $('#houseProvince_Adds_edit').empty().append('<option value="">จังหวัด</option>');
                            data.provinces.forEach(province => {
                                $('#houseProvince_Adds_edit').append(
                                    `<option value="${province.Province_pro}">${province.Province_pro}</option>`
                                );
                            });

                            // ล้างค่าใน dropdown ที่เหลือ
                            $('#houseDistrict_Adds_edit').empty().append('<option value="">อำเภอ</option>');
                            $('#houseTambon_Adds_edit').empty().append('<option value="">ตำบล</option>');
                            $('#Postal_Adds_edit').empty().append('<option value="">รหัสไปรษณีย์</option>');
                        }
                    });
                });

                $('#houseProvince_Adds_edit').on('change', function() {
                    $.ajax({
                        url: '/getDistrictsByProvince',
                        type: 'GET',
                        data: { province: $(this).val() },
                        success: function(districts) {
                            $('#houseDistrict_Adds_edit').empty().append('<option value="">อำเภอ</option>');
                            districts.forEach(district => {
                                $('#houseDistrict_Adds_edit').append(
                                    `<option value="${district.District_pro}">${district.District_pro}</option>`
                                );
                            });

                            // ล้างค่าใน dropdown ที่เหลือ
                            $('#houseTambon_Adds_edit').empty().append('<option value="">ตำบล</option>');
                            $('#Postal_Adds_edit').empty().append('<option value="">รหัสไปรษณีย์</option>');
                        }
                    });
                });

                $('#houseDistrict_Adds_edit').on('change', function() {
                    $.ajax({
                        url: '/getTambonsByDistrict',
                        type: 'GET',
                        data: { district: $(this).val() },
                        success: function(tambons) {
                            $('#houseTambon_Adds_edit').empty().append('<option value="">ตำบล</option>');
                            tambons.forEach(tambon => {
                                $('#houseTambon_Adds_edit').append(
                                    `<option value="${tambon.Tambon_pro}">${tambon.Tambon_pro}</option>`
                                );
                            });

                            // ล้างค่ารหัสไปรษณีย์
                            $('#Postal_Adds_edit').empty().append('<option value="">รหัสไปรษณีย์</option>');
                        }
                    });
                });

                $('#houseTambon_Adds_edit').on('change', function() {
                    $.ajax({
                        url: '/getPostcodesByTambon',
                        type: 'GET',
                        data: { tambon: $(this).val() },
                        success: function(postcodes) {
                            $('#Postal_Adds_edit').empty().append('<option value="">รหัสไปรษณีย์</option>');
                            postcodes.forEach(postcode => {
                                $('#Postal_Adds_edit').append(
                                    `<option value="${postcode.Postcode_pro}">${postcode.Postcode_pro}</option>`
                                );
                            });
                        }
                    });
                });

                // แสดง modal
                $('#modal_edit_address_customer').css({
                    display: 'block',
                    opacity: 0,
                    top: '-100px'
                }).animate({
                    top: '0px',
                    opacity: 1
                }, {
                    duration: 100,
                    easing: 'easeOutQuad'
                });
            },
            error: function(xhr, status, error) {
                alert('เกิดข้อผิดพลาด: ' + error);
            }
        });
    }



    // แสดง modal
    $('#openModalButton').on('click', function() {
        $('#modal_edit_address_customer').removeClass('hidden');
    });

    // ปิด modal
    $('#closeModal').on('click', function() {
        $('#modal_edit_address_customer').addClass('hidden');
    });




    $('#updateAddressButton').on('click', function(e) {
        e.preventDefault();

        // ดึงค่า ID และตรวจสอบ
        const addressId = $('#addressId').val();
        if (!addressId) {
            Swal.fire({
                title: 'ข้อผิดพลาด!',
                text: 'ไม่พบรหัสที่อยู่ที่ต้องการแก้ไข',
                icon: 'error',
                confirmButtonText: 'ตกลง'
            });
            return;
        }

        // ตรวจสอบข้อมูลที่จำเป็น
        const requiredFields = {
            'บ้านเลขที่': $('#houseNumber_Adds_edit').val(),
            'หมู่': $('#houseGroup_Adds_edit').val(),
            'จังหวัด': $('#houseProvince_Adds_edit').val(),
            'อำเภอ': $('#houseDistrict_Adds_edit').val(),
            'ตำบล': $('#houseTambon_Adds_edit').val(),
            'รหัสไปรษณีย์': $('#Postal_Adds_edit').val(),
            'พิกัด': $('#Coordinates_Adds_edit').val(),
            'รายละเอียด': $('#Detail_Adds_edit').val()
        };

        // ตรวจสอบฟิลด์ที่จำเป็นทั้งหมด
        const emptyFields = Object.entries(requiredFields)
            .filter(([_, value]) => !value)
            .map(([field]) => field);

        if (emptyFields.length > 0) {
            Swal.fire({
                title: 'ข้อผิดพลาด!',
                text: `กรุณากรอกข้อมูลให้ครบถ้วน: ${emptyFields.join(', ')}`,
                icon: 'error',
                confirmButtonText: 'ตกลง'
            });
            openModal_Edit_address_customer();
            return;
        }

        // ปิดปุ่มระหว่างการส่งข้อมูล
        $('#updateAddressButton').prop('disabled', true);

        // ส่ง AJAX request
        $.ajax({
            url: '/update-address', // addressId ต้องมีค่า
            type: 'POST',
            data: {
                id: addressId,
                DataCus_id: $('#DataCus_id').val(),
                Type_Adds: $('input[name="Type_Adds"]:checked').val(),
                Registration_number: $('#Registration_number_edit').val(),
                date_Adds: $('#date_Adds').val(),
                Code_Adds: $('#Code_Adds').val(),
                Ordinal_Adds: $('#Ordinal_Adds').val(),
                Status_Adds: $('#Status_Adds').val(),
                houseNumber_Adds: requiredFields['บ้านเลขที่'],
                houseGroup_Adds: requiredFields['หมู่'],
                building_Adds: $('#building_Adds_edit').val(),
                village_Adds: $('#village_Adds_edit').val(),
                roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
                Floor_Adds: $('#Floor_Adds_edit').val(),
                alley_Adds: $('#alley_Adds_edit').val(),
                road_Adds: $('#road_Adds_edit').val(),
                houseZone_Adds: $('#houseZone_Adds_edit').val(),
                houseProvince_Adds: requiredFields['จังหวัด'],
                houseDistrict_Adds: requiredFields['อำเภอ'],
                houseTambon_Adds: requiredFields['ตำบล'],
                Postal_Adds: requiredFields['รหัสไปรษณีย์'],
                Detail_Adds: requiredFields['รายละเอียด'],
                Coordinates_Adds: requiredFields['พิกัด'],
                UserZone: $('#UserZone').val(),
                UserBranch: $('#UserBranch').val(),
                UserInsert: $('#UserInsert').val(),
                UserUpdate: $('#UserUpdate').val()
            },
            success: function(response) {
                let alertTitle = 'ข้อมูลที่อัปเดต';
                let alertText = '';

                if (response.message) {
                    alertTitle = 'สำเร็จ!';
                    alertText = response.message;
                    fetchAddresses();
                    $('#modal_edit_address_customer').addClass('hidden');
                    hideModalEditAddress_customer();
                } else {
                    alertText = response.data ?
                        `บ้านเลขที่: ${response.data.houseNumber_Adds}\n` +
                        `หมู่: ${response.data.houseGroup_Adds}\n` +
                        `ที่อยู่: ${response.data.Detail_Adds}` : 'ไม่มีข้อมูล';
                }

                Swal.fire({
                    title: alertTitle,
                    text: alertText,
                    icon: response.message ? 'success' : 'info',
                    timer: response.message ? 1500 : undefined,
                    showConfirmButton: !response.message
                });
            },
            error: function(xhr) {
                let errorMessage = 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    const errors = xhr.responseJSON.errors;
                    errorMessage = Object.values(errors).flat().join(', ');
                }
                Swal.fire({
                    title: 'ข้อผิดพลาด!',
                    text: errorMessage,
                    icon: 'error',
                    timer: 1500,
                    showConfirmButton: false
                });
            },
            complete: function() {
                $('#updateAddressButton').prop('disabled', false);
            }
        });
    });



    function hideModalEditAddress_customer() {
        // ซ่อน modal ด้วยเอฟเฟกต์ fade out
        $('#modal_edit_address_customer').fadeOut(200, function() {

        });
    }

    function hideModal_edit_address() {
        // ซ่อน modal ด้วยเอฟเฟกต์ fade out
        $('#modal_edit_address_customer').fadeOut(200, function() {

        });
    }
</script>

















{{-- // $.ajax({
    //     url: '/get-address/' + addressId,
    //     type: 'GET',
    //     success: function(response) {
    //         // เติมข้อมูลในฟิลด์ต่างๆ
    //         $('#addressId').val(response.id);
    //         $('#addressIdCus').val(response.DataCus_id);
    //         $('input[name="Type_Adds"][value="' + response.Type_Adds + '"]').prop('checked', true);
    //         $('#Registration_number_edit').val(response.Registration_number);
    //         $('#houseNumber_Adds_edit').val(response.houseNumber_Adds);
    //         $('#road_Adds_edit').val(response.road_Adds);
    //         $('#village_Adds_edit').val(response.village_Adds);
    //         $('#houseGroup_Adds_edit').val(response.houseGroup_Adds);
    //         $('#building_Adds_edit').val(response.building_Adds);
    //         $('#roomNumber_Adds_edit').val(response.roomNumber_Adds);
    //         $('#Floor_Adds_edit').val(response.Floor_Adds);
    //         $('#alley_Adds_edit').val(response.alley_Adds);
    //         $('#Detail_Adds_edit').val(response.Detail_Adds);
    //         $('#Coordinates_Adds_edit').val(response.Coordinates_Adds);
    //         // เงื่อนไขจังหวัด
    //         $('#houseProvince_Adds_edit').val(response.houseProvince_Adds);
    //         $('#houseDistrict_Adds_edit').val(response.houseDistrict_Adds);
    //         $('#houseTambon_Adds_edit').val(response.houseTambon_Adds);
    //         $('#Postal_Adds_edit').val(response.Postal_Adds);

    //         // ดึงข้อมูลภูมิภาค
    //         $.ajax({
    //             url: '/zones',
    //             type: 'GET',
    //             success: function(zones) {
    //                 $('#houseZone_Adds_edit').empty().append(
    //                     '<option value="">ภูมิภาค</option>');
    //                 zones.forEach(zone => {
    //                     $('#houseZone_Adds_edit').append(
    //                         `<option value="${zone.Zone_pro}" ${zone.Zone_pro === response.houseZone_Adds ? 'selected' : ''}>${zone.Zone_pro}</option>`

    //                     );
    //                 });
    //             }
    //         });

    //         // ดึงข้อมูลจังหวัดโดยอิงจากภูมิภาคที่เลือก
    //         $('#houseZone_Adds_edit').on('change', function() {
    //             $.ajax({
    //                 url: '/getDataByZone',
    //                 type: 'GET',
    //                 data: {
    //                     zone: $(this).val()
    //                 },
    //                 success: function(data) {
    //                     $('#houseProvince_Adds_edit').empty().append(
    //                         '<option value="">จังหวัด</option>');

    //                     data.provinces.forEach(province => {
    //                         $('#houseProvince_Adds_edit').append(
    //                             `<option value="${province.Province_pro}">${province.Province_pro}</option>`
    //                         );
    //                     });

    //                     // ล้างค่าอำเภอ, ตำบล และรหัสไปรษณีย์เมื่อเลือกภูมิภาคใหม่
    //                     $('#houseDistrict_Adds_edit').empty().append(
    //                         '<option value="">อำเภอ</option>');
    //                     $('#houseTambon_Adds_edit').empty().append(
    //                         '<option value="">ตำบล</option>');
    //                     $('#Postal_Adds_edit').empty().append(
    //                         '<option value="">รหัสไปรษณีย์</option>');
    //                 }
    //             });
    //         });

    //         // ดึงข้อมูลอำเภอโดยอิงจากจังหวัดที่เลือก
    //         $('#houseProvince_Adds_edit').on('change', function() {
    //             $.ajax({
    //                 url: '/getDistrictsByProvince',
    //                 type: 'GET',
    //                 data: {
    //                     province: $(this).val()
    //                 },
    //                 success: function(districts) {
    //                     $('#houseDistrict_Adds_edit').empty().append(
    //                         '<option value="">อำเภอ</option>');
    //                     districts.forEach(district => {
    //                         $('#houseDistrict_Adds_edit').append(
    //                             `<option value="${district.District_pro}">${district.District_pro}</option>`
    //                         );
    //                     });

    //                     // ล้างค่าตำบล และรหัสไปรษณีย์เมื่อเลือกจังหวัดใหม่
    //                     $('#houseTambon_Adds_edit').empty().append(
    //                         '<option value="">ตำบล</option>');
    //                     $('#Postal_Adds_edit').empty().append(
    //                         '<option value="">รหัสไปรษณีย์</option>');
    //                 }
    //             });
    //         });

    //         // ดึงข้อมูลตำบลโดยอิงจากอำเภอที่เลือก
    //         $('#houseDistrict_Adds_edit').on('change', function() {
    //             $.ajax({
    //                 url: '/getTambonsByDistrict',
    //                 type: 'GET',
    //                 data: {
    //                     district: $(this).val()
    //                 },
    //                 success: function(tambons) {
    //                     $('#houseTambon_Adds_edit').empty().append(
    //                         '<option value="">ตำบล</option>');
    //                     tambons.forEach(tambon => {
    //                         $('#houseTambon_Adds_edit').append(
    //                             `<option value="${tambon.Tambon_pro}">${tambon.Tambon_pro}</option>`
    //                         );
    //                     });

    //                     // ล้างค่ารหัสไปรษณีย์เมื่อเลือกอำเภอใหม่
    //                     $('#Postal_Adds_edit').empty().append(
    //                         '<option value="">รหัสไปรษณีย์</option>');
    //                 }
    //             });
    //         });

    //         // ดึงข้อมูลรหัสไปรษณีย์โดยอิงจากตำบลที่เลือก
    //         $('#houseTambon_Adds_edit').on('change', function() {
    //             $.ajax({
    //                 url: '/getPostcodesByTambon',
    //                 type: 'GET',
    //                 data: {
    //                     tambon: $(this).val()
    //                 },
    //                 success: function(postcodes) {
    //                     $('#Postal_Adds_edit').empty().append(
    //                         '<option value="">รหัสไปรษณีย์</option>');
    //                     postcodes.forEach(postcode => {
    //                         $('#Postal_Adds_edit').append(
    //                             `<option value="${postcode.Postcode_pro}">${postcode.Postcode_pro}</option>`
    //                         );
    //                     });
    //                 }
    //             });
    //         });

    //         // แสดง modal ด้วยเอฟเฟกต์ fade in
    //         $('#modal_edit_address_customer').css({
    //             display: 'block',
    //             opacity: 0,
    //             top: '-100px'
    //         }).animate({
    //             top: '0px',
    //             opacity: 1
    //         }, {
    //             duration: 100,
    //             easing: 'easeOutQuad'
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //         alert('เกิดข้อผิดพลาด: ' + error);
    //     }
    // }); --}}




{{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pt-2">
    <div
        class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
        <div class="form-check">
            <input class="form-check-input text-lg" type="radio" value="ที่อยู่ปัจจุบัน"
                name="Type_Adds" id="Type_Adds_edit">
            <label class="form-check-label text-base text-gray-700" for="Type_Adds_edit">
                ที่อยู่ปัจจุบัน
            </label>
        </div>
    </div>
    <div
        class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
        <div class="form-check">
            <input class="form-check-input text-lg" type="radio" value="ที่อยู่ส่งเอกสาร"
                name="Type_Adds" id="Type_Adds_edit">
            <label class="form-check-label text-base text-gray-700" for="Type_Adds_edit">
                ที่อยู่ส่งเอกสาร
            </label>
        </div>
    </div>
    <div
        class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
        <div class="form-check">
            <input class="form-check-input text-lg" type="radio" value="ที่อยู่ตามสำเนา"
                name="Type_Adds" id="Type_Adds_edit">
            <label class="form-check-label text-base text-gray-700" for="Type_Adds_edit">
                ที่อยู่ตามสำเนา
            </label>
        </div>
    </div>
</div> --}}

{{-- // $('#updateAddressButton').on('click', function(e) {
    //     e.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ

    //     // ตรวจสอบว่ามีการกรอกข้อมูลที่จำเป็นหรือไม่
    //     const houseNumber = $('#houseNumber_Adds_edit').val();
    //     const houseGroup = $('#houseGroup_Adds_edit').val();
    //     const province = $('#houseProvince_Adds_edit').val();
    //     const district = $('#houseDistrict_Adds_edit').val();
    //     const tambon = $('#houseTambon_Adds_edit').val();
    //     const postalCode = $('#Postal_Adds_edit').val();
    //     const coordinates = $('#Coordinates_Adds_edit').val();
    //     const details = $('#Detail_Adds_edit').val();

    //     // เช็คว่าข้อมูลที่จำเป็นถูกกรอกหรือไม่
    //     if (!houseNumber || !houseGroup || !province || !district || !tambon || !postalCode || !coordinates || !
    //         details) {
    //         Swal.fire({
    //             title: 'ข้อผิดพลาด!',
    //             text: 'กรุณากรอกข้อมูลให้ครบถ้วน: บ้านเลขที่, หมู่, จังหวัด, อำเภอ, ตำบล, รหัสไปรษณีย์, พิกัด, รายละเอียด',
    //             icon: 'error',
    //             confirmButtonText: 'ตกลง'
    //         });
    //         openModal_Edit_address_customer(); // เปิด modal กลับไป
    //         return; // หยุดการทำงานของฟังก์ชัน
    //     }

    //     // ถ้าข้อมูลครบถ้วนให้ทำการส่ง AJAX
    //     $.ajax({
    //         url: '/update-address',
    //         type: 'POST',
    //         data: {
    //             id: $('#addressId').val(),
    //             DataCus_id: $('#DataCus_id').val(),
    //             Type_Adds: $('input[name="Type_Adds"]:checked').val(),
    //             Registration_number: $('#Registration_number_edit').val(),
    //             date_Adds: $('#date_Adds').val(),
    //             Code_Adds: $('#Code_Adds').val(),
    //             Ordinal_Adds: $('#Ordinal_Adds').val(),
    //             Status_Adds: $('#Status_Adds').val(),
    //             houseNumber_Adds: $('#houseNumber_Adds_edit').val(),
    //             houseGroup_Adds: $('#houseGroup_Adds_edit').val(),
    //             building_Adds: $('#building_Adds_edit').val(),
    //             village_Adds: $('#village_Adds_edit').val(),
    //             roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
    //             Floor_Adds: $('#Floor_Adds_edit').val(),
    //             alley_Adds: $('#alley_Adds_edit').val(),
    //             road_Adds: $('#road_Adds_edit').val(),
    //             houseZone_Adds: $('#houseZone_Adds_edit').val(),
    //             houseProvince_Adds: $('#houseProvince_Adds_edit').val(),
    //             houseDistrict_Adds: $('#houseDistrict_Adds_edit').val(),
    //             houseTambon_Adds: $('#houseTambon_Adds_edit').val(),
    //             Postal_Adds: $('#Postal_Adds_edit').val(),
    //             Detail_Adds: $('#Detail_Adds_edit').val(),
    //             Coordinates_Adds: $('#Coordinates_Adds_edit').val(),
    //             UserZone: $('#UserZone').val(),
    //             UserBranch: $('#UserBranch').val(),
    //             UserInsert: $('#UserInsert').val(),
    //             UserUpdate: $('#UserUpdate').val(),
    //         },
    //         success: function(response) {
    //             let alertTitle = 'ข้อมูลที่อัปเดต';
    //             let alertText = '';

    //             // แสดง SweetAlert หากมีข้อความสำเร็จ
    //             if (response.message) {
    //                 alertTitle = 'สำเร็จ!';
    //                 alertText = response.message;
    //                 fetchAddresses(); // เรียกใช้ฟังก์ชันเพื่อดึงข้อมูลใหม่
    //                 $('#modal_edit_address_customer').addClass('hidden'); // ปิด modal
    //                 hideModalEditAddress_customer();
    //             } else {
    //                 // ถ้าไม่มี message ให้แสดงข้อมูลอื่น ๆ ที่คุณต้องการ
    //                 alertText = response.data ?
    //                     `บ้านเลขที่: ${response.data.houseNumber_Adds}\n` +
    //                     `หมู่: ${response.data.houseGroup_Adds}\n` +
    //                     `ที่อยู่: ${response.data.Detail_Adds}` : 'ไม่มีข้อมูล';
    //             }

    //             // แสดง SweetAlert
    //             Swal.fire({
    //                 title: alertTitle,
    //                 text: alertText,
    //                 icon: response.message ? 'success' : 'info',
    //                 timer: response.message ? 1500 : undefined,
    //                 showConfirmButton: !response.message
    //             });
    //         },
    //         error: function(xhr) {
    //             let errorMessage =
    //             'เกิดข้อผิดพลาดในการอัปเดตข้อมูล'; // ข้อความที่จะแสดงใน Sweet Alert
    //             if (xhr.responseJSON && xhr.responseJSON.errors) {
    //                 const errors = xhr.responseJSON.errors;
    //                 errorMessage = Object.values(errors).flat().join(', '); // รวบรวมข้อความผิดพลาด
    //             }
    //             Swal.fire({
    //                 title: 'ข้อผิดพลาด!',
    //                 text: errorMessage,
    //                 icon: 'error',
    //                 timer: 1500,
    //                 showConfirmButton: false
    //             });
    //         },
    //         complete: function() {
    //             $('#updateAddressButton').prop('disabled', false);
    //         }
    //     });
    // }); --}}

{{-- // $('#updateAddressButton').on('click', function() {
    //     // ป้องกันการคลิกซ้ำ
    //     $(this).prop('disabled', true);

    //     // ลบข้อความแจ้งเตือนเก่า
    //     $('.error').remove();
    //     $('.border-red-500').removeClass('border-red-500');

    //     let isValid = true;
    //     const requiredFields = [{
    //             id: '#houseNumber_Adds_edit',
    //             message: 'กรุณากรอกบ้านเลขที่'
    //         },
    //         {
    //             id: '#houseGroup_Adds_edit',
    //             message: 'กรุณากรอกหมู่บ้าน'
    //         },
    //         {
    //             id: '#houseZone_Adds_edit',
    //             message: 'กรุณากรอกโซนบ้าน'
    //         },
    //         {
    //             id: '#houseProvince_Adds_edit',
    //             message: 'กรุณากรอกจังหวัด'
    //         },
    //         {
    //             id: '#houseDistrict_Adds_edit',
    //             message: 'กรุณากรอกอำเภอ'
    //         },
    //         {
    //             id: '#houseTambon_Adds_edit',
    //             message: 'กรุณากรอกตำบล'
    //         },
    //         {
    //             id: '#Postal_Adds_edit',
    //             message: 'กรุณากรอกรหัสไปรษณีย์'
    //         },
    //         {
    //             id: '#Coordinates_Adds_edit',
    //             message: 'กรุณากรอกพิกัด'
    //         }
    //     ];

    //     // ตรวจสอบแต่ละฟิลด์ที่จำเป็น
    //     requiredFields.forEach(field => {
    //         const $input = $(field.id);
    //         if ($input.val().trim() === '') {
    //             $input.addClass('border-red-500');
    //             $input.after(
    //                 `<span class="error text-red-500 text-xs flex items-center mt-1">
    //             <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
    //         </span>`
    //             );
    //             isValid = false;
    //         }
    //     });

    //     // หากข้อมูลไม่ครบ ไม่เรียก Ajax และแสดงแจ้งเตือน
    //     if (!isValid) {
    //         $('#updateAddressButton').prop('disabled', false);
    //         return;
    //     }

    //     // ส่งข้อมูลผ่าน Ajax
    //     $.ajax({
    //         url: '/update-address',
    //         type: 'POST',
    //         data: {
    //             id: $('#addressId').val(),
    //             DataCus_id: $('#DataCus_id').val(),
    //             Type_Adds: $('input[name="Type_Adds"]:checked').val(),
    //             Registration_number: $('#Registration_number_edit').val(),
    //             date_Adds: $('#date_Adds').val(),
    //             Code_Adds: $('#Code_Adds').val(),
    //             Ordinal_Adds: $('#Ordinal_Adds').val(),
    //             Status_Adds: $('#Status_Adds').val(),
    //             houseNumber_Adds: $('#houseNumber_Adds_edit').val(),
    //             houseGroup_Adds: $('#houseGroup_Adds_edit').val(),
    //             building_Adds: $('#building_Adds_edit').val(),
    //             village_Adds: $('#village_Adds_edit').val(),
    //             roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
    //             Floor_Adds: $('#Floor_Adds_edit').val(),
    //             alley_Adds: $('#alley_Adds_edit').val(),
    //             road_Adds: $('#road_Adds_edit').val(),
    //             houseZone_Adds: $('#houseZone_Adds_edit').val(),
    //             houseProvince_Adds: $('#houseProvince_Adds_edit').val(),
    //             houseDistrict_Adds: $('#houseDistrict_Adds_edit').val(),
    //             houseTambon_Adds: $('#houseTambon_Adds_edit').val(),
    //             Postal_Adds: $('#Postal_Adds_edit').val(),
    //             Detail_Adds: $('#Detail_Adds_edit').val(),
    //             Coordinates_Adds: $('#Coordinates_Adds_edit').val(),
    //             UserZone: $('#UserZone').val(),
    //             UserBranch: $('#UserBranch').val(),
    //             UserInsert: $('#UserInsert').val(),
    //             UserUpdate: $('#UserUpdate').val(),
    //         },
    //         success: function(response) {
    //             // ตรวจสอบว่า message มีค่าและแสดงเฉพาะข้อความสำเร็จเท่านั้น
    //             if (response.message) {
    //                 Swal.fire({
    //                     title: 'สำเร็จ!',
    //                     text: response.message,
    //                     icon: 'success',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 }).then(() => {
    //                     // เรียกฟังก์ชันหรือกระบวนการอื่น ๆ ที่ต้องการ หลังจากอัปเดตสำเร็จ
    //                     fetchAddresses();
    //                     $('#modal_edit_address_customer').addClass('hidden');
    //                     hideModalEditAddress_customer();
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ.',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         error: function(xhr) {
    //             // จัดการข้อผิดพลาดจากการตรวจสอบข้อมูล
    //             if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
    //                 const errors = xhr.responseJSON.errors;
    //                 for (const [field, messages] of Object.entries(errors)) {
    //                     const $input = $(`#${field}`);
    //                     if ($input.length) {
    //                         $input.addClass('border-red-500');
    //                         $input.after(
    //                             `<span class="error text-red-500 text-xs flex items-center mt-1">
    //                         <i class="fas fa-exclamation-circle mr-2"></i>${messages.join(', ')}
    //                     </span>`
    //                         );
    //                     }
    //                 }
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         complete: function() {
    //             $('#updateAddressButton').prop('disabled', false);
    //         }
    //     });
    // });

    // $('#updateAddressButton').on('click', function() {
    //     // ป้องกันการคลิกซ้ำ
    //     $(this).prop('disabled', true);

    //     // ลบข้อความแจ้งเตือนเก่า
    //     $('.error').remove();
    //     $('.border-red-500').removeClass('border-red-500');

    //     let isValid = true;
    //     const requiredFields = [{
    //             id: '#houseNumber_Adds_edit',
    //             message: 'กรุณากรอกบ้านเลขที่'
    //         },
    //         {
    //             id: '#houseGroup_Adds_edit',
    //             message: 'กรุณากรอกหมู่บ้าน'
    //         },
    //         {
    //             id: '#houseZone_Adds_edit',
    //             message: 'กรุณากรอกโซนบ้าน'
    //         },
    //         {
    //             id: '#houseProvince_Adds_edit',
    //             message: 'กรุณากรอกจังหวัด'
    //         },
    //         {
    //             id: '#houseDistrict_Adds_edit',
    //             message: 'กรุณากรอกอำเภอ'
    //         },
    //         {
    //             id: '#houseTambon_Adds_edit',
    //             message: 'กรุณากรอกตำบล'
    //         },
    //         {
    //             id: '#Postal_Adds_edit',
    //             message: 'กรุณากรอกรหัสไปรษณีย์'
    //         },
    //         {
    //             id: '#Coordinates_Adds_edit',
    //             message: 'กรุณากรอกพิกัด'
    //         }
    //     ];

    //     // ตรวจสอบแต่ละฟิลด์ที่จำเป็น
    //     requiredFields.forEach(field => {
    //         const $input = $(field.id);
    //         if ($input.val().trim() === '') {
    //             $input.addClass('border-red-500');
    //             $input.after(
    //                 `<span class="error text-red-500 text-xs flex items-center mt-1">
    //                 <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
    //             </span>`
    //             );
    //             isValid = false;
    //         }
    //     });

    //     // หากข้อมูลไม่ครบ ไม่เรียก Ajax และแสดงแจ้งเตือน
    //     if (!isValid) {
    //         $('#updateAddressButton').prop('disabled', false);
    //         return;
    //     }

    //     // ส่งข้อมูลผ่าน Ajax
    //     $.ajax({
    //         url: '/update-address',
    //         type: 'POST',
    //         contentType: 'application/json',
    //         data: JSON.stringify({
    //             id: $('#addressId').val(),
    //             DataCus_id: $('#DataCus_id').val(),
    //             Type_Adds: $('input[name="Type_Adds"]:checked').val(),
    //             Registration_number: $('#Registration_number_edit').val(),
    //             date_Adds: $('#date_Adds').val(),
    //             Code_Adds: $('#Code_Adds').val(),
    //             Ordinal_Adds: $('#Ordinal_Adds').val(),
    //             Status_Adds: $('#Status_Adds').val(),
    //             houseNumber_Adds: $('#houseNumber_Adds_edit').val(),
    //             houseGroup_Adds: $('#houseGroup_Adds_edit').val(),
    //             building_Adds: $('#building_Adds_edit').val(),
    //             village_Adds: $('#village_Adds_edit').val(),
    //             roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
    //             Floor_Adds: $('#Floor_Adds_edit').val(),
    //             alley_Adds: $('#alley_Adds_edit').val(),
    //             road_Adds: $('#road_Adds_edit').val(),
    //             houseZone_Adds: $('#houseZone_Adds_edit').val(),
    //             houseProvince_Adds: $('#houseProvince_Adds_edit').val(),
    //             houseDistrict_Adds: $('#houseDistrict_Adds_edit').val(),
    //             houseTambon_Adds: $('#houseTambon_Adds_edit').val(),
    //             Postal_Adds: $('#Postal_Adds_edit').val(),
    //             Detail_Adds: $('#Detail_Adds_edit').val(),
    //             Coordinates_Adds: $('#Coordinates_Adds_edit').val(),
    //             UserZone: $('#UserZone').val(),
    //             UserBranch: $('#UserBranch').val(),
    //             UserInsert: $('#UserInsert').val(),
    //             UserUpdate: $('#UserUpdate').val(),
    //         }),
    //         success: function(response) {
    //             // แสดงข้อความตอบกลับแบบไม่มี pretty print
    //             console.log(JSON.stringify(response));

    //             if (response.message) {
    //                 Swal.fire({
    //                     title: 'สำเร็จ!',
    //                     text: response.message,
    //                     icon: 'success',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 }).then(() => {
    //                     fetchAddresses();
    //                     $('#modal_edit_address_customer').addClass('hidden');
    //                     hideModalEditAddress_customer();
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         error: function(xhr) {
    //             // แสดงข้อความตอบกลับแบบไม่มี pretty print ในกรณีเกิดข้อผิดพลาด
    //             console.log(JSON.stringify(xhr.responseJSON));

    //             if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
    //                 const errors = xhr.responseJSON.errors;
    //                 for (const [field, messages] of Object.entries(errors)) {
    //                     const $input = $(`#${field}`);
    //                     if ($input.length) {
    //                         $input.addClass('border-red-500');
    //                         $input.after(
    //                             `<span class="error text-red-500 text-xs flex items-center mt-1">
    //                             <i class="fas fa-exclamation-circle mr-2"></i>${messages.join(', ')}
    //                         </span>`
    //                         );
    //                     }
    //                 }
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         complete: function() {
    //             $('#updateAddressButton').prop('disabled', false);
    //         }
    //     });
    // }); --}}

{{--

// $('#updateAddressButton').on('click', function() {
    //     // ป้องกันการคลิกซ้ำ
    //     $(this).prop('disabled', true);

    //     // ลบข้อความแจ้งเตือนเก่า
    //     $('.error').remove();
    //     $('.border-red-500').removeClass('border-red-500');

    //     let isValid = true;
    //     const requiredFields = [{
    //             id: '#houseNumber_Adds_edit',
    //             message: 'กรุณากรอกบ้านเลขที่'
    //         },
    //         {
    //             id: '#houseGroup_Adds_edit',
    //             message: 'กรุณากรอกหมู่บ้าน'
    //         },
    //         {
    //             id: '#houseZone_Adds_edit',
    //             message: 'กรุณากรอกโซนบ้าน'
    //         },
    //         {
    //             id: '#houseProvince_Adds_edit',
    //             message: 'กรุณากรอกจังหวัด'
    //         },
    //         {
    //             id: '#houseDistrict_Adds_edit',
    //             message: 'กรุณากรอกอำเภอ'
    //         },
    //         {
    //             id: '#houseTambon_Adds_edit',
    //             message: 'กรุณากรอกตำบล'
    //         },
    //         {
    //             id: '#Postal_Adds_edit',
    //             message: 'กรุณากรอกรหัสไปรษณีย์'
    //         },
    //         {
    //             id: '#Coordinates_Adds_edit',
    //             message: 'กรุณากรอกพิกัด'
    //         }
    //     ];

    //     // ตรวจสอบแต่ละฟิลด์ที่จำเป็น
    //     requiredFields.forEach(field => {
    //         const $input = $(field.id);
    //         if ($input.val().trim() === '') {
    //             $input.addClass('border-red-500');
    //             $input.after(
    //                 `<span class="error text-red-500 text-xs flex items-center mt-1">
    //                 <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
    //             </span>`
    //             );
    //             isValid = false;
    //         }
    //     });

    //     // หากข้อมูลไม่ครบ ไม่เรียก Ajax และแสดงแจ้งเตือน
    //     if (!isValid) {
    //         $('#updateAddressButton').prop('disabled', false);
    //         return;
    //     }

    //     // ส่งข้อมูลผ่าน Ajax
    //     $.ajax({
    //         url: '/update-address',
    //         type: 'POST',
    //         data: {
    //             id: $('#addressId').val(),
    //             DataCus_id: $('#DataCus_id').val(),
    //             Type_Adds: $('input[name="Type_Adds"]:checked').val(),
    //             Registration_number: $('#Registration_number_edit').val(),
    //             date_Adds: $('#date_Adds').val(),
    //             Code_Adds: $('#Code_Adds').val(),
    //             Ordinal_Adds: $('#Ordinal_Adds').val(),
    //             Status_Adds: $('#Status_Adds').val(),
    //             houseNumber_Adds: $('#houseNumber_Adds_edit').val(),
    //             houseGroup_Adds: $('#houseGroup_Adds_edit').val(),
    //             building_Adds: $('#building_Adds_edit').val(),
    //             village_Adds: $('#village_Adds_edit').val(),
    //             roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
    //             Floor_Adds: $('#Floor_Adds_edit').val(),
    //             alley_Adds: $('#alley_Adds_edit').val(),
    //             road_Adds: $('#road_Adds_edit').val(),
    //             houseZone_Adds: $('#houseZone_Adds_edit').val(),
    //             houseProvince_Adds: $('#houseProvince_Adds_edit').val(),
    //             houseDistrict_Adds: $('#houseDistrict_Adds_edit').val(),
    //             houseTambon_Adds: $('#houseTambon_Adds_edit').val(),
    //             Postal_Adds: $('#Postal_Adds_edit').val(),
    //             Detail_Adds: $('#Detail_Adds_edit').val(),
    //             Coordinates_Adds: $('#Coordinates_Adds_edit').val(),
    //             UserZone: $('#UserZone').val(),
    //             UserBranch: $('#UserBranch').val(),
    //             UserInsert: $('#UserInsert').val(),
    //             UserUpdate: $('#UserUpdate').val(),
    //         },
    //         success: function(response) {
    //             // ตรวจสอบว่า message มีค่าและแสดงเฉพาะข้อความสำเร็จเท่านั้น
    //             if (response.message) {
    //                 Swal.fire({
    //                     title: 'สำเร็จ!',
    //                     text: response.message,
    //                     icon: 'success',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 }).then(() => {
    //                     // เรียกฟังก์ชันหรือกระบวนการอื่น ๆ ที่ต้องการ หลังจากอัปเดตสำเร็จ
    //                     fetchAddresses();
    //                     $('#modal_edit_address_customer').addClass('hidden');
    //                     hideModalEditAddress_customer();
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ.',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         error: function(xhr) {
    //             // จัดการข้อผิดพลาดจากการตรวจสอบข้อมูล
    //             if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
    //                 const errors = xhr.responseJSON.errors;
    //                 for (const [field, messages] of Object.entries(errors)) {
    //                     const $input = $(`#${field}`);
    //                     $input.addClass('border-red-500');
    //                     $input.after(
    //                         `<span class="error text-red-500 text-xs flex items-center mt-1">
    //                         <i class="fas fa-exclamation-circle mr-2"></i>${messages.join(', ')}
    //                     </span>`
    //                     );
    //                 }
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         complete: function() {
    //             $('#updateAddressButton').prop('disabled', false);
    //         }
    //     });
    // }); --}}





{{-- // $('#updateAddressButton').on('click', function() {
    //     // ป้องกันการคลิกซ้ำ
    //     $(this).prop('disabled', true);

    //     $.ajax({
    //         url: '/update-address', // URL สำหรับอัปเดตข้อมูล
    //         type: 'POST',
    //         data: {
    //             // ข้อมูลที่คุณจะส่งไป
    //             id: $('#addressId').val(),
    //             DataCus_id: $('#DataCus_id').val(),
    //             Type_Adds: $('input[name="Type_Adds"]:checked').val(), // ใช้ค่าที่เลือกจาก radio button
    //             Registration_number: $('#Registration_number_edit').val(),
    //             date_Adds: $('#date_Adds').val(),
    //             Code_Adds: $('#Code_Adds').val(),
    //             Ordinal_Adds: $('#Ordinal_Adds').val(),
    //             Status_Adds: $('#Status_Adds').val(),
    //             houseNumber_Adds: $('#houseNumber_Adds_edit').val(),
    //             houseGroup_Adds: $('#houseGroup_Adds_edit').val(),
    //             building_Adds: $('#building_Adds_edit').val(),
    //             village_Adds: $('#village_Adds_edit').val(),
    //             roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
    //             Floor_Adds: $('#Floor_Adds_edit').val(),
    //             alley_Adds: $('#alley_Adds_edit').val(),
    //             road_Adds: $('#road_Adds_edit').val(),
    //             houseZone_Adds: $('#houseZone_Adds_edit').val(),
    //             houseProvince_Adds: $('#houseProvince_Adds_edit').val(),
    //             houseDistrict_Adds: $('#houseDistrict_Adds_edit').val(),
    //             houseTambon_Adds: $('#houseTambon_Adds_edit').val(),
    //             Postal_Adds: $('#Postal_Adds_edit').val(),
    //             Detail_Adds: $('#Detail_Adds_edit').val(),
    //             Coordinates_Adds: $('#Coordinates_Adds_edit').val(),
    //             UserZone: $('#UserZone').val(),
    //             UserBranch: $('#UserBranch').val(),
    //             UserInsert: $('#UserInsert').val(),
    //             UserUpdate: $('#UserUpdate').val(),
    //         },
    //         success: function(response) {
    //             console.log(response); // ตรวจสอบโครงสร้างของ response ที่ส่งกลับ

    //             if (response.message) {
    //                 Swal.fire({
    //                     title: 'สำเร็จ!',
    //                     text: response.message,
    //                     icon: 'success',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 }).then(() => {
    //                     fetchAddresses();
    //                     $('#modal_edit_address_customer').addClass('hidden');
    //                     hideModalEditAddress_customer();
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ.',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         error: function(xhr) {
    //             let errorMessage = 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล';
    //             if (xhr.responseJSON && xhr.responseJSON.errors) {
    //                 const errors = xhr.responseJSON.errors;
    //                 errorMessage = Object.values(errors).flat().join(', ');
    //             }
    //             Swal.fire({
    //                 title: 'ข้อผิดพลาด!',
    //                 text: errorMessage,
    //                 icon: 'error',
    //                 timer: 1500,
    //                 showConfirmButton: false
    //             });
    //         },
    //         complete: function() {
    //             // เปิดใช้งานปุ่มอีกครั้ง
    //             $('#updateAddressButton').prop('disabled', false);
    //         }
    //     });
    // });

    // $('#updateAddressButton').on('click', function() {
    //     // ลบข้อความแจ้งเตือนเก่าและเอาสีแดงออกจากฟิลด์ก่อน
    //     $('.error').remove();
    //     $('.border-red-500').removeClass('border-red-500');

    //     let isValid = true;

    //     // ตรวจสอบว่าฟิลด์ที่ต้องกรอกมีข้อมูลหรือไม่
    //     const requiredFields = [{
    //             id: '#houseNumber_Adds_edit',
    //             message: 'กรุณากรอกบ้านเลขที่'
    //         },
    //         {
    //             id: '#houseGroup_Adds_edit',
    //             message: 'กรุณากรอกหมู่บ้าน'
    //         },
    //         {
    //             id: '#houseZone_Adds_edit',
    //             message: 'กรุณากรอกโซนบ้าน'
    //         },
    //         {
    //             id: '#houseProvince_Adds_edit',
    //             message: 'กรุณากรอกจังหวัด'
    //         },
    //         {
    //             id: '#houseDistrict_Adds_edit',
    //             message: 'กรุณากรอกอำเภอ'
    //         },
    //         {
    //             id: '#houseTambon_Adds_edit',
    //             message: 'กรุณากรอกตำบล'
    //         },
    //         {
    //             id: '#Postal_Adds_edit',
    //             message: 'กรุณากรอกรหัสไปรษณีย์'
    //         },
    //         {
    //             id: '#Coordinates_Adds_edit',
    //             message: 'กรุณากรอกพิกัด'
    //         }
    //     ];

    //     // วนลูปตรวจสอบแต่ละฟิลด์
    //     requiredFields.forEach(field => {
    //         const $input = $(field.id);
    //         if ($input.val().trim() === '') {
    //             $input.addClass('border-red-500');
    //             $input.after(
    //                 `<span class="error text-red-500 text-xs flex items-center mt-1">
    //                 <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
    //             </span>`
    //             );
    //             isValid = false;
    //         }
    //     });

    //     // ถ้าไม่ผ่านการตรวจสอบ ไม่ให้เรียก Ajax
    //     if (!isValid) {
    //         $('#updateAddressButton').prop('disabled', false);
    //         return;
    //     }

    //     // ป้องกันการคลิกซ้ำ
    //     $(this).prop('disabled', true);

    //     // ส่งข้อมูลผ่าน Ajax
    //     $.ajax({
    //         url: '/update-address',
    //         type: 'POST',
    //         data: {
    //             id: $('#addressId').val(),
    //             DataCus_id: $('#DataCus_id').val(),
    //             Type_Adds: $('input[name="Type_Adds"]:checked').val(),
    //             Registration_number: $('#Registration_number_edit').val(),
    //             date_Adds: $('#date_Adds').val(),
    //             Code_Adds: $('#Code_Adds').val(),
    //             Ordinal_Adds: $('#Ordinal_Adds').val(),
    //             Status_Adds: $('#Status_Adds').val(),
    //             houseNumber_Adds: $('#houseNumber_Adds_edit').val(),
    //             houseGroup_Adds: $('#houseGroup_Adds_edit').val(),
    //             building_Adds: $('#building_Adds_edit').val(),
    //             village_Adds: $('#village_Adds_edit').val(),
    //             roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
    //             Floor_Adds: $('#Floor_Adds_edit').val(),
    //             alley_Adds: $('#alley_Adds_edit').val(),
    //             road_Adds: $('#road_Adds_edit').val(),
    //             houseZone_Adds: $('#houseZone_Adds_edit').val(),
    //             houseProvince_Adds: $('#houseProvince_Adds_edit').val(),
    //             houseDistrict_Adds: $('#houseDistrict_Adds_edit').val(),
    //             houseTambon_Adds: $('#houseTambon_Adds_edit').val(),
    //             Postal_Adds: $('#Postal_Adds_edit').val(),
    //             Detail_Adds: $('#Detail_Adds_edit').val(),
    //             Coordinates_Adds: $('#Coordinates_Adds_edit').val(),
    //             UserZone: $('#UserZone').val(),
    //             UserBranch: $('#UserBranch').val(),
    //             UserInsert: $('#UserInsert').val(),
    //             UserUpdate: $('#UserUpdate').val(),
    //         },
    //         success: function(response) {
    //             console.log(response); // ตรวจสอบโครงสร้างของ response ที่ส่งกลับ

    //             if (response.message) {
    //                 Swal.fire({
    //                     title: 'สำเร็จ!',
    //                     text: response.message,
    //                     icon: 'success',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 }).then(() => {
    //                     fetchAddresses();
    //                     $('#modal_edit_address_customer').addClass('hidden');
    //                     hideModalEditAddress_customer();
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: 'ข้อผิดพลาด!',
    //                     text: 'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ.',
    //                     icon: 'error',
    //                     timer: 1500,
    //                     showConfirmButton: false
    //                 });
    //             }
    //         },
    //         error: function(xhr) {
    //             let errorMessage = 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล';
    //             if (xhr.responseJSON && xhr.responseJSON.errors) {
    //                 const errors = xhr.responseJSON.errors;
    //                 errorMessage = Object.values(errors).flat().join(', ');
    //             }
    //             Swal.fire({
    //                 title: 'ข้อผิดพลาด!',
    //                 text: errorMessage,
    //                 icon: 'error',
    //                 timer: 1500,
    //                 showConfirmButton: false
    //             });
    //         },
    //         complete: function() {
    //             // เปิดใช้งานปุ่มอีกครั้ง
    //             $('#updateAddressButton').prop('disabled', false);
    //         }
    //     });
    // }); --}}

{{-- // Type_Adds: $('#Type_Adds_edit').val(), --}}

{{-- // error: function(xhr) {
//     let errorMessage = 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล';
//     if (xhr.responseJSON && xhr.responseJSON.errors) {
//         const errors = xhr.responseJSON.errors;
//         errorMessage = Object.values(errors).flat().join(', ');
//     }
//     Swal.fire({
//         title: 'ข้อผิดพลาด!',
//         text: errorMessage,
//         icon: 'error',
//         timer: 1500,
//         showConfirmButton: false
//     });
// }, --}}
