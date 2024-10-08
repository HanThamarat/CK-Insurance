<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Vehicle_Group').on('change', function() {
            var selectedGroup = $(this).val().toLowerCase(); // Convert to lowercase for case-insensitive comparison

            // Clear the Vehicle_Models dropdown
            $('#Vehicle_Models').empty().append('<option value="">รุ่นรถ</option>');

            // Check if the selected group is not empty
            if (selectedGroup) {
                var motoModels = @json($motoModels); // Pass PHP data to JavaScript for motorcycles

                // Process motorcycle models
                $.each(motoModels, function(index, motoModel) {
                    var modelMoto = motoModel.Model_moto ? motoModel.Model_moto.toLowerCase() : '';

                    // Check for MOTO
                    if (selectedGroup === 'dream 110' && modelMoto.startsWith('nd')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'dream super cub' && modelMoto.startsWith('mlhja')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'wave-100 s' && modelMoto.startsWith('nf100r-mr')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'wave-110' && modelMoto.startsWith('nf110')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'wave czi 110' && modelMoto.startsWith('nf110')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'wave-110 i' && (modelMoto.startsWith('ns110') || modelMoto.startsWith('mlhja wave-110') || modelMoto.startsWith('mlhja-01 mlhja wave-110 i'))) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }


                    else if (selectedGroup === 'wave 125 i' && (
                        modelMoto.startsWith('mlhja wave 125 i') ||
                        modelMoto.startsWith('mlhjf wave 125 i') ||
                        modelMoto.startsWith('mlhjf-01 wave 125 i') ||
                        modelMoto.startsWith('wave 125') ||
                        modelMoto.startsWith('nf125c wave 125') ||
                        modelMoto.startsWith('nf125tt wave 125 x') // เพิ่มการตรวจสอบนี้
                    )) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'wave 125 x' && modelMoto.startsWith('nf125tt wave 125 x')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'msx 125' && modelMoto.startsWith('mlhjc msx 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'super cup' && modelMoto.startsWith('mlhja super cup')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'wave 125 s' && modelMoto.startsWith('wave 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'cb 150 r' && modelMoto.startsWith('honda cb150r standard')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'cbr 150' && modelMoto.startsWith('cbr 150')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                });
            }
        });
    });
</script>

