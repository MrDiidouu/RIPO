// Ton tableau de fruits initial
var fruits = ["pomme", "orange", "banane"];

// Ajout du raisin au tableau fruits
fruits.push('raisin');

// Met à jour le contenu de la balise <p> avec le tableau fruits
AjoutRaisin.textContent = fruits.join(", ");

// Suppression d'un élément du tableau (ici, l'élément à l'index 3)
fruits.splice(3, 1);

// Récupère l'élément avec l'ID "AjoutTable"
var AjoutTable = document.getElementById("AjoutTable");

// Ajoute un écouteur d'événements pour le clic sur l'élément avec l'ID "AjoutTable"
AjoutTable.addEventListener("click", () => {
    // Récupère la valeur de l'input avec l'ID "Tableaux"
    var Ajout = document.getElementById("Tableaux");

    // Vérifie si l'élément "Tableaux" existe et que sa valeur n'est pas vide
    if (Ajout && Ajout.value.trim() !== "") {
        // Ajoute la valeur de l'input "Tableaux" au tableau nommé "fruits"
        fruits.push(Ajout.value);

        // Met à jour le contenu de l'élément avec l'ID "AjoutRaisin" pour afficher les éléments du tableau "fruits", séparés par des virgules
        AjoutDeDonnee.textContent = fruits.join(", ");
    }
});
