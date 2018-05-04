<?php
    session_start();

    require_once('../config/connect.php');
    require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load('../Template/template.xlsx');

//Load Data for Windstream Telco Green
$sql = "SELECT @rownum := @rownum + 1 AS rank,client_name,process_name,current_update,conversational_history,region,client_contact_name,client_contact_designation,sales_spoc,first_meet,second_meet,prodapt_participants,discussion_points,client_feedback,next_steps,responsible,target_date,remarks,project_start_date,project_end_date,last_updated,'Green','Win Telco',current_status,opportunity_status  from calls join mapping on calls.id=mapping.call_id  join category on "
."category.id=mapping.category_id where calls.id in "
."(SELECT call_id FROM mapping where category_id='1' and status_id='1')";
$worksheet = $spreadsheet->getSheet(1);

    $num =4;
    if ($res = mysqli_query($con,$sql)) {
        while($r = mysqli_fetch_array($res)) {
            $worksheet->getCell('A'.$num)->setValue($num-3);
            $worksheet->getCell('B'.$num)->setValue($r[1]);
            $worksheet->getCell('C'.$num)->setValue($r[2]);
            $worksheet->getCell('D'.$num)->setValue($r[3]);
            $worksheet->getCell('E'.$num)->setValue($r[4]);
            $worksheet->getCell('F'.$num)->setValue($r[5]);
            $worksheet->getCell('G'.$num)->setValue($r[6]);
            $worksheet->getCell('H'.$num)->setValue($r[7]);
            $worksheet->getCell('I'.$num)->setValue($r[8]);
            $worksheet->getCell('J'.$num)->setValue($r[9]);
            $worksheet->getCell('K'.$num)->setValue($r[10]);
            $worksheet->getCell('L'.$num)->setValue($r[11]);
            $worksheet->getCell('M'.$num)->setValue($r[12]);
            $worksheet->getCell('N'.$num)->setValue($r[13]);
            $worksheet->getCell('O'.$num)->setValue($r[14]);
            $worksheet->getCell('P'.$num)->setValue($r[15]);
            $worksheet->getCell('Q'.$num)->setValue($r[16]);
            $worksheet->getCell('R'.$num)->setValue($r[17]);
            $worksheet->getCell('S'.$num)->setValue($r[18]);
            $worksheet->getCell('T'.$num)->setValue($r[19]);
            $worksheet->getCell('U'.$num)->setValue($r[20]);
            $worksheet->getCell('V'.$num)->setValue($r[21]);
            $worksheet->getCell('W'.$num)->setValue($r[22]);
            $worksheet->getCell('X'.$num)->setValue($r[23]);
            $worksheet->getCell('Y'.$num)->setValue($r[24]);
            //$worksheet->fromArray($r, NULL, 'A'.$num); 
            $num=$num+1;
          }
    }

    //Load Data for Other Telco Green
$sql = "SELECT @rownum := @rownum + 1 AS rank,client_name,process_name,current_update,conversational_history,region,client_contact_name,client_contact_designation,sales_spoc,first_meet,second_meet,prodapt_participants,discussion_points,client_feedback,next_steps,responsible,target_date,remarks,project_start_date,project_end_date,last_updated,'Green','Win Telco',current_status,opportunity_status  from calls join mapping on calls.id=mapping.call_id  join category on "
."category.id=mapping.category_id where calls.id in "
."(SELECT call_id FROM mapping where category_id='2' and status_id='1')";
$worksheet = $spreadsheet->getSheet(2);

    $num =4;
    if ($res = mysqli_query($con,$sql)) {
        while($r = mysqli_fetch_array($res)) {
            $worksheet->getCell('A'.$num)->setValue($num-3);
            $worksheet->getCell('B'.$num)->setValue($r[1]);
            $worksheet->getCell('C'.$num)->setValue($r[2]);
            $worksheet->getCell('D'.$num)->setValue($r[3]);
            $worksheet->getCell('E'.$num)->setValue($r[4]);
            $worksheet->getCell('F'.$num)->setValue($r[5]);
            $worksheet->getCell('G'.$num)->setValue($r[6]);
            $worksheet->getCell('H'.$num)->setValue($r[7]);
            $worksheet->getCell('I'.$num)->setValue($r[8]);
            $worksheet->getCell('J'.$num)->setValue($r[9]);
            $worksheet->getCell('K'.$num)->setValue($r[10]);
            $worksheet->getCell('L'.$num)->setValue($r[11]);
            $worksheet->getCell('M'.$num)->setValue($r[12]);
            $worksheet->getCell('N'.$num)->setValue($r[13]);
            $worksheet->getCell('O'.$num)->setValue($r[14]);
            $worksheet->getCell('P'.$num)->setValue($r[15]);
            $worksheet->getCell('Q'.$num)->setValue($r[16]);
            $worksheet->getCell('R'.$num)->setValue($r[17]);
            $worksheet->getCell('S'.$num)->setValue($r[18]);
            $worksheet->getCell('T'.$num)->setValue($r[19]);
            $worksheet->getCell('U'.$num)->setValue($r[20]);
            $worksheet->getCell('V'.$num)->setValue($r[21]);
            $worksheet->getCell('W'.$num)->setValue($r[22]);
            $worksheet->getCell('X'.$num)->setValue($r[23]);
            $worksheet->getCell('Y'.$num)->setValue($r[24]);
            //$worksheet->fromArray($r, NULL, 'A'.$num); 
            $num=$num+1;
          }
    }

    //Load Data for Telco Amber
$sql = "SELECT @rownum := @rownum + 1 AS rank,client_name,process_name,current_update,conversational_history,region,client_contact_name,client_contact_designation,sales_spoc,first_meet,second_meet,prodapt_participants,discussion_points,client_feedback,next_steps,responsible,target_date,remarks,project_start_date,project_end_date,last_updated,'Amber',(Select category from category as cat where cat.id=(select status_id from mapping where call_id=calls.id)),current_status,opportunity_status  from calls join mapping on calls.id=mapping.call_id  join category on "
."category.id=mapping.category_id where calls.id in "
."(SELECT call_id FROM mapping where category_id in ('1','2') and status_id='3')";
$worksheet = $spreadsheet->getSheet(3);

    $num =4;
    if ($res = mysqli_query($con,$sql)) {
        while($r = mysqli_fetch_array($res)) {
            $worksheet->getCell('A'.$num)->setValue($num-3);
            $worksheet->getCell('B'.$num)->setValue($r[1]);
            $worksheet->getCell('C'.$num)->setValue($r[2]);
            $worksheet->getCell('D'.$num)->setValue($r[3]);
            $worksheet->getCell('E'.$num)->setValue($r[4]);
            $worksheet->getCell('F'.$num)->setValue($r[5]);
            $worksheet->getCell('G'.$num)->setValue($r[6]);
            $worksheet->getCell('H'.$num)->setValue($r[7]);
            $worksheet->getCell('I'.$num)->setValue($r[8]);
            $worksheet->getCell('J'.$num)->setValue($r[9]);
            $worksheet->getCell('K'.$num)->setValue($r[10]);
            $worksheet->getCell('L'.$num)->setValue($r[11]);
            $worksheet->getCell('M'.$num)->setValue($r[12]);
            $worksheet->getCell('N'.$num)->setValue($r[13]);
            $worksheet->getCell('O'.$num)->setValue($r[14]);
            $worksheet->getCell('P'.$num)->setValue($r[15]);
            $worksheet->getCell('Q'.$num)->setValue($r[16]);
            $worksheet->getCell('R'.$num)->setValue($r[17]);
            $worksheet->getCell('S'.$num)->setValue($r[18]);
            $worksheet->getCell('T'.$num)->setValue($r[19]);
            $worksheet->getCell('U'.$num)->setValue($r[20]);
            $worksheet->getCell('V'.$num)->setValue($r[21]);
            $worksheet->getCell('W'.$num)->setValue($r[22]);
            $worksheet->getCell('X'.$num)->setValue($r[23]);
            $worksheet->getCell('Y'.$num)->setValue($r[24]);
            //$worksheet->fromArray($r, NULL, 'A'.$num); 
            $num=$num+1;
          }
    }

    //Load Data for Telco Amber
$sql = "SELECT @rownum := @rownum + 1 AS rank,client_name,process_name,current_update,conversational_history,region,client_contact_name,client_contact_designation,sales_spoc,first_meet,second_meet,prodapt_participants,discussion_points,client_feedback,next_steps,responsible,target_date,remarks,project_start_date,project_end_date,last_updated,'Red',(Select category from category as cat where cat.id=(select status_id from mapping where call_id=calls.id)),current_status,opportunity_status  from calls join mapping on calls.id=mapping.call_id  join category on "
."category.id=mapping.category_id where calls.id in "
."(SELECT call_id FROM mapping where category_id in ('1','2') and status_id='2')";
$worksheet = $spreadsheet->getSheet(4);

    $num =4;
    if ($res = mysqli_query($con,$sql)) {
        while($r = mysqli_fetch_array($res)) {
            $worksheet->getCell('A'.$num)->setValue($num-3);
            $worksheet->getCell('B'.$num)->setValue($r[1]);
            $worksheet->getCell('C'.$num)->setValue($r[2]);
            $worksheet->getCell('D'.$num)->setValue($r[3]);
            $worksheet->getCell('E'.$num)->setValue($r[4]);
            $worksheet->getCell('F'.$num)->setValue($r[5]);
            $worksheet->getCell('G'.$num)->setValue($r[6]);
            $worksheet->getCell('H'.$num)->setValue($r[7]);
            $worksheet->getCell('I'.$num)->setValue($r[8]);
            $worksheet->getCell('J'.$num)->setValue($r[9]);
            $worksheet->getCell('K'.$num)->setValue($r[10]);
            $worksheet->getCell('L'.$num)->setValue($r[11]);
            $worksheet->getCell('M'.$num)->setValue($r[12]);
            $worksheet->getCell('N'.$num)->setValue($r[13]);
            $worksheet->getCell('O'.$num)->setValue($r[14]);
            $worksheet->getCell('P'.$num)->setValue($r[15]);
            $worksheet->getCell('Q'.$num)->setValue($r[16]);
            $worksheet->getCell('R'.$num)->setValue($r[17]);
            $worksheet->getCell('S'.$num)->setValue($r[18]);
            $worksheet->getCell('T'.$num)->setValue($r[19]);
            $worksheet->getCell('U'.$num)->setValue($r[20]);
            $worksheet->getCell('V'.$num)->setValue($r[21]);
            $worksheet->getCell('W'.$num)->setValue($r[22]);
            $worksheet->getCell('X'.$num)->setValue($r[23]);
            $worksheet->getCell('Y'.$num)->setValue($r[24]);
            //$worksheet->fromArray($r, NULL, 'A'.$num); 
            $num=$num+1;
          }
    }

//Load Data for Telco Amber
$sql = "SELECT @rownum := @rownum + 1 AS rank,client_name,process_name,current_update,conversational_history,region,client_contact_name,client_contact_designation,sales_spoc,first_meet,second_meet,prodapt_participants,discussion_points,client_feedback,next_steps,responsible,target_date,remarks,project_start_date,project_end_date,last_updated,(Select status from status as st where st.id=(select status_id from mapping where call_id=calls.id)),(Select category from category as cat where cat.id=(select category_id from mapping where call_id=calls.id)),current_status,opportunity_status  from calls join mapping on calls.id=mapping.call_id  join category on "
."category.id=mapping.category_id where calls.id in "
."(SELECT call_id FROM mapping where category_id ='3')";
$worksheet = $spreadsheet->getSheet(5);

    $num =4;
    if ($res = mysqli_query($con,$sql)) {
        while($r = mysqli_fetch_array($res)) {
            $worksheet->getCell('A'.$num)->setValue($num-3);
            $worksheet->getCell('B'.$num)->setValue($r[1]);
            $worksheet->getCell('C'.$num)->setValue($r[2]);
            $worksheet->getCell('D'.$num)->setValue($r[3]);
            $worksheet->getCell('E'.$num)->setValue($r[4]);
            $worksheet->getCell('F'.$num)->setValue($r[5]);
            $worksheet->getCell('G'.$num)->setValue($r[6]);
            $worksheet->getCell('H'.$num)->setValue($r[7]);
            $worksheet->getCell('I'.$num)->setValue($r[8]);
            $worksheet->getCell('J'.$num)->setValue($r[9]);
            $worksheet->getCell('K'.$num)->setValue($r[10]);
            $worksheet->getCell('L'.$num)->setValue($r[11]);
            $worksheet->getCell('M'.$num)->setValue($r[12]);
            $worksheet->getCell('N'.$num)->setValue($r[13]);
            $worksheet->getCell('O'.$num)->setValue($r[14]);
            $worksheet->getCell('P'.$num)->setValue($r[15]);
            $worksheet->getCell('Q'.$num)->setValue($r[16]);
            $worksheet->getCell('R'.$num)->setValue($r[17]);
            $worksheet->getCell('S'.$num)->setValue($r[18]);
            $worksheet->getCell('T'.$num)->setValue($r[19]);
            $worksheet->getCell('U'.$num)->setValue($r[20]);
            $worksheet->getCell('V'.$num)->setValue($r[21]);
            $worksheet->getCell('W'.$num)->setValue($r[22]);
            $worksheet->getCell('X'.$num)->setValue($r[23]);
            $worksheet->getCell('Y'.$num)->setValue($r[24]);
            //$worksheet->fromArray($r, NULL, 'A'.$num); 
            $num=$num+1;
          }
    }

    
$worksheet = $spreadsheet->getSheet(0);
//Pipeline in Win Telco - Green
$sql = "select count(id) from mapping where category_id='1' and status_id='1' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('D9')->setValue($r[0]);

//Pipeline in Other Telco - Green
$sql = "select count(id) from mapping where category_id='2' and status_id='1' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('D10')->setValue($r[0]);


//Pipeline in Non Telco - Green
$sql = "select count(id) from mapping where category_id='3' and status_id='1' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('D11')->setValue($r[0]);

//Pipeline in Win Telco - Amber
$sql = "select count(id) from mapping where category_id='1' and status_id='3' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('E9')->setValue($r[0]);

//Pipeline in Other Telco - Amber
$sql = "select count(id) from mapping where category_id='2' and status_id='3' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('E10')->setValue($r[0]);


//Pipeline in Non Telco - Amber
$sql = "select count(id) from mapping where category_id='3' and status_id='3' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('E11')->setValue($r[0]);

//Pipeline in Win Telco - Red
$sql = "select count(id) from mapping where category_id='1' and status_id='2' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('F9')->setValue($r[0]);

//Pipeline in Other Telco - Red
$sql = "select count(id) from mapping where category_id='2' and status_id='2' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('F10')->setValue($r[0]);


//Pipeline in Non Telco - Red
$sql = "select count(id) from mapping where category_id='3' and status_id='2' and Enabled='1'";
$res = mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
$worksheet->getCell('F11')->setValue($r[0]);

$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=\"results.xlsx\"");
$writer->save("php://output"); 