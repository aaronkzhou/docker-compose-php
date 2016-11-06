<?php
function evaluation($str){
$string=str_split(trim($str));
$count=count($string);
$i=0;
if ($count%2==0){
	foreach ($string as $key => $value) {
		$strcount=(substr_count($str,$value))%2;
		//echo $strcount;
		if ($strcount!==0){
			return "NO";
		}
	}
	echo  "YES";
}
else{
	foreach ($string as $key => $value) {
		if(substr_count($str,$value)%2==1){
			$array[]=$value;
			//echo $i;
		}
	}
	$i=count(array_unique($array));
	echo $i==1?"YES":"NO";
}
}
$handle=fopen("php://stdin", "r");
$str = fgets($handle);
echo evaluation($str);
fclose($handle);
?>