<?php
    system("gpio -g mode 14 out");
    system("gpio -g write 14 1");

    $res = array('status' => 'OK', 'op' => 'OPEN SV2');
    echo json_encode($res);
?>