
<div id="showUserModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-4xl mx-4 p-6 max-h-[85%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- Modal Header -->
            <div class="top-0 z-10 bg-white pl-1 border-gray-200">
                <button class="absolute top-4 right-4 p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="closeShowUserModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="flex items-center space-x-4">
                    <img src="{{ asset('img/user.gif') }}" alt="show icon" class="w-12 h-12 rounded-full">
                    <div class="flex-grow">
                        <h5 class="text-orange-500 text font-semibold">ข้อมูลผู้ใช้งานระบบ</h5>
                        <p class="text-gray-500 text-sm mt-1">View User Data</p>
                        <div class="border-b-2 border-orange-400 mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <!-- Form for viewing user data -->
            <form id="showUserForm" class="space-y-6 text-sm font-normal">
                <input type="hidden" id="showUserId">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="showStatus" class="block text-gray-700 mb-1 text-sm">สถานะการใช้งาน</label>
                            <input type="text" id="showStatus" name="status" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 text-sm" placeholder="กรอกสถานะการใช้งาน" disabled>
                        </div>

                        <div>
                            <label for="showName" class="block text-gray-700 mb-1 text-sm">ชื่อ - นามสกุล</label>
                            <input type="text" id="showName" name="name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 text-sm" disabled>
                        </div>

                        <div>
                            <label for="showUsername" class="block text-gray-700 mb-1 text-sm">ชื่อผู้ใช้</label>
                            <input type="text" id="showUsername" name="username" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 text-sm" disabled>
                        </div>

                        <div>
                            <label for="showEmail" class="block text-gray-700 mb-1 text-sm">อีเมล</label>
                            <input type="email" id="showEmail" name="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 text-sm" disabled>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="showZone" class="block text-gray-700 mb-1 text-sm">โซน</label>
                            <input type="text" id="showZone" name="zone" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 text-sm" placeholder="กรอกโซน" disabled>
                        </div>

                        <div>
                            <label for="showBranch" class="block text-gray-700 mb-1 text-sm">สาขา</label>
                            <input type="text" id="showBranch" name="branch" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 text-sm" placeholder="กรอกสาขา" disabled>
                        </div>

                        <div>
                            <label for="showStatusUser" class="block text-gray-700 mb-1 text-sm">ประเภทผู้ใช้งาน</label>
                            <input type="text" id="showStatusUser" name="status_user" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 text-sm" placeholder="กรอกประเภทผู้ใช้งาน" disabled>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                    <button type="button" onclick="closeShowUserModal()" class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg shadow-md transform transition-transform duration-200 hover:scale-105 hover:bg-gray-200 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                        ปิด
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // เปิด modal และเติมข้อมูล
        window.openShowUserModal = (button) => {
            const userId = button.getAttribute('data-user-id');
            const userName = button.getAttribute('data-user-name');
            const userUsername = button.getAttribute('data-user-username');
            const userEmail = button.getAttribute('data-user-email');
            const userStatusUser = button.getAttribute('data-user-status-user'); // code ของ role
            const userZone = button.getAttribute('data-user-zone');
            const userBranch = button.getAttribute('data-user-branch');
            const userStatus = button.getAttribute('data-user-status'); // ค่าสถานะที่ส่งมาจากปุ่ม

            // Mapping สำหรับโซน
            const zoneNames = {
                '10': 'ปัตตานี',
                '20': 'หาดใหญ่',
                '30': 'นครศรีธรรมราช',
                '40': 'กระบี่',
                '50': 'สุราษฎร์ธานี'
            };

            // เรียก API เพื่อดึงข้อมูลโซน, สาขา, และ role
            Promise.all([
                fetch('/api/get-zones?zone=' + userZone).then(response => response.json()),
                fetch('/api/get-roles').then(response => response.json())
            ])
            .then(([zoneData, roles]) => {
                const zones = zoneData.zones || [];
                const branches = zoneData.branches || [];

                // ตั้งค่าข้อมูลใน modal
                document.getElementById('showUserId').value = userId;
                document.getElementById('showName').value = userName;
                document.getElementById('showUsername').value = userUsername;
                document.getElementById('showEmail').value = userEmail;

                // หาชื่อ zone จาก mapping (ใช้ zoneNames)
                const zoneName = zoneNames[userZone] || 'Not Found';

                // หาข้อมูลสาขาจาก id_Contract
                const branch = branches.find(b => b.id_Contract == userBranch);

                // ตั้งชื่อ zone และ branch ใน modal (มี fallback หากไม่พบ)
                document.getElementById('showZone').value = zoneName;
                document.getElementById('showBranch').value = branch ? branch.name_branch : 'Not Found';

                // ค้นหา role จาก code ที่ส่งมา
                const userRole = roles.find(role => role.code === userStatusUser);
                if (userRole) {
                    document.getElementById('showStatusUser').value = userRole.name_th;
                } else {
                    // ถ้าไม่พบ role, แสดง Not Found
                    document.getElementById('showStatusUser').value = 'Not Found';
                }

                // ตั้งค่า status โดยใช้ค่าที่ส่งมาจากปุ่ม (ไม่ต้องใช้เงื่อนไขตรวจสอบ)
                document.getElementById('showStatus').value = userStatus;

                // แสดง modal
                document.getElementById('showUserModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Disable scrolling
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                // เพิ่มการจัดการข้อผิดพลาดกรณี API ล้มเหลว
                document.getElementById('showStatusUser').value = 'Not Found';
                document.getElementById('showStatus').value = 'Not Found';
            });
        };

        // ปิด modal
        window.closeShowUserModal = () => {
            document.getElementById('showUserModal').classList.add('hidden');
            document.body.style.overflow = ''; // Enable scrolling again
        };
    });
</script>


















{{-- <div id="showUserModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[85%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- Modal Header -->
            <div id="header" class="top-0 z-10 bg-white p-4 border-b-2 border-gray-200">
                <button class="absolute top-6 right-6 p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="closeShowUserModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="flex items-center space-x-4">
                    <img src="{{ asset('img/user.gif') }}" alt="show icon" class="avatar-sm w-12 h-12 rounded-full">
                    <div class="flex-grow">
                        <h5 class="text-orange-500 text-lg font-semibold">แก้ไขข้อมูลผู้ใช้งานระบบ</h5>
                        <p class="text-gray-500 text-sm mt-1">Edit Data users</p>
                        <div class="border-b-2 border-orange-400 mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <!-- Form for editing user -->
            <form id="showUserForm" class="space-y-6 text-sm">
                <input type="hidden" id="showUserId">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="showStatus" class="block text-gray-700 mb-1">สถานะการใช้งาน <span class="text-red-500">*</span></label>
                            <input type="text" id="showStatus" name="status" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400" placeholder="กรอกสถานะการใช้งาน">
                        </div>

                        <div>
                            <label for="showName" class="block text-gray-700 mb-1">ชื่อ - นามสกุล <span class="text-red-500">*</span></label>
                            <input type="text" id="showName" name="name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>

                        <div>
                            <label for="showUsername" class="block text-gray-700 mb-1">ชื่อผู้ใช้ <span class="text-red-500">*</span></label>
                            <input type="text" id="showUsername" name="username" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>

                        <div>
                            <label for="showEmail" class="block text-gray-700 mb-1">อีเมล <span class="text-red-500">*</span></label>
                            <input type="email" id="showEmail" name="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <div>
                            <label for="showZone" class="block text-gray-700 mb-1">โซน <span class="text-red-500">*</span></label>
                            <input type="text" id="showZone" name="zone" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400" placeholder="กรอกโซน">
                        </div>

                        <div>
                            <label for="showBranch" class="block text-gray-700 mb-1">สาขา <span class="text-red-500">*</span></label>
                            <input type="text" id="showBranch" name="branch" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400" placeholder="กรอกสาขา">
                        </div>

                        <div>
                            <label for="showStatusUser" class="block text-gray-700 mb-2.5">ประเภทผู้ใช้งาน <span class="text-red-500">*</span></label>
                            <input type="text" id="showStatusUser" name="status_user" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400" placeholder="กรอกประเภทผู้ใช้งาน">
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                    <button type="button" onclick="closeShowUserModal()" class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg shadow-md transform transition-transform duration-200 hover:scale-105 hover:bg-gray-200 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                        ยกเลิก
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        // เปิด modal และเติมข้อมูล
        window.openShowUserModal = (button) => {
            const userId = button.getAttribute('data-user-id');
            const userName = button.getAttribute('data-user-name');
            const userUsername = button.getAttribute('data-user-username');
            const userEmail = button.getAttribute('data-user-email');
            const userStatusUser = button.getAttribute('data-user-status-user'); // code ของ role
            const userZone = button.getAttribute('data-user-zone');
            const userBranch = button.getAttribute('data-user-branch');
            const userStatus = button.getAttribute('data-user-status'); // ค่าสถานะที่ส่งมาจากปุ่ม

            // Mapping สำหรับโซน
            const zoneNames = {
                '10': 'ปัตตานี',
                '20': 'หาดใหญ่',
                '30': 'นครศรีธรรมราช',
                '40': 'กระบี่',
                '50': 'สุราษฎร์ธานี'
            };

            // เรียก API เพื่อดึงข้อมูลโซน, สาขา, และ role
            Promise.all([
                fetch('/api/get-zones?zone=' + userZone).then(response => response.json()),
                fetch('/api/get-roles').then(response => response.json())
            ])
            .then(([zoneData, roles]) => {
                const zones = zoneData.zones || [];
                const branches = zoneData.branches || [];

                // ตั้งค่าข้อมูลใน modal
                document.getElementById('showUserId').value = userId;
                document.getElementById('showName').value = userName;
                document.getElementById('showUsername').value = userUsername;
                document.getElementById('showEmail').value = userEmail;

                // หาชื่อ zone จาก mapping (ใช้ zoneNames)
                const zoneName = zoneNames[userZone] || 'Not Found';

                // หาข้อมูลสาขาจาก branch id
                const branch = branches.find(b => b.id == userBranch);

                // ตั้งชื่อ zone และ branch ใน modal (มี fallback หากไม่พบ)
                document.getElementById('showZone').value = zoneName;
                document.getElementById('showBranch').value = branch ? branch.Name_Branch : 'Not Found';

                // ค้นหา role จาก code ที่ส่งมา
                const userRole = roles.find(role => role.code === userStatusUser);
                if (userRole) {
                    document.getElementById('showStatusUser').value = userRole.name_th;
                } else {
                    // ถ้าไม่พบ role, แสดง Not Found
                    document.getElementById('showStatusUser').value = 'Not Found';
                }

                // ตั้งค่า status โดยใช้ค่าที่ส่งมาจากปุ่ม (ไม่ต้องใช้เงื่อนไขตรวจสอบ)
                document.getElementById('showStatus').value = userStatus;

                // แสดง modal
                document.getElementById('showUserModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Disable scrolling
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                // เพิ่มการจัดการข้อผิดพลาดกรณี API ล้มเหลว
                document.getElementById('showStatusUser').value = 'Not Found';
                document.getElementById('showStatus').value = 'Not Found';
            });
        };

        // ปิด modal
        window.closeShowUserModal = () => {
            document.getElementById('showUserModal').classList.add('hidden');
            document.body.style.overflow = ''; // Enable scrolling again
        };
    });
</script> --}}


{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        // เปิด modal และเติมข้อมูล
        window.openShowUserModal = (button) => {
            const userId = button.getAttribute('data-user-id');
            const userName = button.getAttribute('data-user-name');
            const userUsername = button.getAttribute('data-user-username');
            const userEmail = button.getAttribute('data-user-email');
            const userStatusUser = button.getAttribute('data-user-status-user'); // code ของ role
            const userZone = button.getAttribute('data-user-zone');
            const userBranch = button.getAttribute('data-user-branch');
            const userStatus = button.getAttribute('data-user-status'); // Status: 1 = active, 0 = inactive

            // Mapping สำหรับโซน
            const zoneNames = {
                '10': 'ปัตตานี',
                '20': 'หาดใหญ่',
                '30': 'นครศรีธรรมราช',
                '40': 'กระบี่',
                '50': 'สุราษฎร์ธานี'
            };

            // เรียก API เพื่อดึงข้อมูลโซน, สาขา, และ role
            Promise.all([
                fetch('/api/get-zones?zone=' + userZone).then(response => response.json()),
                fetch('/api/get-roles').then(response => response.json())
            ])
            .then(([zoneData, roles]) => {
                const zones = zoneData.zones || [];
                const branches = zoneData.branches || [];

                // ตั้งค่าข้อมูลใน modal
                document.getElementById('showUserId').value = userId;
                document.getElementById('showName').value = userName;
                document.getElementById('showUsername').value = userUsername;
                document.getElementById('showEmail').value = userEmail;

                // หาชื่อ zone จาก mapping (ใช้ zoneNames)
                const zoneName = zoneNames[userZone] || 'Not Found';

                // หาข้อมูลสาขาจาก branch id
                const branch = branches.find(b => b.id == userBranch);

                // ตั้งชื่อ zone และ branch ใน modal (มี fallback หากไม่พบ)
                document.getElementById('showZone').value = zoneName;
                document.getElementById('showBranch').value = branch ? branch.Name_Branch : 'Not Found';

                // ค้นหา role จาก code ที่ส่งมา
                const userRole = roles.find(role => role.code === userStatusUser);
                if (userRole) {
                    document.getElementById('showStatusUser').value = userRole.name_th;
                } else {
                    // ถ้าไม่พบ role, แสดง Not Found
                    document.getElementById('showStatusUser').value = 'Not Found';
                }

                // ตั้งค่า status (active/inactive) ให้แสดงใน modal ตามค่าที่ส่งมาจากปุ่ม
                document.getElementById('showStatus').value = userStatus === '1' ? 'Active' : 'Inactive';

                // แสดง modal
                document.getElementById('showUserModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Disable scrolling
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                // เพิ่มการจัดการข้อผิดพลาดกรณี API ล้มเหลว
                document.getElementById('showStatusUser').value = 'Not Found';
                document.getElementById('showStatus').value = 'Not Found';
            });
        };

        // ปิด modal
        window.closeShowUserModal = () => {
            document.getElementById('showUserModal').classList.add('hidden');
            document.body.style.overflow = ''; // Enable scrolling again
        };
    });
</script> --}}


{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        // เปิด modal และเติมข้อมูล
        window.openShowUserModal = (button) => {
            const userId = button.getAttribute('data-user-id');
            const userName = button.getAttribute('data-user-name');
            const userUsername = button.getAttribute('data-user-username');
            const userEmail = button.getAttribute('data-user-email');
            const userStatusUser = button.getAttribute('data-user-status-user'); // code ของ role
            const userZone = button.getAttribute('data-user-zone');
            const userBranch = button.getAttribute('data-user-branch');

            // Mapping สำหรับโซน
            const zoneNames = {
                '10': 'ปัตตานี',
                '20': 'หาดใหญ่',
                '30': 'นครศรีธรรมราช',
                '40': 'กระบี่',
                '50': 'สุราษฎร์ธานี'
            };

            // เรียก API เพื่อดึงข้อมูลโซน, สาขา, และ role
            Promise.all([
                fetch('/api/get-zones?zone=' + userZone).then(response => response.json()),
                fetch('/api/get-roles').then(response => response.json())
            ])
            .then(([zoneData, roles]) => {
                const zones = zoneData.zones || [];
                const branches = zoneData.branches || [];

                // ตั้งค่าข้อมูลใน modal
                document.getElementById('showUserId').value = userId;
                document.getElementById('showName').value = userName;
                document.getElementById('showUsername').value = userUsername;
                document.getElementById('showEmail').value = userEmail;

                // หาชื่อ zone จาก mapping (ใช้ zoneNames)
                const zoneName = zoneNames[userZone] || 'Not Found';

                // หาข้อมูลสาขาจาก branch id
                const branch = branches.find(b => b.id == userBranch);

                // ตั้งชื่อ zone และ branch ใน modal (มี fallback หากไม่พบ)
                document.getElementById('showZone').value = zoneName;
                document.getElementById('showBranch').value = branch ? branch.Name_Branch : 'Not Found';

                // ค้นหา role จาก code ที่ส่งมา
                const userRole = roles.find(role => role.code === userStatusUser);
                if (userRole) {
                    document.getElementById('showStatusUser').value = userRole.name_th;
                } else {
                    // ถ้าไม่พบ role, แสดง Not Found
                    document.getElementById('showStatusUser').value = 'Not Found';
                }

                // แสดง modal
                document.getElementById('showUserModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Disable scrolling
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                // เพิ่มการจัดการข้อผิดพลาดกรณี API ล้มเหลว
                document.getElementById('showStatusUser').value = 'Not Found';
            });
        };

        // ปิด modal
        window.closeShowUserModal = () => {
            document.getElementById('showUserModal').classList.add('hidden');
            document.body.style.overflow = ''; // Enable scrolling again
        };
    });
</script> --}}

{{-- <script>
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

            // Mapping for zones
            const zoneNames = {
                '10': 'ปัตตานี',
                '20': 'หาดใหญ่',
                '30': 'นครศรีธรรมราช',
                '40': 'กระบี่',
                '50': 'สุราษฎร์ธานี'
            };

            // Call API to get the data for zones, branches, and roles
            fetch('/api/get-zones?zone=' + userZone)
                .then(response => response.json())
                .then(data => {
                    const zones = data.zones || [];
                    const branches = data.branches || [];
                    const roles = data.roles || [];

                    // Set the data inside the modal
                    document.getElementById('showUserId').value = userId;
                    document.getElementById('showName').value = userName;
                    document.getElementById('showUsername').value = userUsername;
                    document.getElementById('showEmail').value = userEmail;
                    document.getElementById('showStatusUser').value = userStatusUser;

                    // Find the zone name from the mapping (using zoneNames)
                    const zoneName = zoneNames[userZone] || 'Not Found';

                    // Find the branch based on branch id
                    const branch = branches.find(b => b.id == userBranch);

                    // Set Zone and Branch names in the modal (with fallback if not found)
                    document.getElementById('showZone').value = zoneName;
                    document.getElementById('showBranch').value = branch ? branch.Name_Branch :
                        'Not Found';

                    // Set role names (with validation)
                    const role = roles.find(r => r.id == userStatusUser);
                    document.getElementById('showStatus').value = role ? role.name_th : 'Not Found';

                    // Show the modal
                    document.getElementById('showUserModal').classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Disable scrolling
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        };


        // Close the modal
        window.closeShowUserModal = () => {
            document.getElementById('showUserModal').classList.add('hidden');
            document.body.style.overflow = ''; // Enable scrolling again
        };
    });



</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    // เปิด modal และเติมข้อมูล
    window.openShowUserModal = (button) => {
        const userId = button.getAttribute('data-user-id');
        const userName = button.getAttribute('data-user-name');
        const userUsername = button.getAttribute('data-user-username');
        const userEmail = button.getAttribute('data-user-email');
        const userStatus = button.getAttribute('data-user-status');
        const userStatusUser = button.getAttribute('data-user-status-user'); // code ของ role
        const userZone = button.getAttribute('data-user-zone');
        const userBranch = button.getAttribute('data-user-branch');

        // เรียก API เพื่อดึงข้อมูล role
        fetch('/api/get-roles')
            .then(response => response.json())
            .then(roles => {
                // ค้นหาค่า name_th โดยใช้ code ที่ส่งมา
                const userRole = roles.find(role => role.code === userStatusUser);
                if (userRole) {
                    document.getElementById('showStatusUser').value = userRole.name_th;
                } else {
                    document.getElementById('showStatusUser').value = 'Not Found';
                }

                // ตั้งค่าข้อมูลอื่นๆ ใน modal
                document.getElementById('showUserId').value = userId;
                document.getElementById('showName').value = userName;
                document.getElementById('showUsername').value = userUsername;
                document.getElementById('showEmail').value = userEmail;

                // แสดง modal
                document.getElementById('showUserModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Disable scrolling
            })
            .catch(error => {
                console.error('Error fetching roles:', error);
            });
    };

    // ปิด modal
    window.closeShowUserModal = () => {
        document.getElementById('showUserModal').classList.add('hidden');
        document.body.style.overflow = ''; // Enable scrolling again
    };
});

</script> --}}

{{-- {{-- // document.addEventListener('DOMContentLoaded', () => {
    //     // Open user modal with pre-filled data
    //     window.openShowUserModal = (button) => {
    //         const userId = button.getAttribute('data-user-id');
    //         const userName = button.getAttribute('data-user-name');
    //         const userUsername = button.getAttribute('data-user-username');
    //         const userEmail = button.getAttribute('data-user-email');
    //         const userStatus = button.getAttribute('data-user-status'); // Status: active/inactive
    //         const userStatusUser = button.getAttribute('data-user-status-user');
    //         const userZone = button.getAttribute('data-user-zone');
    //         const userBranch = button.getAttribute('data-user-branch');

    //         // Set the data inside the modal
    //         document.getElementById('showUserId').value = userId;
    //         document.getElementById('showName').value = userName;
    //         document.getElementById('showUsername').value = userUsername;
    //         document.getElementById('showEmail').value = userEmail;
    //         document.getElementById('showStatusUser').value = userStatusUser;
    //         document.getElementById('showZone').value = userZone;
    //         document.getElementById('showBranch').value = userBranch;
    //         document.getElementById('showStatus').value = userStatus;

    //         // Show the modal
    //         document.getElementById('showUserModal').classList.remove('hidden');
    //         document.body.style.overflow = 'hidden'; // Disable scrolling
    //     };

    //     // Close the modal
    //     window.closeShowUserModal = () => {
    //         document.getElementById('showUserModal').classList.add('hidden');
    //         document.body.style.overflow = ''; // Enable scrolling again
    //     };
    // }); --}}
