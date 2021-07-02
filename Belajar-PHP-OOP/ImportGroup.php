<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1,Sample,Dummy};
use function Helper\{helpMe as help};
use const Helper\{APPLICATION as APP};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();