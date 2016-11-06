<?php

function acumulate($cycle){
	$height=1;
	for ($j=0; $j < floor($cycle/2) ; $j++) { 
		$height=($height*2)+1;
	}
	return $height;
}
$handle=fopen("php://stdin", "r");
$countcase=fgets($handle);
fclose($handle);
$handle1=fopen("php://stdin", "r");
for ($i=0; $i < $countcase; $i++) { 

	$arr=fgets($handle1);
	$final[]=(acumulate($arr))*(1+$arr%2);

}
fclose ($handle1);
for ($y=0; $y <count($final); $y++) { 
	echo $final[$y];
	echo "\n";
}