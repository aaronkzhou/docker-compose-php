<?php
function bubble($str,$strlen){
	$string=explode(" ", trim($str));
	//var_dump($string);
	for ($i=1; $i <$strlen ; $i++) { 
		for($j=0;$j<$strlen-$i;$j++){
			if($string[$j]>=$string[$j+1]){
				$tmp=$string[$j];
				$string[$j]=$string[$j+1];
				$string[$j+1]=$tmp;
			}
		}
	}
	var_dump($string);
}
$handle=fopen("php://stdin", "r");
$strlen=fgets($handle);
$str=fgets($handle);
fclose($handle);
bubble($str,$strlen);
