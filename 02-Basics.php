<?php

// Functions
function registerUser($email) {
    echo $email . " registered now." . "<br>";
}

registerUser("tushar@tushgaurav.in");

// Default Arguments
function sum($n1=5, $n2=5) {
    return $n1 + $n2;
}

// Anonymous Functions

$substract = function($n1, $n2) {
    if ($n1 > $n2) {
        return $n1 - $n2;
    } else {
        return $n2 - $n1;
    }
};

// echo $substract(4, 5);

$multiply = fn($n1, $n2) => $n1 * $n2;
// echo $multiply(2, 4);

echo htmlspecialchars("<script>alert(3)</script>");