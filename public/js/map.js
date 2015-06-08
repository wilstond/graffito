$(document).ready(function(){
    
    function initialize() {

        //GRAB MAP DIV BY ID & SET OPTIONS FOR MAP STARTING POINT/TYPE
        var mapCanvas = document.getElementById('map_canvas');
        var myLatlng = new google.maps.LatLng(43.661368200000000000, -79.383094200000020000);
        
        //SET MAP OPTIONS
        var options = {
            center:myLatlng,
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            draggable: true
        };
        
        //CREATE NEW MAP OBJECT
        new google.maps.Map(mapCanvas, options); 
        
    
    };//END INITIALIZE 

    google.maps.event.addDomListener(window, 'load', initialize);

});

