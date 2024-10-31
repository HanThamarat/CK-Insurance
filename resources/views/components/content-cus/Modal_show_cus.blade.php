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
            <div class="p-2 mt-[-17]">
                <form id="showFormCustomer" class="space-y-6">
                    <input type="hidden" id="customerId" value="{{ $customer->id }}">

                    <div class="border border-gray-300 p-4 rounded-lg">


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Left Column -->
                            <div class="space-y-4">

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="relative">
                                        <select id="prefix" name="prefix" onfocus="moveLabel('prefix')" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-black">
                                            <option value="{{ $customer->prefix }}">{{ $customer->prefix }}</option>
                                        </select>
                                    </div>
                                    <div class="relative">
                                        <input type="text" id="first_name" name="first_name" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->first_name }}">
                                        <i
                                            class="fa-solid fa-user absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                    </div>
                                    <div class="relative">
                                        <input type="text" id="last_name" name="last_name" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300 input-field"
                                            value="{{ $customer->last_name }}">
                                        <i
                                            class="fa-solid fa-user absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="relative">
                                        <input type="text" id="phone" name="phone" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->phone }}">
                                        <i
                                            class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                    </div>
                                    <div class="relative">
                                        <input type="text" id="phone2" name="phone2" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->phone2 }}">
                                        <i
                                            class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="relative">
                                        <input type="text" id="id_card_number" name="id_card_number" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->id_card_number }}">
                                        <i class="fa-solid fa-credit-card absolute right-3 top-2 text-sm"></i>
                                    </div>
                                    <div class="relative">
                                        <input type="text" id="expiry_date" name="expiry_date" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->expiry_date }}">
                                        <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="relative">
                                        <input type="text" id="dob" name="dob" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->dob }}">
                                        <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                    </div>
                                    <div class="relative">
                                        <input type="text" id="birthday" name="birthday" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg w-full pr-10 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->birthday }}">

                                        <i class="fa-solid fa-calendar-days absolute right-3 top-2 text-sm"></i>
                                    </div>
                                    <script>
                                        $(document).ready(function() {
                                            $('#expiry_date').val("{{ \Carbon\Carbon::parse($customer->expiry_date)->format('d/m/Y') }}");
                                            $('#dob').val("{{ \Carbon\Carbon::parse($customer->dob)->format('d/m/Y') }}");
                                            $('#birthday').val("{{ \Carbon\Carbon::parse($customer->birthday)->format('d/m/Y') }}");
                                        });
                                    </script>
                                    <div class="relative">
                                        <input type="text" id="age" name="age" readonly
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg w-full pr-12 text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            required value="{{ $customer->age }}">
                                        <span
                                            class="absolute right-3 top-2/4 -translate-y-2/4  px-2 text-gray-500 text-sm">ปี</span>
                                    </div>

                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                    <div class="relative">
                                        <select id="gender" name="gender" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-black">
                                            <option value="{{ $customer->gender }}">{{ $customer->gender }}</option>
                                        </select>
                                    </div>
                                    <div class="relative">
                                        <select id="nationality" name="nationality" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-black">
                                            <option value="{{ $customer->nationality }}">{{ $customer->nationality }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="relative">
                                        <select id="religion" name="religion" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-black">
                                            <option value="{{ $customer->religion }}">{{ $customer->religion }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">

                                    <div class="relative">
                                        <select id="driving_license" name="driving_license" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-black">
                                            <option value="{{ $customer->driving_license }}">
                                                {{ $customer->driving_license }}</option>
                                        </select>
                                    </div>

                                    <div class="relative">
                                        <input type="text" id="facebook" name="facebook" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->facebook }}">
                                        <i
                                            class="fa-brands fa-facebook absolute right-3 top-3 text-blue-700 text-md"></i>
                                    </div>
                                    <div class="relative">
                                        <input type="text" id="line_id" name="line_id" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->line_id }}">
                                        <i class="fa-brands fa-line absolute right-3 top-3 text-green-600 text-md"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-4">
                                <div class="relative">
                                    <select id="marital_status" name="marital_status" disabled
                                        class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-black">
                                        <option value="{{ $customer->marital_status }}">
                                            {{ $customer->marital_status }}
                                        </option>
                                    </select>
                                </div>


                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="relative">
                                        <input type="text" id="spouse_name" name="spouse_name" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->spouse_name }}">
                                    </div>
                                    <div class="relative">
                                        <input type="text" id="spouse_phone" name="spouse_phone" disabled
                                            class="p-2 bg-gray-200 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
                                            value="{{ $customer->spouse_phone }}">
                                        <i
                                            class="fa-solid fa-phone absolute right-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                                    </div>
                                </div>


                                <div class="relative pt-0"> <!-- ปรับ pt ตามต้องการ -->
                                    <textarea id="note" name="note" rows="9" disabled
                                        class="p-2 bg-gray-200 border border-gray-300 rounded-lg w-full text-sm peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300">{{ $customer->note }}</textarea>
                                </div>


                                <input type="hidden" name="user_insert" value="{{ auth()->user()->name }}">
                                <input type="hidden" name="status_cus" id="status_cus" value="active">
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
