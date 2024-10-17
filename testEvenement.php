<?php

use App\Class\Evenement;

include_once "vendor/autoload.php";

$evenement= new Evenement(horaire : '00:00', description : "Test Evenement");

echo $evenement->donneTexte();

$description = $evenement->getDescription();
echo $description;