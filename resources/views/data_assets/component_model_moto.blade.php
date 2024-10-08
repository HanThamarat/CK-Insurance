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

                    else if (selectedGroup === 'wave 125' && modelMoto.startsWith('nf125c wave 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }


                    ////////////////////////////////////////////////////////////////

                    else if (selectedGroup === 'excittier 150' && modelMoto.startsWith('rlcug excittier 150')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'spark nano' && modelMoto.startsWith('50s3')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'spark-x' && modelMoto.startsWith('2p0')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'spark-135' && modelMoto.startsWith('mleug spark-135')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'spark-nano' && modelMoto.startsWith('50s3-50p')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'spark-115i' && modelMoto.startsWith('rlcue spark-115i')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'spark lx' && modelMoto.startsWith('mleue spark lx')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'jupiter rc' && modelMoto.startsWith('rlcue jupiter rc')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'finn' && modelMoto.startsWith('finn')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'm-slaz' && modelMoto.startsWith('mlerg')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'xsr 155' && modelMoto.startsWith('mlerg-g3m8e')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'r 15' && modelMoto.startsWith('r 15')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'smash revo' && modelMoto.startsWith('be49')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'smash 110' && modelMoto.startsWith('be4dn')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'shogun axel' && modelMoto.startsWith('bf45h')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'raider' && modelMoto.startsWith('mh8bg41f')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'shooter 115' && modelMoto.startsWith('mlcbf')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'gd110' && modelMoto.startsWith('lc6pch')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'gsx r150' && modelMoto.startsWith('cga2')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'shogun' && modelMoto.startsWith('bf45a')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'smash' && modelMoto.startsWith('be49')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'gpx popz 125' && modelMoto.startsWith('gpx popz 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    else if (selectedGroup === 'gpx legend' && modelMoto.startsWith('gpx legend')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'rk150' && modelMoto.startsWith('mlrbro')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName + ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'stallions centaur' && modelMoto.startsWith('stallions centaur')) {
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

