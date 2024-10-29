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
                <input type="text" id="dataCusIdField" name="DataCus_id" hidden value="{{ $customer->id }}">

                <!-- เพิ่มเนื้อหาของ Modal ที่นี่ -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pt-2">
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ปัจจุบัน"
                                        name="Type_Adds_edit" id="adds-0">
                                    <label class="form-check-label text-base text-gray-700" for="adds-0">
                                        ที่อยู่ปัจจุบัน
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ส่งเอกสาร"
                                        name="Type_Adds_edit" id="adds-1">
                                    <label class="form-check-label text-base text-gray-700" for="adds-1">
                                        ที่อยู่ส่งเอกสาร
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="ที่อยู่ตามสำเนา"
                                        name="Type_Adds_edit" id="adds-2">
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

                        {{-- <input type="hidden" id="addressId" name="addressId" value="{{ $address->id }}"> --}}



                        <div class="relative">
                            <input type="text" id="Registration_number" name="Registration_number"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder="----- -----" oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                oninput="this.setCustomValidity('')">
                            <label for="Registration_number"
                                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
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
                                <input type="text" id="houseNumber_Adds_edit" name="houseNumber_Adds"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
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
    function openModal_Edit_address_customer(button) {
        const addressId = $(button).data('id');

        $.ajax({
            url: '/get-address/' + addressId,
            type: 'GET',
            success: function(response) {
                // เติมค่าจาก response ลงในฟอร์มให้ครบทุกฟิลด์ตามที่คุณต้องการ
                $('#addressId').val(response.DataCus_id);
                $('#Registration_number').val(response.Registration_number);
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

                $('#houseZone_Adds_edit').empty().append('<option value="">ภูมิภาค</option>');
                $('#houseZone_Adds_edit').append(
                    `<option value="${response.houseZone_Adds}" selected>${response.houseZone_Adds}</option>`
                );

                $('#houseProvince_Adds_edit').empty().append('<option value="">จังหวัด</option>');
                $('#houseProvince_Adds_edit').append(
                    `<option value="${response.houseProvince_Adds}" selected>${response.houseProvince_Adds}</option>`
                );

                $('#houseDistrict_Adds_edit').empty().append('<option value="">อำเภอ</option>');
                $('#houseDistrict_Adds_edit').append(
                    `<option value="${response.houseDistrict_Adds}" selected>${response.houseDistrict_Adds}</option>`
                );

                $('#houseTambon_Adds_edit').empty().append('<option value="">ตำบล</option>');
                $('#houseTambon_Adds_edit').append(
                    `<option value="${response.houseTambon_Adds}" selected>${response.houseTambon_Adds}</option>`
                );

                $('#Postal_Adds_edit').empty().append('<option value="">รหัสไปรษณีย์</option>');
                $('#Postal_Adds_edit').append(
                    `<option value="${response.Postal_Adds}" selected>${response.Postal_Adds}</option>`);
                // แสดง modal ด้วยเอฟเฟกต์ fade in
                $('#modal_edit_address_customer').css({
                    display: 'block',
                    opacity: 0,
                    top: '-100px'
                }).animate({
                    top: '0px',
                    opacity: 1
                }, 300);
            },
            error: function(xhr, status, error) {
                alert('เกิดข้อผิดพลาด: ' + error);
            }
        });
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // แสดง modal
    $('#openModalButton').on('click', function() {
        $('#modal_edit_address_customer').removeClass('hidden');
    });

    // ปิด modal
    $('#closeModal').on('click', function() {
        $('#modal_edit_address_customer').addClass('hidden');
    });


    $('#updateAddressButton').on('click', function() {
        // ป้องกันการคลิกซ้ำ
        $(this).prop('disabled', true);

        $.ajax({
            url: '/update-address', // URL สำหรับอัปเดตข้อมูล
            type: 'POST',
            data: {
                // ข้อมูลที่คุณจะส่งไป
                id: $('#addressId').val(),
                DataCus_id: $('#DataCus_id').val(),
                Registration_number: $('#Registration_number').val(),
                date_Adds: $('#date_Adds').val(),
                Code_Adds: $('#Code_Adds').val(),
                Ordinal_Adds: $('#Ordinal_Adds').val(),
                Status_Adds: $('#Status_Adds').val(),
                Type_Adds: $('#Type_Adds').val(),
                houseNumber_Adds: $('#houseNumber_Adds_edit').val(),
                houseGroup_Adds: $('#houseGroup_Adds_edit').val(),
                building_Adds: $('#building_Adds_edit').val(),
                village_Adds: $('#village_Adds_edit').val(),
                roomNumber_Adds: $('#roomNumber_Adds_edit').val(),
                Floor_Adds: $('#Floor_Adds_edit').val(),
                alley_Adds: $('#alley_Adds_edit').val(),
                road_Adds: $('#road_Adds_edit').val(),
                houseZone_Adds: $('#houseZone_Adds_edit').val(),
                houseProvince_Adds: $('#houseProvince_Adds_edit').val(),
                houseDistrict_Adds: $('#houseDistrict_Adds_edit').val(),
                houseTambon_Adds: $('#houseTambon_Adds_edit').val(),
                Postal_Adds: $('#Postal_Adds_edit').val(),
                Detail_Adds: $('#Detail_Adds_edit').val(),
                Coordinates_Adds: $('#Coordinates_Adds_edit').val(),
                UserZone: $('#UserZone').val(),
                UserBranch: $('#UserBranch').val(),
                UserInsert: $('#UserInsert').val(),
                UserUpdate: $('#UserUpdate').val(),
            },
            success: function(response) {
                console.log(response); // ตรวจสอบโครงสร้างของ response ที่ส่งกลับ

                // ตรวจสอบว่า response มี data หรือไม่ (data อาจจะเป็น null แต่ message ต้องมี)
                if (response.message) {
                    if (response.data) {
                        // แสดงข้อมูลที่อยู่
                        $('#addressDisplay').html(`
                        <p>ที่อยู่: ${response.data.houseNumber_Adds || 'ไม่ระบุ'} ${response.data.houseGroup_Adds || 'ไม่ระบุ'} ${response.data.building_Adds || 'ไม่ระบุ'} ${response.data.village_Adds || 'ไม่ระบุ'}, ${response.data.roomNumber_Adds || 'ไม่ระบุ'}, ชั้น ${response.data.Floor_Adds || 'ไม่ระบุ'}, ซอย ${response.data.alley_Adds || 'ไม่ระบุ'}, ถนน ${response.data.road_Adds || 'ไม่ระบุ'}</p>
                        <p>จังหวัด: ${response.data.houseProvince_Adds || 'ไม่ระบุ'}</p>
                        <p>อำเภอ: ${response.data.houseDistrict_Adds || 'ไม่ระบุ'}</p>
                        <p>ตำบล: ${response.data.houseTambon_Adds || 'ไม่ระบุ'}</p>
                        <p>รหัสไปรษณีย์: ${response.data.Postal_Adds || 'ไม่ระบุ'}</p>
                        <p>รายละเอียดเพิ่มเติม: ${response.data.Detail_Adds || 'ไม่ระบุ'}</p>
                        <p>พิกัด: ${response.data.Coordinates_Adds || 'ไม่ระบุ'}</p>
                        <p>สถานะ: ${response.data.Status_Adds || 'ไม่ระบุ'}</p>
                        <p>ประเภท: ${response.data.Type_Adds || 'ไม่ระบุ'}</p>
                        <p>หมายเลขทะเบียน: ${response.data.Registration_number || 'ไม่ระบุ'}</p>
                    `);
                    }

                    // แสดง SweetAlert สำเร็จและปิด Modal
                    Swal.fire({
                        title: 'สำเร็จ!',
                        text: response.message,
                        icon: 'success',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        // $('#modal_edit_address_customer').modal('hide'); // ปิด modal ที่แสดงอยู่
                        $('#modal_edit_address_customer').addClass('hidden');
                    });
                } else {
                    Swal.fire({
                        title: 'ข้อผิดพลาด!',
                        text: 'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ.',
                        icon: 'error',
                        timer: 1500,
                        showConfirmButton: false
                    });
                }
            },
            error: function(xhr) {
                let errorMessage = 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    const errors = xhr.responseJSON.errors;
                    errorMessage = '';
                    for (const key in errors) {
                        errorMessage += `${errors[key].join(', ')}\n`;
                    }
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
                // เปิดใช้งานปุ่มอีกครั้ง
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
















{{--

// function updateAddress() {
    //     const formData = $('#editAddressForm').serialize();
    //     $.ajax({
    //         url: '/update-address',
    //         type: 'POST',
    //         data: formData,
    //         success: function(response) {
    //             if (response.success) {
    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'อัปเดตข้อมูลสำเร็จ!',
    //                     showConfirmButton: false,
    //                     timer: 1500
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     icon: 'error',
    //                     title: 'เกิดข้อผิดพลาด',
    //                     text: response.message || 'ไม่สามารถอัปเดตข้อมูลได้'
    //                 });
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'เกิดข้อผิดพลาด',
    //                 text: 'กรุณาลองอีกครั้ง'
    //             });
    //         }
    //     });
    // }

    // $('#editAddressForm').on('submit', function(e) {
    //     e.preventDefault(); // ป้องกันการส่งฟอร์มปกติ

    //     $.ajax({
    //         url: $(this).attr('action'),
    //         type: 'POST',
    //         data: $(this).serialize(), // ส่งข้อมูลฟอร์ม
    //         success: function(response) {
    //             if (response.success) {
    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'อัปเดตข้อมูลสำเร็จ',
    //                     text: 'ข้อมูลที่อยู่ได้รับการอัปเดตแล้ว',
    //                 });
    //                 // ปิด modal หรือทำการอื่นๆ ที่ต้องการ
    //             } else {
    //                 Swal.fire({
    //                     icon: 'error',
    //                     title: 'เกิดข้อผิดพลาด',
    //                     text: response.message,
    //                 });
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'เกิดข้อผิดพลาด',
    //                 text: 'ไม่สามารถอัปเดตข้อมูลได้',
    //             });
    //         }
    //     });
    // }); --}}




{{-- // $('#updateAddressButton').on('click', function() {
        //     $.ajax({
        //         url: '/update-address', // URL สำหรับอัปเดตข้อมูล
        //         type: 'POST',
        //         data: {
        //             id: $('#addressId').val(), // ส่ง ID ของที่อยู่ที่ต้องการอัปเดต
        //             DataCus_id: $('#DataCus_id').val(),
        //             Registration_number: $('#Registration_number').val(),
        //             date_Adds: $('#date_Adds').val(),
        //             Code_Adds: $('#Code_Adds').val(),
        //             Ordinal_Adds: $('#Ordinal_Adds').val(),
        //             Status_Adds: $('#Status_Adds').val(),
        //             Type_Adds: $('#Type_Adds').val(),
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
        //             Swal.fire({
        //                 title: 'สำเร็จ!',
        //                 text: response.message,
        //                 icon: 'success',
        //                 confirmButtonText: 'ตกลง'
        //             });
        //         },
        //         error: function(xhr) {
        //             const errors = xhr.responseJSON.errors;
        //             let errorMessage = '';
        //             for (const key in errors) {
        //                 errorMessage += `${errors[key].join(', ')}\n`;
        //             }
        //             Swal.fire({
        //                 title: 'ข้อผิดพลาด!',
        //                 text: errorMessage,
        //                 icon: 'error',
        //                 confirmButtonText: 'ตกลง'
        //             });
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
            //             id: $('#addressId').val(), // ส่ง ID ของที่อยู่ที่ต้องการอัปเดต
            //             DataCus_id: $('#DataCus_id').val(),
            //             Registration_number: $('#Registration_number').val(),
            //             date_Adds: $('#date_Adds').val(),
            //             Code_Adds: $('#Code_Adds').val(),
            //             Ordinal_Adds: $('#Ordinal_Adds').val(),
            //             Status_Adds: $('#Status_Adds').val(),
            //             Type_Adds: $('#Type_Adds').val(),
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
            //             Swal.fire({
            //                 title: 'สำเร็จ!',
            //                 text: response.message,
            //                 icon: 'success',
            //                 confirmButtonText: 'ตกลง'
            //             }).then(() => {
            //                 // รีเฟรชหน้า หรือดำเนินการต่อเมื่อสำเร็จ
            //                 location.reload();
            //             });
            //         },
            //         error: function(xhr) {
            //             let errorMessage = 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล';
            //             if (xhr.responseJSON && xhr.responseJSON.errors) {
            //                 const errors = xhr.responseJSON.errors;
            //                 errorMessage = '';
            //                 for (const key in errors) {
            //                     errorMessage += `${errors[key].join(', ')}\n`;
            //                 }
            //             }
            //             Swal.fire({
            //                 title: 'ข้อผิดพลาด!',
            //                 text: errorMessage,
            //                 icon: 'error',
            //                 confirmButtonText: 'ตกลง'
            //             });
            //         },
            //         complete: function() {
            //             // เปิดใช้งานปุ่มอีกครั้ง
            //             $('#updateAddressButton').prop('disabled', false);
            //         }
            //     });
            // });

            // $('#updateAddressButton').on('click', function() {
            // // ป้องกันการคลิกซ้ำ
            //     $(this).prop('disabled', true);

            //     $.ajax({
            //         url: '/update-address', // URL สำหรับอัปเดตข้อมูล
            //         type: 'POST',
            //         data: {
            //             id: $('#addressId').val(), // ส่ง ID ของที่อยู่ที่ต้องการอัปเดต
            //             DataCus_id: $('#DataCus_id').val(),
            //             Registration_number: $('#Registration_number').val(),
            //             date_Adds: $('#date_Adds').val(),
            //             Code_Adds: $('#Code_Adds').val(),
            //             Ordinal_Adds: $('#Ordinal_Adds').val(),
            //             Status_Adds: $('#Status_Adds').val(),
            //             Type_Adds: $('#Type_Adds').val(),
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

            //             if (response.data) {
            //                 $('#addressDisplay').html(`
            //                     <p>ที่อยู่: ${response.data.houseNumber_Adds || 'ไม่ระบุ'} ${response.data.houseGroup_Adds || 'ไม่ระบุ'} ${response.data.building_Adds || 'ไม่ระบุ'} ${response.data.village_Adds || 'ไม่ระบุ'}, ${response.data.roomNumber_Adds || 'ไม่ระบุ'}, ชั้น ${response.data.Floor_Adds || 'ไม่ระบุ'}, ซอย ${response.data.alley_Adds || 'ไม่ระบุ'}, ถนน ${response.data.road_Adds || 'ไม่ระบุ'}</p>
            //                     <p>จังหวัด: ${response.data.houseProvince_Adds || 'ไม่ระบุ'}</p>
            //                     <p>อำเภอ: ${response.data.houseDistrict_Adds || 'ไม่ระบุ'}</p>
            //                     <p>ตำบล: ${response.data.houseTambon_Adds || 'ไม่ระบุ'}</p>
            //                     <p>รหัสไปรษณีย์: ${response.data.Postal_Adds || 'ไม่ระบุ'}</p>
            //                     <p>รายละเอียดเพิ่มเติม: ${response.data.Detail_Adds || 'ไม่ระบุ'}</p>
            //                     <p>พิกัด: ${response.data.Coordinates_Adds || 'ไม่ระบุ'}</p>
            //                     <p>สถานะ: ${response.data.Status_Adds || 'ไม่ระบุ'}</p>
            //                     <p>ประเภท: ${response.data.Type_Adds || 'ไม่ระบุ'}</p>
            //                     <p>หมายเลขทะเบียน: ${response.data.Registration_number || 'ไม่ระบุ'}</p>
            //                 `);

            //                 // แสดง SweetAlert สำเร็จและปิด Modal
            //                 Swal.fire({
            //                     title: 'สำเร็จ!',
            //                     text: response.message,
            //                     icon: 'success',
            //                     timer: 1500,
            //                     showConfirmButton: false
            //                 }).then(() => {
            //                     // ปิด modal ที่แสดงอยู่
            //                     $('#modal_edit_address_customer').modal('hide'); // เปลี่ยน '#yourModalId' ให้เป็น ID ของ modal ที่คุณใช้
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
            //                 errorMessage = '';
            //                 for (const key in errors) {
            //                     errorMessage += `${errors[key].join(', ')}\n`;
            //                 }
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
