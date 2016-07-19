<?php
require_once "Clock.class.php";

$clock = Clock::factory();

$time = $clock->getTimeString();

$angle = $clock->currentAngle();
?>

<table>
    <tr>
        <th>Time</th>
        <td><?php echo $time; ?></td>
    </tr>
    <tr>
        <th>Angle</th>
        <td><?php echo $angle; ?>&deg;</td>
    </tr>
</table>