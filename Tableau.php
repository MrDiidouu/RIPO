<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .border{
            border: solid white;
            text-align: center;         
        }
    </style>
    <title>Tableaux en php</title>
</head>
<body>
    <?php 
        include_once('entete.php');
    ?>
    <div class="content">
        <?php 
        $tb = ['Paris', 'Londres', 'Rome', 'Berlin'];
        echo $tb[1],"<br>";


        echo "sans count <br>";
        for($i = 0; $i < 3;$i++){
            echo $tb[$i],"<br>";
        }
        
        echo "<br> avec count <br>";
        for ($i = 0; $i < count($tb);$i++){
            echo $tb[$i],"<br>";
        }
        echo "<br>";
        
        $tab = [
            'Paris' => 'France',
            'Rome' => 'Italie',
            'Berlin' => 'Allemagne',
            'Berne' => 'Suisse',
        ];
        echo $tab['Berlin']; // This will output 'Allemagne'
        
        echo "<br>";

        //Parcourir un tel tableau, Il faut employer la boucle foreach
        foreach($tab as $ville => $pays){
            echo $ville. "_" .$pays. "<br>";
        }

        //Création dynamique d'un tableau grace à la fonction pow. (puissance).
        for($i = 0;$i <= 11;$i++){
            $tab2[$i] = pow(2,$i);
        }
            $val = "une valeur";
            echo $val, "<br>";
            //lecture des valeurs du tableau
            echo "Les puissances de 2 sont :", "<br>";
            foreach($tab2 as $val){
                echo $val." : ";
            }
            echo "<br>";
        // Créer un tableau associatif dont les clés sont les identifiants et associé à chacun un code aléatoire compris entre 100 et 1000 puis lis et affiche les clés et les valeurs du tableaux

        for($i = 0; $i <= 10; $i++){
            $tob["client ".$i] = rand(100, 1000);
        }
        //Lecture des clés et des valeurs
        foreach($tob as $cle => $val){
            echo "Le login du client est <b> $cle </b> et il à le code <b>$val</b><br>";
        }

        //Il affiche tous se qu'il y a été entrée dans le tableau
        $i = 0;
        while($i < count($tb)){
            echo $tb[$i],"<br>";
            $i++;
        }

        for($i = 0;$i <= 10; $i++){
            $tab3[$i] = pow(2,$i);
        }
        foreach($tab3 as $ind => $val){
            echo "<br> <br> 2 puissances $ind vaut $val";
        }
        echo "<br> Dernier indice $ind , dernière valeur $val <br> <br>";
        
        $tab4 = array(
            array("LIBRAIRIE", "TITRES", "REMISE"),
            array("FNAC", "GOOGLE SHEETS", "40%"),
            array("FNAC", "EXCEL", "40%"),
            array("EXPRESS", "GOOGLE DOCS", "38"),
            array("EXPRESS", "GOOGLE SLIDES", "40"),
        );
        
        echo "<table class=\"border\" border=1 width=\"50%\">";
        //Début du tableau
        echo "<tr class=\"border\"><th class=\"border\">" . implode("</th><th class=\"border\">", $tab4[0]) . "</th></tr>";
        
        //Lecture des lignes à partir de la deuxième ligne
        for ($i = 1; $i < count($tab4); $i++) {
            list($librairie, $titre, $remise) = $tab4[$i];
            echo "<tr class=\"border\">
            <td class=\"border\">$librairie</td>
            <td class=\"border\">$titre</td>
            <td class=\"border\">$remise</td>
            </tr>";
        }
        
        //Fin du tableau
        echo "</table>";
        
        echo "<br> <br>";

        $tablo[0] = "Pomme";
        $tablo[1] = "Poire";
        $tablo[2] = "Orange";
        $tablo[3] = "Cerise";
        $tablo[4] = "Mangue";
        //je relie les éléments en les affichant dans le browser
        echo "<ol>"; //je prépare une liste numérotée
        for($i = 0; $i < count($tablo);$i++){
            echo "<li>" .$tablo[$i]. "</li>"; // J'affiche chaque élément du tableau
        }
        echo "</ol> <br>";
        echo "<br>";
        $tablo1[] = "Stylo";
        $tablo1[] = "Crayon";
        $tablo1[] = "Gomme";
        $tablo1[] = "Règle";
        $tablo1[] = "Cahier";
        // je relie les éléments en commençant par 0
        for($i = 0;$i < count($tablo1);$i++){
            echo $tablo1[$i]."<br>";
        }

        echo "<br><br>";
        $tablo2 =  ["Voiture","Vélo","Moto","Camion","Bateaux"];
        echo "<br>";
        print_r($tablo2);

        /* 
        En résumé 
        Les tableaux sont des structures de variables complexes à une ou plusieur dimensions. Un indice numérique ou texte permet de récupérer la valeur d'une case d'un tableau. Dans un indice numérique, on utiliser une boucle for ou while pour lire les éléments d'un tableau.
        Dans le cas d'un indice de type texte, il faut employer la boucle foreach.
        Les tableaux servent aussi à organiser des matrices d'informations que l'on récupère si besoin en les parcourant à l'aide d'une ou plusieurs boucles. 
        */


        







        ?>
    </div>
    <?php
        include_once('footer.php');
    ?>
</body>
</html>