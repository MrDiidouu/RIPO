<?php
            // Définition de la classe Personne
            class Personne {
                // Déclaration des propriétés de la classe avec une visibilité publique
                public $prenom; // Stocke le prénom de la personne
                public $nom;    // Stocke le nom de la personne
                public $age;    // Stocke l'âge de la personne
            
                // Constructeur de la classe Personne
                // Initialise les propriétés prénom, nom et âge lors de la création de l'objet
                public function __construct($prenom,  $nom, $age) {
                    $this->prenom = $prenom; // Initialisation du prénom
                    $this->nom = $nom;       // Initialisation du nom
                    $this->age = $age;       // Initialisation de l'âge
                }
            }
            
            // Création d'une instance de Personne pour Napoléon Bonaparte
            $Personne1 = new Personne('Margot', 'Magne', 23);
            
            // Affichage des propriétés de l'objet $Napoleon
            echo $Personne1->prenom.PHP_EOL; // Affiche le prénom : Napoléon
            echo $Personne1->nom.PHP_EOL;    // Affiche le nom : Bonaparte
            echo $Personne1->age.PHP_EOL;    // Affiche l'âge : 51
            
            // Saut de ligne HTML pour séparer les affichages
            echo '<br>';
            
            // Création d'une autre instance de Personne pour Alexandre le Grand
            $Alexandre = new Personne('Alexandre', 'LeCon', 32);
            
            // Affichage des propriétés de l'objet $Alexandre
            echo $Alexandre->prenom.PHP_EOL; // Affiche le prénom : Alexandre
            echo $Alexandre->nom.PHP_EOL;    // Affiche le nom : Legrand
            echo $Alexandre->age.PHP_EOL;    // Affiche l'âge : 32
            ?>