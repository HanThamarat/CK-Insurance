<div id="modalAddress" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col">
            <!-- ปุ่มปิด modal -->
            <div id="header" class="sticky top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <button id="closeModal_address" class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="https://ckl.co.th/assets/images/gif/home.gif" alt="report" class="avatar-sm" style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">เพิ่มที่อยู่ลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Add Customer Address)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>
            <!-- เพิ่มเนื้อหาของ Modal ที่นี่ -->
            <div class="col-xl-5 col-sm-12 text-center bg-light">
                <div id="case-1" class="bg-white p-4 rounded-lg shadow-lg border border-gray-200">
                    <h2 class="text-xl font-semibold mb-2 text-gray-800">เลือกประเภทที่อยู่</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 pt-2">
                        <div class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="ADR-0001" name="Type_Adds" id="adds-0">
                                <label class="form-check-label text-base text-gray-700" for="adds-0">
                                    ที่อยู่ปัจจุบัน
                                </label>
                            </div>
                        </div>
                        <div class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="ADR-0002" name="Type_Adds" id="adds-1">
                                <label class="form-check-label text-base text-gray-700" for="adds-1">
                                    ที่อยู่ส่งเอกสาร
                                </label>
                            </div>
                        </div>
                        <div class="card-adds p-2 bg-gray-100 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="form-check">
                                <input class="form-check-input text-lg" type="radio" value="ADR-0003" name="Type_Adds" id="adds-2">
                                <label class="form-check-label text-base text-gray-700" for="adds-2">
                                    ที่อยู่ตามสำเนา
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <img src="{{ asset('images/land.png') }}" alt="Land Image" class="w-32 mx-auto" style="width:50px;height:50px">
                    </div>
                    <div class="mt-2 text-center">
                        <h4 class="text-red-600 font-bold text-lg">ADR-241000843</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addAddressButton = document.getElementById('addAddressButton');
        const modalAddress = document.getElementById('modalAddress');
        const closeModalAddress = document.getElementById('closeModal_address');

        // เปิด Modal
        addAddressButton.addEventListener('click', function() {
            modalAddress.classList.remove('hidden');
            modalAddress.classList.add('modal-enter');
            setTimeout(() => {
                modalAddress.classList.add('modal-enter-active');
                modalAddress.classList.remove('modal-enter');
            }, 10); // ช่วยให้ CSS transition ทำงาน
        });

        // ปิด Modal เมื่อคลิกที่ปุ่มปิด
        closeModalAddress.addEventListener('click', function() {
            modalAddress.classList.remove('modal-enter-active');
            modalAddress.classList.add('modal-leave-active');
            setTimeout(() => {
                modalAddress.classList.add('hidden');
                modalAddress.classList.remove('modal-leave-active');
            }, 300); // ใช้เวลาในการจาง
        });

        // ปิด modal เมื่อคลิกที่นอก modal
        window.addEventListener('click', function(event) {
            if (event.target === modalAddress) {
                closeModalAddress.click(); // เรียกใช้ปุ่มปิด
            }
        });
    });
</script>

<style>
    /* CSS สำหรับเอฟเฟกต์ slide-fade */
    .modal-enter {
        opacity: 0;
        transform: translateY(-20px); /* เลื่อนขึ้น */
    }

    .modal-enter-active {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.3s ease, transform 0.3s ease; /* ใช้ transition */
    }

    .modal-leave {
        opacity: 1;
        transform: translateY(0); /* อยู่ที่ตำแหน่งเดิม */
    }

    .modal-leave-active {
        opacity: 0;
        transform: translateY(20px); /* เลื่อนลง */
        transition: opacity 0.3s ease, transform 0.3s ease; /* ใช้ transition */
    }

</style>



