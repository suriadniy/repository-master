<?php



// $fizz = intval($_POST['fizz']);
// $buzz = intval($_POST['buzz']);
// $num = intval($_POST['number']);

// $i = 1;

// while ($i <= $num) {
// 	if ($i % $fizz == 0 && $i % $buzz == 0) {
// 			echo "FB\n";
// 		} elseif ($i % $buzz == 0) { 
// 	          echo "B\n";
// 		  } elseif ($i % $fizz == 0) {
// 			    echo "F\n";	
// 			} else {
// 			     echo "$i\n";
// 			  }
// 			    $i++;
// }	

// $a = '*';

// for ($i = 1; $i < 9; $i += 2) { 
// 	echo $i.'<br>';
// }

// for ($i = 1; $i <= 9; $i++) {
// 		for ($j = 1; $j <= $i; $j++) {
// 			echo $i;
// 		}
// 		echo '<br>';
// 	}


// for ($i=1; $i <= 7 ; $i+=2) { 
// 	echo str_repeat(" ", 7-i/2).str_repeat("*", $i)."<br>";
// }
// for ($i-=4; $i >= 1 ; $i-=2) { 
// 	echo str_repeat(" ", 7 - $i / 2).str_repeat("*", $i)."<br>";
// }

// echo "Give me a number:\n";

// $handle = fopen("php://stdin","r");

// $int = (int)fgets($handle);
// $i = 1;

// for (; $i <= $int ; $i+=2) { 
// 	echo str_repeat(" ", $int - $i / 2).str_repeat("*", $i)."\n";
// }

// $i -= 4;

// for (; $i >= 1 ; $i-=2) { 
// 	echo str_repeat(" ", $int - $i / 2).str_repeat("*", $i)."\n";
// }









//$way = '/home/vladislav/alevel_git/file.txt';

// echo "Enter file path /home/vladislav/alevel_git/file.txt
//  \n : ";

// $handle = fopen("php://stdin","r");                                    
// $input = (string)fgets($handle);
// $pathToRead = substr($input, 0, [100]);

// function read($pathToRead) {

// $openFile = fopen($pathToRead, 'r+');

// 	while (! feof($openFile)) {
// 		$s = fgets($openFile);
// 		echo $s;
// 	}

//  fclose($openFile);

// }

// read($pathToRead);




// echo "Еnter the path to the file from which the content will be taken /home/vladislav/alevel_git/file.txt \n :";

// $handle = fopen("php://stdin","r");

// $input1 = (string)fgets($handle);

// echo "Еnter the path to the file where the lines will be written one by one\n Example: /home/vladislav/ \n";

// $input2 = (string)fgets($handle);

// $pathToRead = substr($input1, 0, -1);

// $pathToWrite = substr($input2, 0, -1);


// function write($pathToRead,$pathToWrite) {
// 	$num = 1;
//     $fp = fopen($pathToRead, 'r+');
//     while (! feof($fp)) {
//     	$s = fgets($fp);
//     	$fw = fopen("$pathToWrite/half", 'a+');
//     	 if ($num % 2 !== 0) {
//     	 	fwrite($fw, $s);
//     	 }
//          $num += 2;	 
//     }
// 		fclose($fw);
// 		fclose($fp);
// }

// write($pathToRead,$pathToWrite);













$way = '/home/vladislav/alevel_git/file.txt';

    function read_file($way) {
        
        $open_file = fopen($way, 'r+');

            while (!feof($open_file)) {
            
                $text = fgets($open_file);
                echo $text."<br>";                             
            }
        fclose($open_file);
            
    }
        read_file($way);