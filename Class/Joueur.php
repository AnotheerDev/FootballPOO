<?php

class Joueur
{
    //Attributs:
    private int $idJoueur;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;


    public function __construct(int $idJoueur, string $nom, string $prenom, string $dateNaissance)
    {
        $this->idJoueur = $idJoueur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
    }


    public function getIdJoueur()
    {
        return $this->idJoueur;
    }


    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }


    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
}
