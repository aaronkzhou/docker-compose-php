<?php
$dom = simplexml_load_file("phpeditxml.xml");
$new_node = $dom->createElement('foo', 'bar');
$gamestore_node = $xpath->query('/*')->item(0)->appendChild($new_node);
echo $dom->saveXML();
?>