<script>
    $(document).ready(function() {
        $('#Ratetype_id').change(function() {
            const selectedType = $(this).val();
            // AJAX สำหรับดึงข้อมูล Brand Options
            $.ajax({
                url: '/api/brand-options',
                method: 'GET',
                data: {
                    ratetype_id: selectedType,
                    name_vehicle: $('#Name_Vehicle').val()
                },
                dataType: 'json',
                success: function(data) {
                    const selectElement = $('#Brand_car');
                    selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                    // เพิ่มตัวเลือก "ยี่ห้อรถ"
                    selectElement.append('<option value="">ยี่ห้อรถ</option>');

                    // เพิ่มตัวเลือกแบรนด์รถยนต์
                    data.carBrands.forEach(function(option) {
                        const opt = $('<option></option>')
                            .val(option.id)
                            .text(option.Brand_car)
                            .data('brand_car', option.Brand_car); // เพิ่มข้อมูล Brand_car
                        selectElement.append(opt);
                    });

                    // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                    data.motoBrands.forEach(function(option) {
                        const opt = $('<option></option>')
                            .val(option.id)
                            .text(option.Brand_moto)
                            .data('brand_car', option.Brand_moto); // เพิ่มข้อมูล Brand_moto
                        selectElement.append(opt);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Brand options:', error);
                }
            });
        });

        $('#Name_Vehicle').change(function() {
            const selectedVehicle = $(this).val();

            // ตรวจสอบว่าค่าที่เลือกคือ "ประเภทรถ 2"
            if (selectedVehicle === "ประเภทรถ 2") {
                // ซ่อนตัวเลือกแบรนด์ทั้งหมด
                $('#Brand_car').empty().append('<option value="">เลือกยี่ห้อรถ</option>');
                return; // ออกจากฟังก์ชัน
            }

            const selectedType = $('#Ratetype_id').val();

            // AJAX สำหรับดึงข้อมูล Brand Options
            $.ajax({
                url: '/api/brand-options',
                method: 'GET',
                data: {
                    ratetype_id: selectedType,
                    name_vehicle: selectedVehicle
                },
                dataType: 'json',
                success: function(data) {
                    const selectElement = $('#Brand_car');
                    selectElement.empty(); // ล้างตัวเลือกก่อนหน้า

                    // เพิ่มตัวเลือก "ยี่ห้อรถ"
                    selectElement.append('<option value="">ยี่ห้อรถ</option>');

                    // เพิ่มตัวเลือกแบรนด์รถยนต์
                    data.carBrands.forEach(function(option) {
                        const opt = $('<option></option>')
                            .val(option.id)
                            .text(option.Brand_car)
                            .data('brand_moto', option.Brand_car); // เพิ่มข้อมูล Brand_car
                        selectElement.append(opt);
                    });

                    // เพิ่มตัวเลือกแบรนด์มอเตอร์ไซค์
                    data.motoBrands.forEach(function(option) {
                        const opt = $('<option></option>')
                            .val(option.id)
                            .text(option.Brand_moto)
                            .data('brand_moto', option.Brand_moto); // เพิ่มข้อมูล Brand_moto
                        selectElement.append(opt);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Brand options:', error);
                }
            });
        });
    });

    function handleSelectChange3(selectElement) {
        const label = $('#label_Brand_car');
        if (selectElement.value) {
            label.addClass('translate-y-[-2rem] text-gray-400');
        } else {
            label.removeClass('translate-y-[-2rem] text-gray-400');
        }
    }

</script>
