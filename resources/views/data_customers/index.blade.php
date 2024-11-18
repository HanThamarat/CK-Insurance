<!-- Customer Modal -->
@section('content')

    <div id="customerModal" class="fixed inset-0 flex justify-center items-center z-50 hidden mt-[-300]">
        <div class="bg-white rounded-lg shadow-lg p-0 w-full max-w-[90%] max-h-[90vh] overflow-y-scroll"
            style="overflow-y: scroll; scrollbar-width: none;" id="modalContent">

            <!-- Header ที่ sticky -->
            <div id="modalHeader" class="bg-white sticky top-0 z-10 p-5 w-full transition-shadow duration-300">
                {{-- <h2 class="text-lg font-bold mb-3 flex justify-between items-center">
                    ข้อมูลลูกค้า
                    <!-- ปุ่มกากบาท (X) สำหรับปิด -->
                    <button type="button" id="closeModal_x" class="text-gray-500 hover:text-gray-700" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </h2> --}}

                <div class="flex items-center mb-0">
                    <div class="flex-shrink-0 mr-4">
                        <img src="{{ asset('img/icon_cus.gif') }}" alt="report" class="w-12 h-12">
                    </div>
                    <div class="flex-grow">
                        <h5 class="text-primary font-semibold">ค้นหาลูกค้า / ข้อมูลลูกค้า</h5>
                        <p class="text-gray-500 -mt-1 font-semibold text-xs">( Search Data informations )</p>
                        <p class="border-b border-primary mt-2"></p>
                    </div>
                    <button type="button" id="closeModal_x" class="text-gray-500 hover:text-gray-700" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <script>
                // เพิ่มฟังก์ชันสำหรับตรวจสอบการเลื่อน
                const modalContent = document.getElementById('modalContent');
                const modalHeader = document.getElementById('modalHeader');

                modalContent.addEventListener('scroll', () => {
                    // ตรวจสอบว่าเลื่อนลงไปมากกว่า 0 หรือไม่
                    if (modalContent.scrollTop > 0) {
                        modalHeader.classList.add('shadow-md');
                        modalHeader.classList.remove('top-[-45]'); // ลบ top-[-30] เมื่อเลื่อน
                    } else {
                        modalHeader.classList.remove('shadow-md');
                        modalHeader.classList.add('top-[-1]'); // เพิ่ม top-[-19] กลับคืนเมื่ออยู่ที่ด้านบน
                    }
                });
            </script>




            <div class="modal-body mt-[-17] p-4">
                <div class="row mb-1 search-box-top">
                    <div class="col-12">

                        <form class="mt-1 mt-sm-2 flex items-center justify-between space-x-2">
                            <div class="flex items-center">
                                <label for="rowPerPage" class="mr-2">แสดงผล :</label>
                                <select id="rowPerPage"
                                    class="border border-orange-300 rounded-md shadow-sm p-1 w-16 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent pl-2">
                                    <!-- เพิ่มความกว้างให้มากขึ้น -->
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>

                            <div class="flex justify-end items-center flex-grow">
                                <div class="search-box">
                                    <div class="relative">
                                        <input type="text"
                                            class="mb-2 border border-orange-300 rounded-full shadow-lg pl-4 pr-10 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                                            placeholder="Search...">
                                        <span
                                            class="btn_search absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer">
                                            <i
                                                class="bx bx-search-alt search-icon text-orange-500 hover:text-orange-700 transition-all duration-300 ease-in-out"></i>
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
                            <img src="https://ckl.co.th/assets/images/undraw/search-people.png" alt=""
                                class="img-fluid mx-auto d-block" style="max-height: 500px;">
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
                                                        <th scope="col" class="px-4 py-2 w-1/6">สถานะ</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- ข้อมูลลูกค้าจะถูกแสดงที่นี่ -->
                                                </tbody>
                                            </table>

                                            {{-- pagination  --}}
                                            {{-- <div id="pagination" class="flex justify-center mt-4 space-x-1"></div> --}}

                                            <div id="pagination" class="flex items-center justify-center mt-4 space-x-1">
                                                <button id="prevPage"
                                                    class="pagination-button flex-1 bg-white text-gray-700 border border-gray-300 rounded-md px-4 py-2 mx-1 transition duration-150 ease-in-out text-center">
                                                    &laquo; Prev
                                                </button>
                                                <!-- ปุ่มหมายเลขหน้าจะถูกสร้างที่นี่ -->
                                                <button id="nextPage"
                                                    class="pagination-button flex-1 bg-white text-gray-700 border border-gray-300 rounded-md px-4 py-2 mx-1 transition duration-150 ease-in-out text-center">
                                                    Next &raquo;
                                                </button>
                                            </div>




                                            <div id="noResultsMessage" style="display:none;" class="space-y-3 p-12">
                                                <div role="alert"
                                                    class="bg-yellow-100 dark:bg-yellow-900 border-l-4 border-yellow-500 dark:border-yellow-700 text-yellow-900 dark:text-yellow-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-yellow-200 dark:hover:bg-yellow-800 transform hover:scale-105">
                                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                                        class="h-5 w-5 flex-shrink-0 mr-2 text-yellow-600"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                                            stroke-width="2" stroke-linejoin="round"
                                                            stroke-linecap="round">
                                                        </path>
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
                                    <div
                                        class="modal-footer sticky bottom-0 bg-white border-t px-1 py-0 flex items-center justify-end gap-2">
                                        <div class="p-2 chat-input-section">
                                            <div class="flex justify-end mb-1 space-x-2">
                                                <!-- Use flex and space-x-2 for horizontal spacing -->

                                                <!-- Add Customer Button -->
                                                <a href="http://ck-insurance.ck/customers/create"
                                                    class="flex items-center px-4 py-2 text-white transition-transform duration-200 transform rounded-lg shadow-lg bg-gradient-to-r from-orange-400 to-orange-600 hover:from-orange-500 hover:to-orange-700 hover:translate-y-[-2px] hover:shadow-xl">
                                                    <span
                                                        class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-white text-orange-600 mr-2">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    เพิ่มลูกค้าใหม่
                                                </a>

                                                <!-- Close Button -->
                                                <a href="#" id="closeModal"
                                                    class="flex items-center px-4 py-2 text-white transition-transform duration-200 transform rounded-lg shadow-lg bg-red-500 hover:bg-red-600 hover:translate-y-[-2px] hover:shadow-xl">
                                                    <span
                                                        class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-white text-red-500 mr-2">
                                                        <i class="fas fa-times"></i>
                                                        <!-- Use Font Awesome for the close icon -->
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
            padding: 12px 20px;
            /* ปรับ padding ให้มีระยะห่างทั้งแนวตั้งและแนวนอน */
            text-align: center;
            vertical-align: middle;
        }

        .table-light {
            background-color: #f8f9fa;
            /* พื้นหลังสีอ่อน */
        }

        .table thead.sticky-top th {
            border-bottom: 2px solid #dee2e6;
            /* เพิ่มเส้นแบ่ง */
        }
    </style>




    <script>
        $(document).ready(function() {
            const noResultsMessage = $('#noResultsMessage');
            const pagination = $('#pagination');

            // ฟังก์ชันค้นหา
            $('.search-box input[type="text"]').on('keyup', function() {
                let value = $(this).val().toLowerCase();
                let found = false;

                $('#customersTable tbody tr').filter(function() {
                    const isVisible = $(this).text().toLowerCase().indexOf(value) > -1;
                    $(this).toggle(isVisible);
                    if (isVisible) {
                        found = true;
                    }
                });

                // แสดงหรือซ่อนข้อความเมื่อไม่พบข้อมูล
                if (!found) {
                    noResultsMessage.show();
                    pagination.hide();
                } else {
                    noResultsMessage.hide();
                    pagination.show();
                }
            });

            let currentPage = 1;
            let rowsPerPage = 5;

            // ดึงข้อมูลลูกค้าครั้งแรก
            fetchCustomers(currentPage, rowsPerPage);

            // ฟังก์ชันเพื่อดึงข้อมูลลูกค้า
            function fetchCustomers(page, perPage) {
                $.ajax({
                    url: "{{ route('customers.index') }}",
                    method: 'GET',
                    data: {
                        page: page,
                        per_page: perPage
                    },
                    dataType: 'json',
                    success: function(data) {
                        updateTable(data);
                        updatePagination(data);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching customers:', error);
                        alert('Could not load customer data.');
                    }
                });
            }

            $(document).on('click', '.edit-button', function(event) {
                event.preventDefault();
                let customerId = $(this).data('id');
                window.location.href = "{{ url('customer/profile') }}/" + customerId;
            });

            // เมื่อคลิกปุ่ม pagination
            $(document).on('click', '.pagination-button', function(event) {
                event.preventDefault(); // ป้องกันไม่ให้หน้ารีเฟรช
                currentPage = $(this).data('page');
                fetchCustomers(currentPage, rowsPerPage);
            });

            // เมื่อเปลี่ยนค่าใน select
            $('#rowPerPage').on('change', function() {
                rowsPerPage = parseInt($(this).val());
                currentPage = 1;
                fetchCustomers(currentPage, rowsPerPage);
            });

            // function updatePagination(data) {
            //     const paginationContainer = $('#pagination');
            //     paginationContainer.empty();

            //     // กำหนดสีและ style classes
            //     const baseClasses = 'transition duration-300 ease-in-out border rounded-md px-4 py-2 mx-1 focus:outline-none';
            //     const normalClasses = 'bg-orange-100 text-orange-700 border-orange-200 hover:bg-orange-500 hover:text-white';
            //     const activeClasses = 'bg-orange-500 text-white border-orange-500';

            //     // ปุ่ม "Previous"
            //     if (data.current_page > 1) {
            //         paginationContainer.append(`
        //             <button class="pagination-button ${baseClasses} ${normalClasses} px-3 h-10" data-page="${data.current_page - 1}">
        //                 <i class="fas fa-arrow-left"></i>
        //             </button>
        //         `);
            //     }

            //     // สร้างหมายเลขหน้า
            //     if (data.last_page > 1) {
            //         // แสดงจำนวนหน้าแบบมี ellipsis
            //         let startPage = Math.max(1, data.current_page - 2);
            //         let endPage = Math.min(data.last_page, data.current_page + 2);

            //         // แสดงหน้าแรกเสมอ
            //         if (startPage > 1) {
            //             paginationContainer.append(`
        //                 <button class="pagination-button ${baseClasses} ${normalClasses}" data-page="1">1</button>
        //             `);
            //             if (startPage > 2) {
            //                 paginationContainer.append(`
        //                     <span class="px-3 py-2 text-gray-500">...</span>
        //                 `);
            //             }
            //         }

            //         // แสดงหน้าปัจจุบันและหน้าใกล้เคียง
            //         for (let i = startPage; i <= endPage; i++) {
            //             const buttonClasses = (i === data.current_page) ? `${baseClasses} ${activeClasses}` : `${baseClasses} ${normalClasses}`;
            //             paginationContainer.append(`
        //                 <button class="pagination-button ${buttonClasses}" data-page="${i}">
        //                     ${i}
        //                 </button>
        //             `);
            //         }

            //         // แสดงหน้าสุดท้ายเสมอ
            //         if (endPage < data.last_page) {
            //             if (endPage < data.last_page - 1) {
            //                 paginationContainer.append(`
        //                     <span class="px-3 py-2 text-gray-500">...</span>
        //                 `);
            //             }
            //             paginationContainer.append(`
        //                 <button class="pagination-button ${baseClasses} ${normalClasses}" data-page="${data.last_page}">
        //                     ${data.last_page}
        //                 </button>
        //             `);
            //         }
            //     }

            //     // ปุ่ม "Next"
            //     if (data.current_page < data.last_page) {
            //         paginationContainer.append(`
        //             <button class="pagination-button ${baseClasses} ${normalClasses} px-3 h-10" data-page="${data.current_page + 1}">
        //                 <i class="fas fa-arrow-right"></i>
        //             </button>
        //         `);
            //     }
            // }

            function updatePagination(data) {
                const paginationContainer = $('#pagination');
                paginationContainer.empty();

                // กำหนด Base styles ด้วย Tailwind
                const baseClasses =
                    'transition-all duration-300 ease-in-out border rounded-lg px-4 py-2 mx-1 focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm hover:shadow-md';
                const normalClasses =
                    'bg-white text-orange-600 border-orange-200 hover:bg-orange-500 hover:text-white active:bg-orange-600';
                const activeClasses =
                    'bg-orange-500 text-white border-orange-500 hover:bg-orange-600 cursor-default';
                const disabledClasses =
                    'bg-gray-100 text-gray-400 border-gray-200 cursor-not-allowed hover:bg-gray-100 hover:text-gray-400';

                // Container styling
                paginationContainer.addClass('flex items-center justify-center space-x-2 my-4 font-medium text-sm');

                // ปุ่ม "Previous"
                const prevButton = `
                    <button class="pagination-button ${baseClasses} ${data.current_page > 1 ? normalClasses : disabledClasses} flex items-center space-x-1 h-10"
                            data-page="${data.current_page - 1}"
                            ${data.current_page === 1 ? 'disabled' : ''}>
                        <i class="fas fa-chevron-left text-xs"></i>
                        <span class="hidden sm:inline">Previous</span>
                    </button>
                `;
                paginationContainer.append(prevButton);

                // สร้างหมายเลขหน้า
                if (data.last_page > 1) {
                    let startPage = Math.max(1, data.current_page - 2);
                    let endPage = Math.min(data.last_page, data.current_page + 2);

                    // แสดงหน้าแรก
                    if (startPage > 1) {
                        paginationContainer.append(`
                            <button class="pagination-button hidden sm:block ${baseClasses} ${normalClasses}" data-page="1">1</button>
                            ${startPage > 2 ? `<span class="hidden sm:inline-block px-2 text-gray-500">•••</span>` : ''}
                        `);
                    }

                    // แสดงหน้าปัจจุบันและหน้าใกล้เคียง
                    for (let i = startPage; i <= endPage; i++) {
                        const buttonClasses = i === data.current_page ? `${baseClasses} ${activeClasses}` :
                            `${baseClasses} ${normalClasses}`;
                        paginationContainer.append(`
                            <button class="pagination-button ${buttonClasses} min-w-[40px] font-semibold" data-page="${i}">
                                ${i}
                            </button>
                        `);
                    }

                    // แสดงหน้าสุดท้าย
                    if (endPage < data.last_page) {
                        paginationContainer.append(`
                            ${endPage < data.last_page - 1 ? `<span class="hidden sm:inline-block px-2 text-gray-500">•••</span>` : ''}
                            <button class="pagination-button hidden sm:block ${baseClasses} ${normalClasses}" data-page="${data.last_page}">
                                ${data.last_page}
                            </button>
                        `);
                    }
                }

                // ปุ่ม "Next"
                const nextButton = `
                    <button class="pagination-button ${baseClasses} ${data.current_page < data.last_page ? normalClasses : disabledClasses} flex items-center space-x-1 h-10"
                            data-page="${data.current_page + 1}"
                            ${data.current_page === data.last_page ? 'disabled' : ''}>
                        <span class="hidden sm:inline">Next</span>
                        <i class="fas fa-chevron-right text-xs"></i>
                    </button>
                `;
                paginationContainer.append(nextButton);

                // เพิ่ม Event Listeners
                $('.pagination-button').not('[disabled]').hover(
                    function() {
                        $(this).addClass('transform scale-105');
                    },
                    function() {
                        $(this).removeClass('transform scale-105');
                    }
                );

                // เพิ่ม Tooltip สำหรับหน้าที่ถูก disable
                $('[disabled]').attr('title', 'Not available');
            }

            // ตัวอย่างการใช้งาน
            // updatePagination({
            //     current_page: 5,
            //     last_page: 10,
            // });



            function updateTable(data) {
                const tbody = $('#customersTable tbody');
                tbody.empty();

                // แสดงข้อมูลลูกค้าในตาราง
                $.each(data.data, function(index, customer) {
                    tbody.append(`
                        <tr class="border-b">
                            <td class="px-4 py-2 text-center">
                                <img src="{{ asset('img/user.png') }}" alt="user icon" class="inline-block w-5 h-5 mr-2">
                                ${customer.prefix}
                            </td>
                            <td class="px-4 py-2 text-center">${customer.first_name} ${customer.last_name}</td>
                            <td class="px-4 py-2 text-center">${customer.id_card_number}</td>
                            <td class="px-4 py-2 text-center">${customer.phone}</td>
                            <td class="px-4 py-2 text-center">${customer.nationality}</td>
                            <td class="px-4 py-2 text-center">
                                <span class="inline-block px-4 py-1 bg-orange-100 text-orange-700 border border-orange-300 rounded-full text-sm hover:bg-green-100 hover:text-green-700 transition-all duration-300">
                                    ${customer.status_cus}
                                </span>
                            </td>


                            <td class="px-4 py-2 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="#" data-id="${customer.id}" class="edit-button flex items-center justify-center h-9 px-3 text-xs font-medium text-white bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 hover:from-orange-500 hover:to-orange-700 rounded-xl transform hover:-translate-y-1.5 hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-[0_12px_24px_0_rgba(0,0,0,0.25),0_6px_12px_0_rgba(0,0,0,0.1)]">
                                        <i class="fas fa-edit mr-2"></i> Edit
                                    </a>

                                </div>
                            </td>
                        </tr>
                    `);
                });
            }
        });
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
                    modal.style.transform = 'translateY(150px)'; // เลื่อนขึ้นให้มี mt-[-150]
                    modal.style.opacity = '1'; // ทำให้ชัดเจน
                    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // เพิ่มพื้นหลังสีเทาอ่อน
                }, 10); // ใช้ delay เล็กน้อยเพื่อให้การเปลี่ยนแปลงทำงาน
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.getElementById('closeModal');
            if (closeButton) {
                closeButton.addEventListener('click', function() {
                    const modal = document.getElementById('customerModal');
                    if (modal) {
                        modal.style.transition =
                            'transform 0.5s ease, opacity 0.5s ease'; // ตั้งค่าการเปลี่ยนแปลง
                        modal.style.transform = 'translateY(100%)'; // เลื่อนลงไปที่ด้านล่าง
                        modal.style.opacity = '0'; // ทำให้โปร่งใส

                        // ซ่อนโมดอลเมื่อการเปลี่ยนแปลงเสร็จสิ้น
                        modal.addEventListener('transitionend', function() {
                            modal.classList.add('hidden'); // ซ่อนโมดอล
                        }, {
                            once: true
                        }); // ใช้ once เพื่อฟังเหตุการณ์ครั้งเดียว
                    }
                });
            } else {
                console.error("closeModal button not found");
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.getElementById('closeModal_x'); // เปลี่ยนเป็น closeModal_x
            if (closeButton) {
                closeButton.addEventListener('click', function() {
                    const modal = document.getElementById('customerModal');
                    if (modal) {
                        modal.style.transition =
                            'transform 0.5s ease, opacity 0.5s ease'; // ตั้งค่าการเปลี่ยนแปลง
                        modal.style.transform = 'translateY(100%)'; // เลื่อนลงไปที่ด้านล่าง
                        modal.style.opacity = '0'; // ทำให้โปร่งใส

                        // ซ่อนโมดอลเมื่อการเปลี่ยนแปลงเสร็จสิ้น
                        modal.addEventListener('transitionend', function() {
                            modal.classList.add('hidden'); // ซ่อนโมดอล
                        }, {
                            once: true
                        }); // ใช้ once เพื่อฟังเหตุการณ์ครั้งเดียว
                    }
                });
            } else {
                console.error("closeModal_x button not found");
            }
        });
    </script>











    {{-- // ฟังก์ชันสำหรับอัปเดตตาราง
// function updateTable(data) {
//     const tbody = $('#customersTable tbody');
//     tbody.empty();

//     // แสดงข้อมูลลูกค้าในตาราง
//     $.each(data.data, function(index, customer) {
//         tbody.append(`
//     <tr class="border-b">
//         <td class="px-4 py-2 text-center">
//             <img src="{{ asset('img/user.png') }}" alt="user icon" class="inline-block w-5 h-5 mr-2">
//             ${customer.prefix}
//         </td>
//         <td class="px-4 py-2 text-center">${customer.first_name} ${customer.last_name}</td>
//         <td class="px-4 py-2 text-center">${customer.id_card_number}</td>
//         <td class="px-4 py-2 text-center">${customer.phone}</td>
//         <td class="px-4 py-2 text-center">${customer.nationality}</td>
//         <td class="px-4 py-2 text-center">${customer.religion}</td>
//         <td class="px-4 py-2 text-center">
//             <div class="flex justify-center space-x-2">
//                 <!--<a href="#" data-id="${customer.id}" class="edit-button flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-orange-500 hover:bg-orange-600 rounded transform hover:-translate-y-1 transition-transform duration-200 shadow hover:shadow-lg">
//                     <i class="fas fa-edit mr-1"></i> Edit
//                 </a>-->

//                 <a class="edit-button" href="#">
//                     <svg class="edit-svgIcon" viewBox="0 0 512 512">
//                         <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
//                     </svg>
//                 </a>
//             </div>
//         </td>
//     </tr>
// `);
//     });
// } --}}




    {{-- // อัปเดต Pagination
//     function updatePagination(data) {
//         const paginationContainer = $('#pagination');
//         paginationContainer.empty();

//         // ปุ่ม "Previous"
//         if (data.current_page > 1) {
//             paginationContainer.append(`
//     <button class="pagination-button bg-white text-gray-700 border border-gray-300 rounded-md px-3 py-2 mx-1 hover:bg-blue-100 transition duration-150 ease-in-out" data-page="${data.current_page - 1}">
//         <i class="fas fa-arrow-left"></i>
//     </button>
// `);
//         }

//         // สร้างหมายเลขหน้า
//         if (data.last_page > 1) {
//             for (let i = 1; i <= data.last_page; i++) {
//                 const activeClass = (i === data.current_page) ? 'bg-blue-500 text-white' :
//                     'bg-white text-gray-700 hover:bg-blue-100';
//                 paginationContainer.append(`
//         <button class="pagination-button ${activeClass} border border-gray-300 rounded-md px-4 py-2 mx-1 transition duration-150 ease-in-out" data-page="${i}">
//             ${i}
//         </button>
//     `);
//             }
//         }

//         // ปุ่ม "Next"
//         if (data.current_page < data.last_page) {
//             paginationContainer.append(`
//     <button class="pagination-button bg-white text-gray-700 border border-gray-300 rounded-md px-3 py-2 mx-1 hover:bg-blue-100 transition duration-150 ease-in-out" data-page="${data.current_page + 1}">
//         <i class="fas fa-arrow-right"></i>
//     </button>
// `);
//         }
//     } --}}



    {{-- <script>
        $(document).ready(function() {
            // วางข้อความเตือนที่แสดงเมื่อไม่พบข้อมูล
            const noResultsMessage = $('#noResultsMessage'); // นำเข้า div ที่สร้างไว้
            const pagination = $('#pagination'); // นำเข้า pagination

            // ฟังก์ชันค้นหา
            $('.search-box input[type="text"]').on('keyup', function() {
                let value = $(this).val().toLowerCase(); // รับค่าที่ถูกพิมพ์และเปลี่ยนเป็นตัวพิมพ์เล็ก
                let found = false; // ตัวแปรสำหรับตรวจสอบว่าพบข้อมูลหรือไม่

                $('#customersTable tbody tr').filter(function() {
                    const isVisible = $(this).text().toLowerCase().indexOf(value) > -
                        1; // ตรวจสอบแถวที่มีข้อความตรง
                    $(this).toggle(isVisible); // แสดงหรือซ่อนแถว
                    if (isVisible) {
                        found = true; // ถ้ามีแถวที่ตรงกับค่าที่ค้นหา
                    }
                });

                // แสดงข้อความเมื่อไม่พบข้อมูล
                if (!found) {
                    noResultsMessage.show(); // แสดง div เตือน
                    pagination.hide(); // ซ่อน pagination
                } else {
                    noResultsMessage.hide(); // ซ่อน div เตือน
                    pagination.show(); // แสดง pagination
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
                    data: {
                        page: page,
                        per_page: perPage
                    }, // ส่งค่าพารามิเตอร์สำหรับการแบ่งหน้า
                    dataType: 'json',
                    success: function(data) {
                        var customersTableBody = $('#customersTable tbody');
                        customersTableBody.empty(); // ล้างข้อมูลเก่า

                        // แสดงข้อมูลลูกค้าในตาราง
                        $.each(data.data, function(index, customer) {
                            customersTableBody.append(`
                        <tr class="border-b">
                            <td class="px-4 py-2 text-center">
                                <img src="{{ asset('img/user.png') }}" alt="user icon" class="inline-block w-5 h-5 mr-2">
                                ${customer.prefix}
                            </td>
                            <td class="px-4 py-2 text-center">${customer.first_name} ${customer.last_name}</td>
                            <td class="px-4 py-2 text-center">${customer.id_card_number}</td>
                            <td class="px-4 py-2 text-center">${customer.phone}</td>
                            <td class="px-4 py-2 text-center">${customer.nationality}</td>
                            <td class="px-4 py-2 text-center">${customer.religion}</td>
                            <td class="px-4 py-2 text-center">
                                <div class="flex justify-center space-x-2">
                                   <!--<a href="#" data-id="${customer.id}" class="edit-button flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600 rounded">
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </a>-->

                                    <!--<a href="#"
                                    data-id="${customer.id}"
                                    class="edit-button flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-orange-500 hover:bg-orange-600 rounded transform hover:-translate-y-1 transition-transform duration-200 shadow hover:shadow-lg"
                                    onclick="fetchCustomerData(${customer.id})">
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </a>-->

                                    <a href="#"
                                        data-id="${customer.id}"
                                        class="edit-button flex items-center justify-center h-10 px-2 text-xs font-medium text-white bg-orange-500 hover:bg-orange-600 rounded transform hover:-translate-y-1 transition-transform duration-200 shadow hover:shadow-lg"
                                        onclick="fetchCustomerData(${customer.id})">
                                            <i class="fas fa-edit mr-1"></i> Edit
                                    </a>

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


            $(document).on('click', '.edit-button', function(event) {
                event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
                let customerId = $(this).data('id');

                // เปลี่ยน URL เพื่อ redirect ไปยังหน้าที่แสดงโปรไฟล์ลูกค้า
                window.location.href = "{{ url('customer/profile') }}/" + customerId;
            });

            // เพิ่ม event listener ให้กับลิงค์
            $(document).on('click', '.nav-link', function(event) {
                event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
                let customerId = $(this).data('id');

                // เปลี่ยน URL เพื่อ redirect ไปยังหน้าที่แสดงโปรไฟล์ลูกค้า
                window.location.href = "{{ url('customer/profile') }}/" + customerId;
            });



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

            // อัปเดต Pagination
            function updatePagination(data) {
                const paginationContainer = $('#pagination');
                paginationContainer.empty();

                // ปุ่ม "Previous"
                if (data.current_page > 1) {
                    paginationContainer.append(`
                <button class="pagination-button bg-white text-gray-700 border border-gray-300 rounded-md px-3 py-2 mx-1 hover:bg-blue-100 transition duration-150 ease-in-out" data-page="${data.current_page - 1}">
                    <i class="fas fa-arrow-left"></i>
                </button>
            `);
                }

                // สร้างหมายเลขหน้า
                if (data.last_page > 1) {
                    for (let i = 1; i <= data.last_page; i++) {
                        const activeClass = (i === data.current_page) ? 'bg-blue-500 text-white' :
                            'bg-white text-gray-700 hover:bg-blue-100';
                        paginationContainer.append(`
                    <button class="pagination-button ${activeClass} border border-gray-300 rounded-md px-4 py-2 mx-1 transition duration-150 ease-in-out" data-page="${i}">
                        ${i}
                    </button>
                `);
                    }
                }

                // ปุ่ม "Next"
                if (data.current_page < data.last_page) {
                    paginationContainer.append(`
                <button class="pagination-button bg-white text-gray-700 border border-gray-300 rounded-md px-3 py-2 mx-1 hover:bg-blue-100 transition duration-150 ease-in-out" data-page="${data.current_page + 1}">
                    <i class="fas fa-arrow-right"></i>
                </button>
            `);
                }

                // แนบเหตุการณ์ click ให้กับปุ่ม pagination
                $('.pagination-button').on('click', function(event) {
                    event.preventDefault(); // ป้องกันการรีเฟรชหน้า
                    const page = $(this).data('page');
                    loadPageData(page); // ฟังก์ชันโหลดข้อมูลหน้าใหม่
                });
            }

            // ฟังก์ชันสำหรับโหลดข้อมูลหน้าใหม่
            // function loadPageData(page) {
            //     // ทำการ AJAX request หรือโหลดข้อมูลตาม page ที่เลือก
            //     $.ajax({
            //         url: 'customers.index?page=' + page, // URL ของ API
            //         type: 'GET',
            //         success: function(data) {
            //             // อัปเดตตารางด้วยข้อมูลใหม่ที่ได้รับ
            //             updateTable(data);
            //             // อัปเดต pagination
            //             updatePagination(data);
            //         },
            //         error: function(error) {
            //             console.error('Error fetching data:', error);
            //         }
            //     });
            // }

            // ฟังก์ชันสำหรับอัปเดตตาราง
            function updateTable(data) {
                const tbody = $('#customersTable tbody');
                tbody.empty(); // ล้างข้อมูลเก่า

                // สมมุติว่าข้อมูลอยู่ใน data.items
                data.items.forEach(item => {
                    tbody.append(`
                <tr>
                    <td>${item.id}</td>
                    <td>${item.name}</td>
                    <td>${item.email}</td>
                    <!-- เพิ่มข้อมูลที่ต้องการแสดง -->
                </tr>
            `);
                });
            }
        });
    </script> --}}
