<?php
    system("gpio -g mode 14 out");
    system("gpio -g write 14 1");

    $res = array('status' => 'OK');
    echo json_encode($res);
?>