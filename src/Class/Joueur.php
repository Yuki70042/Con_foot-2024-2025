<?php

namespace App\Class;

use DateTime;

class Joueur extends Humain
{

    private int $numero ;
    private string $poste;

    public function __construct(string $nom, string $prenom, datetime $dateNaissance, int $numero, string $poste)
    {
        parent::__construct($nom, $prenom, $dateNaissance);

        //Construction propre au joueur
        $this->numero = $numero;
        $this->poste = $poste;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getPoste(): string
    {
        return $this->poste;
    }


    public function donneTexte():string {
        return "Joueur : ".$this->getNom()." ".$this->getPrenom()." ".$this->getDateNaissance()->format("d/m/Y").
            " ".$this->getNumero()." ".$this->getPoste();
    }
}