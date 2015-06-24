$(document).ready(function(){
    
   //GEOLOCATION

       if(navigator.geolocation){
           navigator.geolocation.getCurrentPosition(success);
           
       } else {
           alert("Shit not supported");
       }

   function success(position){
       var latitude = position.coords.latitude; 
       var longitude = position.coords.longitude;
  
       $.ajax({
                    type: "GET",
                    url: 'location',
                    data: {latitude:latitude, longitude:longitude},
                    success: function(data)
                    {
                        $('#location').attr('placeholder', data);
                    }
                });
   }
   
   var autocomplete;
   function initialize(){
       autocomplete = new google.maps.places.Autocomplete(
               (document.getElementById('location')),
                {types: ['geocode']});
       google.maps.event.addListener(autocomplete, 'places_changed', function(){
           
       });
   }
   
   google.maps.event.addDomListener(window, 'load', initialize);
      
});