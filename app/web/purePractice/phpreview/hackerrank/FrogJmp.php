<?php
function solution($X, $Y, $D) {
    // write your code in PHP5.5
    for ($i=0; $i <10000000000 ; $i++) { 
    	$X=$X+$D;
    	if($X>=$Y){
    		return $i;
    	}
    }
    
}