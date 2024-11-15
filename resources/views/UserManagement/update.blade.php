<div id="updateUserModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 ">

    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[85%] flex flex-col overflow-y-auto scrollbar-hidden ">
            <!-- ปุ่มปิด modal -->
            <div id="header" class=" top-0 z-10 transition-bg duration-300 bg-white p-2"
                style="background-color: white;">
                <button class="absolute top-7 right-6 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
                    onclick="closeUpdateUserModal()">
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
                        <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลผู้ใช้งานระบบ</h5>
                        <p class="text-muted font-semibold text-sm mt-1">Edit Data users</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form id="updateUserForm" class="mt-[-12] space-y-6">
                <input type="hidden" id="updateUserId">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="updateName" class="block text-sm font-medium text-gray-700 mb-1">
                                ชื่อ - นามสกุล <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="updateName" name="name"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition-colors">
                        </div>

                        <!-- Username -->
                        <div>
                            <label for="updateUsername" class="block text-sm font-medium text-gray-700 mb-1">
                                ชื่อผู้ใช้ <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="updateUsername" name="username"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="updateEmail" class="block text-sm font-medium text-gray-700 mb-1">
                                อีเมล <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="updateEmail" name="email"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="updatePassword" class="block text-sm font-medium text-gray-700 mb-1">
                                รหัสผ่าน <span class="text-gray-500 text-xs">(เว้นว่างถ้าไม่ต้องการเปลี่ยน)</span>
                            </label>
                            <input type="password" id="updatePassword" name="password"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <!-- Zone -->
                        <div>
                            <label for="updateZone" class="block text-sm font-medium text-gray-700 mb-1">
                                โซน <span class="text-red-500">*</span>
                            </label>
                            <select id="updateZone" name="zone"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                                <option value="">เลือกโซน</option>
                            </select>
                        </div>

                        <!-- Branch -->
                        <div>
                            <label for="updateBranch" class="block text-sm font-medium text-gray-700 mb-1">
                                สาขา <span class="text-red-500">*</span>
                            </label>
                            <select id="updateBranch" name="branch"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                                <option value="">เลือกสาขา</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-5">สถานะการใช้งาน</label>
                            <div class="flex space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="active"
                                        class="w-4 h-4 text-orange-500 focus:ring-orange-400">
                                    <span class="ml-2 text-sm text-gray-700">เปิดใช้งาน</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="inactive"
                                        class="w-4 h-4 text-orange-500 focus:ring-orange-400">
                                    <span class="ml-2 text-sm text-gray-700">ปิดใช้งาน</span>
                                </label>
                            </div>
                        </div>

                        <!-- User Status -->
                        <div>
                            <label for="updateStatusUser" class="block text-sm font-medium text-gray-700 mb-1">
                                ประเภทผู้ใช้งาน <span class="text-red-500">*</span>
                            </label>
                            <select id="updateStatusUser" name="status_user"
                                class="w-full px-3 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                                <option value="">เลือกประเภทผู้ใช้งาน</option>
                            </select>
                        </div>
                    </div>


                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                    <button type="submit"
                        class="px-6 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400 transition-colors">
                        บันทึกการเปลี่ยนแปลง
                    </button>

                    <button type="button" onclick="closeUpdateUserModal()"
                        class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 transition-colors">
                        ยกเลิก
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        // เปิด modal
        const openModalCreateUser = () => {
            document.getElementById('updateUserModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        };

        // ปิด modal
        const closeModalCreateUser = () => {
            document.getElementById('updateUserModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        };

        // ดึงข้อมูล roles ด้วย Fetch API
        const fetchRoles = async () => {
            try {
                const response = await fetch('/roles');
                if (response.ok) {
                    const data = await response.json();
                    const selectElement = document.getElementById('updateStatusUser');
                    selectElement.innerHTML = '<option value="">เลือกประเภทผู้ใช้งาน</option>';

                    data.forEach(role => {
                        const option = document.createElement('option');
                        option.value = role.code;
                        option.textContent = role.name_th;
                        selectElement.appendChild(option);
                    });
                }
            } catch (error) {
                console.error('Error fetching roles:', error);
            }
        };

        // ดึงข้อมูลโซนและสาขา
        const fetchZonesBranches = async () => {
            try {
                const response = await fetch('/get-zones-branches');
                if (response.ok) {
                    const data = await response.json();
                    const zoneSelect = document.getElementById('updateZone');
                    const zoneMapping = {
                        10: "ปัตตานี",
                        20: "หาดใหญ่",
                        30: "นครศรีธรรมราช",
                        40: "กระบี่",
                        50: "สุราษฏร์ธานี"
                    };

                    zoneSelect.innerHTML = '<option value="">เลือกโซน</option>';
                    data.zones.forEach(zone => {
                        const option = document.createElement('option');
                        option.value = zone.Zone_Branch;
                        option.textContent = zoneMapping[zone.Zone_Branch] || zone.Zone_Branch;
                        zoneSelect.appendChild(option);
                    });

                    // ปิดการใช้งาน select #updateBranch และตั้งค่าเริ่มต้น
                    const branchSelect = document.getElementById('updateBranch');
                    branchSelect.innerHTML = '<option value="">กรุณาเลือกโซน</option>';
                    branchSelect.disabled = true;
                }
            } catch (error) {
                console.error('Error fetching zones and branches:', error);
            }
        };

        // ดึงข้อมูลสาขาตามโซนที่เลือก
        document.getElementById('updateZone').addEventListener('change', async function() {
            const selectedZone = this.value;
            const branchSelect = document.getElementById('updateBranch');

            if (selectedZone) {
                try {
                    const response = await fetch(`/get-zones-branches?zone=${selectedZone}`);
                    if (response.ok) {
                        const data = await response.json();
                        branchSelect.innerHTML = '<option value="">เลือกสาขา</option>';
                        branchSelect.disabled = false;

                        data.branches.forEach(branch => {
                            const option = document.createElement('option');
                            option.value = branch.id;
                            option.textContent = branch.Name_Branch;
                            branchSelect.appendChild(option);
                        });
                    }
                } catch (error) {
                    console.error('Error fetching branches:', error);
                }
            } else {
                branchSelect.disabled = true;
                branchSelect.innerHTML = '<option value="">กรุณาเลือกโซน</option>';
            }
        });

        // เรียกใช้ฟังก์ชันเมื่อโหลดหน้า
        fetchRoles();
        fetchZonesBranches();
    });
</script>



<script>
    // user-update.js

    function openUpdateUserModal(userId) {
        try {
            document.getElementById('updateUserModal').classList.remove('hidden');
            document.getElementById('updateUserForm').reset();

            // Show loading state
            Swal.fire({
                title: 'กำลังโหลดข้อมูล',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Fetch user data
            fetch(`/api/users/${userId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('ไม่สามารถดึงข้อมูลผู้ใช้ได้');
                    }
                    return response.json();
                })
                .then(user => {
                    // Populate form fields
                    document.getElementById('updateUserId').value = user.id;
                    document.getElementById('updateName').value = user.name;
                    document.getElementById('updateUsername').value = user.username;
                    document.getElementById('updateEmail').value = user.email;
                    document.getElementById('updateZone').value = user.zone;
                    document.getElementById('updateBranch').value = user.branch;
                    document.getElementById('updateStatusUser').value = user.status_user;

                    // Set status radio buttons
                    const statusRadios = document.getElementsByName('status');
                    statusRadios.forEach(radio => {
                        radio.checked = radio.value === user.status;
                    });

                    Swal.close();
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        text: error.message,
                        confirmButtonColor: '#EF4444'
                    });
                });
        } catch (error) {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                text: 'เกิดข้อผิดพลาดที่ไม่คาดคิด',
                confirmButtonColor: '#EF4444'
            });
        }
    }

    function closeUpdateUserModal() {
        document.getElementById('updateUserModal').classList.add('hidden');
        document.getElementById('updateUserForm').reset();
    }

    // Form submission handler
    document.getElementById('updateUserForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        try {
            const userId = document.getElementById('updateUserId').value;
            const formData = {
                name: document.getElementById('updateName').value.trim(),
                username: document.getElementById('updateUsername').value.trim(),
                email: document.getElementById('updateEmail').value.trim(),
                zone: document.getElementById('updateZone').value,
                branch: document.getElementById('updateBranch').value,
                status_user: document.getElementById('updateStatusUser').value,
                status: document.querySelector('input[name="status"]:checked')?.value
            };

            // Add password only if it's provided
            const password = document.getElementById('updatePassword').value.trim();
            if (password) {
                formData.password = password;
            }

            // Validate required fields
            const requiredFields = ['name', 'username', 'email', 'zone', 'branch', 'status_user', 'status'];
            const missingFields = requiredFields.filter(field => !formData[field]);

            if (missingFields.length > 0) {
                throw new Error('กรุณากรอกข้อมูลให้ครบทุกช่อง');
            }

            // Show loading state
            Swal.fire({
                title: 'กำลังบันทึกข้อมูล',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Send update request
            const response = await fetch(`/api/users/${userId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(formData)
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล');
            }

            // Close modal and refresh data
            closeUpdateUserModal();
            await fetchUsersDataOnSystem();

            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: data.message || 'อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว',
                showConfirmButton: false,
                timer: 1500
            });

        } catch (error) {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                text: error.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
                confirmButtonColor: '#EF4444'
            });
        }
    });
</script>




{{-- <script>
    function openUpdateUserModal(userId) {
        // Show modal
        document.getElementById('updateUserModal').classList.remove('hidden');

        // Fetch user data
        fetch(`/api/users/${userId}`)
            .then(response => response.json())
            .then(user => {
                // Populate form fields
                document.getElementById('updateUserId').value = user.id;
                document.getElementById('updateName').value = user.name;
                document.getElementById('updateUsername').value = user.username;
                document.getElementById('updateEmail').value = user.email;

                // Set radio button for status
                const statusRadios = document.getElementsByName('status');
                statusRadios.forEach(radio => {
                    if (radio.value == user.status) {
                        radio.checked = true;
                    }
                });
            })
            .catch(error => {
                console.error('Error:', error);
                alert('เกิดข้อผิดพลาดในการดึงข้อมูลผู้ใช้');
            });
    }

    function closeUpdateUserModal() {
        document.getElementById('updateUserModal').classList.add('hidden');
        document.getElementById('updateUserForm').reset();
    }

    // Handle form submission
    document.getElementById('updateUserForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const userId = document.getElementById('updateUserId').value;
        const formData = {
            name: document.getElementById('updateName').value,
            username: document.getElementById('updateUsername').value,
            email: document.getElementById('updateEmail').value,
            password: document.getElementById('updatePassword').value,
            status: document.querySelector('input[name="status"]:checked').value
        };

        // If password is empty, remove it from formData
        if (!formData.password) {
            delete formData.password;
        }

        // Send update request
        fetch(`/api/users/${userId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Close modal and refresh table
                    closeUpdateUserModal();
                    fetchUsersDataOnSystem();

                    // Show success message
                    alert('อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว');
                } else {
                    throw new Error(data.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert(error.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล');
            });
    });
</script> --}}


{{-- <script>
    function openUpdateUserModal(userId) {
        // แสดงโมดอล
        document.getElementById('updateUserModal').classList.remove('hidden');

        // ดึงข้อมูลผู้ใช้
        fetch(`/api/users/${userId}`)
            .then(response => response.json())
            .then(user => {
                // กรอกข้อมูลในฟอร์ม
                document.getElementById('updateUserId').value = user.id;
                document.getElementById('updateName').value = user.name;
                document.getElementById('updateUsername').value = user.username;
                document.getElementById('updateEmail').value = user.email;
                document.getElementById('updateZone').value = user.zone;
                document.getElementById('updateBranch').value = user.branch;
                document.getElementById('updateStatusUser').value = user.status_user;

                // ตั้งค่ารายการฟิลด์การสถานะ
                const statusRadios = document.getElementsByName('status');
                statusRadios.forEach(radio => {
                    if (radio.value == user.status) {
                        radio.checked = true;
                    }
                });
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาดในการดึงข้อมูลผู้ใช้',
                    showConfirmButton: true
                });
            });
    }

    function closeUpdateUserModal() {
        document.getElementById('updateUserModal').classList.add('hidden');
        document.getElementById('updateUserForm').reset();
    }

    // Handle form submission
    document.getElementById('updateUserForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const userId = document.getElementById('updateUserId').value;
        const formData = {
            name: document.getElementById('updateName').value,
            username: document.getElementById('updateUsername').value,
            email: document.getElementById('updateEmail').value,
            password: document.getElementById('updatePassword').value,
            status: document.querySelector('input[name="status"]:checked').value,
            zone: document.getElementById('updateZone').value,
            branch: document.getElementById('updateBranch').value,
            status_user: document.querySelector('input[name="status_user"]:checked').value
        };

        // ถ้ารหัสผ่านไม่ถูกกรอก, ให้ลบออกจาก formData
        if (!formData.password) {
            delete formData.password;
        }

        // ตรวจสอบข้อมูลให้ครบก่อนส่ง
        if (!formData.name || !formData.username || !formData.email || !formData.zone || !formData.branch || !formData.status_user) {
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                text: 'ข้อมูลบางอย่างขาดหายไป กรุณาตรวจสอบและกรอกข้อมูลให้ครบถ้วน',
                showConfirmButton: true
            });
            return;
        }

        // ส่งคำขออัปเดต
        fetch(`/api/users/${userId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // ปิดโมดอลและรีเฟรชตารางข้อมูล
                closeUpdateUserModal();
                fetchUsersDataOnSystem();

                // แสดงข้อความสำเร็จ
                Swal.fire({
                    icon: 'success',
                    title: 'อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว',
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                throw new Error(data.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // แสดงข้อความข้อผิดพลาด
            Swal.fire({
                icon: 'error',
                title: 'ข้อผิดพลาด',
                text: error.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
                showConfirmButton: true
            });
        });
    });
</script> --}}
