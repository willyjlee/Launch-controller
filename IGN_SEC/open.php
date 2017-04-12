<?php
    system("gpio -g mode 18 out");
    system("gpio -g write 18 1");

    $res = array('status' => 'OK', 'op' => 'OPEN IGN_SEC');
    echo json_encode($res);
?>