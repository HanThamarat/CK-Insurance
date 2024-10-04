
<!-- Customer Modal -->
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
                    <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
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
                                            <table class="min-w-full divide-y divide-gray-200 text-sm">
                                                <thead class="bg-gray-100 sticky top-0 text-center">
                                                    <tr>
                                                        <th scope="col" colspan="2" class="px-4 py-2 w-1/6">ชื่อ - สกุล</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">บัตรประชาชน</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">วันที่รับ</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">ประเภทลูกค้า</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">Tags</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">เลขทรัพย์</th>
                                                        <th scope="col" class="px-4 py-2 w-1/6">Action</th>
                                                    </tr>
                                                </thead>
                                                {{-- ตัวอย่างการเรียกใช้งาน component --}}
                                                {{-- <tbody>
                                                    @foreach($customers as $customer)
                                                        <tr>
                                                            <td class="px-4 py-2">{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                                            <td class="px-4 py-2">{{ $customer->id_card }}</td>
                                                            <td class="px-4 py-2">{{ $customer->receive_date }}</td>
                                                            <td class="px-4 py-2">{{ $customer->customer_type }}</td>
                                                            <td class="px-4 py-2">{{ implode(', ', $customer->tags) }}</td>
                                                            <td class="px-4 py-2">{{ $customer->property_number }}</td>
                                                            <td class="px-4 py-2">
                                                                <a href="{{ route('customers.edit', $customer->id) }}" class="text-blue-500">Edit</a>
                                                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="text-red-500">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody> --}}
                                                {{-- <tbody class="bg-white divide-y divide-gray-200">
                                                    <!-- ตัวอย่างแถวข้อมูล -->
                                                    <tr class="hover:bg-gray-100">
                                                        <td class="px-4 py-2">ชื่อ 1</td>
                                                        <td class="px-4 py-2">1234567890123</td>
                                                        <td class="px-4 py-2">01/01/2024</td>
                                                        <td class="px-4 py-2">ประเภท 1</td>
                                                        <td class="px-4 py-2">Tag 1</td>
                                                        <td class="px-4 py-2">เลขทรัพย์ 1</td>
                                                        <td class="px-4 py-2 text-center">
                                                            <button class="text-blue-500 hover:text-blue-700">Edit</button>
                                                            <button class="text-red-500 hover:text-red-700">Delete</button>
                                                        </td>
                                                    </tr>
                                                    <!-- เพิ่มแถวข้อมูลตามต้องการ -->
                                                </tbody> --}}
                                            </table>
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
    function openModal() {
        const modal = document.getElementById('customerModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.style.transform = 'translateY(100%)'; // เริ่มที่ด้านล่าง
            modal.style.opacity = '0'; // เริ่มโปร่งใส

            // ใช้ setTimeout เพื่อให้โมดอลแสดงขึ้นในระยะเวลาที่กำหนด
            setTimeout(() => {
                modal.style.transition = 'transform 0.5s ease, opacity 0.5s ease'; // ตั้งค่าการเปลี่ยนแปลง
                modal.style.transform = 'translateY(-35px)'; // เลื่อนขึ้นให้มี mt-[-300]
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
                    modal.style.transform = 'translateY(50%)'; // เลื่อนลงไปที่ด้านล่าง
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



