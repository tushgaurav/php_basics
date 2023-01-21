<?php
// Variables and Constants
$name = "Tushar";
$age = 69;
$salary = 8342.32;

echo "${name} earns ${salary} at aged only ${age}<br>";
var_dump($name);

define("HOST", "localhost");
define("DB_NAME", "maria_db");

echo "{HOST} connects with {DB_NAME}<br>";

CONST URL = "https://1.1.1.1";
echo URL;

echo "<br>";
echo "<h1>This is a heading bro</h1>";

// Arrays
$numbers = [21, 3, 12, 22, 69];
print_r($numbers);
echo "<br>";

$matrix = [
    [69, 420],
    [21, 42],
    [43, 25],
    [67, 74]
];

print_r($matrix);
echo "<br>";

var_dump($matrix);
echo "<br>";

$names = array("Tushar", "Daniiel", "Sussybaka", "Ben Dover", "JJ Outani");
print_r($names);

// Conditionals
if($names) {
    echo "names are defined.<br>";
} else {
    echo "names are not defined.<br>";
}

if($not_defined_varaible) {
    echo "this should not print at all";
} else {
    echo "this should print bro<br>";
}

if(2<1) {
    echo "wow";
} elseif(4<3) {
    echo "wow2";
} else {
    echo "wow bro this is correct<br>";
}

echo "<br>";

$posts = ["first post"];
if (!$posts) {
    echo "no posts<br>";
} else {
    echo $posts[0];
}

// Ternary Operator
$first_post = !empty($posts) ? $posts[0] : null;

$second_post = $posts[0] ?? null;

// Loops
echo "<h3>Loops</h3>";

echo "<h4>For Loops</h4>";

for($i=0; $i<10; $i++) {
    echo "<p>The value of i is <b>${i}</b></p>";
}

echo "<h4>While Loops</h4>";

$num = 0;
while($num < 10) {
    echo "<p>The value of num is <b>${num}</b></p>";
    $num++;
}

echo "<h4>Do While Loops</h4>";

do {
    echo "<p>The do block</p>";
} while($num < 10);

echo "<h4>Foreach Loops</h4>";

$persons = ["Tushar", "Linus", "Richard", "Edwen"];

foreach($persons as $person) {
    echo "<h5>${person} !!</h5>";
}

for($x=0; $x<count($persons); $x++) {
    echo "<h5>${person} !! from the for loop.</h5>";
}

foreach($persons as $index => $person) {
    echo "<h5>${index} number is ${person}</h5>";
}
?>