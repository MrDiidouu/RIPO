<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/StyleGrid.css">
    <link rel="stylesheet" href="../style/StyleMenu.css">
    <style>
        .Espacement{
            margin: 30px 0;
        }
        a{
            color: white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="Espacement">
            <h1>Tp Sur les primordiaux du PHP</h1><br><br>
            <h2>TP 1: Variable et Opérations</h2>
            <?php 
                $nom = "Lagoguey";
                echo "Voici mon nom : $nom";
            ?>
        </div>
        <div class="Espacement">            
            <h2>TP 2: Structure de Contrôle</h2>
            <?php 
                for($i = 1; $i < 6;$i++){
                    echo "Voici le $i nombres : $i<br>";
                }
            ?>
        </div>
        <div class="Espacement">
            <h2>TP 3: Tableaux</h2>
            <?php 
                $noms = ["Patrick", "Johny", "Helder", "Moi"];
                foreach ($noms as $nom) {
                    echo "Voici les noms présenter : $nom <br>";
                }
            ?>
        </div>
        <div class="Espacement">
            <h2>TP 4: Fonctions</h2>
            <?php 
                function calculerSomme($nb1, $nb2){
                    $resultat = $nb1 + $nb2;
                    return $resultat;
                }

                $resultat = calculerSomme(10,50);
                echo "Voici le résultat de la somme 10 + 50 = $resultat";
            ?>
        </div>
        <div class="Espacement">
            <h2>TP 5: Formulaires et Traitement des Données</h2><br>
            <form action="" method="get">
                <label for="Nom">Nom : </label>
                <input type="text" name="nom"><br>
                <label for="Prenom">Prénom : </label>        
                <input type="text" name="prenom"><br>
                <input type="submit"><br><br>
            </form>
            <p>Bonjour, <?php echo $_GET["nom"]?> <?php echo $_GET['prenom']?> .</p>
            <p>Faite un autre essaie en <a href="#">Cliquant ici</a></p>
        </div>
    </div>
    <?php 
        include_once("../footer.php")
    ?>
</body>
</html>