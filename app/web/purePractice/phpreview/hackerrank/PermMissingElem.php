<?php

solution([1,2,4,3,5,7]);
function solution($A) {
    // write your code in PHP5.5
    sort($A);
    //var_dump($A);
    foreach ($A as $key => $value) {

    	if ($value!==$key+1){
    		echo ($key+1);
    	}
    }
}