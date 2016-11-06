<?php
solution([1,3,3,1,5]);
function solution($A) {

	//var_dump($A);
    // write your code in PHP5.5
	$newa=$A;
	$counta=count($A);
	foreach ($newa as $key => $value) {
		for ($i=$key; $i <$counta ; $i++){
			if($value==$newa[$i]){
				unset($newa[$i]);
				unset($newa[$key]);
				if (count($newa)==1) {
					goto a;
				}
			}
		}
	}
	a:
	foreach ($newa as $key => $value) {
		echo $value;
	}
	


}
