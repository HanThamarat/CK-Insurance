{{-- <div id="customer-info"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // แปลงข้อมูลลูกค้าเป็น JavaScript (ใช้ JSON.encode ใน Blade)
        var customerData = {!! json_encode($customer) !!};

        // ฟังก์ชันในการแสดงข้อมูลลูกค้า
        function Info_Customer(data) {
            if (data) {
                // สร้าง HTML สำหรับแสดงข้อมูลลูกค้า
                var html = `
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.prefix} ${data.first_name} ${data.last_name}
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.id_card_number}
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.phone}
                        </div>
                    </div>

                    <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${new Date(data.created_at).toLocaleDateString('th-TH', { year: 'numeric', month: 'long', day: 'numeric' })} เวลา ${new Date(data.created_at).toLocaleTimeString('th-TH', { hour: '2-digit', minute: '2-digit' })} น.
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.user_insert}
                        </div>
                    </div>
                `;

                // แสดงข้อมูลใน div ที่กำหนด
                $('#customer-info').html(html);
            } else {
                $('#customer-info').html('<div class="text-red-500 text-lg font-bold">ไม่มีข้อมูลลูกค้า</div>');
            }
        }

        // เรียกฟังก์ชันแสดงข้อมูล
        Info_Customer(customerData);
    });
</script> --}}



{{-- <div id="customer-info"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // แปลงข้อมูลลูกค้าเป็น JavaScript (ใช้ JSON.encode ใน Blade)
        var customerData = {!! json_encode($customer) !!};

        // ฟังก์ชันในการแสดงข้อมูลลูกค้า
        function Info_Customer(data) {
            if (data) {
                // สร้าง HTML สำหรับแสดงข้อมูลลูกค้า
                var html = `
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.prefix} ${data.first_name} ${data.last_name}
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.id_card_number}
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.phone}
                        </div>
                    </div>

                    <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${new Date(data.created_at).toLocaleDateString('th-TH', { year: 'numeric', month: 'long', day: 'numeric' })} เวลา ${new Date(data.created_at).toLocaleTimeString('th-TH', { hour: '2-digit', minute: '2-digit' })} น.
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.user_insert}
                        </div>
                    </div>
                `;

                // แสดงข้อมูลใน div ที่กำหนด
                $('#customer-info').html(html);
            } else {
                $('#customer-info').html('<div class="text-red-500 text-lg font-bold">ไม่มีข้อมูลลูกค้า</div>');
            }
        }

        // เรียกฟังก์ชันแสดงข้อมูล
        Info_Customer(customerData);

        // การจัดการคลิกปุ่มอัปเดตลูกค้า

    });
</script> --}}








{{-- @if ($customer)
    <script>
        var customerData = {!! json_encode($customer) !!};
    </script>
@else
    <script>
        var customerData = null;
    </script>
@endif

<div id="customer-info"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // ฟังก์ชันเก็บข้อมูลลูกค้า
        function saveCustomerData(data) {
            // เก็บข้อมูลใน localStorage หรือ sessionStorage
            // localStorage.setItem('customerData', JSON.stringify(data)); // ถ้าต้องการเก็บถาวร
            sessionStorage.setItem('customerData', JSON.stringify(data)); // ถ้าต้องการเก็บชั่วคราว
        }

        if (customerData) {
            // เก็บข้อมูลลูกค้าลงใน sessionStorage
            saveCustomerData(customerData);

            // สร้าง HTML สำหรับแสดงข้อมูลลูกค้า
            var html = `
                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.prefix} ${customerData.first_name} ${customerData.last_name}
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.id_card_number}
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.phone}
                    </div>
                </div>

                <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${new Date(customerData.created_at).toLocaleDateString('th-TH', { year: 'numeric', month: 'long', day: 'numeric' })} เวลา ${new Date(customerData.created_at).toLocaleTimeString('th-TH', { hour: '2-digit', minute: '2-digit' })} น.
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.user_insert}
                    </div>
                </div>
            `;

            // แสดงข้อมูลใน div ที่กำหนด
            $('#customer-info').html(html);
        } else {
            $('#customer-info').html('<div class="text-red-500 text-lg font-bold">ไม่มีข้อมูลลูกค้า</div>');
        }
    });
</script> --}}




















{{-- @if ($customer)
    <script>
        var customerData = @json($customer);
    </script>
@else
    <script>
        var customerData = null;
    </script>
@endif


<div id="customer-info"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        if (customerData) {
            // สร้าง HTML สำหรับแสดงข้อมูลลูกค้า
            var html = `
                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.prefix} ${customerData.first_name} ${customerData.last_name}
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.id_card_number}
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.phone}
                    </div>
                </div>

                <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${new Date(customerData.created_at).toLocaleDateString('th-TH', { year: 'numeric', month: 'long', day: 'numeric' })} เวลา ${new Date(customerData.created_at).toLocaleTimeString('th-TH', { hour: '2-digit', minute: '2-digit' })} น.
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                        <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
                    </div>
                    <div class="ml-8 text-gray-400 text-sm">
                        ${customerData.user_insert}
                    </div>
                </div>
            `;

            // แสดงข้อมูลใน div ที่กำหนด
            $('#customer-info').html(html);
        } else {
            $('#customer-info').html('<div class="text-red-500 text-lg font-bold">ไม่มีข้อมูลลูกค้า</div>');
        }
    });
</script> --}}










{{-- @if ($customer)
    <!-- ชื่อ-นามสกุล -->
    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-regular fa-user mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ $customer->prefix }} {{ $customer->first_name }} {{ $customer->last_name }}
        </div>
    </div>

    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ $customer->id_card_number }}
        </div>
    </div>

    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ $customer->phone }}
        </div>
    </div>

    <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>
    <!-- วันที่เข้าระบบ -->
    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ \Carbon\Carbon::parse($customer->created_at)->locale('th')->translatedFormat('j F Y') }}
        </div>
    </div>


    <!-- ผู้ลงบันทึก -->
    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ $customer->user_insert }}
        </div>
    </div>
@else
    <div class="text-red-500 text-lg font-bold">ไม่มีข้อมูลลูกค้า</div>
@endif --}}


<!-- resources/views/customer.blade.php -->

{{--

<div id="customer-info">
    <!-- ข้อมูลลูกค้าจะถูกโหลดที่นี่ -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const customerId = 1; // เปลี่ยนให้ตรงกับ ID ของลูกค้า

        $.ajax({
            url: `/customer/${customerId}`,
            method: 'GET',
            success: function(data) {
                // แสดงข้อมูลลูกค้า
                $('#customer-info').html(`
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.prefix} ${data.first_name} ${data.last_name}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.id_card_number}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.phone}
                        </div>
                    </div>
                    <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.created_at}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.user_insert}
                        </div>
                    </div>
                `);
            },
            error: function(xhr) {
                // แสดงข้อความเมื่อไม่พบลูกค้า
                $('#customer-info').html(`
                    <div class="text-red-500 text-lg font-bold">${xhr.responseJSON.error}</div>
                `);
            }
        });
    });
</script> --}}
{{--
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div id="customer-info">
    <!-- ข้อมูลลูกค้าจะถูกโหลดที่นี่ -->
    <p>กำลังโหลดข้อมูล...</p>
</div>

<script>
    $(document).on('click', '.edit-button', function(event) {
        event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
        let customerId = $(this).data('id');

        // เรียกใช้งาน AJAX เพื่อดึงข้อมูลลูกค้า
        $.ajax({
            url: `/customer/${customerId}`,
            method: 'GET',
            success: function(data) {
                console.log(data); // ตรวจสอบข้อมูลที่ได้รับ
                // แสดงข้อมูลลูกค้า
                $('#customer-info').html(`
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.prefix} ${data.first_name} ${data.last_name}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.id_card_number}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.phone}
                        </div>
                    </div>
                    <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.created_at}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.user_insert}
                        </div>
                    </div>
                `);
            },
            error: function(xhr) {
                // แสดงข้อความเมื่อไม่พบลูกค้า
                $('#customer-info').html(`
                    <div class="text-red-500 text-lg font-bold">${xhr.responseJSON.error}</div>
                `);
            }
        });
    });
</script> --}}




{{--
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div id="customer-info">
    <p>กำลังโหลดข้อมูล...</p>
</div>

<script>
    $(document).on('click', '.edit-button', function(event) {
        event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
        let customerId = $(this).data('id');

        // เรียกใช้งาน AJAX เพื่อดึงข้อมูลลูกค้า
        $.ajax({
            url: `/customer/${customerId}`,
            method: 'GET',
            success: function(data) {
                console.log(data); // ตรวจสอบข้อมูลที่ได้รับ
                // แสดงข้อมูลลูกค้า
                $('#customer-info').html(`
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.prefix} ${data.first_name} ${data.last_name}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.id_card_number}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.phone}
                        </div>
                    </div>
                    <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.created_at}
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
                        </div>
                        <div class="ml-8 text-gray-400 text-sm">
                            ${data.user_insert}
                        </div>
                    </div>
                `);
            },
            error: function(xhr) {
                // แสดงข้อความเมื่อไม่พบลูกค้า
                $('#customer-info').html(`
                    <div class="text-red-500 text-lg font-bold">${xhr.responseJSON.error}</div>
                `);
            }
        });
    });
</script>
 --}}
