<?php

$name = "Hasbi";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . PHP_EOL;

$numToString = (string)100;
var_dump($numToString);

$stringToNum = (int)"100";
var_dump($stringToNum);

$stringToFloat = (float)"100.11";
var_dump($stringToFloat);

echo $name[0].PHP_EOL;
echo $name[1].PHP_EOL;
echo $name[2].PHP_EOL;
echo $name[3].PHP_EOL;
echo $name[4].PHP_EOL;

echo "Hello ".$name.", nice to meet you".PHP_EOL;
echo "Hello $name, nice to meet you".PHP_EOL;
echo "Hello {$name}'s, nice to meet you".PHP_EOL;