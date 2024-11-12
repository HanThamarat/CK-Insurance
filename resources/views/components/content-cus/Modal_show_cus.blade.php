<div id="showModalCustomerForm" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-500/80">
    {{-- <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity duration-300"></div> --}}
    <div class="relative w-full max-w-6xl mx-4 opacity-0 transform scale-95 transition-all duration-300 "
        id="modalContent">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div
                class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-bl from-orange-200/20 to-transparent rounded-bl-full">
            </div>
            <div
                class="absolute bottom-0 left-0 w-40 h-40 bg-gradient-to-tr from-orange-100/20 to-transparent rounded-tr-full">
            </div>
            <div
                class="relative max-h-[90vh] overflow-y-auto scrollbar-thin scrollbar-thumb-orange-200 scrollbar-track-gray-50">
                <div class="sticky top-0 z-10 bg-white/95 backdrop-blur-sm shadow-sm">
                    <div class="p-4"> <!-- ลด padding -->
                        <div class="flex items-center space-x-4"> <!-- ลดระยะห่างระหว่างไอเท็ม -->
                            <div class="relative">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl blur-lg opacity-20">
                                </div>
                                <div
                                    class="relative p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl shadow-sm">
                                    <!-- ลด padding ภายใน -->
                                    <img src="{{ asset('img/icon_user.gif') }}" alt="User Icon"
                                        class="w-10 h-10 object-cover rounded-lg shadow-inner transform transition-transform hover:scale-105">
                                    <!-- ลดขนาดของไอคอน -->
                                </div>
                            </div>

                            <div class="flex justify-between items-start">
                                <div>
                                    <h5
                                        class="text-xl font-bold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                                        <!-- ลดขนาดตัวอักษร -->
                                        แสดงข้อมูลลูกค้า
                                    </h5>
                                    <p class="text-gray-500 text-sm"> <!-- ลดขนาดตัวอักษร -->
                                        Show Customers Detail
                                    </p>
                                    <div
                                        class="h-1 w-36 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2">
                                        <!-- ลดความสูงของเส้น -->
                                    </div>
                                </div>

                                <button onclick="closeModal_Show_customer()"
                                    class="absolute top-5 right-5 text-gray-400 hover:text-gray-500 p-2">
                                    <i class="fas fa-times text-lg"></i> <!-- ลดขนาดของไอคอน -->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto p-4 space-y-6">
                    <!-- Information Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Personal Information -->
                        {{-- <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-100">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-orange-100 p-1.5 rounded-md">
                                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </span>
                                <h2 class="font-semibold text-gray-800">ข้อมูลส่วนตัว</h2>
                            </div>

                            <div class="space-y-3">
                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">ชื่อ-นามสกุล</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="prefixDiv"></span>
                                        <span id="first_nameDiv"></span>
                                        <span id="last_nameDiv"></span>
                                    </p>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">เบอร์โทรศัพท์</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="phoneDiv"></span> /
                                        <span id="phone2Div"></span>
                                    </p>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">วันเกิด / อายุ</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="birthdayDiv"></span>
                                        (<span id="ageDiv"></span> ปี)
                                    </p>
                                </div>
                            </div>
                        </div> --}}

                        <div
                            class="bg-white rounded-lg shadow-sm p-4 border border-gray-100 hover:shadow-[0_4px_6px_rgba(255,165,0,0.5)]  hover:scale-100 transition-all duration-300 ease-in-out">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-orange-100 p-1.5 rounded-md">
                                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </span>
                                <h2 class="font-semibold text-gray-800">ข้อมูลส่วนตัว</h2>
                            </div>

                            <div class="space-y-3">
                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">ชื่อ-นามสกุล</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="prefixDiv"></span>
                                        <span id="first_nameDiv"></span>
                                        <span id="last_nameDiv"></span>
                                    </p>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">เบอร์โทรศัพท์</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="phoneDiv"></span> /
                                        <span id="phone2Div"></span>
                                    </p>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">วันเกิด / อายุ</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="birthdayDiv"></span>
                                        (<span id="ageDiv"></span> ปี)
                                    </p>
                                </div>
                            </div>
                        </div>



                        <!-- Identity Information -->
                        <div
                            class="bg-white rounded-lg shadow-sm p-4 border border-gray-100 hover:shadow-[0_4px_6px_rgba(255,165,0,0.5)]  hover:scale-100 transition-all duration-300 ease-in-out">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-orange-100 p-1.5 rounded-md">
                                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                                        </path>
                                    </svg>
                                </span>
                                <h2 class="font-semibold text-gray-800">ข้อมูลบัตรประชาชน</h2>
                            </div>

                            <div class="space-y-3">
                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">เลขบัตรประชาชน</p>
                                    <p id="id_card_numberDiv" class="text-sm text-gray-800"></p>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">วันออกบัตร / วันหมดอายุ</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="dobDiv"></span> /
                                        <span id="expiry_dateDiv"></span>
                                    </p>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">ใบขับขี่</p>
                                    <p id="driving_licenseDiv" class="text-sm text-gray-800"></p>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div
                            class="bg-white rounded-lg shadow-sm p-4 border border-gray-100 hover:shadow-[0_4px_6px_rgba(255,165,0,0.5)]  hover:scale-100 transition-all duration-300 ease-in-out">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-orange-100 p-1.5 rounded-md">
                                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                <h2 class="font-semibold text-gray-800">ข้อมูลเพิ่มเติม</h2>
                            </div>

                            <div class="space-y-3">
                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">เพศ / สัญชาติ / ศาสนา</p>
                                    <p class="text-sm text-gray-800">
                                        <span id="genderDiv"></span> /
                                        <span id="nationalityDiv"></span> /
                                        <span id="religionDiv"></span>
                                    </p>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">Social Media</p>
                                    <div class="space-y-1.5">
                                        <p class="text-sm text-gray-800 flex items-center gap-2">
                                            <i class="fab fa-facebook text-blue-500"></i>
                                            <span id="facebookDiv"></span>
                                        </p>
                                        <p class="text-sm text-gray-800 flex items-center gap-2">
                                            <i class="fab fa-line text-green-500"></i>
                                            <span id="line_idDiv"></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-md">
                                    <p class="text-xs text-gray-500 mb-1">สถานะการสมรส</p>
                                    <p id="marital_statusDiv" class="text-sm text-gray-800"></p>
                                    <div class="mt-2 text-sm" id="spouseInfo">
                                        <p class="text-gray-600">คู่สมรส: <span id="spouse_nameDiv"></span></p>
                                        <p class="text-gray-600">เบอร์โทร: <span id="spouse_phoneDiv"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notes Section -->
                    <div
                        class="bg-orange-50/50 rounded-lg p-4 border border-orange-100 hover:shadow-[0_4px_6px_rgba(255,165,0,0.5)]  hover:scale-100 hover:scale-100 transition-all duration-300 ease-in-out">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-orange-100 p-1.5 rounded-md">
                                <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                            </span>
                            <h2 class="font-semibold text-gray-800">หมายเหตุ</h2>
                        </div>
                        <div class="bg-white/80 p-3 rounded-md min-h-[60px]">
                            <p id="noteDiv" class="text-sm text-gray-700 whitespace-pre-line"></p>
                        </div>
                    </div>

                    <!-- System Information -->
                    <div
                        class="bg-gray-50 rounded-lg p-4 border border-gray-100 hover:shadow-[0_4px_6px_rgba(255,165,0,0.5)]  hover:scale-100 hover:scale-100 transition-all duration-300 ease-in-out">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="flex items-center gap-2">
                                <span class="bg-blue-100 p-1.5 rounded-md">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </span>
                                <div>
                                    <p class="text-xs text-gray-500">บันทึกโดย</p>
                                    <p id="user_insertDiv" class="text-sm text-gray-700"></p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="bg-green-100 p-1.5 rounded-md">
                                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </span>
                                <div>
                                    <p class="text-xs text-gray-500">สร้างเมื่อ</p>
                                    <p id="created_atDiv" class="text-sm text-gray-700"></p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="bg-purple-100 p-1.5 rounded-md">
                                    <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                <div>
                                    <p class="text-xs text-gray-500">แก้ไขล่าสุด</p>
                                    <p id="updated_atDiv" class="text-sm text-gray-700"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="flex justify-end">
                        {{-- <button type="button"
                                onclick="closeDataCustomerModal()"
                                class="flex items-center gap-2 px-6 py-2 bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            ย้อนกลับ
                        </button> --}}

                        <button type="button" onclick="closeDataCustomerModal()"
                            class="flex items-center gap-2 px-6 py-2 bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition-transform transform hover:-translate-y-1 shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            ย้อนกลับ
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom scrollbar for Webkit browsers */
    .scrollbar-thin::-webkit-scrollbar {
        width: 6px;
    }

    .scrollbar-thin::-webkit-scrollbar-track {
        background: #F3F4F6;
        border-radius: 3px;
    }

    .scrollbar-thin::-webkit-scrollbar-thumb {
        background: #FED7AA;
        border-radius: 3px;
    }

    .scrollbar-thin::-webkit-scrollbar-thumb:hover {
        background: #FB923C;
    }

    /* Animation for modal opening */
    #showModalCustomerForm:not(.hidden) #modalContent {
        opacity: 1;
        transform: scale(100%);
    }
</style>

<script>
    function closeDataCustomerModal() {
        const modal = document.getElementById('showModalCustomerForm');
        const modalContent = document.getElementById('modalContent');

        // Add closing animation
        modalContent.style.opacity = '0';
        modalContent.style.transform = 'scale(95%)';

        // Hide modal after animation
        setTimeout(() => {
            modal.classList.add('hidden');
            modalContent.style.opacity = '';
            modalContent.style.transform = '';
        }, 300);
    }

    // Add escape key listener
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeDataCustomerModal();
        }
    });
</script>


<script>
    function updateCustomerDisplay(data) {
        const displayFields = [
            'id', 'prefix', 'first_name', 'last_name', 'phone', 'phone2',
            'id_card_number', 'birthday', 'expiry_date', 'dob', 'age', 'gender',
            'nationality', 'religion', 'driving_license', 'facebook',
            'line_id', 'marital_status', 'spouse_name', 'spouse_phone',
            'note', 'user_insert', 'created_at', 'updated_at'
        ];

        displayFields.forEach(field => {
            const element = document.getElementById(`${field}Div`);
            if (element) {
                // Check if the field is a date to format
                if (['birthday', 'expiry_date', 'dob'].includes(field) && data[field]) {
                    element.textContent = formatDateThai(data[field]);
                } else if (['created_at', 'updated_at'].includes(field) && data[field]) {
                    element.textContent = formatDateThaiTimeStamp(data[field]);
                } else {
                    element.textContent = data[field] || 'ไม่มีข้อมูล';
                }
            }
        });

        // Show/hide spouse information based on marital status
        const spouseInfo = document.getElementById('spouseInfo');
        if (spouseInfo) {
            spouseInfo.style.display =
                data.marital_status === 'สมรส' ? 'block' : 'none';
        }
    }


    // Function to format date to Thai format
    function formatDateThai(dateStr) {
        const date = new Date(dateStr);
        const thaiMonths = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
            "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
        ];
        const day = date.getDate();
        const month = thaiMonths[date.getMonth()];
        const year = date.getFullYear() + 543; // Convert to Buddhist Era

        return `${day} ${month} ${year}`;
    }

    function formatDateThaiTimeStamp(dateStr) {
        const date = new Date(dateStr);
        const thaiMonths = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
            "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
        ];
        const day = date.getDate();
        const month = thaiMonths[date.getMonth()];
        const year = date.getFullYear() + 543; // Convert to Buddhist Era

        // Get time components
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');
        const seconds = String(date.getSeconds()).padStart(2, '0');

        // Combine date and time
        return `${day} ${month} ${year} เวลา  ${hours}:${minutes}:${seconds} น.`;
    }


    // Initialize display
    updateCustomerDisplay(customerData);

    function showDataCustomerModal() {
        const modal = $('#showModalCustomerForm');
        const modalContent = modal.find('.relative');

        modal.removeClass('hidden');
        modal.css('opacity', '0').animate({
            opacity: 1
        }, 300);

        modalContent.removeClass('translate-y-[-100%]');
        modalContent.css('transition', 'transform 0.3s ease');
    }

    function closeDataCustomerModal() {
        const modal = $('#showModalCustomerForm');
        const modalContent = modal.find('.relative');

        modalContent.css('transition', 'transform 0.3s ease');
        modalContent.addClass('translate-y-[-100%]');

        setTimeout(() => {
            modal.animate({
                opacity: 0
            }, 300, function() {
                modal.addClass('hidden');
                modalContent.addClass('translate-y-[-100%]');
            });
        }, 300);
    }

    function closeModal_Show_customer() {
        const modal = $('#showModalCustomerForm');
        const modalContent = modal.find('.relative');

        modalContent.css('transition', 'transform 0.3s ease');
        modalContent.addClass('translate-y-[-100%]');

        setTimeout(() => {
            modal.animate({
                opacity: 0
            }, 300, function() {
                modal.addClass('hidden');
                modalContent.addClass('translate-y-[-100%]');
            });
        }, 300);
    }

    $(document).mouseup(function(e) {
        const modal = $('#showModalCustomerForm');
        const modalContent = modal.find('.relative');

        if (!modalContent.is(e.target) && modalContent.has(e.target).length === 0) {}
    });

    $(document).keydown(function(e) {
        if (e.key === "Escape") {}
    });
</script>














{{-- // Update display function
// function updateCustomerDisplay(data) {
//     const displayFields = [
//         'id', 'prefix', 'first_name', 'last_name', 'phone', 'phone2',
//         'id_card_number', 'birthday', 'expiry_date', 'dob', 'age', 'gender',
//         'nationality', 'religion', 'driving_license', 'facebook',
//         'line_id', 'marital_status', 'spouse_name', 'spouse_phone',
//         'note', 'user_insert', 'created_at', 'updated_at'
//     ];

//     displayFields.forEach(field => {
//         const element = document.getElementById(`${field}Div`);
//         if (element) {
//             // Check if the field is a date to format
//             if (['birthday', 'expiry_date', 'dob', 'created_at', 'updated_at'].includes(field) && data[field]) {
//                 element.textContent = formatDateThai(data[field]);
//             } else {
//                 element.textContent = data[field] || 'ไม่มีข้อมูล';
//             }
//         }
//     });

//     // Show/hide spouse information based on marital status
//     const spouseInfo = document.getElementById('spouseInfo');
//     if (spouseInfo) {
//         spouseInfo.style.display =
//             data.marital_status === 'สมรส' ? 'block' : 'none';
//     }
// } --}}


{{-- <div class="sticky top-0 z-10 bg-white/95 backdrop-blur-sm shadow-sm">
    <div class="p-6">
        <div class="flex items-center space-x-6">
            <div class="relative">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl blur-lg opacity-20">
                </div>
                <div
                    class="relative p-3 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl shadow-sm">
                    <img src="{{ asset('img/icon_user.gif') }}" alt="User Icon"
                        class="w-14 h-14 object-cover rounded-lg shadow-inner transform transition-transform hover:scale-105">
                </div>
            </div>

            <div class="flex justify-between items-start">
                <div>
                    <h5 class="text-2xl font-bold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                        แสดงข้อมูลลูกค้า
                    </h5>
                    <p class="text-gray-500">Show Customers Detail</p>
                    <div class="h-1.5 w-40 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-3">
                    </div>
                </div>

                <button onclick="closeModal_Show_customer()" class="absolute top-7 right-7 text-gray-400 hover:text-gray-500 p-2">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>
    </div>
</div> --}}



<!-- Main Content -->
{{-- <div class="p-6">
    <!-- Information Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Personal Information Card -->
        <div
            class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
            <div class="flex items-center space-x-3 mb-4">
                <div class="p-2 bg-orange-100 rounded-lg">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                        </path>
                    </svg>
                </div>
                <h6 class="font-semibold text-gray-800">ข้อมูลส่วนตัว</h6>
            </div>

            <div class="space-y-4">
                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">ชื่อ-นามสกุล</p>
                    <p class="font-medium text-gray-800">
                        <span id="prefixDiv"></span>
                        <span id="first_nameDiv"></span>
                        <span id="last_nameDiv"></span>
                    </p>
                </div>

                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">เบอร์โทรศัพท์ 1 / เบอร์โทรศัพท์ 2</p>
                    <p class="font-medium text-gray-800">
                        <span id="phoneDiv"></span> /
                        <span id="phone2Div"></span>
                    </p>
                </div>

                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">วันเกิด / อายุ</p>
                    <p class="font-medium text-gray-800">
                        <span id="birthdayDiv"></span>
                        (<span id="ageDiv"></span> ปี)
                    </p>
                </div>
            </div>
        </div>

        <!-- Identity Information Card -->
        <div
            class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
            <div class="flex items-center space-x-3 mb-4">
                <div class="p-2 bg-orange-100 rounded-lg">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                        </path>
                    </svg>
                </div>
                <h6 class="font-semibold text-gray-800">ข้อมูลบัตรประชาชน</h6>
            </div>

            <div class="space-y-4">
                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">เลขบัตรประชาชน</p>
                    <p id="id_card_numberDiv" class="font-medium text-gray-800"></p>
                </div>
                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">วันออกบัตร / วันหมดอายุบัตร</p>
                    <p class="font-medium text-gray-800">
                        <span id="dobDiv"></span> /
                        <span id="expiry_dateDiv"></span>
                    </p>
                </div>

                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">ใบขับขี่</p>
                    <p id="driving_licenseDiv" class="font-medium text-gray-800"></p>
                </div>
            </div>
        </div>

        <!-- Additional Information Card -->
        <div
            class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
            <div class="flex items-center space-x-3 mb-4">
                <div class="p-2 bg-orange-100 rounded-lg">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h6 class="font-semibold text-gray-800">ข้อมูลเพิ่มเติม</h6>
            </div>

            <div class="space-y-4">
                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">เพศ / สัญชาติ / ศาสนา</p>
                    <p class="font-medium text-gray-800">
                        <span id="genderDiv"></span> /
                        <span id="nationalityDiv"></span> /
                        <span id="religionDiv"></span>
                    </p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">Social Media</p>
                    <div class="space-y-2">
                        <p class="font-medium text-gray-800 flex items-center">
                            <i class="fab fa-facebook text-blue-600 mr-2 text-xl"></i>
                            <span id="facebookDiv"></span>
                        </p>
                        <p class="font-medium text-gray-800 flex items-center">
                            <i class="fab fa-line text-green-600 mr-2 text-xl"></i>
                            <span id="line_idDiv"></span>
                        </p>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-4 rounded-lg border border-gray-100">
                    <p class="text-sm text-gray-500 mb-1">สถานะการสมรส</p>
                    <p id="marital_statusDiv" class="font-medium text-gray-800"></p>
                    <div class="mt-2" id="spouseInfo">
                        <p class="text-sm text-gray-600">คู่สมรส: <span id="spouse_nameDiv"></span>
                        </p>
                        <p class="text-sm text-gray-600">เบอร์โทร: <span id="spouse_phoneDiv"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notes Section -->
    <div class="mt-8">
        <div class="bg-gradient-to-br from-orange-50 to-white p-6 rounded-xl border border-orange-100">
            <div class="flex items-center space-x-3 mb-4">
                <div class="p-2 bg-orange-100 rounded-lg">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h6 class="font-semibold text-gray-800">หมายเหตุ</h6>
            </div>
            <div class="bg-white/80 backdrop-blur-sm p-4 rounded-lg shadow-sm">
                <p id="noteDiv" class="text-gray-700 min-h-[60px] whitespace-pre-line"></p>
            </div>
        </div>
    </div>

    <!-- System Information -->
    <div class="mt-8 bg-gray-50 rounded-xl p-6 border border-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-blue-100 rounded-lg">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">บันทึกโดย</p>
                    <p id="user_insertDiv" class="font-medium text-gray-700"></p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-green-100 rounded-lg">
                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">สร้างเมื่อ</p>
                    <p id="created_atDiv" class="font-medium text-gray-700"></p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-purple-100 rounded-lg">
                    <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">แก้ไขล่าสุด</p>
                    <p id="updated_atDiv" class="font-medium text-gray-700"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-8 flex justify-end">
        <button type="button" id="cancelCustomerBtn"
            class="group relative px-8 py-3 bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-xl
                    transition duration-300 transform hover:scale-105 hover:shadow-lg
                    focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50"
            onclick="closeDataCustomerModal()">
            <div
                class="absolute inset-0 bg-white rounded-xl opacity-0 group-hover:opacity-20 transition-opacity">
            </div>
            <div class="relative flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                ย้อนกลับ
            </div>
        </button>
    </div>
</div> --}}
