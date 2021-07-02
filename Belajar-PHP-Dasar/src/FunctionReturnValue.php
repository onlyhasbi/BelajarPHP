<?php

function sum(int $a,int $b) : int {
    return $a+$b;
}

// $total = sum(45,32);
// var_dump($total);

function getFinalValue(int $nilai) : string {
    if($nilai>=80){
        return "A";
    } else if($nilai>=70){
        return "B";
    } else if($nilai>=60){
        return "C";
    } else if($nilai>=50){
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(65);
var_dump($score);

$score = sum(65,35);
var_dump($score);