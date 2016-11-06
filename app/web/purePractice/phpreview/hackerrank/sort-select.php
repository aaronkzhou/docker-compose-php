<?php
function bubble($str,$strlen){
	$string=explode(" ", trim($str));
	for ($i=0; $i < $strlen; $i++) { 
			if($value=min($string)){
				unset($string[$key]);
				$newstring[]=$value;
			}
		print_r($string);
	}
	// for ($i=0; $i <$strlen ; $i++) { 
		
	// }
print_r($newstring);
}
$handle=fopen("php://stdin", "r");
$strlen=fgets($handle);
$str=fgets($handle);
fclose($handle);
bubble($str,$strlen);
