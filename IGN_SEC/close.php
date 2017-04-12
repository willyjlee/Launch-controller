<?php
    system("gpio -g mode 18 out");
    system("gpio -g write 18 0");

    $res = array('status' => 'OK', 'op' => 'CLOSE IGN_SEC');
    echo json_encode($res);
?>