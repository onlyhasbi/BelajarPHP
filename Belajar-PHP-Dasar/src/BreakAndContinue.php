<?php 

// $counter = 0;

// for($counter=0;$counter<10;$counter++){
//     if($counter%2==0) continue;
//     echo "Angka Ganjil $counter".PHP_EOL;
// }

// $counter = 0;
// while($counter<20){
//     if($counter%2==0) {
//         $counter++;
//         continue;
//     }

//     if($counter==11) {
//         break;
//     }

//     echo "counter $counter".PHP_EOL;  
//     $counter++;
// }

$counter = 0;
while(true){
    echo "counter $counter".PHP_EOL;
    if($counter>10)
        break;
    $counter++;
}