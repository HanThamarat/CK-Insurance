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
                                <div class="flex flex-col w-full p-2 mt-0">
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

                                                <!--<div class="group grid grid-cols-3 gap-0 hover:gap-2 duration-500 relative shadow-sm">
                                                    <h1 class="absolute z-10 group-hover:hidden duration-200 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                                        <svg viewBox="0 0 24 24" fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 h-7 text-gray-800">
                                                            <path d="M5 7h14M5 12h14M5 17h14" stroke-width="2" stroke-linecap="round" stroke="currentColor"></path>
                                                        </svg>
                                                    </h1>

                                                    <a href="#">
                                                        <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="group-hover:rounded-lg group-hover:opacity-1 p-3 bg-white/50 hover:bg-black backdrop-blur-md group-hover:shadow-xl rounded-bl-lg flex justify-center items-center w-full h-full text-black hover:text-white duration-200">
                                                            <path clip-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" fill-rule="evenodd" class="opacity-0 group-hover:opacity-100 duration-200"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="#">
                                                        <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="group-hover:rounded-lg group-hover:opacity-1 p-3 bg-white/50 hover:bg-blue-600 backdrop-blur-md group-hover:shadow-xl flex justify-center items-center w-full h-full text-blue-600 hover:text-white duration-200">
                                                            <path clip-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" fill-rule="evenodd" class="opacity-0 group-hover:opacity-100 duration-200"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="#">
                                                        <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="group-hover:rounded-lg group-hover:opacity-1 p-3 bg-white/50 hover:bg-red-500 backdrop-blur-md group-hover:shadow-xl rounded-br-lg flex justify-center items-center w-full h-full text-red-500 hover:text-white duration-200">
                                                            <path clip-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" fill-rule="evenodd" class="opacity-0 group-hover:opacity-100 duration-200"></path>
                                                        </svg>
                                                    </a>
                                                </div>-->
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


