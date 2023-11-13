<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "tRaNsfOrmEz uNe ChAîNe écRItEe dAns dEs cAsSeS dIfFéReNtEs";
    $str = ucwords(strtolower($str));
    echo $str;
    echo "<br><br>";
    
    
   
    $string = "PHP MySQL";
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        echo $string[$i] . PHP_EOL;
    }
    echo "<br><br>";

    
    $names = array("John Doe", "Alice Smith", "Bob Johnson");

    foreach ($names as $name) {
        $formatted = sprintf("%-20s%-20s%s\n", ...explode(' ', $name));
        echo $formatted;
    }
    echo "<br><br>";

    
    $str = "<form action=\"script.php\">";
    echo htmlspecialchars($str);
    echo "<br><br>";

    
    $var1 = "apple";
    $var2 = "banana";

    if (strcmp($var1, $var2) > 0) {
        echo "$var2, $var1";
    } else {
        echo "$var1, $var2";
    }
    echo "<br><br>";

   
    $text = "Ceci est un texte zut qui ne devrait pas être affiché. Un autre texte.";
    $censoredText = str_replace("zut", "", $text);
    echo $censoredText;
    echo "<br><br>";



    function validateUrl($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
    
    $url = "http://example.com";
    if (validateUrl($url)) {
        echo "L'URL est valide.";
    } else {
        echo "L'URL n'est pas valide.";
    }
    echo "<br><br>";



    $age = "25";
    if (preg_match('/^[0-9]{1,2}$/', $age) && $age < 100) {
        echo "L'âge est valide.";
    } else {
        echo "L'âge n'est pas valide.";
    }
    echo "<br><br>";





    $str = "PHP \n est meilleur \n que ASP \n et JSP \n réunis";
    // Méthode 1: Utiliser str_replace
    $newStr1 = str_replace('\n', '<br />', $str);
    echo $newStr1;
    
    // Méthode 2: Utiliser une expression régulière
    $newStr2 = preg_replace('/\\n/', '<br />', $str);
    echo $newStr2;
    ?>

</body>
</html>