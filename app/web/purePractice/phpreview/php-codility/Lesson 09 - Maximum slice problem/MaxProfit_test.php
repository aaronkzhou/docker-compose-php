<?php
$A=array('23171','21011','21123','21366','21013','21367');
echo solution($A);
function solution($A){
$maxprofit=0;
$minprice=$A[0];
foreach ($A as $key => $value) {
    if($A[$key]<$minprice){
        $minprice=$A[$key];
    }
    if($A[$key]-$minprice>$maxprofit){
        $maxprofit=$A[$key]-$minprice;
    }
}
return $maxprofit;
}