<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('../assets/bootstrap.css.php') ?>
    <link rel="stylesheet" href="../assets/css/home.css">
    <title>Home</title>
</head>
<body>


    <?php require_once('components/header.php') ?>

<div class="container-fluid">
    <div class="row text-white img-flex">
       <img src="../assets/images/call.jpg" alt="" class="banner img-fluid w-100" >
    </div>
    <div class="row content justify-content-around bg-white ">
        <div class="col-lg-3 text-center">
            <h2>Windstream Telco</h2>
            <p><a class="btn btn-success" href="#" role="button">View &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 text-center">
            <h2>Windstream Others</h2>
            <p><a class="btn btn-warning text-white" href="#" role="button">View &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 text-center ">
            <h2>Others</h2>
            <p><a class="btn btn-danger" href="#" role="button">View &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div>
    <!-- <div class="row content justify-content-around bg-white">
        <div class="col-lg-3 text-center">
            <h2>Green</h2>
            <p><a class="btn btn-success" href="#" role="button">View &raquo;</a></p>
        </div>
        <div class="col-lg-3 text-center">
            <h2>Amber</h2>
            <p><a class="btn btn-warning text-white" href="#" role="button">View &raquo;</a></p>
        </div>
        <div class="col-lg-3 text-center">
            <h2>Red</h2>
            <p><a class="btn btn-danger" href="#" role="button">View &raquo;</a></p>
        </div>
    </div>  -->
    <div class="text-center">
    <a href="addnew.php" class="btn btn-info text-white track-new  font-italic">Track Call</a>    
    <a  href="dashboard.php" class="btn btn-info text-white track-new  font-italic">Dashboard</a>    
    </div>
     
</div>

<?php require_once('../assets/bootstrap.js.php') ?>
</body>
</html>