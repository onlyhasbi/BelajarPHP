<?php

$first = array(
    "first_name"=>"Hasbi",
);

$last = [
    "last_name"=>"Haerurrijal",
    "first_name"=>"Hasbi"
];

$full = $first+$last;
var_dump($full);

$a = array(
    "first_name"=>"Hasbi",
    "last_name"=>"Haerurrijal"
);

$b = [
    "last_name"=>"Haerurrijal",
    "first_name"=>"Hasbi"
];

var_dump($a==$b);
var_dump($a===$b);
var_dump($a!==$b);
