<?php
$A=array('4','3','4','4','4','2','4');
echo solution($A);


function solution($A) {
    $counta=count($A);
    $countleaders=0;
    for($i=0;$i<$counta-1;$i++){
        $front[$i]=array_slice($A,0,$i+1);
        $after[$i]=array_slice($A,$i+1,$counta-$i-1);
        //print_r($front[$i]);
        //print_r($after[$i]);
        $countfront=count($front[$i]);
        $countafter=count($after[$i]);
        $maxfront=current(array_keys(array_count_values($front[$i]),max(array_count_values($front[$i]))));
        $maxafter=current(array_keys(array_count_values($after[$i]),max(array_count_values($after[$i]))));
        //echo $countfront;
        //echo $countafter;
        //echo max(array_count_values($front[$i])).'.';
        //echo max(array_count_values($after[$i])).'.';
        //echo $maxfront;
        //echo $maxafter;
        //echo $maxafter;
        if (max(array_count_values($front[$i]))>$countfront/2&&max(array_count_values($after[$i]))>$countafter/2&&$maxfront===$maxafter) {
        	$countleaders++;
        }
    }
    return $countleaders;
}