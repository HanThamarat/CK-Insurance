<div class="bg-white shadow-md max-w-full md:max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-4 p-4">
        <span class="text-sm font-semibold text-orange-500">
            <i class="fa-regular fa-user mr-2"></i>ข้อมูลลูกค้า (Customer Details)
        </span>
        {{-- <a href="#"
            class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500"
            data-bs-target="#Cus-modal-wrapper" data-bs-toggle="Cus-modal-wrapper" type="button" onclick="showModal()">
            <i class="fa-solid fa-user-pen"></i>
        </a> --}}

        {{-- <a href="#"
            class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500"
            type="button" onclick="showModal()">
            <i class="fa-solid fa-user-pen"></i> แก้ไขข้อมูลลูกค้า
        </a> --}}

        <a href="#"
            class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300"
            type="button" onclick="showModal()">
            <i class="fa-solid fa-user-pen"></i> แก้ไขข้อมูลลูกค้า
        </a>




    </div>

    <!-- Customer Details Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-600 p-4">
        <!-- Left Section: Customer Information -->
        <div class="flex flex-col space-y-4">
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">วันเดือนปีเกิด :</strong>
                <span class="text-right pl-4">{{ $customer->birth_date ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">เพศ :</strong>
                <span class="text-right pl-4">{{ $customer->gender ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">สัญชาติ :</strong>
                <span class="text-right pl-4">{{ $customer->nationality ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">ศาสนา :</strong>
                <span class="text-right pl-4">{{ $customer->religion ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">สถานะสมรส :</strong>
                <span class="text-right pl-4">{{ $customer->marital_status ?? '-' }}</span>
            </div>
        </div>

        <!-- Right Section: Notes -->
        <div class="flex flex-col mt-[-5]">
            <strong class="text-gray-8005">หมายเหตุ :</strong>
            <textarea class="mt-3 w-full border border-orange-500  text-gray-800 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500 focus:border-orange-600"
                rows="5">{{ $customer->note ?? 'ยังไม่มีหมายเหตุ' }}</textarea>
        </div>

    </div>



</div>
<!-- Second Card with Tabs -->
<!-- Updated Tabs -->
<!-- Updated Tabs -->
<div class="bg-white shadow-md rounded-lg p-6 max-w-full md:max-w-7xl mx-auto mt-6">
    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-4">
        <ul
            class="grid grid-cols-2 gap-2 text-sm font-semibold text-center text-orange-500 dark:text-gray-700 bg-white rounded-sm">
            <li>
                <a href="#address-info" class="tab-link text-gray-500 py-2 px-4 block hover:text-orange-600"
                    data-tab="address-info">ข้อมูลที่อยู่</a>
            </li>
            <li>
                <a href="#job-info" class="tab-link text-gray-500 py-2 px-4 block hover:text-orange-600"
                    data-tab="job-info">ข้อมูลอาชีพ</a>
            </li>
        </ul>
    </div>

    <!-- Tab Contents -->
    <div class="tab-content">
        <!-- ข้อมูลที่อยู่ -->
        <div id="address-info" class="tab-pane">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">ที่อยู่:</strong>
                    <span hidden>{{ $customer->address ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">จังหวัด:</strong>
                    <span hidden>{{ $customer->province ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">รหัสไปรษณีย์:</strong>
                    <span hidden>{{ $customer->postal_code ?? '-' }}</span>
                </div>


                <!-- ส่วนที่แสดงข้อมูล -->
                <div class="flex flex-col items-center mt-4">
                    <div class="shadow-effect">
                        <img src="https://ckl.co.th/assets/images/out-of-stock.png" class="up-down w-24 slow-bounce" alt="Out of Stock">
                    </div>
                    <p class="mt-4 text-gray-600 text-center">ยังไม่มีข้อมูลที่อยู่ลูกค้านี้</p>

                    <!-- ปุ่มเพิ่มที่อยู่ -->
                    {{-- <button class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                        </svg>
                        เพิ่มที่อยู่
                    </button> --}}


                    <button id="addAddressButton" class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg" data-bs-toggle="modal" data-bs-target="#modalAddress">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                        </svg>
                        เพิ่มที่อยู่
                    </button>
                </div>
            </div>
        </div>

        <!-- ข้อมูลอาชีพ -->
        <div id="job-info" class="tab-pane hidden">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">อาชีพ:</strong>
                    <span hidden >{{ $customer->occupation ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">ตำแหน่ง:</strong>
                    <span hidden >{{ $customer->position ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">บริษัท:</strong>
                    <span hidden >{{ $customer->company ?? '-' }}</span>
                </div>
                <div class="flex flex-col items-center mt-4">
                    <div class="shadow-effect">
                        <img src="https://ckl.co.th/assets/images/out-of-stock.png" class="up-down w-24 slow-bounce" alt="Out of Stock">
                    </div>
                    <p class="mt-4 text-gray-600 text-center">ยังไม่มีข้อมูลที่อยู่ลูกค้านี้</p>

                    <button class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                        </svg>
                        เพิ่มที่อยู่
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
@include('components.content-cus.Modal-Edit-Cus')
@include('components.content-cus.Modal_address')

<script src="{{ URL::asset('assets/libs/jquery.js') }}"></script>
<!-- Script for Tabs -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initial setup for active tab from localStorage
        function setInitialActiveTab() {
            const activeTab = localStorage.getItem('activeTab');
            const defaultTab = 'address-info'; // Default tab if no value is found

            // Remove 'active' class from all tab links and hide all tab panes
            document.querySelectorAll('.tab-link').forEach(link => link.classList.remove('border-b-2',
                'border-orange-500', 'text-orange-500'));
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.add('hidden'));

            // Show the active tab or default tab
            const activeTabId = activeTab || defaultTab;
            document.querySelector(`a[data-tab="${activeTabId}"]`).classList.add('border-b-2',
                'border-orange-500', 'text-orange-500');
            document.querySelector(`#${activeTabId}`).classList.remove('hidden');
        }

        setInitialActiveTab();

        // Tab click event
        document.querySelectorAll('.tab-link').forEach(tabLink => {
            tabLink.addEventListener('click', function(e) {
                e.preventDefault();
                const tabId = this.getAttribute('data-tab');

                // Hide all tab panes and remove 'active' class from all tab links
                document.querySelectorAll('.tab-pane').forEach(tab => tab.classList.add(
                    'hidden'));
                document.querySelectorAll('.tab-link').forEach(link => link.classList.remove(
                    'border-b-2', 'border-orange-500', 'text-orange-500'));

                // Show the selected tab pane and add 'active' class to the clicked tab link
                document.querySelector(`#${tabId}`).classList.remove('hidden');
                this.classList.add('border-b-2', 'border-orange-500', 'text-orange-500');

                // Save the active tab in localStorage
                localStorage.setItem('activeTab', tabId);
            });
        });
    });
</script>



<style>
    @keyframes slow-bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(0.3rem);
            /* ปรับความสูงที่ต้องการ */
        }
    }

    .slow-bounce {
        animation: slow-bounce 1s ease-in-out infinite;
        /* ปรับเวลาที่ต้องการ */
    }

    /* เงากระทบพื้น */
    .shadow-effect {
        position: relative;
    }

    .shadow-effect::after {
        content: '';
        position: absolute;
        bottom: -15px;
        /* ปรับระยะห่างจากรูปภาพ */
        left: 0;
        right: 0;
        height: 10px;
        /* ความสูงของเงา */
        background: rgba(0, 0, 0, 0.2);
        /* สีและความโปร่งใสของเงา */
        border-radius: 50%;
        /* ทำให้เงากลมมน */
        transform: scaleX(0);
        /* เริ่มต้นด้วยการซ่อน */
        animation: shadow-animation 1s ease-in-out infinite;
        /* ใช้การเคลื่อนไหว */
    }

    @keyframes shadow-animation {

        0%,
        100% {
            transform: scaleX(0);
            /* เริ่มต้นและจบด้วยการซ่อน */
        }

        50% {
            transform: scaleX(1);
            /* ขยายเงาในกลางการเด้ง */
        }
    }
</style>
