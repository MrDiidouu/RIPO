<?php
// Démarrage de la session (si ce n'est pas déjà fait)
session_start();

// Récupération des données du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : ''; 
$password = isset($_POST['pwd']) ? $_POST['pwd'] : ''; 
$validate = isset($_POST['valider']) ? $_POST['valider'] : '';
$error = "";

// Fonction pour établir la connexion à la base de données
function connectDb(){
    $cnx = mysqli_connect("localhost", "root", "", "afpa");

    if (mysqli_connect_errno()) {
        echo "Erreur de connexion à la base " . mysqli_connect_error();
        exit();
    }
    return $cnx;
}

// Appel de la fonction pour établir la connexion
$connexion = connectDb();

// Utilisation de requête préparée pour éviter les injections SQL
$dblogin = "SELECT nom_utilisateur, mot_de_passe FROM base_de_donne_cv WHERE nom_utilisateur = ?";
$stmt = mysqli_prepare($connexion, $dblogin);
mysqli_stmt_bind_param($stmt, "s", $login);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $dbUsername, $dbPassword);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

// Vérification des informations de connexion
if(isset($validate)){
    if($login == "" || $password == ""){
        $error = "Veuillez renseigner tous les champs";
    }
    elseif($login == $dbUsername && password_verify($password, $dbPassword)){
        // Si les informations sont correctes, initialisation de la session et redirection
        $_SESSION["Se connecter"] = "Yes";
        $_SESSION['name'] = $dbUsername;
        header("location: ../Formulaire.php");
        exit();
    } 
    else {
        // En cas d'erreur dans les informations de connexion
        $error = "Mauvais login ou mauvais mot de passe.";
    }
}

// Fermeture de la connexion à la base de données
mysqli_close($connexion);
?>