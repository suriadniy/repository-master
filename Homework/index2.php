<?php

echo "Give me a number:\n";

$handle = fopen("php://stdin","r");                                    

$fizz = (int)fgets($handle);
$buzz = (int)fgets($handle);
$num = (int)fgets($handle);

echo "\n";

$i = 1;

while ($i <= $num) {
	if ($i % $fizz == 0 && $i % $buzz == 0) {
			echo "FB\n";
		} elseif ($i % $buzz == 0) { 
	          echo "B\n";
		  } elseif ($i % $fizz == 0) {
			    echo "F\n";	
			} else {
			     echo "$i\n";
			  }
			    $i++;
}	
