<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire php</title>
</head>
<body>
    <?php 
        include_once('entete.php');
    ?>
    <div class="content">
        <h1>LES FORMULAIRES</h1>
        <!-- 
            Ils sont utilisé pour la gestion interactive d'un site et sont à la base des pages web dynamiques.

            *Mise en Oeuvre*
            Un formulaire html est défini entre les balise <form> et </form>

            method: mode de transmission vers le serveur des informations saisies dans le formulaire.
            action: qui contion le script qui va traiter le formulaire ou les données du formulaire.

            L'attribut method comprend deux types de valeurs: GET et POST
            GET: se rapporte aux données du formulaire qui seront transmises par URL et utilise la variable superglobale $_GET.
            POST: se rapporet aux données du formulaire qui seront transmises dans le corp de la requête utilise la variable superglobale $_POST.
            Syntaxe :
            $data = $_GET['dt']; //Get
            $data = $_POST['dt']; //Post
        -->
        <form action="" method="get">
            <label for="Nom">NOM :</label>
            <input type="text" name="nom"><br><br>
            <label for="Prénom">PRENOM :</label>
            <input type="text" name="prenom"><br><br>
            <input type="submit">
        </form>
        <!-- 
            La méthode GET envoie es données sous forme d'une suite de couples nom/valeur ajoutés à l'URL de la page appelée. La partie d'une URL précédée par ? est appelée chaine de requête. Si la chaine de requête contient plusieurs éléments, alors chaque élément / valeur doit être séparé par le caractère &amp;
            Par ailleurs, elle doit pas dépasser 255 caractères. Les données transmises au serveur par la méthode GET sont visibles par les utilisateurs directement dans la barre d'adresse du navigateur.
        -->
        <p>Bonjour !</p>
        <p>Votre nom est <?php echo $_GET['nom'];?>, et votre prénom est <?php echo $_GET['prenom']; ?></p>
        <p>Faites un autre essai, <a href="#">Cliquez ici</a></p>
        <?php
        
        ?>
    </div>
    <?php
        include_once('footer.php');
    ?>
</body>
</html>