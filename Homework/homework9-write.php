<?php

function write(&$w) {
	$w = fopen('file.txt', 'r+');
	$text = "Еще 1 строка !\n";
	$write = fwrite($w, $text);

		if ($write) { 
			echo "Данные записаны !";
		} else { 
			echo "Ошибка !";
		  }

		fclose($w);
}

$file = fopen('file.txt', 'r+');

write($file);