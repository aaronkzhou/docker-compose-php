ΩΩ<?php

solution([3, 8, 9, 7, 6], 13);
function solution($A, $K){
	$countarray=count($A);
	$newk=$K%($countarray);

	// $x=0;
	// echo $countarray;
	// for ($i=$countarray-1;$i >=0;$i--){
	// 	$x=$countarray[$i];
	// 	$B[$i+$newk]=$x;
	// 	$B[$i]=0;
	// }

	$a1=array_slice($A,0,$countarray-$newk);
	//print_r($a1);
	$a2=array_slice($A,$countarray-$newk,$newk);
	$newa=array_merge($a2,$a1);
	return($newa);

}