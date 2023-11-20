// Déclaration de la variable 'num' et assignation de la valeur 15
let num = 15;

// Vérification si 'num' est pair ou impair et affichage du résultat
if (num % 2 === 0) {
    // Si 'num' est pair, afficher le message indiquant que c'est un nombre pair
    Verif15.textContent = num + " est un nombre pair.";
} else {
    // Si 'num' est impair, afficher le message indiquant que c'est un nombre impair
    Verif15.textContent = num + " est un nombre impair.";
}

// Récupération des éléments HTML nécessaires
var verif = document.getElementById("VerifInput");
var Verification = document.getElementById("Verif_pair_impair");

// Ajout d'un écouteur d'événements sur le bouton de vérification
Verification.addEventListener('click', () => {
    // Conversion de la valeur saisie en nombre
    var NumVerif = Number(verif.value);

    // Vérification si la valeur saisie est pair ou impair et affichage du résultat
    if (NumVerif % 2 === 0){
        // Si la valeur saisie est pair, afficher le message indiquant que c'est un nombre pair
        ResultatVerif.textContent = NumVerif + " est un nombre pair";
    } else {
        // Si la valeur saisie est impair, afficher le message indiquant que c'est un nombre impair
        ResultatVerif.textContent = NumVerif + " est un nombre impair";
    }
});
