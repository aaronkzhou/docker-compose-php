<?php

function solution($A){
	$N=count($A);
	$nondivision=array();
	for ($i=0; $i < $N; $i++) {
	$k=0;
		for ($j=0; $j<$N ; $i++) {
			if($N[j]%$N[i]!==0){
				$k++;
			}
		}
		$nondivision[]=$k;
	}
	return $nondivision;
}