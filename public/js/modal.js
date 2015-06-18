function showImage(imageUrl){
    
    
    $('#modalwindow').append('<img src="'+imageUrl+'" onClick="hideImage()" />').show();
    //alert (imageUrl);
}

function hideImage(){
    
    $('#modalwindow').html('');

    
    $('#modalwindow').hide();
}