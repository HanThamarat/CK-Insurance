<!-- Modal Wrapper -->
<div id="Cus-modal-wrapper" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col">
            <!-- ปุ่มปิด modal -->

            <div class="flex justify-between items-center mb-4 p-4">
                <span class="text-sm font-semibol text-orange-500">
                    <i class="fa-regular fa-user mr-2"></i>แก้ไขข้อมูลลูกค้า
                </span>
                <a class="flex justify-end p-1 text-orange-400 hover:text-orange-700 focus:outline-none"
                    onclick="hideModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </a>
            </div>
            <!-- เนื้อหาของ modal -->

            <div class="flex-1 overflow-auto">
                <div class="py-3 px-2">
                    <form action="{{ route('customers.update', 0) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Left Column -->
                            <div class="space-y-4">
                                <div class="relative">
                                    <select id="id_card_type" name="id_card_type"
                                        class="p-2 border border-gray-300 rounded-lg w-full text-sm peer focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value="" disabled selected> -- ชนิดบัตร --</option>
                                        <option value="id_card">บัตรประชาชน</option>
                                        <option value="tax_id">บัตรประจำตัวผู้เสียอากร</option>
                                    </select>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
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
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                            ชื่อจริง
                                        </label>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="relative">
                                        <input type="text" id="last_name" name="last_name"
                                            class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="last_name"
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                            เบอร์โทรติดต่อ 1
                                        </label>
                                    </div>

                                    <!-- Phone Number 2 -->
                                    <div class="relative">
                                        <input type="text" id="phone2" name="phone2"
                                            class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="phone2"
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                            เบอร์โทรติดต่อ 2
                                        </label>
                                    </div>
                                </div>


                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <!-- Card Number with Icon -->
                                    <div class="relative">
                                        <input type="text" id="id_card_number" name="id_card_number"
                                            class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="id_card_number"
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                            บัตรหมดอายุ
                                        </label>
                                        <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                    </div>
                                </div>


                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                    <!-- Date of Birth with Icon -->
                                    <div class="relative">
                                        <input type="text" id="dob" name="dob"
                                            class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="dob"
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-1 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-1 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                                            <option value="male">ชาย</option>
                                            <option value="female">หญิง</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                    <!-- Nationality Dropdown -->
                                    <div class="relative">
                                        <select id="nationality" name="nationality"
                                            class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                            <option value="">สัญชาติ</option>
                                            <option value="Thai">ไทย</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <!-- Religion Dropdown -->
                                    <div class="relative">
                                        <select id="religion" name="religion"
                                            class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                            <option value="">ศาสนา</option>
                                            <option value="Buddhism">พุทธ</option>
                                            <option value="Christianity">คริสต์</option>
                                            <option value="Islam">อิสลาม</option>
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
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                    <!-- Change History Dropdown -->
                                    <div class="relative">
                                        <select id="change_history" name="change_history"
                                            class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0">
                                            <option value="">ประวัติการเปลี่ยนชื่อ</option>
                                            <option value="changed_name_1">เปลี่ยนชื่อที่ 1</option>
                                            <option value="changed_name_2">เปลี่ยนชื่อที่ 2</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <!-- Facebook Input with Icon -->
                                    <div class="relative">
                                        <input type="text" id="facebook" name="facebook"
                                            class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="facebook"
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                            Facebook
                                        </label>
                                        <i
                                            class="fa-brands fa-facebook absolute right-3 top-3 text-blue-700 text-md"></i>
                                    </div>

                                    <!-- Line ID Input with Icon -->
                                    <div class="relative">
                                        <input type="text" id="line_id" name="line_id"
                                            class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="line_id"
                                            class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                                    <option value="single">โสด</option>
                                    <option value="married">สมรสจดทะเบียน</option>
                                    <option value="marriednot">สมรสจดทะเบียน</option>
                                    <option value="divorced">หย่าร้าง</option>
                                    <option value="widow">หม้าย</option>
                                </select>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <!-- Spouse Name Input with Label -->
                                    <div class="relative">
                                        <input type="text" id="spouse_name" name="spouse_name"
                                            class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="spouse_name"
                                            class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                            ชื่อนามสกุลคู่สมรส
                                        </label>
                                    </div>

                                    <!-- Spouse Phone Input with Icon and Label -->
                                    <div class="relative">
                                        <input type="text" id="spouse_phone" name="spouse_phone"
                                            class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                            placeholder=" ">
                                        <label for="spouse_phone"
                                            class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                            เบอร์โทรคู่สมรส
                                        </label>
                                        <i
                                            class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                    </div>
                                </div>

                                <div class="relative pt-8">
                                    <textarea id="note" name="note" rows="4"
                                        class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                                        placeholder=" "></textarea>
                                    <label for="note"
                                        class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-8 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                                        หมายเหตุ
                                    </label>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ปุ่มต่าง ๆ ใน modal -->
            <div class="flex justify-end mt-4 space-x-2">
                <!-- ปุ่มสร้างทรัพย์ใหม่ -->
                <button type="submit"
                    class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-700 text-sm">
                    <i class="fas fa-save"></i> บันทึกข้อมูล
                </button>
                <!-- ปุ่มยกเลิก -->
                <button type="button"
                    class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-700 text-sm"
                    onclick="hideModal()">
                    <i class="fas fa-times"></i> ยกเลิก
                </button>
            </div>
        </div>
    </div>
</div>









{{-- <!-- Form แก้ไขข้อมูลลูกค้า -->
 <form action="#" method="POST" class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Left Column -->
        <div class="space-y-2">
            <div class="relative">
                <select id="id_card_type" name="id_card_type"
                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer focus:outline-none focus:border-orange-600 focus:ring-0">
                    <option value="" disabled selected> -- ชนิดบัตร --</option>
                    <option value="id_card">บัตรประชาชน</option>
                    <option value="tax_id">บัตรประจำตัวผู้เสียอากร</option>
                </select>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
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
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        ชื่อจริง
                    </label>
                </div>
                <!-- Last Name -->
                <div class="relative">
                    <input type="text" id="last_name" name="last_name"
                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        placeholder=" ">
                    <label for="last_name"
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        นามสกุล
                    </label>
                </div>
            </div>



            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Phone Number 1 -->
                <div class="relative">
                    <input type="text" id="phone" name="phone"
                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        pattern="\d{10}" placeholder=" ">
                    <label for="phone"
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        เบอร์โทรติดต่อ 1
                    </label>
                </div>

                <!-- Phone Number 2 -->
                <div class="relative">
                    <input type="text" id="phone2" name="phone2"
                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        pattern="\d{10}" placeholder=" ">
                    <label for="phone2"
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        เบอร์โทรติดต่อ 2
                    </label>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <!-- Card Number with Icon -->
                <div class="relative">
                    <input type="text" id="id_card_number" name="id_card_number"
                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        placeholder=" ">
                    <label for="id_card_number"
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        บัตรหมดอายุ
                    </label>
                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <!-- Date of Birth with Icon -->
                <div class="relative">
                    <input type="text" id="dob" name="dob"
                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        placeholder=" ">
                    <label for="dob"
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-1 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                        <option value="male">ชาย</option>
                        <option value="female">หญิง</option>
                    </select>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <!-- Nationality Dropdown -->
                <div class="relative">
                    <select id="nationality" name="nationality"
                        class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                        <option value="">สัญชาติ</option>
                        <option value="Thai">ไทย</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <!-- Religion Dropdown -->
                <div class="relative">
                    <select id="religion" name="religion"
                        class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                        <option value="">ศาสนา</option>
                        <option value="Buddhism">พุทธ</option>
                        <option value="Christianity">คริสต์</option>
                        <option value="Islam">อิสลาม</option>
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <!-- Change History Dropdown -->
                <div class="relative">
                    <select id="change_history" name="change_history"
                        class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0">
                        <option value="">ประวัติการเปลี่ยนชื่อ</option>
                        <option value="changed_name_1">เปลี่ยนชื่อที่ 1</option>
                        <option value="changed_name_2">เปลี่ยนชื่อที่ 2</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <!-- Facebook Input with Icon -->
                <div class="relative">
                    <input type="text" id="facebook" name="facebook"
                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        placeholder=" ">
                    <label for="facebook"
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
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
                        class="absolute text-sm text-gray-500 duration-300 transform translate-y-3 scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        Line ID
                    </label>
                    <i class="fa-brands fa-line absolute right-3 top-3 text-green-600 text-md"></i>
                </div>
            </div>

        </div>

        <!-- Right Column -->
        <div class="space-y-2">
            <select id="marital_status" name="marital_status"
                class="text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                <option value=""> ----- สถานะสมรส ----- </option>
                <option value="single">โสด</option>
                <option value="married">สมรสจดทะเบียน</option>
                <option value="marriednot">สมรสจดทะเบียน</option>
                <option value="divorced">หย่าร้าง</option>
                <option value="widow">หม้าย</option>
            </select>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <!-- Spouse Name Input with Label -->
                <div class="relative">
                    <input type="text" id="spouse_name" name="spouse_name"
                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        placeholder=" ">
                    <label for="spouse_name"
                        class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        ชื่อนามสกุลคู่สมรส
                    </label>
                </div>

                <!-- Spouse Phone Input with Icon and Label -->
                <div class="relative">
                    <input type="text" id="spouse_phone" name="spouse_phone"
                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                        placeholder=" ">
                    <label for="spouse_phone"
                        class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                        เบอร์โทรคู่สมรส
                    </label>
                    <i
                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
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
            </div>
            <div class="relative mt-4">
                <textarea id="note" name="note" rows="4"
                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0"
                    placeholder=" "></textarea>
                <label for="note"
                    class="absolute text-sm text-gray-500 duration-300 transform scale-75 left-2 top-1 z-10 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-5 peer-focus:text-orange-600">
                    หมายเหตุ
                </label>
            </div>

        </div>
    </div>
</form> --}}


<!-- Modal Scripts -->
<script>
    // ฟังก์ชันเปิด modal
    function showModal() {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        modalWrapper.classList.remove('hidden'); // เปิด modal-wrapper
    }

    // ฟังก์ชันปิด modal
    function hideModal() {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        modalWrapper.classList.add('hidden'); // ซ่อน modal-wrapper
    }

    // ปิด modal เมื่อคลิกนอก modal content
    window.onclick = function(event) {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        if (event.target === modalWrapper) {
            hideModal();
        }
    };
</script>
