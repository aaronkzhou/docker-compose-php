<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
//$N=1041;
t
function solution($N) {
    $new=decbin($N);
    $newarray=str_split($new);
    //var_dump($newarray);
    $i=[];
    $j=0;
    foreach ($newarray as $key => $value){
        
        if($value==0)
        {
        //echo $key; 
        	for($x=$key;$x<count($newarray);$x++){
        		if($newarray[$x]==0){
        			$j=$j+1;
                    //echo $j;
        		}
        		else{
        			break;
        		}
        	}
            //echo $j;
        	if($j==count($newarray)-$key){
        	$j=0;
        	$i[]=$j;
            //echo $j;
        	}
        	else{
                //echo $i;
        		$i[]=$j;
                $j=0;
        	}
            //echo "0";
        }
        else{
            $i[]=0;
        }
        
    }
    //var_dump($i);
    //echo "test";
    return max($i);
}

