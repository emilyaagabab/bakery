<?php
namespace controllers;

use config\dbcon;

session_start();

require_once('config/dbcon.php');
require_once('controllers/add.php');
require_once('controllers/all.php');
include_once('messages/strings.php');
//$con = new dbcon();
//$con->getInstance();
//
//$product = new Product();
//$result = $product->getAll($_SESSION['selected_code']);
$data = $_SESSION['result'];


// file name for download
$filename = $_SESSION['selected_code'] .UNIT. date('Ymd') . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$flag = false;
foreach ($data as $row) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\n";
        $flag = true;
    }

    echo implode("\t", array_values($row)) . "\n";
}
if(!empty($_SESSION['coreunitslist'])){
    $flag = false;
    $data = $_SESSION['coreunitslist'];
    foreach ($data as $row) {
        if (!$flag) {
            // display field/column names as first row
            echo implode("\t", array_keys($row)) . "\n";
            $flag = true;
        }

        echo implode("\t", array_values($row)) . "\n";
    }
}
exit;
?>