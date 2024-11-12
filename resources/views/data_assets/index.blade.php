@section('content')
    @extends('layouts.app')
    @extends('data_assets.modal_car')
    @include('preloader')

    {{--  Data Assets Component --}}
    @include('data_assets.component_css')
    @include('data_assets.component_js')

    <div class="container-xl px-4 mt-2">
        <div class="row">
            <div class="col-span-12 xl:col-span-8 rounded-lg">

                <div class="flex flex-col sm:flex-row ml-10 mt-5 space-y-4 sm:space-y-0 sm:space-x-4 mb-[100px]">


                    <div class="flex flex-col md:flex-row md:justify-center gap-4 w-full h-3/4">
                        <!-- การ์ดรถยนต์ -->
                        <a href="#"
                            class="m-4 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:w-1/2 lg:w-2/3"
                            data-bs-toggle="modal" data-bs-target="#DataAssetsModal" data-type="รถยนต์"
                            onclick="setAssetType(this)">
                            <img class="object-cover w-full rounded-t-lg h-72 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg"
                                src="{{ asset('images/car.png') }}" alt="รถยนต์">
                            <div class="flex flex-col justify-between p-6 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">รถยนต์</h5>
                            </div>
                        </a>

                        <!-- การ์ดมอเตอร์ไซค์ -->
                        <a href="#"
                            class="m-4 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:w-1/2 lg:w-2/3"
                            data-bs-toggle="modal" data-bs-target="#DataAssetsModal" data-type="มอเตอร์ไซค์"
                            onclick="setAssetType(this)">
                            <img class="object-cover w-full rounded-t-lg h-72 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg"
                                src="{{ asset('images/motor.png') }}" alt="มอเตอร์ไซค์">
                            <div class="flex flex-col justify-between p-6 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">มอเตอร์ไซค์
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function setAssetType(element) {
            // Get the asset type from data-type attribute
            const assetType = element.getAttribute('data-type');
            document.getElementById('Type_Asset').value = assetType; // Set the asset type value

            // Optionally, display additional details based on asset type
            if (assetType === 'รถยนต์') {
                document.getElementById('car-detail').style.display = 'block';
                document.getElementById('motor-detail').style.display = 'none';
                loadRatetypeOptions('car'); // Call the function to load car types
            } else {
                document.getElementById('motor-detail').style.display = 'block';
                document.getElementById('car-detail').style.display = 'none';
                loadRatetypeOptions('motor'); // Call the function to load motorcycle types
            }
        }
    </script>





    <div id="preloader" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="loader"></div>
    </div>



    <!----------------------------------------------------------------------------------------------------------------------------------->

    {{-- Font-Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Flatpickr CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/th.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection







