<div class="bg-white shadow-md max-w-full md:max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-4 p-4">
        <span class="text-sm font-semibold text-orange-500">
            <i class="fa-regular fa-user mr-2"></i>ข้อมูลลูกค้า (Customer Details)
        </span>
        <a href="#"
            class="px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500"
            data-bs-target="#Cus-modal-wrapper" data-bs-toggle="Cus-modal-wrapper" type="button" onclick="showModal()">
            <i class="fa-solid fa-user-pen"></i>
        </a>
    </div>

    <!-- Customer Details Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-600 p-4">
        <!-- Left Section: Customer Information -->
        <div class="flex flex-col space-y-4">
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">วันเดือนปีเกิด:</strong>
                <span class="text-right pl-4">{{ $customer->birth_date ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">เพศ:</strong>
                <span class="text-right pl-4">{{ $customer->gender ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">สัญชาติ:</strong>
                <span class="text-right pl-4">{{ $customer->nationality ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">ศาสนา:</strong>
                <span class="text-right pl-4">{{ $customer->religion ?? '-' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <strong class="text-gray-800">สถานะสมรส:</strong>
                <span class="text-right pl-4">{{ $customer->marital_status ?? '-' }}</span>
            </div>
        </div>

        <!-- Right Section: Notes -->
        <div class="flex flex-col">
            <strong class="text-gray-800">หมายเหตุ:</strong>
            <textarea class="w-full border border-gray-300 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500"
                rows="6">{{ $customer->note ?? 'ไม่มีหมายเหตุ' }}</textarea>
        </div>
    </div>



</div>
<!-- Second Card with Tabs -->
<!-- Updated Tabs -->
<!-- Updated Tabs -->
<div class="bg-white shadow-md rounded-lg p-6 max-w-full md:max-w-7xl mx-auto mt-6">
    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-4">
        <ul
            class="grid grid-cols-2 gap-2 text-sm font-semibold text-center text-orange-500 dark:text-gray-700 bg-white rounded-sm">
            <li>
                <a href="#address-info" class="tab-link text-gray-500 py-2 px-4 block hover:text-orange-600"
                    data-tab="address-info">ข้อมูลที่อยู่</a>
            </li>
            <li>
                <a href="#job-info" class="tab-link text-gray-500 py-2 px-4 block hover:text-orange-600"
                    data-tab="job-info">ข้อมูลอาชีพ</a>
            </li>
        </ul>
    </div>

    <!-- Tab Contents -->
    <div class="tab-content">
        <!-- ข้อมูลที่อยู่ -->
        <div id="address-info" class="tab-pane">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">
                <div class="flex flex-col">
                    <strong class="text-gray-800">ที่อยู่:</strong>
                    <span>{{ $customer->address ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong class="text-gray-800">จังหวัด:</strong>
                    <span>{{ $customer->province ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong class="text-gray-800">รหัสไปรษณีย์:</strong>
                    <span>{{ $customer->postal_code ?? '-' }}</span>
                </div>
            </div>
        </div>

        <!-- ข้อมูลอาชีพ -->
        <div id="job-info" class="tab-pane hidden">
            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600">
                <div class="flex flex-col">
                    <strong class="text-gray-800">อาชีพ:</strong>
                    <span>{{ $customer->occupation ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong class="text-gray-800">ตำแหน่ง:</strong>
                    <span>{{ $customer->position ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <strong class="text-gray-800">บริษัท:</strong>
                    <span>{{ $customer->company ?? '-' }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.content-cus.Modal-Edit-Cus')

<script src="{{ URL::asset('assets/libs/jquery.js') }}"></script>
<!-- Script for Tabs -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initial setup for active tab from localStorage
        function setInitialActiveTab() {
            const activeTab = localStorage.getItem('activeTab');
            const defaultTab = 'address-info'; // Default tab if no value is found

            // Remove 'active' class from all tab links and hide all tab panes
            document.querySelectorAll('.tab-link').forEach(link => link.classList.remove('border-b-2',
                'border-orange-500', 'text-orange-500'));
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.add('hidden'));

            // Show the active tab or default tab
            const activeTabId = activeTab || defaultTab;
            document.querySelector(`a[data-tab="${activeTabId}"]`).classList.add('border-b-2',
                'border-orange-500', 'text-orange-500');
            document.querySelector(`#${activeTabId}`).classList.remove('hidden');
        }

        setInitialActiveTab();

        // Tab click event
        document.querySelectorAll('.tab-link').forEach(tabLink => {
            tabLink.addEventListener('click', function(e) {
                e.preventDefault();
                const tabId = this.getAttribute('data-tab');

                // Hide all tab panes and remove 'active' class from all tab links
                document.querySelectorAll('.tab-pane').forEach(tab => tab.classList.add(
                    'hidden'));
                document.querySelectorAll('.tab-link').forEach(link => link.classList.remove(
                    'border-b-2', 'border-orange-500', 'text-orange-500'));

                // Show the selected tab pane and add 'active' class to the clicked tab link
                document.querySelector(`#${tabId}`).classList.remove('hidden');
                this.classList.add('border-b-2', 'border-orange-500', 'text-orange-500');

                // Save the active tab in localStorage
                localStorage.setItem('activeTab', tabId);
            });
        });
    });
</script>
