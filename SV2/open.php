<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("SV2", 1), true);
 
    $res = array('status' => $ret['status'], 'op' => 'OPEN SV2');
    echo json_encode($res)."\n";
?>
