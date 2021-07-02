<?php

$a = 34;
$b = 2;

$a+=$b;
var_dump($a);

$a-=$b;
var_dump($a);

$a*=$b;
var_dump($a);

$a/=$b;
var_dump($a);

$a%=$b;
var_dump($a);

$total = 0;

$fruit = 5_000;
$chicken = 10_000;
$juice = 5_000;

$total += $fruit;
$total += $chicken;
$total += $juice;
var_dump($total);
