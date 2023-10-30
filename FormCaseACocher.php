<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once('entete.php');
    ?>
    <form action="" method="post">
        <input type="checkbox" name="fruit[]" value="Pomme"> Pomme <br>
        <input type="checkbox" name="fruit[]" value="Orange"> Orange <br>
        <input type="checkbox" name="fruit[]" value="Pamplemousse"> Pamplemousse<br>
        <input type="checkbox" name="fruit[]" value="Banane"> Banane<br>
        <input type="checkbox" name="fruit[]" value="Avocat"> Avocat<br>
        <input type="submit" value="Envoyer">
    </form>
    <!-- 
        Dans cet exemple, les cases à cocher ont le même nom 'Fruit'
    -->
    <?php 
    if (isset($_POST["fruit"])) {
        // Parcourir le tableau
        foreach($_POST["fruit"] as $value) {
            echo "Fruit sélectionné $value <br>";
        }
    }

    

    ?>
    <?php 
        include_once('footer.php');
    ?>
</body>
</html>