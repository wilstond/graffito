$(document).ready(function(){
    
   //function getLocation(){

       if(navigator.geolocation){
           navigator.geolocation.getCurrentPosition(success);
           
       } else {
           alert("Shit not supported");
       }
   //} 
   function success(position){
       var latitude = position.coords.latitude; 
       var longitude = position.coords.longitude;
       var base = "localhost/graffito/public/";
       
//       $.post('location', {latitude:latitude, longitude:longitude}, function(data){              
//                  console.log(data);
//              });
       
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
    
});