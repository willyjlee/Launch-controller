<?php
    system("gpio -g mode 15 out");
    system("gpio -g write 15 0");

    $res = array('status' => 'OK', 'op' => 'CLOSE SV3');
    echo json_encode($res);
?>