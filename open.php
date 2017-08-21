<?php

// $valve = valve name abbreviated (F_CC)
// $valve_str = full valve string
function open($valve, $valve_str){
	include( __DIR__ . "/auth.php");

	// get request data
	$authret = json_decode(auth($_REQUEST['username'], $_REQUEST['password']),true);

	$opname = 'OPEN ['.$valve_str.']';

	if($authret['status']=="1"){
		/////////////////////////////////////////////////

    include( __DIR__ . "/read.php");
  	include( __DIR__ . "/log.php");

  	$ret = json_decode(getPins($valve, 0), true);
		$stat = $ret['status'];
		// log the operation
		logOp($opname,$stat,time());
	}
	else{
		$stat = ($authret['status']=="0") ? "incorrent login" :
		(($authret['status']=="-3") ? "no user found"  : "failed db connection: no authorization");
	}
	$res = array('status' => $stat, 'op' => $opname);

	return json_encode($res);
}
?>
