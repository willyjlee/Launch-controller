<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("SV1", 0), true); 
 
    $res = array('status' => $ret['status'], 'op' => 'CLOSE SV1');
    echo json_encode($res)."\n";
?>
