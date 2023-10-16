<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opération Sur Les Variables</title>
</head>
<body>
    <h1>Coucou patrick <img src="https://www.shutterstock.com/image-vector/soldier-officer-saluting-silhouette-vector-260nw-1198425667.jpg" alt=""></h1>
    

    <?php 
    
    $hab = 15230;
    echo $hab;
    echo "<br>";

    $hab = 102;
    echo $hab;
    echo "<br>";

    $ville = "Orléans";
    $dep = "Centre";
    $titre = $ville. " " .$dep;

    echo $titre;
    echo "<br>";

    $nn = "Salut ";
    $mm = "Bob";
    $pp = "copain";

    $affich = $nn.$mm.', tu veux être mon ' .$pp.' ? ';
    echo $affich;
    echo "<br>";

    $a = 1;
    $b = 3;
    $a = $a + 2;
    echo " Premier : " .$a;
    echo "<br>";
    $a = $a * $b;
    echo " Deuxième : " .$a;
    echo "<br>";
    $a= $a - 1;
    echo " Troisième : " .$a;
    echo "<br>";

    $a = $a / 4;
    echo " Quatrième : " .$a;

    
    
    
    
    
    ?>

</body>

</html>