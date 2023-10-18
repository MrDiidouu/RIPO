<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="StyleGrid.css">
    <title>Structure De Controle</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Accueil</a>
        </nav>
    </header>
    <main class="content">
        <h1>Test Bateaux</h1>
        <img src="../img/Bateau-Le-Belem.jpg" alt="" class="bateaux">
        <div class="pas_content">
        
            <?php
                $tarif = 2000;
                $remise = 0.05;

                $prix_net = $tarif*(1-$remise);
                echo $prix_net;

                if($prix_net > 1500 )
                    echo "<br> super cher";
                elseif($prix_net >= 1000)
                    echo "<br> acceptable";
                else
                    echo "<br> On signe où ?";



                $code_postal = "75000";
                if(substr($code_postal,0,2)=="45")
                    echo "Orléans";
                elseif(substr($code_postal,0,2)=="75")
                    echo "Paris";
                elseif(substr($code_postal,0,2)=="69")
                    echo "Lyon";
                elseif(substr($code_postal,0,2)=="29")
                    echo "Quimpère";
                elseif(substr($code_postal,0,2)=="94")
                    echo "Saint-Maurice";
                else
                    echo "Province";





                    echo "<br>";

                $code_Post = "29350";
                switch(substr($code_Post,0,2)){
                    case "69" :
                        echo "Lyon";
                        break;
                    case "33" :
                        echo "Bordeaux";
                        break;
                    case "31" :
                        echo "Toulouse";
                        break;
                    case "45" :
                        echo "Orléans";
                        break;
                    case "18" :
                        echo "Bourges";
                        break;
                    case "69" :
                        echo "Lyon";
                        break;
                    case "13" :
                        echo "Marseille";
                        break;
                    
                        default:
                        echo "ailleurs";
                    
                }


                
            ?>
        </div>
    </main>
    <footer>
        &copy; DWWM 2023
    </footer>
        
</body>
</html>