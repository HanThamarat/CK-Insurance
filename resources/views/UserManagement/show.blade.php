<div id="showUserModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[85%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- Modal Header -->
            <div id="header" class="top-0 z-10 transition-bg duration-300 bg-white p-2"
                style="background-color: white;">
                <button class="absolute top-7 right-6 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
                    onclick="closeShowUserModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/user.gif') }}" alt="show icon" class="avatar-sm"
                        style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลผู้ใช้งานระบบ</h5>
                        <p class="text-muted font-semibold text-sm mt-1">Edit Data users</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <!-- Form for editing user -->
            <form id="showUserForm" class="mt-[-12] space-y-6">
                <input type="hidden" id="showUserId">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="showBranch" class="block text-sm font-medium text-gray-700 mb-1">
                                สถานะการใช้งาน <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="showStatus" name="status"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400"
                                placeholder="กรอกสถานะการใช้งาน">
                        </div>

                        <div>
                            <label for="showName" class="block text-sm font-medium text-gray-700 mb-1">
                                ชื่อ - นามสกุล <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="showName" name="name"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>

                        <div>
                            <label for="showUsername" class="block text-sm font-medium text-gray-700 mb-1">
                                ชื่อผู้ใช้ <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="showUsername" name="username"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>

                        <div>
                            <label for="showEmail" class="block text-sm font-medium text-gray-700 mb-1">
                                อีเมล <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="showEmail" name="email"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>

                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="showZone" class="block text-sm font-medium text-gray-700 mb-1">
                                โซน <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="showZone" name="zone"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400"
                                placeholder="กรอกโซน">
                        </div>

                        <div>
                            <label for="showBranch" class="block text-sm font-medium text-gray-700 mb-1">
                                สาขา <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="showBranch" name="branch"
                                class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400"
                                placeholder="กรอกสาขา">
                        </div>

                        <div>
                            <label for="showStatusUser" class="block text-sm font-medium text-gray-700 mb-2.5">
                                ประเภทผู้ใช้งาน <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="showStatusUser" name="status_user"
                                class="w-full px-3 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400"
                                placeholder="กรอกประเภทผู้ใช้งาน">
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                    <button type="button" onclick="closeShowUserModal()"
                        class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg shadow-md transform transition-transform duration-200 hover:scale-105 hover:bg-gray-200 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                        ยกเลิก
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Open user modal with pre-filled data
        window.openShowUserModal = (button) => {
            const userId = button.getAttribute('data-user-id');
            const userName = button.getAttribute('data-user-name');
            const userUsername = button.getAttribute('data-user-username');
            const userEmail = button.getAttribute('data-user-email');
            const userStatus = button.getAttribute('data-user-status'); // Status: active/inactive
            const userStatusUser = button.getAttribute('data-user-status-user');
            const userZone = button.getAttribute('data-user-zone');
            const userBranch = button.getAttribute('data-user-branch');

            // Set the data inside the modal
            document.getElementById('showUserId').value = userId;
            document.getElementById('showName').value = userName;
            document.getElementById('showUsername').value = userUsername;
            document.getElementById('showEmail').value = userEmail;
            document.getElementById('showStatusUser').value = userStatusUser;
            document.getElementById('showZone').value = userZone;
            document.getElementById('showBranch').value = userBranch;
            document.getElementById('showStatus').value = userStatus;

            // Show the modal
            document.getElementById('showUserModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Disable scrolling
        };

        // Close the modal
        window.closeShowUserModal = () => {
            document.getElementById('showUserModal').classList.add('hidden');
            document.body.style.overflow = ''; // Enable scrolling again
        };
    });
</script>
