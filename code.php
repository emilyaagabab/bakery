<?php
namespace controllers;
use config\dbcon;

?>
<?php

require_once('config/dbcon.php');
require_once('controllers/add.php');
require_once('controllers/all.php');

$con = new dbcon();
$con->getInstance();
?>
<?php if (isset($_POST['msg'])): ?>
    <?php $product = new Product(); ?>
    <?php $result = $product->getCodes();
    echo $result; ?>
<?php endif;?>