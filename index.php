<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page</title>
</head>
<body>
    <?php 
    include_once('entete.php');
    ?>
    <main class="content">
        <h1>Voici mon contenu</h1>
        <div class="pas_content">
            <?php
            //J'affiche le prénom
            echo "Paul";
            echo "<br>"; // je saute une ligne
            echo "Ochon"; // j'affiche le nom
            #ceci est aussi un commentaire
            echo "<br> paul ochon";
            /* Les commentaires vous aieront lorsque vous reviendrez
            dans 6 mois et que vous aurez tout oublié */
            echo "<br> super";
            echo "<br>";
            /* si vous souhaitez voir les caractères qui sont utilisés pour entourer les */
            echo 'j\écris à l\'encre de chine ';

            /* 
            Le caractère anti-slash précède le 2ème apostrophe qui échappe ainsi à sa fonction naturelle qui est d'entourer des chaines de caractères. Dans le code ici, on met des guillemets au début et à la fin du texte et il n'est donc pas nécessaires d'échapper l'apostrophe. Par contre il faut échaper le guillemets du prénom.
            */
            echo "<br> j'envoie des lettres à \"dulcinée\"";

            /*
            Les variables,
            une variables est un conteneur d'une donnée unique, c'est à dire une boite à chaussures qui ne contient qu'une seule chaussure.
            Une variable contien une information temporaire qui peut-être numérique, de type alphabétique (chaine de caractère), de type date, de type objet ou d'autres types.
                */
            $largeur = 5;
            echo $largeur;

            /* 
            Le nom d'une variable doit commencer par le caractère $ suivi d'une lettre ou un signe _ (barre du 8) et ne doit jamais commencer par un chiffre.Les noms des variables sont sensibles à la casse (majuscule/minuscule).
            
            Le signe = sert donc à affecter une valeur à la variable, il s'agit d'un opérateur d'affectation et non le signe égal que l'on utilise dans une opération de calcul
            */

            $prenom = "téo";
            $nom="durant";
            $prenom_nom = $prenom." ".$nom;
            echo '<br>'.$prenom_nom;

            /**
             * fonctions qui s'appliquent aux variables
             * 
             * strlen(variable): renvoie la longueur d'une chaine de caractère.
             * subtr(variable, début, longueur): renvoie une partie de la chaine de caractères.
             * trim(variable): supprime les espaces (ou d'autres caractères) en début et en fin de chaine.
             * number_format(variable "point ou point virgule", "caractères pour les milliers").
             * round(variable, nombre de décimale): arrondit le nombre.
             * 
            */

            $nom2 = "  MARIE ROSE  ";
            echo strlen($nom2); //affiche 10 à cause des espaces
            echo "<br>";
            var_dump($nom2);// affiche string (10) "MARIE ROSE"
            echo "<br>";
            echo trim($nom2); // affiche MARIE ROSE sans espace
            echo "<br>";
            echo substr($nom2, 4, 6); //
            echo "<br>";
            echo $prix = 2050900.7854;
            echo "<br>";
            echo number_format($prix,2,","," ");// arrondit à la française
            echo "<br>";
            echo number_format($prix,2,"."," ");// affiche 2 050 900,79 en plaçant 2 décimales après un point et un espace comme séparateur de milliers.
            echo "<br>";
            echo round($prix,1); // arrondit à une décimale

            //AFFECTATION DE VARIABLES PAR VALEUR OU PAR ALIAS

            /**
             * lorsqu'on affecte une donnée dans une variable, on dit qu'on affecte la variable par valeur. Toutefois, on pourrait aussi créer un alias à une autre variable. On dit parfois qu'on affecte la variable par référence.
             * Pour créer un alias vers une autres variable, on utilise le signe & (et commercial ou esperluette). 
             */
            echo "<br>";
            $v1 = "Jack Daniel's <br>";
            $alias = &$v1; //crée un alias vers $v1
            $alias = "Mon nom est $alias";
            echo $alias;

            $prenom2 = "Alain";
            echo " Salut les gars mon nom est : " .$prenom2. " Delon";

            ?>
        </div>
    </main>
    <?php
    include_once('footer.php');
    ?>
</body>
</html>