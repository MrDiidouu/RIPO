<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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







        ?>
    </div>
    <?php
        include_once('footer.php');
    ?>
</body>
</html>