<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("SV3", 0), true); 
 
    $res = array('status' => $ret['status'], 'op' => 'CLOSE SV3');
    echo json_encode($res)."\n";
?>
