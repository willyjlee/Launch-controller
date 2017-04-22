<?php

// $valve is name of valve
// $mode is 0 or 1 to open/clos

function getPins($valve, $mode) {
  $file = fopen(__DIR__."/config.txt", "r");
  if(!$file){
     $resp['status'] = 'Unable read file';
     return json_encode($resp);
  }	
  $resp['status'] = 'Valve name '.$valve.' not found';	

  while(!feof($file)){
     $str = fgets($file);
     $toks = preg_split("/[\s]+/", $str, -1, PREG_SPLIT_NO_EMPTY);
     if(count($toks)==0){
	continue;
     }
     if($toks[0]==$valve){
	$resp['status'] = 'OK';
	for ($i = 1; $i < count($toks); $i++){
	     if(is_numeric($toks[$i])){
		 system("gpio -g mode ".$toks[$i]." out");
		 system("gpio -g write ".$toks[$i]." ".$mode);	
	     }	
	}
      } 
  }		
  fclose($file);	
  return json_encode($resp);
}

?>
