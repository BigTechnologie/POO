<?php

class Voleur extends Personnage {

    function volALaTire (): void
    {
        echo "$this->nom dépouille l'ennemi !";
    }
}