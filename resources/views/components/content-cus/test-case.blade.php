<script>
    $(document).ready(function() {
        // ฟังก์ชันดึงข้อมูลที่อยู่
        function fetchAddresses() {
            const customerId = {{ $customer->id ?? 'null' }}; // รับค่า ID ของลูกค้า

            if (customerId === 'null') {
                console.log('Customer ID is not available');
                return;
            }

            $.ajax({
                url: '/get-address-data/' + customerId, // URL ที่เชื่อมต่อกับเส้นทางที่เราสร้างไว้พร้อม ID
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#address-list').empty(); // เคลียร์เนื้อหาที่มีอยู่

                    // เช็คว่ามีข้อมูลใน response หรือไม่
                    if (response.addresses.length === 0) {
                        $('#address-list').append(`
                            <div class="text-red-500 text-center p-0">
                                <strong hidden>ไม่มีข้อมูลในระบบ</strong>
                            </div>
                        `);
                        // แสดง address-master ถ้าไม่มีข้อมูล
                        $('.address-master').show();
                        $('#prev-master').hide();
                        $('#next-master').hide();
                        return; // ออกจากฟังก์ชันถ้าไม่มีข้อมูล
                    }

                    let hasAddressCards = false; // ตัวแปรตรวจสอบว่ามีการ์ดที่อยู่หรือไม่

                    $.each(response.addresses, function(index, address) {
                        // เงื่อนไขในการกรองข้อมูล
                        if (address.DataCus_id == customerId) {
                            hasAddressCards = true; // เปลี่ยนค่าเป็น true เมื่อมีการ์ด

                            // ตรวจสอบค่าแต่ละฟิลด์และกำหนดค่าเริ่มต้นหากเป็น null หรือ undefined
                            const houseNumber = address.houseNumber_Adds ? address.houseNumber_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const road = address.road_Adds ? address.road_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const village = address.village_Adds ? address.village_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const province = address.houseProvince_Adds ? address.houseProvince_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const postalCode = address.Postal_Adds ? address.Postal_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const addressType = address.Type_Adds ? address.Type_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const houseZone = address.houseZone_Adds ? address.houseZone_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const district = address.houseDistrict_Adds ? address.houseDistrict_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const tambon = address.houseTambon_Adds ? address.houseTambon_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';

                            $('#address-list').append(`
                                <div class="flex flex-col w-full md:w-2/2 p-1 mt-0"> <!-- กำหนดความกว้าง -->
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                                        <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                            <div class="flex justify-between items-center">
                                                <div class="flex-1">
                                                    <h6 class="text-primary font-semibold">
                                                        <i class="fa fa-tag text-secondary"></i> <strong>ประเภท : </strong> ${addressType}
                                                    </h6>
                                                </div>
                                                 <div>

                                                    <button
                                                        class="flex items-center bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transform hover:translate-y-[-2px] hover:shadow-lg transition-all duration-200"
                                                        data-id="${address.id}"
                                                        onclick="openModal_Edit_address_customer(this)">
                                                        <svg class="w-3 h-3 mr-2" fill="currentColor" viewBox="0 0 512 512">
                                                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                                        </svg>
                                                        แก้ไข
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex">
                                                <div class="flex-1">
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input type="hidden" name="DataCus_id" value="${address.DataCus_id}">
                                                                <h5 class="card-title mb-1">
                                                                    <i class="fa fa-map-marker-alt text-primary"></i> <strong>ที่อยู่ :  ${houseNumber} </strong>
                                                                </h5>
                                                                <div class="d-flex justify-content-between mb-1">
                                                                    <p class="card-text mb-1">
                                                                        <i class="fa fa-city text-info"></i> <strong>จังหวัด :  ${province} </strong>
                                                                    </p>
                                                                    <p class="card-text mb-1">
                                                                        <i class="fa fa-map-signs text-warning"></i> <strong>อำเภอ :  ${district} </strong>
                                                                    </p>
                                                                    <p class="card-text mb-1">
                                                                        <i class="fa fa-map-marker text-info"></i> <strong>ตำบล :  ${tambon} </strong>
                                                                    </p>
                                                                </div>
                                                                <p class="card-text mb-1">
                                                                    <i class="fa fa-envelope text-warning"></i> <strong>รหัสไปรษณีย์ :  ${postalCode} </strong>
                                                                </p>
                                                                <p class="card-text mb-0">
                                                                    <i class="fa fa-map text-primary"></i> <strong>โซนบ้าน :  ${houseZone} </strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('img/home2.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-t">
                                            <small class="text-muted">
                                                <div class="flex justify-between items-center">
                                                    <div title="4 เดือนที่แล้ว">
                                                        <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ {{ \Carbon\Carbon::parse($customer->created_at)->locale('th')->translatedFormat('j F Y เวลา H:i น.') }}
                                                    </div>
                                                    <div class="text-right">
                                                        <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p> <!-- ใช้ Font Awesome -->
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                    });

                    // ซ่อน address-master ถ้ามีการ์ด
                    if (hasAddressCards) {
                        $('.address-master').hide();
                        $('#prev-master').show();
                        $('#next-master').show();
                    } else {
                        $('.address-master').show();
                        $('#prev-master').show();
                        $('#next-master').show();
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error: ' + error);
                }
            });
        }

        // เรียกฟังก์ชันดึงข้อมูลเมื่อหน้าเว็บโหลด
        fetchAddresses();
    });
</script>















{{-- <script>
    $(document).ready(function() {
        // ฟังก์ชันดึงข้อมูลที่อยู่
        function fetchAddresses() {
            $.ajax({
                url: '/get-address-data', // URL ที่เชื่อมต่อกับเส้นทางที่เราสร้างไว้
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    const customerId = {{ $customer->id ?? 'null' }}; // รับค่า ID ของลูกค้า
                    $('#address-list').empty(); // เคลียร์เนื้อหาที่มีอยู่

                    // เช็คว่ามีข้อมูลใน response หรือไม่
                    if (response.length === 0) {
                        $('#address-list').append(`
                            <div class="text-red-500 text-center p-0">
                                <strong hidden>ไม่มีข้อมูลในระบบ</strong>
                            </div>
                        `);
                        // แสดง address-master ถ้าไม่มีข้อมูล
                        $('.address-master').show();
                        return; // ออกจากฟังก์ชันถ้าไม่มีข้อมูล
                    }

                    let hasAddressCards = false; // ตัวแปรตรวจสอบว่ามีการ์ดที่อยู่หรือไม่

                    $.each(response, function(index, address) {
                        // เงื่อนไขในการกรองข้อมูล
                        if (address.DataCus_id == customerId) {
                            hasAddressCards = true; // เปลี่ยนค่าเป็น true เมื่อมีการ์ด

                            // เช็คค่าของแต่ละฟิลด์ว่ามีค่าเป็น null หรือไม่
                            const houseNumber = address.houseNumber_Adds ? address.houseNumber_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const road = address.road_Adds ? address.road_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const village = address.village_Adds ? address.village_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const province = address.houseProvince_Adds ? address.houseProvince_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const postalCode = address.Postal_Adds ? address.Postal_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const addressType = address.Type_Adds ? address.Type_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const houseZone = address.houseZone_Adds ? address.houseZone_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const district = address.houseDistrict_Adds ? address.houseDistrict_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';
                            const tambon = address.houseTambon_Adds ? address.houseTambon_Adds : '<span class="text-red-500">ข้อมูลไม่ระบุ</span>';

                            $('#address-list').append(`
                                <div class="flex flex-col w-full md:w-2/2 p-4 mt-0"> <!-- กำหนดความกว้าง -->
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                                        <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                            <div class="flex justify-between items-center">
                                                <div class="flex-1">
                                                    <h6 class="text-primary font-semibold">
                                                        <i class="fa fa-tag text-secondary"></i> <strong>ประเภท : </strong> ${addressType}
                                                    </h6>
                                                </div>
                                                <div>
                                                    <!--<button class="btn btn-primary edit-address"
                                                            data-id="${address.id}"
                                                            data-house_number="${address.houseNumber_Adds}"
                                                            data-road="${address.road_Adds}"
                                                            data-village="${address.village_Adds}"
                                                            data-province="${address.houseProvince_Adds}"
                                                            data-postal_code="${address.Postal_Adds}"
                                                            onclick="openModal(this)">
                                                        แก้ไข
                                                    </button>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex">
                                                <div class="flex-1">
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input type="hidden" name="DataCus_id" value="${address.DataCus_id}">
                                                                <h5 class="card-title">
                                                                    <i class="fa fa-map-marker-alt text-primary"></i> <strong>ที่อยู่ :  ${houseNumber} </strong>
                                                                </h5>
                                                                <!--<p class="card-text">
                                                                    <i class="fa fa-home text-success"></i> <strong>หมู่บ้าน :  ${village} </strong>
                                                                </p>-->
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="card-text mb-0">
                                                                        <i class="fa fa-city text-info"></i> <strong>จังหวัด :  ${province} </strong>
                                                                    </p>
                                                                    <p class="card-text mb-0">
                                                                        <i class="fa fa-map-signs text-warning"></i> <strong>อำเภอ :  ${district} </strong>
                                                                    </p>
                                                                    <p class="card-text mb-0">
                                                                        <i class="fa fa-map-marker text-info"></i> <strong>ตำบล :  ${tambon} </strong>
                                                                    </p>
                                                                </div>

                                                                <p class="card-text">
                                                                    <i class="fa fa-envelope text-warning"></i> <strong>รหัสไปรษณีย์ :  ${postalCode} </strong>
                                                                </p>

                                                                <p class="card-text">
                                                                    <i class="fa fa-map text-primary"></i> <strong>โซนบ้าน :  ${houseZone} </strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('img/home2.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-t">
                                            <small class="text-muted">
                                                <div class="flex justify-between items-center">
                                                    <div title="4 เดือนที่แล้ว">
                                                        <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ {{ \Carbon\Carbon::parse($customer->created_at)->locale('th')->translatedFormat('j F Y เวลา H:i น.') }}
                                                    </div>
                                                    <div class="text-right">
                                                        <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p> <!-- ใช้ Font Awesome -->
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                    });

                    // ซ่อน address-master ถ้ามีการ์ด
                    if (hasAddressCards) {
                        $('.address-master').hide();
                    } else {
                        $('.address-master').show();
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error: ' + error);
                }
            });
        }

        // เรียกฟังก์ชันดึงข้อมูลเมื่อหน้าเว็บโหลด
        fetchAddresses();
    });
</script> --}}












<script>
    $(document).ready(function() {
        function fetchCareerData() {
            const customerId = '{{ $customer->id ?? '-' }}'; // รับค่า customer ID จาก Blade
            $.ajax({
                url: '/get-career-data/' + customerId,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    let html = '';
                    let hasCareerCards = false; // ตัวแปรสำหรับเช็คว่ามีการ์ดหรือไม่

                    if (data.careers && data.careers.length > 0) {
                        hasCareerCards = true; // พบการ์ดเพิ่มค่าเป็น true.

                        $.each(data.careers, function(index, career) {
                            html += `
                            <div class="flex space-x-4">
                                <div class="w-full mt-0">
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
                                        <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                            <div class="flex justify-between items-center">
                                                <div class="flex-1">
                                                    <h6 class="text-primary font-semibold">
                                                        <i class="fas fa-tag"></i> ${career.Career_Cus}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex">
                                                <div class="flex-1">
                                                    <p class="font-semibold text-truncate">
                                                        <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
                                                        <!--<i class="fas fa-info-circle text-success mb-1 h-5"></i> : รายละเอียดอาชีพ : ${career.IncomeNote_Cus}<br>-->
                                                        <i class="fas fa-bookmark text-success mb-1 h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br>
                                                        <i class="fas fa-table text-success mb-1 h-5"></i> : รายได้ : ${career.Income_Cus}<br>
                                                        <i class="fas fa-briefcase text-success mb-1 h-5"></i> : อาชีพ : ${career.Career_Cus}<br>
                                                        <i class="fas fa-building text-success mb-1 h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br>
                                                        <i class="fas fa-money-bill text-success mb-0 h-5"></i> : เงินเดือน : ${career.Income_Cus}
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('img/career.jpg') }}" alt="${career.DetailCareer_Cus}" class="w-36 h-20">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-t">
                                            <small class="text-muted">
                                                <div class="flex justify-between items-center">
                                                    <div title="${career.created_at}">
                                                        <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ
                                                        ${new Date(career.created_at).toLocaleDateString('th-TH', {
                                                            day: 'numeric',
                                                            month: 'long',
                                                            year: 'numeric'
                                                        })} เวลา ${new Date(career.created_at).toLocaleTimeString('th-TH', {
                                                            hour: '2-digit',
                                                            minute: '2-digit',
                                                            hour12: false // ใช้ 24 ชั่วโมง
                                                        })} น.
                                                    </div>
                                                    <div class="text-right">
                                                        <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p>
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                        });
                    } else {
                        html = `<p class="text-center text-muted" hidden>ไม่พบข้อมูลอาชีพ</p>`; // ข้อความเมื่อไม่มีข้อมูลอาชีพ
                    }

                    $('#career-container').html(html);

                    // ซ่อน career-master ถ้ามีการ์ด
                    if (hasCareerCards) {
                        $('.career-master').hide();
                        $('#prev-master-2').show();
                        $('#next-master-2').show();
                    } else {
                        $('.career-master').show();
                        $('#prev-master-2').hide();
                        $('#next-master-2').hide();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                }
            });
        }

        fetchCareerData();
    });
</script>






{{-- <script>
    $(document).ready(function() {
        function fetchCareerData() {
            const customerId = '{{ $customer->id ?? '-' }}'; // รับค่า customer ID จาก Blade
            $.ajax({
                url: '/get-career-data/' + customerId,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    let html = '';
                    let hasAddressCards = false; // ตัวแปรสำหรับเช็คว่ามีการ์ดหรือไม่

                    $.each(data, function(index, career) {
                        // ตรวจสอบว่า DataCus_id ตรงกับ customer ID หรือไม่
                        if (career.DataCus_id == customerId) {
                            hasAddressCards = true; // พบการ์ดเพิ่มค่าเป็น true
                            html += `
                            <div class="flex space-x-4">
                                <div class="w-full mt-[-30]">
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
                                        <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                            <div class="flex justify-between items-center">
                                                <div class="flex-1">
                                                    <h6 class="text-primary font-semibold">
                                                        <i class="fas fa-tag"></i> ${career.Career_Cus}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex">
                                                <div class="flex-1">
                                                    <p class="font-semibold text-truncate">
                                                        <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
                                                        <i class="fas fa-info-circle text-success h-5"></i> : รายละเอียดอาชีพ : ${career.IncomeNote_Cus}<br>
                                                        <i class="fas fa-bookmark text-success h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br>
                                                        <i class="fas fa-table text-success h-5"></i> : รายได้ : ${career.Income_Cus}<br>
                                                        <i class="fas fa-briefcase text-success h-5"></i> : อาชีพ : ${career.Career_Cus}<br> <!-- แสดง Career_Cus -->
                                                        <i class="fas fa-building text-success h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br> <!-- แสดง Workplace_Cus -->
                                                        <i class="fas fa-money-bill text-success h-5"></i> : เงินเดือน : ${career.Income_Cus} <!-- แสดง Income_Cus -->

                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('img/career.jpg') }}" alt="${career.DetailCareer_Cus}" class="w-36 h-20">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-t">
                                            <small class="text-muted">
                                                <div class="flex justify-between items-center">
                                                    <div title="${career.created_at}">
                                                        <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ
                                                        ${new Date(career.created_at).toLocaleDateString('th-TH', {
                                                            day: 'numeric',
                                                            month: 'long',
                                                            year: 'numeric'
                                                        })} เวลา ${new Date(career.created_at).toLocaleTimeString('th-TH', {
                                                            hour: '2-digit',
                                                            minute: '2-digit',
                                                            hour12: false // ใช้ 24 ชั่วโมง
                                                        })} น.
                                                    </div>

                                                    <div class="text-right">
                                                        <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p>
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                        }
                    });

                    $('#career-container').html(html);

                    // ซ่อน career-master ถ้ามีการ์ด
                    if (hasAddressCards) {
                        $('.career-master').hide();
                    } else {
                        $('.career-master').show();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                }
            });
        }

        fetchCareerData();
    });
</script> --}}



{{-- <button class="bg-orange-500 text-white py-2 px-4 rounded"
data-id="${address.id}" onclick="openModal_Edit_address_customer(this)">
แก้ไข
</button> --}}






{{-- <script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // ตรวจสอบการคลิกปุ่มบันทึก
        $('#submitBtnCareer').on('click', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มตามปกติ
            validateForm(); // เรียกใช้ฟังก์ชัน validateForm
        });

        function validateForm() {
            var isValid = true; // เริ่มต้นสถานะเป็นจริง
            $('.error').remove(); // ลบข้อความแสดงข้อผิดพลาดก่อนหน้า

            // ตรวจสอบฟิลด์ที่จำเป็น
            const fields = [{
                    id: '#Career_Cus',
                    message: 'กรุณาเลือกอาชีพ'
                },
                {
                    id: '#Income_Cus',
                    message: 'กรุณากรอกรายได้'
                },
                {
                    id: '#BeforeIncome_Cus',
                    message: 'กรุณากรอกหักค่าใช้จ่าย'
                },
                {
                    id: '#AfterIncome_Cus',
                    message: 'กรุณากรอกคงเหลือ'
                },
                {
                    id: '#Workplace_Cus',
                    message: 'กรุณากรอกสถานที่ทำงาน'
                },
                {
                    id: '#Coordinates',
                    message: 'กรุณากรอกพิกัด'
                },
                {
                    id: '#IncomeNote_Cus',
                    message: 'กรุณากรอกรายละเอียด'
                }
            ];

            fields.forEach(function(field) {
                if ($(field.id).val().trim() === '') {
                    $(field.id).addClass('border-red-500');
                    $(field.id).after(
                        `<span class="error text-red-500 text-xs flex items-center mt-1">
                            <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
                        </span>`
                    );
                    isValid = false;
                } else {
                    $(field.id).removeClass('border-red-500');
                }
            });

            if (!isValid) {
                setTimeout(function() {
                    $('.error').fadeOut(1000, function() {
                        $(this).remove();
                    });
                }, 2000);
                return; // หยุดการทำงานถ้าฟอร์มไม่ valid
            }

            // หากฟอร์ม valid ส่งข้อมูล
            submitForm();
        }

        // function submitForm() {
        //     var formData = $('#careerForm').serialize(); // แปลงฟอร์มเป็นข้อมูลที่สามารถส่งได้

        //     $.ajax({
        //         url: '{{ route('career.store') }}', // URL ที่ถูกต้อง
        //         method: 'POST',
        //         data: formData,
        //         success: function(response) {
        //             Swal.fire({
        //                 title: 'สำเร็จ!',
        //                 text: 'สร้างอาชีพลูกค้าสำเร็จแล้ว!',
        //                 icon: 'success',
        //                 confirmButtonText: 'ตกลง'
        //             }).then(() => {
        //                 // location.reload(); // รีเฟรชหน้าหลังจากแสดงข้อความสำเร็จ
        //                 fetchCareerData();
        //             });
        //             $('#careerForm')[0].reset(); // รีเซ็ตฟอร์ม
        //         },
        //         error: function(xhr) {
        //             var errors = xhr.responseJSON.errors;
        //             if (errors) {
        //                 $.each(errors, function(key, value) {
        //                     Swal.fire({
        //                         title: 'ข้อผิดพลาด!',
        //                         text: value[0],
        //                         icon: 'error',
        //                         confirmButtonText: 'ตกลง'
        //                     });
        //                 });
        //             } else {
        //                 Swal.fire({
        //                     title: 'ข้อผิดพลาด!',
        //                     text: 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง.',
        //                     icon: 'error',
        //                     confirmButtonText: 'ตกลง'
        //                 });
        //             }
        //         }
        //     });
        // }



        // หากต้องการจัดการกับปุ่มยกเลิก
        $('#closeModal_career_button').on('click', function() {
            // ปิดโมดัล หรือทำการดำเนินการอื่น ๆ ที่ต้องการ
        });
    });
</script> --}}
