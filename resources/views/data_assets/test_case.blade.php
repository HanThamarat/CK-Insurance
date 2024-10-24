<div class="relative">
    <select id="Ratetype_id" name="Vehicle_Type"
        onfocus="moveLabel('Ratetype_id')" onblur="checkInput('Ratetype_id')"
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
        $.ajax({
            url: '/api/ratetype-options', // URL ที่เรียกใช้ฟังก์ชัน getRatetypeOptions()
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const selectElement = $('#Ratetype_id');
                data.forEach(option => {
                    const opt = $('<option></option>')
                        .val(option.id) // กำหนดค่าให้กับ option
                        .text(option.name); // แสดงชื่อประเภทแทน Ratetype_id
                    selectElement.append(opt);
                });
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
</script>





<div class="relative">
    <select id="Name_Vehicle" name="Vehicle_Type_PLT"
        onfocus="moveLabel('Name_Vehicle')" onblur="checkInput('Name_Vehicle')"
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
        onfocus="moveLabel('Brand_car')" onblur="checkInput('Brand_car')"
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
                data.forEach(function(option) {
                    const opt = $('<option></option>')
                        .val(option.Brand_car) // กำหนดค่าให้กับ option
                        .text(option.Brand_car); // สามารถปรับให้แสดงชื่อที่ต้องการ
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
        onfocus="moveLabel('Group_car')" onblur="checkInput('Group_car')"
        class="p-2 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        onchange="handleSelectChange4(this)">
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
            url: '/api/group-car-options', // URL สำหรับดึงข้อมูลกลุ่มรถ
            method: 'GET', // ใช้วิธี GET
            dataType: 'json', // ระบุประเภทข้อมูลที่คาดว่าจะได้รับ
            success: function(data) {
                const selectElement = $('#Group_car'); // เลือก <select> element
                data.forEach(function(option) {
                    const opt = $('<option></option>') // สร้าง <option> ใหม่
                        .val(option.Group_car) // กำหนดค่าให้กับ option
                        .text(option.Group_car); // แสดงค่าใน dropdown
                    selectElement.append(opt); // เพิ่ม <option> ลงใน <select>
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Group car options:', error); // แสดงข้อผิดพลาดในคอนโซล
            }
        });
    });

    function handleSelectChange4(selectElement) {
        const label = $('#label_Group_car'); // ใช้ ID ของ label ที่ถูกต้อง
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label ขึ้น
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400'); // ปรับให้ label กลับลง
        }
    }
</script>



<div class="relative">
    <select id="Year_car" name="Vehicle_Years"
        onfocus="moveLabel('Year_car')" onblur="checkInput('Year_car')"
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
            url: '/api/year-options', // URL สำหรับดึงข้อมูลปีรถ
            method: 'GET', // ใช้วิธี GET
            dataType: 'json', // ระบุประเภทข้อมูลที่คาดว่าจะได้รับ
            success: function(data) {
                const selectElement = $('#Year_car'); // เลือก <select> element
                data.forEach(function(option) {
                    const opt = $('<option></option>') // สร้าง <option> ใหม่
                        .val(option.Year_car) // กำหนดค่าให้กับ option
                        .text(option.Year_car); // แสดงค่าใน dropdown
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
        onfocus="moveLabel('Model_car')" onblur="checkInput('Model_car')"
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
                const selectElement = $('#Model_car'); // เลือก <select> element
                data.forEach(function(option) {
                    const opt = $('<option></option>') // สร้าง <option> ใหม่
                        .val(option.Model_car) // กำหนดค่าให้กับ option
                        .text(option.Model_car); // แสดงค่าใน dropdown
                    selectElement.append(opt); // เพิ่ม <option> ลงใน <select>
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Model car options:', error); // แสดงข้อผิดพลาดในคอนโซล
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
        onfocus="moveLabel('Vehicle_Gear')" onblur="checkInput('Vehicle_Gear')"
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
