<?php

$sayHello = function(string $name){
    echo "Hello $name".PHP_EOL;
};

$sayHello("Hasbi");


function sayGoodBye(string $name,$filter){
    $finalName = $filter($name);
    echo "GoodBye ".$finalName.PHP_EOL;
}

// sayGoodBye("Hasbi",function(string $name) : string {
//     return strtoupper($name);
// });

$filterFunction = function(string $name) : string {
    return strtoupper($name);
};

sayGoodBye("Hasbi",$filterFunction);

$firstName = "Muhammad";
$lastName = "Hasbi";

$sayHi = function() use ($firstName,$lastName){
    echo "Hello $firstName $lastName".PHP_EOL;
};

$sayHi();
