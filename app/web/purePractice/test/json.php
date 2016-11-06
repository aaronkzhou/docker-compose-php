<?php
function test(){
$obj->body='another post';
$obj->id= 21;
$obj->approved= true;
$obj->favorite_count = 1;
$obj->status= NULL;

return $obj;
}
var_dump(test());