<?php

	include( __DIR__ . "/../auth.php");

	$authret = json_decode(auth($_POST['username'], $_POST['password']),true);

	$opname = 'OPEN GEN_SAF';

	if($authret['status']=="1"){
		/////////////////////////////////////////////////

    		include( __DIR__ . "/../read.php");
    		include( __DIR__ . "/../log.php");

    		$ret = json_decode(getPins("GEN_SAF", 0), true);
		$stat = $ret['status'];
		logOp($opname,$stat,time());
	}
	else{
		$stat = ($authret['status']=="0") ? "incorrent login" : 
		(($authret['status']=="-3") ? "no user found"  : "failed db connection: no authorization");
	}
	$res = array('status' => $stat, 'op' => $opname);

	echo json_encode($res)."\n";

?>
