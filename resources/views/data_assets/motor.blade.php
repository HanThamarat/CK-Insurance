    <!-- Modal สำหรับ Motor -->
    {{-- <div class="modal fade" id="motorModal" tabindex="-1" aria-labelledby="motorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="motorModalLabel">มอเตอร์ไซค์</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/motor.png') }}" alt="Profile Image" class="img-fluid">
                    <!-- เพิ่มรายละเอียดเพิ่มเติมที่นี่ -->
                </div>
            </div>
        </div>
    </div> --}}



<!-- Modal สำหรับ Car -->
 <div class="modal fade" id="motorModal" tabindex="-1" aria-labelledby="motorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">


            <div class="modal-body">
                <div class="d-flex m-3 mb-0">
                    <div class="flex-shrink-0 me-2">
                        <img src="{{ asset('images/motor.png') }}" alt="" class="avatar-sm"
                            style="width: 50px; height: 50px;">
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="text-primary fw-semibold">สร้างทรัพย์ใหม่</h5>
                        <p class="text-muted mt-n1 fw-semibold font-size-9">Create New Assets</p>
                        <p class="border-line border-bottom mt-n2" style="border-color: orange !important;"></p>
                    </div>
                    <button type="button" class="btn-close btn-disabled btn_closeAsset" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form>
                    <div class="col-xl-12">

                        <h2 class="text-primary fw-semibold fs-2 mt-4">รายละเอียดทรัพย์</h2>

                        <p class="fw-bold bg-opacity-20 border-start ps-1 mt-2">
                            <i class="fas fa-motorcycle"></i> ข้อมูลมอเตอร์ไซค์
                        </p>

                        <!-- Account details card-->
                        <div class="card mb-4 mt-3">
                            <div class="card-header">ป้ายทะเบียนเก่า</div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Row-->
                                    <div class="row gx-4 mb-3">
                                        <!-- Form Group (first name) -->
                                        <div class="col-md-4 mb-3">
                                            <input class="form-control border-warning rounded" id="inputFirstName"
                                                type="text" placeholder="อักษร/คำ" value="">
                                        </div>
                                        <!-- Form Group (last name) -->
                                        <div class="col-md-4 mb-3">
                                            <input class="form-control border-warning rounded" id="inputLastName"
                                                type="text" placeholder="ตัวเลข" value="">
                                        </div>

                                        <div data-select2-id="6" class="col-md-4 ">
                                            <select
                                                class="form-select select2 province-license-select license-input select2-hidden-accessible border-warning"
                                                id="Vehicle_OldLicense_Province" name="Vehicle_OldLicense_Province"
                                                data-placeholder="จังหวัด" data-namealert="ป้ายทะเบียน(จังหวัด)"
                                                required="" data-select2-id="Vehicle_OldLicense_Province"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="" selected="" data-select2-id="2">
                                                    เลือกจังหวัด</option>
                                                <option value="ร้อยเอ็ด" data-select2-id="18">ร้อยเอ็ด</option>
                                                <option value="สุโขทัย" data-select2-id="19">สุโขทัย</option>
                                                <option value="ปัตตานี" data-select2-id="20">ปัตตานี</option>
                                                <option value="พระนครศรีอยุธยา" data-select2-id="21">พระนครศรีอยุธยา
                                                </option>
                                                <option value="บุรีรัมย์" data-select2-id="22">บุรีรัมย์</option>
                                                <option value="สมุทรสงคราม" data-select2-id="23">สมุทรสงคราม</option>
                                                <option value="อุตรดิตถ์" data-select2-id="24">อุตรดิตถ์</option>
                                                <option value="พะเยา" data-select2-id="25">พะเยา</option>
                                                <option value="มหาสารคาม" data-select2-id="26">มหาสารคาม</option>
                                                <option value="พังงา" data-select2-id="27">พังงา</option>
                                                <option value="หนองบัวลำภู" data-select2-id="28">หนองบัวลำภู</option>
                                                <option value="สระบุรี" data-select2-id="29">สระบุรี</option>
                                                <option value="นครสวรรค์" data-select2-id="30">นครสวรรค์</option>
                                                <option value="ตาก" data-select2-id="31">ตาก</option>
                                                <option value="แม่ฮ่องสอน" data-select2-id="32">แม่ฮ่องสอน</option>
                                                <option value="ปทุมธานี" data-select2-id="33">ปทุมธานี</option>
                                                <option value="นครศรีธรรมราช" data-select2-id="34">นครศรีธรรมราช
                                                </option>
                                                <option value="นครราชสีมา" data-select2-id="35">นครราชสีมา</option>
                                                <option value="ลำปาง" data-select2-id="36">ลำปาง</option>
                                                <option value="กาฬสินธุ์" data-select2-id="37">กาฬสินธุ์</option>
                                                <option value="ชัยภูมิ" data-select2-id="38">ชัยภูมิ</option>
                                                <option value="พัทลุง" data-select2-id="39">พัทลุง</option>
                                                <option value="บึงกาฬ" data-select2-id="40">บึงกาฬ</option>
                                                <option value="อ่างทอง" data-select2-id="41">อ่างทอง</option>
                                                <option value="อำนาจเจริญ" data-select2-id="42">อำนาจเจริญ</option>
                                                <option value="อุบลราชธานี" data-select2-id="43">อุบลราชธานี</option>
                                                <option value="ตราด" data-select2-id="44">ตราด</option>
                                                <option value="สงขลา" data-select2-id="45">สงขลา</option>
                                                <option value="พิษณุโลก" data-select2-id="46">พิษณุโลก</option>
                                                <option value="สระแก้ว" data-select2-id="47">สระแก้ว</option>
                                                <option value="นครนายก" data-select2-id="48">นครนายก</option>
                                                <option value="ตรัง" data-select2-id="49">ตรัง</option>
                                                <option value="ฉะเชิงเทรา" data-select2-id="50">ฉะเชิงเทรา</option>
                                                <option value="กำแพงเพชร" data-select2-id="51">กำแพงเพชร</option>
                                                <option value="ลำพูน" data-select2-id="52">ลำพูน</option>
                                                <option value="นนทบุรี" data-select2-id="53">นนทบุรี</option>
                                                <option value="ชัยนาท" data-select2-id="54">ชัยนาท</option>
                                                <option value="ราชบุรี" data-select2-id="55">ราชบุรี</option>
                                                <option value="ขอนแก่น" data-select2-id="56">ขอนแก่น</option>
                                                <option value="ประจวบคีรีขันธ์" data-select2-id="57">ประจวบคีรีขันธ์
                                                </option>
                                                <option value="จันทบุรี" data-select2-id="58">จันทบุรี</option>
                                                <option value="ระยอง" data-select2-id="59">ระยอง</option>
                                                <option value="เชียงราย" data-select2-id="60">เชียงราย</option>
                                                <option value="กระบี่" data-select2-id="61">กระบี่</option>
                                                <option value="ชลบุรี" data-select2-id="62">ชลบุรี</option>
                                                <option value="สมุทรปราการ" data-select2-id="63">สมุทรปราการ</option>
                                                <option value="ชุมพร" data-select2-id="64">ชุมพร</option>
                                                <option value="ปราจีนบุรี" data-select2-id="65">ปราจีนบุรี</option>
                                                <option value="เพชรบุรี" data-select2-id="66">เพชรบุรี</option>
                                                <option value="สตูล" data-select2-id="67">สตูล</option>
                                                <option value="พิจิตร" data-select2-id="68">พิจิตร</option>
                                                <option value="กรุงเทพมหานคร" data-select2-id="69">กรุงเทพมหานคร
                                                </option>
                                                <option value="สุพรรณบุรี" data-select2-id="70">สุพรรณบุรี</option>
                                                <option value="ยโสธร" data-select2-id="71">ยโสธร</option>
                                                <option value="นราธิวาส" data-select2-id="72">นราธิวาส</option>
                                                <option value="กาญจนบุรี" data-select2-id="73">กาญจนบุรี</option>
                                                <option value="สุรินทร์" data-select2-id="74">สุรินทร์</option>
                                                <option value="นครพนม" data-select2-id="75">นครพนม</option>
                                                <option value="นครปฐม" data-select2-id="76">นครปฐม</option>
                                                <option value="แพร่" data-select2-id="77">แพร่</option>
                                                <option value="อุดรธานี" data-select2-id="78">อุดรธานี</option>
                                                <option value="ลพบุรี" data-select2-id="79">ลพบุรี</option>
                                                <option value="หนองคาย" data-select2-id="80">หนองคาย</option>
                                                <option value="สุราษฎร์ธานี" data-select2-id="81">สุราษฎร์ธานี
                                                </option>
                                                <option value="ภูเก็ต" data-select2-id="82">ภูเก็ต</option>
                                                <option value="เชียงใหม่" data-select2-id="83">เชียงใหม่</option>
                                                <option value="มุกดาหาร" data-select2-id="84">มุกดาหาร</option>
                                                <option value="ยะลา" data-select2-id="85">ยะลา</option>
                                                <option value="เพชรบูรณ์" data-select2-id="86">เพชรบูรณ์</option>
                                                <option value="อุทัยธานี" data-select2-id="87">อุทัยธานี</option>
                                                <option value="สกลนคร" data-select2-id="88">สกลนคร</option>
                                                <option value="น่าน" data-select2-id="89">น่าน</option>
                                                <option value="สิงห์บุรี" data-select2-id="90">สิงห์บุรี</option>
                                                <option value="เลย" data-select2-id="91">เลย</option>
                                                <option value="ศรีสะเกษ" data-select2-id="92">ศรีสะเกษ</option>
                                                <option value="ระนอง" data-select2-id="93">ระนอง</option>
                                                <option value="สมุทรสาคร" data-select2-id="94">สมุทรสาคร</option>
                                                <option value="เบตง" data-select2-id="95">เบตง</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="card mb-4 mt-3">
                            <div class="card-header">ป้ายทะเบียนใหม่ (เช่าซื้อ)</div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Row-->
                                    <div class="row gx-4 mb-3">
                                        <!-- Form Group (first name) -->
                                        <div class="col-md-4 mb-3">
                                            <input class="form-control border-warning border rounded" id="inputFirstName"
                                                type="text" placeholder="อักษร/คำ" value="">
                                        </div>
                                        <!-- Form Group (last name) -->
                                        <div class="col-md-4 mb-3">
                                            <input class="form-control border-warning border rounded" id="inputLastName"
                                                type="text" placeholder="ตัวเลข" value="">
                                        </div>

                                        <div data-select2-id="6" class="col-md-4">
                                            <select
                                                class="form-select select2 province-license-select license-input select2-hidden-accessible border-warning"
                                                id="Vehicle_OldLicense_Province" name="Vehicle_OldLicense_Province"
                                                data-placeholder="จังหวัด" data-namealert="ป้ายทะเบียน(จังหวัด)"
                                                required="" data-select2-id="Vehicle_OldLicense_Province"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="" selected="" data-select2-id="2">
                                                    เลือกจังหวัด</option>
                                                <option value="ร้อยเอ็ด" data-select2-id="18">ร้อยเอ็ด</option>
                                                <option value="สุโขทัย" data-select2-id="19">สุโขทัย</option>
                                                <option value="ปัตตานี" data-select2-id="20">ปัตตานี</option>
                                                <option value="พระนครศรีอยุธยา" data-select2-id="21">พระนครศรีอยุธยา
                                                </option>
                                                <option value="บุรีรัมย์" data-select2-id="22">บุรีรัมย์</option>
                                                <option value="สมุทรสงคราม" data-select2-id="23">สมุทรสงคราม</option>
                                                <option value="อุตรดิตถ์" data-select2-id="24">อุตรดิตถ์</option>
                                                <option value="พะเยา" data-select2-id="25">พะเยา</option>
                                                <option value="มหาสารคาม" data-select2-id="26">มหาสารคาม</option>
                                                <option value="พังงา" data-select2-id="27">พังงา</option>
                                                <option value="หนองบัวลำภู" data-select2-id="28">หนองบัวลำภู</option>
                                                <option value="สระบุรี" data-select2-id="29">สระบุรี</option>
                                                <option value="นครสวรรค์" data-select2-id="30">นครสวรรค์</option>
                                                <option value="ตาก" data-select2-id="31">ตาก</option>
                                                <option value="แม่ฮ่องสอน" data-select2-id="32">แม่ฮ่องสอน</option>
                                                <option value="ปทุมธานี" data-select2-id="33">ปทุมธานี</option>
                                                <option value="นครศรีธรรมราช" data-select2-id="34">นครศรีธรรมราช
                                                </option>
                                                <option value="นครราชสีมา" data-select2-id="35">นครราชสีมา</option>
                                                <option value="ลำปาง" data-select2-id="36">ลำปาง</option>
                                                <option value="กาฬสินธุ์" data-select2-id="37">กาฬสินธุ์</option>
                                                <option value="ชัยภูมิ" data-select2-id="38">ชัยภูมิ</option>
                                                <option value="พัทลุง" data-select2-id="39">พัทลุง</option>
                                                <option value="บึงกาฬ" data-select2-id="40">บึงกาฬ</option>
                                                <option value="อ่างทอง" data-select2-id="41">อ่างทอง</option>
                                                <option value="อำนาจเจริญ" data-select2-id="42">อำนาจเจริญ</option>
                                                <option value="อุบลราชธานี" data-select2-id="43">อุบลราชธานี</option>
                                                <option value="ตราด" data-select2-id="44">ตราด</option>
                                                <option value="สงขลา" data-select2-id="45">สงขลา</option>
                                                <option value="พิษณุโลก" data-select2-id="46">พิษณุโลก</option>
                                                <option value="สระแก้ว" data-select2-id="47">สระแก้ว</option>
                                                <option value="นครนายก" data-select2-id="48">นครนายก</option>
                                                <option value="ตรัง" data-select2-id="49">ตรัง</option>
                                                <option value="ฉะเชิงเทรา" data-select2-id="50">ฉะเชิงเทรา</option>
                                                <option value="กำแพงเพชร" data-select2-id="51">กำแพงเพชร</option>
                                                <option value="ลำพูน" data-select2-id="52">ลำพูน</option>
                                                <option value="นนทบุรี" data-select2-id="53">นนทบุรี</option>
                                                <option value="ชัยนาท" data-select2-id="54">ชัยนาท</option>
                                                <option value="ราชบุรี" data-select2-id="55">ราชบุรี</option>
                                                <option value="ขอนแก่น" data-select2-id="56">ขอนแก่น</option>
                                                <option value="ประจวบคีรีขันธ์" data-select2-id="57">ประจวบคีรีขันธ์
                                                </option>
                                                <option value="จันทบุรี" data-select2-id="58">จันทบุรี</option>
                                                <option value="ระยอง" data-select2-id="59">ระยอง</option>
                                                <option value="เชียงราย" data-select2-id="60">เชียงราย</option>
                                                <option value="กระบี่" data-select2-id="61">กระบี่</option>
                                                <option value="ชลบุรี" data-select2-id="62">ชลบุรี</option>
                                                <option value="สมุทรปราการ" data-select2-id="63">สมุทรปราการ</option>
                                                <option value="ชุมพร" data-select2-id="64">ชุมพร</option>
                                                <option value="ปราจีนบุรี" data-select2-id="65">ปราจีนบุรี</option>
                                                <option value="เพชรบุรี" data-select2-id="66">เพชรบุรี</option>
                                                <option value="สตูล" data-select2-id="67">สตูล</option>
                                                <option value="พิจิตร" data-select2-id="68">พิจิตร</option>
                                                <option value="กรุงเทพมหานคร" data-select2-id="69">กรุงเทพมหานคร
                                                </option>
                                                <option value="สุพรรณบุรี" data-select2-id="70">สุพรรณบุรี</option>
                                                <option value="ยโสธร" data-select2-id="71">ยโสธร</option>
                                                <option value="นราธิวาส" data-select2-id="72">นราธิวาส</option>
                                                <option value="กาญจนบุรี" data-select2-id="73">กาญจนบุรี</option>
                                                <option value="สุรินทร์" data-select2-id="74">สุรินทร์</option>
                                                <option value="นครพนม" data-select2-id="75">นครพนม</option>
                                                <option value="นครปฐม" data-select2-id="76">นครปฐม</option>
                                                <option value="แพร่" data-select2-id="77">แพร่</option>
                                                <option value="อุดรธานี" data-select2-id="78">อุดรธานี</option>
                                                <option value="ลพบุรี" data-select2-id="79">ลพบุรี</option>
                                                <option value="หนองคาย" data-select2-id="80">หนองคาย</option>
                                                <option value="สุราษฎร์ธานี" data-select2-id="81">สุราษฎร์ธานี
                                                </option>
                                                <option value="ภูเก็ต" data-select2-id="82">ภูเก็ต</option>
                                                <option value="เชียงใหม่" data-select2-id="83">เชียงใหม่</option>
                                                <option value="มุกดาหาร" data-select2-id="84">มุกดาหาร</option>
                                                <option value="ยะลา" data-select2-id="85">ยะลา</option>
                                                <option value="เพชรบูรณ์" data-select2-id="86">เพชรบูรณ์</option>
                                                <option value="อุทัยธานี" data-select2-id="87">อุทัยธานี</option>
                                                <option value="สกลนคร" data-select2-id="88">สกลนคร</option>
                                                <option value="น่าน" data-select2-id="89">น่าน</option>
                                                <option value="สิงห์บุรี" data-select2-id="90">สิงห์บุรี</option>
                                                <option value="เลย" data-select2-id="91">เลย</option>
                                                <option value="ศรีสะเกษ" data-select2-id="92">ศรีสะเกษ</option>
                                                <option value="ระนอง" data-select2-id="93">ระนอง</option>
                                                <option value="สมุทรสาคร" data-select2-id="94">สมุทรสาคร</option>
                                                <option value="เบตง" data-select2-id="95">เบตง</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gx-4 mb-3">
                        <!-- Form Group (organization name) -->
                        <div class="col-md-4">
                            <input class="form-control border-warning border rounded" id="inputOrgName" type="text"
                                placeholder="เลขถัง" value="">
                        </div>

                        <div class="col-md-3">
                            <input class="form-check-input border-warning" id="inputOrgName" type="checkbox" value="">
                            <label class="form-check-label border-warning" for="inputOrgName">มีกำหนดตอกเลขตัวรถใหม่</label>
                        </div>

                        <div class="col-md-5">
                            <input class="form-control border-warning border rounded" id="inputNewCarNumber" type="text"
                                placeholder="เลขตัวรถใหม่" value="" disabled>
                        </div>
                    </div>

                    <div class="row gx-4 mb-3">
                        <!-- Form Group (first name) -->
                        <div class="col-md-4 mb-3">
                            <input class="form-control border-warning border rounded" id="inputFirstName" type="text"
                                placeholder="เลขเครื่อง" value="">
                        </div>
                        <!-- Form Group (last name) -->
                        <div class="col-md-4 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="สีรถ" value="">
                        </div>
                        <!-- Form Group (last name) -->
                        <div class="col-md-4 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="CC" value="">
                        </div>
                    </div>




                    <div class="row gx-4 mb-3">
                        <!-- Form Group (เครื่อง) -->
                        <div class="col-md-4 mb-3">
                            <select class="form-select border-warning border rounded" id="selectEngineNumber">
                                <option selected disabled>เลือกเลขประเภทรถ 1</option>
                                <option value="engine1">ประเภทรถ 1</option>
                                <option value="engine2">ประเภทรถ 2</option>
                                <option value="engine3">ประเภทรถ 3</option>
                            </select>
                        </div>
                        <!-- Form Group (สีรถ) -->
                        <div class="col-md-4 mb-3">
                            <select class="form-select border-warning border rounded" id="selectCarColor">
                                <option selected disabled>เลือกเลขประเภทรถ 2</option>
                                <option value="engine1">ประเภทรถ 1</option>
                                <option value="engine2">ประเภทรถ 2</option>
                                <option value="engine3">ประเภทรถ 3</option>
                            </select>
                        </div>
                        <!-- Form Group (CC) -->
                        <div class="col-md-4 mb-3">
                            <select class="form-select border-warning border rounded" id="selectCC">
                                <option selected disabled>ยี่ห้อรถ</option>
                                <option value="1000">ยี่ห้อรถ 1</option>
                                <option value="1500">ยี่ห้อรถ 2</option>
                                <option value="2000">ยี่ห้อรถ 3</option>
                            </select>
                        </div>
                    </div>



                    <div class="row gx-4 mb-3">
                        <!-- Form Group (เครื่อง) -->
                        <div class="col-md-4 mb-3">
                            <select class="form-select border-warning border rounded" id="selectEngineNumber">
                                <option selected disabled>กลุ่มรถ</option>
                                <option value="engine1">กลุ่มรถ 1</option>
                                <option value="engine2">กลุ่มรถ 2</option>
                                <option value="engine3">กลุ่มรถ 3</option>
                            </select>
                        </div>
                        <!-- Form Group (สีรถ) -->
                        <div class="col-md-4 mb-3">
                            <select class="form-select border-warning border rounded" id="selectCarColor">
                                <option selected disabled>ปีรถ</option>
                                <option value="engine1">ปีรถ 1</option>
                                <option value="engine2">ปีรถ 2</option>
                                <option value="engine3">ปีรถ 3</option>
                            </select>
                        </div>
                        <!-- Form Group (CC) -->
                        <div class="col-md-4 mb-3">
                            <select class="form-select border-warning border rounded" id="selectCC">
                                <option selected disabled>รุ่นรถ</option>
                                <option value="1000">รุ่นรถ 1</option>
                                <option value="1500">รุ่นรถ 2</option>
                                <option value="2000">รุ่นรถ 3</option>
                            </select>
                        </div>
                    </div>


                    <div class="row gx-4 mb-3">
                        <!-- Form Group (เครื่อง) -->
                        <div class="col-md-4 mb-3">
                            <select class="form-select border-warning border rounded" id="selectEngineNumber">
                                <option selected disabled>เกียร์รถ</option>
                                <option value="engine1">เกียร์รถ 1</option>
                                <option value="engine2">เกียร์รถ 2</option>
                                <option value="engine3">เกียร์รถ 3</option>
                            </select>
                        </div>
                    </div>


                    <h2 class="text-warning fw-semibold fs-2 mt-4">รายละเอียดการครอบครอง</h2>
                    <p class="fw-bold bg-opacity-20 border-start ps-1 mt-2">
                        <i class="fas fa-scroll"></i> ข้อมูลการครอบครอง
                    </p>

                    <div class="row gx-4 mb-3 mt-3">
                        <!-- Form Group (เครื่อง) -->
                        <div class="col-md-3 mb-3">
                            <div class="col-md-3 mb-3">
                                <input type="datetime-local" class="border-warning border rounded" id="date" placeholder="วันครอบครองล่าสุด" name="date">
                            </div>
                        </div>
                        <!-- Form Group (สีรถ) -->
                        <div class="col-md-3 mb-3">
                            <select class="form-select border-warning border rounded" id="selectCarColor">
                                <option selected disabled>ระยะเวลาครอบครอง</option>
                                <option value="engine1">น้อยกว่า 1 เดือน</option>
                                <option value="engine2">1 เดือน - 2 เดือน</option>
                                <option value="engine3">3 เดือนขึ้นไป</option>
                            </select>
                        </div>
                        <!-- Form Group (CC) -->
                        <div class="col-md-3 mb-3">
                            <select class="form-select border-warning" id="StorageBranch" name="StorageBranch"
                                data-bs-toggle="tooltip">
                                <option value="" selected="">สถานที่เก็บ</option>
                                <option value="25">
                                    01 - สงขลา (สำนักงานใหญ่)
                                </option>
                                <option value="26">
                                    02 - หาดใหญ่
                                </option>
                                <option value="29">
                                    03 - นาทวี
                                </option>
                                <option value="35">
                                    04 - สตูล
                                </option>
                                <option value="33">
                                    05 - พัทลุง
                                </option>
                                <option value="100">
                                    06 - ทุ่งหว้า
                                </option>
                                <option value="102">
                                    07 - บางแก้ว
                                </option>
                                <option value="27">
                                    08 - เมืองสงขลา
                                </option>
                                <option value="28">
                                    09 - จะนะ
                                </option>
                                <option value="30">
                                    10 - หาดใหญ่ใน
                                </option>
                                <option value="31">
                                    11 - บ้านพรุ
                                </option>
                                <option value="34">
                                    12 - แม่ขรี
                                </option>
                                <option value="36">
                                    13 - รัตภูมิ
                                </option>
                                <option value="37">
                                    14 - เทพา
                                </option>
                                <option value="39">
                                    15 - ควนขนุน
                                </option>
                                <option value="38">
                                    16 - สาขาละงู
                                </option>
                                <option value="92">
                                    17 - สาขาเขาชัยสน
                                </option>
                                <option value="32">
                                    18 - สิงหนคร
                                </option>
                                <option value="93">
                                    19 - สาขาปากพะยูน
                                </option>
                                <option value="94">
                                    20 - สาขากงหรา
                                </option>
                                <option value="95">
                                    21 - สาขาศรีนครินทร์
                                </option>
                                <option value="85">
                                    22 - ท่าแพ
                                </option>
                                <option value="86">
                                    23 - สะเดา
                                </option>
                                <option value="103">
                                    24 - นาหม่อม
                                </option>
                                <option value="106">
                                    25 - ป่าพะยอม
                                </option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <select class="form-select border-warning border rounded" id="selectCarColor">
                                <option selected disabled>สถานะสินค้า</option>
                                <option value="engine1">ใหม่</option>
                                <option value="engine2">เก่า</option>
                            </select>
                        </div>
                    </div>


                    {{-- test --}}
                    <p class="fw-bold bg-opacity-20 border-start ps-1 mt-2">
                        <i class="fas fa-book-open"></i> ข้อมูลทะเบียน
                    </p>

                    <div class="row gx-4 mb-3 mt-3">
                        <div class="col-md-4 mb-3">
                            <input class="form-control border-warning border rounded" id="inputFirstName" type="text"
                                placeholder="เลขไมล์" value="">
                        </div>
                    </div>


                    {{-- Tag Test --}}
                    <div class="row g-4 mt-0 border-top">

                        <!-- คอลัมน์ซ้าย -->
                        <div class="col-12 col-lg-6">

                            <!-- ข้อมูลประกัน -->
                            <div class="row g-2 align-self-center">
                                <div class="col-6 col-md-6">
                                    <div class="input-bx">
                                        <select class="form-select border-warning InsuranceState" id="InsuranceState"
                                            name="InsuranceState" data-bs-toggle="tooltip" required="">
                                            <option value="" selected="">สถานะ</option>
                                            <option value="Buy">ซื้อประกัน</option>
                                            <option value="Yes">มีอยู่แล้ว</option>
                                            <option value="No">ไม่มี</option>
                                        </select>
                                        {{-- <span class="text-danger floating-label">สถานะประกัน</span> --}}
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="input-bx ">
                                        <select class="form-select border-warning InsuranceClass" id="InsuranceClass"
                                            name="InsuranceClass" data-bs-toggle="tooltip" readonly="readonly"
                                            style="pointer-events: none; background-color: #e9ecef">
                                            <option value="" selected="">ชั้น</option>
                                            <option value="1">ชั้น 1</option>
                                            <option value="2">ชั้น 2</option>
                                            <option value="3">ชั้น 3</option>
                                            <option value="2+">ชั้น 2+</option>
                                            <option value="3+">ชั้น 3+</option>
                                        </select>
                                        {{-- <span class="floating-label"
                                            data-inputid="InsuranceClass">ชั้นประกันภัย</span> --}}
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="input-bx mt-2">
                                        <select class="form-select border-warning" id="InsuranceCompany_Id"
                                            name="InsuranceCompany_Id" data-bs-toggle="tooltip" readonly="readonly"
                                            style="pointer-events: none; background-color: #e9ecef">
                                            <option value="" selected="">บริษัทประกัน</option>
                                            <option value="1">วิริยะประกันภัย</option>
                                            <option value="2">อลิอันซ์ อยุธยา</option>
                                        </select>
                                        {{-- <span class="floating-label">บริษัทประกัน</span> --}}
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="input-bx mt-2">
                                        <input type="text" class="form-control border-warning border rounded" id="PolicyNumber"
                                            name="PolicyNumber" value="" autocomplete="off"
                                            placeholder="เลขกรมธรรม์ " readonly="">
                                        {{-- <span class="">เลขกรมธรรม์</span> --}}
                                    </div>
                                </div>
                                <div class="col-sm-12 border-warning">

                                    <span class="dateexp-feedback position-absolute top-50 start-0 translate-middle"
                                        style="z-index: 1; display: none;" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-warning">
                                        <span class="badge bg-warning rounded-5">
                                            <i class="fas fa-exclamation-triangle text-black bx-tada fs-5 p-1"></i>
                                        </span>
                                        <span class="visually-hidden">Alerts</span>
                                    </span>

                                    <div class="input-daterange input-group text-center row g-0 mt-2"
                                        id="InsuranceDT_datepicker" data-date-format="dd/mm/yyyy"
                                        data-date-autoclose="true" data-provide="datepicker"
                                        data-date-container="#InsuranceDT_datepicker"
                                        data-date-disable-touch-keyboard="true" data-date-language="th"
                                        data-date-today-highlight="true" data-date-enable-on-readonly="false">
                                        <div class="input-bx col">
                                            <input type="text" class="form-control border-warning rounded-start"
                                                name="InsuranceDT_start" id="InsuranceDT_start"
                                                pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="วันที่ต่อประกัน"
                                                autocomplete="off" value="" required="" readonly=""
                                                style="pointer-events: none;">
                                            {{-- <span class="text-danger">วันที่ต่อประกัน</span> --}}
                                        </div>
                                        <div class="input-bx col">
                                            <input type="text" class="form-control border-warning rounded-0"
                                                name="InsuranceDT_end" id="InsuranceDT_end"
                                                pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder=" วันประกันหมดอายุ"
                                                autocomplete="off" value="" required="" readonly=""
                                                style="pointer-events: none;">
                                            {{-- <span class="text-danger">วันประกันหมดอายุ</span> --}}
                                        </div>
                                        <button
                                            class="btn btn-outline-warning dropdown-toggle py-0 px-2 col-2 rounded-end dropdown-InsuranceDT disabled"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-calendar fs-4"></i>
                                            <i class="mdi mdi-chevron-down fs-5"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end col-auto">
                                            <li><a class="dropdown-item _7daysInsExpBtn" href="#"
                                                    id="7DaysInsurExpBtn">เลือก 7 วันล่วงหน้า</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item _1yearInsExpBtn" href="#">ใส่วันหมดอายุ
                                                    1 ปี</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- วันคุ้มครอง พ.ร.บ. -->
                                <div class="col-sm-12">

                                    <span class="dateexp-feedback position-absolute top-50 start-0 translate-middle"
                                        style="z-index: 1; display: none;" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-warning">
                                        <span class="badge bg-warning rounded-5">
                                            <i class="fas fa-exclamation-triangle text-black bx-tada fs-5 p-1"></i>
                                        </span>
                                        <span class="visually-hidden">Alerts</span>
                                    </span>

                                    <div class="input-daterange input-group text-center row g-0 border-warning"
                                        id="InsuranceActDT_datepicker" data-date-format="dd/mm/yyyy"
                                        data-date-autoclose="true" data-provide="datepicker"
                                        data-date-container="#InsuranceActDT_datepicker"
                                        data-date-disable-touch-keyboard="true" data-date-language="th"
                                        data-date-today-highlight="true">
                                        <div class="input-bx col">
                                            <input type="text" class="form-control border-warning rounded-start"
                                                name="InsuranceActDT_start" id="InsuranceActDT_start"
                                                pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder=" วันที่ต่อ พ.ร.บ"
                                                value="" autocomplete="off" required="">
                                            {{-- <span class="text-danger">วันที่ต่อ พ.ร.บ.</span> --}}
                                        </div>
                                        <div class="input-bx col">
                                            <input type="text" class="form-control border-warning rounded-0"
                                                name="InsuranceActDT_end" id="InsuranceActDT_end"
                                                pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder=" วัน พ.ร.บ. หมดอายุ"
                                                value="" autocomplete="off" required="">
                                            {{-- <span class="text-danger">วัน พ.ร.บ. หมดอายุ</span> --}}
                                        </div>
                                        <button
                                            class="btn btn-outline-warning dropdown-toggle py-0 px-2 col-2 rounded-end border-warning"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-calendar fs-4"></i>
                                            <i class="mdi mdi-chevron-down fs-5"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end col-auto">
                                            <li><a class="dropdown-item _7daysInsExpBtn" href="#">เลือก 7
                                                    วันล่วงหน้า</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item _1yearInsExpBtn" href="#">ใส่วันหมดอายุ
                                                    1 ปี</a></li>
                                        </ul>

                                    </div>
                                </div>

                                <!-- วันค้มครองทะเบียน -->
                                <div class="col-sm-12">

                                    <span class="dateexp-feedback position-absolute top-50 start-0 translate-middle"
                                        style="z-index: 1; display: none;" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-warning">
                                        <span class="badge bg-warning rounded-5">
                                            <i class="fas fa-exclamation-triangle text-black bx-tada fs-5 p-1"></i>
                                        </span>
                                        <span class="visually-hidden">Alerts</span>
                                    </span>

                                    <div class="input-daterange input-group text-center row g-0 border-warning"
                                        id="InsuranceRegisterDT_datepicker" data-date-format="dd/mm/yyyy"
                                        data-date-autoclose="true" data-provide="datepicker"
                                        data-date-container="#InsuranceRegisterDT_datepicker"
                                        data-date-disable-touch-keyboard="true" data-date-language="th"
                                        data-date-today-highlight="true">
                                        <div class="input-bx col">
                                            <input type="text" class="form-control border-warning rounded-start"
                                                name="InsuranceRegisterDT_start" id="InsuranceRegisterDT_start"
                                                pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" autocomplete="off"
                                                placeholder="วันที่ต่อทะเบียน " value="" required="">
                                            {{-- <span class="text-danger">วันที่ต่อทะเบียน</span> --}}
                                        </div>
                                        <div class="input-bx col">
                                            <input type="text" class="form-control rounded-0 border-warning"
                                                name="InsuranceRegisterDT_end" id="InsuranceRegisterDT_end"
                                                pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" autocomplete="off"
                                                placeholder=" วันทะเบียนหมดอายุ" value="" required="">
                                            {{-- <span class="text-danger">วันทะเบียนหมดอายุ</span> --}}
                                        </div>
                                        <button
                                            class="btn btn-outline-warning dropdown-toggle py-0 px-2 col-2 rounded-end"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-calendar fs-4"></i>
                                            <i class="mdi mdi-chevron-down fs-5"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end col-auto">
                                            <li><a class="dropdown-item _7daysInsExpBtn" href="#">เลือก 7
                                                    วันล่วงหน้า</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item _1yearInsExpBtn" href="#">ใส่วันหมดอายุ
                                                    1 ปี</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <!-- คอลัมน์ขวา -->
                        <div class="col-12 col-lg-6">
                            <!-- ข้อมูลอื่น ๆ -->
                            <div class="row g-2 align-self-center">

                                <div class="col-12 mb-0 ">
                                    <div class="input-bx">
                                        <select class="form-select PurposeType border-warning" id="PurposeType" name="PurposeType"
                                            data-bs-toggle="tooltip">
                                            <option value="" selected="">รูปแบบรถยนต์</option>
                                            <option value="รถใช้ในการส่วนตัว">รถใช้ในการส่วนตัว</option>
                                            <option value="รถใช้เพื่อการพานิชย์">รถใช้เพื่อการพานิชย์</option>
                                        </select>
                                        {{-- <span class="floating-label">รูปแบบรถยนต์</span> --}}
                                    </div>
                                </div>
                                <div class="col-12 mb-0">
                                    <div class="input-bx mt-2">
                                        <select class="form-select border-warning" id="PossessionState_Code"
                                            name="PossessionState_Code" data-bs-toggle="tooltip">
                                            <option value="" selected="">สถานะครอบครอง</option>
                                            <option value="APS-0001">รถกรรมสิทธิ์</option>
                                            <option value="APS-0002">รถซื้อขาย</option>
                                            <option value="APS-0003">รถรีไฟแนนซ์</option>
                                        </select>
                                        {{-- <span class="floating-label">สถานะครอบครอง</span> --}}
                                    </div>
                                </div>
                                <div class="col-12 mb-0">
                                    <div class="input-bx mt-2">
                                        <select class="form-select border-warning PossessionOrder" id="PossessionOrder"
                                            name="PossessionOrder" data-bs-toggle="tooltip">
                                            <option value="" selected="">ลำดับครองครอง</option>
                                            <option value="ลำดับ 1">ลำดับ 1</option>
                                            <option value="ลำดับ 2">ลำดับ 2</option>
                                            <option value="ลำดับ 3">ลำดับ 3</option>
                                            <option value="ลำดับ 4">ลำดับ 4</option>
                                            <option value="ลำดับ 5">ลำดับ 5</option>
                                            <option value="ลำดับ 6 ขึ้นไป">ลำดับ 6 ขึ้นไป</option>
                                        </select>
                                        {{-- <span class="floating-label">ลำดับครองครอง</span> --}}
                                    </div>
                                </div>
                                <div class="col-12 mb-0">
                                    <div class="input-bx mt-2">
                                        <select class="form-select History_16 border-warning" id="History_16" name="History_16"
                                            data-bs-toggle="tooltip">
                                            <option value="" selected="">ประวัติหน้า 16</option>
                                            <option value="ต่อภาษีทุกปีไม่มีค่าปรับ">ต่อภาษีทุกปีไม่มีค่าปรับ</option>
                                            <option value="ต่อทุกปี มีค่าปรับ">ต่อทุกปี มีค่าปรับ</option>
                                            <option value="ต่อไม่ทุกปี">ต่อไม่ทุกปี</option>
                                        </select>
                                        {{-- <span class="floating-label">ประวัติหน้า 16.</span> --}}
                                    </div>
                                </div>
                                <div class="col-12 mb-0">
                                    <div class="input-bx mt-2">
                                        <select class="form-select History_18 border-warning" id="History_18" name="History_18"
                                            data-bs-toggle="tooltip">
                                            <option value="" selected="">ประวัติหน้า 18</option>
                                            <option value="1มีการดัดแปลงสภาพหรือเกิดอุบัติเหตุ ที่ใช้วิศวะรับรอง">
                                                1มีการดัดแปลงสภาพหรือเกิดอุบัติเหตุ ที่ใช้วิศวะรับรอง</option>
                                            <option value="2มีรายการเปลี่ยนสภาพรถ เช่น ทำสี เปลี่ยนเครื่อง เชื้อเพลิง">
                                                2มีรายการเปลี่ยนสภาพรถ เช่น ทำสี เปลี่ยนเครื่อง เชื้อเพลิง</option>
                                            <option value="3เล่มทะเบียนเคยโดนระงับใช้">3เล่มทะเบียนเคยโดนระงับใช้
                                            </option>
                                            <option value="4มีรายการยกเลิกเช่าซื้อ">4มีรายการยกเลิกเช่าซื้อ</option>
                                            <option value="5มีรายการออกแทนฉบับเดิม ชำรุด">5มีรายการออกแทนฉบับเดิม
                                                ชำรุด</option>
                                            <option value="6เล่มทะเบียนเต็ม เปลี่ยนเล่ม">6เล่มทะเบียนเต็ม เปลี่ยนเล่ม
                                            </option>
                                            <option value="7เล่มทะเบียนปกติ">7เล่มทะเบียนปกติ</option>
                                            <option value="8อื่นๆ">8อื่นๆ</option>
                                        </select>
                                        {{-- <span class="floating-label">ประวัติหน้า 18.</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="fw-bold bg-opacity-20 border-start ps-1 mt-5">
                        <i class="fas fa-money-bill-wave"></i> ข้อมูลมูลค่า
                    </p>

                    <div class="row gx-4 mb-3 mt-3">
                        <!-- Form Group (first name) -->
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputFirstName" type="text"
                                placeholder="ราคากลาง" value="">
                        </div>
                        <!-- Form Group (last name) -->
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="ราคาทุน" value="">
                        </div>
                        <!-- Form Group (last name) -->
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="ภาษี" value="">
                        </div>

                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="รวมมูลค่าสินค้า" value="">
                        </div>
                    </div>

                    <div class="row gx-4 mb-3 mt-3">
                        <!-- Form Group (first name) -->
                        <div class="col-md-3 mb-3">
                            <select class="form-select border-warning border rounded" id="inputFirstName" name="status">
                                <option value="" selected>สถานะบันทึกราคาสินค้า</option>
                                <option value="0">ไม่มีภาษี</option>
                                <option value="Y">ราคารวมภาษี</option>
                                <option value="N">ราคาไม่รวมภาษี (แยกภาษี)</option>
                            </select>
                        </div>

                        <!-- Form Group (last name) -->
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="ค่าขนส่ง" value="">
                        </div>
                        <!-- Form Group (last name) -->
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="ต้นทุนรวมภาษี" value="">
                        </div>

                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="รวมภาษีมูลค่าเพิ่ม" value="">
                        </div>
                    </div>

                    <div class="row gx-4 mb-3 mt-3">

                        <!-- Form Group (last name) -->
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="อัตราภาษี" value="">
                        </div>
                        <!-- Form Group (last name) -->
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="ค่าอื่น ๆ" value="">
                        </div>

                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="ราคาขาย" value="">
                        </div>

                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="รวมราคาสินค้าสุทธิ" value="">
                        </div>
                    </div>

                    <div class="row gx-4 mb-3 mt-3">
                        <div class="col-md-3 mb-3">
                            <input class="form-control border-warning border rounded" id="inputLastName" type="text"
                                placeholder="รวมต้นทุน" value="">
                        </div>
                    </div>

                </form>



                <div class="modal-footer pb-0">
                    <!-- ปุ่มบันทึกข้อมูล -->
                    <button type="button" class="btn btn-warning btn-sm waves-effect hover-up btn_saveData">
                        <i class="fas fa-save"></i> บันทึกข้อมูล
                    </button>

                    <!-- ปุ่มปิด -->
                    <button type="button" class="btn btn-secondary btn-sm waves-effect hover-up btn_closeAsset" data-bs-dismiss="modal">
                        <i class="fas fa-times-circle"></i> ปิด
                    </button>
                </div>

            </form>

            </div>
        </div>
    </div>
</div>






