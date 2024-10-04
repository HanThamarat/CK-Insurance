@section('content')
    @extends('layouts.app')
    @extends('data_assets.modal_car')
    @include('preloader')

    {{--  Data Assets Component--}}
    @include('data_assets.component_css')
    @include('data_assets.component_js')
    @include('data_assets.component_type')
    @include('data_assets.component_brand')
    @include('data_assets.component_year')
    @include('data_assets.component_group')
    @include('data_assets.component_model')

    <div class="container-xl px-4 mt-2">
        <div class="row">
            <div class="col-span-12 xl:col-span-8 rounded-lg">

                <div class="flex flex-col sm:flex-row ml-10 mt-5 space-y-4 sm:space-y-0 sm:space-x-4 mb-[100px]">
                    <!-- Left Card -->
                    <div
                        class="flex-none rounded-lg shadow-2xl dark:bg-white dark:border-gray-400 p-6 w-full sm:w-1/3 md:w-1/4 lg:w-2/7 xl:w-2/7 relative">
                        <!-- Layer สำหรับพื้นหลังที่มี opacity (สำหรับการ์ดอื่น) -->
                        <div class="absolute inset-0 bg-cover bg-center rounded-lg"
                            style="background-image: url('{{ asset('img/Insurance_picture5.jpg') }}'); opacity: 0.5; z-index: 0;"></div>

                        <!-- เนื้อหาของการ์ด -->
                        <div class="relative z-10 flex flex-col items-center pb-10">
                            <div class="w-32 h-32 bg-gray-200 p-1 rounded-full">
                                <img id="ImageBrok" src="{{ asset('img/user.png') }}"
                                    class="img-thumbnail rounded-full border-2 hover:scale-105 transition-transform duration-300 shadow-xl hover:shadow-2xl"
                                    alt="User-Profile-Image">
                            </div>
                            <span
                                class="mt-2 text-md text-red-500 dark:text-orange-500 bg-white px-10 py-2 rounded-full transition-transform transform hover:scale-105 hover:bg-red-100 hover:text-red-700">
                                Status
                            </span>

                            <div class="flex justify-center space-x-4 mt-2">
                                <a class="nav-link active flex flex-col items-center transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg" href="{{ route('customers.profile') }}">
                                    <span class="block sm:hidden"><i class="fas fa-home"></i></span>
                                    <div class="hidden sm:block flex-grow">
                                        <div class="flex flex-col justify-center space-y-2">
                                            <div class="flex-shrink-0 self-center">
                                                <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true" aria-label="ข้อมูลลูกค้า"></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-orange-500 text-center text-white rounded-full px-2 flex items-center justify-center">
                                                    <i class="fas fa-user-circle mr-1"></i>
                                                    ลูกค้า
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="nav-link active flex flex-col items-center transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg" href="{{ route('data_assets.index') }}">
                                    <span class="block sm:hidden"><i class="far fa-user"></i></span>
                                    <div class="hidden sm:block flex-grow">
                                        <div class="flex flex-col justify-center space-y-2">
                                            <div class="flex-shrink-0 self-center">
                                                <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true" aria-label="ข้อมูลทรัพย์สิน"></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-orange-500 text-center text-white rounded-full px-3 flex items-center justify-center">
                                                    <i class="fas fa-archive mr-1"></i>
                                                    ทรัพย์สิน
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>


                        </div>






                        <!-- การ์ดสำหรับ Personal Information -->
                        <div class="card bg-white shadow-lg rounded-md p-4 relative z-5">
                            <h2 class="text-sm font-bold mb-4 text-gray-500">Personal Information</h2>
                            <!-- ชื่อ-นามสกุล -->
                            <div class="mb-6">
                                <div class="flex items-center mb-2">
                                    <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                                    <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
                                </div>
                                <div class="ml-8 text-gray-400 text-sm">
                                    {{ 'นาย เทวฤทธิ์ โต๊ะหลี' }}
                                </div>
                            </div>

                            <!-- เลขประจำตัวประชาชน -->
                            <div class="mb-6">
                                <div class="flex items-center mb-2">
                                    <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                                    <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
                                </div>
                                <div class="ml-8 text-gray-400 text-sm">
                                    {{ '1234567890123' }}
                                </div>
                            </div>

                            <!-- เบอร์ติดต่อ -->
                            <div class="mb-6">
                                <div class="flex items-center mb-2">
                                    <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                                    <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
                                </div>
                                <div class="ml-8 text-gray-400 text-sm">
                                    {{ '099 004 5246' }}
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
                                    {{ '23-09-2001' }}
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
                        </div>
                    </div>

                    <!-- Cards for รถยนต์ and มอเตอร์ไซค์ -->
                    <div class="flex flex-col md:flex-row md:justify-center gap-4 w-full h-3/4">
                        <!-- การ์ดรถยนต์ -->
                        <a href="#" class="m-4 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:w-1/2 lg:w-2/3" data-bs-toggle="modal" data-bs-target="#DataAssetsModal" data-type="รถยนต์" onclick="setAssetType(this)">
                            <img class="object-cover w-full rounded-t-lg h-72 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('images/car.png') }}" alt="รถยนต์">
                            <div class="flex flex-col justify-between p-6 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">รถยนต์</h5>
                            </div>
                        </a>

                        <!-- การ์ดมอเตอร์ไซค์ -->
                        <a href="#" class="m-4 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:w-1/2 lg:w-2/3" data-bs-toggle="modal" data-bs-target="#DataAssetsModal" data-type="มอเตอร์ไซค์" onclick="setAssetType(this)">
                            <img class="object-cover w-full rounded-t-lg h-72 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('images/motor.png') }}" alt="มอเตอร์ไซค์">
                            <div class="flex flex-col justify-between p-6 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">มอเตอร์ไซค์</h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div id="preloader" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="loader"></div>
    </div>



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
