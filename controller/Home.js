

    $(document).ready(function(){
         //API Call
         $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=getTopActivities",
            success: function(result){
                if(result){
                    // rows=result;
                    rows=$.parseJSON(result);
                    console.log(rows);
                    var activityElement = $('#activities');
                    $.each(rows, function(index, value) {
                        let content = "Process "+value.processName+" was "+value.activity+" by "+value.userName;
                        let list = "<li class='list-group-item-action'>"+content+"</li>";
                        $(activityElement).append(list);                    
                    });
                }
                else{
                    console.log(result);
                }
            }
        });
    });


