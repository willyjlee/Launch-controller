<?php
    // valve, mode = [0 or 1]
    function getPins($valve, $mode) {
	$file = fopen(__DIR__."/config.txt", "r");
	$resp = array('status' => 'OK');
        if(!$file){
           $resp['status'] = 'Unable read file';
	   return json_encode($resp);
        }
	
	$resp['status'] = 'Valve name: '.$valve.' not found';
	
	while(!feof($file))
       	   $str = fgets($file);
	   $toks = preg_split("/[\s]+/", $str, -1, PREG_SPLIT_NO_EMPTY);
	   //echo count($toks)."\n";
	   if(count($toks)==0){
		continue;
	   }
	   if($toks[0]==$file){
		$resp['status'] = 'OK'
		for($i = 1; $i <= count($toks); $i++){
		   if(is_numeric($toks[i])){
		   	// TODO: set pins
		   }	
		}	
	   } 
	}	
		
	fclose($file);	
	return json_encode($resp);
    }

?>
