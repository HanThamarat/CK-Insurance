<!-- resources/views/modal_edit_profile.blade.php -->
<div id="editPassword" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-4xl">
        {{-- <h2 class="text-lg font-bold mb-2">แก้ไขข้อมูลผู้ใช้งาน</h2> --}}
        <div class="flex items-center gap-4 p-1 bg-white dark:bg-gray-800">
            <!-- ภาพแสดงไอคอน -->
            <img src="{{ asset('img/password.png') }}" alt="List Icon" class="w-14 h-14 object-cover img-effect">
            <!-- ข้อมูลผู้ใช้งาน -->
            <div class="w-full overflow-hidden">
                <div class="flex flex-col">
                    <h1 class="lg:text-base text-orange-500 sm:text-xl xs:text-xl font-bold mb-1 dark:text-white">
                        เปลี่ยนรหัสผ่าน
                    </h1>
                    <h2 class="text-gray-500 text-sm dark:text-gray-400">(Edit Password)</h2>
                    <div class="border-b-2 border-primary w-full mt-2"></div>
                    <!-- ใช้ w-full เพื่อให้ border ยาวเต็มความกว้าง -->
                </div>
            </div>
        </div>



        <form id="resetPasswordForm" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                <!-- รหัสผ่านเก่า -->
                <div class="w-full mb-3 mt-3">
                    <label for="password_old"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        รหัสผ่านเก่า
                    </label>
                    <input type="password" name="password_old"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="password_old" value="{{ old('password_old') }}" required
                        oninvalid="this.setCustomValidity('กรุณากรอกรหัสผ่านเก่า')"
                        oninput="this.setCustomValidity('')">
                    @error('password_old')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- รหัสผ่านใหม่ -->
                <div class="w-full mb-3 mt-3">
                    <label for="password"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        รหัสผ่านใหม่
                    </label>
                    <input type="password" name="password"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="password" required
                        oninvalid="this.setCustomValidity('กรุณากรอกรหัสผ่านใหม่')"
                        oninput="this.setCustomValidity('')">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- ยืนยันรหัสผ่าน -->
                <div class="w-full mb-3 mt-3">
                    <label for="password_token"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        ยืนยันรหัสผ่าน
                    </label>
                    <input type="password" name="password_token"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="password_token" required
                        oninvalid="this.setCustomValidity('กรุณายืนยันรหัสผ่านใหม่')"
                        oninput="this.setCustomValidity('')">
                    @error('password_token')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- ปุ่มยืนยันและยกเลิก -->
            <div class="flex justify-end mt-3">
                <button type="submit" id="submitPasswordConfirmed"
                    class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-key"></i> บันทึกรหัสผ่าน
                </button>

                <button type="button" onclick="closeModal_password()"
                    class="ml-2 p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-times mr-1"></i> ยกเลิก
                </button>
            </div>
        </form>





        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- <script>
            document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                const submitBtn = document.getElementById('submitPasswordConfirmed');

                // Disable submit button
                submitBtn.disabled = true;

                // Clear previous error messages
                document.querySelectorAll('.text-danger').forEach(el => el.textContent = '');

                fetch('/reset-password', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            // Show success message using SweetAlert2
                            Swal.fire({
                                icon: 'success',
                                title: 'สำเร็จ',
                                text: data.message,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                // Close modal and reset form
                                closeModal_password();
                                this.reset();
                            });
                        } else {
                            throw new Error(data.message);
                        }
                    })
                    .catch(error => {
                        // Show error message
                        Swal.fire({
                            icon: 'error',
                            title: 'ผิดพลาด',
                            text: error.message || 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง'
                        });
                    })
                    .finally(() => {
                        // Re-enable submit button
                        submitBtn.disabled = false;
                    });
            });
        </script> --}}

        <script>
            document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                const submitBtn = document.getElementById('submitPasswordConfirmed');

                // Disable submit button
                submitBtn.disabled = true;

                // Clear previous error messages
                document.querySelectorAll('.text-danger').forEach(el => el.textContent = '');

                fetch('/reset-password', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Show success message using SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'สำเร็จ',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            // Close modal and reset form
                            closeModal_password();
                            this.reset();

                            // Fetch updated profile information
                            fetch('/profile/show', {
                                method: 'GET',
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json',
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                // Update HTML with the new data
                                document.getElementById("name").innerText = data.user.name;
                                document.getElementById("email").innerText = data.user.email;
                                document.getElementById("username").innerText = data.user.username;
                                document.getElementById("password_token").innerText = data.user.password_token;

                                // Update Zone_Name and Name_Branch
                                document.getElementById("zone").innerText = data.Zone_Name || 'ไม่ระบุ';
                                document.getElementById("branch").innerText = data.Name_Branch || 'ไม่ระบุ';
                            })
                            .catch(error => console.error('Error fetching profile data:', error));
                        });
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    // Show error message
                    Swal.fire({
                        icon: 'error',
                        title: 'ผิดพลาด',
                        text: error.message || 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง'
                    });
                })
                .finally(() => {
                    // Re-enable submit button
                    submitBtn.disabled = false;
                });
            });
        </script>



    </div>
</div>


<style>
    #editPassword {
        transition: opacity 0.3s ease, transform 0.3s ease;
        transform: translateY(-20px);
        opacity: 0;
    }

    #editPassword.open {
        transform: translateY(0);
        opacity: 1;
    }
</style>

<script>
    function closeModal_password() {
        const modal = document.getElementById('editPassword');
        modal.classList.remove('open');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // เวลาที่ใช้ในการปิด modal (ให้ตรงกับ transition)
    }

    function openModal_password() {
        const modal = document.getElementById('editPassword');
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.add('open');
        }, 10); // เวลารอให้ modal แสดงก่อนที่จะเริ่มการเลื่อน
    }
</script>




{{-- <form id="resetPasswordForm" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
        <div class="w-full mb-3 mt-3">
            <label for="password_old"
                class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">รหัสผ่านเก่า</label>
            <input type="password" name="password_old"
                class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="password_old" value="{{ old('password_old') }}" required>
            @error('password_old')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-full mb-3 mt-3">
            <label for="password"
                class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">รหัสผ่านใหม่</label>
            <input type="password" name="password"
                class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="password" required>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
        <div class="w-full mb-1 mt-1">
            <label for="password_token"
                class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ยืนยันรหัสผ่าน</label>
            <input type="password" name="password_token"
                class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="password_token" required>
            @error('password_token')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="flex justify-end mt-3">
        <button type="submit" id="submitPasswordConfirmed"
            class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
            <i class="fas fa-key"></i> บันทึกรหัสผ่าน
        </button>

        <button type="button" onclick="closeModal_password()"
            class="ml-2 p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
            <i class="fas fa-times mr-1"></i> ยกเลิก
        </button>
    </div>
</form> --}}


{{--
// $(document).ready(function() {
    //     $('#resetPasswordForm').on('submit', function(e) {
    //         e.preventDefault(); // ป้องกันการส่งฟอร์มปกติ

    //         // สร้าง FormData จากฟอร์ม
    //         let formData = new FormData(this);

    //         $.ajax({
    //             url: "{{ route('reset.password') }}", // URL ที่จะส่ง request ไป
    //             method: "POST", // ใช้ method POST
    //             data: formData,
    //             contentType: false,
    //             processData: false,
    //             success: function(response) {
    //                 // การทำงานเมื่อ request สำเร็จ
    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'สำเร็จ',
    //                     text: response.message,
    //                     confirmButtonText: 'ตกลง'
    //                 }).then(function() {
    //                     location.reload(); // Reload หน้าหลังจากบันทึกสำเร็จ
    //                 });
    //             },
    //             error: function(xhr) {
    //                 // การทำงานเมื่อเกิดข้อผิดพลาด
    //                 if (xhr.responseJSON.errors) {
    //                     let errors = xhr.responseJSON.errors;
    //                     let errorMessages = '';
    //                     for (let error in errors) {
    //                         errorMessages += errors[error][0] + '\n';
    //                     }
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'เกิดข้อผิดพลาด',
    //                         text: errorMessages,
    //                         confirmButtonText: 'ตกลง'
    //                     });
    //                 } else {
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'เกิดข้อผิดพลาด',
    //                         text: 'มีบางอย่างผิดพลาด กรุณาลองใหม่อีกครั้ง',
    //                         confirmButtonText: 'ตกลง'
    //                     });
    //                 }
    //             }
    //         });
    //     });
    // });

    // $(document).ready(function() {
    //     $('#resetPasswordForm').on('submit', function(e) {
    //         e.preventDefault(); // ป้องกันการส่งฟอร์มปกติ

    //         // สร้าง FormData จากฟอร์ม
    //         let formData = new FormData(this);

    //         $.ajax({
    //             url: "{{ route('reset.password') }}", // URL ที่จะส่ง request ไป
    //             method: "POST", // ใช้ method POST
    //             data: formData,
    //             contentType: false,
    //             processData: false,
    //             success: function(response) {
    //                 // การทำงานเมื่อ request สำเร็จ
    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'สำเร็จ',
    //                     text: response.message,
    //                     confirmButtonText: 'ตกลง'
    //                 }).then(function() {
    //                     location.reload(); // Reload หน้าหลังจากบันทึกสำเร็จ
    //                 });
    //             },
    //             error: function(xhr) {
    //                 // การทำงานเมื่อเกิดข้อผิดพลาด
    //                 if (xhr.responseJSON.errors) {
    //                     let errors = xhr.responseJSON.errors;
    //                     let errorMessages = '';
    //                     for (let error in errors) {
    //                         errorMessages += errors[error][0] + '\n';
    //                     }
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'เกิดข้อผิดพลาด',
    //                         text: errorMessages,
    //                         confirmButtonText: 'ตกลง'
    //                     });
    //                 } else {
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'เกิดข้อผิดพลาด',
    //                         text: 'มีบางอย่างผิดพลาด กรุณาลองใหม่อีกครั้ง',
    //                         confirmButtonText: 'ตกลง'
    //                     });
    //                 }
    //             }
    //         });
    //     });
    // });

    // $(document).ready(function() {
    //     $('#resetPasswordForm').on('submit', function(e) {
    //         e.preventDefault(); // ป้องกันการส่งฟอร์มปกติ

    //         // สร้าง FormData จากฟอร์ม
    //         let formData = new FormData(this);

    //         $.ajax({
    //             url: "{{ route('reset.password') }}", // URL ที่จะส่ง request ไป
    //             method: "POST", // ใช้ method POST
    //             data: formData,
    //             contentType: false,
    //             processData: false,
    //             success: function(response) {
    //                 // การทำงานเมื่อ request สำเร็จ
    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'สำเร็จ',
    //                     text: response.message,
    //                     confirmButtonText: 'ตกลง'
    //                 }).then(function() {
    //                     location.reload(); // Reload หน้าหลังจากบันทึกสำเร็จ
    //                 });
    //             },
    //             error: function(xhr) {
    //                 // การทำงานเมื่อเกิดข้อผิดพลาด
    //                 if (xhr.responseJSON.errors) {
    //                     let errors = xhr.responseJSON.errors;
    //                     let errorMessages = '';
    //                     for (let error in errors) {
    //                         errorMessages += errors[error][0] + '\n';
    //                     }
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'เกิดข้อผิดพลาด',
    //                         text: errorMessages,
    //                         confirmButtonText: 'ตกลง'
    //                     });
    //                 } else {
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'เกิดข้อผิดพลาด',
    //                         text: 'มีบางอย่างผิดพลาด กรุณาลองใหม่อีกครั้ง',
    //                         confirmButtonText: 'ตกลง'
    //                     });
    //                 }
    //             }
    //         });
    //     });
    // }); --}}
