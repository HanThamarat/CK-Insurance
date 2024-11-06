<div id="show_modal_asset" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50 modal ">
    <div class="relative bg-white rounded-lg w-full max-w-screen-lg  max-h-screen overflow-auto scrollbar-hidden mt-12 mb-12" style="height: 95%;">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow-xl w-full max-w-5xl mx-auto my-0">
            <!-- Header -->
            <div class="flex items-center justify-between p-6 border-b">

                <div class="flex items-center space-x-4 p-4">
                    <div class="p-3 bg-orange-100 rounded-xl">
                        <img src="{{ asset('img/minicar.gif') }}" alt="minicar icon"
                            class="w-12 h-12 object-cover rounded-lg">
                    </div>
                    <div class="flex-grow">
                        <h5
                            class="text-xl font-semibold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                            แสดงข้อมูลสินทรัพย์ลูกค้า</h5>
                        <p class="text-gray-500 text-sm mt-1">(Show Customers Assets)</p>
                        <div class="h-1 w-32 bg-gradient-to-r from-orange-400 to-orange-200 rounded-full mt-2"></div>
                    </div>
                </div>

                <button onclick="closeModal_Show_asset()" class="text-gray-400 hover:text-gray-500 p-2">
                    <i class="fas fa-times text-xl"></i>
                </button>

            </div>

            <!-- Body -->
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Vehicle Basic Info -->
                    <div class="bg-orange-50 rounded-xl p-6 shadow-sm">
                        <h4 class="text-lg font-semibold mb-5 text-orange-600">ข้อมูลพื้นฐาน</h4>
                        <div class="space-y-4">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ประเภทสินทรัพย์ :</strong>
                                <span id="show_Type_Asset" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ทะเบียนเดิม :</strong>
                                <span id="show_OldLicense" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ทะเบียนใหม่ :</strong>
                                <span id="show_NewLicense" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">เลขถัง :</strong>
                                <span id="show_Vehicle_Chassis" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">เลขเครื่อง :</strong>
                                <span id="show_Vehicle_Engine" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">สีรถ :</strong>
                                <span id="show_Vehicle_Color" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">เลขตัวรถใหม่ :</strong>
                                <span id="show_Vehicle_New_Number" class="sm:ml-2"></span>
                            </p>
                        </div>
                    </div>

                    <!-- Vehicle Details -->
                    <div class="bg-blue-50 rounded-xl p-6 shadow-sm">
                        <h4 class="text-lg font-semibold mb-5 text-blue-600">รายละเอียดรถ</h4>
                        <div class="space-y-4">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ประเภทรถ 1 :</strong>
                                <span id="show_Vehicle_Type" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ประเภทรถ 2 :</strong>
                                <span id="show_Vehicle_Type_PLT" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ยี่ห้อรถ :</strong>
                                <span id="show_Vehicle_Brand" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">กลุ่มรถ :</strong>
                                <span id="show_Vehicle_Group" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">รุ่นรถ :</strong>
                                <span id="show_Vehicle_Models" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ปีรถ :</strong>
                                <span id="show_Vehicle_Years" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ความจุเครื่องยนต์ :</strong>
                                <span class="sm:ml-2"><span id="show_Vehicle_CC"></span> CC</span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ประเภทเกียร์ :</strong>
                                <span id="show_Vehicle_Gear" class="sm:ml-2"></span>
                            </p>

                        </div>
                    </div>
                </div>


                <!-- Insurance Info -->
                <div class="bg-green-50 rounded-xl p-6 shadow-sm w-full mt-6">
                    <h4 class="text-lg font-semibold mb-5 text-green-600">ข้อมูลประกัน</h4>

                    <div class="space-y-4">
                        <p class="flex flex-col sm:flex-row sm:justify-between">
                            <strong class="min-w-[100px] inline-block">ประกัน :</strong>
                            <span id="show_Choose_Insurance_Cal" class="sm:ml-2"></span>
                        </p>
                        <div class="space-y-4 ml-4">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">วันที่ต่อประกัน :</strong>
                                <span id="show_Insurance_renewal_date" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">วันที่หมดอายุ :</strong>
                                <span id="show_Insurance_end_date" class="sm:ml-2"></span>
                            </p>
                        </div>
                        <hr>
                        <p class="flex flex-col sm:flex-row sm:justify-between">
                            <strong class="min-w-[100px] inline-block">พ.ร.บ. :</strong>
                            <span id="show_Choose_Act_Cal" class="sm:ml-2"></span>
                        </p>
                        <div class="space-y-4 ml-4">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">วันที่ต่อ พ.ร.บ. :</strong>
                                <span id="show_act_renewal_date" class="sm:ml-2"></span>
                            </p>
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">วันที่หมดอายุ :</strong>
                                <span id="show_act_end_date" class="sm:ml-2"></span>
                            </p>
                        </div>
                        <hr>
                        <div class="space-y-4 mt-5">
                            <p class="flex flex-col sm:flex-row sm:justify-between">
                                <strong class="min-w-[100px] inline-block">ทะเบียน :</strong>
                                <span id="show_Choose_Register_Cal" class="sm:ml-2"></span>
                            </p>
                            <div class="space-y-4 ml-4">
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">วันที่ต่อทะเบียน :</strong>
                                    <span id="show_register_renewal_date" class="sm:ml-2"></span>
                                </p>
                                <p class="flex flex-col sm:flex-row sm:justify-between">
                                    <strong class="min-w-[100px] inline-block">วันที่หมดอายุ :</strong>
                                    <span id="show_register_end_date" class="sm:ml-2"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Timestamps -->
                <div class="mt-8 text-sm text-gray-500 space-y-2">
                    <p class="flex items-center">
                        <i class="fas fa-clock mr-3"></i>
                        <span>สร้างข้อมูลเมื่อ : <span id="show_created_at" class="ml-2"></span></span>
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-clock mr-3"></i>
                        <span>อัปเดตล่าสุดเมื่อ : <span id="show_updated_at" class="ml-2"></span></span>
                    </p>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex items-center justify-end p-6 border-t">
                <button onclick="closeModal_Show_asset()"
                    class="px-6 py-2.5 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors">
                    ปิด
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function openModal_Show_asset_customer(button) {
        const assetId = button.getAttribute('data-id');

        // Fetch asset data using the ID with AJAX
        $.ajax({
            url: `/data_assets/${assetId}`,
            method: 'GET',
            dataType: 'json',
            success: function(asset) {
                // Update modal content with asset data
                $('#show_Type_Asset').text(asset.Type_Asset || '-');
                $('#show_OldLicense').text(
                    `${asset.Vehicle_OldLicense_Text || '-'} ${asset.Vehicle_OldLicense_Number || '-'} ${asset.OldProvince || '-'}`
                );
                $('#show_NewLicense').text(
                    `${asset.Vehicle_NewLicense_Text || '-'} ${asset.Vehicle_NewLicense_Number || '-'} ${asset.NewProvince || '-'}`
                );
                $('#show_Vehicle_Chassis').text(asset.Vehicle_Chassis || '-');
                $('#show_Vehicle_New_Number').text(asset.Vehicle_New_Number || '-');
                $('#show_Vehicle_Engine').text(asset.Vehicle_Engine || '-');
                $('#show_Vehicle_Color').text(asset.Vehicle_Color || '-');
                // $('#show_Vehicle_Brand').text(asset.Vehicle_Brand || '-');

                if (asset.Type_Asset === 'รถยนต์') {
                    $('#show_Vehicle_Brand').text(asset.car_brand ? asset.car_brand.Brand_car : '-');
                } else if (asset.Type_Asset === 'มอเตอร์ไซค์') {
                    $('#show_Vehicle_Brand').text(asset.moto_brand ? asset.moto_brand.Brand_moto : '-');
                } else {
                    $('#show_Vehicle_Brand').text('-');
                }

                $('#show_Vehicle_Group').text(asset.Vehicle_Group || '-');
                $('#show_Vehicle_Models').text(asset.Vehicle_Models || '-');
                $('#show_Vehicle_Years').text(asset.Vehicle_Years || '-');
                $('#show_Vehicle_CC').text(asset.Vehicle_CC || '-');
                $('#show_Vehicle_Gear').text(asset.Vehicle_Gear || '-');
                $('#show_Vehicle_Type').text(asset.Vehicle_Type || '-');
                $('#show_Vehicle_Type_PLT').text(asset.Vehicle_Type_PLT || '-');
                $('#show_Vehicle_InsuranceStatus').text(asset.Vehicle_InsuranceStatus || '-');
                $('#show_Vehicle_Companies').text(asset.Vehicle_Companies || '-');
                $('#show_Vehicle_PolicyNumber').text(asset.Vehicle_PolicyNumber || '-');
                $('#show_Choose_Act').text(asset.Choose_Act || '-');
                $('#show_Choose_Register').text(asset.Choose_Register || '-');

                // Format dates
                const formatDate_stamp = (dateString_timestamp) => {
                    if (!dateString_timestamp) return '-';
                    return new Date(dateString_timestamp).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                };


                $('#show_created_at').text(formatDate_stamp(asset.created_at));
                $('#show_updated_at').text(formatDate_stamp(asset.updated_at));


                const formatDate = (dateString) => {
                    if (!dateString) return '-';

                    const [year, month, day] = dateString.split('-');
                    const convertedYear = parseInt(year) - 543; // แปลงจาก พ.ศ. เป็น ค.ศ.

                    return new Date(convertedYear, month - 1, day).toLocaleDateString('th-TH', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                };

                const calculateYearsAndDays = (startDateString, endDateString) => {
                    if (!startDateString || !endDateString) return '-';

                    const [startYear, startMonth, startDay] = startDateString.split('-').map(Number);
                    const [endYear, endMonth, endDay] = endDateString.split('-').map(Number);

                    const startDate = new Date(startYear - 543, startMonth - 1, startDay);
                    const endDate = new Date(endYear - 543, endMonth - 1, endDay);

                    const yearsDifference = endDate.getFullYear() - startDate.getFullYear();
                    const daysDifference = Math.floor((endDate - startDate) / (1000 * 60 * 60 * 24)); // คำนวณระยะห่างเป็นวัน

                    // ปรับวันเหลือเป็นวันในปีที่เหลือ
                    const totalDaysInYear = 365; // สมมติปีที่ไม่ใช่ leap year
                    const remainingDays = daysDifference - (yearsDifference * totalDaysInYear);

                    return { years: yearsDifference, days: remainingDays };
                };

                $('#show_Insurance_renewal_date').text(formatDate(asset.Insurance_renewal_date));
                $('#show_Insurance_end_date').text(formatDate(asset.Insurance_end_date));
                $('#show_act_renewal_date').text(formatDate(asset.act_renewal_date));
                $('#show_act_end_date').text(formatDate(asset.act_end_date));
                $('#show_register_renewal_date').text(formatDate(asset.register_renewal_date));
                $('#show_register_end_date').text(formatDate(asset.register_end_date));

                // คำนวณปีและวันของประกันภัย
                const insuranceDifference = calculateYearsAndDays(asset.Insurance_renewal_date, asset.Insurance_end_date);
                if (insuranceDifference.years >= 1) {
                    $('#show_Choose_Insurance_Cal').text(`${insuranceDifference.years} ปี ${insuranceDifference.days} วัน`);
                } else {
                    $('#show_Choose_Insurance_Cal').text(`${insuranceDifference.days} วัน`);
                }

                // คำนวณปีและวันของพรบ
                const actDifference = calculateYearsAndDays(asset.act_renewal_date, asset.act_end_date);
                if (actDifference.years >= 1) {
                    $('#show_Choose_Act_Cal').text(`${actDifference.years} ปี ${actDifference.days} วัน`);
                } else {
                    $('#show_Choose_Act_Cal').text(`${actDifference.days} วัน`);
                }

                // คำนวณปีและวันของทะเบียน
                const registerDifference = calculateYearsAndDays(asset.register_renewal_date, asset.register_end_date);
                if (registerDifference.years >= 1) {
                    $('#show_Choose_Register_Cal').text(`${registerDifference.years} ปี ${registerDifference.days} วัน`);
                } else {
                    $('#show_Choose_Register_Cal').text(`${registerDifference.days} วัน`);
                }



                // Show the modal with a smoother fade and slide effect
                $('#show_modal_asset')
                    .css({ opacity: 0, top: '60px' })
                    .removeClass('hidden')
                    .animate({ opacity: 1, top: '0px' }, 100, 'swing');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching asset data:', error);
            }
        });
    }

    function closeModal_Show_asset() {
        // Hide the modal with a smoother fade and slide effect
        $('#show_modal_asset').animate({ opacity: 0, top: '60px' }, 300, 'swing', function() {
            $(this).addClass('hidden');
        });
    }
</script>















