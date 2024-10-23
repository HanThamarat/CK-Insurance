<div id="modal_edit_address_customer" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-3">
                <h5 class="text-orange-400 font-semibold text-lg">แก้ไขที่อยู่ลูกค้า</h5>
                <button class="text-gray-400 hover:text-gray-600" onclick="hideModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Modal Edit Address Form -->
            <form id="editAddressForm" class="mt-4">
                <input type="hidden" id="addressId" name="addressId">
                <div class="space-y-4">
                    <div class="form-group">
                        <label for="houseNumber" class="block text-sm font-medium text-gray-700">หมายเลขบ้าน</label>
                        <input type="text"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            id="houseNumber" name="houseNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="road" class="block text-sm font-medium text-gray-700">ถนน</label>
                        <input type="text"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            id="road" name="road" required>
                    </div>
                    <div class="form-group">
                        <label for="village" class="block text-sm font-medium text-gray-700">หมู่บ้าน</label>
                        <input type="text"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            id="village" name="village" required>
                    </div>
                    <div class="form-group">
                        <label for="province" class="block text-sm font-medium text-gray-700">จังหวัด</label>
                        <input type="text"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            id="province" name="province" required>
                    </div>
                    <div class="form-group">
                        <label for="postalCode" class="block text-sm font-medium text-gray-700">รหัสไปรษณีย์</label>
                        <input type="text"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            id="postalCode" name="postalCode" required>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" class="btn btn-secondary mr-2" onclick="hideModalEditAddress()">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                </div>
            </form>


        </div>
    </div>
</div>



<script>
    function openModal(button) {
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
                $('#modal_edit_address_customer').fadeIn(400); // 400 = 0.4 วินาที (คุณสามารถปรับความเร็วได้)
            },
            error: function(xhr, status, error) {
                // จัดการข้อผิดพลาด
                alert('เกิดข้อผิดพลาด: ' + error);
            }
        });
    }

    function hideModalEditAddress() {
        // ซ่อน modal ด้วยเอฟเฟกต์ fade out
        $('#modal_edit_address_customer').fadeOut(400, function() {
            // เมื่อ fade out เสร็จสิ้นสามารถทำสิ่งที่ต้องการได้ เช่น รีเซ็ตฟอร์ม
            // $('#modal_edit_address_customer').find("input, textarea").val(""); // ถ้าต้องการรีเซ็ตฟอร์ม
        });
    }
</script>




