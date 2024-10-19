{{-- <div class="flex space-x-4">
    <div class="w-full">
        <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500"
            id="cmptask-1">
            <div class="bg-info bg-opacity-25 rounded-t-lg p-4">
                <div class="flex justify-between items-center">
                    <div class="flex-1">
                        <h6 class="text-primary font-semibold">
                            <i class="fas fa-tag"></i> <!-- ใช้ Font Awesome -->
                        </h6>
                    </div>
                    <div class="relative">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle text-muted" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical text-muted h-5"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <span class="text-primary text-center dropdown-item" disabled="">รายการ</span>
                                <div class="dropdown-divider"></div>
                                <a id="edit-about-cus"
                                    class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl"
                                    data-link="https://ckl.co.th/cus/57129/edit?funs=manage-adds">แก้ไข <i
                                        class="fas fa-edit text-warning fs-4"></i></a> <!-- ใช้ Font Awesome -->
                                <a id="edit-about-cus"
                                    class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl"
                                    data-link="https://ckl.co.th/cus/57129?funs=manage-adds">ดูข้อมูล <i
                                        class="fas fa-eye text-primary fs-4"></i></a> <!-- ใช้ Font Awesome -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="flex">

                    <div class="flex-1">
                        <h1>ข้อมูลที่อยู่</h1>
                        <div class="row" id="address-list">
                            <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/home2.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                    </div>
                </div>
            </div>
            <div class="p-4 border-t">
                <small class="text-muted">
                    <div class="flex justify-between items-center">
                        <div title="4 เดือนที่แล้ว">
                            <i class="fas fa-clock"></i> 4 เดือนที่แล้ว <!-- ใช้ Font Awesome -->
                        </div>
                        <div class="text-right">
                            <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p>
                            <!-- ใช้ Font Awesome -->
                        </div>
                    </div>
                </small>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="flex-1">
    <a href="javascript:void(0);" class="text-warning fs-6 font-semibold" id="task-name" title="ที่อยู่ปัจจุบัน">ที่อยู่ปัจจุบัน <i class="fas fa-check-circle text-primary d-none"></i></a> <!-- ใช้ Font Awesome -->
    <p class="font-semibold text-truncate">
        <i class="fas fa-info-circle text-success h-5"></i> : หาดใหญ่<br> <!-- ใช้ Font Awesome -->
        <i class="fas fa-bookmark text-success h-5"></i> : หาดใหญ่<br> <!-- ใช้ Font Awesome -->
        <i class="fas fa-table text-success h-5"></i> : สงขลา <!-- ใช้ Font Awesome -->
    </p>
</div> --}}





{{-- $(document).ready(function() {
    // ฟังก์ชันดึงข้อมูลที่อยู่
    function fetchAddresses() {
        $.ajax({
            url: '/get-address-data', // URL ที่เชื่อมต่อกับเส้นทางที่เราสร้างไว้
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#address-list').empty(); // เคลียร์เนื้อหาที่มีอยู่
                $.each(response, function(index, address) {
                    $('#address-list').append(`
                        <div class="flex space-x-4">
                            <div class="w-full">
                                <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-1">
                                    <div class="bg-info bg-opacity-25 rounded-t-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <div class="flex-1">
                                                <h6 class="text-primary font-semibold">
                                                    <i class="fas fa-tag"></i> <!-- ใช้ Font Awesome -->
                                                </h6>
                                            </div>
                                            <div class="relative">
                                                <div class="dropdown float-right">
                                                    <a href="#" class="dropdown-toggle text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical text-muted h-5"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <span class="text-primary text-center dropdown-item" disabled="">รายการ</span>
                                                        <div class="dropdown-divider"></div>
                                                        <a id="edit-about-cus" class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl" data-link="https://ckl.co.th/cus/57129/edit?funs=manage-adds">แก้ไข <i class="fas fa-edit text-warning fs-4"></i></a> <!-- ใช้ Font Awesome -->
                                                        <a id="edit-about-cus" class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl" data-link="https://ckl.co.th/cus/57129?funs=manage-adds">ดูข้อมูล <i class="fas fa-eye text-primary fs-4"></i></a> <!-- ใช้ Font Awesome -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex">
                                            <div class="flex-1">
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                <i class="fa fa-map-marker-alt text-primary"></i> <strong>ที่อยู่ : </strong> ${address.houseNumber_Adds}, ${address.road_Adds}
                                                            </h5>
                                                            <p class="card-text">
                                                                <i class="fa fa-home text-success"></i> <strong>หมู่บ้าน : </strong> ${address.village_Adds}
                                                            </p>
                                                            <p class="card-text">
                                                                <i class="fa fa-city text-info"></i> <strong>จังหวัด : </strong> ${address.houseProvince_Adds}
                                                            </p>
                                                            <p class="card-text">
                                                                <i class="fa fa-envelope text-warning"></i> <strong>รหัสไปรษณีย์ : </strong> ${address.Postal_Adds}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('img/home2.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-t">
                                        <small class="text-muted">
                                            <div class="flex justify-between items-center">
                                                <div title="4 เดือนที่แล้ว">
                                                    <i class="fas fa-clock"></i> 4 เดือนที่แล้ว <!-- ใช้ Font Awesome -->
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p> <!-- ใช้ Font Awesome -->
                                                </div>
                                            </div>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
            },
            error: function(xhr, status, error) {
                console.log('Error: ' + error);
            }
        });
    }

    // เรียกฟังก์ชันดึงข้อมูลเมื่อหน้าเว็บโหลด
    fetchAddresses();
}); --}}



                {{-- <div class="grid grid-cols-2 gap-4">
                    @include('components.content-cus.card_career')
                    <div id="career-container"></div>

                </div> --}}
{{-- <div class="grid grid-cols-2 gap-4">
    @include('components.content-cus.card_address')
    <div class="row" id="address-list">
        <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
    </div>
</div> --}}


{{-- <div class="grid grid-cols-2 gap-4">
    @include('components.content-cus.card_address')
    <div class="row grid grid-cols-2 gap-4" id="address-list">
        <!-- ข้อมูลที่อยู่จะแสดงในที่นี้ -->
    </div>
</div> --}}




                    <!-- ปุ่มเพิ่มที่อยู่ -->
                    {{-- <button class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                        </svg>
                        เพิ่มที่อยู่
                    </button> --}}





                    {{-- <div class="flex space-x-4">
    <div class="w-full">
        <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-1">
            <div class="bg-info bg-opacity-25 rounded-t-lg p-4">
                <div class="flex justify-between items-center">
                    <div class="flex-1">
                        <h6 class="text-primary font-semibold">
                            <i class="fas fa-tag"></i> <!-- ใช้ Font Awesome -->
                        </h6>
                    </div>
                    <div class="relative">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical text-muted h-5"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <span class="text-primary text-center dropdown-item" disabled="">รายการ</span>
                                <div class="dropdown-divider"></div>
                                <a id="edit-about-cus" class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl" data-link="https://ckl.co.th/cus/57129/edit?funs=manage-adds">แก้ไข <i class="fas fa-edit text-warning fs-4"></i></a> <!-- ใช้ Font Awesome -->
                                <a id="edit-about-cus" class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl" data-link="https://ckl.co.th/cus/57129?funs=manage-adds">ดูข้อมูล <i class="fas fa-eye text-primary fs-4"></i></a> <!-- ใช้ Font Awesome -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="flex">
                    <div class="flex-1">
                        <a href="javascript:void(0);" class="text-warning fs-6 font-semibold" id="task-name" title="ที่อยู่ปัจจุบัน">ที่อยู่ปัจจุบัน <i class="fas fa-check-circle text-primary d-none"></i></a> <!-- ใช้ Font Awesome -->
                        <p class="font-semibold text-truncate">
                            <i class="fas fa-info-circle text-success h-5"></i> : หาดใหญ่<br> <!-- ใช้ Font Awesome -->
                            <i class="fas fa-bookmark text-success h-5"></i> : หาดใหญ่<br> <!-- ใช้ Font Awesome -->
                            <i class="fas fa-table text-success h-5"></i> : สงขลา <!-- ใช้ Font Awesome -->
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/career.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20">
                    </div>
                </div>
            </div>
            <div class="p-4 border-t">
                <small class="text-muted">
                    <div class="flex justify-between items-center">
                        <div title="4 เดือนที่แล้ว">
                            <i class="fas fa-clock"></i> 4 เดือนที่แล้ว <!-- ใช้ Font Awesome -->
                        </div>
                        <div class="text-right">
                            <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i></p> <!-- ใช้ Font Awesome -->
                        </div>
                    </div>
                </small>
            </div>
        </div>
    </div>
</div> --}}




{{-- <script>
    $(document).ready(function() {
        // ฟังก์ชันสำหรับดึงข้อมูล
        function fetchCareerData() {
            $.ajax({
                url: '/get-career-data',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // เริ่มต้น HTML ที่จะแสดงผล
                    let html = '';
                    $.each(data, function(index, career) {
                        html += `
                        <div class="flex space-x-4">
                            <div class="w-full">
                                <div class="card task-box border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500" id="cmptask-${career.id}">
                                    <div class="bg-info bg-opacity-25 rounded-t-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <div class="flex-1">
                                                <h6 class="text-primary font-semibold">
                                                    <i class="fas fa-tag"></i>
                                                </h6>
                                            </div>
                                            <div class="relative">
                                                <div class="dropdown float-right">
                                                    <a href="#" class="dropdown-toggle text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical text-muted h-5"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <span class="text-primary text-center dropdown-item" disabled="">รายการ</span>
                                                        <div class="dropdown-divider"></div>
                                                        <a id="edit-about-cus" class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl" data-link="https://ckl.co.th/cus/${career.id}/edit?funs=manage-adds">แก้ไข <i class="fas fa-edit text-warning fs-4"></i></a>
                                                        <a id="edit-about-cus" class="dropdown-item flex justify-between pe-auto edittask-details data-modal-xl" data-link="https://ckl.co.th/cus/${career.id}?funs=manage-adds">ดูข้อมูล <i class="fas fa-eye text-primary fs-4"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex">
                                            <div class="flex-1">
                                                <a href="javascript:void(0);" class="text-warning fs-6 font-semibold" id="task-name" title="${career.current_address}">${career.current_address} <i class="fas fa-check-circle text-primary d-none"></i></a>
                                                <p class="font-semibold text-truncate">
                                                    <i class="fas fa-info-circle text-success h-5"></i> : ${career.info}<br>
                                                    <i class="fas fa-bookmark text-success h-5"></i> : ${career.bookmark}<br>
                                                    <i class="fas fa-table text-success h-5"></i> : ${career.location}
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <img src="${career.image_url}" alt="${career.current_address}" class="w-36 h-20">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-t">
                                        <small class="text-muted">
                                            <div class="flex justify-between items-center">
                                                <div title="${career.created_at}">
                                                    <i class="fas fa-clock"></i> ${career.created_at}
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-muted mb-0 text-truncate"><i class="fas fa-user-circle"></i> ${career.user_name}</p>
                                                </div>
                                            </div>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });
                    // เพิ่ม HTML ลงในองค์ประกอบที่ต้องการแสดง
                    $('#career-container').html(html);
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
                }
            });
        }

        // เรียกฟังก์ชันเพื่อดึงข้อมูลเมื่อโหลดหน้า
        fetchCareerData();
    });
</script> --}}
