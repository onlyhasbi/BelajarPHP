<?php

// function factorial(int $number) : int {
//     $total = 1;
//     for($i = 1;$i<=$number;$i++){
//         $total *= $i;
//     }
//     return $total;
// }


// function factorialRecursive(int $number) : int {
//     if($number==1){
//         return 1;
//     } else {
//         return $number*factorialRecursive($number-1);
//     }
// }
// var_dump(factorial(5));
// var_dump(1*2*3*4*5);

function loopRecursive(int $number){
    if($number == 0) {
        echo "End Loop".PHP_EOL;
    } else {
        echo "Loop".$number.PHP_EOL;
        loopRecursive($number-1);
    }
}

loopRecursive(100);


