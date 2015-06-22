$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});


////function showImage(imageUrl){
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

function showImage(id, imageUrl){
    
    $('.modal-body').html('<img src="'+imageUrl+'" />');
    
    $.get("viewedpost/"+id, function(data) {

        if(data=="OK"){
            
            //alert("View count updated");
            
        }

        
    });
    
}