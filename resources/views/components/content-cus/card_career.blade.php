<script>
    $(document).ready(function() {
        function fetchCareerData() {
            const customerId = '{{ $customer->id ?? '-' }}'; // รับค่า customer ID จาก Blade
            $.ajax({
                url: '/get-career-data',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    let html = '';
                    $.each(data, function(index, career) {
                        // ตรวจสอบว่า DataCus_id ตรงกับ customer ID หรือไม่
                        if (career.DataCus_id == customerId) {
                            html += `
                            <div class="flex space-x-4">
                                <div class="w-full mt-[-30]">
                                    <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
                                        <div class="bg-info bg-opacity-25 rounded-t-lg p-4 bg-orange-200">
                                            <div class="flex justify-between items-center">
                                                <div class="flex-1">
                                                    <h6 class="text-primary font-semibold">
                                                        <i class="fas fa-tag"></i> ${career.Main_Career}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex">
                                                <div class="flex-1">
                                                    <p class="font-semibold text-truncate">
                                                        <input type="hidden" name="DataCus_id" value="${career.DataCus_id}">
                                                        <i class="fas fa-info-circle text-success h-5"></i> : ${career.DetailCareer_Cus}<br>
                                                        <i class="fas fa-bookmark text-success h-5"></i> : ${career.Workplace_Cus}<br>
                                                        <i class="fas fa-table text-success h-5"></i> : ${career.Income_Cus}
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
                                                        <i class="fas fa-clock"></i> ${new Date(career.created_at).toLocaleDateString()} <!-- แสดงวันที่ในรูปแบบที่เข้าใจได้ -->
                                                    </div>
                                                    <div class="text-right">
                                                        <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i> ${career.UserInsert}</p>
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
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                }
            });
        }

        fetchCareerData();
    });
</script>
