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


    {{-- <script>
        // ฟังก์ชันในการตั้งค่าประเภททรัพย์สิน
        function setAssetType(element) {
            const type = element.getAttribute('data-type'); // ดึงประเภทจาก data-type

            // ค้นหา <select> ที่มี id เป็น Vehicle_Type
            const vehicleSelect = document.getElementById('Vehicle_Type');

            // ลบคลาส hidden จาก <option> ที่ตรงกับประเภท
            for (let option of vehicleSelect.options) {
                option.hidden = true; // ตั้งค่า hidden เป็น true ทุกตัว
            }

            // แสดงเฉพาะ <option> ที่ตรงกับประเภทที่เลือก
            if (type === 'รถยนต์') {
                for (let option of vehicleSelect.options) {
                    if (option.id === 'car_group' || option.id === 'car_brand') {
                        option.hidden = false; // แสดง option รถยนต์
                    }
                }
            } else if (type === 'มอเตอร์ไซค์') {
                for (let option of vehicleSelect.options) {
                    if (option.id === 'moto_group' || option.id === 'moto_brand') {
                        option.hidden = false; // แสดง option มอเตอร์ไซค์
                    }
                }
            }

            // ตั้งค่าให้กับ input hidden
            const assetType = element.getAttribute('data-type');
            document.getElementById('Type_Asset').value = assetType;
        }
    </script> --}}




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


    {{-- Font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;700&display=swap">

    {{-- Font-Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Tailwind --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

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
