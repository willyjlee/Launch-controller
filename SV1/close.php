<?php
    system("gpio -g mode 4 out");
    system("gpio -g write 4 0");

    $res = array('status' => 'OK');
    echo json_encode($res);
?>