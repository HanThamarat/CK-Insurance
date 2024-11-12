@extends('layouts.app')

<!-- เพิ่ม jQuery CDN ก่อนสคริปต์ของคุณ -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@extends('components.content-cus.Modal-Edit-Cus')

@section('content')
    <div class="flex flex-col sm:flex-row ml-10 mt-5 space-y-4 sm:space-y-0 sm:space-x-4 mb-[100px]">
        <!-- Left Card -->
        <div
            class="flex-none rounded-lg shadow-2xl dark:bg-white dark:border-gray-400 p-6 w-full sm:w-1/3 md:w-1/4 lg:w-2/7 xl:w-2/7 relative">
            <!-- Layer สำหรับพื้นหลังที่มี opacity (สำหรับการ์ดอื่น) -->
            {{-- <div class="absolute inset-0 bg-cover bg-center rounded-lg" style="background-image: url('{{ asset('img/Insurance_picture5.jpg') }}'); opacity: 0.2; z-index: 0;"></div> --}}

            <div class="absolute inset-0 bg-cover bg-center rounded-lg"
                style="background-image: url('{{ asset('img/Insurance_picture5.jpg') }}');
                        opacity: 0.2;
                        height: 400px; /* กำหนดความสูงคงที่ */
                        z-index: 0;">
            </div>


            <!-- เนื้อหาของการ์ด -->
            <div class="relative z-10 flex flex-col items-center pb-10">
                <div class="w-32 h-32 bg-gray-200 p-1 rounded-full">
                    <img id="ImageBrok" src="{{ asset('img/user.png') }}"
                        class="img-thumbnail rounded-full border-2 hover:scale-105 transition-transform duration-300 shadow-xl hover:shadow-2xl"
                        alt="User-Profile-Image">
                </div>

                <div class="group relative flex justify-center items-center text-zinc-600 text-sm font-bold">
                    <div
                        class="absolute opacity-0 group-hover:opacity-100 group-hover:-translate-y-[150%] -translate-y-[300%] duration-500 group-hover:delay-500 skew-y-[20deg] group-hover:skew-y-0 shadow-md">
                        <div class="bg-lime-200 flex items-center gap-1 p-2 rounded-md">
                            <svg fill="none" viewBox="0 0 24 24" height="20px" width="20px"
                                xmlns="http://www.w3.org/2000/svg" class="stroke-zinc-600">
                                <circle stroke-linejoin="round" r="9" cy="12" cx="12"></circle>
                                <path stroke-linejoin="round" d="M12 3C12 3 8.5 6 8.5 12C8.5 18 12 21 12 21"></path>
                                <path stroke-linejoin="round" d="M12 3C12 3 15.5 6 15.5 12C15.5 18 12 21 12 21"></path>
                                <path stroke-linejoin="round" d="M3 12H21"></path>
                                <path stroke-linejoin="round" d="M19.5 7.5H4.5"></path>
                                <g filter="url(#filter0_d_15_556)">
                                    <path stroke-linejoin="round" d="M19.5 16.5H4.5"></path>
                                </g>
                                <defs>
                                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="3"
                                        width="17" y="16" x="3.5" id="filter0_d_15_556">
                                        <feFlood result="BackgroundImageFix" flood-opacity="0"></feFlood>
                                        <feColorMatrix result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                            type="matrix" in="SourceAlpha"></feColorMatrix>
                                        <feOffset dy="1"></feOffset>
                                        <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" type="matrix">
                                        </feColorMatrix>
                                        <feBlend result="effect1_dropShadow_15_556" in2="BackgroundImageFix" mode="normal">
                                        </feBlend>
                                        <feBlend result="shape" in2="effect1_dropShadow_15_556" in="SourceGraphic"
                                            mode="normal"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            <span>{{ $customer->status_cus }}</span>
                        </div>
                        <div
                            class="shadow-md bg-lime-200 absolute bottom-0 translate-y-1/2 left-1/2 translate-x-full rotate-45 p-1">
                        </div>
                        <div
                            class="rounded-md bg-white group-hover:opacity-0 group-hover:scale-[115%] group-hover:delay-700 duration-500 w-full h-full absolute top-0 left-0">
                            <div
                                class="border-b border-r border-white bg-white absolute bottom-0 translate-y-1/2 left-1/2 translate-x-full rotate-45 p-1">
                            </div>
                        </div>
                    </div>

                    <div
                        class="shadow-md flex items-center group-hover:gap-2 bg-gradient-to-br from-lime-200 to-yellow-200 p-3 rounded-full cursor-pointer duration-300">
                        <svg fill="none" viewBox="0 0 24 24" height="16px" width="20px"
                            xmlns="http://www.w3.org/2000/svg" class="fill-zinc-600">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 12c3.315 0 6-2.685 6-6s-2.685-6-6-6-6 2.685-6 6 2.685 6 6 6zm0 2c-4.418 0-8 3.582-8 8v2h16v-2c0-4.418-3.582-8-8-8z">
                            </path>
                        </svg>
                        <span class="text-[0px] group-hover:text-sm duration-300">สถานะลูกค้า</span>
                    </div>
                </div>




                {{-- <span
                    class="mt-2 text-md text-red-500 dark:text-orange-500 bg-white px-10 py-2 rounded-full transition-transform transform hover:scale-105 hover:bg-green-100 hover:text-red-700">
                    Status
                </span> --}}



                <div class="flex justify-center space-x-4 mt-2">
                    <a class="nav-link edit-button active flex flex-col items-center transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg"
                        href="{{ route('customers.profile', ['id' => $customer->id]) }}" data-id="{{ $customer->id }}">
                        <!-- แก้ไขให้ใช้เครื่องหมาย $ เพื่อเข้าถึงตัวแปร -->
                        <span class="block sm:hidden"><i class="fas fa-home"></i></span>
                        <div class="hidden sm:block flex-grow">
                            <div class="flex flex-col justify-center space-y-2">
                                <div class="flex-shrink-0 self-center">
                                    <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true"
                                        aria-label="ข้อมูลลูกค้า"></div>
                                </div>
                                <div>
                                    <span
                                        class="badge bg-orange-500 text-center text-white rounded-full px-2 flex items-center justify-center">
                                        <i class="fas fa-user-circle mr-1"></i>
                                        ลูกค้า
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>


                    <a class="nav-link active flex flex-col items-center transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg"
                        href="{{ url('data_assets?customer_id=' . $customer->id) }}">
                        <!-- เพิ่ม customer_id ใน query parameter -->
                        <span class="block sm:hidden"><i class="far fa-user"></i></span>
                        <div class="hidden sm:block flex-grow">
                            <div class="flex flex-col justify-center space-y-2">
                                <div class="flex-shrink-0 self-center">
                                    <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true"
                                        aria-label="ข้อมูลทรัพย์สิน"></div>
                                </div>
                                <div>
                                    <span
                                        class="badge bg-orange-500 text-center text-white rounded-full px-3 flex items-center justify-center">
                                        <i class="fas fa-archive mr-1"></i>
                                        ทรัพย์สิน
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>



            <div class="card bg-white shadow-lg rounded-md p-4 relative z-5">
                <h2 class="text-sm font-bold mb-4 text-gray-500">Personal Information</h2>

                <div id="customer-info"></div>

            </div>

        </div>

        <!-- Tabs Container -->
        <div class="w-full sm:w-2/3 lg:w-3/4 xl:w-4/5 ">
            @include('components.content-cus.tab-detail-cus')
            {{-- @include('data_assets.index') --}}
        </div>
    </div>





    @include('components.content-cus.preloader')
    @include('components.content-cus.component_css')
@endsection



















{{-- @include('components.content-cus.profile_customer') --}}


{{-- <script>
                    $(document).on('click', '.nav-link', function(event) {
                        event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
                        let link = $(this).attr('href'); // ดึง URL จาก href
                        let id = $(this).data('id'); // ดึงค่า ID จาก data-id

                        // ทำการ redirect ไปยัง URL พร้อมกับส่งค่าด้วย query string
                        window.location.href = link + '?id=' + id;
                    });

                </script> --}}

{{-- <div class="flex justify-center space-x-4 mt-2">
                    <a class="nav-link active flex flex-col items-center" href="#data_user" role="tab" aria-selected="true">
                        <span class="block sm:hidden"><i class="fas fa-home"></i></span>
                        <div class="hidden sm:block flex-grow">
                            <div class="flex flex-col justify-center space-y-2">
                                <div class="flex-shrink-0 self-center">
                                    <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true" aria-label="ข้อมูลลูกค้า">
                                    </div>
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

                    <a class="nav-link active flex flex-col items-center" href="#data_asset" role="tab" aria-selected="true" data-loaded="false">
                        <span class="block sm:hidden"><i class="far fa-user"></i></span>
                        <div class="hidden sm:block flex-grow">
                            <div class="flex flex-col justify-center space-y-2">
                                <div class="flex-shrink-0 self-center">
                                    <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true" aria-label="ข้อมูลทรัพย์สิน">
                                    </div>
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
                </div> --}}

{{-- <div class="flex justify-center space-x-4 mt-2">
                    <a class="nav-link active flex flex-col items-center transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg" href="#data_user" role="tab" aria-selected="true">
                        <span class="block sm:hidden"><i class="fas fa-home"></i></span>
                        <div class="hidden sm:block flex-grow">
                            <div class="flex flex-col justify-center space-y-2">
                                <div class="flex-shrink-0 self-center">
                                    <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true" aria-label="ข้อมูลลูกค้า">
                                    </div>
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

                    <a class="nav-link active flex flex-col items-center transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg" href="#data_asset" role="tab" aria-selected="true" data-loaded="false">
                        <span class="block sm:hidden"><i class="far fa-user"></i></span>
                        <div class="hidden sm:block flex-grow">
                            <div class="flex flex-col justify-center space-y-2">
                                <div class="flex-shrink-0 self-center">
                                    <div class="mini-stat-icon avatar-xs rounded-full" data-tooltip="true" aria-label="ข้อมูลทรัพย์สิน">
                                    </div>
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
                </div> --}}

{{-- <div class="flex justify-center space-x-4 mt-2">
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

                </div> --}}
