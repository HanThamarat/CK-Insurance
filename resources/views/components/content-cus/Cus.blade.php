@extends('layouts.app')


@section('content')
    @include('components.content-cus.script-cus')
    <div class="max-w-7xl mx-auto p-5 bg-white rounded-lg shadow-md flex justify-center items-center mb-[100px]">
        <div class="flex flex-col xl:flex-row gap-8 p-2">
            <!-- Left Section: Card -->
            <div class="xl:w-2/12 lg:w-3/12 md:w-3/12 w-full">
                <div class="card rounded-lg text-center h-full"
                    style="background-image: url('{{ asset('img/Insurance_picture5.jpg') }}'); background-size: cover;
                background-position: center;">
                    <div class="card-body h-full pt-6 pb-10">
                        <h5
                            class="font-bold mt-4 mb-5 rounded-lg px-5 py-2 text-center bg-white text-orange-500 hover:scale-105 mx-4">
                            ลูกค้าใหม่
                        </h5>

                        <div class="hidden sm:flex justify-center pt-10">
                            <div class="w-32 h-32">
                                <img id="ImageBrok" src="{{ asset('img/user.png') }}"
                                    class="img-thumbnail rounded-full border-2 hover:scale-105 transition-transform duration-300 shadow-xl hover:shadow-2xl"
                                    alt="User-Profile-Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section: Form -->
            <div class="xl:w-10/12 lg:w-9/12 md:w-9/12 w-full">
                {{-- <form action="{{ route('customers.store') }}" method="POST" class="space-y-6">
                    @csrf --}}
                <form id="formCustomer" class="space-y-6">
                    @csrf  <!-- เพิ่มบรรทัดนี้ -->

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Left Column -->
                        <div class="space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Prefix Dropdown -->
                                <div class="relative">
                                    <select id="prefix" name="prefix"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value=""> - คำนำหน้า - </option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>
                                </div>
                                <!-- First Name -->
                                <div class="relative">
                                    <input type="text" id="first_name" name="first_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="first_name"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        ชื่อจริง
                                    </label>
                                </div>
                                <!-- Last Name -->
                                <div class="relative">
                                    <input type="text" id="last_name" name="last_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="last_name"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        นามสกุล
                                    </label>
                                </div>
                            </div>



                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Phone Number 1 -->
                                <div class="relative">
                                    <input type="text" id="phone" name="phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="phone"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        เบอร์โทรติดต่อ 1
                                    </label>
                                </div>

                                <!-- Phone Number 2 -->
                                <div class="relative">
                                    <input type="text" id="phone2" name="phone2"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="phone2"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        เบอร์โทรติดต่อ 2
                                    </label>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Card Number with Icon -->
                                <div class="relative">
                                    <input type="text" id="id_card_number" name="id_card_number"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="id_card_number"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        หมายเลขบัตร
                                    </label>

                                    <i class="fa-solid fa-credit-card absolute right-3 top-2 text-sm"></i>
                                </div>

                                <!-- Expiry Date with Icon -->
                                <div class="relative">
                                    <input type="text" id="expiry_date" name="expiry_date" readonly
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="expiry_date"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        บัตรหมดอายุ
                                    </label>
                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Date of Birth with Icon -->
                                <div class="relative">
                                    <input type="text" id="dob" name="dob"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="dob"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        วันเดือนปีเกิด
                                    </label>
                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>

                                <!-- Age with Suffix -->
                                <div class="relative">
                                    <input type="text" id="age" name="age" readonly
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-12 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="age"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        อายุ
                                    </label>
                                    <span
                                        class="absolute right-3 top-2/4 -translate-y-2/4 bg-white px-2 text-gray-500 text-sm">ปี</span>
                                </div>

                                <!-- Gender Dropdown -->
                                <div class="relative">
                                    <select id="gender" name="gender"
                                        class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value=""> -----เพศ----- </option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>

                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                <!-- Nationality Dropdown -->
                                <div class="relative">
                                    <select id="nationality" name="nationality"
                                        class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value="">สัญชาติ</option>
                                        <option value="ไทย">ไทย</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>

                                <!-- Religion Dropdown -->
                                <div class="relative">
                                    <select id="religion" name="religion"
                                        class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value="">ศาสนา</option>
                                        <option value="พุทธ">พุทธ</option>
                                        <option value="คริสต์">คริสต์</option>
                                        <option value="อิสลาม">อิสลาม</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>

                                <!-- Driving License Dropdown -->
                                <div class="relative">
                                    <select id="driving_license" name="driving_license"
                                        class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value="">ใบขับขี่</option>
                                        <option value="Yes">มี</option>
                                        <option value="No">ไม่มี</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <!-- Facebook Input with Icon -->
                                <div class="relative">
                                    <input type="text" id="facebook" name="facebook"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="facebook"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        Facebook
                                    </label>
                                    <i class="fa-brands fa-facebook absolute right-3 top-3 text-blue-700 text-md"></i>
                                </div>

                                <!-- Line ID Input with Icon -->
                                <div class="relative">
                                    <input type="text" id="line_id" name="line_id"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="line_id"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        Line ID
                                    </label>
                                    <i class="fa-brands fa-line absolute right-3 top-3 text-green-600 text-md"></i>
                                </div>
                            </div>

                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <select id="marital_status" name="marital_status"
                                class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                <option value=""> ----- สถานะสมรส ----- </option>
                                <option value="โสด">โสด</option>
                                <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                                <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                                <option value="หย่าร้าง">หย่าร้าง</option>
                                <option value="หม้าย">หม้าย</option>
                            </select>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <!-- Spouse Name Input with Label -->
                                <div class="relative">
                                    <input type="text" id="spouse_name" name="spouse_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="spouse_name"
                                        class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        ชื่อนามสกุลคู่สมรส
                                    </label>
                                </div>

                                <!-- Spouse Phone Input with Icon and Label -->
                                <div class="relative">
                                    <input type="text" id="spouse_phone" name="spouse_phone"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" ">
                                    <label for="spouse_phone"
                                        class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        เบอร์โทรคู่สมรส
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>

                            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <select id="zone" name="zone"
                                    class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                    <option value="" disabled selected>เลือกโซน</option>
                                    <option value="pattani">(10)-ปัตตานี</option>
                                    <option value="hat_yai">(20)-หาดใหญ่</option>
                                    <option value="nakhon">(30)-นคร</option>
                                    <option value="krabi">(40)-กระบี่</option>
                                    <option value="surat">(50)-สุราษฎร์ธานี</option>
                                </select>
                                <select id="branch" name="branch"
                                    class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                    <option value="" disabled selected>เลือกสาขา</option>
                                    <!-- เพิ่มตัวเลือกสาขาที่นี่ -->
                                    <option value="branch1">สาขา 1</option>
                                    <option value="branch2">สาขา 2</option>
                                    <option value="branch3">สาขา 3</option>
                                    <option value="branch4">สาขา 4</option>
                                    <option value="branch5">สาขา 5</option>
                                </select>
                            </div> --}}
                            <div class="relative pt-10"> <!-- ปรับ pt ตามต้องการ -->
                                <textarea id="note" name="note" rows="4"
                                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                    placeholder=" "></textarea>
                                <label for="note"
                                    class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-10 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-2 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                    หมายเหตุ
                                </label>
                            </div>


                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm">
                            สร้างลูกค้าใหม่
                        </button>
                    </div>
                </form>





                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    $('#formCustomer').on('submit', function(e) {
                        e.preventDefault(); // ป้องกันการ submit ฟอร์มแบบปกติ

                        $.ajax({
                            url: '{{ route("customers.store") }}',
                            type: 'POST',
                            data: $(this).serialize(),
                            dataType: 'json',
                            success: function(response) {
                                console.log(response); // ตรวจสอบการตอบกลับจากเซิร์ฟเวอร์
                                if (response.success) {
                                    Swal.fire({
                                        title: 'สำเร็จ!',
                                        text: response.message,
                                        icon: 'success',
                                        confirmButtonText: 'ตกลง'
                                    });

                                    // ล้างข้อมูลในฟอร์ม
                                    $('#formCustomer')[0].reset();
                                } else {
                                    Swal.fire({
                                        title: 'เกิดข้อผิดพลาด!',
                                        text: 'มีบางอย่างผิดพลาด กรุณาลองใหม่',
                                        icon: 'error',
                                        confirmButtonText: 'ตกลง'
                                    });
                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText); // ตรวจสอบข้อมูลข้อผิดพลาดในคอนโซล
                                let errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                    Swal.fire({
                                        title: 'ข้อผิดพลาด!',
                                        text: value[0],
                                        icon: 'error',
                                        confirmButtonText: 'ตกลง'
                                    });
                                });
                            }
                        });
                    });
                </script>



            </div>
        </div>
    </div>
@endsection

