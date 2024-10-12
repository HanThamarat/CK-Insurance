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
                    <h1 class="lg:text-3xl md:text-2xl sm:text-xl xs:text-xl font-bold mb-1 dark:text-white">
                        เปลี่ยนรหัสผ่าน
                    </h1>
                    <h2 class="text-gray-500 text-sm dark:text-gray-400">(Edit Password)</h2>
                    <div class="border-b-2 border-primary w-full mt-2"></div> <!-- ใช้ w-full เพื่อให้ border ยาวเต็มความกว้าง -->
                </div>
            </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                <div class="w-full mb-3 mt-3">
                    <label for="password_token" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">รหัสผ่านปัจจุบัน</label>
                    <input type="password_token" name="password_token" class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="password_token" value="{{ old('password_token', $user->password_token) }}" required>
                    @error('password_token')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full mb-3 mt-3">
                    <label for="password" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">รหัสผ่านไหม่</label>
                    <input type="password" name="password" class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="password"  required>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>


            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                <div class="w-full mb-1 mt-1">
                    <label for="password" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ยืนยันรหัสผ่าน</label>
                    <input type="password" name="password" class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="password"  required>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="flex justify-end mt-3">
                <button type="submit"
                    class="p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-key"></i> บันทึกรหัสผ่าน
                </button>


                <button type="button" onclick="closeModal_password()"
                    class="ml-2 p-2 bg-gradient-to-l from-red-500 to-yellow-500 rounded-lg text-white text-sm hover:translate-y-[-4px] hover:shadow-lg transition-transform duration-300">
                    <i class="fas fa-times mr-1"></i> ยกเลิก
                </button>
            </div>
        </form>
    </div>
</div>


{{-- <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
    <div class="w-full mb-2 mt-6">
        <label for="name" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ชื่อ - นามสกุล</label>
        <input type="text" name="name" class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            id="name" value="{{ old('name', $user->name) }}" required>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="w-full mb-4 mt-6">
        <label for="email" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">อีเมล</label>
        <input type="email" name="email" class="form-control block w-full p-2.5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            id="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div> --}}

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
