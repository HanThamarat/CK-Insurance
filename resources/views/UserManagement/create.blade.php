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

            <!-- Form Content -->
            <form id="createUserForm" class="space-y-4 mt-2">
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

                <!-- Role and Status -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">สถานะผู้ใช้ผู้ใช้งานระบบ</label>
                        <select name="status_user"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                            id="status_user">
                            <option value="" disabled selected>กรุณาเลือกสถานะผู้ใช้งานระบบ</option>
                            <option value="AD">ผู้ดูแลระบบ</option>
                            <option value="SAD">ซุปเปอร์แอดมิน</option>
                            <option value="FN">เจ้าหน้าที่ไฟแนนซ์</option>
                            <option value="SUP">หัวหน้าไฟแนนซ์</option>
                            <option value="MG">ผู้จัดการไฟแนนซ์</option>
                            <option value="AUD">เจ้าหน้าที่ตรวจสอบ</option>
                            <option value="ACT">เจ้าหน้าที่บัญชี</option>
                            <option value="ST">เจ้าหน้าที่แอดมิน</option>
                            <option value="FNC">เจ้าหน้าที่การเงินใน</option>
                            <option value="FNC">เจ้าหน้าที่การเงิน</option>
                            <option value="MKT">เจ้าหน้าที่การตลาด</option>
                            <option value="ASM">ผู้ช่วยผู้จัดการ</option>
                        </select>
                    </div>



                    <div>
                        <label class="block text-sm font-medium text-gray-700">สถานะ</label>
                        <select name="status"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">โซน</label>
                        <select id="zone" name="zone"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                            <option value="">เลือกโซน</option>
                            <!-- ข้อมูลโซนจะถูกใส่ที่นี่ -->
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">สาขา</label>
                        <select id="branch" name="branch"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
                            <option value="">เลือกรายการสาขา</option>
                            <!-- ข้อมูลสาขาจะถูกใส่ที่นี่ -->
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



{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // สร้างออบเจ็กต์เพื่อเก็บข้อมูลที่จับคู่กับ Zone_Branch
        const zoneMapping = {
            10: "ปัตตานี",
            20: "หาดใหญ่",
            30: "นครศรีธรรมราช",
            40: "กระบี่",
            50: "สุราษฏร์ธานี"
        };

        // ดึงข้อมูลโซนและสาขา
        fetch('/get-zones-branches')
            .then(response => response.json())
            .then(data => {
                // ใส่ข้อมูลโซนลงใน select #zone
                const zoneSelect = document.getElementById('zone');
                data.zones.forEach(zone => {
                    const option = document.createElement('option');
                    // ตรวจสอบค่า Zone_Branch และแสดงชื่อที่กำหนด
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
            })
            .catch(error => console.error('Error fetching data:', error));

        // เมื่อเปลี่ยนค่าใน select #zone
        document.getElementById('zone').addEventListener('change', function() {
            const selectedZone = this.value;
            const branchSelect = document.getElementById('branch');

            if (selectedZone) {
                // เรียก fetch ใหม่ตามค่า zone ที่เลือก
                fetch(`/get-zones-branches?zone=${selectedZone}`)
                    .then(response => response.json())
                    .then(data => {
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
                    })
                    .catch(error => console.error('Error fetching data:', error));
            } else {
                // ถ้าไม่เลือก zone ให้ปิดการใช้งาน select #branch และรีเซ็ตข้อมูล
                branchSelect.disabled = true;
                branchSelect.innerHTML = '<option value="">กรุณาเลือกโซน</option>';
            }
        });
    });
</script> --}}


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // สร้างออบเจ็กต์เพื่อเก็บข้อมูลที่จับคู่กับ Zone_Branch
        const zoneMapping = {
            10: "ปัตตานี",
            20: "หาดใหญ่",
            30: "นครศรีธรรมราช",
            40: "กระบี่",
            50: "สุราษฏร์ธานี"
        };

        // ดึงข้อมูลโซนและสาขา
        fetch('/get-zones-branches')
            .then(response => response.json())
            .then(data => {
                // ใส่ข้อมูลโซนลงใน select #zone
                const zoneSelect = document.getElementById('zone');
                data.zones.forEach(zone => {
                    const option = document.createElement('option');
                    // ตรวจสอบค่า Zone_Branch และแสดงชื่อที่กำหนด
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
            })
            .catch(error => console.error('Error fetching data:', error));

        // เมื่อเปลี่ยนค่าใน select #zone
        document.getElementById('zone').addEventListener('change', function() {
            const selectedZone = this.value;
            const branchSelect = document.getElementById('branch');

            if (selectedZone) {
                // เรียก fetch ใหม่ตามค่า zone ที่เลือก
                fetch(`/get-zones-branches?zone=${selectedZone}`)
                    .then(response => response.json())
                    .then(data => {
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
                    })
                    .catch(error => console.error('Error fetching data:', error));
            } else {
                // ถ้าไม่เลือก zone ให้ปิดการใช้งาน select #branch และรีเซ็ตข้อมูล
                branchSelect.disabled = true;
                branchSelect.innerHTML = '<option value="">กรุณาเลือกโซน</option>';
            }
        });

        // ตรวจสอบสถานะเริ่มต้นและให้ทำงานเมื่อเลือก "Active"
        const statusSelect = document.querySelector('select[name="status"]');
        if (statusSelect && statusSelect.value === 'active') {
            // ให้ทำงานกับ Zone เมื่อสถานะเป็น Active
            document.getElementById('zone').disabled = false; // เปิดใช้งาน Zone
        }

        // เมื่อเปลี่ยนค่าใน select status
        statusSelect.addEventListener('change', function() {
            const zoneSelect = document.getElementById('zone');
            if (this.value === 'active') {
                zoneSelect.disabled = false; // เปิดใช้งาน Zone
            } else {
                zoneSelect.disabled = true; // ปิดการใช้งาน Zone
                document.getElementById('branch').disabled = true; // ปิดการใช้งาน branch
            }
        });
    });
</script>



<script>
    function openModalCreateUser() {
        document.getElementById('createUserModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModalCreateUser() {
        document.getElementById('createUserModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    document.getElementById('createUserForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());

        try {
            const response = await fetch('/api/users', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data)
            });

            if (response.ok) {
                closeModalCreateUser();
                // Refresh user table or show success message
                alert('บันทึกข้อมูลสำเร็จ');
                fetchUsersDataOnSystem(); // Refresh table
            } else {
                const errorData = await response.json();
                alert(errorData.message || 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง');
        }
    });
</script>












{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // ดึงข้อมูลโซนและสาขา
        fetch('/get-zones-branches')
            .then(response => response.json())
            .then(data => {
                // ใส่ข้อมูลโซนลงใน select #zone
                const zoneSelect = document.getElementById('zone');
                data.zones.forEach(zone => {
                    const option = document.createElement('option');
                    option.value = zone.Zone_Branch;
                    option.textContent = zone.Zone_Branch;
                    zoneSelect.appendChild(option);
                });

                // ใส่ข้อมูลสาขาลงใน select #branch
                const branchSelect = document.getElementById('branch');
                data.branches.forEach(branch => {
                    const option = document.createElement('option');
                    option.value = branch.id;
                    option.textContent = `${branch.Name_Branch}`;
                    branchSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script> --}}


<!-- Location Information -->
{{-- <div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">โซน</label>
        <input type="text" name="zone"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700">สาขา</label>
        <input type="text" name="branch"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
    </div>
</div> --}}


{{-- <div>
    <label class="block text-sm font-medium text-gray-700">สถานะผู้ใช้ผู้ใช้งานระบบ</label>
    <select name="status_user"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition">
        <option value="SAD">Super Admin</option>
        <option value="AD">Admin</option>
        <option value="US">User</option>
    </select>
</div> --}}


<!-- Modal Content -->
{{-- <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-lg bg-white">
<div class="flex flex-col space-y-4">
<!-- Modal Header -->
<div class="flex justify-between items-center border-b pb-4">
    <h2 class="text-xl font-semibold text-gray-800">เพิ่มบัญชีผู้ใช้งานระบบ</h2>
    <button onclick="closeModalCreateUser()" class="text-gray-400 hover:text-gray-500">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div> --}}


{{-- <form class="p-4 md:p-5">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-2 sm:col-span-1">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ - นามสุกล</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รหัสผ่าน</label>
            <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected="">Select category</option>
                <option value="TV">TV/Monitors</option>
                <option value="PC">PC</option>
                <option value="GA">Gaming/Console</option>
                <option value="PH">Phones</option>
            </select>
        </div>
        <div class="col-span-2">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
            <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
        </div>
    </div>

    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        Add new product
    </button>
</form> --}}
