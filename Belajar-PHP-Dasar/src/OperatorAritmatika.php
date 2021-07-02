<?php
$a = 8;
$b = 2;

$result =  $a + $b;
var_dump($result);

$result =  $a * $b;
var_dump($result);

$result =  $a / $b;
var_dump($result);

$result =  $a - $b;
var_dump($result);

$result =  $a % $b;
var_dump($result);

$result =  $a ** $b;
var_dump($result);

$resultNegative = -$result;
$resultPositive = +$result;

var_dump($resultNegative);
var_dump($resultPositive);