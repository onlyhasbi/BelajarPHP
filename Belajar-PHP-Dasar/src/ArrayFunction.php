<?php

$data = [1,2,3,4,5,6,7,8,9,10];

$mapFunction = fn(int $value) => $value * 10;
$mapResult = array_map($mapFunction,$data);
var_dump($mapResult);

$data = array_map(fn(int $value) => $value * 5,$data);
var_dump($data);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "Muhammad",
    "last_name" => "Hasbi"
];

var_dump(array_keys($person));
var_dump(array_values($person));