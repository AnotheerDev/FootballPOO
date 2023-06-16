<?php

class ClubFoot
{
    //Attributs:
    private int $idClub;
    private string $nom;
    private DateTime $dateCreation;
    private Pays $pays;


    public function __construct(int $idClub, string $nom, string $dateCreation, Pays $pays)
    {
        $this->idClub = $idClub;
        $this->nom = $nom;
        $this->dateCreation = new DateTime($dateCreation);
        $this->pays = $pays;
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
        return $this->dateCreation;
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
}
