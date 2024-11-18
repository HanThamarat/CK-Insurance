
<ul
    class="flex justify-center text-sm font-semibold text-center text-orange-500 dark:text-gray-700 bg-white rounded-sm menu-items">
    <li class="relative">
        <a href="#" id="showCustomerCard" data-tab="customer" class="block px-4 py-3 rounded-md active-tab"
            aria-current="page">
            <img src="{{ asset('gif/cus.gif') }}" alt="Customer Details" class="inline-block w-7 h-7 mr-2">
            รายละเอียดลูกค้า
        </a>
        <div class="underline-tab"></div>
    </li>

    <li class="relative">
        <a href="#" id="showFollowUp" data-tab="follow-up" class="block px-4 py-3 rounded-md" aria-current="page">
            <img src="{{ asset('gif/follow.gif') }}" alt="Follow Up" class="inline-block w-7 h-7 mr-2">
            บันทึกติดตาม
        </a>
        <div class="underline-tab"></div>
    </li>
</ul>


<div class="border-b border-gray-200 mb-2"></div>




<!-- Container สำหรับการ์ด -->
<div id="customerCard" class="block">
    @include('components.content-cus.Card-detail-cus')
</div>

<div id="followUpCard" class="hidden">
    @include('components.content-cus.FollowUp-detail-cus')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showCustomerCard = document.getElementById('showCustomerCard');
        const showFollowUp = document.getElementById('showFollowUp');
        const customerCard = document.getElementById('customerCard');
        const followUpCard = document.getElementById('followUpCard');

        // ฟังก์ชันเพื่อซ่อนการ์ดทั้งหมด
        function hideAllCards() {
            customerCard.classList.add('hidden');
            followUpCard.classList.add('hidden');
            showCustomerCard.classList.remove('active');
            showFollowUp.classList.remove('active');
        }

        // แสดงการ์ดรายละเอียดลูกค้า
        showCustomerCard.addEventListener('click', function(event) {
            event.preventDefault();
            hideAllCards();
            customerCard.classList.remove('hidden');
            showCustomerCard.classList.add('active');
        });

        // แสดงการ์ดบันทึกติดตาม
        showFollowUp.addEventListener('click', function(event) {
            event.preventDefault();
            hideAllCards();
            followUpCard.classList.remove('hidden');
            showFollowUp.classList.add('active');
        });

        // ตั้งค่าให้ Customer Card เป็น active เมื่อโหลดหน้า
        showCustomerCard.click();
    });
</script>

<script>
    document.querySelectorAll('.menu-items a').forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault();

            // Remove active state from all tabs
            document.querySelectorAll('.menu-items a').forEach(t => t.classList.remove('active-tab'));

            // Add active state to clicked tab
            tab.classList.add('active-tab');
        });
    });
</script>



<style>
    .menu-items li {
        margin-right: 5rem;
        /* ปรับระยะห่างที่ต้องการ */
    }

    .menu-items li:last-child {
        margin-right: 0;
        /* ป้องกัน margin ขวาสุดของรายการสุดท้าย */
    }

    /* Custom CSS to style the underline */
    .menu-items li .underline-tab {
        position: absolute;
        bottom: -1px;
        /* Adjust for border alignment */
        left: 0;
        width: 0;
        height: 2px;
        background-color: #f97316;
        /* Orange */
        transition: width 0.3s ease-in-out;
    }

    .menu-items li a.active-tab+.underline-tab {
        width: 100%;
    }
</style>







{{-- <ul
    class="flex justify-center space-x-2 text-sm font-semibold text-center text-orange-500 dark:text-gray-700 bg-white rounded-sm">
    <li>
        <a href="#" id="showCustomerCard" class="block px-4 py-3 rounded-md active " aria-current="page">
            <i class="fa-regular fa-user mr-2 text-md"></i>รายละเอียดลูกค้า
        </a>
    </li>

    <li>
        <a href="#" id="showFollowUp" class="block px-4 py-3 rounded-md active " aria-current="page">
            <i class="fa-regular fa-user mr-2 text-md"></i>บันทึกติดตาม
        </a>
    </li>
</ul>




<!-- Container สำหรับการ์ด -->
<div id="customerCard" class="block"> <!-- เปลี่ยนจาก 'hidden' เป็น 'block' -->
    @include('components.content-cus.Card-detail-cus')
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showCustomerCard = document.getElementById('showCustomerCard');
        const customerCard = document.getElementById('customerCard');

        // ฟังก์ชันเพื่อซ่อนการ์ดทั้งหมด (ไม่จำเป็นต้องใช้อีกต่อไป)
        function hideAllCards() {
            customerCard.classList.add('hidden');
            showCustomerCard.classList.remove('active');
        }

        // แสดงการ์ดรายละเอียดลูกค้า
        showCustomerCard.addEventListener('click', function(event) {
            event.preventDefault(); // ป้องกันการทำงานของลิงก์
            customerCard.classList.remove('hidden');
            showCustomerCard.classList.add('active');
        });

        // ตั้งค่าให้ Customer Card เป็น active เมื่อโหลดหน้า
        showCustomerCard.click(); // เรียกใช้งานเมื่อโหลดหน้า
    });
</script> --}}


{{-- <ul
    class="flex justify-center text-sm font-semibold text-center text-orange-500 dark:text-gray-700 bg-white rounded-sm menu-items">
    <li>
        <a href="#" id="showCustomerCard" class="block px-4 py-3 rounded-md active" aria-current="page">
            <i class="fa-regular fa-user mr-2 text-md"></i>รายละเอียดลูกค้า
        </a>
    </li>

    <li>
        <a href="#" id="showFollowUp" class="block px-4 py-3 rounded-md" aria-current="page">
            <i class="fa-regular fa-bookmark mr-2 text-md"></i>บันทึกติดตาม
        </a>
    </li>
</ul> --}}
