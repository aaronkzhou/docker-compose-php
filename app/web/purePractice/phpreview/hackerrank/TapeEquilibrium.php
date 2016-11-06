<?php
solution([-1000,1000]);

function solution($A) {
	//$newa=str_split($A);
	
	$counta=count($A);
	$leftsidea=0;
	$rightsidea=0;

	for($i=0;$i<$counta-1;$i++)
	{

		$rightsidea=array_sum(array_slice($A,$i+1,$counta-$i-1));
		$leftsidea=array_sum(array_slice($A,0,$i+1));
		//echo $rightsidea.".";
		
		//echo $leftsidea;
		//echo $leftsidea.".";
		$z[]=abs($leftsidea-$rightsidea);
		$leftsidea=0;
		$rightsidea=0;

	}
	//var_dump($z);
	echo min($z);
}