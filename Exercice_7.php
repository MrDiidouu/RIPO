<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transfert de fichier ZIP</title>
</head>
<body>
    <?php include_once('Menu.php') ?>
    <div class="consigne">
        <h1>Exercice 7 : </h1>
        <h2>Créez un formulaire n’effectuant que le transfert de fichiers ZIP et d’une taille limitée à 1 Mo. Le script affiche le nom du fichier du poste client ainsi que la taille du fichier transféré et la confirmation de réception.</h2>
    </div>
    <form action="Exercice_7.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> <!-- Limite de taille à 1 Mo (en octets) -->
        <label for="file">Sélectionnez un fichier ZIP (taille maximale : 1 Mo) :</label><br>
        <input type="file" id="file" name="file" accept=".zip"><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $targetDir = "../../../uploads/"; // Répertoire de destination pour les fichiers téléchargés
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $fileSize = $_FILES["file"]["size"];

    // Vérification si le fichier a été téléchargé avec succès
    if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        // Vérification que le fichier respecte la taille limite
        if ($fileSize <= 1048576) { // 1 Mo en octets (1 Mo = 1024 * 1024)
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                $fileType = mime_content_type($targetFile); // Obtenir le type MIME du fichier
                if ($fileType === 'application/zip') {
                    echo "Fichier reçu avec succès.";
                } else {
                    unlink($targetFile); // Supprimer le fichier téléchargé s'il n'est pas un fichier ZIP
                    echo "Le fichier n'est pas un fichier ZIP.";
                }
            } else {
                echo "Une erreur s'est produite lors de l'envoi du fichier.";
            }
        } else {
            echo "Le fichier dépasse la taille maximale autorisée.";
        }
    } else {
        // Gestion des erreurs de téléchargement
        switch ($_FILES["file"]["error"]) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "Le fichier téléchargé dépasse la taille maximale autorisée.";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "Le fichier n'a été que partiellement téléchargé.";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "Aucun fichier n'a été téléchargé.";
                break;
            default:
                echo "Une erreur inconnue s'est produite lors du téléchargement.";
                break;
        }
    }
} else {
    echo "Aucun fichier n'a été reçu.";
}
?>





</body>
</html>