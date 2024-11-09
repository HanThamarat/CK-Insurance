<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>



    @section('content')
        <section class="py-10 my-auto dark:bg-gray-900 mt-[-50] ">
            <div class="lg:w-[80%] md:w-[90%] xs:w-[96%] mx-auto flex gap-4 ">
                <div
                    class="lg:w-[88%] md:w-[80%] sm:w-[88%] xs:w-full mx-auto shadow-2xl p-4 rounded-xl h-fit self-center dark:bg-gray-800/40 bg-white">
                    <!--  -->
                    <div>
                        <div class="flex items-center gap-4 p-4 bg-white dark:bg-gray-800">
                            <!-- ภาพแสดงไอคอน -->
                            <img src="{{ asset('img/list.png') }}" alt="List Icon"
                                class="w-14 h-14 object-cover img-effect">
                            <!-- ข้อมูลผู้ใช้งาน -->
                            <div class="w-full">
                                <h5
                                    class="lg:text-base text-orange-500 md:text-xs sm:text-sm xs:text-sm font-bold mb-1 dark:text-white">
                                    ข้อมูลผู้ใช้งานระบบ
                                </h5>

                                <h2 class="text-gray-500 text-sm dark:text-gray-400">(System Information)</h2>
                                <div class="border-b-2 border-primary mt-2 w-full"></div>
                                <!-- ยังคงมี w-full เพื่อให้ border เต็มความกว้าง -->
                            </div>
                        </div>



                        <!-- Cover Image -->
                        <div class="w-full rounded-sm bg-cover bg-center bg-no-repeat items-center"
                            style="background-image: url('{{ asset('img/home.jpg') }}');">

                            <!-- Profile Image -->
                            <div class="mx-auto flex justify-center w-[130px] h-[130px] bg-blue-300/20 rounded-full bg-cover bg-center bg-no-repeat transition-transform duration-500 hover:scale-110 shadow-lg"
                                style="background-image: url('{{ asset('img/user.png') }}');">

                                <div class="bg-white/90 rounded-full w-6 h-6 text-center ml-28 mt-4">

                                    {{-- <input type="file" name="profile" id="upload_profile" hidden required> --}}


                                    <label for="upload_profile">
                                        <svg data-slot="icon" class="w-6 h-5 text-blue-700" fill="none"
                                            stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z">
                                            </path>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <!--  -->
                                {{-- <input type="file" name="profile" id="upload_cover" hidden required> --}}

                                <div class="bg-white flex items-center gap-1 rounded-tl-md px-2 text-center font-semibold">
                                    <label for="upload_cover" class="inline-flex items-center gap-1 cursor-pointer">Cover

                                        <svg data-slot="icon" class="w-6 h-5 text-blue-700" fill="none"
                                            stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z">
                                            </path>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h2 class="text-center mt-3 font-semibold dark:text-gray-300">ข้อมูลของผู้ใช้งานระบบ</h2>
                        {{-- <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full mb-4 mt-6">
                                <label for="name"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ชื่อ
                                    - นามสกุล</label>
                                <p id="name"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    {{ old('name', $user->name) }}
                                </p>
                            </div>

                            <div class="w-full mb-4 mt-6">
                                <label for="email"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">อีเมล</label>
                                <p id="email"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    {{ old('email', $user->email) }}
                                </p>
                            </div>
                        </div>

                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full mb-0 mt-0">
                                <label for="username"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                                <p id="username"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    {{ old('username', $user->username) }}
                                </p>
                            </div>
                            <div class="w-full mb-0 mt-0">
                                <label for="password_token"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">รหัสผ่าน</label>
                                <p id="password_token"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    {{ old('password_token', $user->password_token) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full mb-4 mt-6">
                                <label for="zone"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">พื้นที่</label>
                                <p id="zone"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    {{ old('zone', $zone->Zone_Name ?? 'ไม่ระบุ') }}
                                </p>
                            </div>
                            <div class="w-full mb-4 mt-6">
                                <label for="branch"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">สาขา</label>
                                <p id="branch"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    {{ old('branch', $branch->Name_Branch ?? 'ไม่ระบุ') }}
                                </p>
                            </div>
                        </div> --}}

                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full mb-4 mt-6">
                                <label for="name" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ชื่อ - นามสกุล</label>
                                <p id="name" class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <!-- จะถูกอัพเดตผ่าน JavaScript -->
                                </p>
                            </div>

                            <div class="w-full mb-4 mt-6">
                                <label for="email" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">อีเมล</label>
                                <p id="email" class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <!-- จะถูกอัพเดตผ่าน JavaScript -->
                                </p>
                            </div>
                        </div>

                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full mb-0 mt-0">
                                <label for="username" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                                <p id="username" class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <!-- จะถูกอัพเดตผ่าน JavaScript -->
                                </p>
                            </div>

                            <div class="w-full mb-0 mt-0">
                                <label for="phone" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">หมายเลขโทรศัพท์</label>
                                <p id="phone" class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <!-- จะถูกอัพเดตผ่าน JavaScript -->
                                </p>
                            </div>

                            {{-- <div class="w-full mb-0 mt-0">
                                <label for="password_token" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">รหัสผ่าน</label>
                                <p id="password_token" class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <!-- จะถูกอัพเดตผ่าน JavaScript -->
                                </p>
                            </div> --}}
                        </div>

                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full mb-4 mt-6">
                                <label for="zone"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">พื้นที่</label>
                                <p id="zone"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                                </p>
                            </div>
                            <div class="w-full mb-4 mt-6">
                                <label for="branch"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">สาขา</label>
                                <p id="branch"
                                    class="block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                                </p>
                            </div>
                        </div>





                        <div class="flex justify-end mt-3">
                            <button type="submit" onclick="openModalEditUser()"
                                    class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                                    <i class="fas fa-user-plus"></i> แก้ไขข้อมูล
                                </button>

                            <button type="submit" onclick="openModal_password()"
                                class="ml-2 p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                                <i class="fas fa-lock"></i> เปลี่ยนรหัสผ่าน
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                fetch('/profile/show', {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // แสดงข้อมูลใน console (หรือจะแสดงในหน้าเว็บได้เลย)
                    // console.log(data);

                    // แสดงข้อมูลในส่วนต่างๆ ของ HTML
                    document.getElementById("name").innerText = data.user.name;
                    document.getElementById("email").innerText = data.user.email;
                    document.getElementById("username").innerText = data.user.username;
                    document.getElementById("phone").innerText = data.user.phone;
                    // document.getElementById("password_token").innerText = data.user.password_token;

                    // แสดง Zone_Name และ Name_Branch ที่ได้จาก response
                    document.getElementById("zone").innerText = data.Zone_Name || 'ไม่ระบุ';
                    document.getElementById("branch").innerText = data.Name_Branch || 'ไม่ระบุ';
                })
                .catch(error => console.error('Error fetching data:', error));
            });
        </script>



        @include('profile.modal_edit_profile_user')
        @include('profile.edit_password')

        <script>
            document.querySelector('.img-effect').addEventListener('mouseover', function() {
                this.style.animationPlayState = 'paused'; // หยุดการขยับเมื่อ hover
            });

            document.querySelector('.img-effect').addEventListener('mouseout', function() {
                this.style.animationPlayState = 'running'; // กลับมาขยับเมื่อไม่ hover
            });
        </script>

        <style>
            /* การขยับภาพเบา ๆ */
            @keyframes moveImage {

                0%,
                100% {
                    transform: translate(0, 0);
                }

                50% {
                    transform: translate(3px, -3px);
                }
            }

            .img-effect {
                animation: moveImage 3s ease-in-out infinite;
                /* ขยับอย่างต่อเนื่อง */
                transition: transform 0.3s ease-in-out;
            }

            .img-effect:hover {
                transform: scale(1.1) rotate(5deg);
                /* ขยายและหมุนเล็กน้อยเมื่อ hover */
            }

            body {
                background-image: url('{{ asset('images/home.jpg') }}');
                background-size: cover;
                /* ขยายภาพให้ครอบคลุมพื้นที่ */
                background-position: center;
                /* จัดตำแหน่งภาพที่ตรงกลาง */
                background-repeat: no-repeat;
                /* ไม่ทำซ้ำภาพ */
                background-blend-mode: overlay;
                /* ผสมสีพื้นหลังกับภาพพื้นหลัง */
            }
        </style>
    @endsection
</x-app-layout>
