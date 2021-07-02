<?php

function foo(){
    echo "Foo".PHP_EOL;
}

function bar(){
    echo "Bar".PHP_EOL;
}

$callFunction = "foo";
$callFunction();

$callFunction = "bar";
$callFunction();

// function sayHello(string $name, $filter){
//     $finalName = $filter($name);
//     echo "Hello $finalName".PHP_EOL;
// }

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName".PHP_EOL;
}

function user(string $name) : string {
    return "user $name";
}

sayHello("Hasbi","user");
sayHello("Khaulah","strtoupper");
sayHello("Khalid","strtolower");
