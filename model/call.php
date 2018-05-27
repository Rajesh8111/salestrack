<?php
    session_start();

    require_once('../config/connect.php');


    if(isset($_REQUEST['method'])){
    $method=$_REQUEST['method'];

    switch($method){
        case 'add_new':

                //Prepare Inputs
                $status = mysqli_real_escape_string($con, $_POST['status']);        
                $category = mysqli_real_escape_string($con, $_POST['category']);        
                $client_name = mysqli_real_escape_string($con, $_POST['client_name']);        
                $process_name = mysqli_real_escape_string($con, $_POST['process_name']);        
                $region = mysqli_real_escape_string($con, $_POST['region']);        
                $client_contact_name = mysqli_real_escape_string($con, $_POST['client_contact_name']);        
                $client_contact_designation = mysqli_real_escape_string($con, $_POST['client_contact_designation']);        
                $sales_spoc = mysqli_real_escape_string($con, $_POST['sales_spoc']);        
                $first_meet = mysqli_real_escape_string($con, $_POST['first_meet']);        
                $second_meet = mysqli_real_escape_string($con, $_POST['second_meet']);        
                $responsible = mysqli_real_escape_string($con, $_POST['responsible']);        
                $client_feedback = mysqli_real_escape_string($con, $_POST['client_feedback']);        
                $current_updates = mysqli_real_escape_string($con, $_POST['current_updates']);        
                $conversational_history = mysqli_real_escape_string($con, $_POST['conversational_history']);        
                $prodapt_participants = mysqli_real_escape_string($con, $_POST['prodapt_participants']);        
                $discussion_points = mysqli_real_escape_string($con, $_POST['discussion_points']);        
                $next_steps = mysqli_real_escape_string($con, $_POST['next_steps']);        
                $target_date = mysqli_real_escape_string($con, $_POST['target_date']);        
                $remarks = mysqli_real_escape_string($con, $_POST['remarks']);       
                $project_start_date = mysqli_real_escape_string($con, $_POST['project_start_date']);       
                $project_end_date = mysqli_real_escape_string($con, $_POST['project_end_date']);       
                $current_status = mysqli_real_escape_string($con, $_POST['current_status']);       
                $opportunity_status = mysqli_real_escape_string($con, $_POST['opportunity_status']);     
                $created_date = date('Y-m-d');  
                
                $sql = "insert into calls (client_name,process_name,current_update,conversational_history,region,"
                    ."client_contact_name,client_contact_designation,sales_spoc,first_meet,second_meet,prodapt_participants,"
                    ."discussion_points,client_feedback,next_steps,target_date,remarks,responsible,project_start_date,project_end_date,current_status,opportunity_status,created_date)"
                    ." values('$client_name','$process_name','$current_updates','$conversational_history','$region',"
                    ."'$client_contact_name','$client_contact_designation','$sales_spoc','$first_meet','$second_meet','$prodapt_participants',"
                    ."'$discussion_points','$client_feedback','$next_steps','$target_date','$remarks','$responsible','$project_start_date','$project_end_date','$current_status','$opportunity_status','$created_date')";

                if (mysqli_query($con,$sql)) {
                    $call_id  = mysqli_insert_id($con);
                    $user_id = $_SESSION['id'];

                    $sql = "insert into mapping (user_id,call_id,category_id,status_id,Enabled) values('$user_id','$call_id','$category','$status','1')";

                    if (mysqli_query($con,$sql)) {

                        //Inserting track on Activity monitor
                        $userName =  $_SESSION['name'];                        
                        $sql = "insert into activity (processName,activity,userName) values('$process_name','added','$userName')";
                        if (mysqli_query($con,$sql)) {
                            echo "true";
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
                }
                else{
                    die('Error: ' . mysqli_error($con));
                    return false;
                }
        break;
        case 'listcalls':
        $status = mysqli_real_escape_string($con, $_POST['status']);        
        $category = mysqli_real_escape_string($con, $_POST['category']);      
        $user = $_SESSION["id"]; 
       if(strtolower($status)=="all" && strtolower($category)=="all"){
        $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
        ."category.id=mapping.category_id where calls.id in "
        ."(SELECT call_id FROM mapping where  category_id in "
        ."(SELECT id from category) and status_id in "
        ."(SELECT id from status)) and Enabled='1' order by created_date";
       }
        else if(strtolower($status)=="all"){
        $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
        ."category.id=mapping.category_id where calls.id in "
        ."(SELECT call_id FROM mapping where  category_id in "
        ."(SELECT id from category where category='$category') and status_id in "
        ."(SELECT id from status)) and Enabled='1' order by created_date";
       }
       else if (strtolower($category)=="all"){
        $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
        ."category.id=mapping.category_id where calls.id in "
        ."(SELECT call_id FROM mapping where  category_id in "
        ."(SELECT id from category) and status_id in "
        ."(SELECT id from status where status='$status')) and Enabled='1' order by created_date";
       }
       else{               
        $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
        ."category.id=mapping.category_id where calls.id in "
        ."(SELECT call_id FROM mapping where  category_id in "
        ."(SELECT id from category where category='$category') and status_id in "
        ."(SELECT id from status where status='$status')) and Enabled='1' order by created_date";
       }
       
                $rows = array();
                if ($res = mysqli_query($con,$sql)) {
                    while($r = mysqli_fetch_array($res)) {
                        $rows['object_name'][] = $r;
                      }
                      print json_encode($rows);
                     //print $sql;
                     
                     return true;
                }
                else{
                    die('Error: ' . mysqli_error($con));
                    return false;
                }
                
        break;
        case 'populate_data':

                $id = mysqli_real_escape_string($con, $_POST['id']);
                $user = $_SESSION["id"];         
                $sql="SELECT *  from calls join mapping on calls.id=mapping.call_id where calls.id in (select call_id from mapping where call_id='$id')";
                if ($res = mysqli_query($con,$sql)) {
                    $r = mysqli_fetch_array($res);
                    print json_encode($r);
                    return true;
                }
                else{
                    die('Error: ' . mysqli_error($con));
                    return false;
                }
        break;
        case 'modify':
            //Prepare Inputs
            $id = mysqli_real_escape_string($con, $_POST['id']);                    
            $status = mysqli_real_escape_string($con, $_POST['status']);        
            $category = mysqli_real_escape_string($con, $_POST['category']);        
            $client_name = mysqli_real_escape_string($con, $_POST['client_name']);        
            $process_name = mysqli_real_escape_string($con, $_POST['process_name']);        
            $region = mysqli_real_escape_string($con, $_POST['region']);        
            $client_contact_name = mysqli_real_escape_string($con, $_POST['client_contact_name']);        
            $client_contact_designation = mysqli_real_escape_string($con, $_POST['client_contact_designation']);        
            $sales_spoc = mysqli_real_escape_string($con, $_POST['sales_spoc']);        
            $first_meet = mysqli_real_escape_string($con, $_POST['first_meet']);        
            $second_meet = mysqli_real_escape_string($con, $_POST['second_meet']);        
            $responsible = mysqli_real_escape_string($con, $_POST['responsible']);        
            $client_feedback = mysqli_real_escape_string($con, $_POST['client_feedback']);        
            $current_updates = mysqli_real_escape_string($con, $_POST['current_updates']);        
            $conversational_history = mysqli_real_escape_string($con, $_POST['conversational_history']);        
            $prodapt_participants = mysqli_real_escape_string($con, $_POST['prodapt_participants']);        
            $discussion_points = mysqli_real_escape_string($con, $_POST['discussion_points']);        
            $next_steps = mysqli_real_escape_string($con, $_POST['next_steps']);        
            $target_date = mysqli_real_escape_string($con, $_POST['target_date']);        
            $remarks = mysqli_real_escape_string($con, $_POST['remarks']);       
            $project_start_date = mysqli_real_escape_string($con, $_POST['project_start_date']);       
            $project_end_date = mysqli_real_escape_string($con, $_POST['project_end_date']);       
            $current_status = mysqli_real_escape_string($con, $_POST['current_status']);       
            $opportunity_status = mysqli_real_escape_string($con, $_POST['opportunity_status']);   

            $sql = "update calls set client_name='$client_name',process_name='$process_name',current_update='$current_updates',".
            "conversational_history='$conversational_history',region='$region',client_contact_name='$client_contact_name',".
            "client_contact_designation='$client_contact_designation',sales_spoc='$sales_spoc',first_meet='$first_meet',".
            "second_meet='$second_meet',prodapt_participants='$prodapt_participants',discussion_points='$discussion_points',".
            "client_feedback='$client_feedback',next_steps='$next_steps',target_date='$target_date',remarks='$remarks',responsible='$responsible',".
            "project_start_date='$project_start_date',project_end_date='$project_end_date',current_status='$current_status',opportunity_status='$opportunity_status'".
            "where id='$id'";


            if (mysqli_query($con,$sql)) {

                //Update Mappings

                $sql = "update mapping set category_id='$category',status_id='$status' where call_id='$id'";
                if (mysqli_query($con,$sql)) {
                    
                    //Inserting track on Activity monitor
                    $userName =  $_SESSION['name'];                        
                    $sql = "insert into activity (processName,activity,userName) values('$process_name','modified','$userName')";
                    if (mysqli_query($con,$sql)) {
                        echo "true";
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
            }

            else{
                die('Error: ' . mysqli_error($con));
                return false;
            }

        break;
        case 'removecall':
            $id = mysqli_real_escape_string($con, $_POST['call_id']);
            $sql = "update mapping set Enabled='0' where call_id=$id";
            if (mysqli_query($con,$sql)) {
                
                //Inserting track on Activity monitor
                $userName =  $_SESSION['name'];                        
                $sql = "insert into activity (processName,activity,userName) values('$process_name','removed','$userName')";
                if (mysqli_query($con,$sql)) {
                    echo "true";
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
        case 'getTopActivities':
            
            $sql = "SELECT * from activity order by timestamp limit 10";
            $rows = array();
            if ($res = mysqli_query($con,$sql)) {
                while($r = mysqli_fetch_array($res)) {
                    $rows[] = $r;
                  }
                  print json_encode($rows);
                 //print $sql;
                 
                 return true;
            }
            else{
                die('Error: ' . mysqli_error($con));
                return false;
            }

        break;
        case 'export': 
            $filename = "Calls";  //your_file_name
            $file_ending = "xls";   //file_extention
            
            header("Content-Type: application/xls");    
            header("Content-Disposition: attachment; filename=$filename.xls");  
            header("Pragma: no-cache"); 
            header("Expires: 0");
            
            $sep = "\t";
            $status = mysqli_real_escape_string($con, $_REQUEST['status']);        
            $category = mysqli_real_escape_string($con, $_REQUEST['category']);      
            $user = $_SESSION["id"]; 
            if(strtolower($status)=="all" && strtolower($category)=="all"){
                $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
                ."category.id=mapping.category_id where calls.id in "
                ."(SELECT call_id FROM mapping where user_id='$user' and category_id in "
                ."(SELECT id from category) and status_id in "
                ."(SELECT id from status)) and Enabled='1' order by created_date";
            }
                else if(strtolower($status)=="all"){
                $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
                ."category.id=mapping.category_id where calls.id in "
                ."(SELECT call_id FROM mapping where user_id='$user' and category_id in "
                ."(SELECT id from category where category='$category') and status_id in "
                ."(SELECT id from status)) and Enabled='1' order by created_date";
            }
            else if (strtolower($category)=="all"){
                $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
                ."category.id=mapping.category_id where calls.id in "
                ."(SELECT call_id FROM mapping where user_id='$user' and category_id in "
                ."(SELECT id from category) and status_id in "
                ."(SELECT id from status where status='$status')) and Enabled='1' order by created_date";
            }
            else{               
                $sql = "SELECT *  from calls join mapping on calls.id=mapping.call_id  join category on "
                ."category.id=mapping.category_id where calls.id in "
                ."(SELECT call_id FROM mapping where user_id='$user' and category_id in "
                ."(SELECT id from category where category='$category') and status_id in "
                ."(SELECT id from status where status='$status')) and Enabled='1' order by created_date";
            }
            $resultt = $con->query($sql);
            while ($property = mysqli_fetch_field($resultt)) { //fetch table field name
                echo $property->name."\t";
            }
            
            print("\n");    
            
            while($row = mysqli_fetch_row($resultt))  //fetch_table_data
            {
                $schema_insert = "";
                for($j=0; $j< mysqli_num_fields($resultt);$j++)
                {
                    if(!isset($row[$j]))
                        $schema_insert .= "NULL".$sep;
                    elseif ($row[$j] != "")
                        $schema_insert .= "$row[$j]".$sep;
                    else
                        $schema_insert .= "".$sep;
                }
                $schema_insert = str_replace($sep."$", "", $schema_insert);
                $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
                $schema_insert .= "\t";
                print(trim($schema_insert));
                print "\n";

            }
            break;
            case 'load_categories':       
                            $sql="SELECT id,category from category";
                            $rows = array();
                            if ($res = mysqli_query($con,$sql)) {
                                while($r = mysqli_fetch_array($res)) {
                                    $rows['object_name'][] = $r;
                                  }
                                  print json_encode($rows);
                                return true;
                            }
                            else{
                                die('Error: ' . mysqli_error($con));
                                return false;
                            }
                    break;
            case 'load_dashboard':


            $data=array();
            //Pipeline in Win Telco - Green
$sql = "select count(id) from mapping where category_id='1' and status_id='1' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['11']=$r[0];

//Pipeline in Other Telco - Green
$sql = "select count(id) from mapping where category_id='2' and status_id='1' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['21']=$r[0];


//Pipeline in Non Telco - Green
$sql = "select count(id) from mapping where category_id='3' and status_id='1' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['31']=$r[0];

//Pipeline in Win Telco - Amber
$sql = "select count(id) from mapping where category_id='1' and status_id='3' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['13']=$r[0];

//Pipeline in Other Telco - Amber
$sql = "select count(id) from mapping where category_id='2' and status_id='3' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['23']=$r[0];


//Pipeline in Non Telco - Amber
$sql = "select count(id) from mapping where category_id='3' and status_id='3' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['33']=$r[0];

//Pipeline in Win Telco - Red
$sql = "select count(id) from mapping where category_id='1' and status_id='2' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['12']=$r[0];

//Pipeline in Other Telco - Red
$sql = "select count(id) from mapping where category_id='2' and status_id='2' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['22']=$r[0];


//Pipeline in Non Telco - Red
$sql = "select count(id) from mapping where category_id='3' and status_id='2' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$data['32']=$r[0];

print(json_encode($data));
            break;
        }    }
?>