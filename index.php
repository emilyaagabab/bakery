<?php
namespace controllers;
use config\dbcon;
session_start();

require_once('config/dbcon.php');
require_once('controllers/add.php');
require_once('controllers/all.php');
include_once('messages/strings.php');

$con = new dbcon();
$con->getInstance();
include_once('includes/header.php');
include_once('includes/product_list.php');

?>
<?php if(!empty($_POST)):?>
<?php if ($_POST['code'] == 'add'): ?>
    <?php $_SESSION['code'] = "add"; ?>
    <?php require_once('add.php'); ?>
<?php endif; ?>
<?php if ($_POST['code'] == 'core'): ?>
    <?php $_SESSION['code'] = "core"; ?>
    <?php require_once('coreunits.php'); ?>

<?php endif; ?>
<?php if ($_POST['code'] == 'all'): ?>
    <?php $_SESSION['code'] = "all"; ?>
    <?php require_once('all.php'); ?>
<?php endif; ?>
<?php endif; ?>
<div class="bottom">
    <?php if(!empty($_POST)):?>
    <div><input type="button" onclick="window.print()" value="print"></div>

    <div>
        <form action="excel.php" method="post">
            <input type="submit" value="Export to Excel">
        </form>
    </div>
    <?php endif; ?>
</div>
</div>

</section>
</main>

<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="js/init.js" type="text/javascript"></script>
</body>
</html>