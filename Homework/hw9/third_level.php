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
		fclose($write_file);
	}	
}
write_fizz_buzz($way, $path_to_writing);
