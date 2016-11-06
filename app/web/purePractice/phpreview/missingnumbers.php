<?php
function($count1,$count2,$string1,$string2){
	return array_diff($string2, $string1);
}
$handle=fopen("php://stdin", "r");
$count1=fgets($handle);
$str1=fgets($handle);
$string1=trim(explode(" ", $str1));
$count2=fgets($handle);
$str2=fgets($handle);
$string2=trim(explode(" ", $str2));

