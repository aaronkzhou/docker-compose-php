<?php
$A=[0, 1, 0, 1, 1];
echo solution($A);
function solution($A) {
$counta=count($A);
$x=0;
foreach ($A as $key => $value) {
	if($value==1){
		continue;
	}else{
	for ($i=$key; $i <$counta ; $i++) { 
		if ($A[$i]==1) {
			//echo '('.$key.'.'.$i.')'.PHP_EOL;
			$x=$x+1;
		}
	}
}
}

if ($x>=1000000000) {
	return "-1";
}else{
	return $x;
}
}