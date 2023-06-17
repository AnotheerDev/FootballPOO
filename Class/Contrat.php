<?php

class Contrat
{
    //Attributs:
    private ClubFoot $clubFoot;
    private Joueur $joueur;
    private int $idContrat;
    private DateTime $dateContrat;


    public function __construct(ClubFoot $clubFoot, Joueur $joueur, int $idContrat, string $dateContrat)
    {
        $this->clubFoot = $clubFoot;
        $this->joueur = $joueur;
        $this->idContrat = $idContrat;
        $this->dateContrat = new DateTime($dateContrat);
    }


    // getter et setter pour chaque attribut de ma class :
    public function getclubFoot()
    {
        return $this->clubFoot;
    }


    public function setclubFoot($clubFoot)
    {
        $this->clubFoot = $clubFoot;
    }


    public function getjoueur()
    {
        return $this->joueur;
    }


    public function setjoueur($joueur)
    {
        $this->joueur = $joueur;
    }


    public function getIdContrat()
    {
        return $this->idContrat;
    }


    public function setIdContrat($idContrat)
    {
        $this->idContrat = $idContrat;
    }


    public function getDateContrat()
    {
        return $this->dateContrat->format('d-m-Y');
    }


    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;
    }


    public function __toString()
    {
        return $this->clubFoot . $this->joueur;
    }
}
