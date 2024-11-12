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
        $('input[name="Status_Cus"]').change(function() {
            if ($(this).is(':checked')) {
                $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled',
                    false);
            }
        });

        // Optional: If you want to disable again if both radio buttons are unchecked
        $('input[name="Status_Cus"]').on('change', function() {
            if (!$('input[name="Status_Cus"]:checked').length) {
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


                $.each(data, function(index, career) {
                    $('#Career_Cus').append('<option value="' + career.Code_Career + ' ' +
                        career.Name_Career + '">' +
                        career.Code_Career + ' - ' + career.Name_Career + '</option>');
                });

            },
            error: function(xhr) {
                console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', xhr);
            }
        });
    });
</script>


{{-- <script>
    $(document).ready(function() {
        $('#careerForm').on('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = {
                DataCus_id: $('#dataCusIdField').val(),
                Status_Cus: $('input[name="Status_Cus"]:checked').val(),
                Career_Cus: $('#Career_Cus').val(),
                Income_Cus: $('#Income_Cus').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus').val(),
                Workplace_Cus: $('#Workplace_Cus').val(),
                Coordinates: $('#Coordinates').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus').val()
            };

            // Validate required fields
            if (!formData.Status_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกประเภทอาชีพ',
                    text: 'โปรดระบุว่าเป็นอาชีพหลักหรืออาชีพรอง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            if (!formData.Career_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกอาชีพ',
                    text: 'โปรดเลือกอาชีพที่ต้องการบันทึก',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            // Show loading indicator
            Swal.fire({
                title: 'กำลังบันทึกข้อมูล...',
                text: 'โปรดรอสักครู่',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // // Send AJAX request
            $.ajax({
                url: '/customers/career', // Update the URL here
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ',
                        text: 'ข้อมูลอาชีพถูกบันทึกเรียบร้อยแล้ว',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#careerForm')[0].reset();
                            $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled', true);
                            $('input[name="Status_Cus"]').prop('checked', false);
                            $('#modalCareer').addClass('hidden');
                            fetchCareerData();
                        }
                    });

                },
                error: function(xhr, status, error) {
                    let errorMessage = 'เกิดข้อผิดพลาดในการบันทึกข้อมูล';

                    // Handle specific error messages from the server
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: errorMessage,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    });
                }
            });

        });

        // Add numeric input validation for income fields
        $('#Income_Cus, #BeforeIncome_Cus, #AfterIncome_Cus').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Calculate AfterIncome_Cus automatically
        $('#Income_Cus, #BeforeIncome_Cus').on('input', function() {
            const income = parseInt($('#Income_Cus').val()) || 0;
            const beforeIncome = parseInt($('#BeforeIncome_Cus').val()) || 0;
            const afterIncome = income - beforeIncome;

            if (afterIncome >= 0) {
                $('#AfterIncome_Cus').val(afterIncome);
            } else {
                $('#AfterIncome_Cus').val('0');
                Swal.fire({
                    icon: 'warning',
                    title: 'ค่าใช้จ่ายมากกว่ารายได้',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
            }
        });
    });
</script> --}}


<script>
    $(document).ready(function() {
        $('#careerForm').on('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = {
                DataCus_id: $('#dataCusIdField').val(),
                Status_Cus: $('input[name="Status_Cus"]:checked').val(),
                Career_Cus: $('#Career_Cus').val(),
                Income_Cus: $('#Income_Cus').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus').val(),
                Workplace_Cus: $('#Workplace_Cus').val(),
                Coordinates: $('#Coordinates').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus').val()
            };

            // Validate required fields
            if (!formData.Status_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกประเภทอาชีพ',
                    text: 'โปรดระบุว่าเป็นอาชีพหลักหรืออาชีพรอง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            if (!formData.Career_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกอาชีพ',
                    text: 'โปรดเลือกอาชีพที่ต้องการบันทึก',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            // Show loading indicator
            Swal.fire({
                title: 'กำลังบันทึกข้อมูล...',
                text: 'โปรดรอสักครู่',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Send AJAX request
            $.ajax({
                url: '/customers/career', // Update the URL here
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ',
                        text: 'ข้อมูลอาชีพถูกบันทึกเรียบร้อยแล้ว',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#careerForm')[0].reset();
                            $('#careerForm input, #careerForm select, #careerForm textarea')
                                .prop('disabled', true);
                            $('input[name="Status_Cus"]').prop('checked', false);
                            $('#modalCareer').addClass('hidden');

                            // เรียกใช้ฟังก์ชันเพื่อโหลดข้อมูลใหม่หลังจากบันทึก
                            fetchCareerData();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    let errorMessage = 'เกิดข้อผิดพลาดในการบันทึกข้อมูล';

                    // Handle specific error messages from the server
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: errorMessage,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    });
                }
            });
        });

        // Add numeric input validation for income fields
        $('#Income_Cus, #BeforeIncome_Cus, #AfterIncome_Cus').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Calculate AfterIncome_Cus automatically
        $('#Income_Cus, #BeforeIncome_Cus').on('input', function() {
            const income = parseInt($('#Income_Cus').val()) || 0;
            const beforeIncome = parseInt($('#BeforeIncome_Cus').val()) || 0;
            const afterIncome = income - beforeIncome;

            if (afterIncome >= 0) {
                $('#AfterIncome_Cus').val(afterIncome);
            } else {
                $('#AfterIncome_Cus').val('0');
                Swal.fire({
                    icon: 'warning',
                    title: 'ค่าใช้จ่ายมากกว่ารายได้',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
            }
        });
    });

    // ฟังก์ชันเพื่อดึงและแสดงข้อมูลอาชีพ
    function fetchCareerData() {
        const customerId = $('#dataCusIdField').val(); // รับ ID ลูกค้า

        $.ajax({
            url: '/get-career-data/' + customerId,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                let html = '';
                let hasCareerCards = false; // เช็คว่ามีการ์ดหรือไม่

                if (data.careers && data.careers.length > 0) {
                    hasCareerCards = true; // พบการ์ดเพิ่มค่าเป็น true

                    $.each(data.careers, function(index, career) {
                        html += `
                        <div class="flex space-x-4 p-2">
                            <div class="w-full mt-0">
                                <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
                                    <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                        <div class="flex justify-between items-center">
                                            <div class="flex-1">
                                                <h6 class="text-primary font-semibold">
                                                    <i class="fas fa-tag"></i> ${career.Career_Cus}
                                                </h6>
                                            </div>
                                            <label class="popup">
                                                <input type="checkbox">
                                                <div class="burger" tabindex="0">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <nav class="popup-window">
                                                    <legend>Actions</legend>
                                                    <ul>
                                                    <li>
                                                        <button data-id="${career.id}"
                                                                data-Status_Cus="${career.Status_Cus}"
                                                                data-DataCus_id="${career.DataCus_id}"
                                                                data-Career_Cus="${career.Career_Cus}"
                                                                data-Workplace_Cus="${career.Workplace_Cus}"
                                                                data-Income_Cus="${career.Income_Cus}"
                                                                data-BeforeIncome_Cus="${career.BeforeIncome_Cus}"
                                                                data-AfterIncome_Cus="${career.AfterIncome_Cus}"
                                                                data-Coordinates="${career.Coordinates}"
                                                                data-IncomeNote_Cus="${career.IncomeNote_Cus}"
                                                                onclick="openModal_Show_career_customer(this)">
                                                        <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                        <span>แสดง</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-id="${career.id}"
                                                                data-Status_Cus="${career.Status_Cus}"
                                                                data-DataCus_id="${career.DataCus_id}"
                                                                data-Career_Cus="${career.Career_Cus}"
                                                                data-Workplace_Cus="${career.Workplace_Cus}"
                                                                data-Income_Cus="${career.Income_Cus}"
                                                                data-BeforeIncome_Cus="${career.BeforeIncome_Cus}"
                                                                data-AfterIncome_Cus="${career.AfterIncome_Cus}"
                                                                data-Coordinates="${career.Coordinates}"
                                                                data-IncomeNote_Cus="${career.IncomeNote_Cus}"
                                                                onclick="openModal_Edit_career_customer(this)">
                                                                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                            <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                                                        </svg>
                                                        <span>แก้ไข</span>
                                                        </button>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <button>
                                                        <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                            <line y2="18" x2="6" y1="6" x1="18"></line>
                                                            <line y2="18" x2="18" y1="6" x1="6"></line>
                                                        </svg>
                                                        <span>ลบ</span>
                                                        </button>
                                                    </li>
                                                    </ul>
                                                </nav>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex">
                                            <div class="flex-1">
                                                <p class="text-truncate">
                                                    <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
                                                    <i class="fas fa-bookmark text-success mb-1 h-5"></i>  <strong>สถานที่ทำงาน</strong> : ${career.Workplace_Cus}<br>
                                                    <i class="fas fa-table text-success mb-1 h-5"></i>  <strong>รายได้</strong> : ${career.Income_Cus}<br>
                                                    <i class="fas fa-briefcase text-success mb-1 h-5"></i>  <strong>อาชีพ</strong> : ${career.Career_Cus}<br>
                                                    <!--<i class="fas fa-building text-success mb-1 h-5"></i>  <strong>สถานที่ทำงาน</strong> : ${career.Workplace_Cus}<br>-->
                                                    <i class="fas fa-money-bill text-success mb-0 h-5"></i>  <strong>เงินเดือน</strong> : ${career.Income_Cus}
                                                </p>

                                            </div>
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('img/career.jpg') }}" alt="${career.DetailCareer_Cus}" class="w-36 h-20">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-t">
                                        <small class="text-muted">
                                            <div class="flex justify-between items-center">
                                                <div title="${career.created_at}">
                                                    <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ
                                                    ${new Date(career.created_at).toLocaleDateString('th-TH', {
                                                        day: 'numeric',
                                                        month: 'long',
                                                        year: 'numeric'
                                                    })} เวลา ${new Date(career.created_at).toLocaleTimeString('th-TH', {
                                                        hour: '2-digit',
                                                        minute: '2-digit',
                                                        hour12: false // ใช้ 24 ชั่วโมง
                                                    })} น.
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p>
                                                </div>
                                            </div>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });
                } else {
                    html = `<p class="text-center text-muted">ไม่พบข้อมูลอาชีพ</p>`;
                }

                $('#career-container').html(html);

                // ซ่อน career-master ถ้ามีการ์ด
                if (hasCareerCards) {
                    $('.career-master').hide();
                } else {
                    $('.career-master').show();
                }
            },
            error: function(xhr, status, error) {
                console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                alert('ไม่สามารถดึงข้อมูลได้ โปรดลองอีกครั้ง');
            }
        });
    }
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


{{--
// Call the fetchCareerData function here
// fetchCareerData(); // Ensure this function is defined elsewhere in your code --}}

{{-- <script>
    $(document).ready(function() {
        $('#careerForm').on('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = {
                DataCus_id: $('#dataCusIdField').val(),
                Status_Cus: $('input[name="Status_Cus"]:checked').val(),
                Career_Cus: $('#Career_Cus').val(),
                Income_Cus: $('#Income_Cus').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus').val(),
                Workplace_Cus: $('#Workplace_Cus').val(),
                Coordinates: $('#Coordinates').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus').val()
            };

            // Validate required fields
            if (!formData.Status_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกประเภทอาชีพ',
                    text: 'โปรดระบุว่าเป็นอาชีพหลักหรืออาชีพรอง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            if (!formData.Career_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกอาชีพ',
                    text: 'โปรดเลือกอาชีพที่ต้องการบันทึก',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            // Show loading indicator
            Swal.fire({
                title: 'กำลังบันทึกข้อมูล...',
                text: 'โปรดรอสักครู่',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Send AJAX request
            $.ajax({
                url: '/api/career/store',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ',
                        text: 'ข้อมูลอาชีพถูกบันทึกเรียบร้อยแล้ว',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#careerForm')[0].reset();
                            $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled', true);
                            $('input[name="Status_Cus"]').prop('checked', false);
                            $('#modalCareer').addClass('hidden');
                            location.reload();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    let errorMessage = 'เกิดข้อผิดพลาดในการบันทึกข้อมูล';

                    // Handle specific error messages from the server
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: errorMessage,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    });
                }
            });
        });

        // Add numeric input validation for income fields
        $('#Income_Cus, #BeforeIncome_Cus, #AfterIncome_Cus').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Calculate AfterIncome_Cus automatically
        $('#Income_Cus, #BeforeIncome_Cus').on('input', function() {
            const income = parseInt($('#Income_Cus').val()) || 0;
            const beforeIncome = parseInt($('#BeforeIncome_Cus').val()) || 0;
            const afterIncome = income - beforeIncome;

            if (afterIncome >= 0) {
                $('#AfterIncome_Cus').val(afterIncome);
            } else {
                $('#AfterIncome_Cus').val('0');
                Swal.fire({
                    icon: 'warning',
                    title: 'ค่าใช้จ่ายมากกว่ารายได้',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
            }
        });
    });
</script> --}}










{{-- <script>
    $(document).ready(function() {
        $('#careerForm').on('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = {
                DataCus_id: $('#dataCusIdField').val(),
                Status_Cus: $('input[name="Status_Cus"]:checked').val(),
                Career_Cus: $('#Career_Cus').val(),
                Income_Cus: $('#Income_Cus').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus').val(),
                Workplace_Cus: $('#Workplace_Cus').val(),
                Coordinates: $('#Coordinates').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus').val()
            };

            // Validate required fields
            if (!formData.Status_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกประเภทอาชีพ',
                    text: 'โปรดระบุว่าเป็นอาชีพหลักหรืออาชีพรอง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            if (!formData.Career_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกอาชีพ',
                    text: 'โปรดเลือกอาชีพที่ต้องการบันทึก',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            // Show loading indicator
            Swal.fire({
                title: 'กำลังบันทึกข้อมูล...',
                text: 'โปรดรอสักครู่',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Send AJAX request
            $.ajax({
                url: '/customers/career', // Update the URL here
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ',
                        text: 'ข้อมูลอาชีพถูกบันทึกเรียบร้อยแล้ว',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#careerForm')[0].reset();
                            $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled', true);
                            $('input[name="Status_Cus"]').prop('checked', false);
                            $('#modalCareer').addClass('hidden');
                            location.reload();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    let errorMessage = 'เกิดข้อผิดพลาดในการบันทึกข้อมูล';

                    // Handle specific error messages from the server
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: errorMessage,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    });
                }
            });
        });

        // Add numeric input validation for income fields
        $('#Income_Cus, #BeforeIncome_Cus, #AfterIncome_Cus').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Calculate AfterIncome_Cus automatically
        $('#Income_Cus, #BeforeIncome_Cus').on('input', function() {
            const income = parseInt($('#Income_Cus').val()) || 0;
            const beforeIncome = parseInt($('#BeforeIncome_Cus').val()) || 0;
            const afterIncome = income - beforeIncome;

            if (afterIncome >= 0) {
                $('#AfterIncome_Cus').val(afterIncome);
            } else {
                $('#AfterIncome_Cus').val('0');
                Swal.fire({
                    icon: 'warning',
                    title: 'ค่าใช้จ่ายมากกว่ารายได้',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
            }
        });
    });
</script> --}}

{{-- <script>
    $(document).ready(function() {
        $('#careerForm').on('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = {
                DataCus_id: $('#dataCusIdField').val(),
                Status_Cus: $('input[name="Status_Cus"]:checked').val(),
                Career_Cus: $('#Career_Cus').val(),
                Income_Cus: $('#Income_Cus').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus').val(),
                Workplace_Cus: $('#Workplace_Cus').val(),
                Coordinates: $('#Coordinates').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus').val()
            };

            // Validate required fields
            if (!formData.Status_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกประเภทอาชีพ',
                    text: 'โปรดระบุว่าเป็นอาชีพหลักหรืออาชีพรอง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            if (!formData.Career_Cus) {
                Swal.fire({
                    icon: 'warning',
                    title: 'กรุณาเลือกอาชีพ',
                    text: 'โปรดเลือกอาชีพที่ต้องการบันทึก',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
                return;
            }

            // Show loading indicator
            Swal.fire({
                title: 'กำลังบันทึกข้อมูล...',
                text: 'โปรดรอสักครู่',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Send AJAX request
            $.ajax({
                url: '/customers/career', // Update the URL here
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ',
                        text: 'ข้อมูลอาชีพถูกบันทึกเรียบร้อยแล้ว',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#careerForm')[0].reset();
                            $('#careerForm input, #careerForm select, #careerForm textarea').prop('disabled', true);
                            $('input[name="Status_Cus"]').prop('checked', false);
                            $('#modalCareer').addClass('hidden');
                            location.reload();
                        }
                    });

                    // Call the fetchCareerData function here
                    fetchCareerData(); // Ensure this function is defined elsewhere in your code
                },
                error: function(xhr, status, error) {
                    let errorMessage = 'เกิดข้อผิดพลาดในการบันทึกข้อมูล';

                    // Handle specific error messages from the server
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: errorMessage,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#F97316'
                    });
                }
            });
        });

        // Add numeric input validation for income fields
        $('#Income_Cus, #BeforeIncome_Cus, #AfterIncome_Cus').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Calculate AfterIncome_Cus automatically
        $('#Income_Cus, #BeforeIncome_Cus').on('input', function() {
            const income = parseInt($('#Income_Cus').val()) || 0;
            const beforeIncome = parseInt($('#BeforeIncome_Cus').val()) || 0;
            const afterIncome = income - beforeIncome;

            if (afterIncome >= 0) {
                $('#AfterIncome_Cus').val(afterIncome);
            } else {
                $('#AfterIncome_Cus').val('0');
                Swal.fire({
                    icon: 'warning',
                    title: 'ค่าใช้จ่ายมากกว่ารายได้',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#F97316'
                });
            }
        });
    });
</script> --}}




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



{{-- // แสดงข้อมูลที่ดึงมา
// $.each(data, function(index, career) {
//     // แสดง Code_Career ก่อน Name_Career
//     $('#Career_Cus').append('<option value="' + career.Code_Career + '">' +
//         career.Code_Career + ' - ' + career.Name_Career + '</option>');
// }); --}}




{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // ฟังก์ชันคำนวณยอดคงเหลือ
        function calculateRemaining() {
            // รับค่าจาก input
            var income = parseFloat($('#Income_Cus').val()) || 0;
            var expenses = parseFloat($('#BeforeIncome_Cus').val()) || 0;
            var remaining = income - expenses;

            $('#AfterIncome_Cus').val(remaining);
        }

        // เพิ่ม event listener เพื่อเรียกใช้ฟังก์ชันคำนวณ
        $('#Income_Cus, #BeforeIncome_Cus').on('input', function() {
            calculateRemaining();
        });
    });
</script> --}}
