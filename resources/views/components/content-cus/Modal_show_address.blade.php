

<!-- Address Display Modal -->
<div id="modal_show_address_customer" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50">
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- Header -->
            {{-- <div class="flex items-center justify-between mb-4 space-x-3">
                <div class="flex items-center space-x-4 p-4">
                    <div class="p-3 bg-orange-100 rounded-xl">
                        <img src="{{ asset('img/map.gif') }}" alt="map icon"
                            class="w-12 h-12 object-cover rounded-lg">
                    </div>
                    <div class="flex-grow">
                        <h5 class="text-xl font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                            แสดงข้อมูลที่อยู่ลูกค้า</h5>
                        <p class="text-gray-500 text-sm mt-1">(Show Customer Address)</p>
                        <div class="h-1 w-32 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2"></div>
                    </div>
                </div>
                <button onclick="hideModal_show_address()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div> --}}

            <div class="flex items-center justify-between mb-4 space-x-2">
                <div class="flex items-center space-x-3 p-3">
                    <div class="p-2 bg-orange-100 rounded-xl">
                        <img src="{{ asset('img/map.gif') }}" alt="map icon"
                            class="w-8 h-8 object-cover rounded-lg">
                    </div>
                    <div class="flex-grow">
                        <h5 class="text-lg font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                            แสดงข้อมูลที่อยู่ลูกค้า</h5>
                        <p class="text-gray-500 text-xs mt-1">(Show Customer Address)</p>
                        <div class="h-1 w-24 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2"></div>
                    </div>
                </div>
                <button onclick="hideModal_show_address()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <hr>

            <br>

            <!-- Address Details Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-0">
                <!-- Left Column - Address Type Selection -->
                <div>
                    <div class="flex flex-col space-y-4">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-orange-50 p-3 rounded-lg">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="radio" name="Type_Adds" value="ที่อยู่ปัจจุบัน" class="form-radio text-orange-500" disabled>
                                    <span class="text-gray-700">ที่อยู่ปัจจุบัน</span>
                                </label>
                            </div>
                            <div class="bg-orange-50 p-3 rounded-lg">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="radio" name="Type_Adds" value="ที่อยู่ส่งเอกสาร" class="form-radio text-orange-500" disabled>
                                    <span class="text-gray-700">ที่อยู่ส่งเอกสาร</span>
                                </label>
                            </div>
                            <div class="bg-orange-50 p-3 rounded-lg">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="radio" name="Type_Adds" value="ที่อยู่ตามสำเนา" class="form-radio text-orange-500" disabled>
                                    <span class="text-gray-700">ที่อยู่ตามสำเนา</span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="relative">
                        <img src="{{ asset('img/home2.jpg') }}" alt="theme image" class="avatar-sm" style="height: 80%;">
                    </div>
                </div>

                <!-- Right Column - Address Details Form -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <form id="editAddressForm" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" id="addressId" name="id">
                        <input type="hidden" id="dataCusIdField" name="DataCus_id">

                        <div class="space-y-4 mt-0">
                            <div class="relative">
                                <input type="text" id="Registration_number_show" name="Registration_number" disabled
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder="----- -----" oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                    oninput="this.setCustomValidity('')">
                                <label for="Registration_number_show"
                                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    เลขทะเบียนบ้าน
                                </label>
                            </div>


                            <script>
                                $(document).ready(function() {
                                    $('#Registration_number_show').mask('00000000000'); // กำหนดรูปแบบเป็น 11 หลัก
                                });
                            </script>

                            <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                                <div class="relative">
                                    <input type="text" id="houseNumber_Adds_show" name="houseNumber_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="houseNumber_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        บ้านเลขที่
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="houseGroup_Adds_show" name="houseGroup_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="houseGroup_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        หมู่
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="building_Adds_show" name="building_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="building_Adds_show"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        อาคาร
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="village_Adds_show" name="village_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="village_Adds_show"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        หมู่บ้าน
                                    </label>
                                </div>

                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                                <div class="relative">
                                    <input type="text" id="roomNumber_Adds_show" name="roomNumber_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="roomNumber_Adds_show"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เลขที่ห้อง
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="Floor_Adds_show" name="Floor_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="Floor_Adds_show"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ชั้นที่
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="alley_Adds_show" name="alley_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="alley_Adds_show"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ซอย
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="road_Adds_show" name="road_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="road_Adds_show"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ถนน
                                    </label>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="relative">
                                    <input type="text" id="houseZone_Adds_show" name="houseZone_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <label for="houseZone_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ภูมิภาค
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="houseProvince_Adds_show" name="houseProvince_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <label for="houseProvince_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        จังหวัด
                                    </label>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="relative">
                                    <input type="text" id="houseDistrict_Adds_show" name="houseDistrict_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <label for="houseDistrict_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        อำเภอ
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="houseTambon_Adds_show" name="houseTambon_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <label for="houseTambon_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ตำบล
                                    </label>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="relative">
                                    <input type="text" id="Postal_Adds_show" name="Postal_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <label for="Postal_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        รหัสไปรษณีย์
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="Coordinates_Adds_show" name="Coordinates_Adds" disabled
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" ">
                                    <label for="Coordinates_Adds_show"
                                        class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        พิกัด
                                    </label>
                                </div>
                            </div>

                            <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                                <textarea id="Detail_Adds_show" name="Detail_Adds" rows="1" disabled
                                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" "></textarea>
                                <label for="Detail_Adds_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    รายละเอียด
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Action Buttons -->
            {{-- <div class="flex justify-end space-x-3 mt-1">
                <button onclick="hideModal_show_address()"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                    ปิด
                </button>
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                <button onclick="hideModal_show_address()"
                    class="px-6 py-2.5 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm transition-transform duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-gray-500/50">
                    <i class="fa-regular fa-circle-xmark"></i> ปิด
                </button>
            </div>

        </div>
    </div>
</div>

<!-- JavaScript for Modal Handling -->
<script>
    function openModal_Show_address_customer(button) {
        const addressId = $(button).data('id');

        $.ajax({
            url: `/get-address/${addressId}`,
            method: 'GET',
            success: function(response) {
                // Populate form fields
                $('#addressId').val(response.id);
                $('#dataCusIdField').val(response.DataCus_id);

                // Basic address details
                $(`input[name="Type_Adds"][value="${response.Type_Adds}"]`).prop('checked', true);
                $('#Registration_number_show').val(response.Registration_number);
                $('#houseGroup_Adds_show').val(response.houseGroup_Adds);
                $('#houseNumber_Adds_show').val(response.houseNumber_Adds);
                $('#houseProvince_Adds_show').val(response.houseProvince_Adds);
                $('#houseZone_Adds_show').val(response.houseZone_Adds);
                $('#houseDistrict_Adds_show').val(response.houseDistrict_Adds);
                $('#houseTambon_Adds_show').val(response.houseTambon_Adds);
                $('#Postal_Adds_show').val(response.Postal_Adds);

                // แสดงข้อมูลที่อยู่
                $('#road_Adds_show').val(response.road_Adds);
                $('#village_Adds_show').val(response.village_Adds);
                $('#building_Adds_show').val(response.building_Adds);
                $('#roomNumber_Adds_show').val(response.roomNumber_Adds);
                $('#Floor_Adds_show').val(response.Floor_Adds);
                $('#alley_Adds_show').val(response.alley_Adds);
                $('#Coordinates_Adds_show').val(response.Coordinates_Adds);
                $('#Detail_Adds_show').val(response.Detail_Adds);


                // Show modal with animation
                $('#modal_show_address_customer')
                    .removeClass('hidden')
                    .css({ opacity: 0, top: '60px' })
                    .removeClass('hidden')
                    .animate({ opacity: 1, top: '0px' }, 200, 'swing');
            },
            error: function(xhr) {
                console.error('Error fetching address:', xhr.responseText);
                alert('ไม่สามารถดึงข้อมูลที่อยู่ได้ กรุณาลองใหม่อีกครั้ง');
            }
        });

    }


    function populateSelect(selector, value) {
        const select = $(selector);
        select.empty().append(`<option value="">${select.attr('placeholder') || 'เลือก'}</option>`);
        if (value) {
            select.append(`<option value="${value}" selected>${value}</option>`);
        }
    }

    function hideModal_show_address() {
        $('#modal_show_address_customer')
            .css('transform', 'translateY(0%)')  // ตั้งค่าเริ่มต้น
            .animate({
                opacity: 0,
                top: '-100%'  // ย้ายขึ้นไป
            }, 500, 'easeInOutCubic', function() {
                $(this).addClass('hidden');
            });
    }
</script>











<!-- Address Fields -->
{{-- <div class="grid grid-cols-2 gap-4">
    <div class="relative">
        <input type="text" id="houseNumber_Adds_show" name="houseNumber_Adds"
            class="w-full p-2 border rounded-md focus:ring-2 focus:ring-orange-500"
            placeholder="บ้านเลขที่">
        <label class="absolute -top-2 left-2 bg-white px-1 text-xs text-orange-500">
            บ้านเลขที่
        </label>
    </div>
</div> --}}
{{-- // Location details
// populateSelect('#houseZone_Adds_show', response.houseZone_Adds);
// populateSelect('#houseDistrict_Adds_show', response.houseDistrict_Adds);
// populateSelect('#houseTambon_Adds_show', response.houseTambon_Adds);
// populateSelect('#Postal_Adds_show', response.Postal_Adds); --}}
