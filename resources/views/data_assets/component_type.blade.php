<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // เมื่อมีการเปลี่ยนแปลงที่ select ประเภทรถ 1
        $('#Vehicle_Type').change(function() {
            // รับค่าที่เลือกจาก select ประเภทรถ 1
            var selectedValue = $(this).val();

            // แสดง select ประเภทรถ 2
            $('#Vehicle_Type_PLT').show();

            // ลบทุก option ใน select ประเภทรถ 2 ยกเว้น option แรก
            $('#Vehicle_Type_PLT').find('option:not(:first)').remove();


            // เช็คค่าที่เลือกและเพิ่ม option ตามที่ต้องการ
            if (selectedValue === 'C01') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="2">{{ $typeVehicles->where('id', 2)->first()->Name_Vehicle }}</option>'
                    );
                $('#Vehicle_Type_PLT').append(
                    '<option value="3">{{ $typeVehicles->where('id', 3)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'C02') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="4">{{ $typeVehicles->where('id', 4)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'C03') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="4">{{ $typeVehicles->where('id', 4)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'C04') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="4">{{ $typeVehicles->where('id', 4)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'C05') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="7">{{ $typeVehicles->where('id', 7)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'C06') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="5">{{ $typeVehicles->where('id', 5)->first()->Name_Vehicle }}</option>'
                    );
                $('#Vehicle_Type_PLT').append(
                    '<option value="6">{{ $typeVehicles->where('id', 6)->first()->Name_Vehicle }}</option>'
                    );
                $('#Vehicle_Type_PLT').append(
                    '<option value="7">{{ $typeVehicles->where('id', 7)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'M01') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="1">{{ $typeVehicles->where('id', 1)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'M02') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="1">{{ $typeVehicles->where('id', 1)->first()->Name_Vehicle }}</option>'
                    );
            } else if (selectedValue === 'M03') {
                $('#Vehicle_Type_PLT').append(
                    '<option value="1">{{ $typeVehicles->where('id', 1)->first()->Name_Vehicle }}</option>'
                    );
            } else {
                // ตรวจสอบว่ามี option แรกหรือไม่
                if ($('#Vehicle_Type_PLT option[value=""]').length === 0) {
                    $('#Vehicle_Type_PLT').append(
                        '<option value="" selected>--- ประเภทรถ 2 ---</option>');
                }
            }
        });
    });
</script>
