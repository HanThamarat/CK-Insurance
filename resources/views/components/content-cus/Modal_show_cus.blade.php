<div id="showModalCustomerForm" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="rounded-lg shadow-lg flex items-center justify-center w-full h-full">
        <div
            class="relative bg-white mt-[-15] rounded-lg w-full max-w-6xl mx-4 p-6 max-h-[90%] flex flex-col overflow-y-auto scrollbar-hidden">
            <div id="header" class="top-0 z-10 p-0 transition-bg duration-300 bg-white p-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/icon_user.gif') }}" alt="customer icon" class="avatar-sm"
                        style="width:50px;height:50px">
                    <div class="flex-grow">
                        <h5 class="text-orange-400 font-semibold">ข้อมูลลูกค้า</h5>
                        <p class="text-muted font-semibold text-sm mt-1">(Data Customer)</p>
                        <div class="border-b-2 border-primary mt-2 w-full"></div>
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
                                        <h2 class="text-base font-semibold text-gray-800 mb-0 border-b border-gray-300 pb-0">
                                            <img src="{{ asset('gif/cus.gif') }}" alt="Icon" class="inline-block mr-0 w-12">
                                            ข้อมูลส่วนตัว
                                        </h2>

                                        <!-- Year Section -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div class="input-group">
                                                <label
                                                    class="input-label block text-sm font-medium text-gray-600 mb-0">คำนำหน้า</label>
                                                <select disabled
                                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 mt-[-2]">
                                                    <option value="{{ $customer->prefix }}">{{ $customer->prefix }}
                                                    </option>
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
                                                <label class="input-label block text-sm font-medium text-gray-600 mb-0">วันออกบัตร</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->expiry_date }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i class="fas fa-calendar-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label class="input-label block text-sm font-medium text-gray-600 mb-0">วันหมดอายุบัตร</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->dob }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i class="fas fa-calendar-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <label class="input-label block text-sm font-medium text-gray-600 mb-0">อายุ</label>
                                                <div class="relative">
                                                    <input type="text" disabled value="{{ $customer->age }}"
                                                        class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                                    <i class="fas fa-user-alt absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
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
                                        <h2 class="text-base font-semibold text-gray-800 mb-0 border-b border-gray-300 pb-0">
                                            <img src="{{ asset('gif/info.gif') }}" alt="Icon" class="inline-block mr-0 w-12">
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
                                                    <option value="{{ $customer->driving_license }}">{{ $customer->driving_license }}
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
                                                    <input type="text" disabled value="{{ $customer->user_insert }}"
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



