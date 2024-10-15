@extends('layouts.app')
{{-- @extends('components.content-cus.Modal-Edit-Cus') --}}

<!-- เพิ่ม jQuery CDN ก่อนสคริปต์ของคุณ -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@section('content')
    {{-- @include('components.content-cus.script-cus') --}}
    @include('components.content-cus.component_js')
    @include('components.content-cus.component_css')
    <div class="max-w-7xl mx-auto p-5 bg-white rounded-lg shadow-md flex justify-center items-center mb-[100px]">
        <div class="flex flex-col xl:flex-row gap-8 p-2">
            <!-- Left Section: Card -->
            <div class="xl:w-2/12 lg:w-3/12 md:w-3/12 w-full">
                <div class="card rounded-lg text-center h-full"
                    style="background-image: url('{{ asset('img/theme3.jpg') }}'); background-size: cover;
                background-position: center;">
                    <div class="card-body h-full pt-6 pb-10">
                        <h5
                            class="font-bold mt-4 mb-5 rounded-lg px-5 py-2 text-center bg-white text-orange-500
                                transition-transform duration-300 ease-in-out hover:scale-105 mx-4">
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

                    <div class="flex items-center space-x-3">
                        <img src="https://ckl.co.th/assets/images/gif/video-confer.gif" alt="report" class="avatar-sm"
                            style="width:50px;height:50px">
                        <div class="flex-grow">
                            <h5 class="text-orange-400 font-semibold">เพิ่มข้อมูลลูกค้า</h5>
                            <p class="text-muted font-semibold text-sm mt-1">Add Data Customers</p>
                            <div class="border-b-2 border-primary mt-2 w-full"></div>
                        </div>
                    </div>
                <form id="formCustomer" class="space-y-6">

                    @csrf <!-- เพิ่มบรรทัดนี้ -->

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Left Column -->
                        <div class="space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Prefix Dropdown -->
                                <div class="relative">
                                    <select id="prefix" name="prefix" onfocus="moveLabel('prefix')" onblur="checkInput('prefix')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                        required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
                                        <option value="">คำนำหน้า</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                    <label for="prefix"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                         คำนำหน้า
                                    </label>

                                </div>

                                <div class="relative">
                                    <input type="text" id="first_name" name="first_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('first_name')" onblur="checkInput('first_name')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="first_name"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                         ชื่อจริง
                                    </label>

                                    <i class="fa-solid fa-user absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>



                                <div class="relative">
                                    <input type="text" id="last_name" name="last_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300 input-field"
                                        placeholder=" " required onfocus="moveLabel('last_name')" onblur="checkInput('last_name')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกนามสกุล')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="last_name"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all input-label">
                                         นามสกุล
                                    </label>

                                    <i class="fa-solid fa-user absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>



                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                <div class="relative">
                                    <input type="text" id="phone" name="phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('phone')" onblur="checkInput('phone')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทรศัพท์')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="phone"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เบอร์โทรติดต่อ 1
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>



                                <div class="relative">
                                    <input type="text" id="phone2" name="phone2"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('phone2')" onblur="checkInput('phone2')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทรติดต่อ 2')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="phone2"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เบอร์โทรติดต่อ 2
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <input type="text" id="id_card_number" name="id_card_number"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('id_card_number')"
                                        onblur="checkInput('id_card_number')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกหมายเลขบัตรประชาชน')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="id_card_number"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        หมายเลขบัตรประชาชน
                                    </label>

                                    <i class="fa-solid fa-credit-card absolute right-3 top-2 text-sm"></i>
                                </div>




                                <div class="relative">
                                    <input type="text" id="expiry_date" name="expiry_date"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('expiry_date')"
                                        onblur="checkInput('expiry_date')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกบัตรหมดอายุ')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="expiry_date"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        บัตรหมดอายุ
                                    </label>

                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="relative">
                                    <input type="text" id="dob" name="dob"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('dob')" onblur="checkInput('dob')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกวันออกบัตร')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="dob"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        วันออกบัตร
                                    </label>

                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>


                                <div class="relative">
                                    <input type="text" id="age" name="age" readonly
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-12 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required>
                                    <label for="age"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-3 peer-focus:text-orange-600 peer-focus:bg-white px-2 rounded-full shadow-md">
                                        อายุ
                                    </label>
                                    <span
                                        class="absolute right-3 top-2/4 -translate-y-2/4 bg-white px-2 text-gray-500 text-sm">ปี</span>
                                </div>


                                <!-- Gender Dropdown -->
                                {{-- <div class="relative">
                                    <select id="gender" name="gender"
                                        class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value=""> -----เพศ----- </option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>
                                </div> --}}

                                <div class="relative">
                                    <select id="gender" name="gender" onfocus="moveLabel('gender')" onblur="checkInput('gender')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">เพศ</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>

                                    <label for="gender"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เพศ
                                    </label>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                <!-- Nationality Dropdown -->
                                {{-- <div class="relative">
                                    <select id="nationality" name="nationality"
                                        class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value="">สัญชาติ</option>
                                        <option value="ไทย">ไทย</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div> --}}

                                <div class="relative">
                                    <select id="nationality" name="nationality" onfocus="moveLabel_nationality()" onblur="checkInput_nationality()"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">สัญชาติ</option>
                                        <option value="ไทย">ไทย</option>
                                    </select>

                                    <label for="nationality"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        สัญชาติ
                                    </label>
                                </div>


                                <div class="relative">
                                    <select id="religion" name="religion" onfocus="moveLabel('religion')" onblur="checkInput('religion')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">ศาสนา</option>
                                        <option value="พุทธ">พุทธ</option>
                                        <option value="คริสต์">คริสต์</option>
                                        <option value="อิสลาม">อิสลาม</option>
                                    </select>

                                    <label for="religion"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ศาสนา
                                    </label>
                                </div>


                                <div class="relative">
                                    <select id="driving_license" name="driving_license" onfocus="moveLabel('driving_license')" onblur="checkInput('driving_license')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">ใบขับขี่</option>
                                        <option value="Yes">มี</option>
                                        <option value="No">ไม่มี</option>
                                    </select>

                                    <label for="driving_license"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ใบขับขี่
                                    </label>
                                </div>


                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <div class="relative">
                                    <input type="text" id="facebook" name="facebook"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('facebook')"
                                        onblur="checkInput('facebook')"
                                        oninvalid="this.setCustomValidity('กรุณากรอก Facebook')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="facebook"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        Facebook
                                    </label>
                                    <i class="fa-brands fa-facebook absolute right-3 top-3 text-blue-700 text-md"></i>
                                </div>

                                <div class="relative">
                                    <input type="text" id="line_id" name="line_id"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('line_id')"
                                        onblur="checkInput('line_id')"
                                        oninvalid="this.setCustomValidity('กรุณากรอก Line ID')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="line_id"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        Line ID
                                    </label>
                                    <i class="fa-brands fa-line absolute right-3 top-3 text-green-600 text-md"></i>
                                </div>

                                {{-- <div class="relative">
                                    <input type="text" id="occupation" name="occupation"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel_occupation()"
                                        onblur="checkInput_occupation()"
                                        oninvalid="this.setCustomValidity('กรุณากรอก Line ID')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="occupation"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        อาชีพ
                                    </label>
                                </div> --}}


                            </div>



                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div class="relative">
                                <select id="marital_status" name="marital_status" onfocus="moveLabel('marital_status')" onblur="checkInput('marital_status')"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <option value="">สถานะสมรส</option>
                                    <option value="โสด">โสด</option>
                                    <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                                    <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                                    <option value="หย่าร้าง">หย่าร้าง</option>
                                    <option value="หม้าย">หม้าย</option>
                                </select>

                                <label for="marital_status"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    สถานะสมรส
                                </label>
                            </div>

                            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Prefix Dropdown -->


                                <div class="relative">
                                    <input type="text" id="district" name="district"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel_district()" onblur="checkInput_district()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="district"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ที่อยู่ (ตำบล)
                                    </label>
                                </div>



                                <div class="relative">
                                    <input type="text" id="amphor" name="amphor"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300 input-field"
                                        placeholder=" " required onfocus="moveLabel_amphor()" onblur="checkInput_amphor()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกนามสกุล')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="amphor"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all input-label">
                                        ที่อยู่ (อำเภอ)
                                    </label>
                                </div>


                                <div class="relative">
                                    <input type="text" id="province" name="province"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300 input-field"
                                        placeholder=" " required onfocus="moveLabel_province()" onblur="checkInput_province()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกนามสกุล')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="province"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all input-label">
                                        ที่อยู่ (จังหวัด)
                                    </label>
                                </div>
                            </div> --}}



                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <div class="relative">
                                    <input type="text" id="spouse_name" name="spouse_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " onfocus="moveLabel('spouse_name')"
                                        onblur="checkInput('spouse_name')">
                                    <label for="spouse_name"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ชื่อนามสกุลคู่สมรส
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="spouse_phone" name="spouse_phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " onfocus="moveLabel('spouse_phone')"
                                        onblur="checkInput('spouse_phone')">
                                    <label for="spouse_phone"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เบอร์โทรคู่สมรส
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>


                            <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                                <textarea id="note" name="note" rows="6"
                                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('note')" onblur="checkInput('note')"></textarea>
                                <label for="note"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หมายเหตุ
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                            <i class="fas fa-user-plus"></i> สร้างลูกค้าใหม่
                        </button>
                    </div>

                </form>





                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    $('#formCustomer').on('submit', function(e) {
                        e.preventDefault(); // ป้องกันการ submit ฟอร์มแบบปกติ

                        // ตรวจสอบค่าข้อมูล (validation)
                        let errors = [];
                        if (!$('#prefix').val()) errors.push('กรุณาเลือกคำนำหน้าชื่อ');
                        if (!$('#first_name').val()) errors.push('กรุณากรอกชื่อ');
                        if (!$('#last_name').val()) errors.push('กรุณากรอกนามสกุล');
                        if (!$('#phone').val()) errors.push('กรุณากรอกเบอร์โทรศัพท์');
                        if (!$('#id_card_number').val()) errors.push('กรุณากรอกหมายเลขบัตรประชาชน');
                        if (!$('#expiry_date').val()) errors.push('กรุณากรอกวันหมดอายุบัตรประชาชน');
                        if (!$('#dob').val()) errors.push('กรุณากรอกวันเกิด');
                        if (!$('#age').val()) errors.push('กรุณากรอกอายุ');
                        if (!$('#gender').val()) errors.push('กรุณาเลือกเพศ');
                        if (!$('#nationality').val()) errors.push('กรุณากรอกสัญชาติ');
                        if (!$('#religion').val()) errors.push('กรุณากรอกศาสนา');
                        if (!$('#driving_license').val()) errors.push('กรุณากรอกใบขับขี่');
                        if (!$('#facebook').val()) errors.push('กรุณากรอก Facebook');
                        if (!$('#line_id').val()) errors.push('กรุณากรอก Line ID');
                        // if (!$('#marital_status').val()) errors.push('กรุณาเลือกสถานภาพสมรส');
                        // if (!$('#spouse_phone').val()) errors.push('กรุณากรอกเบอร์โทรศัพท์ของคู่สมรส');

                        if (errors.length > 0) {
                            Swal.fire({
                                title: 'เกิดข้อผิดพลาด!',
                                html: errors.join(', '),
                                icon: 'error',
                                confirmButtonText: 'ตกลง',
                                timer: 3000,
                                timerProgressBar: true,
                                willClose: () => {
                                    $('.swal2-container').fadeOut(1000);
                                }
                            });
                            return; // หยุดการส่งฟอร์ม
                        }

                        // ถ้าไม่มีข้อผิดพลาด ให้ส่งฟอร์มผ่าน Ajax
                        $.ajax({
                            url: '{{ route('customers.store') }}',
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
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload(); // รีเฟรชหน้าเว็บเมื่อกดปุ่ม 'ตกลง'
                                        }
                                    });
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


    @include('components.content-cus.preloader')
    {{-- @include('components.content-layout.index') --}}
    {{-- @include('data_customers.index') --}}
@endsection
