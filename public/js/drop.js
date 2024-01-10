// $(document).ready(function(){
//     var selectedCountry = "";
//     var selectedState = "";
//     var selectedCity = "";

//     $('#country-dd').on('change', function () {
//         var idCountry = this.value;
//         $("#state-dd").html('');

//         $.ajax({
//             url: "{{url('api/fetch-states')}}",
//             type: "POST",
//             data: {
//                 country_id: idCountry,
//                 _token: '{{csrf_token()}}'
//             },
//             dataType: 'json',
//             success: function (result) {
//                 $('#state-dd').html('<option value="">Select State</option>');
//                 $.each(result.states, function (key, value) {
//                     $("#state-dd").append('<option value="' + value.id + '">' + value.name + '</option>');
//                 });
//                 $('#city-dd').html('<option value="">Select City</option>');
//             }
//         });

//         // Set selected country variable
//         selectedCountry = $('#country-dd option:selected').text();
//         // Set the value of the hidden field
//         $('#selected_country').val(selectedCountry);
//     });

//     $('#state-dd').on('change', function () {
//         var idState = this.value;
//         $("#city-dd").html('');

//         $.ajax({
//             url: "{{url('api/fetch-cities')}}",
//             type: "POST",
//             data: {
//                 state_id: idState,
//                 _token: '{{csrf_token()}}'
//             },
//             dataType: 'json',
//             success: function (res) {
//                 $('#city-dd').html('<option value="">Select City</option>');
//                 $.each(res.cities, function (key, value) {
//                     $("#city-dd").append('<option value="' + value.id + '">' + value.name + '</option>');
//                 });
//             }
//         });

//         // Set selected state variable
//         selectedState = $('#state-dd option:selected').text();
//         // Set the value of the hidden field
//         $('#selected_state').val(selectedState);
//     });

//     $('#city-dd').on('change', function () {
//         // Set selected city variable
//         selectedCity = $('#city-dd option:selected').text();
//            // Set the value of the hidden field
//            $('#selected_city').val(selectedCity);

//         // Now you have the selected country, state, and city in variables (selectedCountry, selectedState, selectedCity)
//         console.log('Selected Country:', selectedCountry);
//         console.log('Selected State:', selectedState);
//         console.log('Selected City:', selectedCity);
//     });


    

// });