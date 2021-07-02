<?php
//ketika file tidak ditemukan maka program
//akan berhenti secara paksa

require "lib/MyFunction.php";

/*digunakan untuk membuka file yang
sama berkali-kali
*/
require_once "lib/MyFunction.php"; 

echo sayHello("Amriati","Amril");

