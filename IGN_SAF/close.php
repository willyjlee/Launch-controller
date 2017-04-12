<?php
    system("gpio -g mode 3 out");
    system("gpio -g write 3 0");

    $res = array('status' => 'OK', 'op' => 'CLOSE IGN_SAF');
    echo json_encode($res);
?>