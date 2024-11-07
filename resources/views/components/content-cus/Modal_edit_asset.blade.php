<div id="edit_modal_asset" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black/50 modal">
    <div class="relative bg-white rounded-xl w-full max-w-screen-lg max-h-[95vh] overflow-auto scrollbar-hidden my-12 shadow-2xl">
        <!-- Modal Header -->
        <div class="sticky top-0 bg-white border-b z-10">
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
        </div>

        <!-- Modal Body -->
        <form action="editAssetForm" onsubmit="return false;" class="divide-y">
            @csrf
            <div class="p-8 space-y-8">
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
                                            name="Vehicle_OldLicense_Number" class="w-full border-gray-300 rounded-lg px-3 py-2">
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
                                            name="Vehicle_NewLicense_Number" class="w-full border-gray-300 rounded-lg px-3 py-2">
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
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทรถ 1</label>
                                <input type="text" id="edit_Vehicle_Type" name="Vehicle_Type"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทรถ 2</label>
                                <input type="text" id="edit_Vehicle_Type_PLT" name="Vehicle_Type_PLT"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ยี่ห้อรถ</label>
                                <input type="text" id="edit_Vehicle_Brand" name="Vehicle_Brand"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">กลุ่มรถ</label>
                                <input type="text" id="edit_Vehicle_Group" name="Vehicle_Group"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">รุ่นรถ</label>
                                <input type="text" id="edit_Vehicle_Models" name="Vehicle_Models"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ปีรถ</label>
                                <input type="text" id="edit_Vehicle_Years" name="Vehicle_Years"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ความจุเครื่องยนต์</label>
                                <input type="text" id="edit_Vehicle_CC" name="Vehicle_CC"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 block mb-1">ประเภทเกียร์</label>
                                <input type="text" id="edit_Vehicle_Gear" name="Vehicle_Gear"
                                    class="w-full border-gray-300 rounded-lg px-3 py-2">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Insurance Information -->
                <div class="bg-green-50 rounded-xl p-6 shadow-sm border border-green-100 mt-8">
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
                                            name="Insurance_renewal_date" class="w-full border-gray-300 rounded-lg px-3 py-2">
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
                                            name="register_renewal_date" class="w-full border-gray-300 rounded-lg px-3 py-2">
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
            <div class="sticky bottom-0 bg-white border-t px-6 py-4 flex items-center justify-end gap-4">

                <button type="button" onclick="saveAssetChanges()"
                    class="px-6 py-2.5 rounded-lg bg-green-500 text-white hover:bg-green-600 focus:ring-2 focus:ring-green-300 transition-all duration-200">
                    <i class="fas fa-save mr-2"></i>
                    บันทึก
                </button>

                <button type="button" onclick="cancelModal_Edit_asset()"
                    class="px-6 py-2.5 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 focus:ring-2 focus:ring-gray-200 transition-all duration-200">
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
                $('#edit_Vehicle_Brand').val(data.Vehicle_Brand);
                $('#edit_Vehicle_Group').val(data.Vehicle_Group);
                $('#edit_Vehicle_Models').val(data.Vehicle_Models);
                $('#edit_Vehicle_Years').val(data.Vehicle_Years);
                $('#edit_Vehicle_CC').val(data.Vehicle_CC);
                $('#edit_Vehicle_Gear').val(data.Vehicle_Gear);
                $('#edit_Vehicle_Type').val(data.Vehicle_Type);
                $('#edit_Vehicle_Type_PLT').val(data.Vehicle_Type_PLT);
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
            opacity: 0   // ลดความโปร่งใส
        }, 300, function() { // ความเร็วของ effect 300ms
            $(this).addClass('hidden').css({ top: '', opacity: '' }); // ซ่อน modal และรีเซ็ตค่า top และ opacity
        });
    }

    function cancelModal_Edit_asset() {
        $('#edit_modal_asset').animate({
            top: '100%',
            opacity: 0
        }, 300, function() {
            $(this).addClass('hidden').css({ top: '', opacity: '' });
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
            brand: $('#edit_Vehicle_Brand').val(),
            group: $('#edit_Vehicle_Group').val(),
            model: $('#edit_Vehicle_Models').val(),
            year: $('#edit_Vehicle_Years').val(),
            engine_capacity: $('#edit_Vehicle_CC').val(),
            gear_type: $('#edit_Vehicle_Gear').val(),
            vehicle_type: $('#edit_Vehicle_Type').val(),
            vehicle_type_plt: $('#edit_Vehicle_Type_PLT').val(),
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

        // ส่งข้อมูลผ่าน Ajax
        // $.ajax({
        //     url: '/api/updateAssetData', // ปรับ URL ให้ถูกต้องตาม API ของคุณ
        //     method: 'POST',
        //     data: updatedData,
        //     success: function(response) {
        //         if (response.success) {
        //             alert('Asset updated successfully');
        //             // closeModal_Edit_asset(); // ปิด Modal หลังจากบันทึกข้อมูลสำเร็จ
        //         } else {
        //             alert('Failed to update asset: ' + response.message);
        //         }
        //     },
        //     error: function(xhr, status, error) {
        //         alert('Error: ' + error);
        //     }
        // });

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
                        timer: 1500, // ตั้งเวลาให้ปิดตัวเองหลัง 1500ms
                        timerProgressBar: true // แสดงแถบความคืบหน้าของตัวจับเวลา
                    }).then(() => {
                        cancelModal_Edit_asset(); // ปิด Modal หลังจากแสดงข้อความสำเร็จ
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
