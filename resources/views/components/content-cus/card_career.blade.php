<script>
    $(document).ready(function() {
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
                                                    <p class="font-semibold text-truncate">
                                                        <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
                                                        <!--<i class="fas fa-info-circle text-success mb-1 h-5"></i> : รายละเอียดอาชีพ : ${career.IncomeNote_Cus}<br>-->
                                                        <i class="fas fa-bookmark text-success mb-1 h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br>
                                                        <i class="fas fa-table text-success mb-1 h-5"></i> : รายได้ : ${career.Income_Cus}<br>
                                                        <i class="fas fa-briefcase text-success mb-1 h-5"></i> : อาชีพ : ${career.Career_Cus}<br>
                                                        <i class="fas fa-building text-success mb-1 h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br>
                                                        <i class="fas fa-money-bill text-success mb-0 h-5"></i> : เงินเดือน : ${career.Income_Cus}
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

        fetchCareerData();
    });
</script>






{{-- <script>
    $(document).ready(function() {
        function fetchCareerData() {
            const customerId = '{{ $customer->id ?? '-' }}'; // รับค่า customer ID จาก Blade
            $.ajax({
                url: '/get-career-data/' + customerId,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    let html = '';
                    let hasAddressCards = false; // ตัวแปรสำหรับเช็คว่ามีการ์ดหรือไม่

                    $.each(data, function(index, career) {
                        // ตรวจสอบว่า DataCus_id ตรงกับ customer ID หรือไม่
                        if (career.DataCus_id == customerId) {
                            hasAddressCards = true; // พบการ์ดเพิ่มค่าเป็น true
                            html += `
                            <div class="flex space-x-4">
                                <div class="w-full mt-[-30]">
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
                                                    <p class="font-semibold text-truncate">
                                                        <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
                                                        <i class="fas fa-info-circle text-success h-5"></i> : รายละเอียดอาชีพ : ${career.IncomeNote_Cus}<br>
                                                        <i class="fas fa-bookmark text-success h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br>
                                                        <i class="fas fa-table text-success h-5"></i> : รายได้ : ${career.Income_Cus}<br>
                                                        <i class="fas fa-briefcase text-success h-5"></i> : อาชีพ : ${career.Career_Cus}<br> <!-- แสดง Career_Cus -->
                                                        <i class="fas fa-building text-success h-5"></i> : สถานที่ทำงาน : ${career.Workplace_Cus}<br> <!-- แสดง Workplace_Cus -->
                                                        <i class="fas fa-money-bill text-success h-5"></i> : เงินเดือน : ${career.Income_Cus} <!-- แสดง Income_Cus -->

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
                        }
                    });

                    $('#career-container').html(html);

                    // ซ่อน career-master ถ้ามีการ์ด
                    if (hasAddressCards) {
                        $('.career-master').hide();
                    } else {
                        $('.career-master').show();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                }
            });
        }

        fetchCareerData();
    });
</script> --}}
