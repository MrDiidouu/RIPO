<!DOCTYPE html>
<html>
<head>
    <title>Calcul de TVA</title>
</head>
<body>
<?php include_once('Menu.php') ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="prixHT">Prix HT :</label>
    <input type="number" id="prixHT" name="prixHT" step="0.01" value="<?php if(isset($_POST['prixHT'])) echo $_POST['prixHT']; ?>" required>
    <br>
    <label for="tauxTVA">Taux de TVA :</label>
    <input type="number" id="tauxTVA" name="tauxTVA" step="0.01" value="<?php if(isset($_POST['tauxTVA'])) echo $_POST['tauxTVA']; ?>" required>
    <br>
    <input type="submit" value="Calculer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prixHT = floatval($_POST['prixHT']);
    $tauxTVA = floatval($_POST['tauxTVA']);

    // Calcul de la TVA
    $montantTVA = $prixHT * ($tauxTVA / 100);

    // Calcul du prix TTC
    $prixTTC = $prixHT + $montantTVA;
    
    // Affichage des résultats
    echo "<br>";
    echo "<label for='montantTVA'>Montant de la TVA :</label>";
    echo "<input type='text' id='montantTVA' value='$montantTVA' readonly>";
    echo "<br>";
    echo "<label for='prixTTC'>Prix TTC :</label>";
    echo "<input type='text' id='prixTTC' value='$prixTTC' readonly>";
}
?>

</body>
</html>
