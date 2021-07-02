<?php
require_once "data/Person.php";

$person = new Person("Hasbi","Manggala");
$person->name = "Andi Muhammad Hasbi";
$person->address = "Antang";
$person->country = "Makassar";

echo $person->name.PHP_EOL;
echo $person->address.PHP_EOL;
echo $person->country.PHP_EOL;

echo PHP_EOL;

$budi = new Person("Rangga","Palopo");
$budi->name = "Rangga";
$budi->address = "Bassiang";
$budi->sayHello("Budi");

// $person2->country = "Palopo";
// echo $person2->name.PHP_EOL;
// echo $person2->address.PHP_EOL;
// echo $person2->country.PHP_EOL;
//var_dump($person);

$amin = new Person("Amin","Bulukumba");
$amin->sayHello();

echo PHP_EOL;

$budi->info();
$amin->info();
