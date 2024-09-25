    <!-- Modal สำหรับ Certificate -->
    {{-- <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="certificateModalLabel">ย้ายการครอบครอง</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/certificate.png') }}" alt="Profile Image" class="img-fluid">
                    <!-- เพิ่มรายละเอียดเพิ่มเติมที่นี่ -->
                </div>
            </div>
        </div>
    </div> --}}



    <!-- Modal สำหรับ certificateModal -->
    <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex m-3 mb-0">
                        <div class="flex-shrink-0 me-2">
                            <img src="{{ asset('images/certificate.png') }}" alt="" class="avatar-sm"
                                style="width: 50px; height: 50px;">
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="text-primary fw-semibold">ย้ายการครอบครองทรัพย์</h5>
                            <p class="text-muted mt-n1 fw-semibold font-size-9">Transfer Asset</p>
                            <p class="border-primary border-bottom mt-n2" style="border-color: orange !important;"></p>
                        </div>
                        <button type="button" class="btn-close btn-disabled btn_closeAsset" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <form>
                        <div class="col-12 col-xl-12 bg-light bg-soft border-opacity-25 text-center px-4 py-2">

                            <h5 class="text-center text-primary fw-semibold border-bottom my-3"><i
                                    class="fas fa-briefcase pe-2"></i>
                                ข้อมูลทรัพย์ที่จะย้าย
                            </h5>

                            <form id="search-old-asset" class="form-search-transfer">
                                <input type="hidden" name="_token" value="fPcCLayw52Fo5Ky32N9NCmx3OpyPYtxfcWw6clJV">
                                <div class="input-group rounded-pill">
                                    <input type="search"
                                           class="form-control border-0 rounded-pill"
                                           placeholder="ป้ายทะเบียน / เลขถัง / เลขที่โฉนด"
                                           aria-label="Search"
                                           aria-describedby="search-button">
                                    <button class="btn btn-outline-primary rounded-pill" type="button" id="search-button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>


                            <div class="bg-transparent border border-primary border-opacity-50 rounded-3 my-2"
                                data-resultfor="search-old-asset" style="">

                                <div class="p-5 m-0 feedback-search" style="">
                                    <span class="text-muted" style="position: relative">- กรุณาป้อนข้อมูลเพื่อทำการค้นหา
                                        -</span>
                                </div>

                                <div class="spinner-border text-primary m-5" role="status" style="display: none;">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="feedback-data-search">

                                </div>

                            </div>

                            <div class="card border rounded-3 shadow-sm mb-2" id="tf_NewAssetCard"
                                data-cardformid="search-old-asset" style="display: none;">
                                <div class="text-body p-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 align-self-center me-3">

                                            <img class="rounded-circle avatar-sm" src="" alt="">

                                        </div>
                                        <div class="overflow-hidden flex-fill">

                                            <input type="text" name="asset_title" id="asset_title" readonly=""
                                                class="form-control-plaintext font-size-16 fw-bold p-0" value="">
                                            <input type="text" name="asset_titlesub" id="asset_titlesub"
                                                readonly=""
                                                class="form-control-plaintext font-size-14 text-primary fw-bold p-0"
                                                value="">

                                            <input type="hidden" name="asset_id" id="asset_id" class="form-control"
                                                value="" readonly="">

                                            <div class="veh_list" style="">
                                                <div class="d-flex align-items-center bg-success bg-opacity-10">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-card m-0 text-success h5 pe-2"></i>
                                                        ทะเบียนเก่า:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="veh_oldlicense" id="veh_oldlicense"
                                                            readonly="" class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-card bg-soft m-0 text-success h5 pe-2"></i>
                                                        ทะเบียนใหม่:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="veh_newlicense" id="veh_newlicense"
                                                            readonly="" class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center bg-success bg-opacity-10">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-dna m-0 text-success h5 pe-2"></i>
                                                        เลขถัง:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="veh_chassis" id="veh_chassis"
                                                            readonly="" class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-bot bg-soft m-0 text-success h5 pe-2"></i>
                                                        เลขเครื่อง:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="veh_engine" id="veh_engine"
                                                            readonly="" class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="land_list" style="display: none;">
                                                <div class="d-flex align-items-center bg-success bg-opacity-10">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-id-card m-0 text-success h5 pe-2"></i>
                                                        เลขที่โฉนด:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="land_id" id="land_id"
                                                            readonly="" class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-map bg-soft m-0 text-success h5 pe-2"></i>
                                                        เลขที่ดิน:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="land_parcelnum"
                                                            id="land_parcelnum" readonly=""
                                                            class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center bg-success bg-opacity-10">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-map-alt m-0 text-success h5 pe-2"></i>
                                                        ระวาง:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="land_sheetnum" id="land_sheetnum"
                                                            readonly="" class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 fw-semibold d-flex align-items-center">
                                                        <i class="bx bx-book bg-soft m-0 text-success h5 pe-2"></i>
                                                        หน้าสำรวจ:
                                                    </div>
                                                    <div class="ps-3">
                                                        <input type="text" name="land_tambonnum"
                                                            id="land_tambonnum" readonly=""
                                                            class="form-control-plaintext text-end p-0"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex flex-column ms-3">
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="tf_cancelSelectBtn_on_clicked(this)">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="col-12 col-xl-12 bg-primary bg-light text-center px-4 py-3 rounded-3 mt-5">

                            <h5 class="text-primary fw-semibold border-bottom border-light mb-3"><i class="fas fa-user pe-2"></i>
                                ข้อมูลเจ้าของทรัพย์ใหม่
                            </h5>

                            <form id="search-new-cus" class="form-search-transfer mb-3">
                                <input type="hidden" name="_token" value="fPcCLayw52Fo5Ky32N9NCmx3OpyPYtxfcWw6clJV">
                                {{-- <div class="input-group rounded-pill bg-white shadow-sm">
                                    <input type="search" class="form-control border-0 rounded-pill" placeholder="ชื่อ-นามสกุล / เลขบัตรประชาชน" aria-label="Search" data-inputclass="input-search-new-cus" data-submitclass="submit-search-new-cus" disabled>
                                    <button type="button" class="btn btn-outline-primary rounded-pill" disabled>
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div> --}}
                            </form>

                            {{-- <div class="bg-light rounded-3 my-2 border border-primary border-opacity-50 p-3" data-resultfor="search-new-cus">
                                <div class="feedback-search text-muted" style="display: none;">
                                    - กรุณาป้อนข้อมูลเพื่อทำการค้นหา -
                                </div>

                                <div class="spinner-border text-primary m-5" role="status" style="display: none;">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="feedback-data-search"></div>
                            </div> --}}

                            <div class="card border rounded-3 shadow-sm my-2" id="tf_NewCusCard" data-cardformid="search-new-cus">
                                <div class="d-flex align-items-center p-2">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="img-account-profile rounded-circle img-fluid mx-auto d-block mb-2"
                                            src="{{ asset('images/image.png') }}" alt="Profile Image" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="flex-fill">
                                        <input type="text" name="cus_name" id="cus_name" readonly class="form-control-plaintext font-size-16 fw-bold border rounded" value="Tester System">
                                        {{-- <input type="text" name="cus_nameeng" id="cus_nameeng" readonly class="form-control-plaintext font-size-14 text-primary fw-bold" value=""> --}}

                                        <input type="hidden" name="cus_id" id="cus_id" class="form-control" value="35639" readonly>

                                        <div class="d-flex flex-column mt-2">
                                            <div class="d-flex align-items-center bg-opacity-10 rounded-2 mb-2 p-2 border rounded">
                                                <i class="bx bx-id-card text-success h5 pe-2"></i>
                                                <div class="flex-grow-1 fw-semibold">เลขบัตรประจำตัวประชาชน:</div>
                                                <input type="text" name="cus_idcard" id="cus_idcard" readonly class="form-control-plaintext text-end border rounded w-50" data-inputmask="'mask': '9-9999-99999-99-9'" value="">

                                            </div>

                                            <div class="d-flex align-items-center bg-opacity-10 rounded-2 mb-2 p-2 border rounded">
                                                <i class="bx bx-phone text-success h5 pe-2"></i>
                                                <div class="flex-grow-1 fw-semibold">เบอร์ติดต่อ:</div>
                                                <input type="text" name="cus_phone" id="cus_phone" readonly class="form-control-plaintext text-end border rounded w-50" data-inputmask="'mask': '99 9999 9999'" value="0808732123">
                                                <input type="text" name="cus_phone2" id="cus_phone2" readonly class="form-control-plaintext text-end border rounded w-50" data-inputmask="'mask': '99 9999 9999'" value="" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <button type="button" class="btn btn-danger btn-sm" onclick="tf_cancelSelectBtn_on_clicked(this)" disabled>
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </form>

                    <div class="modal-footer pb-0">
                        <!-- ปุ่มบันทึกข้อมูล -->
                        <button type="button" class="btn btn-warning btn-sm waves-effect hover-up btn_saveData">
                            <i class="fas fa-save"></i> บันทึกข้อมูล
                        </button>

                        <!-- ปุ่มปิด -->
                        <button type="button" class="btn btn-secondary btn-sm waves-effect hover-up btn_closeAsset"
                            data-bs-dismiss="modal">
                            <i class="fas fa-times-circle"></i> ปิด
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
