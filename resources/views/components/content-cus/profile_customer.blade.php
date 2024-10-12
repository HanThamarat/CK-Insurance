@if ($customer)
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
            {{ $customer->created_at }}
        </div>
    </div>

    <!-- ผู้ลงบันทึก -->
    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ 'Tester System' }}
        </div>
    </div>
@else
    <div class="text-red-500 text-lg font-bold">ไม่มีข้อมูลลูกค้า</div>
@endif
