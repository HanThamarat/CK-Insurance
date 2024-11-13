<script>
    $('head').append(`
        @include('components.content-button.css_button_select')
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
            <div class="flex-shrink-0 max-w-lg mx-2 p-0 mr-0">
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
                                            <li>
                                            <button data-id="${asset.id}" onclick="openModal_Edit_asset_customer(this)">
                                                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                                                </svg>
                                                <span>แก้ไข</span>
                                            </button>
                                        </li>
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



    // function initializeSlider() {
    //     let currentPosition = 0;
    //     const sliderTrack = $('.slider-track');
    //     const cards = sliderTrack.children();
    //     const cardWidth = cards.first().outerWidth(true); // get width of first card including margin
    //     const totalCards = cards.length;
    //     const totalTrackWidth = totalCards * cardWidth; // Calculate total width of slider track
    //     const containerWidth = $('.slider-container').width(); // Width of the visible container

    //     // Add necessary styles to container
    //     $('.slider-container').css({
    //         'position': 'relative',
    //         'overflow': 'hidden',
    //     });

    //     // Show/hide navigation buttons based on position
    //     function updateNavigationButtons() {
    //         $('#prev_asset').toggle(currentPosition < 0); // Show prev if not at the start
    //         $('#next_asset').toggle(currentPosition > -(totalTrackWidth -
    //         containerWidth)); // Show next if not at the end
    //     }

    //     // Handle navigation button clicks
    //     $('#prev_asset').click(function() {
    //         if (currentPosition + cardWidth <= 0) { // Ensure it doesn't exceed the left bound
    //             currentPosition += cardWidth;
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //         } else {
    //             currentPosition = 0; // Snap to the start if trying to go beyond the first card
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //         }
    //         updateNavigationButtons();
    //     });

    //     $('#next_asset').click(function() {
    //         if (currentPosition - cardWidth >= -(totalTrackWidth -
    //             containerWidth)) { // Ensure it doesn't exceed the right bound
    //             currentPosition -= cardWidth;
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //         } else {
    //             currentPosition = -(totalTrackWidth -
    //             containerWidth); // Snap to the end if trying to go beyond the last card
    //             sliderTrack.css('transform', `translateX(${currentPosition}px)`);
    //         }
    //         updateNavigationButtons();
    //     });

    //     // Style navigation buttons
    //     $('#prev_asset, #next_asset').css({
    //         'position': 'absolute',
    //         'top': '50%',
    //         'transform': 'translateY(-50%)',
    //         'background': 'rgba(255, 165, 0, 0.1)',
    //         'color': 'white',
    //         'border': 'none',
    //         'padding': '10px 15px',
    //         'cursor': 'pointer',
    //         'border-radius': '5px',
    //         'z-index': '1'
    //     }).hover(
    //         function() {
    //             $(this).css('background', 'rgba(255, 140, 0, 0.8)'); // สีส้มเข้มขึ้นเมื่อ hover
    //         },
    //         function() {
    //             $(this).css('background', 'rgba(255, 165, 0, 0.1)'); // สีเดิมเมื่อไม่ได้ hover
    //         }
    //     );


    //     $('#prev_asset').css('left', '0');
    //     $('#next_asset').css('right', '0');

    //     // Initialize navigation buttons visibility on load
    //     updateNavigationButtons();
    // }

    function initializeSlider() {
        const sliderTrack = $('.slider-track');
        const container = $('.slider-container');
        let currentPosition = 0;
        let isDragging = false;
        let startX;
        let scrollLeft;

        // Calculate dimensions
        const updateDimensions = () => {
            const cards = sliderTrack.children();
            const cardWidth = cards.first().outerWidth(true);
            const totalCards = cards.length;
            const containerWidth = container.width();
            const totalTrackWidth = totalCards * cardWidth;
            const maxScroll = -(totalTrackWidth - containerWidth);

            return {
                cardWidth,
                totalTrackWidth,
                containerWidth,
                maxScroll
            };
        };

        // Setup initial styles
        container.css({
            'position': 'relative',
            'overflow': 'hidden'
        });

        sliderTrack.css({
            'transition': 'transform 0.3s ease-out',
            'will-change': 'transform'
        });

        // Update navigation visibility
        const updateNavigationButtons = () => {
            const {
                maxScroll
            } = updateDimensions();
            $('#prev_asset').toggle(currentPosition < -10); // Small threshold for better UX
            $('#next_asset').toggle(currentPosition > maxScroll + 10);
        };

        // Smooth scroll to position
        const scrollToPosition = (position) => {
            const {
                maxScroll
            } = updateDimensions();

            // Bound the position between max scroll and 0
            position = Math.min(0, Math.max(position, maxScroll));
            currentPosition = position;

            sliderTrack.css({
                'transform': `translateX(${position}px)`
            });

            updateNavigationButtons();
        };

        // Navigation buttons
        $('#prev_asset').click(() => {
            const {
                cardWidth
            } = updateDimensions();
            scrollToPosition(currentPosition + cardWidth);
        });

        $('#next_asset').click(() => {
            const {
                cardWidth
            } = updateDimensions();
            scrollToPosition(currentPosition - cardWidth);
        });

        // Mouse/Touch drag functionality
        sliderTrack.on('mousedown touchstart', (e) => {
            isDragging = true;
            startX = e.type === 'mousedown' ? e.pageX : e.touches[0].pageX;
            scrollLeft = currentPosition;

            sliderTrack.css('transition', 'none');
        });

        $(document).on('mousemove touchmove', (e) => {
            if (!isDragging) return;

            e.preventDefault();
            const x = e.type === 'mousemove' ? e.pageX : e.touches[0].pageX;
            const deltaX = x - startX;

            scrollToPosition(scrollLeft + deltaX);
        });

        $(document).on('mouseup touchend', () => {
            if (!isDragging) return;

            isDragging = false;
            sliderTrack.css('transition', 'transform 0.3s ease-out');

            // Snap to nearest card
            const {
                cardWidth
            } = updateDimensions();
            const nearestCard = Math.round(currentPosition / cardWidth) * cardWidth;
            scrollToPosition(nearestCard);
        });

        // Style navigation buttons
        $('.slider-nav-button').css({
            'position': 'absolute',
            'top': '50%',
            'transform': 'translateY(-50%)',
            'background': 'rgba(255, 165, 0, 0.1)',
            'color': 'white',
            'border': 'none',
            'padding': '10px 15px',
            'cursor': 'pointer',
            'border-radius': '5px',
            'z-index': '1',
            'transition': 'background-color 0.2s ease'
        }).hover(
            function() {
                $(this).css('background', 'rgba(255, 140, 0, 0.8)');
            },
            function() {
                $(this).css('background', 'rgba(255, 165, 0, 0.1)');
            }
        );

        $('#prev_asset').css('left', '10px');
        $('#next_asset').css('right', '10px');

        // Handle window resize
        $(window).on('resize', () => {
            scrollToPosition(currentPosition);
        });

        // Initial setup
        updateNavigationButtons();
    }



    // Initialize with customer ID
    const customerId = {{ $customer->id ?? 'null' }};
    loadAssets(customerId);
</script>







































