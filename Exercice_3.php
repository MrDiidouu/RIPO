<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        section{
            margin: auto;
            text-align: center;
            width:80vw;
        }
    </style>
</head>
<body>
    <?php include_once('Menu.php'); ?>
    <div>
        <div class="consigne">
            <h1>Exercice 3 : </h1>
            <h2>Le fichier suivant peut-il être enregistré avec l’extension .php ou .html ? Où se fait le traitement des données ?</h2>
        </div>
        <pre>
            <code>
                <?php
                    $code = '
                        <!DOCTYPE html>
                            <html lang="fr">
                                <head>
                                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                    <title>Insertion des données</title>
                                </head>
                                <body>
                                    <form method="post" action="ajout.php" >
                                    // Suite du formulaire
                                    </form>
                                </body>
                            </html>';
                    echo htmlspecialchars($code);
                ?>
            </code>
        </pre>
        <section>
            <p>Le code contient une structure HTML standard avec un formulaire qui pointe vers un fichier nommé "ajout.php" pour le traitement des données.</p>
        <p>Ce fichier HTML ne contient aucun code PHP directement dans son contenu. L'extension .php est généralement utilisée pour les fichiers qui contiennent du code PHP. Si vous voulez que le serveur interprète et exécute du code PHP dans un fichier, alors vous devez utiliser l'extension .php pour ce fichier.</p>
        <p>Le traitement des données se fait dans le fichier "ajout.php" mentionné dans l'attribut "action" du formulaire. C'est là que vous pourriez récupérer les données soumises par le formulaire à l'aide du code PHP et effectuer des actions telles que l'insertion dans une base de données ou tout autre traitement nécessaire.</p>
    </section>
        
    </div>
</body>
</html>
