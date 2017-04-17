<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("IGN_GEN", 1), true);
    
    //system("gpio -g mode 2 out");
    //system("gpio -g write 2 1");

    //if status is OK and isset of jsonarray    
 
    $res = array('status' => $ret['status'], 'op' => 'OPEN IGN_GEN');
    echo json_encode($res)."\n";
?>
