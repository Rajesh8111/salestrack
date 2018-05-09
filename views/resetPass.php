<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="../assets/css/general.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title>Sales Tracker - Reset Password</title>
</head>
<body>

<div class="container-fluid">
    <div class="row" height="100vh;">
        <div class="col-2 bg-teal sidepanel">
            <img src="../assets/images/men.png" alt="Sales Call Tracker" class="center men">
        </div>
        <div class="col-10">
            <div class="center login" style="width:320px;">
        <div class="h1 text-info">Change Password</div>
                
                <br>
                    <div class="login" >
                        <div class="form-group text-center">
                            <!-- <label for="username" class="text-secondary" style="width:120px;">E-Mail</label> setFocus('username')-->
                            <input type="password" id="newPassword" class="form-control" placeholder="New Password">
                            
                        </div>
                        <div class="form-group text-center">
                            <!-- <label for="password" class="text-secondary"  style="width:120px;">Password</label> -->
                            <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password">
                        </div>
                        
                        <div class="text-center">
                            <button type="button" id="submitNewPassword" class="btn btn-secondary bg-teal no-border w-100">Submit</button> <br>                    
                        </div>
                        <div class="text-center">
                            <!-- Trigger forgetPassword Model -->
                        <a href="../index.php" class="btn btn-link text-underline">return to login</a>                     
                        </div>
                        <div class="text-center text-danger">
                        <p class="text-truncate text-hide" id="err">truncated text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootbox.min.js"></script>
<script src="../assets/js/general.js"></script>


<!-- set Focus on email textbox -->
<script>setFocus('newPassword');</script>


<!--Add Controllers -->
<script src="../controller/Auth.js"></script>

</body>
</html>