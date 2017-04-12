<?php
    system("gpio -g mode 18 out");
    system("gpio -g write 18 0");

    $res = array('status' => 'OK');
    echo json_encode($res);
?>