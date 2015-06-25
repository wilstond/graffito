$(document).ready(function () {

    var map;
    var marker = [];

    function initialize() {




        //GRAB MAP DIV BY ID & SET OPTIONS FOR MAP STARTING POINT/TYPE
        var mapCanvas = document.getElementById('map_canvas');
        var myLatlng = new google.maps.LatLng(43.661368200000000000, -79.383094200000020000);

        //SET MAP OPTIONS
        var options = {
            center: myLatlng,
            zoom: 12,
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
  // -------------------------------------------------------------      
        //SEARCH BOX TRY//
       
//       var searchBox = new google.maps.places.SearchBox(document.getElementById('searchBox'));
//    //EVENT LISTENER FOR SEARCH BOX
//    google.maps.event.addListener(searchBox, 'places_changed',function(){
//
//        var places = searchBox.getPlaces();
//        var bounds = new google.maps.LatLngBounds();
//        var i, place;
//
////    //SET MARKER TO SEARCH LOCATION
////        for(i=0;place=places[i];i++){
////            console.log(place.geometry.location);
////            bounds.extend(place.geometry.location);
////            marker.setPosition(place.geometry.location);
////        }
//
//        map.fitBounds(bounds);
//        map.setZoom(14); //SET ZOOM FOR NEW LOCATIONS
//    });
//    //BIAS SEARCH RESULTS BASED ON WHATS IN CURRENT BOUNDS
//    google.maps.event.addListener(map, 'bounds_changed', function() {
//        var bounds = map.getBounds();
//        searchBox.setBounds(bounds);
//      });
     // -------------------------------------------------------------
  
        //THIS MARKER WORKS                    
//        var marker = new google.maps.Marker({
//        position: myLatlng,
//        map: map,
//        title: 'You are here'   
//        });

        $.post("getcoordinates", {lat: '0', long: '0'}).done(function (data) {
             console.log(data);
            for (var i = 0; i < data.length; i++) {
                var latitude = (data[i].latitude);
                var longitude = (data[i].longitude);
                var positions = new google.maps.LatLng(latitude, longitude);
              //  var coords = data[i].latitude + "," + data[i].longitude;
                var name = data[i].loc_name;  
                var marker = new google.maps.Marker({
                    position: positions,
                    map: map,
                    title: name
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

