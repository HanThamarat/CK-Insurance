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
                        href="{{ route('data_assets.index', ['customer_id' => $customer->id]) }}">
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

                @include('components.content-cus.profile_customer')


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
