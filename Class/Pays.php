<?php

class Pays
{
    //Attributs:
    private int $idPays;
    private string $nom;
    private array $clubFoots;


    public function __construct(int $idPays, string $nom)
    {
        $this->idPays = $idPays;
        $this->nom = $nom;
        $this->clubFoots = [];
    }


    // getter et setter pour chaque attribut de ma class :
    public function getIdPays()
    {
        return $this->idPays;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function setIdPays($idPays)
    {
        $this->idPays = $idPays;
    }


    public function __toString()
    {
        return $this->nom;
    }

    
}
