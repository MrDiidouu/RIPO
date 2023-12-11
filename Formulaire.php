<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <a href="../index.php">Accueil</a><br>
    <form id="inscriptionForm" action="Formulaire.php" method="post" onsubmit="return validateForm()">
        <label for="username">Username : </label>
        <input type="text" name="username" id="user">
        <label for="password">Password : </label>
        <input type="password" name="password" id="pass">
        <label for="mail">Mail : </label>
        <input type="mail" name="mail" id="mail">
        <input type="submit" value="S'incrire">
    </form>

    <?php 
    // Vérification des données
    if(!isset($_POST['username']) || empty($_POST['username'])) {
        echo "Le nom d'utilisateur est obligatoire";
        exit();
    }

    if(!isset($_POST['password']) || empty($_POST['password'])) {
        echo "Le mot de passe est obligatoire";
        exit();
    }

    if(!isset($_POST['mail']) || empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        echo "L'email est obligatoire et doit être valide";
        exit();
    }


    // Echappement des données
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $mail = htmlspecialchars($_POST['mail']);

    // Hachage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Connexion à la base de données
    $connexion = 'mysql:host=localhost;dbname=afpa';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO($connexion, $user, $password);
    } catch(PDOException $e) {
        echo 'Erreur de connexion à la base de données. '.$e->getMessage();
        exit();
    }

    //Insertion des données dans la base de données
    $sql = 'INSERT INTO base_de_donne_cv (nom_utilisateur, mot_de_passe, mail) VALUES (?,?,?)';
    $nomDeVariable = $pdo->prepare($sql);
    $nomDeVariable->execute([$username, $hashedPassword, $mail]);

    // Affichage d'un message du succcès
    echo 'Vos données ont été enregistrées avec succès !';



?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Récupérer le formulaire par son ID
    var form = document.getElementById("inscriptionForm");

    // Ajouter un écouteur d'événement sur la soumission du formulaire
    form.addEventListener("submit", function(event) {
        // Empêcher l'envoi du formulaire par défaut
        event.preventDefault();

        // Appeler la fonction de validation du formulaire
        if (validateForm()) {
            // Si la validation réussit, soumettre le formulaire
            form.submit();
        }
    });
});

</script>
</body>
</html>