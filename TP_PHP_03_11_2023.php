<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP 03/11/2023</title>
</head>
<body>
    <?php
    include_once("../entete.php");
    ?>
    <?php 
    echo "<br><br><br><br> Exercice 1 <br><br>";
    $nombre = 15; // Remplacez 15 par le nombre que vous souhaitez tester

    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo "Le nombre est à la fois un multiple de 3 et de 5.";
    } else {
        echo "Le nombre n'est pas un multiple de 3 et de 5.";
    }
    
    echo "<br><br><br><br> Exercice 2 <br><br>";
    $sexe = "féminin";
    $age = 18; // Remplacez la valeur de l'âge par celle que vous souhaitez tester

    if ($sexe === "féminin" && $age >= 21 && $age <= 40) {
        echo "Bienvenue à notre événement pour les femmes âgées de 21 à 40 ans.";
    } else {
        echo "Désolé, vous ne remplissez pas les critères d'âge et de sexe pour cet événement.";
    }

    echo "<br><br><br><br> Exercice 3 <br><br>";
    $sequence = array(); // Un tableau pour stocker la séquence
    $nbre_impair = 0; // Compteur pour les nombres impairs
    $nbre_pair = 0; // Compteur pour les nombres pairs

    while (true) {
        $nombre = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100

        if ($nombre % 2 == 0) {
            // Le nombre est pair
            if ($nbre_pair == 0) {
                $sequence[] = $nombre; // Ajoute le nombre pair à la séquence
                $nbre_pair++;
            } else {
                // Réinitialise la séquence si on a déjà obtenu un nombre pair
                $sequence = array();
                $nbre_pair = 0;
                $nbre_impair = 0;
            }
        } else {
            // Le nombre est impair
            if ($nbre_pair > 0 && $nbre_impair < 2) {
                $sequence[] = $nombre; // Ajoute le nombre impair à la séquence
                $nbre_impair++;
            }
        }

        if ($nbre_pair == 1 && $nbre_impair == 2) {
            // On a obtenu la séquence souhaitée
            break;
        }
    }

    // Affiche la séquence obtenue
    echo "Séquence obtenue : " . implode(", ", $sequence);

    echo "<br><br><br><br> Exercice 4 <br><br>";
    
    // Numéro de départ
    $numeroImmatriculation = 100;

    // Tableau pour stocker les numéros particuliers
    $numerosParticuliers = [];

    while ($numeroImmatriculation <= 999) {
        $immatriculation = sprintf("%03d PHP 75", $numeroImmatriculation);

        // Vérifier si le premier groupe de chiffres est un multiple de 100
        if ($numeroImmatriculation % 100 == 0) {
            $numerosParticuliers[] = $immatriculation;
        }

        // Afficher le numéro d'immatriculation
        echo $immatriculation . "<br>";

        // Augmenter le numéro d'immatriculation
        $numeroImmatriculation++;
    }

    // Afficher les numéros particuliers
    echo "Numéros particuliers (premier groupe de chiffres est un multiple de 100):<br>";
    foreach ($numerosParticuliers as $numeroParticulier) {
        echo $numeroParticulier . "<br>";
    }

    echo "<br><br><br><br> Exercice 5 <br><br>";
    
    // Nombre initial choisi (par exemple, 456)
    $nombreInitial = 456;
    $tirages = 0;

    // Boucle while pour effectuer des tirages aléatoires
    while (true) {
        $tirage = rand(100, 999); // Génère un nombre aléatoire à trois chiffres
        $tirages++;

        if ($tirage === $nombreInitial) {
            break; // Sort de la boucle si le tirage est égal au nombre initial
        }
    }

    echo "Nombre initial : $nombreInitial<br>";
    echo "Nombre de coups réalisés (boucle while) : $tirages<br>";
    
    // Nombre initial choisi (par exemple, 456)
    $nombreInitial = 456;

    // Boucle for pour effectuer des tirages aléatoires
    for ($tirages = 1; ; $tirages++) {
        $tirage = rand(100, 999); // Génère un nombre aléatoire à trois chiffres

        if ($tirage === $nombreInitial) {
            break; // Sort de la boucle si le tirage est égal au nombre initial
        }
    }

    echo "Nombre initial : $nombreInitial<br>";
    echo "Nombre de coups réalisés (boucle for) : $tirages<br>";






    echo "<br><br><br><br> Exercice 6 <br><br>";
    
    // Création du tableau
    $tableau = [];

    // Remplissage du tableau avec des lettres de A à Z
    $indiceMin = 11;
    $indiceMax = 36;
    $lettre = 'A';

    for ($i = $indiceMin; $i <= $indiceMax; $i++) {
        $tableau[$i] = $lettre;
        $lettre++;
    }

    // Affichage du tableau avec une boucle for
    echo "Affichage du tableau avec une boucle for :<br>";
    for ($i = $indiceMin; $i <= $indiceMax; $i++) {
        echo "Indice : $i, Valeur : {$tableau[$i]}<br>";
    }

    // Affichage du tableau avec une boucle foreach
    echo "<br>Affichage du tableau avec une boucle foreach :<br>";
    foreach ($tableau as $indice => $valeur) {
        echo "Indice : $indice, Valeur : $valeur<br>";
    }




    echo "<br><br><br><br> Exercice 7 <br><br>";
    
    $nombreDonne = 7; // Remplacez par le nombre de votre choix
    $premierMultiple = null;
    $tirages = 0;

    while ($premierMultiple === null) {
        $tirage = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100
        $tirages++;

        if ($tirage % $nombreDonne === 0) {
            $premierMultiple = $tirage;
        }
    }

    echo "Le premier multiple de $nombreDonne obtenu après $tirages tirages aléatoires est : $premierMultiple";

    
    $nombreDonne = 7; // Remplacez par le nombre de votre choix
    $premierMultiple = null;
    $tirages = 0;

    do {
        $tirage = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100
        $tirages++;

        if ($tirage % $nombreDonne === 0) {
            $premierMultiple = $tirage;
        }
    } while ($premierMultiple === null);

    echo "Le premier multiple de $nombreDonne obtenu après $tirages tirages aléatoires est : $premierMultiple";






    echo "<br><br><br><br> Exercice 8 <br><br>";
 
    // Fonction pour calculer le PGCD de deux nombres
    function pgcd($a, $b) {
        if (!is_int($a) || !is_int($b)) {
            throw new Exception("Les deux nombres doivent être des entiers.");
        }

        while ($b !== 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return $a;
    }

    try {
        $nombre1 = 36; // Remplacez par le premier nombre
        $nombre2 = 48; // Remplacez par le deuxième nombre

        $resultat = pgcd($nombre1, $nombre2);
        echo "Le PGCD de $nombre1 et $nombre2 est : $resultat";
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }









    ?>
</body>
</html>