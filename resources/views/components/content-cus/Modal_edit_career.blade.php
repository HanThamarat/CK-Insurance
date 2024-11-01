{{-- <div id="modalEditCareer" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white  mt-[-15] rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_career_x"
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
                        <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลอาชีพลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Edit Customers Career)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <form id="editCareerForm" onsubmit="return handleSubmit(event)">

                <div class="p-0">
                    <input type="hidden" id="careerIdInput" />
                    <input type="hidden" id="careerNameInput" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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

                    <input type="text" id="dataCusIdField" name="DataCus_id" hidden value="{{ $customer->id }}">

                    <div class="space-y-4 mt-2">

                        <div class="relative">
                            <select id="Career_Cus_edit" name="Career_Cus"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                oninput="this.setCustomValidity('')">
                                <option value="">อาชีพ</option>
                                <!-- ตัวเลือกจะถูกเติมที่นี่โดย AJAX -->
                            </select>
                            <label for="Career_Cus_edit"
                                class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อาชีพ
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">

                            <div class="relative">
                                <input type="text" id="Income_Cus_edit" name="Income_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Income_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    รายได้
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="BeforeIncome_Cus_edit" name="BeforeIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="BeforeIncome_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หักค่าใช้จ่าย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="AfterIncome_Cus_edit" name="AfterIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="AfterIncome_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    คงเหลือ
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                            <div class="relative">
                                <input type="text" id="Workplace_Cus_edit" name="Workplace_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Workplace_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    สถานที่ทำงาน
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="Coordinates_edit" name="Coordinates"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Coordinates_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    พิกัด
                                </label>
                            </div>
                        </div>

                        <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                            <textarea id="IncomeNote_Cus_edit" name="IncomeNote_Cus" rows="8"
                                class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" "></textarea>
                            <label for="IncomeNote_Cus_edit"
                                class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                รายละเอียด
                            </label>
                        </div>

                        <div class="relative flex justify-end space-x-2">
                            <button type="submit" id="submitEditBtnCareer"
                                class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 focus:outline-none">
                                บันทึกข้อมูล
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}



<div id="modalEditCareer" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white  mt-[-15] rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_career_x"
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
                        <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลอาชีพลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Edit Customers Career)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <form id="editCareerForm">

                <div class="p-0">
                    <input type="hidden" id="careerIdInput" />
                    <input type="hidden" id="careerNameInput" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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

                    <input type="text" id="dataCusIdField" name="DataCus_id" hidden value="{{ $customer->id }}">

                    <div class="space-y-4 mt-2">

                        <div class="relative">
                            <select id="Career_Cus_edit" name="Career_Cus"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                oninput="this.setCustomValidity('')">
                                <option value="">อาชีพ</option>
                                <!-- ตัวเลือกจะถูกเติมที่นี่โดย AJAX -->
                            </select>
                            <label for="Career_Cus_edit"
                                class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อาชีพ
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">

                            <div class="relative">
                                <input type="text" id="Income_Cus_edit" name="Income_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Income_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    รายได้
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="BeforeIncome_Cus_edit" name="BeforeIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="BeforeIncome_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หักค่าใช้จ่าย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="AfterIncome_Cus_edit" name="AfterIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="AfterIncome_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    คงเหลือ
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                            <div class="relative">
                                <input type="text" id="Workplace_Cus_edit" name="Workplace_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Workplace_Cus_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    สถานที่ทำงาน
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="Coordinates_edit" name="Coordinates"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Coordinates_edit"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    พิกัด
                                </label>
                            </div>
                        </div>

                        <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                            <textarea id="IncomeNote_Cus_edit" name="IncomeNote_Cus" rows="8"
                                class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" "></textarea>
                            <label for="IncomeNote_Cus_edit"
                                class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                รายละเอียด
                            </label>
                        </div>

                        <div class="relative flex justify-end space-x-2">
                            <button type="submit" id="submitEditBtnCareer"
                                class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 focus:outline-none">
                                บันทึกข้อมูล
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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

    /* สำหรับ modal */
    #modalEditCareer {
        display: none;
        /* ซ่อน modal เริ่มต้น */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* พื้นหลังโปร่งแสง */
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        position: relative;
    }
</style>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // ฟังก์ชันจัดการการแสดง Modal
    function openModal_Edit_career_customer(button) {
        const careerData = {
            id: button.dataset.id,
            name: button.dataset.careerName,
            income: button.dataset.income,
            beforeIncome: button.dataset.beforeIncome,
            afterIncome: button.dataset.afterIncome,
            workplace: button.dataset.workplace,
            coordinates: button.dataset.coordinates,
            note: button.dataset.note
        };

        console.log(careerData); // ตรวจสอบข้อมูล
        $('#careerIdInput').val(careerData.id);
        $('#careerNameInput').val(careerData.name);
        $('#Income_Cus_edit').val(careerData.income);
        $('#BeforeIncome_Cus_edit').val(careerData.beforeIncome);
        $('#AfterIncome_Cus_edit').val(careerData.afterIncome);
        $('#Workplace_Cus_edit').val(careerData.workplace);
        $('#Coordinates_edit').val(careerData.coordinates);
        $('#IncomeNote_Cus_edit').val(careerData.note);

        // เปิด Modal ด้วย slide fade
        $('#modalEditCareer')
            .removeClass('modal-leave')
            .addClass('modal-enter')
            .fadeIn(0, function() {
                $(this).addClass('modal-enter-active');
            });
    }


    $(document).ready(function() {
        $('#editCareerForm').on('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                id: $('#careerIdInput').val(),
                DataCus_id: $('#dataCusIdField').val(),
                Status_Cus: $('input[name="Status_Cus"]:checked').val(),
                Career_Cus: $('#Career_Cus_edit').val(),
                Income_Cus: $('#Income_Cus_edit').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus_edit').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus_edit').val(),
                Workplace_Cus: $('#Workplace_Cus_edit').val(),
                Coordinates: $('#Coordinates_edit').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus_edit').val()
            };

            // Show loading state
            $('#submitEditBtnCareer').prop('disabled', true).html(`
                <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                กำลังบันทึก...
            `);

            $.ajax({
                url: '/api/career/update',
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        Swal.fire({
                            icon: 'success',
                            title: 'บันทึกข้อมูลสำเร็จ',
                            text: 'ข้อมูลอาชีพได้รับการอัปเดตแล้ว',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Close modal and refresh data
                        $('#modalEditCareer').hide();
                        // Assuming you have a function to refresh the career data table
                        refreshCareerTable();
                    } else {
                        throw new Error(response.message ||
                            'เกิดข้อผิดพลาดในการบันทึกข้อมูล');
                    }
                },
                error: function(xhr) {
                    // Handle validation errors
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = '<ul class="list-disc pl-4">';
                        for (const field in errors) {
                            errorMessage += `<li>${errors[field][0]}</li>`;
                        }
                        errorMessage += '</ul>';

                        Swal.fire({
                            icon: 'error',
                            title: 'ข้อผิดพลาดในการตรวจสอบข้อมูล',
                            html: errorMessage,
                            confirmButtonText: 'ตกลง'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถบันทึกข้อมูลได้ กรุณาลองใหม่อีกครั้ง',
                            confirmButtonText: 'ตกลง'
                        });
                    }
                },
                complete: function() {
                    // Reset button state
                    $('#submitEditBtnCareer').prop('disabled', false).html('บันทึกข้อมูล');
                }
            });
        });

        function refreshCareerTable() {
        }
    });

    // Function to format number inputs
    function formatNumber(input) {
        let value = input.value.replace(/[^\d.]/g, '');
        if (value) {
            value = parseFloat(value).toLocaleString('en-US', {
                maximumFractionDigits: 2,
                minimumFractionDigits: 0
            });
            input.value = value;
        }
    }

    // Add event listeners for number formatting
    ['Income_Cus_edit', 'BeforeIncome_Cus_edit', 'AfterIncome_Cus_edit'].forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.addEventListener('input', function() {
                formatNumber(this);
            });
            element.addEventListener('blur', function() {
                formatNumber(this);
            });
        }
    });


    // ฟังก์ชันปิด Modal
    function closeModal() {
        $('#modalEditCareer')
            .removeClass('modal-enter-active')
            .addClass('modal-leave')
            .fadeOut(300, function() {
                $(this).removeClass('modal-leave');
            });
    }

    // ปิด Modal เมื่อคลิกปุ่มปิด
    $('#closeModal_career_x').on('click', closeModal);

    // ปิด Modal เมื่อคลิกนอก Modal
    $(window).on('click', function(event) {
        if ($(event.target).is('#modalEditCareer')) {
            closeModal();
        }
    });
</script>








{{-- <script>
    // ฟังก์ชันจัดการการแสดง Modal
    function openModal_Edit_career_customer(button) {
        const careerData = {
            id: button.dataset.id,
            name: button.dataset.careerName,
            income: button.dataset.income,
            beforeIncome: button.dataset.beforeIncome,
            afterIncome: button.dataset.afterIncome,
            workplace: button.dataset.workplace,
            coordinates: button.dataset.coordinates,
            note: button.dataset.note
        };

        console.log(careerData); // ตรวจสอบข้อมูล
        document.getElementById('careerIdInput').value = careerData.id;
        document.getElementById('careerNameInput').value = careerData.name;
        document.getElementById('Income_Cus_edit').value = careerData.income;
        document.getElementById('BeforeIncome_Cus_edit').value = careerData.beforeIncome;
        document.getElementById('AfterIncome_Cus_edit').value = careerData.afterIncome;
        document.getElementById('Workplace_Cus_edit').value = careerData.workplace;
        document.getElementById('Coordinates_edit').value = careerData.coordinates;
        document.getElementById('IncomeNote_Cus_edit').value = careerData.note;

        // เปิด Modal ด้วย slide fade
        $('#modalEditCareer')
            .removeClass('modal-leave')
            .addClass('modal-enter')
            .fadeIn(0, function() {
                $(this).addClass('modal-enter-active');
            });
    }

    // ฟังก์ชันจัดการการส่งข้อมูลในฟอร์ม
    $(document).on('submit', '#editCareerForm', function(event) {
        event.preventDefault(); // หยุดการส่งฟอร์ม
        const formData = $(this).serialize(); // แปลงข้อมูลฟอร์มเป็นสตริง

        // ส่งข้อมูลไปยังเซิร์ฟเวอร์ผ่าน AJAX
        $.ajax({
            url: '/update-career',
            method: 'POST',
            data: formData,
            success: function(data) {
                if (data.success) {
                    alert('ข้อมูลได้รับการบันทึกเรียบร้อยแล้ว');
                    // ปิด Modal ด้วย slide fade
                    $('#modalEditCareer')
                        .removeClass('modal-enter-active')
                        .addClass('modal-leave')
                        .fadeOut(300, function() {
                            $(this).removeClass('modal-leave');
                        });
                    // อัปเดตตารางหรือ UI ตามต้องการ
                } else {
                    alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('เกิดข้อผิดพลาดในการเชื่อมต่อเซิร์ฟเวอร์');
            }
        });
    });

    // ฟังก์ชันปิด Modal
    $('#closeModal_career_x').on('click', function() {
        // ปิด Modal ด้วย slide fade
        $('#modalEditCareer')
            .removeClass('modal-enter-active')
            .addClass('modal-leave')
            .fadeOut(300, function() {
                $(this).removeClass('modal-leave');
            });
    });

    // ปิด Modal เมื่อคลิกนอก Modal
    $(window).on('click', function(event) {
        if ($(event.target).is('#modalEditCareer')) {
            $('#modalEditCareer')
                .removeClass('modal-enter-active')
                .addClass('modal-leave')
                .fadeOut(300, function() {
                    $(this).removeClass('modal-leave');
                });
        }
    });
</script> --}}




{{-- <script>
    // ฟังก์ชันโหลดข้อมูลอาชีพ
    function loadCareerOptions() {
        $.ajax({
            url: '/get-career-options', // URL ที่จะดึงข้อมูลอาชีพ
            method: 'GET',
            success: function(data) {
                // เคลียร์ตัวเลือกเก่าใน select
                $('#Career_Cus_edit').empty();
                $('#Career_Cus_edit').append('<option value="">อาชีพ</option>'); // เพิ่มตัวเลือกเริ่มต้น

                // เพิ่มตัวเลือกอาชีพใหม่
                data.forEach(function(career) {
                    $('#Career_Cus_edit').append(
                        `<option value="${career.id}">${career.name}</option>`);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading career options:', error);
                alert('เกิดข้อผิดพลาดในการโหลดอาชีพ');
            }
        });
    }

    // ฟังก์ชันจัดการการแสดง Modal
    function openModal_Edit_career_customer(button) {
        const careerData = {
            id: button.dataset.id,
            name: button.dataset.careerName,
            income: button.dataset.income,
            beforeIncome: button.dataset.beforeIncome,
            afterIncome: button.dataset.afterIncome,
            workplace: button.dataset.workplace,
            coordinates: button.dataset.coordinates,
            note: button.dataset.note
        };

        console.log(careerData); // ตรวจสอบข้อมูล
        document.getElementById('careerIdInput').value = careerData.id;
        document.getElementById('careerNameInput').value = careerData.name;
        document.getElementById('Income_Cus_edit').value = careerData.income;
        document.getElementById('BeforeIncome_Cus_edit').value = careerData.beforeIncome;
        document.getElementById('AfterIncome_Cus_edit').value = careerData.afterIncome;
        document.getElementById('Workplace_Cus_edit').value = careerData.workplace;
        document.getElementById('Coordinates_edit').value = careerData.coordinates;
        document.getElementById('IncomeNote_Cus_edit').value = careerData.note;

        // โหลดข้อมูลอาชีพ
        loadCareerOptions();

        // เปิด Modal ด้วย slide fade
        $('#modalEditCareer')
            .removeClass('modal-leave')
            .addClass('modal-enter')
            .fadeIn(0, function() {
                $(this).addClass('modal-enter-active');
            });
    }
</script> --}}



{{-- // ฟังก์ชันจัดการการส่งข้อมูลในฟอร์ม
// $(document).on('submit', '#editCareerForm', function(event) {
//     event.preventDefault(); // หยุดการส่งฟอร์ม
//     const formData = $(this).serialize(); // แปลงข้อมูลฟอร์มเป็นสตริง

//     // ส่งข้อมูลไปยังเซิร์ฟเวอร์ผ่าน AJAX
//     $.ajax({
//         url: '/update-career',
//         method: 'POST',
//         data: formData,
//         success: function(data) {
//             if (data.success) {
//                 alert('ข้อมูลได้รับการบันทึกเรียบร้อยแล้ว');
//                 closeModal(); // ปิด Modal
//                 // อัปเดตตารางหรือ UI ตามต้องการ
//             } else {
//                 alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error('Error:', error);
//             alert('เกิดข้อผิดพลาดในการเชื่อมต่อเซิร์ฟเวอร์');
//         }
//     });
// }); --}}
