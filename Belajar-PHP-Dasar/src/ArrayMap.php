<?php

$hasbi = array(
    id => 2342,
    nama => "Hasbi",
    umur => 29,
    address => array(
        street => "Jalan gagak",
        country => "Malaysia"
    )
);


$ria = [
    id => 5323,
    nama => "Amriati",
    umur => 31,
    address => [
        street => "Jalan Bunaken",
        country => "Indonesia"
    ]
];


var_dump($hasbi);
var_dump($hasbi["id"]);
var_dump($hasbi["nama"]);

var_dump($ria["id"]);
var_dump($ria["nama"]);

var_dump($hasbi["address"]["country"]);


