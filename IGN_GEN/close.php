<?php
    system("gpio -g mode 2 out");
    system("gpio -g write 2 0");

    $res = array('status' => 'OK', 'op' => 'CLOSE IGN_GEN');
    echo json_encode($res);
?>
