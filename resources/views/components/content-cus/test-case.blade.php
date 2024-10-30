        {{-- <div id="asset-info" class="tab-pane hidden">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">
                <div id="assetContainer" class="overflow-hidden relative">
                    <div class="flex transition-transform duration-300 no-scrollbar " id="assetSlider" >
                        <!-- การ์ดข้อมูลจะถูกสร้างและเพิ่มที่นี่ -->
                        @include('components.content-cus.card_asset')
                    </div>

                    <button id="prev_asset">←</button>
                    <button id="next_asset">→</button>
                </div>
            </div>

            <div class="flex flex-col items-center mt-14 asset-master hidden">
                <div class="shadow-effect">
                    <img src="https://ckl.co.th/assets/images/out-of-stock.png" class="up-down w-24 slow-bounce" alt="Out of Stock">
                </div>
                <p class="mt-5 text-gray-600 text-center text-sm">ยังไม่มีข้อมูลสินทรัพย์ลูกค้านี้</p>
            </div>

            <div class="flex justify-center mt-2">
                <button id="addAssetButton" class="mt-0 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold text-sm py-2 px-3 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-3 mr-1" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M135.2 117.4L109.1 192l293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 144 0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L96 400l0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L0 256c0-26.7 16.4-49.6 39.6-59.2z" />
                    </svg>
                    เพิ่มสินทรัพย์
                </button>
            </div>
        </div> --}}






                            {{-- <!-- ปุ่มเลื่อนไปทางซ้าย -->
                    <button class="prev_asset" id="prev_asset">←</button>
                    <!-- ปุ่มเลื่อนไปทางขวา -->
                    <button class="next_asset" id="next_asset">→</button> --}}






                    {{-- <script>
    // เพิ่มสไตล์ CSS สำหรับ no-scrollbar
    const style = document.createElement('style');
    style.innerHTML = `
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    `;
    document.head.appendChild(style);

    const slideAmount = 110; // จำนวนที่เลื่อนไปในแต่ละครั้ง (ต้องปรับตามขนาดการ์ด)
    let currentIndex = 0; // ตัวแปรเก็บตำแหน่งปัจจุบัน

    function loadAssets(customerId) {
        if (!customerId) {
            console.error('Invalid customer ID');
            return;
        }

        $.ajax({
            url: `/assets/customer`,
            type: 'GET',
            data: {
                customer_id: customerId
            },
            dataType: 'json',
            success: function(data) {
                const assetSlider = $('#assetSlider');
                const assetMaster = $('.asset-master');

                assetSlider.empty(); // Clear slider before displaying new data

                // Check if there are assets to display
                if (data.length > 0) {
                    // Show the asset slider and hide the asset master div
                    assetMaster.addClass('hidden');

                    // Create a slider container
                    const sliderContainer = $(
                        '<div class="overflow-x-auto whitespace-nowrap p-6 no-scrollbar"></div>');

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
                                           <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20 opacity-100">
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
                } else {
                    // If no assets, show the asset master div
                    assetMaster.removeClass('hidden');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);

    $('#prev_asset').on('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            $('#assetSlider').css('transform', `translateX(-${currentIndex * slideAmount}px)`);
        }
    });

    // ฟังก์ชันเลื่อนขวา
    $('#next_asset').on('click', function() {
        const totalCards = $('#assetSlider .card').length;
        const maxIndex = Math.ceil(totalCards / 4) - 1; // เปลี่ยนจาก totalCards เป็น maxIndex ที่ใช้ในการเลื่อน
        if (currentIndex < maxIndex) {
            currentIndex++;
            $('#assetSlider').css('transform', `translateX(-${currentIndex * slideAmount}px)`);
        }
    });
</script> --}}





{{-- <script>
    const slideAmount = 110; // จำนวนที่เลื่อนไปในแต่ละครั้ง (ปรับตามขนาดการ์ด)
    let currentIndex = 0; // ตัวแปรเก็บตำแหน่งปัจจุบัน
    const cardsPerPage = 2; // จำนวนการ์ดที่จะแสดงต่อหน้า

    function loadAssets(customerId) {
        if (!customerId) {
            console.error('Invalid customer ID');
            return;
        }

        $.ajax({
            url: `/assets/customer`,
            type: 'GET',
            data: {
                customer_id: customerId
            },
            dataType: 'json',
            success: function(data) {
                const assetSlider = $('#assetSlider');
                assetSlider.empty(); // Clear slider before displaying new data

                // Check if there are assets to display
                if (data.length > 0) {
                    // Show the asset slider
                    // Create a slider container
                    const sliderContainer = $('<div class="flex">');

                    data.forEach(asset => {
                        const card = `
                        <div class="inline-block w-110 mx-2">
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
                                           <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20 opacity-100">
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
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);

    $('#prev_asset').on('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            $('#assetSlider').css('transform', `translateX(-${currentIndex * slideAmount}px)`);
        }
    });

    $('#next_asset').on('click', function() {
        const totalCards = $('#assetSlider .card').length;
        const maxIndex = Math.ceil(totalCards / cardsPerPage) - 1; // คำนวณดัชนีสูงสุดที่สามารถเข้าถึงได้
        if (currentIndex < maxIndex) {
            currentIndex++;
            $('#assetSlider').css('transform', `translateX(-${currentIndex * slideAmount}px)`);
        }
    });
</script> --}}





{{-- <script>
    // เพิ่มสไตล์ CSS สำหรับ no-scrollbar
    const style = document.createElement('style');
    style.innerHTML = `
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    `;
    document.head.appendChild(style);

    const slideAmount = 110; // จำนวนที่เลื่อนไปในแต่ละครั้ง (ต้องปรับตามขนาดการ์ด)
    let currentIndex = 0; // ตัวแปรเก็บตำแหน่งปัจจุบัน

    function loadAssets(customerId) {
        if (!customerId) {
            console.error('Invalid customer ID');
            return;
        }

        $.ajax({
            url: `/assets/customer`,
            type: 'GET',
            data: {
                customer_id: customerId
            },
            dataType: 'json',
            success: function(data) {
                const assetSlider = $('#assetSlider');
                const assetMaster = $('.asset-master');

                assetSlider.empty(); // Clear slider before displaying new data

                // Check if there are assets to display
                if (data.length > 0) {
                    // Show the asset slider and hide the asset master div
                    assetMaster.addClass('hidden');

                    // Create a slider container
                    const sliderContainer = $('<div class="overflow-x-auto whitespace-nowrap p-6 no-scrollbar"></div>');

                    data.forEach(asset => {
                        const card = `
                        <div class="inline-block w-110 mx-2">
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
                                           <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20 opacity-100">
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
                } else {
                    // If no assets, show the asset master div
                    assetMaster.removeClass('hidden');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);

    $('#prev_asset').on('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            $('#assetSlider').css('transform', `translateX(-${currentIndex * slideAmount}px)`);
        }
    });

    $('#next_asset').on('click', function() {
        const totalCards = $('#assetSlider .card').length;
        const maxIndex = Math.ceil(totalCards / 4) - 1;
        if (currentIndex < maxIndex) {
            currentIndex++;
            $('#assetSlider').css('transform', `translateX(-${currentIndex * slideAmount}px)`);
        }
    });
</script> --}}







{{-- <script>
    // เพิ่มสไตล์ CSS สำหรับ no-scrollbar
    const style = document.createElement('style');
    style.innerHTML = `
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    `;
    document.head.appendChild(style);

    function loadAssets(customerId) {
        if (!customerId) {
            console.error('Invalid customer ID');
            return;
        }

        $.ajax({
            url: `/assets/customer`,
            type: 'GET',
            data: {
                customer_id: customerId
            },
            dataType: 'json',
            success: function(data) {
                const assetSlider = $('#assetSlider');
                const assetMaster = $('.asset-master');

                assetSlider.empty(); // Clear slider before displaying new data

                // Check if there are assets to display
                if (data.length > 0) {
                    // Show the asset slider and hide the asset master div
                    assetMaster.addClass('hidden');

                    // Create a slider container
                    const sliderContainer = $(
                        '<div class="overflow-x-auto whitespace-nowrap p-6 no-scrollbar"></div>');

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
                                           <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-20 opacity-100">
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
                } else {
                    // If no assets, show the asset master div
                    assetMaster.removeClass('hidden');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }


    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);
</script> --}}
