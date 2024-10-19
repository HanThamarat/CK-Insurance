@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
            {{-- <h2 class="text-xl font-semibold mb-4 text-center">ข้อมูลผู้ใช้งานระบบ</h2> --}}
            <div id="modalHeader" class="bg-white sticky top-0 z-10 p-5 w-full transition-shadow duration-300">
                <h2 class="text-lg font-bold mb-3 flex justify-between items-center">
                    ข้อมูลผู้ใช้งานระบบ
                </h2>

                <div class="flex items-center mb-0">
                    <div class="flex-shrink-0 mr-4">
                        <img src="{{ asset('img/icon_cus.gif') }}" alt="report" class="w-12 h-12">
                    </div>
                    <div class="flex-grow">
                        <h5 class="text-primary font-semibold">ข้อมูลผู้ใช้งานระบบ</h5>
                        <p class="text-gray-500 -mt-1 font-semibold text-xs">( Data Users informations )</p>
                        <p class="border-b border-primary mt-2"></p>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm" id="customersTable">
                    <thead class="bg-gray-100 sticky top-0 text-center">
                        <tr>
                            <th scope="col" class="px-4 py-2 w-1/6">ID</th>
                            <th scope="col" class="px-4 py-2 w-1/6">ชื่อ - สกุล</th>
                            <th scope="col" class="px-4 py-2 w-1/6">ชื่อผู้ใช้</th>
                            <th scope="col" class="px-4 py-2 w-1/6">อีเมล</th>
                            <th scope="col" class="px-4 py-2 w-1/6">หมายเลขโทรศัพท์</th>
                            <th scope="col" class="px-4 py-2 w-1/6">สถานะ</th>
                            <th scope="col" class="px-4 py-2 w-1/6">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- ข้อมูลลูกค้าจะถูกแสดงที่นี่ -->
                    </tbody>
                </table>

                <div id="noResultsMessage" style="display:none;" class="space-y-3 p-12">
                    <div role="alert"
                        class="bg-yellow-100 dark:bg-yellow-900 border-l-4 border-yellow-500 dark:border-yellow-700 text-yellow-900 dark:text-yellow-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-yellow-200 dark:hover:bg-yellow-800 transform hover:scale-105">
                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                            class="h-5 w-5 flex-shrink-0 mr-2 text-yellow-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"
                                stroke-linejoin="round" stroke-linecap="round">
                            </path>
                        </svg>
                        <p class="text-xs font-semibold">
                            ไม่พบข้อมูลที่กำลังค้นหา
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

