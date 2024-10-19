<script>
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
                            <div class="text-red-500 text-center p-4">
                                <strong>ไม่มีข้อมูลในระบบ</strong>
                            </div>
                        `);
                        return; // ออกจากฟังก์ชันถ้าไม่มีข้อมูล
                    }

                    $.each(response, function(index, address) {
                        // เงื่อนไขในการกรองข้อมูล
                        if (address.DataCus_id == customerId) {
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
                                <div class="flex flex-col w-full md:w-2/2 p-2 mt-[-50]"> <!-- กำหนดความกว้าง -->
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                                        <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                            <div class="flex justify-between items-center">
                                                <div class="flex-1">
                                                    <h6 class="text-primary font-semibold">
                                                        <i class="fa fa-tag text-secondary"></i> <strong>ประเภท : </strong> ${addressType}
                                                    </h6>
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
                                                                    <i class="fa fa-map-marker-alt text-primary"></i> <strong>ที่อยู่ : </strong> ${houseNumber}
                                                                </h5>
                                                                <p class="card-text">
                                                                    <i class="fa fa-home text-success"></i> <strong>หมู่บ้าน : </strong> ${village}
                                                                </p>
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="card-text mb-0">
                                                                        <i class="fa fa-city text-info"></i> <strong>จังหวัด : </strong> ${province}
                                                                    </p>
                                                                    <p class="card-text mb-0">
                                                                        <i class="fa fa-map-signs text-warning"></i> <strong>อำเภอ : </strong> ${district}
                                                                    </p>
                                                                    <p class="card-text mb-0">
                                                                        <i class="fa fa-map-marker text-info"></i> <strong>ตำบล : </strong> ${tambon}
                                                                    </p>
                                                                </div>

                                                                <p class="card-text">
                                                                    <i class="fa fa-envelope text-warning"></i> <strong>รหัสไปรษณีย์ : </strong> ${postalCode}
                                                                </p>

                                                                <p class="card-text">
                                                                    <i class="fa fa-map text-primary"></i> <strong>โซนบ้าน : </strong> ${houseZone}
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
                                                        <i class="fas fa-clock"></i> ${address.created_at}
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
