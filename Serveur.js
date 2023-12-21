var express = require("express");
var app = express();

app.get("/", function (req, res){
    res.send("<html><button>Bonjour</button></html>");
})

app.listen(3300);
console.log("Serveur en marche");
