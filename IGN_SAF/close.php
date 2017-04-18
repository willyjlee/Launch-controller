<?php
	
    include( __DIR__ . "/../read.php");
    
    $ret = json_decode(getPins("IGN_SAF", 0), true); 
 
    $res = array('status' => $ret['status'], 'op' => 'CLOSE IGN_SAF');
    echo json_encode($res)."\n";
?>
