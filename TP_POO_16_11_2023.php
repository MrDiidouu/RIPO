<?php

// Classe Personne
class Personne {
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function dormir() {
        return "dort à minuit.";
    }
}

// Classe Agriculteur
class Agriculteur extends Personne {
    public function dormir() {
        return "dort à 21h.";
    }
}

// Classe Infirmier
class Infirmier extends Personne {
    public function dormir() {
        return "dort à 23h.";
    }
}

// Classe Boulanger
class Boulanger extends Personne {
    public function dormir() {
        return "dort à 22h.";
    }
}

// Instanciation des objets
$agriculteur = new Agriculteur("Dupont", "Jean", 35);
$infirmier = new Infirmier("Martin", "Sophie", 28);
$boulanger = new Boulanger("Lefevre", "Pierre", 40);

// Écriture dans un fichier
$file = fopen("personnes.txt", "w");
fwrite($file, "Agriculteur: " . $agriculteur->dormir() . "\n");
fwrite($file, "Infirmier: " . $infirmier->dormir() . "\n");
fwrite($file, "Boulanger: " . $boulanger->dormir() . "\n");
fclose($file);

// Affichage du contenu du fichier
echo "Les informations ont été écrites dans le fichier 'personnes.txt'.";
?>
