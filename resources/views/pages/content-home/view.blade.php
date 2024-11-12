@extends('layouts.app')

<!-- เพิ่ม jQuery CDN ก่อนสคริปต์ของคุณ -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

@extends('pages.content-home.flower_effect')


@section('content')
    <div class="w-full h-[60vh] flex items-center justify-center">
        <div>
            <div>
                <img src="{{ URL::asset('assets/images/svg/home-screen.svg') }}" class="w-[300px]" alt="">
            </div>
            <div class="w-full flex justify-center text-[20px] mt-5 font-primaryMedium">
                <span class="text-red-500">Welcome to Insurance <span class="text-orange-500">Management System.</span></span>
            </div>

            <div class="clock flex flex-col gap-y-4 font-primaryMedium text-[18px] text-gray-50 mt-3" id="clock2">
                <div class="text-center bg-orange-300 px-1 py-2 rounded-lg">
                    <div data-value="date"></div>
                </div>
                <div class="flex gap-x-2 items-center">
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg w-full">
                        <div data-value="hours"></div>
                        <div>ชั่วโมง</div>
                    </div>
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg w-full">
                        <div data-value="minutes"></div>
                        <div>นาที</div>
                    </div>
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg w-full">
                        <div data-value="seconds"></div>
                        <div>วินาที</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('pages.content-home.script')
@endsection


            {{-- <div class="w-full justify-center flex my-5">
                <div class="clock hidden" id="clock1">
                    <div data-value="days"></div>
                    <div data-value="hours"></div>
                    <div data-value="minutes"></div>
                    <div data-value="seconds"></div>
                </div>
                <div class="clock flex gap-x-2 font-primaryMedium text-[18px] text-gray-50" id="clock2">
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg">
                        <div data-value="years"></div>
                        <div>Years</div>
                    </div>
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg">
                        <div data-value="days"></div>
                        <div>Days</div>
                    </div>
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg">
                        <div data-value="hours"></div>
                        <div>Hours</div>
                    </div>
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg">
                        <div data-value="minutes"></div>
                        <div>Minutes</div>
                    </div>
                    <div class="text-center bg-orange-300 px-4 py-2 rounded-lg">
                        <div data-value="seconds"></div>
                        <div>Seconds</div>
                    </div>
                </div>
            </div> --}}


