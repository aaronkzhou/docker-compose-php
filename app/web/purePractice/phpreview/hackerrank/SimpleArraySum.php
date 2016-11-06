<?php

	$handle = fopen ("php://stdin","r");
	//fscanf($handle,"%d",$n);
	$arr_temp = fgets($handle);
	$arr = explode(" ",$arr_temp);
	//var_dump($arr);
	echo array_sum($arr);
	fclose($handle);


?>