<ul
    class="flex justify-center space-x-2 text-sm font-semibold text-center text-orange-500 dark:text-gray-700 bg-white rounded-sm">
    <li>
        <a href="#" id="showCustomerCard" class="block px-4 py-3 rounded-md active " aria-current="page">
            <i class="fa-regular fa-user mr-2 text-md"></i>รายละเอียดลูกค้า
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
</script>
