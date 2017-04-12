<?php
    system("gpio -g mode 15 out");
    system("gpio -g write 15 1");

    $res = array('status' => 'OK');
    echo json_encode($res);
?>