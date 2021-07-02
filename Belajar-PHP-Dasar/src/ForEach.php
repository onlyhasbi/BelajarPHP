<?php

$names = ["HASBI","RIA","KHAULAH"];

// for($counter=0;$counter<count($names);$counter++){
//     echo $names[$counter].PHP_EOL;
// }

// foreach($names as $name){
//     echo $name.PHP_EOL;
// }

$person = [
    "first_name" => "Andi",
    "middle_name" => "Muhammad",
    "last_name" => "Hasbi"
];

foreach($person as $key => $value){
    echo "$key : $value".PHP_EOL;
}