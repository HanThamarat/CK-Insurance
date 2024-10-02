@extends('layouts.app')

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

        <!-- Tabs Container -->
        <div class="w-full sm:w-2/3 lg:w-3/4 xl:w-4/5 ">
            @include('components.content-cus.tab-detail-cus')
        </div>
    </div>



<!-- Preloader -->
<div id="preloader">
    <div class="spinner"></div>
</div>

<style>
    /* Preloader */
    #preloader {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
    }

    .spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 40px;
    height: 40px;
    margin: -20px 0 0 -20px;
    border: 4px solid #ff8e25;
    border-top: 4px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    }

    @keyframes spin {
    100% {
        transform: rotate(360deg);
    }
    }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(window).on('load', function() {
    $('#preloader').fadeOut('slow', function() {
      $(this).remove();
    });
  });
</script>

@endsection
