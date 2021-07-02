<?php

$names = ["Hasbi","Amriati","Khaulah"];

$stringNames = join(".",$names); // menggabungkan array menjadi string
echo $stringNames.PHP_EOL;

$stringNames = implode("-",$names);
echo $stringNames.PHP_EOL;

$nama = "Andi Muhammad Hasbi Haerurrijal";

var_dump(strtolower($nama));
var_dump(strtoupper($nama));

$arrNama = explode(" ",$nama); //memecah string menjadi array
foreach($arrNama as $value){
    echo $value.PHP_EOL;
}

$nama = "         Andi Muhammad Hasbi Haerurrijal          ";
$trimNama = trim($nama);
echo $trimNama.PHP_EOL;