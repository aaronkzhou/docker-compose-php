<?php
function solution($S){
$brackets=str_split($S);
$stack=array();
$opening=array(1 =>'{',2=>'[',3=>'(');
$closing=array(1 =>'}',2=>']',3=>')');
foreach ($brackets as $bracket) {
	if (in_array($bracket, $opening))
		array_push($stack, $bracket);
	
	elseif (in_array($bracket, $closing)) {
		if (empty($stack)) {
			return 0;
		}
		$stackTop=end($stack);
		$stacktopbrackettype=array_search($stack,$opening);
		$currentbrackettype=array_search($bracket,$closing);
		if ($stacktopbrackettype===$currentbrackettype) {
			array_pop($stack);
		}
		else{
			return 0;
		}
	}
}
if (count($stack==0)) 
	return 1;

else
	return 0;


}