<?php
// $A=array('2','2','1','0','1','9');
// echo Alpha2010($A);
// function Alpha2010($A){
// 	$newarray=array_unique($A);
// 	//print_r($newarray);
// 	foreach ($A as $key => $value) {
// 		if (in_array($value, $newarray)) {
// 			//array_diff($newarray, array($value));
// 			echo array_search($value, $newarray);
// 			unset($newarray[array_search($value, $newarray)]);
// 		}
	
// 		if (count($newarray)==0) {
// 			return $key+1;
// 		}
// 	}
// }
// $referenceTable = array();
// $referenceTable['val1'] = array(1, 2);
// $referenceTable['val2'] = 3;
// $referenceTable['val3'] = array(4, 5);

// $testArray = array();

// $testArray = array_merge($testArray, $referenceTable['val1']);
// var_dump($testArray);
// $testArray = array_merge($testArray, $referenceTable['val2']);
// var_dump($testArray);
// $testArray = array_merge($testArray, $referenceTable['val3']);
// var_dump($testArray);

$text = 'John ';
$text[10] = 'Doe';
print_r($text);