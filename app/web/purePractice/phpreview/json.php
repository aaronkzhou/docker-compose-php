<?php
 $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$test=json_decode($json);
echo $test->d;

