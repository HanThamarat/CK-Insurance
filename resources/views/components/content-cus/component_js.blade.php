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
            // Removed the onChange for dob
        });

        $('#birthday').flatpickr({
            locale: "th",
            dateFormat: "d/m/Y",
            disableMobile: true,
            clickOpens: true,
            mode: 'single',
            onChange: function(selectedDates, dateStr, instance) {
                // Calculate age when the birthday date changes
                calculateAge(dateStr);
            }
        });

        function calculateAge(birthday) {
            // Parse the birthday
            const birthdayParts = birthday.split('/');
            const year = birthdayParts[2];
            const month = birthdayParts[1] - 1; // Note: month is 0-based
            const day = birthdayParts[0];

            // Get the current date
            const today = new Date();
            let age = today.getFullYear() - year;
            const monthDifference = today.getMonth() - month;

            // Adjust age if the birthday has not occurred yet this year
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < day)) {
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
                // Show SweetAlert if age is 0
                Swal.fire({
                    icon: 'warning',
                    title: 'ไม่สามารถกรอกข้อมูลอายุ 0 ปี',
                    text: 'กรุณากรอกวัน เดือน ปีเกิดที่ถูกต้อง!',
                    confirmButtonText: 'ตกลง'
                });
            }
        }

        // Apply input mask for ID Card
        $('#id_card_number').mask('0-0000-00000-00-0'); // 13 digits, formatted

        // Apply input mask for phone numbers
        $('#phone').mask('00-0000-0000'); // Format: 00-0000-0000
        $('#phone2').mask('00-0000-0000'); // Format: 000-0000-0000
        $('#spouse_phone').mask('00-0000-0000'); // Format: 000-0000-0000

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



<style>
    .scale-75 {
        transform: scale(0.75);
    }

    .-translate-y-1.5 {
        transform: translateY(-0.7rem);
    }

    .-translate-y-2 {
        transform: translateY(-1rem);
    }

    .text-orange-600 {
        color: #d97706;
    }

    .text-sm {
        font-size: 0.875rem;
    }
</style>


<script>
    function moveLabel(id) {
        const input = document.getElementById(id);
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput(id) {
        const input = document.getElementById(id);
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>
































{{-- // function calculateAge(birthday) {
    //     // Parse the birthday
    //     const birthdayParts = birthday.split('/');
    //     const dob = new Date(birthdayParts[2], birthdayParts[1] - 1, birthdayParts[
    //     0]); // Note: month is 0-based

    //     // Get the current date
    //     const today = new Date();
    //     let age = today.getFullYear() - dob.getFullYear();
    //     const monthDifference = today.getMonth() - dob.getMonth();

    //     // Adjust age if the birthday has not occurred yet this year
    //     if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob.getDate())) {
    //         age--;
    //     }

    //     // Set the calculated age to the age input field
    //     $('#age').val(age);

    //     // Handle age label visibility
    //     const ageLabel = $('#age').siblings('label');
    //     if (age > 0) {
    //         ageLabel.hide(); // Hide label if age is calculated
    //     } else {
    //         ageLabel.show(); // Show label if age is empty
    //         // Show SweetAlert if age is 0
    //         Swal.fire({
    //             icon: 'warning',
    //             title: 'ไม่สามารถกรอกข้อมูลอายุ 0 ปี',
    //             text: 'กรุณากรอกวัน เดือน ปีเกิดที่ถูกต้อง!',
    //             confirmButtonText: 'ตกลง'
    //         });
    //     }
    // } --}}



{{--
// function calculateAge(dateOfBirth) {
    //     // Parse the date of birth
    //     const dobParts = dateOfBirth.split('/');
    //     const dob = new Date(dobParts[2], dobParts[1] - 1, dobParts[0]); // Note: month is 0-based

    //     // Get the current date
    //     const today = new Date();
    //     let age = today.getFullYear() - dob.getFullYear();
    //     const monthDifference = today.getMonth() - dob.getMonth();

    //     // Adjust age if the birthdate has not occurred yet this year
    //     if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob.getDate())) {
    //         age--;
    //     }

    //     // Set the calculated age to the age input field
    //     $('#age').val(age);

    //     // Handle age label visibility
    //     const ageLabel = $('#age').siblings('label');
    //     if (age > 0) {
    //         ageLabel.hide(); // Hide label if age is calculated
    //     } else {
    //         ageLabel.show(); // Show label if age is empty
    //     }
    // } --}}
{{-- <script>
    function moveLabel() {
        const input = document.getElementById('first_name');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput() {
        const input = document.getElementById('first_name');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }

</script> --}}
{{--
<script>
    function moveLabel_firstname() {
        const input = document.getElementById('first_name');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_firstname() {
        const input = document.getElementById('first_name');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_lastname() {
        const input = document.getElementById('last_name');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_lastname() {
        const input = document.getElementById('last_name');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_phone() {
        const input = document.getElementById('phone');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_phone() {
        const input = document.getElementById('phone');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>

<script>
    function moveLabel_phone2() {
        const input = document.getElementById('phone2');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_phone2() {
        const input = document.getElementById('phone2');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_id_card_number() {
        const input = document.getElementById('id_card_number');
        const label = input.nextElementSibling;

        input.style.outline = 'none';
        label.style.transform = 'scale(0.75) translateY(-0.9rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_id_card_number() {
        const input = document.getElementById('id_card_number');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
            input.style.outline = 'none';
        }
    }

</script>


<script>
    function moveLabel_expiry_date() {
        const input = document.getElementById('expiry_date');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.9rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_expiry_date() {
        const input = document.getElementById('expiry_date');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_dob() {
        const input = document.getElementById('dob');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.9rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_dob() {
        const input = document.getElementById('dob');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>



<script>
    function moveLabel_facebook() {
        const input = document.getElementById('facebook');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_facebook() {
        const input = document.getElementById('facebook');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_line_id() {
        const input = document.getElementById('line_id');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_line_id() {
        const input = document.getElementById('line_id');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_spouse_name() {
        const input = document.getElementById('spouse_name');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_spouse_name() {
        const input = document.getElementById('spouse_name');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_spouse_name() {
        const input = document.getElementById('spouse_name');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_spouse_name() {
        const input = document.getElementById('spouse_name');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_spouse_phone() {
        const input = document.getElementById('spouse_phone');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_spouse_phone() {
        const input = document.getElementById('spouse_phone');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_note() {
        const input = document.getElementById('note');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-2.3rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_note() {
        const input = document.getElementById('note');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_prefix() {
        const input = document.getElementById('prefix');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_prefix() {
        const input = document.getElementById('prefix');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>

<script>
    function moveLabel_marital_status() {
        const input = document.getElementById('marital_status');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_marital_status() {
        const input = document.getElementById('marital_status');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_driving_license() {
        const input = document.getElementById('driving_license');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_driving_license() {
        const input = document.getElementById('driving_license');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_religion() {
        const input = document.getElementById('religion');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_religion() {
        const input = document.getElementById('religion');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_nationality() {
        const input = document.getElementById('nationality');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_nationality() {
        const input = document.getElementById('nationality');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>


<script>
    function moveLabel_gender() {
        const input = document.getElementById('gender');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_gender() {
        const input = document.getElementById('gender');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script> --}}


{{-- <script>
    function moveLabel_occupation() {
        const input = document.getElementById('occupation');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_occupation() {
        const input = document.getElementById('occupation');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>



<script>
    function moveLabel_district() {
        const input = document.getElementById('district');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_district() {
        const input = document.getElementById('district');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>



<script>
    function moveLabel_amphor() {
        const input = document.getElementById('amphor');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_amphor() {
        const input = document.getElementById('amphor');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script>



<script>
    function moveLabel_province() {
        const input = document.getElementById('province');
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-0.7rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput_province() {
        const input = document.getElementById('province');
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script> --}}
