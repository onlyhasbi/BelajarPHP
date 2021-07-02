<?php

$a = 7;

$a++;
var_dump($a);

++$a;
var_dump($a);

$a--;
var_dump($a);

--$a;
var_dump($a);

$b = 10;
$c = $b++;
var_dump($c);

$c = ++$b;
var_dump($c);
