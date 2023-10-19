<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../MonSite/style/StyleGrid.css">
    <link rel="stylesheet" href="../MonSite/style/StyleMenu.css">
    <title>Document</title>
</head>
<body>
<?php 
    include_once('../MonSite/entete.php');
    ?>
    <h1>Exercice PHP 19 10 2023</h1>
    <?php 
    echo 'Les varaibles qui on un nom valide son : <br> 1. $a <br> 2. $_a <br> 3. $a_a <br> 4. $AAA <br> 5. $a1 ';

    $note_maths = 15; 
    $note_francais = 12; 
    $note_histoire_geo = 9; 
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3; 
    echo '<br>La moyenne est de '.$moyenne.' / 20.'; 

    $prix_ht = 50;
    $tva = 20;
    $prix_ttc = $prix_ht + ($prix_ht * $tva / 100); // Calcul du prix TTC

    echo '<br>Le prix TTC du produit est de ' . $prix_ttc . ' €. <br>';

    $test = 42;
    var_dump($test);

    $sexe = "homme";
    if ($sexe == "homme") {
        echo "<br> Bienvenue, Monsieur!<br>";
    } elseif ($sexe == "femme") {
        echo "<br> Bienvenue, Madame!<br>";
    } else {
        echo "<br> Bienvenue!<br>";
    }


    $budget = 1553.89;
    $achat = 1554.76;

    if ($achat >= $budget) {
        echo "Le budget $budget € permet de payer tous les achats $achat €<br>";
    } else {
        echo "Le budget $budget € ne permet pas de payer tous les achats $achat €<br>";
    }   

    $age = 19;
    if($age >= 18)
        echo 'Vous êtes majeur <br>';
    else
        echo 'Vous êtes mineur <br>';

        $heure = 14;
        if($heure < 0 || $heure > 23){
            echo "C'est une incorrecte";
        }elseif($heure >= 7 && $heure <12){
            echo 'Bonne matinée';
        }elseif($heure >= 12 && $heure <22){
            echo 'Bon aprèm';
        }else{
            echo 'Bonne nuit';
        }
        

        echo "<br> <br> Exo 2 <br>";
        $dep = 18000;
        while($dep <= 18999){
            echo $dep. ' ';
            $dep++;
        }
        
        echo "<br><br><br>";

    
    
        $chiffre = 5;
        echo "<br>Table de multiplication du chiffre $chiffre : <br><br>";
        for($i = 1; $i <= 10; $i++){
            $result = $chiffre * $i;
            echo "$chiffre x $i = $result <br>";
        }

    for($i = 1; $i <= 5; $i++){
        for($k = 1; $k <= $i; $k++){
            echo $i;
        }
        echo '<br>';
    }

    echo '<br> <br>';

    $v = 0;
    while($v <= 20){
        if($v == 10){
            echo "<strong> $v </strong>";
        }else{
            echo '<br>';
            $v = $v + 2;
        }
    }


    ?>
    
    <?php
    include_once('../MonSite/footer.php');
    ?>
</body>
</html>,