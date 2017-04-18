<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("SV3", 1), true);
 
    $res = array('status' => $ret['status'], 'op' => 'OPEN SV3');
    echo json_encode($res)."\n";
?>
