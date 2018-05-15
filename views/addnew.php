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
    
    <div class="row justify-content-between">
        <div class="col-4">
            <div class="d-inline" id="status">
            <div class="custom-control custom-radio d-inline">
            <input type="radio" id="status-green" name="customRadio" class="custom-control-input" checked="true">
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
</div>
          <!-- <div class="col-2">
          <button id="submit" class="btn btn-secondary d-inline">Submit</button>
            <button id="back" class="btn btn-secondary d-inline">Back</button>
          </div>     -->
          
    </div>
    <div class="mt-20"><label for="">Select Category</label></div>                
    <select class="form-control custom-textbox" id="category">
    </select>
    <div class="row justify-content-around mt-20">
        <div class="col-3 ">
            <label  for="">Client Name <span class="required"> *</span></label>
            <input type="text" name="" id="client-name" class="form-control-sm custom-textbox w-100">
        </div>
        <div class="col-3 ">
            <label for="">Process Name<span class="required"> *</span></label>            
            <input type="text" name="" id="process-name" class=" form-control-sm custom-textbox w-100" >
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

        <div class="row justify-content-between mt-20"> 
        <div class="col-3">
        <label for="">Project Start Date</label>                       
            <input type="date" name="" id="project-start-date" class="form-control-sm custom-textbox w-100" >
        </div>
        <div class="col-3">
        <label for="">Project End Date</label>                       
            <input type="date" name="" id="project-end-date" class="form-control-sm custom-textbox w-100" >
        </div>
       <div class="col-3">
        <label for="">Current Status</label>                       
        <select class="form-control custom-textbox" id="current-status">
        <option value=""></option>        
        <option value="Demo">Demo</option>
        <option value="Kick off call">Kick off call</option>
        <option value="POT">POT</option>
        <option value="POC">POC</option>
        <option value="SOW Sign Off">SOW Sign Off</option>
        <option value="OLA Sign Off">OLA Sign Off</option>
        <option value="Resource Allocation">Resource Allocation</option>
        <option value="Process Walkthrough">Process Walkthrough</option>
        <option value="Testing">Testing</option>
        <option value="Deployment">Deployment</option>
        <option value="Process Change">Process Change</option>
        </select>
        </div>
        <div class="col-3">
        <label for="">Opportunity Status</label>                       
            <input type="text" name="" id="opportunity-status" class="form-control-sm custom-textbox w-100" >
        </div>
        </div>
        
        <div class="row custom-text mt-20 ">
            <label class="w-100">Current Updates
            <button class="btn-expand" data-toggle="collapse" href="#current-updates-textarea" role="button" aria-expanded="false" aria-controls="collapseExample"> &#x25BC;</button>                
            </label>
            <textarea name="" id="current-updates-textarea" cols="30" rows="2" class="collapse form-control" ></textarea>
        
        </div>
        <div class="row custom-text mt-20 ">
        <label class="w-100">Conversational History 
            <button class="btn-expand" data-toggle="collapse" href="#conversational-history-textarea" role="button" aria-expanded="false" aria-controls="collapseExample"> &#x25BC;</button>                
            </label>
            
            <textarea name="" id="conversational-history-textarea" cols="20" rows="2" class="collapse form-control" ></textarea>
        </div>

        
        <div class="row custom-text mt-20">
        <label class="w-100">Prodapt Participants
            <button class="btn-expand" data-toggle="collapse" href="#prodapt-participants-textarea" role="button" aria-expanded="false" aria-controls="collapseExample"> &#x25BC;</button>                
            </label>
        
            <textarea name=""  cols="20" rows="2" class="collapse form-control" id="prodapt-participants-textarea" ></textarea>
        </div>
        <div class="row custom-text mt-20 ">
        <label class="w-100">Discussion Points
            <button class="btn-expand" data-toggle="collapse" href="#discussion-points-textarea" role="button" aria-expanded="false" aria-controls="collapseExample"> &#x25BC;</button>                
            </label>
        
            <textarea name="" id="discussion-points-textarea" cols="20" rows="2" class="collapse form-control" ></textarea>    
        </div>
        <div class="row custom-text mt-20">
        <label class="w-100">Next Steps
            <button class="btn-expand" data-toggle="collapse" href="#next-steps-textarea" role="button" aria-expanded="false" aria-controls="collapseExample"> &#x25BC;</button>                
            </label>
            
            <textarea name="" id="next-steps-textarea" cols="20" rows="2" class="collapse form-control" ></textarea>
        </div>
        

        <div class="row mt-20 justify-content-around">
            <div class="col-2">
            <button id="submit" class="btn btn-secondary ">Submit</button>
            <button id="back" class="btn btn-secondary ">Back</button>
            </div>
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