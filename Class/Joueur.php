<?php

class Joueur
{
    //Attributs:
    private int $idJoueur;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private Pays $pays;
    private array $contrats;


    public function __construct(int $idJoueur, string $nom, string $prenom, string $dateNaissance, Pays $pays)
    {
        $this->idJoueur = $idJoueur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->pays = $pays;
        $this->contrats = [];
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
        return $this->dateNaissance->format('d-m-Y');
    }


    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
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
        return $this->prenom . $this->nom;
    }


    public function ajouterContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }


    public function getContratJoueur()
    {
        $contrats = [];

        foreach ($this->contrats as $contrat) {
            $contrats[] = $contrat;
        }

        return $contrats;
    }
}

