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
                                รหัสผ่าน <span class="text-gray-500 text-xs">(<span
                                        class="text-red-500">*</span>กรุณาเว้นว่างหากไม่ต้องการเปลี่ยนแปลง<span
                                        class="text-red-500">*</span>)</span>
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
                        class="px-6 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 hover:bg-orange-600 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-orange-400">
                        บันทึกการเปลี่ยนแปลง
                    </button>

                    <button type="button" onclick="closeUpdateUserModal()"
                        class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg shadow-md transform transition-transform duration-200 hover:scale-105 hover:bg-gray-200 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                        ยกเลิก
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    const ZONE_MAPPING = {
        10: "ปัตตานี",
        20: "หาดใหญ่",
        30: "นครศรีธรรมราช",
        40: "กระบี่",
        50: "สุราษฏร์ธานี"
    };

    class UserUpdateModal {
        constructor() {
            this.modal = $('#updateUserModal');
            this.form = $('#updateUserForm');
            this.initializeEventListeners();
        }

        initializeEventListeners() {
            // Zone change handler
            $('#updateZone').on('change', (e) => {
                this.handleZoneChange($(e.target).val());
            });

            // Initialize data on DOM load
            this.fetchRoles();
            this.fetchZonesBranches();
        }

        // Modal Control Methods
        open(userData) {
            this.modal.removeClass('hidden');
            $('body').css('overflow', 'hidden');
            this.populateForm(userData);
        }

        close() {
            this.modal.addClass('hidden');
            $('body').css('overflow', 'auto');
            this.form[0].reset();
        }

        // Form Population
        populateForm(userData) {
            $('#updateUserId').val(userData.id);

            ['name', 'username', 'email'].forEach(field => {
                $(`#update${field.charAt(0).toUpperCase() + field.slice(1)}`).val(userData[field]);
            });

            $('input[name="status"]').each(function() {
                $(this).prop('checked', $(this).val() === userData.status);
            });

            $('#updateZone').val(userData.zone);
            this.handleZoneChange(userData.zone, userData.branch);

            $('#updateStatusUser').val(userData.status_user);
        }

        // API Calls
        fetchRoles() {
            $.ajax({
                url: '/roles', // Replace with your endpoint
                method: 'GET',
                success: (roles) => {
                    this.populateRolesSelect(roles);
                },
                error: () => {
                    this.showError('Failed to load user roles');
                }
            });
        }

        fetchZonesBranches() {
            $.ajax({
                url: '/get-zones-branches', // Replace with your endpoint
                method: 'GET',
                success: (data) => {
                    this.populateZonesSelect(data.zones);
                },
                error: () => {
                    this.showError('Failed to load zones');
                }
            });
        }

        fetchBranches(zone, callback) {
            $.ajax({
                url: `/get-zones-branches?zone=${zone}`,
                method: 'GET',
                success: (data) => {
                    callback(data.branches || []);
                },
                error: () => {
                    this.showError('Failed to load branches');
                    callback([]);
                }
            });
        }

        // Select Population Methods
        populateRolesSelect(roles) {
            const select = $('#updateStatusUser');
            select.empty().append('<option value="">เลือกประเภทผู้ใช้งาน</option>');

            roles.forEach(role => {
                select.append(`<option value="${role.code}">${role.name_th}</option>`);
            });
        }

        populateZonesSelect(zones) {
            const select = $('#updateZone');
            select.empty().append('<option value="">เลือกโซน</option>');

            zones.forEach(zone => {
                select.append(
                    `<option value="${zone.Zone_Branch}">${ZONE_MAPPING[zone.Zone_Branch] || zone.Zone_Branch}</option>`
                );
            });
        }

        handleZoneChange(zoneValue, preSelectedBranch = null) {
            const branchSelect = $('#updateBranch');
            branchSelect.empty().append('<option value="">เลือกสาขา</option>').prop('disabled', !zoneValue);

            if (zoneValue) {
                this.fetchBranches(zoneValue, (branches) => {
                    branches.forEach(branch => {
                        branchSelect.append(
                            `<option value="${branch.id_Contract}">${branch.name_branch}</option>`
                        );
                    });

                    if (preSelectedBranch) {
                        branchSelect.val(preSelectedBranch);
                    }
                });
            }
        }

        // Utility Methods
        showError(message) {
            alert(message); // Replace with your custom error handling
        }
    }


    $(document).ready(() => {
        const userModal = new UserUpdateModal();

        // Make the modal instance available globally
        window.userUpdateModal = userModal;

        // Expose necessary methods
        window.openUpdateUserModal = (button) => {
            const userData = {
                id: $(button).data('user-id'),
                name: $(button).data('user-name'),
                username: $(button).data('user-username'),
                email: $(button).data('user-email'),
                status: $(button).data('user-status'),
                status_user: $(button).data('user-status-user'),
                zone: $(button).data('user-zone'),
                branch: $(button).data('user-branch')
            };
            userModal.open(userData);
        };

        window.closeUpdateUserModal = () => {
            userModal.close();
        };
    });

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
            $.ajax({
                url: `/api/users/${userId}`,
                method: 'GET',
                success: function(user) {
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
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        text: xhr.responseJSON?.message || 'ไม่สามารถดึงข้อมูลผู้ใช้ได้',
                        confirmButtonColor: '#EF4444'
                    });
                }
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
    $('#updateUserForm').submit(function(e) {
        e.preventDefault();

        try {
            const userId = $('#updateUserId').val();
            const formData = {
                name: $('#updateName').val().trim(),
                username: $('#updateUsername').val().trim(),
                email: $('#updateEmail').val().trim(),
                zone: $('#updateZone').val(),
                branch: $('#updateBranch').val(),
                status_user: $('#updateStatusUser').val(),
                status: $('input[name="status"]:checked').val()
            };

            // Add password only if it's provided
            const password = $('#updatePassword').val().trim();
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
            $.ajax({
                url: `/api/users/${userId}`,
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: 'application/json',
                data: JSON.stringify(formData),
                success: function(data) {
                    closeUpdateUserModal();
                    fetchUsersDataOnSystem();

                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ',
                        text: data.message || 'อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว',
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        text: xhr.responseJSON?.message ||
                            'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
                        confirmButtonColor: '#EF4444'
                    });
                }
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



{{-- // $(document).ready(() => {
    //     const userModal = new UserUpdateModal();

    //     // Make the modal instance available globally
    //     window.userUpdateModal = userModal;

    //     // Expose necessary methods
    //     window.openUpdateUserModal = (button) => {
    //         const userData = {
    //             id: $(button).data('user-id'),
    //             name: $(button).data('user-name'),
    //             username: $(button).data('user-username'),
    //             email: $(button).data('user-email'),
    //             status: $(button).data('user-status'),
    //             status_user: $(button).data('user-status-user'),
    //             zone: $(button).data('user-zone'),
    //             branch: $(button).data('user-branch')
    //         };
    //         userModal.open(userData);
    //     };

    //     window.closeUpdateUserModal = () => {
    //         userModal.close();
    //     };
    // }); --}}

{{-- <script>
    const ZONE_MAPPING = {
        10: "ปัตตานี",
        20: "หาดใหญ่",
        30: "นครศรีธรรมราช",
        40: "กระบี่",
        50: "สุราษฏร์ธานี"
    };

    class UserUpdateModal {
        constructor() {
            this.modal = $('#updateUserModal');
            this.form = $('#updateUserForm');
            this.initializeEventListeners();
        }

        initializeEventListeners() {
            // Zone change handler
            $('#updateZone').on('change', (e) => {
                this.handleZoneChange($(e.target).val());
            });

            // Initialize data on DOM load
            this.fetchRoles();
            this.fetchZonesBranches();
        }

        // Modal Control Methods
        open(userData) {
            this.modal.removeClass('hidden');
            $('body').css('overflow', 'hidden');
            this.populateForm(userData);
        }

        close() {
            this.modal.addClass('hidden');
            $('body').css('overflow', 'auto');
            this.form[0].reset();
        }

        // Form Population
        populateForm(userData) {
            $('#updateUserId').val(userData.id);

            ['name', 'username', 'email'].forEach(field => {
                $(`#update${field.charAt(0).toUpperCase() + field.slice(1)}`).val(userData[field]);
            });

            $('input[name="status"]').each(function() {
                $(this).prop('checked', $(this).val() === userData.status);
            });

            $('#updateZone').val(userData.zone);
            this.handleZoneChange(userData.zone, userData.branch);

            $('#updateStatusUser').val(userData.status_user);
        }

        // API Calls
        fetchRoles() {
            $.ajax({
                url: '/roles', // Replaced API_ENDPOINTS.ROLES
                method: 'GET',
                success: (roles) => {
                    this.populateRolesSelect(roles);
                },
                error: () => {
                    this.showError('Failed to load user roles');
                }
            });
        }

        fetchZonesBranches() {
            $.ajax({
                url: '/get-zones-branches', // Replaced API_ENDPOINTS.ZONES_BRANCHES
                method: 'GET',
                success: (data) => {
                    this.populateZonesSelect(data.zones);
                },
                error: () => {
                    this.showError('Failed to load zones');
                }
            });
        }

        fetchBranches(zone, callback) {
            $.ajax({
                url: `/get-zones-branches?zone=${zone}`, // Direct URL
                method: 'GET',
                success: (data) => {
                    callback(data.branches || []);
                },
                error: () => {
                    this.showError('Failed to load branches');
                    callback([]);
                }
            });
        }

        // Select Population Methods
        populateRolesSelect(roles) {
            const select = $('#updateStatusUser');
            select.empty().append('<option value="">เลือกประเภทผู้ใช้งาน</option>');

            roles.forEach(role => {
                select.append(`<option value="${role.code}">${role.name_th}</option>`);
            });
        }

        populateZonesSelect(zones) {
            const select = $('#updateZone');
            select.empty().append('<option value="">เลือกโซน</option>');

            zones.forEach(zone => {
                select.append(
                    `<option value="${zone.Zone_Branch}">${ZONE_MAPPING[zone.Zone_Branch] || zone.Zone_Branch}</option>`
                    );
            });
        }

        handleZoneChange(zoneValue, preSelectedBranch = null) {
            const branchSelect = $('#updateBranch');
            branchSelect.empty().append('<option value="">เลือกสาขา</option>').prop('disabled', !zoneValue);

            if (zoneValue) {
                this.fetchBranches(zoneValue, (branches) => {
                    branches.forEach(branch => {
                        branchSelect.append(
                            `<option value="${branch.id}">${branch.Name_Branch}</option>`);
                    });

                    if (preSelectedBranch) {
                        branchSelect.val(preSelectedBranch);
                    }
                });
            }
        }

        // Utility Methods
        // showError(message) {
        //     alert(message);
        // }

        // showSuccess(message) {
        //     alert(message);
        // }
    }

    $(document).ready(() => {
        const userModal = new UserUpdateModal();

        // Make the modal instance available globally
        window.userUpdateModal = userModal;

        // Expose necessary methods
        window.openUpdateUserModal = (button) => {
            const userData = {
                id: $(button).data('user-id'),
                name: $(button).data('user-name'),
                username: $(button).data('user-username'),
                email: $(button).data('user-email'),
                status: $(button).data('user-status'),
                status_user: $(button).data('user-status-user'),
                zone: $(button).data('user-zone'),
                branch: $(button).data('user-branch')
            };
            userModal.open(userData);
        };

        window.closeUpdateUserModal = () => {
            userModal.close();
        };
    });

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
            $.ajax({
                url: `/api/users/${userId}`,
                method: 'GET',
                success: function(user) {
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
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        text: xhr.responseJSON?.message || 'ไม่สามารถดึงข้อมูลผู้ใช้ได้',
                        confirmButtonColor: '#EF4444'
                    });
                }
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
    $('#updateUserForm').submit(function(e) {
        e.preventDefault();

        try {
            const userId = $('#updateUserId').val();
            const formData = {
                name: $('#updateName').val().trim(),
                username: $('#updateUsername').val().trim(),
                email: $('#updateEmail').val().trim(),
                zone: $('#updateZone').val(),
                branch: $('#updateBranch').val(),
                status_user: $('#updateStatusUser').val(),
                status: $('input[name="status"]:checked').val()
            };

            // Add password only if it's provided
            const password = $('#updatePassword').val().trim();
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
            $.ajax({
                url: `/api/users/${userId}`,
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: 'application/json',
                data: JSON.stringify(formData),
                success: function(data) {
                    closeUpdateUserModal();
                    fetchUsersDataOnSystem();

                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ',
                        text: data.message || 'อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว',
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อผิดพลาด',
                        text: xhr.responseJSON?.message ||
                            'เกิดข้อผิดพลาดในการอัปเดตข้อมูล',
                        confirmButtonColor: '#EF4444'
                    });
                }
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
</script> --}}
