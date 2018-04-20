<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
    <link href="assets/css/general.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Login</title>
</head>
<body>

<div class="container-fluid">
    <div class="row" height="100vh;">
        <div class="col-2 bg-teal sidepanel">
            <img src="assets/images/men.png" alt="Sales Call Tracker" class="center men">
        </div>
        <div class="col-10">
            <div class="center">
            <div class="h1 text-center">Sales Call Tracker</div>
                <div class="login justify-content-center">
                    <div class="form-group text-center">
                        <label for="username" class="text-secondary" style="width:120px;">E-Mail</label>
                        <input type="email" id="username" class="form-control-sm">
                    </div>
                    <div class="form-group text-center">
                        <label for="password" class="text-secondary"  style="width:120px;">Password</label>
                        <input type="password" id="password" class="form-control-sm">
                    </div>
                    <div class="text-center text-danger">
                    <p class="text-truncate text-hide" id="err">truncated text.</p>
                    </div>
                    <div class="text-center">
                        <button type="button" id="login" class="btn btn-secondary bg-teal no-border" style="width:150px;">Login</button>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<!--Add Controllers -->
<script src="controller/Auth.js"></script>

</body>
</html>