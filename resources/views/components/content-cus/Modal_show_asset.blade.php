<div id="show_modal_asset" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-black/50 transition-opacity"></div>

        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-xl w-full max-w-4xl mx-auto">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold text-gray-900">
                    <i class="fas fa-car text-orange-500 mr-2"></i>
                    รายละเอียดข้อมูลรถ
                </h3>
                <button onclick="closeModal_Show_asset()" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Body -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Vehicle Basic Info -->
                    <div class="bg-orange-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-orange-600">ข้อมูลพื้นฐาน</h4>
                        <div class="space-y-3">
                            <p><strong>ประเภทสินทรัพย์:</strong> <span id="show_Type_Asset"></span></p>
                            <p><strong>ทะเบียนเดิม:</strong> <span id="show_OldLicense"></span></p>
                            <p><strong>ทะเบียนใหม่:</strong> <span id="show_NewLicense"></span></p>
                            <p><strong>เลขถัง:</strong> <span id="show_Vehicle_Chassis"></span></p>
                            <p><strong>เลขเครื่อง:</strong> <span id="show_Vehicle_Engine"></span></p>
                            <p><strong>สีรถ:</strong> <span id="show_Vehicle_Color"></span></p>
                        </div>
                    </div>

                    <!-- Vehicle Details -->
                    <div class="bg-blue-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-blue-600">รายละเอียดรถ</h4>
                        <div class="space-y-3">
                            <p><strong>ยี่ห้อ:</strong> <span id="show_Vehicle_Brand"></span></p>
                            <p><strong>รุ่น:</strong> <span id="show_Vehicle_Models"></span></p>
                            <p><strong>ปี:</strong> <span id="show_Vehicle_Years"></span></p>
                            <p><strong>ความจุเครื่องยนต์:</strong> <span id="show_Vehicle_CC"></span> CC</p>
                            <p><strong>ประเภทเกียร์:</strong> <span id="show_Vehicle_Gear"></span></p>
                            <p><strong>ประเภทรถ:</strong> <span id="show_Vehicle_Type"></span></p>
                        </div>
                    </div>

                    <!-- Insurance Info -->
                    <div class="bg-green-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-green-600">ข้อมูลประกัน</h4>
                        <div class="space-y-3">
                            <p><strong>สถานะประกัน:</strong> <span id="show_Vehicle_InsuranceStatus"></span></p>
                            <p><strong>บริษัทประกัน:</strong> <span id="show_Vehicle_Companies"></span></p>
                            <p><strong>เลขกรมธรรม์:</strong> <span id="show_Vehicle_PolicyNumber"></span></p>
                            <div class="mt-4">
                                <p><strong>วันที่ต่อประกัน:</strong> <span id="show_Insurance_renewal_date"></span></p>
                                <p><strong>วันที่หมดอายุ:</strong> <span id="show_Insurance_end_date"></span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="bg-purple-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-purple-600">ข้อมูลเพิ่มเติม</h4>
                        <div class="space-y-3">
                            <p><strong>พ.ร.บ.:</strong> <span id="show_Choose_Act"></span></p>
                            <div class="ml-4">
                                <p><strong>วันที่ต่อ พ.ร.บ.:</strong> <span id="show_act_renewal_date"></span></p>
                                <p><strong>วันที่หมดอายุ:</strong> <span id="show_act_end_date"></span></p>
                            </div>
                            <p class="mt-4"><strong>ทะเบียน:</strong> <span id="show_Choose_Register"></span></p>
                            <div class="ml-4">
                                <p><strong>วันที่ต่อทะเบียน:</strong> <span id="show_register_renewal_date"></span></p>
                                <p><strong>วันที่หมดอายุ:</strong> <span id="show_register_end_date"></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timestamps -->
                <div class="mt-6 text-sm text-gray-500">
                    <p><i class="fas fa-clock mr-2"></i>สร้างเมื่อ: <span id="show_created_at"></span></p>
                    <p><i class="fas fa-clock mr-2"></i>อัปเดตล่าสุด: <span id="show_updated_at"></span></p>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex items-center justify-end p-4 border-t">
                <button onclick="closeModal_Show_asset()"
                    class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
                    ปิด
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function openModal_Show_asset_customer(button) {
        const assetId = button.getAttribute('data-id');

        // Fetch asset data using the ID with AJAX
        $.ajax({
            url: `/data_assets/${assetId}`,
            method: 'GET',
            dataType: 'json',
            success: function(asset) {
                // Update modal content with asset data
                $('#show_Type_Asset').text(asset.Type_Asset || '-');
                $('#show_OldLicense').text(
                    `${asset.Vehicle_OldLicense_Text || ''} ${asset.Vehicle_OldLicense_Number || ''} ${asset.OldProvince || ''}`
                );
                $('#show_NewLicense').text(
                    `${asset.Vehicle_NewLicense_Text || ''} ${asset.Vehicle_NewLicense_Number || ''} ${asset.NewProvince || ''}`
                );
                $('#show_Vehicle_Chassis').text(asset.Vehicle_Chassis || '-');
                $('#show_Vehicle_Engine').text(asset.Vehicle_Engine || '-');
                $('#show_Vehicle_Color').text(asset.Vehicle_Color || '-');
                $('#show_Vehicle_Brand').text(asset.Vehicle_Brand || '-');
                $('#show_Vehicle_Models').text(asset.Vehicle_Models || '-');
                $('#show_Vehicle_Years').text(asset.Vehicle_Years || '-');
                $('#show_Vehicle_CC').text(asset.Vehicle_CC || '-');
                $('#show_Vehicle_Gear').text(asset.Vehicle_Gear || '-');
                $('#show_Vehicle_Type').text(asset.Vehicle_Type || '-');
                $('#show_Vehicle_InsuranceStatus').text(asset.Vehicle_InsuranceStatus || '-');
                $('#show_Vehicle_Companies').text(asset.Vehicle_Companies || '-');
                $('#show_Vehicle_PolicyNumber').text(asset.Vehicle_PolicyNumber || '-');
                $('#show_Choose_Act').text(asset.Choose_Act || '-');
                $('#show_Choose_Register').text(asset.Choose_Register || '-');

                // Format dates
                const formatDate = (dateString) => {
                    if (!dateString) return '-';
                    return new Date(dateString).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                };

                $('#show_Insurance_renewal_date').text(formatDate(asset.Insurance_renewal_date));
                $('#show_Insurance_end_date').text(formatDate(asset.Insurance_end_date));
                $('#show_act_renewal_date').text(formatDate(asset.act_renewal_date));
                $('#show_act_end_date').text(formatDate(asset.act_end_date));
                $('#show_register_renewal_date').text(formatDate(asset.register_renewal_date));
                $('#show_register_end_date').text(formatDate(asset.register_end_date));
                $('#show_created_at').text(formatDate(asset.created_at));
                $('#show_updated_at').text(formatDate(asset.updated_at));

                // Show the modal
                $('#show_modal_asset').removeClass('hidden');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching asset data:', error);
            }
        });
    }

    function closeModal_Show_asset() {
        $('#show_modal_asset').addClass('hidden');
    }
</script>




{{-- <script>
    function openModal_Show_asset_customer(button) {
        const assetId = button.getAttribute('data-id');

        // Fetch asset data using the ID with AJAX
        $.ajax({
            url: `/data_assets/${assetId}`,
            method: 'GET',
            dataType: 'json',
            success: function(asset) {
                // Update modal content with asset data
                $('#show_Type_Asset').text(asset.Type_Asset || '-');
                $('#show_OldLicense').text(
                    `${asset.Vehicle_OldLicense_Text || ''} ${asset.Vehicle_OldLicense_Number || ''} ${asset.OldProvince || ''}`
                );
                $('#show_NewLicense').text(
                    `${asset.Vehicle_NewLicense_Text || ''} ${asset.Vehicle_NewLicense_Number || ''} ${asset.NewProvince || ''}`
                );
                $('#show_Vehicle_Chassis').text(asset.Vehicle_Chassis || '-');
                $('#show_Vehicle_Engine').text(asset.Vehicle_Engine || '-');
                $('#show_Vehicle_Color').text(asset.Vehicle_Color || '-');
                $('#show_Vehicle_Brand').text(asset.Vehicle_Brand || '-');
                $('#show_Vehicle_Models').text(asset.Vehicle_Models || '-');
                $('#show_Vehicle_Years').text(asset.Vehicle_Years || '-');
                $('#show_Vehicle_CC').text(asset.Vehicle_CC || '-');
                $('#show_Vehicle_Gear').text(asset.Vehicle_Gear || '-');
                $('#show_Vehicle_Type').text(asset.Vehicle_Type || '-');
                $('#show_Vehicle_InsuranceStatus').text(asset.Vehicle_InsuranceStatus || '-');
                $('#show_Vehicle_Companies').text(asset.Vehicle_Companies || '-');
                $('#show_Vehicle_PolicyNumber').text(asset.Vehicle_PolicyNumber || '-');
                $('#show_Choose_Act').text(asset.Choose_Act || '-');
                $('#show_Choose_Register').text(asset.Choose_Register || '-');

                // Format dates
                const formatDate = (dateString) => {
                    if (!dateString) return '-';
                    return new Date(dateString).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                };

                $('#show_Insurance_renewal_date').text(formatDate(asset.Insurance_renewal_date));
                $('#show_Insurance_end_date').text(formatDate(asset.Insurance_end_date));
                $('#show_act_renewal_date').text(formatDate(asset.act_renewal_date));
                $('#show_act_end_date').text(formatDate(asset.act_end_date));
                $('#show_register_renewal_date').text(formatDate(asset.register_renewal_date));
                $('#show_register_end_date').text(formatDate(asset.register_end_date));
                $('#show_created_at').text(formatDate(asset.created_at));
                $('#show_updated_at').text(formatDate(asset.updated_at));

                // Show modal
                $('#show_show_asset').removeClass('hidden');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching asset data:', error);
                alert('เกิดข้อผิดพลาดในการดึงข้อมูล');
            }
        });
    }

    function closeshow_Show_asset() {
        $('#show_show_asset').addClass('hidden');
    }
</script> --}}

{{-- <style>
    .hidden {
        display: none;
    }

    #show_show_asset {
        /* Styles for modal (position, size, background, etc.) */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
        /* Ensure it appears above other content */
    }
</style> --}}
