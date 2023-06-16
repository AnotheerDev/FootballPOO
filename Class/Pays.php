<?php

class Pays
{
//Attributs:
    private int $idPays;
    private string $nom;


    public function __construct(int $idPays, string $nom)
    {
        $this->idPays = $idPays;
        $this->nom = $nom;
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
}
