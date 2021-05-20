<?php

// задача Бриллиант 

// echo "Give me a number:\n";

// $handle = fopen("php://stdin","r");

// $int = (int)fgets($handle);

// for ($i = 1; $i <= $int ; $i+=2) { 
// 	echo str_repeat(" ", $int - $i / 2).str_repeat("*", $i)."\n";
// }

// $i -= 4;

// for (; $i >= 1 ; $i-=2) { 
// 	echo str_repeat(" ", $int - $i / 2).str_repeat("*", $i)."\n";
// }








// Создайте массив для хранения городов. Вводите города из консоли в цикле, добавляйте в массив. Когда введут 1, выводите весь массив, на этом программа завершается.

// echo "Enter something \n";

// $input = fopen("php://stdin","r");

// $arr = [];

// while (true) {

// 	$city_name = fgets($input); // what we get from console write to         

// 	if ((int)$city_name === 1) break;
	
// 	else {
// 		$arr[] = $city_name;
// 	}

// }
//  print_r($arr);





//Улучшайте программу с городами. Теперь вне зависимости от того, какими символами написан город, все буквы в его названии должны быть строчными, кроме первых букв каждого слова названия. Пример: вводите san franCIsco, выводите San Francisco.

// function beautyName($name) {
// 	return ucfirst(strtolower($name));
// }

// $test = 'San franCisco';

// $arr = explode(' ', $test);

// echo "Enter something \n";

// $input = fopen("php://stdin","r");

// $cities = [];

// while (true) {

// 	$city_name = fgets($input);

// 	if ((int)$city_name === 1) break;
	
// 	else {
// 		$arr = explode(" ", $city_name);
// 		$arr = array_map("beautyName", $arr);
// 		$cities[] = implode(" ", $arr);
// 	}

// }
//  print_r($cities);






// Напишите функцию для подсчета среднего числа в массиве. Вызывайте ее с массивом целых чисел, возвращайте среднее. Считать руками, без специальных математических функций.

// $arr = [1,2,3,4,5,6];

// function average($arr){

// 	$arr_count = count($arr);

// 	$sum = 0;

// 	foreach ($arr as $value) {
// 		$sum += $value;
// 	}

// 	$average = $sum / $arr_count;

// 	return $average;

// }

// average($arr);

// print_r(average($arr));


//Напишите программу, которая выводит сама себя в консоль. (смотреть на массив $argv и работу с файлами, программа ведь хранится в файле)


// $pathFile = file($argv[0]);
// print_r($pathFile);




//Создайте двумерный список студентов, ключ - фамилия, значение - масив оценок. Выведите красиво.


// $arr = [
// 	'Petrov' => [5,2,3,4,3,5],
//     'Ivanov' => [2,4,5,4,5], 
//     'Sidorov' => [4,3,5,5,2]
// 	   ];

// foreach ($arr as $key => $value) {
// 	echo "У студента $key следующие оценки: ". implode(",", $value)."\n";
// }




//Усложните прошлую задачу, выведите возле фамилии студента еще и его среднюю оценку. 


// $arr = [
// 	'Petrov' => [5,2,3,4,3,5],
//     'Ivanov' => [2,4,5,4,5], 
//     'Sidorov' => [4,3,5,5,2]
// 	   ];

// foreach ($arr as $key => $value) {
// 	$average_rating = array_sum($value) / count($value);
// 	echo "У студента $key средняя оценка равняется: $average_rating , а его оценки : ". implode(",", $value)."\n";
// }



//Усложнение прошлой задачи: вывод отсортируйте по убыванию средней оценки.











// //Введите слово, выведите его по буквам.

// $str = 'string';

// $i = 0;

// while ($i < strlen($str)) {
// 	echo $str[$i]."  ";
// 	$i++;
// }



//Дан массив фамилий студентов ([‘Ivanov’, ‘Petrov’, …]). Вывести студента с самой короткой фамилией, длинной фамилией, средней фамилией. Если их несколько, вывести всех. Фамилии вводить одной строкой из консоли.

// $surname = ['Ivanov', 'Shevchenko', 'Tsoi', 'Petrov'];

// $min_surname = '';

// $max_surname = '';

// $mid_surname = '';
	
// foreach ($surname as $value) { 
// 	if (empty($min_surname) && empty($max_surname)) {
// 		$min_surname = $value;
// 		$max_surname = $value;
// 	} else {
// 		if (strlen($value) < strlen($min_surname)){
// 			$min_surname = $value;
// 		}
// 		if (strlen($value) > strlen($max_surname)){
// 			$max_surname = $value;
// 		}
// 	  }
// }
 
// echo "Студент с самой короткой фамилией : $min_surname"."\n";
// echo "Студент с самой длинной фамилией : $max_surname"."\n";





















// echo "Enter something \n";

// $input = fopen("php://stdin","r");

// $surname = [];

// $min_surname = '';

// $max_surname = '';

// $mid_surname = '';
	
// foreach ($surname as $value) { 
// 	if (empty($min_surname) && empty($max_surname)) {
// 		$min_surname = $value;
// 		$max_surname = $value;
// 	} else {
// 		if (strlen($value) < strlen($min_surname)){
// 			$min_surname = $value;
// 		}
// 		if (strlen($value) > strlen($max_surname)){
// 			$max_surname = $value;
// 		}
// 	  }
// }
 
// echo "Студент с самой короткой фамилией : $min_surname"."\n";
// echo "Студент с самой длинной фамилией : $max_surname"."\n";






// echo "Enter surname \n";

// $handle = fopen("php://stdin","r");

// $surname = [];

// while (true) {

// 	$input = fgets($handle); 

// 	if ((int)$surname === 1) break;
	
// 	else {
// 		$surname[] = $input;
// 	}

// 	$min_surname = '';

// 	$max_surname = '';

// 	$mid_surname = '';
		
// 	foreach ($surname as $value) { 
// 		if (empty($min_surname) && empty($max_surname)) {
// 			$min_surname = $value;
// 			$max_surname = $value;
// 		} else {
// 			if (strlen($value) < strlen($min_surname)){
// 				$min_surname = $value;
// 			}
// 			if (strlen($value) > strlen($max_surname)){
// 				$max_surname = $value;
// 			}
// 		  }
// 	}

// }
//  echo "Студент с самой короткой фамилией : $min_surname"."\n";
// echo "Студент с самой длинной фамилией : $max_surname"."\n";
