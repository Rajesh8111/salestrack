(function(){
    $('.add').click(function(){
        var id = $(this).data("id");
        var content = $(this).data("content");
        var date = $(this).data("date");
        if($('#'+date).val()=='')
        {
            $('#'+date).addClass("bg-outline-danger");
        }
        else{
        var old = $('#'+id).val();
        $('#'+id).val(
            $('#'+date).val()+' : '+ $('#'+content).val()+'\n'+old
        )
        $('#'+date).removeClass("bg-outline-danger");    
        $('#'+content).val('');    
        }
    });

    $(document).on('click','.edit',function(){
        var id = $(this).data("id");
        $('#'+id).attr("readonly", false); 
        $(this).removeClass('edit');
        $(this).addClass('lock');
        $(this).text('Lock');   
    });

    $(document).on('click','.lock',function(){
        var id = $(this).data("id");
        $('#'+id).attr("readonly", true); 
        $(this).removeClass('lock');
        $(this).addClass('edit');
        $(this).text('Edit');        
    });


    //Status
    $('#status').click(function(){
        changeBackground();
    });

    function changeBackground(){
        //clear bg
        $('body').removeClass('bg-green');
        $('body').removeClass('bg-red');
        $('body').removeClass('bg-amber');
        $('#submit').removeClass('bg-green');
        $('#submit').removeClass('bg-red');
    $('#submit').removeClass('bg-amber');
        if($('#status-green').is(":checked")){
            $('body').addClass('bg-green');
            $('#submit').addClass('bg-green');
        }
        else if($('#status-red').is(":checked")){
            $('body').addClass('bg-red');
            $('#submit').addClass('bg-red');
        }
        else if($('#status-amber').is(":checked")){
            $('body').addClass('bg-amber');            
            $('#submit').addClass('bg-amber');            
        }
    }

   

})();