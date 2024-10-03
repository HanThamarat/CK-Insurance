<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function updateVehicleBrand(selectedType, selectedPLT) {
            // ซ่อนตัวเลือกทั้งหมดก่อน
            $('#Vehicle_Brand').find('.car-option, .moto-option').hide();
            $('#Vehicle_Brand').find('option[value=""]').show(); // แสดง -- ยี่ห้อรถ --

            if (selectedType === "") {
                // ซ่อนตัวเลือกทั้งหมด
                $('#Vehicle_Brand').find('.car-option, .moto-option').hide();
                $('#Vehicle_Brand').find('option[value=""]').show(); // แสดง -- ยี่ห้อรถ --
                return;
            }

            // เงื่อนไขสำหรับประเภทของรถยนต์
            if (selectedType.startsWith('C')) {

                // เช็คเงื่อนเพิ่ม
                if (selectedType === 'C03' && selectedPLT == 4) {
                    $('#Vehicle_Brand').find('.car-option[data-id="1"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="3"]').show();
                    // $('#Vehicle_Brand').find('.car-option[data-id="4"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="5"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="6"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="7"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="8"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="9"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="14"]').show();
                    // $('#Vehicle_Brand').find('.car-option[data-id="17"]').show();
                    return; // ออกจากฟังก์ชันหากแสดงตัวเลือกแล้ว
                }

                if (selectedType === 'C04' && selectedPLT == 4) {
                    $('#Vehicle_Brand').find('.car-option[data-id="1"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="3"]').show();
                    // $('#Vehicle_Brand').find('.car-option[data-id="4"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="5"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="6"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="7"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="8"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="9"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="14"]').show();
                    // $('#Vehicle_Brand').find('.car-option[data-id="17"]').show();
                    return; // ออกจากฟังก์ชันหากแสดงตัวเลือกแล้ว
                }

                //-----------------------------------------------------------------------//

                if (selectedPLT == 2 || selectedPLT == 3) {
                    $('#Vehicle_Brand').find('.car-option[data-id="1"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="2"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="3"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="4"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="5"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="6"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="7"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="8"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="9"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="14"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="20"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="22"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="23"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="26"]').show();
                } else if (selectedPLT == 4) {
                    $('#Vehicle_Brand').find('.car-option[data-id="1"]').show();
                    // $('#Vehicle_Brand').find('.car-option[data-id="3"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="4"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="5"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="6"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="7"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="8"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="9"]').show();
                    // $('#Vehicle_Brand').find('.car-option[data-id="14"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="17"]').show();
                } else if (selectedPLT == 7) {
                    if (selectedType === 'C06') {
                        $('#Vehicle_Brand').find('.car-option[data-id="1"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="5"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="9"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="10"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="11"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="18"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="21"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="24"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="25"]').show();
                    } else {
                        $('#Vehicle_Brand').find('.car-option[data-id="5"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="8"]').show();
                        $('#Vehicle_Brand').find('.car-option[data-id="15"]').show();
                    }
                } else if (selectedPLT == 5 || selectedPLT == 6) {
                    $('#Vehicle_Brand').find('.car-option[data-id="1"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="5"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="9"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="10"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="11"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="18"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="21"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="24"]').show();
                    $('#Vehicle_Brand').find('.car-option[data-id="25"]').show();
                } else {
                    $('#Vehicle_Brand').find('.car-option').show();
                }
            }
            // เงื่อนไขสำหรับมอเตอร์ไซค์
            else if (selectedType.startsWith('M')) {
                if (selectedType == 'M01' && selectedPLT == '1') {
                    $('#Vehicle_Brand').find('.moto-option[data-id="1"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="2"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="3"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="4"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="5"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="9"]').show();
                } else if (selectedType == 'M02' && selectedPLT == '1') {
                    $('#Vehicle_Brand').find('.moto-option[data-id="1"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="2"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="3"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="4"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="6"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="7"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="10"]').show();
                } else if (selectedType == 'M03' && selectedPLT == '1') {
                    $('#Vehicle_Brand').find('.moto-option[data-id="1"]').show();
                    $('#Vehicle_Brand').find('.moto-option[data-id="2"]').show();
                }
            } else {
                $('#Vehicle_Brand').find('.car-option, .moto-option').hide();
            }
        }

        // ฟังก์ชันเรียกเมื่อค่าใน select เปลี่ยนแปลง
        // function checkVehicleTypeAndPLT() {
        //     var selectedType = $('#Vehicle_Type').val();
        //     var selectedPLT = $('#Vehicle_Type_PLT').val();

        //     // ล้างค่าของ Vehicle_Brand ก่อน
        //     $('#Vehicle_Brand').val(''); // ล้างค่าใน select

        //     updateVehicleBrand(selectedType, selectedPLT);
        // }

        // // เมื่อเปลี่ยนแปลงค่าใน select #Vehicle_Type หรือ #Vehicle_Type_PLT
        // $('#Vehicle_Type, #Vehicle_Type_PLT').change(function() {
        //     checkVehicleTypeAndPLT();
        // });

        // // เพิ่มเหตุการณ์เมื่อคลิกที่ตัวเลือก "ประเภทรถ 2"
        // $('#Vehicle_Type_PLT').click(function() {
        //     if ($(this).val() === "") {
        //         // ซ่อนตัวเลือกทั้งหมดและแสดงเฉพาะ -- ยี่ห้อรถ --
        //         $('#Vehicle_Brand').find('.car-option, .moto-option').hide(); // ซ่อนตัวเลือกทั้งหมด
        //         $('#Vehicle_Brand').find('option[value=""]').show(); // แสดง -- ยี่ห้อรถ --
        //     }
        // });

        // // เรียกใช้ฟังก์ชันตอนหน้าโหลดครั้งแรก
        // checkVehicleTypeAndPLT();


        function checkVehicleTypeAndPLT() {
            var selectedType = $('#Vehicle_Type').val();
            var selectedPLT = $('#Vehicle_Type_PLT').val();

            // ล้างค่าของ Vehicle_Brand ก่อน
            $('#Vehicle_Brand').val(''); // ล้างค่าใน select
            $('#Vehicle_Group').val(''); // ล้างค่าใน select

            // แสดงและซ่อนกลุ่มรถตามการเลือกประเภทรถ
            updateVehicleGroup(selectedType, selectedPLT);
            updateVehicleBrand(selectedType, selectedPLT);
        }

        // ฟังก์ชันเพื่ออัปเดตการแสดง/ซ่อน Vehicle_Group ตาม Vehicle_Type และ Vehicle_Type_PLT
        function updateVehicleGroup(selectedType, selectedPLT) {
            $('#Vehicle_Group').find('option').hide(); // ซ่อนตัวเลือกทั้งหมดก่อน
            if (selectedType === 'car') {
                // แสดงตัวเลือกเฉพาะกลุ่มรถยนต์
                $('#Vehicle_Group').find('option[id^="car_group_"]').show();
            } else if (selectedType === 'moto') {
                // แสดงตัวเลือกเฉพาะกลุ่มรถจักรยานยนต์
                $('#Vehicle_Group').find('option[id^="moto_group_"]').show();
            } else {
                // แสดงเฉพาะตัวเลือกเริ่มต้นเมื่อไม่มีการเลือกประเภทรถ
                $('#Vehicle_Group').find('option[value=""]').show();
            }
        }

        // เมื่อเปลี่ยนแปลงค่าใน select #Vehicle_Type หรือ #Vehicle_Type_PLT
        $('#Vehicle_Type, #Vehicle_Type_PLT').change(function() {
            checkVehicleTypeAndPLT();
        });

        // เพิ่มเหตุการณ์เมื่อคลิกที่ตัวเลือก "ประเภทรถ 2"
        $('#Vehicle_Type_PLT').click(function() {
            if ($(this).val() === "") {
                // ซ่อนตัวเลือกทั้งหมดและแสดงเฉพาะ -- ยี่ห้อรถ --
                $('#Vehicle_Brand').find('.car-option, .moto-option').hide(); // ซ่อนตัวเลือกทั้งหมด
                $('#Vehicle_Brand').find('option[value=""]').show(); // แสดง -- ยี่ห้อรถ --
            }
        });

        // เรียกใช้ฟังก์ชันตอนหน้าโหลดครั้งแรก
        checkVehicleTypeAndPLT();

    });
</script>
