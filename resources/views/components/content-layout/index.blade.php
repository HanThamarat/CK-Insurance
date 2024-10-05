
<!-- Customer Modal -->
@section('content')
<div id="customerModal" class="fixed inset-0 flex justify-center items-center z-50 hidden mt-[-300]">
    <div class="bg-white rounded-lg shadow-lg p-4 w-full max-w-[90%] max-h-[90vh] overflow-y-scroll" style="overflow-y: scroll; scrollbar-width: none;">
        <h2 class="text-lg font-bold mb-4">ข้อมูลลูกค้า</h2>

        <div class="flex items-center m-3 mb-0">
            <div class="flex-shrink-0 mr-4">
                <img src="https://ckl.co.th/assets/images/gif/video-confer.gif" alt="report" class="w-12 h-12">
            </div>
            <div class="flex-grow">
                <h5 class="text-primary font-semibold">ค้นหาลูกค้า / เลขที่สัญญา</h5>
                <p class="text-gray-500 -mt-1 font-semibold text-xs">( Search Data informations )</p>
                <p class="border-b border-primary mt-2"></p>
            </div>
            <button type="button" id="closeSerach" class="ml-auto btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <div class="modal-body mt-2">
            <div class="row mb-1 search-box-top">
                <div class="col-12">
                    {{-- <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
                        <div class="flex justify-end">
                            <div class="search-box me-2">
                                <div class="position-relative">
                                    <input type="text" class="mb-2 border border-orange-300 rounded-md shadow-sm pl-4 p-1 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent" placeholder="Search...">
                                    <span class="btn_search">
                                        <i class="bx bx-search-alt search-icon hover-up" style="cursor: pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form> --}}

                    {{-- <form class="mt-1 mt-sm-2 d-sm-flex align-items-center justify-between">
                        <div class="flex items-center me-2">
                            <label for="rowPerPage" class="mr-2">แสดงผล :</label>
                            <select id="rowPerPage" class="border border-orange-300 rounded-md shadow-sm p-1 w-16 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                        <div class="flex justify-end items-center flex-grow">
                            <div class="search-box">
                                <div class="position-relative">
                                    <input type="text" class="mb-2 border border-orange-300 rounded-md shadow-sm pl-4 p-1 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent" placeholder="Search...">
                                    <span class="btn_search">
                                        <i class="bx bx-search-alt search-icon hover-up" style="cursor: pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form> --}}

                    <form class="mt-1 mt-sm-2 flex items-center justify-between space-x-2">
                        <div class="flex items-center">
                            <label for="rowPerPage" class="mr-2">แสดงผล :</label>
                            <select id="rowPerPage" class="border border-orange-300 rounded-md shadow-sm p-1 w-16 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent"> <!-- เพิ่มความกว้างให้มากขึ้น -->
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                        <div class="flex justify-end items-center flex-grow">
                            <div class="search-box">
                                <div class="position-relative">
                                    <input type="text" class="mb-2 border border-orange-300 rounded-md shadow-sm pl-4 p-1 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent w-full" placeholder="Search..."> <!-- ฟิลด์ค้นหามีความกว้างเต็ม -->
                                    <span class="btn_search">
                                        <i class="bx bx-search-alt search-icon hover-up" style="cursor: pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12">


                    <div class="maintenance-img content-image" style="display: none;">
                        <img src="https://ckl.co.th/assets/images/undraw/search-people.png" alt="" class="img-fluid mx-auto d-block" style="max-height: 500px;">
                    </div>

                    <div class="content-search">
                        <div class="modal-content main-modal">
                            <div id="load" style="z-index: 999; display:none;">
                                <div class="text-center loading">
                                    <div class="spinner-border" role="status" style="width: 3rem; height: 3rem;">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                            <form class="needs-validation" action="#" novalidate="">
                                <div class="modal-body">
                                    {{-- <div class="table-responsive" data-simplebar="init" style="max-height: 420px; min-height: 420px;"> --}}
                                        <div class="overflow-x-auto">
                                            <table class="min-w-full divide-y divide-gray-200 text-sm" id="customersTable">
                                                <thead class="bg-gray-100 sticky top-0 text-center">
                                                    <tr>
                                                        <th scope="col" class="px-4 py-2 w-1/6">คำนำหน้าชื่อ</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">ชื่อ - สกุล</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">บัตรประชาชน</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">หมายเลขโทรศัพท์</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">สัญชาติ</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">ศาสนา</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- ข้อมูลลูกค้าจะถูกแสดงที่นี่ -->
                                                </tbody>
                                            </table>

                                            <div id="noResultsMessage" style="display:none;" class="space-y-3 p-7">
                                                <div
                                                  role="alert"
                                                  class="bg-yellow-100 dark:bg-yellow-900 border-l-4 border-yellow-500 dark:border-yellow-700 text-yellow-900 dark:text-yellow-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-yellow-200 dark:hover:bg-yellow-800 transform hover:scale-100"
                                                >
                                                  <svg
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    class="h-5 w-5 flex-shrink-0 mr-2 text-yellow-600"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                  >
                                                    <path
                                                      d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                                      stroke-width="2"
                                                      stroke-linejoin="round"
                                                      stroke-linecap="round"
                                                    ></path>
                                                  </svg>
                                                  <p class="text-xs font-semibold">
                                                    ไม่พบข้อมูลที่กำลังค้นหา
                                                  </p>
                                                </div>
                                              </div>
                                        </div>

                                    {{-- </div> --}}
                                </div>
                                <!-- Button to add new customers -->
                                <div class="modal-footer">
                                    <div class="p-2 chat-input-section">
                                        <div class="flex justify-end mb-1 space-x-2"> <!-- Use flex and space-x-2 for horizontal spacing -->

                                            <!-- Add Customer Button -->
                                            <a href="http://ck-insurance.ck/customers/create" class="flex items-center px-4 py-2 text-white transition-transform duration-200 transform rounded-lg shadow-lg bg-gradient-to-r from-orange-400 to-orange-600 hover:from-orange-500 hover:to-orange-700 hover:translate-y-[-2px] hover:shadow-xl">
                                                <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-white text-orange-600 mr-2">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                เพิ่มลูกค้าใหม่
                                            </a>

                                            <!-- Close Button -->
                                            <a href="#" id="closeModal" class="flex items-center px-4 py-2 text-white transition-transform duration-200 transform rounded-lg shadow-lg bg-red-500 hover:bg-red-600 hover:translate-y-[-2px] hover:shadow-xl">
                                                <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-white text-red-500 mr-2">
                                                    <i class="fas fa-times"></i> <!-- Use Font Awesome for the close icon -->
                                                </span>
                                                ปิด
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    thead th {
        padding: 12px 20px; /* ปรับ padding ให้มีระยะห่างทั้งแนวตั้งและแนวนอน */
        text-align: center;
        vertical-align: middle;
    }

    .table-light {
        background-color: #f8f9fa; /* พื้นหลังสีอ่อน */
    }

    .table thead.sticky-top th {
        border-bottom: 2px solid #dee2e6; /* เพิ่มเส้นแบ่ง */
    }

</style>




<script>
    $(document).ready(function() {
        // วางข้อความเตือนที่แสดงเมื่อไม่พบข้อมูล
        const noResultsMessage = $('#noResultsMessage'); // นำเข้า div ที่สร้างไว้

        // ฟังก์ชันค้นหา
        $('.search-box input[type="text"]').on('keyup', function() {
            let value = $(this).val().toLowerCase(); // รับค่าที่ถูกพิมพ์และเปลี่ยนเป็นตัวพิมพ์เล็ก
            let found = false; // ตัวแปรสำหรับตรวจสอบว่าพบข้อมูลหรือไม่

            $('#customersTable tbody tr').filter(function() {
                const isVisible = $(this).text().toLowerCase().indexOf(value) > -1; // ตรวจสอบแถวที่มีข้อความตรง
                $(this).toggle(isVisible); // แสดงหรือซ่อนแถว
                if (isVisible) {
                    found = true; // ถ้ามีแถวที่ตรงกับค่าที่ค้นหา
                }
            });

            // แสดงข้อความเมื่อไม่พบข้อมูล
            if (!found) {
                noResultsMessage.show(); // แสดง div เตือน
            } else {
                noResultsMessage.hide(); // ซ่อน div เตือน
            }
        });
    });


    $(document).ready(function() {
    let currentPage = 1; // หน้าที่กำลังแสดง
    let rowsPerPage = 5; // จำนวนแถวต่อหน้า (ค่าเริ่มต้น)

    // ดึงข้อมูลลูกค้าครั้งแรก
    fetchCustomers(currentPage, rowsPerPage);

    // ฟังก์ชันเพื่อดึงข้อมูลลูกค้า
    function fetchCustomers(page, perPage) {
        $.ajax({
            url: "{{ route('customers.index') }}",
            method: 'GET',
            data: { page: page, per_page: perPage }, // ส่งค่าพารามิเตอร์สำหรับการแบ่งหน้า
            dataType: 'json',
            success: function(data) {
                var customersTableBody = $('#customersTable tbody');
                customersTableBody.empty(); // ล้างข้อมูลเก่า

                // แสดงข้อมูลลูกค้าในตาราง
                $.each(data.data, function(index, customer) {
                    customersTableBody.append(`
                        <tr>
                            <td class="px-4 py-2 text-center">${customer.prefix}</td>
                            <td class="px-4 py-2 text-center">${customer.first_name} ${customer.last_name}</td>
                            <td class="px-4 py-2 text-center">${customer.id_card_number}</td>
                            <td class="px-4 py-2 text-center">${customer.phone}</td>
                            <td class="px-4 py-2 text-center">${customer.nationality}</td>
                            <td class="px-4 py-2 text-center">${customer.religion}</td>
                            <td class="px-4 py-2 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ url('customers/edit') }}/${customer.id}" class="flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600 rounded">
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </a>
                                    <form action="{{ url('customers/destroy') }}/${customer.id}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-red-500 hover:bg-red-600 rounded">
                                            <i class="fas fa-trash mr-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    `);
                });

                // แสดง pagination
                updatePagination(data);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching customers:', error);
                alert('Could not load customer data.');
            }
        });
    }

    // ฟังก์ชันเพื่ออัพเดต pagination
    function updatePagination(data) {
        const paginationContainer = $('#pagination');
        paginationContainer.empty(); // ล้างข้อมูลเก่า

        // สร้างปุ่ม pagination
        for (let i = 1; i <= data.last_page; i++) {
            const activeClass = (i === currentPage) ? 'active' : '';
            paginationContainer.append(`
                <button class="pagination-button ${activeClass}" data-page="${i}">${i}</button>
            `);
        }
    }

    // เมื่อคลิกปุ่ม pagination
    $(document).on('click', '.pagination-button', function() {
        currentPage = $(this).data('page'); // เปลี่ยนหน้าที่จะโหลด
        fetchCustomers(currentPage, rowsPerPage); // เรียกฟังก์ชันใหม่
    });

    // เมื่อเปลี่ยนค่าใน select
    $('#rowPerPage').on('change', function() {
        rowsPerPage = parseInt($(this).val()); // ตั้งค่าจำนวนแถวต่อหน้าใหม่
        currentPage = 1; // รีเซ็ตหน้าเป็น 1
        fetchCustomers(currentPage, rowsPerPage); // เรียกฟังก์ชันใหม่
    });
});




    // $(document).ready(function() {
    //     let currentPage = 1; // หน้าที่กำลังแสดง
    //     const rowsPerPage = 5; // จำนวนแถวต่อหน้า

    //     fetchCustomers(currentPage, rowsPerPage); // เรียกใช้ฟังก์ชันเพื่อดึงข้อมูลลูกค้า

    //     function fetchCustomers(page, perPage) {
    //         $.ajax({
    //             url: "{{ route('customers.index') }}",
    //             method: 'GET',
    //             data: { page: page, per_page: perPage }, // ส่งค่าพารามิเตอร์สำหรับการแบ่งหน้า
    //             dataType: 'json',
    //             success: function(data) {
    //                 var customersTableBody = $('#customersTable tbody');
    //                 customersTableBody.empty(); // ล้างข้อมูลเก่า

    //                 // แสดงข้อมูลลูกค้าในตาราง
    //                 $.each(data.data, function(index, customer) {
    //                     customersTableBody.append(`
    //                         <tr>
    //                             <td class="px-4 py-2 text-center">${customer.prefix}</td>
    //                             <td class="px-4 py-2 text-center">${customer.first_name} ${customer.last_name}</td>
    //                             <td class="px-4 py-2 text-center">${customer.id_card_number}</td>
    //                             <td class="px-4 py-2 text-center">${customer.phone}</td>
    //                             <td class="px-4 py-2 text-center">${customer.nationality}</td>
    //                             <td class="px-4 py-2 text-center">${customer.religion}</td>

    //                           <td class="px-4 py-2 text-center">
    //                                 <div class="flex justify-center space-x-2 "> <!-- Flexbox สำหรับจัดเรียง -->
    //                                     <a href="{{ url('customers/edit') }}/${customer.id}" class="flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600 rounded">
    //                                         <i class="fas fa-edit mr-1"></i> Edit
    //                                     </a>
    //                                     <form action="{{ url('customers/destroy') }}/${customer.id}" method="POST">
    //                                         @csrf
    //                                         @method('DELETE')
    //                                         <button type="submit" class="flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-red-500 hover:bg-red-600 rounded">
    //                                             <i class="fas fa-trash mr-1"></i> Delete
    //                                         </button>
    //                                     </form>
    //                                 </div>
    //                             </td>

    //                         </tr>
    //                     `);
    //                 });

    //                 // แสดง pagination
    //                 updatePagination(data);
    //             },
    //             error: function(xhr, status, error) {
    //                 console.error('Error fetching customers:', error);
    //                 alert('Could not load customer data.');
    //             }
    //         });
    //     }

    //     function updatePagination(data) {
    //         const paginationContainer = $('#pagination');
    //         paginationContainer.empty(); // ล้างข้อมูลเก่า

    //         // สร้างปุ่ม pagination
    //         for (let i = 1; i <= data.last_page; i++) {
    //             const activeClass = (i === currentPage) ? 'active' : '';
    //             paginationContainer.append(`
    //                 <button class="pagination-button ${activeClass}" data-page="${i}">${i}</button>
    //             `);
    //         }
    //     }

    //     // เมื่อคลิกปุ่ม pagination
    //     $(document).on('click', '.pagination-button', function() {
    //         currentPage = $(this).data('page'); // เปลี่ยนหน้าที่จะโหลด
    //         fetchCustomers(currentPage, rowsPerPage); // เรียกฟังก์ชันใหม่
    //     });
    // });
</script>




<script>
    function openModal() {
        const modal = document.getElementById('customerModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.style.transform = 'translateY(100%)'; // เริ่มที่ด้านล่าง
            modal.style.opacity = '0'; // เริ่มโปร่งใส

            // ใช้ setTimeout เพื่อให้โมดอลแสดงขึ้นในระยะเวลาที่กำหนด
            setTimeout(() => {
                modal.style.transition = 'transform 0.5s ease, opacity 0.5s ease'; // ตั้งค่าการเปลี่ยนแปลง
                modal.style.transform = 'translateY(100px)'; // เลื่อนขึ้นให้มี mt-[-150]
                modal.style.opacity = '1'; // ทำให้ชัดเจน
            }, 10); // ใช้ delay เล็กน้อยเพื่อให้การเปลี่ยนแปลงทำงาน
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const closeButton = document.getElementById('closeModal');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                const modal = document.getElementById('customerModal');
                if (modal) {
                    modal.style.transition = 'transform 0.5s ease, opacity 0.5s ease'; // ตั้งค่าการเปลี่ยนแปลง
                    modal.style.transform = 'translateY(100%)'; // เลื่อนลงไปที่ด้านล่าง
                    modal.style.opacity = '0'; // ทำให้โปร่งใส

                    // ซ่อนโมดอลเมื่อการเปลี่ยนแปลงเสร็จสิ้น
                    modal.addEventListener('transitionend', function() {
                        modal.classList.add('hidden'); // ซ่อนโมดอล
                    }, { once: true }); // ใช้ once เพื่อฟังเหตุการณ์ครั้งเดียว
                }
            });
        } else {
            console.error("closeModal button not found");
        }
    });
</script>



