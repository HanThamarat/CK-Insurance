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
                            <select id="careerName" name="Career_Cus"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                <option value="">อาชีพ</option>
                                <!-- ตัวเลือกจะถูกเติมที่นี่โดย AJAX -->
                            </select>
                            <label for="careerName"
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





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        // ฟังก์ชันดึงข้อมูลอาชีพเมื่อโหลดหน้า
        function fetchCareerData() {
            $.ajax({
                url: '/get-careers', // URL สำหรับดึงข้อมูลอาชีพ
                method: 'GET', // ใช้การเรียก GET
                success: function(data) {
                    const careerName = $('#careerName');
                    careerName.empty(); // ล้างค่าเดิมใน select

                    if (data.length > 0) {
                        // เพิ่มตัวเลือกใหม่ใน select
                        $.each(data, function(index, career) {
                            careerName.append(
                                $('<option>').val(career.Code_Career).text(career
                                    .Code_Career + ' - ' + career.Name_Career)
                            );
                        });
                    } else {
                        careerName.append($('<option>').text('ไม่มีข้อมูลอาชีพ'));
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('เกิดข้อผิดพลาดในการดึงข้อมูลอาชีพ');
                }
            });
        }

        // เรียกใช้งานฟังก์ชันดึงข้อมูลอาชีพเมื่อโหลดหน้า
        fetchCareerData();

        // ฟังก์ชันจัดการการแสดง Modal
        window.openModal_Edit_career_customer = function(button) {
            const careerData = {
                id: button.dataset.id,
                name: button.dataset.careerName || 'ชื่อไม่ระบุ',
                income: button.dataset.income,
                beforeIncome: button.dataset.beforeIncome,
                afterIncome: button.dataset.afterIncome,
                workplace: button.dataset.workplace,
                coordinates: button.dataset.coordinates,
                note: button.dataset.note
            };

            console.log(careerData);
            $('#careerIdInput').val(careerData.id);
            $('#Career_Cus_edit').val(button.dataset.careerCode); // set the career code in the select
            $('#Income_Cus_edit').val(careerData.income);
            $('#BeforeIncome_Cus_edit').val(careerData.beforeIncome);
            $('#AfterIncome_Cus_edit').val(careerData.afterIncome);
            $('#Workplace_Cus_edit').val(careerData.workplace);
            $('#Coordinates_edit').val(careerData.coordinates);
            $('#IncomeNote_Cus_edit').val(careerData.note);

            // แสดงชื่อใน Modal
            $('#nameDisplay').text(careerData.name); // สมมุติว่าคุณมี element ที่แสดงชื่อ

            // เปิด Modal ด้วย slide fade
            $('#modalEditCareer')
                .removeClass('modal-leave')
                .addClass('modal-enter')
                .fadeIn(0, function() {
                    $(this).addClass('modal-enter-active');
                });
        };

        // $(document).on('submit', '#editCareerForm', function(event) {
        //     event.preventDefault();
        //     const careerId = $('#careerIdInput').val();
        //     const careerCode = $('#Career_Cus_edit').val(); // ค่าจาก career code
        //     const careerName = $('#nameDisplay').text(); // ค่า Name_Career ที่แสดงใน Modal
        //     const formData = $(this).serialize() +
        //         '&career_code=' + encodeURIComponent(careerCode) +
        //         '&career_name=' + encodeURIComponent(careerName); // เพิ่ม Code_Career และ Name_Career

        //     console.log('Submitting to:', '/career/update/' + careerId);

        //     // Send AJAX request
        //     $.ajax({
        //         url: '/career/update/' + careerId,
        //         method: 'POST',
        //         data: formData,
        //         success: function(response) {
        //             console.log(response); // ตรวจสอบ response ที่ได้รับ

        //             if (response.success) {
        //                 // อัปเดตข้อมูลใน HTML หรือทำการ render ใหม่
        //                 const careerData = response.data; // สมมุติว่า response.data คือข้อมูลที่อัปเดต
        //                 $('#careerName').val(careerData.Code_Career); // แสดง Career Code
        //                 $('#nameDisplay').text(careerData.Name_Career); // แสดง Career Name
        //                 $('#Income_Cus_edit').val(careerData.Income); // แสดง Income
        //                 $('#BeforeIncome_Cus_edit').val(careerData.BeforeIncome); // แสดง Before Income
        //                 $('#AfterIncome_Cus_edit').val(careerData.AfterIncome); // แสดง After Income
        //                 $('#Workplace_Cus_edit').val(careerData.Workplace); // แสดง Workplace
        //                 $('#Coordinates_edit').val(careerData.Coordinates); // แสดง Coordinates
        //                 $('#IncomeNote_Cus_edit').val(careerData.Note); // แสดง Income Note

        //                 Swal.fire({
        //                     title: 'สำเร็จ!',
        //                     text: response.message,
        //                     icon: 'success',
        //                     timer: 1500,
        //                     showConfirmButton: false
        //                 }).then(() => {
        //                     fetchCareerData(); // ดึงข้อมูลใหม่
        //                 });
        //             } else {
        //                 Swal.fire({
        //                     title: 'ข้อผิดพลาด!',
        //                     text: response.message || 'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ.',
        //                     icon: 'error',
        //                     timer: 1500,
        //                     showConfirmButton: false
        //                 });
        //             }
        //         },
        //         error: function(xhr, status, error) {
        //             console.error('Error:', error);
        //             alert('เกิดข้อผิดพลาดในการเชื่อมต่อเซิร์ฟเวอร์: ' + xhr.responseText);
        //         }
        //     });
        // });

        $(document).on('submit', '#editCareerForm', function(event) {
            event.preventDefault();

            const careerId = $('#careerIdInput').val();
            const careerCode = $('#Career_Cus_edit').val();
            const careerName = $('#nameDisplay').text();

            // Collect form data and add additional data
            const formData = {
                Career_Cus: careerCode,
                Income_Cus: $('#Income_Cus_edit').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus_edit').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus_edit').val(),
                Workplace_Cus: $('#Workplace_Cus_edit').val(),
                Coordinates: $('#Coordinates_edit').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus_edit').val(),
                Status_Cus: $('#Status_Cus_edit').val()
            };

            console.log('Submitting to:', '/career/update/' + careerId);

            // Send AJAX request
            $.ajax({
                url: '/career/update/' + careerId,
                method: 'POST',
                data: JSON.stringify(formData), // Convert data to JSON
                contentType: 'application/json', // Set content type to JSON
                success: function(response) {
                    console.log(response);

                    if (response.success) {
                        // Update form fields with updated data
                        const careerData = response.data;
                        $('#careerName').val(careerData.Career_Cus);
                        $('#nameDisplay').text(careerData.Career_Cus);
                        $('#Income_Cus_edit').val(careerData.Income_Cus);
                        $('#BeforeIncome_Cus_edit').val(careerData.BeforeIncome_Cus);
                        $('#AfterIncome_Cus_edit').val(careerData.AfterIncome_Cus);
                        $('#Workplace_Cus_edit').val(careerData.Workplace_Cus);
                        $('#Coordinates_edit').val(careerData.Coordinates);
                        $('#IncomeNote_Cus_edit').val(careerData.IncomeNote_Cus);

                        Swal.fire({
                            title: 'สำเร็จ!',
                            text: response.message,
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            fetchCareerData(); // Fetch updated data
                        });
                    } else {
                        Swal.fire({
                            title: 'ข้อผิดพลาด!',
                            text: response.message || 'ข้อมูลไม่ถูกต้องหรือไม่พบ.',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'ข้อผิดพลาด!',
                        text: 'เกิดข้อผิดพลาดในการเชื่อมต่อเซิร์ฟเวอร์: ' + xhr
                            .responseText,
                        icon: 'error'
                    });
                }
            });
        });


        // ฟังก์ชันปิด Modal
        $('#closeModal_career_x').on('click', function() {
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





{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        // ฟังก์ชันดึงข้อมูลอาชีพเมื่อโหลดหน้า
        function fetchCareerData() {
            $.ajax({
                url: '/get-careers', // URL สำหรับดึงข้อมูลอาชีพ
                method: 'GET', // ใช้การเรียก GET
                success: function(data) {
                    const careerName = $('#careerName');
                    careerName.empty(); // ล้างค่าเดิมใน select

                    if (data.length > 0) {
                        // เพิ่มตัวเลือกใหม่ใน select
                        $.each(data, function(index, career) {
                            careerName.append(
                                $('<option>').val(career.Code_Career).text(career
                                    .Code_Career + ' - ' + career.Name_Career)
                            );
                        });
                    } else {
                        careerName.append($('<option>').text('ไม่มีข้อมูลอาชีพ'));
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('เกิดข้อผิดพลาดในการดึงข้อมูลอาชีพ');
                }
            });
        }

        // เรียกใช้งานฟังก์ชันดึงข้อมูลอาชีพเมื่อโหลดหน้า
        fetchCareerData();

        // ฟังก์ชันจัดการการแสดง Modal
        window.openModal_Edit_career_customer = function(button) {
            const careerData = {
                id: button.dataset.id,
                name: button.dataset.careerCode + ' ' + button.dataset.careerName || 'ชื่อไม่ระบุ',
                income: button.dataset.income,
                beforeIncome: button.dataset.beforeIncome,
                afterIncome: button.dataset.afterIncome,
                workplace: button.dataset.workplace,
                coordinates: button.dataset.coordinates,
                note: button.dataset.note
            };

            console.log(careerData);
            $('#careerIdInput').val(careerData.id);
            $('#Career_Cus_edit').val(button.dataset.careerCode); // set the career code in the select
            $('#Income_Cus_edit').val(careerData.income);
            $('#BeforeIncome_Cus_edit').val(careerData.beforeIncome);
            $('#AfterIncome_Cus_edit').val(careerData.afterIncome);
            $('#Workplace_Cus_edit').val(careerData.workplace);
            $('#Coordinates_edit').val(careerData.coordinates);
            $('#IncomeNote_Cus_edit').val(careerData.note);

            // แสดงชื่อใน Modal
            $('#nameDisplay').text(careerData.name); // สมมุติว่าคุณมี element ที่แสดงชื่อ

            // เปิด Modal ด้วย slide fade
            $('#modalEditCareer')
                .removeClass('modal-leave')
                .addClass('modal-enter')
                .fadeIn(0, function() {
                    $(this).addClass('modal-enter-active');
                });
        };

        $(document).on('submit', '#editCareerForm', function(event) {
            event.preventDefault();
            const careerId = $('#careerIdInput').val();
            const careerCode = $('#Career_Cus_edit').val(); // ค่าจาก career code
            const careerName = $('#nameDisplay').text(); // ค่า Name_Career ที่แสดงใน Modal
            const formData = $(this).serialize() +
                '&career_code=' + encodeURIComponent(careerCode) +
                '&career_name=' + encodeURIComponent(careerName); // เพิ่ม Code_Career และ Name_Career

            console.log('Submitting to:', '/career/update/' + careerId);

            // Send AJAX request
            $.ajax({
                url: '/career/update/' + careerId,
                method: 'POST',
                data: formData,
                success: function(response) {
                    console.log(response); // ตรวจสอบ response ที่ได้รับ

                    if (response.success) {
                        Swal.fire({
                            title: 'สำเร็จ!',
                            text: response.message,
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            fetchCareerData(); // ดึงข้อมูลใหม่
                        });
                    } else {
                        Swal.fire({
                            title: 'ข้อผิดพลาด!',
                            text: response.message ||
                                'ข้อมูลที่อยู่ไม่ถูกต้องหรือไม่พบ.',
                            icon: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('เกิดข้อผิดพลาดในการเชื่อมต่อเซิร์ฟเวอร์: ' + xhr.responseText);
                }
            });
        });



        // ฟังก์ชันปิด Modal
        $('#closeModal_career_x').on('click', function() {
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
    });
</script> --}}
