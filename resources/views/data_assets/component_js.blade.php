<!--------------------------------------------------------jQuery Trick Design------------------------------------------------------------------------->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        function updateLegend() {
            var textValue = $('#Vehicle_OldLicense_Text').val();
            var numberValue = $('#Vehicle_OldLicense_Number').val();
            var provinceValue = $('#Vehicle_OldLicense_Province').val();
            var provinceText = $('#Vehicle_OldLicense_Province option:selected')
                .text(); // ข้อความของจังหวัดที่เลือก

            var legendText;
            if (textValue || numberValue || provinceValue) {
                // Remove "ป้ายทะเบียนเก่า:" when there is input
                legendText = '<div style="text-align: center;">' + textValue + ' ' + numberValue + '<br>' +
                    provinceText + '</div>'; // ใช้ provinceText แทน provinceValue
            } else {
                // Show "ป้ายทะเบียนเก่า:" when there is no input
                legendText = '<div style="text-align: center;">ป้ายทะเบียนเก่า</div>';
            }

            $('#license-info').html(legendText);
        }

        // Event listeners
        $('#Vehicle_OldLicense_Text, #Vehicle_OldLicense_Number, #Vehicle_OldLicense_Province').on(
            'input change',
            function() {
                updateLegend();
            });

        // Initial call to set the correct legend text
        updateLegend();
    });




    $(document).ready(function() {
        function updateLegendNew() {
            var textValueNew = $('#Vehicle_NewLicense_Text').val();
            var numberValueNew = $('#Vehicle_NewLicense_Number').val();
            var provinceValueNew = $('#Vehicle_NewLicense_Province').val();
            var provinceTextNew = $('#Vehicle_NewLicense_Province option:selected')
                .text(); // ข้อความของจังหวัดที่เลือก

            var legendTextNew;
            if (textValueNew || numberValueNew || provinceValueNew) {
                // Remove "ป้ายทะเบียนเก่า:" when there is input
                legendTextNew = '<div style="text-align: center;">' + textValueNew + ' ' + numberValueNew +
                    '<br>' +
                    provinceTextNew + '</div>'; // ใช้ provinceTextNew แทน provinceValueNew
            } else {
                // Show "ป้ายทะเบียนเก่า:" when there is no input
                legendTextNew = '<div style="text-align: center;">ป้ายทะเบียนใหม่</div>';
            }

            $('#licenseNew-info').html(legendTextNew);
        }

        // Event listeners
        $('#Vehicle_NewLicense_Text, #Vehicle_NewLicense_Number, #Vehicle_NewLicense_Province').on(
            'input change',
            function() {
                updateLegendNew();
            });

        // Initial call to set the correct legend text
        updateLegendNew();
    });




    $(document).ready(function() {
        // ตั้งค่าเริ่มต้นให้ input เป็น disabled
        $("#Vehicle_New_Number")
            .prop("disabled", true)
            .css("background-color", "#f0f0f0"); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน

        // เมื่อสถานะของ checkbox เปลี่ยนแปลง
        $('input[name="new_number_stamping"]').on("change", function() {
            if ($(this).is(":checked")) {
                // ถ้า checkbox ถูกเลือก
                $("#Vehicle_New_Number")
                    .prop("disabled", false)
                    .css("background-color", "#ffffff"); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน
            } else {
                // ถ้า checkbox ไม่ถูกเลือก
                $("#Vehicle_New_Number")
                    .prop("disabled", true)
                    .css("background-color", "#e0e0e0"); // เปลี่ยนสีพื้นหลังเป็นสีเทาเข้ม
            }
        });
    });




    ////////////////////////////////////////////////////////เช็ค ส่งค่า 1 ปี และ ส่งค่า 7 วัน////////////////////////////////////////////////////////////////////

    $(document).ready(function() {
        // ฟังก์ชันแปลงวันที่จาก YYYY-MM-DD เป็น DD/MM/YYYY
        function formatDateToDMY(dateString) {
            var parts = dateString.split("-");
            return parts[2] + "/" + parts[1] + "/" + parts[0]; // เปลี่ยนเป็น DD/MM/YYYY
        }

        // สำหรับ select-input-register
        $("#select-input-register").change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: "Asia/Bangkok",
                year: "numeric",
                month: "2-digit",
                day: "2-digit",
            };

            // ถ้าไม่มีการเลือก
            if (selectedValue === "register_reset") {
                $("#date-stamp-register-1").val(""); // ล้างค่า
                $("#date-stamp-register-2").val(""); // ล้างค่า
                resetLabel5(); // รีเซ็ต label ของ date-stamp-register-1
                resetLabel6(); // รีเซ็ต label ของ date-stamp-register-2
                return;
            }

            // วันปัจจุบันในรูปแบบ DD/MM/YYYY
            var currentDate = now.toLocaleDateString("th-TH", options);

            // ตั้งค่าวันที่ตามตัวเลือกที่เลือก
            if (selectedValue === "7-days") {
                now.setDate(now.getDate() + 7);
                moveLabelDown5(); // ขยับ label ลงของ date-stamp-register-1
                moveLabelDown6(); // ขยับ label ลงของ date-stamp-register-2
            } else if (selectedValue === "1-year") {
                now.setFullYear(now.getFullYear() + 1);
                moveLabelDown5(); // ขยับ label ลงของ date-stamp-register-1
                moveLabelDown6(); // ขยับ label ลงของ date-stamp-register-2
            } else {
                return;
            }

            // วันในอนาคตในรูปแบบ DD/MM/YYYY
            var futureDate = now.toLocaleDateString("th-TH", options);

            // ส่งค่ากลับในรูปแบบ DD/MM/YYYY
            $("#date-stamp-register-1").val(currentDate); // ตั้งค่าวันที่ปัจจุบัน
            $("#date-stamp-register-2").val(futureDate); // ตั้งค่าวันที่ในอนาคต
        });

        // สำหรับ select-input-act
        $("#select-input-act").change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: "Asia/Bangkok",
                year: "numeric",
                month: "2-digit",
                day: "2-digit",
            };

            // ถ้าไม่มีการเลือก
            if (selectedValue === "act_reset") {
                $("#date-stamp-act-1").val(""); // ล้างค่า
                $("#date-stamp-act-2").val(""); // ล้างค่า
                resetLabel3(); // รีเซ็ต label ของ date-stamp-act-1
                resetLabel4(); // รีเซ็ต label ของ date-stamp-act-2
                return;
            }

            // วันปัจจุบันในรูปแบบ DD/MM/YYYY
            var currentDate = now.toLocaleDateString("th-TH", options);

            // ตั้งค่าวันที่ตามตัวเลือกที่เลือก
            if (selectedValue === "7-days") {
                now.setDate(now.getDate() + 7);
                moveLabelDown3(); // ขยับ label ลงของ date-stamp-act-1
                moveLabelDown4(); // ขยับ label ลงของ date-stamp-act-2
            } else if (selectedValue === "1-year") {
                now.setFullYear(now.getFullYear() + 1);
                moveLabelDown3(); // ขยับ label ลงของ date-stamp-act-1
                moveLabelDown4(); // ขยับ label ลงของ date-stamp-act-2
            } else {
                return;
            }

            // วันในอนาคตในรูปแบบ DD/MM/YYYY
            var futureDate = now.toLocaleDateString("th-TH", options);

            $("#date-stamp-act-1").val(currentDate); // ตั้งค่าวันที่ปัจจุบัน
            $("#date-stamp-act-2").val(futureDate); // ตั้งค่าวันที่ในอนาคต
        });

        // สำหรับ select-input-insurance
        $("#select-input-insurance").change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: "Asia/Bangkok",
                year: "numeric",
                month: "2-digit",
                day: "2-digit",
            };

            if (selectedValue === "") {
                $("#date-stamp-insurance-1").val(""); // ล้างค่า
                $("#date-stamp-insurance-2").val(""); // ล้างค่า
                resetLabel(); // รีเซ็ต label ที่วันที่ต่อประกัน
                resetLabel2('label-date-insurance-2'); // รีเซ็ต label ที่วันหมดอายุ
                return;
            }

            var currentDate = now.toLocaleDateString("th-TH", options); // Format: DD/MM/YYYY

            if (selectedValue === "7-days") {
                now.setDate(now.getDate() + 7);
                moveLabelDown(); // ขยับ label ลงสำหรับวันที่ต่อประกัน
                moveLabelDown2('label-date-insurance-2'); // ขยับ label ลงสำหรับวันหมดอายุ
            } else if (selectedValue === "1-year") {
                now.setFullYear(now.getFullYear() + 1);
                moveLabelDown(); // ขยับ label ลงสำหรับวันที่ต่อประกัน
                moveLabelDown2('label-date-insurance-2'); // ขยับ label ลงสำหรับวันหมดอายุ
            }

            var futureDate = now.toLocaleDateString("th-TH", options); // Format: DD/MM/YYYY

            $("#date-stamp-insurance-1").val(currentDate);
            $("#date-stamp-insurance-2").val(futureDate); // ตั้งค่าวันหมดอายุในรูปแบบ DD/MM/YYYY
        });
    });

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_OldLicense_Text").hover(
            function() {
                $("#tooltip").show();
            },
            function() {
                $("#tooltip").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_OldLicense_Text").focus(function() {
            $("#tooltip").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_OldLicense_Text").blur(function() {
            $("#Vehicle_OldLicense_Text").hover(
                function() {
                    $("#tooltip").show();
                },
                function() {
                    $("#tooltip").hide();
                }
            );
        });
    });

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip-number").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_OldLicense_Number").hover(
            function() {
                $("#tooltip-number").show();
            },
            function() {
                $("#tooltip-number").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_OldLicense_Number").focus(function() {
            $("#tooltip-number").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_OldLicense_Number").blur(function() {
            $("#Vehicle_OldLicense_Number").hover(
                function() {
                    $("#tooltip-number").show();
                },
                function() {
                    $("#tooltip-number").hide();
                }
            );
        });
    });

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip-new-text, #tooltip-new-number").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_NewLicense_Text").hover(
            function() {
                $("#tooltip-new-text").show();
            },
            function() {
                $("#tooltip-new-text").hide();
            }
        );

        $("#Vehicle_NewLicense_Number").hover(
            function() {
                $("#tooltip-new-number").show();
            },
            function() {
                $("#tooltip-new-number").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_NewLicense_Text").focus(function() {
            $("#tooltip-new-text").hide();
        });

        $("#Vehicle_NewLicense_Number").focus(function() {
            $("#tooltip-new-number").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_NewLicense_Text").blur(function() {
            $("#Vehicle_NewLicense_Text").hover(
                function() {
                    $("#tooltip-new-text").show();
                },
                function() {
                    $("#tooltip-new-text").hide();
                }
            );
        });

        $("#Vehicle_NewLicense_Number").blur(function() {
            $("#Vehicle_NewLicense_Number").hover(
                function() {
                    $("#tooltip-new-number").show();
                },
                function() {
                    $("#tooltip-new-number").hide();
                }
            );
        });
    });




    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $("#tooltip-chassis").hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $("#Vehicle_Chassis").hover(
            function() {
                $("#tooltip-chassis").show();
            },
            function() {
                $("#tooltip-chassis").hide();
            }
        );

        // ซ่อน tooltip เมื่อ input ถูก focus
        $("#Vehicle_Chassis").focus(function() {
            $("#tooltip-chassis").hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $("#Vehicle_Chassis").blur(function() {
            $("#Vehicle_Chassis").hover(
                function() {
                    $("#tooltip-chassis").show();
                },
                function() {
                    $("#tooltip-chassis").hide();
                }
            );
        });
    });



    $(document).ready(function() {
        // เมื่อคลิกที่แท็ก <a>
        $('a[data-bs-toggle="modal"]').on("click", function(e) {
            e.preventDefault(); // ป้องกันการกระโดดไปที่ลิงก์

            // รับค่าจากชื่อของการ์ดที่ถูกคลิก
            const target = $(this).find("h5").text().trim(); // เพิ่ม .trim() เพื่อลบช่องว่าง

            // ซ่อนทุก <div> ที่มี id ที่ต้องการแสดงผล
            $("#car-detail, #motor-detail").hide();

            // แสดง <div> ที่ตรงกับชื่อการ์ด
            if (target === "รถยนต์") {
                $("#car-detail").show();
            } else if (target === "มอเตอร์ไซค์") {
                $("#motor-detail").show();
            }
        });
    });





    $(document).ready(function() {
        var selectedProvince = null;

        // Function to populate the dropdown list based on search input
        function populateOptions(search = "") {
            $("#optionsList li").each(function() {
                var optionText = $(this).text();
                $(this).toggle(
                    optionText.toLowerCase().includes(search.toLowerCase())
                );
            });

            var visibleOptions = $("#optionsList li:visible");
            if (visibleOptions.length > 0) {
                $("#noResultsMessage").hide();
            } else {
                $("#noResultsMessage").show();
            }
        }

        // Toggle dropdown visibility
        $("#dropdownInput").on("click", function() {
            $("#dropdownList").toggle();
            $("#searchInput").toggle().focus();
            populateOptions();
        });

        // Handle option selection
        $(document).on("click", "#optionsList li", function() {
            selectedProvince = $(this).data("key");
            $("#dropdownInput").val($(this).text()).removeClass("text-gray-500");
            $("#dropdownList").hide();
            $("#searchInput").hide();
        });

        // Filter options based on search input
        $("#searchInput").on("input", function() {
            var searchValue = $(this).val();
            populateOptions(searchValue);
        });

        // Close dropdown when clicking outside
        $(document).on("click", function(e) {
            if (!$(e.target).closest("#dropdownInput, #dropdownList").length) {
                $("#dropdownList").hide();
                $("#searchInput").hide();
            }
        });
    });




    $(document).ready(function() {
        var selectedProvince = null;

        // Function to populate the dropdown list based on search input
        function populateOptions(search = "") {
            $("#optionsListNew li").each(function() {
                var optionText = $(this).text();
                $(this).toggle(
                    optionText.toLowerCase().includes(search.toLowerCase())
                );
            });

            var visibleOptions = $("#optionsListNew li:visible");
            if (visibleOptions.length > 0) {
                $("#noResultsMessageNew").hide();
            } else {
                $("#noResultsMessageNew").show();
            }
        }

        // Toggle dropdown visibility
        $("#dropdownInputNew").on("click", function() {
            $("#dropdownListNew").toggle();
            $("#searchInputNew").toggle().focus();
            populateOptions();
        });

        // Handle option selection
        $(document).on("click", "#optionsListNew li", function() {
            selectedProvince = $(this).data("key");
            $("#dropdownInputNew").val($(this).text()).removeClass("text-gray-500");
            $("#dropdownListNew").hide();
            $("#searchInputNew").hide();
        });

        // Filter options based on search input
        $("#searchInputNew").on("input", function() {
            var searchValue = $(this).val();
            populateOptions(searchValue);
        });

        // Close dropdown when clicking outside
        $(document).on("click", function(e) {
            if (
                !$(e.target).closest("#dropdownInputNew, #dropdownListNew").length
            ) {
                $("#dropdownListNew").hide();
                $("#searchInputNew").hide();
            }
        });
    });
</script>

<!--------------------------------------------------------------------------------------------------------------------------------------------------->


<script>
    $(document).ready(function() {
        // เมื่อเปิดโมดัล
        $('[data-bs-toggle="modal"]').click(function() {
            $('#preloader').removeClass('hidden'); // แสดง preloader
            $('#DataAssetsModal .relative').css('top', '-100%').show(); // วางเนื้อหาที่ด้านบนสุด

            // รอ 0.5 วินาทีก่อนเลื่อนโมดัล
            setTimeout(function() {
                $('#DataAssetsModal .relative').animate({
                    top: '0%'
                }, 300, function() {
                    $('#preloader').addClass(
                        'hidden'); // ซ่อน preloader หลังจากเลื่อนเสร็จ
                }); // เลื่อนเนื้อหาลงมา
                $('#DataAssetsModal').removeClass('hidden'); // แสดงโมดัล
            }, 500); // เวลาในการรอ (300 มิลลิวินาที)
        });

        // เมื่อคลิกนอกโมดัลเพื่อปิด
        $('#DataAssetsModal').click(function(e) {
            if ($(e.target).is('#DataAssetsModal') || $(e.target).is('.close-modal')) {
                $('#DataAssetsModal .relative').animate({
                    top: '-100%'
                }, 300, function() {
                    $('#DataAssetsModal').addClass('hidden'); // ซ่อนโมดัลเมื่อเลื่อนขึ้นเสร็จ
                });
            }
        });
    });
</script>



{{-- hidden and show data --}}
<script>
    // ฟังก์ชันในการตั้งค่าประเภททรัพย์สิน
    function setAssetType(element) {
        const type = element.getAttribute('data-type'); // ดึงประเภทจาก data-type

        // ค้นหา <select> ที่มี id เป็น Vehicle_Type
        const vehicleSelect = document.getElementById('Vehicle_Type');

        // ลบคลาส hidden จาก <option> ที่ตรงกับประเภท
        for (let option of vehicleSelect.options) {
            if (option.value) {
                option.hidden = true; // ตั้งค่า hidden เป็น true ทุกตัว
            }
        }

        // แสดงเฉพาะ <option> ที่ตรงกับประเภทที่เลือก
        if (type === 'รถยนต์') {
            for (let option of vehicleSelect.options) {
                if (option.id === 'car_group') {
                    option.hidden = false; // แสดง option รถยนต์
                }
            }
        } else if (type === 'มอเตอร์ไซค์') {
            for (let option of vehicleSelect.options) {
                if (option.id === 'moto_group') {
                    option.hidden = false; // แสดง option มอเตอร์ไซค์
                }
            }
        }

        const assetType = element.getAttribute('data-type');

        // ตั้งค่าให้กับ input hidden
        document.getElementById('Type_Asset').value = assetType;
    }
</script>



<script>
    $(document).ready(function() {
        const modal = $('#DataAssetsModal');
        const modalContent = modal.find('.modal-enter');

        // เปิด Modal
        $('#openModal').click(function() {
            modal.removeClass('hidden');
            modalContent.removeClass('modal-leave-active').removeClass(
                'modal-enter-active'); // รีเซ็ตการปิดและเปิด
            setTimeout(() => {
                modalContent.addClass('modal-enter-active');
            }, 10);
        });

        // ปิด Modal
        $('#closeModal').click(function() {
            modalContent.addClass('modal-leave-active');
            setTimeout(() => {
                modal.addClass('hidden');
                modalContent.removeClass('modal-enter-active').removeClass(
                    'modal-leave-active');
            }, 300);
        });

        // ปิด Modal เมื่อคลิกนอก Modal
        $(window).click(function(event) {
            if ($(event.target).is(modal)) {
                modalContent.addClass('modal-leave-active');
                setTimeout(() => {
                    modal.addClass('hidden');
                    modalContent.removeClass('modal-enter-active').removeClass(
                        'modal-leave-active');
                }, 300);
            }
        });
    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
    // เปิด - ปิดแสดง modal
    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }

    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
        button.addEventListener('click', (event) => {
            const targetId = event.currentTarget.getAttribute('data-bs-target').substring(1);
            document.getElementById(targetId).classList.remove('hidden');
        });
    });


    // สลับการทำงานของ Modal ต่าง ๆ

    $(document).ready(function() {
        // เมื่อคลิกที่ลิงก์ใน modal
        $('a[data-bs-toggle="modal"]').on('click', function() {
            // รับค่า title จากลิงก์ที่คลิก
            var title = $(this).find('div.text-center').text().trim();
            // กำหนด class ของเนื้อหาใน modal ตาม title
            var $modal = $('#DataAssetsModal');
            $modal.find('[data-title]').each(function() {
                if ($(this).data('title') === title) {
                    $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            });
            openModal('DataAssetsModal');
        });

        // ฟังก์ชันปิด modal
        function closeModal(modalId) {
            $('#' + modalId).addClass('hidden');
        }

        // ฟังก์ชันเปิด modal
        function openModal(modalId) {
            $('#' + modalId).removeClass('hidden');
        }

        // ใช้งานปุ่มปิด modal
        $('.modal button').on('click', function() {
            closeModal('DataAssetsModal');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('DataAssetsModal');
        const modalContent = document.getElementById('modalContent');

        function showModal(type) {
            modal.classList.remove('hidden');
            modalContent.querySelectorAll('div[id$="Info"]').forEach(div => {
                div.classList.add('hidden');
            });
            const infoDiv = document.getElementById(`${type}Info`);
            if (infoDiv) {
                infoDiv.classList.remove('hidden');
            }
        }

        document.querySelectorAll('.modal-trigger').forEach(trigger => {
            trigger.addEventListener('click', function(event) {
                event.preventDefault();
                const type = this.getAttribute('data-type');
                showModal(type);
            });
        });

        window.closeModal = function(id) {
            document.getElementById(id).classList.add('hidden');
        };
    });


    $(document).ready(function() {
        $('.modal-trigger').on('click', function(event) {
            event.preventDefault();
            var type = $(this).data('type');
            $('#DataAssetsModal').removeClass('hidden');
            $('#modalContent > div[id$="Info"]').addClass('hidden');
            $('#' + type + 'Info').removeClass('hidden');
        });

        window.closeModal = function(id) {
            $('#' + id).addClass('hidden');
        };
    });
</script>






<script>
    document.addEventListener('DOMContentLoaded', function() {
        const options = {
            dateFormat: "d/m/Y", // ตั้งค่าให้แสดงวันที่ในรูปแบบ วัน/เดือน/ปี
            locale: {
                code: "th", // แปลเป็นภาษาไทย
                weekdays: {
                    shorthand: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส"],
                    longhand: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์"],
                },
                months: {
                    shorthand: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.",
                        "ต.ค.", "พ.ย.", "ธ.ค."
                    ],
                    longhand: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม",
                        "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
                    ],
                },
                firstDayOfWeek: 1, // กำหนดวันแรกของสัปดาห์เป็นวันจันทร์
                rangeSeparator: " ถึง ", // ตัวคั่นสำหรับช่วงวันที่
                time_24hr: true // ใช้รูปแบบเวลา 24 ชั่วโมง
            }
        };

        // Apply flatpickr to multiple elements
        flatpickr("#date-stamp-insurance-1", options);
        flatpickr("#date-stamp-insurance-2", options);
        flatpickr("#date-stamp-act-1", options);
        flatpickr("#date-stamp-act-2", options);
        flatpickr("#date-stamp-register-1", options);
        flatpickr("#date-stamp-register-2", options);
    });

    function moveLabelDown() {
        const label = document.getElementById('label-date-insurance');
        label.classList.add('translate-y-4', 'text-sm'); // ขยาย label ลงด้านล่าง
    }

    function resetLabel() {
        const label = document.getElementById('label-date-insurance');
        const input = document.getElementById('date-stamp-insurance-1');
        if (input.value === '') {
            label.classList.remove('translate-y-4', 'text-sm'); // คืนค่า label กลับสู่ตำแหน่งเดิม
        }
    }
</script>

<script>
    function moveLabelDown2(labelId) {
        const label = document.getElementById(labelId);
        label.classList.add('translate-y-4', 'text-sm', 'bg-red-200'); // ขยาย label ลงด้านล่างและเปลี่ยน bg เป็นสีแดง
    }

    function resetLabel2(labelId) {
        const label = document.getElementById(labelId);
        const input = document.getElementById('date-stamp-insurance-2');
        if (input.value === '') {
            label.classList.remove('translate-y-4', 'text-sm', 'bg-red-200'); // คืนค่า label กลับสู่ตำแหน่งเดิม
        }
    }
</script>




<script>
    // ฟังก์ชันสำหรับ label ของ date-stamp-act-1
    function moveLabelDown3() {
        const label = document.getElementById('label-date-act');
        label.classList.add('translate-y-4', 'text-sm'); // ขยาย label ลงด้านล่าง
    }

    function resetLabel3() {
        const label = document.getElementById('label-date-act');
        const input = document.getElementById('date-stamp-act-1');
        if (input.value === '') {
            label.classList.remove('translate-y-4', 'text-sm'); // คืนค่า label กลับสู่ตำแหน่งเดิม
        }
    }

    // ฟังก์ชันสำหรับ label ของ date-stamp-act-2
    function moveLabelDown4() {
        const label = document.getElementById('label-date-act-2');
        label.classList.add('translate-y-4', 'text-sm'); // ขยาย label ลงด้านล่าง
    }

    function resetLabel4() {
        const label = document.getElementById('label-date-act-2');
        const input = document.getElementById('date-stamp-act-2');
        if (input.value === '') {
            label.classList.remove('translate-y-4', 'text-sm'); // คืนค่า label กลับสู่ตำแหน่งเดิม
        }
    }
</script>

<script>
    // ฟังก์ชันสำหรับ label ของ date-stamp-act-1
    function moveLabelDown5() {
        const label = document.getElementById('label-date-register');
        label.classList.add('translate-y-4', 'text-sm'); // ขยาย label ลงด้านล่าง
    }

    function resetLabel5() {
        const label = document.getElementById('label-date-register');
        const input = document.getElementById('date-stamp-register-1');
        if (input.value === '') {
            label.classList.remove('translate-y-4', 'text-sm'); // คืนค่า label กลับสู่ตำแหน่งเดิม
        }
    }

    // ฟังก์ชันสำหรับ label ของ date-stamp-act-2
    function moveLabelDown6() {
        const label = document.getElementById('label-date-register-2');
        label.classList.add('translate-y-4', 'text-sm'); // ขยาย label ลงด้านล่าง
    }

    function resetLabel6() {
        const label = document.getElementById('label-date-register-2');
        const input = document.getElementById('date-stamp-register-2');
        if (input.value === '') {
            label.classList.remove('translate-y-4', 'text-sm'); // คืนค่า label กลับสู่ตำแหน่งเดิม
        }
    }
</script>



<!-- jQuery Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Vehicle_Group').on('change', function() {
            // Check if a value is selected
            if ($(this).val()) {
                // Show hidden options in Vehicle_Gear
                $('#Vehicle_Gear option[hidden]').show();
                $('#Vehicle_Gear').val(''); // Reset Vehicle_Gear selection
            } else {
                // Hide options again if no value is selected
                $('#Vehicle_Gear option').hide().filter(':first').show(); // Show the first option only
            }
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Vehicle_OldLicense_Province').focus(function() {
            $('#provinceLabel')
                .removeClass('top-1/2 translate-y-1/2 text-red-400 border-red-400') // ลบ border สีแดงเข้มออก
                .addClass('top-[-3px] left-3 text-red-300 text-lg border-red-300'); // เพิ่ม border สีแดงอ่อน
        }).blur(function() {
            if ($(this).val() === "") {
                $('#provinceLabel')
                    .addClass('top-1/2 -translate-y-1/2 text-red-400 text-sm border-red-400') // เพิ่ม border สีแดงเข้ม
                    .removeClass('top-[-3px] left-3 text-red-300 text-lg border-red-300'); // ลบ border สีแดงอ่อนออก
            } else {
                $('#provinceLabel')
                    .addClass('text-red-300 border-red-300'); // ถ้ามีค่าใน input ให้ border สีแดงอ่อน
            }
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $(document).ready(function() {
    // สำหรับ NewProvince
        $('#Vehicle_NewLicense_Province').focus(function() {
            $('#newProvinceLabel')
                .removeClass('top-1/2 translate-y-1/2 text-gray-400') // แก้ไขให้ตรงกับสีที่ต้องการ
                .addClass('top-[-2px] left-3 text-gray-300 text-lg'); // ปรับให้เลื่อนลงมากขึ้น
        }).blur(function() {
            if ($(this).val() === "") {
                $('#newProvinceLabel')
                    .addClass('top-1/2 -translate-y-1/2 text-gray-400 text-sm')
                    .removeClass('top-[-2px] left-3 text-gray-300 text-lg'); // เปลี่ยน text-gray-300 เป็น text-gray-400
            } else {
                $('#newProvinceLabel').addClass('text-gray-300');
            }
        });
    });
</script>
