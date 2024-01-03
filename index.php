<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuto_PHP</title>
    <style>
        .navigation a{
            font-size: 2.5rem;
            color: black;
            text-decoration: none;
        }
        .navigation ul{
            display: flex;
        }
        .navigation li{
            list-style-type: none;
            padding: 0 18px;
        }
        .navigation .Tab {
            position: relative;
            top: 0px;
            font-size: 2.563rem;
        }
        .navigation .Var {
            position: relative;
            top: 6.5px;

        }
        .navigation .Bou {
            position: relative;
            top: -8px;
            font-size: 3.125rem;
        }
        /*
        .navigation .hr1 {
            position: relative;
            width: 2000px;
            height: 0px;
            border: 1px solid black;
            top: 38px;
        }
        .navigation .hr2 {
            position: relative;
            width: 2000px;
            height: 0px;
            border: 1px solid black;
            top: 68px;
        }
        */

    </style>
</head>
<body>
    <header>
        <nav class="navigation">
        <!--
            <hr class="hr1">
            <hr class="hr2">
        -->
            <ul>
                <li><a class="Tab" href="Tableau.php" title="Tableau">&#9783;</a></li>
                <li><a class="Var" href="Variable.php" title="Variable">&#65284;</a></li>
                <li><a class="Bou" href="Boucle.php" title="Boucle">&#10226;</a></li>
                
            </ul>
        </nav>
    </header>
    <h1>Exemple</h1>
    <div>
    <?php 
        $prenom = 'Marc'; // Crée une variable prenom et lui affecte une valeur
        echo $prenom ."<br>"; // Affiche la variable prenom

        $note = 10; // Crée une variable note et lui affacte une valeur
        $note2 = 15; // Crée une variable note2 et lui affacte une valeur
        echo ($note + $note2) / 2 . "<br>"; // Affiche le résultats 

        $nom = 'Doe'; // Crée une variable nom et lui affecte une valeur
        echo $prenom . ' ' . $nom . "<br>"; // Le point fait la concaténation des chaines de caractère
        echo $prenom . "\n" . $nom. "<br>"; // Il y a une différence fondamentale entre '' et "" . Les guillemets simple (') ne vont jamais interpoler les variables qui sont a l'intérieur, seul les guillemets double(") sont capable de ça.
        echo "$prenom \" $nom <br>"; // Si on veut échapper des guillemets double dans des guillemets double ou simple dans simple il faut forcément utilisé un antislash avant \"  .

        $booleenV = TRUE;
        $booleenF = FALSE;
        $booleenN = NULL; // Si on ne déclare pas de valeur a la variable par défauts elle sera null
        echo $booleenN; // Afficher un echo null, c'est comme si on ne met rien.


    // Si on ne crée que du code php sur une page la balise fermante (? >) n'est pas obligatoire le code php se fermara tous seul a la dernière instruction ?>

    <h2>Exercice / Exemple</h2>
    <div>
        <?php 
            $prenom1 = 'Marc';
            $nom1 = 'Doe';
            $note2 = 10;
            $note3 = 20;
            /* Il faut afficher
                Bonjour Marc Doe vous avez eu 15 de moyenne 
             */

            // Pratique
            // Première solution
            echo 'Bonjour ' . $prenom1. ' ' . $nom1 . ' vous avez eu ' .(($note2 + $note3) / 2) . ' de moyenne'; 

            // Deuxième solution
            $moyenne = ($note2 + $note3) / 2;
            echo "<br> Bonjour $prenom1 $nom1 vous avez eu $moyenne de moyenne";
        ?>
    </div>
</body>
</html>