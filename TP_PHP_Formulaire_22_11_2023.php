<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Informations Client</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Votre style CSS ici */
        form {
            margin-top: 25px;
            text-align: center;
        }
        /* ... */
    </style>
</head>
<body>
    <?php include_once('Menu.php'); ?>
    <div class="consigne">
        <h1>Exercice 1 : </h1>
        <h2>Créez un formulaire comprenant un groupe de champs ayant pour titre "Adresse client". Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal. Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau HTML.</h2>
        <h1>Exercice 2 : </h1>
        <h2>Améliorez le script précédent en vérifiant l’existence des données et en affichant une boîte d’alerte JavaScript si l’une des données est manquante.</h2>
    </div>
   
    <form method="post" action="traitement.php" onsubmit="return validateForm()">
        <fieldset>
            <legend>Formulaire de contact</legend>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom"><br><br>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom"><br><br>
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse"><br><br>
            <label for="ville">Ville:</label>
            <input type="text" id="ville" name="ville"><br><br>
            <label for="codePostal">Code Postal:</label>
            <input type="text" id="codePostal" name="codePostal"><br><br>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>


    <script>
        function validateForm() {
            // Récupérer les valeurs des champs
            var nom = document.getElementById("nom").value;
            var prenom = document.getElementById("prenom").value;
            var adresse = document.getElementById("adresse").value;
            var ville = document.getElementById("ville").value;
            var codePostal = document.getElementById("codePostal").value;

            // Vérifier si un des champs est vide
            if (nom === "" || prenom === "" || adresse === "" || ville === "" || codePostal === "") {
                alert("Veuillez remplir tous les champs");
                return false; // Empêche l'envoi du formulaire si des champs sont vides
            }
            return true; // Envoie le formulaire si tous les champs sont remplis
        }
    </script>
</body>
</html>
