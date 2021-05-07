<?php

function read(&$a) {

$a = fopen('file.txt', 'r+');

	while (! feof($a)) {
		$s = fgets($a);
		echo $s;
	}

fclose($a);

}

$file = fopen('file.txt', 'r+');

read($file);