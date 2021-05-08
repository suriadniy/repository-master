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



// function write(&$w) {
// 	$w = fopen('file.txt', 'r+');
// 	$text = "Еще 1 строка !\n";
// 	$write = fwrite($w, $text);

// 		if ($write) { 
// 			echo "Данные записаны !";
// 		} else { 
// 			echo "Ошибка !";
// 		  }

// 		fclose($w);
// }

// $file = fopen('file.txt', 'r+');

// write($file);