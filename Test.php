<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://diidou.web.app/Mimo/Image/Diidou2.png">
    <link rel="stylesheet" href="Test_Sass/Style.css">
    <link rel="stylesheet" href="Test_Sass/Style_Modal.css">
    <link rel="stylesheet" href="Sass/Police.css">
    <title>Menu</title>
</head>
<body>
    <header>
        <nav id="nav">
            <ul id="ul">
                <li><a href="Index.php">Accueil</a></li>
                <li><a href="Portofolio.php">Portofolio</a></li>
                <li><a href="Compétences.php">Compétences</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
            <ul id="input">
                <li class="droite first">
                    <input type="button" id="CNX" class="modal-btn-connexion modal-trigger-cnx" value="Se connecter"> <!-- trigger = déclencheur -->
                </li>
                <li class="droite second">
                    <input type="button" id="REG" class="modal-btn-register modal-trigger-REG" value="S'inscrire">
                </li>
            </ul>
        </nav>
    </header>
    
    <div class="modal-container-cnx body-modal-cnx"> <!--Englobe l'overlay et le conteneur modal -->
        <div class="overlay"></div> <!-- Overlay-->
        <div class="modal"> <!-- Sur l'Overlay on a la fenêtre modal-->
            <h1 id="modalTitle-cnx">Connexion</h1>
            <button class="close-modal modal-trigger-cnx">X</button>
            
            <div class="REG">
                <div>
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <button>Se connecter</button>
                <div class="modal-REG">Vous n'avez pas de compte ? <span class="span-REG">Inscription</span></div>
            </div>
            
        </div>
    </div>
    
    <div class="modal-container-REG body-modal-REG">
        <div class="overlay"></div>
        <div class="modal">
            <h1 id="modalTitle-REG">Inscription</h1>
            <button class="close-modal modal-trigger-REG">X</button>
            
            <div class="cnx">
                <div>
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div>
                    <label for="Confirm">Mot de passe :</label>
                    <input type="password" placeholder="Confirmation" name="Confirm">
                </div>
                <div>
                    <label for="mail">Mail :</label>
                    <input type="email" placeholder="Mail" name="mail">
                </div>
                <button>Inscription</button>
                <div class="modal-cnx">Déjà inscrit ? <span class="span-cnx">Connexion</span></div>
            </div>
            
        </div>
    </div>
     <script src="Script/Connexion.js"></script> 
</body>
</html>