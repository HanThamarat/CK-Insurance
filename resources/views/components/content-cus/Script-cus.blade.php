<script src="{{ URL::asset('assets/libs/jquery.js') }}"></script>
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

        // // Validate form inputs on submit
        // $('form').on('submit', function(event) {
        //     event.preventDefault(); // Prevent default form submission
        //     let isValid = true;

        //     // Clear previous outline classes
        //     $('input, select, textarea').removeClass('outline-success outline-error');

        //     // Validate fields (skip hidden inputs)
        //     $('input, select, textarea').not('[type="hidden"]').each(function() {
        //         if ($(this).val().trim() === '') {
        //             $(this).removeClass('outline-success').addClass('outline-error');
        //             isValid = false;
        //         } else {
        //             $(this).removeClass('outline-error').addClass('outline-success');
        //         }
        //     });

        //     // If form is valid, submit the form
        //     if (isValid) {
        //         console.log("Form is valid. Handle submission.");
        //         this.submit(); // Uncomment this line if you want to submit the form
        //     } else {
        //         console.log("Form is invalid. Check fields.");
        //     }
        // });

        // Function to hide/show label based on input value
        function toggleLabel(input, label) {
            if (input.val().trim() !== '') {
                label.hide(); // Hide label if input has value
            } else {
                label.show(); // Show label if input is empty
            }
        }

        // Handle input changes for date of birth and other inputs
        $('#dob').on('change', function() {
            const dob = $(this).val();
            if (dob) {
                calculateAge(dob);
            }
            // Hide/show label based on input value
            const label = $(this).siblings('label');
            toggleLabel($(this), label);
        });

        $('#age').on('change', function() {
            // Hide/show label based on age input value
            const label = $(this).siblings('label');
            toggleLabel($(this), label);
        });

        $('input,textarea').each(function() {
            const input = $(this);
            const label = input.siblings('label,textarea');

            // On page load, check if input has value
            toggleLabel(input, label);

            // On input change, hide/show label based on input value
            input.on('change', function() {
                toggleLabel(input, label);
            });
        });
    });
</script>
