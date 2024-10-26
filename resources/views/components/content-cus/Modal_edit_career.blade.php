{{-- <div id="modalEditCareer" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-overlay"></div> <!-- Background layer -->
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_career_x" class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/career.gif') }}" alt="career icon" class="avatar-sm" style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลอาชีพลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Edit Customers Career)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <div class="p-0">
                <input type="hidden" id="careerIdInput" />
                <input type="hidden" id="careerNameInput" class="mt-1 p-2 border rounded w-full" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Left Column -->
                <div class="space-y-4 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 pt-2">
                        <div
                            class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="กำหนดเป็นอาชีพหลัก"
                                    name="Status_Cus" id="adds-0">
                                <label class="form-check-label text-base text-gray-700" for="adds-0">
                                    กำหนดเป็นอาชีพหลัก
                                </label>
                            </div>
                        </div>
                        <div
                            class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="กำหนดเป็นอาชีพรอง"
                                    name="Status_Cus" id="adds-1">
                                <label class="form-check-label text-base text-gray-700" for="adds-1">
                                    กำหนดเป็นอาชีพรอง
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <img src="{{ asset('img/career.jpg') }}" alt="theme images" class="avatar-sm">
                    </div>
                </div>

                <form id="careerForm">

                    <input type="text" id="dataCusIdField" name="DataCus_id" hidden value="{{ $customer->id }}">

                    <div class="space-y-4 mt-2">

                        <div class="relative">
                            <select id="Career_Cus" name="Career_Cus" onfocus="moveLabel('Career_Cus')"
                                onblur="checkInput('Career_Cus')"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                oninput="this.setCustomValidity('')">
                                <option value="">อาชีพ</option>
                                <!-- ตัวเลือกจะถูกเติมที่นี่โดย AJAX -->
                            </select>
                            <label for="Career_Cus"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อาชีพ
                            </label>
                        </div>



                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">

                            <div class="relative">
                                <input type="text" id="Income_Cus" name="Income_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('Income_Cus')" onblur="checkInput('Income_Cus')">
                                <label for="Income_Cus"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    รายได้
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="BeforeIncome_Cus" name="BeforeIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('BeforeIncome_Cus')"
                                    onblur="checkInput('BeforeIncome_Cus')">
                                <label for="BeforeIncome_Cus"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หักค่าใช้จ่าย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="AfterIncome_Cus" name="AfterIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('AfterIncome_Cus')"
                                    onblur="checkInput('AfterIncome_Cus')">
                                <label for="AfterIncome_Cus"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    คงเหลือ
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                            <div class="relative">
                                <input type="text" id="Workplace_Cus" name="Workplace_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('Workplace_Cus')"
                                    onblur="checkInput('Workplace_Cus')">
                                <label for="Workplace_Cus"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    สถานที่ทำงาน
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="Coordinates" name="Coordinates"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('Coordinates')"
                                    onblur="checkInput('Coordinates')">
                                <label for="Coordinates"
                                    class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    พิกัด
                                </label>
                            </div>
                        </div>

                        <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                            <textarea id="IncomeNote_Cus" name="IncomeNote_Cus" rows="8"
                                class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " onfocus="moveLabel('IncomeNote_Cus')" onblur="checkInput('IncomeNote_Cus')"></textarea>
                            <label for="IncomeNote_Cus"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                รายละเอียด
                            </label>
                        </div>

                        <div class="relative flex justify-end space-x-2">
                            <!-- ปุ่ม บันทึก -->
                            <button type="submit" id="submitBtnCareer"
                                class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-500 flex items-center space-x-2 transition duration-300">
                                <i class="fas fa-save"></i> <!-- ไอคอน "บันทึก" ของ Font Awesome -->
                                <span>เพิ่มข้อมูลอาชีพ</span>
                            </button>

                            <!-- ปุ่ม ยกเลิก -->
                            <button type="button"  onclick="closeModal_career_button_style()"
                                class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-400 flex items-center space-x-2 transition duration-300">
                                <i class="fas fa-times"></i> <!-- ไอคอน "ยกเลิก" ของ Font Awesome -->
                                <span>ยกเลิก</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<style>
    #modalEditCareer {
        transition: opacity 0.3s ease, visibility 0.3s ease; /* สำหรับการเปลี่ยนแปลง opacity และ visibility */
        opacity: 0; /* เริ่มต้นที่มองไม่เห็น */
        visibility: hidden; /* ซ่อน Modal */
    }

    #modalEditCareer.show {
        opacity: 1; /* แสดง Modal */
        visibility: visible; /* เปลี่ยนเป็นมองเห็น */
    }

    /* เลเยอร์พื้นหลัง */
    .bg-overlay {
        position: fixed; /* ให้เลเยอร์พื้นหลังคงที่ */
        inset: 0; /* ครอบคลุมทั้งหน้าจอ */
        background-color: rgba(47, 41, 41, 0.5); /* สีเทาโปร่งใส */
        transition: opacity 0.1s ease; /* การเปลี่ยนแปลง opacity */
        opacity: 0; /* เริ่มต้นที่มองไม่เห็น */
        visibility: hidden; /* ซ่อน */
    }

    #modalEditCareer.show .bg-overlay {
        opacity: 1; /* แสดงพื้นหลังเมื่อ Modal เปิด */
        visibility: visible; /* เปลี่ยนเป็นมองเห็น */
    }
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function openModal_Edit_career_customer(button) {
        const careerId = button.getAttribute('data-id'); // ดึงค่า id จาก data-id
        const careerName = button.getAttribute('data-career-name'); // ดึงค่าชื่ออาชีพจาก data-career-name

        // แสดงค่าใน Modal
        document.getElementById('careerIdInput').value = careerId; // ตั้งค่าให้ input หรือ field ที่ต้องการ
        document.getElementById('careerNameInput').value = careerName; // ตั้งค่าให้ input หรือ field ที่ต้องการ

        // แสดง Modal ด้วย fade in effect
        $('#modalEditCareer').removeClass('hidden').fadeIn(300).addClass('show'); // ใช้ fadeIn เพื่อแสดง Modal
    }

    // ฟังก์ชันสำหรับปิด Modal
    function closeModal_career_button_style() {
        $('#modalEditCareer').fadeOut(300, function() { // ใช้ fadeOut เพื่อซ่อน Modal
            $(this).addClass('hidden'); // เพิ่ม class hidden หลังจาก fadeOut เสร็จ
        });
    }

    $('#closeModal_career_x').on('click', function() {
        $('#modalEditCareer').fadeOut(300, function() {
            $(this).addClass('hidden'); // ซ่อน modal ด้วยการเพิ่ม class 'hidden' หลังจาก fade out เสร็จ
        });
    });


    // เพิ่มการทำงานให้ปุ่มปิด Modal
    // document.getElementById('closeModal_career').addEventListener('click', closeModal);
</script>
 --}}
