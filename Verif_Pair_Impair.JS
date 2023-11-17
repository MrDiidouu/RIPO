let num = 15;

if (num % 2 === 0) {
    Verif15.textContent = num + " est un nombre pair.";
} else {
    Verif15.textContent = num + " est un nombre impair.";
}

var verif = document.getElementById("VerifInput");
var Verification = document.getElementById("Verif_pair_impair");
Verification.addEventListener('click', () => {
    var NumVerif = Number(verif.value);
    if (NumVerif % 2 === 0){
        ResultatVerif.textContent = NumVerif + " est un nombre pair";
    }else {
        ResultatVerif.textContent = NumVerif + " est un nombre impair";
    }
});
