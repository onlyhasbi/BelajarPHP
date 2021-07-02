<?php

$name = "Hasbi"; //GLOBAL SCOPE
$id = 432;

function hello(){
    $age = 90; //LOKAL SCOPE

    global $name;
    echo $name.PHP_EOL;
    echo $GLOBALS["id"].PHP_EOL;
    echo "ini adalah cara untuk mengakses global variable, {$GLOBALS["name"]}";
}

function increment(){
    static $counter = 1; 
    echo "Counter = $counter".PHP_EOL;
    $counter++;
}

hello();

increment();
increment();
increment();