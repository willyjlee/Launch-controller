<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("SV1", 1), true);
 
    $res = array('status' => $ret['status'], 'op' => 'OPEN SV1');
    echo json_encode($res)."\n";
?>
