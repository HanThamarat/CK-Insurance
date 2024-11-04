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


        function fetchCareerData() {
            const customerId = $('#dataCusIdField').val(); // รับ ID ลูกค้า

            $.ajax({
                url: '/get-career-data/' + customerId,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    let html = '';
                    let hasCareerCards = false; // เช็คว่ามีการ์ดหรือไม่

                    if (data.careers && data.careers.length > 0) {
                        hasCareerCards = true; // พบการ์ดเพิ่มค่าเป็น true

                        $.each(data.careers, function(index, career) {
                            html += `
                        <div class="flex space-x-4 p-2">
                            <div class="w-full mt-0">
                                <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
                                    <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                        <div class="flex justify-between items-center">
                                            <div class="flex-1">
                                                <h6 class="text-primary font-semibold">
                                                    <i class="fas fa-tag"></i> ${career.Career_Cus}
                                                </h6>
                                            </div>
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
                                                        <button data-id="${career.id}"
                                                                data-Status_Cus="${career.Status_Cus}"
                                                                data-DataCus_id="${career.DataCus_id}"
                                                                data-Career_Cus="${career.Career_Cus}"
                                                                data-Workplace_Cus="${career.Workplace_Cus}"
                                                                data-Income_Cus="${career.Income_Cus}"
                                                                data-BeforeIncome_Cus="${career.BeforeIncome_Cus}"
                                                                data-AfterIncome_Cus="${career.AfterIncome_Cus}"
                                                                data-Coordinates="${career.Coordinates}"
                                                                data-IncomeNote_Cus="${career.IncomeNote_Cus}"
                                                                onclick="openModal_Show_career_customer(this)">
                                                        <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                        <span>แสดง</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-id="${career.id}"
                                                                data-Status_Cus="${career.Status_Cus}"
                                                                data-DataCus_id="${career.DataCus_id}"
                                                                data-Career_Cus="${career.Career_Cus}"
                                                                data-Workplace_Cus="${career.Workplace_Cus}"
                                                                data-Income_Cus="${career.Income_Cus}"
                                                                data-BeforeIncome_Cus="${career.BeforeIncome_Cus}"
                                                                data-AfterIncome_Cus="${career.AfterIncome_Cus}"
                                                                data-Coordinates="${career.Coordinates}"
                                                                data-IncomeNote_Cus="${career.IncomeNote_Cus}"
                                                                onclick="openModal_Edit_career_customer(this)">
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
                                                <p class="text-truncate">
                                                    <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
                                                    <i class="fas fa-bookmark text-success mb-1 h-5"></i>  <strong>สถานที่ทำงาน</strong> : ${career.Workplace_Cus}<br>
                                                    <i class="fas fa-table text-success mb-1 h-5"></i>  <strong>รายได้</strong> : ${career.Income_Cus}<br>
                                                    <i class="fas fa-briefcase text-success mb-1 h-5"></i>  <strong>อาชีพ</strong> : ${career.Career_Cus}<br>
                                                    <!--<i class="fas fa-building text-success mb-1 h-5"></i>  <strong>สถานที่ทำงาน</strong> : ${career.Workplace_Cus}<br>-->
                                                    <i class="fas fa-money-bill text-success mb-0 h-5"></i>  <strong>เงินเดือน</strong> : ${career.Income_Cus}
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
                        html = `<p class="text-center text-muted">ไม่พบข้อมูลอาชีพ</p>`;
                    }

                    $('#career-container').html(html);

                    // ซ่อน career-master ถ้ามีการ์ด
                    if (hasCareerCards) {
                        $('.career-master').hide();
                    } else {
                        $('.career-master').show();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                    alert('ไม่สามารถดึงข้อมูลได้ โปรดลองอีกครั้ง');
                }
            });
        }

        fetchCareerData();
    });
</script>












{{-- // ฟังก์ชันสำหรับดึงข้อมูลอาชีพ
// function fetchCareerData() {
//     const customerId = $('#dataCusIdField').val(); // รับ ID ลูกค้า
//     // const customerId = '{{ $customer->id ?? '-' }}'; // รับค่า customer ID จาก Blade
//     $.ajax({
//         url: '/get-career-data/' + customerId,
//         method: 'GET',
//         dataType: 'json',
//         success: function(data) {
//             let html = '';
//             let hasCareerCards = false; // ตัวแปรสำหรับเช็คว่ามีการ์ดหรือไม่

//             if (data.careers && data.careers.length > 0) {
//                 hasCareerCards = true; // พบการ์ดเพิ่มค่าเป็น true

//                 $.each(data.careers, function(index, career) {
//                     html += `
//                     <div class="flex space-x-4 p-2">
//                         <div class="w-full mt-0">
//                             <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
//                                 <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
//                                     <div class="flex justify-between items-center">
//                                         <div class="flex-1">
//                                             <h6 class="text-primary font-semibold">
//                                                 <i class="fas fa-tag"></i> ${career.Career_Cus}
//                                             </h6>
//                                         </div>
//                                         <label class="popup">
//                                             <input type="checkbox">
//                                             <div class="burger" tabindex="0">
//                                                 <span></span>
//                                                 <span></span>
//                                                 <span></span>
//                                             </div>
//                                             <nav class="popup-window">
//                                                 <legend>Actions</legend>
//                                                 <ul>
//                                                 <li>
//                                                     <button data-id="${career.id}"
//                                                             data-Status_Cus="${career.Status_Cus}"
//                                                             data-DataCus_id="${career.DataCus_id}"
//                                                             data-Career_Cus="${career.Career_Cus}"
//                                                             data-Workplace_Cus="${career.Workplace_Cus}"
//                                                             data-Income_Cus="${career.Income_Cus}"
//                                                             data-BeforeIncome_Cus="${career.BeforeIncome_Cus}"
//                                                             data-AfterIncome_Cus="${career.AfterIncome_Cus}"
//                                                             data-Coordinates="${career.Coordinates}"
//                                                             data-IncomeNote_Cus="${career.IncomeNote_Cus}"
//                                                             onclick="openModal_Show_career_customer(this)">
//                                                     <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
//                                                         <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
//                                                         <circle cx="12" cy="12" r="3"></circle>
//                                                     </svg>
//                                                     <span>แสดง</span>
//                                                     </button>
//                                                 </li>
//                                                 <li>
//                                                     <button data-id="${career.id}"
//                                                             data-Status_Cus="${career.Status_Cus}"
//                                                             data-DataCus_id="${career.DataCus_id}"
//                                                             data-Career_Cus="${career.Career_Cus}"
//                                                             data-Workplace_Cus="${career.Workplace_Cus}"
//                                                             data-Income_Cus="${career.Income_Cus}"
//                                                             data-BeforeIncome_Cus="${career.BeforeIncome_Cus}"
//                                                             data-AfterIncome_Cus="${career.AfterIncome_Cus}"
//                                                             data-Coordinates="${career.Coordinates}"
//                                                             data-IncomeNote_Cus="${career.IncomeNote_Cus}"
//                                                             onclick="openModal_Edit_career_customer(this)">
//                                                             <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
//                                                         <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
//                                                     </svg>
//                                                     <span>แก้ไข</span>
//                                                     </button>
//                                                 </li>
//                                                 <hr>
//                                                 <li>
//                                                     <button>
//                                                     <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
//                                                         <line y2="18" x2="6" y1="6" x1="18"></line>
//                                                         <line y2="18" x2="18" y1="6" x1="6"></line>
//                                                     </svg>
//                                                     <span>ลบ</span>
//                                                     </button>
//                                                 </li>
//                                                 </ul>
//                                             </nav>
//                                         </label>
//                                     </div>
//                                 </div>
//                                 <div class="p-4">
//                                     <div class="flex">
//                                         <div class="flex-1">
//                                             <p class="text-truncate">
//                                                 <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
//                                                 <i class="fas fa-bookmark text-success mb-1 h-5"></i>  <strong>สถานที่ทำงาน</strong> : ${career.Workplace_Cus}<br>
//                                                 <i class="fas fa-table text-success mb-1 h-5"></i>  <strong>รายได้</strong> : ${career.Income_Cus}<br>
//                                                 <i class="fas fa-briefcase text-success mb-1 h-5"></i>  <strong>อาชีพ</strong> : ${career.Career_Cus}<br>
//                                                 <!--<i class="fas fa-building text-success mb-1 h-5"></i>  <strong>สถานที่ทำงาน</strong> : ${career.Workplace_Cus}<br>-->
//                                                 <i class="fas fa-money-bill text-success mb-0 h-5"></i>  <strong>เงินเดือน</strong> : ${career.Income_Cus}
//                                             </p>

//                                         </div>
//                                         <div class="flex-shrink-0">
//                                             <img src="{{ asset('img/career.jpg') }}" alt="${career.DetailCareer_Cus}" class="w-36 h-20">
//                                         </div>
//                                     </div>
//                                 </div>
//                                 <div class="p-4 border-t">
//                                     <small class="text-muted">
//                                         <div class="flex justify-between items-center">
//                                             <div title="${career.created_at}">
//                                                 <i class="fas fa-clock"></i> สร้างข้อมูลเมื่อ
//                                                 ${new Date(career.created_at).toLocaleDateString('th-TH', {
//                                                     day: 'numeric',
//                                                     month: 'long',
//                                                     year: 'numeric'
//                                                 })} เวลา ${new Date(career.created_at).toLocaleTimeString('th-TH', {
//                                                     hour: '2-digit',
//                                                     minute: '2-digit',
//                                                     hour12: false // ใช้ 24 ชั่วโมง
//                                                 })} น.
//                                             </div>
//                                             <div class="text-right">
//                                                 <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p>
//                                             </div>
//                                         </div>
//                                     </small>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>`;
//                 });
//             } else {
//                 html =
//                     `<p class="text-center text-muted" hidden>ไม่พบข้อมูลอาชีพ</p>`; // ข้อความเมื่อไม่มีข้อมูลอาชีพ
//             }

//             $('#career-container').html(html);

//             // ซ่อน career-master ถ้ามีการ์ด
//             if (hasCareerCards) {
//                 $('.career-master').hide();
//                 $('#prev-master-2').show();
//                 $('#next-master-2').show();
//             } else {
//                 $('.career-master').show();
//                 $('#prev-master-2').hide();
//                 $('#next-master-2').hide();
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
//         }
//     });
// } --}}












{{-- // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    // // ตรวจสอบการคลิกปุ่มบันทึก
    // $('#submitBtnCareer').on('click', function(event) {
    //     event.preventDefault(); // ป้องกันการส่งฟอร์มตามปกติ
    //     validateForm(); // เรียกใช้ฟังก์ชัน validateForm
    // });

    // function validateForm() {
    //     var isValid = true; // เริ่มต้นสถานะเป็นจริง
    //     $('.error').remove(); // ลบข้อความแสดงข้อผิดพลาดก่อนหน้า

    //     // ตรวจสอบฟิลด์ที่จำเป็น
    //     const fields = [{
    //             id: '#Career_Cus',
    //             message: 'กรุณาเลือกอาชีพ'
    //         },
    //         {
    //             id: '#Income_Cus',
    //             message: 'กรุณากรอกรายได้'
    //         },
    //         {
    //             id: '#BeforeIncome_Cus',
    //             message: 'กรุณากรอกหักค่าใช้จ่าย'
    //         },
    //         {
    //             id: '#AfterIncome_Cus',
    //             message: 'กรุณากรอกคงเหลือ'
    //         },
    //         {
    //             id: '#Workplace_Cus',
    //             message: 'กรุณากรอกสถานที่ทำงาน'
    //         },
    //         {
    //             id: '#Coordinates',
    //             message: 'กรุณากรอกพิกัด'
    //         },
    //         {
    //             id: '#IncomeNote_Cus',
    //             message: 'กรุณากรอกรายละเอียด'
    //         }
    //     ];

    //     fields.forEach(function(field) {
    //         if ($(field.id).val().trim() === '') {
    //             $(field.id).addClass('border-red-500');
    //             $(field.id).after(
    //                 `<span class="error text-red-500 text-xs flex items-center mt-1">
    //                     <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
    //                 </span>`
    //             );
    //             isValid = false;
    //         } else {
    //             $(field.id).removeClass('border-red-500');
    //         }
    //     });

    //     if (!isValid) {
    //         setTimeout(function() {
    //             $('.error').fadeOut(1000, function() {
    //                 $(this).remove();
    //             });
    //         }, 2000);
    //         return; // หยุดการทำงานถ้าฟอร์มไม่ valid
    //     }

    //     // หากฟอร์ม valid ส่งข้อมูล
    //     submitForm();
    // }

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
    //                 fetchCareerData(); // รีเฟรชข้อมูลหลังจากสำเร็จ
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

    // // หากต้องการจัดการกับปุ่มยกเลิก
    // $('#closeModal_career_button').on('click', function() {
    //     // ปิดโมดัลหรือทำการใด ๆ ที่ต้องการ
    // });

    // // เพิ่มเหตุการณ์สำหรับการค้นหา
    // $('#searchInput').on('keyup', function() {
    //     let value = $(this).val().toLowerCase();
    //     $('.career-card').filter(function() {
    //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    //     });
    // }); --}}

{{-- <div id="editCareerModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editCareerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCareerModalLabel">แก้ไขข้อมูลอาชีพ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCareerForm">
                    <input type="hidden" id="modalDataCusId" name="DataCus_id">

                    <div class="form-group">
                        <label for="modalCareerName">ชื่ออาชีพ</label>
                        <input type="text" class="form-control" id="modalCareerName" name="Career_Cus" required>
                    </div>

                    <div class="form-group">
                        <label for="modalWorkplace">สถานที่ทำงาน</label>
                        <input type="text" class="form-control" id="modalWorkplace" name="Workplace_Cus" required>
                    </div>

                    <div class="form-group">
                        <label for="modalIncome">รายได้</label>
                        <input type="text" class="form-control" id="modalIncome" name="Income_Cus" required>
                    </div>

                    <div class="form-group">
                        <label for="modalDetail">รายละเอียด</label>
                        <textarea class="form-control" id="modalDetail" name="DetailCareer_Cus" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="modalCreatedAt">วันที่สร้างข้อมูล</label>
                        <input type="text" class="form-control" id="modalCreatedAt" name="created_at" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" id="saveChangesBtn">บันทึกการเปลี่ยนแปลง</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal_Edit_career_customer(button) {
        const dataCusId = $(button).data('data-cus-id');
        const careerName = $(button).data('career-name');
        const workplace = $(button).data('workplace');
        const income = $(button).data('income');
        const detail = $(button).data('detail');
        const createdAt = $(button).data('created-at');

        // ตั้งค่าฟิลด์ใน Modal
        $('#modalDataCusId').val(dataCusId);
        $('#modalCareerName').val(careerName);
        $('#modalWorkplace').val(workplace);
        $('#modalIncome').val(income);
        $('#modalDetail').val(detail);
        $('#modalCreatedAt').val(new Date(createdAt).toLocaleDateString('th-TH', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        }) + ' เวลา ' + new Date(createdAt).toLocaleTimeString('th-TH', {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false // ใช้ 24 ชั่วโมง
        }));

        // เปิด Modal
        $('#editCareerModal').modal('show');
    }

    // ส่วนสำหรับบันทึกการเปลี่ยนแปลง
    $('#saveChangesBtn').on('click', function() {
        const formData = $('#editCareerForm').serialize(); // ดึงข้อมูลจากฟอร์ม

        $.ajax({
            url: '/update-career-data', // URL สำหรับการอัพเดตข้อมูล
            method: 'POST',
            data: formData,
            success: function(response) {
                // ปิด Modal และรีเฟรชข้อมูลที่แสดง
                $('#editCareerModal').modal('hide');
                fetchCareerData(); // เรียกฟังก์ชันเพื่อรีเฟรชข้อมูล
                alert('บันทึกข้อมูลเรียบร้อยแล้ว!'); // แจ้งผู้ใช้
            },
            error: function(xhr) {
                alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล!'); // แจ้งข้อผิดพลาด
            }
        });
    });



      <!--<button class="edit-career-btn bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-105 hover:shadow-lg flex items-center"
            data-id="${career.id}"
            data-career-name="${career.Career_Cus}"
            data-data-cus-id="${career.DataCus_id}"
            data-workplace="${career.Workplace_Cus}"
            data-income="${career.Income_Cus}"
            data-before-income="${career.BeforeIncome_Cus}"
            data-after-income="${career.AfterIncome_Cus}"
            data-coordinates="${career.Coordinates}"
            data-note="${career.IncomeNote_Cus}"
            onclick="openModal_Edit_career_customer(this)">
            <i class="fas fa-edit mr-2"></i> แก้ไข
        </button>-->

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
</script> --}}
