<?php

$name = "Eko";
echo  $name;

$name = null;

$age = null;
echo $age;

$age = 49;
echo "\n".$age."\n";

$name = "Sambalu";
echo "Is name null ? ";
echo var_dump(is_null($name));


$contoh = "ini isi variable";
//unset($contoh); //Unset menghapus variabel
echo $contoh."\n";

var_dump(isset($contoh));