<?php

$way = '/home/vladislav/alevel_git/file.txt';

    function read_file($way) {
        
        $open_file = fopen($way, 'r+');

            while (!feof($open_file)) {
            
                $text = fgets($open_file);
                echo $text.'<br>';                             
            }
        fclose($open_file);
            
    }
        read_file($way);
