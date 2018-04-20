<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('../assets/bootstrap.css.php') ?>
    <link rel="stylesheet" href="../assets/css/addnew.css">
    <title>Home</title>
</head>
<body>


<?php require_once('components/header.php') ?>

<div class="container content bg-white">
    <div class="middle h2 d-inline">Track Your New Call</div>
            <div class="d-inline" id="status">
            <div class="custom-control custom-radio d-inline">
            <input type="radio" id="status-green" name="customRadio" class="custom-control-input">
            <label class="custom-control-label text-success" for="status-green">Green</label>
          </div>
          <div class="custom-control custom-radio d-inline">
            <input type="radio" id="status-red" name="customRadio" class="custom-control-input">
            <label class="custom-control-label text-danger" for="status-red">Red</label>
          </div> 
          <div class="custom-control custom-radio d-inline">
            <input type="radio" id="status-amber" name="customRadio" class="custom-control-input">
            <label class="custom-control-label text-amber" for="status-amber">Amber</label>
          </div>          
    </div>
    <div class="mt-20"><label for="">Select Category</label></div>                
    <select class="form-control custom-textbox" id="category">
    <option value="1">Win Telco</option>
    <option value="2">Win Others</option>
    <option value="3">Others</option>
    </select>
    <div class="row justify-content-around mt-20">
        <div class="col-3">
            <label for="">Client Name</label>
            <input type="text" name="" id="client-name" class="form-control-sm custom-textbox w-100">
        </div>
        <div class="col-3">
            <label for="">Process Name</label>            
            <input type="text" name="" id="process-name" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Region</label>            
            <input type="text" name="Region" id="region" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Client Contact Name</label>            
            <input type="text" name="client-contact-name" id="client-contact-name" class="form-control-sm custom-textbox w-100" >
        </div>
    </div>
    <div class="row justify-content-around mt-20">
        <div class="col-3">
        <label for="">Client Designation</label>            
            <input type="text" name="client-contact-designation" id="client-contact-designation" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Sales SPOC</label>            
            <input type="text" name="" id="sales-spoc" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Date of 1st Call</label>                  
            <input type="date" name="" id="first-meet" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Date of 2nd Call</label>                       
            <input type="date" name="" id="second-meet" class="form-control-sm custom-textbox w-100" >
        </div>
    
        </div>
        <div class="row justify-content-between mt-20">
        <div class="col-3">
        <label for="">Responsible Person</label>                  
            <input type="text" name="responsible" id="responsible" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Client Feedback</label>                       
            <input type="text" name="" id="client-feedback" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Target Date</label>                  
            <input type="date" name="" id="target-date" class="form-control-sm custom-textbox w-100">
        </div>
        <div class="col-3">
        <label for="">Remarks If Any</label>                       
            <input type="text" name="" id="remarks" class="form-control-sm custom-textbox w-100" >
        </div>
        </div>
        
        <div class="row custom-text mt-20 ">
            Current Updates
            <textarea name="" id="current-updates-textarea" cols="30" rows="3" class="form-control" ></textarea>
        
        </div>
        <div class="row custom-text mt-20 ">
            Conversational History
            <textarea name="" id="conversational-history-textarea" cols="20" rows="3" class="form-control" ></textarea>
        </div>

        
        <div class="row custom-text mt-20">
        Prodapt Participants
            <textarea name=""  cols="20" rows="3" class="form-control" id="prodapt-participants-textarea" ></textarea>
        </div>
        <div class="row custom-text mt-20 ">
        Discussion Points
            <textarea name="" id="discussion-points-textarea" cols="20" rows="3" class="form-control" ></textarea>    
        </div>
        <div class="row custom-text mt-20">
            Next Steps
            <textarea name="" id="next-steps-textarea" cols="20" rows="3" class="form-control" ></textarea>
        </div>
        

        <div class="row mt-20">
            <button id="submit" class="btn btn-secondary w-100">Submit</button>
        </div>
        <div style="margin:250px;"></div>

    </div>

</div>
<?php require_once('../assets/bootstrap.js.php') ?>
<script src="../assets/js/calls.js"></script>

<!-- Controller -->
<script src="../controller/TrackCall.js"></script>

</body>
</html>