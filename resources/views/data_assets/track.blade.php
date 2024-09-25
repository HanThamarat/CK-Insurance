<div class="modal fade" id="trackModal" tabindex="-1" aria-labelledby="trackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex m-3 mb-0">
                    <div class="flex-shrink-0 me-2">
                        <img src="{{ asset('images/track.png') }}" alt="" class="avatar-sm"
                            style="width: 40px; height: 40px;">
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="text-primary fw-semibold">สร้างทรัพย์ใหม่จากบันทึกติดตาม</h5>
                        <p class="text-muted mt-n1 fw-semibold font-size-12">ลูกค้า : Tester System </p>
                        <p class="border-primary border-bottom mt-n2" style="border-color: orange !important;"></p>
                    </div>
                    <button type="button" class="btn-close btn-disabled btn_closeAsset" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="card card-body p-0 m-0 mt-3">
                    <div class="m-0 overflow-auto p-2" style="max-height: 30rem;">
                        <div class="card border rounded-3 shadow-none mb-2">
                            <div class="text-body p-2">
                                <div class="d-flex">
                                    <div class="avatar-xs align-self-center me-2">
                                        <div class="avatar-title rounded bg-transparent font-size-20">
                                            <i class="fas fa-tag text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden flex-fill ">
                                        <h5 class="font-size-13 mb-1">
                                            1 ม.ค. 2569 (10:27:29)
                                        </h5>
                                        <h4 class="font-size-15 mb-1">TAG-1024010003</h4>
                                    </div>
                                    <div class="d-flex flex-column ms-3">
                                        <p class="text-muted text-end mb-auto">
                                            <span
                                                class="badge rounded-pill badge-soft-danger font-size-11">ยกเลิกติดตาม</span>
                                        </p>
                                        <span class="d-grid" tabindex="0" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="ยังไม่ได้คำนวณยอดจัด">
                                            <button type="button"
                                                class="btn btn-warning waves-effect waves-light w-100 disabled">
                                                <i class="fas fa-exclamation-triangle"></i> ไม่มีข้อมูล
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <p class="me-auto">สร้างทรัพย์ได้เฉพาะงานติดตามที่<strong
                            class="text-success px-1">คำนวณยอดจัด</strong>แล้วเท่านั้น</p>
                    <button type="button" class="btn btn-secondary btn-sm waves-effect hover-up btn_closeAsset"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times-circle"></i> ปิด
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
