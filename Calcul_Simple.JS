var x = document.getElementById("Chiffre1");
var y = document.getElementById("Chiffre2");

var multiplication = document.getElementById("additionx2");
multiplication.addEventListener("click", () => {
    var modifierX = Number(x.value);
    var modifierY = Number(y.value);

    var multiX2 = (modifierX+ modifierY) *2;
    ResultatExo1.textContent = " On additionne x = "+modifierX.toFixed(0)+" + y = "+modifierY.toFixed(0)+" et on le multiplie par 2. Se qui donne ( "+modifierX.toFixed(0)+ " + "+modifierY.toFixed(0)+" ) x 2 = "+multiX2.toFixed(0);
});