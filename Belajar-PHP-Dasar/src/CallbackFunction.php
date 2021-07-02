<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter,$name);
    echo "Hello $finalName".PHP_EOL;
}

sayHello("Hasbi","strtolower");
sayHello("amriati","strToupper");

sayHello("Khalid",function(string $name) : string{
    return strtoupper($name);
});

sayHello("wardin",fn($name) => strtolower($name));