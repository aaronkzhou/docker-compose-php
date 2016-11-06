<?php
$A=11;
$B=345;
$K=17;
echo solution($A,$B,$K);
function solution($A, $B, $K) {
	$x=0;
    for ($i=$A; $i <=$B ; $i++) { 
    	if ($i%$K==0) {
    		$x=$x+1;
    	}
    }
    return $x;
}