<?php

echo "Give me a number:\n";

$handle = fopen("php://stdin","r");
$input = (int)fgets($handle);
echo "\n";
echo $input;

if ($input % 2){
	echo "Odd\n";
} else { 
	echo "Even\n";
}

