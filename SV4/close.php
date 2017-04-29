<?php
	
    include( __DIR__ . "/../read.php");
    include( __DIR__ . "/../log.php");

    $ret = json_decode(getPins("SV4", 1), true);
 
    $res = array('status' => $ret['status'], 'op' => 'CLOSE SV4');
    logOp($res['op'],$res['status'],time());

    echo json_encode($res)."\n";
?>
