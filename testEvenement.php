<?php

use App\Class\Evenement;

include_once "vendor/autoload.php";

$evenement= new Evenement(horaire :(new DateTime('10:36')), description : "Remplacement");

echo $evenement->donneTexte();

$description = $evenement->getDescription();
