<?php
    system("gpio -g mode 17 out");
    system("gpio -g write 17 0");

    $res = array('status' => 'OK');
    echo json_encode($res);
?>