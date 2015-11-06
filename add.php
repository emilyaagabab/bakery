<?php
namespace controllers;
use config\dbcon;

require_once('config/dbcon.php');
require_once('controllers/add.php');
require_once('controllers/all.php');
include_once('messages/strings.php');
$con = new dbcon();
$con->getInstance();

?>  <?php $product = new Add(); ?>
<?php $result = $product->getAll(); ?>
<?php $_SESSION['selected_code'] = $_POST['code']; ?>
<?php $_SESSION['result'] = $result; ?>

<table>
    <tr>

        <th><?= UNIT_OF_MEASURE;?></th>
        <th><?= NAME;?></th>
        <th><?= FACTOR;?></th>
        <th><?= UNIT_CHAR;?></th>
    </tr>

    <?php foreach ($result as $val): ?>
        <?php if ($val['softwareid'] !== "" && $val['softwareid'] !== " "): ?>
            <tr>

                <td><?= $val['softwareid']; ?></td>
                <td><?= $val['name']; ?></td>
                <td><?php if($val['factor'] != 0) echo $val['factor']; ?></td>
                <td><?= $val['coreunit']; ?></td>

            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>


