<?php

class Personnage
{

    protected $nom;

    protected $pdv;

    protected $pa;

    function __construct(String $name, Int $pdv, Int $pa)
    {
        $this->nom = $name;
        $this->pdv = $pdv;
        $this->pa = $pa;
    }

    public function getNom(): String
    {
        return $this->nom;
    }
    public function getPdv(): Int
    {
        return $this->pdv;
    }
    public function getPa(): Int
    {
        return $this->pa;
    }

    public function setPdv($pdv): void
    {
        $this->pdv = $pdv;

    }

    // $cible: represente le personnage à attaquer
    function attaque (Personnage $cible): Void
    {
        $cible->setPdv($cible->getPdv() - $this->pa);

        echo "$this->nom attaque " . $cible->getNom() . " avec $this->pa points de dégâts.";
        if ($cible->getPdv() <= 0) {
            echo $cible->getNom() . " est mort.";
        }
    } 


}
