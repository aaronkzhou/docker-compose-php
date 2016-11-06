<?php
function commonstring($strings,$countline){
foreach ($strings as $key => $value) {
	$newstrings[]=str_split(trim($value));
}
for ($j=0;$j<$countline;$j++){
foreach ($newstrings[$j*2] as $key1 => $value1) {
	foreach ($newstrings[$j*2+1] as $key2 => $value2) {
		if ($value1==$value2){
			//echo $value1.$value2."\n";
			echo "YES";
			goto a;
		}
	}
}
echo "NO";
a:
echo "\n";
}

//var_dump($newstrings);

}
$handle=fopen("php://stdin", "r");
$countline=fgets($handle);
fclose($handle);
//echo $countline;
$handle1=fopen("php://stdin", "r");
for ($i=0; $i <$countline*2 ; $i++) { 
	$strings[]=fgets($handle1);
}
echo commonstring($strings,$countline);

