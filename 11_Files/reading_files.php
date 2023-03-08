<?php

$file = "example.txt";

if($handle = fopen($file, 'r')) {
//    $content = fread($handle, 10); // each bite equals a character
    $content = fread($handle, filesize($file));
    echo $content;
    fclose($handle);
} else {
    echo "The application was not able to write on the file";
}
