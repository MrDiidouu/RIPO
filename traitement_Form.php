<<!DOCTYPE html>
<html>
<head>
    <title>Traitement des données</title>
</head>
<body>
    <a href="Formulaire_Adress_Client.php">Formulaire</a>
    <h2>Données du formulaire :</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $code_postal = $_POST["code_postal"];
        
        echo "<table border='1'>";
        echo "<tr><th>Champ</th><th>Valeur</th><th>Type</th></tr>";
        echo "<tr><td>Nom</td><td>$nom</td><td>" . gettype($nom) . "</td></tr>";
        echo "<tr><td>Prénom</td><td>$prenom</td><td>" . gettype($prenom) . "</td></tr>";
        echo "<tr><td>Adresse</td><td>$adresse</td><td>" . gettype($adresse) . "</td></tr>";
        echo "<tr><td>Ville</td><td>$ville</td><td>" . gettype($ville) . "</td></tr>";
        echo "<tr><td>Code Postal</td><td>$code_postal</td><td>" . gettype($code_postal) . "</td></tr>";
        echo "</table>";
    } else {
        echo "Le formulaire n'a pas été soumis.";
    }
    ?>
</body>
</html>
