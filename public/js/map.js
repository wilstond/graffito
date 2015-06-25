$(document).ready(function () {

    var map;

    function initialize() {




        //GRAB MAP DIV BY ID & SET OPTIONS FOR MAP STARTING POINT/TYPE
        var mapCanvas = document.getElementById('map_canvas');
        var myLatlng = new google.maps.LatLng(43.661368200000000000, -79.383094200000020000);

        //SET MAP OPTIONS
        var options = {
            center: myLatlng,
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            draggable: true
        };

        //CREATE NEW MAP OBJECT
        map = new google.maps.Map(mapCanvas, options);

        // TRY HTML5 GEOLOCATION
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                        position.coords.longitude);

                var infowindow = new google.maps.InfoWindow({
                    map: map,
                    position: pos,
                    content: 'You are here.'
                });


                map.setCenter(pos);
            }, function () {
                handleNoGeolocation(true);
            });
        } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }


        $.post("getcoordinates", {lat: '0', long: '0'}).done(function (data) {
             
            for (var i = 0; i < data.length; i++) {
                $latitude = (data[i].latitude);
                $longitude = (data[i].longitude);

              //  var coords = data[i].latitude + "," + data[i].longitude;
              //  var name = data[i].loc_name;
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng($latitude,$longitude),
                    map: map,
                    title: work
                });               
            }
        }); //END AJAX

    }
    ;//END INITIALIZE 

    function handleNoGeolocation(errorFlag) {
        if (errorFlag) {
            var content = 'Error: The Geolocation service failed.';
        } else {
            var content = 'Error: Your browser doesn\'t support geolocation.';
        }

        var options = {
            map: map,
            position: new google.maps.LatLng(60, 105),
            content: content
        };

        var infowindow = new google.maps.InfoWindow(options);
        map.setCenter(options.position);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});

