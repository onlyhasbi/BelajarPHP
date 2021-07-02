<?php

$nilai = 70;
$absen = 60;

// if($nilai>=80 && $absen>80){
//     echo "Selamat anda lulus.\nNilai anda A".PHP_EOL;
// } else if($nilai>=70 && $absen>=70) {
//     echo "Selamat anda lulus.\nNilai anda B".PHP_EOL;
// } else if($nilai>=60 && $absen>=60) {
//     echo "Selamat anda lulus.\nNilai anda C".PHP_EOL;
// } else if($nilai>=50 && $absen>=50) {
//     echo "Maaf, anda Gagal.\nNilai anda D".PHP_EOL;
// }
// else {
//     echo "Maaf, anda Gagal.\nNilai anda E".PHP_EOL;
// }

if($nilai>=80 && $absen>80) :
    echo "Selamat anda lulus.\nNilai anda A".PHP_EOL;
elseif($nilai>=70 && $absen>=70) :
    echo "Selamat anda lulus.\nNilai anda B".PHP_EOL;
elseif($nilai>=60 && $absen>=60) :
    echo "Selamat anda lulus.\nNilai anda C".PHP_EOL;
elseif($nilai>=50 && $absen>=50) :
    echo "Maaf, anda Gagal.\nNilai anda D".PHP_EOL;
else :
    echo "Maaf, anda Gagal.\nNilai anda E".PHP_EOL;
endif;