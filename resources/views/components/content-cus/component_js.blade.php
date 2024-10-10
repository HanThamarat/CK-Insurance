<script>
    $(document).ready(function() {
        // Apply datepicker to the expiry date input
        flatpickr('#expiry_date', {
            locale: "th",
            dateFormat: 'd/m/Y',
            disableMobile: true,
            clickOpens: true,
            mode: 'single',
        });

        // Apply datepicker to the date of birth input
        $('#dob').flatpickr({
            locale: "th",
            dateFormat: "d/m/Y",
            disableMobile: true,
            clickOpens: true,
            mode: 'single',
            onChange: function(selectedDates, dateStr, instance) {
                // Calculate age when the date changes
                calculateAge(dateStr);
            }
        });

        function calculateAge(dateOfBirth) {
            // Parse the date of birth
            const dobParts = dateOfBirth.split('/');
            const dob = new Date(dobParts[2], dobParts[1] - 1, dobParts[0]); // Note: month is 0-based

            // Get the current date
            const today = new Date();
            let age = today.getFullYear() - dob.getFullYear();
            const monthDifference = today.getMonth() - dob.getMonth();

            // Adjust age if the birthdate has not occurred yet this year
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob.getDate())) {
                age--;
            }

            // Set the calculated age to the age input field
            $('#age').val(age);

            // Handle age label visibility
            const ageLabel = $('#age').siblings('label');
            if (age > 0) {
                ageLabel.hide(); // Hide label if age is calculated
            } else {
                ageLabel.show(); // Show label if age is empty
            }
        }

        // Apply input mask for ID Card
        $('#id_card_number').mask('0-0000-00000-00-0'); // 13 digits, formatted

        // Apply input mask for phone numbers
        $('#phone').mask('00-0000-0000'); // Format: 00-0000-0000
        $('#phone2').mask('00-0000-0000'); // Format: 000-0000-0000

        // Apply input mask for expiry date (MM/YYYY)
        $('#expiry_date').mask('00/00/0000'); // Format: MM/YYYY

        // Apply input mask for date of birth (DD/MM/YYYY)
        $('#dob').mask('00/00/0000'); // Format: DD/MM/YYYY


        // Function to hide/show label based on input value
        function toggleLabel(input, label) {
            if (input.val().trim() !== '') {
                label.hide(); // Hide label if input has value
            } else {
                label.show(); // Show label if input is empty
            }
        }
    });
</script>


<script>
    function moveLabel() {
        const input = document.getElementById('first_name');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput() {
        const input = document.getElementById('first_name');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>




<script>
    function moveLabel_lastname() {
        const input = document.getElementById('last_name');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_lastname() {
        const input = document.getElementById('last_name');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>




<script>
    function moveLabel_phone() {
        const input = document.getElementById('phone');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_phone() {
        const input = document.getElementById('phone');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>


<script>
    function moveLabel_phone2() {
        const input = document.getElementById('phone2');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_phone2() {
        const input = document.getElementById('phone2');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>



<script>
    function moveLabel_id_card_number() {
        const input = document.getElementById('id_card_number');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_id_card_number() {
        const input = document.getElementById('id_card_number');
        const label = input.nextElementSibling;

        // คืนค่า label เป็นปกติเมื่อ input ไม่มีค่า
        if (input.value.trim() === '') {
            label.classList.remove('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-xs');
        }
    }
</script>




<script>
    function moveLabel_expiry_date() {
        const input = document.getElementById('expiry_date');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_expiry_date() {
        const input = document.getElementById('expiry_date');
        const label = input.nextElementSibling;

        // คืนค่า label เป็นปกติเมื่อ input ไม่มีค่า
        if (input.value.trim() === '') {
            label.classList.remove('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-xs');
        }
    }
</script>



<script>
    function moveLabel_dob() {
        const input = document.getElementById('dob');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_dob() {
        const input = document.getElementById('dob');
        const label = input.nextElementSibling;

        // คืนค่า label เป็นปกติเมื่อ input ไม่มีค่า
        if (input.value.trim() === '') {
            label.classList.remove('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-xs');
        }
    }
</script>



<script>
    function moveLabel_facebook() {
        const input = document.getElementById('facebook');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_facebook() {
        const input = document.getElementById('facebook');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>



<script>
    function moveLabel_line_id() {
        const input = document.getElementById('line_id');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_line_id() {
        const input = document.getElementById('line_id');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>




<script>
    function moveLabel_spouse_name() {
        const input = document.getElementById('spouse_name');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_spouse_name() {
        const input = document.getElementById('spouse_name');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>



<script>
    function moveLabel_spouse_phone() {
        const input = document.getElementById('spouse_phone');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_spouse_phone() {
        const input = document.getElementById('spouse_phone');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>



<script>
    function moveLabel_note() {
        const input = document.getElementById('note');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-5', 'text-orange-600', 'text-sm');
    }

    function checkInput_note() {
        const input = document.getElementById('note');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>




<script>
    function moveLabel_marital_status() {
        const input = document.getElementById('marital_status');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_marital_status() {
        const input = document.getElementById('marital_status');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>





<script>
    function moveLabel_driving_license() {
        const input = document.getElementById('driving_license');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_driving_license() {
        const input = document.getElementById('driving_license');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>





<script>
    function moveLabel_religion() {
        const input = document.getElementById('religion');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_religion() {
        const input = document.getElementById('religion');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>





<script>
    function moveLabel_nationality() {
        const input = document.getElementById('nationality');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_nationality() {
        const input = document.getElementById('nationality');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>






<script>
    function moveLabel_gender() {
        const input = document.getElementById('gender');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_gender() {
        const input = document.getElementById('gender');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>




<script>
    function moveLabel_prefix() {
        const input = document.getElementById('prefix');
        const label = input.nextElementSibling;

        // ย้าย label ขึ้นเมื่อ input ถูก focus
        label.classList.add('scale-75', '-translate-y-1.5', 'text-orange-600', 'text-sm');
    }

    function checkInput_prefix() {
        const input = document.getElementById('prefix');
        const label = input.nextElementSibling;

        // ถ้า input ไม่มีข้อมูล ให้คืนค่า label กลับไปยังตำแหน่งเดิม
        if (input.value.trim() === '') {
            label.classList.remove('-translate-y-1.5', 'text-orange-600', 'text-sm');
        }
    }
</script>
