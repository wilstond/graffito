
$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {

    //GEOLOCATION

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success);

    } else {
        alert("Shit not supported");
    }

    function success(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        $.ajax({
            type: "GET",
            url: 'location',
            data: {latitude: latitude, longitude: longitude},
            success: function (data)
            {
                $('#location').attr('placeholder', data);
            }
        });
    }

    //------LOCATION SEARCH BOX AUTCOMPLETE  ---------------//
    var autocomplete;
    function initialize() {
        autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('location')),
                {types: ['geocode']});
        google.maps.event.addListener(autocomplete, 'places_changed', function () {

        });
    }


    google.maps.event.addDomListener(window, 'load', initialize);

//-----------------FORM SUBMIT----------------------------//

    $('#upload_form1').submit(function (event) {

        event.preventDefault();
        var name = $('#location').val();
        var image = $('#image').val();

        if (name === "") {
            name = $('#location').attr('placeholder');
        }
        //alert(name);

//----------------REVERSE GEOCODE------------------------//
        geocoder = new google.maps.Geocoder();

        geocoder.geocode({'address': name}, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {

                var latitude = results[0].geometry.location.lat();
                var longitude = results[0].geometry.location.lng();

                //alert(name + " " + longitude + " " + latitude);
//            $.ajax({
//               type:"POST",
//               url: 'contribute', 
//               data:{latitude:latitude, longitude:longitude, name:name},
//               success: function(data){
//                   alert(data);
//               }
//             });

                $.post("contribute", {latitude:latitude, longitude:longitude, name:name, image:image}).done(function (data) {
                    
                    alert(data);

                });

            }

            else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    });
    
    
        
    
    
});

