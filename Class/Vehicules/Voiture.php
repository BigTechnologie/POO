<?php

namespace Vehicules;

class Voiture extends Vehicule {

    private $prix;

    private $moteur;

    private $portes;

    function __construct(string $marque, Int $prix, string $moteur, Int $portes)
    {
        $this->marque = $marque;
        $this->prix = $prix;
        $this->moteur = $moteur;
        $this->portes = $portes;

    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getPortes()
    {
        return $this->portes;
    }

    function presenter() {
        echo "$this->marque, $this->prix" . "£, $this->moteur, $this->portes portes.";
    }
}