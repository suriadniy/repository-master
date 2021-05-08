<?php


// $file = fopen('file.txt', 'r+');
// $s = fgets($file);
// echo $s;
// fclose($file);


// $file = fopen('file.txt', 'r+');
// $text = "Эта строка должны быть в файле\r\n";
// $write = fwrite($file, $text);
// if ($write) echo "Данные записаны !";
// else echo "Ошибка !";
// fclose($file);

// function read(&$a) {
// 	if (isset($a)) {
// 		$a = fopen('file.txt', 'r+');
// 		$s = fgets($a);
// 		echo $s;                          // как мне кажется правильное решение
// 		fclose($file);
//     }
//     return true;
// }

// $file = fopen('file.txt', 'r+');

// read($file);



// function read(&$a) {
// 	if (isset($a)) {
// 		$a = fopen('file.txt', 'r+');
// 		$s = fgets($a);
// 		echo $s;                        
// 		fclose($file);
//     }
//     return true;
// }

// $file = fopen('file.txt', 'r+');          // na potom

// read($file);



$file = fopen('file.txt', 'r+');
//проверка, не закончился ли файл
while (! feof($file)) {
	//чтение из файла
	$s = fgets($file);
	echo $s.'';
}
//закрытие файла
fclose($file);
        