<!-- Car Modal -->
<div id="DataAssetsModalMotor"
    class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50 modal ">
    <div class="relative bg-white rounded-lg w-full max-w-screen-lg p-6 max-h-screen overflow-auto scrollbar-hidden mt-12 mb-12"
        style="height: 95%;">
        <button class="absolute top-2 right-2 p-1 text-gray-400 hover:text-gray-600 focus:outline-none"
            onclick="closeModal('DataAssetsModal')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>

        <form action="">

        <div class="flex flex-col space-y-4"> <!--ml-[150px]-->

            <div class="flex items-center space-x-3">
                <img src="https://ckl.co.th/assets/images/gif/suitcase.gif" alt="" class="w-12 h-12">

                <div class="flex-grow">
                    <h5 class="text-orange-400 font-semibold">สร้างทรัพย์ใหม่</h5>
                    <p class="text-muted font-semibold text-sm mt-1">Create New Asset</p>
                    <div class="border-b-2 border-primary mt-2 w-full"></div>
                </div>
            </div>

            {{-- <div class="w-full">
                <h5 class="text-orange-400 font-semibold border-b">รายละเอียดทรัพย์</h5>
                <p class="text-sm font-bold bg-orange-100 border-l-4 border-orange-300 pl-1 mt-1">
                    <i class="fas fa-car"></i> ข้อมูลรถยนต์
                </p>
            </div> --}}

            <div class="w-full">
                <h5 class="text-orange-400 font-semibold border-b">รายละเอียดทรัพย์</h5>
                <p class="text-sm font-bold bg-orange-100 border-l-4 border-orange-300 pl-1 mt-1">
                    <i class="fas fa-motorcycle"></i> ข้อมูลรถมอเตอร์ไซค์
                </p>
            </div>



            {{-- Old License  Row --}}

            <div class="mt-6"></div>
            <div class="relative border border-gray-300 rounded-md p-4 text-gray-700 text-lg mt-12">
                <span class="absolute -top-4 left-2 bg-white px-3 border-md ">ป้ายทะเบียนเก่า</span>

                <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 mt-4">

                    <legend id="license-info"
                        class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md transform transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg cursor-pointer"
                        style="letter-spacing: 0.1rem;">
                        ป้ายทะเบียนเก่า
                    </legend>


                    {{-- <div class="w-full md:w-60 h-10 relative flex rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_OldLicense_Text" name="Vehicle_OldLicense_Text" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_OldLicense_Text">
                            อักษร/คำ</label>
                    </div> --}}

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_OldLicense_Text" name="Vehicle_OldLicense_Text" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_OldLicense_Text">
                            อักษร/คำ</label>

                        <!-- Tooltip -->
                        <div id="tooltip"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนเดิม
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255"
                                xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>



                    {{-- <div class="w-full md:w-60 h-10 relative flex rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_OldLicense_Number" name="Vehicle_OldLicense_Number" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_OldLicense_Number">
                            ตัวเลข</label>

                    </div> --}}

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_OldLicense_Number" name="Vehicle_OldLicense_Number" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_OldLicense_Number">
                            ตัวเลข</label>

                        <!-- Tooltip -->
                        <div id="tooltip-number"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนเดิม
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255"
                                xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>


                    <div class="flex-1">
                        <div class="flex-1">
                            <select id="Vehicle_OldLicense_Province" name="Vehicle_OldLicense_Province"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-1 px-2 h-9 bg-white">
                                <option value="" selected>จังหวัด</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->Province_pro }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

            </div>


            {{-- New License  Row --}}

            <div class="mt-6"></div>
            <div class="relative border border-gray-300 rounded-md p-4 text-gray-700 text-lg">
                <span class="absolute -top-4 left-2 bg-white px-3 border-md ">ป้ายทะเบียนใหม่</span>

                <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 mt-4">

                    <legend id="licenseNew-info"
                        class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md transform transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg cursor-pointer"
                        style="letter-spacing: 0.1rem;">
                        ป้ายทะเบียนใหม่
                    </legend>

                    {{-- <div class="w-full md:w-60 h-10 relative flex rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_NewLicense_Text" name="Vehicle_NewLicense_Text" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_NewLicense_Text">
                            อักษร/คำ</label>
                    </div>

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_NewLicense_Number" name="Vehicle_NewLicense_Number" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_NewLicense_Number">
                            ตัวเลข</label>
                    </div> --}}

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_NewLicense_Text" name="Vehicle_NewLicense_Text" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_NewLicense_Text">
                            อักษร/คำ</label>

                        <!-- Tooltip for text input -->
                        <div id="tooltip-new-text"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนใหม่ (ถ้ามี)
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255"
                                xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>

                    <div class="w-full md:w-60 h-10 relative flex rounded-xl group">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                            id="Vehicle_NewLicense_Number" name="Vehicle_NewLicense_Number" type="text" />
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_NewLicense_Number">
                            ตัวเลข</label>

                        <!-- Tooltip for number input -->
                        <div id="tooltip-new-number"
                            class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                            ป้ายทะเบียนใหม่ (ถ้ามี)
                            <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255"
                                xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                            </svg>
                        </div>
                    </div>


                    <div class="flex-1">
                        <div class="flex-1">
                            <select id="Vehicle_NewLicense_Province" name="Vehicle_NewLicense_Province"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-1 px-2 h-9 bg-white">
                                <option value="" selected>จังหวัด</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->Province_pro }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                </div>
            </div>

            {{-- เลขถัง --}}


            {{-- <div class="w-full h-10 relative flex rounded-xl">
                <input required=""
                    class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                    id="Vehicle_Chassis" name="Vehicle_Chassis" type="text" />
                <label
                    class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                    for="Vehicle_Chassis">
                    เลขถัง
                </label>
            </div> --}}

            <div class="w-full h-10 relative flex rounded-xl group">
                <input required=""
                    class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                    id="Vehicle_Chassis" name="Vehicle_Chassis" type="text" />
                <label
                    class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                    for="Vehicle_Chassis">
                    เลขถัง
                </label>

                <!-- Tooltip -->
                <div id="tooltip-chassis"
                    class="absolute bg-gray-700 text-white text-xs rounded py-1 px-3 bottom-full left-4 mb-2">
                    ระบุเลขถังอย่างน้อย 5 หลัก
                    <svg class="absolute text-gray-700 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255"
                        xml:space="preserve">
                        <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
                    </svg>
                </div>
            </div>



            <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                <label class="flex items-center space-x-2 flex-shrink-0">
                    <input type="checkbox" name="new_number_stamping"
                        class="form-checkbox border border-gray-400 rounded-sm">
                    <span class="text-sm">มีกำหนดตอกตัวเลขใหม่</span>
                </label>

                <div class="w-full h-10 relative flex flex-row items-center space-x-2 rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md mt-1"
                        id="Vehicle_New_Number" name="Vehicle_New_Number" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 font-light text-xs peer-focus:top-0 peer-focus:left-3 peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                        for="Vehicle_Newlabel_Number" id="Vehicle_Newlabel_Number">
                        เลขตัวรถไหม่
                    </label>
                </div>
            </div>


            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:border-gray-700 mt-1"
                        id="Vehicle_Engine" name="Vehicle_Engine" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                        for="Vehicle_Engine">
                        เลขเครื่อง
                    </label>
                </div>


                <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                        id="Vehicle_Color" name="Vehicle_Color" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                        for="Vehicle_Color">
                        สีรถ</label>
                </div>

                <div class="w-full md:w-1/3 h-auto relative flex rounded-xl">
                    <input required=""
                        class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                        id="Vehicle_CC" name="Vehicle_CC" type="text" />
                    <label
                        class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-xs peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                        for="Vehicle_CC">
                        CC</label>
                </div>
            </div>



            <div class="mt-6"></div>
            <div class="border border-gray-300 rounded-md p-1">

                <legend class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md"
                    style="letter-spacing: 0.1rem;">
                    ประเภทรถ
                </legend>

                <div class="p-4 xl:p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- ประเภทรถ 1 -->
                        <div class="relative">
                            <select
                                class="form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Type" name="Vehicle_Type" required>
                                <option value="" selected>--- ประเภทรถ 1 ---</option>
                                <option id="C01" value="C01">รถเก๋ง</option>
                                <option id="C02" value="C02">กระบะตอนเดียว</option>
                                <option id="C03" value="C03">กระบะแค็บ</option>
                                <option id="C04" value="C04">กระบะ4ประตู</option>
                                <option id="C05" value="C05">รถตู้</option>
                                <option id="C06" value="C06">รถใหญ่</option>
                            </select>
                        </div>

                        <!-- ประเภทรถ 2 -->
                        <div class="relative">
                            <select
                                class="form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Type_PLT" name="Vehicle_Type_PLT" required>
                                <option value="" selected>--- ประเภทรถ 2 ---</option>
                            </select>
                        </div>

                        <div class="relative">
                            <select id="Vehicle_Brand" name="Vehicle_Brand" class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" selected>--- ยี่ห้อรถ ---</option>
                            </select>
                        </div>


                        <!-- กลุ่มรถ -->
                        <div class="relative">
                            <select
                                class="form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Group" name="Vehicle_Group" required>
                                <option value="" selected>--- กลุ่มรถ ---</option>
                            </select>
                        </div>

                        <!-- ปีรถ -->
                        <div class="relative">
                            <select
                                class="form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Year" required>
                                <option value="" selected>--- ปีรถ ---</option>
                            </select>
                            <input type="hidden" name="Vehicle_Year" class="rateYear">
                        </div>

                        <!-- รุ่นรถ -->
                        <div class="relative">
                            <select
                                class="form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Model" name="Vehicle_Model" required>
                                <option value="" selected>--- รุ่นรถ ---</option>
                            </select>
                        </div>

                        <!-- เกียร์ -->
                        <div class="relative">
                            <select
                                class="form-select block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-9 py-1 px-2"
                                id="Vehicle_Gear" name="Vehicle_Gear" required>
                                <option value="" selected>--- เกียร์รถ ---</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6"></div>
            <div class="border border-gray-300 rounded-md p-4 flex flex-col gap-4">
                <legend class="text-orange-400 font-bold text-lg px-2 py-1 bg-gray-100 rounded-md shadow-md"
                    style="letter-spacing: 0.1rem;">
                    รายละเอียดครอบครอง
                </legend>


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex-1">
                        <select id="Vehicle_InsuranceStatus" name="Vehicle_InsuranceStatus"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 px-3">
                            <option value="" selected>เลือกสถานะประกัน</option>
                            <option value="buy">ซื้อประกัน</option>
                            <option value="existing">มีอยู่แล้ว</option>
                            <option value="none">ไม่มี</option>
                        </select>
                    </div>


                    <div class="flex-1">
                        <select id="Vehicle_Color" name="Vehicle_Color"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 px-3">
                            <option value="" selected>เลือกชั้นประกันภัย</option>
                            <option value="1">ชั้น 1</option>
                            <option value="2">ชั้น 2</option>
                            <option value="3">ชั้น 3</option>
                            <option value="2_plus">ชั้น 2+</option>
                            <option value="3_plus">ชั้น 3+</option>
                        </select>
                    </div>

                    <div class="flex-1">
                        <select id="Vehicle_CC" name="Vehicle_CC"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 px-3">
                            <option value="" selected>เลือกบริษัทประกันภัย</option>
                            <option value="viriya">วิริยะประกันภัย</option>
                            <option value="allianz">อลิอันซ์ อยุธยา</option>
                        </select>
                    </div>


                    <div class="w-full h-10 relative flex flex-row items-center space-x-2 rounded-xl">
                        <input required=""
                            class="peer w-full bg-transparent outline-none px-4 text-sm rounded-xl bg-white border border-gray-300 focus:shadow-md  mt-1"
                            id="Vehicle_PolicyNumber" name="Vehicle_PolicyNumber" type="text">
                        <label
                            class="absolute top-1/2 translate-y-[-50%] bg-white left-2 px-2 font-light text-xs peer-focus:top-0 peer-focus:left-3 peer-focus:text-gray-500 peer-valid:-top-0 peer-valid:left-3 peer-valid:text-xs peer-valid:text-gray-500 duration-150 rounded-md"
                            for="Vehicle_PolicyNumber">
                            เลขกรมธรรม์
                        </label>
                    </div>


                </div>


                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>


                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9"
                        id="date-stamp-insurance-1" placeholder="วันที่ต่อประกัน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9" id="date-stamp-insurance-2"
                        placeholder="วันประกันหมดอายุ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <div class="relative inline-block w-full">
                        <select id="select-input-insurance"
                        class="block w-full p-1.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>


                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9"
                        id="date-stamp-act-1" placeholder="วันที่ต่อ พ.ร.บ" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9" id="date-stamp-act-2"
                        placeholder="วัน พ.ร.บ หมดอายุ " name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">


                    <div class="relative inline-block w-full">
                        <select id="select-input-act"
                        class="block w-full p-1.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>


                </div>

                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>

                    <input type="datetime-local" class="border rounded-l-lg rounded-r-none w-full p-2 h-9"
                        id="date-stamp-register-1" placeholder="วันที่ต่อทะเบียน" name="date"
                        style="border-color: rgba(156, 163, 175, 0.5);">

                    <input type="datetime-local" class="border rounded-none w-full p-2 h-9" id="date-stamp-register-2"
                        placeholder="วันทะเบียนหมดอายุ" name="date2"
                        style="border-color: rgba(156, 163, 175, 0.5);">

                    <div class="relative inline-block w-full">
                        <select id="select-input-register"
                        class="block w-full p-1.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none shadow-sm cursor-pointer focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                            <option value="" selected>เลือกตัวเลือก</option>
                            <option value="7-days">เลือก 7 วันล่วงหน้า</option>
                            <option value="1-year">ใส่วันหมดอายุ 1 ปี</option>
                        </select>
                    </div>
                </div>

            </div>


            <div class="flex justify-end space-x-2">
                <!-- ปุ่ม บันทึก -->
                <button type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-indigo-500 flex items-center space-x-2 transition duration-300">
                    <i class="fas fa-save"></i> <!-- ไอคอน "บันทึก" ของ Font Awesome -->
                    <span>สร้างทรัพย์ไหม่</span>
                </button>

                <!-- ปุ่ม ยกเลิก -->
                <button type="button"
                    class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 hover:shadow-lg hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-gray-500 flex items-center space-x-2 transition duration-300">
                    <i class="fas fa-times"></i> <!-- ไอคอน "ยกเลิก" ของ Font Awesome -->
                    <span>ยกเลิก</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

<style>
    .scrollbar-hidden::-webkit-scrollbar {
        display: none;
    }
</style>





<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
    $(document).ready(function() {
        function updateLegend() {
            var textValue = $('#Vehicle_OldLicense_Text').val();
            var numberValue = $('#Vehicle_OldLicense_Number').val();
            var provinceText = $('#Vehicle_OldLicense_Province').find('option:selected').text();

            var legendText;
            if (textValue || numberValue || provinceText !== "จังหวัด") {
                // Remove "ป้ายทะเบียนเก่า" when there is input
                legendText = '<div style="text-align: center;">' + textValue + ' ' + numberValue + '<br>' +
                    provinceText + '</div>';
            } else {
                // Show "ป้ายทะเบียนเก่า" when there is no input
                legendText = '<div style="text-align: center;">ป้ายทะเบียนเก่า</div>';
            }

            $('#license-info').html(legendText);
        }

        // Event listeners
        $('#Vehicle_OldLicense_Text, #Vehicle_OldLicense_Number, #Vehicle_OldLicense_Province').on(
            'input change',
            function() {
                updateLegend();
            });

        // Initial call to set the correct legend text
        updateLegend();
    });

</script>


<script>
    $(document).ready(function() {
        function updateLegendNew() {
            var textValueNew = $('#Vehicle_NewLicense_Text').val();
            var numberValueNew = $('#Vehicle_NewLicense_Number').val();
            var provinceValueNew = $('#Vehicle_NewLicense_Province').find('option:selected').text();

            var legendText;
            if (textValueNew || numberValueNew || provinceValueNew && provinceValueNew !== "จังหวัด") {
                // Remove "ป้ายทะเบียนใหม่" when there is input
                legendText = '<div style="text-align: center;">' + textValueNew + ' ' + numberValueNew +
                    '<br>' + provinceValueNew + '</div>';
            } else {
                // Show "ป้ายทะเบียนใหม่" when there is no input
                legendText = '<div style="text-align: center;">ป้ายทะเบียนใหม่</div>';
            }

            $('#licenseNew-info').html(legendText);
        }

        // Event listeners
        $('#Vehicle_NewLicense_Text, #Vehicle_NewLicense_Number, #Vehicle_NewLicense_Province').on(
            'input change',
            function() {
                updateLegendNew();
            });

        // Initial call to set the correct legend text
        updateLegendNew();
    });
</script>



<script>
    $(document).ready(function() {
        // ตั้งค่าเริ่มต้นให้ input เป็น disabled
        $('#Vehicle_New_Number').prop('disabled', true).css('background-color',
        '#f0f0f0'); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน

        // เมื่อสถานะของ checkbox เปลี่ยนแปลง
        $('input[name="new_number_stamping"]').on('change', function() {
            if ($(this).is(':checked')) {
                // ถ้า checkbox ถูกเลือก
                $('#Vehicle_New_Number').prop('disabled', false).css('background-color',
                '#ffffff'); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน
            } else {
                // ถ้า checkbox ไม่ถูกเลือก
                $('#Vehicle_New_Number').prop('disabled', true).css('background-color',
                '#e0e0e0'); // เปลี่ยนสีพื้นหลังเป็นสีเทาเข้ม
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        // สำหรับ select-input-register
        $('#select-input-register').change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: 'Asia/Bangkok',
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            };

            if (selectedValue === '') {
                $('#date-stamp-register-1').val(''); // ล้างค่า
                $('#date-stamp-register-2').val(''); // ล้างค่า
                return;
            }

            var currentDateTime = now.toLocaleString('th-TH', options).replace(',', ''); // Format: DD/MM/YYYY HH:MM

            if (selectedValue === '7-days') {
                now.setDate(now.getDate() + 7);
            } else if (selectedValue === '1-year') {
                now.setFullYear(now.getFullYear() + 1);
            } else {
                return;
            }

            var futureDateTime = now.toLocaleString('th-TH', options).replace(',', ''); // Format: DD/MM/YYYY HH:MM

            $('#date-stamp-register-1').val(currentDateTime);
            $('#date-stamp-register-2').val(futureDateTime);
        });

        // สำหรับ select-input-act
        $('#select-input-act').change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: 'Asia/Bangkok',
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            };

            if (selectedValue === '') {
                $('#date-stamp-act-1').val(''); // ล้างค่า
                $('#date-stamp-act-2').val(''); // ล้างค่า
                return;
            }

            var currentDateTime = now.toLocaleString('th-TH', options).replace(',', ''); // Format: DD/MM/YYYY HH:MM

            if (selectedValue === '7-days') {
                now.setDate(now.getDate() + 7);
            } else if (selectedValue === '1-year') {
                now.setFullYear(now.getFullYear() + 1);
            } else {
                return;
            }

            var futureDateTime = now.toLocaleString('th-TH', options).replace(',', ''); // Format: DD/MM/YYYY HH:MM

            $('#date-stamp-act-1').val(currentDateTime);
            $('#date-stamp-act-2').val(futureDateTime);
        });

        // สำหรับ select-input-insurance
        $('#select-input-insurance').change(function() {
            var selectedValue = $(this).val();
            var now = new Date();
            var options = {
                timeZone: 'Asia/Bangkok',
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            };

            if (selectedValue === '') {
                $('#date-stamp-insurance-1').val(''); // ล้างค่า
                $('#date-stamp-insurance-2').val(''); // ล้างค่า
                return;
            }

            var currentDateTime = now.toLocaleString('th-TH', options).replace(',', ''); // Format: DD/MM/YYYY HH:MM

            if (selectedValue === '7-days') {
                now.setDate(now.getDate() + 7);
            } else if (selectedValue === '1-year') {
                now.setFullYear(now.getFullYear() + 1);
            } else {
                return;
            }

            var futureDateTime = now.toLocaleString('th-TH', options).replace(',', ''); // Format: DD/MM/YYYY HH:MM

            $('#date-stamp-insurance-1').val(currentDateTime);
            $('#date-stamp-insurance-2').val(futureDateTime);
        });
    });
</script>





{{-- <script>
    $(document).ready(function() {
        function updateLegendNew() {
            var textValueNew = $('#Vehicle_NewLicense_Text').val();
            var numberValueNew = $('#Vehicle_NewLicense_Number').val();
            var provinceValueNew = $('#Vehicle_NewLicense_Province').find('option:selected').text(); // แก้ไขตรงนี้

            var legendText;
            if (textValueNew || numberValueNew || provinceValueNew) {
                // Remove "ป้ายทะเบียนเก่า:" when there is input
                legendText = '<div style="text-align: center;">' + textValueNew + ' ' + numberValueNew +
                    '<br>' + provinceValueNew + '</div>';
            } else {
                // Show "ป้ายทะเบียนเก่า:" when there is no input
                legendText = '<div style="text-align: center;">ป้ายทะเบียนใหม่</div>';
            }

            $('#licenseNew-info').html(legendText);
        }

        // Event listeners
        $('#Vehicle_NewLicense_Text, #Vehicle_NewLicense_Number, #Vehicle_NewLicense_Province').on(
            'input change',
            function() {
                updateLegendNew();
            });

        // Initial call to set the correct legend text
        updateLegendNew();
    });
</script> --}}





 <!-- jQuery Tooltip -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
     $(document).ready(function() {
         // ซ่อน tooltip ตอนเริ่มต้น
         $('#tooltip').hide();

         // แสดง tooltip เมื่อ hover ที่ input
         $('#Vehicle_OldLicense_Text').hover(function() {
             $('#tooltip').show();
         }, function() {
             $('#tooltip').hide();
         });

         // ซ่อน tooltip เมื่อ input ถูก focus
         $('#Vehicle_OldLicense_Text').focus(function() {
             $('#tooltip').hide();
         });

         // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
         $('#Vehicle_OldLicense_Text').blur(function() {
             $('#Vehicle_OldLicense_Text').hover(function() {
                 $('#tooltip').show();
             }, function() {
                 $('#tooltip').hide();
             });
         });
     });
 </script>


<script>
    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $('#tooltip-number').hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $('#Vehicle_OldLicense_Number').hover(function() {
            $('#tooltip-number').show();
        }, function() {
            $('#tooltip-number').hide();
        });

        // ซ่อน tooltip เมื่อ input ถูก focus
        $('#Vehicle_OldLicense_Number').focus(function() {
            $('#tooltip-number').hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $('#Vehicle_OldLicense_Number').blur(function() {
            $('#Vehicle_OldLicense_Number').hover(function() {
                $('#tooltip-number').show();
            }, function() {
                $('#tooltip-number').hide();
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $('#tooltip-new-text, #tooltip-new-number').hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $('#Vehicle_NewLicense_Text').hover(function() {
            $('#tooltip-new-text').show();
        }, function() {
            $('#tooltip-new-text').hide();
        });

        $('#Vehicle_NewLicense_Number').hover(function() {
            $('#tooltip-new-number').show();
        }, function() {
            $('#tooltip-new-number').hide();
        });

        // ซ่อน tooltip เมื่อ input ถูก focus
        $('#Vehicle_NewLicense_Text').focus(function() {
            $('#tooltip-new-text').hide();
        });

        $('#Vehicle_NewLicense_Number').focus(function() {
            $('#tooltip-new-number').hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $('#Vehicle_NewLicense_Text').blur(function() {
            $('#Vehicle_NewLicense_Text').hover(function() {
                $('#tooltip-new-text').show();
            }, function() {
                $('#tooltip-new-text').hide();
            });
        });

        $('#Vehicle_NewLicense_Number').blur(function() {
            $('#Vehicle_NewLicense_Number').hover(function() {
                $('#tooltip-new-number').show();
            }, function() {
                $('#tooltip-new-number').hide();
            });
        });
    });
</script>


<!-- jQuery -->

<script>
    $(document).ready(function() {
        // ซ่อน tooltip ตอนเริ่มต้น
        $('#tooltip-chassis').hide();

        // แสดง tooltip เมื่อ hover ที่ input
        $('#Vehicle_Chassis').hover(function() {
            $('#tooltip-chassis').show();
        }, function() {
            $('#tooltip-chassis').hide();
        });

        // ซ่อน tooltip เมื่อ input ถูก focus
        $('#Vehicle_Chassis').focus(function() {
            $('#tooltip-chassis').hide();
        });

        // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
        $('#Vehicle_Chassis').blur(function() {
            $('#Vehicle_Chassis').hover(function() {
                $('#tooltip-chassis').show();
            }, function() {
                $('#tooltip-chassis').hide();
            });
        });
    });
</script>
