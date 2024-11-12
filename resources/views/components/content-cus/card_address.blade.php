<script>
    $(document).ready(function() {
        $('head').append(`

         @include('components.content-button.css_button_select')

        `);
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
                                <div class="flex flex-col w-full p-2 mt-0">
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                                        <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
                                            <div class="flex justify-between items-center">
                                                <h6 class="text-primary font-semibold"><i class="fa fa-tag text-secondary"></i>
                                                    <strong>ประเภท : </strong> ${addressType}
                                                </h6>

                                                <label class="popup">
                                                    <input type="checkbox">
                                                    <div class="burger" tabindex="0">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <nav class="popup-window">
                                                        <legend>Actions</legend>
                                                        <ul>
                                                        <li>
                                                            <button data-id="${address.id}" onclick="openModal_Show_address_customer(this)">
                                                            <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                            <span>แสดง</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-id="${address.id}" onclick="openModal_Edit_address_customer(this)">
                                                            <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                                                            </svg>
                                                            <span>แก้ไข</span>
                                                            </button>
                                                        </li>
                                                        <hr>
                                                        <li>
                                                            <button class="delete-btn" data-id="${address.id}">
                                                                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                                    <line y2="18" x2="6" y1="6" x1="18"></line>
                                                                    <line y2="18" x2="18" y1="6" x1="6"></line>
                                                                </svg>
                                                                <span>ลบ</span>
                                                            </button>
                                                        </li>
                                                        </ul>
                                                    </nav>
                                                </label>

                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex">
                                                <div class="flex-1">
                                                    <p class="mb-1"><strong><i class="fas fa-home"></i> ที่อยู่ : </strong>${houseNumber}</p>
                                                    <p class="mb-1"><strong><i class="fas fa-map-marker-alt"></i> จังหวัด : </strong>${province}</p>
                                                    <p class="mb-1"><strong><i class="fas fa-map"></i> อำเภอ : </strong>${district}</p>
                                                    <p class="mb-1"><strong><i class="fas fa-map-signs"></i> ตำบล : </strong>${tambon}</p>
                                                    <!--<p class="mb-1"><strong><i class="fas fa-envelope"></i> รหัสไปรษณีย์ : </strong>${postalCode}</p>
                                                    <p class="mb-1"><strong><i class="fa fa-map text-primary"></i> โซนบ้าน : </strong>${houseZone}</p>-->
                                                </div>

                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('img/home2.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-t">
                                            <small class="text-muted">
                                                <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ ${new Date(address.created_at).toLocaleDateString('th-TH', { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' })} น.
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

    });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.delete-btn', function() {
        var addressId = $(this).data('id');

        // ใช้ SweetAlert2 เพื่อยืนยันการลบ
        Swal.fire({
            title: 'แน่ใจหรือไม่?',
            text: "ต้องการลบข้อมูลที่อยู่นี้?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'ยืนยันลบข้อมูล!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // ถ้าผู้ใช้คลิก "ใช่, ลบเลย!" ให้ส่ง AJAX Request
                $.ajax({
                    url: '/delete-address',
                    type: 'POST',
                    data: {
                        id: addressId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสำเร็จ',
                                text: response.message
                            });
                            // ซ่อนรายการที่ถูกลบ
                            $('button[data-id="' + addressId + '"]').closest('li').hide();
                            // เรียกฟังก์ชัน fetchAddresses เพื่อรีเฟรชข้อมูล
                            fetchAddresses();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: response.message
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถลบข้อมูลได้'
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'การลบข้อมูลถูกยกเลิก',
                    text: 'คุณไม่ได้ลบข้อมูล'
                });
            }
        });
    });

    // ฟังก์ชันเพื่อดึงข้อมูลหลังจากลบแล้ว (กรุณาเขียนให้เหมาะสมกับโปรเจกต์ของคุณ)
    function fetchAddresses() {
        // โค้ดสำหรับดึงข้อมูลใหม่
    }
</script>


{{-- <script>
    $(document).on('click', '.delete-btn', function() {
        var addressId = $(this).data('id');

        $.ajax({
            url: '/delete-address',
            type: 'POST',
            data: {
                id: addressId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    // ซ่อนข้อมูลที่ถูกลบออกไปจาก UI (เช่น ใช้ .hide() หรือแทนที่ด้วยข้อมูลว่าง)
                    $('button[data-id="' + addressId + '"]').closest('li').hide();
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('เกิดข้อผิดพลาด');
            }
        });
    });
</script> --}}




{{-- // ฟังก์ชันสำหรับเปิด Modal เพื่อเพิ่ม/แก้ไขที่อยู่
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
// } --}}


