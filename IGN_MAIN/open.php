<?php
    system("gpio -g mode 17 out");
    system("gpio -g write 17 1");

    $res = array('status' => 'OK', 'op' => 'OPEN IGN_MAIN');
    echo json_encode($res);
?>