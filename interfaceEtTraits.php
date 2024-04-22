<?php

use Animaux\Jaguar as AJaguar; // alias de nom
use Vehicules\Jaguar as VJaguar;

include 'Class/Autoloader.php';

$jaguar1 = new AJaguar();
$jaguar1->seNourrir(4);
$jaguar1->dormir(24);

$jaguar2 = new VJaguar("Jaguar", 150000, 'V8', 3);
$jaguar2->presenter();

var_dump($jaguar2);