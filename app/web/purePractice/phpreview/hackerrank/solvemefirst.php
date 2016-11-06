<?php

	function solvemefirst($a,$b){
		return $a + $b;
	}
	$read=fopen("php://stdin","in");
	$_a=fgets($read);
	$_b=fgets($read);
	$sum=solvemefirst(($_a),($_b));
	fclose($read);
	echo $sum;

?>