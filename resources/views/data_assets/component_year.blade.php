<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // เมื่อเปลี่ยนค่าใน Vehicle_Group
        $('#Vehicle_Group').on('change', function() {
            // ค่าที่เลือกใน Vehicle_Group
            var selectedGroup = $(this).val();

            // ถ้าค่าที่เลือกคือ "-- กลุ่มรถ --"
            if (selectedGroup === "") {
                // ล้างค่าทั้งหมดใน Vehicle_Years และแสดงเฉพาะ "-- ปีรถ --"
                $('#Vehicle_Years').val(""); // ล้างค่าที่เลือกใน dropdown
                $('#Vehicle_Years option').each(function() {
                    if ($(this).val() === "") {
                        $(this).removeAttr('hidden'); // แสดงตัวเลือก "-- ปีรถ --"
                    } else {
                        $(this).attr('hidden', 'hidden'); // ซ่อนตัวเลือกปีรถอื่นๆ
                    }
                });
            } else if ($('#car_group_1').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if (year == 2004 || year == 2005 || year == 2006 || year == 2007 ||
                        year == 2008 || year == 2009 || year == 2010 || year == 2011 ||
                        year == 2012 || year == 2013 || year == 2014 || year == 2015 ||
                        year == 2016 || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_2').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2013 && year <= 2019) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_3').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2012 && year <= 2020) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_4').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2008 && year <= 2022) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_41').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2007 && year <= 2014) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_46').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2018 && year <= 2021) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_111').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val(); // รับค่า year จาก option

                    if (year === "2002") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden'); // ซ่อนปีอื่น ๆ
                    }
                });
            } else if ($('#car_group_5').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2001 && year <= 2016) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_6').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2003 && year <= 2019) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_7').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2003 && year <= 2017) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_8').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2002 && year <= 2018) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_9').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2006 && year <= 2019) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_10').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2014 && year <= 2018) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_37').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2011 && year <= 2020) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_81').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if (year === "2015") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_86').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if (year === "2016") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_93').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2012 && year <= 2013) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_11').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2014 && year <= 2019) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_12').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2015 && year <= 2021) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_13').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2015 && year <= 2020) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_14').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2017 && year <= 2021) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_15').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2013 && year <= 2013) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_16').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2015 && year <= 2019) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_40').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2014 && year <= 2022) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_42').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();
                    if ((year >= 2013 && year <= 2022) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_130').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2009") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_17').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2011 && year <= 2020) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_18').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2010 && year <= 2022) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_19').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2006 && year <= 2012) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_20').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2012 && year <= 2016) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_21').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2008 && year <= 2013) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_43').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2017 && year <= 2021) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_44').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2013 && year <= 2017) || year === "") {
                        $(this).removeAttr('hidden');
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_135').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();


                    if (year === "2013") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_22').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();


                    if ((year >= 2015 && year <= 2021) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_23').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_24').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2010 && year <= 2014) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_96').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2013 && year <= 2015) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_97').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2012") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_25').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2009 && year <= 2022) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_26').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_27').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2013 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_28').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2015 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_29').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2015) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_30').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2019) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_29').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2015) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_31').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2003 && year <= 2007) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_32').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2003 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_33').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2003 && year <= 2023) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_34').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2003 && year <= 2010) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_35').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2020) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_36').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2004 && year <= 2021) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_45').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2017 && year <= 2022) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_104').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2018") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_113').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2017 && year <= 2018) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_114').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2010 && year <= 2019) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_128').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2012") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_139').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2004") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_38').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2004 && year <= 2014) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_39').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2013 && year <= 2023) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_85').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2012 && year <= 2019) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_89').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2008 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_90').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2010 && year <= 2011) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_92').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2011 && year <= 2013) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_137').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2013") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_112').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2008") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_119').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2017") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_122').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2011") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_125').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2003") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_142').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2005") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_144').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2012") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_54').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2007 && year <= 2015) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_55').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2015 && year <= 2024) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_64').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2002 && year <= 2004) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_133').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2013") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_56').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 1998 && year <= 2010) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_57').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2007 && year <= 2015) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_58').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2015 && year <= 2020) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_50').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2012 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_51').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2015 && year <= 2020) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_52').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2009 && year <= 2013) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_53').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2013 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_59').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2004 && year <= 2011) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_60').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2011 && year <= 2015) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_61').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2015 && year <= 2018) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_66').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2001 && year <= 2004) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_47').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2003 && year <= 2012) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_48').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2011 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_49').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2015 && year <= 2019) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_103').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2013") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_63').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2019 && year <= 2021) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_84').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2004 && year <= 2016) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_83').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2017) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_83').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2003 && year <= 2005) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_80').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2000 && year <= 2002) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_94').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "2002") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_65').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2007 && year <= 2010) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_109').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if (year === "1995") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            }  else if ($('#car_group_106').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2015) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_67').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2004 && year <= 2021) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_68').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2005 && year <= 2021) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            }  else if ($('#car_group_120').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2009 && year <= 2014) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_115').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 1997 && year <= 1998) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            } else if ($('#car_group_116').val() === selectedGroup) {
                $('#Vehicle_Years option').each(function() {
                    var year = $(this).val();

                    if ((year >= 2003 && year <= 2020) || year ===
                        "") { // ตรวจสอบว่าปีเป็น 2002 หรือไม่
                        $(this).removeAttr('hidden'); // แสดงปี 2002
                    } else {
                        $(this).attr('hidden', 'hidden');
                    }
                });
            }

            // else {
            //     $('#Vehicle_Years option').each(function() {
            //         if ($(this).val() === "") {
            //             $(this).removeAttr('hidden');
            //         } else {
            //             $(this).attr('hidden', 'hidden');
            //         }
            //     });
            // }

            else {
                $('#Vehicle_Years option').each(function() {
                    $(this).removeAttr('hidden'); // แสดงค่าทั้งหมด
                });
            }

        });
    });
</script>
