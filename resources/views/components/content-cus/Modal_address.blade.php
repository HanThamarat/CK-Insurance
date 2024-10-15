@include('components.content-cus.component_js')


<div id="modalAddress" class="fixed inset-0 flex items-center justify-center z-50 hidden mt-[-30]" style="height: 110%">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- ปุ่มปิด modal -->
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_address" class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="https://ckl.co.th/assets/images/gif/home.gif" alt="report" class="avatar-sm" style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">เพิ่มที่อยู่ลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Add Customer Address)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>
            <!-- เพิ่มเนื้อหาของ Modal ที่นี่ -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Left Column -->
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pt-2">
                        <div class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="ADR-0001" name="Type_Adds" id="adds-0">
                                <label class="form-check-label text-base text-gray-700" for="adds-0">
                                    ที่อยู่ปัจจุบัน
                                </label>
                            </div>
                        </div>
                        <div class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="ADR-0002" name="Type_Adds" id="adds-1">
                                <label class="form-check-label text-base text-gray-700" for="adds-1">
                                    ที่อยู่ส่งเอกสาร
                                </label>
                            </div>
                        </div>
                        <div class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="ADR-0003" name="Type_Adds" id="adds-2">
                                <label class="form-check-label text-base text-gray-700" for="adds-2">
                                    ที่อยู่ตามสำเนา
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-4 mt-2">
                    <div class="relative">
                        <input type="text" id="Registration_number" name="Registration_number"
                            class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                            placeholder=" " required onfocus="moveLabel('Registration_number')" onblur="checkInput('Registration_number')"
                            oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                            oninput="this.setCustomValidity('')">
                        <label for="Registration_number"
                            class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                            เลขทะเบียนบ้าน
                        </label>
                    </div>



                    <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                        <div class="relative">
                            <input type="text" id="houseNumber_Adds" name="houseNumber_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('houseNumber_Adds')" onblur="checkInput('houseNumber_Adds')">
                            <label for="houseNumber_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                บ้านเลขที่
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="houseGroup_Adds" name="houseGroup_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('houseGroup_Adds')"
                                onblur="checkInput('houseGroup_Adds')">
                            <label for="houseGroup_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                หมู่
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="building_Adds" name="building_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('building_Adds')"
                                onblur="checkInput('building_Adds')">
                            <label for="building_Adds"
                                class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อาคาร
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="village_Adds" name="village_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('village_Adds')"
                                onblur="checkInput('village_Adds')">
                            <label for="village_Adds"
                                class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                หมู่บ้าน
                            </label>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                        <div class="relative">
                            <input type="text" id="roomNumber_Adds" name="roomNumber_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('roomNumber_Adds')"
                                onblur="checkInput('roomNumber_Adds')">
                            <label for="roomNumber_Adds"
                                class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                เลขที่ห้อง
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="Floor_Adds" name="Floor_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('Floor_Adds')"
                                onblur="checkInput('Floor_Adds')">
                            <label for="Floor_Adds"
                                class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                ชั้นที่
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="alley_Adds" name="alley_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('alley_Adds')"
                                onblur="checkInput('alley_Adds')">
                            <label for="alley_Adds"
                                class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                ซอย
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="road_Adds" name="road_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('road_Adds')"
                                onblur="checkInput('road_Adds')">
                            <label for="road_Adds"
                                class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                ถนน
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="relative">
                            <select id="houseZone_Adds" name="houseZone_Adds" onfocus="moveLabel('houseZone_Adds')" onblur="checkInput('houseZone_Adds')"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
                                <option value="">ภูมิภาค</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>

                            <label for="houseZone_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                ภูมิภาค
                            </label>
                        </div>

                        <div class="relative">
                            <select id="houseProvince_Adds" name="houseProvince_Adds" onfocus="moveLabel('houseProvince_Adds')" onblur="checkInput('houseProvince_Adds')"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
                                <option value="">จังหวัด</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>

                            <label for="houseProvince_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                จังหวัด
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="relative">
                            <select id="houseDistrict_Adds" name="houseDistrict_Adds" onfocus="moveLabel('houseDistrict_Adds')" onblur="checkInput('houseDistrict_Adds')"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
                                <option value="">อำเภอ</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>

                            <label for="houseDistrict_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อำเภอ
                            </label>
                        </div>

                        <div class="relative">
                            <select id="houseTambon_Adds" name="houseTambon_Adds" onfocus="moveLabel('houseTambon_Adds')" onblur="checkInput('houseTambon_Adds')"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
                                <option value="">ตำบล</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>

                            <label for="houseTambon_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                ตำบล
                            </label>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="relative">
                            <input type="text" id="Postal_Adds" name="Postal_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('Postal_Adds')"
                                onblur="checkInput('Postal_Adds')">

                            <label for="Postal_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                รหัสไปรณีย์
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="Coordinates_Adds" name="Coordinates_Adds"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('Coordinates_Adds')"
                                onblur="checkInput('Coordinates_Adds')">

                            <label for="Coordinates_Adds"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                พิกัด
                            </label>
                        </div>
                    </div>

                    <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                        <textarea id="Detail_Adds" name="Detail_Adds" rows="4"
                            class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                            placeholder=" " onfocus="moveLabel('Detail_Adds')" onblur="checkInput('Detail_Adds')"></textarea>
                        <label for="Detail_Adds"
                            class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                            รายละเอียด
                        </label>
                    </div>

                    <div class="flex justify-end space-x-2">
                        <!-- ปุ่ม บันทึก -->
                        <button type="submit" id="submitBtn"
                            class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-500 flex items-center space-x-2 transition duration-300">
                            <i class="fas fa-save"></i> <!-- ไอคอน "บันทึก" ของ Font Awesome -->
                            <span>สร้างทรัพย์ใหม่</span>
                        </button>

                        <!-- ปุ่ม ยกเลิก -->
                        <button type="button" id="closeModal_address_button"
                            class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-400 flex items-center space-x-2 transition duration-300">
                            <i class="fas fa-times"></i> <!-- ไอคอน "ยกเลิก" ของ Font Awesome -->
                            <span>ยกเลิก</span>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addAddressButton = document.getElementById('addAddressButton');
        const modalAddress = document.getElementById('modalAddress');
        const closeModalAddress = document.getElementById('closeModal_address');
        const closeModalAddressButton = document.getElementById('closeModal_address_button');

        // เปิด Modal
        addAddressButton.addEventListener('click', function() {
            modalAddress.classList.remove('hidden');
            modalAddress.classList.add('modal-enter');
            setTimeout(() => {
                modalAddress.classList.add('modal-enter-active');
                modalAddress.classList.remove('modal-enter');
                modalAddress.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // เพิ่มพื้นหลังสีเทาอ่อน
            }, 10); // ช่วยให้ CSS transition ทำงาน
        });

        // ปิด Modal เมื่อคลิกที่ปุ่มปิด
        closeModalAddress.addEventListener('click', function() {
            modalAddress.classList.remove('modal-enter-active');
            modalAddress.classList.add('modal-leave-active');
            setTimeout(() => {
                modalAddress.classList.add('hidden');
                modalAddress.classList.remove('modal-leave-active');
            }, 300); // ใช้เวลาในการจาง
        });

        closeModalAddressButton.addEventListener('click', function() {
            modalAddress.classList.remove('modal-enter-active');
            modalAddress.classList.add('modal-leave-active');
            setTimeout(() => {
                modalAddress.classList.add('hidden');
                modalAddress.classList.remove('modal-leave-active');
            }, 300); // ใช้เวลาในการจาง
        });

        // ปิด modal เมื่อคลิกที่นอก modal
        window.addEventListener('click', function(event) {
            if (event.target === modalAddress) {
                closeModalAddress.click(); // เรียกใช้ปุ่มปิด
            }
        });
    });
</script>

<style>
    /* CSS สำหรับเอฟเฟกต์ slide-fade */
    .modal-enter {
        opacity: 0;
        transform: translateY(-20px); /* เลื่อนขึ้น */
    }

    .modal-enter-active {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.3s ease, transform 0.3s ease; /* ใช้ transition */
    }

    .modal-leave {
        opacity: 1;
        transform: translateY(0); /* อยู่ที่ตำแหน่งเดิม */
    }

    .modal-leave-active {
        opacity: 0;
        transform: translateY(20px); /* เลื่อนลง */
        transition: opacity 0.3s ease, transform 0.3s ease; /* ใช้ transition */
    }

</style>

