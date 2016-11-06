<?php

function removeItemByValue(){
$x=array(1,2,3,4,5);
unset($x[array_search(3,$x)]);
}
function addItemInsideArray(){
$array=array(1,2,3,4,5);
$x1=array_slice($array,0,2);
$x2=array_slice($array,2,3);
$x1[]='$';
var_dump(array_merge($x1,$x2));
}
function multipleSorting(){
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
$b=sort($a);
print_r(sort($a));
}
function test(){
echo "ia1"+1;
}
echo test();
