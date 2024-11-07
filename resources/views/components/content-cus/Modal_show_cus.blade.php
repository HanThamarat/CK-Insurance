<div id="showModalCustomerForm" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="rounded-lg shadow-lg flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white mt-[-15] rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <div id="header" class="top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <div class="flex items-center space-x-3">
                    {{-- <img src="{{ asset('img/icon_user.gif') }}" alt="customer icon" class="avatar-sm" style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">ข้อมูลลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Data Customer)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
                    </div> --}}
                    <div class="flex items-center space-x-4 p-2">
                        <div class="p-3 bg-orange-100 rounded-xl">
                            <img src="{{ asset('img/icon_user.gif') }}" alt="icon_user icon"
                                class="w-12 h-12 object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <h5
                                class="text-xl font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                                แสดงข้อมูลลูกค้า</h5>
                            <p class="text-gray-500 text-sm mt-1">(Show Customers Detail)</p>
                            <div class="h-1 w-32 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 mt-[-20]">
                <form id="showFormCustomerData" class="space-y-5">
                    <input type="hidden" id="customerId" value="{{ $customer->id }}">

                    <div class="border border-gray-300 p-4 rounded-lg">

                        <!-- HTML Structure -->
                        <div class="max-w-7xl mx-auto p-">
                            <div class="bg-white rounded-2xl card-hover p-4">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                    <!-- Left Column -->
                                    <div class="space-y-6">
                                        <h2
                                            class="text-base font-semibold text-gray-800 mb-0 border-b border-gray-300 pb-0">
                                            <img src="{{ asset('gif/cus.gif') }}" alt="Icon"
                                                class="inline-block mr-0 w-12">
                                            ข้อมูลส่วนตัว
                                        </h2>

                                        {{-- <div class="customer-info">
                                            <div id="customerIdDiv" class="info-item">
                                                <!-- The customer ID will be displayed here -->
                                            </div>
                                            <div id="prefixDiv" class="info-item">
                                                <!-- The customer prefix will be displayed here -->
                                            </div>
                                            <div id="firstNameDiv" class="info-item">
                                                <!-- The customer's first name will be displayed here -->
                                            </div>
                                            <div id="lastNameDiv" class="info-item">
                                                <!-- The customer's last name will be displayed here -->
                                            </div>
                                            <div id="phoneDiv" class="info-item">
                                                <!-- The customer's last name will be displayed here -->
                                            </div>
                                        </div>


                                        <script>

                                            var customerData = <?php echo json_encode($customer); ?>;

                                            console.log(customerData);

                                            document.getElementById('customerIdDiv').innerText = customerData.id;
                                            document.getElementById('prefixDiv').innerText = customerData.prefix;
                                            document.getElementById('firstNameDiv').innerText = customerData.first_name;
                                            document.getElementById('lastNameDiv').innerText = customerData.last_name;
                                            document.getElementById('phoneDiv').innerText = customerData.phone;
                                            document.getElementById('phone2Div').innerText = customerData.phone2;
                                            document.getElementById('id_card_numberDiv').innerText = customerData.id_card_number;
                                            document.getElementById('expiry_dateDiv').innerText = customerData.expiry_date;
                                            document.getElementById('dobDiv').innerText = customerData.dob;
                                            document.getElementById('ageDiv').innerText = customerData.age;
                                            document.getElementById('genderDiv').innerText = customerData.gender;
                                            document.getElementById('nationalityDiv').innerText = customerData.nationality;
                                            document.getElementById('religionDiv').innerText = customerData.religion;
                                            document.getElementById('driving_licenseDiv').innerText = customerData.driving_license;
                                            document.getElementById('facebookDiv').innerText = customerData.facebook;
                                            document.getElementById('line_idDiv').innerText = customerData.line_id;
                                            document.getElementById('marital_statusDiv').innerText = customerData.marital_status;
                                            document.getElementById('spouse_nameDiv').innerText = customerData.spouse_name;
                                            document.getElementById('spouse_phoneDiv').innerText = customerData.spouse_phone;
                                            document.getElementById('noteDiv').innerText = customerData.note;
                                            document.getElementById('user_insertDiv').innerText = customerData.user_insert;
                                            document.getElementById('created_atDiv').innerText = customerData.created_at;
                                            document.getElementById('updated_atDiv').innerText = customerData.updated_at;
                                        </script> --}}


                                        <div class="customer-info">
                                            <div id="customerIdDiv" class="info-item">
                                                <!-- The customer ID will be displayed here -->
                                            </div>
                                            <div id="prefixDiv" class="info-item">
                                                <!-- The customer prefix will be displayed here -->
                                            </div>
                                            <div id="firstNameDiv" class="info-item">
                                                <!-- The customer's first name will be displayed here -->
                                            </div>
                                            <div id="lastNameDiv" class="info-item">
                                                <!-- The customer's last name will be displayed here -->
                                            </div>
                                            <div id="phoneDiv" class="info-item">
                                                <!-- The customer's phone number will be displayed here -->
                                            </div>
                                            <div id="phone2Div" class="info-item">
                                                <!-- The customer's second phone number will be displayed here -->
                                            </div>
                                            <div id="id_card_numberDiv" class="info-item">
                                                <!-- The customer's ID card number will be displayed here -->
                                            </div>
                                            <div id="expiry_dateDiv" class="info-item">
                                                <!-- The customer's ID expiry date will be displayed here -->
                                            </div>
                                            <div id="dobDiv" class="info-item">
                                                <!-- The customer's date of birth will be displayed here -->
                                            </div>
                                            <div id="ageDiv" class="info-item">
                                                <!-- The customer's age will be displayed here -->
                                            </div>
                                            <div id="genderDiv" class="info-item">
                                                <!-- The customer's gender will be displayed here -->
                                            </div>
                                            <div id="nationalityDiv" class="info-item">
                                                <!-- The customer's nationality will be displayed here -->
                                            </div>
                                            <div id="religionDiv" class="info-item">
                                                <!-- The customer's religion will be displayed here -->
                                            </div>
                                            <div id="driving_licenseDiv" class="info-item">
                                                <!-- The customer's driving license will be displayed here -->
                                            </div>
                                            <div id="facebookDiv" class="info-item">
                                                <!-- The customer's Facebook will be displayed here -->
                                            </div>
                                            <div id="line_idDiv" class="info-item">
                                                <!-- The customer's Line ID will be displayed here -->
                                            </div>
                                            <div id="marital_statusDiv" class="info-item">
                                                <!-- The customer's marital status will be displayed here -->
                                            </div>
                                            <div id="spouse_nameDiv" class="info-item">
                                                <!-- The customer's spouse name will be displayed here -->
                                            </div>
                                            <div id="spouse_phoneDiv" class="info-item">
                                                <!-- The customer's spouse phone number will be displayed here -->
                                            </div>
                                            <div id="noteDiv" class="info-item">
                                                <!-- The customer's note will be displayed here -->
                                            </div>
                                            <div id="user_insertDiv" class="info-item">
                                                <!-- The user who inserted the data will be displayed here -->
                                            </div>
                                            <div id="created_atDiv" class="info-item">
                                                <!-- The date of data creation will be displayed here -->
                                            </div>
                                            <div id="updated_atDiv" class="info-item">
                                                <!-- The date of last data update will be displayed here -->
                                            </div>
                                        </div>

                                        <script>
                                            var customerData = <?php echo json_encode($customer); ?>;

                                            console.log(customerData);

                                            document.getElementById('customerIdDiv').innerText = customerData.id || 'N/A';
                                            document.getElementById('prefixDiv').innerText = customerData.prefix || 'N/A';
                                            document.getElementById('firstNameDiv').innerText = customerData.first_name || 'N/A';
                                            document.getElementById('lastNameDiv').innerText = customerData.last_name || 'N/A';
                                            document.getElementById('phoneDiv').innerText = customerData.phone || 'N/A';
                                            document.getElementById('phone2Div').innerText = customerData.phone2 || 'N/A';
                                            document.getElementById('id_card_numberDiv').innerText = customerData.id_card_number || 'N/A';
                                            document.getElementById('expiry_dateDiv').innerText = customerData.expiry_date || 'N/A';
                                            document.getElementById('dobDiv').innerText = customerData.dob || 'N/A';
                                            document.getElementById('ageDiv').innerText = customerData.age || 'N/A';
                                            document.getElementById('genderDiv').innerText = customerData.gender || 'N/A';
                                            document.getElementById('nationalityDiv').innerText = customerData.nationality || 'N/A';
                                            document.getElementById('religionDiv').innerText = customerData.religion || 'N/A';
                                            document.getElementById('driving_licenseDiv').innerText = customerData.driving_license || 'N/A';
                                            document.getElementById('facebookDiv').innerText = customerData.facebook || 'N/A';
                                            document.getElementById('line_idDiv').innerText = customerData.line_id || 'N/A';
                                            document.getElementById('marital_statusDiv').innerText = customerData.marital_status || 'N/A';
                                            document.getElementById('spouse_nameDiv').innerText = customerData.spouse_name || 'N/A';
                                            document.getElementById('spouse_phoneDiv').innerText = customerData.spouse_phone || 'N/A';
                                            document.getElementById('noteDiv').innerText = customerData.note || 'N/A';
                                            document.getElementById('user_insertDiv').innerText = customerData.user_insert || 'N/A';
                                            document.getElementById('created_atDiv').innerText = customerData.created_at || 'N/A';
                                            document.getElementById('updated_atDiv').innerText = customerData.updated_at || 'N/A';
                                        </script>






                                        <!-- Year Section -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">คำนำหน้า</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 mt-[-2]">
                                                    <option value="{{ $customer->prefix }}">{{ $customer->prefix }}</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ชื่อ</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->first_name }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">นามสกุล</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->last_name }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">วันออกบัตร</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->expiry_date }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-calendar-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">วันหมดอายุบัตร</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->dob }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-calendar-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">อายุ</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->age }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Contact Section -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เบอร์โทรศัพท์</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->phone }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เบอร์โทรศัพท์
                                                    2</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->phone2 }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>


                                        </div>

                                        <!-- Social Media Section -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">Facebook</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->facebook }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fab fa-facebook absolute right-3 top-1/2 -translate-y-1/2 text-blue-600"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">Line
                                                    ID</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->line_id }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fab fa-line absolute right-3 top-1/2 -translate-y-1/2 text-green-600"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="space-y-6">
                                        {{-- <h2 class="text-2xl font-semibold text-gray-800 mb-[-5]">ข้อมูลเพิ่มเติม</h2> --}}
                                        <h2
                                            class="text-base font-semibold text-gray-800 mb-0 border-b border-gray-300 pb-0">
                                            <img src="{{ asset('gif/info.gif') }}" alt="Icon"
                                                class="inline-block mr-0 w-12">
                                            ข้อมูลเพิ่มเติม
                                        </h2>

                                        <!-- Personal Info -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เพศ</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->gender }}">{{ $customer->gender }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">สัญชาติ</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->nationality }}">
                                                        {{ $customer->nationality }}</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ศาสนา</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->religion }}">
                                                        {{ $customer->religion }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ใบขับขี่</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->driving_license }}">
                                                        {{ $customer->driving_license }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">สถานะสมรส</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <option value="{{ $customer->marital_status }}">
                                                        {{ $customer->marital_status }}</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">เบอร์โทรคู่สมรส</label>
                                                <div class="relative">
                                                    <input type="text" disabled
                                                        value="{{ $customer->spouse_phone ?? 'ไม่มีข้อมูล' }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500
                                                                  {{ $customer->spouse_phone ? 'text-black' : 'text-red-500' }}">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ชื่อคู่สมรส</label>
                                                <div class="relative">
                                                    <input type="text" disabled
                                                        value="{{ $customer->spouse_name ?? 'ไม่มีข้อมูล' }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500
                                                                  {{ $customer->spouse_name ? 'text-black' : 'text-red-500' }}">
                                                    <i
                                                        class="fas fa-phone absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">ผู้ลงบันทึก</label>
                                                <div class="relative">
                                                    <input type="text" disabled
                                                        value="{{ $customer->user_insert }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i
                                                        class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Notes Section -->
                                        <div class="input-group">
                                            <label
                                                class="input-label block text-sm font-medium text-gray-600 mb-0">หมายเหตุ</label>
                                            <textarea disabled rows="1"
                                                class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">{{ $customer->note }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end space-x-2">
                        <button type="button" id="cancelCustomerBtn"
                            class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm transition-transform duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-gray-500/50"
                            onclick="closeDataCustomerModal()">
                            <i class="fas fa-times"></i> ย้อนกลับ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<style>
    .card-hover {
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .input-group {
        transition: all 0.2s ease;
    }

    .input-group:hover {
        transform: translateX(5px);
    }

    .input-label {
        transition: all 0.2s ease;
        opacity: 0.7;
    }

    .input-group:hover .input-label {
        opacity: 1;
        color: #f97316;
    }
</style>

<script>
    // Function to open modal and load customer data
    // function showCustomerModal(customerId) {
    //     $.ajax({
    //         url: '/customers/' + customerId,
    //         method: 'GET',
    //         success: function(response) {
    //             // Show modal
    //             $('#showModalCustomerForm').removeClass('hidden');

    //             // Fill in customer data
    //             const customer = response.customer;

    //             // Personal Information
    //             $('select[name="prefix"]').val(customer.prefix);
    //             $('input[name="first_name"]').val(customer.first_name);
    //             $('input[name="last_name"]').val(customer.last_name);
    //             $('input[name="expiry_date"]').val(customer.expiry_date);
    //             $('input[name="dob"]').val(customer.dob);
    //             $('input[name="age"]').val(customer.age);

    //             // Contact Information
    //             $('input[name="phone"]').val(customer.phone);
    //             $('input[name="phone2"]').val(customer.phone2);
    //             $('input[name="facebook"]').val(customer.facebook);
    //             $('input[name="line_id"]').val(customer.line_id);

    //             // Additional Information
    //             $('select[name="gender"]').val(customer.gender);
    //             $('select[name="nationality"]').val(customer.nationality);
    //             $('select[name="religion"]').val(customer.religion);
    //             $('select[name="driving_license"]').val(customer.driving_license);
    //             $('select[name="marital_status"]').val(customer.marital_status);

    //             // Spouse Information
    //             const spousePhone = customer.spouse_phone || 'ไม่มีข้อมูล';
    //             const spouseName = customer.spouse_name || 'ไม่มีข้อมูล';
    //             $('input[name="spouse_phone"]').val(spousePhone)
    //                 .toggleClass('text-red-500', !customer.spouse_phone);
    //             $('input[name="spouse_name"]').val(spouseName)
    //                 .toggleClass('text-red-500', !customer.spouse_name);

    //             // Other Information
    //             $('input[name="user_insert"]').val(customer.user_insert);
    //             $('textarea[name="note"]').val(customer.note);
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error loading customer data:', error);
    //             // Show error message to user
    //             alert('ไม่สามารถโหลดข้อมูลลูกค้าได้ กรุณาลองใหม่อีกครั้ง');
    //         }
    //     });
    // }

    function showCustomerModal(customerId) {
        $.ajax({
            url: '/customers/' + customerId,
            method: 'GET',
            success: function(response) {
                // แปลงข้อมูลเป็น JSON
                const customer = JSON.parse(response); // แปลงข้อมูลที่ได้รับจาก server เป็น JSON

                // แสดง modal
                $('#showModalCustomerForm').removeClass('hidden');

                // เติมข้อมูลลูกค้า
                // Personal Information
                $('select[name="prefix"]').val(customer.prefix);
                $('input[name="first_name"]').val(customer.first_name);
                $('input[name="last_name"]').val(customer.last_name);
                $('input[name="expiry_date"]').val(customer.expiry_date);
                $('input[name="dob"]').val(customer.dob);
                $('input[name="age"]').val(customer.age);

                // Contact Information
                $('input[name="phone"]').val(customer.phone);
                $('input[name="phone2"]').val(customer.phone2);
                $('input[name="facebook"]').val(customer.facebook);
                $('input[name="line_id"]').val(customer.line_id);

                // Additional Information
                $('select[name="gender"]').val(customer.gender);
                $('select[name="nationality"]').val(customer.nationality);
                $('select[name="religion"]').val(customer.religion);
                $('select[name="driving_license"]').val(customer.driving_license);
                $('select[name="marital_status"]').val(customer.marital_status);

                // Spouse Information
                const spousePhone = customer.spouse_phone || 'ไม่มีข้อมูล';
                const spouseName = customer.spouse_name || 'ไม่มีข้อมูล';
                $('input[name="spouse_phone"]').val(spousePhone)
                    .toggleClass('text-red-500', !customer.spouse_phone);
                $('input[name="spouse_name"]').val(spouseName)
                    .toggleClass('text-red-500', !customer.spouse_name);

                // Other Information
                $('input[name="user_insert"]').val(customer.user_insert);
                $('textarea[name="note"]').val(customer.note);
            },
            error: function(xhr, status, error) {
                console.error('Error loading customer data:', error);
                // แสดงข้อความผิดพลาด
                alert('ไม่สามารถโหลดข้อมูลลูกค้าได้ กรุณาลองใหม่อีกครั้ง');
            }
        });
    }



    // Function to close modal
    function closeDataCustomerModal() {
        $('#showModalCustomerForm').addClass('hidden');
    }

    // Event listener for close button
    $(document).ready(function() {
        $('#cancelCustomerBtn').on('click', closeDataCustomerModal);

        // Close modal when clicking outside
        $(document).on('click', '#showModalCustomerForm', function(e) {
            if (e.target === this) {
                closeDataCustomerModal();
            }
        });
    });
</script>




<script>
    function showDataCustomerModal() {
        const modal = $('#showModalCustomerForm');
        const modalContent = modal.find('.relative');

        modal.removeClass('hidden');
        modal.css('opacity', '0').animate({
            opacity: 1
        }, 300);

        modalContent.removeClass('translate-y-[-100%]');
        modalContent.css('transition', 'transform 0.3s ease');
    }

    function closeDataCustomerModal() {
        const modal = $('#showModalCustomerForm');
        const modalContent = modal.find('.relative');

        modalContent.css('transition', 'transform 0.3s ease');
        modalContent.addClass('translate-y-[-100%]');

        setTimeout(() => {
            modal.animate({
                opacity: 0
            }, 300, function() {
                modal.addClass('hidden');
                modalContent.addClass('translate-y-[-100%]');
            });
        }, 300);
    }

    $(document).mouseup(function(e) {
        const modal = $('#showModalCustomerForm');
        const modalContent = modal.find('.relative');

        if (!modalContent.is(e.target) && modalContent.has(e.target).length === 0) {}
    });

    $(document).keydown(function(e) {
        if (e.key === "Escape") {}
    });
</script>
