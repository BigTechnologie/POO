<?php

namespace Vehicules;

class Vehicule {
    
    public $marque;

    const TVA = "20%";

    function __construct(string $marque)
    {
        $this->marque = $marque;
    }

    
 
    public function getMarque()
    {
        return $this->marque;
    }

   
    public function setMarque($marque)
    {
        $this->marque = $marque;
       
    }
}