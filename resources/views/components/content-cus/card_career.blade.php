<script>
    $(document).ready(function() {
        // ฟังก์ชันสำหรับดึงข้อมูลอาชีพ
        function fetchCareerData() {
            const customerId = '{{ $customer->id ?? '-' }}'; // รับค่า customer ID จาก Blade
            $.ajax({
                url: '/get-career-data/' + customerId,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    let html = '';
                    let hasCareerCards = false; // ตัวแปรสำหรับเช็คว่ามีการ์ดหรือไม่

                    if (data.careers && data.careers.length > 0) {
                        hasCareerCards = true; // พบการ์ดเพิ่มค่าเป็น true

                        $.each(data.careers, function(index, career) {
                            html += `
                            <div class="flex space-x-4">
                                <div class="w-full mt-0">
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
                                        <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                            <div class="flex justify-between items-center">
                                                <div class="flex-1">
                                                    <h6 class="text-primary font-semibold">
                                                        <i class="fas fa-tag"></i> ${career.Career_Cus}
                                                    </h6>
                                                </div>
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
                                                        <i class="fas fa-building text-success mb-1 h-5"></i>  <strong>สถานที่ทำงาน</strong> : ${career.Workplace_Cus}<br>
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
                        html = `<p class="text-center text-muted" hidden>ไม่พบข้อมูลอาชีพ</p>`; // ข้อความเมื่อไม่มีข้อมูลอาชีพ
                    }

                    $('#career-container').html(html);

                    // ซ่อน career-master ถ้ามีการ์ด
                    if (hasCareerCards) {
                        $('.career-master').hide();
                        $('#prev-master-2').show();
                        $('#next-master-2').show();
                    } else {
                        $('.career-master').show();
                        $('#prev-master-2').hide();
                        $('#next-master-2').hide();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                }
            });
        }

        // เรียกใช้ฟังก์ชันเพื่อดึงข้อมูลอาชีพเมื่อเริ่มต้น
        fetchCareerData();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // ตรวจสอบการคลิกปุ่มบันทึก
        $('#submitBtnCareer').on('click', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มตามปกติ
            validateForm(); // เรียกใช้ฟังก์ชัน validateForm
        });

        function validateForm() {
            var isValid = true; // เริ่มต้นสถานะเป็นจริง
            $('.error').remove(); // ลบข้อความแสดงข้อผิดพลาดก่อนหน้า

            // ตรวจสอบฟิลด์ที่จำเป็น
            const fields = [{
                    id: '#Career_Cus',
                    message: 'กรุณาเลือกอาชีพ'
                },
                {
                    id: '#Income_Cus',
                    message: 'กรุณากรอกรายได้'
                },
                {
                    id: '#BeforeIncome_Cus',
                    message: 'กรุณากรอกหักค่าใช้จ่าย'
                },
                {
                    id: '#AfterIncome_Cus',
                    message: 'กรุณากรอกคงเหลือ'
                },
                {
                    id: '#Workplace_Cus',
                    message: 'กรุณากรอกสถานที่ทำงาน'
                },
                {
                    id: '#Coordinates',
                    message: 'กรุณากรอกพิกัด'
                },
                {
                    id: '#IncomeNote_Cus',
                    message: 'กรุณากรอกรายละเอียด'
                }
            ];

            fields.forEach(function(field) {
                if ($(field.id).val().trim() === '') {
                    $(field.id).addClass('border-red-500');
                    $(field.id).after(
                        `<span class="error text-red-500 text-xs flex items-center mt-1">
                            <i class="fas fa-exclamation-circle mr-2"></i>${field.message}
                        </span>`
                    );
                    isValid = false;
                } else {
                    $(field.id).removeClass('border-red-500');
                }
            });

            if (!isValid) {
                setTimeout(function() {
                    $('.error').fadeOut(1000, function() {
                        $(this).remove();
                    });
                }, 2000);
                return; // หยุดการทำงานถ้าฟอร์มไม่ valid
            }

            // หากฟอร์ม valid ส่งข้อมูล
            submitForm();
        }

        function submitForm() {
            var formData = $('#careerForm').serialize(); // แปลงฟอร์มเป็นข้อมูลที่สามารถส่งได้

            $.ajax({
                url: '{{ route('career.store') }}', // URL ที่ถูกต้อง
                method: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: 'สำเร็จ!',
                        text: 'สร้างอาชีพลูกค้าสำเร็จแล้ว!',
                        icon: 'success',
                        confirmButtonText: 'ตกลง'
                    }).then(() => {
                        fetchCareerData(); // รีเฟรชข้อมูลหลังจากสำเร็จ
                    });
                    $('#careerForm')[0].reset(); // รีเซ็ตฟอร์ม
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        $.each(errors, function(key, value) {
                            Swal.fire({
                                title: 'ข้อผิดพลาด!',
                                text: value[0],
                                icon: 'error',
                                confirmButtonText: 'ตกลง'
                            });
                        });
                    } else {
                        Swal.fire({
                            title: 'ข้อผิดพลาด!',
                            text: 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง.',
                            icon: 'error',
                            confirmButtonText: 'ตกลง'
                        });
                    }
                }
            });
        }

        // หากต้องการจัดการกับปุ่มยกเลิก
        $('#closeModal_career_button').on('click', function() {
            // ปิดโมดัลหรือทำการใด ๆ ที่ต้องการ
        });

        // เพิ่มเหตุการณ์สำหรับการค้นหา
        $('#searchInput').on('keyup', function() {
            let value = $(this).val().toLowerCase();
            $('.career-card').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>
