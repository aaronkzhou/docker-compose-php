<?php
date_default_timezone_set("Asia/shanghai");
echo strrev(strrev("hello world\n"));
echo str_word_count("keren zhou")."\n";
echo strlen("keren zhou")."\n";
define("Greeting", "hey Aaron")."\n";
echo  Greeting."\n";

function Aaron()
{
	define("Aaron","hey Aaronzhou");
	Echo Aaron;
	echo "\n";

}
Aaron();

$favcolor = "test";
switch ($favcolor) {
	case 'red':
		# code...
		echo "your favcolor is red";
		break;
	case 'blue';
		echo "your favcolor is blue";
	default:
		# code...
		echo "your favcolor is neither red or blue, but black"."\n>";
		break;
}

$H = date("Y/M/d");
//echo $H."\n";
$h=strtotime('$H');
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo $h;


?>