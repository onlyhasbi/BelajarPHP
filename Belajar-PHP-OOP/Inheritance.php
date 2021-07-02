<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Andi");

$vicePresident = new VicePresident();
$vicePresident->name = "Rafli";
$vicePresident->sayHello("Rangga");