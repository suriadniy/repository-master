<?php

$way = '/home/vladislav/alevel_git/file3.txt';

    function read_file($way) {

        $file_array = file("$way");

        return $file_array;
      
    }
       read_file($way);






$way = '/home/vladislav/alevel_git/file3.txt';

$path_to_writing = '/home/vladislav/';

function write_fizz_buzz($way, $path_to_writing)
{

	$num_array = read_file($way);

	foreach ($num_array as $value){

		$input = explode(' ', $value);

		$fizz = $input[0];

		$buzz = $input[1];

		$num = $input[2];

		$i = 1;

		$write_file = fopen("$path_to_writing/fizz_buzz_result",'a+');

		while ($i <= $num) {
			if ($i % $fizz == 0 && $i % $buzz == 0) {
					fwrite($write_file, "FB");
				} elseif ($i % $buzz == 0) { 
			          fwrite($write_file, "B");
				  } elseif ($i % $fizz == 0) {
					    fwrite($write_file, "F");	
					} else {
					     fwrite($write_file, "$i");
					  }
					    $i++;
		}
		fwrite($write_file, "\n");
	}
	fclose($write_file);	
}
write_fizz_buzz($way, $path_to_writing);











// $arr = [0 => "2 5 18", 1 => "3 6 19"];

// $str = implode(' ', $arr);

// $array = explode('-', $str);

//print_r($array);



// $arr = [0 => "2 5 18 3 6 19"];

//     function fizz($arr) {

//         foreach ($arr as $value){

// 			$input = explode(' ', $value);

// 			$fizz = $input[0];
//         }	
//         return $fizz;
//     }
//         fizz($arr);

//    //      $fizz_ = fizz($arr);

//  		// print_r($fizz_);


//  // $way = '/home/vladislav/alevel_git/file3.txt';

//  		$arr = [0 => "2 5 18 3 6 19"];

//      function buzz($arr) {

//  //        $file_array = file("$way");

//         foreach ($arr as $value){

// 			$input = explode(' ', $value);
			
// 			$buzz = $input[1];
//         }	
//         return $buzz;
//     }
//        buzz($arr);

//  //       $buzz_ = buzz($arr);

//  // print_r($buzz_);






//  // $way = '/home/vladislav/alevel_git/file3.txt';

//  		$arr = [0 => "2 5 18 3 6 19"];

//      function num($arr) {

//  //        $file_array = file("$way");

//         foreach ($arr as $value){

// 			$input = explode(' ', $value);
			
// 			$num = $input[2];
//         }	
//         return $num;
//     }
//        num($arr);

//  //       $num_ = num($arr);

//  // print_r($num_);




// //$way = '/home/vladislav/alevel_git/file3.txt';

// $arr = [0 => "2 5 18 3 6 19"];

// $path_to_writing = '/home/vladislav/';

// function write_fizz_buzz($way, $path_to_writing)
// {

// 	$fizz_ = fizz($arr);
// 	$buzz_ = buzz($arr);
// 	$num_ = num($arr);

// 		$i = 1;

// 		$write_file = fopen("$path_to_writing/fizz_buzz_result",'a+');

// 		while ($i <= $num_) {
// 			if ($i % $fizz_ == 0 && $i % $buzz_ == 0) {
// 					fwrite($write_file, "FB");
// 				} elseif ($i % $buzz_ == 0) { 
// 			          fwrite($write_file, "B");
// 				  } elseif ($i % $fizz_ == 0) {
// 					    fwrite($write_file, "F");	
// 					} elseif ($i > $num_) {
// 						fwrite($write_file, " "."\n");
// 					  } else {
// 					     fwrite($write_file, "$i");
// 					    }
// 					     $i++; 

// 		}
// 		fclose($write_file);	
// }
// write_fizz_buzz($arr, $path_to_writing);
