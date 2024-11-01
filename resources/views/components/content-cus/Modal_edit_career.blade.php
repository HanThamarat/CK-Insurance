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
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
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
</script>


{{-- <script>
    $(document).ready(function() {
        $('#editCareerForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            const formData = $(this).serialize(); // Serialize form data

            $.ajax({
                type: 'PUT', // Use PUT for update
                url: '/career/' + $('#careerIdInput')
            .val(), // Update the URL according to your routes
                data: formData,
                success: function(response) {
                    // Handle success response
                    alert('Career information updated successfully!');
                    // Close the modal or refresh the data as necessary
                    $('#modalEditCareer').addClass('hidden');
                    // Optionally, refresh the table or update the displayed data
                },
                error: function(xhr) {
                    // Handle error response
                    alert('Error updating career information: ' + xhr.responseJSON.message);
                }
            });
        });

        // Load existing career data when modal opens
        $('#modalEditCareer').on('show.bs.modal', function(event) {
            const button = $(event.relatedTarget); // Button that triggered the modal
            const careerId = button.data('id'); // Extract info from data-* attributes

            // Fetch career data for the given id
            $.ajax({
                type: 'GET',
                url: '/career/' + careerId,
                success: function(response) {
                    // Populate form fields with existing data
                    $('#careerIdInput').val(response.id);
                    $('#Career_Cus_edit').val(response.Career_Cus);
                    $('#Income_Cus_edit').val(response.Income_Cus);
                    $('#BeforeIncome_Cus_edit').val(response.BeforeIncome_Cus);
                    $('#AfterIncome_Cus_edit').val(response.AfterIncome_Cus);
                    $('#Workplace_Cus_edit').val(response.Workplace_Cus);
                    $('#Coordinates_edit').val(response.Coordinates);
                    $('#IncomeNote_Cus_edit').val(response.IncomeNote_Cus);
                    // Set radio buttons based on the status
                    $('input[name="Status_Cus"][value="' + response.Status_Cus + '"]').prop(
                        'checked', true);
                }
            });
        });
    });
</script> --}}
