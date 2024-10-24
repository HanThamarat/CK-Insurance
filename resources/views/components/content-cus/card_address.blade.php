<script>
    $(document).ready(function() {
        // ฟังก์ชันดึงข้อมูลที่อยู่
        window.fetchAddresses = function() {
            const customerId = {{ $customer->id ?? 'null' }}; // รับค่า ID ของลูกค้า

            if (!customerId) {
                console.log('Customer ID is not available');
                return;
            }

            $.ajax({
                url: '/get-address-data/' + customerId, // URL ที่เชื่อมต่อกับเส้นทางที่เราสร้างไว้พร้อม ID
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#address-list').empty(); // เคลียร์เนื้อหาที่มีอยู่

                    if (response.addresses.length === 0) {
                        $('#address-list').append(`
                            <div class="text-center p-2">
                                <strong hidden>ไม่มีข้อมูลที่อยู่ในระบบ</strong>
                            </div>
                        `);
                        $('.address-master').show();
                        $('#prev-master, #next-master').hide();
                        return;
                    }

                    let hasAddressCards = false;

                    $.each(response.addresses, function(index, address) {
                        if (address.DataCus_id == customerId) {
                            hasAddressCards = true;

                            const houseNumber = address.houseNumber_Adds || 'ไม่ระบุ';
                            const road = address.road_Adds || 'ไม่ระบุ';
                            const village = address.village_Adds || 'ไม่ระบุ';
                            const province = address.houseProvince_Adds || 'ไม่ระบุ';
                            const postalCode = address.Postal_Adds || 'ไม่ระบุ';
                            const addressType = address.Type_Adds || 'ไม่ระบุ';
                            const houseZone = address.houseZone_Adds || 'ไม่ระบุ';
                            const district = address.houseDistrict_Adds || 'ไม่ระบุ';
                            const tambon = address.houseTambon_Adds || 'ไม่ระบุ';

                            $('#address-list').append(`
                                <div class="flex flex-col w-full p-2 mt-1">
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                                        <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
                                            <div class="flex justify-between items-center">
                                                <h6 class="text-primary font-semibold"><i class="fa fa-tag text-secondary"></i>
                                                    <strong>ประเภท : </strong> ${addressType}
                                                </h6>

                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex">
                                                <div class="flex-1">
                                                    <p><strong><i class="fas fa-home"></i> ที่อยู่ : </strong>${houseNumber}</p>
                                                    <p><strong><i class="fas fa-map-marker-alt"></i> จังหวัด : </strong>${province}</p>
                                                    <p><strong><i class="fas fa-map"></i> อำเภอ : </strong>${district}</p>
                                                    <p><strong><i class="fas fa-map-signs"></i> ตำบล : </strong>${tambon}</p>
                                                    <p><strong><i class="fas fa-envelope"></i> รหัสไปรษณีย์ : </strong>${postalCode}</p>
                                                    <p><strong><i class="fa fa-map text-primary"></i> โซนบ้าน : </strong>${houseZone}</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('img/home2.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-t">
                                            <small class="text-muted">
                                                <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ {{ \Carbon\Carbon::parse($customer->created_at)->locale('th')->translatedFormat('j F Y เวลา H:i น.') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                    });

                    if (hasAddressCards) {
                        $('.address-master').hide();
                        $('#prev-master, #next-master').show();
                    } else {
                        $('.address-master').show();
                        $('#prev-master, #next-master').hide();
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'ข้อผิดพลาด',
                        text: 'ไม่สามารถดึงข้อมูลที่อยู่ได้ กรุณาลองใหม่',
                        icon: 'error',
                        confirmButtonText: 'ตกลง'
                    });
                }
            });
        }

        // เรียกฟังก์ชันดึงข้อมูลเมื่อหน้าเว็บโหลด
        fetchAddresses();

        // ฟังก์ชันสำหรับเปิด Modal เพื่อเพิ่ม/แก้ไขที่อยู่
        window.openModal_Edit_address_customer = function(button) {
            const addressId = $(button).data('id');

            // โค้ดสำหรับเปิด Modal และโหลดข้อมูลที่อยู่ที่ต้องการแก้ไข

            // ดึงข้อมูลที่อยู่จากเซิร์ฟเวอร์เพื่อแสดงใน Modal
            $.ajax({
                url: '/get-address/' + addressId, // URL ที่เชื่อมต่อกับเส้นทางที่เราสร้างไว้
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // แสดงข้อมูลใน Modal
                    $('#address-modal').modal('show'); // เปิด Modal
                    $('#modal-houseNumber').val(data.houseNumber_Adds); // แสดงข้อมูลที่อยู่
                    $('#modal-province').val(data.houseProvince_Adds); // แสดงข้อมูลจังหวัด
                    // ... ต่อไปสำหรับข้อมูลอื่น ๆ ที่ต้องการแสดง
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'ข้อผิดพลาด',
                        text: 'ไม่สามารถดึงข้อมูลที่อยู่ได้ กรุณาลองใหม่',
                        icon: 'error',
                        confirmButtonText: 'ตกลง'
                    });
                }
            });
        }

        // ฟังก์ชันหลังจากทำการบันทึกหรือแก้ไขข้อมูลที่อยู่
        function saveAddress() {
            // โค้ดสำหรับบันทึกหรืออัปเดตที่อยู่ที่นี่
            // ... หลังจากบันทึกเสร็จ ให้เรียก fetchAddresses() เพื่อดึงข้อมูลใหม่
            fetchAddresses(); // เรียกใช้อีกครั้งเพื่ออัปเดตข้อมูล
        }
    });
</script>
