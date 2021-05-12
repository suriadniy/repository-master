<?php

// функция для чтения

$way = '/home/vladislav/alevel_git/file.txt';

    function read_file($way) {

        $open_file = fopen($way, 'r+');

            while (!feof($open_file)) {
            
                $text = fgets($open_file);
                echo $text;                             
            }

            return true;
            
        fclose($open_file);
            
    }
       read_file($way);






// функция для записи и создания нового файла через строку из верхней функции

$way = '/home/vladislav/alevel_git/file.txt';

$path_to_writing = '/home/vladislav/';

    function write_file($way,$path_to_writing) {

    	$count = 1;

        $open_file = fopen($way, 'r+');

            while (!feof($open_file)) {
            
                $text = fgets($open_file);

                $write_file = fopen("$path_to_writing/half",'a+');

                if ($count % 2 !==0) {

                	fwrite($write_file, $text);
                }

                $count++;                            
            }

        fclose($open_file);
        fclose($write_file);
            
    }
       write_file($way,$path_to_writing);
