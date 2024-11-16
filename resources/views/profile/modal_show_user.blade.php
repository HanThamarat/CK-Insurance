<!-- Modal Background Overlay -->
<div id="modal_show_user" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <!-- Modal Backdrop -->
    <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500/75 backdrop-blur-sm"></div>
    </div>

    <!-- Modal Content -->
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div
            class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:w-full sm:max-w-2xl">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-orange-400 to-rose-400 px-4 py-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-white flex items-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        ข้อมูลผู้ใช้งาน
                    </h3>
                    <button onclick="closeModalShowUser()" class="text-white hover:text-gray-200 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="bg-white px-4 py-5">
                <!-- User Profile Header -->
                <div class="flex items-center space-x-4 mb-6">
                    <div class="relative">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-r from-orange-400 to-rose-400 p-1">
                            <img id="modal_user_image" src="{{ asset('img/user.png') }}" alt="Profile"
                                class="w-full h-full rounded-full object-cover bg-white">
                        </div>
                        <div class="absolute bottom-0 right-0 bg-green-500 w-4 h-4 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div>
                        <h4 id="modal_user_name" class="text-xl font-semibold text-gray-800"></h4>
                        <p id="modal_user_role" class="text-sm text-gray-500"></p>
                    </div>
                </div>

                <!-- User Information Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Email -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-500">อีเมล</label>
                        <div class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span id="modal_user_email" class="text-gray-700"></span>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-500">เบอร์โทรศัพท์</label>
                        <div class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span id="modal_user_phone" class="text-gray-700"></span>
                        </div>
                    </div>

                    <!-- Username -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-500">ชื่อผู้ใช้</label>
                        <div class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span id="modal_username" class="text-gray-700"></span>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-500">สถานะ</label>
                        <div class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span id="modal_status" class="text-gray-700"></span>
                        </div>
                    </div>

                    <!-- Zone -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-500">พื้นที่</label>
                        <div class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span id="modal_zone" class="text-gray-700"></span>
                        </div>
                    </div>

                    <!-- Branch -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-500">สาขา</label>
                        <div class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                            <span id="modal_branch" class="text-gray-700"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" onclick="closeModalShowUser()"
                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                    ปิด
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function showModalUser(userData) {
        // อัปเดตเนื้อหาของ modal ด้วยข้อมูลผู้ใช้
        document.getElementById('modal_user_name').textContent = userData.name || 'ไม่ระบุ';
        document.getElementById('modal_user_email').textContent = userData.email || 'ไม่ระบุ';
        document.getElementById('modal_user_phone').textContent = userData.phone || 'ไม่ระบุ';
        document.getElementById('modal_username').textContent = userData.username || 'ไม่ระบุ';
        document.getElementById('modal_status').textContent = userData.status_user || 'ไม่ระบุ';
        document.getElementById('modal_zone').textContent = userData.Zone_Name || 'ไม่ระบุ';
        document.getElementById('modal_branch').textContent = userData.Name_Branch || 'ไม่ระบุ';

        // แสดง modal และเพิ่มคลาสเพื่อแสดงผล
        const modal = document.getElementById('modal_show_user');
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.add('show');
        }, 10); // เพิ่มเวลาเล็กน้อยเพื่อให้การแสดงผลมี transition
    }

    function closeModalShowUser() {
        const modal = document.getElementById('modal_show_user');

        // ลบคลาส 'show' เพื่อทำให้ fade out
        modal.classList.remove('show');

        // ใช้เวลาชั่วคราวในการซ่อน modal
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // รอให้การ fade out เสร็จก่อน
    }

    // ปิด modal เมื่อคลิกที่บริเวณด้านนอก
    document.getElementById('modal_show_user').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModalShowUser();
        }
    });
</script>



<style>
    /* การตั้งค่าเริ่มต้นของ modal */
    #modal_show_user {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    /* เมื่อ modal แสดง */
    #modal_show_user.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* เมื่อ modal ซ่อน */
    #modal_show_user.hidden {
        opacity: 0;
        transform: translateY(30px);
    }
</style>
