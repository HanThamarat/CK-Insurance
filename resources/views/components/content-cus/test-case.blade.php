<div id="modalShowCareer" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white  mt-[-15] rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_show_career_x"
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
                        <h5 class="text-orange-400 font-semibold">แสดงข้อมูลอาชีพลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Show Customers Career)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <form id="showCareerForm">
                <div class="p-0">
                    <input type="hidden" id="careerIdInput" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 pt-2">
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="กำหนดเป็นอาชีพหลัก"
                                        name="Status_Cus" id="adds-0" disabled>
                                    <label class="form-check-label text-base text-gray-700" for="adds-0">
                                        กำหนดเป็นอาชีพหลัก
                                    </label>
                                </div>
                            </div>
                            <div
                                class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                                <div class="form-check">
                                    <input class="form-check-input text-lg" type="radio" value="กำหนดเป็นอาชีพรอง"
                                        name="Status_Cus" id="adds-1" disabled>
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
                            <input type="text" id="careerCusShow" name="Career_Cus"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " disabled>
                            <label for="careerCusShow"
                                class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อาชีพ
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                            <div class="relative">
                                <input type="text" id="Income_Cus_show" name="Income_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " disabled>
                                <label for="Income_Cus_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    รายได้
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="BeforeIncome_Cus_show" name="BeforeIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " disabled>
                                <label for="BeforeIncome_Cus_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หักค่าใช้จ่าย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="AfterIncome_Cus_show" name="AfterIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " disabled>
                                <label for="AfterIncome_Cus_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    คงเหลือ
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="relative">
                                <input type="text" id="Workplace_Cus_show" name="Workplace_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " disabled>
                                <label for="Workplace_Cus_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    สถานที่ทำงาน
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="Coordinates_show" name="Coordinates"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Coordinates_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    พิกัด
                                </label>
                            </div>
                        </div>

                        <div class="relative">
                            <textarea id="IncomeNote_Cus_show" name="IncomeNote_Cus" rows="8"
                                class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" " disabled></textarea>
                            <label for="IncomeNote_Cus_show"
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

        function showCareerDataCus() {

        }

        // เรียกใช้งานฟังก์ชันดึงข้อมูลอาชีพเมื่อโหลดหน้า
        showCareerDataCus();

        // ฟังก์ชันเปิด Modal แก้ไขข้อมูล
        window.openModal_Show_career_customer = function(button) {
            // อ่านค่าจาก data attributes
            const careerData = {
                id: button.dataset.id,
                dataCusId: button.dataset.datacus_id,
                careerCus: button.dataset.career_cus,
                workplaceCus: button.dataset.workplace_cus,
                incomeCus: button.dataset.income_cus,
                beforeIncomeCus: button.dataset.beforeincome_cus,
                afterIncomeCus: button.dataset.afterincome_cus,
                coordinates: button.dataset.coordinates,
                incomeNoteCus: button.dataset.incomenote_cus,
                statusCus: button.dataset.status_cus
            };

            // Set form values
            $('#careerIdInput').val(careerData.id);

            // ตั้งค่า select option สำหรับอาชีพ
            const careerSelect = $('#careerCusShow option').filter(function() {
                const optionValue = JSON.parse($(this).val() || '{"code":"","name":""}');
                return optionValue.code === careerData.careerCus;
            });

            if (careerSelect.length) {
                $('#careerCusShow').val(careerSelect.val());
            }

            // กำหนดค่าให้กับ input fields
            $('#careerCusShow').val(careerData.careerCus);
            $('#Income_Cus_show').val(careerData.incomeCus);
            $('#BeforeIncome_Cus_show').val(careerData.beforeIncomeCus);
            $('#AfterIncome_Cus_show').val(careerData.afterIncomeCus);
            $('#Workplace_Cus_show').val(careerData.workplaceCus);
            $('#Coordinates_show').val(careerData.coordinates);
            $('#IncomeNote_Cus_show').val(careerData.incomeNoteCus);

            // Set radio button status
            $(`input[name="Status_Cus"][value="${careerData.statusCus}"]`).prop('checked', true);

            // แสดง modal
            $('#modalShowCareer')
                .removeClass('modal-leave')
                .addClass('modal-enter')
                .fadeIn(0, function() {
                    $(this).addClass('modal-enter-active');
                });
        };

        // จัดการการส่งฟอร์ม
        $('#showCareerForm').on('submit', function(event) {
            event.preventDefault();

            const careerId = $('#careerIdInput').val();
            const selectedCareer = JSON.parse($('#careerNameShow').val() || '{"code":"","name":""}');

            const formData = {
                Career_Cus: selectedCareer.code + '  ' + selectedCareer.name,
                Career_Name: selectedCareer.code + '  ' + selectedCareer.name,
                Income_Cus: $('#Income_Cus_show').val(),
                BeforeIncome_Cus: $('#BeforeIncome_Cus_show').val(),
                AfterIncome_Cus: $('#AfterIncome_Cus_show').val(),
                Workplace_Cus: $('#Workplace_Cus_show').val(),
                Coordinates: $('#Coordinates_show').val(),
                IncomeNote_Cus: $('#IncomeNote_Cus_show').val(),
                Status_Cus: $('input[name="Status_Cus"]:checked').val()
            };

            // $.ajax({
            //     url: '/career/update/' + careerId,
            //     method: 'POST',
            //     data: JSON.stringify(formData),
            //     contentType: 'application/json',
            //     success: function(response) {
            //         if (response.success) {
            //             Swal.fire({
            //                 title: 'สำเร็จ!',
            //                 text: 'อัพเดทข้อมูลเรียบร้อยแล้ว',
            //                 icon: 'success',
            //                 timer: 1500,
            //                 showConfirmButton: false
            //             }).then(() => {
            //                 $('#modalShowCareer').fadeOut(300);
            //                 // fetchCareerData();
            //                 location.reload();
            //             });
            //         } else {
            //             Swal.fire({
            //                 title: 'ข้อผิดพลาด!',
            //                 text: response.message ||
            //                     'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
            //                 icon: 'error'
            //             });
            //         }
            //     },
            //     error: function(xhr, status, error) {
            //         Swal.fire({
            //             title: 'ข้อผิดพลาด!',
            //             text: 'เกิดข้อผิดพลาดในการเชื่อมต่อกับเซิร์ฟเวอร์',
            //             icon: 'error'
            //         });
            //     }
            // });
        });


        // ปุ่มปิด Modal
        $('#closeModal_show_career_x').on('click', function() {
            $('#modalShowCareer')
                .removeClass('modal-enter-active')
                .addClass('modal-leave')
                .fadeOut(300, function() {
                    $(this).removeClass('modal-leave');
                });
        });

        // ปิด Modal เมื่อคลิกนอก Modal
        $(window).on('click', function(event) {
            if ($(event.target).is('#modalShowCareer')) {
                $('#modalShowCareer')
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
    #modalShowCareer {
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
















<div id="showModalCustomerForm" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="rounded-lg shadow-lg flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white mt-[-15] rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <div id="header" class="top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/icon_user.gif') }}" alt="customer icon" class="avatar-sm"
                        style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">ข้อมูลลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Data Customer)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>
            <div class="p-2 mt-[-20]">
                <form id="showFormCustomerData" class="space-y-5">
                    <input type="hidden" id="customerId" value="{{ $customer->id }}">

                    <div class="border border-gray-300 p-4 rounded-lg">

                        <!-- HTML Structure -->
                        <div class="max-w-7xl mx-auto p-">
                            <div class="bg-white rounded-2xl card-hover p-4">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                    <!-- Left Column -->
                                    <div class="space-y-6">
                                        <h2
                                            class="text-base font-semibold text-gray-800 mb-0 border-b border-gray-300 pb-0">
                                            <img src="{{ asset('gif/cus.gif') }}" alt="Icon"
                                                class="inline-block mr-0 w-12">
                                            ข้อมูลส่วนตัว
                                        </h2>

                                        <!-- Year Section -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">คำนำหน้า</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 mt-[-2]">
                                                    <option value="{{ $customer->prefix }}">{{ $customer->prefix }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ชื่อ</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->first_name }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">นามสกุล</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->last_name }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">วันออกบัตร</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->expiry_date }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-calendar-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">วันหมดอายุบัตร</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->dob }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-calendar-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">อายุ</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->age }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Contact Section -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เบอร์โทรศัพท์</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->phone }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เบอร์โทรศัพท์
                                                    2</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->phone2 }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>


                                        </div>

                                        <!-- Social Media Section -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">Facebook</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->facebook }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fab fa-facebook absolute right-3 top-1/2 -translate-y-1/2 text-blue-600"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">Line
                                                    ID</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->line_id }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fab fa-line absolute right-3 top-1/2 -translate-y-1/2 text-green-600"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="space-y-6">
                                        {{-- <h2 class="text-2xl font-semibold text-gray-800 mb-[-5]">ข้อมูลเพิ่มเติม</h2> --}}
                                        <h2
                                            class="text-base font-semibold text-gray-800 mb-0 border-b border-gray-300 pb-0">
                                            <img src="{{ asset('gif/info.gif') }}" alt="Icon"
                                                class="inline-block mr-0 w-12">
                                            ข้อมูลเพิ่มเติม
                                        </h2>

                                        <!-- Personal Info -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เพศ</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->gender }}">{{ $customer->gender }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">สัญชาติ</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->nationality }}">
                                                        {{ $customer->nationality }}</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ศาสนา</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->religion }}">
                                                        {{ $customer->religion }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ใบขับขี่</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->driving_license }}">
                                                        {{ $customer->driving_license }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">สถานะสมรส</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->marital_status }}">
                                                        {{ $customer->marital_status }}</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เบอร์โทรคู่สมรส</label>
                                                <div class="relative">
                                                    <input type="text" disabled
                                                        value="{{ $customer->spouse_phone ?? 'ไม่มีข้อมูล' }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500
                                                                  {{ $customer->spouse_phone ? 'text-black' : 'text-red-500' }}">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ชื่อคู่สมรส</label>
                                                <div class="relative">
                                                    <input type="text" disabled
                                                        value="{{ $customer->spouse_name ?? 'ไม่มีข้อมูล' }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500
                                                                  {{ $customer->spouse_name ? 'text-black' : 'text-red-500' }}">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ผู้ลงบันทึก</label>
                                                <div class="relative">
                                                    <input type="text" disabled
                                                        value="{{ $customer->user_insert }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Notes Section -->
                                        <div class="input-group">
                                            <label
                                                class="input-label block text-sm font-medium text-gray-600 mb-0">หมายเหตุ</label>
                                            <textarea disabled rows="1"
                                                class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">{{ $customer->note }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end space-x-2">
                        <button type="button" id="cancelCustomerBtn"
                            class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm transition-transform duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-gray-500/50"
                            onclick="closeDataCustomerModal()">
                            <i class="fas fa-times"></i> ย้อนกลับ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>











<div id="modal_show_asset" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-black/50 transition-opacity"></div>

        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-xl w-full max-w-4xl mx-auto">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold text-gray-900">
                    <i class="fas fa-car text-orange-500 mr-2"></i>
                    รายละเอียดข้อมูลรถ
                </h3>
                <button onclick="closeModal_Show_asset()" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Body -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Vehicle Basic Info -->
                    <div class="bg-orange-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-orange-600">ข้อมูลพื้นฐาน</h4>
                        <div class="space-y-3">
                            <p><strong>ประเภทสินทรัพย์:</strong> <span id="modal_Type_Asset"></span></p>
                            <p><strong>ทะเบียนเดิม:</strong> <span id="modal_OldLicense"></span></p>
                            <p><strong>ทะเบียนใหม่:</strong> <span id="modal_NewLicense"></span></p>
                            <p><strong>เลขถัง:</strong> <span id="modal_Vehicle_Chassis"></span></p>
                            <p><strong>เลขเครื่อง:</strong> <span id="modal_Vehicle_Engine"></span></p>
                            <p><strong>สีรถ:</strong> <span id="modal_Vehicle_Color"></span></p>
                        </div>
                    </div>

                    <!-- Vehicle Details -->
                    <div class="bg-blue-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-blue-600">รายละเอียดรถ</h4>
                        <div class="space-y-3">
                            <p><strong>ยี่ห้อ:</strong> <span id="modal_Vehicle_Brand"></span></p>
                            <p><strong>รุ่น:</strong> <span id="modal_Vehicle_Models"></span></p>
                            <p><strong>ปี:</strong> <span id="modal_Vehicle_Years"></span></p>
                            <p><strong>ความจุเครื่องยนต์:</strong> <span id="modal_Vehicle_CC"></span> CC</p>
                            <p><strong>ประเภทเกียร์:</strong> <span id="modal_Vehicle_Gear"></span></p>
                            <p><strong>ประเภทรถ:</strong> <span id="modal_Vehicle_Type"></span></p>
                        </div>
                    </div>

                    <!-- Insurance Info -->
                    <div class="bg-green-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-green-600">ข้อมูลประกัน</h4>
                        <div class="space-y-3">
                            <p><strong>สถานะประกัน:</strong> <span id="modal_Vehicle_InsuranceStatus"></span></p>
                            <p><strong>บริษัทประกัน:</strong> <span id="modal_Vehicle_Companies"></span></p>
                            <p><strong>เลขกรมธรรม์:</strong> <span id="modal_Vehicle_PolicyNumber"></span></p>
                            <div class="mt-4">
                                <p><strong>วันที่ต่อประกัน:</strong> <span id="modal_Insurance_renewal_date"></span></p>
                                <p><strong>วันที่หมดอายุ:</strong> <span id="modal_Insurance_end_date"></span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="bg-purple-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold mb-4 text-purple-600">ข้อมูลเพิ่มเติม</h4>
                        <div class="space-y-3">
                            <p><strong>พ.ร.บ.:</strong> <span id="modal_Choose_Act"></span></p>
                            <div class="ml-4">
                                <p><strong>วันที่ต่อ พ.ร.บ.:</strong> <span id="modal_act_renewal_date"></span></p>
                                <p><strong>วันที่หมดอายุ:</strong> <span id="modal_act_end_date"></span></p>
                            </div>
                            <p class="mt-4"><strong>ทะเบียน:</strong> <span id="modal_Choose_Register"></span></p>
                            <div class="ml-4">
                                <p><strong>วันที่ต่อทะเบียน:</strong> <span id="modal_register_renewal_date"></span></p>
                                <p><strong>วันที่หมดอายุ:</strong> <span id="modal_register_end_date"></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timestamps -->
                <div class="mt-6 text-sm text-gray-500">
                    <p><i class="fas fa-clock mr-2"></i>สร้างเมื่อ: <span id="modal_created_at"></span></p>
                    <p><i class="fas fa-clock mr-2"></i>อัปเดตล่าสุด: <span id="modal_updated_at"></span></p>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex items-center justify-end p-4 border-t">
                <button onclick="closeModal_Show_asset()"
                    class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
                    ปิด
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal_Show_asset_customer(button) {
        const assetId = button.getAttribute('data-id');

        // Fetch asset data using the ID
        fetch(`/api/assets/${assetId}`)
            .then(response => response.json())
            .then(asset => {
                // Update modal content with asset data
                document.getElementById('modal_Type_Asset').textContent = asset.Type_Asset || '-';
                document.getElementById('modal_OldLicense').textContent =
                    `${asset.Vehicle_OldLicense_Text || ''} ${asset.Vehicle_OldLicense_Number || ''} ${asset.OldProvince || ''}`;
                document.getElementById('modal_NewLicense').textContent =
                    `${asset.Vehicle_NewLicense_Text || ''} ${asset.Vehicle_NewLicense_Number || ''} ${asset.NewProvince || ''}`;
                document.getElementById('modal_Vehicle_Chassis').textContent = asset.Vehicle_Chassis || '-';
                document.getElementById('modal_Vehicle_Engine').textContent = asset.Vehicle_Engine || '-';
                document.getElementById('modal_Vehicle_Color').textContent = asset.Vehicle_Color || '-';
                document.getElementById('modal_Vehicle_Brand').textContent = asset.Vehicle_Brand || '-';
                document.getElementById('modal_Vehicle_Models').textContent = asset.Vehicle_Models || '-';
                document.getElementById('modal_Vehicle_Years').textContent = asset.Vehicle_Years || '-';
                document.getElementById('modal_Vehicle_CC').textContent = asset.Vehicle_CC || '-';
                document.getElementById('modal_Vehicle_Gear').textContent = asset.Vehicle_Gear || '-';
                document.getElementById('modal_Vehicle_Type').textContent = asset.Vehicle_Type || '-';
                document.getElementById('modal_Vehicle_InsuranceStatus').textContent = asset
                    .Vehicle_InsuranceStatus || '-';
                document.getElementById('modal_Vehicle_Companies').textContent = asset.Vehicle_Companies || '-';
                document.getElementById('modal_Vehicle_PolicyNumber').textContent = asset.Vehicle_PolicyNumber ||
                    '-';
                document.getElementById('modal_Choose_Act').textContent = asset.Choose_Act || '-';
                document.getElementById('modal_Choose_Register').textContent = asset.Choose_Register || '-';

                // Format dates
                const formatDate = (dateString) => {
                    if (!dateString) return '-';
                    return new Date(dateString).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                };

                document.getElementById('modal_Insurance_renewal_date').textContent = formatDate(asset
                    .Insurance_renewal_date);
                document.getElementById('modal_Insurance_end_date').textContent = formatDate(asset
                    .Insurance_end_date);
                document.getElementById('modal_act_renewal_date').textContent = formatDate(asset.act_renewal_date);
                document.getElementById('modal_act_end_date').textContent = formatDate(asset.act_end_date);
                document.getElementById('modal_register_renewal_date').textContent = formatDate(asset
                    .register_renewal_date);
                document.getElementById('modal_register_end_date').textContent = formatDate(asset
                .register_end_date);
                document.getElementById('modal_created_at').textContent = formatDate(asset.created_at);
                document.getElementById('modal_updated_at').textContent = formatDate(asset.updated_at);

                // Show modal
                document.getElementById('modal_show_asset').classList.remove('hidden');
            })
            .catch(error => {
                console.error('Error fetching asset data:', error);
                alert('เกิดข้อผิดพลาดในการดึงข้อมูล');
            });
    }

    function closeModal_Show_asset() {
        document.getElementById('modal_show_asset').classList.add('hidden');
    }
</script>




{{-- <script>
    function openModal_Show_asset_customer(button) {
        const assetId = button.getAttribute('data-id');

        // Fetch asset data using the ID with AJAX
        $.ajax({
            url: `/data_assets/${assetId}`,
            method: 'GET',
            dataType: 'json',
            success: function(asset) {
                // Update modal content with asset data
                $('#show_Type_Asset').text(asset.Type_Asset || '-');
                $('#show_OldLicense').text(
                    `${asset.Vehicle_OldLicense_Text || ''} ${asset.Vehicle_OldLicense_Number || ''} ${asset.OldProvince || ''}`
                );
                $('#show_NewLicense').text(
                    `${asset.Vehicle_NewLicense_Text || ''} ${asset.Vehicle_NewLicense_Number || ''} ${asset.NewProvince || ''}`
                );
                $('#show_Vehicle_Chassis').text(asset.Vehicle_Chassis || '-');
                $('#show_Vehicle_Engine').text(asset.Vehicle_Engine || '-');
                $('#show_Vehicle_Color').text(asset.Vehicle_Color || '-');
                $('#show_Vehicle_Brand').text(asset.Vehicle_Brand || '-');
                $('#show_Vehicle_Models').text(asset.Vehicle_Models || '-');
                $('#show_Vehicle_Years').text(asset.Vehicle_Years || '-');
                $('#show_Vehicle_CC').text(asset.Vehicle_CC || '-');
                $('#show_Vehicle_Gear').text(asset.Vehicle_Gear || '-');
                $('#show_Vehicle_Type').text(asset.Vehicle_Type || '-');
                $('#show_Vehicle_InsuranceStatus').text(asset.Vehicle_InsuranceStatus || '-');
                $('#show_Vehicle_Companies').text(asset.Vehicle_Companies || '-');
                $('#show_Vehicle_PolicyNumber').text(asset.Vehicle_PolicyNumber || '-');
                $('#show_Choose_Act').text(asset.Choose_Act || '-');
                $('#show_Choose_Register').text(asset.Choose_Register || '-');

                // Format dates
                const formatDate = (dateString) => {
                    if (!dateString) return '-';
                    return new Date(dateString).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                };

                $('#show_Insurance_renewal_date').text(formatDate(asset.Insurance_renewal_date));
                $('#show_Insurance_end_date').text(formatDate(asset.Insurance_end_date));
                $('#show_act_renewal_date').text(formatDate(asset.act_renewal_date));
                $('#show_act_end_date').text(formatDate(asset.act_end_date));
                $('#show_register_renewal_date').text(formatDate(asset.register_renewal_date));
                $('#show_register_end_date').text(formatDate(asset.register_end_date));
                $('#show_created_at').text(formatDate(asset.created_at));
                $('#show_updated_at').text(formatDate(asset.updated_at));

                // Show modal
                $('#show_show_asset').removeClass('hidden');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching asset data:', error);
                alert('เกิดข้อผิดพลาดในการดึงข้อมูล');
            }
        });
    }

    function closeshow_Show_asset() {
        $('#show_show_asset').addClass('hidden');
    }
</script> --}}

{{-- <style>
    .hidden {
        display: none;
    }

    #show_show_asset {
        /* Styles for modal (position, size, background, etc.) */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
        /* Ensure it appears above other content */
    }
</style> --}}



        <!-- Backdrop -->
        {{-- <div class="fixed inset-0 bg-black/50 transition-opacity"></div> --}}





        // const formatDate = (dateString) => {
            //     if (!dateString) return '-';

            //     const [year, month, day] = dateString.split('-');
            //     const convertedYear = parseInt(year) - 543; // แปลงจาก พ.ศ. เป็น ค.ศ.

            //     return new Date(convertedYear, month - 1, day).toLocaleDateString('th-TH', {
            //         year: 'numeric',
            //         month: 'long',
            //         day: 'numeric'
            //     });
            // };

            // $('#show_Insurance_renewal_date').text(formatDate(asset.Insurance_renewal_date));
            // $('#show_Insurance_end_date').text(formatDate(asset.Insurance_end_date));
            // $('#show_act_renewal_date').text(formatDate(asset.act_renewal_date));
            // $('#show_act_end_date').text(formatDate(asset.act_end_date));
            // $('#show_register_renewal_date').text(formatDate(asset.register_renewal_date));
            // $('#show_register_end_date').text(formatDate(asset.register_end_date));




                                    {{-- <div class="space-y-4">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[140px] inline-block">ประกัน :</strong>
                                <span id="show_Choose_Act" class="sm:ml-4"></span>
                            </p>
                            <div class="space-y-4 ml-4">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[140px] inline-block">วันที่ต่อประกัน :</strong>
                                    <span id="show_Insurance_renewal_date" class="sm:ml-4"></span>
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[140px] inline-block">วันที่หมดอายุ :</strong>
                                    <span id="show_Insurance_end_date" class="sm:ml-4"></span>
                                </p>
                            </div>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[140px] inline-block">พ.ร.บ. :</strong>
                                <span id="show_Choose_Act" class="sm:ml-4"></span>
                            </p>
                            <div class="space-y-4 ml-4">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[140px] inline-block">วันที่ต่อ พ.ร.บ. :</strong>
                                    <span id="show_act_renewal_date" class="sm:ml-4"></span>
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[140px] inline-block">วันที่หมดอายุ :</strong>
                                    <span id="show_act_end_date" class="sm:ml-4"></span>
                                </p>
                            </div>
                            <div class="space-y-4 mt-5">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[140px] inline-block">ทะเบียน :</strong>
                                    <span id="show_Choose_Register" class="sm:ml-4"></span>
                                </p>
                                <div class="space-y-4 ml-4">
                                    <p class="flex flex-col sm:flex-row sm:justify-between">
                                        <strong class="min-w-[140px] inline-block">วันที่ต่อทะเบียน :</strong>
                                        <span id="show_register_renewal_date" class="sm:ml-4"></span>
                                    </p>
                                    <p class="flex flex-col sm:flex-row sm:justify-between">
                                        <strong class="min-w-[140px] inline-block">วันที่หมดอายุ :</strong>
                                        <span id="show_register_end_date" class="sm:ml-4"></span>
                                    </p>
                                </div>
                            </div>
                        </div> --}}





{{-- <script>
    function openModal_Show_asset_customer(button) {
        const assetId = button.getAttribute('data-id');

        // Fetch asset data using the ID with AJAX
        $.ajax({
            url: `/data_assets/${assetId}`,
            method: 'GET',
            dataType: 'json',
            success: function(asset) {
                // Update modal content with asset data
                $('#show_Type_Asset').text(asset.Type_Asset || '-');
                $('#show_OldLicense').text(
                    `${asset.Vehicle_OldLicense_Text || ''} ${asset.Vehicle_OldLicense_Number || ''} ${asset.OldProvince || ''}`
                );
                $('#show_NewLicense').text(
                    `${asset.Vehicle_NewLicense_Text || ''} ${asset.Vehicle_NewLicense_Number || ''} ${asset.NewProvince || ''}`
                );
                $('#show_Vehicle_Chassis').text(asset.Vehicle_Chassis || '-');
                $('#show_Vehicle_Engine').text(asset.Vehicle_Engine || '-');
                $('#show_Vehicle_Color').text(asset.Vehicle_Color || '-');
                $('#show_Vehicle_Brand').text(asset.Vehicle_Brand || '-');
                $('#show_Vehicle_Models').text(asset.Vehicle_Models || '-');
                $('#show_Vehicle_Years').text(asset.Vehicle_Years || '-');
                $('#show_Vehicle_CC').text(asset.Vehicle_CC || '-');
                $('#show_Vehicle_Gear').text(asset.Vehicle_Gear || '-');
                $('#show_Vehicle_Type').text(asset.Vehicle_Type || '-');
                $('#show_Vehicle_InsuranceStatus').text(asset.Vehicle_InsuranceStatus || '-');
                $('#show_Vehicle_Companies').text(asset.Vehicle_Companies || '-');
                $('#show_Vehicle_PolicyNumber').text(asset.Vehicle_PolicyNumber || '-');
                $('#show_Choose_Act').text(asset.Choose_Act || '-');
                $('#show_Choose_Register').text(asset.Choose_Register || '-');

                // Format dates
                const formatDate = (dateString) => {
                    if (!dateString) return '-';
                    return new Date(dateString).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                };

                $('#show_Insurance_renewal_date').text(formatDate(asset.Insurance_renewal_date));
                $('#show_Insurance_end_date').text(formatDate(asset.Insurance_end_date));
                $('#show_act_renewal_date').text(formatDate(asset.act_renewal_date));
                $('#show_act_end_date').text(formatDate(asset.act_end_date));
                $('#show_register_renewal_date').text(formatDate(asset.register_renewal_date));
                $('#show_register_end_date').text(formatDate(asset.register_end_date));
                $('#show_created_at').text(formatDate(asset.created_at));
                $('#show_updated_at').text(formatDate(asset.updated_at));

                // Show the modal
                $('#show_modal_asset').removeClass('hidden');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching asset data:', error);
            }
        });
    }

    function closeModal_Show_asset() {
        $('#show_modal_asset').addClass('hidden');
    }
</script> --}}










<div class="bg-purple-50 rounded-xl p-6 shadow-sm">
    <h4 class="text-lg font-semibold mb-5 text-purple-600">ข้อมูลเพิ่มเติม</h4>
    <div class="space-y-4">
        <p class="flex flex-col sm:flex-row sm:justify-between">
            <strong class="min-w-[100px] inline-block">สถานะประกัน :</strong>
            <span id="show_Vehicle_InsuranceStatus" class="sm:ml-2"></span>
        </p>
        <p class="flex flex-col sm:flex-row sm:justify-between">
            <strong class="min-w-[100px] inline-block">บริษัทประกัน :</strong>
            <span id="show_Vehicle_Companies" class="sm:ml-2"></span>
        </p>
        <p class="flex flex-col sm:flex-row sm:justify-between">
            <strong class="min-w-[100px] inline-block">เลขกรมธรรม์ :</strong>
            <span id="show_Vehicle_PolicyNumber" class="sm:ml-2"></span>
        </p>
        <p class="flex flex-col sm:flex-row sm:justify-between">
            <strong class="min-w-[100px] inline-block">กำหนดตอกตัวเลขใหม่ :</strong>
            <span id="show_Vehicle_New_Number" class="sm:ml-2"></span>
        </p>
        {{-- <div class="space-y-4 mt-5">
            <p class="flex flex-col sm:flex-row sm:justify-between">
                <strong class="min-w-[140px] inline-block">วันที่ต่อประกัน :</strong>
                <span id="show_Insurance_renewal_date" class="sm:ml-4"></span>
            </p>
            <p class="flex flex-col sm:flex-row sm:justify-between">
                <strong class="min-w-[140px] inline-block">วันที่หมดอายุ :</strong>
                <span id="show_Insurance_end_date" class="sm:ml-4"></span>
            </p>
        </div> --}}
    </div>

</div>




                    <!-- Additional Info -->
                    {{-- <div class="bg-purple-50 rounded-xl p-6 shadow-sm">
                        <h4 class="text-lg font-semibold mb-5 text-purple-600">ข้อมูลเพิ่มเติม</h4>
                        <div class="space-y-4">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">สถานะประกัน :</strong>
                                <input type="text" id="edit_Vehicle_InsuranceStatus"
                                    class="sm:ml-2 border rounded px-2 py-1">
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">บริษัทประกัน :</strong>
                                <input type="text" id="edit_Vehicle_Companies"
                                    class="sm:ml-2 border rounded px-2 py-1">
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">เลขกรมธรรม์ :</strong>
                                <input type="text" id="edit_Vehicle_PolicyNumber"
                                    class="sm:ml-2 border rounded px-2 py-1">
                            </p>

                        </div>
                    </div> --}}


