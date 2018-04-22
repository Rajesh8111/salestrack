(function(){
//Load Categories
    $(document).ready(function(){
        //API Call
        $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=load_categories",
            success: function(result){
                if(result){
                    rows = $.parseJSON(result);
                    console.log(rows);
                    var category = $('#category');
                    $.each(rows, function(index, value) {
                        $.each(value, function(index, value) {
                            var list = "<option value='"+value.id+"'>"+value.category+"</option>";
                            category.append(list);
                        });
                    });
                }
                else{
                    console.log(result);
                }
                $('.loading').hide();
            }
        });
    });

    $('#submit').click(function(){
        $('.loading').show()        
        var category = $('#category').val();
        
        //Status
        var status = null;
        status = $('#status-green').is(":checked") ? 1 : '';
        status = $('#status-red').is(":checked") ? 2 : status;
        status = $('#status-amber').is(":checked") ? 3: status;
        
        
        
        var client_name = $('#client-name').val();
        var process_name = $('#process-name').val();

        if(client_name==""||process_name==""){
            alert('Client and Process names are mandatory fields!');
            $('.loading').hide()                
            return false;
            }
            $('#submit').attr("disabled","disabled");

        var region =$('#region').val();
        var client_contact_name =$('#client-contact-name').val();
        var client_contact_designation =$('#client-contact-designation').val();
        var sales_spoc =$('#sales-spoc').val();
        var first_meet =$('#first-meet').val();
        var second_meet =$('#second-meet').val();
        var responsible =$('#responsible').val();
        var client_feedback =$('#client-feedback').val();
        var current_updates =$('#current-updates-textarea').val();
        var conversational_history =$('#conversational-history-textarea').val();
        var prodapt_participants =$('#prodapt-participants-textarea').val();
        var discussion_points =$('#discussion-points-textarea').val();
        var next_steps =$('#next-steps-textarea').val();
        var target_date =$('#target-date').val();
        var remarks =$('#remarks').val();
        $(this).addClass("disabled");
        
        //API Call
        $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=add_new"
                +"&status="+status
                +"&category="+category
                +"&client_name="+client_name
                +"&process_name="+process_name
                +"&region="+region
                +"&client_contact_name="+client_contact_name
                +"&client_contact_designation="+client_contact_designation
                +"&sales_spoc="+sales_spoc
                +"&first_meet="+first_meet
                +"&second_meet="+second_meet
                +"&responsible="+responsible
                +"&client_feedback="+client_feedback
                +"&current_updates="+current_updates
                +"&conversational_history="+conversational_history
                +"&prodapt_participants="+prodapt_participants
                +"&discussion_points="+discussion_points
                +"&next_steps="+next_steps
                +"&target_date="+target_date
                +"&remarks="+remarks,
            success: function(result){
                if(result){
                alert("Call Successfully Recorded..!");
                window.location.href="addnew.php";
                }
                else{
                    console.log(result);
                }
                $('.loading').hide();
                
               
            }
        });
        $(this).removeClass("disabled");

    });    
    
})();