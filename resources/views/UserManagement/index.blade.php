@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@include('UserManagement.create')
@include('UserManagement.update')
@include('UserManagement.show')

@section('content')
    <div class="min-h-screen bg-orange-50 mt-[-12]">
        <div class="container mx-auto px-4 py-8">
            <!-- Header Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6">
                <div class="bg-gradient-to-r from-orange-100 to-orange-50 p-6">
                    <div class="flex items-center justify-between space-x-6">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('img/icon_cus.gif') }}" alt="report"
                                class="w-16 h-16 p-1 bg-white rounded-lg shadow-sm">
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-base font-bold text-orange-800">ข้อมูลผู้ใช้งานระบบ</h2>
                            <p class="text-orange-600 font-medium">Data Users Information</p>
                        </div>
                        <!-- New Button for Adding User -->
                        <div>
                            <button onclick="openModalCreateUser()"
                                class="px-3 py-1.5 bg-orange-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 transform transition-all duration-200 hover:scale-105 hover:shadow-lg flex items-center space-x-2">
                                <i class="fas fa-user-plus"></i> <!-- Font Awesome Icon -->
                                <span>เพิ่มบัญชีผู้ใช้งานระบบ</span>
                            </button>
                        </div>

                        {{-- <button onclick="openModalCreateUser()" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg flex items-center space-x-2 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            <span>เพิ่มผู้ใช้ใหม่</span>
                        </button> --}}

                    </div>
                </div>
            </div>

            <!-- Main Content Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Controls Section -->
                <div class="p-6 border-b border-orange-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <label for="rowsPerPage" class="text-orange-700 font-medium">แสดงผล :</label>
                            <select id="rowsPerPage"
                                class="border-orange-200 text-orange-700 rounded-lg focus:ring-orange-400 focus:border-orange-400 transition-colors duration-200"
                                onchange="fetchUsersDataOnSystem()">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="flex-1 max-w-sm ml-4">
                            <input type="search" id="searchInput" placeholder="ค้นหาข้อมูลผู้ใช้งานระบบ..."
                                class="w-full border-orange-200 rounded-lg focus:ring-orange-400 focus:border-orange-400 transition-colors duration-200">
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-orange-100">
                        <thead class="bg-orange-50">
                            <tr>
                                <th class="px-6 py-4 text-center text-sm font-semibold text-orange-700">ID</th>
                                <th class="px-6 py-4 text-center text-sm font-semibold text-orange-700">ชื่อ - สกุล</th>
                                <th class="px-6 py-4 text-center text-sm font-semibold text-orange-700">ชื่อผู้ใช้</th>
                                <th class="px-6 py-4 text-center text-sm font-semibold text-orange-700">อีเมล</th>
                                {{-- <th class="px-6 py-4 text-center text-sm font-semibold text-orange-700">หมายเลขโทรศัพท์</th> --}}
                                <th class="px-6 py-4 text-center text-sm font-semibold text-orange-700">สถานะ</th>
                                <th class="px-6 py-4 text-center text-sm font-semibold text-orange-700">Action</th>
                            </tr>
                        </thead>
                        <tbody id="usersTableBody" class="divide-y divide-orange-100">
                            <!-- Data will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Section -->
                <div id="pagination" class="flex justify-center items-center py-4 space-x-2">
                    <!-- Previous Button -->
                    <button id="prevPage"
                        class="px-3 py-2.5 bg-orange-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 disabled:opacity-50 hover:bg-orange-600 transition-colors"
                        onclick="changePage('prev')" disabled>
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Page Numbers Container -->
                    <div id="pageNumbers" class="flex space-x-2">
                        <!-- Page numbers will be inserted here by JavaScript -->
                    </div>

                    <!-- Next Button -->
                    <button id="nextPage"
                        class="px-3 py-2.5 bg-orange-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 disabled:opacity-50 hover:bg-orange-600 transition-colors"
                        onclick="changePage('next')">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <br>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            fetchUsersDataOnSystem(); // ดึงข้อมูลผู้ใช้เมื่อโหลดหน้าเว็บ
            // ฟังการเปลี่ยนแปลงในช่องค้นหาผู้ใช้
            document.getElementById('searchInput').addEventListener('input', searchUsers);
        });

        async function fetchUsersDataOnSystem(page = 1, query = '') {
            try {
                const rowsPerPage = document.getElementById('rowsPerPage').value;

                // เพิ่ม headers และ credentials สำหรับ CSRF protection
                const response = await fetch(
                    `/api/users?rowsPerPage=${rowsPerPage}&page=${page}&search=${encodeURIComponent(query)}`, {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        credentials: 'same-origin'
                    });

                const data = await response.json();

                const tableBody = document.getElementById('usersTableBody');
                tableBody.innerHTML = '';

                data.data.forEach(user => {
                    const row = document.createElement('tr');
                    row.classList.add('hover:bg-orange-50', 'transition-colors', 'duration-150');
                    row.innerHTML = `
                <td class="px-6 py-4 text-sm text-gray-700">${user.id || 'ไม่พบข้อมูล'}</td>
                <td class="px-6 py-4 text-sm text-gray-700">${user.name || 'ไม่พบข้อมูล'}</td>
                <td class="px-6 py-4 text-sm text-gray-700">${user.username || 'ไม่พบข้อมูล'}</td>
                <td class="px-6 py-4 text-sm text-gray-700">${user.email || 'ไม่พบข้อมูล'}</td>
                <td class="px-6 py-4 text-sm">
                    <span class="px-3 py-1 rounded-full text-xs font-medium ${user.status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}">
                        ${user.status ? 'Active' : 'Inactive'}
                    </span>
                </td>
                <td class="px-6 py-4 text-right space-x-2">
                    <!-- ปุ่มแสดง -->
                    <button
                        data-user-id="${user.id}"
                        data-user-name="${user.name}"
                        data-user-username="${user.username}"
                        data-user-email="${user.email}"
                        data-user-status="${user.status}"
                        data-user-status-user="${user.status_user}"
                        data-user-zone="${user.zone}"
                        data-user-branch="${user.branch}"
                        onclick="openShowUserModal(this)"
                        class="inline-flex items-center px-1 py-1 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 hover:shadow-lg hover:scale-105 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="#1E90FF" stroke="none" viewBox="0 0 576 512" stroke-width="2">
                            <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                        </svg>
                        แสดง
                    </button>


                    <!-- ปุ่มแก้ไข -->
                    <button
                        data-user-id="${user.id}"
                        data-user-name="${user.name}"
                        data-user-username="${user.username}"
                        data-user-email="${user.email}"
                        data-user-status="${user.status}"
                        onclick="openUpdateUserModal(this)"
                        class="inline-flex items-center px-1 py-1 bg-orange-100 text-orange-700 rounded-lg hover:bg-orange-200 hover:shadow-lg hover:scale-105 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 3l4 4-10 10H7v-4L17 3z"></path>
                        </svg>
                        แก้ไข
                    </button>

                    <!-- ปุ่มลบ -->
                    <button
                        onclick="deleteUser(${user.id})"
                        class="inline-flex items-center px-1 py-1 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 hover:shadow-lg hover:scale-105 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        ลบ
                    </button>
                </td>
            `;
                    tableBody.appendChild(row);
                });

                renderPagination(data);
            } catch (error) {
                console.error('Error fetching users:', error);
                alert('เกิดข้อผิดพลาดในการดึงข้อมูลผู้ใช้');
            }
        }

        // ฟังก์ชันเปิด Modal แก้ไขผู้ใช้
        function openUpdateUserModal(button) {
            const modal = document.getElementById('updateUserModal');
            if (!modal) return;

            // ดึงข้อมูลจาก data attributes
            const userId = button.getAttribute('data-user-id');
            const name = button.getAttribute('data-user-name');
            const username = button.getAttribute('data-user-username');
            const email = button.getAttribute('data-user-email');
            const status = button.getAttribute('data-user-status');

            // กำหนดค่าให้กับฟอร์ม
            document.getElementById('updateUserId').value = userId;
            document.getElementById('updateName').value = name;
            document.getElementById('updateUsername').value = username;
            document.getElementById('updateEmail').value = email;

            // กำหนดค่า status radio button
            const statusRadios = document.getElementsByName('status');
            statusRadios.forEach(radio => {
                radio.checked = radio.value === status;
            });

            // แสดง modal
            modal.classList.remove('hidden');
        }

        // ฟังก์ชันอัปเดตข้อมูลผู้ใช้
        async function updateUser(event) {
            event.preventDefault();

            const userId = document.getElementById('updateUserId').value;
            const formData = new FormData(document.getElementById('updateUserForm'));

            try {
                const response = await fetch(`/api/users/${userId}`, {
                    method: 'POST', // เปลี่ยนเป็น POST แทน PUT
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                        'X-HTTP-Method-Override': 'PUT' // เพิ่ม header นี้เพื่อบอก Laravel ว่าต้องการใช้ PUT method
                    },
                    credentials: 'same-origin',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    closeUpdateUserModal();
                    fetchUsersDataOnSystem();
                    alert('อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว');
                } else {
                    throw new Error(data.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล');
                }
            } catch (error) {
                console.error('Error updating user:', error);
                alert(error.message || 'เกิดข้อผิดพลาดในการอัปเดตข้อมูล');
            }
        }

        // ฟังก์ชันลบผู้ใช้
        async function deleteUser(userId) {
            // Show SweetAlert for confirmation
            const {
                isConfirmed
            } = await Swal.fire({
                title: 'คุณต้องการลบผู้ใช้นี้ใช่หรือไม่?',
                text: "การลบจะไม่สามารถกู้คืนได้",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ยืนยัน!',
                cancelButtonText: 'ยกเลิก',
            });

            if (!isConfirmed) return; // If user cancels, stop execution

            try {
                const response = await fetch(`/users/${userId}`, {
                    method: 'DELETE', // Make sure DELETE method is used
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    credentials: 'same-origin'
                });

                const data = await response.json();

                if (data.success) {
                    fetchUsersDataOnSystem(); // Reload users data
                    // Show success SweetAlert
                    Swal.fire({
                        title: 'ลบผู้ใช้เรียบร้อยแล้ว!',
                        icon: 'success',
                        timer: 1500,
                        showConfirmButton: false
                    });
                } else {
                    throw new Error(data.message || 'เกิดข้อผิดพลาดในการลบผู้ใช้');
                }
            } catch (error) {
                console.error('Error deleting user:', error);
                // Show error SweetAlert
                Swal.fire({
                    title: 'เกิดข้อผิดพลาด!',
                    text: error.message || 'เกิดข้อผิดพลาดในการลบผู้ใช้',
                    icon: 'error',
                    confirmButtonText: 'ตกลง'
                });
            }
        }





        // เพิ่ม Event Listener สำหรับฟอร์มอัปเดต
        document.getElementById('updateUserForm').addEventListener('submit', updateUser);


        function renderPagination(data) {
            const currentPage = data.current_page;
            const totalPages = data.last_page;
            const pageNumbersContainer = document.getElementById('pageNumbers');

            // Clear existing page numbers
            pageNumbersContainer.innerHTML = '';

            // Calculate range of pages to show
            let startPage = Math.max(1, currentPage - 2);
            let endPage = Math.min(totalPages, startPage + 4);

            // Adjust start page if we're near the end
            if (endPage - startPage < 4) {
                startPage = Math.max(1, endPage - 4);
            }

            // Add first page if not in range
            if (startPage > 1) {
                addPageButton(1, currentPage, pageNumbersContainer);
                if (startPage > 2) {
                    addEllipsis(pageNumbersContainer);
                }
            }

            // Add page numbers
            for (let i = startPage; i <= endPage; i++) {
                addPageButton(i, currentPage, pageNumbersContainer);
            }

            // Add last page if not in range
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    addEllipsis(pageNumbersContainer);
                }
                addPageButton(totalPages, currentPage, pageNumbersContainer);
            }

            // Enable/disable prev/next buttons
            document.getElementById('prevPage').disabled = currentPage === 1;
            document.getElementById('nextPage').disabled = currentPage === totalPages;
        }

        function addPageButton(pageNum, currentPage, container) {
            const button = document.createElement('button');
            button.textContent = pageNum;
            button.onclick = () => fetchUsersDataOnSystem(pageNum);

            // Apply different styles for current page
            if (pageNum === currentPage) {
                button.className =
                    'px-3 py-2 bg-orange-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 font-medium';
            } else {
                button.className =
                    'px-3 py-2 bg-white text-orange-500 border border-orange-300 rounded-md hover:bg-orange-50 focus:outline-none focus:ring-2 focus:ring-orange-400 font-medium transition-colors';
            }

            container.appendChild(button);
        }

        function addEllipsis(container) {
            const span = document.createElement('span');
            span.textContent = '...';
            span.className = 'px-2 py-0 text-orange-500';
            container.appendChild(span);
        }

        function changePage(direction) {
            const currentPage = parseInt(document.getElementById('pageNumbers').querySelector('.bg-orange-500')
                .textContent);
            let newPage;

            if (direction === 'prev') {
                newPage = currentPage - 1;
            } else if (direction === 'next') {
                newPage = currentPage + 1;
            } else {
                newPage = direction;
            }

            fetchUsersDataOnSystem(newPage);
        }

        // ฟังก์ชันค้นหาผู้ใช้
        function searchUsers() {
            const query = document.getElementById('searchInput').value;
            fetchUsersDataOnSystem(1, query); // ค้นหาผู้ใช้โดยเริ่มจากหน้าแรก
        }
    </script>



    <style>
        body {
            background-image: url('{{ asset('images/home.jpg') }}');
            background-size: cover;
            /* ขยายภาพให้ครอบคลุมพื้นที่ */
            background-position: center;
            /* จัดตำแหน่งภาพที่ตรงกลาง */
            background-repeat: no-repeat;
            /* ไม่ทำซ้ำภาพ */
            background-blend-mode: overlay;
            /* ผสมสีพื้นหลังกับภาพพื้นหลัง */
        }
    </style>
@endsection

