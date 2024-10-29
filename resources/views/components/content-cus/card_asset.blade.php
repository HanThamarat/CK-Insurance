<script>
    let currentIndex = 0;

    function loadAssets(customerId) {
        if (!customerId) {
            console.error('Invalid customer ID');
            return;
        }

        $.ajax({
            url: `/assets/customer`,
            type: 'GET',
            data: { customer_id: customerId },
            dataType: 'json',
            success: function(data) {
                const assetSlider = $('#assetSlider');
                assetSlider.empty(); // Clear slider before displaying new data

                // Create a slider container
                const sliderContainer = $('<div class="overflow-x-auto whitespace-nowrap p-6"></div>');

                // Use flexbox to wrap the cards and maintain spacing
                data.forEach(asset => {
                    const card = `
                        <div class="inline-block w-110 mx-2"> <!-- Inline block to allow spacing -->
                            <div class="card task-box custom-card border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                                <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
                                    <div class="flex justify-between items-center">
                                        <h6 class="text-primary font-semibold">
                                            <i class="fas fa-tag text-secondary"></i>
                                            <strong>สินทรัพย์ : </strong> ${asset.Type_Asset}
                                        </h6>
                                        <button
                                            class="flex items-center bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transform hover:translate-y-[-2px] hover:shadow-lg transition-all duration-200"
                                            data-id="${asset.id}"
                                            onclick="openModal_Edit_asset_customer(this)">
                                            <i class="fas fa-edit mr-2"></i>
                                            แก้ไข
                                        </button>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="flex">
                                        <div class="flex-1">
                                            <p><strong><i class="fas fa-cube"></i> ประเภทสินทรัพย์ : </strong>${asset.Type_Asset}</p>
                                            <p><strong><i class="fas fa-car"></i> ทะเบียนรถ : </strong>${asset.Vehicle_OldLicense_Text} ${asset.Vehicle_OldLicense_Number} ${asset.OldProvince} </p>
                                            <p><strong><i class="fas fa-car"></i> ทะเบียนรถใหม่ : </strong>${asset.Vehicle_NewLicense_Text} ${asset.Vehicle_NewLicense_Number} ${asset.NewProvince} </p>
                                            <p><strong><i class="fas fa-barcode"></i> เลขถัง : </strong>${asset.Vehicle_Chassis}</p>
                                            <p><strong><i class="fas fa-cogs"></i> เลขเครื่อง : </strong>${asset.Vehicle_Engine}</p>
                                            <p><strong><i class="fas fa-paint-brush"></i> สีรถ : </strong>${asset.Vehicle_Color}</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('img/assetDaTA.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-24">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 border-t">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar-alt"></i> สร้างข้อมูลเมื่อ ${new Date(asset.created_at).toLocaleDateString('th-TH', {
                                            year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit'
                                        })} น.
                                    </small>
                                </div>
                            </div>
                        </div>`;
                    sliderContainer.append(card);
                });

                assetSlider.append(sliderContainer);
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);
</script>









{{-- <div id="assetContainer"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function loadAssets(customerId) {
        // ตรวจสอบว่ามีค่า customerId หรือไม่
        if (!customerId) {
            console.error('Invalid customer ID');
            return;
        }

        $.ajax({
            url: `/assets/customer`,
            type: 'GET',
            data: { customer_id: customerId },
            dataType: 'json',
            success: function(data) {
                const assetContainer = $('#assetContainer');
                assetContainer.empty(); // เคลียร์ container ก่อนแสดงข้อมูลใหม่

                data.forEach(asset => {
                    const card = `
                   <div class="flex flex-col w-full p-2 mt-0">
                        <div class="card task-box custom-card border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                            <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
                                <div class="flex justify-between items-center">
                                    <h6 class="text-primary font-semibold">
                                        <i class="fas fa-tag text-secondary"></i>
                                        <strong>สินทรัพย์ : </strong> ${asset.Type_Asset}
                                    </h6>
                                    <button
                                        class="flex items-center bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transform hover:translate-y-[-2px] hover:shadow-lg transition-all duration-200"
                                        data-id="${asset.id}"
                                        onclick="openModal_Edit_asset_customer(this)">
                                        <i class="fas fa-edit mr-2"></i>
                                        แก้ไข
                                    </button>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex">
                                    <div class="flex-1">
                                        <p><strong><i class="fas fa-cube"></i> ประเภทสินทรัพย์ : </strong>${asset.Type_Asset}</p>
                                        <p><strong><i class="fas fa-car"></i> ทะเบียนรถ : </strong>${asset.Vehicle_OldLicense_Text} ${asset.Vehicle_OldLicense_Number} ${asset.OldProvince} </p>
                                        <p><strong><i class="fas fa-car"></i> ทะเบียนรถใหม่ : </strong>${asset.Vehicle_NewLicense_Text} ${asset.Vehicle_NewLicense_Number} ${asset.NewProvince} </p>
                                        <p><strong><i class="fas fa-barcode"></i> เลขถัง : </strong>${asset.Vehicle_Chassis}</p>
                                        <p><strong><i class="fas fa-cogs"></i> เลขเครื่อง : </strong>${asset.Vehicle_Engine}</p>
                                        <p><strong><i class="fas fa-paint-brush"></i> สีรถ : </strong>${asset.Vehicle_Color}</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('img/assetDaTA.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-24">
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 border-t">
                                <small class="text-muted">
                                    <i class="fas fa-calendar-alt"></i> สร้างข้อมูลเมื่อ ${new Date(asset.created_at).toLocaleDateString('th-TH', {
                                        year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit'
                                    })} น.
                                </small>
                            </div>
                        </div>
                    </div>`;
                    assetContainer.append(card);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    // รับค่า customerId จาก PHP หรือกำหนดค่าเริ่มต้น
    const customerId = {{ $customer->id ?? 'null' }}; // รับค่า ID ของลูกค้า
    loadAssets(customerId); // เรียกใช้ฟังก์ชันพร้อมระบุ customer_id
</script>

<style>
    .custom-card {
        width: 110%; /* กำหนดให้การ์ดมีความกว้างเต็มที่ */
        max-width: 800px; /* ปรับตามความเหมาะสม */
    }
</style> --}}





{{-- <style>
    .slider-container {
        position: relative;
    }

    .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.8);
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    #assetSlider {
        display: flex;
    }

    .custom-card {
        min-width: 300px; /* ปรับขนาดการ์ดตามที่ต้องการ */
        margin-right: 1rem; /* ระยะห่างระหว่างการ์ด */
    }
</style> --}}



{{-- // ฟังก์ชันเลื่อนซ้าย
// $('#prev-button').on('click', function() {
//     if (currentIndex > 0) {
//         currentIndex--;
//         updateSliderPosition();
//     }
// });

// // ฟังก์ชันเลื่อนขวา
// $('#next-button').on('click', function() {
//     if (currentIndex < $('#assetSlider').children().length - 1) {
//         currentIndex++;
//         updateSliderPosition();
//     }
// });

// ฟังก์ชันอัพเดตตำแหน่งของ slider
// function updateSliderPosition() {
//     $('#assetSlider').css('transform', `translateX(-${currentIndex * (300 + 16)}px)`); // 300 คือความกว้างของการ์ด, 16 คือระยะห่าง
// } --}}
