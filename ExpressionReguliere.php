<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once("entete.php");
    ?>
    <?php
    /*
    Les expressions régulières permettent de contrôler la saisie correcte dans un formulaire d'une page web.
    Par exemple, un code postal ne contient que des chiffres, un nom propre ne peut pas contenir de caractères inhabituels, une adresse e-mail doit avoir un '@', une zone doit être en majuscules, etc.
    À partir de HTML5, la balise "input" propose des contrôles intégrés qui surveillent les caractères, mais vous pouvez aussi tester les données dans un script PHP.
    Ces expressions sont appelées rationnelles ou régulières (regular en anglais).

    Le principe est de définir un modèle de saisie dans une chaîne qui servira à tester une autre chaîne de caractères par rapport à ce modèle. Si aucune correspondance n'est trouvée, vous pouvez renvoyer un message à l'utilisateur pour indiquer une erreur.
    */

    $modele = "/[A-Z]/"; // Modèle pour vérifier la présence de majuscules

    if (!preg_match($modele, $_POST['nom'])) {
        echo "Le nom doit comporter des majuscules.";
        exit();
    }
    // Le tableau ci-dessous montre quelques modèles employés dans le code PHP
    /*
        Modèle | Description
        "/[a-z]/"    Au moins un caractère contenant n'importe quelle lettre en minuscules
        "/[A-Z]/"    Au moins un caractère contenant n'importe quelle lettre en majuscules
        "/[0-9]/"    Au moins un chiffre entre 0 et 9
        "/[[:alpha:]]/"    N'importe quel caractère minuscule ou majuscule
        "/[[:alnum:]]/"    Tous les caractères alphanumériques (équivalent à "[a-zA-Z0-9]")
        "/[[:blank:]]/"    Les espaces et les tabulations
        "/[[:cntrl:]]/"    Les caractères de contrôle
        "/[[:digit:]]/"    Tous les chiffres
        "/lyon/"           Teste si "lyon" est présent
        "/\.com|\.fr/"     Teste si l'une des chaînes ".com" ou ".fr" existe (le "ou" est indiqué par le caractère "|")
        "/[^rtg]/"         Le caractère "^" exclut les lettres "r", "t", et "g"
        "/[^0-9]/"         exclut les chaine composées uniquement de chiffres
    */
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend><b>Vos coordonnées</b></legend>
            <label>Nom :</label>
            <input type="text" name="nom" size="40" />
            <label>Email :</label>
            <input type="text" name="mail" pattern="^[a-z0-9]+@[a-z0-9]+\.[a-z]{2,4}" />
            <label>Téléphone :</label>
            <input type="text" name="tel" pattern="^0[0-9]{10}" />
            <label>Code :</label>
            <input type="password" name="code" size="40" maxlength="40" />
            <label>Départements :</label>
            <input type="number" name="departements" min="1" max="101" size="40" maxlength="40" />
            <label>Né(e) le :</label>
            <input type="date" name="date" min="1960-01-01" max="2018-01-01" />
            <input type="radio" name="sexe" value="femme" /> Femme<br />
            <input type="radio" name="sexe" value="homme" /> Homme<br />
            <select name="pays" size="1">
                <option value="france">France</option>
                <option value="belgique">Belgique</option>
                <option value="suisse">Suisse</option>
                <option value="canada">Canada</option>
            </select>
        </fieldset>
    </form>
</body>
</html>