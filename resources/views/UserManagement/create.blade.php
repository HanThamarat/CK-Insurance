<div id="createUserModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 ">

    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[85%] flex flex-col overflow-y-auto scrollbar-hidden ">
            <!-- ปุ่มปิด modal -->
            <div id="header" class=" top-0 z-10 transition-bg duration-300 bg-white p-2"
                style="background-color: white;">
                <button class="absolute top-7 right-6 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
                    onclick="closeModalCreateUser()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/user.gif') }}" alt="create icon" class="avatar-sm"
                        style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">เพิ่มข้อมูลผู้ใช้งานระบบ</h5>
                        <p class="text-muted font-semibold text-sm mt-1">Add Data users</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>


            <form id="createUserForm" class="space-y-4 mt-2">
                <!-- Personal Information -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">ข้อมูลส่วนตัว</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">ชื่อ-นามสกุล</label>
                            <input type="text" name="name" id="name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">ชื่อผู้ใช้</label>
                            <input type="text" name="username" id="username"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">ข้อมูลการติดต่อ</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">อีเมล</label>
                            <input type="email" name="email" id="email"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">เบอร์โทรศัพท์</label>
                            <input type="number" name="phone" id="phone"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                        </div>
                    </div>
                </div>

                <!-- Account Information -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">ข้อมูลยืนยันบัญชี</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">รหัสผ่าน</label>
                            <input type="password" name="password" id="password"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">ยืนยันรหัสผ่าน</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                        </div>
                    </div>
                </div>


                <!-- Status & Zone Information -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">สถานะและข้อมูลเพิ่มเติม</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">สถานะ</label>
                            <input type="text" name="status" id="status" value="active" readonly
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 text-gray-700 focus:ring-blue-200 focus:border-blue-500 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">สถานะผู้ใช้งานระบบ</label>
                            <select name="status_user" id="status_user"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                                <option value="" selected>กรุณาเลือกสถานะผู้ใช้งานระบบ</option>
                                <!-- Add options here -->
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">โซน</label>
                            <select id="zone" name="zone"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                                <option value="">เลือกโซน</option>
                                <!-- Add options here -->
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">สาขา</label>
                            <select id="branch" name="branch"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                                <option value="">เลือกรายการสาขา</option>
                                <!-- Add options here -->
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end space-x-3 pt-4 border-t">
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200">
                        บันทึก
                    </button>
                    <button type="button" onclick="closeModalCreateUser()"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition duration-200">
                        ยกเลิก
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<style>
    /* Custom hidden scrollbar */
    .scrollbar-hidden::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hidden {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>






<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ฟังก์ชันในการเปิด modal
        function openModalCreateUser() {
            document.getElementById('createUserModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // ฟังก์ชันในการปิด modal
        function closeModalCreateUser() {
            document.getElementById('createUserModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // ดึงข้อมูล roles โดยใช้ Ajax
        function fetchRoles() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '/roles', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    const selectElement = document.getElementById('status_user');

                    // Clear existing options except for the first one
                    while (selectElement.options.length > 1) {
                        selectElement.remove(1);
                    }

                    // Populate with new options from the API response
                    data.forEach(role => {
                        const option = document.createElement('option');
                        option.value = role.code; // Use role code as value
                        option.textContent = role.name_th; // Display role name_th
                        selectElement.appendChild(option);
                    });
                }
            };
            xhr.send();
        }

        // เรียกใช้ฟังก์ชั่น fetchRoles เมื่อเริ่มต้น
        fetchRoles();

        // สร้างออบเจ็กต์เพื่อเก็บข้อมูลที่จับคู่กับ Zone_Branch
        const zoneMapping = {
            10: "ปัตตานี",
            20: "หาดใหญ่",
            30: "นครศรีธรรมราช",
            40: "กระบี่",
            50: "สุราษฏร์ธานี"
        };

        // ดึงข้อมูลโซนและสาขา
        function fetchZonesBranches() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '/get-zones-branches', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    const zoneSelect = document.getElementById('zone');

                    // ใส่ข้อมูลโซนลงใน select #zone
                    data.zones.forEach(zone => {
                        const option = document.createElement('option');
                        const zoneName = zoneMapping[zone.Zone_Branch] || zone.Zone_Branch;
                        option.value = zone.Zone_Branch;
                        option.textContent = zoneName;
                        zoneSelect.appendChild(option);
                    });

                    // ใส่ข้อมูลสาขาลงใน select #branch และปิดใช้งาน (disabled)
                    const branchSelect = document.getElementById('branch');
                    branchSelect.disabled = true; // disable initially
                    const defaultOption = document.createElement('option');
                    defaultOption.value = "";
                    defaultOption.textContent = "กรุณาเลือกโซน";
                    branchSelect.appendChild(defaultOption);
                }
            };
            xhr.send();
        }

        // เรียกใช้ฟังก์ชั่น fetchZonesBranches เมื่อเริ่มต้น
        fetchZonesBranches();

        // เมื่อเปลี่ยนค่าใน select #zone
        document.getElementById('zone').addEventListener('change', function() {
            const selectedZone = this.value;
            const branchSelect = document.getElementById('branch');

            if (selectedZone) {
                // เรียก fetch ใหม่ตามค่า zone ที่เลือก
                const xhr = new XMLHttpRequest();
                xhr.open('GET', `/get-zones-branches?zone=${selectedZone}`, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const data = JSON.parse(xhr.responseText);
                        // รีเซ็ตรูปแบบข้อมูลใน select #branch
                        branchSelect.innerHTML = '<option value="">เลือกสาขา</option>';
                        branchSelect.disabled = false; // เปิดใช้งาน select #branch

                        // ใส่ข้อมูลสาขาใหม่ตาม zone ที่เลือก
                        data.branches.forEach(branch => {
                            const option = document.createElement('option');
                            option.value = branch.id;
                            option.textContent = branch.Name_Branch;
                            branchSelect.appendChild(option);
                        });
                    }
                };
                xhr.send();
            } else {
                // ถ้าไม่เลือก zone ให้ปิดการใช้งาน select #branch และรีเซ็ตข้อมูล
                branchSelect.disabled = true;
                branchSelect.innerHTML = '<option value="">กรุณาเลือกโซน</option>';
            }
        });
    });


    function validatePassword() {
        var password = document.querySelector('input[name="password"]').value;
        var confirmPassword = document.querySelector('input[name="password_confirmation"]').value;

        // ถ้ารหัสผ่านไม่ตรงกัน จะแสดงข้อความเตือนด้วย SweetAlert
        if (password !== confirmPassword) {
            Swal.fire({
                icon: 'error',
                title: 'รหัสผ่านไม่ตรงกัน',
                text: 'กรุณาตรวจสอบรหัสผ่านและยืนยันรหัสผ่านให้ตรงกัน',
                confirmButtonText: 'ตกลง'
            });
            return false; // ป้องกันการส่งฟอร์ม
        }

        return true; // ถ้าตรงกันให้ส่งฟอร์ม
    }

    // การเชื่อมโยงฟังก์ชันกับการส่งฟอร์ม
    document.getElementById('createUserForm').onsubmit = function(event) {
        if (!validatePassword()) {
            event.preventDefault(); // ยับยั้งการส่งฟอร์มหากรหัสผ่านไม่ตรงกัน
        }
    };
</script>



<script>
    // Helper function to show error messages
    function showError(field, message) {
        const input = $(`[name="${field}"], select[name="${field}"]`); // Handle both input and select
        const errorIcon = '<span class="error-icon text-red-500 mr-2">&#9888;</span>'; // Error icon (⚠️)

        // Add error class to input or select
        input.addClass('is-invalid').css('border-color', 'red');

        // Add error icon and message
        const errorMessageDiv = `
        <div class="error-message text-red-500 text-sm mt-1">
            ${errorIcon}${message}
        </div>
    `;

        input.after(errorMessageDiv);

        // Animate the error icon slightly
        $('.error-icon').animate({
            marginLeft: '10px'
        }, 100).animate({
            marginLeft: '0'
        }, 100);

        // Fade out the error message after 2 seconds
        setTimeout(function() {
            $('.error-message').fadeOut(500, function() {
                $(this).remove(); // Remove the error message after fading out
            });
        }, 2000);
    }


    // ฟังก์ชันในการเปิด modal
    function openModalCreateUser() {
        document.getElementById('createUserModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    // ฟังก์ชันในการปิด modal
    function closeModalCreateUser() {
        document.getElementById('createUserModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    $(document).ready(function() {
        $('#createUserForm').on('submit', function(e) {
            e.preventDefault();

            // Clear previous error messages and reset border color
            $('.error-message').remove();
            $('.is-invalid').removeClass('is-invalid').css('border-color', '');

            // Get form data
            const formData = {
                status: $('input[name="status"]').val(),
                name: $('input[name="name"]').val(),
                username: $('input[name="username"]').val(),
                password: $('input[name="password"]').val(),
                password_confirmation: $('input[name="password_confirmation"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
                zone: $('select[name="zone"]').val(),
                branch: $('select[name="branch"]').val(),
                status_user: $('select[name="status_user"]').val()
            };

            // Debug: Log form data
            console.log('Form Data:', formData);

            // Validate required fields
            const requiredFields = ['name', 'username', 'password', 'password_confirmation', 'email',
                'status', 'zone', 'branch',
                'phone', 'status_user'
            ];
            let hasError = false;

            requiredFields.forEach(field => {
                if (!formData[field]) {
                    showError(field, 'กรุณากรอกข้อมูล');
                    hasError = true;
                }
            });

            if (hasError) {
                console.log('Validation failed');
                return;
            }

            // Show loading state
            const submitBtn = $(this).find('button[type="submit"]');
            const originalBtnText = submitBtn.text();
            submitBtn.prop('disabled', true).text('กำลังบันทึก...');

            // Send AJAX request
            $.ajax({
                url: '/users', // URL ที่จะส่งคำขอไป
                method: 'POST',
                data: formData,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // CSRF token สำหรับการป้องกันการโจมตี
                },
                success: function(response) {
                    console.log('Success Response:', response);

                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ!',
                        text: 'สร้างผู้ใช้งานเรียบร้อยแล้ว',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // ปิด modal
                    closeModalCreateUser();
                    $('#createUserForm')[0].reset();

                    if (typeof refreshUserList === 'function') {
                        refreshUserList();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error Status:', status);
                    console.error('Error:', error);
                    console.error('Status Code:', xhr.status);
                    console.error('Response Text:', xhr.responseText);

                    try {
                        const response = JSON.parse(xhr.responseText);
                        console.log('Parsed Error Response:', response);
                    } catch (e) {
                        console.error('Error parsing JSON response:', e);
                    }
                },
                complete: function() {
                    submitBtn.prop('disabled', false).text(originalBtnText);
                }
            });
        });
    });

</script>










<!-- Form Content -->
{{-- <form id="createUserForm" class="space-y-4 mt-2">
    <!-- Basic Information -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">ชื่อ-นามสกุล</label>
            <input type="text" name="name"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">ชื่อผู้ใช้</label>
            <input type="text" name="username"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
        </div>
    </div>

    <!-- Contact Information -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">อีเมล</label>
            <input type="email" name="email"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">เบอร์โทรศัพท์</label>
            <input type="number" name="phone"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
        </div>
    </div>

    <!-- Additional Information -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">รหัสผ่าน</label>
            <input type="password" name="password"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">ยืนยันรหัสผ่าน</label>
            <input type="password" name="password_confirmation"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
        </div>
    </div>



    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">สถานะ</label>
            <input type="text" name="status" id="status" value="active" readonly
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 text-gray-700 focus:ring-blue-200 focus:border-blue-500 transition">
        </div>


        <div>
            <label class="block text-sm font-medium text-gray-700">สถานะผู้ใช้งานระบบ</label>
            <select name="status_user" id="status_user"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                <option value="" selected>กรุณาเลือกสถานะผู้ใช้งานระบบ</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">โซน</label>
            <select id="zone" name="zone"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                <option value="">เลือกโซน</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">สาขา</label>
            <select id="branch" name="branch"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                <option value="">เลือกรายการสาขา</option>
            </select>
        </div>
    </div>

    <!-- Form Actions -->
    <div class="flex justify-end space-x-3 pt-4 border-t">
        <button type="submit"
            class="px-4 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200">
            บันทึก
        </button>
        <button type="button" onclick="closeModalCreateUser()"
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition duration-200">
            ยกเลิก
        </button>
    </div>
</form> --}}
