<?php
    system("gpio -g mode 4 out");
    system("gpio -g write 4 1");

    $res = array('status' => 'OK', 'op' => 'OPEN SV1');
    echo json_encode($res);
?>