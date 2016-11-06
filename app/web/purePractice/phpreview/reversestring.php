<?php  
function reverseString($A){
	$arrayA=str_split($A);
	$reversearray=array_reverse($arrayA);
	return implode('', $reversearray);
}
echo reverseString('fuckof');
?>