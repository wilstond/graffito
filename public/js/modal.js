//function showImage(imageUrl){
//    
//    
//    $('#modalwindow').append('<img src="'+imageUrl+'" onClick="hideImage()" />').show();
//    //alert (imageUrl);
//}
//
//function hideImage(){
//    
//    $('#modalwindow').html('');
//
//    
//    $('#modalwindow').hide();
//}

function showImage(imageUrl){
    
    
    $('.modal-body').html('<img src="'+imageUrl+'" />');
    //alert (imageUrl);
}