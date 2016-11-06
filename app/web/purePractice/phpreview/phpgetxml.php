<?php
$xml = simplexml_load_file("cd_catalog.xml");

//var_dump($xml->CD);
//$test = $xml->CD;
echo $xml->CD[1]->ARTIST;
foreach ($xml->CD as $title) {
	# code...
	
	echo $title->PRICE;
	echo "\n";
}
?>