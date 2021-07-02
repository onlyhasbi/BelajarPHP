<?php

$value = array(1,2,3,4,5);
var_dump($value);

$names=["Hasbi","Amriati","Khaulah","Khalid"];
var_dump($names);

var_dump($names[1]); //Akses Array

$value[4]=99;
var_dump($value[4]);

$value[] = 199;
var_dump($value[5]);
//unset($value[0]); //hati hati menggunakan unset di array
// karena ia akan menghapus index yang ada sehingga melompat
// ke angka berikutnya
var_dump($value[0]);
var_dump(count($value));

