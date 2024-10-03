<?php
use src\Class\Humain;
include_once "vendor/autoload.php";


$giroud = new Humain(nom:"Giroud", prenom: "Olivier", dateNaissance: new DateTime("1986-09-01"));

$nom = $giroud->getNom();
echo "le nom :$nom\n";

$giroud->setNom(nom: "Juste Super");
$nom = $giroud->getNom();

echo $giroud->donneTexte();