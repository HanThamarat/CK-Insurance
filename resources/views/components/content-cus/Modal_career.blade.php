@include('components.content-cus.component_js')


<div id="modalCareer" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- ปุ่มปิด modal -->
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_career"
                    class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/career.gif') }}" alt="career icon" class="avatar-sm"
                        style="width:50px;height:50px">

                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">เพิ่มอาชีพ</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Add Customer Carreer)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>
            <!-- เพิ่มเนื้อหาของ Modal ที่นี่ -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Left Column -->
                <div class="space-y-4 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 pt-2">
                        <div
                            class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="กำหนดเป็นอาชีพหลัก"
                                    name="Career_cus" id="adds-0">
                                <label class="form-check-label text-base text-gray-700" for="adds-0">
                                    กำหนดเป็นอาชีพหลัก
                                </label>
                            </div>
                        </div>
                        <div
                            class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="กำหนดเป็นอาชีพรอง"
                                    name="Career_cus" id="adds-1">
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
                        {{-- <input type="text" name="DataCus_id" placeholder="Data Customer ID" hidden>
                        <input type="date" name="date_Cus" placeholder="Date Customer" hidden> --}}


                        {{-- <div class="relative">
                            <select id="Career_Cus" name="Career_Cus" onfocus="moveLabel('Career_Cus')"
                                onblur="checkInput('Career_Cus')"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                oninput="this.setCustomValidity('')">
                                <option value="">อาชีพ</option>
                                <option value="นาย">โปรแกรมเมอร์</option>
                            </select>
                            <label for="Career_Cus"
                                class="absolute text-lg text-red-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อาชีพ
                            </label>
                        </div> --}}

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
                            <button type="button" id="closeModal_career_button"
                                class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-orange-400 flex items-center space-x-2 transition duration-300">
                                <i class="fas fa-times"></i> <!-- ไอคอน "ยกเลิก" ของ Font Awesome -->
                                <span>ยกเลิก</span>
                            </button>
                        </div>
                </form>

            </div>
        </div>
    </div>

</div>
</div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    /* เปลี่ยน cursor เป็นเครื่องหมายห้าม สำหรับ input, select และ textarea ที่ถูก disabled */
    input[disabled],
    select[disabled],
    textarea[disabled] {
        cursor: not-allowed;
    }

    /* เปลี่ยน cursor เป็นเครื่องหมายห้าม สำหรับ label ที่เกี่ยวข้องกับ input, select และ textarea ที่ถูก disabled */
    input[disabled]+label,
    select[disabled]+label,
    textarea[disabled]+label {
        cursor: not-allowed;
        /* เปลี่ยน cursor เป็นเครื่องหมายห้าม */
    }

    .scrollbar-hidden::-webkit-scrollbar {
        display: none;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Disable the input fields, selects, and textarea initially
        $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled', true);

        // Enable fields when a radio button is checked
        $('input[name="Career_cus"]').change(function() {
            if ($(this).is(':checked')) {
                $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled',
                    false);
            }
        });

        // Optional: If you want to disable again if both radio buttons are unchecked
        $('input[name="Career_cus"]').on('change', function() {
            if (!$('input[name="Career_cus"]:checked').length) {
                $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled', true);
            }
        });
    });
</script>






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        // ดึงข้อมูลอาชีพจากเซิร์ฟเวอร์
        $.ajax({
            url: '/get-careers',
            method: 'GET',
            success: function(data) {
                // ล้างตัวเลือกก่อน
                $('#Career_Cus').empty();
                $('#Career_Cus').append('<option value="">อาชีพ</option>');

                // แสดงข้อมูลที่ดึงมา
                $.each(data, function(index, career) {
                    // แสดง Code_Career ก่อน Name_Career
                    $('#Career_Cus').append('<option value="' + career.Code_Career + '">' +
                        career.Code_Career + ' - ' + career.Name_Career + '</option>');
                });
            },
            error: function(xhr) {
                console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', xhr);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // ตรวจสอบการคลิกปุ่มบันทึก
        $('#submitBtnCareer').on('click', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มตามปกติ
            validateForm(); // เรียกใช้ฟังก์ชัน validateForm
        });

        function validateForm() {
            var isValid = true; // เริ่มต้นสถานะเป็นจริง
            $('.error').remove(); // ลบข้อความแสดงข้อผิดพลาดก่อนหน้า

            // ตรวจสอบฟิลด์ที่จำเป็น
            const fields = [{
                    id: '#Career_Cus',
                    message: 'กรุณาเลือกอาชีพ'
                },
                {
                    id: '#Income_Cus',
                    message: 'กรุณากรอกรายได้'
                },
                {
                    id: '#BeforeIncome_Cus',
                    message: 'กรุณากรอกหักค่าใช้จ่าย'
                },
                {
                    id: '#AfterIncome_Cus',
                    message: 'กรุณากรอกคงเหลือ'
                },
                {
                    id: '#Workplace_Cus',
                    message: 'กรุณากรอกสถานที่ทำงาน'
                },
                {
                    id: '#Coordinates',
                    message: 'กรุณากรอกพิกัด'
                },
                {
                    id: '#IncomeNote_Cus',
                    message: 'กรุณากรอกรายละเอียด'
                }
            ];

            fields.forEach(function(field) {
                if ($(field.id).val().trim() === '') {
                    $(field.id).addClass('border-red-500');
                    $(field.id).after(
                        `<span class="error text-red-500 text-xs flex items-center mt-1">
                            <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
                        </span>`
                    );
                    isValid = false;
                } else {
                    $(field.id).removeClass('border-red-500');
                }
            });

            if (!isValid) {
                setTimeout(function() {
                    $('.error').fadeOut(1000, function() {
                        $(this).remove();
                    });
                }, 2000);
                return; // หยุดการทำงานถ้าฟอร์มไม่ valid
            }

            // หากฟอร์ม valid ส่งข้อมูล
            submitForm();
        }

        function submitForm() {
            var formData = $('#careerForm').serialize(); // แปลงฟอร์มเป็นข้อมูลที่สามารถส่งได้

            $.ajax({
                url: '{{ route('career.store') }}', // URL ที่ถูกต้อง
                method: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: 'สำเร็จ!',
                        text: 'สร้างอาชีพลูกค้าสำเร็จแล้ว!',
                        icon: 'success',
                        confirmButtonText: 'ตกลง'
                    }).then(() => {
                        location.reload(); // รีเฟรชหน้าหลังจากแสดงข้อความสำเร็จ
                    });
                    $('#careerForm')[0].reset(); // รีเซ็ตฟอร์ม
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        $.each(errors, function(key, value) {
                            Swal.fire({
                                title: 'ข้อผิดพลาด!',
                                text: value[0],
                                icon: 'error',
                                confirmButtonText: 'ตกลง'
                            });
                        });
                    } else {
                        Swal.fire({
                            title: 'ข้อผิดพลาด!',
                            text: 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง.',
                            icon: 'error',
                            confirmButtonText: 'ตกลง'
                        });
                    }
                }
            });
        }

        // หากต้องการจัดการกับปุ่มยกเลิก
        $('#closeModal_career_button').on('click', function() {
            // ปิดโมดัล หรือทำการดำเนินการอื่น ๆ ที่ต้องการ
        });
    });
</script>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addCareerButton = document.getElementById('addCareerButton');
        const modalCareer = document.getElementById('modalCareer');
        const closeModalCareerButton = document.getElementById('closeModal_career');
        const closeModalCareerButton2 = document.getElementById('closeModal_career_button');

        // เปิด Modal เมื่อคลิกปุ่ม "เพิ่มอาชีพ"
        addCareerButton.addEventListener('click', function() {
            modalCareer.classList.remove('hidden');
            modalCareer.classList.add('modal-enter');
            setTimeout(() => {
                modalCareer.classList.add('modal-enter-active');
                modalCareer.classList.remove('modal-enter');
                modalCareer.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // เพิ่มพื้นหลังสีเทา
            }, 10); // เวลาสั้น ๆ เพื่อให้ CSS transition ทำงาน
        });

        // ปิด Modal เมื่อคลิกปุ่มปิด
        closeModalCareerButton.addEventListener('click', function() {
            modalCareer.classList.remove('modal-enter-active');
            modalCareer.classList.add('modal-leave-active');
            setTimeout(() => {
                modalCareer.classList.add('hidden');
                modalCareer.classList.remove('modal-leave-active');
            }, 300); // เวลาในการจาง
        });

        // ปิด Modal เมื่อคลิกปุ่มปิด
        closeModalCareerButton2.addEventListener('click', function() {
            modalCareer.classList.remove('modal-enter-active');
            modalCareer.classList.add('modal-leave-active');
            setTimeout(() => {
                modalCareer.classList.add('hidden');
                modalCareer.classList.remove('modal-leave-active');
            }, 300); // เวลาในการจาง
        });

        // ปิด Modal เมื่อคลิกที่นอก Modal
        window.addEventListener('click', function(event) {
            if (event.target === modalCareer) {
                closeModalCareerButton.click(); // เรียกใช้ปุ่มปิด
            }
        });
    });
</script>


<style>
    /* CSS สำหรับเอฟเฟกต์ slide-fade */
    .modal-enter {
        opacity: 0;
        transform: translateY(-20px);
        /* เลื่อนขึ้น */
    }

    .modal-enter-active {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.3s ease, transform 0.3s ease;
        /* ใช้ transition */
    }

    .modal-leave {
        opacity: 1;
        transform: translateY(0);
        /* อยู่ที่ตำแหน่งเดิม */
    }

    .modal-leave-active {
        opacity: 0;
        transform: translateY(20px);
        /* เลื่อนลง */
        transition: opacity 0.3s ease, transform 0.3s ease;
        /* ใช้ transition */
    }
</style>
