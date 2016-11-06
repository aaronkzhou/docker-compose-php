<?php
function division($str){
$arr=str_split(strval(trim($str)));
//var_dump($arr);
$final=0;
foreach ($arr as $arr) {
	$remainder=($str)%($arr);
	$accu = $remainder!==0?0:1;
	//echo $accu;
	$final = $final+$accu;
}
return $final;
}
$handle=fopen("php://stdin", "r");
$handle=fopen("php://stdin", "r");
$countcase=fgets($handle);
fclose($handle);
$handle1=fopen("php://stdin", "r");
for ($i=0; $i < $countcase; $i++) {
	$arr=fgets($handle1);
	$result[]=division($arr);
}
foreach ($result as $result) {
echo $result."\n";

