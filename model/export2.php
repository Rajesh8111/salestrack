<?php
    require_once '../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php';
    $inputFileName = '../Template/sample.xls';
    
    /** Load $inputFileName to a PHPExcel Object  **/
    $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

    echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' using IOFactory to identify the format<br />';
    $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    echo '<hr />';
    $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    var_dump($sheetData);



    
?>