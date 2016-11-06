<?php
$handle=fopen("php://stdin", "r");
$time=fgets($handle);
$substr=substr($time, 8,2);
if($substr=='PM'){
	$x=12;
}
else{
	$x=0;
}
echo $substr1=substr($time,0,2)+$x.$substr2=substr($time, 2, 6);