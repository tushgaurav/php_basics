<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
    echo "The file ${file} exists. <br>";
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);

    echo "<h4>" . $contents . "</h4>";
} else {
    echo "The file ${file} does not exists, creating file. <br>";
    $handle = fopen($file, 'w');
    $contents = "Tushar" . PHP_EOL . "Benrick" . PHP_EOL . "Amit" . PHP_EOL . "Prateek" . PHP_EOL . "Prakesh";
    fwrite($handle, $contents);
    fclose($handle);
}