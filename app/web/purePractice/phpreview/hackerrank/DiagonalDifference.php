<?php
$handle = fopen("php://stdin", "r");
$num=fgets($handle);
//echo $num;
fclose($handle);
$handle1=fopen("php://stdin","r");
for ($i=0; $i <$num ; $i++) {
 	$arr[$i]=explode(" ",fgets($handle1));
 }
fclose($handle1);
$x=0;
$y=0;
for ($j=0; $j <$num ; $j++) {
	$x=$x+$arr[$j][$j];
	//echo $x;

	$y=$y+$arr[$num-$j-1][$j];
	//echo $y;
}


echo abs($x-$y);


?>