<div id="edit_modal_asset" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black/50 modal">
    <div
        class="relative bg-white rounded-xl w-full max-w-screen-lg max-h-[95vh] overflow-auto scrollbar-hidden my-12 shadow-2xl">
        <!-- Modal Header -->
        {{-- <div class="sticky top-0 bg-white border-b z-10">
            <div class="flex items-center justify-between p-6">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-orange-100 rounded-xl">
                        <img src="{{ asset('img/minicar.gif') }}" alt="minicar icon"
                            class="w-12 h-12 object-cover rounded-lg">
                    </div>
                    <div>
                        <h5
                            class="text-xl font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                            แก้ไขข้อมูลสินทรัพย์ลูกค้า
                        </h5>
                        <p class="text-gray-500 text-sm mt-1">Edit Customers Assets</p>
                        <div class="h-1 w-32 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2"></div>
                    </div>
                </div>
                <button onclick="closeModal_Edit_asset()" class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-times text-xl text-gray-400 hover:text-gray-600"></i>
                </button>
            </div>
        </div> --}}

        <div class="sticky top-0 bg-white border-b z-10 p-2 pl-2 shadow-md">
            <div class="flex items-center justify-between p-4"> <!-- ลด padding ของ div -->
                <div class="flex items-center gap-2"> <!-- ลด gap -->
                    <div class="p-2 bg-orange-100 rounded-xl"> <!-- ลด padding ภายใน -->
                        <img src="{{ asset('img/minicar.gif') }}" alt="minicar icon"
                            class="w-10 h-10 object-cover rounded-lg"> <!-- ลดขนาดภาพ -->
                    </div>
                    <div>
                        <h5
                            class="text-lg font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                            <!-- ลดขนาดตัวอักษร -->
                            แก้ไขข้อมูลสินทรัพย์ลูกค้า
                        </h5>
                        <p class="text-gray-500 text-xs mt-1">Edit Customers Assets</p> <!-- ลดขนาดตัวอักษร -->
                        <div class="h-1 w-24 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-0"></div>
                        <!-- ลดความยาวของเส้น -->
                    </div>
                </div>
                <button onclick="closeModal_Edit_asset()" class="p-1 hover:bg-gray-100 rounded-lg transition-colors">
                    <!-- ลด padding -->
                    <i class="fas fa-times text-lg text-gray-400 hover:text-gray-600"></i> <!-- ลดขนาดของไอคอน -->
                </button>
            </div>
        </div>


        <!-- Modal Body -->
        <form action="editAssetForm" onsubmit="return false;" class="divide-y">
            @csrf
            <div class="p-8 space-y-1">
                <input type="hidden" id="assetId" name="id">

                <!-- Main Information Grid -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Basic Vehicle Info -->
                    <div class="bg-orange-50 rounded-xl p-6 shadow-sm border border-orange-100">
                        <h4 class="text-lg font-semibold mb-6 text-orange-600 flex items-center gap-2">
                            <i class="fas fa-info-circle"></i>
                            ข้อมูลพื้นฐาน
                        </h4>
                        <div class="space-y-6">
                            <div class="form-group">
                                <label class="font-medium text-gray-700 block mb-2">ประเภทสินทรัพย์</label>
                                <input type="text" id="edit_Type_Asset" name="Type_Asset"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-orange-200 focus:border-orange-400 transition-colors">
                            </div>

                            <!-- Old License Plate Section -->
                            <fieldset class="border border-orange-200 rounded-lg p-4">
                                <legend class="text-sm font-semibold text-orange-600 px-2">ป้ายทะเบียนเก่า</legend>
                                <div class="space-y-4">
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">อักษรทะเบียนเดิม</label>
                                        <input type="text" id="edit_OldLicenseText" name="Vehicle_OldLicense_Text"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">ตัวเลขทะเบียนเดิม</label>
                                        <input type="text" id="edit_OldLicenseNumber"
                                            name="Vehicle_OldLicense_Number"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">จังหวัดทะเบียนเดิม</label>
                                        <input type="text" id="edit_OldProvince" name="OldProvince"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                </div>
                            </fieldset>

                            <!-- New License Plate Section -->
                            <fieldset class="border border-orange-200 rounded-lg p-4">
                                <legend class="text-sm font-semibold text-orange-600 px-2">ป้ายทะเบียนใหม่</legend>
                                <div class="space-y-4">
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">อักษรทะเบียนใหม่</label>
                                        <input type="text" id="edit_NewLicenseText" name="Vehicle_NewLicense_Text"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">ตัวเลขทะเบียนใหม่</label>
                                        <input type="text" id="edit_NewLicenseNumber"
                                            name="Vehicle_NewLicense_Number"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">จังหวัดทะเบียนใหม่</label>
                                        <input type="text" id="edit_NewProvince" name="NewProvince"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                </div>
                            </fieldset>

                            <div class="space-y-4">
                                <div class="form-group">
                                    <label class="text-gray-600 block mb-1">เลขถัง</label>
                                    <input type="text" id="edit_Vehicle_Chassis" name="Vehicle_Chassis"
                                        class="w-full border-gray-300 rounded-lg px-3 py-2">
                                </div>
                                <div class="form-group">
                                    <label class="text-gray-600 block mb-1">เลขเครื่อง</label>
                                    <input type="text" id="edit_Vehicle_Engine" name="Vehicle_Engine"
                                        class="w-full border-gray-300 rounded-lg px-3 py-2">
                                </div>
                                <div class="form-group">
                                    <label class="text-gray-600 block mb-1">สีรถ</label>
                                    <input type="text" id="edit_Vehicle_Color" name="Vehicle_Color"
                                        class="w-full border-gray-300 rounded-lg px-3 py-2">
                                </div>
                                <div class="form-group">
                                    <label class="text-gray-600 block mb-1">เลขตัวรถใหม่</label>
                                    <input type="text" id="edit_Vehicle_New_Number" name="Vehicle_New_Number"
                                        class="w-full border-gray-300 rounded-lg px-3 py-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Details -->
                    <div class="bg-blue-50 rounded-xl p-6 shadow-sm border border-blue-100">
                        <h4 class="text-lg font-semibold mb-6 text-blue-600 flex items-center gap-2">
                            <i class="fas fa-car"></i>
                            รายละเอียดรถ
                        </h4>
                        <div class="space-y-4">
                            {{-- <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทรถ 1</label>
                                <input type="text" id="edit_Vehicle_Type" name="Vehicle_Type"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div> --}}

                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทรถ 1</label>
                                <select id="Ratetype_id" name="Vehicle_Type"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    <option value="">เลือกประเภทรถ</option>
                                </select>
                            </div>


                            {{-- <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทรถ 2</label>
                                <input type="text" id="edit_Vehicle_Type_PLT" name="Vehicle_Type_PLT"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div> --}}

                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทรถ 2</label>
                                <select id="Name_Vehicle" name="Vehicle_Type_PLT"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    <option value="">เลือกประเภทรถ 2</option> <!-- ตัวเลือกเริ่มต้น -->
                                </select>
                            </div>


                            {{-- <div class="form-group">
                                <label class="text-gray-600 block mb-1">ยี่ห้อรถ</label>
                                <input type="text" id="edit_Vehicle_Brand" name="Vehicle_Brand"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div> --}}

                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ยี่ห้อรถ</label>
                                <select id="Brand_car_and_moto" name="Vehicle_Brand"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    <option value="">เลือกยี่ห้อรถ</option>
                                </select>
                            </div>

                            {{-- <div class="form-group">
                                <label class="text-gray-600 block mb-1">กลุ่มรถ</label>
                                <input type="text" id="edit_Vehicle_Group" name="Vehicle_Group"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div> --}}

                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">กลุ่มรถและมอเตอร์ไซค์</label>
                                <select id="Group_car_and_moto" name="Vehicle_Group"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    <option value="">เลือกกลุ่มรถหรือมอเตอร์ไซค์</option>
                                </select>
                            </div>


                            {{-- <div class="form-group">
                                <label class="text-gray-600 block mb-1">รุ่นรถ</label>
                                <input type="text" id="edit_Vehicle_Models" name="Vehicle_Models"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div> --}}



                            {{-- <div class="form-group">
                                <label class="text-gray-600 block mb-1">ปีรถ</label>
                                <input type="text" id="edit_Vehicle_Years" name="Vehicle_Years"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div> --}}

                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ปีรถ</label>
                                <select id="Year_car_and_moto" name="Vehicle_Years"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    <option value="">เลือกปีรถ</option> <!-- ตัวเลือกเริ่มต้น -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">รุ่นรถ</label>
                                <select id="Model_car_and_moto" name="Vehicle_Models"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    <option value="">เลือกรุ่นรถ</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">เกียร์รถ</label>
                                <select id="Vehicle_Gear" name="Vehicle_Gear"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    <option value="">เกียร์รถ</option>
                                    <option value="manual" class="text-gray-500">Manual</option>
                                    <option value="auto" class="text-gray-500">Auto</option>
                                </select>
                            </div>



                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ความจุเครื่องยนต์</label>
                                <input type="text" id="edit_Vehicle_CC" name="Vehicle_CC"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            {{-- <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทเกียร์</label>
                                <input type="text" id="edit_Vehicle_Gear" name="Vehicle_Gear"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div> --}}
                        </div>
                    </div>
                </div>

                <br>

                <!-- Insurance Information -->
                <div class="bg-green-50 rounded-xl p-6 shadow-sm border border-green-100">
                    <h4 class="text-lg font-semibold mb-6 text-green-600 flex items-center gap-2">
                        <i class="fas fa-shield-alt"></i>
                        ข้อมูลประกัน
                    </h4>
                    <div class="space-y-6">
                        <!-- Insurance Section -->
                        <div class="bg-white rounded-lg p-4 border border-green-200">
                            <h5 class="font-medium text-green-700 mb-4">ประกัน</h5>
                            <div class="ml-4 space-y-4">
                                <span id="edit_Choose_Insurance_Cal" class="block text-gray-600"></span>
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">วันที่ต่อประกัน</label>
                                        <input type="date" id="edit_Insurance_renewal_date"
                                            name="Insurance_renewal_date"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">วันที่หมดอายุ</label>
                                        <input type="date" id="edit_Insurance_end_date" name="Insurance_end_date"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Act Section -->
                        <div class="bg-white rounded-lg p-4 border border-green-200">
                            <h5 class="font-medium text-green-700 mb-4">พ.ร.บ.</h5>
                            <div class="ml-4 space-y-4">
                                <span id="edit_Choose_Act_Cal" class="block text-gray-600"></span>
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">วันที่ต่อ พ.ร.บ.</label>
                                        <input type="date" id="edit_act_renewal_date" name="act_renewal_date"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">วันที่หมดอายุ</label>
                                        <input type="date" id="edit_act_end_date" name="act_end_date"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Registration Section -->
                        <div class="bg-white rounded-lg p-4 border border-green-200">
                            <h5 class="font-medium text-green-700 mb-4">ทะเบียน</h5>
                            <div class="ml-4 space-y-4">
                                <span id="edit_Choose_Register_Cal" class="block text-gray-600"></span>
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">วันที่ต่อทะเบียน</label>
                                        <input type="date" id="edit_register_renewal_date"
                                            name="register_renewal_date"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-600 block mb-1">วันที่หมดอายุ</label>
                                        <input type="date" id="edit_register_end_date" name="register_end_date"
                                            class="w-full border-gray-300 rounded-lg px-3 py-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <!-- Timestamps -->
                <div class="bg-gray-50 rounded-xl p-6 mt-8 space-y-3">
                    <p class="flex items-center text-gray-600">
                        <i class="fas fa-clock mr-3 text-gray-400"></i>
                        <span class="text-sm">สร้างข้อมูลเมื่อ :
                            <span id="edit_created_at" class="ml-2 font-medium"></span>
                        </span>
                    </p>
                    <p class="flex items-center text-gray-600">
                        <i class="fas fa-history mr-3 text-gray-400"></i>
                        <span class="text-sm">อัปเดตล่าสุดเมื่อ :
                            <span id="edit_updated_at" class="ml-2 font-medium"></span>
                        </span>
                    </p>
                </div>
            </div>

            <!-- Footer Actions -->
            <div class="sticky bottom-0 bg-white border-t px-2 py-4 mr-4 flex items-center justify-end gap-2">

                <button type="button" onclick="saveAssetChanges()"
                    class="px-4 py-1.5 rounded-lg bg-green-500 text-white hover:bg-green-600 focus:ring-2 focus:ring-green-300 transition-all duration-200">
                    <i class="fas fa-save mr-2"></i>
                    บันทึก
                </button>

                <button type="button" onclick="cancelModal_Edit_asset()"
                    class="px-4 py-1.5 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 focus:ring-2 focus:ring-gray-200 transition-all duration-200">
                    <i class="fas fa-times mr-2"></i>
                    ยกเลิก
                </button>
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    let currentAssetId = null;

    function openModal_Edit_asset_customer(button) {
        // ดึงค่า asset ID จาก data-id ที่อยู่ในปุ่ม
        currentAssetId = $(button).data('id');

        // กรอกค่า assetId ลงใน input
        $('#assetId').val(currentAssetId);

        // Ajax สำหรับการเช็คค่า Type_Asset--------------------------------------------------------------------

        $.ajax({
            url: '/api/getAssetData',
            method: 'GET',
            data: {
                id: currentAssetId
            },
            success: function(data) {
                // กรอกข้อมูลในฟิลด์ของ modal ด้วยข้อมูลที่ดึงได้จาก API
                $('#edit_Type_Asset').val(data.Type_Asset);

                // ตรวจสอบค่า Type_Asset และเรียก loadRatetypeOptions ด้วย vehicleType ที่ตรงกัน
                if (data.Type_Asset === 'รถยนต์') {
                    loadRatetypeOptions('car'); // ถ้า Type_Asset เป็นรถยนต์ ให้โหลด Ratetype สำหรับรถยนต์
                } else if (data.Type_Asset === 'มอเตอร์ไซค์') {
                    loadRatetypeOptions(
                        'motor'); // ถ้า Type_Asset เป็นมอเตอร์ไซค์ ให้โหลด Ratetype สำหรับมอเตอร์ไซค์
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching asset data:', error);
            }
        });

        // Ajax สำหรับการเช็คค่า Ratetype_id--------------------------------------------------------------------
        function loadRatetypeOptions(vehicleType, currentVehicleType) {
            const selectElement = $('#Ratetype_id');
            selectElement.empty(); // ล้าง options ก่อนที่จะเพิ่มข้อมูลใหม่

            // เพิ่มตัวเลือกเริ่มต้น
            selectElement.append('<option value="">เลือกประเภทรถ</option>');

            // ซ่อน select ไว้ก่อนโหลดข้อมูล
            selectElement.hide();

            $.ajax({
                url: '/api/ratetype-options', // URL ที่ใช้เรียกฟังก์ชัน getRatetypeOptions()
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (vehicleType === 'car' && data.carTypes && data.carTypes.length > 0) {
                        data.carTypes.forEach(option => {
                            // สร้างและเพิ่ม option ใหม่ พร้อมตรวจสอบว่าเป็นค่าปัจจุบันหรือไม่
                            const newOption = new Option(option.name, option.id);
                            if (option.id === currentVehicleType) {
                                newOption.selected = true; // ตั้งเป็นค่าที่เลือกปัจจุบัน
                            }
                            selectElement.append(newOption);
                        });
                    } else if (vehicleType === 'motor' && data.motoTypes && data.motoTypes.length > 0) {
                        data.motoTypes.forEach(option => {
                            const newOption = new Option(option.name, option.id);
                            if (option.id === currentVehicleType) {
                                newOption.selected = true;
                            }
                            selectElement.append(newOption);
                        });
                    }

                    // แสดง select หลังโหลดข้อมูลเสร็จสิ้น
                    selectElement.show();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Ratetype options:', error);
                }
            });
        }

        // Ajax สำหรับการเช็คค่า Ratetype_id_PLT--------------------------------------------------------------------

        function loadRatetypeOptionsPLT(ratetypeIdPLT, currentVehicleTypePLT) {
            const selectElement = $('#Name_Vehicle');
            selectElement.empty(); // ล้างตัวเลือกก่อน

            // เพิ่มตัวเลือกเริ่มต้น
            selectElement.append('<option value="">เลือกประเภทรถ 2</option>');

            $.ajax({
                url: '/api/vehicle-names', // API ที่ใช้ในการดึงข้อมูลตัวเลือก
                method: 'GET',
                data: {
                    ratetype_id: ratetypeIdPLT
                }, // ส่ง Ratetype_id เพื่อกรองตัวเลือก
                dataType: 'json',
                success: function(data) {
                    data.forEach(function(option) {
                        const opt = $('<option></option>')
                            .val(option.Name_Vehicle)
                            .text(option.Name_Vehicle);

                        // ตรวจสอบหากตัวเลือกนี้ตรงกับค่าปัจจุบันที่ดึงมา
                        if (option.Name_Vehicle === currentVehicleTypePLT) {
                            opt.prop('selected', true); // ตั้งค่าเป็น selected
                        }

                        selectElement.append(opt); // เพิ่มตัวเลือกใหม่ใน select
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Vehicle names:', error);
                }
            });
        }

        // โหลดตัวเลือกเมื่อมีการเปลี่ยนค่า Ratetype_id
        $('#Ratetype_id').change(function() {
            const selectedTypePLT = $(this).val();
            loadRatetypeOptionsPLT(selectedTypePLT);
        });


        // Ajax สำหรับการเช็คค่า brand--------------------------------------------------------------------

        $('#Name_Vehicle').change(function() {
            const selectedVehicle = $(this).val();

            // ตรวจสอบว่าค่าที่เลือกคือ "ประเภทรถ 2" (ในที่นี้หมายถึงมอเตอร์ไซค์)
            if (selectedVehicle === "ประเภทรถ 2") {
                // ซ่อนตัวเลือกแบรนด์ทั้งหมด
                $('#Brand_car_and_moto').empty().append('<option value="">เลือกยี่ห้อรถ</option>');
                return; // ออกจากฟังก์ชัน
            }

            const selectedType = $('#Ratetype_id').val();

            // AJAX สำหรับดึงข้อมูล Brand Options
            $.ajax({
                url: '/api/brand-options',
                method: 'GET',
                data: {
                    ratetype_id: selectedType, // ส่งข้อมูลประเภทของยานพาหนะ
                    name_vehicle: selectedVehicle // ส่งข้อมูลประเภทของยานพาหนะ (รถยนต์หรือมอเตอร์ไซค์)
                },
                dataType: 'json',
                success: function(data) {
                    const selectElement = $('#Brand_car_and_moto');
                    selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                    // เพิ่มตัวเลือก "เลือกยี่ห้อรถ"
                    selectElement.append('<option value="">เลือกยี่ห้อรถ</option>');

                    // เพิ่มตัวเลือกแบรนด์รถยนต์ (ถ้ามีข้อมูล)
                    if (data.carBrands && data.carBrands.length > 0) {
                        data.carBrands.forEach(function(option) {
                            selectElement.append(new Option(option.Brand_car, option.id));
                        });
                    }

                    // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์ (ถ้ามีข้อมูล)
                    if (data.motoBrands && data.motoBrands.length > 0) {
                        data.motoBrands.forEach(function(option) {
                            selectElement.append(new Option(option.Brand_moto, option.id));
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Brand options:', error);
                }
            });
        });

        // Ajax สำหรับการเช็คค่า group ----------------------------------------------------------------------------

        $('#Brand_car_and_moto').change(function() {
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

                    // Add default option
                    selectElement.append('<option value="">กลุ่มรถ</option>');

                    // Add car groups if available
                    if (data.carGroups && data.carGroups.length > 0) {
                        data.carGroups.forEach(function(option) {
                            selectElement.append($('<option></option>')
                                .val(option.Group_car)
                                .text(option.Group_car)
                                .attr('data-id', option.id)
                            );
                        });
                    }

                    // Add motorcycle groups if available
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


        // Ajax สำหรับการเช็คค่า year ----------------------------------------------------------------------------

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


        // Ajax สำหรับการเช็คค่า group ----------------------------------------------------------------------------

        $('#Year_car_and_moto').change(function() {
            const selectedGroupId = $('#Group_car_and_moto').find('option:selected').data('id');
            const assetType = $('#edit_Type_Asset').val(); // เปลี่ยนเป็นดึงค่าจาก edit_Type_Asset

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
                    console.log('Data from API:', data);
                    console.log('Asset Type:', assetType);

                    const selectElement = $('#Model_car_and_moto');
                    selectElement.empty();
                    selectElement.append('<option value="">เลือกรุ่นรถ</option>');

                    // แสดงเฉพาะรุ่นที่ตรงกับ Type_Asset
                    if (assetType === 'รถยนต์') {
                        if (data.carModels && data.carModels.length > 0) {
                            const carOptGroup = $('<optgroup></optgroup>').attr('label', 'รถยนต์');
                            data.carModels.forEach(function(option) {
                                const opt = $('<option></option>')
                                    .val(option.Model_car)
                                    .text(option.Model_car);
                                carOptGroup.append(opt);
                            });
                            selectElement.append(carOptGroup);
                        } else {
                            selectElement.append('<option value="">ไม่มีข้อมูลรถยนต์</option>');
                        }
                    } else if (assetType === 'มอเตอร์ไซค์') {
                        if (data.motoModels && data.motoModels.length > 0) {
                            const motoOptGroup = $('<optgroup></optgroup>').attr('label',
                                'มอเตอร์ไซค์');
                            data.motoModels.forEach(function(option) {
                                const opt = $('<option></option>')
                                    .val(option.Model_moto)
                                    .text(option.Model_moto);
                                motoOptGroup.append(opt);
                            });
                            selectElement.append(motoOptGroup);
                        } else {
                            selectElement.append(
                                '<option value="">ไม่มีข้อมูลมอเตอร์ไซค์</option>');
                        }
                    } else {
                        selectElement.append('<option value="">กรุณาเลือกประเภทยานพาหนะ</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Model car and moto options:', error);
                    const selectElement = $('#Model_car_and_moto');
                    selectElement.empty();
                    selectElement.append('<option value="">ไม่สามารถโหลดข้อมูลได้</option>');
                }
            });
        });

        // Ajax สำหรับการเช็คค่า gear -----------------------------------------------------------------------------



        // Ajax สำหรับการเช็คค่า Get Data Asset--------------------------------------------------------------------

        $.ajax({
            url: '/api/getAssetData',
            method: 'GET',
            data: {
                id: currentAssetId
            },
            success: function(data) {
                // กรอกข้อมูลในฟิลด์ของ modal ด้วยข้อมูลที่ดึงได้จาก API

                function formatDate(date) {
                    return new Date(date).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        weekday: 'long'
                    });
                }

                $('#edit_Type_Asset').val(data.Type_Asset);
                $('#edit_OldLicenseText').val(data.Vehicle_OldLicense_Text);
                $('#edit_OldLicenseNumber').val(data.Vehicle_OldLicense_Number);
                $('#edit_OldProvince').val(data.OldProvince);
                $('#edit_NewLicenseText').val(data.Vehicle_NewLicense_Text);
                $('#edit_NewLicenseNumber').val(data.Vehicle_NewLicense_Number);
                $('#edit_NewProvince').val(data.NewProvince);
                $('#edit_Vehicle_Chassis').val(data.Vehicle_Chassis);
                $('#edit_Vehicle_Engine').val(data.Vehicle_Engine);
                $('#edit_Vehicle_Color').val(data.Vehicle_Color);

                // $('#edit_Vehicle_Brand').val(data.Vehicle_Brand);

                if (data.Type_Asset === 'รถยนต์') {
                    $('#edit_Vehicle_Brand').val(data.car_brand ? data.car_brand.Brand_car : '-');
                } else if (data.Type_Asset === 'มอเตอร์ไซค์') {
                    $('#edit_Vehicle_Brand').val(data.moto_brand ? data.moto_brand.Brand_moto : '-');
                } else {
                    $('#edit_Vehicle_Brand').val('-');
                }

                $('#edit_Vehicle_Group').val(data.Vehicle_Group);
                // $('#edit_Vehicle_Models').val(data.Vehicle_Models);
                $('#edit_Vehicle_Years').val(data.Vehicle_Years);
                $('#edit_Vehicle_CC').val(data.Vehicle_CC);
                $('#edit_Vehicle_Gear').val(data.Vehicle_Gear);

                // $('#edit_Vehicle_Type').val(data.Vehicle_Type);

                let vehicleType;
                if (data.Type_Asset === 'รถยนต์') {
                    vehicleType = 'car';
                } else if (data.Type_Asset === 'มอเตอร์ไซค์') {
                    vehicleType = 'motor';
                }

                loadRatetypeOptions(vehicleType, data.Vehicle_Type);
                loadRatetypeOptionsPLT(vehicleType, data.Vehicle_Type_PLT);



                // if (data.Vehicle_Type === 'C01') {
                //     $('#edit_Vehicle_Type').val('รถเก๋ง');
                // } else if (data.Vehicle_Type === 'C02') {
                //     $('#edit_Vehicle_Type').val('กระบะตอนเดียว');
                // } else if (data.Vehicle_Type === 'C03') {
                //     $('#edit_Vehicle_Type').val('กระบะแค็บ');
                // } else if (data.Vehicle_Type === 'C04') {
                //     $('#edit_Vehicle_Type').val('กระบะ 4 ประตู');
                // } else if (data.Vehicle_Type === 'C05') {
                //     $('#edit_Vehicle_Type').val('รถตู้');
                // } else if (data.Vehicle_Type === 'C06') {
                //     $('#edit_Vehicle_Type').val('รถใหญ่');
                // } else if (data.Vehicle_Type === 'M01') {
                //     $('#edit_Vehicle_Type').val('เกียร์ธรรมดา');
                // } else if (data.Vehicle_Type === 'M02') {
                //     $('#edit_Vehicle_Type').val('เกียร์ออโต้');
                // } else if (data.Vehicle_Type === 'M03') {
                //     $('#edit_Vehicle_Type').val('BigBike');
                // } else {
                //     $('#edit_Vehicle_Type').val(data.Vehicle_Type);
                // }



                // $('#edit_Vehicle_Type_PLT').val(data.Vehicle_Type_PLT);
                $('#edit_Insurance_renewal_date').val(data.Insurance_renewal_date);
                $('#edit_Insurance_end_date').val(data.Insurance_end_date);
                $('#edit_act_renewal_date').val(data.act_renewal_date);
                $('#edit_act_end_date').val(data.act_end_date);
                $('#edit_register_renewal_date').val(data.register_renewal_date);
                $('#edit_register_end_date').val(data.register_end_date);
                $('#edit_Vehicle_InsuranceStatus').val(data.insurance_status);
                $('#edit_Vehicle_Companies').val(data.insurance_company);
                $('#edit_Vehicle_PolicyNumber').val(data.policy_number);
                $('#edit_Vehicle_New_Number').val(data.Vehicle_New_Number);
                $('#edit_created_at').text(formatDate(data.created_at));
                $('#edit_updated_at').text(formatDate(data.updated_at));
                // $('#edit_created_at').text(data.created_at);
                // $('#edit_updated_at').text(data.updated_at);

                // แสดง modal
                $('#edit_modal_asset')
                    .css({
                        opacity: 0,
                        top: '60px'
                    })
                    .removeClass('hidden')
                    .animate({
                        opacity: 1,
                        top: '0px'
                    }, 100, 'swing');
            },
            error: function() {
                alert('Error loading asset data.');
            }
        });
    }


    function closeModal_Edit_asset() {
        $('#edit_modal_asset').animate({
            top: '100%', // เลื่อน modal ลงจากตำแหน่งเดิม
            opacity: 0 // ลดความโปร่งใส
        }, 300, function() { // ความเร็วของ effect 300ms
            $(this).addClass('hidden').css({
                top: '',
                opacity: ''
            }); // ซ่อน modal และรีเซ็ตค่า top และ opacity
        });
    }

    function cancelModal_Edit_asset() {
        $('#edit_modal_asset').animate({
            top: '100%',
            opacity: 0
        }, 300, function() {
            $(this).addClass('hidden').css({
                top: '',
                opacity: ''
            });
        });
    }


    function saveAssetChanges() {
        // ตรวจสอบว่ามีการส่งข้อมูล assetId ที่เป็นตัวเลข
        if (isNaN(currentAssetId)) {
            alert("Invalid Asset ID.");
            return;
        }

        // ดึงข้อมูลจากฟอร์ม
        const updatedData = {
            id: currentAssetId, // ใช้ currentAssetId ที่ได้จากการเปิด Modal
            // customer_id: $('#edit_Customer_id').val(),
            type: $('#edit_Type_Asset').val(),
            old_license_text: $('#edit_OldLicenseText').val(), // แก้ไขชื่อให้ตรงกับฟอร์ม
            old_license_number: $('#edit_OldLicenseNumber').val(), // แก้ไขชื่อให้ตรงกับฟอร์ม
            old_province: $('#edit_OldProvince').val(),
            new_license_text: $('#edit_NewLicenseText').val(), // แก้ไขชื่อให้ตรงกับฟอร์ม
            new_license_number: $('#edit_NewLicenseNumber').val(), // แก้ไขชื่อให้ตรงกับฟอร์ม
            new_province: $('#edit_NewProvince').val(),
            chassis_number: $('#edit_Vehicle_Chassis').val(),
            engine_number: $('#edit_Vehicle_Engine').val(),
            color: $('#edit_Vehicle_Color').val(),
            vehicle_brand: $('#Brand_car_and_moto').val(),
            vehicle_group: $('#Group_car_and_moto').val(),
            vehicle_models: $('#Model_car_and_moto').val(),
            vehicle_years: $('#Year_car_and_moto').val(),
            engine_capacity: $('#edit_Vehicle_CC').val(),
            vehicle_gear: $('#Vehicle_Gear').val(),
            vehicle_type: $('#Ratetype_id').val(),
            vehicle_type_plt: $('#Name_Vehicle').val(),
            insurance_renewal_date: $('#edit_Insurance_renewal_date').val(),
            insurance_end_date: $('#edit_Insurance_end_date').val(),
            act_renewal_date: $('#edit_act_renewal_date').val(),
            act_end_date: $('#edit_act_end_date').val(),
            register_renewal_date: $('#edit_register_renewal_date').val(),
            register_end_date: $('#edit_register_end_date').val(),
            insurance_status: $('#edit_Vehicle_InsuranceStatus').val(),
            insurance_company: $('#edit_Vehicle_Companies').val(),
            policy_number: $('#edit_Vehicle_PolicyNumber').val(),
            new_number: $('#edit_Vehicle_New_Number').val(),
        };

        $.ajax({
            url: '/api/updateAssetData', // ปรับ URL ให้ถูกต้องตาม API ของคุณ
            method: 'POST',
            data: updatedData,
            success: function(response) {
                if (response.success) {
                    // แสดงข้อความด้วย SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'อัปเดทข้อมูลสินทรัพย์สำเร็จ',
                        text: 'ข้อมูลสินทรัพย์ลูกค้าอัปเดทสำเร็จ',
                        confirmButtonText: 'OK',
                        timer: 1500,
                        timerProgressBar: true
                    }).then(() => {
                        loadAssets(customerId);
                        cancelModal_Edit_asset();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'อัปเดตข้อมูลไม่สำเร็จ',
                        text: response.message,
                        confirmButtonText: 'ลองอีกครั้ง'
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred : ' + error,
                    confirmButtonText: 'OK'
                });
            }
        });
    }
</script>













{{-- // $('#Ratetype_id').change(function() {
    //     const selectedType = $(this).val(); // ดึงค่า Ratetype_id ที่ถูกเลือก
    //     $.ajax({
    //         url: '/api/vehicle-names', // API endpoint ของคุณ
    //         method: 'GET',
    //         data: {
    //             ratetype_id: selectedType
    //         }, // ส่ง Ratetype_id
    //         dataType: 'json',
    //         success: function(data) {
    //             const selectElement = $('#Name_Vehicle');
    //             selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

    //             // เพิ่มตัวเลือก "ประเภทรถ 2"
    //             selectElement.append('<option value="">เลือกประเภทรถ 2</option>');

    //             // เพิ่มตัวเลือกใหม่จากข้อมูลที่ดึงมา
    //             data.forEach(function(option) {
    //                 const opt = $('<option></option>')
    //                     .val(option.Name_Vehicle) // กำหนดค่าให้กับ option
    //                     .text(option.Name_Vehicle); // แสดงชื่อที่ต้องการ
    //                 selectElement.append(opt);
    //             });
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error fetching Vehicle names:', error);
    //         }
    //     });
    // }); --}}
{{-- // function loadRatetypeOptions(vehicleType) {
    //     const selectElement = $('#Ratetype_id');
    //     selectElement.empty(); // ล้าง options ก่อนที่จะเพิ่มข้อมูลใหม่

    //     // เพิ่มตัวเลือกเริ่มต้น
    //     selectElement.append('<option value="">เลือกประเภทรถ</option>');

    //     // ซ่อน select ไว้ก่อนโหลดข้อมูล
    //     selectElement.hide();

    //     $.ajax({
    //         url: '/api/ratetype-options', // URL ที่ใช้เรียกฟังก์ชัน getRatetypeOptions()
    //         method: 'GET',
    //         dataType: 'json',
    //         success: function(data) {
    //             if (vehicleType === 'car' && data.carTypes && data.carTypes.length > 0) {
    //                 data.carTypes.forEach(option => {
    //                     selectElement.append(new Option(option.name, option.id)); // สร้างและเพิ่ม option ใหม่
    //                 });
    //             } else if (vehicleType === 'motor' && data.motoTypes && data.motoTypes.length > 0) {
    //                 data.motoTypes.forEach(option => {
    //                     selectElement.append(new Option(option.name, option.id)); // สร้างและเพิ่ม option ใหม่
    //                 });
    //             }

    //             // แสดง select หลังโหลดข้อมูลเสร็จสิ้น
    //             selectElement.show();
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error fetching Ratetype options:', error);
    //         }
    //     });
    // } --}}
