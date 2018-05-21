<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('../assets/bootstrap.css.php') ?>
    <link rel="stylesheet" href="../assets/css/viewcalls.css">
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css"/>

    <title>Home</title>
</head>

<body>


<?php require_once('components/header.php') ?>

<div class="container-fluid content bg-white">

<div class="row">
    <div class="col-4">
<legend class="text-secondary header">List of Calls</legend>
</div>
<div class="offset-2"></div>
<div class="col-1 text-right">
<label for="">Category</label>
</div>

<div class="col-2">
<select class="custom-select form-control-sm" id="category">
  <option value="0">All</option>
  <option value="1">Win Telco</option>
  <option value="2">Other Telco</option>
  <option value="3">Non Telco</option>
  <option value="4">Others</option>
</select>
</div>
<div class="col-1 text-right">
<label for="">Status</label>
</div>
<div class="col-2">
<select class="custom-select form-control-sm" id="status">
<option value="0">All</option>
  <option value="1">Green</option>
  <option value="2">Red</option>
  <option value="3">Amber</option>
</select>

</div>
</div>
<hr>
<div class="row mt-20">
<div class="container-fluid ">
<table class="display   text-center table-sm table-striped " id="calls" style="width:100%; max-height:60vh;">
    <thead>
    <tr>
        <th>Category</th>
        <th>Days</th>
        <th>Client Name</th>
        <th>Process Name</th>
        <th>Region</th>
        <th>Sales SPOC</th>
        <th>Responsible</th>
        <!-- <th>Target Date</th> -->
        <th>Action</th>
    </tr>
    </thead>
    <tbody id="tbody">
    
    </tbody>
    <tfoot>
            <tr>
            <th>Category</th>
        <th>Days</th>
        <th>Client Name</th>
        <th>Process Name</th>
        <th>Region</th>
        <th>Sales SPOC</th>
        <th>Responsible</th>
        <!-- <th>Target Date</th> -->
        <th>Action</th>
            </tr>
        </tfoot>
</table>
</div> 


</div>
<?php require_once('../assets/bootstrap.js.php') ?>


<script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>


<script src="../assets/js/viewcalls.js"></script>

<!-- Controller -->
<script src="../controller/ListCalls.js"></script>
</body>
</html>