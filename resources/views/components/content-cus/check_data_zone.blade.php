<script>
    $(document).ready(function() {
        $.ajax({
            url: '/zones',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // เพิ่มตัวเลือกใน select
                data.forEach(function(zone) {
                    $('#houseZone_Adds').append(
                        $('<option>', {
                            value: zone.Zone_pro,
                            text: zone.Zone_pro
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching zones:', error);
            }
        });

        // เมื่อเลือกภูมิภาค
        $('#houseZone_Adds').on('change', function() {
            var selectedZone = $(this).val(); // ค่าโซนที่ถูกเลือก

            // ลบตัวเลือกเก่าใน select จังหวัด
            $('#houseProvince_Adds').empty().append('<option value="">จังหวัด</option>');

            // ตรวจสอบภูมิภาคที่เลือกและเพิ่มจังหวัดตามภูมิภาคนั้น ๆ
            if (selectedZone === 'ภาคเหนือ') {
                // จังหวัดในภาคเหนือ
                var northernProvinces = [
                    'เชียงราย', 'เชียงใหม่', 'แม่ฮ่องสอน',
                    'ลำปาง', 'ลำพูน', 'พะเยา',
                    'แพร่', 'น่าน', 'อุตรดิตถ์'
                ];
                northernProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคตะวันตก') {
                // จังหวัดในภาคตะวันตก
                var westernProvinces = [
                    'กาญจนบุรี', 'ตาก', 'ราชบุรี',
                    'เพชรบุรี', 'ประจวบคีรีขันธ์'
                ];
                westernProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคตะวันออก') {
                // จังหวัดในภาคตะวันออก
                var easternProvinces = [
                    'ชลบุรี', 'ระยอง', 'จันทบุรี',
                    'ตราด', 'ฉะเชิงเทรา'
                ];
                easternProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคตะวันออกเฉียงเหนือ') {
                // จังหวัดในภาคตะวันออกเฉียงเหนือ
                var northeasternProvinces = [
                    'อุบลราชธานี', 'ขอนแก่น', 'นครราชสีมา',
                    'เลย', 'มหาสารคาม', 'กาฬสินธุ์', 'สุรินทร์'
                ];
                northeasternProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคใต้') {
                // จังหวัดในภาคใต้
                var southernProvinces = [
                    'กระบี่', 'ชุมพร', 'ตรัง', 'นครศรีธรรมราช', 'นราธิวาส',
                    'ปัตตานี', 'พังงา', 'พัทลุง', 'ภูเก็ต', 'ยะลา',
                    'ระนอง', 'สงขลา', 'สตูล', 'สุราษฎร์ธานี'
                ];

                southernProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else if (selectedZone === 'ภาคกลาง') {
                // จังหวัดในภาคกลาง
                var centralProvinces = [
                    'กรุงเทพมหานคร', 'นนทบุรี', 'ปทุมธานี',
                    'สมุทรปราการ', 'สมุทรสาคร', 'พระนครศรีอยุธยา',
                    'ชัยนาท', 'ลพบุรี', 'นครปฐม',
                    'สุพรรณบุรี', 'สิงห์บุรี', 'อ่างทอง'
                ];

                centralProvinces.forEach(function(province) {
                    $('#houseProvince_Adds').append(
                        $('<option>', {
                            value: province,
                            text: province
                        })
                    );
                });
            } else {

            }
        });


        $('#houseProvince_Adds').on('change', function() {
            var selectedProvince = $(this).val(); // ค่าจังหวัดที่ถูกเลือก

            // ลบตัวเลือกเก่าใน select เขต
            $('#houseDistrict_Adds').empty().append('<option value="">อำเภอ</option>');

            if (selectedProvince === 'เชียงราย') {
                // เขตในจังหวัดเชียงราย
                var chiangRaiDistricts = [
                    'เมืองเชียงราย', 'แม่สรวย', 'เชียงของ',
                    'เวียงแก่น', 'ป่าแดด', 'แม่จัน',
                    'ดอยหล่อ', 'พญาเม็งราย', 'แม่ฟ้าหลวง',
                    'ขุนตาล', 'บ้านดู่', 'จอมทอง'
                ];

                chiangRaiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'เชียงใหม่') {
                // เขตในจังหวัดเชียงใหม่
                var chiangMaiDistricts = [
                    'เมืองเชียงใหม่', 'แม่ริม', 'ดอยสะเก็ด',
                    'หางดง', 'สารภี', 'สันกำแพง',
                    'แม่แตง', 'ป่าแดด', 'แม่วาง'
                ];

                chiangMaiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'แม่ฮ่องสอน') {
                // เขตในจังหวัดแม่ฮ่องสอน
                var maeHongSonDistricts = [
                    'เมืองแม่ฮ่องสอน', 'ปาย', 'แม่ลาน้อย',
                    'แม่สะเรียง', 'ขุนยวม'
                ];

                maeHongSonDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ลำปาง') {
                // เขตในจังหวัดลำปาง
                var lampangDistricts = [
                    'เมืองลำปาง', 'แม่ทะ', 'เกาะคา',
                    'ลำปางหลวง', 'งาว', 'เสริมงาม'
                ];

                lampangDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ลำพูน') {
                // เขตในจังหวัดลำพูน
                var lamphunDistricts = [
                    'เมืองลำพูน', 'บ้านโฮ่ง', 'ลำพูน',
                    'ป่าซาง', 'แม่ทา', 'ดอยติ'
                ];

                lamphunDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พะเยา') {
                // เขตในจังหวัดพะเยา
                var phayaoDistricts = [
                    'เมืองพะเยา', 'เชียงคำ', 'ดอกคำใต้',
                    'ป่าแดด', 'แม่ใจ', 'ร้องกวาง'
                ];

                phayaoDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'แพร่') {
                // เขตในจังหวัดแพร่
                var phraeDistricts = [
                    'เมืองแพร่', 'ร้องกวาง', 'สูงเม่น',
                    'บ้านถิ่น', 'หนองม่วง'
                ];

                phraeDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'น่าน') {
                // เขตในจังหวัดน่าน
                var nanDistricts = [
                    'เมืองน่าน', 'ภูเพียง', 'นาน้อย',
                    'นาหมื่น', 'เชียงกลาง', 'ท่าวังผา'
                ];

                nanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'อุตรดิตถ์') {
                // เขตในจังหวัดอุตรดิตถ์
                var uttaraditDistricts = [
                    'เมืองอุตรดิตถ์', 'ตรอน', 'ลับแล',
                    'บ้านโคก', 'ทองแสนขัน'
                ];

                uttaraditDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กาญจนบุรี') {
                // เขตในจังหวัดกาญจนบุรี
                var kanchanaburiDistricts = [
                    'เมืองกาญจนบุรี', 'ไทรโยค', 'ด่านมะขามเตี้ย',
                    'บ่อพลอย', 'ศรีสวัสดิ์', 'เลาขวัญ',
                    'ทองผาภูมิ', 'สังขละบุรี', 'พนมทวน'
                ];

                kanchanaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ตาก') {
                // เขตในจังหวัดตาก
                var takDistricts = [
                    'เมืองตาก', 'บ้านตาก', 'สามเงา',
                    'แม่สอด', 'ตาก', 'ท่าสองยาง'
                ];

                takDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ราชบุรี') {
                // เขตในจังหวัดราชบุรี
                var ratchaburiDistricts = [
                    'เมืองราชบุรี', 'จอมบึง', 'ดำเนินสะดวก',
                    'โพธาราม', 'บางแพ', 'บ้านคา'
                ];

                ratchaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'เพชรบุรี') {
                // เขตในจังหวัดเพชรบุรี
                var phetchaburiDistricts = [
                    'เมืองเพชรบุรี', 'ชะอำ', 'บางสะพาน',
                    'บ้านแหลม', 'แก่งกระจาน'
                ];

                phetchaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ประจวบคีรีขันธ์') {
                // เขตในจังหวัดประจวบคีรีขันธ์
                var prachuapKhiriKhanDistricts = [
                    'เมืองประจวบคีรีขันธ์', 'หัวหิน', 'ปราณบุรี',
                    'บางสะพาน', 'ทับสะแก', 'บ่อนอก'
                ];

                prachuapKhiriKhanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ชลบุรี') {
                // เขตในจังหวัดชลบุรี
                var chonburiDistricts = [
                    'เมืองชลบุรี', 'พานทอง', 'ศรีราชา',
                    'บางละมุง', 'สัตหีบ', 'บ่อวิน',
                    'บ้านบึง', 'หนองใหญ่'
                ];

                chonburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ระยอง') {
                // เขตในจังหวัดระยอง
                var rayongDistricts = [
                    'เมืองระยอง', 'บ้านฉาง', 'แกลง',
                    'ปราณบุรี', 'ปลวกแดง', 'พัทยา'
                ];

                rayongDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'จันทบุรี') {
                // เขตในจังหวัดจันทบุรี
                var chanthaburiDistricts = [
                    'เมืองจันทบุรี', 'ขลุง', 'เขาคิชฌกูฏ',
                    'ท่าใหม่', 'สอยดาว'
                ];

                chanthaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ตราด') {
                // เขตในจังหวัดตราด
                var TratDistricts = [
                    'เมืองตราด', 'บ่อไร่', 'คลองใหญ่',
                    'เกาะกูด', 'เกาะช้าง'
                ];

                TratDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ฉะเชิงเทรา') {
                // เขตในจังหวัดฉะเชิงเทรา
                var chachoengsaoDistricts = [
                    'เมืองฉะเชิงเทรา', 'บางปะกง', 'พนมสารคาม',
                    'คลองเขื่อน', 'ฉะเชิงเทรา', 'สนามชัยเขต'
                ];

                chachoengsaoDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'อุบลราชธานี') {
                // เขตในจังหวัดอุบลราชธานี
                var ubontDistricts = [
                    'เมืองอุบลราชธานี', 'กันทรลักษ์', 'เดชอุดม',
                    'ตระการพืชผล', 'เขมราฐ', 'นาจะหลวย',
                    'วารินชำราบ', 'โพธิ์ไทร'
                ];

                ubontDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ขอนแก่น') {
                // เขตในจังหวัดขอนแก่น
                var khonKaenDistricts = [
                    'เมืองขอนแก่น', 'บ้านไผ่', 'ชุมแพ',
                    'เขาสวนกวาง', 'หนองเรือ', 'น้ำพอง',
                    'ท้องถิ่น', 'อำเภอขอนแก่น'
                ];

                khonKaenDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นครราชสีมา') {
                // เขตในจังหวัดนครราชสีมา
                var nakhonRatchasimaDistricts = [
                    'เมืองนครราชสีมา', 'ปากช่อง', 'ขามทะเลสอ',
                    'ด่านขุนทด', 'ชุมพวง', 'บัวใหญ่',
                    'โนนสูง', 'เสิงสาง'
                ];

                nakhonRatchasimaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'เลย') {
                // เขตในจังหวัดเลย
                var loeiDistricts = [
                    'เมืองเลย', 'เชียงคาน', 'ภูเรือ',
                    'ด่านซ้าย', 'นาแห้ว', 'เอราวัณ'
                ];

                loeiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'มหาสารคาม') {
                // เขตในจังหวัดมหาสารคาม
                var mahaSarakhamDistricts = [
                    'เมืองมหาสารคาม', 'แกดำ', 'นาดูน',
                    'พยัคฆภูมิ', 'โกสุมพิสัย'
                ];

                mahaSarakhamDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กาฬสินธุ์') {
                // เขตในจังหวัดกาฬสินธุ์
                var kalasinDistricts = [
                    'เมืองกาฬสินธุ์', 'ห้วยเม็ก', 'คำม่วง',
                    'สมเด็จ', 'หนองกุงศรี'
                ];

                kalasinDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สุรินทร์') {
                // เขตในจังหวัดสุรินทร์
                var surinDistricts = [
                    'เมืองสุรินทร์', 'ชุมพลบุรี', 'รัตนบุรี',
                    'สนม', 'สังขะ', 'พนมดงรัก'
                ];

                surinDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กระบี่') {
                // เขตในจังหวัดกระบี่
                var krabiDistricts = [
                    'เมืองกระบี่', 'อ่าวลึก', 'คลองท่อม',
                    'ลำทับ', 'เขาพนม', 'ปลายพระยา',
                    'เกาะลันตา', 'เหนือคลอง'
                ];

                krabiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ชุมพร') {
                // เขตในจังหวัดชุมพร
                var chumphonDistricts = [
                    'เมืองชุมพร', 'ปะทิว', 'ท่าแซะ',
                    'หลังสวน', 'สวี', 'ละแม',
                    'พะโต๊ะ'
                ];

                chumphonDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ตรัง') {
                // เขตในจังหวัดตรัง
                var trangDistricts = [
                    'เมืองตรัง', 'ย่านตาขาว', 'ห้วยยอด',
                    'นาโยง', 'ตรัง', 'สิเกา',
                    'กันตัง'
                ];

                trangDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นครศรีธรรมราช') {
                // เขตในจังหวัดนครศรีธรรมราช
                var nakhonSiDistricts = [
                    'เมืองนครศรีธรรมราช', 'ท่าศาลา', 'นาบอน',
                    'พิปูน', 'ช้างกลาง', 'ร่อนพิบูลย์',
                    'ลานสกา', 'พระพรหม'
                ];

                nakhonSiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นราธิวาส') {
                // เขตในจังหวัดนราธิวาส
                var narathiwatDistricts = [
                    'เมืองนราธิวาส', 'ระแงะ', 'บาเจาะ',
                    'สุไหงโกลก', 'จะแนะ', 'รือเสาะ',
                    'ตากใบ'
                ];

                narathiwatDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ปัตตานี') {
                // เขตในจังหวัดปัตตานี
                var pattaniDistricts = [
                    'เมืองปัตตานี', 'หนองจิก', 'ทุ่งยางแดง',
                    'มายอ', 'สะบ้าย้อย', 'ปะนาเระ',
                    'โคกโพธิ์'
                ];

                pattaniDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พังงา') {
                // เขตในจังหวัดพังงา
                var phangngaDistricts = [
                    'เมืองพังงา', 'คุระบุรี', 'ตะกั่วป่า',
                    'ท้ายเหมือง', 'เพลิง', 'เกาะยาว'
                ];

                phangngaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พัทลุง') {
                // เขตในจังหวัดพัทลุง
                var phatthalungDistricts = [
                    'เมืองพัทลุง', 'กงหรา', 'ควนขนุน',
                    'ป่าบอน', 'ศรีบรรพต', 'ทุ่งนางจา',
                    'ตะโหมด', 'ศรีนครินทร์', 'บางแก้ว',
                    'เขาชัยสน', 'หัวไทร'
                ];



                phatthalungDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ภูเก็ต') {
                // เขตในจังหวัดภูเก็ต
                var phuketDistricts = [
                    'เมืองภูเก็ต', 'กะทู้', 'ถลาง'
                ];

                phuketDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ยะลา') {
                // เขตในจังหวัดยะลา
                var yalaDistricts = [
                    'เมืองยะลา', 'เบตง', 'รามัน',
                    'กรงปินัง', 'บันนังสตา', 'ทุ่งยางแดง'
                ];

                yalaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ระนอง') {
                // เขตในจังหวัดระนอง
                var ranongDistricts = [
                    'เมืองระนอง', 'กระบุรี', 'ละอุ่น',
                    'หลังสวน'
                ];

                ranongDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สงขลา') {
                // เขตในจังหวัดสงขลา
                var songkhlaDistricts = [
                    'เมืองสงขลา', 'หาดใหญ่', 'ควนเนียง',
                    'นาทวี', 'สะบ้าย้อย', 'เทพา',
                    'จะนะ', 'สทิงพระ', 'บางกล่ำ'
                ];

                songkhlaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สตูล') {
                // เขตในจังหวัดสตูล
                var satunDistricts = [
                    'เมืองสตูล', 'ควนกาหลง', 'ละงู',
                    'ท่าแพ', 'จะนะ', 'โคกโพธิ์'
                ];

                satunDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สุราษฎร์ธานี') {
                // เขตในจังหวัดสุราษฎร์ธานี
                var suratThaniDistricts = [
                    'เมืองสุราษฎร์ธานี', 'พุนพิน', 'ดอนสัก',
                    'คีรีรัฐนิคม', 'ท่าฉาง', 'เกาะสมุย',
                    'เกาะพะงัน'
                ];

                suratThaniDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'กรุงเทพมหานคร') {
                // เขตในกรุงเทพมหานคร
                var bangkokDistricts = [
                    'ดินแดง', 'ดุสิต', 'บางรัก',
                    'บางเขน', 'บางกอกน้อย', 'บางกอกใหญ่',
                    'บางพลัด', 'บางซื่อ', 'พญาไท',
                    'ราชเทวี', 'สะพานสูง', 'ห้วยขวาง',
                    'คลองสามวา', 'หนองจอก', 'ลาดพร้าว',
                    'วังทองหลาง', 'ประเวศ', 'วัฒนา',
                    'คลองเตย', 'ธนบุรี', 'คลองสาน',
                    'สัมพันธวงศ์', 'เขตพื้นที่ปกครองพิเศษ'
                ];

                bangkokDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นนทบุรี') {
                // เขตในนนทบุรี
                var nonthaburiDistricts = [
                    'เมืองนนทบุรี', 'บางกรวย', 'บางใหญ่',
                    'ปากเกร็ด', 'รัตนาธิเบศร์'
                ];

                nonthaburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ปทุมธานี') {
                // เขตในปทุมธานี
                var pathumThaniDistricts = [
                    'เมืองปทุมธานี', 'คลองหลวง', 'ธัญบุรี',
                    'ลาดหลุมแก้ว', 'หนองเสือ', 'สามโคก'
                ];

                pathumThaniDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สมุทรปราการ') {
                // เขตในสมุทรปราการ
                var samutPrakanDistricts = [
                    'เมืองสมุทรปราการ', 'พระประแดง', 'พระสมุทรเจดีย์',
                    'บางพลี', 'บางบ่อ', 'คลองด่าน',
                    'สำโรงเหนือ', 'สำโรงใต้'
                ];

                samutPrakanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สมุทรสาคร') {
                // เขตในสมุทรสาคร
                var samutSakhonDistricts = [
                    'เมืองสมุทรสาคร', 'บ้านแพ้ว', 'นครชัยศรี'
                ];

                samutSakhonDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'พระนครศรีอยุธยา') {
                // เขตในพระนครศรีอยุธยา
                var phraNakhonSiAyutthayaDistricts = [
                    'พระนครศรีอยุธยา', 'บางปะหัน', 'บางไทร',
                    'บางซ้าย', 'บางระกำ', 'นครหลวง',
                    'อุทัย', 'ผักไห่', 'ลาดบัวหลวง',
                    'ท่าเรือ', 'เฉลิมพระเกียรติ'
                ];

                phraNakhonSiAyutthayaDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ชัยนาท') {
                // เขตในชัยนาท
                var chaisanDistricts = [
                    'เมืองชัยนาท', 'มโนรมย์', 'วัดสิงห์',
                    'สรรคบุรี', 'หนองมะโมง', 'บรรพตพิสัย'
                ];

                chaisanDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'ลพบุรี') {
                // เขตในลพบุรี
                var lopburiDistricts = [
                    'เมืองลพบุรี', 'โคกสำโรง', 'พัฒนานิคม',
                    'บ้านหมี่', 'ท่าวุ้ง', 'ลำสนธิ',
                    'หนองม่วง'
                ];

                lopburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'นครปฐม') {
                // เขตในนครปฐม
                var nakhonPathomDistricts = [
                    'เมืองนครปฐม', 'นครชัยศรี', 'สามพราน',
                    'พุทธมณฑล'
                ];

                nakhonPathomDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สุพรรณบุรี') {
                // เขตในสุพรรณบุรี
                var suphanburiDistricts = [
                    'เมืองสุพรรณบุรี', 'เดิมบางนางบวช', 'ด่านช้าง',
                    'สามชุก', 'อู่ทอง', 'บางปลาม้า',
                    'ศรีประจันต์', 'คลองขลุง'
                ];

                suphanburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'สิงห์บุรี') {
                // เขตในสิงห์บุรี
                var singburiDistricts = [
                    'เมืองสิงห์บุรี', 'บางแสนน', 'ค่ายบางระจัน',
                    'อินทร์บุรี', 'พรหมบุรี'
                ];

                singburiDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            } else if (selectedProvince === 'อ่างทอง') {
                // เขตในอ่างทอง
                var angthongDistricts = [
                    'เมืองอ่างทอง', 'ไชโย', 'ป่าโมก',
                    'โพธิ์ทอง', 'แสวงหา', 'สามโก้'
                ];

                angthongDistricts.forEach(function(district) {
                    $('#houseDistrict_Adds').append(
                        $('<option>', {
                            value: district,
                            text: district
                        })
                    );
                });
            }
        });
    });




    $('#houseDistrict_Adds').on('change', function() {
        var selectedDistrict = $(this).val(); // ค่าเขตที่ถูกเลือก

        // ลบตัวเลือกเก่าใน select ตำบล
        $('#houseTambon_Adds').empty().append('<option value="">ตำบล</option>');

        // ตรวจสอบเขตที่เลือกและเพิ่มตำบลตามเขตนั้น ๆ
        if (selectedDistrict === 'เมืองเชียงราย') {
            // ตำบลในเมืองเชียงราย
            var tambonsInChiangRai = [
                'แม่สาย', 'เชียงของ', 'เมืองเชียงราย',
                'ป่าอ้อดอนชัย', 'บ้านดู่', 'สันทราย',
                'สันกลาง', 'ห้วยสัก', 'หนองป่าก่อ',
                'เกาะช้าง'
            ];
            tambonsInChiangRai.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่สรวย') {
            // ตำบลในแม่สรวย
            var tambonsMaeSruay = [
                'แม่สรวย', 'เชียงของ', 'เมืองเชียงราย',
                'ป่าอ้อดอนชัย', 'บ้านดู่', 'แม่ลาน้อย',
                'ทุ่งรวงทอง', 'ป่าแดด'
            ];
            tambonsMaeSruay.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เชียงของ') {
            // ตำบลในเชียงของ
            var tambonsChianKong = ['บ้านแซว', 'บ้านห้วย', 'บ้านโป่ง', 'บ้านยาง', 'บ้านแม่เงิน'];
            tambonsChianKong.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เวียงแก่น') {
            // ตำบลในเวียงแก่น
            var tambonsWiangGan = ['บ้านด้าย', 'บ้านป่า', 'บ้านไร่', 'บ้านใหม่', 'บ้านท่าข้าม'];
            tambonsWiangGan.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ป่าแดด') {
            // ตำบลในป่าแดด
            var tambonsPaDaed = ['บ้านใหม่', 'บ้านห้วย', 'บ้านตะเคียน', 'บ้านกาด', 'บ้านนาทราย'];
            tambonsPaDaed.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่จัน') {
            // ตำบลในแม่จัน
            var tambonsMaechan = ['บ้านด้าย', 'บ้านโป่ง', 'บ้านใหม่', 'บ้านห้วย', 'บ้านแม่จัน',
                'บ้านสันป่าหวาย', 'บ้านแม่พริก', 'บ้านแม่ลอย', 'บ้านห้วยน้ำขุ่น', 'บ้านสันทราย'
            ];
            tambonsMaechan.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ดอยหล่อ') {
            // ตำบลในดอยหล่อ
            var tambonsDoiLo = ['ดอยหล่อ', 'บ้านกาด', 'บ้านโป่ง', 'แม่ทา', 'สันทราย', 'สันป่าตอง', 'บ้านหนองแก',
                'บ้านแม่แฝก', 'บ้านหนองอีบ', 'บ้านหัวน้ำ'
            ];
            tambonsDoiLo.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'พญาเม็งราย') {
            var tambonsPhayaMengrai = ['บ้านหนองบัว', 'บ้านหัวฝาย', 'บ้านแม่ปืม', 'บ้านแม่เจดีย์', 'บ้านจันทร์',
                'บ้านโป่งน้ำร้อน', 'บ้านแม่สุก'
            ];
            tambonsPhayaMengrai.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่ฟ้าหลวง') {
            var tambonsMaeFaLuang = ['บ้านท่าตอน', 'บ้านแม่ฟ้าหลวง', 'บ้านแม่สะลอง', 'บ้านแม่จัน',
                'บ้านแม่ฟ้าหลวง', 'บ้านแม่สาย'
            ];
            tambonsMaeFaLuang.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ขุนตาล') {
            var tambonsKhunTan = ['บ้านหลวง', 'บ้านขุนตาล', 'บ้านแม่ทราย', 'บ้านป่าบง', 'บ้านหนองช้าง'];
            tambonsKhunTan.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'บ้านดู่') {
            var tambonsBanDu = ['บ้านดู่', 'บ้านท่าม่วง', 'บ้านแม่ขะ', 'บ้านแม่ทา'];
            tambonsBanDu.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'จอมทอง') {
            var tambonsJomThong = ['บ้านจอมทอง', 'บ้านบ่อ', 'บ้านขี้เหล็ก', 'บ้านแม่สวด'];
            tambonsJomThong.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เมืองเชียงใหม่') {
            // ตำบลในเมืองเชียงใหม่
            var tambonsMuangChiangMai = ['บ้านป่าตอง', 'บ้านขอนแก่น', 'บ้านสันทราย', 'บ้านแสนเมือง',
                'บ้านหนองหอย', 'บ้านน้อยหน่า', 'บ้านแม่แรม', 'บ้านท่าศาลา'
            ];
            tambonsMuangChiangMai.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่ริม') {
            // ตำบลในแม่ริม
            var tambonsMaeRim = ['บ้านแม่ริม', 'บ้านสันนาเม็ง', 'บ้านป่าบง', 'บ้านสันทราย', 'บ้านแม่แรม'];
            tambonsMaeRim.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ดอยสะเก็ด') {
            // ตำบลในดอยสะเก็ด
            var tambonsDoiSaket = ['บ้านดอยสะเก็ด', 'บ้านสันนา', 'บ้านหนองหอย', 'บ้านแม่เหียะ', 'บ้านสบเปิง'];
            tambonsDoiSaket.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'หางดง') {
            // ตำบลในหางดง
            var tambonsHangDong = ['บ้านหางดง', 'บ้านแม่หอ', 'บ้านสันผีเสื้อ', 'บ้านแช่แห้ง', 'บ้านสันกำแพง'];
            tambonsHangDong.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'สารภี') {
            // ตำบลในสารภี
            var tambonsSaraphi = ['บ้านสารภี', 'บ้านทุ่งฝาย', 'บ้านนาพูน', 'บ้านหนองจอก', 'บ้านหนองหอย'];
            tambonsSaraphi.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'สันกำแพง') {
            // ตำบลในสันกำแพง
            var tambonsSanKamphaeng = ['บ้านสันกำแพง', 'บ้านท่าศาลา', 'บ้านบ้านโป่ง', 'บ้านหนองวัว',
                'บ้านหนองผึ้ง'
            ];
            tambonsSanKamphaeng.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่แตง') {
            // ตำบลในแม่แตง
            var tambonsMaeTang = ['บ้านแม่แตง', 'บ้านป่าบง', 'บ้านแม่แซม', 'บ้านกือหลวง', 'บ้านไฮ'];
            tambonsMaeTang.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'ป่าแดด') {
            // ตำบลในป่าแดด
            var tambonsPaDaed = ['บ้านใหม่', 'บ้านห้วย', 'บ้านตะเคียน', 'บ้านกาด', 'บ้านนาทราย'];
            tambonsPaDaed.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'แม่วาง') {
            // ตำบลในแม่วาง
            var tambonsMaeWang = ['บ้านแม่วาง', 'บ้านแม่วางเหนือ', 'บ้านแม่วางใต้', 'บ้านบ่อแก้ว',
            'บ้านป่าตัน'];
            tambonsMaeWang.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }

        if (selectedDistrict === 'เมื่องแม่ฮ่องสอน') {
            // ตำบลในแม่ฮ่องสอน
            var tambonsMaeHongSon = ['บ้านหลวง', 'บ้านแม่ทราย', 'บ้านป่าแป๋', 'บ้านแม่ลาน', 'บ้านแม่ฮ่องสอน'];
            tambonsMaeHongSon.forEach(function(tambon) {
                $('#houseTambon_Adds').append(
                    $('<option>', {
                        value: tambon,
                        text: tambon
                    })
                );
            });
        }
    });
</script>
