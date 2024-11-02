<script>
    $(document).ready(function() {
        $('head').append(`
            <style>
                .popup {
                --burger-line-width: 1.125em;
                --burger-line-height: 0.125em;
                --burger-offset: 0.625em;
                --burger-bg: rgba(0, 0, 0, .15);
                --burger-color: #333;
                --burger-line-border-radius: 0.1875em;
                --burger-diameter: 2.125em;
                --burger-btn-border-radius: calc(var(--burger-diameter) / 2);
                --burger-line-transition: .3s;
                --burger-transition: all .1s ease-in-out;
                --burger-hover-scale: 1.1;
                --burger-active-scale: .95;
                --burger-enable-outline-color: var(--burger-bg);
                --burger-enable-outline-width: 0.125em;
                --burger-enable-outline-offset: var(--burger-enable-outline-width);
                --nav-padding-x: 0.25em;
                --nav-padding-y: 0.625em;
                --nav-border-radius: 0.375em;
                --nav-border-color: #ccc;
                --nav-border-width: 0.0625em;
                --nav-shadow-color: rgba(0, 0, 0, .2);
                --nav-shadow-width: 0 1px 5px;
                --nav-bg: #eee;
                --nav-font-family: Menlo, Roboto Mono, monospace;
                --nav-default-scale: .8;
                --nav-active-scale: 1;
                --nav-position-left: 0;
                --nav-position-right: unset;
                --nav-title-size: 0.625em;
                --nav-title-color: #777;
                --nav-title-padding-x: 1rem;
                --nav-title-padding-y: 0.25em;
                --nav-button-padding-x: 1rem;
                --nav-button-padding-y: 0.375em;
                --nav-button-border-radius: 0.375em;
                --nav-button-font-size: 12px;
                --nav-button-hover-bg: #6495ed;
                --nav-button-hover-text-color: #fff;
                --nav-button-distance: 0.875em;
                --underline-border-width: 0.0625em;
                --underline-border-color: #ccc;
                --underline-margin-y: 0.3125em;
                }

                .popup {
                display: inline-block;
                text-rendering: optimizeLegibility;
                position: relative;
                }

                .popup input {
                display: none;
                }

                .burger {
                display: flex;
                position: relative;
                align-items: center;
                justify-content: center;
                background: var(--burger-bg);
                width: var(--burger-diameter);
                height: var(--burger-diameter);
                border-radius: var(--burger-btn-border-radius);
                border: none;
                cursor: pointer;
                overflow: hidden;
                transition: var(--burger-transition);
                outline: var(--burger-enable-outline-width) solid transparent;
                outline-offset: 0;
                }

                .burger span {
                height: var(--burger-line-height);
                width: var(--burger-line-width);
                background: var(--burger-color);
                border-radius: var(--burger-line-border-radius);
                position: absolute;
                transition: var(--burger-line-transition);
                }

                .burger span:nth-child(1) {
                top: var(--burger-offset);
                }

                .burger span:nth-child(2) {
                bottom: var(--burger-offset);
                }

                .burger span:nth-child(3) {
                top: 50%;
                transform: translateY(-50%);
                }

                .popup-window {
                transform: scale(var(--nav-default-scale));
                visibility: hidden;
                opacity: 0;
                position: absolute;
                padding: var(--nav-padding-y) var(--nav-padding-x);
                background: var(--nav-bg);
                font-family: var(--nav-font-family);
                color: var(--nav-text-color);
                border-radius: var(--nav-border-radius);
                box-shadow: var(--nav-shadow-width) var(--nav-shadow-color);
                border: var(--nav-border-width) solid var(--nav-border-color);
                top: calc(var(--burger-diameter) + var(--burger-enable-outline-width) + var(--burger-enable-outline-offset));
                left: var(--nav-position-left);
                right: var(--nav-position-right);
                transition: var(--burger-transition);
                }

                .popup-window legend {
                padding: var(--nav-title-padding-y) var(--nav-title-padding-x);
                margin: 0;
                color: var(--nav-title-color);
                font-size: var(--nav-title-size);
                text-transform: uppercase;
                }

                .popup-window ul {
                margin: 0;
                padding: 0;
                list-style-type: none;
                }

                .popup-window ul button {
                outline: none;
                width: 100%;
                border: none;
                background: none;
                display: flex;
                align-items: center;
                color: var(--burger-color);
                font-size: var(--nav-button-font-size);
                padding: var(--nav-button-padding-y) var(--nav-button-padding-x);
                white-space: nowrap;
                border-radius: var(--nav-button-border-radius);
                cursor: pointer;
                column-gap: var(--nav-button-distance);
                }

                .popup-window ul li:nth-child(1) svg,
                .popup-window ul li:nth-child(2) svg {
                color: cornflowerblue;
                }

                .popup-window ul li:nth-child(4) svg,
                .popup-window ul li:nth-child(5) svg {
                color: rgb(153, 153, 153);
                }

                .popup-window ul li:nth-child(7) svg {
                color: red;
                }

                .popup-window hr {
                margin: var(--underline-margin-y) 0;
                border: none;
                border-bottom: var(--underline-border-width) solid var(--underline-border-color);
                }

                .popup-window ul button:hover,
                .popup-window ul button:focus-visible,
                .popup-window ul button:hover svg,
                .popup-window ul button:focus-visible svg {
                color: var(--nav-button-hover-text-color);
                background: var(--nav-button-hover-bg);
                }

                .burger:hover {
                transform: scale(var(--burger-hover-scale));
                }

                .burger:active {
                transform: scale(var(--burger-active-scale));
                }

                .burger:focus:not(:hover) {
                outline-color: var(--burger-enable-outline-color);
                outline-offset: var(--burger-enable-outline-offset);
                }

                .popup input:checked + .burger span:nth-child(1) {
                top: 50%;
                transform: translateY(-50%) rotate(45deg);
                }

                .popup input:checked + .burger span:nth-child(2) {
                bottom: 50%;
                transform: translateY(50%) rotate(-45deg);
                }

                .popup input:checked + .burger span:nth-child(3) {
                transform: translateX(calc(var(--burger-diameter) * -1 - var(--burger-line-width)));
                }

                .popup input:checked ~ nav {
                transform: scale(var(--nav-active-scale));
                visibility: visible;
                opacity: 1;
                }
            </style>
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
                                                            <button>
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


