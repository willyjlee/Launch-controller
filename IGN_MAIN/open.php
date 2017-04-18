<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("IGN_MAIN", 1), true);
 
    $res = array('status' => $ret['status'], 'op' => 'OPEN IGN_MAIN');
    echo json_encode($res)."\n";
?>
