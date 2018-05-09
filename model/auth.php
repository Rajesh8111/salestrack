<?php
    session_start();

    require_once('../config/connect.php');


    if(isset($_REQUEST['method'])){
    $method=$_REQUEST['method'];

    switch($method){
        case 'login':
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = md5(mysqli_real_escape_string($con, $_POST['password']));

            $sql = "select id,name from users where mail='".$username."' and pass='".$password."'";
            
            if ($res=mysqli_query($con,$sql)) {
                $rowCount=mysqli_num_rows($res);
                if($rowCount==1){
                    $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
                    $_SESSION["id"] = $row["id"];
                    $_SESSION["name"] = $row["name"];
                    echo "true";
                }
                else if($rowCount==0){
                    echo "Invalid Username / Password.";
                }
                else{
                    echo 'Error: ' . mysqli_error($con);
                }
                
            }
            else{
                die('Error: ' . mysqli_error($con));
                return false;
            }
        break;
        case 'logout':
            unset($_SESSION["name"]);
            unset($_SESSION["id"]);
            echo "true";
        break;
        case 'validate_login':
            if(isset($_SESSION["name"]) && isset($_SESSION["id"])){
                echo "true";
            }
        break;
        case 'setResetToken':
            $token = mysqli_real_escape_string($con, $_POST['token']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $sql = "select * from users where mail='$email'";
            $res=mysqli_query($con,$sql);
            $count = mysqli_num_rows($res);
            if($count==1){
                $sql = "update users set resetToken='$token' where users.mail = '$email'";
                if($res=mysqli_query($con,$sql))
                    echo "true";
                else 
                    echo 'Error: ' . mysqli_error($con);
            }
            else if($count==0){
                echo "No Account Related to this mail";
            }
            else{
                // die('Error: ' . mysqli_error($con));
                echo 'Error: ' . mysqli_error($con);
            }
        break;
        case 'changePassword':
        $token = mysqli_real_escape_string($con, $_POST['token']);
        $password = md5(mysqli_real_escape_string($con, $_POST['password']));
        $sql = "select * from users where resetToken='$token'";
        $res=mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
        if($count==1){
            $sql = "update users set pass='$password',resetToken=0 where resetToken='$token'";
            if(mysqli_query($con,$sql)){

                echo "true";
            }
            else{
                // die('Error: ' . mysqli_error($con));
                echo 'Error: ' . mysqli_error($con);
            }
        }
        else{
            echo "Invalid Token!!";
        }
    break;
    }
    }


?>