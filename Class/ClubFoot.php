<?php

class ClubFoot
{
    //Attributs:
    private int $idClub;
    private string $nom;
    private DateTime $dateCreation;
    private Pays $pays;
    private array $contrats;


    public function __construct(int $idClub, string $nom, string $dateCreation, Pays $pays )
    {
        $this->idClub = $idClub;
        $this->nom = $nom;
        $this->dateCreation = new DateTime($dateCreation);
        $this->pays = $pays;
        $this->contrats = [];
        $pays->ajouterClubFoot($this);
    }


    // getter et setter pour chaque attribut de ma class :
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;
    }


    public function getIdClub()
    {
        return $this->idClub;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getDateCreation()
    {
        return $this->dateCreation->format('d-m-Y');
    }


    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }


    public function getPays()
    {
        return $this->pays;
    }


    public function setPays($pays)
    {
        $this->pays = $pays;
    }


    public function __toString()
    {
        return $this->nom;
    }


    public function ajouterContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }


    public function getJoueursDuClub()
    {
        $contrats = [];

        foreach ($this->contrats as $contrat) {
            $contrats[] = $contrat->getJoueur();
        }

        return $contrats;
    }
}
