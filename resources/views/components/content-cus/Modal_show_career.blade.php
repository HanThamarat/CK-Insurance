<div id="modalShowCareer" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <!-- Backdrop with blur effect -->
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm"></div>

    <div class="flex items-center justify-center w-full h-full p-4">
        <div
            class="relative bg-gradient-to-br from-white to-orange-50 rounded-2xl w-full max-w-6xl mx-4 p-8 max-h-[90vh] flex flex-col overflow-y-auto shadow-xl transform transition-all duration-300 ease-out scale-95 opacity-0 show:scale-100 show:opacity-100">
            <!-- Header -->
            <div id="header" class="sticky top-0 z-10 bg-white/80 backdrop-blur-sm rounded-xl shadow-sm mb-6">
                <button id="closeModal_show_career_x"
                    class="absolute top-4 right-4 p-2 text-gray-400 hover:text-orange-600 hover:bg-orange-50 rounded-full transition-all duration-300 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="flex items-center space-x-4 p-4">
                    <div class="p-3 bg-orange-100 rounded-xl">
                        <img src="{{ asset('img/career.gif') }}" alt="career icon"
                            class="w-12 h-12 object-cover rounded-lg">
                    </div>
                    <div class="flex-grow">
                        <h5
                            class="text-xl font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                            แสดงข้อมูลอาชีพลูกค้า</h5>
                        <p class="text-gray-500 text-sm mt-1">(Show Customers Career)</p>
                        <div class="h-1 w-32 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2"></div>
                    </div>
                </div>
            </div>

            <form id="showCareerForm" class="space-y-6">
                <!-- Radio Buttons -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div
                                class="bg-white rounded-xl p-2 shadow-sm hover:shadow-md transition-all duration-300 border border-orange-100">
                                <div class="form-check">
                                    <input class="w-4 h-4 text-orange-500 border-orange-300 focus:ring-orange-500"
                                        type="radio" value="กำหนดเป็นอาชีพหลัก" name="Status_Cus" id="adds-0" disabled>
                                    <label class="ml-2 text-gray-600 text-sm" for="adds-0">
                                        กำหนดเป็นอาชีพหลัก
                                    </label>
                                </div>
                            </div>
                            <div
                                class="bg-white rounded-xl p-2 shadow-sm hover:shadow-md transition-all duration-300 border border-orange-100">
                                <div class="form-check">
                                    <input class="w-4 h-4 text-orange-500 border-orange-300 focus:ring-orange-500"
                                        type="radio" value="กำหนดเป็นอาชีพรอง" name="Status_Cus" id="adds-1" disabled>
                                    <label class="ml-2 text-gray-600 text-sm" for="adds-1">
                                        กำหนดเป็นอาชีพรอง
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ asset('img/career.jpg') }}" alt="theme images"
                                class="w-full h-60 object-cover rounded-2xl shadow-md">
                        </div>
                    </div>

                    <div class="space-y-5">
                        <!-- Career Input -->
                        <div class="relative">
                            <input type="text" id="careerCusShow" name="Career_Cus"
                                class="peer w-full px-3 py-2 text-sm rounded-xl border border-orange-200 focus:border-orange-400 focus:ring focus:ring-orange-200 focus:ring-opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed transition-all duration-300"
                                placeholder=" " disabled>
                            <label for="careerCusShow"
                                class="absolute left-2 -top-2 px-2 bg-white text-xs font-medium text-orange-500 transition-all duration-300 rounded-lg">
                                อาชีพ
                            </label>
                        </div>

                        <!-- Income Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <div class="relative">
                                <input type="text" id="Income_Cus_show" name="Income_Cus"
                                    class="peer w-full px-3 py-2 text-sm rounded-xl border border-orange-200 focus:border-orange-400 focus:ring focus:ring-orange-200 focus:ring-opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed transition-all duration-300"
                                    placeholder=" " disabled>
                                <label
                                    class="absolute left-2 -top-2 px-2 bg-white text-xs font-medium text-orange-500 transition-all duration-300 rounded-lg">
                                    รายได้
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="BeforeIncome_Cus_show" name="BeforeIncome_Cus"
                                    class="peer w-full px-3 py-2 text-sm rounded-xl border border-orange-200 focus:border-orange-400 focus:ring focus:ring-orange-200 focus:ring-opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed transition-all duration-300"
                                    placeholder=" " disabled>
                                <label
                                    class="absolute left-2 -top-2 px-2 bg-white text-xs font-medium text-orange-500 transition-all duration-300 rounded-lg">
                                    หักค่าใช้จ่าย
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="AfterIncome_Cus_show" name="AfterIncome_Cus"
                                    class="peer w-full px-3 py-2 text-sm rounded-xl border border-orange-200 focus:border-orange-400 focus:ring focus:ring-orange-200 focus:ring-opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed transition-all duration-300"
                                    placeholder=" " disabled>
                                <label
                                    class="absolute left-2 -top-2 px-2 bg-white text-xs font-medium text-orange-500 transition-all duration-300 rounded-lg">
                                    คงเหลือ
                                </label>
                            </div>
                        </div>

                        <!-- Workplace Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="relative">
                                <input type="text" id="Workplace_Cus_show" name="Workplace_Cus"
                                    class="peer w-full px-3 py-2 text-sm rounded-xl border border-orange-200 focus:border-orange-400 focus:ring focus:ring-orange-200 focus:ring-opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed transition-all duration-300"
                                    placeholder=" " disabled>
                                <label
                                    class="absolute left-2 -top-2 px-2 bg-white text-xs font-medium text-orange-500 transition-all duration-300 rounded-lg">
                                    สถานที่ทำงาน
                                </label>
                            </div>

                            <div class="relative">
                                <input type="text" id="Coordinates_show" name="Coordinates"
                                    class="peer w-full px-3 py-2 text-sm rounded-xl border border-orange-200 focus:border-orange-400 focus:ring focus:ring-orange-200 focus:ring-opacity-50 transition-all duration-300"
                                    placeholder=" ">
                                <label
                                    class="absolute left-2 -top-2 px-2 bg-white text-xs font-medium text-orange-500 transition-all duration-300 rounded-lg">
                                    พิกัด
                                </label>
                            </div>
                        </div>

                        <!-- Notes Textarea -->
                        <div class="relative">
                            <textarea id="IncomeNote_Cus_show" name="IncomeNote_Cus" rows="5"
                                class="peer w-full px-3 py-2 text-sm rounded-xl border border-orange-200 focus:border-orange-400 focus:ring focus:ring-orange-200 focus:ring-opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed transition-all duration-300"
                                placeholder=" " disabled></textarea>
                            <label
                                class="absolute left-2 -top-2 px-2 bg-white text-xs font-medium text-orange-500 transition-all duration-300 rounded-lg">
                                รายละเอียด
                            </label>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<style>
    .show\:scale-100.show\:opacity-100 {
        transform: scale(1);
        opacity: 1;
    }

    /* Custom scrollbar */
    /* .overflow-y-auto {
        scrollbar-width: thin;
        scrollbar-color: #fb923c #fff;
    } */

    .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }

    .overflow-y-auto::-webkit-scrollbar-track {
        background: #fff;
        border-radius: 20px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb {
        background-color: #fb923c;
        border-radius: 20px;
        border: 2px solid #fff;
    }
</style>



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
                    .fadeOut(10, function() {
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





{{-- // จัดการการส่งฟอร์ม
// $('#showCareerForm').on('submit', function(event) {
//     event.preventDefault();

//     const careerId = $('#careerIdInput').val();
//     const selectedCareer = JSON.parse($('#careerNameShow').val() || '{"code":"","name":""}');

//     const formData = {
//         Career_Cus: selectedCareer.code + '  ' + selectedCareer.name,
//         Career_Name: selectedCareer.code + '  ' + selectedCareer.name,
//         Income_Cus: $('#Income_Cus_show').val(),
//         BeforeIncome_Cus: $('#BeforeIncome_Cus_show').val(),
//         AfterIncome_Cus: $('#AfterIncome_Cus_show').val(),
//         Workplace_Cus: $('#Workplace_Cus_show').val(),
//         Coordinates: $('#Coordinates_show').val(),
//         IncomeNote_Cus: $('#IncomeNote_Cus_show').val(),
//         Status_Cus: $('input[name="Status_Cus"]:checked').val()
//     };

//     // $.ajax({
//     //     url: '/career/update/' + careerId,
//     //     method: 'POST',
//     //     data: JSON.stringify(formData),
//     //     contentType: 'application/json',
//     //     success: function(response) {
//     //         if (response.success) {
//     //             Swal.fire({
//     //                 title: 'สำเร็จ!',
//     //                 text: 'อัพเดทข้อมูลเรียบร้อยแล้ว',
//     //                 icon: 'success',
//     //                 timer: 1500,
//     //                 showConfirmButton: false
//     //             }).then(() => {
//     //                 $('#modalShowCareer').fadeOut(300);
//     //                 // fetchCareerData();
//     //                 location.reload();
//     //             });
//     //         } else {
//     //             Swal.fire({
//     //                 title: 'ข้อผิดพลาด!',
//     //                 text: response.message ||
//     //                     'เกิดข้อผิดพลาดในการบันทึกข้อมูล',
//     //                 icon: 'error'
//     //             });
//     //         }
//     //     },
//     //     error: function(xhr, status, error) {
//     //         Swal.fire({
//     //             title: 'ข้อผิดพลาด!',
//     //             text: 'เกิดข้อผิดพลาดในการเชื่อมต่อกับเซิร์ฟเวอร์',
//     //             icon: 'error'
//     //         });
//     //     }
//     // });
// }); --}}
