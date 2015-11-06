<?php
include_once('messages/strings.php');
require_once('includes/coreunits.php');

?>
<table>
    <tr>
        <th><?= UNIT_OF_MEASURE; ?></th>
        <th><?= NAME; ?></th>
        <th><?= FACTOR; ?></th>
        <th><?= UNIT_CHAR; ?></th>

    </tr>
    <?php $result = []; ?>
    <?php $_SESSION['selected_code'] = $_POST['code']; ?>
   <?php  usort($coreunitslist, function ($elem1, $elem2) {

       return strcmp($elem1['unitchar'], $elem2['unitchar']);
   });
   ?>

    <?php foreach ($coreunitslist as $key => $val): ?>
        <?php $result[$key]['unitchar'] = $val['unitchar'];
        $result[$key]['name'] = $val['name'];?>
        <tr>
            <td><?= $val['unitchar']; ?></td>
            <td><?= $val['name']; ?></td>
            <td><?php if($val['factor'] != 0) echo $val['factor']; ?></td>
            <td><?= $val['coreunit']; ?></td>

        </tr>

    <?php endforeach; ?>
</table>
<?php $_SESSION['result'] = $result; ?>

