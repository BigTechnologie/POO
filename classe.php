<?php 

class Voiture {
    public $marque; // public car la prpriété est accessible de partout. C'est par défaut*

    private $prix; //car la propriété est accessible uniquement au sein de la class ou avec les getter et setters après héritage

    protected $moteur; //car la propriété est accessibe au sein de la class et par les class derivées de cette class

    function __construct(string $marque, Int $prix, String $moteur)
    {
        $this->marque = $marque;
        $this->prix = $prix;
        $this->moteur = $moteur;
    }

   
    public function getPrix()
    {
        return $this->prix;
    }


    public function setPrix($prix): void
    {
        $this->prix = $prix;

    }

    function vroom (): void
    {
        echo 'VROOM !';
    }

    function __destruct()
    {
        echo 'Script terminé !';
    }

}

// On crée ou on instancie un objet Voiture à partir de la class Voiture
$test = new Voiture('Renault', 10000, 'V12');

var_dump($test);