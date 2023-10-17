<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travaux sur les dates</title>
</head>
<body>
    <a href="index.php">Accueil</a> <br><br>
<?php 
    /**
     * Pour manipuler les dates on utilise un groupe date/heure aussi appelé times-stamp qui est issu de la notation UNIX.
     * PHP utilise le fuseau horaire qui défini par défaut dans la rubrique [Date] du fichier php.ini.Ce fichier regroupe tous les paramètres de base. 
     * On peut ouvrir ce fichier avec n'importe quel éditeur. 
     * [Date]
     * ;date.timezone = "Europe/Berlin"
     * 
     * Vous pouvez récupérer le nom du fuseau horaire en cour par le code i-dessous.
     */

    //je récupère le fuseau horaire local
    $fuseau = date_default_timezone_get();//affiche UTC
    echo $fuseau;
    echo "<br>";

    echo date("j m y")."<br>"; //affiche la date du format 17 10 23
    echo date("j m Y")."<br>"; //affiche la date complète à la française
    echo date("j M Y")."<br>"; //affiche le 17 oct 2023
    setlocale(LC_TIME, "fr_FR"); //En français
    echo strftime("%A")."<br>";
    echo date("D F Y")."<br>";
    echo date("D d M Y")."<br>";

    /**
     * Différents paramètre de la fonciton Date
     * a    :   am ou pm
     * A    :   AM ou PM
     * d    :   Le jour du mois sur 2 chiffres
     * D    :   Le jour de la semaine en anglais sur 3 lettres
     * F    :   Le nom du mois anglais
     * j    :   Le jour sur un chiffre
     * m    :   Le numéro du mois sur deux chiffres
     * M    :   Le numéro du mois en anglais sur 3 lettres
     * n    :   Le numéro du mois sur un chiffre
     * y    :   L'année sur 2 chiffres
     * Y    :   L'année sur 4 chiffres
     * A    :   Le numéro du jour de la semaine (0 à 6 en commençant par le dimanche)
     * 
     * Il est à noter que pour afficher les dates un format local, par exemple en français, il faut utiliser l'instruction "strftime avec les paramètres". 
     * 
     */
    
     echo strftime("%A")."<br>";
     setlocale(LC_TIME, "french"); // On définit les français
     echo strftime("%A")."<br>";
     echo strftime("%a")."<br>"; // Affiche Mar.
     echo strftime("%A %d %B %Y")."<br>";
     echo strftime("%d/%m/%Y")."<br>"; // En format 17/10/2023
     echo strftime("%A")."<br>"; // En format 17-10-2023

     /* comparaison de deux dates */
     $Date1 = "04-09-2023";
     $Date2 = "17-10-2023";

     //je transforme les date en timestamp
     $t1 = strtotime($Date1);
     echo " Le 04-09-2023 est égal à . " .$t1. " seconde <br>";

     $t2 = strtotime($Date2);
     echo " Le 17-10-2023 est égal à . " .$t2. " seconde <br>";

     if($t1 < $t2){
        echo "La première date est bien avant la 2ème date <br>";
     }else{
        echo "La Deuxième date est bien avant la 1ème <br>";
     }
     /**
      * TESTER LA VALIDITÉ D'UNE DATE
      * D'une manière générale PHP est employé pour répondre à une interaction d'un client qui envoie ses informations vers un serveur par l'intermédiaire d'un formulaire. Si la personne transfère des dates, le programme PHP devra valider les avant de les utiliser. PHP possède pour ce faire, une fonction qui peut aider à tester les dates à traiter : checkdate().
      * Cette fonction est un booléen qui renvoie TRUE ou FALSE. Les paramètres en entrée sont le mois de la date à tester, le jour et l'année. Bien évidemment le mis doit être compris entre le 1 et 12, le jour doit être compris entre le 1 et 31 et les années entre 1 et 32767.
      * Les années bisextiles sont prises en compte.
      
      */
     echo checkdate(12,25,2022);
     echo "<br>";
     if(checkdate(11,25,2021)==false){
        echo "mauvaise date";
     }else{
        echo "bonne date";
     }
     echo "<br>";

     //Date et temps
     $dateTemps = date("Y-m-d H:i:s");
     echo "Date actuelle: $dateTemps";






?>

</body>
</html>