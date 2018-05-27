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

 <div class="container-fluid main">
    <div class="row banner text-white ">
       <img src="../assets/images/call.jpg" alt="" class=" w-100 img-flex" >
    </div>
    <!-- <div class="row" style="margin-top:45px;">
    <p class="h5 line-1 anim-typewriter typo">Make a customer, not a sale</p>
    </div> -->
    <div class="row content justify-content-between">
        <div class="col-3">
            <img src="../assets/images/logo_prodapt.png" alt="" class="img-fluid">
        </div>
    <div class=" col-5 bg-box h-30 ">
        <legend class="">Recent Activities</legend>
        <marquee behavior="slide" direction="up">
        <ul class="list-group text-center">
        <li class="list-group-item-action">Morbi leo risus</li>
        <li class="list-group-item-action">Porta ac consectetur ac</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        </ul>

        </marquee>
    </div>
    <div class="col-3">
            <img src="../assets/images/telebots.png" alt="" class="img-fluid telebots">
        </div>
    <!-- <div class="col-5 bg-box h-30 ">
    <legend  class="">Active Projects</legend>
        <marquee behavior="slide" direction="down">
        <ul class="list-group text-center">
        <li class="list-group-item-action">Morbi leo risus</li>
        <li class="list-group-item-action">Porta ac consectetur ac</li>
        <li class="list-group-item-action">Porta ac consectetur ac</li>
        <li class="list-group-item-action">Porta ac consectetur ac</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        <li class="list-group-item-action">Vestibulum at eros</li>
        </ul>
        </marquee>
    </div> -->
    </div>
    <!-- <div class="row banner text-white ">
       <img src="../assets/images/call.jpg" alt="" class=" w-100 img-flex" >
    </div> -->
     
</div>

<?php require_once('../assets/bootstrap.js.php') ?>
<script src="../controller/Home.js"></script> 
</body>
</html>