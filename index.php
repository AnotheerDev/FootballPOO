<h1>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des équipes de football.</h1>

<p>Une équipe (ou club) possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid), une date de création et un ensemble de joueursChaque équipe appartient à un pays (France, Espagne, Allemagne, ...) et chaque joueur a une nationalité (France, Espagne, Allemagne, ...)
    Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison)</p>


<h2>Résultat</h2>




<?php

// façon plus rapide de faire ( autochargement des class) ça evite d'oublier des class sur des plus gros projets :
spl_autoload_register(function ($class_name) {
    require 'class/' . $class_name . '.php';
});


//objet : Pays
$france = new Pays("1", "France");
$espagne = new Pays("2", "Espagne");
$angleterre = new Pays("3", "Angleterre");
$italie = new Pays("4", "Italie");


// objet : ClubFoot
$psg = new ClubFoot("1", "PSG", "12-06-1978", $france);
$rcs = new ClubFoot("2", "Racing Club Strasbourg", "22-12-1999", $france);
$fcBarcelone = new ClubFoot("3", "FC Barcelon", "05-08-1958", $espagne);
$juventus = new ClubFoot("4", "Juventus", "30-10-1966", $italie);
$manchesterUnited = new ClubFoot("4", "Manchester United", "10-11-1955", $angleterre);


//objet : Joueur
$lionelMessi = new Joueur("1", "Messi", "Lionel", "20-12-1988", $espagne);
$killianMbappe = new Joueur("2", "Mbappe", "Killian", "18-02-1998", $france);
$cristianoRonaldo = new Joueur("3", "Ronaldo", "Cristiano", "29-06-1968", $italie);
$neymarJunior = new Joueur("4", "Junior", "Neymar", "11-02-1978", $angleterre);

//objet : Contrat
$contrat1 = new Contrat($psg, $neymarJunior, "1", "10-01-2021");
$contrat2 = new Contrat($fcBarcelone, $neymarJunior, "2", "20-02-2022");
$contrat3 = new Contrat($fcBarcelone, $lionelMessi, "3", "18-05-2019");
$contrat4 = new Contrat($psg, $lionelMessi, "4", "09-06-2021");
$contrat5 = new Contrat($fcBarcelone, $cristianoRonaldo, "5", "10-01-2021");
$contrat6 = new Contrat($juventus, $cristianoRonaldo, "6", "10-01-2021");
$contrat7 = new Contrat($manchesterUnited, $cristianoRonaldo, "7", "10-01-2021");
$contrat8 = new Contrat($psg, $killianMbappe, "8", "18-11-2017");