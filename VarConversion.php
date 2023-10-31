<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once('entete.php');
    ?>
    <div class="content">
        <h1>Conversion de variable</h1>

        <?php 
            $var = "3.5 kilomètre";
            $var2 = (double) $var;
            echo "\$var2 = $var2 <br>"; //affiche 3.5
            $var3 = (integer) $var2;
            echo "\$var3 = $var3 <br>"; 
            $var4 = (boolean) $var3;
            echo "\$var4 = $var4 <br>"; 
            
            /**
             * Vous avez la possibilité de modifier le type de la variable elle-même au moyen de la fonction settype()
             */
            echo "<br><br>";
            echo settype($var, "float");
            echo "<br><br>";
            echo "Utilisation de settype";
            echo "<br>";
            $vall = "35.5 ans";
            settype($vall,"double");
            echo "\$vall = $vall";
            echo "<br><br>";
            settype($vall,"integer");
            echo "\$vall = $vall";
            echo "<br><br>";
            settype($vall,"boolean");
            echo "\$vall = $vall";
            echo "<br><br>";
            

            //CONTROLER L'ÉTAT D'UNE VARIABLE
            /**
             * Lors de l'envoi de données d'un formulaire vers le serveur , le script qui reçoit les informations doit pouvoir détecter l'existence d'une réponse dans les champs du formulaire. Les fonctions isset() et empty() permettent ce type de controle.
             * La fonction isset() retourne une valeur false ou 0 si la variable existe mais n'est pas initialisée ou si elle à la valeur NULL, et la retourne TRUE ou 1 si elle à une valeur quelconque. Il peut y avoir plusieurs paramètres dans cette fonction mais ils doivent tous répondre à cette même condition pour que la fonction retourne la valeur TRUE.
             * La fonction
             */
            $a = null;

            if (isset($a)) {
                echo "\$a existe<br>";
            } else {
                echo "\$a n'existe pas<br>";
            }

            if (empty($a)) {
                echo "\$a est vide<br>";
            } else {
                echo "\$a a la valeur $a<br>";
            }

            $b = 0;

            if (isset($b)) {
                echo "\$b existe<br>";
            } else {
                echo "\$b n'existe pas<br>";
            }

            if (empty($b)) {
                echo "\$b est vide<br>";
            } else {
                echo "\$b a la valeur $b<br>";
            }

            $c = 1;

            if (isset($c)) {
                echo "\$c existe<br>";
            } else {
                echo "\$c n'existe pas<br>";
            }

            if (empty($c)) {
                echo "\$c est vide<br>";
            } else {
                echo "\$c a la valeur $c<br>";
            }

/**
 * Pour la variable $a qui a la valeur NULL, isset() retourne également FALSE et empty() TRUE. Pour $b, qui a la valeur 0, isset() permet de détecter l'existence de cette variable bien que empty() la déclare vide. Il en irait de même si $b était une chaine vide.
 * 
 * Pour une valeur numérique affectée à la variable $c, les deux fonction retournent TRUE. Ces fonctions, et en particulier isset(), vous permettront de vérifier si un utilisateur a bien rempli tous les champs d'un formulaire.
 */
// LES ENTIERS
/**
 * 
 */
$entier = 0b1101;
echo $entier;



        ?>
    </div>
</body>
</html>