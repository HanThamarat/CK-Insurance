<!-- resources/views/modal_edit_profile.blade.php -->
<div id="editProfileModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-4xl">
        {{-- <h2 class="text-lg font-bold mb-2">แก้ไขข้อมูลผู้ใช้งาน</h2> --}}
        <div class="flex items-center gap-4 p-1 bg-white dark:bg-gray-800">
            <!-- ภาพแสดงไอคอน -->
            <img src="{{ asset('img/edit.png') }}" alt="List Icon" class="w-14 h-14 object-cover img-effect">
            <!-- ข้อมูลผู้ใช้งาน -->
            <div class="w-full overflow-hidden">
                <div class="flex flex-col">
                    <h1 class="lg:text-base text-orange-500 sm:text-xl xs:text-xl font-bold mb-1 dark:text-white">
                        แก้ไขข้อมูลผู้ใช้งานระบบ
                    </h1>
                    <h2 class="text-gray-500 text-sm dark:text-gray-400">(Edit User Information)</h2>
                    <div class="border-b-2 border-primary w-full mt-2"></div>
                    <!-- ใช้ w-full เพื่อให้ border ยาวเต็มความกว้าง -->
                </div>
            </div>
        </div>

        {{-- <form id="updateForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                <div class="w-full mb-2 mt-4">
                    <label for="name"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ชื่อ -
                        นามสกุล</label>
                    <input type="text" name="name"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="name" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full mb-4 mt-4">
                    <label for="email"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">อีเมล</label>
                    <input type="email" name="email"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="email" value="{{ old('email', $user->email) }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                <div class="w-full mb-0 mt-0">
                    <label for="username"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                    <input type="username" name="username"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="username" value="{{ old('username', $user->username) }}" required>
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full mb-0 mt-0">
                    <label for="phone"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">phone</label>
                    <input type="phone" name="phone"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="phone" value="{{ old('phone', $user->phone) }}" required>
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end mt-3">
                <button type="submit"
                    class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-user-plus"></i> บันทึกข้อมูล
                </button>


                <button type="button" onclick="closeModalDataUser()"
                    class="ml-2 p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-times mr-1"></i> ยกเลิก
                </button>
            </div>
        </form> --}}

        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" id="userId" value="{{ auth()->id() }}">

            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                <div class="w-full mb-2 mt-4">
                    <label for="name"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        ชื่อ - นามสกุล
                    </label>
                    <input type="text" name="name"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="name" value="{{ old('name', $user->name) }}" required>
                    <div class="text-red-500 text-sm mt-1 error-message" id="name-error"></div>
                </div>

                <div class="w-full mb-4 mt-4">
                    <label for="email"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        อีเมล
                    </label>
                    <input type="email" name="email"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="email" value="{{ old('email', $user->email) }}" required>
                    <div class="text-red-500 text-sm mt-1 error-message" id="email-error"></div>
                </div>
            </div>

            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                <div class="w-full mb-0 mt-0">
                    <label for="username"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Username
                    </label>
                    <input type="text" name="username"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="username" value="{{ old('username', $user->username) }}" required>
                    <div class="text-red-500 text-sm mt-1 error-message" id="username-error"></div>
                </div>

                <div class="w-full mb-0 mt-0">
                    <label for="phone"
                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        เบอร์โทรศัพท์
                    </label>
                    <input type="tel" name="phone"
                        class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="phone" value="{{ old('phone', $user->phone) }}" required>
                    <div class="text-red-500 text-sm mt-1 error-message" id="phone-error"></div>
                </div>
            </div>

            <div class="flex justify-end mt-3">
                <button type="submit"
                    class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-save"></i> บันทึกข้อมูล
                </button>

                <button type="button" onclick="closeModalDataUser()"
                    class="ml-2 p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-times"></i> ยกเลิก
                </button>
            </div>
        </form>

    </div>
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('updateForm');
        const userId = document.getElementById('userId').value; // Get userId from hidden input

        // Clear error messages
        function clearErrors() {
            document.querySelectorAll('.error-message').forEach(element => {
                element.textContent = '';
            });
        }

        // Show error messages
        function showErrors(errors) {
            Object.keys(errors).forEach(field => {
                const errorElement = document.getElementById(`${field}-error`);
                if (errorElement) {
                    errorElement.textContent = errors[field][0];
                }
            });
        }

        // Show notification
        function showNotification(message, type = 'success') {
            Swal.fire({
                title: type === 'success' ? 'สำเร็จ' : 'ข้อผิดพลาด',
                text: message,
                icon: type,
                confirmButtonText: 'ตกลง',
                confirmButtonColor: '#3085d6'
            });
        }

        // Function to fetch and render updated profile data
        function renderProfileData() {
            fetch('/profile/show', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                // Update profile data on the page without reload
                document.getElementById("name").innerText = data.user.name;
                document.getElementById("email").innerText = data.user.email;
                document.getElementById("username").innerText = data.user.username;
                document.getElementById("phone").innerText = data.user.phone;
                document.getElementById("zone").innerText = data.Zone_Name || 'ไม่ระบุ';
                document.getElementById("branch").innerText = data.Name_Branch || 'ไม่ระบุ';

                if (typeof closeModalDataUser === 'function') {
                    closeModalDataUser();
                }
            })
            .catch(error => console.error('Error fetching data:', error));
        }

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            clearErrors();

            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> กำลังบันทึก...';
            submitButton.disabled = true;

            const formData = new FormData(this);
            formData.append('_method', 'PUT');

            try {
                const response = await fetch(`/api/user/profile/${userId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: formData
                });

                const data = await response.json();

                if (!response.ok) {
                    if (response.status === 422) {
                        showErrors(data.errors);
                        showNotification('กรุณาตรวจสอบข้อมูลให้ถูกต้อง', 'error');
                    } else {
                        throw new Error(data.message || 'เกิดข้อผิดพลาดในการอัปเดทข้อมูล');
                    }
                    return;
                }

                showNotification('อัปเดทข้อมูลเรียบร้อยแล้ว');
                renderProfileData(); // Render updated data

            } catch (error) {
                console.error('Error:', error);
                showNotification(error.message || 'เกิดข้อผิดพลาดในการอัปเดทข้อมูล', 'error');
            } finally {
                // Restore button state
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
            }
        });
    });
</script>



<style>
    #editProfileModal {
        transition: opacity 0.3s ease, transform 0.3s ease;
        transform: translateY(-20px);
        opacity: 0;
    }

    #editProfileModal.open {
        transform: translateY(0);
        opacity: 1;
    }
</style>

<script>
    function closeModalDataUser() {
        const modal = document.getElementById('editProfileModal');
        modal.classList.remove('open');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // เวลาที่ใช้ในการปิด modal (ให้ตรงกับ transition)
    }

    function openModalEditUser() {
        const modal = document.getElementById('editProfileModal');
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.add('open');
        }, 10); // เวลารอให้ modal แสดงก่อนที่จะเริ่มการเลื่อน
    }
</script>













{{-- <script>
    $(document).ready(function() {
        // Add CSRF token to AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('form').on('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting normally

            var formData = new FormData(this); // Use FormData to handle file uploads if necessary

            $.ajax({
                url: "{{ route('user.update', ':id') }}".replace(':id',
                    {{ $user->id }}), // Ensure the ID is inserted correctly
                type: 'PUT',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        alert('User updated successfully!');
                        location.reload(); // Optionally reload the page to reflect changes
                    } else {
                        alert('Error: ' + JSON.stringify(response.error));
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });

        });
    });
</script> --}}


{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('updateForm');

        // Clear error messages
        function clearErrors() {
            document.querySelectorAll('.error-message').forEach(element => {
                element.textContent = '';
            });
        }

        // Show error messages
        function showErrors(errors) {
            Object.keys(errors).forEach(field => {
                const errorElement = document.getElementById(`${field}-error`);
                if (errorElement) {
                    errorElement.textContent = errors[field][0];
                }
            });
        }

        // Show notification
        function showNotification(message, type = 'success') {
            Swal.fire({
                title: type === 'success' ? 'สำเร็จ' : 'ข้อผิดพลาด',
                text: message,
                icon: type,
                confirmButtonText: 'ตกลง',
                confirmButtonColor: '#3085d6'
            });
        }

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            clearErrors();

            const formData = new FormData(this);
            formData.append('_method', 'PUT'); // For Laravel method spoofing

            try {
                const response = await fetch(`/api/user/profile/${userId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .content,
                    },
                    body: formData
                });

                const data = await response.json();

                if (!response.ok) {
                    if (response.status === 422) {
                        showErrors(data.errors);
                        showNotification('กรุณาตรวจสอบข้อมูลให้ถูกต้อง', 'error');
                    } else {
                        throw new Error(data.message || 'เกิดข้อผิดพลาดในการอัปเดทข้อมูล');
                    }
                    return;
                }

                showNotification('อัปเดทข้อมูลเรียบร้อยแล้ว');

                // Optional: Close modal or redirect
                if (typeof closeModalDataUser === 'function') {
                    closeModalDataUser();
                }

                // Optional: Reload data or update UI
                setTimeout(() => {
                    window.location.reload();
                }, 1500);

            } catch (error) {
                console.error('Error:', error);
                showNotification(error.message || 'เกิดข้อผิดพลาดในการอัปเดทข้อมูล', 'error');
            }
        });
    });
</script> --}}


{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('updateForm');
        const userId = document.getElementById('userId').value; // Get userId from hidden input

        // Clear error messages
        function clearErrors() {
            document.querySelectorAll('.error-message').forEach(element => {
                element.textContent = '';
            });
        }

        // Show error messages
        function showErrors(errors) {
            Object.keys(errors).forEach(field => {
                const errorElement = document.getElementById(`${field}-error`);
                if (errorElement) {
                    errorElement.textContent = errors[field][0];
                }
            });
        }

        // Show notification
        function showNotification(message, type = 'success') {
            Swal.fire({
                title: type === 'success' ? 'สำเร็จ' : 'ข้อผิดพลาด',
                text: message,
                icon: type,
                confirmButtonText: 'ตกลง',
                confirmButtonColor: '#3085d6'
            });
        }

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            clearErrors();

            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> กำลังบันทึก...';
            submitButton.disabled = true;

            const formData = new FormData(this);
            formData.append('_method', 'PUT');

            try {
                const response = await fetch(`/api/user/profile/${userId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .content,
                    },
                    body: formData
                });

                const data = await response.json();

                if (!response.ok) {
                    if (response.status === 422) {
                        showErrors(data.errors);
                        showNotification('กรุณาตรวจสอบข้อมูลให้ถูกต้อง', 'error');
                    } else {
                        throw new Error(data.message || 'เกิดข้อผิดพลาดในการอัปเดทข้อมูล');
                    }
                    return;
                }

                showNotification('อัปเดทข้อมูลเรียบร้อยแล้ว');

                // Optional: Close modal or redirect
                if (typeof closeModalDataUser === 'function') {
                    closeModalDataUser();
                }

                // Optional: Reload data or update UI
                setTimeout(() => {
                    window.location.reload();
                }, 1500);

            } catch (error) {
                console.error('Error:', error);
                showNotification(error.message || 'เกิดข้อผิดพลาดในการอัปเดทข้อมูล', 'error');
            } finally {
                // Restore button state
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
            }
        });
    });
</script> --}}
