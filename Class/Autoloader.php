<?php


/* 
 On definit une class Autoloader qui fournit un mecanisme d'autoloading, permettant de charger automatiquement les class PHP lorqu'elles sont 
 instanciées ou utilisées
*/
class Autoloader {

    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class) {
        require 'Class/' . $class . '.php';
    }

}

// On appelle la méthode static register de la class Autoloader par ::
Autoloader::register();

