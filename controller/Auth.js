(function(){

    $(document).ready(function(){
        if($("#header").length){
            //Validate Login
            $.ajax({
                type:"POST",
                url: "../model/auth.php",
                data: 
                    "method=validate_login",
                success: function(result){
                    if(result){
                        
                    }
                    else{
                        window.location.href="../index.php";
                        console.log(result);
                    }
                }
            });
        }
    });

    //Login
    $('#login').click(function(){
        //validations
        var err=$("#err");
        var username = $("#username").val();
        var password = $("#password").val();
        if(username == "" || password==""){
            err.text("fields cannot be blank.");
            err.removeClass('text-hide');
            return true;
        }
        else{
            $.ajax({
                type:"POST",
                url: "model/auth.php",
                data: 
                    "method=login"
                    +"&username="+ username
                    +"&password="+ password,
                success: function(result){
                    if(result==true){
                        window.location.href="views/home.php";
                    }
                    else{
                        err.text("Invalid Username / Password.");
                        err.removeClass('text-hide');
                        console.log(result);
                    }
                }
            });
        }
    });

    //Logout
    $('#logout').click(function(){
        $.ajax({
            type:"POST",
            url: "../model/auth.php",
            data: 
                "method=logout",
            success: function(result){
                if(result){
                    window.location.href="../index.php";
                }
                else{
                    console.log(result);
                }
            }
        });
    });
})();