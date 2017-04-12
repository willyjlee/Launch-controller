<?php
    system("gpio -g mode 2 out");
    system("gpio -g write 2 1");
    
    $res = array('status' => 'OK', 'op' => 'OPEN IGN_GEN');
    echo json_encode($res);
?>
