<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // เมื่อคลิกที่ตัวเลือก "ยี่ห้อรถ"
        $('#Vehicle_Brand').on('change', function() {
            // ตรวจสอบถ้าค่าที่เลือกคือ '' (-- ยี่ห้อรถ --)
            if ($(this).val() === '') {
                // ล้างค่าทั้งหมดใน Vehicle_Group
                $('#Vehicle_Group option').hide();
                $('#Vehicle_Group').val('');
                $('#Vehicle_Group option[value=""]').show();
            } else {
                // ซ่อนตัวเลือกทั้งหมดใน Vehicle_Group
                $('#Vehicle_Group option').hide();
                $('#Vehicle_Group option[value=""]').show();

                var selectedVehicleType = $('#Vehicle_Type').val();
                var selectedVehicleId = $('#Vehicle_Type_PLT').val();
                var selectedBrandId = $(this).find('option:selected').data('id');
                var idsToShow = [];
                var idsToShowMoto = [];


                // ----------ตรวจสอบเงื่อนไขสำหรับการแสดง เริ่มต้นที่ C01 Vehicle_Group ที่เกี่ยวข้อง----//
                if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 1) {
                    idsToShow = [1, 2, 3, 4, 41, 46, 111];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 2) {
                    idsToShow = [5, 6, 7, 8, 9, 10, 37, 81, 86, 93];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 3) {
                    idsToShow = [11, 12, 13, 14];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 4) {
                    idsToShow = [15, 16, 40, 42, 130];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 5) {
                    idsToShow = [17, 18, 19, 20, 21, 43, 44, 135];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 6) {
                    idsToShow = [22, 23, 24, 96, 97];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 7) {
                    idsToShow = [25, 26, 27, 28];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 8) {
                    idsToShow = [29, 30, 31, 32, 33, 34, 35, 36, 45, 104, 113, 114, 128, 139];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 9) {
                    idsToShow = [38, 39];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 14) {
                    idsToShow = [85, 89, 90, 92, 137];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 20) {
                    idsToShow = [112, 119];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 22) {
                    idsToShow = [122];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 23) {
                    idsToShow = [125, 142];
                } else if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 26) {
                    idsToShow = [144];
                }


                //---------- ตรวจสอบเงื่อนไขสำหรับการแสดง เริ่มต้นที่ C02 Vehicle_Group ที่เกี่ยวข้อง -----------//

                if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 1) {
                    idsToShow = [54, 55, 64];

                } else if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 4) {
                    idsToShow = [133];

                } else if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 5) {
                    idsToShow = [56, 57, 58];

                } else if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 6) {
                    idsToShow = [50, 51];

                } else if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 7) {
                    idsToShow = [52, 53];

                } else if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 8) {
                    idsToShow = [59, 60, 61, 66];

                } else if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 9) {
                    idsToShow = [47, 48, 49];

                } else if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 17) {
                    idsToShow = [103];
                }



                // ----------ตรวจสอบเงื่อนไขสำหรับการแสดง เริ่มต้นที่ C03 Vehicle_Group ที่เกี่ยวข้อง--------------//

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 1) {
                    idsToShow = [54, 55, 64];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 3) {
                    idsToShow = [63];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 5) {
                    idsToShow = [56, 57, 58, 65, 94, 109];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 6) {
                    idsToShow = [50, 51];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 7) {
                    idsToShow = [52, 53, 62];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 8) {
                    idsToShow = [59, 60, 61, 66, 82];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 9) {
                    idsToShow = [47, 48, 49, 80, 88];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 14) {
                    idsToShow = [84];
                }


                // ----------ตรวจสอบเงื่อนไขสำหรับการแสดง เริ่มต้นที่ C04 Vehicle_Group ที่เกี่ยวข้อง--------------//

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 1) {
                    idsToShow = [54, 55, 64];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 5) {
                    idsToShow = [56, 57, 58];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 6) {
                    idsToShow = [50, 51];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 7) {
                    idsToShow = [53, 62];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 8) {
                    idsToShow = [59, 60, 61, 66];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 9) {
                    idsToShow = [47, 48, 49, 80];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 14) {
                    idsToShow = [83];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 3) {
                    idsToShow = [63];
                }

                // ----------ตรวจสอบเงื่อนไขสำหรับการแสดง เริ่มต้นที่ C05 Vehicle_Group ที่เกี่ยวข้อง--------------//

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C05' && selectedVehicleId == 7 && selectedBrandId == 5) {
                    idsToShow = [106];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C05' && selectedVehicleId == 7 && selectedBrandId == 8) {
                    idsToShow = [67, 68];
                }


                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C05' && selectedVehicleId == 7 && selectedBrandId == 15) {
                    idsToShow = [91];
                }

                // ----------ตรวจสอบเงื่อนไขสำหรับการแสดง เริ่มต้นที่ C06 Vehicle_Group ที่เกี่ยวข้อง--------------//

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 1) {
                    idsToShow = [115];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 5) {
                    idsToShow = [116];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 9) {
                    idsToShow = [73, 74, 75, 76, 77, 87, 99, 100, 105, 107, 110, 117, 118, 126];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 10) {
                    idsToShow = [69, 70, 71, 72, 98, 101, 102, 121, 123, 124, 127, 132, 136, 138, 140];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 11) {
                    idsToShow = [78, 79, 95];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 18) {
                    idsToShow = [102];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 21) {
                    idsToShow = [120];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 24) {
                    idsToShow = [129];
                }

                var selectedVehicleType = $('#Vehicle_Type').val();
                if (selectedVehicleType === 'C06' && selectedVehicleId == 5, 6, 7 && selectedBrandId == 25) {
                    idsToShow = [134];
                }


                // ----------ตรวจสอบเงื่อนไขสำหรับการแสดง เริ่มต้นที่ M01 , M02, M03 Vehicle_Group ที่เกี่ยวข้อง--------------//

                if ((selectedVehicleType === 'M01' || selectedVehicleType === 'M02' || selectedVehicleType === 'M03') && selectedVehicleId == 1 && selectedBrandId == 1) {
                    idsToShowMoto = [1, 2, 3, 4, 5, 6, 7, 8, 21, 22, 70, 74, 76, 79];
                }


                if ((selectedVehicleType === 'M01' || selectedVehicleType === 'M02' || selectedVehicleType === 'M03') && selectedVehicleId == 1 && selectedBrandId == 2) {
                    idsToShowMoto = [34, 37, 38, 39, 40, 41, 42, 43, 68, 73, 77, 78];
                }

                if ((selectedVehicleType === 'M01' || selectedVehicleType === 'M02') && selectedVehicleId == 1 && selectedBrandId == 3) {
                    idsToShowMoto = [46, 47, 48, 49, 52, 53, 54, 64, 66];
                }

                if ((selectedVehicleType === 'M01' || selectedVehicleType === 'M02') && selectedVehicleId == 1 && selectedBrandId == 4) {
                    idsToShowMoto = [55, 75];
                }

                if ((selectedVehicleType === 'M01' || selectedVehicleType === 'M02') && selectedVehicleId == 1 && selectedBrandId == 5) {
                    idsToShowMoto = [80];
                }

                if ((selectedVehicleType === 'M01' || selectedVehicleType === 'M02') && selectedVehicleId == 1 && selectedBrandId == 9) {
                    idsToShowMoto = [85];
                }

                // ------------------------------------------------------เงื่อนไขลับ---------------------------------------------------//

                if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 1) {
                    idsToShow = [1, 2, 3, 4, 41, 46, 111];
                }

                if (selectedVehicleType === 'C02' && selectedVehicleId == 4 && selectedBrandId == 1) {
                    idsToShow = [54, 55, 64]; // แทนที่ ids ที่ต้องการแสดง
                }

                if (selectedVehicleType === 'C03' && selectedVehicleId == 4 && selectedBrandId == 1) {
                    idsToShow = [54, 55, 64];
                }

                if (selectedVehicleType === 'C04' && selectedVehicleId == 4 && selectedBrandId == 1) {
                    idsToShow = [54, 55, 64];
                }

                if (selectedVehicleType === 'C05' && selectedVehicleId == 7 && selectedBrandId == 5) {
                    idsToShow = [106];
                }

                if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 5) {
                    idsToShow = [17, 18, 19, 20, 21, 43, 44, 135];
                }

                if (selectedVehicleType === 'C01' && (selectedVehicleId == 2 || selectedVehicleId == 3) && selectedBrandId == 9) {
                    idsToShow = [38, 39];
                }



                // แสดงเฉพาะตัวเลือกที่มี id ตรงกับใน array
                $('#Vehicle_Group option').hide(); // ซ่อนตัวเลือกทั้งหมด
                idsToShow.forEach(function(id) {
                    $('#car_group_' + id).show(); // แสดงตัวเลือกที่ตรงกับ idsToShow
                });

                idsToShowMoto.forEach(function(id) {
                    $('#moto_group_' + id).show(); // แสดงตัวเลือกที่ตรงกับ idsToShowMoto
                });
            }
        });
    });
</script>
