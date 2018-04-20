$('#category').on('change',function(){
    renderr();        
});

$('#status').on('change',function(){
    renderr();
});




function renderr(){
    var category =  $("#category option:selected").text();
    var status =  $("#status option:selected").text();
    window.location.href="\?category="+category+"&status="+status;
}
