<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
    $action = $_POST["action"];

    switch ($action) {
        case 'Vendre':
            header("Location: vendre.php");
            exit(); // Ajout d'un exit pour arrêter l'exécution du script après la redirection
        case 'Acheter':
            header("Location: acheter.php");
            exit();
        case 'Louer':
            header("Location: louer.php");
            exit();
        default:
            // Redirection par défaut si aucune correspondance
            header("Location: index.php");
            exit();
    }
} else {
    // Redirection si la méthode n'est pas POST ou si aucune action n'est sélectionnée
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Choix de l'action</title>
</head>
<body>
    <?php include_once('Menu.php') ?>
    <div class="consigne">
        <h1>Exercice 8 :</h1>
        <h2>Dans la perspective de création d’un site d’agence immobilière, créez un formulaire comprenant trois boutons submit nommés Vendre, Acheter et Louer. En fonction du choix effectué par le visiteur, redirigez-le vers une page spécialisée dont le contenu réponde au critère choisi</h2>
    </div>
    <h3>Choisissez une action :</h3>
    <form action="Exercice_8.php" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>
</body>
</html>
