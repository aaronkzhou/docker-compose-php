<?php
$A=[10, 50, 5, 1];
echo solution($A);
function solution($A) {
  	sort($A);
  	for ($key=0;$key<count($A)-2;$key++) {
  		if ($A[$key]+$A[$key+1]>$A[$key+2]) {
  			return 1;
  		}
  	}
  	return 0;
}