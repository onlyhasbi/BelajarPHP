<?php

$nama = "Andi";

$otherNama = &$nama;
$otherNama = "Hasbi";


echo $nama.PHP_EOL;

$number = 4;
echo "before : $number".PHP_EOL;

function increment(int &$value){
    $value++;
}

increment($number);

echo "after : $number".PHP_EOL;


function &getValue(){
    static $value = 100;
    return $value;
}

$numb = &getValue();
echo "number before: $numb".PHP_EOL;

$val = &getValue();
$val = 60;
echo "after : $val".PHP_EOL;