{{--
<div id="modal_edit_address_customer" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-3">
                <h5 class="text-orange-400 font-semibold text-lg">แก้ไขที่อยู่ลูกค้า</h5>
                <button class="text-gray-400 hover:text-gray-600" onclick="hideModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Edit Address Form -->
            <form id="editAddressForm" class="mt-4">
                <input type="hidden" id="addressId" name="addressId">
                <div class="space-y-4">
                    <div class="form-group">
                        <label for="houseNumber" class="block text-sm font-medium text-gray-700">หมายเลขบ้าน</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="houseNumber" name="houseNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="road" class="block text-sm font-medium text-gray-700">ถนน</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="road" name="road" required>
                    </div>
                    <div class="form-group">
                        <label for="village" class="block text-sm font-medium text-gray-700">หมู่บ้าน</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="village" name="village" required>
                    </div>
                    <div class="form-group">
                        <label for="province" class="block text-sm font-medium text-gray-700">จังหวัด</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="province" name="province" required>
                    </div>
                    <div class="form-group">
                        <label for="postalCode" class="block text-sm font-medium text-gray-700">รหัสไปรษณีย์</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="postalCode" name="postalCode" required>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" class="btn btn-secondary mr-2" onclick="hideModalEditAdress()">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    function openModal(button) {
        const addressId = $(button).data('id');
        const houseNumber = $(button).data('house_number');
        const road = $(button).data('road');
        const village = $(button).data('village');
        const province = $(button).data('province');
        const postalCode = $(button).data('postal_code');

        // ตั้งค่าข้อมูลในฟอร์ม
        $('#addressId').val(addressId);
        $('#houseNumber').val(houseNumber);
        $('#road').val(road);
        $('#village').val(village);
        $('#province').val(province);
        $('#postalCode').val(postalCode);

        // เปิด Modal
        $('#modal_edit_address_customer').removeClass('hidden'); // แสดง modal
    }

    function hideModalEditAdress() {
        $('#modal_edit_address_customer').addClass('hidden'); // ซ่อน modal
    }

    $('#editAddressForm').on('submit', function(event) {
        event.preventDefault(); // หยุดการส่งฟอร์มแบบปกติ

        $.ajax({
            url: '/update-address', // URL สำหรับการอัปเดตข้อมูล
            type: 'POST',
            data: $(this).serialize(), // ส่งข้อมูลฟอร์ม
            success: function(response) {
                // แสดงข้อความสำเร็จหรือทำการรีเฟรชข้อมูล
                alert('ข้อมูลที่อยู่ถูกอัปเดตเรียบร้อยแล้ว');
                fetchAddresses(); // รีเฟรชข้อมูลที่อยู่
                hideModalEditAdress(); // ปิด modal
            },
            error: function(xhr, status, error) {
                // แสดงข้อผิดพลาด
                alert('เกิดข้อผิดพลาด: ' + error);
            }
        });
    });
</script> --}}




<div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAddressModalLabel">แก้ไขที่อยู่</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="addressId">
                <div class="form-group">
                    <label for="street">ถนน</label>
                    <input type="text" class="form-control" id="street" required>
                </div>
                <div class="form-group">
                    <label for="city">เมือง</label>
                    <input type="text" class="form-control" id="city" required>
                </div>
                <div class="form-group">
                    <label for="state">รัฐ</label>
                    <input type="text" class="form-control" id="state" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" onclick="saveAddress()">บันทึก</button>
            </div>
        </div>
    </div>
</div>


