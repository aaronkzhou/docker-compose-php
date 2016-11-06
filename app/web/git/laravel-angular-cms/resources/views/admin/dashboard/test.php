<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
//$N=1041;
function solution($N) {

    $new=decbin($N);
    $newarray=str_split($new);
    $i=[];
    $j=0;
    foreach ($newarray as $key => $value){
        
        if($value==0){ 
        	for($x=0;x<count($newarray);$x++){
        		if($newarray[$x]==0){
        			$j=$j++;
        		}
        		else{
        			break;
        		}
        	}
        	if($j=count($newarray)-$key-1){
        	$j=0;
        	$i[]=$j;
        	}
        	else{
        		$i[]=$j;
        	}
        }
        return max($i);
    }
}

