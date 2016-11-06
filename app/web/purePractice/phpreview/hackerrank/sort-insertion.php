<?php
function insertion1($str,$strlen){
	$string=explode(" ", trim($str));
	for($i=1;$i<$strlen;$i++){
		$tmp=$string[$i];
			for ($j=$i-1; $j >=0 ; $j--) {
				if ($tmp<=$string[$j]){
					$string[$j+1]=$string[$j];
					$string[$j]=$tmp;
					//var_dump($string);
				}
				else{
					break;
				}
			}
	}
	var_dump($string);
}
$handle=fopen("php://stdin", "r");
$strlen=fgets($handle);
$str=fgets($handle);
fclose($handle);
insertion1($str,$strlen);
