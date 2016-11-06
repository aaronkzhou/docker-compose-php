<?php

$A=[-1];
echo solution($A);
function solution($A) {
$b=array_unique($A);
sort($b);
if (max($b)<=0) {
	return 1;
}
foreach ($b as $key => $value) {
	if ($value>0) {
		$c[]=$value;
	}
}
foreach ($c as $key => $value) {
	if ($value!==$key+1) {
		return ($key+1);
	}
}
return (max($c)+1);
}