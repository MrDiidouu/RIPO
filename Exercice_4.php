<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 4</title>
</head>
<body>
    <?php include_once('Menu.php'); ?>
    <div class="consigne">
        <h1>Exercice 4 : </h1>
        <h2>Comment faire en sorte que les données soient traitées par le même fichier que celui qui contient le formulaire ? Proposez deux solutions.</h2>  
    </div>
    <p> Soumettre vers le même fichier avec PHP </p>
    <p>En utilisant $_SERVER['PHP_SELF'] : <br>Modifiez l'attribut action du formulaire pour qu'il pointe vers $_SERVER['PHP_SELF']. Cela enverra le formulaire vers le même fichier PHP qui le contient.
    </p>
    <div class="pre">
    <pre><code><div class="pre-title"><h2>HTML</h2></div>
        &lsaquo;form method="post" action="&lsaquo;?php echo $_SERVER['PHP_SELF']; ?&rsaquo;"&rsaquo;
            &lsaquo;!-- Votre formulaire ici --&rsaquo;
        &lsaquo;/form&rsaquo;
        </code>
    </pre>
</div>
    

</body>
</html>