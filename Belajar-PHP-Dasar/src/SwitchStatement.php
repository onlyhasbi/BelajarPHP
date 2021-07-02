<?php

$nilai = "A";

// switch($nilai){
//     case "A" :
//         echo "Selamat anda lulus dengan sangat baik".PHP_EOL;
//         break;
//     case "B" :
//     case "C" :
//         echo "Selamat anda lulus".PHP_EOL;
//         break;
//     case "D" :
//         echo "Maaf, anda tidak lulus".PHP_EOL;
//         break;
//     default : 
//         echo "Mungkin anda salah jurusan".PHP_EOL;
// }

switch($nilai) :
    case "A" :
        echo "Selamat anda lulus dengan sangat baik".PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Selamat anda lulus".PHP_EOL;
        break;
    case "D" :
        echo "Maaf, anda tidak lulus".PHP_EOL;
        break;
    default : 
        echo "Mungkin anda salah jurusan".PHP_EOL;
    endswitch;