<?php
    $name = "Dickerson";
    $age = 20;
    $salary = 8000.32;

    echo "$name is $age years old and earns $salary rupees monthly.";
    echo "<br>";

    $persons = [
        [
            "name" => "Tushar",
            "phone" => "7870218634",
            "email" => "tushar@tushgaurav.in"
        ],
        [
            "name" => "Sryesh",
            "phone" => "9934197121",
            "email" => "sryesh@sryesh.net"
        ]
        ];

    // var_dump($persons);
    if($persons) {
        print_r($persons[0]);
    }

    if($posts) {
        echo "posts are defined";
    } else {
        echo "posts are not defined";
    }

    echo "<br>";

    define("HOST", "localhost");
    echo HOST;

    echo "<br>";

    CONST DB_NAME = "maria_db";
    echo DB_NAME;

    var_dump(json_decode(json_encode($persons)));
?>