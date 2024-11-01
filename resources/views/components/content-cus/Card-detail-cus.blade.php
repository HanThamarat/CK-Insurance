<div class="bg-white shadow-md max-w-full md:max-w-7xl mx-auto">
    <!-- Header Section -->

    <div class="flex justify-between items-center mb-4 p-7">
        <span class="text-sm font-semibold text-orange-500">
            <i class="fa-regular fa-user mr-2"></i>ข้อมูลลูกค้า (Customer Details)
        </span>
        <div class="flex space-x-2">
            <a href="#"
                class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 hover:translate-y-[-4px] hover:shadow-2xl hover:shadow-gray-600 transition-transform duration-300"
                type="button" onclick="showDataCustomerModal()">
                <i class="fa-solid fa-person"></i> แสดงข้อมูลลูกค้า
            </a>
            <a href="#"
                class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 hover:translate-y-[-4px] hover:shadow-2xl hover:shadow-gray-600 transition-transform duration-300"
                type="button" onclick="showModal()">
                <i class="fa-solid fa-user-pen"></i> แก้ไขข้อมูลลูกค้า
            </a>
        </div>
    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-600 p-7 mt-[-30]">
        <!-- Left Section: Customer Information -->
        <div id="customer-info-right" class="flex flex-col space-y-4"></div>

        <!-- Right Section: Notes -->
        {{-- <div class="flex flex-col mt-[-3]">
            <strong class="text-gray-800">หมายเหตุ :</strong>
            <textarea disabled
                class="mt-0 w-full border border-orange-500 text-gray-800 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500 focus:border-orange-600"
                rows="6" id="customer-note"></textarea>
        </div> --}}

        <div class="flex flex-col mt-1">
            <strong class="text-gray-800 italic">หมายเหตุ :</strong>
            <textarea disabled
                class="mt-0 w-full border border-orange-500 text-gray-800 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500 focus:border-orange-600 bg-gray-200 italic"
                rows="7" id="customer-note"></textarea>
        </div>

    </div>

    <script>
        // แปลงข้อมูลลูกค้าเป็น JavaScript (ใช้ JSON.encode ใน Blade)
        var customerData = {!! json_encode($customer) !!};

        // ฟังก์ชันในการแสดงข้อมูลลูกค้า
        function displayCustomerInfo(data) {
            if (data) {
                const infoHTML = `
                    <div class="flex justify-between items-center border-b border-gray-300 pb-2">
                        <strong class="text-gray-800">
                            <i class="fas fa-calendar-alt pr-1"></i>วันเดือนปีเกิด :
                        </strong>
                        <span class="text-right pl-0">
                            ${data.birthday ? new Date(data.birthday).toLocaleDateString('th-TH', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            }) : '-'}
                        </span>
                    </div>

                    <div class="flex justify-between items-center mt-[-10] border-b border-gray-300 pb-2">
                        <strong class="text-gray-800"><i class="fas fa-venus-mars pr-1"></i>เพศ :</strong>
                        <span class="text-right pl-0">${data.gender ?? '-'}</span>
                    </div>

                    <div class="flex justify-between items-center mt-[-10] border-b border-gray-300 pb-2">
                        <strong class="text-gray-800"><i class="fas fa-flag pr-1"></i>สัญชาติ :</strong>
                        <span class="text-right pl-0">${data.nationality ?? '-'}</span>
                    </div>

                    <div class="flex justify-between items-center mt-[-10] border-b border-gray-300 pb-2">
                        <strong class="text-gray-800"><i class="fas fa-cross pr-1"></i>ศาสนา :</strong>
                        <span class="text-right pl-0">${data.religion ?? '-'}</span>
                    </div>

                    <div class="flex justify-between items-center mt-[-10] ">
                        <strong class="text-gray-800"><i class="fas fa-heart pr-1"></i>สถานะสมรส :</strong>
                        <span class="text-right pl-0">${data.marital_status ?? '-'}</span>
                    </div>
                `;
                document.getElementById('customer-info-right').innerHTML = infoHTML;
                document.getElementById('customer-note').value = data.note ?? 'ยังไม่มีหมายเหตุ';
            } else {
                document.getElementById('customer-info-right').innerHTML = "<p>ไม่พบข้อมูลลูกค้า</p>";
                document.getElementById('customer-note').value = 'ยังไม่มีหมายเหตุ';
            }
        }
        // เรียกฟังก์ชันแสดงข้อมูล
        displayCustomerInfo(customerData);
    </script>



    <style>
        #customer-info-right {
            background-color: #ffffff;
            border: 1px solid #ff833f;
            border-radius: 20px;
            padding: 16px;
        }
    </style>


</div>
<!-- Second Card with Tabs -->
<div class="bg-white shadow-md rounded-lg p-6 max-w-full md:max-w-7xl mx-auto mt-6">
    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-4">
        <ul
            class="grid grid-cols-3 gap-2 text-sm font-semibold text-center text-orange-500 dark:text-gray-700 bg-white rounded-sm">
            <li>
                <a href="#address-info" class="tab-link text-gray-500 py-2 px-4 block hover:text-orange-600"
                    data-tab="address-info">ข้อมูลที่อยู่</a>
            </li>
            <li>
                <a href="#job-info" class="tab-link text-gray-500 py-2 px-4 block hover:text-orange-600"
                    data-tab="job-info">ข้อมูลอาชีพ</a>
            </li>
            <li>
                <a href="#asset-info" class="tab-link text-gray-500 py-2 px-4 block hover:text-orange-600"
                    data-tab="asset-info">ข้อมูลสินทรัพย์</a>
            </li>
        </ul>
    </div>

    <!-- Tab Contents -->
    <div class="tab-content">
        <!-- ข้อมูลที่อยู่ -->
        <div id="address-info" class="tab-pane">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">

                <div class="slider-container">
                    <div class="slider" id="address-list">
                        @include('components.content-cus.card_address')
                        <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <!-- ปุ่มเลื่อนไปทางซ้าย -->
                    <button class="prev" id="prev-master">←</button>
                    <!-- ปุ่มเลื่อนไปทางขวา -->
                    <button class="next" id="next-master">→</button>
                </div>


                @include('components.content-cus.Modal_edit_address')

                <!-- ส่วนที่แสดงข้อมูล -->
                <div class="flex flex-col items-center mt-[-10] address-master">
                    <div class="shadow-effect">
                        <img src="https://ckl.co.th/assets/images/out-of-stock.png" class="up-down w-24 slow-bounce"
                            alt="Out of Stock">
                    </div>
                    <p class="mt-4 text-gray-600 text-center">ยังไม่มีข้อมูลที่อยู่ลูกค้านี้</p>


                </div>

                <div class="flex justify-center mt-0">
                    <button id="addAddressButton"
                        class="flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
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


                <div class="slider-container">
                    <div class="slider" id="career-container">
                        @include('components.content-cus.card_career')
                        <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
                    </div>

                    <!-- ปุ่มเลื่อนไปทางซ้าย -->
                    <button class="prev-2" id="prev-master-2">←</button>
                    <!-- ปุ่มเลื่อนไปทางขวา -->
                    <button class="next-2" id="next-master-2">→</button>
                </div>

                @include('components.content-cus.Modal_edit_career')


                <div class="flex flex-col items-center mt-0 career-master">
                    <div class="shadow-effect">
                        <img src="https://ckl.co.th/assets/images/out-of-stock.png" class="up-down w-24 slow-bounce"
                            alt="Out of Stock">
                    </div>

                    <p class="mt-4 text-gray-600 text-center">ยังไม่มีข้อมูลที่อยู่ลูกค้านี้</p>


                </div>
                <div class="flex justify-center mt-0">
                    <button id="addCareerButton"
                        class="mt-0 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z"/>
                        </svg>
                        เพิ่มอาชีพ
                    </button>
                </div>
            </div>
        </div>




        <div id="asset-info" class="tab-pane hidden">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">
                <div class="slider-container">
                    <div class="slider" id="asset-container">
                        <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
                        @include('components.content-cus.card_asset')
                    </div>

                    <!-- ปุ่มเลื่อนไปทางซ้าย -->
                    <button class="prev_asset" id="prev_asset">←</button>
                    <!-- ปุ่มเลื่อนไปทางขวา -->
                    <button class="next_asset" id="next_asset">→</button>
                </div>
            </div>

            <div class="flex flex-col items-center mt-7 asset-master ">
                <div class="shadow-effect">
                    <img src="https://ckl.co.th/assets/images/out-of-stock.png" class="up-down w-24 slow-bounce" alt="Out of Stock">
                </div>
                <p class="mt-5 text-gray-600 text-center text-sm">ยังไม่มีข้อมูลสินทรัพย์ลูกค้านี้</p>
            </div>

            {{-- <div class="flex justify-center mt-2">
                <button id="addAssetButton" class="mt-0 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold text-sm py-2 px-3 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-3 mr-1" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M135.2 117.4L109.1 192l293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 144 0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L96 400l0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                    </svg>
                    เพิ่มสินทรัพย์
                </button>
            </div> --}}

            <div class="flex justify-center mt-2">
                <a href="{{ url('data_assets?customer_id=' . $customer->id) }}">
                    <button id="addAssetButton" class="mt-0 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold text-sm py-2 px-3 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-3 mr-1" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M135.2 117.4L109.1 192l293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 144 0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L96 400l0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                        </svg>
                        เพิ่มสินทรัพย์
                    </button>
                </a>
            </div>

        </div>

    </div>
    @include('components.content-cus.Modal-Edit-Cus')
    @include('components.content-cus.Modal_show_cus')
    @include('components.content-cus.Modal_address')
    @include('components.content-cus.Modal_Career')

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




    <style>
        .slider-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            /* ซ่อนส่วนที่เกินจาก container */
        }

        .slider {
            display: flex;
            gap: 10px;
            /* เว้นระยะระหว่างการ์ด */
            overflow-x: auto;
            /* เลื่อนในแนวนอน */
            scroll-behavior: smooth;
            /* เลื่อนแบบนุ่มนวล */
            padding: 20px;
        }

        .slider::-webkit-scrollbar {
            display: none;
            /* ซ่อน scrollbar */
        }

        /* ปรับขนาดของการ์ดให้แสดง 2 การ์ดในเวลาเดียวกัน */
        .slider>* {
            flex: 0 0 calc(50% - 10px);
            /* แสดงการ์ด 2 ใบ โดยคิดจากความกว้างที่หัก gap ออกไป */
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(213, 213, 213, 0.5);
            /* Transparent background */
            color: white;
            border: none;
            border-radius: 50%;
            /* Make the button circular */
            width: 50px;
            /* Set the width of the button */
            height: 50px;
            /* Set the height of the button */
            padding: 0;
            /* Remove padding */
            cursor: pointer;
            z-index: 1;
            /* ให้ปุ่มอยู่เหนือ slider */
            transition: background-color 0.3s;
            /* Smooth transition */
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(51, 51, 51, 1);
            /* Solid background on hover */
        }


        .prev {
            left: 10px;
            /* ปุ่มทางซ้าย */
        }

        .next {
            right: 10px;
            /* ปุ่มทางขวา */
        }

        .prev:hover,
        .next:hover {
            background-color: #555;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // ฟังก์ชันสำหรับเลื่อนไปทางซ้าย
            $('.prev').on('click', function() {
                const $slider = $('#address-list');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '-=' + cardWidth
                }, 0); // เลื่อนไปทางซ้าย
            });

            // ฟังก์ชันสำหรับเลื่อนไปทางขวา
            $('.next').on('click', function() {
                const $slider = $('#address-list');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '+=' + cardWidth
                }, 0); // เลื่อนไปทางขวา
            });
        });
    </script>



    <style>
        .slider-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            /* ซ่อนส่วนที่เกินจาก container */
        }

        .slider {
            display: flex;
            gap: 10px;
            /* เว้นระยะระหว่างการ์ด */
            overflow-x: auto;
            /* เลื่อนในแนวนอน */
            scroll-behavior: smooth;
            /* เลื่อนแบบนุ่มนวล */
            padding: 20px;
        }

        .slider::-webkit-scrollbar {
            display: none;
            /* ซ่อน scrollbar */
        }

        /* ปรับขนาดของการ์ดให้แสดง 2 การ์ดในเวลาเดียวกัน */
        .slider>* {
            flex: 0 0 calc(50% - 10px);
            /* แสดงการ์ด 2 ใบ โดยคิดจากความกว้างที่หัก gap ออกไป */
        }

        .prev-2,
        .next-2 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(213, 213, 213, 0.5);
            /* Transparent background */
            color: white;
            border: none;
            border-radius: 50%;
            /* Make the button circular */
            width: 50px;
            /* Set the width of the button */
            height: 50px;
            /* Set the height of the button */
            padding: 0;
            /* Remove padding */
            cursor: pointer;
            z-index: 1;
            /* ให้ปุ่มอยู่เหนือ slider */
            transition: background-color 0.3s;
            /* Smooth transition */
        }

        .prev-2:hover,
        .next-2:hover {
            background-color: rgba(51, 51, 51, 1);
            /* Solid background on hover */
        }

        .prev-2 {
            left: 10px;
            /* ปุ่มทางซ้าย */
        }

        .next-2 {
            right: 10px;
            /* ปุ่มทางขวา */
        }
    </style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // ฟังก์ชันสำหรับเลื่อนไปทางซ้าย
            $('#prev-master-2').on('click', function() {
                const $slider = $('#career-container');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '-=' + cardWidth
                }, 0); // เลื่อนไปทางซ้าย
            });

            // ฟังก์ชันสำหรับเลื่อนไปทางขวา
            $('#next-master-2').on('click', function() {
                const $slider = $('#career-container');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '+=' + cardWidth
                }, 0); // เลื่อนไปทางขวา
            });
        });
    </script>
































    {{-- <div class="flex justify-between items-center mb-4 p-4">
        <span class="text-sm font-semibold text-orange-500">
            <i class="fa-regular fa-user mr-2"></i>ข้อมูลลูกค้า (Customer Details)
        </span>
        <a href="#"
            class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 hover:translate-y-[-4px] hover:shadow-2xl hover:shadow-gray-600 transition-transform duration-300"
            type="button" onclick="showDataCustomerModal()">
            <i class="fa-solid fa-user"></i> แสดงข้อมูลลูกค้า
        </a>
        <a href="#"
            class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 hover:translate-y-[-4px] hover:shadow-2xl hover:shadow-gray-600 transition-transform duration-300"
            type="button" onclick="showModal()">
            <i class="fa-solid fa-user-pen"></i> แก้ไขข้อมูลลูกค้า
        </a>
    </div> --}}



    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // ฟังก์ชันสำหรับเลื่อนไปทางซ้าย
            $('.prev_asset').on('click', function() {
                const $slider = $('#address-list');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '-=' + cardWidth
                }, 500); // เลื่อนไปทางซ้าย
            });

            // ฟังก์ชันสำหรับเลื่อนไปทางขวา
            $('.next_asset').on('click', function() {
                const $slider = $('#address-list');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '+=' + cardWidth
                }, 500); // เลื่อนไปทางขวา
            });
        });
    </script> --}}


        {{-- <div id="asset-info" class="tab-pane hidden">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">
            <div class="slider-container">
                <div class="slider" id="asset-container">
                    <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
                    @include('components.content-cus.card_asset')

                </div>

                    <!-- ปุ่มเลื่อนไปทางซ้าย -->
                    <button class="prev_asset" id="prev_asset">←</button>
                    <!-- ปุ่มเลื่อนไปทางขวา -->
                    <button class="next_asset" id="next_asset">→</button>
                </div>
            </div>

            <div class="flex flex-col items-center mt-14 asset-master hidden">
                <div class="shadow-effect">
                    <img src="https://ckl.co.th/assets/images/out-of-stock.png" class="up-down w-24 slow-bounce" alt="Out of Stock">
                </div>
                <p class="mt-5 text-gray-600 text-center text-sm">ยังไม่มีข้อมูลสินทรัพย์ลูกค้านี้</p>
            </div>

            <div class="flex justify-center mt-2">
                <button id="addAssetButton" class="mt-0 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold text-sm py-2 px-3 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-3 mr-1" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M135.2 117.4L109.1 192l293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 144 0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L96 400l0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                    </svg>
                    เพิ่มสินทรัพย์
                </button>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                const slider = $('#assetSlider');
                const cardWidth = slider.children().first().outerWidth(true); // ดึงความกว้างของการ์ด
                let currentScroll = 0;

                $('#next_asset').click(function() {
                    currentScroll += cardWidth;
                    slider.animate({ scrollLeft: currentScroll }, 300);
                });

                $('#prev_asset').click(function() {
                    currentScroll -= cardWidth;
                    if (currentScroll < 0) currentScroll = 0; // จำกัดไม่ให้เลื่อนเกินขอบซ้าย
                    slider.animate({ scrollLeft: currentScroll }, 300);
                });
            });
        </script> --}}


    {{-- <style>
        .slider-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            /* ซ่อนส่วนที่เกินจาก container */
        }

        .slider {
            display: flex;
            gap: 10px;
            /* เว้นระยะระหว่างการ์ด */
            overflow-x: auto;
            /* เลื่อนในแนวนอน */
            scroll-behavior: smooth;
            /* เลื่อนแบบนุ่มนวล */
            padding: 20px;
        }

        .slider::-webkit-scrollbar {
            display: none;
            /* ซ่อน scrollbar */
        }

        /* ปรับขนาดของการ์ดให้แสดง 2 การ์ดในเวลาเดียวกัน */
        .slider>* {
            flex: 0 0 calc(50% - 10px);
            /* แสดงการ์ด 2 ใบ โดยคิดจากความกว้างที่หัก gap ออกไป */
        }

        .prev-3,
        .next-3 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(213, 213, 213, 0.5);
            /* Transparent background */
            color: white;
            border: none;
            border-radius: 50%;
            /* Make the button circular */
            width: 50px;
            /* Set the width of the button */
            height: 50px;
            /* Set the height of the button */
            padding: 0;
            /* Remove padding */
            cursor: pointer;
            z-index: 1;
            /* ให้ปุ่มอยู่เหนือ slider */
            transition: background-color 0.3s;
            /* Smooth transition */
        }

        .prev-3:hover,
        .next-3:hover {
            background-color: rgba(51, 51, 51, 1);
            /* Solid background on hover */
        }

        .prev-3 {
            left: 10px;
            /* ปุ่มทางซ้าย */
        }

        .next-3 {
            right: 10px;
            /* ปุ่มทางขวา */
        }
    </style> --}}


    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // ฟังก์ชันสำหรับเลื่อนไปทางซ้าย
            $('#prev-master-3').on('click', function() {
                const $slider = $('#asset-container');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '-=' + cardWidth
                }, 500); // เลื่อนไปทางซ้าย
            });

            // ฟังก์ชันสำหรับเลื่อนไปทางขวา
            $('#next-master-3').on('click', function() {
                const $slider = $('#asset-container');
                const cardWidth = $slider.children().first().outerWidth(
                true); // คำนวณความกว้างของการ์ด + gap
                $slider.animate({
                    scrollLeft: '+=' + cardWidth
                }, 500); // เลื่อนไปทางขวา
            });
        });
    </script> --}}





    {{-- <div class="slider-container">
        <div class="slider" id="asset-container">

            @include('components.content-cus.card_asset')

            <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
        </div>

        <!-- ปุ่มเลื่อนไปทางซ้าย -->
        <button class="prev-3" id="prev-master-3">←</button>
        <!-- ปุ่มเลื่อนไปทางขวา -->
        <button class="next-3" id="next-master-3">→</button>
    </div> --}}


{{-- <div class="flex justify-between items-center">
    <strong class="text-gray-800"><i class="fas fa-calendar-alt pr-1"></i>วันเดือนปีเกิด :</strong>
    <span class="text-right pl-0">${data.birthday ?? '-'}</span>
</div> --}}


                {{-- <div class="flex flex-col">
                    <strong hidden class="text-gray-800">อาชีพ:</strong>
                    <span hidden>{{ $customer->occupation ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">ตำแหน่ง:</strong>
                    <span hidden>{{ $customer->position ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">บริษัท:</strong>
                    <span hidden>{{ $customer->company ?? '-' }}</span>
                </div> --}}



                {{-- <div class="grid grid-cols-2 gap-14" id="career-container">
                    @include('components.content-cus.card_career')
                    <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
                </div> --}}


    {{-- <div class="flex flex-col">
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
                <div class="flex flex-col">
                    <strong hidden class="text-gray-800">id:</strong>
                    <span hidden>{{ $customer->id ?? '-' }}</span>
                </div> --}}


    {{-- <div class="grid grid-cols-2 gap-0 mt-[-50]" id="address-list">
                    @include('components.content-cus.card_address')
                    <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
                </div> --}}




    {{-- <button id="addCareerButton" class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                        </svg>
                        เพิ่มอาชีพ
                    </button> --}}




    {{-- <button id="addAddressButton" class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg" data-bs-toggle="modal" data-bs-target="#modalAddress">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                        </svg>
                        เพิ่มที่อยู่
                    </button> --}}
    <!-- เพิ่ม element สำหรับแสดง JSON output -->
    {{-- <pre id="json-output" class="bg-gray-200 p-4 rounded"></pre> --}}
    {{-- <script>
    // แปลงข้อมูลลูกค้าเป็น JavaScript
    var customerData = @json($customer);

    // ฟังก์ชันในการแสดงข้อมูลลูกค้า
    function displayCustomerInfo(data) {
        if (data) {
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
            `;
            document.getElementById('customer-info-right').innerHTML = infoHTML;
            document.getElementById('customer-note').value = data.note ?? 'ยังไม่มีหมายเหตุ';
        } else {
            document.getElementById('customer-info-right').innerHTML = "<p>ไม่พบข้อมูลลูกค้า</p>";
            document.getElementById('customer-note').value = 'ยังไม่มีหมายเหตุ';
        }
    }

    // ฟังก์ชันในการ render ข้อมูลลูกค้าเป็น JSON
    function renderJson(data) {
        const jsonOutput = document.getElementById('json-output');
        if (data) {
            jsonOutput.textContent = JSON.stringify(data, null, 2); // แสดง JSON ในรูปแบบที่อ่านง่าย
        } else {
            jsonOutput.textContent = 'ไม่มีข้อมูลลูกค้า';
        }
    }

    // เรียกใช้งานฟังก์ชัน
    displayCustomerInfo(customerData);
    renderJson(customerData);
</script> --}}



    {{-- <div class="flex flex-col space-y-4">
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">วันเดือนปีเกิด :</strong>
                <span class="text-right pl-4">{{ $customer->birthday ?? '-' }}</span>
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
        </div> --}}


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




    <!-- Customer Details Section -->
    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-600 p-4 mt-[-10]">
        <!-- Left Section: Customer Information -->
        <div id="customer-info-right" class="flex flex-col space-y-4"></div>

        <!-- Right Section: Notes -->
        <div class="flex flex-col mt-[-1]">
            <strong class="text-gray-800">หมายเหตุ :</strong>
            <textarea
                class="mt-1 w-full border border-orange-500 text-gray-800 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500 focus:border-orange-600"
                rows="5" id="customer-note"></textarea>
        </div>

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
                    `;

                    // แสดงข้อมูลใน div ที่กำหนด
                    document.getElementById('customer-info-right').innerHTML = infoHTML;

                    // ตั้งค่าให้ textarea มีค่าจาก customerData.note
                    document.getElementById('customer-note').value = data.note ?? 'ยังไม่มีหมายเหตุ';
                } else {
                    // หากไม่มีข้อมูลให้แสดงข้อความ
                    document.getElementById('customer-info-right').innerHTML = "<p>ไม่พบข้อมูลลูกค้า</p>";
                    document.getElementById('customer-note').value = 'ยังไม่มีหมายเหตุ';
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
    </div> --}}


        {{-- <script>
        // แปลงข้อมูลลูกค้าเป็น JavaScript
        var customerData = @json($customer);

        // ฟังก์ชันในการแสดงข้อมูลลูกค้า
        function displayCustomerInfo(data) {
            if (data) {
                const infoHTML = `
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800">
                            <i class="fas fa-calendar-alt pr-1"></i>วันเดือนปีเกิด :
                        </strong>
                        <span class="text-right pl-0">
                            {{ \Carbon\Carbon::parse($customer->birthday)->locale('th')->translatedFormat('j F Y') }}
                        </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-venus-mars pr-1"></i>เพศ :</strong>
                        <span class="text-right pl-0">${data.gender ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-flag pr-1"></i>สัญชาติ :</strong>
                        <span class="text-right pl-0">${data.nationality ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-cross pr-1"></i>ศาสนา :</strong>
                        <span class="text-right pl-0">${data.religion ?? '-'}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <strong class="text-gray-800"><i class="fas fa-heart pr-1"></i>สถานะสมรส :</strong>
                        <span class="text-right pl-0">${data.marital_status ?? '-'}</span>
                    </div>
                `;
                document.getElementById('customer-info-right').innerHTML = infoHTML;
                document.getElementById('customer-note').value = data.note ?? 'ยังไม่มีหมายเหตุ';
            } else {
                document.getElementById('customer-info-right').innerHTML = "<p>ไม่พบข้อมูลลูกค้า</p>";
                document.getElementById('customer-note').value = 'ยังไม่มีหมายเหตุ';
            }
        }

        displayCustomerInfo(customerData);
    </script> --}}
