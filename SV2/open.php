<?php
	
    include( __DIR__ . "/../read.php");
    include( __DIR__ . "/../log.php");

    $ret = json_decode(getPins("SV2", 0), true);
 
    $res = array('status' => $ret['status'], 'op' => 'OPEN SV2');
    logOp($res['op'],$res['status'],time());

    echo json_encode($res)."\n";
?>
