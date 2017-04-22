<?php

// read status of pins for each valve in config.txt
// returns status for all pins for each valve
// on js, can choose display format

$file = fopen(__DIR__."/config.txt", "r");
if(!$file){
	$resp['status']='Unable read file'; // for console logging
	echo json_encode($resp);
}

//$resp['status'] = array();
while(!feof($file)){
	$str = fgets($file);
	$toks = preg_split("/[\s]+/", $str, -1, PREG_SPLIT_NO_EMPTY);
	if(count($toks)==0){
		continue;
	}
	if(is_numeric($toks[0])){
		continue;
	}
	//$pins = array();
	for($i = 1; $i < count($toks); $i++){
    		if(is_numeric($toks[$i])){
			$pstatus = exec("gpio -g read ".$toks[$i]);
			if(!isset($statusval[$toks[0]])){
				$statusval[$toks[0]] = array();
			}
			array_push($statusval[$toks[0]], $pstatus);
		}
	}
  	//$statusval[$toks[0]] = $pins;
}
fclose($file);
$resp['status'] = $statusval;
echo json_encode($resp);

?>
