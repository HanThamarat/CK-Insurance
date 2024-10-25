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
                url: '/get-address-data/' +
                customerId, // URL ที่เชื่อมต่อกับเส้นทางที่เราสร้างไว้พร้อม ID
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
        // window.openModal_Edit_address_customer = function(button) {
        //     const addressId = $(button).data('id');

        //     // โค้ดสำหรับเปิด Modal และโหลดข้อมูลที่อยู่ที่ต้องการแก้ไข

        //     // ดึงข้อมูลที่อยู่จากเซิร์ฟเวอร์เพื่อแสดงใน Modal
        //     $.ajax({
        //         url: '/get-address/' + addressId, // URL ที่เชื่อมต่อกับเส้นทางที่เราสร้างไว้
        //         type: 'GET',
        //         dataType: 'json',
        //         success: function(data) {
        //             // แสดงข้อมูลใน Modal
        //             $('#address-modal').modal('show'); // เปิด Modal
        //             $('#modal-houseNumber').val(data.houseNumber_Adds); // แสดงข้อมูลที่อยู่
        //             $('#modal-province').val(data.houseProvince_Adds); // แสดงข้อมูลจังหวัด
        //             // ... ต่อไปสำหรับข้อมูลอื่น ๆ ที่ต้องการแสดง
        //         },
        //         error: function(xhr) {
        //             Swal.fire({
        //                 title: 'ข้อผิดพลาด',
        //                 text: 'ไม่สามารถดึงข้อมูลที่อยู่ได้ กรุณาลองใหม่',
        //                 icon: 'error',
        //                 confirmButtonText: 'ตกลง'
        //             });
        //         }
        //     });
        // }

        // // ฟังก์ชันหลังจากทำการบันทึกหรือแก้ไขข้อมูลที่อยู่
        // function saveAddress() {
        //     // โค้ดสำหรับบันทึกหรืออัปเดตที่อยู่ที่นี่
        //     // ... หลังจากบันทึกเสร็จ ให้เรียก fetchAddresses() เพื่อดึงข้อมูลใหม่
        //     fetchAddresses(); // เรียกใช้อีกครั้งเพื่ออัปเดตข้อมูล
        // }
    });
</script>



