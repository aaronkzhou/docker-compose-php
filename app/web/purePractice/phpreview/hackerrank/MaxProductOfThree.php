<?php
$A=[3,5,6,4];
echo solution($A);
function solution($A){
	asort($A);
	$counta=count($A);
	//$max3=array_slice($A,0,3);
	//$min3=array_slice($A,$counta-3,3);
	//$newa=array_merge($max3,$min3);
	foreach ($A as $key => $value) {
		//echo $key
	}
}