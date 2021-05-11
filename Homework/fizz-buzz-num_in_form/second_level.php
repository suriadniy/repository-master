<?php

$file = fopen('file.txt', 'r+');

while (! feof($file)) {
	
	$s = fgets($file);
	echo $s;
}

fclose($file);