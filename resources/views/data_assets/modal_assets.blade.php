<!-- Car Modal -->
<div id="DataAssetsModal"
    class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50 modal">
    <div class="relative bg-white rounded-lg w-full max-w-screen-lg p-6 max-h-screen overflow-auto mt-12 scrollbar-hidden">
        <button class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
            onclick="closeModal('DataAssetsModal')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>

        <div class="flex flex-col space-y-4 ">

            <div class="hidden flex items-center space-x-4" data-title="รถยนต์">
                <img src="{{ asset('images/car.png') }}" class="w-16 h-16">
                <p class="text-lg font-semibold">ข้อมูลเกี่ยวกับรถยนต์</p>
            </div>

            <div class="hidden flex items-center space-x-4" data-title="มอเตอร์ไซค์">
                <img src="{{ asset('images/motor.png') }}" class="w-16 h-16">
                <p class="text-lg font-semibold">ข้อมูลเกี่ยวกับมอเตอร์ไซค์</p>
            </div>

            <div class="hidden flex items-center space-x-4" data-title="ที่ดิน">
                <img src="{{ asset('images/land.png') }}" class="w-16 h-16">
                <p class="text-lg font-semibold">ข้อมูลเกี่ยวกับที่ดิน</p>
            </div>

            <div class="hidden flex items-center space-x-4" data-title="บันทึกติดตาม">
                <img src="{{ asset('images/track.png') }}" class="w-16 h-16">
                <p class="text-lg font-semibold">ข้อมูลเกี่ยวกับบันทึกติดตาม</p>
            </div>

            <div class="hidden flex items-center space-x-4" data-title="ย้ายการครอบครอง">
                <img src="{{ asset('images/certificate.png') }}" class="w-16 h-16">
                <p class="text-lg font-semibold">ข้อมูลเกี่ยวกับย้ายการครอบครอง</p>
            </div>

            <form class="space-y-4">

                {{-- 1 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="flex-1" >
                        <!-- Hidden Inputs -->
                        <input type="hidden" id="id" name="id" value="" placeholder="รหัสทรัพย์สิน">
                        <input type="hidden" id="assetold_id" name="assetold_id" value="" placeholder="รหัสทรัพย์สินเก่า">
                        <div class="flex-1">
                            <label for="Flag_Asset" class="block text-sm font-medium text-gray-700">ธงสินทรัพย์</label>
                            <select id="Flag_Asset" name="Flag_Asset"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2 px-3 h-10 bg-white">
                                <option value="CU" selected>CU</option>
                                <option value="NU">NU</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-1">
                        <label for="Code_Asset" class="block text-sm font-medium text-gray-700">รหัสสินทรัพย์</label>
                        <input type="text" id="Code_Asset" name="Code_Asset"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>



                    <div class="flex-1">
                        <div class="flex-1">
                            <label for="Status_Asset" class="block text-sm font-medium text-gray-700">สถานะสินทรัพย์</label>
                            <select id="Status_Asset" name="Status_Asset"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2 px-3 h-10 bg-white">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Hide">Hide</option>
                            </select>
                        </div>
                    </div>
                </div>



                {{-- 2 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <div class="flex-1">
                            <label for="TypeAsset_Code" class="block text-sm font-medium text-gray-700">รหัสประเภททรัพย์สิน</label>
                            <select id="TypeAsset_Code" name="TypeAsset_Code"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2 px-3 h-10 bg-white">
                                <option value="Car" selected>Car</option>
                                <option value="Moto">Moto</option>
                                <option value="Land">Land</option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" id="DataCus_id" name="DataCus_id" value="" placeholder="รหัสข้อมูลลูกค้า">

                    <div class="flex-1">
                        <label for="Price_Asset" class="block text-sm font-medium text-gray-700">ราคาทรัพย์สิน</label>
                        <input type="text" id="Price_Asset" name="Price_Asset"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="CRCOST" class="block text-sm font-medium text-gray-700">ค่าใช้จ่าย / CRCOST</label>
                        <input type="text" id="CRCOST" name="CRCOST"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>
                </div>


                {{-- 3 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Vehicle_OldLicense" class="block text-sm font-medium text-gray-700">เลขทะเบียนรถเก่า</label>
                        <input type="text" id="Vehicle_OldLicense" name="Vehicle_OldLicense"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_OldLicense_Text"
                            class="block text-sm font-medium text-gray-700">ข้อความทะเบียนรถเก่า</label>
                        <input type="text" id="Vehicle_OldLicense_Text" name="Vehicle_OldLicense_Text"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_OldLicense_Number"
                            class="block text-sm font-medium text-gray-700">หมายเลขทะเบียนรถเก่า</label>
                        <input type="text" id="Vehicle_OldLicense_Number" name="Vehicle_OldLicense_Number"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    {{-- <div class="flex-1">
                        <label for="Vehicle_OldLicense_Province"
                            class="block text-sm font-medium text-gray-700">จังหวัดทะเบียนรถเก่า</label>
                        <input type="text" id="Vehicle_OldLicense_Province" name="Vehicle_OldLicense_Province"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div> --}}

                    <div class="flex-1">
                        <div class="flex-1">
                            <label for="Vehicle_OldLicense_Province" class="block text-sm font-medium text-gray-700">จังหวัดทะเบียนรถเก่า</label>
                            <select id="Vehicle_OldLicense_Province" name="Vehicle_OldLicense_Province"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2 px-3 h-10 bg-white">
                                <option value="" selected>เลือกจังหวัด</option>
                                <option value="ร้อยเอ็ด" data-select2-id="18">ร้อยเอ็ด</option>
                                    <option value="สุโขทัย" data-select2-id="19">สุโขทัย</option>
                                    <option value="ปัตตานี" data-select2-id="20">ปัตตานี</option>
                                    <option value="พระนครศรีอยุธยา" data-select2-id="21">พระนครศรีอยุธยา</option>
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


                {{-- 4 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Vehicle_NewLicense" class="block text-sm font-medium text-gray-700">เลขทะเบียนรถใหม่</label>
                        <input type="text" id="Vehicle_NewLicense" name="Vehicle_NewLicense"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_NewLicense_Text"
                            class="block text-sm font-medium text-gray-700">ข้อความทะเบียนรถใหม่</label>
                        <input type="text" id="Vehicle_NewLicense_Text" name="Vehicle_NewLicense_Text"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_NewLicense_Number"
                            class="block text-sm font-medium text-gray-700">หมายเลขทะเบียนรถใหม่</label>
                        <input type="text" id="Vehicle_NewLicense_Number" name="Vehicle_NewLicense_Number"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    {{-- <div class="flex-1">
                        <label for="Vehicle_NewLicense_Province"
                            class="block text-sm font-medium text-gray-700">จังหวัดทะเบียนรถใหม่</label>
                        <input type="text" id="Vehicle_NewLicense_Province" name="Vehicle_NewLicense_Province"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div> --}}

                    <div class="flex-1">
                        <div class="flex-1">
                            <label for="Vehicle_NewLicense_Province" class="block text-sm font-medium text-gray-700">จังหวัดทะเบียนรถใหม่</label>
                            <select id="Vehicle_NewLicense_Province" name="Vehicle_NewLicense_Province"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2 px-3 h-10 bg-white">
                                <option value="" selected>เลือกจังหวัด</option>
                                <option value="ร้อยเอ็ด" data-select2-id="18">ร้อยเอ็ด</option>
                                    <option value="สุโขทัย" data-select2-id="19">สุโขทัย</option>
                                    <option value="ปัตตานี" data-select2-id="20">ปัตตานี</option>
                                    <option value="พระนครศรีอยุธยา" data-select2-id="21">พระนครศรีอยุธยา</option>
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


                {{-- 5 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Vehicle_Chassis" class="block text-sm font-medium text-gray-700">เลขตัวถังรถ</label>
                        <input type="text" id="Vehicle_Chassis" name="Vehicle_Chassis"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_NewChassis"
                            class="block text-sm font-medium text-gray-700">เลขตัวถังรถใหม่</label>
                        <input type="text" id="Vehicle_NewChassis" name="Vehicle_NewChassis"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_Engine"
                            class="block text-sm font-medium text-gray-700">เลขเครื่องยนต์</label>
                        <input type="text" id="Vehicle_Engine" name="Vehicle_Engine"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 6 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Vehicle_Color"
                            class="block text-sm font-medium text-gray-700">สีของรถ</label>
                        <input type="text" id="Vehicle_Color" name="Vehicle_Color"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_Miles"
                            class="block text-sm font-medium text-gray-700">ระยะทางที่ใช้</label>
                        <input type="text" id="Vehicle_Miles" name="Vehicle_Miles"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_CC"
                            class="block text-sm font-medium text-gray-700">ความจุเครื่องยนต์</label>
                        <input type="text" id="Vehicle_CC" name="Vehicle_CC"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 7 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Vehicle_Type"
                            class="block text-sm font-medium text-gray-700">ประเภทของรถ</label>
                        <input type="text" id="Vehicle_Type" name="Vehicle_Type"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_Type_PLT"
                            class="block text-sm font-medium text-gray-700">ประเภทของรถ (PLT)</label>
                        <input type="text" id="Vehicle_Type_PLT" name="Vehicle_Type_PLT"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_Brand"
                            class="block text-sm font-medium text-gray-700">ยี่ห้อรถ</label>
                        <input type="text" id="Vehicle_Brand" name="Vehicle_Brand"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 8 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Vehicle_Group"
                            class="block text-sm font-medium text-gray-700">กลุ่มรถ</label>
                        <input type="text" id="Vehicle_Group" name="Vehicle_Group"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_Model"
                            class="block text-sm font-medium text-gray-700">รุ่นรถ</label>
                        <input type="text" id="Vehicle_Model" name="Vehicle_Model"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Vehicle_Year"
                            class="block text-sm font-medium text-gray-700">ปีที่ผลิต</label>
                        <input type="text" id="Vehicle_Year" name="Vehicle_Year"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 9 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Vehicle_Gear"
                            class="block text-sm font-medium text-gray-700">ระบบเกียร์</label>
                        <input type="text" id="Vehicle_Gear" name="Vehicle_Gear"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_Type" class="block text-sm font-medium text-gray-700">ประเภทของที่ดิน</label>
                        <input type="text" id="Land_Type" name="Land_Type"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_Id" class="block text-sm font-medium text-gray-700">รหัสที่ดิน</label>
                        <input type="text" id="Land_Id" name="Land_Id"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 10 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Land_ParcelNumber"
                            class="block text-sm font-medium text-gray-700">หมายเลขแปลงที่ดิน</label>
                        <input type="text" id="Land_ParcelNumber" name="Land_ParcelNumber"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_SheetNumber"
                            class="block text-sm font-medium text-gray-700">หมายเลขแผ่นที่ดิน</label>
                        <input type="text" id="Land_SheetNumber" name="Land_SheetNumber"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_TambonNumber"
                            class="block text-sm font-medium text-gray-700">หมายเลขตำบลที่ดิน</label>
                        <input type="text" id="Land_TambonNumber" name="Land_TambonNumber"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>

                {{-- 11 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Land_Book" class="block text-sm font-medium text-gray-700">เล่มที่ดิน</label>
                        <input type="text" id="Land_Book" name="Land_Book"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_BookPage"
                            class="block text-sm font-medium text-gray-700">หน้าเล่มที่ดิน</label>
                        <input type="text" id="Land_BookPage" name="Land_BookPage"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_SizeRai"
                            class="block text-sm font-medium text-gray-700">ขนาดที่ดิน (ไร่)</label>
                        <input type="text" id="Land_SizeRai" name="Land_SizeRai"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 12 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Land_SizeNgan"
                            class="block text-sm font-medium text-gray-700">ขนาดที่ดิน (งาน)</label>
                        <input type="text" id="Land_SizeNgan" name="Land_SizeNgan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_SizeSquareWa"
                            class="block text-sm font-medium text-gray-700">ขนาดที่ดิน (ตารางวา)</label>
                        <input type="text" id="Land_SizeSquareWa" name="Land_SizeSquareWa"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_Zone" class="block text-sm font-medium text-gray-700">โซนที่ดิน</label>
                        <input type="text" id="Land_Zone" name="Land_Zone"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>



                {{-- 13 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Land_Province"
                            class="block text-sm font-medium text-gray-700">จังหวัดที่ดิน</label>
                        <input type="text" id="Land_Province" name="Land_Province"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_District"
                            class="block text-sm font-medium text-gray-700">อำเภอที่ดิน</label>
                        <input type="text" id="Land_District" name="Land_District"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_Tambon"
                            class="block text-sm font-medium text-gray-700">ตำบลที่ดิน</label>
                        <input type="text" id="Land_Tambon" name="Land_Tambon"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>

                {{-- 14 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Land_PostalCode"
                            class="block text-sm font-medium text-gray-700">รหัสไปรษณีย์ที่ดิน</label>
                        <input type="text" id="Land_PostalCode" name="Land_PostalCode"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_Coordinates"
                            class="block text-sm font-medium text-gray-700">พิกัดที่ดิน</label>
                        <input type="text" id="Land_Coordinates" name="Land_Coordinates"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_Detail"
                            class="block text-sm font-medium text-gray-700">รายละเอียดที่ดิน</label>
                        <input type="text" id="Land_Detail" name="Land_Detail"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 15 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Land_BuildingType"
                            class="block text-sm font-medium text-gray-700">ประเภทอาคารที่ดิน</label>
                        <input type="text" id="Land_BuildingType" name="Land_BuildingType"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_BuildingKind"
                            class="block text-sm font-medium text-gray-700">ประเภทอาคาร</label>
                        <input type="text" id="Land_BuildingKind" name="Land_BuildingKind"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="Land_BuildingStorey"
                            class="block text-sm font-medium text-gray-700">จำนวนชั้นของอาคาร</label>
                        <input type="text" id="Land_BuildingStorey" name="Land_BuildingStorey"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 16 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="Land_BuildingSize"
                            class="block text-sm font-medium text-gray-700">ขนาดของอาคาร</label>
                        <input type="text" id="Land_BuildingSize" name="Land_BuildingSize"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="contract_smart"
                            class="block text-sm font-medium text-gray-700">ข้อตกลงสมาร์ท</label>
                        <input type="text" id="contract_smart" name="contract_smart"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="UserZone" class="block text-sm font-medium text-gray-700">โซนผู้ใช้</label>
                        <input type="text" id="UserZone" name="UserZone"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 17 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="UserBranch" class="block text-sm font-medium text-gray-700">สาขาผู้ใช้</label>
                        <input type="text" id="UserBranch" name="UserBranch"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="UserInsert" class="block text-sm font-medium text-gray-700">ผู้เพิ่มข้อมูล</label>
                        <input type="text" id="UserInsert" name="UserInsert"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="UserUpdate"
                            class="block text-sm font-medium text-gray-700">ผู้แก้ไขข้อมูล</label>
                        <input type="text" id="UserUpdate" name="UserUpdate"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>


                {{-- 18 Row --}}
                <div class="flex flex-col md:flex-row md:space-x-4">

                    <div class="flex-1">
                        <label for="dataTagCal_id"
                            class="block text-sm font-medium text-gray-700">รหัสการคำนวณแท็กข้อมูล</label>
                        <input type="text" id="dataTagCal_id" name="dataTagCal_id"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="created_at" class="block text-sm font-medium text-gray-700">วันที่สร้าง</label>
                        <input type="text" id="created_at" name="created_at"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                    <div class="flex-1">
                        <label for="updated_at"
                            class="block text-sm font-medium text-gray-700">วันที่อัพเดต</label>
                        <input type="text" id="updated_at" name="updated_at"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 ">
                    </div>

                </div>



                {{-- 18 Row --}}
                <div class="flex-1">
                    <label for="deleted_at" class="block text-sm font-medium text-gray-700">วันที่ลบ</label>
                    <input type="text" id="deleted_at" name="deleted_at"
                        class="mt-1 block w-80 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10">
                </div>



                <div class="flex justify-end">
                    <button type="submit"class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">บันทึก</button>
                </div>

            </form>
            <div class="mt-12"></div>
        </div>
    </div>
</div>








    <style>

        /* select {
            border: 2px solid orange !important;
        }

        select:focus {
            outline: none;
            border-color: orange !important;
            box-shadow: 0 0 5px orange !important;
        }

        input {
            border: 2px solid orange !important;
        }

        input:focus {
            outline: none;
            border-color: orange !important;
            box-shadow: 0 0 5px orange !important;
        } */


        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }


        .scrollbar-hidden {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }




    </style>
