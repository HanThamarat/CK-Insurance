@extends('layouts.app')


@section('content')
    <div class="container mx-auto p-4 mt-[-20]">
        <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
            <div id="modalHeader" class="bg-white sticky top-0 z-10 p-5 w-full transition-shadow duration-300">
                <h2 class="text-lg font-bold mb-3 flex justify-between items-center">
                    ข้อมูลผู้ใช้งานระบบ
                </h2>
                <div class="flex items-center mb-0">
                    <div class="flex-shrink-0 mr-4">
                        <img src="{{ asset('img/icon_cus.gif') }}" alt="report" class="w-12 h-12">
                    </div>
                    <div class="flex-grow">
                        <h5 class="text-primary font-semibold">ข้อมูลผู้ใช้งานระบบ</h5>
                        <p class="text-gray-500 -mt-1 font-semibold text-xs">( Data Users informations )</p>
                        <p class="border-b border-primary mt-2"></p>
                    </div>
                </div>
            </div>

            <!-- Dropdown สำหรับเลือกจำนวนข้อมูลต่อหน้า -->
            <div class="mb-4">
                <label for="rowsPerPage" class="block mb-2">Rows per page:</label>
                <select id="rowsPerPage"
                    class="border-gray-300 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 rounded-md shadow-sm"
                    onchange="fetchUsers()">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>


            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm" id="customersTable">
                    <thead class="bg-gray-100 sticky top-0 text-center">
                        <tr>
                            <th scope="col" class="px-4 py-2 w-1/6">ID</th>
                            <th scope="col" class="px-4 py-2 w-1/6">ชื่อ - สกุล</th>
                            <th scope="col" class="px-4 py-2 w-1/6">ชื่อผู้ใช้</th>
                            <th scope="col" class="px-4 py-2 w-1/6">อีเมล</th>
                            <th scope="col" class="px-4 py-2 w-1/6">หมายเลขโทรศัพท์</th>
                            <th scope="col" class="px-4 py-2 w-1/6">สถานะ</th>
                            <th scope="col" class="px-4 py-2 w-1/6">Action</th>
                        </tr>
                    </thead>

                    <tbody id="usersTableBody">
                        @foreach ($users as $user)
                            <tr class="text-center">
                                <td class="px-4 py-2">{{ $user->id }}</td>
                                <td class="px-4 py-2">{{ $user->name }}</td>
                                <td class="px-4 py-2">{{ $user->username }}</td>
                                <td class="px-4 py-2">{{ $user->email }}</td>
                                <td class="px-4 py-2">{{ $user->phone }}</td>
                                <td class="px-4 py-2">{{ $user->status ? 'Active' : 'Inactive' }}</td>
                                <td class="px-4 py-2">
                                    <div class="button-container">
                                        <button class="edit-button">
                                            <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                <path
                                                    d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button class="delete-button">
                                            <svg class="delete-svgIcon" viewBox="0 0 448 512">
                                                <path
                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div id="pagination" class="mt-4">
                    {{ $users->links() }} <!-- แสดง pagination -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function fetchUsers() {
            const rowsPerPage = $('#rowsPerPage').val(); // รับค่าจาก dropdown

            $.ajax({
                url: '{{ route('users.fetchData') }}', // URL สำหรับ AJAX
                type: 'GET',
                data: {
                    rowsPerPage: rowsPerPage, // ส่งจำนวนแถวที่เลือก
                },
                success: function(response) {
                    const users = response.data; // ข้อมูลผู้ใช้
                    const pagination = response.links; // ข้อมูล pagination

                    // ล้างตารางเดิม
                    $('#usersTableBody').empty();

                    // เพิ่มข้อมูลผู้ใช้ใหม่ในตาราง
                    users.forEach(user => {
                        $('#usersTableBody').append(`
                            <tr class="text-center">
                                <td class="px-4 py-2">${user.id}</td>
                                <td class="px-4 py-2">${user.name}</td>
                                <td class="px-4 py-2">${user.username}</td>
                                <td class="px-4 py-2">${user.email}</td>
                                <td class="px-4 py-2">${user.phone}</td>
                                <td class="px-4 py-2">${user.status ? 'Active' : 'Inactive'}</td>
                                <td class="px-4 py-2">
                                    <a href="/users/${user.id}/edit" class="text-blue-500">Edit</a>
                                    <form action="/users/${user.id}" method="POST" class="inline-block">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        `);
                    });

                    // ปรับปรุง pagination
                    $('#pagination').html(`
                        <div class="flex justify-between">
                            <button onclick="fetchUsers(${pagination.current_page - 1})" ${pagination.current_page === 1 ? 'disabled' : ''}>Previous</button>
                            <span>Page ${pagination.current_page} of ${pagination.last_page}</span>
                            <button onclick="fetchUsers(${pagination.current_page + 1})" ${pagination.current_page === pagination.last_page ? 'disabled' : ''}>Next</button>
                        </div>
                    `);
                }
            });
        }

        // เรียกฟังก์ชัน fetchUsers เมื่อต้องการโหลดข้อมูลเริ่มต้น
        $(document).ready(function() {
            fetchUsers(); // เรียกใช้ฟังก์ชันเมื่อโหลดหน้า
        });
    </script>




    <style>
        .button-container {
            display: flex;
            gap: 10px;
        }

        .edit-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgb(20, 20, 20);
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
            cursor: pointer;
            transition-duration: 0.3s;
            overflow: hidden;
            position: relative;
            text-decoration: none !important;
        }

        .edit-svgIcon {
            width: 17px;
            transition-duration: 0.3s;
        }

        .edit-svgIcon path {
            fill: white;
        }

        .edit-button:hover {
            width: 70px;
            border-radius: 50px;
            transition-duration: 0.3s;
            background-color: rgb(255, 69, 69);
            align-items: center;
        }

        .edit-button:hover .edit-svgIcon {
            width: 20px;
            transition-duration: 0.3s;
            transform: translateY(60%);
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .edit-button::before {
            display: none;
            content: "Edit";
            color: white;
            transition-duration: 0.3s;
            font-size: 2px;
        }

        .edit-button:hover::before {
            display: block;
            padding-right: 10px;
            font-size: 13px;
            opacity: 1;
            transform: translateY(0px);
            transition-duration: 0.3s;
        }


        /* From Uiverse.io by aaronross1 */
        .delete-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgb(20, 20, 20);
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
            cursor: pointer;
            transition-duration: 0.3s;
            overflow: hidden;
            position: relative;
        }

        .delete-svgIcon {
            width: 15px;
            transition-duration: 0.3s;
        }

        .delete-svgIcon path {
            fill: white;
        }

        .delete-button:hover {
            width: 90px;
            border-radius: 50px;
            transition-duration: 0.3s;
            background-color: rgb(255, 69, 69);
            align-items: center;
        }

        .delete-button:hover .delete-svgIcon {
            width: 20px;
            transition-duration: 0.3s;
            transform: translateY(60%);
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .delete-button::before {
            display: none;
            content: "Delete";
            color: white;
            transition-duration: 0.3s;
            font-size: 2px;
        }

        .delete-button:hover::before {
            display: block;
            padding-right: 10px;
            font-size: 13px;
            opacity: 1;
            transform: translateY(0px);
            transition-duration: 0.3s;
        }
    </style>
@endsection
