<?php

/*ketika file tidak ditemukan maka program
tetap berlanjut */

include "lib/MyFunction.php";

/*digunakan untuk membuka file yang
sama berkali-kali
*/
include_once "lib/MyFunction.php"; 

echo sayHello("Muhammad","Hasbi");