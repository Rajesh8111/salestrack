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
                    if(result=="true"){
                        
                    }
                    else{
                        window.location.href="../index.php";
                        // console.log(result);
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
                    if(result=="true"){
                        window.location.href="views/home.php";
                    }
                    else if(result=="Invalid Username / Password.")
                    {
                        err.text("Invalid Username / Password.");
                        err.removeClass('text-hide');
                        // console.log(result);
                    }
                    else{
                        //navigate to error page
                        window.location.href="views/error.php";
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
                if(result=="true"){
                    window.location.href="../index.php";
                }
                else{
                    //navigate to error page
                    window.location.href="error.php";
                }
            }
        });
    });

    //Forget Password
    $('#changePassword').click(function(){
        let email = $('#forgetEmail').val();
        if(email.indexOf('@')>=0){
        $('#forgetPassword').modal('hide');                
            //Generate Reset Token
            const token = Math.floor(10000000000000 + Math.random() * 90000000000000);
            // bootbox.alert(token);



            //Validate mail id
            //Store reset token in db
            //API call to validate email and set resetToken
            //return "true" - > valid account and resetToken assigned successfully
            //return "No Account relayed to this mail" -> EMails seems to be invalid
            //return "false" - > Unknown issue with the API call
            $.ajax({
                type:"POST",
                url: "model/auth.php",
                data: 
                    "method=setResetToken"
                    +"&email="+ email
                    +"&token="+ token,
                success: function(result){
                    if(result=="true"){
                        //send complete link through mail

                        //get current url
                        let path = document.baseURI.replace("/index.php","/")

                        let subject = "Reset Password (from SalesTracker)"
                        let url = "please click on this link to reset your password.<br>"+
                            "<a href='"+path+"views/resetPass.php?token="+token+"'>Reset Password</a>";
                        let toEmail = email;
                        //bootbox.alert(url);

                        $.ajax({
                            type:"POST",
                            url: "model/sendMail.php",
                            data: "subject="+subject
                                +"&message="+url
                                +"&toEmail="+toEmail,
                            success: function(result){
                                if(result=="true"){
                                    bootbox.alert("Password reset link sended to your mail, Please check your mailbox.");
                                }else{
                                    //navigate to error page
                                    console.log(result);
                                    window.location.href="views/error.php";
                                }
                            }
                        });

                    }else if(result=="No Account Related to this mail"){
                        //bootbox.alert the error                        
                        bootbox.alert(result);
                    }else{
                        //navigate to error page
                        console.log(result);                        
                        window.location.href="views/error.php"; 
                    }
                }});
        }
    });

    //Update Password
    $('#submitNewPassword').click(function(){
        let err=$("#err");        
        const token = param('token');
        // bootbox.alert(token);
        const newPassword = $('#newPassword').val();
        const confirmPassword = $('#confirmPassword').val();

        if(newPassword=="" || confirmPassword==""){
            err.text("values required for both the fields..!");
            err.removeClass('text-hide');
        }
        else if(newPassword.length<7 || confirmPassword<7){
            err.text("password not having minimum characters..!");
            err.removeClass('text-hide');
        }
        else if(newPassword!=confirmPassword){
            err.text("password not matches..!");
            err.removeClass('text-hide');
        } 
        else if(newPassword==confirmPassword){
            
            $.ajax({
                type:"POST",
                url: "../model/auth.php",
                data: 
                    "method=changePassword"
                    +"&token="+token
                    +"&password="+ newPassword,
                success: function(result){
                    if(result=="true"){
                        bootbox.alert('Password successfully updated..!  Login Again!!',function(){
                            window.location.href="../index.php";                            
                        });
                    }
                    else if(result="Invalid Token!!"){
                        err.text("Invalid Token!!");
                        err.removeClass('text-hide');
                    }
                    else{
                        //Navigate to error page
                        window.location.href="error.php";                        
                    }
                }
            });
        }
        else{
            //navigate to error page
            window.location.href="error.php";                        
        }
    });
})();