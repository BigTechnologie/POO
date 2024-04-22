<?php

include 'Class/Autoloader.php';

$guerrier = new Guerrier("Jean", 100, 10);
$marge = new Marge("Gandalf", 50, 15);
$voleur = new Voleur("Bill", 15, 5);

$marge->attaque($voleur);