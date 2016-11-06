<?php 

function ($N)
{
	$factorcount=0;
	while($i*$i<=$N){
		if($i*$i<$N){
			$factorcount=$factorcount+2;
		}
		else{
			$factorcount=$factorcount+1;
		}
		$i++;
	}
	return $factorcount;
}