@include('components.content-cus.component_js')


<!-- Modal Wrapper -->
<div id="Cus-modal-wrapper" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50">
    <!-- Modal Content -->
    <div class="flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <!-- ปุ่มปิด modal -->
            <div id="header" class=" top-0 z-10 p-0 transition-bg duration-300 bg-white p-2"
                style="background-color: white;">
                <button class="absolute top-7 right-6 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
                    onclick="hideModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/user.gif') }}" alt="career icon" class="avatar-sm"
                        style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">แก้ไขข้อมูลลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">Edit Data Customers</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div>
                </div>
            </div>

            <!-- เนื้อหาของ modal -->
            <div class="p-2 mt-[-10]">
                {{-- <form id="formCustomerEdit" class="space-y-6" action="{{ route('customers.update', $customer->id) }}" method="POST">
                    @csrf <!-- เพิ่มบรรทัดนี้ -->

                    <input type="hidden" id="customerId" value="{{ $customer->id }}"> --}}

                <form id="formCustomerEdit" class="space-y-6">
                    @csrf <!-- เพิ่มบรรทัดนี้ -->
                    @method('PUT')

                    <input type="hidden" id="customerId" value="{{ $customer->id }}">


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Left Column -->
                        <div class="space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="relative">
                                    <select id="prefix" name="prefix" onfocus="moveLabel('prefix')"
                                        onblur="checkInput('prefix')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                        required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')"
                                        oninput="this.setCustomValidity('')">
                                        <option value="{{ $customer->prefix }}">{{ $customer->prefix }}</option>
                                        <!-- ค่านี้จะถูกเซ็ตเป็นค่าที่เข้ามา -->
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                    <label for="prefix"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all"
                                        id="prefix-label">
                                        คำนำหน้า
                                    </label>
                                </div>


                                <div class="relative">
                                    <input type="text" id="first_name" name="first_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('first_name')"
                                        onblur="checkInput('first_name')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกชื่อจริง')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->first_name }}">
                                    <label for="first_name" id="first_name-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ชื่อจริง
                                    </label>

                                    <i
                                        class="fa-solid fa-user absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>



                                <div class="relative">
                                    <input type="text" id="last_name" name="last_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300 input-field"
                                        placeholder=" " required onfocus="moveLabel('last_name')"
                                        onblur="checkInput('last_name')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกนามสกุล')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->last_name }}">
                                    <label for="last_name" id="lastname_name-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all input-label">
                                        นามสกุล
                                    </label>

                                    <i
                                        class="fa-solid fa-user absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>



                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                <div class="relative">
                                    <input type="text" id="phone" name="phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('phone')"
                                        onblur="checkInput('phone')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทรศัพท์')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->phone }}">
                                    <label for="phone" id="phone-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เบอร์โทรติดต่อ 1
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>



                                <div class="relative">
                                    <input type="text" id="phone2" name="phone2"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('phone2')"
                                        onblur="checkInput('phone2')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทรติดต่อ 2')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->phone2 }}">
                                    <label for="phone2" id="phone2-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เบอร์โทรติดต่อ 2
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <input type="text" id="id_card_number" name="id_card_number"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('id_card_number')"
                                        onblur="checkInput('id_card_number')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกหมายเลขบัตรประชาชน')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->id_card_number }}">
                                    <label for="id_card_number" id="id_card_number-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        หมายเลขบัตรประชาชน
                                    </label>

                                    <i class="fa-solid fa-credit-card absolute right-3 top-2 text-sm"></i>
                                </div>




                                <div class="relative">
                                    <input type="text" id="expiry_date" name="expiry_date"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('expiry_date')"
                                        onblur="checkInput('expiry_date')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกบัตรหมดอายุ')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->expiry_date }}">
                                    <label for="expiry_date" id="expiry_date-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        บัตรหมดอายุ
                                    </label>

                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>
                            </div>





                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="relative">
                                    <input type="text" id="dob" name="dob"
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('dob')"
                                        onblur="checkInput('dob')"
                                        oninvalid="this.setCustomValidity('กรุณากรอกวันออกบัตร')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->dob }}">
                                    <label for="dob" id="dob-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        วันออกบัตร
                                    </label>

                                    <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                </div>


                                <div class="relative">
                                    <input type="text" id="age" name="age" readonly
                                        class="p-2 border border-gray-300 rounded-lg w-full pr-12 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required value="{{ $customer->age }}">
                                    <label for="age" id="age-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        อายุ
                                    </label>
                                    <span
                                        class="absolute right-3 top-2/4 -translate-y-2/4 bg-white px-2 text-gray-500 text-sm">ปี</span>
                                </div>




                                <div class="relative">
                                    <select id="gender" name="gender" onfocus="moveLabel('gender')"
                                        onblur="checkInput('gender')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="{{ $customer->gender }}">{{ $customer->gender }}</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>

                                    <label for="gender" id="gender-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เพศ
                                    </label>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">


                                <div class="relative">
                                    <select id="nationality" name="nationality" onfocus="moveLabel('nationality')"
                                        onblur="checkInput('nationality')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="{{ $customer->nationality }}">{{ $customer->nationality }}
                                        </option>
                                        <option value="ไทย">ไทย</option>
                                    </select>

                                    <label for="nationality" id="nationality-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        สัญชาติ
                                    </label>
                                </div>


                                <div class="relative">
                                    <select id="religion" name="religion" onfocus="moveLabel('religion')"
                                        onblur="checkInput('religion')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="{{ $customer->religion }}">{{ $customer->religion }}</option>
                                        <option value="พุทธ">พุทธ</option>
                                        <option value="คริสต์">คริสต์</option>
                                        <option value="อิสลาม">อิสลาม</option>
                                    </select>

                                    <label for="religion" id="religion-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ศาสนา
                                    </label>
                                </div>


                                <div class="relative">
                                    <select id="driving_license" name="driving_license"
                                        onfocus="moveLabel('driving_license')" onblur="checkInput('driving_license')"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                        <option value="{{ $customer->driving_license }}">
                                            {{ $customer->driving_license }}</option>
                                        <option value="Yes">มี</option>
                                        <option value="No">ไม่มี</option>
                                    </select>

                                    <label for="driving_license" id="driving_license-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ใบขับขี่
                                    </label>
                                </div>


                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <div class="relative">
                                    <input type="text" id="facebook" name="facebook"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('facebook')"
                                        onblur="checkInput('facebook')"
                                        oninvalid="this.setCustomValidity('กรุณากรอก Facebook')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->facebook }}">
                                    <label for="facebook" id="facebook-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        Facebook
                                    </label>
                                    <i class="fa-brands fa-facebook absolute right-3 top-3 text-blue-700 text-md"></i>
                                </div>

                                <div class="relative">
                                    <input type="text" id="line_id" name="line_id"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " required onfocus="moveLabel('line_id')"
                                        onblur="checkInput('line_id')"
                                        oninvalid="this.setCustomValidity('กรุณากรอก Line ID')"
                                        oninput="this.setCustomValidity('')" value="{{ $customer->line_id }}">
                                    <label for="line_id" id="line_id-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        Line ID
                                    </label>
                                    <i class="fa-brands fa-line absolute right-3 top-3 text-green-600 text-md"></i>
                                </div>
                            </div>



                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div class="relative">
                                <select id="marital_status" name="marital_status"
                                    onfocus="moveLabel('marital_status')" onblur="checkInput('marital_status')"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500">
                                    <option value="{{ $customer->marital_status }}">{{ $customer->marital_status }}
                                    </option>
                                    <option value="โสด">โสด</option>
                                    <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                                    <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                                    <option value="หย่าร้าง">หย่าร้าง</option>
                                    <option value="หม้าย">หม้าย</option>
                                </select>

                                <label for="marital_status" id="marital_status-label"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    สถานะสมรส
                                </label>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                                <div class="relative">
                                    <input type="text" id="spouse_name" name="spouse_name"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " onfocus="moveLabel('spouse_name')"
                                        onblur="checkInput('spouse_name')" value="{{ $customer->spouse_name }}">
                                    <label for="spouse_name" id="spouse_name-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        ชื่อนามสกุลคู่สมรส
                                    </label>
                                </div>

                                <div class="relative">
                                    <input type="text" id="spouse_phone" name="spouse_phone"
                                        class="p-2 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                        placeholder=" " onfocus="moveLabel('spouse_phone')"
                                        onblur="checkInput('spouse_phone')" value="{{ $customer->spouse_phone }}">
                                    <label for="spouse_phone" id="spouse_phone-label"
                                        class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                        เบอร์โทรคู่สมรส
                                    </label>
                                    <i
                                        class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                </div>
                            </div>


                            <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                                <textarea id="note" name="note" rows="9"
                                    class="p-2 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                    placeholder=" " onfocus="moveLabel('note')" onblur="checkInput('note')">{{ $customer->note }}</textarea>
                                <label for="note" id="note-label"
                                    class="absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-3 z-10 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
                                    หมายเหตุ
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" id="updateCustomerBtn"
                            class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                            <i class="fas fa-user-plus"></i> แก้ไขข้อมูลลูกค้า
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    $(document).ready(function() {
        $('#updateCustomerBtn').click(function(e) {
            e.preventDefault(); // ป้องกันการรีเฟรชหน้าเมื่อกดปุ่ม

            // รวบรวมข้อมูลจากฟอร์ม
            var customerData = $('#formCustomerEdit').serialize();
            var customerId = $('#customerId').val(); // สมมติว่าในฟอร์มมี hidden field สำหรับ customer ID

            // ส่ง AJAX request
            $.ajax({
                url: '/customers/' + customerId, // URL ที่ใช้ในการอัปเดต
                type: 'PUT',
                data: customerData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // ส่ง CSRF token
                },
                success: function(response) {
                    // แสดง SweetAlert เมื่ออัปเดตสำเร็จ
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.success,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // แสดงผลการอัปเดตบนหน้าโดยไม่ต้องรีเฟรช
                        $('#customerProfile').html(response.updatedProfileHtml); // ปรับปรุงข้อมูลที่แสดง
                    });
                },
                error: function(xhr) {
                    // จัดการข้อผิดพลาดด้วย SweetAlert
                    let errorMessage = 'An unexpected error occurred.'; // ข้อความข้อผิดพลาดทั่วไป
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMessage = xhr.responseJSON.error; // แสดงข้อความข้อผิดพลาด
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: errorMessage,
                        confirmButtonText: 'Try Again'
                    });
                }
            });
        });
    });
</script>




<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<script>
    // ฟังก์ชันเพื่อตรวจสอบค่าของ label
    function checkInitialValue() {
        const fields = [{
                inputId: 'prefix',
                labelId: 'prefix-label'
            },
            {
                inputId: 'first_name',
                labelId: 'first_name-label'
            },
            {
                inputId: 'last_name',
                labelId: 'lastname_name-label'
            },
            {
                inputId: 'phone',
                labelId: 'phone-label'
            },
            {
                inputId: 'phone2',
                labelId: 'phone2-label'
            },
            {
                inputId: 'id_card_number',
                labelId: 'id_card_number-label'
            },
            {
                inputId: 'expiry_date',
                labelId: 'expiry_date-label'
            },
            {
                inputId: 'dob',
                labelId: 'dob-label'
            },
            {
                inputId: 'age',
                labelId: 'age-label'
            },
            {
                inputId: 'gender',
                labelId: 'gender-label'
            },
            {
                inputId: 'nationality',
                labelId: 'nationality-label'
            },
            {
                inputId: 'religion',
                labelId: 'religion-label'
            },
            {
                inputId: 'driving_license',
                labelId: 'driving_license-label'
            },
            {
                inputId: 'facebook',
                labelId: 'facebook-label'
            },
            {
                inputId: 'line_id',
                labelId: 'line_id-label'
            },
            {
                inputId: 'marital_status',
                labelId: 'marital_status-label'
            },
            {
                inputId: 'spouse_name',
                labelId: 'spouse_name-label'
            },
            {
                inputId: 'spouse_phone',
                labelId: 'spouse_phone-label'
            },
            {
                inputId: 'note',
                labelId: 'note-label'
            },
        ];

        fields.forEach(({
            inputId,
            labelId
        }) => {
            const inputElement = document.getElementById(inputId);
            const labelElement = document.getElementById(labelId);
            if (inputElement && inputElement.value) {
                labelElement.classList.add('translate-y-[-50%]', 'top-[0]', 'scale-75', 'text-xs');
            }
        });
    }

    // เรียกใช้ฟังก์ชันเมื่อโหลดหน้า
    window.onload = checkInitialValue;
</script>


<script>
    // ฟังก์ชันเปิด modal
    function showModal() {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        modalWrapper.classList.remove('hidden'); // เอาคลาส hidden ออกก่อน
        setTimeout(() => {
            modalWrapper.classList.add('show'); // เพิ่มคลาส show หลังจากแสดงโมดัลเพื่อแสดงเอฟเฟกต์ fade in
        }, 10); // เว้นช่วงนิดหน่อยเพื่อให้ transition ทำงาน
    }

    // ฟังก์ชันปิด modal
    function hideModal() {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        modalWrapper.classList.remove('show'); // ลบคลาส show ก่อนเพื่อปิดเอฟเฟกต์
        setTimeout(() => {
            modalWrapper.classList.add('hidden'); // ซ่อนโมดัลหลังจาก transition เสร็จ
        }, 400); // ระยะเวลาการรอให้เอฟเฟกต์ transition เสร็จก่อนซ่อนโมดัล
    }

    // ปิด modal เมื่อคลิกนอก modal content
    window.onclick = function(event) {
        let modalWrapper = document.getElementById('Cus-modal-wrapper');
        if (event.target === modalWrapper) {
            hideModal();
        }
    };
</script>

<style>
    /* ซ่อน modal โดยเริ่มต้นที่ opacity และ translateY */
    #Cus-modal-wrapper {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
    }

    #Cus-modal-wrapper .modal-content {
        transform: translateY(30px);
        /* เริ่มต้นจากต่ำลงมานิดหน่อย */
        transition: transform 0.4s ease, opacity 0.4s ease;
        opacity: 0;
    }

    /* เมื่อ modal เปิดแสดงผล */
    #Cus-modal-wrapper.show {
        opacity: 1;
        visibility: visible;
    }

    #Cus-modal-wrapper.show .modal-content {
        transform: translateY(0);
        /* เลื่อนกลับไปที่ตำแหน่งปกติ */
        opacity: 1;
        /* ทำการ fade-in */
    }
</style>
