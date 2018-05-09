(function(){
    $(document).ready(function() {
        $('.loading').show();
        var id = param('id');

        if(id==""){
            window.location.href = "viewcalls.php"
        }

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

        //API Call
        $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=populate_data"
                +"&id="+id,
            success: function(result){
                if(result!='null'){
                    var call = $.parseJSON(result);
                    console.log(call); 

                    if(call.client_name=="" && call.process_name==""){
                        alert("No Data found!");
                        window.href.location="../home.php";
                    }
                    
                    // var category = call.category_id==1?"Win Telco":
                    // call.category_id==2?"Win Others":
                    // call.category_id==3?"Others":"null";
                    $("#category").val(call.category_id);
                   // $("#category option:contains(" + category + ")").attr('selected', 'selected');

                    var status = call.status_id;
                    if(status==1){$("#status-green").attr('checked', 'true');$("#status-green").click();}
                    else if(status==2){$("#status-red").attr('checked', 'true');$("#status-red").click();}
                    else if(status==3){$("#status-amber").attr('checked', 'true');$("#status-amber").click();}
                    else return 0;



                    $('#client-name').val(call.client_name);
                    $('#process-name').val(call.process_name);
                    $('#region').val(call.region);
                    $('#client-contact-name').val(call.client_contact_name);
                    $('#client-contact-designation').val(call.client_contact_designation);
                    $('#sales-spoc').val(call.sales_spoc);
                    $('#first-meet').val(call.first_meet);
                    $('#second-meet').val(call.second_meet);
                    $('#responsible').val(call.responsible);
                    $('#client-feedback').val(call.client_feedback);
                    $('#current-updates-textarea').text(call.current_update);
                    $('#conversational-history-textarea').text(call.conversational_history);
                    $('#prodapt-participants-textarea').text(call.prodapt_participants);
                    $('#discussion-points-textarea').text(call.discussion_points);
                    $('#next-steps-textarea').text(call.next_steps);
                    $('#target-date').val(call.target_date);
                    $('#remarks').val(call.remarks);
                    $('#project-start-date').val(call.project_start_date);
                    $('#project-end-date').val(call.project_end_date);
                    $('#current-status').val(call.current_status);
                    $('#opportunity-status').val(call.opportunity_status);
                    
                    
                    $('.loading').hide();
        
                }
                else{
                    console.log(result);
                    alert("No Data found!");
                    window.location.href="viewcalls.php";
                }
               
            }
        });
    });

 

    
})();



    //Update Call History
    $('#submit').click(function(){
        $('.loading').show();
        
        var id = param('id');
        
        var category = $('#category').val();
        
        //Status
        var status = null;
        status = $('#status-green').is(":checked") ? 1 : '';
        status = $('#status-red').is(":checked") ? 2 : status;
        status = $('#status-amber').is(":checked") ? 3: status;
        if(status==null){
        alert('status must be selected before submitting!!');
        return false;
        }
        $('#submit').attr("disabled","disabled");
        
        var client_name = $('#client-name').val();
        var process_name = $('#process-name').val();
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
        var project_start_date = $('#project-start-date').val();
        var project_end_date = $('#project-end-date').val();
        var current_status = $('#current-status').val();
        var opportunity_status = $('#opportunity-status').val();
        $(this).addClass("disabled");
        
        //API Call
        $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=modify"
                +"&id="+id                
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
                +"&remarks="+remarks
                +"&project_start_date="+project_start_date
                +"&project_end_date="+project_end_date
                +"&current_status="+current_status
                +"&opportunity_status="+opportunity_status,
                success: function(result){
                    console.log(result);
                if(result){
                alert("Call Updated Successfully..!");
                window.location.href="viewcalls.php?category=All&status=All";
                }
                else{
                    console.log(result);
                }
               
            }
        });
        $(this).removeClass("disabled");
        $('.loading').hide();        
    });   