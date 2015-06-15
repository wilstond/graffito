$(document).ready(function(){
    
  /* function getLocation(){*/

       if(navigator.geolocation){
           navigator.geolocation.getCurrentPosition(showPosition);
       } else {
           alert("Shit not supported");
       }
   //}
   
   function showPosition(position){
       alert(position.coords.latitude + ", " + position.coords.longitude);
   }
    
});