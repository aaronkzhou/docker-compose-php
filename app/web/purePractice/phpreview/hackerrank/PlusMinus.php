<?php

$handle = fopen("php://stdin", "r");
$num=fgets($handle);
//echo $num;
fclose($handle);
$handle2=fopen("php://stdin","r");
$arr=explode(" ", fgets($handle2));

//var_dump($arr);
$x=0;
$y=0;
$z=0;
for ($i=0; $i <$num ; $i++){

	if ($arr[$i]>0){
		$x=$x+1;
	}
	else if($arr[$i]==0){
		$y=$y+1;
	}
	else{
		$z=$z+1;
	}
}

	echo $x=sprintf("%.6f", $x/$num);
	echo $y=sprintf("%.6f", $y/$num);
	echo $z=sprintf("%.6f", $z/$num);
	fclose($handle2);