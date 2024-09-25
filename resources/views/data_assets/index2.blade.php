@extends('layouts.app')
@extends('data_assets.modal_assets')

@section('content')
    <div class="container-xl px-4 mt-2">
        <div class="row">
            <div class="col-span-12 xl:col-span-8 rounded-lg">

                <div class="mb-4 rounded-lg bg-white shadow">
                    <div class="bg-gradient-to-r from-red-500 via-orange-500 to-yellow-500 text-white p-4 rounded-t-lg">
                        Data Assets (ข้อมูลสินทรัพย์)
                    </div>

                    <div class="p-6">
                        <div class="flex flex-wrap justify-between">
                            <div class="flex flex-col items-center mx-2 mb-4">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#DataAssetsModal"
                                    class="flex flex-col items-center transform transition hover:scale-110">
                                    <img class="rounded-full w-20 h-20 mb-2 shadow-lg" src="{{ asset('images/track.png') }}"
                                        alt="Profile Image" title="ใช้ทรัพย์จากบันทึกติดตาม">
                                    <div class="text-center mt-3">บันทึกติดตาม</div>
                                </a>
                            </div>

                            <div class="flex flex-col items-center mx-2 mb-4">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#DataAssetsModal"
                                    class="flex flex-col items-center transform transition hover:scale-110">
                                    <img class="rounded-full w-20 h-20 mb-2 shadow-lg" src="{{ asset('images/car.png') }}"
                                        alt="Profile Image" title="รถยนต์">
                                    <div class="text-center mt-3">รถยนต์</div>
                                </a>
                            </div>

                            <div class="flex flex-col items-center mx-2 mb-4">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#DataAssetsModal"
                                    class="flex flex-col items-center transform transition hover:scale-110">
                                    <img class="rounded-full w-20 h-20 mb-2 shadow-lg" src="{{ asset('images/motor.png') }}"
                                        alt="Profile Image" title="มอเตอร์ไซค์">
                                    <div class="text-center mt-3">มอเตอร์ไซค์</div>
                                </a>
                            </div>

                            <div class="flex flex-col items-center mx-2 mb-4">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#DataAssetsModal"
                                    class="flex flex-col items-center transform transition hover:scale-110">
                                    <img class="rounded-full w-20 h-20 mb-2 shadow-lg" src="{{ asset('images/land.png') }}"
                                        alt="Profile Image" title="ที่ดิน">
                                    <div class="text-center mt-3">ที่ดิน</div>
                                </a>
                            </div>

                            <div class="flex flex-col items-center mx-2 mb-4">

                                <a href="#" data-bs-toggle="modal" data-bs-target="#DataAssetsModal"
                                    class="flex flex-col items-center transform transition hover:scale-110">
                                    <img class="rounded-full w-20 h-20 mb-2 shadow-lg"
                                        src="{{ asset('images/certificate.png') }}" alt="Profile Image"
                                        title="ย้ายการครอบครอง">
                                    <div class="text-center mt-3">ย้ายการครอบครอง</div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


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

    <!----------------------------------------------------------------------------------------------------------------------------------->


    {{-- CDN --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">

    <!-- Flatpickr CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/th.js"></script>

    <script>
        flatpickr("#date", {
            locale: "th",
            enableTime: true,
            dateFormat: "d/m/Y H:i"
        });
    </script>


@endsection
