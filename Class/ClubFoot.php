<?php

class ClubFoot
{
    //Attributs:
    private int $idClub;
    private string $nom;
    private DateTime $dateCreation;


    public function __construct(int $idClub, string $nom, DateTime $dateCreation)
    {
        $this->idClub = $idClub;
        $this->nom = $nom;
        $this->dateCreation = $dateCreation;
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
}
