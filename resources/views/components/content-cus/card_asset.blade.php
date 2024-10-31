{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

{{-- <script>
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
                const assetContainer = $('#asset-container');
                assetContainer.empty();

                // Create a container for the sliding cards
                const sliderTrack = $('<div class="slider-track flex transition-transform duration-300 ease-in-out"></div>');

                if (data.length > 0) {
                    // Hide the out of stock message and navigation buttons if data is available
                    $('.asset-master').hide(); // ซ่อน div ที่แสดงข้อความ "ยังไม่มีข้อมูลสินทรัพย์ลูกค้านี้"
                    $('#prev_asset, #next_asset').show(); // แสดงปุ่มเลื่อน
                } else {
                    // Show the out of stock message if no data is available
                    $('.asset-master').show(); // แสดง div ที่แสดงข้อความ "ยังไม่มีข้อมูลสินทรัพย์ลูกค้านี้"
                    $('#prev_asset, #next_asset').hide(); // ซ่อนปุ่มเลื่อน
                }

                data.forEach(asset => {
                    const card = `
                    <div class="flex-shrink-0 w-full max-w-lg mx-4">
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
                                        <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-24">
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
                    sliderTrack.append(card);
                });

                assetContainer.append(sliderTrack);
                initializeSlider();
            },


            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    function initializeSlider() {
        let currentPosition = 0;
        const sliderTrack = $('.slider-track');
        const cards = sliderTrack.children();
        const cardWidth = cards.first().outerWidth(true);
        const totalCards = cards.length;

        // Add necessary styles to container
        $('.slider-container').css({
            'position': 'relative',
            'overflow': 'hidden',
            // 'padding': '0 40px'
        });

        // Show/hide navigation buttons based on position
        function updateNavigationButtons() {
            const maxPosition = -(totalCards - 1) * cardWidth;
            $('#prev_asset').toggle(currentPosition < 0);
            $('#next_asset').toggle(currentPosition > maxPosition);
        }

        // Handle navigation button clicks
        $('#prev_asset').click(function() {
            if (currentPosition < 0) {
                currentPosition += cardWidth;
                sliderTrack.css('transform', `translateX(${currentPosition}px)`);
                updateNavigationButtons();
            }
        });

        $('#next_asset').click(function() {
            const maxPosition = -(totalCards - 1) * cardWidth;
            if (currentPosition > maxPosition) {
                currentPosition -= cardWidth;
                sliderTrack.css('transform', `translateX(${currentPosition}px)`);
                updateNavigationButtons();
            }
        });

        // Style navigation buttons
        $('.prev_asset, .next_asset').css({
            'position': 'absolute',
            'top': '50%',
            'transform': 'translateY(-50%)',
            'background': 'rgba(255, 165, 0, 0.8)',
            'color': 'white',
            'border': 'none',
            'padding': '10px 15px',
            'cursor': 'pointer',
            'border-radius': '5px',
            'z-index': '1'
        });

        $('#prev_asset').css('left', '0');
        $('#next_asset').css('right', '0');

        // Initialize navigation buttons visibility
        updateNavigationButtons();
    }

    // Initialize with customer ID
    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);
</script> --}}


<script>
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
                const assetContainer = $('#asset-container');
                assetContainer.empty();

                // Check if data is defined and is an array
                if (data && Array.isArray(data) && data.length > 0) {
                    const sliderTrack = $(
                        '<div class="slider-track flex transition-transform duration-300 ease-in-out"></div>'
                        );

                    // Hide the out of stock message and navigation buttons if data is available
                    $('.asset-master').hide(); // Hide the message when there are assets
                    $('#prev_asset, #next_asset').show(); // Show navigation buttons

                    data.forEach(asset => {
                        const card = `
                            <div class="flex-shrink-0 w-full max-w-lg mx-4">
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
                                                <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-24">
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
                        sliderTrack.append(card);
                    });

                    assetContainer.append(sliderTrack);
                    initializeSlider();
                } else {
                    // Show the out of stock message if no data is available
                    $('.asset-master').show(); // Show the message
                    $('#prev_asset, #next_asset').hide(); // Hide navigation buttons
                }
            },

            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    function initializeSlider() {
        let currentPosition = 0;
        const sliderTrack = $('.slider-track');
        const cards = sliderTrack.children();
        const cardWidth = cards.first().outerWidth(true);
        const totalCards = cards.length;

        // Add necessary styles to container
        $('.slider-container').css({
            'position': 'relative',
            'overflow': 'hidden',
        });

        // Show/hide navigation buttons based on position
        function updateNavigationButtons() {
            const maxPosition = -(totalCards - 1) * cardWidth;
            $('#prev_asset').toggle(currentPosition < 0);
            $('#next_asset').toggle(currentPosition > maxPosition);
        }

        // Handle navigation button clicks
        $('#prev_asset').click(function() {
            if (currentPosition < 0) {
                currentPosition += cardWidth;
                sliderTrack.css('transform', `translateX(${currentPosition}px)`);
                updateNavigationButtons();
            }
        });

        $('#next_asset').click(function() {
            const maxPosition = -(totalCards - 1) * cardWidth;
            if (currentPosition > maxPosition) {
                currentPosition -= cardWidth;
                sliderTrack.css('transform', `translateX(${currentPosition}px)`);
                updateNavigationButtons();
            }
        });

        // Style navigation buttons
        $('.prev_asset, .next_asset').css({
            'position': 'absolute',
            'top': '50%',
            'transform': 'translateY(-50%)',
            'background': 'rgba(255, 165, 0, 0.8)',
            'color': 'white',
            'border': 'none',
            'padding': '10px 15px',
            'cursor': 'pointer',
            'border-radius': '5px',
            'z-index': '1'
        });

        $('#prev_asset').css('left', '0');
        $('#next_asset').css('right', '0');

        // Initialize navigation buttons visibility
        updateNavigationButtons();
    }

    // Initialize with customer ID
    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);
</script>






{{-- // success: function(data) {
    //     const assetContainer = $('#asset-container');
    //     assetContainer.empty();

    //     // Create a container for the sliding cards
    //     const sliderTrack = $('<div class="slider-track flex transition-transform duration-300 ease-in-out"></div>');

    //     data.forEach(asset => {
    //         const card = `
    //         <div class="flex-shrink-0 w-full max-w-lg mx-4">
    //             <div class="card task-box custom-card border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
    //                 <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
    //                     <div class="flex justify-between items-center">
    //                         <h6 class="text-primary font-semibold">
    //                             <i class="fas fa-tag text-secondary"></i>
    //                             <strong>สินทรัพย์ : </strong> ${asset.Type_Asset}
    //                         </h6>
    //                         <button
    //                             class="flex items-center bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transform hover:translate-y-[-2px] hover:shadow-lg transition-all duration-200"
    //                             data-id="${asset.id}"
    //                             onclick="openModal_Edit_asset_customer(this)">
    //                             <i class="fas fa-edit mr-2"></i>
    //                             แก้ไข
    //                         </button>
    //                     </div>
    //                 </div>
    //                 <div class="p-4">
    //                     <div class="flex">
    //                         <div class="flex-1">
    //                             <p><strong><i class="fas fa-cube"></i> ประเภทสินทรัพย์ : </strong>${asset.Type_Asset}</p>
    //                             <p><strong><i class="fas fa-car"></i> ทะเบียนรถ : </strong>${asset.Vehicle_OldLicense_Text} ${asset.Vehicle_OldLicense_Number} ${asset.OldProvince} </p>
    //                             <p><strong><i class="fas fa-car"></i> ทะเบียนรถใหม่ : </strong>${asset.Vehicle_NewLicense_Text} ${asset.Vehicle_NewLicense_Number} ${asset.NewProvince} </p>
    //                             <p><strong><i class="fas fa-barcode"></i> เลขถัง : </strong>${asset.Vehicle_Chassis}</p>
    //                             <p><strong><i class="fas fa-cogs"></i> เลขเครื่อง : </strong>${asset.Vehicle_Engine}</p>
    //                             <p><strong><i class="fas fa-paint-brush"></i> สีรถ : </strong>${asset.Vehicle_Color}</p>
    //                         </div>
    //                         <div class="flex-shrink-0">
    //                             <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-24">
    //                         </div>
    //                     </div>
    //                 </div>
    //                 <div class="p-4 border-t">
    //                     <small class="text-muted">
    //                         <i class="fas fa-calendar-alt"></i> สร้างข้อมูลเมื่อ ${new Date(asset.created_at).toLocaleDateString('th-TH', {
    //                             year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit'
    //                         })} น.
    //                     </small>
    //                 </div>
    //             </div>
    //         </div>`;
    //         sliderTrack.append(card);
    //     });

    //     assetContainer.append(sliderTrack);
    //     initializeSlider();

    // },

    // success: function(data) {
    //     const assetContainer = $('#asset-container');
    //     const assetMaster = $('.asset-master'); // Select the message container
    //     assetContainer.empty();

    //     // Create a container for the sliding cards
    //     const sliderTrack = $('<div class="slider-track flex transition-transform duration-300 ease-in-out"></div>');

    //     if (data.length > 0) {
    //         // Hide the 'no assets' message
    //         assetMaster.hide();

    //         data.forEach(asset => {
    //             const card = `
    //             <div class="flex-shrink-0 w-full max-w-lg mx-4">
    //                 <div class="card task-box custom-card border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
    //                     <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
    //                         <div class="flex justify-between items-center">
    //                             <h6 class="text-primary font-semibold">
    //                                 <i class="fas fa-tag text-secondary"></i>
    //                                 <strong>สินทรัพย์ : </strong> ${asset.Type_Asset}
    //                             </h6>
    //                             <button
    //                                 class="flex items-center bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transform hover:translate-y-[-2px] hover:shadow-lg transition-all duration-200"
    //                                 data-id="${asset.id}"
    //                                 onclick="openModal_Edit_asset_customer(this)">
    //                                 <i class="fas fa-edit mr-2"></i>
    //                                 แก้ไข
    //                             </button>
    //                         </div>
    //                     </div>
    //                     <div class="p-4">
    //                         <div class="flex">
    //                             <div class="flex-1">
    //                                 <p><strong><i class="fas fa-cube"></i> ประเภทสินทรัพย์ : </strong>${asset.Type_Asset}</p>
    //                                 <p><strong><i class="fas fa-car"></i> ทะเบียนรถ : </strong>${asset.Vehicle_OldLicense_Text} ${asset.Vehicle_OldLicense_Number} ${asset.OldProvince} </p>
    //                                 <p><strong><i class="fas fa-car"></i> ทะเบียนรถใหม่ : </strong>${asset.Vehicle_NewLicense_Text} ${asset.Vehicle_NewLicense_Number} ${asset.NewProvince} </p>
    //                                 <p><strong><i class="fas fa-barcode"></i> เลขถัง : </strong>${asset.Vehicle_Chassis}</p>
    //                                 <p><strong><i class="fas fa-cogs"></i> เลขเครื่อง : </strong>${asset.Vehicle_Engine}</p>
    //                                 <p><strong><i class="fas fa-paint-brush"></i> สีรถ : </strong>${asset.Vehicle_Color}</p>
    //                             </div>
    //                             <div class="flex-shrink-0">
    //                                 <img src="{{ asset('img/asset9.jpg') }}" alt="ที่อยู่ปัจจุบัน" class="w-36 h-24">
    //                             </div>
    //                         </div>
    //                     </div>
    //                     <div class="p-4 border-t">
    //                         <small class="text-muted">
    //                             <i class="fas fa-calendar-alt"></i> สร้างข้อมูลเมื่อ ${new Date(asset.created_at).toLocaleDateString('th-TH', {
    //                                 year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit'
    //                             })} น.
    //                         </small>
    //                     </div>
    //                 </div>
    //             </div>`;
    //             sliderTrack.append(card);
    //         });

    //         assetContainer.append(sliderTrack);
    //         initializeSlider();

    //     } else {
    //         // Show the 'no assets' message if no data is found
    //         assetMaster.show();
    //     }
    // }, --}}
