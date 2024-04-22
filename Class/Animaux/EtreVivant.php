<?php

namespace Animaux;
interface EtreVivant {

    function seNourrir (int $quantité);

    function dormir (int $durée);
}