:/*
MYsql et un sysyteme de gestion de bases de données relationnelles populaire utulisé pour stocker et recuper edes données. la gestion des utulisateuur dans MYsql est cruciale pour garantir et limiter l'aces aux données sensible.

Structure des utulisateurs

chaque utulisateur est identifié par un nom (uername) et associé a un hote (host) depuis lequel il peut se connecter.

La combinaison de l'utulisateur et de l'hote est unique.ADD

Gestion des utullisateurs
1. Création des utulisateurs

Pour créer un utilisateur, on utulise la commande
*/
create user 'nomutilisateur'@'hote' IDENTIFIED BY 'mot de passe';