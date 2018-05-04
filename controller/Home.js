

    $(document).ready(function(){
         //API Call
         $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=load_dashboard",
            success: function(result){
                if(result){
                    rows = $.parseJSON(result);
                    console.log(rows);
                    $('#11').text(rows["11"]);
                    $('#12').text(rows["12"]);
                    $('#13').text(rows["13"]);
                    $('#21').text(rows["21"]);
                    $('#22').text(rows["22"]);
                    $('#23').text(rows["23"]);
                    $('#31').text(rows["31"]);
                    $('#32').text(rows["32"]);
                    $('#33').text(rows["33"]);

                }
                else{
                    console.log(result);
                }
            }
        });
    });


