<?php

$readfile=fopen("./readme1.txt", "r") or die("unable to open specified file");
//echo fread($readfile, filesize("readme1.txt"));
echo ("\n");
echo ("\n");
echo fgetc($readfile);
fclose($readfile);

//echo readfile("./readme1.txt");

$writefile=fopen("./writeme.txt", "a") or die("unable to open the file.");
$contents="Aaron Chou\n";
$contents1="Aaron Chou1\n";
fwrite($writefile, $contents);
fwrite($writefile, $contents1);
fclose($writefile);



?>