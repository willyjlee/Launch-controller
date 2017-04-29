<?php
	
    include( __DIR__ . "/../read.php");
    include( __DIR__ . "/../log.php");

    $ret = json_decode(getPins("IGN_SAF", 0), true);
 
    $res = array('status' => $ret['status'], 'op' => 'OPEN IGN_SAF');
    logOp($res['op'],$res['status'],time());

    echo json_encode($res)."\n";
?>
