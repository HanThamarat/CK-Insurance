
                            <div class="relative mb-1">
                                <label for="Vehicle_Type"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Type') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Type') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ประเภทรถ 1
                                </label>

                                <select
                                    class="form-select block w-full border border-red-500 rounded-md shadow-sm
                                focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Type" name="Vehicle_Type" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">ประเภทรถ 1</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Ratetype_id') as $car)
                                        @if ($car->Ratetype_id)
                                            {{-- ตรวจสอบให้แน่ใจว่า Ratetype_id ไม่เป็น null --}}
                                            <option value="{{ $car->Ratetype_id }}" id="car_group"
                                                class="text-red-500">
                                                @switch($car->Ratetype_id)
                                                    @case('C01')
                                                        รถเก๋ง
                                                    @break

                                                    @case('C02')
                                                        กระบะตอนเดียว
                                                    @break

                                                    @case('C03')
                                                        กระบะแค็บ
                                                    @break

                                                    @case('C04')
                                                        กระบะ 4 ประตู
                                                    @break

                                                    @case('C05')
                                                        รถตู้
                                                    @break

                                                    @case('C06')
                                                        รถใหญ่
                                                    @break
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach

                                    {{-- ลูปรถมอเตอร์ไซค์ --}}
                                    @foreach ($motoGroups->unique('Ratetype_id') as $motogroup)
                                        @if ($motogroup->Ratetype_id)
                                            <option value="{{ $motogroup->Ratetype_id }}" id="moto_group"
                                                class="text-red-500">
                                                @switch($motogroup->Ratetype_id)
                                                    @case('M01')
                                                        เกียร์ธรรมดา
                                                    @break

                                                    @case('M02')
                                                        เกียร์ออโต้
                                                    @break

                                                    @case('M03')
                                                        BigBike
                                                    @break
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>


                            {{-- เช็คประเภทรถ 2 --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Type_PLT"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Type_PLT') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Type_PLT') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ประเภทรถ 2
                                </label>
                                <select
                                    class="form-select block w-full border {{ $errors->has('Vehicle_Type_PLT') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Type_PLT" name="Vehicle_Type_PLT" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">ประเภทรถ 2</option>
                                    @foreach ($typeVehicles as $vehicle)
                                        <option hidden value="{{ $vehicle->id }}" class="text-red-500">
                                            {{ $vehicle->Name_Vehicle }}</option>
                                    @endforeach
                                </select>
                            </div>




                            {{-- เช็คยี่ห้อรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Brand"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Brand') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Brand') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ยี่ห้อรถ
                                </label>
                                <select
                                    class="form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Brand') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Brand" name="Vehicle_Brand" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">ยี่ห้อรถ</option>

                                    <!-- foreach for car brands -->
                                    @foreach ($carBrands->unique('Brand_car') as $car)
                                        <option class="car-option text-red-500" id="car_brand"
                                            value="{{ $car->Brand_car }}" data-id="{{ $car->id }}">
                                            {{ $car->vehicle_name ?? '' . $car->Brand_car }}
                                        </option>
                                    @endforeach

                                    <!-- foreach for motorcycle brands -->
                                    @foreach ($motoBrands->unique('Brand_moto') as $moto)
                                        <option class="moto-option text-red-500" id="moto_brand"
                                            value="{{ $moto->Brand_moto }}" data-id="{{ $moto->id }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Brand_moto }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            {{-- กลุ่มรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Group"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Group') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Group') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    กลุ่มรถ
                                </label>
                                <select
                                    class="text-red-500 form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Group') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                    id="Vehicle_Group" name="Vehicle_Group" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                              this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                              this.classList.remove('border-gray-300');
                                              this.classList.add('border-red-500');"
                                    onblur="if (!this.value) { this.classList.add('border-gray-300'); } else { this.classList.remove('border-gray-300'); }">
                                    <option value="" class="text-red-500">กลุ่มรถ</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Group_car') as $car)
                                        <option id="car_group_{{ $car->id }}" value="{{ $car->Group_car }}"
                                            class="text-red-500">
                                            {{ $car->vehicle_name ?? '' . $car->Group_car }}
                                        </option>
                                    @endforeach

                                    @foreach ($motoGroups->unique('Group_moto') as $moto)
                                        <option id="moto_group_{{ $moto->id }}" value="{{ $moto->Group_moto }}"
                                            class="text-red-500">
                                            {{ $moto->vehicle_name ?? '' . $moto->Group_moto }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- ปีรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Years"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Years') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Years') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ปีรถ
                                </label>
                                <select
                                    class="text-red-500 form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Years') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                    id="Vehicle_Years" name="Vehicle_Years" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                    this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                    this.classList.remove('border-gray-300');
                                    this.classList.add('border-red-500');"
                                    onblur="if (!this.value) { this.classList.add('border-gray-300'); } else { this.classList.remove('border-gray-300'); }">
                                    <option value="" class="text-red-500">ปีรถ</option>
                                    @foreach ($carYears->unique('Year_car')->sortBy('Year_car') as $car)
                                        <option hidden id="year_car_{{ $car->Year_car }}" value="{{ $car->Year_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Year_car }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            {{-- รุ่นรถ --}}
                            <div class="relative mb-1">
                                <label for="Vehicle_Models"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Models') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Models') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    รุ่นรถ
                                </label>
                                <select
                                    class="text-red-500 form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Models') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out"
                                    id="Vehicle_Models" name="Vehicle_Models" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">รุ่นรถ</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($carModels->unique('Model_car') as $car)
                                        <option hidden id="model_car_{{ $car->id }}"
                                            value="{{ $car->Model_car }}">
                                            {{ $car->vehicle_name ?? '' . $car->Model_car }}</option>
                                    @endforeach

                                    @foreach ($motoModels->unique('Model_moto') as $moto)
                                        <option hidden id="model_moto_{{ $moto->id }}"
                                            value="{{ $moto->Model_moto }}">
                                            {{ $moto->vehicle_name ?? '' . $moto->Model_moto }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- เกียร์ -->
                            <div class="relative mb-1">
                                <label for="Vehicle_Gear"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                    {{ $errors->has('Vehicle_Gear') ? 'text-red-500' : 'text-red-500' }}
                                    {{ old('Vehicle_Gear') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                    absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    เกียร์รถ
                                </label>
                                <select
                                    class="form-select block w-full border border-red-500 {{ $errors->has('Vehicle_Gear') ? 'border-red-500' : 'border-red-500' }} rounded-md shadow-sm
                                    focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Gear" name="Vehicle_Gear" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">เกียร์รถ</option>
                                    <option hidden value="manual" class="text-red-500">Manual</option>
                                    <option hidden value="auto" class="text-red-500">Auto</option>
                                </select>
                            </div>

                        </div>
































                        {{-- <div class="relative">
                                <select id="Ratetype_id" name="Vehicle_Type"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange1(this)">
                                    <option value="">ประเภทรถ 1</option>
                                </select>

                                <label id="label_Ratetype_id" for="Ratetype_id"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ประเภทรถ 1
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    const selectElement = $('#Ratetype_id');
                                    // ซ่อน select element ก่อนที่จะทำการโหลดข้อมูล
                                    selectElement.hide();

                                    $.ajax({
                                        url: '/api/ratetype-options', // URL ที่เรียกใช้ฟังก์ชัน getRatetypeOptions()
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            // รวมข้อมูล carTypes และ motoTypes แล้วแสดงทั้งหมด
                                            if (data.carTypes && data.carTypes.length > 0) {
                                                data.carTypes.forEach(option => {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // กำหนดค่าให้กับ option
                                                        .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                                                    selectElement.append(opt);
                                                });
                                            }

                                            if (data.motoTypes && data.motoTypes.length > 0) {
                                                data.motoTypes.forEach(option => {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // กำหนดค่าให้กับ option
                                                        .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                                                    selectElement.append(opt);
                                                });
                                            }

                                            // แสดง select element หลังจากที่ข้อมูลถูกโหลดเสร็จ
                                            selectElement.show();
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Ratetype options:', error);
                                        }
                                    });
                                });


                                function handleSelectChange1(selectElement) {
                                    const label = $('#label_Ratetype_id');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script> --}}


                            <div class="relative">
                                <select id="Ratetype_id" name="Vehicle_Type"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange1(this)">
                                    <option value="">ประเภทรถ 1</option>
                                </select>

                                <label id="label_Ratetype_id" for="Ratetype_id"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ประเภทรถ 1
                                </label>
                            </div>


                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                let assetType; // ประกาศตัวแปร assetType ที่สามารถเข้าถึงได้ทั่วทั้งสคริปต์

                                $(document).ready(function() {
                                    const selectElement = $('#Ratetype_id');

                                    // อ่านค่า assetType จาก input hidden
                                    assetType = $('#Type_Asset').val(); // อ่านค่า input hidden

                                    // เรียกใช้ AJAX เมื่อ document พร้อม
                                    loadRatetypeOptions(); // เรียกฟังก์ชันเพื่อโหลดข้อมูล

                                    function loadRatetypeOptions() {
                                        $.ajax({
                                            url: '/api/ratetype-options', // URL ที่เรียกใช้ฟังก์ชัน getRatetypeOptions()
                                            method: 'GET',
                                            dataType: 'json',
                                            success: function(data) {
                                                // Clear previous options
                                                selectElement.empty().append('<option value="">ประเภทรถ 1</option>');

                                                // แสดงเฉพาะ carTypes ถ้า assetType เป็นรถยนต์
                                                if (assetType === 'รถยนต์' && data.carTypes && data.carTypes.length > 0) {
                                                    data.carTypes.forEach(option => {
                                                        const opt = $('<option></option>')
                                                            .val(option.id) // กำหนดค่าให้กับ option
                                                            .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                                                        selectElement.append(opt);
                                                    });
                                                }
                                                // แสดงเฉพาะ motoTypes ถ้า assetType เป็นมอเตอร์ไซค์
                                                else if (assetType === 'มอเตอร์ไซค์' && data.motoTypes && data.motoTypes.length > 0) {
                                                    data.motoTypes.forEach(option => {
                                                        const opt = $('<option></option>')
                                                            .val(option.id) // กำหนดค่าให้กับ option
                                                            .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                                                        selectElement.append(opt);
                                                    });
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Ratetype options:', error);
                                            }
                                        });
                                    }
                                });

                                function setAssetType(element) {
                                    // Get the asset type from data-type attribute
                                    assetType = element.getAttribute('data-type'); // กำหนดค่าให้กับ assetType
                                    $('#Type_Asset').val(assetType); // ตั้งค่า input hidden ด้วย assetType
                                    loadRatetypeOptions(); // เรียกฟังก์ชันเพื่อโหลดข้อมูลใหม่ตาม assetType
                                }

                                function handleSelectChange1(selectElement) {
                                    const label = $('#label_Ratetype_id');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>







                            <div class="relative">
                                <select id="Name_Vehicle" name="Vehicle_Type_PLT"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange2(this)"> <!-- เพิ่ม onchange -->
                                    <option value="">ประเภทรถ 2</option>
                                </select>

                                <label id="label_Name_Vehicle" for="Name_Vehicle"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ประเภทรถ 2
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $.ajax({
                                        url: '/api/vehicle-names',
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            const selectElement = $('#Name_Vehicle');
                                            data.forEach(function(option) {
                                                const opt = $('<option></option>')
                                                    .val(option.Name_Vehicle) // กำหนดค่าให้กับ option
                                                    .text(option.Name_Vehicle); // สามารถปรับให้แสดงชื่อที่ต้องการ
                                                selectElement.append(opt);
                                            });
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Vehicle names:', error);
                                        }
                                    });
                                });

                                function handleSelectChange2(selectElement) {
                                    const label = $('#label_Name_Vehicle'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>


                            <div class="relative">
                                <select id="Brand_car" name="Vehicle_Brand"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange3(this)">
                                    <option value="">ยี่ห้อรถ</option>
                                </select>

                                <label id="label_Brand_car" for="Brand_car"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ยี่ห้อรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $.ajax({
                                        url: '/api/brand-options',
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            const selectElement = $('#Brand_car');
                                            // ดึงข้อมูลแบรนด์รถยนต์
                                            data.carBrands.forEach(function(option) {
                                                const opt = $('<option></option>')
                                                    .val(option.Brand_car) // กำหนดค่าให้กับ option
                                                    .text(option.Brand_car); // แสดงชื่อแบรนด์
                                                selectElement.append(opt);
                                            });
                                            // ดึงข้อมูลแบรนด์มอเตอร์ไซค์
                                            data.motoBrands.forEach(function(option) {
                                                const opt = $('<option></option>')
                                                    .val(option.Brand_moto) // กำหนดค่าให้กับ option
                                                    .text(option.Brand_moto); // แสดงชื่อแบรนด์
                                                selectElement.append(opt);
                                            });
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Brand options:', error);
                                        }
                                    });
                                });

                                function handleSelectChange3(selectElement) {
                                    const label = $('#label_Brand_car'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>




                            <div class="relative">
                                <select id="Group_car" name="Vehicle_Group"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChangeGroup(this)">
                                    <option value="">กลุ่มรถ</option>
                                </select>

                                <label id="label_Group_car" for="Group_car"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    กลุ่มรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $.ajax({
                                        url: '/api/group-car-options',
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            const selectElement = $('#Group_car');
                                            // ดึงข้อมูลกลุ่มรถยนต์
                                            data.carGroups.forEach(function(option) {
                                                const opt = $('<option></option>')
                                                    .val(option.Group_car)
                                                    .text(option.Group_car);
                                                selectElement.append(opt);
                                            });
                                            // ดึงข้อมูลกลุ่มมอเตอร์ไซค์
                                            data.motoGroups.forEach(function(option) {
                                                const opt = $('<option></option>')
                                                    .val(option.Group_moto)
                                                    .text(option.Group_moto);
                                                selectElement.append(opt);
                                            });
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Group options:', error);
                                        }
                                    });
                                });

                                function handleSelectChangeGroup(selectElement) {
                                    const label = $('#label_Group_car');
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400');
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400');
                                    }
                                }
                            </script>



                            <div class="relative">
                                <select id="Year_car" name="Vehicle_Years"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange5(this)">
                                    <option value="">ปีรถ</option>
                                </select>

                                <label id="label_Year_car" for="Year_car"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    ปีรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $.ajax({
                                        url: '/api/year-options', // URL สำหรับดึงข้อมูลปีรถและปีมอเตอร์ไซค์
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            const selectElement = $('#Year_car'); // เลือก <select> element

                                            // เพิ่มปีรถยนต์ (Year_car)
                                            data.carYears.forEach(function(option) {
                                                const opt = $('<option></option>') // สร้าง <option> ใหม่
                                                    .val(option.Year_car) // กำหนดค่าให้กับ option
                                                    .text(option.Year_car); // แสดงแค่เลขปีใน dropdown
                                                selectElement.append(opt); // เพิ่ม <option> ลงใน <select>
                                            });

                                            // เพิ่มปีมอเตอร์ไซค์ (Year_moto)
                                            data.motoYears.forEach(function(option) {
                                                const opt = $('<option></option>') // สร้าง <option> ใหม่
                                                    .val(option.Year_moto) // กำหนดค่าให้กับ option
                                                    .text(option.Year_moto); // แสดงแค่เลขปีใน dropdown
                                                selectElement.append(opt); // เพิ่ม <option> ลงใน <select>
                                            });
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Year options:', error); // แสดงข้อผิดพลาดในคอนโซล
                                        }
                                    });
                                });

                                function handleSelectChange5(selectElement) {
                                    const label = $('#label_Year_car'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>



                            <div class="relative">
                                <select id="Model_car" name="Vehicle_Models"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange6(this)">
                                    <option value="">รุ่นรถ</option>
                                </select>

                                <label id="label_Model_car" for="Model_car"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    รุ่นรถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $.ajax({
                                        url: '/api/model-car-options', // URL สำหรับดึงข้อมูลรุ่นรถ
                                        method: 'GET', // ใช้วิธี GET
                                        dataType: 'json', // ระบุประเภทข้อมูลที่คาดว่าจะได้รับ
                                        success: function(data) {
                                            const carModels = data.carModels; // ดึงข้อมูล carModels จาก JSON
                                            const motoModels = data.motoModels; // ดึงข้อมูล motoModels จาก JSON
                                            const selectElement = $('#Model_car'); // เลือก <select> element

                                            // สร้าง <optgroup> สำหรับรถยนต์
                                            const carOptGroup = $('<optgroup></optgroup>')
                                                .attr('label', 'รถยนต์');

                                            carModels.forEach(function(option) {
                                                const opt = $('<option></option>') // สร้าง <option> ใหม่
                                                    .val(option.Model_car) // กำหนดค่าให้กับ option
                                                    .text(option.Model_car); // แสดงค่าใน dropdown
                                                carOptGroup.append(opt); // เพิ่ม <option> ลงใน <optgroup> รถยนต์
                                            });

                                            selectElement.append(carOptGroup); // เพิ่ม <optgroup> รถยนต์ ลงใน <select>

                                            // สร้าง <optgroup> สำหรับมอเตอร์ไซค์
                                            const motoOptGroup = $('<optgroup></optgroup>')
                                                .attr('label', 'มอเตอร์ไซค์');

                                            motoModels.forEach(function(option) {
                                                const opt = $('<option></option>') // สร้าง <option> ใหม่
                                                    .val(option.Model_moto) // กำหนดค่าให้กับ option
                                                    .text(option.Model_moto); // แสดงค่าใน dropdown
                                                motoOptGroup.append(opt); // เพิ่ม <option> ลงใน <optgroup> มอเตอร์ไซค์
                                            });

                                            selectElement.append(motoOptGroup); // เพิ่ม <optgroup> มอเตอร์ไซค์ ลงใน <select>
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Model car and moto options:', error); // แสดงข้อผิดพลาดในคอนโซล
                                        }
                                    });
                                });

                                function handleSelectChange6(selectElement) {
                                    const label = $('#label_Model_car'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>



                            <div class="relative">
                                <select id="Vehicle_Gear" name="Vehicle_Gear"
                                    class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
                                    onchange="handleSelectChange7(this)">
                                    <option value="">เกียร์รถ</option>
                                    <option value="manual" class="text-gray-500">Manual</option>
                                    <option value="auto" class="text-gray-500">Auto</option>
                                </select>

                                <label id="label_Vehicle_Gear" for="Vehicle_Gear"
                                    class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
                                    เกียร์รถ
                                </label>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                function handleSelectChange7(selectElement) {
                                    const label = $('#label_Vehicle_Gear'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script>

































<div class="relative">
    <select id="Ratetype_id" name="Vehicle_Type"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChange1(this)">
        <option value="">ประเภทรถ 1</option>
    </select>

    <label id="label_Ratetype_id" for="Ratetype_id"
        class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
        ประเภทรถ 1
    </label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function loadRatetypeOptions(vehicleType) {
        const selectElement = $('#Ratetype_id');
        selectElement.empty(); // Clear previous options

        // Add the default option
        selectElement.append('<option value="">ประเภทรถ 1</option>');

        // Hide select element before loading data
        selectElement.hide();

        $.ajax({
            url: '/api/ratetype-options', // URL ที่เรียกใช้ฟังก์ชัน getRatetypeOptions()
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                if (vehicleType === 'car' && data.carTypes && data.carTypes.length > 0) {
                    data.carTypes.forEach(option => {
                        const opt = $('<option></option>')
                            .val(option.id) // กำหนดค่าให้กับ option
                            .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                        selectElement.append(opt);
                    });
                } else if (vehicleType === 'motor' && data.motoTypes && data.motoTypes.length > 0) {
                    data.motoTypes.forEach(option => {
                        const opt = $('<option></option>')
                            .val(option.id) // กำหนดค่าให้กับ option
                            .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                        selectElement.append(opt);
                    });
                }

                // Show select element after data is loaded
                selectElement.show();
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Ratetype options:', error);
            }
        });
    }

    function closeModal_data_asset(modalId) {
        document.getElementById(modalId).classList.add('hidden'); // Hide the modal
    }

    function handleSelectChange1(selectElement) {
        const label = $('#label_Ratetype_id');
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400'); // Move label up
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400'); // Move label down
        }
    }

    $(document).ready(function() {
        const selectElement = $('#Ratetype_id');
        // Hide select element before loading data
        selectElement.hide();

        // Initial load if needed
        $.ajax({
            url: '/api/ratetype-options', // URL to load options
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Show select element after data is loaded
                selectElement.show();
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Ratetype options:', error);
            }
        });
    });
</script>



<div class="relative">
    <select id="Name_Vehicle" name="Vehicle_Type_PLT"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChange2(this)"> <!-- เพิ่ม onchange -->
        <option value="">ประเภทรถ 2</option>
    </select>

    <label id="label_Name_Vehicle" for="Name_Vehicle"
        class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
        ประเภทรถ 2
    </label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // เมื่อมีการเปลี่ยนแปลงใน select ของประเภท
        $('#Ratetype_id').change(function() {
            const selectedType = $(this).val(); // ดึงค่า Ratetype_id ที่ถูกเลือก
            $.ajax({
                url: '/api/vehicle-names', // API endpoint ของคุณ
                method: 'GET',
                data: { ratetype_id: selectedType }, // ส่ง Ratetype_id
                dataType: 'json',
                success: function(data) {
                    const selectElement = $('#Name_Vehicle');
                    selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                    // เพิ่มตัวเลือก "ประเภทรถ 2"
                    selectElement.append('<option value="">ประเภทรถ 2</option>');

                    // เพิ่มตัวเลือกใหม่จากข้อมูลที่ดึงมา
                    data.forEach(function(option) {
                        const opt = $('<option></option>')
                            .val(option.Name_Vehicle) // กำหนดค่าให้กับ option
                            .text(option.Name_Vehicle); // แสดงชื่อที่ต้องการ
                        selectElement.append(opt);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Vehicle names:', error);
                }
            });
        });
    });

    function handleSelectChange2(selectElement) {
        const label = $('#label_Name_Vehicle'); // ใช้ ID ของ label ที่ถูกต้อง
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
        }
    }
</script>


<div class="relative">
    <select id="Brand_car" name="Vehicle_Brand"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChange3(this)">
        <option value="">ยี่ห้อรถ</option>
    </select>

    <label id="label_Brand_car" for="Brand_car"
        class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
        ยี่ห้อรถ
    </label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/brand-options',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const selectElement = $('#Brand_car');
                // ดึงข้อมูลแบรนด์รถยนต์
                data.carBrands.forEach(function(option) {
                    const opt = $('<option></option>')
                        .val(option.Brand_car) // กำหนดค่าให้กับ option
                        .text(option.Brand_car); // แสดงชื่อแบรนด์
                    selectElement.append(opt);
                });
                // ดึงข้อมูลแบรนด์มอเตอร์ไซค์
                data.motoBrands.forEach(function(option) {
                    const opt = $('<option></option>')
                        .val(option.Brand_moto) // กำหนดค่าให้กับ option
                        .text(option.Brand_moto); // แสดงชื่อแบรนด์
                    selectElement.append(opt);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Brand options:', error);
            }
        });
    });

    function handleSelectChange3(selectElement) {
        const label = $('#label_Brand_car'); // ใช้ ID ของ label ที่ถูกต้อง
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
        }
    }
</script>




<div class="relative">
    <select id="Group_car" name="Vehicle_Group"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChangeGroup(this)">
        <option value="">กลุ่มรถ</option>
    </select>

    <label id="label_Group_car" for="Group_car"
        class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
        กลุ่มรถ
    </label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/group-car-options',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const selectElement = $('#Group_car');
                // ดึงข้อมูลกลุ่มรถยนต์
                data.carGroups.forEach(function(option) {
                    const opt = $('<option></option>')
                        .val(option.Group_car)
                        .text(option.Group_car);
                    selectElement.append(opt);
                });
                // ดึงข้อมูลกลุ่มมอเตอร์ไซค์
                data.motoGroups.forEach(function(option) {
                    const opt = $('<option></option>')
                        .val(option.Group_moto)
                        .text(option.Group_moto);
                    selectElement.append(opt);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Group options:', error);
            }
        });
    });

    function handleSelectChangeGroup(selectElement) {
        const label = $('#label_Group_car');
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400');
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400');
        }
    }
</script>



<div class="relative">
    <select id="Year_car" name="Vehicle_Years"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChange5(this)">
        <option value="">ปีรถ</option>
    </select>

    <label id="label_Year_car" for="Year_car"
        class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
        ปีรถ
    </label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/year-options', // URL สำหรับดึงข้อมูลปีรถและปีมอเตอร์ไซค์
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const selectElement = $('#Year_car'); // เลือก <select> element

                // เพิ่มปีรถยนต์ (Year_car)
                data.carYears.forEach(function(option) {
                    const opt = $('<option></option>') // สร้าง <option> ใหม่
                        .val(option.Year_car) // กำหนดค่าให้กับ option
                        .text(option.Year_car); // แสดงแค่เลขปีใน dropdown
                    selectElement.append(opt); // เพิ่ม <option> ลงใน <select>
                });

                // เพิ่มปีมอเตอร์ไซค์ (Year_moto)
                data.motoYears.forEach(function(option) {
                    const opt = $('<option></option>') // สร้าง <option> ใหม่
                        .val(option.Year_moto) // กำหนดค่าให้กับ option
                        .text(option.Year_moto); // แสดงแค่เลขปีใน dropdown
                    selectElement.append(opt); // เพิ่ม <option> ลงใน <select>
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Year options:', error); // แสดงข้อผิดพลาดในคอนโซล
            }
        });
    });

    function handleSelectChange5(selectElement) {
        const label = $('#label_Year_car'); // ใช้ ID ของ label ที่ถูกต้อง
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
        }
    }
</script>



<div class="relative">
    <select id="Model_car" name="Vehicle_Models"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChange6(this)">
        <option value="">รุ่นรถ</option>
    </select>

    <label id="label_Model_car" for="Model_car"
        class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
        รุ่นรถ
    </label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/model-car-options', // URL สำหรับดึงข้อมูลรุ่นรถ
            method: 'GET', // ใช้วิธี GET
            dataType: 'json', // ระบุประเภทข้อมูลที่คาดว่าจะได้รับ
            success: function(data) {
                const carModels = data.carModels; // ดึงข้อมูล carModels จาก JSON
                const motoModels = data.motoModels; // ดึงข้อมูล motoModels จาก JSON
                const selectElement = $('#Model_car'); // เลือก <select> element

                // สร้าง <optgroup> สำหรับรถยนต์
                const carOptGroup = $('<optgroup></optgroup>')
                    .attr('label', 'รถยนต์');

                carModels.forEach(function(option) {
                    const opt = $('<option></option>') // สร้าง <option> ใหม่
                        .val(option.Model_car) // กำหนดค่าให้กับ option
                        .text(option.Model_car); // แสดงค่าใน dropdown
                    carOptGroup.append(opt); // เพิ่ม <option> ลงใน <optgroup> รถยนต์
                });

                selectElement.append(carOptGroup); // เพิ่ม <optgroup> รถยนต์ ลงใน <select>

                // สร้าง <optgroup> สำหรับมอเตอร์ไซค์
                const motoOptGroup = $('<optgroup></optgroup>')
                    .attr('label', 'มอเตอร์ไซค์');

                motoModels.forEach(function(option) {
                    const opt = $('<option></option>') // สร้าง <option> ใหม่
                        .val(option.Model_moto) // กำหนดค่าให้กับ option
                        .text(option.Model_moto); // แสดงค่าใน dropdown
                    motoOptGroup.append(opt); // เพิ่ม <option> ลงใน <optgroup> มอเตอร์ไซค์
                });

                selectElement.append(motoOptGroup); // เพิ่ม <optgroup> มอเตอร์ไซค์ ลงใน <select>
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Model car and moto options:', error); // แสดงข้อผิดพลาดในคอนโซล
            }
        });
    });

    function handleSelectChange6(selectElement) {
        const label = $('#label_Model_car'); // ใช้ ID ของ label ที่ถูกต้อง
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
        }
    }
</script>



<div class="relative">
    <select id="Vehicle_Gear" name="Vehicle_Gear"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChange7(this)">
        <option value="">เกียร์รถ</option>
        <option value="manual" class="text-gray-500">Manual</option>
        <option value="auto" class="text-gray-500">Auto</option>
    </select>

    <label id="label_Vehicle_Gear" for="Vehicle_Gear"
        class="absolute left-2 bg-white top-1/2 transform -translate-y-1/2 text-red-400 font-semibold text-sm duration-150 pointer-events-none rounded-full px-2 shadow-lg">
        เกียร์รถ
    </label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function handleSelectChange7(selectElement) {
        const label = $('#label_Vehicle_Gear'); // ใช้ ID ของ label ที่ถูกต้อง
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
        }
    }
</script>
























                            {{-- <script>
                                $(document).ready(function() {
                                    $.ajax({
                                        url: '/api/brand-options',
                                        method: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            const selectElement = $('#Brand_car');
                                            // ดึงข้อมูลแบรนด์รถยนต์
                                            data.carBrands.forEach(function(option) {
                                                const opt = $('<option></option>')
                                                    .val(option.Brand_car) // กำหนดค่าให้กับ option
                                                    .text(option.Brand_car); // แสดงชื่อแบรนด์
                                                selectElement.append(opt);
                                            });
                                            // ดึงข้อมูลแบรนด์มอเตอร์ไซค์
                                            data.motoBrands.forEach(function(option) {
                                                const opt = $('<option></option>')
                                                    .val(option.Brand_moto) // กำหนดค่าให้กับ option
                                                    .text(option.Brand_moto); // แสดงชื่อแบรนด์
                                                selectElement.append(opt);
                                            });
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error fetching Brand options:', error);
                                        }
                                    });
                                });

                                function handleSelectChange3(selectElement) {
                                    const label = $('#label_Brand_car'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script> --}}



                                                        {{-- <script>
                                $(document).ready(function() {
                                    // เมื่อมีการเปลี่ยนแปลงใน select ของประเภท
                                    $('#Ratetype_id').change(function() {
                                        const selectedType = $(this).val(); // ดึงค่า Ratetype_id ที่ถูกเลือก

                                        // AJAX สำหรับดึงข้อมูล Vehicle Names
                                        $.ajax({
                                            url: '/api/vehicle-names', // API endpoint ของคุณ
                                            method: 'GET',
                                            data: { ratetype_id: selectedType }, // ส่ง Ratetype_id
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Name_Vehicle');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ประเภทรถ 2"
                                                selectElement.append('<option value="">ประเภทรถ 2</option>');

                                                // เพิ่มตัวเลือกใหม่จากข้อมูลที่ดึงมา
                                                data.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.Name_Vehicle) // กำหนดค่าให้กับ option
                                                        .text(option.Name_Vehicle); // แสดงชื่อที่ต้องการ
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Vehicle names:', error);
                                            }
                                        });

                                        // AJAX สำหรับดึงข้อมูล Brand Options
                                        $.ajax({
                                            url: '/api/brand-options',
                                            method: 'GET',
                                            data: { ratetype_id: selectedType, name_vehicle: $('#Name_Vehicle').val() }, // ส่งค่า ratetype_id และ name_vehicle เพื่อกรองแบรนด์
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Brand_car');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ยี่ห้อรถ"
                                                selectElement.append('<option value="">ยี่ห้อรถ</option>');

                                                // เพิ่มตัวเลือกแบรนด์รถยนต์
                                                data.carBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // เปลี่ยนค่าที่จะถูกส่งเมื่อเลือกแบรนด์
                                                        .text(option.Brand_car); // แสดงชื่อแบรนด์
                                                    selectElement.append(opt);
                                                });

                                                // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                                                data.motoBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // เปลี่ยนค่าที่จะถูกส่งเมื่อเลือกแบรนด์
                                                        .text(option.Brand_moto); // แสดงชื่อแบรนด์
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Brand options:', error);
                                            }
                                        });
                                    });

                                    // ฟังก์ชันสำหรับจัดการการเปลี่ยนแปลง select ของ Name_Vehicle
                                    $('#Name_Vehicle').change(function() {
                                        const selectedType = $('#Ratetype_id').val(); // ดึงค่า Ratetype_id ที่ถูกเลือก
                                        const selectedVehicle = $(this).val(); // ดึงค่า Name_Vehicle ที่ถูกเลือก

                                        // AJAX สำหรับดึงข้อมูล Brand Options
                                        $.ajax({
                                            url: '/api/brand-options',
                                            method: 'GET',
                                            data: { ratetype_id: selectedType, name_vehicle: selectedVehicle }, // ส่งค่า ratetype_id และ name_vehicle เพื่อกรองแบรนด์
                                            dataType: 'json',
                                            success: function(data) {
                                                const selectElement = $('#Brand_car');
                                                selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                                                // เพิ่มตัวเลือก "ยี่ห้อรถ"
                                                selectElement.append('<option value="">ยี่ห้อรถ</option>');

                                                // เพิ่มตัวเลือกแบรนด์รถยนต์
                                                data.carBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // เปลี่ยนค่าที่จะถูกส่งเมื่อเลือกแบรนด์
                                                        .text(option.Brand_car); // แสดงชื่อแบรนด์
                                                    selectElement.append(opt);
                                                });

                                                // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                                                data.motoBrands.forEach(function(option) {
                                                    const opt = $('<option></option>')
                                                        .val(option.id) // เปลี่ยนค่าที่จะถูกส่งเมื่อเลือกแบรนด์
                                                        .text(option.Brand_moto); // แสดงชื่อแบรนด์
                                                    selectElement.append(opt);
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error fetching Brand options:', error);
                                            }
                                        });
                                    });
                                });

                                function handleSelectChange2(selectElement) {
                                    const label = $('#label_Name_Vehicle'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }

                                function handleSelectChange3(selectElement) {
                                    const label = $('#label_Brand_car'); // ใช้ ID ของ label ที่ถูกต้อง
                                    if (selectElement.value) {
                                        label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
                                    } else {
                                        label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
                                    }
                                }
                            </script> --}}



                            // AJAX สำหรับดึงข้อมูล Vehicle Names
                            // $.ajax({
                            //     url: '/api/vehicle-names',
                            //     method: 'GET',
                            //     data: { ratetype_id: selectedType },
                            //     dataType: 'json',
                            //     success: function(data) {
                            //         const selectElement = $('#Name_Vehicle');
                            //         selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                            //         // เพิ่มตัวเลือก "ประเภทรถ 2"
                            //         selectElement.append('<option value="ประเภทรถ 2">ประเภทรถ 2</option>');

                            //         // เพิ่มตัวเลือกใหม่จากข้อมูลที่ดึงมา
                            //         data.forEach(function(option) {
                            //             const opt = $('<option></option>')
                            //                 .val(option.Name_Vehicle)
                            //                 .text(option.Name_Vehicle);
                            //             selectElement.append(opt);
                            //         });
                            //     },
                            //     error: function(xhr, status, error) {
                            //         console.error('Error fetching Vehicle names:', error);
                            //     }
                            // });


                            // function handleSelectChange2(selectElement) {
                                //     const label = $('#label_Name_Vehicle');
                                //     if (selectElement.value) {
                                //         label.addClass('translate-y-[-2rem] text-gray-400');
                                //     } else {
                                //         label.removeClass('translate-y-[-2rem] text-gray-400');
                                //     }
                                // }
