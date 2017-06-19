<?php

// $op is operation
// $status is status
// $uabs is unix absolute time

function logOp($op,$status,$uabs) {
  $file = fopen(__DIR__."/logs/log.txt", "a+");
  if(!$file){
     return;
  }	
  $str = $op.','.$status.','.$uabs."\n";
  fwrite($file,$str);
  fclose($file);	
}

?>
