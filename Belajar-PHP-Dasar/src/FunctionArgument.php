<?php

//pastikan default argument berada dibelakang
//agar pada saat set tidak kebingungan
// function sayHi($age,$name="Guest"){
//   echo "Hello $name, i'm $age years old".PHP_EOL;
// }

// sayHi(29,"Hasbi");
// sayHi(23);
// sayHi(2,"Khaulah");

// function sum(int $a,int $b){
//   $total = $a + $b;
//   echo "$a + $b = $total".PHP_EOL;
// }

// sum("40","40");
// sum(20,20);
// sum(true,false);

function sumAll($operator,int...$numbers){

  switch($operator){
    case "+" : 
            $total = 0;
            foreach($numbers as $value)
              $total+=$value;
            break;
    case "-" :
            $total = $numbers[0]*2; 
            foreach($numbers as $value){
              $total-=$value;
            }
            break;
    case"*" :
            $total=1;
            foreach($numbers as $value) 
              $total*=$value;
            break;
  }

  echo "Total ".implode($operator,$numbers)." = $total";
}

sumAll("*",100,34,2,4); //default
// sumAll("*",...[100,34,2,4]); //accepted
// sumAll("*",[100,34,2,4]); //error


// function sumAll(array $numbers){
//   $total=0;
//   foreach($numbers as $value){ 
//     $total+=$value;
//   }

//   echo "Total ".implode("+",$numbers)." = $total";
// }

// sumAll([3,5,2,3,4]);


// function sumAll(int...$numbers){
//   $total=0;
//   foreach($numbers as $value){ 
//     $total+=$value;
//   }

//   echo "Total ".implode("+",$numbers)." = $total";
// }

// sumAll(100,34,2,2);





