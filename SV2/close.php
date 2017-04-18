<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("SV2", 0), true); 
 
    $res = array('status' => $ret['status'], 'op' => 'CLOSE SV2');
    echo json_encode($res)."\n";
?>
