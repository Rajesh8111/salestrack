<?php
    session_start();

    require_once('../config/connect.php');


    if(isset($_REQUEST['method'])){
    $method=$_REQUEST['method'];

    switch($method){
        case 'login':
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            $sql = "select id,name from users where mail='".$username."' and pass='".$password."'";
            
            if ($res=mysqli_query($con,$sql)) {

                if(mysqli_num_rows($res)==1){
                    $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
                    $_SESSION["id"] = $row["id"];
                    $_SESSION["name"] = $row["name"];
                    echo true;
                    return true;
                }
                else{
                    die('Error: ' . mysqli_error($con));
                    return false;
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
            return true;
        break;
        case 'validate_login':
            if(isset($_SESSION["name"]) && isset($_SESSION["id"])){
                echo true;
                return true;
            }
        break;
        case 'login2':
        break;
    }
    }


?>