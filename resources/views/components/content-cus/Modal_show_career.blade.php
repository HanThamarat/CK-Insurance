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
                            {{-- <select id="careerNameShow" name="Career_Cus"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                <option value="">อาชีพ</option>
                            </select> --}}

                            <input type="text" id="careerCusShow" name="Career_Cus"
                                class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                placeholder=" ">
                            <label for="careerCusShow"
                                class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                อาชีพ
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                            <div class="relative">
                                <input type="text" id="Income_Cus_show" name="Income_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="Income_Cus_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    รายได้
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="BeforeIncome_Cus_show" name="BeforeIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
                                <label for="BeforeIncome_Cus_show"
                                    class="absolute text-sm text-red-500 duration-300 transform -translate-y-3 scale-75 left-2 top-0 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หักค่าใช้จ่าย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="AfterIncome_Cus_show" name="AfterIncome_Cus"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" ">
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
                                    placeholder=" ">
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
                                placeholder=" "></textarea>
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

            $.ajax({
                url: '/career/update/' + careerId,
                method: 'POST',
                data: JSON.stringify(formData),
                contentType: 'application/json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: 'สำเร็จ!',
                            text: 'อัพเดทข้อมูลเรียบร้อยแล้ว',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            $('#modalShowCareer').fadeOut(300);
                            // fetchCareerData();
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: 'ข้อผิดพลาด!',
                            text: response.message ||
                                'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
                            icon: 'error'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'ข้อผิดพลาด!',
                        text: 'เกิดข้อผิดพลาดในการเชื่อมต่อกับเซิร์ฟเวอร์',
                        icon: 'error'
                    });
                }
            });
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
