<div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-600 p-4 mt-[-10]">
    <!-- Left Section: Customer Information -->


    <div id="customer-info-right" class="flex flex-col space-y-4"></div>

    {{-- <script>
        // แปลงข้อมูลลูกค้าเป็น JavaScript
        var customerData = @json($customer);

        // ฟังก์ชันในการแสดงข้อมูลลูกค้า
        function displayCustomerInfo(data) {
            // ตรวจสอบว่ามีข้อมูลหรือไม่
            if (data) {
                // สร้าง HTML สำหรับข้อมูลลูกค้า
                const infoHTML = `
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800">วันเดือนปีเกิด :</strong>
                        <span class="text-right pl-4">${data.birthday ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800">เพศ :</strong>
                        <span class="text-right pl-4">${data.gender ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800">สัญชาติ :</strong>
                        <span class="text-right pl-4">${data.nationality ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800">ศาสนา :</strong>
                        <span class="text-right pl-4">${data.religion ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800">สถานะสมรส :</strong>
                        <span class="text-right pl-4">${data.marital_status ?? '-'}</span>
                    </div>
                `;

                // แสดงข้อมูลใน div ที่กำหนด
                document.getElementById('customer-info-right').innerHTML = infoHTML;
            } else {
                // หากไม่มีข้อมูลให้แสดงข้อความ
                document.getElementById('customer-info-right').innerHTML = "<p>ไม่พบข้อมูลลูกค้า</p>";
            }
        }

        // เรียกใช้ฟังก์ชันเพื่อแสดงข้อมูล
        displayCustomerInfo(customerData);
    </script> --}}

    <script>
        // แปลงข้อมูลลูกค้าเป็น JavaScript
        var customerData = @json($customer);

        // ฟังก์ชันในการแสดงข้อมูลลูกค้า
        function displayCustomerInfo(data) {
            // ตรวจสอบว่ามีข้อมูลหรือไม่
            if (data) {
                // สร้าง HTML สำหรับข้อมูลลูกค้า
                const infoHTML = `
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-calendar-alt pr-2"></i>วันเดือนปีเกิด :</strong>
                        <span class="text-right pl-0">${data.birthday ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-venus-mars pr-2"></i>เพศ :</strong>
                        <span class="text-right pl-0">${data.gender ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-flag pr-2"></i>สัญชาติ :</strong>
                        <span class="text-right pl-0">${data.nationality ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-cross pr-2"></i>ศาสนา :</strong>
                        <span class="text-right pl-0">${data.religion ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-heart pr-2"></i>สถานะสมรส :</strong>
                        <span class="text-right pl-0">${data.marital_status ?? '-'}</span>
                    </div>

                    <!-- แถวสำหรับหมายเหตุ -->
                    <div class="flex flex-col mt-4">
                        <strong class="text-gray-800">หมายเหตุ :</strong>
                        <textarea
                            class="mt-1 w-full border border-orange-500 text-gray-800 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500 focus:border-orange-600"
                            rows="5">${data.note ?? 'ยังไม่มีหมายเหตุ'}</textarea>
                    </div>
                `;

                // แสดงข้อมูลใน div ที่กำหนด
                document.getElementById('customer-info-right').innerHTML = infoHTML;
            } else {
                // หากไม่มีข้อมูลให้แสดงข้อความ
                document.getElementById('customer-info-right').innerHTML = "<p>ไม่พบข้อมูลลูกค้า</p>";
            }
        }

        // เรียกใช้ฟังก์ชันเพื่อแสดงข้อมูล
        displayCustomerInfo(customerData);
    </script>



    <style>
        #customer-info-right {
            background-color: #ffffff; /* พื้นหลังเป็นสีขาว */
            border: 1px solid #ff833f; /* ขอบเป็นสีส้ม */
            border-radius: 20px; /* ทำให้เป็นวงรี */
            padding: 16px; /* เพิ่ม padding */
        }
    </style>


    <!-- Right Section: Notes -->
    {{-- <div class="flex flex-col mt-[-1]">
        <strong class="text-gray-8005">หมายเหตุ :</strong>
        <textarea
            class="mt-1 w-full border border-orange-500  text-gray-800 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500 focus:border-orange-600"
            rows="5">{{ $customer->note ?? 'ยังไม่มีหมายเหตุ' }}</textarea>
    </div> --}}

</div>
