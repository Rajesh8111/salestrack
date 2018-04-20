(function(){
    $('#export').click(function(){
        $('.loading').show();
        var category = (param('category')!='')?param('category'):'all';
        var status = (param('status')!='')?param('status'):'all';
        $("#category option:contains(" + category + ")").attr('selected', 'selected');
        $("#status option:contains(" + status + ")").attr('selected', 'selected');

        category =  $("#category option:selected").text();
        status =  $("#status option:selected").text();

        category = category.replace('-',' ');
        status = status.replace('-',' ');
        
        window.location.href="../model/call.php?method=export&status="+status+"&category="+category;
        //API Call
        // $.ajax({
        //     type:"POST",
        //     url: "../model/call.php",
        //     data: 
        //         "method=export"
        //         +"&status="+status
        //         +"&category="+category,
        //     success: function(result){
        //         if(result){
                    
        //         }
        //         else{
        //         }
        //         }      
        // });
    });
    

    $(document).ready(function() {
        $('.loading').show();
        
        var category = (param('category')!='')?param('category'):'all';
        var status = (param('status')!='')?param('status'):'all';
        $("#category option:contains(" + category + ")").attr('selected', 'selected');
        $("#status option:contains(" + status + ")").attr('selected', 'selected');

        category =  $("#category option:selected").text();
        status =  $("#status option:selected").text();

        category = category.replace('-',' ');
        status = status.replace('-',' ');


        //API Call
        $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=listcalls"
                +"&status="+status
                +"&category="+category,
            success: function(result){
                if(result){
                    console.log(result);
                    rows = $.parseJSON(result);
                    console.log(rows);
                    var tbody = $("#tbody");
                    $.each(rows, function(index, value) {
                        $.each(value, function(index, value) {
                        
                        var status= value.status_id==1?"green":value.status_id==2?"red":value.status_id==3?"amber":"";


                        var row = "<tr class=''>"
                        +"<td>"+value.category+"</td>"
                        +"<td><a href='./editcall.php?id="+value.call_id +"'>"+value.call_id+"</a></td>"
                        +"<td><a href='./editcall.php?id="+value.call_id +"'>"+value.client_name+"</a></td>"
                        +"<td><a href='./editcall.php?id="+value.call_id +"'>"+value.process_name+"</a></td>"
                        +"<td><a href='./editcall.php?id="+value.call_id +"'>"+value.region+"</a></td>"
                        +"<td><a href='./editcall.php?id="+value.call_id +"'>"+value.sales_spoc+"</a></td>"
                        +"<td><a href='./editcall.php?id="+value.call_id+"'>"+value.responsible+"</a></td>"
                        +"<td><a href='./editcall.php?id="+value.call_id+"'>"+value.target_date+"</a></td>"
                            +"<td>"
                                +"<button data-id='"+value.call_id+"' class='btn-link text-dark delete "+status+"' onclick='remove("+value.call_id+")' href='../assets/images/Path1.png'>X</button>"     
                            +"</td>"
                        +"</tr>";
                        tbody.append(row); 
                        //$("#servers").text($("#servers").text() + " " + value.servername);
                        });
                    });

                        $('#calls').DataTable();
                    
                    
                }
                else{
                    console.log(result);
                }
                $('.loading').hide();
                
            }
        });
    });
    


    function param(name) {
        return (location.search.split(name + '=')[1] || '').split('&')[0];
    }
})();

function remove(id){
    var confirm = window.confirm('Are you sure to remove the history of call : '+id+'?');
    if(confirm){
        //API Call
        $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=removecall"
                +"&call_id="+id,
            success: function(result){
                if(result){
                    window.location.href="viewcalls.php";
                }
                else{
                    console.log(result);
                }
               
            }
        });
    }
    else{
    }
}
