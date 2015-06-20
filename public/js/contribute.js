$(document).ready(function(){
    
   //function getLocation(){

       if(navigator.geolocation){
           navigator.geolocation.getCurrentPosition(success);
           
       } else {
           alert("Shit not supported");
       }
   //} 
   function success(position){
       position.coords.latitude 
       position.coords.longitude;
   }
    
});