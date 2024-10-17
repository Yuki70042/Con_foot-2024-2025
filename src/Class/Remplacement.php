<?php

namespace App\Class;

use Cassandra\Time;

class Remplacement extends Evenement
{
    public function __construct(time $horaire, string $description, string $joueurSortant, string $joueurEntrant)
    {
        // Construction propre au parent
        parent::__construct($horaire, $description);

        //Construction propre au Remplacement
        $this->joueurSortant = $joueurSortant;
        $this->joueurEntrant = $joueurEntrant;
    }

    public function getjoueurSortant(): string
    {
        return $this->joueurSortant;
    }

    public function getjoueurEntrant(): string
    {
        return $this->getjoueurSortant();
    }

    public function setjoueurSortant(string $joueurSortant): void{
        $this->joueurSortant = $joueurSortant;
    }

    public function setjoueurEntrant(string $joueurEntrant): void{
        $this->joueurEntrant = $joueurEntrant;
    }
    public function donneTexte(): string
    {
        return "Remplacement : \n Joueur Entrant:".$this->getjoueurEntrant()."\n Joueur Sortant: ".$this->getjoueurSortant();
    }

}