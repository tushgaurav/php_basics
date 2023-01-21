<?php

function inverse($number) {
    if(!$number) {
        throw new Exception("Division By Zero");
    }
    return 1/$number;
}

// $x = inverse(0);

try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo "Caught Exception,", $e->getMessage(), " ";
}