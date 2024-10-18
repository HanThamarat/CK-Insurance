
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



                                                                <!-- Nationality Dropdown -->
                                {{-- <div class="relative">
                                    <select id="nationality" name="nationality"
                                        class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value="">สัญชาติ</option>
                                        <option value="ไทย">ไทย</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div> --}}


                                                                <!-- Gender Dropdown -->
                                {{-- <div class="relative">
                                    <select id="gender" name="gender"
                                        class=" text-gray-500 p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0">
                                        <option value=""> -----เพศ----- </option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>
                                </div> --}}




                                                            {{-- <script>
                                // ฟังก์ชันเพื่อเช็คค่าสำหรับ label
                                function checkInitialValue() {
                                    const selectElement = document.getElementById('prefix');
                                    const firstNameElement = document.getElementById('first_name');
                                    const lastNameElement = document.getElementById('last_name');
                                    const phoneElement = document.getElementById('phone');
                                    const phone2Element = document.getElementById('phone2');
                                    const idCardElement = document.getElementById('id_card_number');
                                    const expiryDateElement = document.getElementById('expiry_date');

                                    const labelElement = document.getElementById('prefix-label');
                                    const firstNameLabelElement = document.getElementById('first_name-label');
                                    const lastNameLabelElement = document.getElementById('lastname_name-label');
                                    const phoneLabelElement = document.getElementById('phone-label');
                                    const phone2LabelElement = document.getElementById('phone2-label');
                                    const idCardLabelElement = document.getElementById('id_card_number-label');
                                    const expiryDateLabelElement = document.getElementById('expiry_date-label');


                                    // เช็คว่ามีค่าใน select, first_name, last_name, phone หรือ phone2
                                    if (selectElement.value) {
                                        labelElement.classList.add('translate-y-[-30%]', 'scale-75'); // ย้าย label ไปข้างบน
                                    }

                                    if (firstNameElement.value) {
                                        firstNameLabelElement.classList.add('translate-y-[-30%]', 'scale-75'); // ย้าย label ไปข้างบน
                                    }

                                    if (lastNameElement.value) {
                                        lastNameLabelElement.classList.add('translate-y-[-30%]', 'scale-75'); // ย้าย label ไปข้างบน
                                    }

                                    if (phoneElement.value) {
                                        phoneLabelElement.classList.add('translate-y-[-30%]', 'scale-75'); // ย้าย label ไปข้างบน
                                    }

                                    if (phone2Element.value) {
                                        phone2LabelElement.classList.add('translate-y-[-30%]', 'scale-75'); // ย้าย label ไปข้างบน
                                    }

                                    if (idCardElement.value) {
                                        idCardLabelElement.classList.add('translate-y-[-30%]', 'scale-75'); // ย้าย label ไปข้างบน
                                    }

                                    if (expiryDateElement.value) {
                                        expiryDateLabelElement.classList.add('translate-y-[-30%]', 'scale-75'); // ย้าย label ไปข้างบน
                                    }
                                }

                                // เรียกใช้ฟังก์ชันเมื่อโหลดหน้า
                                window.onload = checkInitialValue;
                            </script> --}}






                                                            <!-- Prefix Dropdown -->
                                {{-- <div class="relative">
                                    <select id="prefix" name="prefix" onfocus="moveLabel('prefix')" onblur="checkInput('prefix')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                        required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
                                        <option value="{{ $customer->prefix }}">{{ $customer->prefix }}</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                    <label for="prefix"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                         คำนำหน้า
                                    </label>
                                </div> --}}




                                {{-- data-id="{{ $customer->id }}" --}}












                                

                                {{-- @if ($customer)
    <!-- ชื่อ-นามสกุล -->
    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-regular fa-user mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ $customer->prefix }} {{ $customer->first_name }} {{ $customer->last_name }}
        </div>
    </div>

    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ $customer->id_card_number }}
        </div>
    </div>

    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{ $customer->phone }}
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
            {{ $customer->created_at }}
        </div>
    </div>

    <!-- ผู้ลงบันทึก -->
    <div class="mb-6">
        <div class="flex items-center mb-2">
            <i class="fa-solid fa-user mr-4 text-orange-700"></i>
            <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
        </div>
        <div class="ml-8 text-gray-400 text-sm">
            {{-- {{ 'Tester System' }} --}} -
        </div>
    </div>
@else
    <div class="text-red-500 text-lg font-bold">ไม่มีข้อมูลลูกค้า</div>
@endif --}}
