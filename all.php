<?php
namespace controllers;

use config\dbcon;

require_once('config/dbcon.php');
require_once('controllers/add.php');
require_once('includes/coreunits.php');
include_once('messages/strings.php');
$con = new dbcon();
$con->getInstance();
?>
    <table>
        <tr>
            <th><?= UNIT_OF_MEASURE; ?></th>
            <th><?= NAME; ?></th>
            <th><?= FACTOR; ?></th>
            <th><?= UNIT_CHAR; ?></th>

        </tr>
        <?php $product = new Add(); ?>
        <?php $result = $product->getAll(); ?>
        <?php $_SESSION['selected_code'] = $_POST['code']; ?>
        <?php $_SESSION['result'] = $result; ?>
        <?php $coreunit = [];
        $arr = [];?>

        <?php $step = 0; ?>
        <?php foreach ($result as $val): ?>
            <?php if ($val['softwareid'] !== "" && $val['softwareid'] !== " "): ?>
                <?php $arr[$step]['unitchar'] = $val['softwareid'];
                $arr[$step]['name'] = $val['name'];
                $arr[$step]['factor'] = $val['factor'];
                $arr[$step]['coreunit'] = $val['coreunit'];?>

            <?php endif; ?>
            <?php $step++; ?>
        <?php endforeach; ?>

        <?php foreach ($coreunitslist as $key => $val): ?>
            <?php $coreunit[$key]['unitchar'] = $val['unitchar'];
            $arr[$step]['unitchar'] = $val['unitchar'];
            $coreunit[$key]['name'] = $val['name'];
            $arr[$step]['name'] = $val['name'];
            $coreunit[$key]['factor'] = $val['factor'];
            $arr[$step]['factor'] = $val['factor'];
            $coreunit[$key]['coreunit'] = $val['coreunit'];
            $arr[$step]['coreunit'] = $val['coreunit'];
            ?>

            <?php $step++; ?>
        <?php endforeach; ?>
        <?php  usort($arr, function ($elem1, $elem2) {

            return strcmp($elem1['unitchar'], $elem2['unitchar']);
        });
       ?>

        <?php foreach ($arr as $val): ?>
            <tr>

                <td><?= $val['unitchar']; ?></td>
                <td><?= $val['name']; ?></td>
                <td><?php if($val['factor'] != 0) echo $val['factor']; ?></td>
                <td><?= $val['coreunit']; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>

<?php $_SESSION['coreunitslist'] = $coreunit; ?>