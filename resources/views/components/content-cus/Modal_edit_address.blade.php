@include('components.content-cus.component_js')


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

            <form id="editAddressForm">
                <!-- เพิ่มเนื้อหาของ Modal ที่นี่ -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pt-2">
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ปัจจุบัน"
                                        name="Type_Adds" id="adds-0">
                                    <label class="form-check-label text-base text-gray-700" for="adds-0">
                                        ที่อยู่ปัจจุบัน
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ส่งเอกสาร"
                                        name="Type_Adds" id="adds-1">
                                    <label class="form-check-label text-base text-gray-700" for="adds-1">
                                        ที่อยู่ส่งเอกสาร
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ตามสำเนา"
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
                        <input type="text" id="dataCusIdField" name="DataCus_id" hidden value="{{ $customer->id }}">


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
                    </div>
                </div>

                <div class="flex justify-end space-x-2 mt-4">
                    <!-- ปุ่ม บันทึก -->
                    <button type="submit" id="submitBtnAddress"
                        class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-500 flex items-center space-x-2 transition duration-300">
                        <i class="fas fa-save"></i> <!-- ไอคอน "บันทึก" ของ Font Awesome -->
                        <span>สร้างทรัพย์ใหม่</span>
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




<script>
    function openModal_Edit_address_customer(button) {
        const addressId = $(button).data('id');
        // ส่ง request เพื่อดึงข้อมูลที่อยู่จากเซิร์ฟเวอร์ผ่าน AJAX
        $.ajax({
            url: '/get-address/' + addressId, // URL สำหรับดึงข้อมูลที่อยู่ตาม addressId
            type: 'GET',
            success: function(response) {
                // เติมค่าจาก response ลงในฟอร์มให้ครบทุกฟิลด์
                $('#addressId').val(response.DataCus_id);
                $('#houseNumber').val(response.houseNumber_Adds);
                $('#road').val(response.road_Adds);
                $('#village').val(response.village_Adds);
                $('#province').val(response.houseProvince_Adds);
                $('#postalCode').val(response.Postal_Adds);
                $('#houseGroup').val(response.houseGroup_Adds);
                $('#building').val(response.building_Adds);
                $('#roomNumber').val(response.roomNumber_Adds);
                $('#Floor').val(response.Floor_Adds);
                $('#alley').val(response.alley_Adds);
                $('#houseZone').val(response.houseZone_Adds);
                $('#houseDistrict').val(response.houseDistrict_Adds);
                $('#houseTambon').val(response.houseTambon_Adds);
                $('#Detail').val(response.Detail_Adds);
                $('#Coordinates').val(response.Coordinates_Adds);

                // แสดง modal ด้วยเอฟเฟกต์ fade in
                $('#modal_edit_address_customer').fadeIn(
                300); // 300 = 0.4 วินาที (คุณสามารถปรับความเร็วได้)
            },
            error: function(xhr, status, error) {
                // จัดการข้อผิดพลาด
                alert('เกิดข้อผิดพลาด: ' + error);
            }
        });
    }

    function hideModalEditAddress_customer() {
        // ซ่อน modal ด้วยเอฟเฟกต์ fade out
        $('#modal_edit_address_customer').fadeOut(300, function() {
            // เมื่อ fade out เสร็จสิ้นสามารถทำสิ่งที่ต้องการได้ เช่น รีเซ็ตฟอร์ม
            // $('#modal_edit_address_customer').find("input, textarea").val(""); // ถ้าต้องการรีเซ็ตฟอร์ม
        });
    }

    function hideModal_edit_address() {
        // ซ่อน modal ด้วยเอฟเฟกต์ fade out
        $('#modal_edit_address_customer').fadeOut(300, function() {
            // เมื่อ fade out เสร็จสิ้นสามารถทำสิ่งที่ต้องการได้ เช่น รีเซ็ตฟอร์ม
            // $('#modal_edit_address_customer').find("input, textarea").val(""); // ถ้าต้องการรีเซ็ตฟอร์ม
        });
    }
</script>
