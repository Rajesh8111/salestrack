(function(){

    //Load Categories
    $(document).ready(function(){
        
    });


  /*   $('#export').click(function(){
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
     */

    $(document).ready(function() {

        

        $('.loading').show();
        
        var category = (param('category')!='')?param('category'):'all';
        var status = (param('status')!='')?param('status'):'all';

        
        category = category.replace('%20',' ');
        status = status.replace('%20',' ');

        $("#category option:contains(" + category + ")").attr('selected', 'selected');
        $("#status option:contains(" + status + ")").attr('selected', 'selected');


        category =  $("#category option:selected").text();
        status =  $("#status option:selected").text();



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

                        var date1 = new Date(value.created_date);
                        console.log(date1);
                        var date2 = new Date();
                        console.log(date2);                        
                        var diffDays = Date.daysBetween(date1, date2)
                        console.log('diff:: '  + diffDays);
                        var row = "<tr>"
                        +"<td><a class='"+status+" bold' href='./editcall.php?id="+value.call_id +"'>"+value.category+"</a></td>"                        
                        +"<td><a  href='./editcall.php?id="+value.call_id +"'>"+diffDays+"</a></td>"
                        +"<td><a  href='./editcall.php?id="+value.call_id +"'>"+value.process_name+"</a></td>"                        
                        +"<td><a  href='./editcall.php?id="+value.call_id +"'>"+value.client_name+"</a></td>"
                        +"<td><a href='./editcall.php?id="+value.call_id +"'>"+value.region+"</a></td>"
                        +"<td><a  href='./editcall.php?id="+value.call_id +"'>"+value.sales_spoc+"</a></td>"
                        +"<td><a  href='./editcall.php?id="+value.call_id+"'>"+value.responsible+"</a></td>"
                        // +"<td><a class='"+status+"' href='./editcall.php?id="+value.call_id+"'>"+value.target_date+"</a></td>"
                            +"<td >"
                                +"<img data-id='"+value.call_id+"' title='Delete' class='btn-link text-dark delete "+status+"' onclick='remove("+value.call_id+","+'"'+value.process_name+'"'+")' src='../assets/images/svg/delete.svg'></img>"     
                            +"</td>"
                        +"</tr>";
                        tbody.append(row); 
                        //$("#servers").text($("#servers").text() + " " + value.servername);
                        });
                    });
                    $('#calls tfoot th').each( function () {
                        var title = $(this).text();
                        $(this).html( '<input type="text" class="search" id="search'+title+'" placeholder="Search '+title+'" />' );
                    } );

                       var table =  $('#calls').DataTable({
                        "order": [[ 1, "desc" ]]
                       });
                    // Apply the search
                    table.columns().every( function () {
                        var that = this;
                
                        $( 'input', this.footer() ).on( 'keyup change', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                     } );
                }
                else{
                    console.log(result);
                }
                $('.loading').hide();
                
            }
        });
    });
    
    Date.daysBetween = function( date1, date2 ) {
        //Get 1 day in milliseconds
        var one_day=1000*60*60*24;
      
        // Convert both dates to milliseconds
        var date1_ms = date1.getTime();
        var date2_ms = date2.getTime();
      
        // Calculate the difference in milliseconds
        var difference_ms = date2_ms - date1_ms;
          
        // Convert back to days and return
        return Math.round(difference_ms/one_day); 
      }

    function param(name) {
        return (location.search.split(name + '=')[1] || '').split('&')[0];
    }
})();

function remove(id,processName){
    
    // alert(processName);
    var confirm = window.confirm('Are you sure to remove the history of call : '+processName+'?');
    if(confirm){
        //API Call
        $.ajax({
            type:"POST",
            url: "../model/call.php",
            data: 
                "method=removecall"
                +"&call_id="+id
                +"&processName="+processName,
            success: function(result){
                if(result){
                    window.location.reload();
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
