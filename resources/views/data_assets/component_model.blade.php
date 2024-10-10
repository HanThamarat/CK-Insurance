<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Vehicle_Group').on('change', function() {
            var selectedGroup = $(this).val()
        .toLowerCase(); // Convert to lowercase for case-insensitive comparison

            // Clear the Vehicle_Models dropdown
            $('#Vehicle_Models').empty().append('<option value="">รุ่นรถ</option>');

            // Check if the selected group is not empty
            if (selectedGroup) {
                var carModels = @json($carModels); // Pass PHP data to JavaScript
                var motoModels = @json($motoModels); // Pass PHP data to JavaScript

                $.each(carModels, function(index, carModel) {
                    // Convert Model_car to lowercase for comparison and check if it starts with 'lancer' or 'atttrage'
                    var modelCar = carModel.Model_car ? carModel.Model_car.toLowerCase() : '';

                    // Check for LANCER
                    if (selectedGroup === 'lancer' && modelCar.startsWith('lancer')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    }
                    // Check for ATTRAGE (matches Model_car 'Atttrage')
                    else if (selectedGroup === 'attrage' && modelCar.startsWith('atttrage')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mirage' && modelCar.startsWith('mirage')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'pajero sport' && modelCar.startsWith(
                            'pajero sport')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'space wagon' && modelCar.startsWith(
                            'space wagon')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'xpander' && modelCar.startsWith('xpander')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'g-wagon' && modelCar.startsWith('g-wagon')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'civic' && modelCar.startsWith('civic')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'city' && modelCar.startsWith('city')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'jazz' && modelCar.startsWith('jazz')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'crv' && modelCar.startsWith('cr-v')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'accord' && modelCar.startsWith('accord')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'hrv' && modelCar.startsWith('hrv')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'brio' && modelCar.startsWith('brio')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mobilio' && modelCar.startsWith('mobilio')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'br-v' && modelCar.startsWith('br-v')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'freed' && modelCar.startsWith('freed')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mg6' && modelCar.startsWith('mg6')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mg3' && modelCar.startsWith('mg3')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mg5' && modelCar.startsWith('mg5')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mg zs' && modelCar.startsWith('mg zs')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'swift' && modelCar.startsWith('swift')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ciaz' && modelCar.startsWith('ciaz')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'celerio' && modelCar.startsWith('celerio')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ertiga' && modelCar.startsWith('ertiga')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'apv' && modelCar.startsWith('apv')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'amera' && modelCar.startsWith('amera')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'march' && modelCar.startsWith('march')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'teana' && modelCar.startsWith('teana')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'sylphy' && modelCar.startsWith('sylphy')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'tida' && modelCar.startsWith('tida')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'note' && modelCar.startsWith('note')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'juke' && modelCar.startsWith('juke')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'pulsar' && modelCar.startsWith('pulsar')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'everest' && modelCar.startsWith('everest')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'focus' && modelCar.startsWith('focus')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fiesta' && modelCar.startsWith('fiesta')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ecosport' && modelCar.startsWith(
                        'ecosport')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'escape' && modelCar.startsWith('escape')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mazda 2' && modelCar.startsWith('mazda 2')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mazda 3' && modelCar.startsWith('mazda 3')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'cx-5' && modelCar.startsWith('cx5')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'cx-3' && modelCar.startsWith('cx3')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'avanza' && modelCar.startsWith('avanza')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'yaris' && modelCar.startsWith('yaris')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'soluna vios' && modelCar.startsWith(
                            'soluna vios')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'vios' && modelCar.startsWith('vios')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'altis' && modelCar.startsWith('corolla')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'wish' && modelCar.startsWith('wish')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fortuner' && modelCar.startsWith(
                        'fortuner')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'camry' && modelCar.startsWith('camry')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'yaris ativ' && modelCar.startsWith(
                            'yaris ativ')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'c-hr' && modelCar.startsWith('c-hr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'sienta' && modelCar.startsWith('sienta')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'innova' && modelCar.startsWith('innova')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'prius' && modelCar.startsWith('prius')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'hilux sportrider' && modelCar.startsWith(
                            'hilux')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mu-7' && modelCar.startsWith('mu-7')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'mu-x' && modelCar.startsWith('mu-x')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'trailblazer' && modelCar.startsWith(
                            'trailblazer')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'captiva' && modelCar.startsWith('captiva')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'aveo' && modelCar.startsWith('aveo')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'cruze' && modelCar.startsWith('cruze')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'sonic' && modelCar.startsWith('sonic')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'e' && modelCar.startsWith('e200')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'gla' && modelCar.startsWith('gla')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'v50' && modelCar.startsWith('v50')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === '318i' && modelCar.startsWith('318i')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === '370ll' && modelCar.startsWith('370ll')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'exora' && modelCar.startsWith('exora')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'triton' && modelCar.startsWith('triton')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'all new triton' && modelCar.startsWith(
                            'triton')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'strada' && modelCar.startsWith('single')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'carry' && modelCar.startsWith('carry')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'frontier' && modelCar.startsWith(
                        'frontier')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'navara' && modelCar.startsWith('navara')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'np300 navara' && modelCar.startsWith(
                            'np300 navara')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ranger' && modelCar.startsWith('ranger')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'all new ranger' && modelCar.startsWith(
                            'all new ranger')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'bt-50' && modelCar.startsWith('bt-50')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'bt-50 pro' && modelCar.startsWith(
                        'bt-50 pro')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'vigo' && modelCar.startsWith('hilux vigo')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'vigo champ' && modelCar.startsWith(
                            'hilux vigo')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'revo' && modelCar.startsWith('hilux revo')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'hilux tiger' && modelCar.startsWith(
                            'hilux tiger')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'd-max' && modelCar.startsWith('d-max')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'd-max all new' && modelCar.startsWith(
                            'd-max all new')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'd-max all new blue power' && modelCar
                        .startsWith('d-max all new blue power')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'superace' && modelCar.startsWith(
                        'superace')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'colorado cab' && modelCar.startsWith(
                            'colorado cab')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'tfr' && modelCar.startsWith('tfr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'dragon' && modelCar.startsWith('dragon')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'hilux mighty x' && modelCar.startsWith(
                        'cab')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fighter' && modelCar.startsWith('fighter')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'urvan' && modelCar.startsWith('urvan')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'commuter' && modelCar.startsWith(
                        'commuter')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ventury' && modelCar.startsWith('ventury')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'h-1' && modelCar.startsWith('h-1')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'canter' && modelCar.startsWith('canter')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ud' && modelCar.startsWith('ud')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'nkr' && modelCar.startsWith('nkr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'npr' && modelCar.startsWith('npr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'nqr' && modelCar.startsWith('nqr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'npr150' && modelCar.startsWith('npr150')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'frr90' && modelCar.startsWith('frr90')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fxz' && modelCar.startsWith('fxz')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'nmr' && modelCar.startsWith('nmr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fsr' && modelCar.startsWith('fsr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fvm' && modelCar.startsWith('fvm')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fvz' && modelCar.startsWith('fvz')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'gxz' && modelCar.startsWith('gxz')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ftr32' && modelCar.startsWith('ftr32')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'frr11' && modelCar.startsWith('frr11')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'ftr' && modelCar.startsWith('ftr')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fc4j' && modelCar.startsWith('fc4j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fc9j' && modelCar.startsWith('fc9j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fg1j' && modelCar.startsWith('fg1j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fg8j' && modelCar.startsWith('fg8j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fm8j' && modelCar.startsWith('fm8j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fm8j' && modelCar.startsWith('fm8j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fm1j' && modelCar.startsWith('fm1j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'bus' && modelCar.startsWith('bus')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fl1j' && modelCar.startsWith('fl1j')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fb2w' && modelCar.startsWith('fb2w')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fm2p' && modelCar.startsWith('fm2p')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'xzu' && modelCar.startsWith('xzu')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fm1a' && modelCar.startsWith('fm1a')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'gd174' && modelCar.startsWith('gd174')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fm227' && modelCar.startsWith('fm227')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'fr2t' && modelCar.startsWith('fr2t')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'l' && modelCar.startsWith('l')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'm' && modelCar.startsWith('m')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'b' && modelCar.startsWith('b')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'sh130' && modelCar.startsWith('sh130')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'zx70' && modelCar.startsWith('zx70')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    } else if (selectedGroup === 'komatsu' && modelCar.startsWith('komatsu')) {
                        var vehicleName = carModel.vehicle_name ? carModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + carModel.Model_car + '">' + vehicleName +
                            ' ' + carModel.Model_car + '</option>'
                        );
                    }

                });


                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


                $.each(motoModels, function(index, motoModel) {
                    // Convert Model_moto to lowercase for comparison
                    var modelMoto = motoModel.Model_moto ? motoModel.Model_moto.toLowerCase() :
                        '';

                    // Check for specific motorcycle models
                    if (selectedGroup === 'dream 110' && modelMoto.startsWith('nd')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'dream super cub' && modelMoto.startsWith(
                            'mlhja')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave-100 s' && modelMoto.startsWith(
                            'nf100r-mr')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave-110' && modelMoto.startsWith('nf110')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave czi 110' && modelMoto.startsWith(
                        'nf110')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave-110 i' && (modelMoto.startsWith(
                            'ns110') || modelMoto.startsWith('mlhja wave-110') || modelMoto
                            .startsWith('mlhja-01 mlhja wave-110 i'))) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave 125 i' && (
                            modelMoto.startsWith('mlhja wave 125 i') ||
                            modelMoto.startsWith('mlhjf wave 125 i') ||
                            modelMoto.startsWith('mlhjf-01 wave 125 i') ||
                            modelMoto.startsWith('wave 125') ||
                            modelMoto.startsWith('nf125c wave 125') ||
                            modelMoto.startsWith('nf125tt wave 125 x') // เพิ่มการตรวจสอบนี้
                        )) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave 125 x' && modelMoto.startsWith(
                            'nf125tt wave 125 x')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'msx 125' && modelMoto.startsWith(
                            'mlhjc msx 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'super cup' && modelMoto.startsWith(
                            'mlhja super cup')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave 125 s' && modelMoto.startsWith(
                            'wave 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'cb 150 r' && modelMoto.startsWith(
                            'honda cb150r standard')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'cbr 150' && modelMoto.startsWith('cbr 150')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'wave 125' && modelMoto.startsWith(
                            'nf125c wave 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    }


                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'excittier 150' && modelMoto.startsWith(
                            'rlcug excittier 150')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'spark nano' && modelMoto.startsWith('50s3')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'spark-x' && modelMoto.startsWith('2p0')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'spark-135' && modelMoto.startsWith(
                            'mleug spark-135')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'spark-nano' && modelMoto.startsWith(
                            '50s3-50p')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'spark-115i' && modelMoto.startsWith(
                            'rlcue spark-115i')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'spark lx' && modelMoto.startsWith(
                            'mleue spark lx')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'jupiter rc' && modelMoto.startsWith(
                            'rlcue jupiter rc')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'finn' && modelMoto.startsWith('finn')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'm-slaz' && modelMoto.startsWith('mlerg')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'xsr 155' && modelMoto.startsWith(
                            'mlerg-g3m8e')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'r 15' && modelMoto.startsWith('r 15')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'smash revo' && modelMoto.startsWith('be49')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'smash 110' && modelMoto.startsWith('be4dn')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'shogun axel' && modelMoto.startsWith(
                        'bf45h')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'raider' && modelMoto.startsWith('mh8bg41f')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'shooter 115' && modelMoto.startsWith(
                        'mlcbf')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'gd110' && modelMoto.startsWith('lc6pch')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'gsx r150' && modelMoto.startsWith('cga2')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'shogun' && modelMoto.startsWith('bf45a')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'smash' && modelMoto.startsWith('be49')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'gpx popz 125' && modelMoto.startsWith(
                            'gpx popz 125')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    } else if (selectedGroup === 'gpx legend' && modelMoto.startsWith(
                            'gpx legend')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'rk150' && modelMoto.startsWith('mlrbro')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    }

                    ////////////////////////////////////////////////////////////////
                    else if (selectedGroup === 'stallions centaur' && modelMoto.startsWith(
                            'stallions centaur')) {
                        var vehicleName = motoModel.vehicle_name ? motoModel.vehicle_name : '';
                        $('#Vehicle_Models').append(
                            '<option value="' + motoModel.Model_moto + '">' + vehicleName +
                            ' ' + motoModel.Model_moto + '</option>'
                        );
                    }



                });




            }
        });
    });
</script>
