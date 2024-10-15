@include('components.content-cus.component_js')


<!-- Modal Wrapper -->
<div id="Cus-modal-wrapper" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col">
            <!-- ปุ่มปิด modal -->
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2"
                style="background-color: white;">
                <button class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
                    onclick="hideModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="https://ckl.co.th/assets/images/gif/video-confer.gif" alt="report" class="avatar-sm"
                        style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">Edit Data Customers</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <!-- เนื้อหาของ modal -->
            <div class="p-2 mt-[-10]">
                <form id="formCustomer" class="space-y-6">
                    @csrf <!-- เพิ่มบรรทัดนี้ -->
                    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Left Column -->
                        <div class="space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Prefix Dropdown -->
                                <div class="relative">
                                    <select id="prefix" name="prefix"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-700">
                                        <option value="">{{ $customer->prefix }}</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>

                                    </select>
                                </div>

                                <div class="relative">
                                    <input type="text" id="first_name" name="first_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        value="{{ $customer->first_name }}">
                                </div>



                                <div class="relative">
                                    <input type="text" id="last_name" name="last_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300 input-field"
                                        value="{{ $customer->last_name }}">
                                </div>
                            </div>



                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                <div class="relative">
                                    <input type="text" id="phone" name="phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        value="{{ $customer->phone }}">
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>



                                <div class="relative">
                                    <input type="text" id="phone2" name="phone2"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        value="{{ $customer->phone2 }}">
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <input type="text" id="id_card_number" name="id_card_number"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        value="{{ $customer->id_card_number }}">
                                    <i class="fa-solid fa-credit-card absolute right-3 top-2 text-sm"></i>
                                </div>




                                <div class="relative">
                                    <input type="text" id="expiry_date" name="expiry_date"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        value="{{ $customer->expiry_date }}">
                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="relative">
                                    <input type="text" id="dob" name="dob"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required
                                        value="{{ $customer->dob }}">
                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>


                                <div class="relative">
                                    <input type="text" id="age" name="age" readonly
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-12 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required
                                        value="{{ $customer->age }}">
                                    <span
                                        class="absolute right-3 top-2/4 -translate-y-2/4 bg-white px-2 text-gray-500 text-sm">ปี</span>
                                </div>


                                <div class="relative">
                                    <select id="gender" name="gender"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">{{ $customer->gender }}</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                <div class="relative">
                                    <select id="nationality" name="nationality"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">{{ $customer->nationality }}</option>
                                        <option value="ไทย">ไทย</option>
                                    </select>
                                </div>


                                <div class="relative">
                                    <select id="religion" name="religion"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">{{ $customer->religion }}</option>
                                        <option value="พุทธ">พุทธ</option>
                                        <option value="คริสต์">คริสต์</option>
                                        <option value="อิสลาม">อิสลาม</option>
                                    </select>
                                </div>


                                <div class="relative">
                                    <select id="driving_license" name="driving_license"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="">{{ $customer->driving_license }}</option>
                                        <option value="Yes">มี</option>
                                        <option value="No">ไม่มี</option>
                                    </select>
                                </div>


                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <div class="relative">
                                    <input type="text" id="facebook" name="facebook"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required
                                        value="{{ $customer->facebook }}">
                                    <i class="fa-brands fa-facebook absolute right-3 top-3 text-blue-700 text-md"></i>
                                </div>




                                <div class="relative">
                                    <input type="text" id="line_id" name="line_id"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder="Line ID" required
                                        value="{{ $customer->line_id }}">
                                    <i class="fa-brands fa-line absolute right-3 top-3 text-green-600 text-md"></i>
                                </div>
                            </div>

                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div class="relative">
                                <select id="marital_status" name="marital_status"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <option value="">
                                        {{ $customer->marital_status ?? 'ไม่มีข้อมูลสถานะสมรส' }}
                                    </option>
                                    <option value="โสด">โสด</option>
                                    <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                                    <option value="หย่าร้าง">หย่าร้าง</option>
                                    <option value="หม้าย">หม้าย</option>
                                </select>
                            </div>




                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <div class="relative">
                                    <input type="text" id="spouse_name" name="spouse_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" "
                                        value="{{ $customer->marital_status ? $customer->spouse_name : 'ไม่มีข้อมูลชื่อคู่สมรส' }}">
                                </div>


                                <div class="relative">
                                    <input type="text" id="spouse_phone" name="spouse_phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" "
                                        value="{{ $customer->marital_status ? $customer->spouse_phone : 'ไม่มีข้อมูลเบอร์โทรคู่สมรส' }}">
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>


                            <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                                <textarea id="note" name="note" rows="4"
                                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">{{ $customer->note ?: 'ไม่มีข้อมูลหมายเหตุ' }}</textarea>
                            </div>

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm mr-2 hover:translate-y-[-2px] hover:shadow-lg transition-transform duration-300">
                            <i class="fas fa-user-plus"></i> สร้างลูกค้าใหม่
                        </button>

                        <button type="button"
                            class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-700 text-sm hover:translate-y-[-2px] hover:shadow-lg transition-transform duration-300"
                            onclick="hideModal()">
                            <i class="fas fa-times"></i> ยกเลิก
                        </button>
                    </div> --}}

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Left Column -->
                        <div class="space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Prefix Dropdown -->
                                <div class="relative">
                                    <select id="prefix" name="prefix" onfocus="moveLabel_prefix()" onblur="checkInput_prefix()"
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
                                        placeholder=" " required onfocus="moveLabel()" onblur="checkInput()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="first_name"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ชื่อจริง
                                    </label>
                                </div>



                                <div class="relative">
                                    <input type="text" id="last_name" name="last_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300 input-field"
                                        placeholder=" " required onfocus="moveLabel_lastname()" onblur="checkInput_lastname()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกนามสกุล')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="last_name"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all input-label">
                                        นามสกุล
                                    </label>
                                </div>
                            </div>



                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                <div class="relative">
                                    <input type="text" id="phone" name="phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel_phone()" onblur="checkInput_phone()"
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
                                        placeholder=" " required onfocus="moveLabel_phone2()" onblur="checkInput_phone2()"
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
                                        placeholder=" " required onfocus="moveLabel_id_card_number()"
                                        onblur="checkInput_id_card_number()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกหมายเลขบัตรประชาชน')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="id_card_number"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-3 peer-focus:text-orange-600 peer-focus:bg-white px-2 rounded-full shadow-md">
                                        หมายเลขบัตรประชาชน
                                    </label>

                                    <i class="fa-solid fa-credit-card absolute right-3 top-2 text-sm"></i>
                                </div>




                                <div class="relative">
                                    <input type="text" id="expiry_date" name="expiry_date"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel_expiry_date()"
                                        onblur="checkInput_expiry_date()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกบัตรหมดอายุ')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="expiry_date"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-3 peer-focus:text-orange-600 peer-focus:bg-white px-2 rounded-full shadow-md">
                                        บัตรหมดอายุ
                                    </label>

                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="relative">
                                    <input type="text" id="dob" name="dob"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel_dob()" onblur="checkInput_dob()"
                                        oninvalid="this.setCustomValidity('กรุณากรอกวันออกบัตร')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="dob"
                                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-0 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-3 peer-focus:text-orange-600 peer-focus:bg-white px-2 rounded-full shadow-md">
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
                                    <select id="gender" name="gender" onfocus="moveLabel_gender()" onblur="checkInput_gender()"
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
                                    <select id="religion" name="religion" onfocus="moveLabel_religion()" onblur="checkInput_religion()"
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
                                    <select id="driving_license" name="driving_license" onfocus="moveLabel_driving_license()" onblur="checkInput_driving_license()"
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
                                        placeholder=" " required onfocus="moveLabel_facebook()"
                                        onblur="checkInput_facebook()"
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
                                        placeholder=" " required onfocus="moveLabel_line_id()"
                                        onblur="checkInput_line_id()"
                                        oninvalid="this.setCustomValidity('กรุณากรอก Line ID')"
                                        oninput="this.setCustomValidity('')">
                                    <label for="line_id"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        Line ID
                                    </label>
                                    <i class="fa-brands fa-line absolute right-3 top-3 text-green-600 text-md"></i>
                                </div>
                            </div>

                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div class="relative">
                                <select id="marital_status" name="marital_status" onfocus="moveLabel_marital_status()" onblur="checkInput_marital_status()"
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



                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <div class="relative">
                                    <input type="text" id="spouse_name" name="spouse_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " onfocus="moveLabel_spouse_name()"
                                        onblur="checkInput_spouse_name()">
                                    <label for="spouse_name"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ชื่อนามสกุลคู่สมรส
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="spouse_phone" name="spouse_phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " onfocus="moveLabel_spouse_phone()"
                                        onblur="checkInput_spouse_phone()">
                                    <label for="spouse_phone"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เบอร์โทรคู่สมรส
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>


                            <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                                <textarea id="note" name="note" rows="4"
                                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel_note()" onblur="checkInput_note()"></textarea>
                                <label for="note"
                                    class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-4 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-2 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600 peer-focus:bg-white px-2 rounded-full shadow-md">
                                    หมายเหตุ
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                            <i class="fas fa-user-plus"></i> แก้ไขข้อมูลลูกค้า
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<script>
    // ฟังก์ชันเปิด modal
    function showModal() {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        modalWrapper.classList.remove('hidden'); // เอาคลาส hidden ออกก่อน
        setTimeout(() => {
            modalWrapper.classList.add('show'); // เพิ่มคลาส show หลังจากแสดงโมดัลเพื่อแสดงเอฟเฟกต์ fade in
        }, 10); // เว้นช่วงนิดหน่อยเพื่อให้ transition ทำงาน
    }

    // ฟังก์ชันปิด modal
    function hideModal() {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        modalWrapper.classList.remove('show'); // ลบคลาส show ก่อนเพื่อปิดเอฟเฟกต์
        setTimeout(() => {
            modalWrapper.classList.add('hidden'); // ซ่อนโมดัลหลังจาก transition เสร็จ
        }, 400); // ระยะเวลาการรอให้เอฟเฟกต์ transition เสร็จก่อนซ่อนโมดัล
    }

    // ปิด modal เมื่อคลิกนอก modal content
    window.onclick = function(event) {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        if (event.target === modalWrapper) {
            hideModal();
        }
    };
</script>

<style>
    /* ซ่อน modal โดยเริ่มต้นที่ opacity และ translateY */
    #Cus-modal-wrapper {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
    }

    #Cus-modal-wrapper .modal-content {
        transform: translateY(30px);
        /* เริ่มต้นจากต่ำลงมานิดหน่อย */
        transition: transform 0.4s ease, opacity 0.4s ease;
        opacity: 0;
    }

    /* เมื่อ modal เปิดแสดงผล */
    #Cus-modal-wrapper.show {
        opacity: 1;
        visibility: visible;
    }

    #Cus-modal-wrapper.show .modal-content {
        transform: translateY(0);
        /* เลื่อนกลับไปที่ตำแหน่งปกติ */
        opacity: 1;
        /* ทำการ fade-in */
    }
</style>
