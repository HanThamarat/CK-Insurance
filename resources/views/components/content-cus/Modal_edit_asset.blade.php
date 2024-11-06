<div id="edit_modal_asset"
    class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50 modal ">
    <div class="relative bg-white rounded-lg w-full max-w-screen-lg  max-h-screen overflow-auto scrollbar-hidden mt-12 mb-12"
        style="height: 95%;">
        <!-- Modal content -->
        <div class="">
            <!-- Header ... relative bg-white rounded-xl shadow-xl w-full max-w-5xl mx-auto my-0 -->
            <div class="flex items-center justify-between p-6 border-b">

                <div class="flex items-center space-x-4 p-4">
                    <div class="p-3 bg-orange-100 rounded-xl">
                        <img src="{{ asset('img/minicar.gif') }}" alt="minicar icon"
                            class="w-12 h-12 object-cover rounded-lg">
                    </div>
                    <div class="flex-grow">
                        <h5
                            class="text-xl font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                            แก้ไขข้อมูลสินทรัพย์ลูกค้า</h5>
                        <p class="text-gray-500 text-sm mt-1">(Edit Customers Assets)</p>
                        <div class="h-1 w-32 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2"></div>
                    </div>
                </div>
                <button onclick="closeModal_Edit_asset()" class="text-gray-400 hover:text-gray-500 p-2">
                    <i class="fas fa-times text-xl"></i>
                </button>

            </div>

            <!-- Body -->
            <form action="editAssetForm">
                @csrf
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Vehicle Basic Info -->
                        <div class="bg-orange-50 rounded-xl p-6 shadow-sm">
                            <h4 class="text-lg font-semibold mb-5 text-orange-600">ข้อมูลพื้นฐาน</h4>
                            <div class="space-y-4">

                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ประเภทสินทรัพย์ :</strong>
                                    <input type="text" id="edit_Type_Asset" name="Type_Asset"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>

                                <input type="hidden" id="assetId" name="id" value="">

                                <fieldset class="border border-gray-300 rounded p-4 mb-4">
                                    <legend class="text-sm font-semibold text-gray-500 px-2">ป้ายทะเบียนเก่า</legend>

                                    <p class="flex flex-col sm:flex-row sm:justify-between mt-2">
                                        <strong class="min-w-[100px] inline-block">อักษรทะเบียนเดิม :</strong>
                                        <input type="text" id="edit_OldLicenseText" name="Vehicle_OldLicense_Text"
                                            class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                    <p class="flex flex-col sm:flex-row sm:justify-between mt-2">
                                        <strong class="min-w-[100px] inline-block">ตัวเลขทะเบียนเดิม :</strong>
                                        <input type="text" id="edit_OldLicenseNumber"
                                            name="Vehicle_OldLicense_Number" class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                    <p class="flex flex-col sm:flex-row sm:justify-between mt-2">
                                        <strong class="min-w-[100px] inline-block">จังหวัดทะเบียนเดิม :</strong>
                                        <input type="text" id="edit_OldProvince" name="OldProvince"
                                            class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                </fieldset>


                                <fieldset class="border border-gray-300 rounded p-4 mb-4">
                                    <legend class="text-sm font-semibold text-gray-500 px-2">ป้ายทะเบียนใหม่</legend>
                                    <p class="flex flex-col sm:flex-row sm:justify-between mt-2">
                                        <strong class="min-w-[100px] inline-block">อักษรทะเบียนใหม่ :</strong>
                                        <input type="text" id="edit_NewLicenseText" name="Vehicle_NewLicense_Text"
                                            class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                    <p class="flex flex-col sm:flex-row sm:justify-between mt-2">
                                        <strong class="min-w-[100px] inline-block">ตัวเลขทะเบียนใหม่ :</strong>
                                        <input type="text" id="edit_NewLicenseNumber"
                                            name="Vehicle_NewLicense_Number" class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                    <p class="flex flex-col sm:flex-row sm:justify-between mt-2">
                                        <strong class="min-w-[100px] inline-block">จังหวัดทะเบียนใหม่ :</strong>
                                        <input type="text" id="edit_NewProvince" name="NewProvince"
                                            class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                </fieldset>


                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">เลขถัง :</strong>
                                    <input type="text" id="edit_Vehicle_Chassis" name="Vehicle_Chassis"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">เลขเครื่อง :</strong>
                                    <input type="text" id="edit_Vehicle_Engine" name="Vehicle_Engine"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">สีรถ :</strong>
                                    <input type="text" id="edit_Vehicle_Color" name="Vehicle_Color"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">เลขตัวรถใหม่ :</strong>
                                    <input type="text" id="edit_Vehicle_New_Number" name="Vehicle_New_Number"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                            </div>
                        </div>

                        <!-- Vehicle Details -->
                        <div class="bg-blue-50 rounded-xl p-6 shadow-sm">
                            <h4 class="text-lg font-semibold mb-5 text-blue-600">รายละเอียดรถ</h4>
                            <div class="space-y-4">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ประเภทรถ 1 :</strong>
                                    <input type="text" id="edit_Vehicle_Type" name="Vehicle_Type"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ประเภทรถ 2 :</strong>
                                    <input type="text" id="edit_Vehicle_Type_PLT" name="Vehicle_Type_PLT"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ยี่ห้อรถ :</strong>
                                    <input type="text" id="edit_Vehicle_Brand" name="Vehicle_Brand"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">กลุ่มรถ :</strong>
                                    <input type="text" id="edit_Vehicle_Group" name="Vehicle_Brand"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">รุ่นรถ :</strong>
                                    <input type="text" id="edit_Vehicle_Models" name="Vehicle_Models"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ปีรถ :</strong>
                                    <input type="text" id="edit_Vehicle_Years" name="Vehicle_Years"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ความจุเครื่องยนต์ :</strong>
                                    <input type="text" id="edit_Vehicle_CC" name="Vehicle_CC"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ประเภทเกียร์ :</strong>
                                    <input type="text" id="edit_Vehicle_Gear" name="Vehicle_Gear"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>

                            </div>
                        </div>

                    </div>

                    <!-- Insurance Info -->
                    <div class="bg-green-50 rounded-xl p-6 shadow-sm mt-7">
                        <h4 class="text-lg font-semibold mb-5 text-green-600">ข้อมูลประกัน</h4>
                        <div class="space-y-4">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ประกัน :</strong>
                                <span id="edit_Choose_Insurance_Cal" class="sm:ml-2"></span>
                            </p>
                            <div class="space-y-4 ml-4">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">วันที่ต่อประกัน :</strong>
                                    <input type="date" id="edit_Insurance_renewal_date"
                                        name="Insurance_renewal_date" class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">วันที่หมดอายุ :</strong>
                                    <input type="date" id="edit_Insurance_end_date" name="Insurance_end_date"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                            </div>
                            <hr>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">พ.ร.บ. :</strong>
                                <span id="edit_Choose_Act_Cal" class="sm:ml-2"></span>
                            </p>
                            <div class="space-y-4 ml-4">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">วันที่ต่อ พ.ร.บ. :</strong>
                                    <input type="date" id="edit_act_renewal_date" name="act_renewal_date"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">วันที่หมดอายุ :</strong>
                                    <input type="date" id="edit_act_end_date" name="act_end_date"
                                        class="sm:ml-2 border rounded px-2 py-1">
                                </p>
                            </div>
                            <hr>
                            <div class="space-y-4 mt-5">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">ทะเบียน :</strong>
                                    <span id="edit_Choose_Register_Cal" class="sm:ml-2"></span>
                                </p>
                                <div class="space-y-4 ml-4">
                                    <p class="flex flex-col sm:flex-row sm:justify-between">
                                        <strong class="min-w-[100px] inline-block">วันที่ต่อทะเบียน :</strong>
                                        <input type="date" id="edit_register_renewal_date"
                                            name="register_renewal_date" class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                    <p class="flex flex-col sm:flex-row sm:justify-between">
                                        <strong class="min-w-[100px] inline-block">วันที่หมดอายุ :</strong>
                                        <input type="date" id="edit_register_end_date" name="register_end_date"
                                            class="sm:ml-2 border rounded px-2 py-1">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timestamps -->
                    <div class="mt-8 text-sm text-gray-500 space-y-2">
                        <p class="flex items-center">
                            <i class="fas fa-clock mr-3"></i>
                            <span>สร้างข้อมูลเมื่อ : <span id="edit_created_at" class="ml-2"></span></span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock mr-3"></i>
                            <span>อัปเดตล่าสุดเมื่อ : <span id="edit_updated_at" class="ml-2"></span></span>
                        </p>
                    </div>
                </div>

                <!-- Footer -->
                <div class="flex items-center justify-end space-x-4 p-6 border-t">
                    <button onclick="saveAssetChanges()"
                        class="px-6 py-2.5 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                        บันทึก
                    </button>
                    <button onclick="cancelModal_Edit_asset()"
                        class="px-6 py-2.5 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors">
                        ยกเลิก
                    </button>
                </div>
            </form>
        </div>
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
                $('#edit_created_at').text(data.created_at);
                $('#edit_updated_at').text(data.updated_at);

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
        $('#edit_modal_asset').addClass('hidden');
    }

    function cancelModal_Edit_asset() {
        $('#edit_modal_asset').addClass('hidden');
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
        $.ajax({
            url: '/api/updateAssetData', // ปรับ URL ให้ถูกต้องตาม API ของคุณ
            method: 'POST',
            data: updatedData,
            success: function(response) {
                if (response.success) {
                    alert('Asset updated successfully');
                    // closeModal_Edit_asset(); // ปิด Modal หลังจากบันทึกข้อมูลสำเร็จ
                } else {
                    alert('Failed to update asset: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    }
</script>




{{-- <script>
    let currentAssetId = null;

    function openModal_Edit_asset_customer(button) {
        // ดึงค่า asset ID จาก data-id ที่อยู่ในปุ่ม
        currentAssetId = $(button).data('id');

        $.ajax({
            url: '/api/getAssetData',
            method: 'GET',
            data: {
                id: currentAssetId
            },
            success: function(data) {
                // กรอกข้อมูลในฟิลด์ของ modal ด้วยข้อมูลที่ดึงได้จาก API
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
                $('#edit_created_at').text(data.created_at);
                $('#edit_updated_at').text(data.updated_at);

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
        $('#edit_modal_asset').addClass('hidden');
    }

    function saveAssetChanges() {
        // ตรวจสอบว่า currentAssetId มีค่า
        if (!currentAssetId || isNaN(currentAssetId)) {
            alert('Invalid asset ID');
            return;
        }

        // ดึงข้อมูลจากฟอร์ม
        const updatedData = {
            id: currentAssetId, // ใช้ currentAssetId ที่ได้จากการเปิด Modal
            type: $('#edit_Type_Asset').val(),
            old_license_text: $('#edit_OldLicenseText').val(),
            old_license_number: $('#edit_OldLicenseNumber').val(),
            old_province: $('#edit_OldProvince').val(),
            new_license_text: $('#edit_NewLicenseText').val(),
            new_license_number: $('#edit_NewLicenseNumber').val(),
            new_province: $('#edit_NewProvince').val(),
            chassis_number: $('#edit_Vehicle_Chassis').val(),
            engine_number: $('#edit_Vehicle_Engine').val(),
            color: $('#edit_Vehicle_Color').val(),
            brand: $('#edit_Vehicle_Brand').val(),
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
            // ถ้าจำเป็นต้องเพิ่ม csrf_token
            _token: $('meta[name="csrf-token"]').attr('content')
        };

        // ส่งข้อมูลผ่าน Ajax
        $.ajax({
            // url: '/api/updateAssetData', // ปรับ URL ให้ถูกต้องตาม API ของคุณ
            url: '/customer/profile/editAssetForm', // ตรวจสอบว่า URL นี้ถูกต้อง
            method: 'POST',
            data: updatedData,
            success: function(response) {
                if (response.success) {
                    alert('Asset updated successfully');
                    closeModal_Edit_asset(); // ปิด Modal หลังจากบันทึกข้อมูลสำเร็จ
                } else {
                    alert('Failed to update asset: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    }
</script> --}}






{{-- // const updatedData = {
//     id: currentAssetId,
//     type: $('#edit_Type_Asset').val(),
//     old_license: $('#edit_OldLicense').val(),
//     new_license: $('#edit_NewLicense').val(),
//     chassis_number: $('#edit_Vehicle_Chassis').val(),
//     engine_number: $('#edit_Vehicle_Engine').val(),
//     color: $('#edit_Vehicle_Color').val(),
//     brand: $('#edit_Vehicle_Brand').val(),
//     model: $('#edit_Vehicle_Models').val(),
//     year: $('#edit_Vehicle_Years').val(),
//     engine_capacity: $('#edit_Vehicle_CC').val(),
//     gear_type: $('#edit_Vehicle_Gear').val(),
//     vehicle_type: $('#edit_Vehicle_Type').val(),
//     insurance_renewal_date: $('#edit_Insurance_renewal_date').val(),
//     insurance_end_date: $('#edit_Insurance_end_date').val(),
//     act_renewal_date: $('#edit_act_renewal_date').val(),
//     act_end_date: $('#edit_act_end_date').val(),
//     register_renewal_date: $('#edit_register_renewal_date').val(),
//     register_end_date: $('#edit_register_end_date').val(),
//     insurance_status: $('#edit_Vehicle_InsuranceStatus').val(),
//     insurance_company: $('#edit_Vehicle_Companies').val(),
//     policy_number: $('#edit_Vehicle_PolicyNumber').val(),
//     new_number: $('#edit_Vehicle_New_Number').val()
// }; --}}




{{-- // ฟังก์ชันบันทึกข้อมูลการเปลี่ยนแปลง
// function saveAssetChanges() {


//     const updatedData = {
//         id: currentAssetId,
//         Type_Asset: $('#edit_Type_Asset').val(),
//         Vehicle_OldLicense_Text: $('#edit_OldLicenseText').val(),
//         Vehicle_OldLicense_Number: $('#edit_OldLicenseNumber').val(),
//         OldProvince: $('#edit_OldProvince').val(),
//         Vehicle_NewLicense_Text: $('#edit_NewLicenseText').val(),
//         Vehicle_NewLicense_Number: $('#edit_NewLicenseNumber').val(),
//         NewProvince: $('#edit_NewProvince').val(),
//         Vehicle_Chassis: $('#edit_Vehicle_Chassis').val(),
//         Vehicle_Engine: $('#edit_Vehicle_Engine').val(),
//         Vehicle_Color: $('#edit_Vehicle_Color').val(),
//         Vehicle_Brand: $('#edit_Vehicle_Brand').val(),
//         Vehicle_Models: $('#edit_Vehicle_Models').val(),
//         Vehicle_Years: $('#edit_Vehicle_Years').val(),
//         Vehicle_CC: $('#edit_Vehicle_CC').val(),
//         Vehicle_Gear: $('#edit_Vehicle_Gear').val(),
//         Vehicle_Type: $('#edit_Vehicle_Type').val(),
//         Insurance_renewal_date: $('#edit_Insurance_renewal_date').val(),
//         Insurance_end_date: $('#edit_Insurance_end_date').val(),
//         act_renewal_date: $('#edit_act_renewal_date').val(),
//         act_end_date: $('#edit_act_end_date').val(),
//         register_renewal_date: $('#edit_register_renewal_date').val(),
//         register_end_date: $('#edit_register_end_date').val(),
//         insurance_status: $('#edit_Vehicle_InsuranceStatus').val(),
//         insurance_company: $('#edit_Vehicle_Companies').val(),
//         policy_number: $('#edit_Vehicle_PolicyNumber').val(),
//         Vehicle_New_Number: $('#edit_Vehicle_New_Number').val()
//     };


//     $.ajax({
//         url: '/api/updateAssetData',
//         method: 'POST',
//         data: updatedData,
//         success: function() {
//             alert('Asset data updated successfully.');
//             closeModal_Edit_asset();
//         },
//         error: function() {
//             alert('Error saving changes.');
//         }
//     });
// }

// $('#updateAssetForm').on('submit', function(e) {
//     e.preventDefault(); // หยุดการทำงานแบบปกติของฟอร์ม

//     const updatedData = {
//         id: $('#assetId').val(), // ใช้ id จากฟอร์ม
//         Type_Asset: $('#edit_Type_Asset').val(),
//         Vehicle_OldLicense_Text: $('#edit_OldLicenseText').val(),
//         Vehicle_OldLicense_Number: $('#edit_OldLicenseNumber').val(),
//         OldProvince: $('#edit_OldProvince').val(),
//         Vehicle_NewLicense_Text: $('#edit_NewLicenseText').val(),
//         Vehicle_NewLicense_Number: $('#edit_NewLicenseNumber').val(),
//         NewProvince: $('#edit_NewProvince').val(),
//         Vehicle_Chassis: $('#edit_Vehicle_Chassis').val(),
//         Vehicle_Engine: $('#edit_Vehicle_Engine').val(),
//         Vehicle_Color: $('#edit_Vehicle_Color').val(),
//         Vehicle_Brand: $('#edit_Vehicle_Brand').val(),
//         Vehicle_Models: $('#edit_Vehicle_Models').val(),
//         Vehicle_Years: $('#edit_Vehicle_Years').val(),
//         Vehicle_CC: $('#edit_Vehicle_CC').val(),
//         Vehicle_Gear: $('#edit_Vehicle_Gear').val(),
//         Vehicle_Type: $('#edit_Vehicle_Type').val(),
//         Insurance_renewal_date: $('#edit_Insurance_renewal_date').val(),
//         Insurance_end_date: $('#edit_Insurance_end_date').val(),
//         act_renewal_date: $('#edit_act_renewal_date').val(),
//         act_end_date: $('#edit_act_end_date').val(),
//         register_renewal_date: $('#edit_register_renewal_date').val(),
//         register_end_date: $('#edit_register_end_date').val(),
//         insurance_status: $('#edit_Vehicle_InsuranceStatus').val(),
//         insurance_company: $('#edit_Vehicle_Companies').val(),
//         policy_number: $('#edit_Vehicle_PolicyNumber').val(),
//         Vehicle_New_Number: $('#edit_Vehicle_New_Number').val()
//     };

//     // ส่งข้อมูลผ่าน AJAX
//     $.ajax({
//         url: '/api/updateAssetData', // URL ของ API ที่จะอัปเดทข้อมูล
//         method: 'POST',
//         data: updatedData,
//         success: function(response) {
//             alert('Asset updated successfully!');
//             // คุณสามารถทำการรีเฟรชหน้าหรือปิด modal ที่แสดงได้ที่นี่
//         },
//         error: function() {
//             alert('Error updating asset.');
//         }
//     });
// }); --}}
