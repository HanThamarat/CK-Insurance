<script>
    $('head').append(`
        <style>
            .popup {
            --burger-line-width: 1.125em;
            --burger-line-height: 0.125em;
            --burger-offset: 0.625em;
            --burger-bg: rgba(0, 0, 0, .15);
            --burger-color: #333;
            --burger-line-border-radius: 0.1875em;
            --burger-diameter: 2.125em;
            --burger-btn-border-radius: calc(var(--burger-diameter) / 2);
            --burger-line-transition: .3s;
            --burger-transition: all .1s ease-in-out;
            --burger-hover-scale: 1.1;
            --burger-active-scale: .95;
            --burger-enable-outline-color: var(--burger-bg);
            --burger-enable-outline-width: 0.125em;
            --burger-enable-outline-offset: var(--burger-enable-outline-width);
            --nav-padding-x: 0.25em;
            --nav-padding-y: 0.625em;
            --nav-border-radius: 0.375em;
            --nav-border-color: #ccc;
            --nav-border-width: 0.0625em;
            --nav-shadow-color: rgba(0, 0, 0, .2);
            --nav-shadow-width: 0 1px 5px;
            --nav-bg: #eee;
            --nav-font-family: Menlo, Roboto Mono, monospace;
            --nav-default-scale: .8;
            --nav-active-scale: 1;
            --nav-position-left: 0;
            --nav-position-right: unset;
            --nav-title-size: 0.625em;
            --nav-title-color: #777;
            --nav-title-padding-x: 1rem;
            --nav-title-padding-y: 0.25em;
            --nav-button-padding-x: 1rem;
            --nav-button-padding-y: 0.375em;
            --nav-button-border-radius: 0.375em;
            --nav-button-font-size: 12px;
            --nav-button-hover-bg: #6495ed;
            --nav-button-hover-text-color: #fff;
            --nav-button-distance: 0.875em;
            --underline-border-width: 0.0625em;
            --underline-border-color: #ccc;
            --underline-margin-y: 0.3125em;
            }

            .popup {
            display: inline-block;
            text-rendering: optimizeLegibility;
            position: relative;
            }

            .popup input {
            display: none;
            }

            .burger {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            background: var(--burger-bg);
            width: var(--burger-diameter);
            height: var(--burger-diameter);
            border-radius: var(--burger-btn-border-radius);
            border: none;
            cursor: pointer;
            overflow: hidden;
            transition: var(--burger-transition);
            outline: var(--burger-enable-outline-width) solid transparent;
            outline-offset: 0;
            }

            .burger span {
            height: var(--burger-line-height);
            width: var(--burger-line-width);
            background: var(--burger-color);
            border-radius: var(--burger-line-border-radius);
            position: absolute;
            transition: var(--burger-line-transition);
            }

            .burger span:nth-child(1) {
            top: var(--burger-offset);
            }

            .burger span:nth-child(2) {
            bottom: var(--burger-offset);
            }

            .burger span:nth-child(3) {
            top: 50%;
            transform: translateY(-50%);
            }

            .popup-window {
            transform: scale(var(--nav-default-scale));
            visibility: hidden;
            opacity: 0;
            position: absolute;
            padding: var(--nav-padding-y) var(--nav-padding-x);
            background: var(--nav-bg);
            font-family: var(--nav-font-family);
            color: var(--nav-text-color);
            border-radius: var(--nav-border-radius);
            box-shadow: var(--nav-shadow-width) var(--nav-shadow-color);
            border: var(--nav-border-width) solid var(--nav-border-color);
            top: calc(var(--burger-diameter) + var(--burger-enable-outline-width) + var(--burger-enable-outline-offset));
            left: var(--nav-position-left);
            right: var(--nav-position-right);
            transition: var(--burger-transition);
            }

            .popup-window legend {
            padding: var(--nav-title-padding-y) var(--nav-title-padding-x);
            margin: 0;
            color: var(--nav-title-color);
            font-size: var(--nav-title-size);
            text-transform: uppercase;
            }

            .popup-window ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            }

            .popup-window ul button {
            outline: none;
            width: 100%;
            border: none;
            background: none;
            display: flex;
            align-items: center;
            color: var(--burger-color);
            font-size: var(--nav-button-font-size);
            padding: var(--nav-button-padding-y) var(--nav-button-padding-x);
            white-space: nowrap;
            border-radius: var(--nav-button-border-radius);
            cursor: pointer;
            column-gap: var(--nav-button-distance);
            }

            .popup-window ul li:nth-child(1) svg,
            .popup-window ul li:nth-child(2) svg {
            color: cornflowerblue;
            }

            .popup-window ul li:nth-child(4) svg,
            .popup-window ul li:nth-child(5) svg {
            color: rgb(153, 153, 153);
            }

            .popup-window ul li:nth-child(7) svg {
            color: red;
            }

            .popup-window hr {
            margin: var(--underline-margin-y) 0;
            border: none;
            border-bottom: var(--underline-border-width) solid var(--underline-border-color);
            }

            .popup-window ul button:hover,
            .popup-window ul button:focus-visible,
            .popup-window ul button:hover svg,
            .popup-window ul button:focus-visible svg {
            color: var(--nav-button-hover-text-color);
            background: var(--nav-button-hover-bg);
            }

            .burger:hover {
            transform: scale(var(--burger-hover-scale));
            }

            .burger:active {
            transform: scale(var(--burger-active-scale));
            }

            .burger:focus:not(:hover) {
            outline-color: var(--burger-enable-outline-color);
            outline-offset: var(--burger-enable-outline-offset);
            }

            .popup input:checked + .burger span:nth-child(1) {
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            }

            .popup input:checked + .burger span:nth-child(2) {
            bottom: 50%;
            transform: translateY(50%) rotate(-45deg);
            }

            .popup input:checked + .burger span:nth-child(3) {
            transform: translateX(calc(var(--burger-diameter) * -1 - var(--burger-line-width)));
            }

            .popup input:checked ~ nav {
            transform: scale(var(--nav-active-scale));
            visibility: visible;
            opacity: 1;
            }
        </style>
    `);

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

                // Create the slider track
                const sliderTrack = $(
                    '<div class="slider-track flex transition-transform duration-300 ease-in-out"></div>'
                );
                assetContainer.append(sliderTrack);

                if (data && Array.isArray(data) && data.length > 0) {
                    const assetCards = data.map(asset => createAssetCard(asset));
                    sliderTrack.append(assetCards); // Append cards to slider track
                    initializeSlider();
                    $('.asset-master').hide(); // Hide the "no asset" message
                    $('#prev_asset, #next_asset').show(); // Show navigation buttons
                } else {
                    // Show the out of stock message if no data is available
                    $('.asset-master').show();
                    $('#prev_asset, #next_asset').hide();
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    function createAssetCard(asset) {
        return `
            <div class="flex-shrink-0 w-full max-w-lg mx-4">
                <div class="card task-box custom-card border-2 border-orange-500 border-opacity-50 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:shadow-orange-500">
                    <div class="bg-orange-200 bg-opacity-25 rounded-t-lg p-4">
                        <div class="flex justify-between items-center">
                            <h6 class="text-primary font-semibold">
                                <i class="fas fa-tag text-secondary"></i>
                                <strong>สินทรัพย์ : </strong> ${asset.Type_Asset}
                            </h6>

                            <label class="popup">
                                <input type="checkbox">
                                <div class="burger" tabindex="0">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <nav class="popup-window">
                                    <legend>Actions</legend>
                                    <ul>
                                        <li>
                                            <button data-id="${asset.id}"
                                                    data-type-asset="${asset.Type_Asset}"
                                                    data-old-license-text="${asset.Vehicle_OldLicense_Text}"
                                                    data-old-license-number="${asset.Vehicle_OldLicense_Number}"
                                                    data-old-province="${asset.OldProvince}"
                                                    data-chassis="${asset.Vehicle_Chassis}"
                                                    data-engine="${asset.Vehicle_Engine}"
                                                    data-color="${asset.Vehicle_Color}"
                                                    onclick="openModal_Show_asset_customer(this)">
                                                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                                <span>แสดง</span>
                                            </button>
                                        </li>

                                        <!--<li>
                                            <button data-id="${asset.id}"
                                                    onclick="openModal_Edit_asset_customer(this)">
                                                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                                                </svg>
                                                <span>แก้ไข</span>
                                            </button>
                                        </li>-->

                                        <li>
                                            <button data-id="${asset.id}"
                                                    onclick="openModal_Edit_asset_customer(this)">
                                                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                                                </svg>
                                                <span>แก้ไข</span>
                                            </button>
                                        </li>
                                        <hr>
                                        <li>
                                            <button class="delete-btn-asset" data-id="${asset.id}">
                                            <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                <line y2="18" x2="6" y1="6" x1="18"></line>
                                                <line y2="18" x2="18" y1="6" x1="6"></line>
                                            </svg>
                                            <span>ลบ</span>
                                            </button>
                                        </li>
                                    </ul>
                                </nav>
                            </label>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex">
                            <div class="flex-1">
                                <p><strong><i class="fas fa-cube"></i> ประเภทสินทรัพย์ : </strong>${asset.Type_Asset}</p>
                                <p><strong><i class="fas fa-car"></i> ทะเบียนรถ : </strong>${asset.Vehicle_OldLicense_Text} ${asset.Vehicle_OldLicense_Number} ${asset.OldProvince} </p>
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
            </div>
        `;
    }


    $(document).on('click', '.delete-btn-asset', function() {
        var assetId = $(this).data('id');

        // Use SweetAlert2 to confirm deletion
        Swal.fire({
            title: 'แน่ใจหรือไม่?',
            text: "ต้องการลบข้อมูลที่อยู่นี้?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'ยืนยันลบข้อมูล!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user clicks "Yes, delete it!", send the AJAX request
                $.ajax({
                    url: '/delete-asset',
                    type: 'POST',
                    data: {
                        id: assetId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสำเร็จ',
                                text: response.message
                            });
                            // Hide the deleted item
                            $('button[data-id="' + assetId + '"]').closest('.flex-shrink-0')
                                .hide();
                            // Call the loadAssets function to refresh the data
                            loadAssets(customerId);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: response.message
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถลบข้อมูลได้'
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'การลบข้อมูลถูกยกเลิก',
                    text: 'คุณไม่ได้ลบข้อมูล'
                });
            }
        });
    });

    function initializeSlider() {
        let currentPosition = 0;
        const sliderTrack = $('.slider-track');
        const cards = sliderTrack.children();
        const cardWidth = cards.first().outerWidth(true); // get width of first card including margin
        const totalCards = cards.length;
        const totalTrackWidth = totalCards * cardWidth; // Calculate total width of slider track
        const containerWidth = $('.slider-container').width(); // Width of the visible container

        // Add necessary styles to container
        $('.slider-container').css({
            'position': 'relative',
            'overflow': 'hidden',
        });

        // Show/hide navigation buttons based on position
        function updateNavigationButtons() {
            $('#prev_asset').toggle(currentPosition < 0);
            $('#next_asset').toggle(currentPosition > -(totalTrackWidth - containerWidth));
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
            if (currentPosition > -(totalTrackWidth - containerWidth)) {
                currentPosition -= cardWidth;
                sliderTrack.css('transform', `translateX(${currentPosition}px)`);
                updateNavigationButtons();
            }
        });

        // Style navigation buttons
        $('#prev_asset, #next_asset').css({
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


















































{{-- // $.ajax({
    //     url: `/assets/customer`,
    //     type: 'GET',
    //     data: {
    //         customer_id: customerId
    //     },
    //     dataType: 'json',
    //     success: function(data) {
    //         const assetContainer = $('#asset-container');
    //         assetContainer.empty();

    //         const sliderTrack = $('<div class="slider-track flex transition-transform duration-300 ease-in-out"></div>');

    //         if (data && Array.isArray(data) && data.length > 0) {
    //             const assetCards = data.map(asset => createAssetCard(asset));
    //             assetContainer.append(assetCards);
    //             initializeSlider();
    //             $('.asset-master').hide(); // ซ่อน div ที่แสดงข้อความ "ยังไม่มีข้อมูลสินทรัพย์ลูกค้านี้"
    //             $('#prev_asset, #next_asset').show(); // แสดงปุ่มเลื่อน
    //         } else {
    //             // Show the out of stock message if no data is available
    //             $('.asset-master').show();
    //             $('#prev_asset, #next_asset').hide();
    //         }
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error:', error);
    //     }
    // }); --}}

{{-- // function initializeSlider() {
    //     let currentPosition = 0;
    //     const sliderTrack = $('.slider-track');
    //     const cards = sliderTrack.children();
    //     const cardWidth = cards.first().outerWidth(true);
    //     const totalCards = cards.length;

    //     // Add necessary styles to container
    //     $('.slider-container').css({
    //         'position': 'relative',
    //         'overflow': 'hidden',
    //     });

    //     // Show/hide navigation buttons based on position
    //     function updateNavigationButtons() {
    //         const maxPosition = -(totalCards - 1) * cardWidth;
    //         $('#prev_asset').toggle(currentPosition < 0);
    //         $('#next_asset').toggle(currentPosition > maxPosition);
    //     }

    //     // Handle navigation button clicks
    //     $('#prev_asset').click(function() {
    //         if (currentPosition < 0) {
    //             currentPosition += cardWidth;
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //             updateNavigationButtons();
    //         }
    //     });

    //     $('#next_asset').click(function() {
    //         const maxPosition = -(totalCards - 1) * cardWidth;
    //         if (currentPosition > maxPosition) {
    //             currentPosition -= cardWidth;
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //             updateNavigationButtons();
    //         }
    //     });

    //     // Style navigation buttons
    //     $('.prev_asset, .next_asset').css({
    //         'position': 'absolute',
    //         'top': '50%',
    //         'transform': 'translateY(-50%)',
    //         'background': 'rgba(255, 165, 0, 0.8)',
    //         'color': 'white',
    //         'border': 'none',
    //         'padding': '10px 15px',
    //         'cursor': 'pointer',
    //         'border-radius': '5px',
    //         'z-index': '1'
    //     });

    //     $('#prev_asset').css('left', '0');
    //     $('#next_asset').css('right', '0');

    //     // Initialize navigation buttons visibility
    //     updateNavigationButtons();
    // } --}}


{{-- // function initializeSlider() {
    //     let currentPosition = 0;
    //     const sliderTrack = $('.slider-track');
    //     const cards = sliderTrack.children();
    //     const cardWidth = cards.first().outerWidth(true);
    //     const totalCards = cards.length;

    //     // Add necessary styles to container
    //     $('.slider-container').css({
    //         'position': 'relative',
    //         'overflow': 'hidden',
    //     });

    //     // Show/hide navigation buttons based on position
    //     function updateNavigationButtons() {
    //         const maxPosition = -(totalCards - 1) * cardWidth;
    //         $('#prev_asset').toggle(currentPosition < 0);
    //         $('#next_asset').toggle(currentPosition > maxPosition);
    //     }

    //     // Handle navigation button clicks
    //     $('#prev_asset').click(function() {
    //         if (currentPosition < 0) {
    //             currentPosition += cardWidth;
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //             updateNavigationButtons();
    //         }
    //     });

    //     $('#next_asset').click(function() {
    //         const maxPosition = -(totalCards - 1) * cardWidth;
    //         if (currentPosition > maxPosition) {
    //             currentPosition -= cardWidth;
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //             updateNavigationButtons();
    //         }
    //     });

    //     // Style navigation buttons
    //     $('.prev_asset, .next_asset').css({
    //         'position': 'absolute',
    //         'top': '50%',
    //         'transform': 'translateY(-50%)',
    //         'background': 'rgba(255, 165, 0, 0.8)',
    //         'color': 'white',
    //         'border': 'none',
    //         'padding': '10px 15px',
    //         'cursor': 'pointer',
    //         'border-radius': '5px',
    //         'z-index': '1'
    //     });

    //     $('#prev_asset').css('left', '0');
    //     $('#next_asset').css('right', '0');

    //     // Initialize navigation buttons visibility
    //     updateNavigationButtons();
    // } --}}



{{-- <script>
    $(document).on('click', '.delete-btn-asset', function() {
        var assetId = $(this).data('id');

        // ใช้ SweetAlert2 เพื่อยืนยันการลบ
        Swal.fire({
            title: 'แน่ใจหรือไม่?',
            text: "ต้องการลบข้อมูลที่อยู่นี้?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'ยืนยันลบข้อมูล!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // ถ้าผู้ใช้คลิก "ใช่, ลบเลย!" ให้ส่ง AJAX Request
                $.ajax({
                    url: '/delete-asset',
                    type: 'POST',
                    data: {
                        id: assetId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสำเร็จ',
                                text: response.message
                            });
                            // ซ่อนรายการที่ถูกลบ
                            $('button[data-id="' + assetId + '"]').closest('li').hide();
                            // เรียกฟังก์ชัน fetchAddresses เพื่อรีเฟรชข้อมูล
                            loadAssets(customerId);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: response.message
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถลบข้อมูลได้'
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'การลบข้อมูลถูกยกเลิก',
                    text: 'คุณไม่ได้ลบข้อมูล'
                });
            }
        });
    });

    // ฟังก์ชันเพื่อดึงข้อมูลหลังจากลบแล้ว (กรุณาเขียนให้เหมาะสมกับโปรเจกต์ของคุณ)
    function loadAssets(customerId) {
        // โค้ดสำหรับดึงข้อมูลใหม่
    }
</script> --}}

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
