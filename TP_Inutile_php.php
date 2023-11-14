<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo 'Exercice 1';
    $chaine = "TransFOrmeZ unE ChaîNE écRITe dans des cASses. diFFéreNTes afiN qUe chAQue MOT ait une inITiale en MAJUSCULE";
    echo ucwords(strtolower($chaine));
    echo "<br> <br>";
    //Exo 2
    /* En utilisant la fonction strlen() écrivez une boucle qui affiche chaque lettre de la chaîne PHP MySQL sur une ligne différente. */ 
    echo 'Exercice 2';
    $chaine1 = "PHP MYSQL";
    for($i = 0; $i < strlen($chaine1); $i++) {
        echo "<h3> $chaine1[$i] </h3>";
    }
    echo "<br> <br>";
    /* Alternative Laïd */

    $string2 = "PHP MySQL";
    echo "La chaîne à décomposer est la suivante : $string2 <br>";
    for($i=0;$i<strlen($string2);$i++){
        echo "Le charactère n°".$i." de la chaîne de charactère ".$string2." est \"".substr($string2,$i,1)."\".<br>";
    }
    echo "****************************************";
    echo "<br> <br>";

    //Exo 3
    /* Formatez l'affichage d'une suite de chaînes contenant des nom et prénom en respectant les critère suivants : un prénom et un nom par ligne affichés sur 20 caractères; toutes les initiales des mots doivent se superposer verticalement */
    echo 'Exercice 3 <br>';
    $nom1 = "Azerty";
    $prenom1 = "Sophia";
    echo sprintf("<tt>%'_-20s %'_-20s </tt><br>", $nom1, $prenom1);
    $nom2 = "Bazertudih";
    $prenom2 = "Jean-Michel";
    echo sprintf("<tt>%'_-20s %'_-20s </tt><br>", $nom2, $prenom2);

    echo "****************************************";
    echo "<br> <br>";
    //Exo 4
    /* Utilisez les fonctions adéquates afin que la chaîne <form action="script.php"> soit affichée telle quelle et non comme du code HTML..   */
    echo 'Exercice 4 <br>';
    $chaine2 = '<form action = "script.php">';
    echo htmlentities($chaine2);

    echo "****************************************";
    echo "<br> <br>";
    //Exo 5
    /* A partir de deux chaînes quelconques contenues dans des variables, effectuez une comparaison entre elles pour pouvoir les afficher en ordre alphabétique naturel . */
    echo 'Exercice 5 <br>';
    $chaine3 = "alpha";
    $chaine4 = "Azéma";
    if(strtolower($chaine3) < strtolower($chaine4)) 
    echo $chaine3 , " est avant ", $chaine4;
    else echo $chaine4, " est avant ", $chaine3;

    echo "****************************************";
    echo "<br> <br>";
    //Exo 6
    /* Effectuez une censure sur des textes en n'affichant pas ceux qui contiennent le mot zut. */
    echo 'Exercice 6 <br>';
    $mot = "Zut je me suis trompé ! ";
    $modele = "/Zut/i";
    if(preg_match($modele, $mot)) 
        echo 'Un Mot censuré';
    else 
    echo $mot;

    /* Alternative Laïd (ENCORE) */
    $string6="\"Je ne l'ai pas dit, encore une fois! − Si, vous l'avez dit. − Non! − Si! − Zut! Vous m'embêtez à la fin!\"(Courteline, Ronds-de-cuir, 1893, p. 179)";
    $target= array("Zut","zUt","zuT","ZUt","zUT","ZuT","ZUT");
    $censorship="Censuré !";
    $censoredstring = str_replace($target,$censorship,$string6);
    
    echo "La Phrase non-censurée est la suivante :<br>".$string6;
    echo "<br>";
    echo "La Phrase censurée est la suivante :<br>".$censoredstring;

    echo "****************************************";
    echo "<br> <br>";
    //Exo 7
    /* Créez une fonction de validation d'une adresse HTTP ou FTP en vous inspirant de l'exemple 4.
    Le modèle doit répondre à la définition suivante :
    1. Commencer par « www »
    2. Suivi par des lettres puis éventuellement un point ou un tiret suivis d'un deuxième groupe
    3. Se terminer par un point suivi de l'extension qui peut avoir de 2 à 4 caractères.
    Par exemple, les adresses www.machin.com ou www.machintruc.uk sont valides.
    */
    echo 'Exercice 7 <br>';
    // Création de la fonction
    function validhttp($valide){
        $modeles = "/^(www)\.([a-z0-9]+)(\.|-)?([a-z0-9]*)\.([a-z]{2,4}$)/";
        $valide = strtolower($valide);
        if(preg_match($modeles, $valide)){
            echo "$valide est valide <br>";
            return TRUE;
        }
        else {
            echo "$valide est invalide <br>";
            return FALSE;
        }
    }
    // Utilisation de la fonction de validation
    $url = "www.Laposte3.info";
    $url1 = "www.pierre-plus-loin-info-info";
    $url2 = "www.magne.funphp.com";
    validhttp($url);
    validhttp($url1);
    validhttp($url2);

     /* Alternative Laïd (ENCORE) */
             function validurl1($url){
            $test=@fopen($url,"r");
            if($test){
                fclose($test);
                echo "Le test de ".$url." a un retour positif.<br>";
            }else{
                echo "Le test n'a pas fontionné.<br>";
            }
        }

        function validurl2($url2){
            if (!filter_var($url2, FILTER_VALIDATE_URL) === false) {
                echo("URL est valide.<br>");
              } else {
                echo("URL n'est pas valide.<br>");
              }
        }

        $strurl1="http://www.google.com";
        $strurl2="/gogle!com";
        $strurl3="https://github.com/Ashkade";
        $strurl4="tps/github/Ashkade";

        validurl1($strurl1);
        validurl2($strurl1);
        validurl1($strurl2);
        validurl2($strurl2);
        validurl1($strurl3);
        validurl2($strurl3);
        validurl1($strurl4);
        validurl2($strurl4);

        echo "****************************************";
    echo "<br> <br>";
    //Exo 8
    /* Créez une expression régulière pour valider un âge inférieur à 100 ans ...  */
    echo 'Exercice 8 <br>';
    $mode1 = "/^[0-9]?([0-9]?)$/";
    $age = "84";
    if(preg_match($mode1, $age)){
        echo "$age est un age valide <br>";
        return TRUE;
    }else {
        echo "$age est un age invalide <br>";
        return FALSE;
    }
    /* Alternative Laïd (ENCORE ET TOUJOURS) */
            function agetest($age){
            $pattern="/^[1-9][0-9]?$/";
            if(preg_match($pattern,$age)==true)
                echo "L'age renseigné $age est un age valide.<br>";
            else
                echo "L'age renseigné $age n'est pas un age valide.<br>";
        }

        $agerand;

        for($i=0;$i<10;$i++){
            $agerand=rand(0,200);
            agetest($agerand);
        }

        echo "****************************************";
        echo "<br> <br>";
        //Exo 9
        /* Dans la chaîne PHP \n est meilleur \n que ASP \n et JSP \n réunis, remplacez les
         caractères \n par <br /> en utilisant deux méthodes différentes (une fonction ou une expression régulière). */
        echo 'Exercice 9 <br>';
        $chaine5 = "PHP 5 \n est meilleur \n que ASP\n et JSP \n réunis";
        echo "<p>", nl2br($chaine),"</p>";
        // Utilisation d'une expression régulière
        echo "Avec les expressions régulières <br>";
        // $models = "/\n/";
        // $nouveau = "/<br>/";
        echo preg_replace("/\n/","<br>", $chaine5);


         /* Alternative Laïd (ENCORE ET TOUJOURS) */
         $target9= "\n";
         $replacement="<br>";
         $newstring9 = str_replace($target9,$replacement,$chaine5);
 
         echo $newstring9;
?>
</body>
</html>
