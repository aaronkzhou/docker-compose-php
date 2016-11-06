<?php

$A=array('3','2','6','-10','4','5','-1','2');
echo solution($A);
function solution($A)
{
	$N=count($A);
	$leftmaxslicesums=array(0,0,0);
	$rightmaxslicesums=array(0,0,0);
	for($i = 1; $i < ($N - 1); $i++){
		$leftmaxslicesums[$i] = max(0, $leftmaxslicesums[$i - 1] + $A[$i]);
    }
    print_r($leftmaxslicesums);
    for($i = $N - 2; $i > 0; $i--){
		$rightMaxSliceSums[$i] = max(0, $rightMaxSliceSums[$i + 1] + $A[$i]);
    }
    print_r($rightMaxSliceSums);
}