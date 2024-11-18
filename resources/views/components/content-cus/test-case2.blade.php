<form id="formCustomer" class="max-w-6xl mx-auto p-6">
    @csrf

    <!-- Main Container -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
        <!-- Form Header -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">เพิ่มข้อมูลลูกค้าใหม่</h2>
            <p class="text-gray-500">กรุณากรอกข้อมูลให้ครบถ้วนในช่องที่มีเครื่องหมาย *</p>
        </div>

        <!-- Form Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Column -->
            <div class="space-y-6">
                <!-- Personal Info Section -->
                <div class="bg-gray-50 p-6 rounded-xl space-y-6">
                    <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
                        <i class="fas fa-user-circle mr-2 text-orange-500"></i>
                        ข้อมูลส่วนตัว
                    </h3>

                    <!-- Name Fields -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="relative">
                            <select id="prefix" name="prefix"
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700 text-sm appearance-none">
                                <option value="">เลือก</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                คำนำหน้า <span class="text-red-500">*</span>
                            </label>
                            <i
                                class="fas fa-chevron-down absolute right-4 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>

                        <div class="relative">
                            <input type="text" id="first_name" name="first_name" required
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                ชื่อ <span class="text-red-500">*</span>
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" id="last_name" name="last_name" required
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                นามสกุล <span class="text-red-500">*</span>
                            </label>
                        </div>
                    </div>

                    <!-- Contact Fields -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="tel" id="phone" name="phone" required
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                เบอร์โทรหลัก <span class="text-red-500">*</span>
                            </label>
                            <i class="fas fa-phone absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>

                        <div class="relative">
                            <input type="tel" id="phone2" name="phone2"
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                เบอร์โทรสำรอง
                            </label>
                            <i class="fas fa-phone absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>
                    </div>

                    <!-- ID Card Fields -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="text" id="id_card_number" name="id_card_number" required
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                เลขบัตรประชาชน <span class="text-red-500">*</span>
                            </label>
                            <i class="fas fa-id-card absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>

                        <div class="relative">
                            <input type="date" id="expiry_date" name="expiry_date" required
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                วันหมดอายุบัตร <span class="text-red-500">*</span>
                            </label>
                            <i class="fas fa-calendar absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Birth Date and Age -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="relative">
                            <input type="date" id="birthday" name="birthday" required
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                วันเกิด <span class="text-red-500">*</span>
                            </label>
                            <i class="fas fa-birthday-cake absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>

                        <div class="relative">
                            <input type="date" id="dob" name="dob" required
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                วันออกบัตร <span class="text-red-500">*</span>
                            </label>
                            <i class="fas fa-calendar-alt absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>

                        <div class="relative">
                            <input type="text" id="age" name="age" readonly
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 bg-gray-50 text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                อายุ
                            </label>
                            <span class="absolute right-3 top-3 text-gray-500">ปี</span>
                        </div>
                    </div>
                </div>

                <!-- Additional Info Section -->
                <div class="bg-gray-50 p-6 rounded-xl space-y-6">
                    <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
                        <i class="fas fa-info-circle mr-2 text-orange-500"></i>
                        ข้อมูลเพิ่มเติม
                    </h3>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="relative">
                            <select id="gender" name="gender" required
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700 text-sm appearance-none">
                                <option value="">เลือก</option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                            </select>
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                เพศ <span class="text-red-500">*</span>
                            </label>
                            <i
                                class="fas fa-chevron-down absolute right-4 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>

                        <div class="relative">
                            <select id="nationality" name="nationality" required
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700 text-sm appearance-none">
                                <option value="">เลือก</option>
                                <option value="ไทย">ไทย</option>
                            </select>
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                สัญชาติ <span class="text-red-500">*</span>
                            </label>
                            <i
                                class="fas fa-chevron-down absolute right-4 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>

                        <div class="relative">
                            <select id="religion" name="religion" required
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700 text-sm appearance-none">
                                <option value="">เลือก</option>
                                <option value="พุทธ">พุทธ</option>
                                <option value="คริสต์">คริสต์</option>
                                <option value="อิสลาม">อิสลาม</option>
                            </select>
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                ศาสนา <span class="text-red-500">*</span>
                            </label>
                            <i
                                class="fas fa-chevron-down absolute right-4 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="relative">
                            <select id="driving_license" name="driving_license" required
                                class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700 text-sm appearance-none">
                                <option value="">เลือก</option>
                                <option value="Yes">มี</option>
                                <option value="No">ไม่มี</option>
                            </select>
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                ใบขับขี่ <span class="text-red-500">*</span>
                            </label>
                            <i
                                class="fas fa-chevron-down absolute right-4 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>

                        <div class="relative">
                            <input type="text" id="facebook" name="facebook"
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                Facebook
                            </label>
                            <i class="fab fa-facebook text-blue-600 absolute left-3.5 top-3.5"></i>
                        </div>

                        <div class="relative">
                            <input type="text" id="line_id" name="line_id"
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                Line ID
                            </label>
                            <i class="fab fa-line text-green-600 absolute left-3.5 top-3.5"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <!-- Marital Status Section -->
                <div class="bg-gray-50 p-6 rounded-xl space-y-6">
                    <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
                        <i class="fas fa-heart mr-2 text-orange-500"></i>
                        ข้อมูลการสมรส
                    </h3>

                    <div class="relative">
                        <select id="marital_status" name="marital_status" required
                            class="w-full h-11 px-4 rounded-lg border-2 border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700 text-sm appearance-none">
                            <option value="">เลือกสถานะ</option>
                            <option value="โสด">โสด</option>
                            <option value="สมรสจดทะเบียน">สมรสจดทะเบียน</option>
                            <option value="สมรสไม่จดทะเบียน">สมรสไม่จดทะเบียน</option>
                            <option value="หย่าร้าง">หย่าร้าง</option>
                            <option value="หม้าย">หม้าย</option>
                        </select>
                        <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                            สถานะสมรส <span class="text-red-500">*</span>
                        </label>
                        <i
                            class="fas fa-chevron-down absolute right-4 top-3.5 text-gray-400 pointer-events-none"></i>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="text" id="spouse_name" name="spouse_name"
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                ชื่อ-นามสกุล คู่สมรส
                            </label>
                            <i class="fas fa-user absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>

                        <div class="relative">
                            <input type="tel" id="spouse_phone" name="spouse_phone"
                                class="w-full h-11 px-4 pl-10 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700">
                            <label class="absolute -top-2.5 left-3 px-2 bg-gray-50 text-sm text-gray-600">
                                เบอร์โทรคู่สมรส
                            </label>
                            <i class="fas fa-phone absolute left-3.5 top-3.5 text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Notes Section -->
                <div class="bg-gray-50 p-6 rounded-xl space-y-4">
                    <h3 class="text-lg font-medium text-gray-700 flex items-center">
                        <i class="fas fa-sticky-note mr-2 text-orange-500"></i>
                        บันทึกเพิ่มเติม
                    </h3>

                    <div class="relative">
                        <textarea id="note" name="note" rows="8"
                            class="w-full p-4 rounded-lg border-2 border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all text-gray-700 resize-none"
                            placeholder="พิมพ์บันทึกเพิ่มเติม..."></textarea>
                    </div>
                </div>

                <!-- Hidden Fields -->
                <input type="hidden" name="user_insert" value="{{ auth()->user()->name }}">
                <input type="hidden" name="status_cus" id="status_cus" value="active">
            </div>
        </div>

        <!-- Submit Button Section -->
        <div class="mt-8 flex justify-end space-x-4">
            <button type="button"
                class="px-6 py-2.5 rounded-lg border-2 border-gray-300 text-gray-700 hover:bg-gray-50 transition-all duration-200 flex items-center space-x-2">
                <i class="fas fa-times"></i>
                <span>ยกเลิก</span>
            </button>
            <button type="submit"
                class="px-6 py-2.5 rounded-lg bg-gradient-to-r from-orange-500 to-red-500 text-white hover:translate-y-[-2px] transition-all duration-200 flex items-center space-x-2 shadow-lg shadow-orange-500/30">
                <i class="fas fa-save"></i>
                <span>บันทึกข้อมูล</span>
            </button>
        </div>
    </div>
</form>

<!-- Custom Style -->
<style>
    /* Floating Label Animation */
    .form-floating:focus-within label,
    .form-floating input:not(:placeholder-shown)~label {
        transform: scale(0.85) translateY(-2.5rem);
        background-color: white;
    }

    /* Custom Scrollbar */
    textarea::-webkit-scrollbar {
        width: 8px;
    }

    textarea::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    textarea::-webkit-scrollbar-thumb {
        background: #ddd;
        border-radius: 4px;
    }

    textarea::-webkit-scrollbar-thumb:hover {
        background: #ccc;
    }

    /* Remove arrows from number input */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<!-- Custom Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Calculate age from birthday
        const birthdayInput = document.getElementById('birthday');
        const ageInput = document.getElementById('age');

        birthdayInput.addEventListener('change', function() {
            if (this.value) {
                const birthDate = new Date(this.value);
                const today = new Date();
                let age = today.getFullYear() - birthDate.getFullYear();
                const monthDiff = today.getMonth() - birthDate.getMonth();

                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }

                ageInput.value = age;
            }
        });

        // Handle marital status dependent fields
        const maritalStatus = document.getElementById('marital_status');
        const spouseFields = document.querySelectorAll('[id^="spouse_"]');

        maritalStatus.addEventListener('change', function() {
            const isMarried = this.value === 'สมรสจดทะเบียน' || this.value === 'สมรสไม่จดทะเบียน';
            spouseFields.forEach(field => {
                field.required = isMarried;
                field.disabled = !isMarried;
                if (!isMarried) field.value = '';
            });
        });
    });
</script>
