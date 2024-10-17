<?php

namespace App\Class;

class Evenement
{
    private time $heureEvenement;
    private string $descriptionEvenement;

    private string $dateEvenement;

    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance,  int $numero, Equipe $equipe)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->equipe = $equipe;
        $equipe->ajouterJoueur($this);
        //Construction propre au joueur
        $this->numero = $numero;
    }
}