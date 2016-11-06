<?php

$A=array('1','5','3','4','3','4','1','2','3','4','6','2');
echo solution($A);
function solution($A){

$peaks=array();
$indexpeaks=array();
foreach ($A as $key=>$value) {
	if($A[$key-1]<$A[$key]&&$A[$key+1]<$A[$key]){
		$peaks[]=$A[$key];
		$indexpeaks[]=$key;

	}
}
$N=count($indexpeaks);
for ($i=1; $i<$N ; $i++) {
	$indexgap[]=$indexpeaks[$i]-$indexpeaks[$i-1];
}
for ($i=1; $i < $N ; $i++) {
	if () {
		
		next;
	}
	else{
		return $i;
	}
}


}