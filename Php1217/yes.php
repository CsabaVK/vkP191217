<?php
$f = fopen("file.txt", 'a+');

$t = [
    [
        "cím" => "posvages",
        "hossz" => "137"
    ],
    [
        "cím" => "class",
        "hossz" => "37"
    ]
    ];

foreach ($t as $film) {
    foreach ($film as $key => $value) {
        fputs($f, $key."=>".$value."\"");
    }
}

?>