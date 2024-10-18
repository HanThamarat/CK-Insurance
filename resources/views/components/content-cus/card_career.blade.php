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
</div>

