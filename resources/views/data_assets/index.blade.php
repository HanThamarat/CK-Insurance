@section('content')
    @extends('layouts.app')
    @extends('data_assets.modal_car')

    <div class="container-xl px-4 mt-2">
        <div class="row">
            <div class="col-span-12 xl:col-span-8 rounded-lg">

                <div class="flex flex-col items-center md:flex-row md:justify-center md:space-x-4 gap-4">
                    <!-- การ์ดรถยนต์ -->
                    <a href="#"
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:w-1/2 lg:w-1/3"
                        data-bs-toggle="modal" data-bs-target="#DataAssetsModal" data-type="รถยนต์" onclick="setAssetType(this)">
                        <img class="object-cover w-full rounded-t-lg h-72 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg"
                            src="{{ asset('images/car.png') }}" alt="รถยนต์">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">รถยนต์</h5>
                        </div>
                    </a>

                    <!-- การ์ดมอเตอร์ไซค์ -->
                    <a href="#"
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:w-1/2 lg:w-1/3"
                        data-bs-toggle="modal" data-bs-target="#DataAssetsModal" data-type="มอเตอร์ไซค์" onclick="setAssetType(this)">
                        <img class="object-cover w-full rounded-t-lg h-72 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg"
                            src="{{ asset('images/motor.png') }}" alt="มอเตอร์ไซค์">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">มอเตอร์ไซค์</h5>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div id="preloader" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="loader"></div>
    </div>


    <style>
        #preloader .loader {
            border: 8px solid #f3f3f3; /* สีพื้นหลัง */
            border-top: 8px solid #ff8400; /* สีของวงกลมที่หมุน */
            border-radius: 50%; /* ทำให้เป็นวงกลม */
            width: 50px; /* ขนาดของวงกลม */
            height: 50px; /* ขนาดของวงกลม */
            animation: spin 0.7s linear infinite; /* การหมุนเร็วขึ้น */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* กำหนดสีพื้นหลังให้กับ select ที่ถูก disabled */
        .disabled-select {
            background-color: #e5e7eb; /* สีเทาอ่อน */
            color: #6b7280; /* สีเทาเข้มสำหรับข้อความ */
        }

        .disabled-input {
            background-color: #e5e7eb; /* สีเทาอ่อน */
            color: #6b7280; /* สีเทาเข้มสำหรับข้อความ */
            cursor: not-allowed; /* เปลี่ยนเคอร์เซอร์เมื่อ hover */
        }


        /* สไตล์สำหรับ placeholder สีแดง */
        .red-placeholder::placeholder {
            color: #ff4d4d; /* สีแดง */
            opacity: 1; /* ปรับค่าความทึบให้สูงขึ้น */
        }

        .red-option {
            color: red; /* เปลี่ยนสีข้อความเป็นสีแดง */
        }


        /*--------------- Checkbox Type new_number_stamping --------------*/
        .checkbox-wrapper-19 {
            box-sizing: border-box;
            --background-color: #fff;
            --checkbox-height: 25px;
        }

        @-moz-keyframes dothabottomcheck-19 {
        0% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) / 2);
        }
        }

        @-webkit-keyframes dothabottomcheck-19 {
        0% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) / 2);
        }
        }

        @keyframes dothabottomcheck-19 {
        0% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) / 2);
        }
        }

        @keyframes dothatopcheck-19 {
        0% {
            height: 0;
        }

        50% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) * 1.2);
        }
        }

        @-webkit-keyframes dothatopcheck-19 {
        0% {
            height: 0;
        }

        50% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) * 1.2);
        }
        }

        @-moz-keyframes dothatopcheck-19 {
        0% {
            height: 0;
        }

        50% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) * 1.2);
        }
        }

        .checkbox-wrapper-19 input[type=checkbox] {
        display: none;
        }

        .checkbox-wrapper-19 .check-box {
            height: var(--checkbox-height);
            width: var(--checkbox-height);
            background-color: transparent;
            border: calc(var(--checkbox-height) * .1) solid #757575;
            border-radius: 5px;
            position: relative;
            display: inline-block;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -moz-transition: border-color ease 0.2s;
            -o-transition: border-color ease 0.2s;
            -webkit-transition: border-color ease 0.2s;
            transition: border-color ease 0.2s;
            cursor: pointer;
        }

        .checkbox-wrapper-19 .check-box::before,
        .checkbox-wrapper-19 .check-box::after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            position: absolute;
            height: 0;
            width: calc(var(--checkbox-height) * .2);
            background-color: #34b93d;
            display: inline-block;
            -moz-transform-origin: left top;
            -ms-transform-origin: left top;
            -o-transform-origin: left top;
            -webkit-transform-origin: left top;
            transform-origin: left top;
            border-radius: 5px;
            content: " ";
            -webkit-transition: opacity ease 0.5;
            -moz-transition: opacity ease 0.5;
            transition: opacity ease 0.5;
        }

        .checkbox-wrapper-19 .check-box::before {
            top: calc(var(--checkbox-height) * .72);
            left: calc(var(--checkbox-height) * .41);
            box-shadow: 0 0 0 calc(var(--checkbox-height) * .05) var(--background-color);
            -moz-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }

        .checkbox-wrapper-19 .check-box::after {
            top: calc(var(--checkbox-height) * .37);
            left: calc(var(--checkbox-height) * .05);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box,
        .checkbox-wrapper-19 .check-box.checked {
            border-color: #34b93d;
        }

        .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::after,
        .checkbox-wrapper-19 .check-box.checked::after {
            height: calc(var(--checkbox-height) / 2);
            -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
            -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
            -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
            animation: dothabottomcheck-19 0.2s ease 0s forwards;
        }

        .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::before,
        .checkbox-wrapper-19 .check-box.checked::before {
            height: calc(var(--checkbox-height) * 1.2);
            -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
            -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
            -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
            animation: dothatopcheck-19 0.4s ease 0s forwards;
        }
    </style>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // เมื่อเปิดโมดัล
            $('[data-bs-toggle="modal"]').click(function() {
                $('#preloader').removeClass('hidden'); // แสดง preloader
                $('#DataAssetsModal .relative').css('top', '-100%').show(); // วางเนื้อหาที่ด้านบนสุด

                // รอ 0.5 วินาทีก่อนเลื่อนโมดัล
                setTimeout(function() {
                    $('#DataAssetsModal .relative').animate({ top: '0%' }, 300, function() {
                        $('#preloader').addClass('hidden'); // ซ่อน preloader หลังจากเลื่อนเสร็จ
                    }); // เลื่อนเนื้อหาลงมา
                    $('#DataAssetsModal').removeClass('hidden'); // แสดงโมดัล
                }, 500); // เวลาในการรอ (300 มิลลิวินาที)
            });

            // เมื่อคลิกนอกโมดัลเพื่อปิด
            $('#DataAssetsModal').click(function(e) {
                if ($(e.target).is('#DataAssetsModal') || $(e.target).is('.close-modal')) {
                    $('#DataAssetsModal .relative').animate({ top: '-100%' }, 300, function() {
                        $('#DataAssetsModal').addClass('hidden'); // ซ่อนโมดัลเมื่อเลื่อนขึ้นเสร็จ
                    });
                }
            });
        });
    </script>



    {{-- hidden and show data --}}
    <script>
        // ฟังก์ชันในการตั้งค่าประเภททรัพย์สิน
        function setAssetType(element) {
            const type = element.getAttribute('data-type'); // ดึงประเภทจาก data-type

            // ค้นหา <select> ที่มี id เป็น Vehicle_Type
            const vehicleSelect = document.getElementById('Vehicle_Type');

            // ลบคลาส hidden จาก <option> ที่ตรงกับประเภท
            for (let option of vehicleSelect.options) {
                if (option.value) {
                    option.hidden = true; // ตั้งค่า hidden เป็น true ทุกตัว
                }
            }

            // แสดงเฉพาะ <option> ที่ตรงกับประเภทที่เลือก
            if (type === 'รถยนต์') {
                for (let option of vehicleSelect.options) {
                    if (option.id === 'car_group') {
                        option.hidden = false; // แสดง option รถยนต์
                    }
                }
            } else if (type === 'มอเตอร์ไซค์') {
                for (let option of vehicleSelect.options) {
                    if (option.id === 'moto_group') {
                        option.hidden = false; // แสดง option มอเตอร์ไซค์
                    }
                }
            }

            const assetType = element.getAttribute('data-type');

            // ตั้งค่าให้กับ input hidden
            document.getElementById('Type_Asset').value = assetType;
        }

    </script>



    <script>
        $(document).ready(function() {
            const modal = $('#DataAssetsModal');
            const modalContent = modal.find('.modal-enter');

            // เปิด Modal
            $('#openModal').click(function() {
                modal.removeClass('hidden');
                modalContent.removeClass('modal-leave-active').removeClass('modal-enter-active'); // รีเซ็ตการปิดและเปิด
                setTimeout(() => {
                    modalContent.addClass('modal-enter-active');
                }, 10);
            });

            // ปิด Modal
            $('#closeModal').click(function() {
                modalContent.addClass('modal-leave-active');
                setTimeout(() => {
                    modal.addClass('hidden');
                    modalContent.removeClass('modal-enter-active').removeClass('modal-leave-active');
                }, 300);
            });

            // ปิด Modal เมื่อคลิกนอก Modal
            $(window).click(function(event) {
                if ($(event.target).is(modal)) {
                    modalContent.addClass('modal-leave-active');
                    setTimeout(() => {
                        modal.addClass('hidden');
                        modalContent.removeClass('modal-enter-active').removeClass('modal-leave-active');
                    }, 300);
                }
            });
        });
    </script>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        // เปิด - ปิดแสดง modal
        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
            button.addEventListener('click', (event) => {
                const targetId = event.currentTarget.getAttribute('data-bs-target').substring(1);
                document.getElementById(targetId).classList.remove('hidden');
            });
        });


        // สลับการทำงานของ Modal ต่าง ๆ

        $(document).ready(function() {
            // เมื่อคลิกที่ลิงก์ใน modal
            $('a[data-bs-toggle="modal"]').on('click', function() {
                // รับค่า title จากลิงก์ที่คลิก
                var title = $(this).find('div.text-center').text().trim();
                // กำหนด class ของเนื้อหาใน modal ตาม title
                var $modal = $('#DataAssetsModal');
                $modal.find('[data-title]').each(function() {
                    if ($(this).data('title') === title) {
                        $(this).removeClass('hidden');
                    } else {
                        $(this).addClass('hidden');
                    }
                });
                openModal('DataAssetsModal');
            });

            // ฟังก์ชันปิด modal
            function closeModal(modalId) {
                $('#' + modalId).addClass('hidden');
            }

            // ฟังก์ชันเปิด modal
            function openModal(modalId) {
                $('#' + modalId).removeClass('hidden');
            }

            // ใช้งานปุ่มปิด modal
            $('.modal button').on('click', function() {
                closeModal('DataAssetsModal');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('DataAssetsModal');
            const modalContent = document.getElementById('modalContent');

            function showModal(type) {
                modal.classList.remove('hidden');
                modalContent.querySelectorAll('div[id$="Info"]').forEach(div => {
                    div.classList.add('hidden');
                });
                const infoDiv = document.getElementById(`${type}Info`);
                if (infoDiv) {
                    infoDiv.classList.remove('hidden');
                }
            }

            document.querySelectorAll('.modal-trigger').forEach(trigger => {
                trigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    const type = this.getAttribute('data-type');
                    showModal(type);
                });
            });

            window.closeModal = function(id) {
                document.getElementById(id).classList.add('hidden');
            };
        });


        $(document).ready(function() {
            $('.modal-trigger').on('click', function(event) {
                event.preventDefault();
                var type = $(this).data('type');
                $('#DataAssetsModal').removeClass('hidden');
                $('#modalContent > div[id$="Info"]').addClass('hidden');
                $('#' + type + 'Info').removeClass('hidden');
            });

            window.closeModal = function(id) {
                $('#' + id).addClass('hidden');
            };
        });
    </script>



    <style>
        body {
            background-image: url('{{ asset('images/home.jpg') }}');
            background-size: cover;
            /* ขยายภาพให้ครอบคลุมพื้นที่ */
            background-position: center;
            /* จัดตำแหน่งภาพที่ตรงกลาง */
            background-repeat: no-repeat;
            /* ไม่ทำซ้ำภาพ */
            background-blend-mode: overlay;
            /* ผสมสีพื้นหลังกับภาพพื้นหลัง */
        }
    </style>

    <!----------------------------------------------------------------------------------------------------------------------------------->

    {{-- Font-Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Flatpickr CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/th.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




    <script>
        flatpickr("#date-stamp-register-1", {
            locale: "th",
            enableTime: true,
            dateFormat: "d/m/Y H:i"
        });

        flatpickr("#date-stamp-register-2", {
            locale: "th",
            enableTime: true,
            dateFormat: "d/m/Y H:i"
        });

        flatpickr("#date-stamp-act-1", {
            locale: "th",
            enableTime: true,
            dateFormat: "d/m/Y H:i"
        });

        flatpickr("#date-stamp-act-2", {
            locale: "th",
            enableTime: true,
            dateFormat: "d/m/Y H:i"
        });

        flatpickr("#date-stamp-insurance-1", {
            locale: "th",
            enableTime: true,
            dateFormat: "d/m/Y H:i"
        });

        flatpickr("#date-stamp-insurance-2", {
            locale: "th",
            enableTime: true,
            dateFormat: "d/m/Y H:i"
        });
    </script>
@endsection
