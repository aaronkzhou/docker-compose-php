<?php
function findindex($indexvalue,$arr){
foreach ($arr as $key => $value) {
	if ($indexvalue=$value){
		return $key;
	}
}
}

$handle=fopen("php://stdin", "r");
$indexall=fgets($handle);
$indexvalue=fgets($handle);
fclose($handle);
$arr = explode(" ",$indexall);
echo findindex($indexvalue,$arr);

