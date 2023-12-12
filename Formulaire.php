<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <a href="../index.php">Accueil</a><br>

    <form action="Privé/traitement.php" method="post">

        <label for="usertag">Username : </label>
        <input type="text" name="usertag" required>

        <label for="userpass">Password : </label>
        <input type="password" name="userpass" required>

        <label for="confirm">Confirm : </label>
        <input type="password" name="confirm" required> 

        <label for="mail">Mail : </label>
        <input type="email" name="mail" id="mail" required>

        <input type="submit" value="S'incrire">

    </form>
    <form action="Privé/connexion.php" method="post">
        <label for="login">Username : </label>
        <input type="text" name="login" required>

        <label for="cnx_userpass">Password : </label>
        <input type="password" name="pwd" required>

        <input type="submit" value="Se connecter" name="valider">
    </form>

    <?php
    if(!empty($erreur)){ ?>
    <div id="erreur">
        <?=$erreur?>
    </div>
   <?php } ?>

    <script src="Formulaire.js"></script>
</body>
</html>