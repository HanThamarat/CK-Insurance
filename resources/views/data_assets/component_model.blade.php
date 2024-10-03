<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Vehicle_Group').on('change', function() {
            var selectedGroup = $(this).val().toLowerCase(); // Convert to lowercase for case-insensitive comparison

            // Clear the Vehicle_Models dropdown
            $('#Vehicle_Models').empty().append('<option value="">-- รุ่นรถ --</option>');

            // Check if the selected group is not empty
            if (selectedGroup) {
                var carModels = @json($carModels); // Pass PHP data to JavaScript

                $.each(carModels, function(index, carModel) {
                    // Convert Model_car to lowercase for comparison and check if it starts with 'lancer' or 'atttrage'
                    var modelCar = carModel.Model_car ? carModel.Model_car.toLowerCase() : '';

                    // Check for LANCER
                    if (selectedGroup === 'lancer' && modelCar.startsWith('lancer')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }
                    // Check for ATTRAGE (matches Model_car 'Atttrage')
                    else if (selectedGroup === 'attrage' && modelCar.startsWith('atttrage')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mirage' && modelCar.startsWith('mirage')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'pajero sport' && modelCar.startsWith('pajero sport')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'space wagon' && modelCar.startsWith('space wagon')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'xpander' && modelCar.startsWith('xpander')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'g-wagon' && modelCar.startsWith('g-wagon')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'civic' && modelCar.startsWith('civic')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'city' && modelCar.startsWith('city')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'jazz' && modelCar.startsWith('jazz')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'crv' && modelCar.startsWith('cr-v')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'accord' && modelCar.startsWith('accord')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'hrv' && modelCar.startsWith('hrv')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'brio' && modelCar.startsWith('brio')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mobilio' && modelCar.startsWith('mobilio')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'br-v' && modelCar.startsWith('br-v')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'freed' && modelCar.startsWith('freed')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mg6' && modelCar.startsWith('mg6')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mg3' && modelCar.startsWith('mg3')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mg5' && modelCar.startsWith('mg5')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mg zs' && modelCar.startsWith('mg zs')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'swift' && modelCar.startsWith('swift')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'ciaz' && modelCar.startsWith('ciaz')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'celerio' && modelCar.startsWith('celerio')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'ertiga' && modelCar.startsWith('ertiga')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'apv' && modelCar.startsWith('apv')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'amera' && modelCar.startsWith('amera')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'march' && modelCar.startsWith('march')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'teana' && modelCar.startsWith('teana')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'sylphy' && modelCar.startsWith('sylphy')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'tida' && modelCar.startsWith('tida')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'note' && modelCar.startsWith('note')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'juke' && modelCar.startsWith('juke')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'pulsar' && modelCar.startsWith('pulsar')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'everest' && modelCar.startsWith('everest 2.0 Turbo Trend (MY18)')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }


                    else if (selectedGroup === 'focus' && modelCar.startsWith('focus')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'fiesta' && modelCar.startsWith('fiesta')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'ecosport' && modelCar.startsWith('ecosport')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'escape' && modelCar.startsWith('escape')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mazda 2' && modelCar.startsWith('mazda 2')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'mazda 3' && modelCar.startsWith('mazda 3')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'cx-5' && modelCar.startsWith('cx5')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                    else if (selectedGroup === 'cx-3' && modelCar.startsWith('cx3')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName + ' ' + carModel.Model_car + '</option>'
                        );
                    }

                });
            }
        });
    });
</script>
