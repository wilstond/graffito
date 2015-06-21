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
       
//       $.ajax({
//                    type: "GET",
//                    url: base + 'contribute.php',
//                    data: {latitude:latitude, longitude:longitude},
//                   // data:"hello",
//                    success: function(data)
//                    {
//                        alert(data);
//                    }
//                });
   }
    
});