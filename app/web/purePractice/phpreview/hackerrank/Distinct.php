<?php
$A=[3];
echo solution($A);
function solution($A) {
    //$newa=array_unique($A);
    // $counta=array_count_values($A);
    // var_dump($counta);
    // foreach ($counta as $key => $value) {
    // 	if($value==1){
    // 		return $key;
    // 	}
    // }
    $newa=array_unique($A);
    return count($newa);
}
