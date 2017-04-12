<?php
    system("gpio -g mode 15 out");
    system("gpio -g write 15 1");

    $res = array('status' => 'OK', 'op' => 'OPEN SV3');
    echo json_encode($res);
?>